<div class="templatemo-header">
    <img class="templatemo-header-img" src="{{ asset('assets/img/header.png') }}" alt="Header">
    <h1 class="templatemo-site-name">Motor</h1>
    <div class="mobile-menu-icon">
      <i class="fa fa-bars"></i>
    </div>
    <div class="templatemo-nav-container">
      <nav class="templatemo-nav">
        <ul>
          <li><a href="{{ route('home') }}" class="{{(Route::currentRouteName() == 'home' || Route::currentRouteName() == '')?'active':''}}">Home</a></li>
          <li><a href="{{ route('products') }}" class="{{(Route::currentRouteName() == 'products')?'active':''}}">Products</a></li>
          <li><a href="{{ route('services') }}" class="{{(Route::currentRouteName() == 'services')?'active':''}}">Services</a></li>
          <li><a href="{{ route('gallery') }}" class="{{(Route::currentRouteName() == 'gallery')?'active':''}}">Galery</a></li>
          <li><a href="{{ route('contact') }}" class="{{(Route::currentRouteName() == 'contact')?'active':''}}">Contact</a></li>
        </ul>
      </nav> 
    </div>
  </div>