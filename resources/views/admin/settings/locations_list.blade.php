

<div class="center-flex "  >


    <table class="table table-bordered">

        <thead>
           
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Title</th>
            <th scope="col">Order</th>
            <th scope="col">Show</th>
            <th scope="col">Has Products</th>

           

 
          </tr>
        </thead>
        <tbody>

            @foreach($locations as $location)
          <tr>
            <td>{{$location['name']}}</td>
            <td>

              <div class="input-group">
                <input type="text" name="title{{$location['id']}}" id="title{{$location['id']}}"  value="{{$location['title']}}" class="form-control">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button" onclick="updateTitle({{$location['id']}})"><i class="fa-solid fa-pen-to-square"></i></button>
                </div>
            </div>

            </td>
            <td  style="width: 10%">
                <select name="order{{$location['id']}}" id="order{{$location['id']}}" class="form-control" onchange="change_rank({{$location['id']}},this.value)">
                @for($i=1;$i<$locations_count+1;$i++)
                    <option value="{{$i}}" @if($location['rank']==$i) selected @endif>{{$i}}</option>
                @endfor
                
                </select>
                
            
            
            </td>
           
            <td>
                <input type="checkbox" name="show{{$location['id']}}" id="show{{$location['id']}}" onclick="change_show({{$location['id']}})" @if($location['show']) checked @endif>

            </td>

        
            <td>
                <input type="checkbox" name="pr{{$location['id']}}" id="pr{{$location['id']}}" onclick="change_has_products({{$location['id']}})" @if($location['has_products']) checked @endif>
            </td>

          </tr>
          @endforeach

        </tbody>
      </table>


        </div>
