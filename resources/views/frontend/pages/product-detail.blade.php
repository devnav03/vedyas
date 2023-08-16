@extends('frontend.layouts.app')
@section('content')

  <section class="bredcrum">
    <div class="container">
      <ul>
        <li><a href="{{ route('home') }}" style="color:#ff6600;">Home</a></li>
        <li>&nbsp;/&nbsp;{{ $product->name }}</li>
      </ul>
    </div>
  </section>

  <div class="clearfix"></div>
  <!-- DETAILS-MAIN STRATS -->
    <section class="details-main">
      <div class="container">
        <div id="add-cart"></div>
        <div id="add-cart_full"></div>
        <div class="row">
        <div class="col-lg-12 col-md-12">
        @if(session()->has('cart_successfully'))
            <li class="alert alert-success" style="list-style: none; margin-top: 0px;">Product successfully added in cart </li>
        @endif  

        @if(session()->has('not_added_in_cart'))
            <li class="alert alert-danger" style="list-style: none; margin-top: 0px;">Please choose the quantity of items you wish to add to your cart</li>
        @endif 

           @if(session()->has('rev_by'))
            <p id="verified-purchase" style="padding-top: 20px; font-size: 16px; color: #51B346; text-align: center; font-family: 'Poppins', sans-serif;">Your Review is Submit. Kindly wait for admin approval.</p>
          @endif
          @if(session()->has('never_by'))
            <p style="padding-top: 20px; font-size: 16px; color: #f00; text-align: center; font-family: 'Poppins', sans-serif;" id="verified-purchase">We are Sorry Review Unavailable until Verified Purchase!</p> 
          @endif
            @if(session()->has('success_review'))
            <p id="verified-purchase" style="padding-top: 20px; font-size: 16px; color: #51B346; text-align: center; font-family: 'Poppins', sans-serif;">Your Review is Submit. Kindly wait for admin approval.</p>
          @endif

        <div class="row">
          <div class="col-lg-6">
              <!--<div class="col-lg-2" style="padding-right: 0px;">  
                <img class="img-fluid mx-auto d-block" src="{!! asset($product->featured_image) !!}" alt="">
              </div>-->
              
              @if(count($gallery_imgs) > 0)

              <div class="main-prod prod-img">
                    <span id="img_ft_zoom">
                    <img class="mn-img img-fluid mx-auto d-block" src="{!! asset($product->featured_image) !!}" alt="" onerror="this.src='https://dentclues.com/img/not-found.png';">
                    </span>
                </div>

                <div id="featured-slide1">
                <ul id="gal1" class="pl-0 mb-0">
                <a class="big-img" href="{!! asset($product->featured_image) !!}">
                  <li class="bbbb my-2">
                    <a href="#" data-image="{!! asset($product->featured_image) !!}" data-zoom-image="{!! asset($product->featured_image) !!}">
                    <img id="img_01" src="{!! asset($product->featured_image) !!}" alt="" onerror="this.src='https://dentclues.com/img/not-found.png';">
                    </a>
                  </li>
                </a>
                  @if(isset($gallery_imgs))
                  @foreach($gallery_imgs as $gallery_img)
                  <li class="bbbb my-2">
                  <a href="#" data-image="{!! asset($gallery_img->product_image) !!}" data-zoom-image="{!! asset($gallery_img->product_image) !!}">
                  <img id="img_01" src="{!! asset($gallery_img->product_image) !!}" onerror="this.src='https://dentclues.com/img/not-found.png';">
                  </a>
                  </li>
                  @endforeach
                  @endif
                </ul>
              </div>
                
            @else  
         
                <div class="main-prod prod-img">
                  <!--   <span id="img_ft_zoom" class="hide_phone">
                    <img class="mn-img img-fluid mx-auto d-block" src="{!! asset($product->featured_image) !!}" alt="">
                    </span> -->
                    <img class="img-fluid mx-auto d-block" src="{!! asset($product->featured_image) !!}" alt="">
                </div>
            @endif 

          </div>
          <div class="col-lg-6">
                <div class="details-heading">
                <h2 class="product-name">{{ $product->name }}</h2>
                <div class="short_description"> 
                  @if($product->description != '<br>')
                    {!! $product->description !!}
                  @endif  
                </div>
                @if($product->product_type != 2)
                <div class="price_box">
                <p><del>&#8377;{{ $product->regular_price }}</del> &#8377;{{ $product->offer_price }}</p>
                </div>
                @else
                @php
                $group_price = get_group_price($product->id);
                @endphp
                <div class="price_box">
                <p>&#8377;{{ number_format($group_price['min_price'], 2) }} - &#8377;{{ number_format($group_price['max_price'], 2) }}</p>
                </div>
                @endif
                
          
                <div class="clearfix"></div>
                @if($product->product_type == 2)           

