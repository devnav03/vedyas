<header class="site-header page-element is-moved-by-drawer site-header--sticky index-header">
    <div id="hetop" class="header-head py-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="text-sm-left text-center">
                        Call: <a href="tel:+917230919999" target="_blank">+91 7230 919 999</a>
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
    <img class="logo-white d-none" src="{!! asset('assets/frontend/images/logo.png') !!}" alt="Logo">
    </a></h1></div>
          <div class="col-sm-3 col-md-4 col-3 header-top__right">
            <!-- header-3 | login -->
            
            
             
            <div class="header--acount d-none d-lg-inline-block font-family-1">
              <a href="javascript:void(0)" data-toggle="modal" data-target="#jsLogin" class="site-header__link site-account js-open-login">
                
                <span class="account-text">Sign In</span>
              </a> /
              <a href="/account/register" class="site-header__link site-register mr-3">
                <span class="register-text">Register</span>
              </a>
            </div>
            
            
             <!-- header-3 | search -->
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
    <path fill="currentColor" d="M508.5 481.6l-129-129c-2.3-2.3-5.3-3.5-8.5-3.5h-10.3C395 312 416 262.5 416 208 416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c54.5 0 104-21 141.1-55.2V371c0 3.2 1.3 6.2 3.5 8.5l129 129c4.7 4.7 12.3 4.7 17 0l9.9-9.9c4.7-4.7 4.7-12.3 0-17zM208 384c-97.3 0-176-78.7-176-176S110.7 32 208 32s176 78.7 176 176-78.7 176-176 176z" class="">
    </path>
</svg></button>
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
              
            </div><span class="site-header__link site-header__cart js-mini-cart " data-cartmini="false">
  <span class="js-toggle-cart" title="Shopping Cart"><svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="shopping-bag" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-cart"><path fill="currentColor" d="M352 128C352 57.421 294.579 0 224 0 153.42 0 96 57.421 96 128H0v304c0 44.183 35.817 80 80 80h288c44.183 0 80-35.817 80-80V128h-96zM224 32c52.935 0 96 43.065 96 96H128c0-52.935 43.065-96 96-96zm192 400c0 26.467-21.533 48-48 48H80c-26.467 0-48-21.533-48-48V160h64v48c0 8.837 7.164 16 16 16s16-7.163 16-16v-48h192v48c0 8.837 7.163 16 16 16s16-7.163 16-16v-48h64v272z" class=""></path></svg><span class="icon__fallback-text">Cart</span>
    <span class="js-cart-count site-header__cart-indicator">0</span>
  </span>
  <div class="mini-cart-content shadow text-center">
    <div class="js-mini-cart-content"><div class="alert">No products in the cart.</div></div>
    <div class="mini-cart-total font-family-1">
      Total: <span class="js-cart-total">₹ 0.00</span>
    </div><!-- free-shipping.liquid -->
<div class="progress js-free-shipping" data-value="50000" data-start="Spend" data-end="or More &amp; Enjoy <b>FREE SHIPPING</b>!">
  <div class="progress-bar progress-bar-striped progress-bar-animated primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
  <span class="free-shipping-content"><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="shipping-fast" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-shipping"><path fill="currentColor" d="M624 368h-16V251.9c0-19-7.7-37.5-21.1-50.9L503 117.1C489.6 103.7 471 96 452.1 96H416V56c0-30.9-25.1-56-56-56H120C89.1 0 64 25.1 64 56v40H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h240c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H112V56c0-4.4 3.6-8 8-8h240c4.4 0 8 3.6 8 8v312H242.7c-16.6-28.6-47.2-48-82.7-48-17.6 0-33.8 5.1-48 13.3V288H64v128c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-16c0-8.8-7.2-16-16-16zm-464 96c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm256-320h36.1c6.3 0 12.5 2.6 17 7l73 73H416v-80zm64 320c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-100.9c-17.2-25.9-46.6-43.1-80-43.1-24.7 0-47 9.6-64 24.9V272h144v91.1zM256 248v-16c0-4.4-3.6-8-8-8H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h240c4.4 0 8-3.6 8-8zm24-56c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H40c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h240z" class=""></path></svg><span class="js-free-shipping-text">Spend ₹ 500.00 or More &amp; Enjoy <b>FREE SHIPPING</b>!</span>
  </span>
