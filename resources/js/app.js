const { cssNumber } = require('jquery');

require('./bootstrap');


//  =============================================== NAVBAR ==========================================================
$(function() {
  const indicator = document.querySelector('.nav-indicator');

  var url = window.location.href;

  if (url.includes('details') || url.includes('products')) {
    var active_element = document.getElementById('products');
  } else if (url.includes('galery')) {
    var active_element = document.getElementById('galery');
  } else if (url.includes('about_us')) {
    var active_element = document.getElementById('about_us');
  } else if (url.includes('contact')) {
    var active_element = document.getElementById('contact');
  } else {
    var active_element = document.getElementById('home');
  }

  active_element.classList.add('is-active')

  indicator.style.width = active_element.offsetWidth + 'px';
  indicator.style.left = active_element.offsetLeft + 'px';
  indicator.style.backgroundColor = active_element.getAttribute('active-color');
  
})

function indicator_position_change() {
  var indicator = document.getElementsByClassName('nav-indicator')[0] 
  var url = window.location.href;

  if (url.includes('details') || url.includes('products')) {
    var active_element = document.getElementById('products');
  } else if (url.includes('galery')) {
    var active_element = document.getElementById('galery');
  } else if (url.includes('about_us')) {
    var active_element = document.getElementById('about_us');
  } else if (url.includes('contact')) {
    var active_element = document.getElementById('contact');
  } else {
    var active_element = document.getElementById('home');
  }

  indicator.style.width = active_element.offsetWidth + 'px';
  indicator.style.left = active_element.offsetLeft + 'px';
  indicator.style.backgroundColor = active_element.getAttribute('active-color');
}

window.onresize = indicator_position_change;


// Products Dropdown menu 
$("#products_dropdown").on("mouseenter", function () {
  $("#products_dropdown").css('opacity', 1)
  $("#products_dropdown").css('display', 'block')
  $("#products_dropdown").css('visibility', 'visible')

});

$("#products_dropdown").on("mouseleave", function () {
  $("#products_dropdown").css('opacity', '')
  $("#products_dropdown").css('display', '')
  $("#products_dropdown").css('visibility', '')

});

// Languages Dropdown menu 
$("#lang_dropdown").on("mouseenter", function () {
  $("#lang_dropdown").css('opacity', 1)
  $("#lang_dropdown").css('display', 'block')
  $("#lang_dropdown").css('visibility', 'visible')

});

$("#lang_dropdown").on("mouseleave", function () {
  $("#lang_dropdown").css('opacity', '')
  $("#lang_dropdown").css('display', '')
  $("#lang_dropdown").css('visibility', '')
});

var url = window.location.href;

if (! url.includes('products')){
  $('.hover_highlight').hover(function() {
    $('#products').css('color', 'white')
    $('#products').css('transition', '0.4s')
  }, function() {
    $('#products').css('color', '')
  });
}

//  =============================================== HOME PAGE ==========================================================
$('.tab-card').on('click', function(e) {

  console.log(this.id)

  var url = window.location.href;

  if (url.includes('masinacserbia')) {
    window.location.href = 'http://masinacserbia.rs/products/' + this.id
  } else {
    window.location.href = 'http://localhost:8000/products/' + this.id
  }
    
})

// Home page arrow show/hide 
$(function(){
  window.addEventListener('scroll', () => {
    if (window.scrollY > 420 && window.scrollY < 1200 ) {
      $("#arrow_up_circle").css('opacity', 1)
      $("#arrow_up_circle").css('display', 'block')
      $("#arrow_up_circle").css('visibility', 'visible')
      $("#arrow_up_circle").css('pointer-events', 'auto')
    } else {
      $("#arrow_up_circle").css('opacity', '')
      $("#arrow_up_circle").css('display', '')
      $("#arrow_up_circle").css('visibility', '')
      $("#arrow_up_circle").css('pointer-events', 'none')
      $("#arrow_up_circle").css('pointer', '')
    }
  });
});