<form action="{{ route('save-cart') }}" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  <table class="" style="width: 100%;">
  <tbody>
  @foreach($configure_products as $configure_product)      
  <tr>
    <td style="width: 130px;">  
      <div class="quantity buttons_added">
        <input type="hidden" value="{{ $configure_product->id }}" name="product_id[]">
        <input type="button" onclick="qtu_decrease({{ $configure_product->id }});" value="-" class="minus button is-form">        
        <input type="number" id="pid{{ $configure_product->id }}" class="input-text qty text" step="1" min="0" max="" name="quantity[{{ $configure_product->id }}]" value="0" title="Qty" size="4" placeholder="0" inputmode="numeric" style="width: 50px;">
        <input type="button" value="+" onclick="qtu_increase({{ $configure_product->id }});" value="{{ $configure_product->id }}" class="plus button is-form"> </div>
    </td>
    <td><label style="margin-bottom: 0;font-weight: 500;">{{ $configure_product->name }}</label>
    </td>

    <td>
@php
if(\Auth::check()){
    $s_price = get_discounted_price($configure_product->id);
} else {
    $s_price = $configure_product->offer_price;
}
@endphp
      <span><bdi><span>&#8377;</span>{{ round($s_price, 2) }}</bdi></span>

    </td>
    </tr>  
  @endforeach


   </tbody>
        <thead>
        <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><strong>Each</strong></td>
        </tr>
        </thead>
  </table>

    <button type="submit" class="single_add_to_cart_button button alt">Add to cart</button>
  </form>

                @else
                <div class="add-to-cart">
                    @if($product->quantity != 0)
                    <div class="clearfix"></div>
                    <!-- <h6 style="float: left; margin-right: 15px; color: #6d6d6d; font-weight: 400; margin-top: 13px;">Quantity:</h6> -->
                    <input class="qtybox qty{{ $product->id }}" type="number" min="0" value="1">
                    <button onclick="addToCart(this.value)" value="{{ $product->id }}" class="single_add_to_cart_button btn">Add to Cart</button>
                  <!--     @if(Auth::id()) 
                      @php get_wishlist($product->id) @endphp
                        @if(empty(get_wishlist($product->id)))
                          <a href="{{ route('addWishlist', $product->id) }}" title="Add To Wishlist" class="wish-btn"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        @else
                          <a href="{{ route('deleteWishlist', $product->id)}}" title="Remove From Wishlist" class="wish-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                      @endif
                      @endif -->
                    @else
                    <button value="{{ $product->id }}" onclick="notifyme(this.value)" class="btn">Out Of Stock</button>
                    @endif
                  </div>
                @endif
                <div class="clearfix"></div> 
                <div class="sku-details" style="margin-top: 15px;">
                  <p><b>SKU:</b> {{ $product->sku }}</p>
                  <p><b>Categories:</b> <a href="{{ route('categoryDetail', $product->cat_url) }}">{{ $product->category }}</a>
                  @if($product->cat2)
                  , <a href="{{ route('categoryDetail', $product->url2) }}">{{ $product->cat2 }}</a>
                  @endif
                  @if($product->cat3)
                  , <a href="{{ route('categoryDetail', $product->url3) }}">{{ $product->cat3 }}</a>
                  @endif
                  @if($product->cat4)
                  , <a href="{{ route('categoryDetail', $product->url4) }}">{{ $product->cat4 }}</a>
                  @endif
                  @if($product->cat5)
                  , <a href="{{ route('categoryDetail', $product->url5) }}">{{ $product->cat5 }}</a>
                  @endif
                  </p>
                  <p style="float: left;margin-right: 7px;"><b>Share Now:</b></p>
                  <ul class="socl-share">
                    <li><a class="fb" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ route('productDetail', $product->url) }}"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="tw" target="_blank" href="https://twitter.com/intent/tweet?text=my share text&amp;url={{ route('productDetail', $product->url) }}"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="gp" target="_blank" href="https://wa.me/?text={{ route('productDetail', $product->url) }}" class="social-button " id=""><i class="fa fa-whatsapp"></i></a></li>
                  </ul>
                  </div>
              </div>
           </div>
        </div>
 </div>
      </div>
      </div>
  </section>

