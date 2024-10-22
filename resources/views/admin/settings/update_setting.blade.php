 

<div class="center-flex "  >


    <table class="table table-bordered">

     
        <tbody>
            <tr><td>
                
@if(false)                
<form class="forms-sample" action="{{route('admin.general.settings.create.post')}}" id="setting-form" method="POST"  
enctype="multipart/form-data" >
@else
<form class="forms-sample" action="#" id="setting-form" method="POST"  onsubmit="return false"
enctype="multipart/form-data" >

@endif
<div class="row "  >

<input type="hidden" name="id" value="{{$setting['id']}}" id="id">

<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">

<div class="col-md-3">
    <input type="text" class="form-control" name="key" id="key" placeholder="Anahtar Değeri" value="{{$setting['key']}}">

</div>
<div class="col-md-3">
    @if($setting['type']=='text')
    <input type="text" class="form-control" name="value" id="value" placeholder="Değer" value="{{$setting['value']}}">
    @else
    <input type="file" class="form-control" name="image" id="image" placeholder="İmage" >

    <img src="{{url('assets/images/site_data/'.$setting['value'])}}" alt="{{$setting['key']}}"  >
    @endif

</div>

 
<div class="col-md-3">
 <select name="type" id="id"  disabled class="form-control">
    <option value="text" @if($setting['type']=='text') selected @endif>text</option>
    <option value="image" @if($setting['type']=='image') selected @endif>image</option>
    </select>
</div>
<div class="col-md-3">

    <button class="btn btn-outline-primary submit"  onclick="formSubmit()" id="submit_button"
    class="btn btn-primary"
        type="submit">Update</button>

</div>
</div>



</form>
            </td></tr>
           
        </tbody>
      </table>


        </div>

 