</div>
<div class="mini-cart-taxes">Taxes and shipping calculated at checkout</div>
    <div class="mini-cart-btns mt-4">
      <a class="btn gradient-theme js-cart-btn-checkout btn-theme w-100  disabled" href="/cart">Update Cart</a>
      <a class="btn btn-link btn-sm js-cart-btn-cart" href="#">Check Out</a>
    </div>
  </div>
</span>
  </div>
          </div>
          <div class="row">
            <div class="col-md-12 col d-none d-lg-block text-center col-menu">
              <nav class="nav-bar d-none d-lg-block" role="navigation">
  <ul class="site-nav">
    <li class="site-nav__item site-nav--active">
      <a href="/" class="site-nav__link" aria-current="page">
        <span class="site-nav__title">Home</span></a>
    </li>
    <li class="site-nav__item site-nav__item-mega  " data-width="0">
      <a href="#" class="site-nav__link dropdown-toggle">
        <span class="site-nav__title">Skin Care</span></a>
      <div class="site-nav__dropdown meganav meganav-1 ">
        <div class="container" style="z-index: 999999;">
  <div class="row">
    <div class="mega-col col-sm-12 order-">
      <div class="row">
        <div class="col-sm-3">
    <div class="mega-col-inner ">
      <div class="menu-title">
        <a href="#">Shop by Category</a>
      </div>
      <div class="widget-inner">
        <ul class="nav-links"><li>
            <a href="#">Day Creams</a>
          </li><li>
            <a href="#">Eye Care</a>
          </li><li>
            <a href="#">Face Serums</a>
          </li><li>
            <a href="#">Face Toner</a>
          </li><li>
            <a href="#">Face Wash</a>
          </li></ul>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="mega-col-inner ">
      <div class="menu-title">
        <div style="display: block; height: 30px; pointer-events: none;"></div>
      </div>
      <div class="widget-inner">
        <ul class="nav-links"><li>
            <a href="#">Night Creams</a>
          </li><li>
            <a href="#">Makeup Remover</a>
          </li><li>
            <a href="#">Lip Care</a>
          </li><li>
            <a href="#">Sunscreen</a>
          </li><li>
            <a href="#">Scrubs</a>
          </li></ul>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="mega-col-inner ">
      <div class="menu-title">
        <a href="#">Shop by Concern</a>
      </div>
      <div class="widget-inner">
        <ul class="nav-links"><li>
            <a href="#">Acne</a>
          </li><li>
            <a href="#">Anti-Aging</a>
          </li><li>
            <a href="#">Dark Circles</a>
          </li><li>
            <a href="#">Dark Lips</a>
          </li><li>
            <a href="#">Exfoliation</a>
          </li><li>
            <a href="#">Face Moisturizers</a>
          </li></ul>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="mega-col-inner ">
      <div class="menu-title">
        <div style="display: block; height: 30px; pointer-events: none;"></div>
      </div>
      <div class="widget-inner">
        <ul class="nav-links"><li>
            <a href="#">Face Skin Repair</a>
          </li><li>
            <a href="#">Tan Removal</a>
          </li><li>
            <a href="#">Skin Brightening</a>
          </li><li>
            <a href="#">Face Tone</a>
          </li><li>
            <a href="#">Pigmentation</a>
          </li></ul>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div></div>
    </li><li class="site-nav__item site-nav__item-mega  site-nav__item-mega--custom " data-width="600">
      <a href="#" class="site-nav__link dropdown-toggle">
        <span class="site-nav__title">Hair Care</span></a>
      <div class="site-nav__dropdown meganav meganav-2 " style="width: 600px; margin-left: -300px;"><div class="container" style="z-index: 999999;">
  <div class="row">
    <div class="mega-col col-sm-12 order-">
    <div class="row">
        <div class="col-sm-6">
    <div class="mega-col-inner ">
      <div class="menu-title">
        <a href="#">Shop by Category</a>
      </div>
      <div class="widget-inner">
        <ul class="nav-links"><li>
            <a href="#">Natural Hair Colors</a>
          </li><li>
            <a href="#">Hair Conditioner</a>
          </li><li>
            <a href="#">Hair Oils</a>
          </li><li>
            <a href="#">Hair Wash</a>
          </li></ul>
      </div>
    </div>
  </div><div class="col-sm-6">
    <div class="mega-col-inner ">
      <div class="menu-title">
        <a href="#">Shop by Concern</a>
      </div>
      <div class="widget-inner">
        <ul class="nav-links"><li>
            <a href="#">Anti Dandruff</a>
          </li><li>
            <a href="#" style="">Chemically Treated Hair</a>
          </li><li>
            <a href="#">Hair Loss</a>
          </li><li>
            <a href="#">Hair Repair</a>
          </li><li>
            <a href="#">Thick Hair</a>
          </li><li>
            <a href="#">Shiny Hair</a>
          </li></ul>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div></div>
    </li>
    <li class="site-nav__item site-nav__item-mega  site-nav__item-mega--custom " data-width="600">
      <a href="#" class="site-nav__link dropdown-toggle">
        <span class="site-nav__title">Bath</span></a>
      <div class="site-nav__dropdown meganav meganav-3 " style="width: 600px; margin-left: -300px;"><div class="container" style="z-index: 999999;">
  <div class="row"><div class="mega-col col-sm-12 order-"><div class="row"><div class="col-sm-6">
    <div class="mega-col-inner ">
      <div class="menu-title">
        <a href="#">Shop by Category</a>
      </div>
      <div class="widget-inner">
        <ul class="nav-links"><li>
            <a href="#">Body Polishers</a>
          </li><li>
            <a href="#">Body Wash</a>
          </li><li>
            <a href="#">Premium Soaps</a>
          </li><li>
            <a href="#">Ubtan</a>
          </li></ul>
      </div>
    </div>
  </div><div class="col-sm-6">
    <div class="mega-col-inner ">
      <div class="menu-title">
        <a href="#">Shop by Concern</a>
      </div>
      <div class="widget-inner">
        <ul class="nav-links"><li>
            <a href="#">De-Tan</a>
          </li><li>
            <a href="#">Moisturizers</a>
          </li></ul>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
    </li>
    <li class="site-nav__item site-nav__item-mega  site-nav__item-mega--custom " data-width="700">
      <a href="#" class="site-nav__link dropdown-toggle">
        <span class="site-nav__title">Body</span></a>
      <div class="site-nav__dropdown meganav meganav-6 " style="width: 700px; margin-left: -350px;"><div class="container" style="z-index: 999999;">
  <div class="row"><div class="mega-col col-sm-12 order-"><div class="row"><div class="col-sm-4">
    <div class="mega-col-inner ">
      <div class="menu-title">
        <a href="#">Shop by Category</a>
      </div>
      <div class="widget-inner">
        <ul class="nav-links"><li>
            <a href="#">Body Creams</a>
          </li><li>
            <a href="#">Body Lotions</a>
          </li><li>
            <a href="#">Body Oils</a>
          </li><li>
            <a href="#">Exfoliators</a>
          </li><li>
            <a href="#">Foot Care</a>
          </li><li>
            <a href="#">Hand Care</a>
          </li></ul>
      </div>
    </div>
  </div><div class="col-sm-4">
    <div class="mega-col-inner ">
      <div class="menu-title">
        <a href="#">Shop by Concern</a>
      </div>
      <div class="widget-inner">
        <ul class="nav-links"><li>
            <a href="#">After Bath Oil</a>
          </li><li>
            <a href="#">Body Pain</a>
          </li><li>
            <a href="#">Body Scar</a>
          </li><li>
            <a href="#" style="">Cracked Heels</a>
          </li></ul>
      </div>
    </div>
  </div><div class="col-sm-4">
    <div class="mega-col-inner ">
      <div class="menu-title">
        <div style="display: block; height: 30px; pointer-events: none;"></div>
      </div>
      <div class="widget-inner">
        <ul class="nav-links"><li>
            <a href="#">Soft Hand</a>
          </li><li>
            <a href="#">Skin Repair</a>
          </li><li>
            <a href="#">Muscle Relax</a>
          </li><li>
            <a href="#">UV Protection</a>
          </li></ul>
      </div>
    </div>
  </div></div></div></div>
