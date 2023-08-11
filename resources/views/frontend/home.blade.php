@extends('frontend.layouts.app')
@section('content')

<section class="slider">
<div id="slider1" class="owl-carousel owl-theme">
@foreach($sliders as $slider)	
<div class="item">
<a href="{{ $slider->link }}"> 
    <img src="{!! asset($slider->image) !!}" class="img-fluid mx-auto d-block" alt="{{ $slider->title }}">
</a>
</div>
@endforeach
</div>
</section>


<div id="shopify-section-16102687418be71cb3" class="shopify-section index-section">
<div class="customstyle aos-init aos-animate" data-aos="">
<div class="container-fluid">
    <div class="section-block">
    	<div class="row 16102687418be71cb3 ">
          <div class="customCol col-md-6 aos-init aos-animate" data-aos="" data-aos-duration="1000" style="padding-top: 1vh; padding-bottom: 1vh; padding-left: 1vh; padding-right: 1vh;">
            <figure style="width: 100%; height: 100%;" class="banner-theme hv-image-saturate banner-theme-bottom banner-theme-center text-center  banner-theme-63386fac-9663-40ae-95cf-ce01e8339c6f">
            	<img src="{!! asset('assets/frontend/images/Flat_25_Off.jpg') !!}" class="transition lazyloaded" alt="" style="width: 100%; height: 100%;">
            	<figcaption class="figcaption--63386fac-9663-40ae-95cf-ce01e8339c6f">
            		<div class="position-relative">
                    <div class="bg-des"></div>
                    <div class="position-relative"></div>
                  </div>
                </figcaption>
                  <a href="#"></a>
              </figure>
          </div>
          
          <div class="customCol col-md-6 aos-init aos-animate" data-aos="" data-aos-duration="1000" style="padding-top: 1vh; padding-bottom: 1vh; padding-left: 1vh; padding-right: 1vh;">
            <figure style="width: 100%; height: 100%;" class="banner-theme hv-image-saturate banner-theme-mid banner-theme-center text-center  banner-theme-25df0b1b-f06d-465b-97b9-2754b7c5f630"><img src="{!! asset('assets/frontend/images/Special-Category-Premium.jpg') !!}" class="transition lazyloaded" alt="" style="width: 100%; height: 100%;"><figcaption class="figcaption--25df0b1b-f06d-465b-97b9-2754b7c5f630"><div class="position-relative">
                    <div class="bg-des"></div>
                    <div class="position-relative" style="z-index: 3; font-family: var(--g-font-2) !important;">
                      
                    </div>
                  </div></figcaption><a href="#"></a></figure>
            </div>
          
            <div class="customCol col-md-6 aos-init aos-animate" data-aos="" data-aos-duration="1000" style="padding-top: 1vh; padding-bottom: 1vh; padding-left: 1vh; padding-right: 1vh;">
            <figure style="width: 100%; height: 100%;" class="banner-theme hv-image-saturate banner-theme-mid banner-theme-center text-center  banner-theme-16102687418be71cb3-1"><img src="{!! asset('assets/frontend/images/Special-Category-Best_Sellers.jpg') !!}" class="transition lazyloaded" alt="" style="width: 100%; height: 100%;">
            	<figcaption class="figcaption--16102687418be71cb3-1">
            	<div class="position-relative">
                    <div class="bg-des"></div>
                    <div class="position-relative"></div>
                  </div>
                </figcaption>
                <a href="#"></a>
            </figure>
            </div>
          
          <div class="customCol col-md-6 aos-init aos-animate" data-aos="" data-aos-duration="1000" style="padding-top: 1vh; padding-bottom: 1vh; padding-left: 1vh; padding-right: 1vh;">
            <figure style="width: 100%; height: 100%;" class="banner-theme hv-image-saturate banner-theme-mid banner-theme-center text-center  banner-theme-16102687418be71cb3-0"><img src="{!! asset('assets/frontend/images/Special-Category-New_Launches.jpg') !!}" class="transition lazyloaded" alt="" style="width: 100%; height: 100%;"><figcaption class="figcaption--16102687418be71cb3-0"><div class="position-relative">
                    <div class="bg-des"></div>
                    <div class="position-relative" style="z-index: 3; font-family: var(--g-font-2) !important;">
                      
                    </div>
                  </div></figcaption><a href="#"></a></figure>
          </div></div>
    </div>
  </div>
</div>
</div>



<div id="shopify-section-7ce7ddf1-336d-4daa-8a51-6d77cabc587e" class="shopify-section index-section">
<div class="customstyle7ce7ddf1-336d-4daa-8a51-6d77cabc587e banner-theme-text aos-init aos-animate" data-aos="">
<div class="container-fluid">
    <div class="section-block">
    	<div style="text-transform: none !important;" class="subtop text-center text-top aos-init aos-animate" data-aos="" data-aos-duration="500">
    		<h3><p style="font-family: 'Raleway', sans-serif; color: white; background-color: black; font-size: 16px; margin-bottom: 10px; padding: 5px; display: inline-block;">Kudrat-Range of Fresh Oils</p></h3>
    </div>

    <div class="row 7ce7ddf1-336d-4daa-8a51-6d77cabc587e ">
        <div class="customCol col-md-3">
        <figure class="hv-image-saturate text-center  d-flex flex-column">
        	<a href="#"><img src="{!! asset('assets/frontend/images/Anti_Hair_fall_Hair_Oil.jpg') !!}" style="width: 100%; height: 100%;" class="transition lazyloaded"></a><figcaption class="figcaption--7ce7ddf1-336d-4daa-8a51-6d77cabc587e-16799205969c3f6c9f-0 py-4"><p><b>Anti Hair Fall Hair Oil </b></p>
            <a href="#" class="btn btn-theme gradient-theme"><span class="px-2">Shop Now</span></a>
        </figcaption>		
        </figure>
        </div>
        
        <div class="customCol col-md-3">
          <figure class="hv-image-saturate text-center  d-flex flex-column"><a href="/products/hair-oil-kudrat-damage-repair-hair-oil"><img src="{!! asset('assets/frontend/images/Damage_Repair_Hair_Oil_.jpg') !!}" style="width: 100%; height: 100%;" class="transition lazyloaded"></a><figcaption class="figcaption--7ce7ddf1-336d-4daa-8a51-6d77cabc587e-16799205969c3f6c9f-1 py-4"><p><b>Damage Repair Hair Oil </b></p>
            <a href="#" class="btn btn-theme gradient-theme"><span class="px-2">Shop Now</span></a></figcaption>		
          </figure>
        </div>
        
        <div class="customCol col-md-3">
          <figure class="hv-image-saturate text-center  d-flex flex-column"><a href="#"><img src="{!! asset('assets/frontend/images/Anti_Dandruff_Hair_Oil.jpg') !!}" style="width: 100%; height: 100%;" class="transition lazyloaded"></a><figcaption class="figcaption--30991bb9-0794-4f24-85ce-e70bbe7f73b9 py-4"><p><b>Anti Dandruff Hair Oil </b></p>
           <a href="#" class="btn btn-theme gradient-theme">
                <span class="px-2">Shop Now</span>
              </a>
          </figcaption>		
          </figure>
        </div>
        
        <div class="customCol col-md-3">
          <figure class="hv-image-saturate text-center  d-flex flex-column"><a href="#"><img src=" {!! asset('assets/frontend/images/Non_Strickly_Hair_Oil.jpg') !!}" style="width: 100%; height: 100%;" class="transition lazyloaded"></a><figcaption class="figcaption--f8631ae0-4731-4912-9580-a246807a9f34 py-4"><p><b>Non Sticky Hair Oil</b></p>
            <a href="#" class="btn btn-theme gradient-theme"><span class="px-2">Shop Now</span></a>
          </figcaption>		
          </figure>
        </div>
        </div>
    </div>
  </div>
  </div>
  </div>



