
<!-- Navbar -->
<nav class="navbar navbar-expand-lg " style="height:110px; padding-bottom: 0px; position: fixed; z-index: 3; width:100%">


  <div id='navbar' class='container' >
    <!-- Left Side -->
    <ul class="navbar-nav mr-auto">
      <a href="#"> 
        <img style="width:127px; height:90px" src="/images/Masinac---Logo.png" >
      </a>

    </ul>

    <!-- Right-Upper Side -->
    <div class="row" style='top: -40px; position: relative; left: 600px;'>
      <div class='container'>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item navbar_item" style='margin-right: 5px'>
              <img src="/images/mail.svg">
            <li>
            
            <li class="nav-item navbar_item" style='margin-right: 10px;'>
              <text style='color:white; font-size:12px'> office@masinacserbia.rs  </text>
            </li>

            <li class="nav-item navbar_item" style='margin-right: 5px'>
              <img src="/images/phone.svg">
            <li>
            
            <li class="nav-item navbar_item">
              <text style='color:white; font-size:12px'> +381 34 6790 545 </text>
            </li>
          </ul>
        </div>
    </div>


    <!-- Right-Down Side -->
    <div class="row">
      <ul class="navbar-nav ml-auto" style='margin-right: 40px; margin-top: 40px'>
        <a id='home' href="{{ route('home') }}" class="nav-item nav_item_down" style='margin-right:5px;  text-transform: uppercase;'active-color="#ff3333">{{ __('ui.home') }}</a>

        <a id='products' href="{{ route('products') }}" class="nav-item nav_item_down"
        style='margin-right:5px; text-transform: uppercase' active-color="#ff3333">{{ __('ui.products') }}</a>

        <a id='galery' href="{{ route('galery') }}" class="nav-item nav_item_down" style='margin-right:5px; text-transform: uppercase;'active-color="#ff3333">{{ __('ui.galery') }}</a>

        <a id='about_us' href="{{ route('about_us') }}" class="nav-item nav_item_down" style='margin-right:5px; text-transform: uppercase;'active-color="#ff3333">{{ __('ui.about_us') }}</a>

        <a id='contact' href="{{ route('contact') }}" class="nav-item nav_item_down" style='text-transform: uppercase;' active-color="#ff3333"> {{ __('ui.contact') }}
        </a>

        <span class="nav-indicator"></span>
      </ul>


    <ul class="navbar-nav">
      <div class="dropdown" style='height:30px'>
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style='color:white; margin-top:50px;'> 
              
            <i class="fas fa-flag" style="padding-right:5px"> </i> 
            
            <?php $locale = App::getLocale(); 
              if ($locale == 'gb')
                  $locale = 'en';
            ?> 

            <text style='text-transform: uppercase;'> {{$locale}} </text>
              
          </a>
          

          <div class="dropdown-menu dropdown-menu-right" style="min-width:110px; margin: 64px 0px 0px 0px" aria-labelledby="dropdownMenu2">
              <li class='dropdown-item'>
                @include('layouts._locale', ['lang' => 'gb', 'nation' => 'English'])
              </li>

              <li class='dropdown-item'>
                  @include('layouts._locale', ['lang' => 'rs', 'nation' => 'Serbian'])
              </li>

          </div>

      </div>
    </ul>

  </div>
</nav>