<section class="product-desc-area pb-60">
  <div class="container">
    <div class="row">
<div class="col-xl-12 col-lg-12 mb-30">
  <div class="woocommerce-tabs wc-tabs-wrapper">
    <div class="bakix-details-tab">
      <ul class="nav tabs wc-tabs" role="tablist">
        <li class="nav-item description_tab active" id="tab-title-description" role="tab" aria-controls="tab-description">
        <a class="nav-link active" data-toggle="tab" role="tab" aria-controls="medical-equipment" aria-selected="false" href="#tab-description">Description</a>
        </li>

        <li class="nav-item reviews_tab" id="tab-title-how-to-use" role="tab" aria-controls="tab-how-to-use"><a class="nav-link" data-toggle="tab" role="tab" aria-controls="medical-equipment" aria-selected="false" href="#tab-how-to-use">How to Use</a></li>

        <li class="nav-item reviews_tab" id="tab-title-Benefits" role="tab" aria-controls="tab-Benefits"><a class="nav-link" data-toggle="tab" role="tab" aria-controls="medical-equipment" aria-selected="false" href="#tab-Benefits">Benefits</a></li>

        <li class="nav-item reviews_tab" id="tab-title-ingredients" role="tab" aria-controls="tab-ingredients"><a class="nav-link" data-toggle="tab" role="tab" aria-controls="medical-equipment" aria-selected="false" href="#tab-ingredients">Ingredients</a></li>

        <li class="nav-item reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews"><a class="nav-link" data-toggle="tab" role="tab" aria-controls="medical-equipment" aria-selected="false" href="#tab-reviews">Reviews ({{ count($reviews) }})</a></li>


      </ul>
    </div>
<div class="prod_des panel entry-content wc-tab active" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">      
<p>{!! $product->product_description !!}</p>
</div>

