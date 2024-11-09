

<div class="center-flex "  >


    <table class="table table-bordered">

        <thead>
            <tr><td colspan="5">    @include("admin.partials.pagination")</td></tr>
          <tr>
            <th scope="col">Key</th>
            <th scope="col">Value/th>

           


            <th scope="col">#</th>
          </tr>
        </thead>
        <tbody>

            @foreach($settings as $setting)
          <tr>
            <td>{{$setting['key']}}</td>
            <td  style="width: 10%">
                @if($setting['type'] == 'image')
                <img src="{{url('assets/images/site_data/'.$setting['value'])}}" alt="{{$setting['key']}}"  >
                    @else 

                    {{$setting['value']}}
                @endif
            </td>
           


        
            <td>
                <button type="button" class="btn btn-primary" onclick="update_setting({{$setting['id']}}) "><i class="fa-solid fa-pen-to-square"></i></button>
                <button type="button" class="btn btn-danger" onclick="delete_setting({{$setting['id']}},{{$page}})"><i class="fa-solid fa-trash-can"></i></button>
            </td>

          </tr>
          @endforeach

        </tbody>
      </table>


        </div>
