@extends('layouts.layout')

@section('content')
  <div class='container' style='padding-top:20px'> 

  
    <!-- Confirmation/Error messages -->
    <div id="success_message" class="alert alert-success" role="alert" style=" display:none; position:fixed; z-index: 1; margin-top:8px;
        width: 63.5%"> <b> Message sent </b>
    </div>

    <div id="error_message" class="alert alert-danger" role="alert" style="display:none; position:fixed; z-index: 1;  margin-top:8px; width: 63.5%"> 
    </div>

    <div id="loader" style="display:none; position:fixed; z-index: 1; margin: 7% 32.94%">
        <div class="loader">   </div>
        <div> Loading ... </div>
    </div>

    <h1> <strong> Contact us  </strong> </h1>

    <!-- Upper -->
    <div class="row d-flex">
      <div class="col-md-8">
        <div class="card-body">
          <form id='send_email'>
            @csrf

            <!-- First Row -->
            <div class='row'> 
              <div class="col-md-6 form-group">
                <label for='name'> Name </label>
                <input type='text' id='name' name='name' class='form-control' required />
              </div>

              <div class="col-md-6 form-group">
                <label for='email'> Email </label>
                <input type='email' id='email' name='email' class='form-control' required />
              </div>
            </div>

            <!-- Secound Row -->
            <div class='row'>
              <div class="col-md-6 form-group">
                <label for='country'> Country/City </label>
                <input type='text' id='country' name='country' class='form-control' required />
              </div>

              <div class="col-md-6 form-group">
                <label for='phone'> Phone </label>
                <input type='text' id='phone' name='phone' class='form-control' required />
              </div>          
            </div>

            <div class="form-group">
              <label for='message'> Message </label>
              <textarea id='message' name='message' class='form-control' required> </textarea>
            </div>

            <button type="submit" class="btn btn-primary"> Submit </button>

          </form>
        </div>
      </div>

      <div class="col-md-3 col-lg-3 col-xl-3 mt-3" style='margin-left:20px'>
        <h4 class="text-uppercase mb-4"> <strong> Masinac RS </strong> </h4>
        <p style='margin-bottom: 0.5rem;'> Aranđelovac, AR 34300, RS </p>
        <p style='margin-bottom: 0.5rem;'> Email: office@masinacserbia.rs </p>
        <p style='margin-bottom: 0.5rem;'> Production tel. +381 34 6790-545 </p>
        <p style='margin-bottom: 0.5rem;'> Retail production tel. +381 34 6790-545 </p>
        <p style='margin-bottom: 0.5rem;'> Mass prodcution tel. +381 34 6790-545 </p>

      </div>
    </div>
  </div> 

  <!-- Lower -->
  <div class='containter' style='padding-top:30px'>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2855.6858059003075!2d20.575476086069308!3d44.295850007075146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47574ce3b683dcdd%3A0xecf5163997f972f9!2s%C4%8Cegarska%2023%2C%20Aran%C4%91elovac%2034300!5e0!3m2!1sen!2srs!4v1623685395783!5m2!1sen!2srs"  width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
  
@endsection