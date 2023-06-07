@extends('layouts.app')

@section('content')
  <div class="products-category">
    <div class="products_row">
      @foreach($data as $product)
        @if($product->category_id == 3)
          <div class="main_product">
            <div class="pro_image">
              <img src="/images/products/{{$product->image}}" alt="{{$product->product_name}}" style="height:350px; width:290px">
            </div>
            <div class="pro_content">
              <div class="pro_desc">
                <span>{{$product->product_name}}</span>
              </div>
              <div class="pro_price">
                <span>Rs.{{$product->price}}</span>
              </div>
              <div class="pro_cart">
                <button class="popup-btn" data-image="/images/products/{{$product->image}}" data-name="{{$product->product_name}}" data-price="{{$product->price}}">
                  <i class="ri-shopping-bag-line"></i>
                  <span>Shop Now</span>
                </button>
              </div>
            </div>
          </div>
        @endif
      @endforeach
    </div>

    <!-- Popup view -->
    <div class="popup_view">
      <div class="popup-card">
        <button class="close-btn-popup">
          <i class="ri-close-line"></i>
        </button>
        <div class="popup-img">
          <img src="" alt="">
        </div>
        <div class="popup-info">
          <h2></h2>
          <div class="popup-price"></div>
          <div class="popup_cart">
            <a href="#" style="color:white">
              <i class="ri-shopping-cart-line"></i>
              <span>Add to cart</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    const popupBtns = document.querySelectorAll('.popup-btn');
    const popupView = document.querySelector('.popup_view');
    const closeBtn = document.querySelector('.close-btn-popup');
    const popupImg = document.querySelector('.popup-img img');
    const popupInfo = document.querySelector('.popup-info');

    popupBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        const imageSrc = btn.dataset.image;
        const productName = btn.dataset.name;
        const productPrice = btn.dataset.price;

        popupImg.src = imageSrc;
        popupInfo.querySelector('h2').textContent = productName;
        popupInfo.querySelector('.popup-price').textContent = `Rs.${productPrice}`;

        popupView.classList.add('active');
      });
    });

    closeBtn.addEventListener('click', () => {
      popupView.classList.remove('active');
    });
  </script>
@endsection
