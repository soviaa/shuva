@extends('layouts.app')
@section('content')
<div class="products-category">
    <div class="products">
        <table>
            <tr>
    @foreach($data as $product)
                           
                          <td>
                            @if($product->category_id==2)
                          <img src="/images/products/{{$product->image}}" >
                          @endif
</td>

              @endforeach
            </tr>          

    </table>
    </div>
</div>
@endsection