<div class="prod_des panel entry-content wc-tab active" id="tab-Benefits" role="tabpanel" aria-labelledby="tab-title-Benefits">      
{!! $product->how_to_use !!}
</div>

  <div class="prod_des review" id="tab-reviews">
  <div id="reviews" class="woocommerce-Reviews">
  <div id="comments">

    <h3 class="title_head">Customer <span>Reviews</span></h3>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-6">
        {!! Form::open(array('method' => 'POST', 'route' => array('submit_review_store'), 'class' => '', 'files' => 'true')) !!}
        <input type="hidden" name="product_id" value="{!! $product->id !!}">
        <div class="row">
          <div class="col-md-6 text-center">
             @if($all_rating) <h3>{{ number_format($all_rating, 2) }}/5</h3>@endif
               <h6>@if(rating_count($product->id) == 0) @else Based on {{ rating_count($product->id) }} ratings @endif </h6>
                  <div class="stars"><span>Rate Product</span> &nbsp; 
                  <p><input class="star star-1 ng-pristine ng-untouched ng-valid ng-not-empty" id="star-1" ng-model="newReview.rating" value="5" type="radio" name="rating">
                  <label class="star star-1" for="star-1"></label>
                  <input class="star star-2 ng-pristine ng-untouched ng-valid ng-not-empty" id="star-2" ng-model="newReview.rating" value="4" type="radio" name="rating">
                  <label class="star star-2" for="star-2"></label>
                  <input class="star star-3 ng-pristine ng-untouched ng-valid ng-not-empty" id="star-3" ng-model="newReview.rating" value="3" type="radio" name="rating">
                  <label class="star star-3" for="star-3"></label>
                  <input class="star star-4 ng-pristine ng-untouched ng-valid ng-not-empty" id="star-4" ng-model="newReview.rating" value="2" type="radio" name="rating">
                  <label class="star star-4" for="star-4"></label>
                  <input class="star star-5 ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required" id="star-5" ng-model="newReview.rating" value="1" type="radio" required="" name="rating">
                  <label class="star star-5" for="star-5"></label></p>
                </div>
          </div>

          <div class="col-md-6">
              <table>
                    <tbody>
                      <tr>
                        <td>5 <i class="fa-solid fa-star"></i></td>
                        <td>
                          <div class="pbar ml-2">
                            <div class="bar five" style="width:{{ $five_per }}%;"></div>
                          </div>
                        </td>
                        <td> {{ round($five_per, 2) }}% </td>
                      </tr>
                      <tr>
                        <td>4 <i class="fa-solid fa-star"></i></td>
                        <td>
                          <div class="pbar ml-2">
                            <div class="bar four" style="width:{{ $four_per }}%;"></div>
                          </div>
                        </td>
                        <td> {{ round($four_per, 2) }}% </td>
                      </tr>
                      <tr>
                        <td>3 <i class="fa-solid fa-star"></i></td>
                        <td>
                          <div class="pbar ml-2">
                            <div class="bar three" style="width:{{ $three_per }}%;"></div>
                          </div>
                        </td>
                        <td> {{ round($three_per, 2) }}% </td>
                      </tr>
                      <tr>
                        <td>2 <i class="fa-solid fa-star"></i></td>
                        <td>
                          <div class="pbar ml-2">
                            <div class="bar two" style="width:{{ $two_per }}%;"></div>
                          </div>
                        </td>
                        <td>
                          {{ round($two_per, 2) }}%
                        </td>
                      </tr>
                      <tr>
                        <td>1 <i class="fa-solid fa-star"></i></td>
                        <td>
                          <div class="pbar ml-2">
                            <div class="bar one" style="width:{{ $one_per }}%;"></div>
                          </div>
                        </td>
                        <td>
                          {{ round($one_per, 2) }}%
                        </td>
                      </tr>
                    </tbody>       
                  </table>

          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <label style="margin-top: 8px;">Add a photo</label>
          </div>
          <div class="col-md-8">
          <input type="file" class="form-control" style="border: 0px; margin-top: 15px;" name="image" accept=".jpg, .png, .jpeg">
              @if($errors->has('image'))
                <span class="text-danger">{{$errors->first('image')}}</span>
              @endif
          </div>
          <div class="col-md-12" style="margin-top: 20px;">
              <textarea name="review" cols="30" placeholder="Write a review..." rows="2" class="form-control" maxlength="100"></textarea>
              @if($errors->has('review'))
                <span class="text-danger">{{$errors->first('review')}}</span>
              @endif
          </div>
          <div class="col-md-12" style="text-align: center; padding-top: 30px;">
              @if(\Auth::check())
                <button type="submit" class="btn">Submit</button>
              @else
              <a href="/log-in" style="background: #f47624; color: #fff; font-family: 'Poppins', sans-serif; text-transform: uppercase; font-size: 15px; padding: 9px 40px; border-radius: 7px;">Submit</a>
              @endif
          </div>              
        </div>
        

        {!! Form::close() !!}
       
      </div>
      <div class="col-md-6">
        
           @if(isset($reviews))
              @foreach($reviews as $review)
                <div class="row" style="border-bottom: 1px solid #E0E0E0; margin-top: 8px;    padding-bottom: 8px;">
                      <div class="col-md-2">
                        <img src="{!! asset('assets/frontend/images/user_blank.png') !!}" style="max-width: 80px;" class="img-fluid d-inline-block" alt="">
                      </div>
                     <div class="col-md-10">
                        <h6 class="mb-0 pull-left" style="padding-bottom: 5px;">{{ $review->name }}</h6>
                        <span class="pull-right" style="font-size: 13px;">{{ date('d M Y', strtotime($review->created_at))}}</span>
                        <div class="clearfix"></div> 
                        @if($review->rating == 1)
                        <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-o"></i><i class="fa-solid fa-star-o"></i><i class="fa-solid fa-star-o"></i><i class="fa-solid fa-star-o"></i></p>
                        @endif
                        @if($review->rating == 2)
                        <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-o"></i><i class="fa-solid fa-star-o"></i><i class="fa-solid fa-star-o"></i></p>
                        @endif
                        @if($review->rating == 3)
                        <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-o"></i><i class="fa-solid fa-star-o"></i></p>
                        @endif
                        @if($review->rating == 4)
                        <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-o"></i></p>
                        @endif
                        @if($review->rating == 5)
                        <p><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
                        @endif
                        <p class="mt-3">{{ $review->review }}</p>
                     @if($review->image)
                     <div class="bottom mt-3 pr-2">
                      <ul class="pl-0 mb-0">
                        <li class= "mb-3 d-inline-block">
                          <div class="small-img">
                            <a target="_blank" href="{{ route('home') }}/uploads/review_images/{{ $review->image }}"><img src="{!! asset('uploads/review_images/'.$review->image) !!}" style="max-height: 90px; max-width: 160px;" class="img-fluid mx-auto" alt=""></a>
                          </div>
                        </li>
                      </ul>
                    </div>
                    @endif
                    <!-- <a href="#" class="rply"><i class="fa fa-reply"></i> Reply</a> -->
                  </div>
                </div>
                @endforeach
              @endif
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
        
            
    </div>
