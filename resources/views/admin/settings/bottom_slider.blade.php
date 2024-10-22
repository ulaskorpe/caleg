
@if($submit_form)

<form class="forms-sample" action="{{ route('admin.updatehomesettings.slider') }}" id="bottom-slider-form" method="POST"
    enctype="multipart/form-data" >

    @else
    <form class="forms-sample" action="#"  id="bottom-slider-form" method="POST" onsubmit="return false"
    enctype="multipart/form-data" >

    @endif



@csrf

<input type="hidden" name="location" value="bottom">
<input type="hidden" name="title" value="bottom">
<input type="hidden" name="subtitle" value="bottom">

<div class="row mb-3   border justify-content-center"
    style="border-radius: 25px; border-color: lightgray !important; padding: 2%;">
    <div class="col-md-6 stretch-card text-center">
        <div class="card">
            <div class="card-body">
                <input class="mt-5" type="file" name="image"
                    id="bottom_slider_image" accept="image/*"
                    style="cursor: pointer !important;" />
            </div>

            <div class="col-6" id="preview_pic_2" style="display: none">
                <img id="bttpreviewImage" src="#" alt="Preview Image"
                style="max-width: 300px">
            </div>
        </div>
    </div>

    <div class="col-md-6 mt-3">



            <label class="form-label">{{ __('order') }}:</label>
            <select class="form-control mb-4 mb-md-0" name="order"
                id="bottom_order" />
            @for($i=1;$i<$bottomCount+1;$i++)
                <option value="{{$i}}"> {{$i}} </option>
            @endfor
            </select>


    </div>

    <div class="text-center mt-5">

        @if(!$submit_form)
        <button class="btn btn-outline-primary" id="bottom_slider_btn" @if(!$submit_form) onclick="bottomformSubmit()" @endif
            type="submit">{{ __('Add Bottom Slider') }}</button>
            @else
            <button type="submit">SEND</button>
            @endif
    </div>
</div>

</form>
<hr class="mt-5">
<label for="" class="form-label" style="font-weight: 600;">
CURRENT Bottom SLIDERS
</label>
<div class="col-md-12">

    <hr>
    <div class="row">
        @foreach ($bottom_sliders as $slider)
        <div class="col-md-2">
            <img src=" {{ url('assets/images/slider/'.$slider['image'])  }} " style="max-height: 100px"
                alt="slider_image" style="width: 80%; background: #fff !important;">
                <br>
                <a href="#" onclick="deleteSlide({{$slider['id']}})"
                class="btn btn-danger">Delete</a>
        </div>
        @endforeach
    </div>

</div>
