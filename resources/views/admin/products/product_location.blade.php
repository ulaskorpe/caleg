<div class="row mb-3"  >

    <div class="col-md-3 align-items-center justify-content-center">
        <label class="form-label">{{ __('Konum') }}  {{$selected_location}} </label>
        <select name="location" id="location" class="form-control" onchange="get_location(this.value)">
            <option value="none">Seçiniz</option>
            @foreach ($locations as  $value)
            <option valıue="{{$value}}" @if($selected_location==$value) selected @endif >  {{$value}}</option>
        @endforeach
        </select>



    </div>
    <div class="col-md-3 align-items-center justify-content-center">
        <label class="form-label">{{ __('Sıra') }}  </label>
        <select name="order" id="order" class="form-control" @if($count == 0) disabled @endif>

            @for( $i = $count ; $i>0;$i--)
            <option value="{{$i}}" @if($order==$i) selected @endif>{{$i}}</option>

            @endfor
        </select>



    </div>
</div>
