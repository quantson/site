<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> ZappiStore | The Future of Market Research</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/impackt_product_conf.css" rel="stylesheet">
	<link href="css/header.css" rel="stylesheet">
	<link href="css/slider.css" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<script src ="js/bootstrap.js"></script>
	<script src="js/html5.image.preview.js"></script>
</head>

<body>
	<?php include "header.html" ?>

	<div class='container sample-selection'>
		<div class="left-help col-md-3">
			<div class="left-help-wrapper">
				<div class="left-help-header row">
					<div class="help-title active" question="0">Add and upload your creatives</div>
					<div class="help-title" question="1">Select your pack name</div>
					<div class="help-title" question="2">Select your brand namey</div>
					<div class="help-title" question="3">Select your product name</div>
					<div class="help-title" question="4">Select your category</div>
					<div class="help-title" question="5">Select your pack range</div>
					<div class="help-title" question="6">Select your benchmark pack</div>
					<div class="help-title" question="7">Select your category for norms</div>
					<div class="help-title" question="8">Select your pack diagnostic</div>
					<div class="help-title" question="9">Select your pack expectations</div>
					<div class="help-title" question="10">Select your pack format</div>
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
			<div class="main-header group">
				<div class="col-md-3 main-header-product">
					<img src="image/product/impackt.png">
					<div>Impackt Lite by MMR</div>	
				</div>
				<div class="col-md-6 main-header-step">
					<div class="row">
						<div class="col-md-4">
          				  <img src="image/order/target.png">
            				<div class="caption caption-active">Select Sample</div>
          				</div>
          				<div class="col-md-4 active">
          				  <img src="image/order/survey.png">
          				  <div class="caption">Configure Survey</div>
          				</div>
          				<div class="col-md-4">
          				  <img src="image/order/launch.png">
          				  <div class="caption">Launch Project</div>
          				</div>
          			</div>	
				</div>
				<div class="col-md-3 pull-right project-info">
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
			<div class="selection active" question="0">
				<div class="selection-title">Add and upload up to 5 creatives</div>
				<div class="selector-wrapper">
					<div class="selector active"></div>
				</div>
				<div class="user-select">
					<div class="form-group group">
						<div class="square upload added" cell="1">
							<span class="glyphicon glyphicon-open icon-center"></span>
							<input type="file" name="imagefile" onchange="previewImage(this,[120],4);">
							<div class="imagePreview"></div>
						</div>
						<div class="square upload" cell="2">
							<span class="glyphicon glyphicon-plus icon-center"></span>
							<span class="glyphicon glyphicon-trash trash"></span>
						</div>
						<div class="square upload" cell="3">
							<span class="glyphicon glyphicon-plus icon-center"></span>
							<span class="glyphicon glyphicon-trash trash"></span>
						</div>
						<div class="square upload" cell="4">
							<span class="glyphicon glyphicon-plus icon-center"></span>
							<span class="glyphicon glyphicon-trash trash"></span>
						</div>
						<div class="square upload" cell="5">
							<span class="glyphicon glyphicon-plus icon-center"></span>
							<span class="glyphicon glyphicon-trash trash"></span>
						</div>
					</div>	
				</div>
			</div>
			<div class="selection product-conf product-conf-top" question="1">
				<div class="product-conf-header">
					<div class="product-conf-header-center">Product Configuration</div>
				</div>
				<div class="selection-title" >Pack Name</div>
				<div class="selector-wrapper">
					<div class="selector"></div>
				</div>
				<div class="user-select input-group-sm five group">
					<input name="textinput" type="text" placeholder="ex: Red Pack" class="form-control">
					<input name="textinput" type="text" placeholder="ex: Yellow Pack" class="form-control pack2">
					<input name="textinput" type="text" placeholder="ex: Green Pack" class="form-control pack3">
					<input name="textinput" type="text" placeholder="ex: Blue Pack" class="form-control pack4">
					<input name="textinput" type="text" placeholder="ex: Purple Pack" class="form-control pack5">
				</div>
			</div>
			<div class="selection product-conf" question="2">
				<div class="selection-title">Brand Name</div>
				<div class="selector-wrapper">
					<div class="selector"></div>
				</div>
				<div class="user-select input-group-sm five group">
					<input name="textinput" type="text" placeholder="ex: Cadbury" class="form-control">
					<input name="textinput" type="text" placeholder="ex: Cadbury" class="form-control pack2">
					<input name="textinput" type="text" placeholder="ex: Cadbury" class="form-control pack3">
					<input name="textinput" type="text" placeholder="ex: Cadbury" class="form-control pack4">
					<input name="textinput" type="text" placeholder="ex: Cadbury" class="form-control pack5">
				</div>
			</div>
			<div class="selection product-conf" question="3">
				<div class="selection-title">Product Name</div>
				<div class="selector-wrapper">
					<div class="selector"></div>
				</div>
				<div class="user-select input-group-sm five group">
					<input name="textinput" type="text" placeholder="ex: Cadbury Daily Milk" class="form-control">
					<input name="textinput" type="text" placeholder="ex: Cadbury Daily Milk" class="form-control pack2">
					<input name="textinput" type="text" placeholder="ex: Cadbury Daily Milk" class="form-control pack3">
					<input name="textinput" type="text" placeholder="ex: Cadbury Daily Milk" class="form-control pack4">
					<input name="textinput" type="text" placeholder="ex: Cadbury Daily Milk" class="form-control pack5">
				</div>
			</div>
			<div class="selection product-conf" question="4">
				<div class="selection-title">Category</div>
				<div class="selector-wrapper">
					<div class="selector"></div>
				</div>
				<div class="user-select input-group-sm five group">
					<input name="textinput" type="text" placeholder="ex: Chocolate" class="form-control">
					<input name="textinput" type="text" placeholder="ex: Chocolate" class="form-control pack2">
					<input name="textinput" type="text" placeholder="ex: Chocolate" class="form-control pack3">
					<input name="textinput" type="text" placeholder="ex: Chocolate" class="form-control pack4">
					<input name="textinput" type="text" placeholder="ex: Chocolate" class="form-control pack5">
				</div>
			</div>
			<div class="selection product-conf" question="5">
				<div class="selection-title">Pack Range</div>
				<div class="selector-wrapper">
					<div class="selector"></div>
				</div>
				<div class="user-select five group">
					<div class="controls yesno">					   
					   	<label class="radio-inline" for="radios-0">
    						<input type="radio" name="range-cell1" id="radios-0" value="Yes">
    						Yes
    					</label>
    					<label class="radio-inline" for="radios-1">
    						<input type="radio" name="range-cell1" id="radios-1" value="No" checked="checked">
    						No
    					</label>
    				</div>
    				<div class="controls yesno pack2">					   
					   	<label class="radio-inline" for="radios-2">
    						<input type="radio" name="range-cell2" id="radios-2" value="Yes">
    						Yes
    					</label>
    					<label class="radio-inline" for="radios-3">
    						<input type="radio" name="range-cell2" id="radios-3" value="No">
    						No
    					</label>
    				</div>
    				<div class="controls yesno pack3">					   
					   	<label class="radio-inline" for="radios-4">
    						<input type="radio" name="range-cell3" id="radios-4" value="Yes">
    						Yes
    					</label>
    					<label class="radio-inline" for="radios-5">
    						<input type="radio" name="range-cell3" id="radios-5" value="No">
    						No
    					</label>
    				</div>
    				<div class="controls yesno pack4">					   
					   	<label class="radio-inline" for="radios-6">
    						<input type="radio" name="range-cell4" id="radios-6" value="Yes">
    						Yes
    					</label>
    					<label class="radio-inline" for="radios-7">
    						<input type="radio" name="range-cell4" id="radios-7" value="No">
    						No
    					</label>
    				</div>
    				<div class="controls yesno pack5">					   
					   	<label class="radio-inline" for="radios-8">
    						<input type="radio" name="range-cell5" id="radios-8" value="Yes">
    						Yes
    					</label>
    					<label class="radio-inline" for="radios-9">
    						<input type="radio" name="range-cell5" id="radios-9" value="No">
    						No
    					</label>
    				</div>	
				</div>
			</div>
			<div class="selection product-conf" question="6">
				<div class="selection-title">Benchmark Pack</div>
				<div class="selector-wrapper">
					<div class="selector"></div>
				</div>
				<div class="user-select five group">					   
   					<input type="radio" name="benchmark" id="radios-0" value="1" checked>
   					<input type="radio" name="benchmark" id="radios-0" value="2" class="pack2">
   					<input type="radio" name="benchmark" id="radios-0" value="3" class="pack3">
   					<input type="radio" name="benchmark" id="radios-0" value="4" class="pack4">
   					<input type="radio" name="benchmark" id="radios-0" value="5" class="pack5">
   				</div>	
			</div>
			<div class="selection product-conf-top" question="7">
				<div class="product-conf-header">
					<div class="product-conf-header-center">Project Configuration</div>
				</div>
				<div class="selection-title" >Category (Norms)</div>
				<div class="selector-wrapper">
					<div class="selector"></div>
				</div>
				<div class="user-select">
					<div class="form-group group">
						<div class="col-md-5">
					    	<select id="target-group" name="category" class="form-control">
					    	  <option value="1">Drink</option>
					    	  <option value="2">Food</option>
					    	  <option value="3">Car</option>
					    	  <option value="4">No idea</option>
					    	</select>
					    </div>
					</div>
				</div>
			</div>	
			<div class="selection" question="8">
				<div class="selection-title">Pack Diagnostics</div>
				<div class="selector-wrapper">
					<div class="selector"></div>
				</div>
				<div class="user-select five group">					   
   					<input name="textinput" type="text" placeholder="ex: Color" class="form-control">
					<input name="textinput" type="text" placeholder="ex: Logo" class="form-control">
					<input name="textinput" type="text" placeholder="ex: Tagline" class="form-control">
   				</div>	
			</div>
			<div class="selection" id="expectations" question="9">
				<div class="selection-title">Pack Expectations</div>
				<div class="selector-wrapper">
					<div class="selector"></div>
				</div>
				<div class="user-select four group">					   
   					<input name="textinput" type="text" placeholder="ex: will really fill me up" class="form-control">
					<input name="textinput" type="text" placeholder="ex: will be good tasting" class="form-control">
					<input name="textinput" type="text" placeholder="ex: will give me power" class="form-control">
					<input name="textinput" type="text" placeholder="ex: won't do anything" class="form-control">
					<span class="glypgicon glyphicon-plus addline"></span>
   				</div>
   				<div class="user-select four group addedline">					   
   					<input name="textinput" type="text" class="form-control">
					<input name="textinput" type="text" class="form-control">
					<input name="textinput" type="text" class="form-control">
					<input name="textinput" type="text" class="form-control">
					<span class="glypgicon glyphicon-plus addline"></span>
   				</div>
   				<div class="user-select four group addedline">					   
   					<input name="textinput" type="text" class="form-control">
					<input name="textinput" type="text" class="form-control">
					<input name="textinput" type="text" class="form-control">
					<input name="textinput" type="text" class="form-control">
   				</div>	
			</div>
			<div class="selection" id="expectations" question="10">
				<div class="selection-title">Pack Format</div>
				<div class="selector-wrapper">
					<div class="selector"></div>
				</div>
				<div class="user-select">
					<div class="form-group group">
						<div class="pack-format">
							<label for="format-0">
								<img src="image/pack_format/rectangular_p.png">
								<div class="caption">
									<p>Rectangular Portrait</p>
									<a>view images</a>
									<input type="radio" name="format" id="format-0" value="1" checked>
								</div>
							</label>
						</div>
						<div class="pack-format">
							<label for="format-1">
								<img src="image/pack_format/rectangular_l.png">
								<div class="caption">
									<p>Rectangular Landscape</p>
									<a>view images</a>
									<input type="radio" name="format" id="format-1" value="1" checked>
								</div>
							</label>
						</div>
						<div class="pack-format">
							<label for="format-2">
								<img src="image/pack_format/rectangular_t.png">
								<div class="caption">
									<p>Rectangular Thin</p>
									<a>view images</a>
									<input type="radio" name="format" id="format-2" value="1" checked>
								</div>
							</label>
						</div>
						<div class="pack-format">
							<label for="format-3">
								<img src="image/pack_format/rounded.png">
								<div class="caption">
									<p>Rounded Bottles</p>
									<a>view images</a>
									<input type="radio" name="format" id="format-3" value="1" checked>
								</div>
							</label>
						</div>
						<div class="pack-format">
							<label for="format-4">
								<img src="image/pack_format/angular.png">
								<div class="caption">
									<p>Angular Bottles</p>
									<a>view images</a>
									<input type="radio" name="format" id="format-4" value="1" checked>
								</div>
							</label>
						</div>
						<div class="pack-format">
							<label for="format-5">
								<img src="image/pack_format/cans.png">
								<div class="caption">
									<p>Can and Jars</p>
									<a>view images</a>
									<input type="radio" name="format" id="format-5" value="1" checked>
								</div>
							</label>
						</div>
						<div class="pack-format">
							<label for="format-6">
								<img src="image/pack_format/tubs.png">
								<div class="caption">
									<p>Tubs and others</p>
									<a>view images</a>
									<input type="radio" name="format" id="format-6" value="1" checked>
								</div>
							</label>
						</div>
					</div>	
				</div>
			</div>	
			<div class="next-step col-md-1 pull-right">
				<a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-forward"></span> Next Step</a>
			</div>	
		</div>
	</div>	

	<?php include ("footer.html") ?>

	<script src="js/slider.js"></script>
	<script src="js/header.js"></script>
	<script data-cfasync="false" type='text/javascript' src="js/olark.js"></script>
	<script>
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
			// scroll_follow($('.project-info'));
		});
	


		var changeactive = function(activetrig){
			$('.selection.active').removeClass('active');
			$('.selection[question="' + activetrig + '"]').addClass('active');
			$('.selection.active').css({'color':'white'});
			$('.left-help .active').stop().removeClass('active').hide();
			$('.left-help [question="'+ activetrig +'"]').addClass('active').fadeIn('fast');
		}

		$(window).load(function() {
			var $el, topPos, newHeight, magicmove;

		   	$(".main-selection").append("<div id='magic-line'></div>");
		    
		    var $magicLine = $("#magic-line");
		    
		    $magicLine
		        .width($(".main-selection").width())
		        .height($(".selection.active").outerHeight())
		        .css("top", $(".main-selection .selection.active").position().top)
		        .data("origTop", $(".main-selection .active").position().top)
		        .data("origHeight", $magicLine.outerHeight());

		    magicmove = function(el){
		    	var num = parseInt(el.attr('question'),10);
		        topPos = el.position().top;
		        newHeight = el.outerHeight();
		        $('.selection.active').css({'color':'black'});
		        $magicLine.stop().animate({
		            top: topPos,
		            height: newHeight
		        },function(){
				changeactive(num);
		   		 });
		    }    
		                
		    $(".main-selection .selection").mousedown(function() {
		        $el = $(this);
		        if($el.hasClass('active')){return;}
		        magicmove($el);
		    });

		    $('.addline').mousedown(function(){
				$(this).parent().next().show();
				magicmove($('#expectations'));
				$(this).hide();
			});	    
		});
	
	$('.square:not(.added)').mousedown(function(){
		var cell = $(this).attr('cell');
		$(this).addClass('added');
		$(this).find('.icon-center').removeClass('glyphicon-plus').addClass('glyphicon-open');
		$('.pack'+cell).each(function(){
			$(this).show();
		});
	});

	$('.trash').mouseup(function(){
		var cell = $(this).parent().attr('cell');
		$(this).prev().removeClass('glyphicon-open').addClass('glyphicon-plus');
		$(this).parent().removeClass('added');
		$('.pack'+cell).each(function(){
			$(this).hide();
		});
	});

	</script>
</body>
