<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> ZappiStore | The Future of Market Research</title>
	<link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/store.css" rel="stylesheet">
  <link href="css/header.css" rel="stylesheet">
  <script src="js/jquery.js"></script>
  <script src ="js/bootstrap.js"></script>
  <script src="js/isotope.pkgd.js"></script>
</head>

<body>

  <?php include "header.html" ?>

	<div class="container-fluid store">
		<div class="col-md-2 leftslider">
      <div class="selectors">
			<input type="text" placeholder="search">
			<div class="filters">
				<div class="filter active one" data-filter="*">Apps</div>
						<div class="filter two" data-filter=".bestsell">Best Selling</div>
						<div class="two nohover">By Provider</div>
								<div class="filter three" data-filter=".zappi">Zappistore</div>
								<div class="filter three" data-filter=":not(.zappi)">Partners</div>
								<div class="filter three" data-filter=".mb">MB</div>
								<div class="filter three" data-filter=".mmr">MMR</div>
                <div class="filter three" data-filter=".tonic">Tonic</div>
						<div class="two nohover">By Product Tested</div>
								<div class="filter three" data-filter=".video">Video Ad</div>
								<div class="filter three" data-filter=".static">Static Ad</div>
								<div class="filter three" data-filter=".pack">Package</div>
								<div class="filter three" data-filter=".newprod">New product</div>
      </div>          
			</div>		
		</div>
    <div id="container" class="col-md-10 pull-right">	
      <?php include 'products.php' ?>
	  </div>	
  </div> <!-- end store -->

  <?php include ("footer.html") ?>
  
    
  <script type="text/javascript">
    $('.main').hover(function() {
      var main = $(this);
      setTimeout(function(){
        if (main.is(':hover')){
          main.slideUp(300);
        }
      },200);    
    },function(){
      if (! $(this).next().is(':hover')){
        $(this).slideDown(300);
      }
    });
    $('.slide').mouseleave(function() {
      $(this).prev().slideDown(300);
    });
    $(window).scroll(function() {
        scroll = $(document).scrollTop();
        offset = $('.store').offset().top;
        store_height = $('.store').height();
        sel_height = $('.selectors').height();
        scroll_stop = offset + store_height - sel_height;
        if ((scroll >= offset) && (scroll <= scroll_stop)) {
          $('.selectors').css({
            "margin-top" : scroll - offset + "px"
          });
        }else if (scroll < offset) {
          $('.selectors').css({
            "margin-top" : 0 + "px"
          });
        }
    });

  	var $container = $('#container');
  	// init
  	$container.isotope({
  	  // options
  	  itemSelector: '.item',
  	  layoutMode: 'fitRows'
  	});
	
  	$('.filter').on( 'click', function() {
  	 var filterValue = $(this).attr('data-filter');
  	 $container.isotope({ filter: filterValue });
  	 $('.active').removeClass('active');
  	 $(this).addClass('active');
     $('html, body').animate({ scrollTop: 0 }, 200);
		});
  </script>

  
  <script src="js/header.js"></script>
  <script data-cfasync="false" type='text/javascript' src="js/olark.js"></script>
</body>