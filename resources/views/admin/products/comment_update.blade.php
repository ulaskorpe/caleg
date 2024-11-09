<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">{{ __('Update Comment') }}  
                    <br>
                    {{$comment->product()->first()->name}} 
                    <br>
                    <a href="#" onclick="show_data({{$page}},{{$product_id}})">Back</a></h6>

                @if($submit_form)
                <form class="forms-sample" action="{{ route('admin.product.comments.update.post') }}" id="comment-form-submit" method="POST"
                    enctype="multipart/form-data" >

                    @else
                    <form class="forms-sample" action="#" id="comment-form-submit" method="POST" onsubmit="return false"
                    enctype="multipart/form-data" >
                    @endif


                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="id" id="id" value="{{ $comment['id']}}">
                    <input type="hidden" name="product_id" id="product_id" value="{{ $product_id}}">
                    <input type="hidden" name="page" id="page" value="{{$page}}">

                    <div class="row mb-3 mt-5 border justify-content-center"
                        style="border-radius: 25px; border-color: lightgray !important; padding: 2%;">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-md-6 mt-3">
                                            <label class="form-label">{{ __('Writer') }}*</label>
                                            <div class="row">
                                                <div class="col-10">
                                                    {{$comment['name']}}
                                                </div>
                                            </div>

                                        </div>



                                     
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12 mt-3">
                                            <label class="form-label">{{ __('Title') }}*</label>
                                            <div class="row">
                                                <div class="col-10">
                                                    <input class="form-control mb-4 mb-md-0 col-6"
                                                        name="title" id="title" value="{{$comment['title']}}"
                                                        
                                                         />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mt-3"  >
                                            <label class="form-label">{{ __('Rating') }}*</label>
                                            <div class="row">
                                                <div class="col-10" style="height: 100% !important">
                                                    <div>
                                                        {{$comment['rating']}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
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
                                                           @if($comment['status']==1)  checked @endif>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 

                                    <div class="row mb-3">
                                        <div class="col-md-12 mt-3">
                                            <label class="form-label">{{ __('Comment') }}</label>
                                            <div class="row">
                                                <div class="col-12">
                                                    <textarea class="form-control" name="comment"  rows="5">{{$comment['comment']}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <button class="btn btn-outline-primary submit"  @if(!$submit_form) onclick="updateComment()" @endif id="submit_button"
                            class="btn btn-primary"
                                type="submit">{{ __('Update Comment') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

