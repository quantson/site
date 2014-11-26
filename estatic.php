<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> ZappiStore | The Future of Market Research</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/estatic.css" rel="stylesheet">
	<link href="css/header.css" rel="stylesheet">
	<link href="css/slider.css" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<script src ="js/bootstrap.js"></script>
</head>

<body>
	<?php include "header.html" ?>

	<div class='container sample-selection'>
		<div class="left-help col-md-3">
			<div class="left-help-wrapper">
				<div class="left-help-header row">
					<div class="help-title">Select your sample size</div>
					<div class="help-indicator">
						<ol class="carousel-indicators">
							<li data-slide-to="0" class="active"></li>
							<li data-slide-to="1"></li>
							<li data-slide-to="2"></li>
							<li data-slide-to="3"></li>
							<li data-slide-to="4"></li>
							<li data-slide-to="5"></li>
							<li data-slide-to="6"></li>
						</ol>
					</div>
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
		<div class="main-selection col-md-9">
			<div class="selection active">
				<span class="glyphicon glyphicon-play"></span><span class="selection-title">Number of Creative executions</span>
				<div class="user-select execution">
					<div class="form-group">
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
			<div class="selection">
				<span class="glyphicon glyphicon-play"></span><span class="selection-title">Sample Size</span>
				<div class="user-select">
					<input id="sample-size" data-slider-id='sample-size' type="text" data-slider-min="100" data-slider-max="1000" data-slider-step="50" data-slider-value="150"/>
				</div>
			</div>
			<div class="selection">
				<span class="glyphicon glyphicon-play"></span><span class="selection-title">Country</span>
				<div class="user-select country">
					<div class="form-group">
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
			<div class="selection">
				<span class="glyphicon glyphicon-play"></span><span class="selection-title">Regions</span>
				<div class="user-select">
					<div class="form-group region-box">
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
			<div class="selection">
				<span class="glyphicon glyphicon-play"></span><span class="selection-title">Target Group</span>
				<div class="user-select target-group">
					<div class="form-group">
						<div class="col-md-4">
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
			<div class="selection">
				<span class="glyphicon glyphicon-play"></span><span class="selection-title">Age</span>
				<div class="user-select age">
					<div class="form-group">
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
			<div class="selection">
				<span class="glyphicon glyphicon-play"></span><span class="selection-title">Gender</span>
				<div class="user-select gender">
					<div class="form-group"> 						 
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
		</div>
	</div>	

	<?php include ("footer.html") ?>

	<script src="js/slider.js"></script>
	<script>
		$("#sample-size").slider({
			tooltip: 'always'
		});

		$('.selection').click(function(){
			$('.selection.active').removeClass('active');
			$(this).addClass('active');
		});

		// $(window).scroll(function() {
	 //        scroll = $(document).scrollTop();
	 //        offset = $('.sample-selection').offset().top;
	 //        store_height = $('.sample-selection').height();
	 //        sel_height = $('.left-help-wrapper').height();
	 //        scroll_stop = offset + store_height - sel_height;
	 //        if ((scroll >= offset) && (scroll <= scroll_stop)) {
	 //          $('.left-help-wrapper').css({
	 //            "margin-top" : scroll - offset + "px"
	 //          });
	 //        }else if (scroll < offset) {
	 //          $('.left-help-wrapper').css({
	 //            "margin-top" : 0 + "px"
	 //          });
	 //        }
  //   	});
	</script>
	<script src="js/header.js"></script>
	<script data-cfasync="false" type='text/javascript' src="js/olark.js"></script>
</body>