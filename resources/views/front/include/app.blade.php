<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>{{ config('app.name', 'Laravel') }}</title>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
  <meta name="keywords" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  
  <meta name="author" content="{{ config('app.name', 'Laravel') }}">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css" />	
    
    <style>
        /* USER PROFILE PAGE */
         .card {
            margin-top: 20px;
            padding: 30px;
            background-color: rgba(214, 224, 226, 0.2);
            -webkit-border-top-left-radius:5px;
            -moz-border-top-left-radius:5px;
            border-top-left-radius:5px;
            -webkit-border-top-right-radius:5px;
            -moz-border-top-right-radius:5px;
            border-top-right-radius:5px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .card.hovercard {
            position: relative;
            padding-top: 0;
            overflow: hidden;
            text-align: center;
            background-color: #fff;
            background-color: rgba(255, 255, 255, 1);
        }
        .card.hovercard .card-background {
            height: 130px;
        }
        .card-background img {
            -webkit-filter: blur(25px);
            -moz-filter: blur(25px);
            -o-filter: blur(25px);
            -ms-filter: blur(25px);
            filter: blur(25px);
            margin-left: -100px;
            margin-top: -200px;
            min-width: 130%;
        }
        .card.hovercard .useravatar {
            position: absolute;
            top: 15px;
            left: 0;
            right: 0;
        }
        .card.hovercard .useravatar img {
            width: 100px;
            height: 100px;
            max-width: 100px;
            max-height: 100px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            border: 5px solid rgba(255, 255, 255, 0.5);
        }
        .card.hovercard .card-info {
            position: absolute;
            bottom: 14px;
            left: 0;
            right: 0;
        }
        .card.hovercard .card-info .card-title {
            padding:0 5px;
            font-size: 20px;
            line-height: 1;
            color: #262626;
            background-color: rgba(255, 255, 255, 0.1);
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
        }
        .card.hovercard .card-info {
            overflow: hidden;
            font-size: 12px;
            line-height: 20px;
            color: #737373;
            text-overflow: ellipsis;
        }
        .card.hovercard .bottom {
            padding: 0 20px;
            margin-bottom: 17px;
        }
        .btn-pref .btn {
            -webkit-border-radius:0 !important;
        }
        .icn{
            font-size:22px;
        }
        .btn-primary {
            color: #2E3192 !important;
            background-color: #f6fbff !important;
            border-bottom: 2px solid #2E3192 !important;
            font-size: 15px !important;
            border-color: #fff;
        }
        .btn-default{
              font-size: 15px !important;
        }
        .well{
            background: rgb(255 255 255 / 50%) !important;
        }
        .form-box{
            padding:10px 3px;
        }
        .tab-action .btn{
            /*height:48px;*/
            border-radius: 50px;
        }
        .input-group-addon{
            padding: 6px 12px;
            font-size: 14px;
            font-weight: 400;
            line-height: 1;
            color:blue !important;
            text-align: none !important;
             background-color:#fff0 !important; 
             border: none !important;
             border-radius: 4px; 
            float: left !important;
            margin-top: -30px !important;
            margin-left: -2px !important;
        }
        .form-box input.form-control, .form-box select.form-control{
            padding: 6px 30px !important;
        }
        #accordion .form-box input.form-control {
            /*padding: 6px 25px !important;*/
        }
        .form-box input.form-control.number {
            padding-left: 50px !important;
        }
        /*.form-box input.form-control.number2 {*/
        /*    padding-left: 65px !important;*/
        /*}*/
        .tab-pane .intab-cover .form-box .active {
            background-color: rgb(46 49 146 / 70%);
            color: #ffffff !important;
        }
        .form-control:focus {
            /*background-color: rgb(46 49 146 / 70%);*/
            color: #ffffff !important;
        }
        
    </style>
</head>


<body class="hold-transition sidebar-mini layout-fixed">
    
    
@yield('content')


<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/slick.js') }}"></script>

<script>
  jQuery(document).ready(function($) {
    var $owl = $('.owl-carousel');
      $owl.children().each( function( index ) {
        jQuery(this).attr( 'data-position', index ); 
      });
      
      $owl.owlCarousel({
        center: true,
        nav:true,
        loop: true,
        items: 5,
      margin:10,
        navText: ["<i class='fa arrow-circle-left'><</i>","<i class='fa arrow-right'>></i>"],
        responsive:{
          0:{
              items:1
          },
          600:{
              items:3
          },
          1000:{
              items:5
          }
       }
      });
    $(document).on('click', '.item', function() {
      $owl.trigger('to.owl.carousel', $(this).data( 'position' ) ); 
    });
          });
