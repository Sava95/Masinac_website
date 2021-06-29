@extends('layouts.layout')

@section('content')
  <div class='container' style='padding-top:20px'> 

  
    <!-- Confirmation/Error messages -->
    <div id="success_message" class="alert alert-success" role="alert" style=" display:none; position:fixed; z-index: 1; margin-top:8px;
        width: 63.5%"> <b> {{ __('ui.poslata_poruka') }} </b>
    </div>

    <div id="error_message" class="alert alert-danger" role="alert" style="display:none; position:fixed; z-index: 1;  margin-top:8px; width: 63.5%"> 
    </div>

    <div id="loader" style="display:none; position:fixed; z-index: 1; margin: 7% 32.94%">
        <div class="loader">   </div>
        <div> {{ __('ui.ucitavanje') }} </div>
    </div>

    <h1> <strong> {{ __('ui.contact') }}  </strong> </h1>

    <!-- Upper -->
    <div class="row d-flex">
      <div class="col-md-8">
        <div class="card-body">
          <form id='send_email'>
            @csrf

            <!-- First Row -->
            <div class='row'> 
              <div class="col-md-6 form-group">
                <label for='name'> {{ __('ui.ime') }} </label>
                <input type='text' id='name' name='name' class='form-control' required />
              </div>

              <div class="col-md-6 form-group">
                <label for='email'>  Email </label>
                <input type='email' id='email' name='email' class='form-control' required />
              </div>
            </div>

            <!-- Secound Row -->
            <div class='row'>
              <div class="col-md-6 form-group">
                <label for='country'> {{ __('ui.zemlja') }}  </label>
                <input type='text' id='country' name='country' class='form-control' required />
              </div>

              <div class="col-md-6 form-group">
                <label for='phone' >{{ __('ui.telefon') }}  </label>
                <input type='text' id='phone' name='phone' class='form-control' required />
              </div>          
            </div>

            <div class="form-group">
              <label for='message'>{{ __('ui.poruka') }} </label>
              <textarea id='message' name='message' class='form-control' required> </textarea>
            </div>

            <button type="submit" class="btn btn-primary"> {{ __('ui.posalji') }} </button>

          </form>
        </div>
      </div>

      <div class="col-md-3 col-lg-3 col-xl-3 mt-3" style='margin-left:20px'>
        <h4 class="text-uppercase mb-4"> <strong> Masinac RS </strong> </h4>
        <p style='margin-bottom: 0.5rem;'> Aranđelovac, AR 34300, RS </p>
        <p style='margin-bottom: 0.5rem;'> Email: office@masinacserbia.rs </p>
        <p style='margin-bottom: 0.5rem;'> {{ __('ui.productio_tel') }} +381 34 6790-545 </p>
        <p style='margin-bottom: 0.5rem;'> {{ __('ui.retail_tel') }} +381 34 6790-545 </p>
        <p style='margin-bottom: 0.5rem;'> {{ __('ui.mass_prod_tel') }} +381 34 6790-545 </p>

      </div>
    </div>
  </div> 

  <!-- Lower -->
  <div class='containter' style='padding-top:30px'>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2401.099500248697!2d20.566110308448852!3d44.30163196961978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47574d18ce7734c3%3A0xd11fbb060f4b5fb2!2zTWHFoWluYWM!5e0!3m2!1sen!2srs!4v1624899618339!5m2!1sen!2srs" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
  
@endsection