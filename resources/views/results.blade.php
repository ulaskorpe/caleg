<table style="width: 100%;vertical-align:top">
<tr><td> <b>{{$table}} :: {{$key}}</b></td></tr>

<tr><td>
 @foreach($results as $res)

  @php
    echo $res;
  @endphp
@endforeach
</td></tr>
</table>