$('#arrow_div').on('click', function(){
  window.scrollTo(0, 0);
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
  var name = this.lastElementChild.innerHTML;

  var url = window.location.href;

  if (url.includes('masinacserbia')) {
    window.location.href = 'http://masinacserbia.rs/details/' + product_id + '/' + name ;
  } else {
    window.location.href = 'http://localhost:8000/details/' + product_id + '/' + name ;
  }

};

for (var i = 0; i < product_elements.length; i++) {
  product_elements[i].addEventListener('click', productDetails, false);
  
};

// Product Page - Sidebar - active element
var url = window.location.href

if (url.includes('reze_zatvaraci')) {
  var active_element = $('#reze_zatvaraci'); 
} else if (url.includes('sarke')) {
  var active_element = $('#sarke'); 
} else if (url.includes('ugaoni_vezaci')) {
  var active_element =$('#ugaoni_vezaci'); 
} else if (url.includes('ravni_vezaci')) {
  var active_element = $('#ravni_vezaci'); 
} else if (url.includes('prod_zice')) {
  var active_element = $('#prod_zice'); 
} else if (url.includes('nosaci')) {
  var active_element = $('#nosaci'); 
} else if (url.includes('pl_masa')) {
  var active_element = $('#pl_masa'); 
} else if (url.includes('usluge')) {
  var active_element = $('#usluge'); 
}

if (typeof active_element !== 'undefined') {
  active_element[0].className += ' is-active'
}


// // Products Page - Product Sidebar Show/Hide 
// var sidebar_element = $('.prodListItem');

// function productShowHide() {
//   var prod_id_list = [];

//   $('.prodListItem').each(function() {
//     prod_id_list.push( this.id );
//   });

//   console.log(this.id)
  
//   var prod_id = this.getAttribute('id');
  
//   var index = prod_id_list.indexOf(prod_id);

//   prod_id_list.splice(index, 1);

//   function hide_prod(id) {
//     $('.prodClass_' + id).css('display', 'none');
//     $('.prodListItem').removeClass(" is-active");
//   }

//   prod_id_list.forEach(hide_prod)

//   $('.prodClass_' + prod_id).css('display', 'block');
//   this.className += ' is-active'
// }

// for (var i = 0; i < sidebar_element.length; i++) {
//   sidebar_element[i].addEventListener('click', productShowHide, false);
  
// };

// // Product Page - When redirected from Home Page
// var prod_group = $('#prod_group').val();
// console.log(prod_group)

// var prod_id_list = [];

// $('.prodListItem').each(function() {
//   prod_id_list.push( this.id );
// });

// if (typeof(prod_group) !== 'undefined') {
//   function hide_prod(id) {
//     $('.prodClass_' + id).css('display', 'none');
//     $('.prodListItem').removeClass(" is-active");
//   }
  
//   prod_id_list.forEach(hide_prod)
 
//   $('.prodClass_' + prod_group).css('display', 'block');

//   $('#' + prod_group)[0].className += ' is-active'

// }

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

// // Product Page - Show All products
// $('#showAll').on('click', function() { 
//   var prod_id_list = [];

//   $('.prodListItem').each(function() {
//     prod_id_list.push( this.id );
//   });

//   function show_prod(id) {
//     $('.prodClass_' + id).css('display', 'block');
//   }

//   prod_id_list.forEach(show_prod)

//   $('.prodListItem.is-active').css("background-color", "#f8f9fa");

// }) 
   
  
//  =============================================== ABOUT US ==========================================================
$(function(){
  window.addEventListener('scroll', () => {
    console.log(window.scrollY)
    if (window.scrollY < 200) {
      $('.active-element').removeClass('active-element')

      $('#1970').addClass('active-element');
      $('#1970_link').addClass('active-element');

    } else if (window.scrollY < 450) { 
      $('.active-element').removeClass('active-element')

      $('#1992').addClass('active-element');
      $('#1992_link').addClass('active-element');

    } else if (window.scrollY < 700) { 
      $('.active-element').removeClass('active-element')

      $('#1995').addClass('active-element');
      $('#1995_link').addClass('active-element');

    } else if (window.scrollY < 950) { 
      $('.active-element').removeClass('active-element')

      $('#2000').addClass('active-element');
      $('#2000_link').addClass('active-element');

    } else if (window.scrollY < 1200) { 
      $('.active-element').removeClass('active-element')

      $('#2002').addClass('active-element');
      $('#2002_link').addClass('active-element');

    } else if (window.scrollY < 1450) { 
      $('.active-element').removeClass('active-element')

      $('#2006').addClass('active-element');
      $('#2006_link').addClass('active-element');

    } else if (window.scrollY < 1700) { 
      $('.active-element').removeClass('active-element')

      $('#2009').addClass('active-element');
      $('#2009_link').addClass('active-element');

    } else if (window.scrollY < 1950) { 
      $('.active-element').removeClass('active-element')

      $('#2020').addClass('active-element');
      $('#2020_link').addClass('active-element');

    }
  });
});