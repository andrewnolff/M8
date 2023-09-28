var swiper = new Swiper(".memberSwiper", {
  slidesPerView: 7,
  spaceBetween: 30,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    375: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    600: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    992: {
      slidesPerView: 4,
      spaceBetween: 10,
    },
    1280: {
      slidesPerView: 5,
      spaceBetween: 20,
    },
    1600: {
      slidesPerView: 6,
      spaceBetween: 20,
    },
    1800: {
      slidesPerView: 7,
      spaceBetween: 10,
    },
  },
});

// Side Bar Js 
$(".menutoggle").click(function(){
	$('.nav_links').addClass("active");
  });
  $(".menuclose").click(function(){
    $('.nav_links').removeClass("active");
    });

// User Popup Js 
$(".user_dropDown").click(function(){
	$('.profile_login_detail').toggleClass("active");
  });
// 

// filter_options  Js 
$(".closeFilter").click(function(){
	$('.filter_options').toggleClass("active");
  });

// User Popup Js 
$(".viewmore").click(function(){
	$('.viewmore_detail').toggleClass("active");
  });
// 

// User Popup Js 
$(".viewmoredetail").click(function(){
	$('.viewmore_detail2').toggleClass("active");
  });
//

var swiper = new Swiper(".memberSwiper", {
  slidesPerView: 7,
  spaceBetween: 30,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    375: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    600: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    992: {
      slidesPerView: 4,
      spaceBetween: 10,
    },
    1280: {
      slidesPerView: 5,
      spaceBetween: 20,
    },
    1600: {
      slidesPerView: 6,
      spaceBetween: 20,
    },
    1800: {
      slidesPerView: 7,
      spaceBetween: 10,
    },
  },
});

// OTP TIMER
var time = 30;
var initialOffset = '440';
var i = 1

/* Need initial run as interval hasn't yet occured... */
$('.circle_animation').css('stroke-dashoffset', initialOffset-(1*(initialOffset/time)));

var interval = setInterval(function() {
  $('h2 span	').text(i);
  if (i == time) {  	
    clearInterval(interval);
    return;
  }
  $('.circle_animation').css('stroke-dashoffset', initialOffset-((i+1)*(initialOffset/time)));
  i++;  
}, 1000);

/// OTP INPUTS START
$('.digit-group').find('input').each(function() {
  $(this).attr('maxlength', 1);
  $(this).on('keyup', function(e) {
    var parent = $($(this).parent());

    if(e.keyCode === 8 || e.keyCode === 37) {
      var prev = parent.find('input#' + $(this).data('previous'));

      if(prev.length) {
        $(prev).select();
      }
    } else if((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
      var next = parent.find('input#' + $(this).data('next'));

      if(next.length) {
        $(next).select();
      } else {
        if(parent.data('autosubmit')) {
          parent.submit();
        }
      }
    }
  });
});
 /// OTP INPUTS END

// Multiple Images Selection Js
var imgUpload = document.getElementById('upload-img')
  , imgPreview = document.getElementById('img-preview')
  , imgUploadForm = document.getElementById('form-upload') 
  , totalFiles
  , previewTitle
  , previewTitleText
  , img;

imgUpload.addEventListener('change', previewImgs, true);

function previewImgs(event) {
  totalFiles = imgUpload.files.length;
  
     if(!!totalFiles) {
    imgPreview.classList.remove('img-thumbs-hidden');
  }
  
  for(var i = 0; i < totalFiles; i++) {
    wrapper = document.createElement('div');
    wrapper.classList.add('wrapper-thumb');
    removeBtn = document.createElement("span");
    nodeRemove= document.createTextNode('x');
    removeBtn.classList.add('remove-btn');
    removeBtn.appendChild(nodeRemove);
    img = document.createElement('img');
    img.src = URL.createObjectURL(event.target.files[i]);
    img.classList.add('img-preview-thumb');
    wrapper.appendChild(img);
    wrapper.appendChild(removeBtn);
    imgPreview.appendChild(wrapper);
   
    $('.remove-btn').click(function(){
      $(this).parent('.wrapper-thumb').remove();
    });    

  }
}

