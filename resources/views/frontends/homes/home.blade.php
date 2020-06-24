@extends('frontends.layouts.layout')
@section('content')

<div class="banner">
  <div class="banner_background" style="background-image:url({{ asset('OneTech') }}/images/banner_background.jpg)"></div>
  <div class="container fill_height">
    <div class="row fill_height">
      <div class="banner_product_image"><img src="{{ asset('OneTech') }}/images/banner_product.png" alt=""></div>
      <div class="col-lg-5 offset-lg-4 fill_height">
        <div class="banner_content">
          <h1 class="banner_text">new era of smartphones</h1>
          <div class="banner_price"><span>$530</span>$460</div>
          <div class="banner_product_name">Apple Iphone 6s</div>
          <div class="button banner_button"><a href="#">Shop Now</a></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Characteristics -->

<div class="characteristics">
  <div class="container">
    <div class="row">

      <!-- Char. Item -->
      <div class="col-lg-3 col-md-6 char_col">
        
        <div class="char_item d-flex flex-row align-items-center justify-content-start">
          <div class="char_icon"><img src="{{ asset('OneTech') }}/images/char_1.png" alt=""></div>
          <div class="char_content">
            <div class="char_title">Free Delivery</div>
            <div class="char_subtitle">from $50</div>
          </div>
        </div>
      </div>

      <!-- Char. Item -->
      <div class="col-lg-3 col-md-6 char_col">
        
        <div class="char_item d-flex flex-row align-items-center justify-content-start">
          <div class="char_icon"><img src="{{ asset('OneTech') }}/images/char_2.png" alt=""></div>
          <div class="char_content">
            <div class="char_title">Free Delivery</div>
            <div class="char_subtitle">from $50</div>
          </div>
        </div>
      </div>

      <!-- Char. Item -->
      <div class="col-lg-3 col-md-6 char_col">
        
        <div class="char_item d-flex flex-row align-items-center justify-content-start">
          <div class="char_icon"><img src="{{ asset('OneTech') }}/images/char_3.png" alt=""></div>
          <div class="char_content">
            <div class="char_title">Free Delivery</div>
            <div class="char_subtitle">from $50</div>
          </div>
        </div>
      </div>

      <!-- Char. Item -->
      <div class="col-lg-3 col-md-6 char_col">
        
        <div class="char_item d-flex flex-row align-items-center justify-content-start">
          <div class="char_icon"><img src="{{ asset('OneTech') }}/images/char_4.png" alt=""></div>
          <div class="char_content">
            <div class="char_title">Free Delivery</div>
            <div class="char_subtitle">from $50</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Deals of the week -->

<div class="deals_featured">
  <div class="container">
    <h3>Chiến dịch 1</h3>
    <div class="row">
      @foreach($campaign1 as $item)
      <div class="col-md-4 mt-3">
        <img src="{{ $item->banner }}" alt="" style="width: 100%;">
      </div>
      @endforeach
    </div>
  </div>
</div>

<!-- Popular Categories -->

<div class="popular_categories">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="popular_categories_content">
          <div class="popular_categories_title">Popular Categories</div>
          <div class="popular_categories_slider_nav">
            <div class="popular_categories_prev popular_categories_nav"><i class="fas fa-angle-left ml-auto"></i></div>
            <div class="popular_categories_next popular_categories_nav"><i class="fas fa-angle-right ml-auto"></i></div>
          </div>
          <div class="popular_categories_link"><a href="#">full catalog</a></div>
        </div>
      </div>
      
      <!-- Popular Categories Slider -->

      <div class="col-lg-9">
        <div class="popular_categories_slider_container">
          <div class="owl-carousel owl-theme popular_categories_slider">

            <!-- Popular Categories Item -->
            <div class="owl-item">
              <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                <div class="popular_category_image"><img src="{{ asset('OneTech') }}/images/popular_1.png" alt=""></div>
                <div class="popular_category_text">Smartphones & Tablets</div>
              </div>
            </div>

            <!-- Popular Categories Item -->
            <div class="owl-item">
              <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                <div class="popular_category_image"><img src="{{ asset('OneTech') }}/images/popular_2.png" alt=""></div>
                <div class="popular_category_text">Computers & Laptops</div>
              </div>
            </div>

            <!-- Popular Categories Item -->
            <div class="owl-item">
              <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                <div class="popular_category_image"><img src="{{ asset('OneTech') }}/images/popular_3.png" alt=""></div>
                <div class="popular_category_text">Gadgets</div>
              </div>
            </div>

            <!-- Popular Categories Item -->
            <div class="owl-item">
              <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                <div class="popular_category_image"><img src="{{ asset('OneTech') }}/images/popular_4.png" alt=""></div>
                <div class="popular_category_text">Video Games & Consoles</div>
              </div>
            </div>

            <!-- Popular Categories Item -->
            <div class="owl-item">
              <div class="popular_category d-flex flex-column align-items-center justify-content-center">
                <div class="popular_category_image"><img src="{{ asset('OneTech') }}/images/popular_5.png" alt=""></div>
                <div class="popular_category_text">Accessories</div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Banner -->

