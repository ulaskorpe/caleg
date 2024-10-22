<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table style="width: 100%" border="1">
        <tr>
            <td style="width: 20%">
                <table>
                @foreach($tables as $t)
                <tr><td>
                <a href="#" onclick="get_results('{{$t['table']}}')">{{$t['table']}} ({{$t['count']}})</a>
            </td></tr>
                @endforeach
            </table>
            </td>
            <td style="vertical-align: top">
                <div id="search_results"></div>
            </td>
        </tr>

    </table>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>



<script>
        function get_results(table){


            $.get( "{{url('/transfer/results')}}/"+table+"/{{$key}}", function( data ) {
                    $( "#search_results" ).html( data );

                    });
        }
    </script>
</body>
</html>
