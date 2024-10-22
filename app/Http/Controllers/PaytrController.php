<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PaytrController extends Controller
{
    protected $merchant_id = 'XXXXXX'; // Mağaza numarası
    protected $merchant_key = 'YYYYYYYYYYYYYY'; // Mağaza Parolası - Mağaza paneline giriş yaparak BİLGİ sayfasından alabilirsiniz.
    protected $merchant_salt = 'ZZZZZZZZZZZZZZ'; // Mağaza Gizli Anahtarı - Mağaza paneline giriş yaparak BİLGİ sayfasından alabilirsiniz.

    public function payment()
    {
        // todo : Validation rules should be updated
        Validator::make(request()->all(), [
            'name'=> ['required', 'string'],
            'lastname'=> ['required', 'string'],
            'address' => ['required', 'string'],
            'building' => ['required', 'string'],
            'city' => ['required', 'string'],
            'country' => ['required', 'string'],
            'postal_code' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
        ])->validate();
        
        $data = request()->all();
        $cart = [];

        # Sepet içerisindeki ürünlerin fiyatını hesaplıyoruz
        $total_amount = 0;
        if(Session::get('shoppingCart')){
            $cart = Session::get('shoppingCart')['data'];
            $finance = new FinanceController();
            foreach($cart as $item){
                $total_amount += $finance->calculateProductPrice($item['size']->id, $item['type']->id);
            }
            $total_amount *= 6 / 5;
        }
        else{
            return;
        }

        ## Kullanıcının IP adresi
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        $user_ip = $ip; // !!! Eğer bu kodu sunucuda değil local makinanızda çalıştırıyorsanız buraya dış ip adresinizi(https://www.whatismyip.com/) yazmalısınız.

        $merchant_oid = time(); //sipariş numarası: her işlemde benzersiz olmalıdır! Bu bilgi bildirim sayfanıza yapılacak bildirimde gönderilir.
        $email = $data['email']; // Müşterinizin sitenizde kayıtlı eposta adresi
        $payment_amount = $total_amount; //9.99 TL
        $payment_type = 'eft';
        $debug_on = 1; //hata mesajlarını ekrana bas

        ## İşlem zaman aşımı süresi - dakika cinsinden
        $timeout_limit = '30';

        ## Mağaza canlı modda iken test işlem yapmak için 1 olarak gönderilebilir
        $test_mode = 0;

        $hash_str = $this->merchant_id . $user_ip . $merchant_oid . $email . $payment_amount . $payment_type . $test_mode;
        $paytr_token = base64_encode(hash_hmac('sha256', $hash_str . $this->merchant_salt, $this->merchant_key, true));

        $post_vals = [
            'merchant_id' => $this->merchant_id,
            'user_ip' => $user_ip,
            'merchant_oid' => $merchant_oid,
            'email' => $email,
            'payment_amount' => $payment_amount,
            'payment_type' => $payment_type,
            'paytr_token' => $paytr_token,
            'debug_on' => $debug_on,
            'timeout_limit' => $timeout_limit,
            'test_mode' => $test_mode,
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.paytr.com/odeme/api/get-token');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_vals);
        curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);

        //XXX: DİKKAT: lokal makinanızda "SSL certificate problem: unable to get local issuer certificate" uyarısı alırsanız eğer
        //aşağıdaki kodu açıp deneyebilirsiniz. ANCAK, güvenlik nedeniyle sunucunuzda (gerçek ortamınızda) bu kodun kapalı kalması çok önemlidir!
        //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $result = @curl_exec($ch);

        if (curl_errno($ch)) {
            die('PAYTR EFT IFRAME connection error. err:' . curl_error($ch));
        }
        curl_close($ch);

        $result = json_decode($result, 1);

        /*
        Başarılı yanıt örneği: (token içerir)
        {"status":"success","token":"28cc613c3d7633cfa4ed0956fdf901e05cf9d9cc0c2ef8db54fa"}
        
        Başarısız yanıt örneği:
        {"status":"failed","reason":"Zorunlu alan degeri gecersiz: merchant_id"}
        */

        if ($result['status'] == 'success') {
            $token = $result['token'];
        } else {
            die('PAYTR EFT IFRAME failed. reason:' . $result['reason']);
        }
    }

    public function paymentNotification()
    {
        $data = request()->all();
        $hash = base64_encode(hash_hmac('sha256', $data['merchant_oid'] . $this->merchant_salt . $data['status'] . $data['total_amount'], $this->merchant_key, true));
        if ($hash != $data['hash']) {
            die('PAYTR notification failed: bad hash');
        }

        if ($data['status'] == 'success') {
            ## Ödeme Onaylandı
            ## Mail Gönderilecek
        } else {
            ## Ödemeye Onay Verilmedi
        }

        ## Bildirimin alındığını PayTR sistemine bildir.
        echo 'OK';
        exit();
    }
}
