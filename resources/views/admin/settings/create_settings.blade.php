 

<div class="center-flex "  >


    <table class="table table-bordered">

     
        <tbody>
            <tr><td>
                
                
<form class="forms-sample" action="#" id="setting-form" method="POST" onsubmit="return false"
enctype="multipart/form-data" >
<div class="row "  >

    <input type="hidden" name="id" value="0" id="id">

<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">

<div class="col-md-3">
    <input type="text" class="form-control" name="key" id="key" placeholder="Anahtar Değeri">

</div>
<div class="col-md-3">
    <input type="text" class="form-control" name="value" id="value" placeholder="Değer">
    <input type="file" class="form-control" name="image" id="image" placeholder="Değer" style="display: none">

</div>

 
<div class="col-md-3">
 <select name="type" id="id" onchange="typeChange()" class="form-control">
    <option value="text">Metin</option>
    <option value="image">Dosya</option>
    </select>
</div>
<div class="col-md-3">

    <button class="btn btn-outline-primary submit"  onclick="formSubmit()" id="submit_button"
    class="btn btn-primary"
        type="submit">Create</button>

</div>
</div>



</form>
            </td></tr>
           
        </tbody>
      </table>


        </div>

 
