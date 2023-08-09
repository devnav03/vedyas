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

<div id="shopify-section-1610384723673dfeb0" class="shopify-section index-section">
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
</div>



<div id="shopify-section-fe6bcce1-2f9d-4582-8c9b-ae9595642841" class="shopify-section index-section"><!-- quotes.liquid -->
<div class="customstylefe6bcce1-2f9d-4582-8c9b-ae9595642841 aos-init aos-animate" data-aos=""><style>
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
  <div class="section-block"><!-- section-heading.liquid - Apply for all section title --><div style="text-transform: none !important;" class="subtop text-center text-top aos-init aos-animate" data-aos="" data-aos-duration="500"><h3><p style="font-family: 'Raleway', sans-serif; color: white; background-color: black; font-size: 16px; margin-bottom: 10px; padding: 5px; display: inline-block;">Testimonials</p></h3></div><div class="quotes-wrapper dots-negative aos-init aos-animate" data-aos="data-aos-delay=&quot;200&quot;"> 
 


        <div class="quote__slide-wrapper carousel__slide-wrapper--f12ec540-f384-41b3-b14f-ab73683d1b00 slick-slide" data-slick-index="25" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide225" style="width: 455px;">
          <div class="quote__slide text-center ">
            <div class="quote-wrap"><div class=" py-2 "><p>Very rich and luxurious scrub that leaves the skin clean, moisturized, and velvety smooth. don't need a moisturizer after and keep smelling of sandalwood until hours after. Leaves skin ultra smooth afterwards, The smell lingers on very long. done wonders for my skin, best it remove the dead skin.</p></div><ul class="rating"><li class="rated"></li><li class="rated"></li><li class="rated"></li><li class="rated"></li><li class="rated"></li></ul><div class="mt-4 text-uppercase font-weight-bold">Surbhi</div>
              
            </div>
          </div>
        </div>

        <div class="quote__slide-wrapper carousel__slide-wrapper--531e2ac6-fdc0-4c58-94a4-901cbc853b67 slick-slide" data-slick-index="26" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide226" style="width: 455px;">
          <div class="quote__slide text-center ">
            <div class="quote-wrap"><h4>
                Excellent
              </h4><div class=" py-2 "><p>I could feel the difference in just one month, amazing product.</p></div><ul class="rating"><li class="rated"></li><li class="rated"></li><li class="rated"></li><li class="rated"></li><li class="rated"></li></ul><div class="mt-4 text-uppercase font-weight-bold">P Raj Rao</div>
              
            </div>
          </div>
        </div>

        <div class="quote__slide-wrapper carousel__slide-wrapper--de3c35db-07c7-4d4d-a760-0fba04bc87fb slick-slide" data-slick-index="27" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide227" style="width: 455px;">
          <div class="quote__slide text-center ">
            <div class="quote-wrap"><h4>
                Impressive Results with Henna and Indigo Color
              </h4><div class=" py-2 "><p>I recently tried Ashpveda henna and indigo colour, and I must say they are quite different from the ones available in the market. The colors turned out to be incredibly natural and beautiful. I'm truly impressed with the results and would highly recommend these products</p></div><ul class="rating"><li class="rated"></li><li class="rated"></li><li class="rated"></li><li class="rated"></li><li class="rated"></li></ul><div class="mt-4 text-uppercase font-weight-bold">Nidhi godika</div>
              
            </div>
          </div>
        </div>

       
    </div>
</div>
</div>
</div>


</div>









@endsection