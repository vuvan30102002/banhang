@extends('main')
@section('content')
<section class="product-detail p-to-top">
   <form action="/cart/add" method="post">
    @csrf
    <div class="container">
        <div class="row-flex row-flex-product-detail">
          <p class="heading-text-product">San Pham Moi >></p> <p>{{ $product_detail -> name }}</p>
        </div>
        <div class="row-gird">
          <div class="product-detail-left">
            <img class="main-image" src="{{ $product_detail -> image }}" alt="" />
            <div class="product-images-items">
              @php
                  $product_images = explode('*', $product_detail -> images);
              @endphp
              @foreach ($product_images as $product_image)
              <img src="{{ asset($product_image) }}" alt="" />
              {{-- hoặc <img src="{{$product_image}}" alt="" /> --}}
              @endforeach
            </div>
          </div>
          <div class="product-detail-right">
            <div class="product-detail-right-info">
              <h1>{{ $product_detail -> material }}</h1>
              <span>{!! $product_detail -> discription !!}</span>
              <div class="hot-product-item-price">
                <p>{{ number_format($product_detail -> price_nomal )}}</p>
              </div>
            </div>
            <div class="product-detail-right-des">
              <p style="font-weight: bold;margin-bottom: 10px;padding-left: 10px;">
                Dac Diem Noi Bat
              </p>
              <ul style="padding-left: 10px">
                <li>100 chat lieu gia</li>
                <li>100 chat lieu gia</li>
                <li>100 chat lieu gia</li>
                <li>100 chat lieu gia</li>
                <li>100 chat lieu gia</li>
              </ul>
            </div>
            <div class="product-detail-right-quantity">
              <h2>So Luong:1</h2>
              <div class="product-detail-right-quantity-input">
                <img class="subtraction" src="{{asset('home/asset/images/plus.png')}}" alt="" />
                <input class="value-input" type="number" name="product_quantity" value="1" readonly />
                <input type="hidden" value="{{ $product_detail -> id }}" name="product_id">
                <img class="flus" src="{{asset('home/asset/images/plus.png')}}" alt="" />
              </div>
            </div>
            <div class="product-detail-right-addcart">
              <button type="submit">Thêm vào giỏ hàng</button>
            </div>
          </div>
        </div>
        <div class="row-grid row-gird-oneitem" style="display: block">
          <div class="product-detail-content">
            <h3>Chi Tiet San Pham</h3>
            <p>{!!$product_detail -> content!!}</p>
          </div>
        </div>
      </div>
   </form>
  </section>
@endsection