<div id="shopify-section-5a009818-4a4d-47e4-b8fa-cfd12d9df789" class="shopify-section index-section">
<div class="customstyle5a009818-4a4d-47e4-b8fa-cfd12d9df789 aos-init aos-animate" data-aos="">
<div class="container-fluid">
    <div class="section-block" style="margin: auto; padding: 10px;">
    	<div style="text-transform: none !important;" class="subtop text-center text-top aos-init aos-animate" data-aos="" data-aos-duration="500">
    	<h3><p style="font-family: 'Raleway', sans-serif; color: white; background-color: black; font-size: 16px; margin-bottom: 10px; padding: 5px; display: inline-block;">Summer Must Haves</p></h3>
    </div>


        <div id="pro_sld" class="row owl-carousel owl-theme">	

            <div class="col brand-item carousel__slide-wrapper--5a009818-4a4d-47e4-b8fa-cfd12d9df789-16800884469b016440-4 slick-slide slick-active" style="width: 336px;">
            <a href="#" class="" tabindex="0"><img style="width: 100%; height: 100%; border-radius: 0px;" class="transition lazyloaded" src="{!! asset('assets/frontend/images/Sandalwood-saffron_night_cream_400x.jpg') !!}" alt=""></a>
            <div>
              <p style="font-weight: 600; margin-top: 15px;font-size: 15px;">Sandalwood &amp; Saffron Night Cream</p>
              <p style="font-weight: normal; font-size: 14px;">Healing night cream with vitamins, antioxidants, omega fatty acids. Repairs, brightens, promotes skin healing </p>
            </div>
        </div>

        <div class="col brand-item carousel__slide-wrapper--5a009818-4a4d-47e4-b8fa-cfd12d9df789-16800884469b016440-5 slick-slide slick-active" data-slick-index="5" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide15" style="width: 336px;">
            <a href="#" class="" tabindex="0">
            	<img style="width: 100%; height: 100%; border-radius: 0px;" class="transition lazyloaded" src="{!! asset('assets/frontend/images/Non_Strickly_Hair_Oil_1_400x.jpg') !!}" alt=""></a>
            	<div>
              	<p style="font-weight: 600; margin-top: 15px;font-size: 15px;">Kudrat Summer Non-Sticky Hair Oil</p>
              	<p style=" font-weight: normal; font-size: 14px;">Revive hair with herbal oil, Non-greasy, nourishing blend with essential oils &amp; herbs for soft, smooth, shiny locks </p>
            </div>
        </div>
      </div>
  </div>
  </div>
</div>
</div>