<div class="banner_2">
  <div class="banner_2_background" style="background-image:url({{ asset('OneTech') }}/images/banner_2_background.jpg)"></div>
  <div class="banner_2_container">
    <div class="banner_2_dots"></div>
    <!-- Banner 2 Slider -->

    <div class="owl-carousel owl-theme banner_2_slider">

      <!-- Banner 2 Slider Item -->
      @foreach($campaign1 as $item)
      <div class="owl-item">
        <div class="banner_2_item">
          <div class="container fill_height">
            <div class="row fill_height">
              <img src="{{ $item->banner }}" alt="">
            </div>
          </div>			
        </div>
      </div>
      @endforeach

    </div>
  </div>
</div>

<!-- Hot New Arrivals -->

<div class="new_arrivals">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="tabbed_container">
          <div class="tabs clearfix tabs-right">
            <div class="new_arrivals_title">Chiến dịch 2</div>
            <ul class="clearfix">
              <li class="active">Featured</li>
              <li>Audio & Video</li>
              <li>Laptops & Computers</li>
            </ul>
            <div class="tabs_line"><span></span></div>
          </div>
          <div class="row">
            <div class="col-lg-12" style="z-index:1;">

              <!-- Product Panel -->
              <div class="product_panel panel active">
                <!-- Slider Item -->
                <div class="row">
                @foreach($campaign1 as $item)
                  <div class="col-md-4">
                    <a target="_blank" href="{{ $item->product_link_short }}">
                      <img src="{{ $item->banner }}" alt="" style="width: 100%">
                    </a>
                  </div>
                @endforeach
                </div>
              </div>

              <!-- Product Panel -->
              <div class="product_panel panel">
                <!-- Slider Item -->
                <div class="row">
                @foreach($campaign1 as $item)
                  <div class="col-md-4">
                    <a target="_blank" href="{{ $item->product_link_short }}">
                      <img src="{{ $item->banner }}" alt="" style="width: 100%">
                    </a>
                  </div>
                @endforeach
                </div>
              </div>

              <!-- Product Panel -->
              <div class="product_panel panel">
                <!-- Slider Item -->
                <div class="row">
                @foreach($campaign1 as $item)
                  <div class="col-md-4">
                    <a target="_blank" href="{{ $item->product_link_short }}">
                      <img src="{{ $item->banner }}" alt="" style="width: 100%">
                    </a>
                  </div>
                @endforeach
                </div>
              </div>

            </div>

          </div>
              
        </div>
      </div>
    </div>
  </div>		
</div>

<!-- Best Sellers -->

<div class="best_sellers">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="tabbed_container">
          <div class="tabs clearfix tabs-right">
            <div class="new_arrivals_title">Chiến dịch 3</div>
            <ul class="clearfix">
              <li class="active">Top 20</li>
              <li>Audio & Video</li>
              <li>Laptops & Computers</li>
            </ul>
            <div class="tabs_line"><span></span></div>
          </div>

          <div class="bestsellers_panel panel active">

            <!-- Best Sellers Slider -->

            <div class="bestsellers_slider slider">

              <!-- Best Sellers Item -->
              @foreach($campaign1 as $item)
              <div class="bestsellers_item discount">
                <a target="_blank" href="{{ $item->product_link_short }}">
                  <img src="{{ $item->banner }}" alt="" style="width: 100%">
                </a>
              </div>
              @endforeach

            </div>
          </div>

          <div class="bestsellers_panel panel">

            <!-- Best Sellers Slider -->

            <div class="bestsellers_slider slider">

              <!-- Best Sellers Item -->
              @foreach($campaign1 as $item)
              <div class="bestsellers_item discount">
                <a target="_blank" href="{{ $item->product_link_short }}">
                  <img src="{{ $item->banner }}" alt="" style="width: 100%">
                </a>
              </div>
              @endforeach

            </div>
          </div>

          <div class="bestsellers_panel panel">

            <!-- Best Sellers Slider -->

            <div class="bestsellers_slider slider">

              <!-- Best Sellers Item -->
              @foreach($campaign1 as $item)
              <div class="bestsellers_item discount">
                <a target="_blank" href="{{ $item->product_link_short }}">
                  <img src="{{ $item->banner }}" alt="" style="width: 100%">
                </a>
              </div>
              @endforeach

            </div>
          </div>
        </div>
          
      </div>
    </div>
  </div>
</div>

<!-- Adverts -->

