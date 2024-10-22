<div class="row mb-3" style="background: #f3f3f3">
    @foreach($files as $file)
    <div class="col-md-3 align-items-center justify-content-center">
    <img src="{{url('assets/products/'.$slug.'/'.$file['filename'])}}" alt="{{$file['filename']}}" style="max-width: 200px">
    <br>
    @if($main_file !=$file['filename'])
    {{$file['size']}} <br>

    <button type="button" class="btn btn-danger" onclick="delete_img('{{$file['filename']}}')"><i class="fa-solid fa-trash-can"></i></button>
    @endif
    </div>
    @endforeach
</div>
