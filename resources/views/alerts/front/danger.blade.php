@if (Session::has('danger'))
    <div class="alert alert-danger alert-dismissible validation">    
        <button type="button" class="close alert-close">&times;</button>
        <ul class="text-left">
            <li>{{Session::get('danger')}}</li>
        </ul>
    </div>
@endif