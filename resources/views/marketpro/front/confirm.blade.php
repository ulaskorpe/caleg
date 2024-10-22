@extends('marketpro.main_layout')

@section('content')
<div class="container-fluid">
    <div class="row px-xl-5 p-5" style="height: 350px">
        
        <div class="container-lg mt-5 text-center pt-5 bg-secondary text-white rounded shadow"  ><h3>{{$msg}}</h3>
        
           

            <button   onclick="window.open('/','_self')" class="btn btn-main py-18 px-40">Devam &gt;</button>
        </div>     
    </div>
</div>
    
 @endsection


 @section('scripts') 
 @endsection
 