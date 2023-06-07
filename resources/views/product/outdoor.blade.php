@extends('layouts.app')

@section('content')
  <div class="products-category">
    <div class="products_row">
      @foreach($data as $product)
        @if($product->category_id == 1)
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
              <button class="popup-btn" data-image="/images/products/{{$product->image}}" data-name="{{$product->product_name}}" data-price="{{$product->price}}" data-product="{{$product->id}}">
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
          <form class="add-to-cart-form" action="{{ route('addtocart')}}" method="POST">
            @csrf
            <input type="hidden" name="product_id" id="product_id">
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" value="1" min="1">
            <button type="submit" class="add-to-cart-btn">Add to cart</button>
          </form>
  <div id="cart-popup-message" class="cart-popup-message hide">
  Product added to cart
</div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // description of product
    const popupBtns = document.querySelectorAll('.popup-btn');
    const popupView = document.querySelector('.popup_view');
    const closeBtn = document.querySelector('.close-btn-popup');
    const popupImg = document.querySelector('.popup-img img');
    const popupInfo = document.querySelector('.popup-info');
    const cartForm = document.querySelector('.add-to-cart-form');
    const cartMessage = document.getElementById('cart-popup-message');

    popupBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        const imageSrc = btn.dataset.image;
        const productName = btn.dataset.name;
        const productPrice = btn.dataset.price;
        const productId = btn.dataset.product; // Add this line

        popupImg.src = imageSrc;
        popupInfo.querySelector('h2').textContent = productName;
        popupInfo.querySelector('.popup-price').textContent = `Rs.${productPrice}`;
        document.getElementById('product_id').value = productId; // Add this line

        popupView.classList.add('active');
      });
    });

    closeBtn.addEventListener('click', () => {
      popupView.classList.remove('active');
    });




  </script>
@endsection
