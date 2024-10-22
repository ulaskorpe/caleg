<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">

    @foreach($posts as $product)
    <tr><td>{{$product['item_id']}}</td><td>{{$product['title']}}</td></tr>
    <tr><td style="width: 30%;vertical-align: top;">

        <table><tr><td colspan="3">METADATA</td></tr>
            @foreach($product['meta_data'] as $md)
            <tr><td>{{$md['meta_id']}}</td><td>{{$md['meta_key']}}</td><td>{{$md['meta_value']}}</td></tr>
            @endforeach
        </table>
    </td>

    <td style="vertical-align: top;">
        <table border="1"><tr><td colspan="3">VARIANTS</td></tr>

            @foreach($product['variants'] as $var)
            <tr><td style="vertical-align: top;">{{$var['var_id']}}</td><td style="vertical-align: top;">{{$var['var_title']}}</td>

                <td>

        <table><tr><td colspan="3">METADATA</td></tr>
            @foreach($var['meta_data'] as $md)
            <tr><td>{{$md['meta_id']}}</td><td>{{$md['meta_key']}}</td><td>{{$md['meta_value']}}</td></tr>
            @endforeach
        </table>


            </td></tr>
            @endforeach

        </table>

    </td>
</tr>

    @endforeach
</table>
</body>
</html>
