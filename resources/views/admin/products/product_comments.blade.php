

<div class="center-flex "  >


        <table class="table table-bordered">

            <thead>
                <tr><td colspan="5">    @include("admin.products.product_comment_pagination")</td></tr>
              <tr>
                <th scope="col"></th>
                <th scope="col">Ürün Adı</th>

                <th scope="col">fs</th>


                <th scope="col">#</th>
              </tr>
            </thead>
            <tbody>

                @foreach($comments as $comment)
              <tr>
                <td  style="width: 10%">
                    @if($comment['thumbnail'] && $comment['thumbnail']!='thumb')
                    <img src="{{url('assets/comments/'.$comment['slug'].'/'.$comment['thumbnail'])}}" alt="{{$comment['thumbnail']}}"  >
                    @endif
                </td>
                <td>{{$comment['name']}}</td>


                <td>


                </td>
                <td>
                    <button type="button" class="btn btn-primary" onclick=" "><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger" onclick="delete_comment({{$comment['id']}},{{$page}})"><i class="fa-solid fa-trash-can"></i></button>
                </td>

              </tr>
              @endforeach
              <tr><td colspan="5">    @include("admin.products.product_comment_pagination")</td></tr>
            </tbody>
          </table>


            </div>
