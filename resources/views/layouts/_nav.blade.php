
<!-- Navbar -->
<nav class="navbar navbar-expand-lg " style="height:110px; padding-bottom: 0px; position: fixed; z-index: 3; width:100%">


  <div id='navbar' class='container' >
    <!-- Left Side -->
    <ul class="navbar-nav mr-auto">
      <a href="{{ route('home') }}" style='position:fixed; margin-top: -48px'> 
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

        <a id='about_us' href="{{ route('about_us') }}" class="nav-item nav_item_down" style='margin-right:5px; text-transform: uppercase;'active-color="#ff3333">{{ __('ui.about_us') }}</a>

        <a id='products' href="{{ route('products') }}" class="nav-item nav_item_down"
          style='margin-right:5px; text-transform: uppercase' active-color="#ff3333">{{ __('ui.products') }}</a>
        
        <?php $locale = App::getLocale(); 
          if ($locale == 'rs') {
              $reze_zatvaraci = 'Reze i zatvarači';
              $sarke = 'Šarke';
              $ugaoni_vezaci = 'Ugaoni vezači';
              $ravni_vezaci = 'Ravni vezači';
              $prod_zice = 'Proizvodi od žice';
              $nosaci = 'Nosači'; 
              $pl_masa = 'Proizvodi od plastičnih masa';
              $usluge = 'Usluge';
          } else {
              $reze_zatvaraci = 'Latches and closure';
              $sarke = 'Hignes';
              $ugaoni_vezaci = 'Angle binders';
              $ravni_vezaci = 'Straight binders';
              $prod_zice = 'Wire products';
              $nosaci = 'Carriers'; 
              $pl_masa = 'Plastic products';
              $usluge = 'Services';
          }
        ?> 

        <div class="dropdown" style='display:flex; align-content: center; justify-content: center;'>
          <div id='products_dropdown' class="dropdown-menu dropdown-menu-right" style='margin: 0px -90px 0px 0px;'>
              <li class='dropdown-item hover_highlight'>
                <a href='/products/reze_zatvaraci' class='linkToparagraph'> {{$reze_zatvaraci}} </a>
              </li>

              <li class='dropdown-item hover_highlight'>
                <a href='/products/sarke' class='linkToparagraph'> {{$sarke}} </a>
              </li>

              <li class='dropdown-item hover_highlight'>
                <a href='/products/ugaoni_vezaci' class='linkToparagraph'> {{$ugaoni_vezaci}} </a>
              </li>

              <li class='dropdown-item hover_highlight'>
                <a href='/products/ravni_vezaci' class='linkToparagraph'> {{$ravni_vezaci}} </a>
              </li>

              <li class='dropdown-item hover_highlight'>
                <a href='/products/prod_zice' class='linkToparagraph'> {{$prod_zice}} </a>
              </li>

              <li class='dropdown-item hover_highlight'>
                <a href='/products/nosaci' class='linkToparagraph'> {{$nosaci}} </a>
              </li>

              <li class='dropdown-item hover_highlight'>
                <a href='/products/pl_masa' class='linkToparagraph'> {{$pl_masa}} </a>
              </li>

              <li class='dropdown-item hover_highlight'>
                <a href='/products/usluge' class='linkToparagraph'> {{$usluge}} </a>
              </li>

          </div>

        </div>

        <a id='galery' href="{{ route('galery') }}" class="nav-item nav_item_down" style='margin-right:5px; text-transform: uppercase;'active-color="#ff3333">{{ __('ui.galery') }}</a>

        <a id='contact' href="{{ route('contact') }}" class="nav-item nav_item_down" style='text-transform: uppercase;' active-color="#ff3333"> {{ __('ui.contact') }}
        </a>

        <span class="nav-indicator"></span>
      </ul>

      <ul class="navbar-nav" style='margin-right:50px'>
        <div class="dropdown" style='height:30px'>
            <a  class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style='color:white; margin-top:50px;'> 
                            
              <?php $locale = App::getLocale(); 
                if ($locale == 'gb')
                    $locale = 'en';
              ?> 

              <text style='text-transform: uppercase;'> {{$locale}} </text>
                
            </a>
            
            <div id='lang_dropdown' class="dropdown-menu dropdown-menu-right" style="min-width:110px; margin: 71px -60px 0 0">
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
  </div>
</nav>