</div></div>
    </li>
    <li class="site-nav__item site-nav__item-mega  site-nav__item-mega--custom " data-width="600">
      <a href="#" class="site-nav__link dropdown-toggle">
        <span class="site-nav__title">General</span></a>
  <div class="site-nav__dropdown meganav meganav-4 " style="width: 600px; margin-left: -300px;">
  <div class="container" style="z-index: 999999;">
  <div class="row">
    <div class="mega-col col-sm-12 order-">
    <div class="row">
    <div class="col-sm-6">
    <div class="mega-col-inner ">
      <div class="menu-title">
        <a href="#">Shop by Category</a>
      </div>
      <div class="widget-inner">
        <ul class="nav-links"><li>
            <a href="#">Handwash</a>
          </li><li>
            <a href="#">Oral Care</a>
          </li><li>
            <a href="#">Intimate Care</a>
          </li></ul>
      </div>
    </div>
  </div><div class="col-sm-6">
    <div class="mega-col-inner ">
      <div class="menu-title">
        <a href="#">Shop by Concern</a>
      </div>
      <div class="widget-inner">
        <ul class="nav-links"><li>
            <a href="#" style="">Gums &amp; Teeth</a>
          </li><li>
            <a href="#">Incense Sticks</a>
          </li><li>
            <a href="#">Hygiene</a>
          </li></ul>
      </div>
    </div>
  </div></div></div></div>
