<?php

use App\Http\Controllers\TransferController;
use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\UserController;

require __DIR__ . '/admin.php';
//require __DIR__ . '/user.php';
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



 Route::get('/check-email/{email}',[UserController::class, 'email_check'])->name('email-user-check');
 Route::get('/email-exists/{email}',[UserController::class, 'email_exists'])->name('email-exists-check');
// Route::get('/check-username/{username}',[UserController::class, 'username_check'])->name('username-check');
// Route::get('/check-phone/{phone_number}',[UserController::class, 'phone_check'])->name('phone-check');
 Route::post('/register_user',[UserController::class, 'register_user'])->name('register_user');
 Route::post('/login_user',[UserController::class, 'login_user'])->name('login_user');
 Route::post('/logout_user',[UserController::class, 'logout'])->name('logout_user');
 Route::post('/forget-pw-post',[UserController::class, 'forget_pw_post'])->name('forget_pw_post');
 Route::post('/newsletter-post',[UserController::class, 'newsletter_post'])->name('newsletter_post');

Route::group(['middleware' => 'siteData' ], function () {
    Route::get('/confirm/{token?}',[UserController::class, 'confirm_user'])->name('confirm_user');
    Route::get('/giris',[ UserController::class, 'login'])->name('user-login');
     Route::get('/kayit-ol',[ UserController::class, 'register'])->name('user-register');
     Route::get('/sifremi-unuttum',[UserController::class, 'forget_password'])->name('user-forget-pw');
  
// PAGES
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/data', [App\Http\Controllers\HomeController::class, 'data'])->name('data');
Route::get('/shop/{slug?}', [App\Http\Controllers\HomeController::class, 'shop'])->name('shop');
Route::get('/product/{slug}/{category_slug}', [App\Http\Controllers\HomeController::class, 'product'])->name('product');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/page/{slug}', [App\Http\Controllers\PagesController::class, 'index'])->name('page');
Route::get('/cart', [App\Http\Controllers\HomeController::class, 'cart'])->name('cart');
Route::get('/checkout', [App\Http\Controllers\HomeController::class, 'checkout'])->name('checkout');
Route::post('/payment', [App\Http\Controllers\PaytrController::class, 'payment'])->name('payment');
});
// SHOPPING
Route::get('/clear-shopping-cart', [App\Http\Controllers\CheckOutController::class, 'clearShoppingCart'])->name('clear-shopping-cart');
Route::get('/update-shopping-cart/{product_slug}/{type_id}/{size_id}/{quantity}', [App\Http\Controllers\CheckOutController::class, 'updateShoppingCart'])->name('update-shopping-cart');
Route::get('/remove-shopping-cart/{product_slug}/{type_id}/{size_id}', [App\Http\Controllers\CheckOutController::class, 'removeShoppingCart'])->name('remove-shopping-cart');
Route::post('/put-shopping-cart/{product_slug}', [App\Http\Controllers\CheckOutController::class, 'putShoppingCart'])->name('put-shopping-cart');

// MAILS
Route::get('/testmail', [App\Http\Controllers\HomeController::class, 'contactTestQue'])->name('testmail'); // TESTING
Route::group(['prefix' => 'mail'], function () {
    Route::get('/contact', [App\Http\Controllers\MailController::class, 'ContactMail'])->name('mail.contact');
    Route::get('/payment-response', [App\Http\Controllers\MailController::class, 'PaymentResponseMail'])->name('mail.payment.response');
});



//transfer

Route::group(['prefix' => 'transfer'], function () {
    Route::get('/post-meta', [TransferController::class,'post_meta'])->name('post-meta');
    Route::get('/posts', [TransferController::class,'posts'])->name('posts');
    Route::get('/table-columns/{key?}', [TransferController::class,'table_columns'])->name('table-columns');
    Route::get('/results/{table}/{key}', [TransferController::class,'show_results'])->name('show-results');
    Route::get('/show-files', [TransferController::class,'show_files'])->name('show-files');

});