<div id="shopify-section-e7db2e60-5c81-4ca7-8334-9b497aad2308" class="shopify-section index-section">
<div class="customstyle aos-init aos-animate" data-aos="">
<div class="container-fluid">
    <div class="section-block">
    	<div style="text-transform: none !important;" class="subtop text-center text-top aos-init aos-animate" data-aos="" data-aos-duration="500">
    		<h3><p style="font-family: 'Raleway', sans-serif; color: white; background-color: black; font-size: 16px; margin-bottom: 10px; padding: 5px; display: inline-block;">Our Categories</p></h3>
    	</div>
    	<div class="row e7db2e60-5c81-4ca7-8334-9b497aad2308 ">
        <div class="customCol col-md-3 aos-init aos-animate" data-aos="" data-aos-duration="1000" style="padding-top: 1vh; padding-bottom: 1vh; padding-left: 1vh; padding-right: 1vh;">
            <figure style="width: 100%; height: 100%;" class="banner-theme hv-image-saturate banner-theme-mid banner-theme-center text-center  banner-theme-e7db2e60-5c81-4ca7-8334-9b497aad2308-166737299654d6fec3-0"><img src="{!! asset('assets/frontend/images/Category_Banner_Face_Care_1920x.jpg') !!}" class="transition lazyloaded" alt="" style="width: 100%; height: 100%;">
            	<figcaption class="figcaption--e7db2e60-5c81-4ca7-8334-9b497aad2308-166737299654d6fec3-0">
            		<div class="position-relative">
                    <div class="bg-des"></div>
                    <div class="position-relative" style="z-index: 3;">
                      <p style="font-family: Arial, sans-serif; font-size: 20px;">Skin Care </p>
                    </div>
                  </div>
                </figcaption>
                <a href="#"></a>
            </figure>
          </div>
          
          <div class="customCol col-md-3 aos-init aos-animate" data-aos="" data-aos-duration="1000" style="padding-top: 1vh; padding-bottom: 1vh; padding-left: 1vh; padding-right: 1vh;">
            <figure style="width: 100%; height: 100%;" class="banner-theme hv-image-saturate banner-theme-mid banner-theme-center text-center  banner-theme-e7db2e60-5c81-4ca7-8334-9b497aad2308-166737299654d6fec3-1">
            	<img src="{!! asset('assets/frontend/images/Category_Banner_Body_Care_1920x.jpg') !!}" class="transition lazyloaded" alt="" style="width: 100%; height: 100%;">
            	<figcaption class="figcaption--e7db2e60-5c81-4ca7-8334-9b497aad2308-166737299654d6fec3-1">
            		<div class="position-relative">
                    <div class="bg-des"></div>
                    <div class="position-relative" style="z-index: 3; font-family: var(--g-font-2) !important;">
                      <p style="font-family: Arial, sans-serif; font-size: 20px;">Body Care </p>
                    </div>
                  </div>
                </figcaption>
                <a href="#"></a>
              </figure>
          </div>
          
          <div class="customCol col-md-3 aos-init aos-animate" data-aos="" data-aos-duration="1000" style="padding-top: 1vh; padding-bottom: 1vh; padding-left: 1vh; padding-right: 1vh;">
            <figure style="width: 100%; height: 100%;" class="banner-theme hv-image-saturate banner-theme-mid banner-theme-center text-center  banner-theme-72a8572a-add6-4fda-8b9d-367434089b51">
            	<img src="{!! asset('assets/frontend/images/Category_Banner_Hair_Care_1920x.jpg') !!}" class="transition lazyloaded"  alt="" style="width: 100%; height: 100%;">
            	<figcaption class="figcaption--72a8572a-add6-4fda-8b9d-367434089b51"><div class="position-relative">
                    <div class="bg-des"></div>
                    <div class="position-relative" style="z-index: 3;">
                      <p style="font-family: Arial, sans-serif; font-size: 20px;">Hair Care</p>
                    </div>
                  </div></figcaption><a href="#"></a></figure>
          </div>
          
          <div class="customCol col-md-3 aos-init aos-animate" data-aos="" data-aos-duration="1000" style="padding-top: 1vh; padding-bottom: 1vh; padding-left: 1vh; padding-right: 1vh;">
            <figure style="width: 100%; height: 100%;" class="banner-theme hv-image-saturate banner-theme-mid banner-theme-center text-center  banner-theme-b7a8b0bb-0b2c-4d3c-b5ee-ccae7d1faa6e"><img src="{!! asset('assets/frontend/images/Category_Banner_General_1920x.jpg') !!}" class="transition lazyloaded"  alt="" style="width: 100%; height: 100%;">
            <figcaption class="figcaption--b7a8b0bb-0b2c-4d3c-b5ee-ccae7d1faa6e">
            <div class="position-relative">
            <div class="bg-des"></div>
            <div class="position-relative" style="z-index: 3;">
              <p style="font-family: Arial, sans-serif; font-size: 20px;">General</p>
            </div>
            </div>
			    </figcaption>
			    <a href="#"></a>
			</figure>
          </div>
          
          <div class="customCol col-md-3 aos-init aos-animate" data-aos="" data-aos-duration="1000" style="padding-top: 1vh; padding-bottom: 1vh; padding-left: 1vh; padding-right: 1vh;">
            <figure style="width: 100%; height: 100%;" class="banner-theme hv-image-saturate banner-theme-mid banner-theme-center text-center  banner-theme-5ba52436-8ffa-4c70-ace1-c00048962530"><img src="{!! asset('assets/frontend/images/Category_Banner_Bath_Care_1920x.jpg') !!}" class="transition lazyloaded"  alt="" style="width: 100%; height: 100%;"><figcaption class="figcaption--5ba52436-8ffa-4c70-ace1-c00048962530"><div class="position-relative">
                    <div class="bg-des"></div>
                    <div class="position-relative" style="z-index: 3; font-family: var(--g-font-2) !important;">
                      <p style="font-family: Arial, sans-serif; font-size: 20px;">Bath</p>
                    </div>
                  </div></figcaption><a href="#"></a></figure>
          </div>
          
          <div class="customCol col-md-3 aos-init aos-animate" data-aos="" data-aos-duration="1000" style="padding-top: 1vh; padding-bottom: 1vh; padding-left: 1vh; padding-right: 1vh;">
            <figure style="width: 100%; height: 100%;" class="banner-theme hv-image-saturate banner-theme-mid banner-theme-center text-center  banner-theme-bea5fba5-a60a-4a41-b067-e258964bd8b0"><img src="{!! asset('assets/frontend/images/Category_Banner_Wellness_1920x.jpg') !!}" class="transition lazyloaded"  alt="" style="width: 100%; height: 100%;"><figcaption class="figcaption--bea5fba5-a60a-4a41-b067-e258964bd8b0"><div class="position-relative">
                    <div class="bg-des"></div>
                    <div class="position-relative" style="z-index: 3; font-family: var(--g-font-2) !important;">
                      <p style="font-family: Arial, sans-serif; font-size: 20px;">Wellness</p>
                    </div>
                  </div></figcaption><a href="#"></a></figure>
          </div>
          
          <div class="customCol col-md-3 aos-init aos-animate" data-aos="" data-aos-duration="1000" style="padding-top: 1vh; padding-bottom: 1vh; padding-left: 1vh; padding-right: 1vh;">
            <figure style="width: 100%; height: 100%;" class="banner-theme hv-image-saturate banner-theme-mid banner-theme-center text-center  banner-theme-9da11697-fd9e-4107-8c97-f2c103490f56"><img src="{!! asset('assets/frontend/images/Category_Banner_Immunity_Care_1920x.jpg') !!}" class="transition lazyloaded" alt="" style="width: 100%; height: 100%;">
            	<figcaption class="figcaption--9da11697-fd9e-4107-8c97-f2c103490f56">
            	    <div class="position-relative">
                    <div class="bg-des"></div>
                    <div class="position-relative" style="z-index: 3;">
                      <p style="font-family: Arial, sans-serif; font-size: 20px;">Immunity Care</p>
                    </div>
                    </div>
                </figcaption>
                <a href="#"></a>
            </figure>
          </div>
          
          <div class="customCol col-md-3 aos-init aos-animate" data-aos="" data-aos-duration="1000" style="padding-top: 1vh; padding-bottom: 1vh; padding-left: 1vh; padding-right: 1vh;">
            <figure style="width: 100%; height: 100%;" class="banner-theme hv-image-saturate banner-theme-mid banner-theme-center text-center  banner-theme-8146ea3a-bf65-43f7-8061-775a40551a7a"><img src="{!! asset('assets/frontend/images/Category_Banner_Gifting_1920x.jpg') !!}" class="transition lazyloaded" alt="" style="width: 100%; height: 100%;">
            <figcaption class="figcaption--8146ea3a-bf65-43f7-8061-775a40551a7a">
            	<div class="position-relative">
                    <div class="bg-des"></div>
                    <div class="position-relative" style="z-index: 3; font-family: var(--g-font-2) !important;">
                      <p style="font-family: Arial, sans-serif; font-size: 20px;">Gifting</p>
                    </div>
                  </div></figcaption>
                  <a href="#"></a>
            </figure>
          </div></div>
    </div>
  </div>
