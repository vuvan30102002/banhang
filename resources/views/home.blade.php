<!DOCTYPE html>
<html lang="en">
    @include('parts.head')
  <body>
    @include('parts.header')
    <!-- slider -->
    <section class="slider">
      <div class="slider-items">
        <div class="slider-item">
          <img src="{{asset('home/asset/images/BANNER_KV_SINH_NHAT-compressed.jpg')}}" alt="" />
        </div>
        <div class="slider-item">
          <img src="{{asset('home/asset/images/Herobanner_(21).png')}}" alt="" />
        </div>
        <div class="slider-item">
          <img src="{{asset('home/asset/images/VUN_ART_BANNER.png')}}" alt="" />
        </div>
      </div>
      <div class="slider-arrow">
        <img src="{{asset('home/asset/images/icons8-left-50.png')}}" alt="" class="arrowleft" />
        <img src="{{asset('home/asset/images/icons8-right-50.png')}}" alt="" class="arrowright" />
      </div>
    </section>

    <!-- product -->
    <section class="hot-products">
        <div class="container">
          <div class="row-grid">
            <p class="heading-text">San Pham Moi</p>
          </div>
          <div class="row-grid row-grid-hot-products">
            @foreach ($products as $item)
                <div class="hot-product-item jquery-test">
                    <a href="/product/{{$item -> id}}"> <img src="{{asset($item -> image)}}" alt="" /></a>
                    <a href=""><p>{{ $item -> name }}</p></a>
                    <span>{{ $item -> material }}</span>
                    <div class="hot-product-item-price">
                    <p>{{ $item -> price_nomal }}</p>
                    </div>
                </div>
            @endforeach
          </div>
        </div>

      </section>

    <!-- footer -->
    @include('parts.footer')
  </body>
</html>
