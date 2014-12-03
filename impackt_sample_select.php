<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> ZappiStore | The Future of Market Research</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/impackt_sample_select.css" rel="stylesheet">
	<link href="css/header.css" rel="stylesheet">
	<link href="css/slider.css" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<script src ="js/bootstrap.js"></script>
</head>

<body>
	<?php include "header.html" ?>

	<div class="main-header container">
		<div class="row">
			<div class="col-md-3 main-header-product">
				<img src="image/product/impackt.png">
				<div>Impackt Lite by MMR</div>	
			</div>
			<div class="col-md-offset-1 col-md-6 main-header-step">
				<div class="row">
					<div class="col-md-4 active">
          			  <img src="image/order/target.png">
           				<div class="caption caption-active">Select Sample</div>
          			</div>
          			<div class="col-md-4">
          			  <img src="image/order/survey.png">
          			  <div class="caption">Configure Survey</div>
          			</div>
          			<div class="col-md-4">
          			  <img src="image/order/launch.png">
          			  <div class="caption">Launch Project</div>
          			</div>
          		</div>	
			</div>
		</div>	
	</div>		
	<div class='container sample-selection'>
		<div class="left-help col-md-3">
			<div class="left-help-wrapper">
				<div class="left-help-header row">
					<div class="help-title active" question="0">Select your number of executions</div>
					<div class="help-title" question="1">Select your sample size</div>
					<div class="help-title" question="2">Select your country</div>
					<div class="help-title" question="3">Select your region</div>
					<div class="help-title" question="4">Select your target group</div>
					<div class="help-title" question="5">Select your age range</div>
					<div class="help-title" question="6">Select your gender</div>
				</div>
				<div class="help-wrapper">
					<div class="help-content">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
					</div>
					<div class="technical">
						<div class="technical-header">
							<div class="technical-header-center">Technical Info</div>
						</div>
						<div class="technical-content">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
						</div>
					</div>	
				</div>
			</div>		
		</div>
		<div class="main-selection col-md-7">
			<div class="selection active" question="0">
				<div class="selection-title">Number of Creative executions</div>
				<div class="selector-wrapper">
					<div class="selector active"></div>
				</div>
				<div class="user-select addmargin">
					<div class="form-group group">
						<label class="radio-inline" for="execution_number-0">
						  <input type="radio" name="execution_number" id="execution_number-0" value="1" checked="checked">
						  1
						</label> 
						<label class="radio-inline" for="execution_number-1">
						  <input type="radio" name="execution_number" id="execution_number-1" value="2">
						  2
						</label> 
						<label class="radio-inline" for="execution_number-2">
						  <input type="radio" name="execution_number" id="execution_number-2" value="3">
						  3
						</label> 
						<label class="radio-inline" for="execution_number-3">
						  <input type="radio" name="execution_number" id="execution_number-3" value="4">
						  4
						</label> 
						<label class="radio-inline" for="execution_number-4">
						  <input type="radio" name="execution_number" id="execution_number-4" value="5">
						  5
						</label>
					</div>	
				</div>
			</div>
			<div class="selection" question="1">
				<div class="selection-title" >Sample Size</div>
				<div class="selector-wrapper">
					<div class="selector"></div>
				</div>
				<div class="user-select slider">
					<input id="sample-size" data-slider-id='sample-size' type="text" data-slider-min="100" data-slider-max="1000" data-slider-step="50" data-slider-value="150"/>
				</div>
			</div>
			<div class="selection" question="2">
				<div class="selection-title">Country</div>
				<div class="selector-wrapper">
					<div class="selector"></div>
				</div>
				<div class="user-select country">
					<div class="form-group group">
					  	<div class="col-md-4">
					    	<select id="country" name="country" class="form-control">
					    	  <option value="1">France</option>
					    	  <option value="2">United-Kingdom</option>
					    	  <option value="3">United-States</option>
					    	  <option value="4">Burkina-Fasso</option>
					    	</select>
					  </div>
					</div>
				</div>
			</div>
			<div class="selection" question="3">
				<div class="selection-title">Regions</div>
				<div class="selector-wrapper">
					<div class="selector"></div>
				</div>
				<div class="user-select addmargin">
					<div class="form-group group region-box">
					  	<div class="checkbox">
					    	<label for="regions-0">
					    	  <input type="checkbox" name="regions" id="regions-0" value="1" checked>
					    	  Bourgogne, Auvergne, Limousin
					    	</label>
						</div>
					  	<div class="checkbox">
					    	<label for="regions-1">
					    	  <input type="checkbox" name="regions" id="regions-1" value="2" checked>
					    	  Ile-de-France / Region Parisienne
					    	</label>
						</div>
					  	<div class="checkbox">
					    	<label for="regions-2">
					    	  <input type="checkbox" name="regions" id="regions-2" value="3" checked>
					    	  Nord-Pas-de-Calais, Picardie
					    	</label>
						</div>
					  	<div class="checkbox">
					    	<label for="regions-3">
					    	  <input type="checkbox" name="regions" id="regions-3" value="4" checked>
					    	  Rhone-Alpes, Franche-Comte
					    	</label>
						</div>
					</div>
				</div>
			</div>
			<div class="selection" question="4">
				<div class="selection-title">Target Group</div>
				<div class="selector-wrapper">
					<div class="selector"></div>
				</div>
				<div class="user-select target-group">
					<div class="form-group group">
						<div class="col-md-5">
					    	<select id="target-group" name="target-group" class="form-control">
					    	  <option value="1">General Population</option>
					    	  <option value="2">High Income</option>
					    	  <option value="3">Low Income</option>
					    	  <option value="4">No idea</option>
					    	</select>
					    </div>
					</div>
				</div>
			</div>
			<div class="selection" question="5">
				<div class="selection-title">Age</div>
				<div class="selector-wrapper">
					<div class="selector"></div>
				</div>
				<div class="user-select addmargin">
					<div class="form-group group">
					    <label class="checkbox-inline" for="checkboxes-0">
					      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
					      18-25
					    </label>
					    <label class="checkbox-inline" for="checkboxes-1">
					      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
					      26-35
					    </label>
					    <label class="checkbox-inline" for="checkboxes-2">
					      <input type="checkbox" name="checkboxes" id="checkboxes-2" value="3">
					      36-45
					    </label>
					    <label class="checkbox-inline" for="checkboxes-3">
					      <input type="checkbox" name="checkboxes" id="checkboxes-3" value="4">
					      46-55
					    </label>
					    <label class="checkbox-inline" for="checkboxes-4">
					      <input type="checkbox" name="checkboxes" id="checkboxes-4" value="5">
					      56+
					    </label>
					</div>
				</div>
			</div>
			<div class="selection" question="6">
				<div class="selection-title">Gender</div>
				<div class="selector-wrapper">
					<div class="selector"></div>
				</div>
				<div class="user-select addmargin">
					<div class="form-group group"> 						 
					    <label class="radio-inline" for="gender-0">
					      <input type="radio" name="gender" id="gender-0" value="1">
					      Male
					    </label>
					    <label class="radio-inline" for="gender-1">
					      <input type="radio" name="gender" id="gender-1" value="2">
					      Female
					    </label>
					    <label class="radio-inline" for="gender-2">
					      <input type="radio" name="gender" id="gender-2" value="3">
					      Both
					    </label>
					</div>
				</div>
			</div>
			<div class="next-step col-md-3 pull-right">
				<a href="impackt_product_conf.php" class="btn btn-primary"><span class="glyphicon glyphicon-forward"></span> Next Step</a>
			</div>
		</div>
		<div class="col-md-2 pull-right project-info">
			<div class="col-md-6 price">
				<div>
					<span class="price-symbol">£</span><span>999</span>
				</div>
				<div class="price-tooltip">Price</div>
			</div>
			<div class="col-md-6 duration">
				<div>
					<span>5</span><span class="price-symbol">hrs</span>
				</div>
				<div class="price-tooltip">Duration</div>
			</div>
		</div>
	</div>	

	<?php include ("footer.html") ?>

	<script src="js/slider.js"></script>
	<script src="js/header.js"></script>
	<script data-cfasync="false" type='text/javascript' src="js/olark.js"></script>
	<script>
		$("#sample-size").slider({
			tooltip: 'always'
		});

		scroll_follow = function(item) {
	        scroll = $(document).scrollTop();
	        offset = $('.sample-selection').offset().top;
	        store_height = $('.sample-selection').height();
	        sel_height = item.height();
	        scroll_stop = offset + store_height - sel_height;
	        if ((scroll >= offset) && (scroll <= scroll_stop)) {
	          item.css({
	            "margin-top" : ""
	          }).css({
	            "margin-top" : "+=" + (scroll - offset) + "px"
	          });
	        }else if (scroll < offset) {
	          item.css({
	            "margin-top" : ""
	          });
	        }
    	};

		$(window).scroll(function(){
			scroll_follow($('.left-help-wrapper'));
			scroll_follow($('.project-info'));
		});
	


		var changeactive = function(activetrig){
			$('.selection.active').removeClass('active');
			$('.selection[question="' + activetrig + '"]').addClass('active');
			$('.selection.active').css({'color':'white'});
			$('.left-help .active').stop().removeClass('active').hide();
			$('.left-help [question="'+ activetrig +'"]').addClass('active').fadeIn('fast');
		}

		$(window).load(function() {
			var $el, topPos, newHeight;

		   	$(".main-selection").append("<div id='magic-line'></div>");
		    
		    var $magicLine = $("#magic-line");
		    
		    $magicLine
		        .width($(".main-selection").width())
		        .height($(".selection.active").outerHeight())
		        .css("top", $(".main-selection .selection.active").position().top)
		        .data("origTop", $(".main-selection .active").position().top)
		        .data("origHeight", $magicLine.outerHeight());
		                
		    $(".main-selection .selection").mousedown(function() {
		        $el = $(this);
		        var num = parseInt($el.attr('question'),10);
				if($el.hasClass('active')){return;}
		        topPos = $el.position().top;
		        newHeight = $el.outerHeight();
		        $('.selection.active').css({'color':'black'});
		        $magicLine.stop().animate({
		            top: topPos,
		            height: newHeight,
		        },function(){
				changeactive(num);
		   		 });
		    });	    
		});

	</script>
</body>