</script>



<script>
	$('.our-services').slick({
   		slidesToShow:4,
        slidesToScroll: 1,
        autoplay:false,
        autoplaySpeed: 2000,
        dots:false, 
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
        ]
    });
    

    $('.getstarted-slider').slick({
   	    slidesToShow:1,
        slidesToScroll: 1,
        autoplay:true,
        autoplaySpeed: 3000,
        dots:false, 
        fade: true,  
 	});
   

	$('.suggestion-list').slick({
   	    slidesToShow:4,
        slidesToScroll: 1,
        autoplay:false,
        autoplaySpeed: 2000,
        dots:false, 
        responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
 	});



$(".btn.form-control").click(function(){

    $(".btn.form-control").removeClass("active");
    $(this).addClass("active");
});


// From http://jsfiddle.net/LxauG/606/
// $(".addmoredesti").click(function(e){
//     e.preventDefault();
//     $(".popup").fadeIn(300,function(){$(this).focus();});
// });

// $('.close').click(function() {
//   $(".popup").fadeOut(300);
// });

// $(".popup").on('blur',function(){
//     $(this).fadeOut(300);
// });


    $(document).ready(function() {  
		$("#addEmail").on("click", function() {  
			$("#more-email").append('<div class="appenededd"><div class="row"><div class="col-lg-3 col-md-3 col-sm-3 multicolumn"><div class="form-box"><label>From</label><input type="text" class="form-control" placeholder="From" /><div class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></div></div></div><div class="col-lg-3 col-md-3 col-sm-3 multicolumn"><div class="form-box"><label>To</label><input type="text" class="form-control" placeholder="To" /><div class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></div></div></div><div class="col-lg-3 col-md-3 col-sm-3 multicolumn"><div class="form-box"><label>Departure-Date</label><input type="date" class="form-control" placeholder="Departure-Date" /><div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></div></div></div></div><span id="removeEmail" class="close" >x</span></div>');  
		});  
		$("#removeEmail").on("click", function() {  
			$("#more-email").children().last().remove();  
		});  
	});  
	
	
// 	$(document).ready(function() {  
// 		$("#addEmail2").on("click", function() {  
// 			$("#more-email2").append('<div class="appenededd"><div class="row"><div class="col-lg-3 col-md-3 col-sm-3 multicolumn"><div class="form-box"><label>From</label><input type="text" class="form-control" placeholder="From" /><div class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></div></div></div><div class="col-lg-3 col-md-3 col-sm-3 multicolumn"><div class="form-box"><label>To</label><input type="text" class="form-control" placeholder="To" /><div class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></div></div></div><div class="col-lg-3 col-md-3 col-sm-3 multicolumn"><div class="form-box"><label>Departure-Date</label><input type="date" class="form-control" placeholder="Departure-Date" /><div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></div></div></div></div><span id="removeEmail2" class="close" >x</span></div>');
// 		});  
// 		$("#removeEmail2").on("click", function() {  
// 			$("#more-email2").children().last().remove();  
// 		});  
// 	});  

// multicity

// $(document).ready(function() {  
// 		$("#addEmail2").on("click", function() {  
// 			$("#more-email2").append('<div class="appenededd2"><div class="row"><div class="col-lg-3 col-md-3 col-sm-3 multicolumn"><div class="form-box"><label>From</label><input type="text" class="form-control" placeholder="From" /><div class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></div></div></div><div class="col-lg-3 col-md-3 col-sm-3 multicolumn"><div class="form-box"><label>To</label><input type="text" class="form-control" placeholder="To" /><div class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></div></div></div><div class="col-lg-3 col-md-3 col-sm-3 multicolumn"><div class="form-box"><label>Departure-Date</label><input type="date" class="form-control" placeholder="Departure-Date" /><div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></div></div></div></div><span id="removemulticity" class="close" >x</span></div>');  
// 		});  
// 		$("#removeEmail2").on("click", function() {  
// 			$("#more-email2").children().last().remove();  
// 		});  
// 	});


