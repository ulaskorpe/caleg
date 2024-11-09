<div class="center-flex "  >
{{$page+1}} / {{$page_count}}
<nav aria-label="Page navigation example mt-2" style="margin: 0 auto;">
    <ul class="pagination">
        @if($page_count>0)
        @if($page!=0)
        <li class="page-item"><a class="page-link"  href="#comment_list" onclick="show_data('/admin/products/comments/0/0','comment_list');"  >First</a></li>
      <li class="page-item"><a class="page-link"  href="#comment_list" onclick="show_data('/admin/products/comments/0/{{$page-1}}','comment_list');"  >Previous</a></li>
        @endif
      
      
      @if($page_count>20)

        @php
        $factor = 6 ;
        $plus = $factor ;
        $minus = $factor ;
            if($page < $factor){
                $minus = $factor - $page;
                $plus = ($factor * 2 ) - $page;
            }
        @endphp

      @for($i=$page-$minus;$i<$page+$plus;$i++)

            @if($i>-1 && $i < $page_count)
      <li class="page-item"><a class="page-link  @if($page==$i) active @endif"  href="#comment_list" onclick="show_data('/admin/products/comments/0/{{$i}}','comment_list');">{{$i+1}}</a></li>
             @endif


      @endfor

      @else
      @for($i=0;$i<$page_count;$i++)


      <li class="page-item"><a class="page-link  @if($page==$i) active @endif"  href="#comment_list" onclick="show_data('/admin/products/comments/0/{{$i}}','comment_list');">{{$i+1}}</a></li>



      @endfor

      @endif
 
      @if($page+1 != $page_count)
      <li class="page-item"><a class="page-link"  href="#comment_list" onclick="show_data('/admin/products/comments/0/{{$page+1}}','comment_list');" >Next</a></li>
      <li class="page-item"><a class="page-link"  href="#comment_list" onclick="show_data('/admin/products/comments/0/{{$page_count-1}}','comment_list');" >Last</a></li>
            @endif
       @endif
    </ul>
  </nav>
</div>
