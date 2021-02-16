<!-- Upper Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height:30px; position: fixed; z-index: 1; top:0px; width:100%">
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
</nav>

<hr style="margin:0;  background-color: #999999">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark nav_right" style="height:65px; padding-bottom: 0px; position: fixed; z-index: 1;top:30px; width:100%">
  <div class='container' id='navbar'>
    <!-- Left Side -->
    <ul class="navbar-nav mr-auto">
      <a href="#"> 
        <img style="width:60px; height:60px" src="/images/logo.jpg" >
      </a>

      <h1 class="d-flex align-items-center" style="color:white; margin:0; padding-left:10px"> Mašinac </h1>
    </ul>

    <!-- Right Side -->
    <ul class="navbar-nav ml-auto" style='margin-right: 10px; margin-top: 5px'>
      <a id='home' href="{{ route('home') }}" class="nav-item nav_item_right" style='margin-right:5px'active-color="#ff3333">HOME</a>

      <a id='products' href="{{ route('products') }}" class="nav-item nav_item_right"
      style='margin-right:5px' active-color="#ff3333">PRODUCTS</a>

      <a id='galery' href="{{ route('galery') }}" class="nav-item nav_item_right" style='margin-right:5px'active-color="#ff3333">GALERY</a>

      <a id='about_us' href="{{ route('about_us') }}" class="nav-item nav_item_right" style='margin-right:5px'active-color="#ff3333">ABOUT US</a>

      <a id='contact' href="{{ route('contact') }}" class="nav-item nav_item_right" active-color="#ff3333">CONTACT
      </a>

      <span class="nav-indicator"></span>
    </ul>

    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="language_dropdown" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
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
</nav>