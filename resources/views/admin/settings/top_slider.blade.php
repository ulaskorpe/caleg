
    @if($submit_form)

    <form class="forms-sample" action="{{ route('admin.updatehomesettings.slider') }}" id="top-slider-form" method="POST"
        enctype="multipart/form-data" >

        @else
        <form class="forms-sample" action="#"  id="top-slider-form" method="POST" onsubmit="return false"
        enctype="multipart/form-data" >

        @endif



    @csrf

    <input type="hidden" name="location" value="top">

    <div class="row mb-3   border justify-content-center"
        style="border-radius: 25px; border-color: lightgray !important; padding: 2%;">
        <div class="col-md-6 stretch-card text-center">
            <div class="card">
                <div class="card-body">
                    <input class="mt-5" type="file" name="image"
                        id="top_slider_image" accept="image/*"
                        style="cursor: pointer !important;" />
                </div>

                <div class="col-6" id="preview_pic" style="display: none">
                    <img id="previewImage" src="#" alt="Preview Image"
                    style="max-width: 300px">
                </div>
            </div>
        </div>

        <div class="col-md-6 mt-3">


            <label class="form-label mt-3">{{ __('Title') }}:</label>
            <input class="form-control mb-4 mb-md-0" name="title"
                placeholder="{{ __('Enter Title') }}" id="top_slider_title" />
                <label class="form-label">{{ __('Subtitle') }}:</label>
                <input class="form-control mb-4 mb-md-0" name="subtitle"
                    placeholder="{{ __('Enter Subtitle') }}" id="top_slider_subtitle" />
                <label class="form-label">{{ __('order') }}:</label>
                <select class="form-control mb-4 mb-md-0" name="order"
                    id="top_order" />
                @for($i=1;$i<$topCount+1;$i++)
                    <option value="{{$i}}"> {{$i}} </option>
                @endfor
                </select>

            <label class="form-label mt-3">{{ __('Description') }}:</label>
            <input class="form-control mb-4 mb-md-0" name="description"
                placeholder="{{ __('Enter Description') }}" id="top_lider_description" />


            <label class="form-label mt-3">{{ __('Button Text') }}:</label>
            <input class="form-control mb-4 mb-md-0" name="button_text"
                placeholder="{{ __('Enter Button Text') }}" id="top_slider_button_text" />


            <label class="form-label mt-3">{{ __('Button Link') }}:</label>
            <input class="form-control mb-4 mb-md-0" name="button_link"
                placeholder="{{ __('Enter Button Link') }}" id="top_slider_button_link" />
        </div>

        <div class="text-center mt-5">

            @if(!$submit_form)
            <button class="btn btn-outline-primary" id="top_slider_btn" @if(!$submit_form) onclick="topformSubmit()" @endif
                type="submit">{{ __('Add Top Slider') }}</button>
                @else
                <button type="submit">SEND</button>
                @endif
        </div>
    </div>

</form>
<hr class="mt-5">
<label for="" class="form-label" style="font-weight: 600;">
    CURRENT SLIDERS
</label>
<div class="col-md-12">
    @foreach ($top_sliders as $slider)
        <hr>
        <div class="row">
            <div class="col-md-4">
                <img src=" {{ url('assets/images/slider/'.$slider['image'])  }} " style="max-height: 100px"
                    alt="slider_image" style="width: 80%; background: #fff !important;">
            </div>
            <div class="col-md-2">
                <p>{{ $slider['order'] }} . {{ $slider['title'] }}</p>
            </div>
            <div class="col-md-2">
                <p>{{ $slider['description'] }}</p>
            </div>
            <div class="col-md-4">
                <a href="#" onclick="deleteSlide({{$slider['id']}})"
                    class="btn btn-danger">Delete</a>
            </div>
        </div>
    @endforeach
</div>
