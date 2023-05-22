@extends('layouts.app')
@section('content')
<div class="products-category">
<table><tr>
    <div class="products_row">
    @foreach($data as $product)
      <div class="main_product">
        <div class="pro_image"><td>
        @if($product->category_id==3)
            <div class="main_images"> 
                  <img src="/images/products/{{$product->image}}" style="height:350px; width:290px">
            </div>
            </div>
            <div class="pro_content">
            <div class="pro_desc">
              <span>
                {{$product->name}}
              </span>
            </div>
            <div class="pro_price">
            <span>
              Rs.
                {{$product->price}}
              </span>
            </div>
            <div class="pro_cart">
            <a href=""><i class="ri-shopping-bag-line"></i><span>Shop Now</span></a>
            </div>
        @endif
            </td>
        </div>
      </div>
      @endforeach
      </tr></table>
    </div>

</div>
@endsection