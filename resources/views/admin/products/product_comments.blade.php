   
        <table class="table table-bordered"  >
            <thead>
                @if($product_id>0)
                <tr><td colspan="5">  <a href="#" onclick="show_data('/admin/products/comments/0/0','comment_list');">Back</a></td></tr>
                @endif
                <tr><td colspan="5">    @include("admin.products.product_comment_pagination")</td></tr>
              <tr>

                <th scope="col">Product</th>

                <th scope="col">Comment</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>


                <th scope="col">#</th>
              </tr>
            </thead>
            <tbody>

                @foreach($comments as $comment)
              <tr>
                <td  style="width: 10%">
                <a href="#" onclick="show_data('/admin/products/comments/0/{{$comment->product()->first()->id}}','comment_list')">{{substr($comment->product()->first()->name,0,50)}}</a>
                </td>
                <td>
                    {{$comment['name']}}  <br>
                    {{substr($comment['title'],0,50)}}
                </td>
<td>
  {{\Carbon\Carbon::parse($comment['created_at'])->format('d.m.Y H:i')}}
            </td>
                <td>
                    @if($comment['status'])
                   <a href="#" onclick="delete_status({{$comment['id']}},{{$page}},0,{{$product_id}})"> <i class="fa-regular fa-circle-check"></i></a>
                    @else
                    <a href="#" onclick="delete_status({{$comment['id']}},{{$page}},1,{{$product_id}})"><i class="fa-regular fa-circle-xmark"></i></a>
                    @endif

                </td>
                <td>
                    <button type="button" class="btn btn-primary" onclick="update_comment({{$comment['id']}},{{$page}},{{$product_id}})"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger" onclick="delete_status({{$comment['id']}},{{$page}},3,{{$product_id}})"><i class="fa-solid fa-trash-can"></i></button>
                </td>

              </tr>
              @endforeach
              
            </tbody>
          </table>
 
