<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <!-- Favicons -->
      <link rel="apple-touch-icon" href="./assets/img/apple-icon.png">
      <link rel="icon" href="./assets/img/favicon.png">
      <title>
          Telegram Theme Maker Complete Version
      </title>
      <!--     Fonts and icons     -->
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

			<script src="https://use.fontawesome.com/4a1022e9bf.js"></script>


      <link rel="stylesheet" href="./assets/css/material-kit.css?v=2.0.0">

  </head>
  <body  class="index-page ">

    <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="./index.html">ThemeMaker.site </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Inspect Source code on Github" data-placement="bottom" href="https://github.com/danielpetrica/Telegram-Desktop-themes-maker" target="_blank" data-original-title="Inspect Source code on Github">
                            <i class="fa fa-github"></i> OpenSource
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow @daniel_petrica on Twitter" data-placement="bottom" href="https://twitter.com/daniel_petrica" target="_blank" data-original-title="Follow us on Twitter">
                            <i class="fa fa-twitter"></i> Twitter
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Folow us on Telegram" data-placement="bottom" href="https://t.me/thememaker" target="_blank" data-original-title="Follow us on Telegram">
                            <i class="fa fa-paper-plane"></i> Telegram Channel
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="@Daniel.Petrica Instagram" data-placement="bottom" href="https://www.instagram.com/daniel.petrica" target="_blank" data-original-title="Follow me on Instagram">
                            <i class="fa fa-instagram"></i> Instagram
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('assets/img/simple-paint.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="brand">
                        <h1>
													Theme Maker Complete Version
												</h1>
                        <h3>
													Create a wonderfull fully personalizedd theme for <b> Telegram Desktop </b>
												</h3>
                    </div>
                </div>
            </div>

				</div>
    </div>

    <div class="main main-raised">
        <div class="container">

            <div class="section text-center">
							<div class="row">
	                <div class="col-md-12 ml-auto mr-auto">
	                    <h2 class="title">
												Welcome to Telegram Theme Maker <br> The Complete version
											</h2>
											<h5 class="description">
												Please use the following inputs to insert your chosen colors, and photo to create a nice theme.
 										</h5>
										<div class="inputs">
											<form  method="post" action="app/action_expert.php">

											<div class="row">
												<div class="col-lg-6 col-sm-5">
													<p class="text-info" >Select your theme name, please no space or special characters (use _ for spaces):</p>
												</div>
												<div class="col-lg-6 col-sm-2">
													<input  type="text"  name="name" value="type_a_name" class="form-control">
												</div>
											</div>
											<div class="row">
												<div class="col-lg-5 col-sm-5">
													<p class="text-info">
														Please inert the Link to the background image (only .jpg please!)
													</p>

												</div>
												<div class="col-lg-6 col-sm-4" >
													  <input  type="link" name="img_input_image" value="https://static.pexels.com/photos/8703/sky-space-moon-outdoors.jpg"  class="form-control">
												</div>
											</div>
											<?php
											include './app/theme_array_model.php';
											foreach ($arr_en as $key => $value) {
														if (!( $key % 2 == 0)) {
															$text_string="text-info";
														} else {
															$text_string="text-primary";
														}

														echo
															"\n<div class=\"row \">
																<div class=\"col-lg-6 col-sm-5\">
																	<p class=\"$text_string\" > Select your theme, ".$value['name']."<br />  Description: ".$value['desc']." </p>

																</div>
																<div class=\"col-lg-2 col-sm-2\">
																	<input  type=\"color\"  name=\"".$value['name']."\" value=\"".$value['color']."\" class=\"form-control\">
																</div>
															</div>";
											};
											 ?>


											<div class="row">
												<div class="col-lg-12 col-sm-4">
													  <button type="submit" class="btn btn-black btn-raised" name="button"  > <i class="fa fa-cogs"></i> Create It</button>
												</div>

											</div>


										</div>
										</form>
	                </div>

							</div>
            </div>

						<!--         carousel  -->
		        <div class="section" id="carousel">
		            <div class="container">
									<div class="title">
											<h3>Some themes created with ThemeMaker.site</h3>
									</div>
		                <div class="row">
		                    <div class="col-md-8 mr-auto ml-auto">
		                        <!-- Carousel Card -->
		                        <div class="card card-raised card-carousel">
		                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		                                <ol class="carousel-indicators">
		                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		                                </ol>
		                                <div class="carousel-inner">
		                                    <div class="carousel-item active">
		                                        <img class="d-block w-100" src="assets/img/theme0.png" alt="First slide">
		                                        <div class="carousel-caption d-none d-md-block">
		                                            <h4>
		                                                <i class="material-icons">info</i> A wonderfull dark Electronic theme from our users
		                                            </h4>
		                                        </div>
		                                    </div>
		                                    <div class="carousel-item">
		                                        <img class="d-block w-100" src="assets/img/theme1.png" alt="Second slide">
		                                        <div class="carousel-caption d-none d-md-block">
		                                            <h4>
		                                                <i class="material-icons">info</i>
																										<b>a nice pink based Theme</b>
		                                            </h4>
		                                        </div>
		                                    </div>
		                                    <div class="carousel-item">
		                                        <img class="d-block w-100" src="assets/img/theme2.jpg" alt="Third slide">
		                                        <div class="carousel-caption d-none d-md-block">
		                                            <h4>
		                                                <i class="material-icons">info</i> A nice theme inspired by Doctor Who <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAI7SURBVGhD7dk9axVBFMbxa/IBRIKQIqCIZUwjpLAICFpoPoCdQgwSK0llhCiIiHYWFlZiCm20sJG8mEIhRQpFK7FIISGIWEhQfAHFl/+jOXAYxjDrnV3vDfPADzKc2Z09yd69u5tWjenBDD5iCTvRlTmAn85ZdF124Ap8Iw+wGx2fPoxhFl/hm/CeQH+dPeiY6ODHMY/NDv5vnmIKe9F4tkMH/xDfEDvAf/EM59CP2jOCdcQOJJfP0ClaW/bjMWKL57aGo9iGrDmIH4gtWqdpZM0lxBa6Bl2Bcoidso+QNeF3gtmHXFlFuH/dEWTNBYSLyALuZvIJ4f4XkTVD+IBwoTp9xwlkj7789BeILZrbW+xCbbmD2MK56fNSa8JGjkD3THID5934JPxc1a2m7XTPZWN5DZvbeCP+qqUr2+k/P/7OKPxc1S3aLrwi+atWaSQ1YSM3cXXDMnQxsPE9+LmqW03b6TbExvIeNrfxRi7i1IY5qG7j6/BzVbeatltxY3kHm1tOrdRs2UZ03us2Ql7hpRs/h5+rutW0nW4SbSxfYHMbb+QY9Jwit6Dfuo3PwM9V3WraTo3aWN7A5pZTKzVbthH/YKWHoPturFPJz1XdatpOnxkbi3+waryRupRGUlMaqag0kprSSEWlkdSURioqjaSmNFJRaSQ1pZGKSiOp6epGDuMy9FrzBWIL56bXp/Yq9Th60VaG8T/+mxuaRFuZQGzHTbuNtqLXO7EdN02fzbYygEMdYBCbpNX6Bcd6PANqz4zcAAAAAElFTkSuQmCC">
		                                            </h4>
		                                        </div>
		                                    </div>
		                                </div>
		                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		                                    <i class="material-icons">keyboard_arrow_left</i>
		                                    <span class="sr-only">Previous</span>
		                                </a>
		                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		                                    <i class="material-icons">keyboard_arrow_right</i>
		                                    <span class="sr-only">Next</span>
		                                </a>
		                            </div>
		                        </div>
		                        <!-- End Carousel Card -->




				</div>
    </div>

		<footer class="footer " >
			<div class="container">
				<nav class="pull-left" >
					<ul>
							<li>
									<a href="https://DanielPetrica.pw">
											DanielPetrica
									</a>
							</li>
							<li>
									<a href="http://ThemeMaker.site">
										 Thememaker.site
									</a>
							</li>
							<li>
									<a href="https://github.com/danielpetrica/Telegram-Desktop-themes-maker/blob/master/LICENSE">
											Mit License
									</a>
							</li>
							<li>
								<a href="https://www.creative-tim.com" target="_blank">
								theme by	Creative Tim
								</a>
							</li>
					</ul>
				</nav>
				<div class="copyright pull-right">
            &copy; <script>document.write(new Date().getFullYear())</script> Crafted with <i class="material-icons">favorite</i>  by <a href="https://danielpetrica.pw">Andrei Daniel Petrica</a>
        </div>
			</div>
		</footer>

		<!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js"></script>
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/bootstrap-material-design.js"></script>
    <!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
    <script src="./assets/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="./assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="./assets/js/plugins/nouislider.min.js"></script>
    <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
    <script src="./assets/js/material-kit.js?v=2.0.0"></script>


  </body>
</html>