</div>
</section>



        @if($product->product_description)
        <section class="description_detail" style="display: none;">
          <div class="container">
            <h4>Description</h4>
            {!! $product->product_description !!}
          </div>
        </section>
        @endif

  
<section class="new_products rel_pro" id="category-list">
<div class="container">  
<h2>You May Also Like</h2>
<div class="clearfix"></div>
<div id="new_products_related" class="owl-carousel owl-theme">
@foreach($new_products as $new_product)	
<div class="row item">
<div class="col-md-12">
  <div class="prod-box">
<a href="{{ route('productDetail', $new_product->url) }}"><img src="{!! asset($new_product->featured_image) !!}" class="img-fluid mx-auto d-block" alt="{{ $new_product->name }}"></a>
<div class="txt mt-3" style="padding: 6px;">

<h6 class="mb-3"><a href="{{ route('productDetail', $new_product->url) }}">{{ $new_product->name }}</a></h6>

@if($new_product->product_type == 1)
@php
if(\Auth::check()){
    $s_price = get_discounted_price($new_product->id);
} else {
    $s_price = $new_product->offer_price;
}
@endphp

<p>@if($new_product->regular_price > $s_price)<del>&#8377;{{ $new_product->regular_price }}</del> @endif &#8377;{{ $s_price }} </p>

@else
@php
$group_price = get_group_price($new_product->id);
@endphp

<p>&#8377;{{ number_format($group_price['min_price'], 2) }} - &#8377;{{ number_format($group_price['max_price'], 2) }} </p>

@endif

</div>
<!-- <div class="product-action">

                  @if(Auth::id()) 
                  @php get_wishlist($new_product->id) @endphp
                  @if(empty(get_wishlist($new_product->id)))
                  <a href="{{ route('addWishlist', $new_product->id) }}" title="Add To Wishlist" class="action-btn button"><i class="fa-solid fa-heart"></i></a>
                  @else
                  <a title="Remove From Wishlist" href="{{ route('deleteWishlist', $new_product->id) }}" class="action-btn button"><i class="fa-solid fa-heart"></i></a>
                  @endif
                  @endif
                    <a href="{{ route('productDetail', $new_product->url) }}" class="action-btn button"><i class="fa-solid fa-cart-shopping"></i></a>
                    <a href="{{ route('productDetail', $new_product->url) }}" class="action-btn button"><i class="fa-solid fa-magnifying-glass"></i></a>
                  </div> -->
</div>
</div>
</div>
@endforeach
</div>
</div>
</section>
  

  <div class="clearfix"></div>
 
@endsection
