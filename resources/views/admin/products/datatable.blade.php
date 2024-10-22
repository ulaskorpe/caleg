
<div class="center-flex "  >
@if(false)
    <nav aria-label="Page navigation example mt-2" style="margin: 0 auto;">
      <ul class="pagination">
          @if($page_count>0)

        <li class="page-item"><a class="page-link"  href="#product_list" onclick="show_products({{$page-1}})" @if($page==0) disabled @endif >Önceki</a></li>
        @for($i=0;$i<$page_count;$i++)


        <li class="page-item"><a class="page-link  @if($page==$i) active @endif"  href="#product_list" onclick="show_products({{$i}})">{{$i+1}}</a></li>



        @endfor
        <li class="page-item"><a class="page-link"  href="#product_list" onclick="show_products({{$page+1}})"  @if($page==$page_count) disabled @endif>Sonraki</a></li>

         @endif
      </ul>
    </nav>
@endif


      </div>

        <table class="table table-bordered">
            <thead>
              <tr><td colspan="5">    @include("admin.products.product_comment_pagination")</td></tr>
              <tr>
                <th scope="col">Resim</th>
                <th scope="col">Ürün Adı</th>

                <th scope="col">Kategoriler</th>


                <th scope="col">#</th>
              </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
              <tr>
                <td  style="width: 10%">
                    @if($product['thumbnail'] && $product['thumbnail']!='thumb')
                    <img src="{{url('assets/products/'.$product['slug'].'/'.$product['thumbnail'])}}" alt="{{$product['thumbnail']}}"  >
                    @endif
                </td>
                <td>{{$product['name']}}</td>


                <td>
                        @foreach($product->categories()->get() as $cat)
                        {{$cat['name']}} <br>
                        @endforeach

                </td>
                <td>
                    <button type="button" class="btn btn-primary" onclick="window.open('{{route('admin.products.edit',$product['slug'])}}','_self')"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-danger" onclick="delete_product({{$product['id']}},{{$page}})"><i class="fa-solid fa-trash-can"></i></button>
                </td>

              </tr>
              @endforeach
              <tr><td colspan="5">    @include("admin.products.product_comment_pagination")</td></tr>
            </tbody>
          </table>
 
