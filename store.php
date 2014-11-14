<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> ZappiStore | The Future of Market Research</title>
	<link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/store.css" rel="stylesheet">
  <script src="js/jquery.js"></script>
  <script src ="js/bootstrap.js"></script>
  <script src="js/isotope.pkgd.js"></script>
</head>

<body>

  <?php include "header.html" ?>

	<div class="container-fluid store">
		<div class="col-md-2 leftslider">
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

    <div id="container" class="col-md-10">	
      <?php include 'products.php' ?>
	  </div>	

  </div>
    
  <script type="text/javascript">
    $('.main').hover(function() {
      var test = $(this);
      setTimeout(function(){
        if (test.is(':hover')){
          test.slideUp(200);
        }
      },200);    
    },function(){
      if (! $(this).next().is(':hover')){
        $(this).slideDown(100);
      } 
    });
    $('.slide').mouseleave(function() {
         $(this).prev().slideDown(100);
    });
  </script>  


  <script type="text/javascript">
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
		});
  </script>

  
  <script src="js/header.js"></script>
  <script data-cfasync="false" type='text/javascript' src="js/olark.js"></script>
</body>