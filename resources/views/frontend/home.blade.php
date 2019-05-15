@include('frontend.layouts.header')
		<script src="js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			jssor_1_slider_init = function() {
	
				var jssor_1_options = {
				  $AutoPlay: 1,
				  $AutoPlaySteps: 5,
				  $SlideDuration: 160,
				  $SlideWidth: 200,
				  $SlideSpacing: 3,
				  $ArrowNavigatorOptions: {
					$Class: $JssorArrowNavigator$,
					$Steps: 5
				  },
				  $BulletNavigatorOptions: {
					$Class: $JssorBulletNavigator$
				  }
				};
	
				var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
	
				/*#region responsive code begin*/
	
				var MAX_WIDTH = 1290;
	
				function ScaleSlider() {
					var containerElement = jssor_1_slider.$Elmt.parentNode;
					var containerWidth = containerElement.clientWidth;
	
					if (containerWidth) {
	
						var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
	
						jssor_1_slider.$ScaleWidth(expectedWidth);
					}
					else {
						window.setTimeout(ScaleSlider, 30);
					}
				}
	
				ScaleSlider();
	
				$Jssor$.$AddEvent(window, "load", ScaleSlider);
				$Jssor$.$AddEvent(window, "resize", ScaleSlider);
				$Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
				/*#endregion responsive code end*/
			};
		</script>
		<style>
			/*jssor slider loading skin spin css*/
			.jssorl-009-spin img {
				animation-name: jssorl-009-spin;
				animation-duration: 1.6s;
				animation-iteration-count: infinite;
				animation-timing-function: linear;
			}
	
			@keyframes jssorl-009-spin {
				from { transform: rotate(0deg); }
				to { transform: rotate(360deg); }
			}
	
			/*jssor slider bullet skin 057 css*/
			.jssorb057 .i {position:absolute;cursor:pointer;}
			.jssorb057 .i .b {fill:none;stroke:#fff;stroke-width:2000;stroke-miterlimit:10;stroke-opacity:0.4;}
			.jssorb057 .i:hover .b {stroke-opacity:.7;}
			.jssorb057 .iav .b {stroke-opacity: 1;}
			.jssorb057 .i.idn {opacity:.3;}
	
			/*jssor slider arrow skin 073 css*/
			.jssora073 {display:block;position:absolute;cursor:pointer;}
			.jssora073 .a {fill:#ddd;fill-opacity:.7;stroke:#000;stroke-width:160;stroke-miterlimit:10;stroke-opacity:.7;}
			.jssora073:hover {opacity:.8;}
			.jssora073.jssora073dn {opacity:.4;}
			.jssora073.jssora073ds {opacity:.3;pointer-events:none;}
		</style>
		<!-- <style>
				a:hover {
				  background-color: red;
				}
				</style> -->
<div class="page-wraper">
<div id="loading-area"></div>
    <!-- header -->
    <header class="site-header header-transparent">
		<div class="top-bar">
			<div class="container">
				<div class="row">
					<div class="dlab-topbar-right topbar-social">
						<ul>
							<li>
								<a href="#"> Add Track Here</a>
							</li>
							<li><a href="#" class="site-button-link twitter hover"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" class="site-button-link linkedin hover"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- main header -->
        <div class="sticky-header main-bar-wraper">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
						<a href="index.html"><img src="images/logo-light.png" class="logo" alt=""></a>
					</div>
                    <!-- nav toggle button -->
                    <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed" aria-expanded="false" > 
						<i class="fa fa-bars"></i>
					</button>
                    <!-- extra nav -->
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <button id="quik-search-btn" type="button" class="site-button-link"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <!-- Quik search -->
                    <div class="dlab-quik-search bg-primary ">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span id="quik-search-remove"><i class="fa fa-close"></i></span>
                        </form>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse">	
						<ul class="nav navbar-nav">
							<li class="active has-mega-menu demos"> <a href="index.html">Home</a></li>
							<li><a href="javascript:;">Tracks<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li> <a href="javascript:;">Search Cars <i class="fa fa-angle-right"></i></a>
										<ul class="sub-menu">
											<li><a href="new-car-search.html">Search Car</a></li>
											<li><a href="new-car-search-result-list.html">Search Result List</a></li>
											<li><a href="new-car-search-result-column.html">Search Result Column</a></li>
										</ul>
									</li>
									<li><a href="new-car-latest.html">Latest Cars</a></li>
									<li><a href="new-car-popular.html">Popular Cars</a></li>
									<li><a href="new-car-upcoming.html">Upcoming Cars</a></li>
									<li> <a href="javascript:;">Dealers & Service Centers <i class="fa fa-angle-right"></i></a>
										<ul class="sub-menu">
											<li><a href="car-dealers.html">Car Dealers</a></li>
											<li><a href="car-service-center.html">Service Center</a></li>
										</ul>
									</li>
									<li><a href="on-road-price.html">On Road Price</a></li>
								</ul>
							</li>
							<li><a href="javascript:;">Events<i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li> <a href="javascript:;">In My City <i class="fa fa-angle-right"></i></a>
										<ul class="sub-menu">
											<li><a href="used-car-search-result.html">New York City</a></li>
											<li><a href="used-car-search-result.html">Chicago</a></li>
											<li><a href="used-car-search-result.html">Los Angeles</a></li>
											<li><a href="used-car-search-result.html">Boston</a></li>
											<li><a href="used-car-search-result.html">San Francisco</a></li>
											<li><a href="used-car-search-result.html">Washington</a></li>
											<li><a href="used-car-search-result.html">Seattle</a></li>
											<li><a href="used-car-search-result.html">Philadelphia</a></li>
											<li><a href="used-car-search-result.html">Austin</a></li>
											<li><a href="used-car-search-result.html">Detroit</a></li>
										</ul>
									</li>
									<li><a href="javascript:;">Search Car <i class="fa fa-angle-right"></i></a>
										<ul class="sub-menu">
											<li><a href="used-car-search.html">Search Car</a></li>
											<li><a href="used-car-search-result.html">Search Car Result</a></li>
											<li><a href="used-car-details.html">Used Car Detail</a></li>
										</ul>
									
									</li>
									<li><a href="used-car-details.html">Used Car Detail</a></li>
									<li><a href="used-car-sell.html">Sell Your Car</a></li>
									<li><a href="used-car-valuation.html">Car Valuation</a></li>
									
								</ul>
							</li>
							<li><a href="javascript:;">News</a>
								<!-- <ul class="sub-menu">
									<li><a href="compare-car.html">Compare Car</a></li>
									<li><a href="compare-car-result.html">Compare Car Result</a></li>
									<li><a href="write-review.html">Write Review</a></li>
									<li><a href="car-review.html">Car Review</a></li>
								</ul> -->
							</li>
							<li><a href="javascript:;">About Us</a>
								<!-- <ul class="sub-menu">
									<li><a href="car-details-overview.html">Car Detail</a></li>
									<li><a href="car-detail-specifications.html">Car Specifications</a></li>
									<li><a href="car-detail-price.html">Car Price</a></li>
									<li><a href="car-detail-compare.html">Car Compare</a></li>
									<li><a href="car-detail-pictures.html">Car Pictures</a></li>
								</ul> -->
							</li>
							<li class="has-mega-menu "> <a href="javascript:;">login</a>
								<!-- <ul class="mega-menu">
									<li> <a href="javascript:;">Page</a>
										<ul>
											<li><a href="page-about.html">About Us</a></li>
											<li><a href="page-career.html">Career</a></li>
											<li><a href="page-services.html">Services</a></li>
											<li><a href="page-privacy-policy.html">Privacy Policy</a></li>
										</ul>
									</li>
									<li> <a href="javascript:;">Page</a>
										<ul>
											<li><a href="page-help.html">Help</a></li>
											<li><a href="page-faq.html">Faq's</a></li>
											<li><a href="page-error-404.html">404 Page</a></li>
											<li><a href="page-contact.html">Contact 1</a></li>
										</ul>
									</li>
									<li> <a href="javascript:;">Blog Page</a>
										<ul>
											<li><a href="blog-grid-2.html">Grid 2</a></li>
											<li><a href="blog-grid-2-sidebar.html">Grid 2 sidebar</a></li>
											<li><a href="blog-grid-3.html">Grid 3</a></li>
											<li><a href="blog-grid-3-sidebar.html">Grid 3 sidebar</a></li>
										</ul>
									</li>
									<li> <a href="javascript:;">Blog Page</a>
										<ul>
											<li><a href="blog-single.html">Single</a></li>
											<li><a href="blog-single-sidebar.html">Single sidebar</a></li>
											<li><a href="blog-half-img-sidebar.html">Half image sidebar</a></li>
											<li><a href="blog-large-img-sidebar.html">Large image sidebar</a></li>
										</ul>
									</li>
								</ul> -->
							</li>
						</ul>
					</div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
        <!-- Slider -->
        <div class="main-slider style-two default-banner">
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <div id="dz_rev_slider_4_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery36" data-source="gallery" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                        <!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
                        <div id="dz_rev_slider_4" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.3.3">
                            <ul>
                                <!-- SLIDE 1 -->
                                <li data-index="rs-6" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="revolution/assets/100x50_3176d-road-bg.jpg"  data-rotate="0"  data-savepresentation="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="images/main-slider/Titelfoto_Automobil-Elektronik-Kongress_2019_Audi-AG.png"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->
                                </li>
                                <!-- SLIDE 2 -->
								<!-- SLIDE  -->
                                <li data-index="rs-5" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="revolution/assets/100x50_3176d-road-bg.jpg"  data-rotate="0"  data-savepresentation="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                    <!-- MAIN IMAGE -->
                                    <img src="images/main-slider/586423313-hd-desktop-wallpaper-exotic-cars.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                    <!-- LAYERS -->	
                                </li>
                                
                            </ul>
                            <div class="tp-bannertimer tp-bottom bg-primary" style="height: 5px; "></div>
                        </div>
                    </div>
                    <!-- END REVOLUTION SLIDER -->
                </div>
            </div>
			<!-- Form -->	
			<div class="form-slide">
				<div class="container">
					<form class="search-car" action="new-car-search-result-list.html" method="post">
						<div class="form-head">
							<h2>find Tracks and Events</h2>
						</div>
						<!-- TABS -->
						<div class="form-find-area">
							<ul class="nav theme-tabs">
								<li role="presentation" class="active"><a data-toggle="tab"  aria-controls="new-car"  href="#new-car">Evets</a></li>
								<li role="presentation" ><a data-toggle="tab"  aria-controls="popular" href="#used-car">Tracks</a></li>
							</ul>
							<div class="tab-content" style="margin-bottom: 50px">
								<!-- NEW CAR -->
								<div id="new-car"  class="tab-pane active clearfix">
									<ul class="nav text-center check-nav">
										<li>
											<input id="radio1" type="radio" name="new_search" checked="checked" value="budget"/>
											<label for="radio1">Spectator</label>
										</li>
										<li>
											<input id="radio2" type="radio" name="new_search" value="brand"/>
											<label for="radio2">Driver</label>
										</li>
									</ul>
									<div  id="budgetDiv" class="new_form_div">
										<div class="input-group">
											<input type="text" name="" class="form-control" placeholder="Keyword"/>
										</div>
										<div class="input-group">
											<select class="form-control">
												<option>Select Type</option>
												<option>Carmeet</option>
												<option>Amateur Rally</option>
												<option>Track</option>
												<option>Karting</option>
											</select>
										</div>
									</div>
									<div  id="brandDiv" class="new_form_div" style="display: none;">
										<div class="input-group">
											<select class="form-control">
												<option>Select Type</option>
												<option>Carmeet</option>
												<option>Amateur Rally</option>
												<option>Track</option>
												<option>Karting</option>
											</select>
										</div>
										<div class="input-group">
											<select class="form-control">
												<option>Select Type</option>
												<option>Carmeet</option>
												<option>Amateur Rally</option>
												<option>Track</option>
												<option>Karting</option>
											</select>
										</div>
									</div>									
									
									<div class="input-group">
										<button class="site-button button-lg btn-block" type="submit">SEARCH</button>
									</div>
									
								</div>
								<!-- USED CAR -->
								<div id="used-car"  class="tab-pane clearfix">
									<ul class="nav text-center check-nav">
										<li>
											<input id="radio3" type="radio" name="used_search" checked="checked" value="used_budget"/>
											<label for="radio3">BY BUDGET</label>
										</li>
										<li>
											<input id="radio4" type="radio" name="used_search" value="used_model"/>
											<label for="radio4">BY MODEL</label>
										</li>
									</ul>
									<div id="used_budgetDiv" class="used_form_div">
										<div class="input-group">
											<select class="form-control">
												<option>Select Type</option>
												<option>Carmeet</option>
												<option>Amateur Rally</option>
												<option>Track</option>
												<option>Karting</option>
											</select>
										</div>
										<div class="input-group">
											<select class="form-control">
												<option>Select Type</option>
												<option>Carmeet</option>
												<option>Amateur Rally</option>
												<option>Track</option>
												<option>Karting</option>
											</select>
										</div>
									</div>
									<div  id="used_modelDiv" class="used_form_div" style="display: none;">
										<div class="input-group">
											<select class="form-control">
												<option>Select Model</option>
												<option>1 Lakh - 5 Lakh</option>
												<option>5 Lakh - 10 Lakh</option>
												<option>10 Lakh - 20 Lakh</option>
												<option>20 Lakh - 50 Lakh</option>
												<option>50 Lakh - 1 Crore</option>
												<option>Above 1 Crore</option>
											</select>
										</div>
										<div class="input-group">
											<select class="form-control">
												<option>Select City</option>
												<option>Hatchback</option>
												<option>Sedans</option>
												<option>MUV</option>
											</select>
										</div>
									</div>									
									<div class="input-group">
										<button class="site-button button-lg btn-block" type="submit" onclick="window.location.href='sed-car-search.html'">SEARCH</button>
									</div>
									<div class="input-group text-center">
										<a class="site-button-link" href="new-car-search.html">ADVANCED SEARCH <i class="fa fa-angle-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>	
			<!-- Form END -->	
	   </div>
        <!-- Slider END -->
		<!-- New Car -->
		<div id="dz_rev_slider_4_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery36" data-source="gallery" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
				<!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
				<div id="dz_rev_slider_4" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.3.3">
					<ul>
						<!-- SLIDE 1 -->
						<li data-index="rs-6" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="revolution/assets/100x50_3176d-road-bg.jpg"  data-rotate="0"  data-savepresentation="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
							<!-- MAIN IMAGE -->
							<img src="images/main-slider/Titelfoto_Automobil-Elektronik-Kongress_2019_Audi-AG.png"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
							<!-- LAYERS -->
						</li>
						<!-- SLIDE 2 -->
						<!-- SLIDE  -->
						<li data-index="rs-5" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="revolution/assets/100x50_3176d-road-bg.jpg"  data-rotate="0"  data-savepresentation="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
							<!-- MAIN IMAGE -->
							<img src="images/main-slider/586423313-hd-desktop-wallpaper-exotic-cars.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
							<!-- LAYERS -->	
						</li>
						
					</ul>
					<div class="tp-bannertimer tp-bottom bg-primary" style="height: 5px; "></div>
				</div>
			</div>
			<div  class="box-hover" id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1024px;height:250px;overflow:hidden;visibility:hidden;">
					<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1024px;height:250px;overflow:hidden;">
						<div>
								<a href="#"><img src="images/our-work/work/pic1.jpg" alt=""></a>
								<div class="dlab-info">
										<p class="event-date">November 6, 2018</p>
										<h4 class="dlab-title"><a href="new-car-upcoming.html">Toyota avalon hybrid  <i class="fa fa-angle-right pull-right"></i></a></h4>
									</div>
						</div>
						<div>
								<a href="#"><img src="images/our-work/work/pic1.jpg" alt=""></a>
								<div class="dlab-info">
										<p class="event-date">November 6, 2018</p>
										<h4 class="dlab-title"><a href="new-car-upcoming.html">Toyota avalon hybrid  <i class="fa fa-angle-right pull-right"></i></a></h4>
									</div>
						</div>
						<div>
								<a href="#"><img src="images/our-work/work/pic1.jpg" alt=""></a>
								<div class="dlab-info">
										<p class="event-date">November 6, 2018</p>
										<h4 class="dlab-title"><a href="new-car-upcoming.html">Toyota avalon hybrid  <i class="fa fa-angle-right pull-right"></i></a></h4>
									</div>
						</div>
						<div>
								<a href="#"><img src="images/our-work/work/pic1.jpg" alt=""></a>
								<div class="dlab-info">
										<p class="event-date">November 6, 2018</p>
										<h4 class="dlab-title"><a href="new-car-upcoming.html">Toyota avalon hybrid  <i class="fa fa-angle-right pull-right"></i></a></h4>
									</div>
						</div>
						<div>
								<a href="#"><img src="images/our-work/work/pic1.jpg" alt=""></a>
								<div class="dlab-info">
										<p class="event-date">November 6, 2018</p>
										<h4 class="dlab-title"><a href="new-car-upcoming.html">Toyota avalon hybrid  <i class="fa fa-angle-right pull-right"></i></a></h4>
									</div>
						</div>
						<div>
								<a href="#"><img src="images/our-work/work/pic1.jpg" alt=""></a>
								<div class="dlab-info">
										<p class="event-date">November 6, 2018</p>
										<h4 class="dlab-title"><a href="new-car-upcoming.html">Toyota avalon hybrid  <i class="fa fa-angle-right pull-right"></i></a></h4>
									</div>
						</div>
						<div>
								<a href="#"><img src="images/our-work/work/pic1.jpg" alt=""></a>
								<div class="dlab-info">
										<p class="event-date">November 6, 2018</p>
										<h4 class="dlab-title"><a href="new-car-upcoming.html">Toyota avalon hybrid  <i class="fa fa-angle-right pull-right"></i></a></h4>
									</div>
						</div>
						<div>
								<a href="#"><img src="images/our-work/work/pic1.jpg" alt=""></a>
								<div class="dlab-info">
										<p class="event-date">November 6, 2018</p>
										<h4 class="dlab-title"><a href="new-car-upcoming.html">Toyota avalon hybrid  <i class="fa fa-angle-right pull-right"></i></a></h4>
									</div>
						</div>
						<div>
								<a href="#"><img src="images/our-work/work/pic1.jpg" alt=""></a>
								<div class="dlab-info">
										<p class="event-date">November 6, 2018</p>
										<h4 class="dlab-title"><a href="new-car-upcoming.html">Toyota avalon hybrid  <i class="fa fa-angle-right pull-right"></i></a></h4>
									</div>
						</div>
						<div>
								<a href="#"><img src="images/our-work/work/pic1.jpg" alt=""></a>
								<div class="dlab-info">
										<p class="event-date">November 6, 2018</p>
										<h4 class="dlab-title"><a href="new-car-upcoming.html">Toyota avalon hybrid  <i class="fa fa-angle-right pull-right"></i></a></h4>
									</div>
						</div>
						<div>
								<a href="#"><img src="images/our-work/work/pic1.jpg" alt=""></a>
								<div class="dlab-info">
										<p class="event-date">November 6, 2018</p>
										<h4 class="dlab-title"><a href="new-car-upcoming.html">Toyota avalon hybrid  <i class="fa fa-angle-right pull-right"></i></a></h4>
									</div>
						</div>
						<div>
								<a href="#"><img src="images/our-work/work/pic1.jpg" alt=""></a>
								<div class="dlab-info">
										<p class="event-date">November 6, 2018</p>
										<h4 class="dlab-title"><a href="new-car-upcoming.html">Toyota avalon hybrid  <i class="fa fa-angle-right pull-right"></i></a></h4>
									</div>
						</div>
					</div>
					<!-- Bullet Navigator -->
					<!-- <div data-u="navigator" class="jssorb057" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
						<div data-u="prototype" class="i" style="width:16px;height:16px;">
							<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
								<circle class="b" cx="8000" cy="8000" r="5000"></circle>
							</svg>
						</div>
					</div> -->
					<!-- Arrow Navigator -->
					<div data-u="arrowleft" class="jssora073" style="width:50px;height:50px;top:-50pxpx;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
						<svg viewbox="0 0 16000 16000" style="position:absolute;top:-50px;left:0;width:100%;height:100%;">
							<path class="a" d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z"></path>
						</svg>
					</div>
					<div data-u="arrowright" class="jssora073" style="width:50px;height:50px;top:-50px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
						<svg viewbox="0 0 16000 16000" style="position:absolute;top:-50px;left:0;width:100%;height:100%;">
							<path class="a" d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z"></path>
						</svg>
					</div>
				</div>
				<script type="text/javascript">jssor_1_slider_init();</script>
		<!-- <div class="section-full bg-img-fix dlab-new-work overlay-white-dark " style="background-image: url(images/background/Automobil.jpg);">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3 col-sm-4  p-a0 no-of-item">
						<div class="no-of-item-dtl">
							<h2>New</h2>
							<h3>Tracks and Events</h3>
						</div>
					</div>
					<div class="col-md-9 col-sm-8 p-a0">
						<div class="new-item owl-btn-style-1 owl-carousel">
							<div class="item dlab-new-item">
								<div class="dlab-box">
									<div class="dlab-media"> 
									<a href="#"><img src="images/our-work/work/pic1.jpg" alt=""></a> 
									</div>
									<div class="dlab-info">
										<p class="event-date">November 6, 2018</p>
										<h4 class="dlab-title"><a href="new-car-upcoming.html">Toyota avalon hybrid  <i class="fa fa-angle-right pull-right"></i></a></h4>
									</div>
								</div>
							</div>
							<div class="item dlab-new-item">
								<div class="dlab-box">
									<div class="dlab-media"> 
										<a href="#"><img src="images/our-work/work/pic2.jpg" alt=""></a> 
									</div>
									<div class="dlab-info">
										<p class="event-date">November 6, 2018</p>
										<h4 class="dlab-title"><a href="new-car-upcoming.html">Toyota avalon hybrid  <i class="fa fa-angle-right pull-right"></i></a></h4>
									</div>
								</div>
							</div>
							<div class="item dlab-new-item">
								<div class="dlab-box">
									<div class="dlab-media"> 
										<a href="#"><img src="images/our-work/work/pic3.jpg" alt=""></a> 
									</div>
									<div class="dlab-info">
										<p class="event-date">November 6, 2018</p>
										<h4 class="dlab-title"><a href="new-car-upcoming.html">Toyota avalon hybrid  <i class="fa fa-angle-right pull-right"></i></a></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<div class="content-area">
            <div class="container min">
                <div class="row">
                    <!-- left part start -->
                    <div class="col-md-9">
                        <div class="row">
                            <!-- blog grid  -->
                            <div id="masonry" class="dlab-blog-grid-2">
                                <div class="post card-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="blog-post blog-grid date-style-2">
                                        <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="#"><img src="images/blog/grid/pic1.jpg" alt=""></a> </div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-title ">
                                                <h3 class="post-title font-weight-700"><a href="#">Top 5 Motorsport Games</a></h3>
                                            </div>
                                            <div class="dlab-post-meta ">
                                                <ul>
                                                    <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                                    <li class="post-author"><i class="fa fa-user"></i>By <a href="#">demongo</a> </li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">0 Comments</a> </li>
                                                </ul>
                                            </div>
                                            <div class="dlab-post-text">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                                                    text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                            <div class="dlab-post-readmore"> <a href="#" title="READ MORE" rel="bookmark" class="site-button-link">READ MORE<i class="fa fa-angle-double-right"></i></a> </div>
                                            <div class="dlab-post-tags">
                                                <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a href="#">Money </a> <a href="#">Resturent </a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post card-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="blog-post blog-grid date-style-2">
                                        <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="#"><img src="images/blog/grid/pic2.jpg" alt=""></a> </div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-title ">
                                                <h3 class="post-title font-weight-700"><a href="#">Top 5 Motorsport Games</a></h3>
                                            </div>
                                            <div class="dlab-post-meta ">
                                                <ul>
                                                    <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                                    <li class="post-author"><i class="fa fa-user"></i>By <a href="#">demongo</a> </li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">0 Comments</a> </li>
                                                </ul>
                                            </div>
                                            <div class="dlab-post-text">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                                                    text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                            <div class="dlab-post-readmore"> <a href="#" title="READ MORE" rel="bookmark" class="site-button-link">READ MORE<i class="fa fa-angle-double-right"></i></a> </div>
                                            <div class="dlab-post-tags">
                                                <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a href="#">Money </a> <a href="#">Resturent </a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post card-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="blog-post blog-grid date-style-2">
                                        <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="#"><img src="images/blog/grid/pic3.jpg" alt=""></a> </div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-title ">
                                                <h3 class="post-title font-weight-700"><a href="#">Top 5 Motorsport Games</a></h3>
                                            </div>
                                            <div class="dlab-post-meta ">
                                                <ul>
                                                    <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                                    <li class="post-author"><i class="fa fa-user"></i>By <a href="#">demongo</a> </li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">0 Comments</a> </li>
                                                </ul>
                                            </div>
                                            <div class="dlab-post-text">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                                                    text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                            <div class="dlab-post-readmore"> <a href="#" title="READ MORE" rel="bookmark" class="site-button-link">READ MORE<i class="fa fa-angle-double-right"></i></a> </div>
                                            <div class="dlab-post-tags">
                                                <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a href="#">Money </a> <a href="#">Resturent </a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post card-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="blog-post blog-grid date-style-2">
                                        <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="#"><img src="images/blog/grid/pic4.jpg" alt=""></a> </div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-title ">
                                                <h3 class="post-title font-weight-700"><a href="#">Top 5 Motorsport Games</a></h3>
                                            </div>
                                            <div class="dlab-post-meta ">
                                                <ul>
                                                    <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                                    <li class="post-author"><i class="fa fa-user"></i>By <a href="#">demongo</a> </li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">0 Comments</a> </li>
                                                </ul>
                                            </div>
                                            <div class="dlab-post-text">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                                                    text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                            <div class="dlab-post-readmore"> <a href="#" title="READ MORE" rel="bookmark" class="site-button-link">READ MORE<i class="fa fa-angle-double-right"></i></a> </div>
                                            <div class="dlab-post-tags">
                                                <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a href="#">Money </a> <a href="#">Resturent </a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post card-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="blog-post blog-grid date-style-2">
                                        <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="#"><img src="images/blog/grid/pic1.jpg" alt=""></a> </div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-title ">
                                                <h3 class="post-title font-weight-700"><a href="#">Top 5 Motorsport Games</a></h3>
                                            </div>
                                            <div class="dlab-post-meta ">
                                                <ul>
                                                    <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                                    <li class="post-author"><i class="fa fa-user"></i>By <a href="#">demongo</a> </li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">0 Comments</a> </li>
                                                </ul>
                                            </div>
                                            <div class="dlab-post-text">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                                                    text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                            <div class="dlab-post-readmore"> <a href="#" title="READ MORE" rel="bookmark" class="site-button-link">READ MORE<i class="fa fa-angle-double-right"></i></a> </div>
                                            <div class="dlab-post-tags">
                                                <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a href="#">Money </a> <a href="#">Resturent </a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post card-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="blog-post blog-grid date-style-2">
                                        <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="#"><img src="images/blog/grid/pic2.jpg" alt=""></a> </div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-title ">
                                                <h3 class="post-title font-weight-700"><a href="#">Top 5 Motorsport Games</a></h3>
                                            </div>
                                            <div class="dlab-post-meta ">
                                                <ul>
                                                    <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Aug</strong> <span> 2016</span> </li>
                                                    <li class="post-author"><i class="fa fa-user"></i>By <a href="#">demongo</a> </li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">0 Comments</a> </li>
                                                </ul>
                                            </div>
                                            <div class="dlab-post-text">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
                                                    text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                            </div>
                                            <div class="dlab-post-readmore"> <a href="#" title="READ MORE" rel="bookmark" class="site-button-link">READ MORE<i class="fa fa-angle-double-right"></i></a> </div>
                                            <div class="dlab-post-tags">
                                                <div class="post-tags"> <a href="#">Child </a> <a href="#">Eduction </a> <a href="#">Money </a> <a href="#">Resturent </a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- blog grid END -->
                            <!-- Pagination start -->
                            <div class="pagination-bx col-lg-12 clearfix ">
                                <ul class="pagination">
                                    <li class="previous"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                            <!-- Pagination END -->
                        </div>
                    </div>
                    <!-- left part start -->
                    <!-- Side bar start -->
                    <div class="col-md-3">
                        <aside class="side-bar">
								<div class="widget widget_gallery">
										<div class="dlab-post-media"> <img src="images/blog/recent-blog/pic1.jpg" alt="" width="200" height="143"><p>Advertisment</p> </div>
									</div>
                            <div class="widget">
                                <h4 class="widget-title">Search</h4>
                                <div class="search-bx">
                                    <form role="search" method="post">
                                        <div class="input-group">
                                            <input name="text" type="text" class="form-control" placeholder="Write your text">
                                            <span class="input-group-btn">
                                            <button type="submit" class="site-button"><i class="fa fa-search"></i></button>
                                            </span> </div>
                                    </form>
                                </div>
                            </div>
                            <!-- <div class="widget recent-posts-entry">
                                <h4 class="widget-title">Recent Posts</h4>
                                <div class="widget-post-bx">
                                    <div class="widget-post clearfix">
                                        <div class="dlab-post-media"> <img src="http://carzone.dexignlab.com/xhtml/car-blog/images/blog/recent-blog/pic1.jpg" alt="" width="200" height="143"> </div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-header">
                                                <h6 class="post-title">Top 5 Motorsport Games entry</h6>
                                            </div>
                                            <div class="dlab-post-meta">
                                                <ul>
                                                    <li class="post-author">By Admin</li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-post clearfix">
                                        <div class="dlab-post-media"> <img src="http://carzone.dexignlab.com/xhtml/car-blog/images/blog/recent-blog/pic2.jpg" alt="" width="200" height="160"> </div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-header">
                                                <h6 class="post-title">Top 5 Motorsport Games entry</h6>
                                            </div>
                                            <div class="dlab-post-meta">
                                                <ul>
                                                    <li class="post-author">By Admin</li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-post clearfix">
                                        <div class="dlab-post-media"> <img src="http://carzone.dexignlab.com/xhtml/car-blog/images/blog/recent-blog/pic3.jpg" alt="" width="200" height="160"> </div>
                                        <div class="dlab-post-info">
                                            <div class="dlab-post-header">
                                                <h6 class="post-title">Top 5 Motorsport Games entry</h6>
                                            </div>
                                            <div class="dlab-post-meta">
                                                <ul>
                                                    <li class="post-author">By Admin</li>
                                                    <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget widget_categories">
                                <h4 class="widget-title">Categories List</h4>
                                <ul>
                                    <li><a href="#">aciform</a> (1)</li>
                                    <li><a href="#">championship</a> (1) </li>
                                    <li><a href="#">chastening</a> (1) </li>
                                    <li><a href="#">clerkship</a> (1) </li>
                                    <li><a href="#">disinclination</a> (1) </li>
                                    <li><a href="#">disinfection</a> (1) </li>
                                    <li><a href="#">dispatch</a> (1) </li>
                                    <li><a href="#">echappee</a> (1) </li>
                                    <li><a href="#">Edge Case</a> (6) </li>
                                    <li><a href="#">enphagy</a> (1) </li>
                                </ul>
                            </div> -->
                            <div class="widget widget_tag_cloud">
                                <h4 class="tagcloud widget-title">Tags</h4>
                                <div class="tagcloud"> <a href="#">Design</a> <a href="#">User interface</a> <a href="#">SEO</a> <a href="#">WordPress</a> <a href="#">Development</a> <a href="#">Joomla</a> <a href="#">Design</a> <a href="#">User interface</a> <a href="#">SEO</a> <a href="#">WordPress</a> <a href="#">Development</a> <a href="#">Joomla</a> <a href="#">Design</a> <a href="#">User interface</a> <a href="#">SEO</a> <a href="#">WordPress</a> <a href="#">Development</a> <a href="#">Joomla</a> </div>
                            </div>
                        </aside>
                    </div>
                    <!-- Side bar END -->
                </div>
            </div>
        </div>
		<!-- New Car New -->	
		<!-- About Us 
		<div class="section-full about-us bg-white content-inner-2" style="background-image: url(images/background/about-us.jpg); background-position:bottom; background-repeat:no-repeat; background-size:100%;">
			<div class="container">
				<div class="section-head text-center head-1">
					<span class="text-primary">Welcome To Our Website</span>
					<h3 class="h3 text-uppercase">Car Dealership</h3>
					<div class="dlab-separator bg-gray-dark"></div>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6  col-xs-6">
						<div class="dlab-box-bg m-b30 box-hover" style="background-image: url(images/our-work/work/pic1.jpg)">
							<div class="icon-bx-wraper center p-lr20 p-tb30">
								<div class="text-primary m-b20"> 
									<span class="icon-cell"><i class="glyph-icon flaticon-steering-wheel"></i></span> 
								</div>
								<div class="icon-content">
									<h4 class="dlab-tilte text-uppercase">All brands</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
								</div>
							</div>
							<div class="icon-box-btn text-center">
								<a href="#" class="site-button btn-block">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="dlab-box-bg m-b30 box-hover" style="background-image: url(images/our-work/work/pic2.jpg)">
							<div class="icon-bx-wraper center p-lr20 p-tb30">
								<div class="text-primary m-b20"> 
									<span class="icon-cell"><i class="glyph-icon flaticon-speech-bubble"></i></span> 
								</div>
								<div class="icon-content">
									<h4 class="dlab-tilte text-uppercase">Free Support</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
								</div>
							</div>
							<div class="icon-box-btn text-center">
								<a href="#" class="site-button btn-block">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="dlab-box-bg m-b30 box-hover active" style="background-image: url(images/our-work/work/pic3.jpg)">
							<div class="icon-bx-wraper center p-lr20 p-tb30">
								<div class="text-primary m-b20"> 
									<span class="icon-cell"><i class="glyph-icon flaticon-mechanic"></i></span> 
								</div>
								<div class="icon-content">
									<h4 class="dlab-tilte text-uppercase">Dealership</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
								</div>
							</div>
							<div class="icon-box-btn text-center">
								<a href="#" class="site-button btn-block">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="dlab-box-bg m-b30 box-hover" style="background-image: url(images/our-work/work/pic4.jpg)">
							<div class="icon-bx-wraper center p-lr20 p-tb30">
								<div class="text-primary m-b20"> 
									<span class="icon-cell"><i class="glyph-icon flaticon-list"></i></span> 
								</div>
								<div class="icon-content">
									<h4 class="dlab-tilte text-uppercase">affordable</h4>
									<p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
								</div>
							</div>
							<div class="icon-box-btn text-center">
								<a href="#" class="site-button btn-block">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="dlab-info-about">
				<div class="container">
					<div class="row">
						<div class="col-md-5">
							<div class="">
								<h3 class="h3 text-uppercase m-b10 m-t0">About us </h3>
								<p class="p-t0">Everything you need to build an amazing dealership website.</p>
							</div>
							<div class="about-us-info">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
								<div class="media media-info">
									<div class="media-left">
										<a href="#">
											<img class="media-object" src="images/testimonials/pic2.jpg" alt="">
										</a>
									</div>
									<div class="media-body p-l15">
										<h4 class="font-weight-700 text-uppercase text-primary m-b10">Have any question ?</h4>
										<h2 class="media-heading open-sans font-weight-700">01 123 456 789</h2>
									</div>
								</div>
								<div class="m-t30">
									<a href="#" class="site-button">Read More</a>
								</div>
							</div>	
						</div>
						<div class="col-md-7">
							<div class="about-side-img wow fadeInRight" data-wow-duration="1.50s" data-wow-delay="0.50s">
								<img src="images/car.png" alt=""> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>-->
		<!-- About Us END -->
		<!-- For Your Quick Look -->
        <!-- <div class="section-full bg-white content-inner car-listing">
            <div class="container">
                <div class="section-head">
                    <h3 class="h3 text-uppercase">For your quick look</h3>
					<ul class="nav theme-tabs">
						<li role="presentation" class="active"><a data-toggle="tab"  aria-controls="upcoming"  href="#upcoming">UPCOMING</a></li>
						<li role="presentation" ><a data-toggle="tab"  aria-controls="popular" href="#popular">POPULAR</a></li>
						<li role="presentation" ><a data-toggle="tab"  aria-controls="latest" href="#latest">LATEST</a></li>
					</ul>
                </div>
                <div class="section-content ">
                    <div class="row">	
						<div class="dlab-tabs">
							
							<div class="tab-content">
								<div id="upcoming"  class="tab-pane active clearfix">
									<div class="col-md-12 owl-carousel owl-btn-style-2 quick-look">
										<div class="item">
											<div class="dlab-feed-list">
												<div class="dlab-media"> 
													<a href="new-car-upcoming.html"><img src="images/our-work/work/pic1.jpg" alt=""></a> 
												</div>
												<div class="dlab-info">
													<h4 class="dlab-title"><a href="new-car-upcoming.html">Hyundai santa fe sport </a></h4>
													<div class="dlab-separator bg-black"></div>
													<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
												</div>
												<div class="icon-box-btn text-center">
													<ul class="clearfix">
														<li>2017</li>
														<li>Manual</li>
														<li>210 hp </li>
													</ul>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="dlab-feed-list">
												<div class="dlab-media"> 
													<a href="new-car-upcoming.html"><img src="images/our-work/work/pic2.jpg" alt=""></a> 
												</div>
												<div class="dlab-info">
													<h4 class="dlab-title"><a href="new-car-upcoming.html">Hyundai santa fe sport </a></h4>
													<div class="dlab-separator bg-black"></div>
													<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
												</div>
												<div class="icon-box-btn text-center">
													<ul class="clearfix">
														<li>2017</li>
														<li>Manual</li>
														<li>210 hp </li>
													</ul>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="dlab-feed-list">
												<div class="dlab-media"> 
													<a href="new-car-upcoming.html"><img src="images/our-work/work/pic3.jpg" alt=""></a> 
												</div>
												<div class="dlab-info">
													<h4 class="dlab-title"><a href="new-car-upcoming.html">Hyundai santa fe sport </a></h4>
													<div class="dlab-separator bg-black"></div>
													<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
												</div>
												<div class="icon-box-btn text-center">
													<ul class="clearfix">
														<li>2017</li>
														<li>Manual</li>
														<li>210 hp </li>
													</ul>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="dlab-feed-list">
												<div class="dlab-media"> 
													<a href="new-car-upcoming.html"><img src="images/our-work/work/pic4.jpg" alt=""></a> 
												</div>
												<div class="dlab-info">
													<h4 class="dlab-title"><a href="new-car-upcoming.html">Hyundai santa fe sport </a></h4>
													<div class="dlab-separator bg-black"></div>
													<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
												</div>
												<div class="icon-box-btn text-center">
													<ul class="clearfix">
														<li>2017</li>
														<li>Manual</li>
														<li>210 hp </li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="popular"  class="tab-pane clearfix fade">
									<div class="col-md-12 owl-carousel owl-btn-style-2 quick-look">
										<div class="item">
											<div class="dlab-feed-list">
												<div class="dlab-media"> 
													<a href="new-car-popular.html"><img src="images/our-work/work/pic3.jpg" alt=""></a> 
												</div>
												<div class="dlab-info">
													<h4 class="dlab-title"><a href="new-car-popular.html">Hyundai santa fe sport </a></h4>
													<div class="dlab-separator bg-black"></div>
													<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
												</div>
												<div class="icon-box-btn text-center">
													<ul class="clearfix">
														<li>2017</li>
														<li>Manual</li>
														<li>210 hp </li>
													</ul>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="dlab-feed-list">
												<div class="dlab-media"> 
													<a href="new-car-popular.html"><img src="images/our-work/work/pic4.jpg" alt=""></a> 
												</div>
												<div class="dlab-info">
													<h4 class="dlab-title"><a href="new-car-popular.html">Hyundai santa fe sport </a></h4>
													<div class="dlab-separator bg-black"></div>
													<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
												</div>
												<div class="icon-box-btn text-center">
													<ul class="clearfix">
														<li>2017</li>
														<li>Manual</li>
														<li>210 hp </li>
													</ul>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="dlab-feed-list">
												<div class="dlab-media"> 
													<a href="new-car-popular.html"><img src="images/our-work/work/pic1.jpg" alt=""></a> 
												</div>
												<div class="dlab-info">
													<h4 class="dlab-title"><a href="new-car-popular.html">Hyundai santa fe sport </a></h4>
													<div class="dlab-separator bg-black"></div>
													<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
												</div>
												<div class="icon-box-btn text-center">
													<ul class="clearfix">
														<li>2017</li>
														<li>Manual</li>
														<li>210 hp </li>
													</ul>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="dlab-feed-list">
												<div class="dlab-media"> 
													<a href="new-car-popular.html"><img src="images/our-work/work/pic2.jpg" alt=""></a> 
												</div>
												<div class="dlab-info">
													<h4 class="dlab-title"><a href="new-car-popular.html">Hyundai santa fe sport </a></h4>
													<div class="dlab-separator bg-black"></div>
													<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
												</div>
												<div class="icon-box-btn text-center">
													<ul class="clearfix">
														<li>2017</li>
														<li>Manual</li>
														<li>210 hp </li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="latest"  class="tab-pane clearfix fade">
									<div class="col-md-12 owl-carousel owl-btn-style-2 quick-look">
										<div class="item">
											<div class="dlab-feed-list">
												<div class="dlab-media"> 
													<a href="new-car-latest.html"><img src="images/our-work/work/pic2.jpg" alt=""></a> 
												</div>
												<div class="dlab-info">
													<h4 class="dlab-title"><a href="new-car-latest.html">Hyundai santa fe sport </a></h4>
													<div class="dlab-separator bg-black"></div>
													<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
												</div>
												<div class="icon-box-btn text-center">
													<ul class="clearfix">
														<li>2017</li>
														<li>Manual</li>
														<li>210 hp </li>
													</ul>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="dlab-feed-list">
												<div class="dlab-media"> 
													<a href="new-car-latest.html"><img src="images/our-work/work/pic3.jpg" alt=""></a> 
												</div>
												<div class="dlab-info">
													<h4 class="dlab-title"><a href="new-car-latest.html">Hyundai santa fe sport </a></h4>
													<div class="dlab-separator bg-black"></div>
													<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
												</div>
												<div class="icon-box-btn text-center">
													<ul class="clearfix">
														<li>2017</li>
														<li>Manual</li>
														<li>210 hp </li>
													</ul>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="dlab-feed-list">
												<div class="dlab-media"> 
													<a href="new-car-latest.html"><img src="images/our-work/work/pic1.jpg" alt=""></a> 
												</div>
												<div class="dlab-info">
													<h4 class="dlab-title"><a href="new-car-latest.html">Hyundai santa fe sport </a></h4>
													<div class="dlab-separator bg-black"></div>
													<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
												</div>
												<div class="icon-box-btn text-center">
													<ul class="clearfix">
														<li>2017</li>
														<li>Manual</li>
														<li>210 hp </li>
													</ul>
												</div>
											</div>
										</div>
										
										<div class="item">
											<div class="dlab-feed-list">
												<div class="dlab-media"> 
													<a href="new-car-latest.html"><img src="images/our-work/work/pic4.jpg" alt=""></a> 
												</div>
												<div class="dlab-info">
													<h4 class="dlab-title"><a href="new-car-latest.html">Hyundai santa fe sport </a></h4>
													<div class="dlab-separator bg-black"></div>
													<p class="dlab-price"><del>$40,152</del> <span class="text-primary">$26,598</span></p>
												</div>
												<div class="icon-box-btn text-center">
													<ul class="clearfix">
														<li>2017</li>
														<li>Manual</li>
														<li>210 hp </li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div> -->
        <!-- For Your Quick Look END -->
		<!-- Car Find And Sale -->
        <div class="section-full bg-gray p-tb20 car-listing">
            <div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="find-car box-hover " style="background-image: url(images/blog/default/thum1.jpg)">
							<div class="car-box">
								<!-- <span class="text-primary">Are You Looking</span> -->
								<h2 class="text-uppercase">To Buy A Car ?</h2>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the..</p>
								<a href="new-car-search.html" class="site-button outline">
									Read more
								</a> 
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="find-car box-hover active" style="background-image: url(images/blog/default/thum2.jpg)">
							<div class="car-box">
								<!-- <span class="text-primary">Are You Looking</span> -->
								<h2 class="text-uppercase">To Buy A Car ?</h2>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the..</p>
								<a href="new-car-search.html" class="site-button outline">
										Read more
								</a> 
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="find-car box-hover" style="background-image: url(images/blog/default/thum3.jpg)">
							<div class="car-box">
								<!-- <span class="text-primary">Are You Looking</span> -->
								<h2 class="text-uppercase">To Buy A Car ?</h2>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the..</p>
								<a href="new-car-search.html" class="site-button outline">
										Read more
								</a> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- Car Find And Sale END -->
    </div>
@include('frontend.layouts.footer')