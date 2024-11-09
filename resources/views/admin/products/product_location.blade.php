<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Location Name</th>
        <th scope="col"></th>
        <th scope="col">Located on</th>
      </tr>
    </thead>
    <tbody>
        @foreach($locations as $location)
      <tr>
        <th scope="row">{{$location['location_rank']}}</th>
        <td>{{ $location['name'] }}</td>
        <td>@if($location['order']>0)  <a href="#" onclick="delete_from_location({{$location['id']}})">Remove from {{$location['order']}}</a> @endif</td>
        <td>


            <select name="order{{$location['id']}}" id="order{{$location['id']}}" class="form-control" onchange="get_location({{$location['id']}},this.value)">
                @if($location['order']==0)
                <option value="0" disabled selected>Select To Locate</option>
                      @for($i=$location['count']+1; $i>0;  $i--)
                        <option value="{{$i}}" > {{ $i}} </option>
                        @endfor
        
                    @else 
        
                     
                    @for($i=$location['count']; $i>0 ;  $i--)
                         <option value="{{$i}}" @if($location['order']==$i) selected @endif> {{ $i}} </option>
                     @endfor
                      
                @endif
        
              
            </select>

        </td>
      </tr>
      @endforeach
 
    </tbody>
  </table>
 
 