</div></div>
    </li><li class="site-nav__item site-nav__item-mega  " data-width="0">
      <a href="#" class="site-nav__link dropdown-toggle">
        <span class="site-nav__title">Wellness</span></a>
      <div class="site-nav__dropdown meganav meganav-5 "><div class="container" style="z-index: 999999;">
  <div class="row"><div class="mega-col col-sm-12 order-"><div class="row"><div class="col-sm-3">
    <div class="mega-col-inner ">
      <div class="menu-title">
        <a href="#">Shop By Category</a>
      </div>
      <div class="widget-inner">
        <ul class="nav-links"><li>
            <a href="#">Immunity Booster</a>
          </li><li>
            <a href="#">Wellness Combo</a>
          </li></ul>
      </div>
    </div>
  </div><div class="col-sm-3">
    <div class="mega-col-inner ">
      <div class="menu-title">
        <a href="#">Shop By Concern</a>
      </div>
      <div class="widget-inner">
        <ul class="nav-links"><li>
            <a href="#">Kidney Problems</a>
          </li><li>
            <a href="#">Thyroid</a>
          </li><li>
            <a href="#">Diabetes</a>
          </li><li>
            <a href="#">Indigestion</a>
          </li><li>
            <a href="#">Piles</a>
          </li><li>
            <a href="#">Allergy</a>
          </li></ul>
      </div>
    </div>
  </div><div class="col-sm-3">
    <div class="mega-col-inner ">
      <div class="menu-title">
        <div style="display: block; height: 30px; pointer-events: none;"></div>
      </div>
      <div class="widget-inner">
        <ul class="nav-links">
            <li><a href="#">Brain &amp; Memory</a></li>
            <li><a href="#">Gynae / Female Issues</a></li>
            <li><a href="#">Heart Problems</a></li>
            <li><a href="#">Joint Pain</a></li>
            <li><a href="#">Physical Weakness</a></li>
            <li><a href="#">Asthma</a></li>
            <li><a href="#">Kids Development</a></li>
        </ul>
      </div>
    </div>
  </div><div class="col-sm-3">
    <div class="mega-col-inner ">
      <div class="menu-title">
        <div style="display: block; height: 30px; pointer-events: none;"></div>
      </div>
      <div class="widget-inner">
        <ul class="nav-links">
            <li><a href="#">Detoxification</a></li>
            <li><a href="#">Blood Pressure</a></li>
            <li><a href="#">Liver Disorder</a></li>
            <li><a href="#">Vigour &amp; Vitality</a></li>
            <li><a href="#">Cough &amp; Cold</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div></div>
    </li>
    <li class="site-nav__item">
      <a href="#" class="site-nav__link">
        <span class="site-nav__title">Gifting</span></a>
    </li>
</ul>
</nav>
</div>
    </div>
    </div>
    </div>

</header>
