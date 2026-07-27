<!--@foreach($_childs as $child)-->
<!--<li class="sub-item">-->
<!--    <a class="more-btn" href="{{route('category',$child->short_code)}}">{{$child->name}}</a>-->

    <!--@if($child->products)-->
    <!--<ul class="more-menu">-->
    <!--    @foreach($child->products as $product)-->
    <!--    <li class="more-item"><a href="{{route('product',$product->slug)}}">{{$product->name}}</a></li>-->
    <!--    @endforeach-->
    <!--</ul>-->
    <!--@endif-->
<!--</li>-->
<!--@endforeach-->
@foreach($_childs as $child)
<li class="sub-item more2">
    <a  href="{{route('category',$child->short_code)}}">{{$child->name}} </a> @if(count($child->childs)!=0)<i class="more-btn fas fa-angle-right"></i> @endif

 @if($child->childs)
    <ul class="more-menu">
       @foreach($child->childs as $child)
          <li class="more-item"><a href="{{route('category',$child->short_code)}}">{{$child->name}}</a></li>
        @endforeach
    </ul>
    @endif


</li>
@endforeach