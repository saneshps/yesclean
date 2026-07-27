<div class="container-fluid head-box">


  <a href="{{route('home')}}" class="logo home">
    <img class="one" src="{{asset('frontend/img/logo.png')}}" alt="yesclean">
    <img class="two" src="{{asset('frontend/img/rectangle-logo.png')}}" alt="yesclean">
  </a>

  <div class="row navigation">
    <ul class="col-xl-9 menu">
      <div class="close-btn"></div>

      <li class="menu-item">
        <a class="sub-btn" href="{{route('our-story')}}"> OUR STORY </a>

      </li>
       <li class="menu-item">
        <a class="sub-btn"> PRODUCTS <i class="fas fa-angle-down"></i></a>
        <ul class="sub-menu">
          @foreach($_CategoryMenu as $parent)
          <li class="sub-item more">
              
            <a  href="{{route('category',$parent->short_code)}}"> {{$parent->name}}  </a>@if(count($parent->products)==0 && count($parent->childs)!=0) <i class="more-btn fas fa-angle-right"></i> @endif
           
            <ul class="more-menu">
              <!--@if($parent->products)-->
              <!--@include('layouts._productMenu', ['_products' => $parent->products])-->
              <!--@endif-->
              @if($parent->childs)
              @include('layouts._childMenu', ['_childs' => $parent->childs])
              @endif
            </ul>
          
          </li>
          @endforeach




        </ul>
      </li>
      <li class="menu-item">
        <a href="{{route('cleaning-chemicals')}}"> CHEMICALS </a>

      </li>
      <li class="menu-item"><a href="{{route('blogs')}}"> BLOGS </a></li>
      <!--<li class="menu-item"><a href="{{route('gallery')}}"> GALLERY </a></li>-->
      <li class="menu-item"><a href="{{route('contact')}}"> CONTACT US </a></li>
      <li class="menu-item"><a href="{{route('home')}}"> <i class="fas fa-home"></i> </a></li>

    </ul>

    <!-- search -->

    <div class="search-bar">
      <a href="javascript:;"><i class="fa fa-search"></i></a></i>
    </div>
    <div class="search-area">
      <span class="closebtn">×</span>
      <div class="search-field">
   
         <input type="text" placeholder="Search.." name="search" id="search-box" style="width: 100%;" autocomplete="off">
        <div id="suggesstion-box"></div>
      </div>
    </div>

    <!-- search -->

  </div>


  <div class="menu-btn"></div>


</div>