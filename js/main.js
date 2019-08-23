
var dialog = document.getElementById('dialog1');
var dialog2 = document.getElementById('dialog2');
var dialog3 = document.getElementById('dialog3');
var dialog4 = document.getElementById('dialog4');

$(document).ready(function(){


  //smooth scrolling
  $(document).on('click','nav a, .slide-text a, .serviceBook', function(event) {
    if($('nav').hasClass('open')){
      $('nav').removeClass('open');
    }else{
      $('nav').addClass('open');
    }
    $('dialog').removeAttr('open');
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      let hash = this.hash;
      let off = 0;

      if(window.width > 499){
        off = -250;
      }else{
        off = -60;
      }
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top + off
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        //window.location.hash = hash;
      });
    } // End if
  });

  /*SLIDERS*/
  /*var swiper = new Swiper('#homeSlider', {
    spaceBetween: 30,
    effect: 'fade',
    centeredSlides: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '#homeSlider .swiper-pagination',
    },
  });*/

  var swiper = new Swiper('#testimonialSlider', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '#testimonialSlider .swiper-pagination',  
    },
  });
  /*SLIDERS*/

  /*SERVICES*/
  
  var showModalButton = document.getElementById('service1');
  if (! dialog.showModal) {
    dialogPolyfill.registerDialog(dialog);
  }
  showModalButton.addEventListener('click', function() {
    dialog.showModal();
  });
  
  dialog.querySelector('.close').addEventListener('click', function() {
    dialog.close();
  });


  var showModalButton2 = document.getElementById('service2');
  if (! dialog2.showModal) {
    dialogPolyfill.registerDialog(dialog2);
  }
  showModalButton2.addEventListener('click', function() {
    dialog2.showModal();
  });
  dialog2.querySelector('.close').addEventListener('click', function() {
    dialog2.close();
  });

  
  var showModalButton3 = document.getElementById('service3');
  if (! dialog3.showModal) {
    dialogPolyfill.registerDialog(dialog3);
  }
  showModalButton3.addEventListener('click', function() {
    dialog3.showModal();
  });
  dialog3.querySelector('.close').addEventListener('click', function() {
    dialog3.close();
  });

  
  var showModalButton4 = document.getElementById('service4');
  if (! dialog4.showModal) {
    dialogPolyfill.registerDialog(dialog4);
  }
  showModalButton4.addEventListener('click', function() {
    dialog4.showModal();
  });
  dialog4.querySelector('.close').addEventListener('click', function() {
    dialog4.close();
  });

  
  /*SERVICES*/

  /*FAQ*/
  $('.mdl-accordion__content').each(function(){
    var content = $(this);
    content.css('margin-top', (-content.height() - 20));
  });
  $(document.body).on('click', '.mdl-accordion__button', function(){
    $(this).parent('.mdl-accordion').toggleClass('mdl-accordion--opened');
  });
  /*FAQ*/

  /*CONTACT FORM*/
  $("#contact-form").submit(function(e) {

    e.preventDefault(); 

    var form = $(this);
    var url = form.attr('action');

    $.ajax({
           type: "POST",
           url: url,
           data: form.serialize(), 
           success: function(data){
              $('#contact-msg').html('Thank you for reaching us, your message has been sent!');
           },
           error: function(data){
              $('#contact-msg').html('Thank you for reaching us, there was an issue sending!');
           }
    });
  });
  /*CONTACT FORM*/

});

function myFunction(x) {
  x.classList.toggle("change");
  if($('nav').hasClass('open')){
    $('nav').removeClass('open');
  }else{
    $('nav').addClass('open');
  }
}




