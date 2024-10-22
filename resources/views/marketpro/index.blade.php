@extends('marketpro.main_layout')


@section('content')

 @include("marketpro.partials.index.banner_slider")


    @include("marketpro.partials.index.top_slider")
    
    @include("marketpro.partials.index.promotional")
    @include("marketpro.partials.index.160x160")
    @include("marketpro.partials.index.recommended")
    @include("marketpro.partials.index.organic_food")
    @include("marketpro.partials.index.new_arrivals")

    @include("marketpro.partials.index.news_letter")
    @if(false)
    <!-- ======================== promotional banner Start ============================== -->

    <!-- ======================== promotional banner End ============================== -->
      
   
   
    
    @include("marketpro.partials.index.flash_sales_today")
    @include("marketpro.partials.index.top_vendors")
    @include("marketpro.partials.index.best_sells")
    @include("marketpro.partials.index.delivery")
    @include("marketpro.partials.index.organic_food")
    @include("marketpro.partials.index.short_product")
    @include("marketpro.partials.index.brands")
    @include("marketpro.partials.index.new_arrivals")
    @include("marketpro.partials.index.shipping")
    @include("marketpro.partials.index.news_letter")
    @endif
    
    
    


@endsection