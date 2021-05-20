const { cssNumber } = require('jquery');

require('./bootstrap');


//  =============================================== NAVBAR ==========================================================
// Portfolio caroseul 
$('.multi-item-carousel').carousel({
  interval: false
});

// for every slide in carousel, copy the next slide's item in the slide.
// Do the same for the next, next item.
$('.multi-item-carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  } else {
    $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});

$(function() {
  const indicator = document.querySelector('.nav-indicator');

  let page = window.location.href.substr(22)

  if (page) {
    let details_page = window.location.href.substr(22, 7);
    

    if ((details_page == 'details') || (window.location.href.includes('products'))) {
      var active_element = document.getElementById('products');
    } else {
      var active_element = document.getElementById(page);
    }
    active_element.classList.add('is-active');

  } else {
    var active_element = document.getElementById('home');
    active_element.classList.add('is-active');
  }

  var element_position = active_element.getBoundingClientRect();

  indicator.style.width = active_element.offsetWidth + 'px';
  indicator.style.left = active_element.offsetLeft + 'px';
  indicator.style.backgroundColor = active_element.getAttribute('active-color');
})

function indicator_position_change() {
  var indicator = document.getElementsByClassName('nav-indicator')[0] 
  var active_element = document.getElementsByClassName('is-active')[0]

  indicator.style.width = active_element.offsetWidth + 'px';
  indicator.style.left = active_element.offsetLeft + 'px';
  indicator.style.backgroundColor = active_element.getAttribute('active-color');
}

window.onresize = indicator_position_change;

//  =============================================== HOME PAGE ==========================================================
$('.tab-card').on('click', function(e) {

  console.log(this.id)
  window.location.href = 'http://localhost:8000/products/' + this.id
})




//  =============================================== CONTATCT US ==========================================================
$("#send_email").on('submit', function(e){
  e.preventDefault();  
  $("#loader").show();

  var name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var country = document.getElementById('country').value;
  var phone = document.getElementById('phone').value;
  var message = document.getElementById('message').value;

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  }); 

  $.ajax({
    type: "POST",
    url: "/contact-us/send-email",
    data: {
        name: name,
        email: email,
        country: country,
        phone: phone,
        message: message,
    },
    dataType : 'json',

    success: function($response) {
      console.log($response)
      $("#loader").hide();

      if(typeof $response === 'boolean' && $response === true) {
        $("#success_message").show();
        setTimeout(function() { $("#success_message").fadeOut("slow"); }, 4000);

      } else {
        var error_messages = [];

        for (key in $response[1]){
          var error = $response[1][key][0];

          error_messages.push(error);
        }

        $("#error_message").show();
        setTimeout(function() { $("#error_message").fadeOut("slow"); }, 5000);
        
        document.getElementById("error_message").innerHTML = error_messages.join(" <br> "); 


      }

      $("#send_email").trigger("reset");  // resets the form to initial state

    }
  }); // $.ajax({

}); //  $("#send_email").on('submit', function(e){ 

//  =============================================== PRODUCTS ==========================================================

//   Products Page - Product Details Redirect  
var product_elements = document.getElementsByClassName('productHighlight');

function productDetails() {
  var product_id = this.getAttribute('id');

  var id = 1;
  var name = 'ASDas';

  window.location.href = 'http://localhost:8000/details/' + id + '/' + name ;
};

for (var i = 0; i < product_elements.length; i++) {
  product_elements[i].addEventListener('click', productDetails, false);
  
};

// Products Page - Product Sidebar Show/Hide 
var sidebar_element = $('.prodListItem');

function productShowHide() {
  var prod_id_list = [];

  $('.prodListItem').each(function() {
    prod_id_list.push( this.id );
  });

  console.log(this.id)
  
  var prod_id = this.getAttribute('id');
  
  var index = prod_id_list.indexOf(prod_id);

  prod_id_list.splice(index, 1);

  function hide_prod(id) {
    $('.prodClass_' + id).css('display', 'none');
    $('.prodListItem').removeClass(" is-active");
  }

  prod_id_list.forEach(hide_prod)

  $('.prodClass_' + prod_id).css('display', 'block');
  this.className += ' is-active'
}

for (var i = 0; i < sidebar_element.length; i++) {
  sidebar_element[i].addEventListener('click', productShowHide, false);
  
};

// Product Page - When redirected from Home Page
var prod_group = $('#prod_group').val();
console.log(prod_group)

var prod_id_list = [];

$('.prodListItem').each(function() {
  prod_id_list.push( this.id );
});

if (typeof(prod_group) !== 'undefined') {
  function hide_prod(id) {
    $('.prodClass_' + id).css('display', 'none');
    $('.prodListItem').removeClass(" is-active");
  }
  
  prod_id_list.forEach(hide_prod)

  $('.prodClass_' + prod_group).css('display', 'block');

  $('#' + prod_group)[0].className += ' is-active'

}



// Product Page - Search Filter
$('#search_product').on('keyup', function() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("search_product");
  filter = input.value.toUpperCase();

  // prod_name_list = Array.from(document.getElementsByClassName('productHighlight'), e => e.innerText)

  prod_name_list = document.getElementsByClassName('productHighlight')
  
  for (i = 0; i < prod_name_list.length; i++) {
    txtValue = prod_name_list[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      prod_name_list[i].style.display = "";
    } else {
      prod_name_list[i].style.display = "none";
    }
  }

});

// Product Page - Show All products
$('#showAll').on('click', function() { 
  var prod_id_list = [];

  $('.prodListItem').each(function() {
    prod_id_list.push( this.id );
  });

  function show_prod(id) {
    $('.prodClass_' + id).css('display', 'block');
  }

  prod_id_list.forEach(show_prod)

  $('.prodListItem.is-active').css("background-color", "#f8f9fa");

}) 
   
  
