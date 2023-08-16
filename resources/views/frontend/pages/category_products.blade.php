@extends('frontend.layouts.app')
@section('content')

  <section class="bredcrum">
    <div class="container">
      <ul>
        <li><a href="{{ route('home') }}" style="color:#ff6600;">Home</a></li>
        <li>&nbsp;/&nbsp;{{ $category->name }}</li>
      </ul>
    </div>
  </section>

  <div class="clearfix"></div>

<div id="add-cart"></div>
<div id="add-cart_full"></div>
@php
$cname = $category->name;
@endphp
  <!-- PRODUCT-LISTING-PANEL STARTS -->
    <section class="product-listing-panel">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-md-3" style="display: none;">
            <aside>
              <div class="accordion" id="accordionExample">        
<div class="card">
  <div class="card-header" id="headingOne1">
    <h5>Categories</h5>
  </div>
    <input type="hidden" name="search_key" id="search_cat" value="{{ $category->id }}">
    <div class="card-body">
      <ul id="selective">
        @if($Categorys)
        @php $ci = 0;   @endphp
        <!--<li><input value="ALL" name="category_id" class="category_value" onChange="getCategoryID(this.value);" type="checkbox"> All</li> -->
        @foreach($Categorys as $category)
         @php $ci++;   @endphp
            <li><!-- <input value="{{ $category->id }}" name="category_id" class="category_value" onChange="getCategoryID(this.value);" type="checkbox"> --> <a href="{{ route('categoryDetail', $category->url) }}">{{ $category->name}}</a>
             
              @php
              $subcats = get_sub_cat($category->id);
            @endphp
            @if($subcats)
            <ul>
              @foreach($subcats as $subcat) 
                <li> <a style="font-weight: 500; font-size: 14px;" href="{{ route('categoryDetail', $subcat->url) }}"> {{ $subcat->name}}</a> 

                 @php
              $subcats = get_sub_cat($subcat->id);
            @endphp
            @if($subcats)
            <ul>
              @foreach($subcats as $subcat) 
                <li><a href="{{ route('categoryDetail', $subcat->url) }}"> {{ $subcat->name}}</a></li>
              @endforeach
            </ul>
            @endif
                </li>
              @endforeach
            </ul>
            @endif

            </li>
          @endforeach
        @endif
      </ul>
    </div>
</div>
              </div>
            </aside>
          </div>
          
          <div class="col-lg-12 col-md-12" id="category-list">
            <div class="row">
              <div class="col-md-3 offset-md-9">
                <select onchange="SortFilter(this);" id="sortID" class="form-control" style="    background: #f4f4f4; border: 0px; height: 45px; border-radius: 0px; font-size: 15px;">
                  <option value="">Sort By Latest</option>
                  <option value="1">New Arrivals</option>
                  <option value="2">High Price to Low</option>
                  <option value="3">Low Price to High</option>
                  <!-- <option value="4">Sellers</option>
                  <option value="5">Latest Style</option> -->
                </select>
              </div>
            </div>
            <div class="row">
            @if($products)
              @foreach($products as $product)
                @if($product->status == 1)
                <div class="col-lg-3 col-md-4 col-6 mt-md-0 mt-5">
                  <div class="prod-box">
              <!--     @if($product->regular_price > $product->offer_price)<span class="product-tag">{{ round(100-($product->offer_price/$product->regular_price)*100) }}%</span>@endif -->
                  <a href="{{ route('productDetail', $product->url) }}"><img src="{!! asset($product->featured_image) !!}" style="max-height: 300px;" class="img-fluid mx-auto d-block" alt="{{ $product->name }}"></a>
                  <div class="txt mt-3" style="padding: 6px;text-align: center;">
                  <h6 class="mb-3"><a href="{{ route('productDetail', $product->url) }}">{{ $product->name }}</a></h6>

@if($product->product_type == 1)
@php
if(\Auth::check()){
    $s_price = get_discounted_price($product->id);
} else {
    $s_price = $product->offer_price;
}
@endphp
      <p>@if($product->regular_price > $s_price)<del>&#8377;{{ $product->regular_price }}</del>@endif &#8377;{{ $s_price }}</p>
@else
@php
$group_price = get_group_price($product->id);
@endphp
<p>&#8377;{{ number_format($group_price['min_price'], 2) }} - &#8377;{{ number_format($group_price['max_price'], 2) }} </p>
@endif
                  <!--   <button onclick="addToCart(this.value)" value="{{ $product->id }}" class="btn">Add to Cart</button> -->
                  </div>
                  <!-- <div class="product-action">

                  @if(Auth::id()) 
                  @php get_wishlist($product->id) @endphp
                  @if(empty(get_wishlist($product->id)))
                  <a href="{{ route('addWishlist', $product->id) }}" title="Add To Wishlist" class="action-btn button"><i class="fa-solid fa-heart"></i></a>
                  @else
                  <a title="Remove From Wishlist" href="{{ route('deleteWishlist', $product->id) }}" class="action-btn button"><i class="fa-solid fa-heart"></i></a>
                  @endif
                  @endif
                    <a href="{{ route('productDetail', $product->url) }}" class="action-btn button"><i class="fa-solid fa-cart-shopping"></i></a>
                    <a href="{{ route('productDetail', $product->url) }}" class="action-btn button"><i class="fa-solid fa-magnifying-glass"></i></a>
                  </div> -->
                </div>
                </div>
                @endif
              @endforeach
            @endif
            @if($counts == 0)
           <div class="text-center" style="width: 100%;">
              <h5 style="color: #f00; padding: 30px 0;text-align: center;width: 100%;">No products found</h5>
            </div>
            @endif
            <div class="pagination" style="margin: 30px auto;">
                {{ $products->links() }}
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- PRODUCT-LISTING-PANEL ENDS -->

@endsection