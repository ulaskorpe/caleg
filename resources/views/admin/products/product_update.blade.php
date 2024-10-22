@if($submit_form)

<form class="forms-sample" action="{{route('admin.product.update')}}" id="prodsssuct-form-submit" method="POST"
    enctype="multipart/form-data" >
    @else
    <form class="forms-sample" action="#" id="product-form" method="POST" onsubmit="return false"
    enctype="multipart/form-data" >
    @endif
<input type="hidden" name="id" id="id" value="{{$product['id']}}">
<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">


    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6 mt-3">
                        <label class="form-label">{{ __('Product Name') }}*</label>
                        <div class="row">
                            <div class="col-10">
                                <input class="form-control mb-4 mb-md-0 col-6"
                                    name="name" id="name" onchange="make_slug()" value="{{$product['name']}}"
                                    placeholder="{{ __('Enter Product Name') }}"
                                       />
                            </div>
                        </div>

                    </div>



                    <div class="col-md-6 mt-3">
                        <label class="form-label">{{ __('Slug') }}*</label>
                        <div class="row">
                            <div class="col-10">
                                <span id="slug-span">{{$product['slug']}}</span>
                                <input type="hidden" id="slug" name="slug" placeholder="Text" value="{{$product['slug']}}"
                                class="form-control">
                                @if(false)
                                <input class="form-control mb-4 mb-md-0 col-6"
                                    name="slug"
                                    placeholder="{{ __('Product Slug') }}"
                                    value="product-{{ Str::random(3) . substr(time(), 6, 8) . Str::random(3) }}"
                                      />
                                     @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6 mt-3">
                        <label class="form-label">{{ __('Title') }}*</label>
                        <div class="row">
                            <div class="col-10">
                                <input class="form-control mb-4 mb-md-0 col-6"
                                    name="title" id="title" value="{{$product['title']}}"
                                    placeholder="{{ __('Enter Product Title') }}"
                                     />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3"  >
                        <label class="form-label">{{ __('Price') }}*</label>
                        <div class="row">
                            <div class="col-10" style="height: 100% !important">
                                <div>
                                    <input name="price" id="price"  value="{{$product['price']}}"
                                        class="form-control mb-4 mb-md-0 col-6"
                                        placeholder="{{ __('Enter Product Price') }}"
                                        value="0"
                                         />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12 mt-5">
                        <div class="row">
                            <div class="col-6">
                                <label
                                class="form-label row">&nbsp;&nbsp;{{ __('Photo') }}*</label>
                            <input type="file" name="photo" id="photo"
                                style="cursor: pointer !important;"   />
                            </div>

                            @if(!empty($product['thumbnail']))
                            <div class="col-6" id="preview_pic"  >
                                <img id="previewImage" src="{{url('assets/products/'.$product['slug'].'/'.$product['thumbnail'])}}" alt="Preview Image"
                                style="max-width: 300px">
                            </div>
                            @else
                            <div class="col-6" id="preview_pic"  style="display: none">
                                <img id="previewImage" src="#" alt="Preview Image"
                                style="max-width: 300px">
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <a name="location" onclick="get_location()" href="#location">Location</a>
                <div id="product_locations"></div>
                <div class="row mb-3">
                    <div class="col-md-12 mt-5">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label row">
                                    &nbsp;&nbsp;{{ __('Status') }}*
                                </label>
                                <div class="input-group form-check form-switch">
                                    <input name="status" type="checkbox"
                                        style="cursor: pointer" class="form-check-input"
                                        checked>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12 mt-5">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label">{{ __('Types') }}*  {{$product['type_id']}}</label>
                                <select class="js-example-basic-multiple form-select" id="type_id"
                                    name="type_id[]" multiple="multiple"
                                    data-width="100%"  >
                                    @foreach ($types as $type)
                                        <option value="{{ $type['id'] }}"  @if(in_array($type['id'],$types_array)) selected @endif>
                                            {{ $type['name'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6">
                                <label
                                    class="form-label">{{ __('Categories') }}* </label>
                                <select class="js-example-basic-multiple form-select" id="category_id"
                                    name="category_id[]" multiple="multiple"
                                    data-width="100%"  >
                                    @foreach ($categories as $category)
                                        <option value="{{ $category['id'] }}"  @if(in_array($category['id'],$categories_array)) selected @endif>
                                            {{ $category['name'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12 mt-3">
                        <label class="form-label">{{ __('Description') }}</label>
                        <div class="row">
                            <div class="col-12">
                                <textarea class="form-control" name="description" id="tinymceExample" rows="5">{{$product['description']}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <button class="btn btn-outline-primary submit" @if(!$submit_form) onclick="formSubmit()" @endif id="submit_button"
                    class="btn btn-primary"
                        type="submit">{{ __('Update Product') }}</button>
                </div>
            </div>
        </div>
    </div>

</div>
</form>