// $(".addmoredesti p").click(function(){
//     $(".addmoredesti").prepend('<div class="appeneded"><div class="row"><div class="col-lg-3 col-md-3 col-sm-3 multicolumn"><div class="form-box"><input type="text" class="form-control" placeholder="From" /></div></div><div class="col-lg-3 col-md-3 col-sm-3 multicolumn"><div class="form-box"><input type="text" class="form-control" placeholder="To" /></div></div><div class="col-lg-3 col-md-3 col-sm-3 multicolumn"><div class="form-box"><input type="text" class="form-control" placeholder="Departure" /></div></div><div class="col-lg-3 col-md-3 col-sm-3 multicolumn"><div class="form-box"><input type="text" class="form-control" placeholder="Return" /></div></div> </div><span class="close" >x</span></div>');
// });

// $(document).ready(function() {  
// 		$("#addEmail3").on("click", function() {  
// 			$("#more-email3").append('<div class="appenededd"><div class="row"><div class="col-lg-3 col-md-3 col-sm-3 multicolumn"><div class="form-box"><label>From</label><input type="text" class="form-control" placeholder="From" /><div class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></div></div></div><div class="col-lg-3 col-md-3 col-sm-3 multicolumn"><div class="form-box"><label>To</label><input type="text" class="form-control" placeholder="To" /><div class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></div></div></div><div class="col-lg-3 col-md-3 col-sm-3 multicolumn"><div class="form-box"><label>Departure-Date</label><input type="date" class="form-control" placeholder="Departure-Date" /><div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></div></div></div></div><span id="removeEmail3" class="close" >x</span></div>');  
// 		});  
// 		$("#removeEmail3").on("click", function() {  
// 			$("#more-email3").children().last().remove();  
// 		});  
// 	});  

$(".addmore-package").click(function(){
    $(".gropu-btn").prepend('<div class="groun-sec"><div class="row"><div class="col-lg-6 col-md-6 col-sm-6"><div class="form-box"><input type="text" class="form-control" placeholder="Destination"></div></div><div class="col-lg-6 col-md-6 col-sm-6"><div class="form-box"><input type="text" class="form-control" placeholder="No. Of Passenger">					 			</div></div><div class="col-lg-4 col-md-4 col-sm-4"><div class="form-box"><input type="text" class="form-control" placeholder="Adult">		 			</div></div><div class="col-lg-4 col-md-4 col-sm-4"><div class="form-box"><input type="text" class="form-control" placeholder="Children"></div></div><div class="col-lg-4 col-md-4 col-sm-4"><div class="form-box"><input type="text" class="form-control" placeholder="Infants"></div</div></div><span class="close" >x</span></div>');
});

$(".addmore-build-pack").click(function(){
    $(".gropu-btn").prepend('<div class="row build-pack-desti"><div class="col-lg-4 col-md-4 col-sm-4"><div class="form-box"><input type="text" class="form-control" placeholder="Choose Destination"></div></div><div class="col-lg-4 col-md-4 col-sm-4"><div class="form-box">					 				<input type="text" class="form-control" placeholder="Check In"></div></div><div class="col-lg-4 col-md-4 col-sm-4">					 			<div class="form-box"><input type="text" class="form-control" placeholder="Check Out"></div></div><span class="close" >x</span></div>');
});

$(".close").click(function(){
	$('#multicity').remove(".appeneded");
});



$(".tab button").click(function(){
	var textContent = $(this).text();
    $(".inner-title h1").text(textContent);
});

</script>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}



/*js for flight tab*/
function openflight(evt, flighttype) {
  var j, intabcontent, intablinks;
  intabcontent = document.getElementsByClassName("intabcontent");
  for (j = 0; j < intabcontent.length; j++) {
    intabcontent[j].style.display = "none";
  }
  intablinks = document.getElementsByClassName("intablinks");
  for (j = 0; j < intablinks.length; j++) {
    intablinks[j].className = intablinks[j].className.replace(" active", "");
  }
  document.getElementById(flighttype).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

$(document).ready(function() {
$(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
});
});

$('.collapse').collapse()



function chkChangeDiffLocation(objRef) {
            debugger;
            if (objRef.checked) {
                $("#divTransportdropCountryName").show();
                $("#divTransportdropCityName").show();
            }
            else {
                $("#divTransportdropCountryName").hide();
                $("#divTransportdropCityName").hide();
            }
        }

</script>


@yield('srpt-extjs')
@yield('script')
</body>

</html>