</div>
</div>

<!-- <div id="shopify-section-1610384723673dfeb0" class="shopify-section index-section">
<div class="container-fluid">
    <div class="section-block" style="margin: auto; padding: 10px;">
    	<div style="text-transform: none !important;" class="subtop text-center text-top aos-init aos-animate" data-aos="" data-aos-duration="500">
    	<h3><p style="font-family: 'Raleway', sans-serif; color: white; background-color: black; font-size: 16px; margin-bottom: 10px; padding: 5px; display: inline-block;">Instagram</p></h3>
        </div>
        <div id="pro_sld1" class="row owl-carousel owl-theme">	
            <div class="col brand-item carousel__slide-wrapper--5a009818-4a4d-47e4-b8fa-cfd12d9df789-16800884469b016440-4 slick-slide slick-active" style="width: 336px;">
            <a href="#" class="" tabindex="0"><img style="width: 100%; height: 100%; border-radius: 0px;" class="transition lazyloaded" src="{!! asset('assets/frontend/images/Sandalwood-saffron_night_cream_400x.jpg') !!}" alt=""></a>
        </div>
      </div>
  </div>
  </div>
</div> -->


<div id="shopify-section-fe6bcce1-2f9d-4582-8c9b-ae9595642841" class="shopify-section index-section">
<div class="customstylefe6bcce1-2f9d-4582-8c9b-ae9595642841 aos-init aos-animate" data-aos="">
  <style>
  .productlist-item {
    padding : 1vh;
  }
  .customstylefe6bcce1-2f9d-4582-8c9b-ae9595642841{
    background:#fefefe;
    padding: 0px 0px 0px 0px;
    margin: 0px 0px 0px 0px
  }
  @media (max-width:991px){
    .customstylefe6bcce1-2f9d-4582-8c9b-ae9595642841{
      padding: 10px 0px 0px 0px;
      margin: 0px 0px 0px 0px
    }
  }
</style>
<div class="container-fluid">
  <div class="section-block">
    <div style="text-transform: none !important;" class="subtop text-center text-top aos-init aos-animate" data-aos="" data-aos-duration="500">
      <h3><p style="font-family: 'Raleway', sans-serif; color: white; background-color: black; font-size: 16px; margin-bottom: 10px; padding: 5px; display: inline-block;">Testimonials</p></h3>
    </div>

      <div id="pro_sld1" class="row owl-carousel owl-theme">   
        
          <div class="customCol col-md-12 quote__slide text-center">
            <div class="quote-wrap">
              <h4>Highly effective</h4>
              <div class=" py-2 ">
                <p>Very rich and luxurious scrub that leaves the skin clean, moisturized, and velvety smooth. don't need a moisturizer after and keep smelling of sandalwood until hours after. Leaves skin ultra smooth afterwards, The smell lingers on very long. done wonders for my skin, best it remove the dead skin.</p>
              </div>
            <ul class="rating">
              <li class="rated"></li>
              <li class="rated"></li>
              <li class="rated"></li>
              <li class="rated"></li>
              <li class="rated"></li>
            </ul>
            <div class="mt-4 text-uppercase font-weight-bold">Surbhi</div>
            </div>
          </div>

          <div class="customCol col-md-12 quote__slide text-center ">
            <div class="quote-wrap">
              <h4>Excellent</h4>
              <div class=" py-2 ">
                <p>I could feel the difference in just one month, amazing product.</p>
              </div>
              <ul class="rating">
                <li class="rated"></li>
                <li class="rated"></li>
                <li class="rated"></li>
                <li class="rated"></li>
                <li class="rated"></li>
              </ul>
              <div class="mt-4 text-uppercase font-weight-bold">P Raj Rao</div>
              
            </div>
          </div>
 
          <div class="customCol col-md-12 quote__slide text-center">
            <div class="quote-wrap">
              <h4>Superior quality</h4>
              <div class=" py-2 ">
                <p>I recently tried Ashpveda henna and indigo colour, and I must say they are quite different from the ones available in the market. The colors turned out to be incredibly natural and beautiful. I'm truly impressed with the results and would highly recommend these products</p>
              </div>
                <ul class="rating">
                  <li class="rated"></li>
                  <li class="rated"></li>
                  <li class="rated"></li>
                  <li class="rated"></li>
                  <li class="rated"></li>
                </ul>
                  <div class="mt-4 text-uppercase font-weight-bold">Nidhi godika</div>
            </div>
          </div>

    </div>
</div>
</div>
</div>
</div>




<div id="shopify-section-1590595440196" class="shopify-section index-section">

  <style>
    @media (min-width: 991px){
      .block-sv3 .services-wrapper{
        padding: 0 90px;
      }
      .block-sv3 .services-slider{
        margin:0 -45px;
      }
      .block-sv3 .services-item{
        padding:0 45px;
      }
    }
    
  </style>

  <div class="customstyle1590595440196 block-sv3 aos-init aos-animate" data-aos="">
    <style>
  .productlist-item {
    padding : 1vh;
  }
  .customstyle1590595440196{
    background:rgba(0,0,0,0);
    padding: 0px 0px 0px 0px;
    margin: 0px 0px 0px 0px
  }
  @media (max-width:991px){
    .customstyle1590595440196{
      padding: 0px 0px 0px 0px;
      margin: 0px 0px 0px 0px
    }
  }
