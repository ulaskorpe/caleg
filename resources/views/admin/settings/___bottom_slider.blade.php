<form class="forms-sample" action="{{ route('admin.updatehomesettings.bottom_slider') }}"
method="POST" enctype="multipart/form-data" id="szform">
@csrf

<div class="row mb-3 mt-5 border justify-content-center"
    style="border-radius: 25px; border-color: lightgray !important; padding: 2%;">
    <div class="col-md-6 stretch-card text-center">
        <div class="card">
            <div class="card-body">
                <input class="mt-5" type="file" name="bottom_slider_image" id="bottom_slider_image"
                    accept="image/*" style="cursor: pointer !important;" />
            </div>

            <div class="col-6" id="preview_pic_2" style="display: none">
                <img id="bttpreviewImage" src="#" alt="Preview Image"
                style="max-width: 300px">
            </div>
        </div>
    </div>
</div>

<div class="text-center mt-5">
    <button class="btn btn-outline-primary"
        type="submit">{{ __('Add Bottom Slider') }}</button>
</div>

</form>

<hr class="mt-5">
<label for="" class="form-label" style="font-weight: 600;">
CURRENT BOTTOM SLIDERS
</label>
<div class="col-md-12">
@foreach ($data['Home_Settings']->bottom_slider['content'] as $key => $slider)
    <hr>
    <div class="row">
        <div class="col-md-4">
            <img src=" {{ asset('assets/images/slider/') . '/' . preg_replace('/"/', '', json_encode($slider['image'])) }} "
                alt="bottom_slider_image"
                style="width: 80%; background: #fff !important;">
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <a href="{{ route('admin.deletehomesettings.slider_bottom', $key) }}"
                class="btn btn-danger">Delete</a>
        </div>
    </div>
@endforeach
</div>
