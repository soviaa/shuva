@extends('layouts.app')
@section('content')
<div class="products-category">
    <div class="products">
        <table>
            <tr>
    @foreach($data as $product)
    @if($product->category_id==3)
                <td>
                      <div class="">
                          <img src="/images/products/{{$product->image}}" >
                        </div>
                        @else 
                          @php $count=0; @endphp
                          @break
                          @endif
                </td>
              @endforeach
            </tr>          

    </table>
    </div>
</div>
@endsection