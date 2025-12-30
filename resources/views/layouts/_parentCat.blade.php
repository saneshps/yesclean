
@if(!empty($product) && $product->category_id)
<
<li> <a href="{{route('category',$product->c_slug)}}"> {{$parent['name']}}</a> <span>/</span> <a href="{{route('category',$product->c_slug)}}"> {{$childs}}</a> </li>
@else
<li> <a href="{{route('category',$product->c_slug)}}"> {{$parent['name']}}</a> <span>/</span> <a href="{{route('category',$product->c_slug)}}"> {{$childs}}</a> </li>
@endif
@if(count($subcat['parent']))
include('layouts._parentCat',['parent' => $category['parent'], 'childs' => $category['name'] ])
@endif