</style>
<div class="container-fluid">
  <div class="section-block row">

        <div class="col-md-3 media service-3 text-center">
            <div class="media-body" style="background-color:rgba(0,0,0,0);">
                <div class="py-5">
                <div class="mb-4 iconx8" style="color:#153462;">
                  <img style="max-width: 55px;" src="{!! asset('assets/frontend/images/ayu1.png') !!}">
                </div>
                <h6 class="mt-0 mb-2 h4 text-uppercase" style="color:#000000;">Natural &amp; Ayurvedic</h6>
                <div style="color:#000000;font-family: 'Raleway', sans-serif; line-height: 25px; font-size: 15px;">Our products are certified, natural and inspired by Ayurveda recipes by the ministry of AYUSH. We conform to the highest quality control standards.</div>
              </div>
            </div>
          </div>

          <div class="col-md-3 media service-3 text-center">
              <div class="media-body" style="background-color:rgba(0,0,0,0);">
                <div class="py-5">
                  <div class="mb-4 iconx8" style="color:#153462;">
                  <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 245.3 259.92">
                    <defs><style>.cls-1,.cls-2{fill:none;stroke-width:7px;}.cls-1{stroke:#231f20;stroke-linecap:round;stroke-miterlimit:10;}.cls-2{stroke:#000;stroke-linejoin:round;}</style></defs><path class="cls-1" d="M325.47,157.8A119.17,119.17,0,0,1,309,353.55" transform="translate(-127.35 -120.46)"></path><path class="cls-1" d="M192,354.08a119.18,119.18,0,0,1-24.17-190.33" transform="translate(-127.35 -120.46)"></path><path d="M201.42,371l7-20.14,13.52,4.68-1.18,3.43-9.62-3.32-1.79,5.19,8,2.76-1.1,3.18-8-2.77-2.88,8.34Z" transform="translate(-127.35 -120.46)"></path><path d="M227.41,378.43l2.42-21.16,9.36,1.06a6,6,0,0,1,2.62.92,7,7,0,0,1,1.95,1.85,7.73,7.73,0,0,1,1.14,2.43,6.62,6.62,0,0,1,.22,2.6,7.15,7.15,0,0,1-1.45,3.63,6,6,0,0,1-3.07,2.11l3.92,8.51-4.62-.53-3.51-7.58-4-.47-.81,7.1Zm5.34-10.23,5.15.58a2.13,2.13,0,0,0,1.09-.14,2.81,2.81,0,0,0,.94-.64,3.81,3.81,0,0,0,.69-1,4.58,4.58,0,0,0,.36-1.32,4.06,4.06,0,0,0-.08-1.4,4,4,0,0,0-.52-1.16,3.11,3.11,0,0,0-.84-.82,2.42,2.42,0,0,0-1-.37l-5-.57Z" transform="translate(-127.35 -120.46)"></path><path d="M271.42,375l.39,3.61-14.71,1.55L254.86,359l14.43-1.53.39,3.61-10.33,1.1.55,5.1,8.92-1,.35,3.34-8.92.95.58,5.52Z" transform="translate(-127.35 -120.46)"></path><path d="M297.36,367.63l1.14,3.44-14,4.65-6.69-20.22,13.78-4.56,1.15,3.44-9.86,3.26,1.61,4.87L293,359.7l1,3.19-8.51,2.82,1.74,5.26Z" transform="translate(-127.35 -120.46)"></path><g id="cruelty_v" data-name="cruelty v"><path d="M176.16,156.27a11.18,11.18,0,0,1-1.56-3.6,10.61,10.61,0,0,1-.18-4,10.29,10.29,0,0,1,1.39-3.85,10.06,10.06,0,0,1,3.17-3.24,9.7,9.7,0,0,1,5-1.76,8.23,8.23,0,0,1,4.52,1L187,144.45a5.39,5.39,0,0,0-1.69-.69,4.91,4.91,0,0,0-1.61-.09,6.24,6.24,0,0,0-1.49.36,7.35,7.35,0,0,0-1.31.68,5.59,5.59,0,0,0-1.91,2,5.83,5.83,0,0,0-.68,2.42,7.17,7.17,0,0,0,.3,2.54,8.74,8.74,0,0,0,1.09,2.33,8.33,8.33,0,0,0,1.88,2,7.13,7.13,0,0,0,2.34,1.2,6.35,6.35,0,0,0,2.53.22,5.52,5.52,0,0,0,2.44-.91,7.39,7.39,0,0,0,1.15-1,5.85,5.85,0,0,0,.91-1.3,5.74,5.74,0,0,0,.53-1.56,4.8,4.8,0,0,0,0-1.77l3.9-.27a6.54,6.54,0,0,1,0,2.57,9.67,9.67,0,0,1-.91,2.47,11.18,11.18,0,0,1-1.58,2.21,10.91,10.91,0,0,1-2,1.74,9.11,9.11,0,0,1-4,1.52,10.8,10.8,0,0,1-4.09-.27,11.64,11.64,0,0,1-3.73-1.74A11,11,0,0,1,176.16,156.27Z" transform="translate(-127.35 -120.46)"></path><path d="M201.72,152.88l-8.1-19.7,8.71-3.58a6,6,0,0,1,2.75-.46,7,7,0,0,1,2.6.68,7.76,7.76,0,0,1,2.17,1.57,6.87,6.87,0,0,1,1.45,2.18,7.13,7.13,0,0,1,.47,3.88,6,6,0,0,1-1.66,3.32l7.54,5.56-4.3,1.77-6.74-4.95-3.78,1.56,2.72,6.6Zm-.27-11.53,4.8-2a2.15,2.15,0,0,0,.89-.65,2.92,2.92,0,0,0,.51-1,3.74,3.74,0,0,0,.11-1.23,4.24,4.24,0,0,0-.32-1.32,3.77,3.77,0,0,0-.75-1.19,3.67,3.67,0,0,0-1-.77,3.13,3.13,0,0,0-1.13-.31,2.48,2.48,0,0,0-1.09.17L198.83,135Z" transform="translate(-127.35 -120.46)"></path><path d="M229.64,140.19a4.7,4.7,0,0,0,2.32-1,4.82,4.82,0,0,0,1.32-1.82,6.71,6.71,0,0,0,.45-2.33,12.5,12.5,0,0,0-.21-2.57l-2-10.68,4-.74,2,10.68a15.39,15.39,0,0,1,.23,4.14,9.28,9.28,0,0,1-1,3.6,7.79,7.79,0,0,1-2.43,2.76,11,11,0,0,1-8.43,1.51,8.11,8.11,0,0,1-3.27-1.78,9.15,9.15,0,0,1-2.19-3,15.7,15.7,0,0,1-1.21-3.83l-2-10.68,4.08-.75,2,10.68a12.76,12.76,0,0,0,.72,2.51,6.78,6.78,0,0,0,1.25,2,4.88,4.88,0,0,0,1.86,1.23A4.7,4.7,0,0,0,229.64,140.19Z" transform="translate(-127.35 -120.46)"></path><path d="M259.8,138.36l-.06,3.63L245,141.75l.35-21.29,14.52.23-.06,3.63-10.38-.17-.08,5.13,9,.15-.05,3.36-9-.15-.09,5.55Z" transform="translate(-127.35 -120.46)"></path><path d="M264.61,142.63l4.11-20.9,4.06.8-3.41,17.34L280,142l-.71,3.57Z" transform="translate(-127.35 -120.46)"></path><path d="M301.28,134.73l-6.4-2.33-6,16.61-3.87-1.4L291,131l-6.4-2.32,1.24-3.42,16.67,6.06Z" transform="translate(-127.35 -120.46)"></path><path d="M311.89,136.16l-.77,11.5L321,141.6l3.83,2.29-13.76,7.92-3.82,6.38-3.53-2.11,3.86-6.43.47-15.81Z" transform="translate(-127.35 -120.46)"></path></g><path class="cls-2" d="M240.59,197.11a38.74,38.74,0,0,0-4.65,2.54c-9.54,6-14.71,14.57-11.54,19.09a5.23,5.23,0,0,0,1.45,1.4,5.85,5.85,0,0,1-1.67-.16c-5.54-1.37-7.69-11-4.8-21.53s9.72-17.94,15.27-16.57C239.05,183,241.31,189.28,240.59,197.11Zm18.36-.17c-2.65-3.79-10.32-3.56-18.36.17a38.74,38.74,0,0,0-4.65,2.54c-9.54,6-14.71,14.57-11.54,19.09a5.23,5.23,0,0,0,1.45,1.4c4.21,2.77,13.18,1.19,21.57-4.09C257,210,262.11,201.47,259,196.94Zm-56.79,31.47c-10.77,9.15-14.35,23-8,30.85s20.25,6.86,31-2.3,14.35-23,8-30.85S212.94,219.25,202.16,228.41Zm10.57,5.31a4.51,4.51,0,1,0,4.51,4.51A4.51,4.51,0,0,0,212.73,233.72Zm0,30s-1.45,9.53,2.47,17.53,2.55,17.36,2,23-1.7,15.32,7.66,14,7.32-13.12,7.75-20.44c11.94,3.39,28.69,5,35.89,5.54,1.62.13.24.23.24.23l.27,0-.27,0s.79-.18-.24-.23c-27.26-1.34-20.5,14.38-12.32,14.38,8.51,0,22.46,1.19,23.49,0,.63-.74,7-3,10.05-10.6m-57.11-58.92s47,3.36,56.93,38q.15.5.27,1m7-2.19A12.17,12.17,0,1,0,309,297.12,12.09,12.09,0,0,0,296.81,285Z" transform="translate(-127.35 -120.46)"></path></svg>
                </div>
                  <h6 class="mt-0 mb-2 h4 text-uppercase" style="color:#000000;">Cruelty Free</h6>
                <div style="color:#000000;font-family: 'Raleway', sans-serif; line-height: 25px;
    font-size: 15px;">Our products are non-toxic, not tested on animals, and unadulterated without the use of parabens, sulphates, chemical sunscreens, and synthetic fragrances.</div>
              </div>
            </div>
          </div>

            <div class="col-md-3 media service-3 text-center">
              <div class="media-body" style="background-color:rgba(0,0,0,0);">
                <div class="py-5">
                  <div class="mb-4 iconx8" style="color:#153462;">
                  <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 272.02 278.95"><defs><style>.cls-1{fill:none;stroke:#000;stroke-linecap:round;stroke-linejoin:round;stroke-width:7px;}</style></defs><path class="cls-1" d="M292.13,214.29s-31.31,20.87-48.87,47.25c-5.26,7.89-9.29,16.28-10.87,24.75-10.22-39.57-27.07-56.42-38.3-72,0,0-.9-1-5.24,3.64s-6.64,4.92-4.53,7.66,23.81,31,34,67.34,5.87,32.94,11.62,33.57,16.47-47.1,24.38-57.95c15.7-.51,42.73-7.45,45.11-28.39s10-29.44,17-41.7c-14-9.7-50-3.23-58.55,2.73s-28.43,19.06-16.17,60.93" transform="translate(-113.99 -107.06)"></path><path class="cls-1" d="M324.09,140.12a132.51,132.51,0,1,1-140.76-4.66" transform="translate(-113.99 -107.06)"></path><path d="M198.36,116.69,209,130.07l.19-17.09,4.11-1.4-1,22.84-3.29,1.12L194.25,118.1Z" transform="translate(-113.99 -107.06)"></path><path d="M238.22,125.15l.57,3.59L224.18,131l-3.32-21,14.34-2.26.57,3.58-10.25,1.62.79,5.07,8.87-1.4.52,3.32-8.86,1.4.86,5.48Z" transform="translate(-113.99 -107.06)"></path><path d="M258.11,126.2a8.15,8.15,0,0,1-6,2.46,9.52,9.52,0,0,1-3.93-.91,10,10,0,0,1-3.18-2.36,11.07,11.07,0,0,1-2.1-3.5,11.36,11.36,0,0,1-.72-4.31,10.8,10.8,0,0,1,3.1-7.47,10.57,10.57,0,0,1,3.32-2.26,10.72,10.72,0,0,1,9.25.56,8.14,8.14,0,0,1,3.17,3.44l-3.12,2.23a5.82,5.82,0,0,0-2.23-2.47,6.29,6.29,0,0,0-3.15-.89,5.46,5.46,0,0,0-2.49.53,5.88,5.88,0,0,0-1.94,1.53,7.56,7.56,0,0,0-1.27,2.26,8.73,8.73,0,0,0-.48,2.72,8.17,8.17,0,0,0,.44,2.82,7.06,7.06,0,0,0,1.28,2.28,6.19,6.19,0,0,0,2,1.55,5.71,5.71,0,0,0,2.5.59,7.21,7.21,0,0,0,5.62-2.82l0-1.49-4.29-.07.05-3,7.71.12-.18,11-3.42-.06Z" transform="translate(-113.99 -107.06)"></path><path d="M276.73,109.68l3.59.72L284,132.89l-4.17-.85-.89-5.59L271.68,125l-3,4.82-4.17-.85Zm2.08,13.76-1.22-8.78-4.66,7.59Z" transform="translate(-113.99 -107.06)"></path><path d="M296.67,123l-5.19,12.63-3.83-1.58,8.1-19.7,3,1.22,4.95,17.16L309,119.83l3.83,1.58-8.09,19.67-3.11-1.28Z" transform="translate(-113.99 -107.06)"></path></svg>
                </div>
                  <h6 class="mt-0 mb-2 h4 text-uppercase" style="color:#000000;">Made in India</h6>
                <div style="color:#000000;font-family: 'Raleway', sans-serif; line-height: 25px; font-size: 15px;">We celebrate the rich knowledge and heritage of India through our products, sourcing rare ingredients from different parts of the country.</div>
              </div>
            </div>
          </div>

          <div class="col-md-3 media service-3 text-center">
              <div class="media-body" style="background-color:rgba(0,0,0,0);">
                <div class="py-5">
                  <div class="mb-4 iconx8" style="color:#153462;">
                  <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 245.98 260.67"><defs><style>.cls-1,.cls-2{fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:7px;}.cls-2{stroke-linecap:round;}.cls-3{fill:#231f20;}</style></defs><path class="cls-1" d="M240.43,288.1a8.43,8.43,0,1,1-8.43-8.43A8.43,8.43,0,0,1,240.43,288.1ZM268,279.67a8.43,8.43,0,1,0,8.43,8.43A8.43,8.43,0,0,0,268,279.67Zm-18,22.45a8.43,8.43,0,1,0,8.43,8.43A8.43,8.43,0,0,0,250,302.12Zm52.26-19.58a52.26,52.26,0,1,1-74.18-47.45,10.78,10.78,0,0,0,6.31-9.76V182.71h31.23v42.62a10.76,10.76,0,0,0,6.28,9.75A52.27,52.27,0,0,1,302.26,282.54ZM271.35,165.21H228.66a8.75,8.75,0,0,0,0,17.5h42.69a8.75,8.75,0,0,0,0-17.5Zm-69.91,99.42h97.37" transform="translate(-127.01 -120)"></path><path class="cls-2" d="M348.41,182.2a119.55,119.55,0,0,1-46.15,175.29" transform="translate(-127.01 -120)"></path><path class="cls-2" d="M197.74,357.49a119.55,119.55,0,0,1-46.21-175.2" transform="translate(-127.01 -120)"></path><path class="cls-3" d="M294.73,368.89l1.06,3.47-14.15,4.32-6.22-20.37,13.89-4.24,1.06,3.47-9.93,3,1.5,4.9,8.58-2.62,1,3.21-8.58,2.62,1.62,5.31Z" transform="translate(-127.01 -120)"></path><path class="cls-3" d="M271.15,375.24l.38,3.61-14.72,1.52-2.19-21.19,14.44-1.49.38,3.61-10.33,1.07.53,5.1,8.92-.92.35,3.34-8.92.92.57,5.52Z" transform="translate(-127.01 -120)"></path><path class="cls-3" d="M229.79,379l2-21.2,9.38.89a6,6,0,0,1,2.65.87,7.17,7.17,0,0,1,2,1.82,7.7,7.7,0,0,1,1.19,2.4,7.1,7.1,0,0,1-1.13,6.25,6,6,0,0,1-3,2.17l4.08,8.43-4.63-.44-3.65-7.52-4.07-.38-.67,7.1Zm5.14-10.33,5.16.5a2.38,2.38,0,0,0,1.09-.17,2.8,2.8,0,0,0,.92-.65,3.8,3.8,0,0,0,.67-1,4.35,4.35,0,0,0,.34-1.32,3.79,3.79,0,0,0-.11-1.4,3.59,3.59,0,0,0-.54-1.15,3,3,0,0,0-.85-.81,2.43,2.43,0,0,0-1-.35l-5-.48Z" transform="translate(-127.01 -120)"></path><path class="cls-3" d="M206.17,373l6.16-20.39,13.7,4.14L225,360.2l-9.74-2.94-1.58,5.26,8.1,2.44-1,3.22-8.09-2.44-2.55,8.44Z" transform="translate(-127.01 -120)"></path><path class="cls-3" d="M158.06,173.42a11.32,11.32,0,0,1-2.27-3.2,10.55,10.55,0,0,1-1-3.85,10.28,10.28,0,0,1,.57-4.06,10.17,10.17,0,0,1,2.43-3.83,9.67,9.67,0,0,1,4.47-2.73,8.21,8.21,0,0,1,4.64.05l-.65,3.81a5.46,5.46,0,0,0-1.8-.33,5.2,5.2,0,0,0-1.6.24,6.29,6.29,0,0,0-1.38.67,6.21,6.21,0,0,0-1.14.94,5.58,5.58,0,0,0-1.45,2.38,6.15,6.15,0,0,0-.17,2.52,7.2,7.2,0,0,0,.83,2.41,8.45,8.45,0,0,0,3.8,3.63,7.3,7.3,0,0,0,2.53.69,6.53,6.53,0,0,0,2.52-.31,5.34,5.34,0,0,0,2.2-1.4,6.34,6.34,0,0,0,.92-1.2,5.42,5.42,0,0,0,.63-1.46,5.78,5.78,0,0,0,.19-1.63,4.56,4.56,0,0,0-.39-1.73L175.7,164a6.37,6.37,0,0,1,.5,2.52,9.3,9.3,0,0,1-.38,2.6,10.29,10.29,0,0,1-1.09,2.48,11.19,11.19,0,0,1-1.6,2.13,9.07,9.07,0,0,1-3.6,2.31,10.72,10.72,0,0,1-4.07.58,11.94,11.94,0,0,1-4-.92A11.07,11.07,0,0,1,158.06,173.42Z" transform="translate(-127.01 -120)"></path><path class="cls-3" d="M186.59,136.38l11.65,17.83-3.44,2.25-5-7.61-8.09,5.28,5,7.61L183.25,164,171.6,146.17l3.46-2.26,4.71,7.21,8.09-5.29-4.71-7.21Z" transform="translate(-127.01 -120)"></path><path class="cls-3" d="M217.15,142.47l1.3,3.39-13.8,5.32L197,131.3l13.55-5.22,1.3,3.39-9.68,3.73L204,138l8.37-3.23,1.21,3.13-8.37,3.23,2,5.18Z" transform="translate(-127.01 -120)"></path><path class="cls-3" d="M241,141.67l-2-13.95-3.95,11.17-2.23.32-6.92-9.62,2,14-4.1.59-3-21.09,4.4-.63,7.95,11.11,4.58-12.9,4.36-.63,3,21.09Z" transform="translate(-127.01 -120)"></path><path class="cls-3" d="M252.63,141.52l.91-21.28,4.13.18-.9,21.28Z" transform="translate(-127.01 -120)"></path><path class="cls-3" d="M265.52,131.34a11.17,11.17,0,0,1,1.48-3.63,10.74,10.74,0,0,1,2.71-2.91,10.51,10.51,0,0,1,3.73-1.7,10.37,10.37,0,0,1,4.54,0,9.6,9.6,0,0,1,4.71,2.31,8.31,8.31,0,0,1,2.44,3.94l-3.57,1.49a5.59,5.59,0,0,0-.68-1.69,5.26,5.26,0,0,0-1.06-1.22,5.94,5.94,0,0,0-1.31-.81,6.2,6.2,0,0,0-1.4-.46,5.56,5.56,0,0,0-2.79,0,6,6,0,0,0-2.21,1.21,7.12,7.12,0,0,0-1.6,2,8.9,8.9,0,0,0-.91,2.4,8.22,8.22,0,0,0-.11,2.75,7.21,7.21,0,0,0,.77,2.51,6.34,6.34,0,0,0,1.61,2,5.43,5.43,0,0,0,2.36,1.11,6.08,6.08,0,0,0,1.5.13,5.54,5.54,0,0,0,1.57-.25,5.35,5.35,0,0,0,1.49-.71,4.65,4.65,0,0,0,1.24-1.26l2.92,2.61a6.54,6.54,0,0,1-1.86,1.77,9.26,9.26,0,0,1-2.4,1.07,10.79,10.79,0,0,1-2.68.42,10.91,10.91,0,0,1-2.65-.22,9.05,9.05,0,0,1-3.89-1.8,10.76,10.76,0,0,1-2.67-3.12,11.9,11.9,0,0,1-1.36-3.87A11,11,0,0,1,265.52,131.34Z" transform="translate(-127.01 -120)"></path><path class="cls-3" d="M301,130.59l3.35,1.48-1.24,22.76-3.89-1.73.34-5.66-6.8-3-3.94,4.07-3.89-1.73ZM300,144.48l.7-8.84-6.19,6.4Z" transform="translate(-127.01 -120)"></path><path class="cls-3" d="M307.4,157.69l12.33-17.37,3.37,2.4-10.23,14.4,8.86,6.29-2.1,3Z" transform="translate(-127.01 -120)"></path><path class="cls-3" d="M336.52,178.24l-2.63,2.51-10.23-10.68,15.39-14.74,10,10.49-2.62,2.51-7.18-7.5-3.71,3.55,6.21,6.48-2.43,2.32-6.2-6.47-4,3.83Z" transform="translate(-127.01 -120)"></path></svg>
                </div>
                <h6 class="mt-0 mb-2 h4 text-uppercase" style="color:#000000;">Chemical Free</h6>
                <div style="color:#000000;font-family: 'Raleway', sans-serif; line-height: 25px; font-size: 15px;">Enjoy complimentary samples on your orders.</div>

              </div>
            </div>
          </div>
        </div>
        </div>
    </div>
  </div>


<section id="shopify-section-41437f60-7dd7-40e5-9fde-dab634901c7f" class="shopify-section section">
<div id="our-brand-logo">
    <div class="container">
      <div id="brand_slider" class="row owl-carousel owl-theme">  
                          <div class="swiper-slide" role="group" aria-label="6 / 13" style="width: 132.857px; margin-right: 20px;">
                            <div class="brand-logo">
                              <img src="//www.ashpveda.com/cdn/shop/files/asset-6_35538b8d-7a4e-4fb9-83f2-195b213f697d.jpg?v=1688382225" alt="">
                            </div> 
                          </div>

                          <div class="swiper-slide" role="group" aria-label="7 / 13" style="width: 132.857px; margin-right: 20px;">
                            <div class="brand-logo">
                              <img src="//www.ashpveda.com/cdn/shop/files/asset-7_d7e9aabe-2752-40ab-a584-490142264fac.jpg?v=1688382225" alt="">
                            </div> 
                          </div>

                          <div class="swiper-slide" role="group" aria-label="8 / 13" style="width: 132.857px; margin-right: 20px;">
                            <div class="brand-logo">
                              <img src="//www.ashpveda.com/cdn/shop/files/asset-8_92c13cfa-5cf4-489c-a9e5-4fce9746d4e8.jpg?v=1688382225" alt="">
                            </div> 
                          </div>

                          <div class="swiper-slide" role="group" aria-label="9 / 13" style="width: 132.857px; margin-right: 20px;">
                            <div class="brand-logo">
                              <img src="//www.ashpveda.com/cdn/shop/files/asset-9_6cd74c9e-3b26-43b2-af1b-d14cb97ac474.jpg?v=1688382196" alt="">
                            </div> 
                          </div>

                          <div class="swiper-slide" role="group" aria-label="10 / 13" style="width: 132.857px; margin-right: 20px;">
                            <div class="brand-logo">
                              <img src="//www.ashpveda.com/cdn/shop/files/asset-10_dc927f3c-fb1f-417a-8648-7bdbb16d4da0.jpg?v=1688382196" alt="">
                            </div> 
                          </div>

                          <div class="swiper-slide" role="group" aria-label="11 / 13" style="width: 132.857px; margin-right: 20px;">
                            <div class="brand-logo">
                              <img src="//www.ashpveda.com/cdn/shop/files/asset-11_ea7190dd-5229-4e32-a724-523b01a9d1e0.jpg?v=1688382231" alt="">
                            </div> 
                          </div>

                          <div class="swiper-slide" role="group" aria-label="12 / 13" style="width: 132.857px; margin-right: 20px;">
                            <div class="brand-logo">
                              <img src="//www.ashpveda.com/cdn/shop/files/asset-12_248d7c9e-70b8-47f8-92bf-dcab8e7508b1.jpg?v=1688382196" alt="">
                            </div> 
                          </div>
    </div>
    </div>
</div>
</section>



@endsection