<div class="adverts">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 advert_col">
        
        <!-- Advert Item -->

        <div class="advert d-flex flex-row align-items-center justify-content-start">
          <div class="advert_content">
            <div class="advert_title"><a href="#">Trends 2018</a></div>
            <div class="advert_text">Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</div>
          </div>
          <div class="ml-auto"><div class="advert_image"><img src="{{ asset('OneTech') }}/images/adv_1.png" alt=""></div></div>
        </div>
      </div>

      <div class="col-lg-4 advert_col">
        
        <!-- Advert Item -->

        <div class="advert d-flex flex-row align-items-center justify-content-start">
          <div class="advert_content">
            <div class="advert_subtitle">Trends 2018</div>
            <div class="advert_title_2"><a href="#">Sale -45%</a></div>
            <div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
          </div>
          <div class="ml-auto"><div class="advert_image"><img src="{{ asset('OneTech') }}/images/adv_2.png" alt=""></div></div>
        </div>
      </div>

      <div class="col-lg-4 advert_col">
        
        <!-- Advert Item -->

        <div class="advert d-flex flex-row align-items-center justify-content-start">
          <div class="advert_content">
            <div class="advert_title"><a href="#">Trends 2018</a></div>
            <div class="advert_text">Lorem ipsum dolor sit amet, consectetur.</div>
          </div>
          <div class="ml-auto"><div class="advert_image"><img src="{{ asset('OneTech') }}/images/adv_3.png" alt=""></div></div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Trends -->

<div class="trends">
  <div class="trends_background" style="background-image:url({{ asset('OneTech') }}/images/trends_background.jpg)"></div>
  <div class="trends_overlay"></div>
  <div class="container">
    <div class="row">

      <!-- Trends Content -->
      <div class="col-lg-3">
        <div class="trends_container">
          <h2 class="trends_title">Trends 2018</h2>
          <div class="trends_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</p></div>
          <div class="trends_slider_nav">
            <div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
            <div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
          </div>
        </div>
      </div>

      <!-- Trends Slider -->
      <div class="col-lg-9">
        <div class="trends_slider_container">

          <!-- Trends Slider -->

          <div class="owl-carousel owl-theme trends_slider">

            <!-- Trends Slider Item -->
            @foreach($campaign1 as $item)
            <div class="owl-item">
              <div class="trends_item is_new">
                <a target="_blank" href="{{ $item->product_link_short }}">
                  <img src="{{ $item->banner }}" alt="" style="width: 100%">
                </a>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Reviews -->

<div class="reviews">
  <div class="container">
    <div class="row">
      <div class="col">
        
        <div class="reviews_title_container">
          <h3 class="reviews_title">Chiến dịch 4</h3>
          <div class="reviews_all ml-auto"><a href="#">view all <span>reviews</span></a></div>
        </div>

        <div class="reviews_slider_container">
          
          <!-- Reviews Slider -->
          <div class="owl-carousel owl-theme reviews_slider">
            
            <!-- Reviews Slider Item -->
            @foreach($campaign1 as $item)
            <div class="owl-item">
              <a target="_blank" href="{{ $item->product_link_short }}">
                <img src="{{ $item->banner }}" alt="" style="width: 100%">
              </a>
            </div>
            @endforeach

          </div>
          <div class="reviews_dots"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Recently Viewed -->

<div class="viewed">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="viewed_title_container">
          <h3 class="viewed_title">Chiến dịch 4</h3>
          <div class="viewed_nav_container">
            <div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
            <div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
          </div>
        </div>

        <div class="viewed_slider_container">
          
          <!-- Recently Viewed Slider -->

          <div class="owl-carousel owl-theme viewed_slider">
            
            <!-- Recently Viewed Item -->
            @foreach($campaign1 as $item)
            <div class="owl-item">
              <a target="_blank" href="{{ $item->product_link_short }}">
                <img src="{{ $item->banner }}" alt="">
              </a>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Brands -->

<div class="brands">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="brands_slider_container">
          
          <!-- Brands Slider -->

          <div class="owl-carousel owl-theme brands_slider">
            
            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('OneTech') }}/images/brands_1.jpg" alt=""></div></div>
            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('OneTech') }}/images/brands_2.jpg" alt=""></div></div>
            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('OneTech') }}/images/brands_3.jpg" alt=""></div></div>
            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('OneTech') }}/images/brands_4.jpg" alt=""></div></div>
            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('OneTech') }}/images/brands_5.jpg" alt=""></div></div>
            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('OneTech') }}/images/brands_6.jpg" alt=""></div></div>
            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('OneTech') }}/images/brands_7.jpg" alt=""></div></div>
            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('OneTech') }}/images/brands_8.jpg" alt=""></div></div>

          </div>
          
          <!-- Brands Slider Navigation -->
          <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
          <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- Newsletter -->

<div class="newsletter">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
          <div class="newsletter_title_container">
            <div class="newsletter_icon"><img src="{{ asset('OneTech') }}/images/send.png" alt=""></div>
            <div class="newsletter_title">Sign up for Newsletter</div>
            <div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
          </div>
          <div class="newsletter_content clearfix">
            <form action="#" class="newsletter_form">
              <input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
              <button class="newsletter_button">Subscribe</button>
            </form>
            <div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    
@endsection