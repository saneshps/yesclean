@foreach($_products as $product)
<li class="more-item"><a href="{{route('product',$product->slug)}}">{{$product->name}}</a></li>
@endforeach