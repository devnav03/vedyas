<header class="site-header page-element is-moved-by-drawer site-header--sticky index-header">
    <div id="hetop" class="header-head py-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="text-sm-left text-center">
                        Call: <a href="tel:+917230919999" target="_blank">+91 8888 545 000</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="text-sm-center text-center">
                        10% Off on First Order | Cash on Delivery Available.
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="text-right d-none d-lg-block">
                        <ul class="list-inline social-icons">
                            <li class="list-inline-item">
                              <a href="#" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="list-inline-item">
                              <a href="#" title="Pinterest" target="_blank"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                              <a href="#" title="Pinterest" target="_blank"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                              <a href="#" title="Linkedin" target="_blank"><i class="fab fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="hebottom" class="header-bottom">
      <div class="container-fluid">
        <div class="row row-header pt-3 pb-3 pb-lg-0">
          <div class="d-block d-lg-none toggle-menu-mobile col-3 col-md align-items-center d-flex">
            <button type="button" class="text-link site-header__link js-drawer-open-left align-items-center d-inline-flex" aria-expanded="false">
            <span class="site-header__menu-toggle--open humberger">
                <span class="bar1"></span>
                <span class="bar2"></span>
                <span class="bar3"></span>
            </span>
            </button>
          </div>
          <div class="col-md-4 col-3 col-sm-3 header-top__left d-none d-lg-flex">
            <a href="#" data-placement="top"><i class="fa-solid fa-location-dot"></i> Our Presence </a>
            <span style="padding: 10px;"></span>
            <a href="javascript:void(0)" data-placement="top" data-toggle="modal" data-target="#modalContactForm"><i class="fa-solid fa-phone"></i> Free Consultation</a>
        </div>
        <div class="col-sm-12 col-md-4 col-6 d-flex align--center justify-content-center col-logo ">
   <h1 class="site-header__logo  has-logo " itemscope="" itemtype="http://schema.org/Organization"><a href="/" itemprop="url" class="site-header__logo-link">
    <img class="logo-dark" src="{!! asset('assets/frontend/images/logo.png') !!}" alt="logo">
    <img class="logo-white d-none" src="{!! asset('assets/frontend/images/logo.png') !!}" alt="Logo"></a></h1></div>
          <div class="col-sm-3 col-md-4 col-3 header-top__right">
   
            <div class="header--acount d-none d-lg-inline-block font-family-1">
              <a href="javascript:void(0)" data-toggle="modal" data-target="#jsLogin" class="site-header__link site-account js-open-login">
                
                <span class="account-text">Sign In</span>
              </a> /
              <a href="#" class="site-header__link site-register mr-3">
                <span class="register-text">Register</span>
              </a>
            </div>
            
            <div class="site-header__search-wrap">
              <div class="overlay" onclick="toggleClassSearch()"></div>
              <form id="form-search-header" action="/search" method="get" class="site-header__search js-ajaxsearch" role="search" style="position: relative;">
                <div class="container py-5">
                  <div class="row">
                    <div class="col-12">
                      
                      <input type="hidden" name="type" value="product">
                      <div class="d-flex align-items-center mb-2">
                        <label for="SiteNavSearch" class="label-search mr-auto mb-0 text-uppercase text-muted">WHAT ARE YOU LOOKING FOR?</label>
                        <a href="#" onclick="toggleClassSearch()"><i class="icon-close"></i></a>
                      </div>
                      
                      <div class="d-flex align-items-center pb-lg-2 border-bottom">
                        <input onfocus="this.value=''" type="search" name="q" id="SiteNavSearch" placeholder="Search Products..." aria-label="Search Products..." autocomplete="off" class="site-header__search-input mr-auto">
                        <button type="submit" class="text-link site-header__link site-header__search-submit"><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-search">
    <path fill="currentColor" d="M508.5 481.6l-129-129c-2.3-2.3-5.3-3.5-8.5-3.5h-10.3C395 312 416 262.5 416 208 416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c54.5 0 104-21 141.1-55.2V371c0 3.2 1.3 6.2 3.5 8.5l129 129c4.7 4.7 12.3 4.7 17 0l9.9-9.9c4.7-4.7 4.7-12.3 0-17zM208 384c-97.3 0-176-78.7-176-176S110.7 32 208 32s176 78.7 176 176-78.7 176-176 176z" class=""></path></svg></button>
                      </div>
                      <div class="search-results" style=""></div>
                    </div>
                  </div>
                </div>
              </form>
              <button onclick="toggleClassSearch()" class="text-link site-header__link site-header__search-pop"><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-search">
    <path fill="currentColor" d="M508.5 481.6l-129-129c-2.3-2.3-5.3-3.5-8.5-3.5h-10.3C395 312 416 262.5 416 208 416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c54.5 0 104-21 141.1-55.2V371c0 3.2 1.3 6.2 3.5 8.5l129 129c4.7 4.7 12.3 4.7 17 0l9.9-9.9c4.7-4.7 4.7-12.3 0-17zM208 384c-97.3 0-176-78.7-176-176S110.7 32 208 32s176 78.7 176 176-78.7 176-176 176z" class="">
    </path>
</svg></button>
            </div>

  </div>
</div>
<div class="row">
  <div class="col-md-12 col d-none d-lg-block text-center col-menu">
  <nav class="nav-bar d-none d-lg-block" role="navigation">
  <ul class="site-nav">
    <li class="site-nav__item site-nav--active">
      <a href="/" class="site-nav__link">
        <span class="site-nav__title">Home</span></a>
    </li>
@php
$par_cats = get_par_cat();
@endphp

@foreach($par_cats as $par_cat)
    <li class="site-nav__item">
      <a href="{{ route('categoryDetail', $par_cat->url) }}" class="site-nav__link">
        <span class="site-nav__title">{{ $par_cat->name }}</span></a>
    </li>
@endforeach 


</ul>
</nav>
</div>
    </div>
    </div>
    </div>

</header>
