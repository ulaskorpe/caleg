@if (!empty($location))


    <select class="form-select" id="order"
        name="order"
        data-width="100%"  >
        @for($i=1;$i<$last;$i++)
      <option value="{{$i}}">{{$i}}</option>
      @endfor

    </select>

@else


    <select class="form-select" id="order" disabled
        name="order"
        data-width="100%"  >
      <option value="0">Seçiniz</option>

    </select>

@endif
