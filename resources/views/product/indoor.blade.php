@extends('layouts.app')
@section('title', 'Indoor')
@section('content')

  <div class="products-category">
  <div class="breadcrumbs">
      <a href="/">Home</a> / <span style="color:orange;">Indoor</span> <!-- Update the breadcrumb text accordingly -->
    </div>
    @if(session('success'))
      <div class="cart-success">
        {{ session('success') }}
      </div>
    @endif
   
    <div class="products_row">
    @php $count = 0; @endphp
    <div class="product_row">
        @foreach($data as $product)
            @if($product->category_id == 2)
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
                            <button class="popup-btn" data-image="/images/products/{{$product->image}}" data-name="{{$product->product_name}}" data-price="{{$product->price}}" data-product="{{$product->id}}" data-description="{{$product->description}}" style="background-color:#ffb833; color: black;border-radius: 20px;padding:10px; cursor: pointer;">
                                <i class="ri-shopping-bag-line"></i>
                                <span>Shop Now</span>
                            </button>
                        </div>
                    </div>
                </div>
                @php $count++; @endphp

                @if($count < 4)
                    </div>
                    <div class="product_row">
                @endif
            @endif
        @endforeach
    </div>
</div>    <!-- Popup view -->
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
          <div class="popup-description"></div>
          <div class="popup-price"></div>
         
          <form class="add-to-cart-form" action="{{ route('addtocart')}}" method="POST">
            @csrf
            <input type="hidden" name="product_id" id="product_id">
            <label for="quantity" style="padding:7px;">Quantity:</label>
            <input type="number" name="quantity" id="quantity" value="1" min="1">
            <button type="submit" class="add-to-cart-btn" style="background-color:#ffb833; color: black;border-radius: 20px;padding:10px; cursor: pointer; margin-top:20px;">Add to cart</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Description of product
    const popupBtns = document.querySelectorAll('.popup-btn');
    const popupView = document.querySelector('.popup_view');
    const closeBtn = document.querySelector('.close-btn-popup');
    const popupImg = document.querySelector('.popup-img img');
    const popupInfo = document.querySelector('.popup-info');
    const popupDescription = document.querySelector('.popup-description');
    const cartForm = document.querySelector('.add-to-cart-form');
    const cartMessage = document.getElementById('cart-popup-message');

    popupBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        const imageSrc = btn.dataset.image;
        const productName = btn.dataset.name;
        const productPrice = btn.dataset.price;
        const productId = btn.dataset.product;

        popupImg.src = imageSrc;
        popupInfo.querySelector('h2').textContent = productName;

        popupInfo.querySelector('.popup-price').textContent = `Rs.${productPrice}`;
        popupDescription.textContent = btn.dataset.description;
        document.getElementById('product_id').value = productId;

        popupView.classList.add('active');
      });
    });

    closeBtn.addEventListener('click', () => {
      popupView.classList.remove('active');
    });
  </script>

@endsection
