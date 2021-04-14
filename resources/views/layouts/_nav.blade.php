
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark nav_right" style="height:110px; padding-bottom: 0px; position: fixed; z-index: 3; width:100%">


  <div class='container' id='navbar'>
    <!-- Left Side -->
    <ul class="navbar-nav mr-auto">
      <a href="#"> 
        <img style="width:220px; height:220px" src="/images/Masinac---Logo.png" >
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
      <ul class="navbar-nav ml-auto" style='margin-right: 40px; margin-top: 45px'>
        <a id='home' href="{{ route('home') }}" class="nav-item nav_item_right" style='margin-right:5px'active-color="#ff3333">HOME</a>

        <a id='products' href="{{ route('products') }}" class="nav-item nav_item_right"
        style='margin-right:5px' active-color="#ff3333">PRODUCTS</a>

        <a id='galery' href="{{ route('galery') }}" class="nav-item nav_item_right" style='margin-right:5px'active-color="#ff3333">GALERY</a>

        <a id='about_us' href="{{ route('about_us') }}" class="nav-item nav_item_right" style='margin-right:5px'active-color="#ff3333">ABOUT US</a>

        <a id='contact' href="{{ route('contact') }}" class="nav-item nav_item_right" active-color="#ff3333">CONTACT
        </a>

        <span class="nav-indicator"></span>
      </ul>

      <div class="dropdown" style=' margin-top: 45px'>
        <button class="btn btn-secondary dropdown-toggle" type="button" id="language_dropdown" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false" style='border-radius: 0.7rem'>
          <?php $locale = App::getLocale(); 

          if ($locale == 'gb')
              $locale = 'en';

          ?> 

          <text style='text-transform: uppercase;'> {{$locale}} </text>

        </button>

        <div class="dropdown-menu" aria-labelledby="language_dropdown">
          <a class="dropdown-item" href="#"> English </a>
          <a class="dropdown-item" href="#"> Serbian </a>
        </div>
      </div>
    </div> 

  </div>
</nav>