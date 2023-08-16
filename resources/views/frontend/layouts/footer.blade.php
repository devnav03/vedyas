<footer class="site-footer" role="contentinfo">
  <div class="container-fluid text-center">
    <div class="row pb-5">
      <div class="col-lg-3 col-md-6 ">
        <div class="site-footer__section">
          <div class="rte-setting">
            <img src="{!! asset('assets/frontend/images/logo.png') !!}">
          </div>
              </div>
            </div>
@php
$par_cats = get_par_cat();
@endphp            
        <div class="col-lg-3 col-md-6 ">
          <div class="site-footer__section">
            <h3 class="h3 site-footer__section-title">Our Categories</h3>
            <ul class="site-footer__list">
            @foreach($par_cats as $par_cat)
              <li class="site-footer__list-item">
                  <a href="{{ route('categoryDetail', $par_cat->url) }}">{{ $par_cat->name }}</a>
              </li>
            @endforeach        
                    </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 ">
                  <div class="site-footer__section">
                    <h3 class="h3 site-footer__section-title">Quick Links</h3>
                    <ul class="site-footer__list">
                      <li class="site-footer__list-item">
                        <a href="#">About Us</a>
                      </li><li class="site-footer__list-item">
                        <a href="#" target="_blank">Track Order</a>
                      </li><li class="site-footer__list-item">
                        <a href="#">Our Presence</a>
                      </li><li class="site-footer__list-item">
                        <a href="#">Photo Gallery</a>
                      </li><li class="site-footer__list-item">
                        <a href="#">FAQs</a>
                      </li><li class="site-footer__list-item">
                        <a href="#">Blog</a>
                      </li>
                    </ul>
                </div>
                </div>

                <div class="col-lg-3 col-md-6 ">
                  <div class="site-footer__section">
                    <h3 class="h3 site-footer__section-title">Customer Service</h3>
                    <ul class="site-footer__list">
                      <li class="site-footer__list-item">
                        <a href="#">Shipping Policy</a>
                      </li>
                      <li class="site-footer__list-item">
                        <a href="#">Refund Policy</a>
                      </li>
                      <li class="site-footer__list-item">
                        <a href="#">Privacy Policy</a>
                      </li>
                      <li class="site-footer__list-item">
                        <a href="#">Terms of Service</a>
                      </li>
                      <li class="site-footer__list-item">
                        <a href="#">Cancellation Policy</a>
                      </li>
                      <li class="site-footer__list-item">
                        <a href="#">Contact</a>
                      </li>
                    </ul>
                </div>
              </div>
              </div>
  </div>
</footer>