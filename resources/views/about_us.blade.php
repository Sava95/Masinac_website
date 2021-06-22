@extends('layouts.layout')


@section('content')
  <div class='container-fluid' style='padding-top:20px'> 
    <h3 style='margin-left:240px; margin-bottom:30px; font-family:"DM Sans", sans-serif'> {{ __('ui.story_that_lasts') }} </h3>

    <div class="row">
      <div id='years_sidebar' style='position:fixed; padding-left: 90px'>
        <a id='1970_link' href="#1970_nav" class='about-us-link active-element'> 1970 </a>
        <a id='1992_link' href="#1992_nav" class='about-us-link'> 1992 </a>
        <a id='1995_link' href="#1995_nav" class='about-us-link'> 1995 </a>
        <a id='2000_link' href="#2000_nav" class='about-us-link'> 2000 </a>
        <a id='2002_link' href="#2002_nav" class='about-us-link'> 2002 </a>
        <a id='2006_link' href="#2006_nav" class='about-us-link'> 2006 </a>
        <a id='2009_link' href="#2009_nav" class='about-us-link'> 2009 </a>
        <a id='2020_link' href="#2020_nav" class='about-us-link'> 2020 </a>
      </div>

      <div  style='width:100%'>
  
        <section class="timeline">
          <ul>
            <li id='1970' class='timeline_section active-element' style='margin-top:40px'>
              <p id='1970_nav' class='navigation'> </p>

              <div class='parent parent_1' style='margin-top: -50px'>
                <div class='date'> 
                  {{ __('ui.1970_head') }} 
                </div>

                <div class='child' style='left: 120px; top: 320px;'>
                  <p> {{ __('ui.1970') }} </p>
                </div>
              </div>
            </li>

            <li id='1992' class='timeline_section'>
              <p id='1992_nav' class='navigation'> </p>

              <div class='parent parent_2'>
                <div class='date'> 
                  {{ __('ui.1992_head') }} 
                </div>
                
                <div class='child' style='left:200px; top: 400px'>
                  <p> {{ __('ui.1992') }}</p>
                </div>
              </div>
            </li>

            <li id='1995' class='timeline_section'>
              <p id='1995_nav' class='navigation'> </p>

              <?php $locale = App::getLocale(); 
                if ($locale == 'gb')
                  $left_3 = 'left: 70px';
                else  
                  $left_3 = 'left: 140px';
              ?>

              <div class='parent parent_3'>
                <div class='date' style='{{$left_3}}'> 
                  {{ __('ui.1995_head') }} 
                </div>
                
                <div class='child' style='left: 110px; top: 320px;'>
                  <p> {{ __('ui.1995') }} </p>
                </div>
              </div>
            </li>

            <li id='2000' class='timeline_section'>
              <p id='2000_nav' class='navigation'> </p>

              <div class='parent parent_4'>
                <div class='date'> 
                  {{ __('ui.2000_head') }} 
                </div>
                
                <div class='child' style='left:200px; top: 400px'>
                  <p> {{ __('ui.2000') }} </p>
                </div>
              </div>
            </li>

            <li id='2002' class='timeline_section'>
              <p id='2002_nav' class='navigation'> </p>

              <div class='parent parent_5'>
                
              <?php $locale = App::getLocale(); 
                if ($locale == 'gb')
                  $left_5 = 'left: 0px';
                else  
                  $left_5 = 'left: 70px';
              ?>

                <div class='date' style='{{$left_5}}'> 
                  {{ __('ui.2002_head') }}
                </div>
                
                <div class='child' style='left: 110px; top: 250px;'>
                  <p> {{ __('ui.2002') }} </p>
                </div>
              </div>
            </li>

            <li id='2006' class='timeline_section'>
              <p id='2006_nav' class='navigation'> </p>

              <div class='parent parent_6'>
                <div class='date' > 
                  {{ __('ui.2006_head') }}
                </div>
                
                <div class='child' style='left:200px; top: 340px'>
                  <p> {{ __('ui.2006') }} </p>
                </div>
              </div>
            </li>

            
            <li id='2009' class='timeline_section'>
              <p id='2009_nav' class='navigation'> </p>

              <div class='parent parent_7'>
                <div class='date'> 
                  {{ __('ui.2009_head') }}
                </div>
                
                <div class='child' style='left: 110px; top: 320px;'>
                  <p> {{ __('ui.2009') }} 
                  </p>
                </div>
              </div>
            </li>

            <li id='2020' class='timeline_section' style='margin-bottom: 200px'>
              <p id='2020_nav' class='navigation'> </p>

              <div class='parent parent_8'>
                <div class='date'> 
                  {{ __('ui.2020_head') }}
                </div>
                
                <div class='child' style='left:200px; top: 300px'>
                  <p> {{ __('ui.2020') }}  </p>
                </div>
              </div>
            </li>
            
          </ul>
        </section>


      </div>
    </div>
  </div>

@endsection