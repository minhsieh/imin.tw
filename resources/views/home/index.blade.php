@extends('layouts.home')

@section('title', 'Min - Web Developer')
   
@section('container')
    <a href="javascript:" id="return-to-top"><span data-uk-icon="icon: arrow-up; ratio: 1" class="text-gray-extra-dark"></span></a>
		<!-- Header Transparent -->
		<div class="uk-position-top z-index-999">
			<!-- Header Options -->
			<div class="navbar-transparent" data-uk-sticky>
				<!-- Header Container -->
				<nav class="uk-navbar-container uk-navbar-transparent bg-transparent" data-uk-navbar="boundary-align: true; align: center;">
					<!-- Navigation Right Side -->
					<div class="uk-navbar-right uk-dark padding-right-four-percent">
						<!-- Links -->
						<ul class="uk-navbar-nav text-weight-600">
							<!-- Off-Canvas Navigation Toggle -->
							<li>
								<div class="uk-navbar-left">
									<a class="text-white toggle-square bg-black" data-uk-navbar-toggle-icon data-uk-toggle="target: #offcanvas-nav"></a>
								</div>
							</li>
							<!-- End Off-Canvas Navigation Toggle -->
						</ul>
					</div>
					<!-- End Navigation Right Side -->
				</nav>
				<!-- End Header Container -->
			</div>
			<!-- End Header Options -->
		</div>
		<!-- End Header Transparent -->
		
		<!-- Off-Canvas Navigation -->
		<div id="offcanvas-nav" data-uk-offcanvas="mode: push; overlay: true; esc-close: true;">
			<!-- Off-Canvas Bar -->
			<div class="uk-offcanvas-bar menu-dark bg-black">
				<!-- Off-Canvas Links-->
				<ul class="uk-nav-default uk-nav-parent-icon text-left" data-uk-nav>
					<li><a class="uk-navbar-item uk-logo" href="#" data-uk-scroll><img src="{{asset('assets2/images/logo-white.png')}}" alt="" /></a></li>
					<!-- Link -->
					<li class="uk-parent margin-bottom-10px">
						<a href="#" class="bottom-border border-1px border-color-gray-extra-dark"><span class="text-small text-gray-light text-uppercase text-weight-700 padding-bottom-20px">Link1</span></a>
						<!-- Dropdown -->
						<ul class="uk-nav-sub">
							<li class="text-small text-uppercase text-gray-light text-weight-700 bottom-border border-1px border-color-gray-extra-dark padding-bottom-10px margin-top-10px margin-bottom-10px">
								Sub-link-1
							</li>
						
							<li><a href="#">Agency Classic</a></li>
							<li><a href="#">Agency Creative</a></li>
							
							<li class="text-small text-uppercase text-gray-light text-weight-700 bottom-border border-1px border-color-gray-extra-dark padding-bottom-10px margin-top-10px margin-bottom-10px">
                                Sub-link-2
							</li>
							
						
							<li><a href="index-slider-blog-creative.html">Blog Creative</a></li>
							<li><a href="index-slider-branding-agency.html">Branding Agency</a></li>
							<li><a href="index-slider-business-classic.html">Business Classic</a></li>
						</ul>
						<!-- End Dropdown -->
					</li>
					<!-- End Link -->
				</ul>
				<!-- End Off-Canvas Links -->
				
				<!-- Navigation Footer -->
				<div class="nav-footer margin-top-100px">
					<!-- Off-Canvas Search -->
					<form class="uk-search uk-search-default width-100 bg-gray-extra-dark margin-top-20px">
						<a href="" class="uk-search-icon-flip text-white" data-uk-search-icon></a>
						<input class="uk-search-input text-extra-small text-uppercase text-white text-weight-600 montserrat no-border letter-spacing-1" type="search" placeholder="Search">
					</form>
					<!-- End Off-Canvas Search -->

					<!-- Social Links for Off-Canvas Footer -->
					<ul class="list-unstyled no-margin-bottom margin-top-20px">
					
						<li class="display-inline-block margin-right-25px"><a href="#"><i class="fab fa-facebook facebook"></i></a></li>
						<li class="display-inline-block margin-right-25px"><a href="#"><i class="fab fa-twitter twitter"></i></a></li>
						<li class="display-inline-block margin-right-25px"><a href="#"><i class="fab fa-instagram instagram"></i></a></li>
						<li class="display-inline-block"><a href="#"><i class="fab fa-behance behance"></i></a></li>

					</ul>
					<!-- End Social Links for Off-Canvas Footer -->

					<!-- Copyright Information -->
					<p class="no-margin-bottom margin-top-20px text-small text-gray-light text-weight-400">Copyright © 2019 of <a href="https://www.fourtabs.com" target="_blank">Fourtabs.</a></p>
					<p class="no-margin-bottom text-small text-gray-light text-weight-400 text-black">All rights reserved.</p>
					<!-- End Copyright Information -->
			
				</div>
				<!-- End Navigation Footer -->

			</div>
			<!-- End Off-Canvas Bar -->
			
		</div>
		<!-- End Off-Canvas Navigation -->
		
		
		<!-- Home -->
		<section class="padding-top-bottom-150px">
			<!-- Container -->
			<div class="container">
				<!-- Row -->
				<div class="row">
					<!-- Column -->
					<div class="col-md-10 col-sm-12 col-xs-12 text-center margin-auto">
						<div class="uk-dark padding-50px all-border border-10px border-color-black width-60 margin-auto xs-width-100">
							<!-- Title -->
							<h5 class="text-extra-small text-black text-weight-700 margin-bottom-10px text-uppercase letter-spacing-10">MIN HSIEH<span class="no-letter-spacing">r</span></h5>
							<div class="separator center-col width-100-percent bottom-border border-1px border-color-gray-dark margin-top-bottom-20px margin-bottom-25px"></div>
							<!-- Heading -->
							<h3 class="text-weight-700 text-black">I am a Web Developer Works With Passion & Joy</h3>
							<a class="btn btn-small btn-transparent-black margin-right-10px sm-margin-left-right-auto sm-display-table xs-margin-bottom-15px" href="#">Know More</a>
							<a class="btn btn-small btn-black sm-margin-left-right-auto sm-display-table xs-no-margin-bottom" href="#link1" data-uk-scroll>Say Hi</a>
						</div>
					</div>
					<!-- End Column -->
				</div>
				<!-- End Row -->
			</div>
			<!-- End Container -->
		</section>
		<!-- End Home -->

		<!-- About Me Start -->
		<div id="services-link" class="bg-gray-extra-light padding-top-bottom-150px">
			<div class="container">
				<div class="row">
					<!-- Column -->
					<div class="col-md-8 col-sm-12 col-xs-12 center-col text-center margin-auto">
						<h4 class="text-weight-600 text-gray-extra-dark margin-bottom-20px">About Me</h4>
						<p class="no-margin-bottom text-medium">你好，我是Min，有PHP開發6年以上經驗。第一次開發網站時，看到正有人使用它時的成就感，至今一直是我的動力，喜歡有「創造性」、「挑戰性」的工作，也喜歡優雅、易閱讀的程式，最喜歡Laravel框架。同時也是一名童軍團長、消防隊救護義消、重度遊戲玩家。</p>
					</div>
                    <div class="col-md-8 col-sm-12 col-xs-12 center-col text-center margin-auto padding-top-50px">
                        <ul class="list-unstyled text-center no-margin-bottom sm-text-center">
                        
                            <li class="display-inline-block margin-right-25px">
                                <a class="text-medium text-gray-dark text-weight-700" href="https://www.facebook.com/minyann.hsieh">
                                    <i class="fab fa-facebook facebook"></i>
                                </a>
                            </li>
                            <li class="display-inline-block margin-right-25px">
                                <a class="text-medium text-gray-dark text-weight-700" href="https://www.linkedin.com/in/minyan-hsieh-068896b6/">
                                    <i class="fab fa-linkedin linkedin"></i>
                                </a>
                            </li>
                            <li class="display-inline-block margin-right-25px">
                                <a class="text-medium text-gray-dark text-weight-700" href="https://github.com/minhsieh">
                                    <i class="fab fa-github"></i>
                                </a>
                            </li>
                            <li class="display-inline-block margin-right-25px">
                                <a class="text-medium text-gray-dark text-weight-700" href="https://steamcommunity.com/id/nrove" target="__blank">
                                    <i class="fab fa-steam"></i>
                                </a>
                            </li>
                            <li class="display-inline-block margin-right-25px">
                                <a class="text-medium text-gray-dark text-weight-700" href="javascript:;">
                                    <i class="fab fa-nintendo-switch switch"></i>
                                </a>
                            </li>
                            <li class="display-inline-block margin-right-25px">
                                <a class="text-medium text-gray-dark text-weight-700" href="javascript:;">
                                    <i class="fab fa-discord discord"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
					<!-- End Column -->
				</div>
                <!-- Separator -->
                <div class="separator width-10 center-col bottom-border border-1px border-color-gray-light margin-top-50px margin-bottom-75px"></div>
				<div class="row">
					<div class="col-md-8 col-sm-10 col-xs-10 text-center center-col margin-auto">
                        <img src="{{ asset('images/home-index-avatar-big.jpg') }}" style="width:400px;">
					</div>
				</div>
			</div>
		</div>
		<!-- About Me End -->

		<!-- Skills 1 Start-->
		<section class="padding-top-bottom-150px">
			<!-- Container -->
			<div class="container">
				<!-- Row -->
				<div class="row">
					<!-- Column -->
					<div class="col-md-8 col-sm-12 col-xs-12 center-col text-center margin-auto">
						<!-- Title -->
						<div class="position-relative overflow-hidden width-70 padding-bottom-100px page-title-smaller margin-auto">
							<!-- Title -->
							<h1 class="no-margin uk-heading-line uk-text-center"><span class="text-gray-extra-dark text-uppercase text-weight-700 letter-spacing-2">Style 04</span></h1>
						</div>
						<!-- End Title -->
					</div>
					<!-- End Column -->
				</div>
				<!-- End Row -->
				<!-- Positioning -->
				<div class="position-relative">
					<!-- Animation -->
					<div data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; target: > .row > div > div; delay: 50; repeat: false">
						<!-- Row -->
						<div class="row uk-grid">
							<!-- Column -->
							<div class="col-md-4 col-sm-6 col-xs-12 text-center sm-margin-bottom-25px">
								<!-- Card -->
								<div class="uk-scrollspy-inview uk-animation-slide-bottom-medium" style="">
									<div class="uk-card uk-card-default uk-card-body text-left">
										<h6 class="text-gray-extra-dark bottom-border border-1px border-color-gray-regular padding-bottom-30px">Title</h6>
										<div class="uk-card-badge uk-label text-small">Badge</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									</div>
								</div>
								<!-- End Card -->
							</div>
							<!-- End Column -->
							<!-- Column -->
							<div class="col-md-4 col-sm-6 col-xs-12 text-center sm-margin-bottom-25px">
								<!-- Card -->
								<div class="uk-scrollspy-inview uk-animation-slide-bottom-medium" style="">
									<div class="uk-card uk-card-default uk-card-body bg-gray-extra-dark text-left">
										<h6 class="text-white bottom-border border-1px border-color-gray-dark padding-bottom-30px">Title</h6>
										<div class="uk-card-badge uk-label bg-blue text-small">Badge</div>
										<p class="text-gray-regular">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									</div>
								</div>
								<!-- End Card -->
							</div>
							<!-- End Column -->
							
							<!-- Column -->
							<div class="col-md-4 col-sm-6 col-xs-12 text-center xs-margin-bottom-25px">
								<!-- Card -->
								<div class="uk-scrollspy-inview uk-animation-slide-bottom-medium" style="">
									<div class="uk-card uk-card-default uk-card-body bg-blue text-left">
										<h6 class="text-white bottom-border border-1px border-color-gray-dark padding-bottom-30px">Title</h6>
										<div class="uk-card-badge uk-label bg-gray-dark text-small">Badge</div>
										<p class="text-gray-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									</div>
								</div>
								<!-- End Card -->
							</div>
							<!-- End Column -->
						</div>
						<!-- End Row -->
					</div>
					<!-- End Animations -->
				</div>
				<!-- End Positioning -->
			</div>
			<!-- End Container -->
		</section>
		<!-- Skills 1 End-->

		<!-- Skills 2 Start-->
		<section class="padding-top-bottom-150px bg-gray-extra-light">
			<!-- Container -->
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12 center-col text-center margin-auto">
						<div class="position-relative overflow-hidden width-70 padding-bottom-100px page-title-smaller margin-auto">
							<h1 class="no-margin uk-heading-line uk-text-center"><span class="text-gray-extra-dark text-uppercase text-weight-700 letter-spacing-2">Style 04</span></h1>
						</div>
					</div>
				</div>
				
				<!-- Positioning -->
				<div class="position-relative">
					<!-- Row -->
					<div class="row uk-grid">
						<!-- Column -->
						<div class="col-md-4 col-sm-6 col-xs-12 text-center sm-margin-bottom-25px">
							<!-- Card -->
							<div class="uk-scrollspy-inview uk-animation-slide-bottom-medium" style="">
								<div class="uk-card uk-card-default uk-card-body text-left">
									<h6 class="text-gray-extra-dark bottom-border border-1px border-color-gray-regular padding-bottom-30px">Title</h6>
									<div class="uk-card-badge uk-label text-small">Badge</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								</div>
							</div>
							<!-- End Card -->
						</div>
						<!-- End Column -->
						
						<!-- Column -->
						<div class="col-md-4 col-sm-6 col-xs-12 text-center sm-margin-bottom-25px">
							<!-- Card -->
							<div class="uk-scrollspy-inview uk-animation-slide-bottom-medium" style="">
								<div class="uk-card uk-card-default uk-card-body bg-gray-extra-dark text-left">
									<h6 class="text-white bottom-border border-1px border-color-gray-dark padding-bottom-30px">Title</h6>
									<div class="uk-card-badge uk-label bg-blue text-small">Badge</div>
									<p class="text-gray-regular">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								</div>
							</div>
							<!-- End Card -->
						</div>
						<!-- End Column -->
						
						<!-- Column -->
						<div class="col-md-4 col-sm-6 col-xs-12 text-center xs-margin-bottom-25px">
							<!-- Card -->
							<div class="uk-scrollspy-inview uk-animation-slide-bottom-medium" style="">
								<div class="uk-card uk-card-default uk-card-body bg-blue text-left">
									<h6 class="text-white bottom-border border-1px border-color-gray-dark padding-bottom-30px">Title</h6>
									<div class="uk-card-badge uk-label bg-gray-dark text-small">Badge</div>
									<p class="text-gray-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								</div>
							</div>
							<!-- End Card -->
						</div>
						<!-- End Column -->
					</div>
					<!-- End Row -->
				</div>
				<!-- End Positioning -->
			</div>
			<!-- End Container -->
		</section>
		<!-- Skills 2 End-->
		
		<!-- Portfolio -->
		<section id="link1" data-uk-scrollspy="cls:uk-animation-fade" class="padding-top-bottom-150px">
		
			<!-- Container -->
			<div class="container">

				<!-- Portfolio Grid -->
				<div data-uk-filter="target: .works">

					<!-- Filter -->
					<ul class="uk-subnav filter-style-5">
					
						<li class="uk-active"  data-uk-filter-control><a href="#">All</a></li>
						<li data-uk-filter-control="filter: .images"><a href="#">Images</a></li>
						<li data-uk-filter-control="filter: .videos"><a href="#">Videos</a></li>
						<li data-uk-filter-control="filter: .projects"><a href="#">Projects</a></li>
						
					</ul>
					<!-- End Filter -->
					

					<!-- Work -->
					<div class="works hover-custom-02 uk-child-width-1-1@s uk-child-width-1-2@m uk-child-width-1-3@l uk-text-center uk-grid-large" data-uk-grid="masonry: true" data-uk-scrollspy="cls: uk-animation-scale-up; target: > div > a; delay: 50; repeat: false">
					
						<!-- Work -->
						<div class="images" data-uk-lightbox="animation: fade">
						
							<a href="{{asset('assets2/images/works/style-05/01.jpg')}}" class="uk-inline-clip uk-transition-toggle" tabindex="0" data-caption="This is a caption.">
								
								<!-- Image -->
								<img src="{{asset('assets2/images/works/style-05/01.jpg')}}" alt="" />
								
								<!-- Hover -->
								<div class="hover">
								
									<div class="uk-position-center">
								
										<!-- Title -->
										<h6 class="width-160px height-160px line-height-150 text-weight-700 text-uppercase all-border letter-spacing-1 border-6px text-black no-margin-bottom">Keboz</h6>
										
									</div>
								
								</div>
								<!-- End Hover -->
								
							</a>
						
						</div>
						<!-- End Work -->
						
						
						<!-- Work -->
						<div class="videos" data-uk-lightbox="animation: fade">
						
							<a href="https://www.fourtabs.com/presentations/videos/01.mp4" class="uk-inline-clip uk-transition-toggle" tabindex="0" data-caption="This is a caption.">
								
								<!-- Image -->
								<img src="{{asset('assets2/images/works/style-05/16.jpg')}}" alt="" />
								
								<!-- Hover -->
								<div class="hover">
								
									<div class="uk-position-center">
								
										<!-- Title -->
										<h6 class="width-160px height-160px line-height-150 text-weight-700 text-uppercase all-border letter-spacing-1 border-6px text-black no-margin-bottom">Forlan</h6>
										
									</div>
								
								</div>
								<!-- End Hover -->
								
							</a>
							<!-- End Work -->
						
						</div>
						
						
						<!-- Work -->
						<div class="projects">
						
							<a href="project-style-01.html" class="uk-inline-clip uk-transition-toggle" tabindex="0">
								
								<!-- Image -->
								<img src="{{asset('assets2/images/works/style-05/03.jpg')}}" alt="" />
								
								<!-- Hover -->
								<div class="hover">
								
									<div class="uk-position-center">
								
										<!-- Title -->
										<h6 class="width-160px height-160px line-height-150 text-weight-700 text-uppercase all-border letter-spacing-1 border-6px text-black no-margin-bottom">Quora</h6>
										
									</div>
								</div>
								<!-- End Hover -->
							</a>
						</div>
						<!-- End Work -->
						<!-- Work -->
						<div class="images" data-uk-lightbox="animation: fade">
							<a href="{{asset('assets2/images/works/style-05/17.jpg')}}" class="uk-inline-clip uk-transition-toggle" tabindex="0" data-caption="This is a caption.">
								<!-- Image -->
								<img src="{{asset('assets2/images/works/style-05/17.jpg')}}" alt="" />
								<!-- Hover -->
								<div class="hover">
									<div class="uk-position-center">
										<!-- Title -->
										<h6 class="width-160px height-160px line-height-150 text-weight-700 text-uppercase all-border letter-spacing-1 border-6px text-black no-margin-bottom">Benzu</h6>
									</div>
								</div>
								<!-- End Hover -->
							</a>
						</div>
						<!-- End Work -->
						
						
						<!-- Work -->
						<div class="videos" data-uk-lightbox="animation: fade">
							<a href="https://www.fourtabs.com/presentations/videos/02.mp4" class="uk-inline-clip uk-transition-toggle" tabindex="0" data-caption="This is a caption.">
								<!-- Image -->
								<img src="{{asset('assets2/images/works/style-05/05.jpg')}}" alt="" />
								<!-- Hover -->
								<div class="hover">
									<div class="uk-position-center">
										<!-- Title -->
										<h6 class="width-160px height-160px line-height-150 text-weight-700 text-uppercase all-border letter-spacing-1 border-6px text-black no-margin-bottom">Cores</h6>
									</div>
								</div>
								<!-- End Hover -->
							</a>
							<!-- End Work -->
						</div>
						
						
						<!-- Work -->
						<div class="projects">

							<a href="project-style-02.html" class="projects uk-inline-clip uk-transition-toggle" tabindex="0">
								
								<!-- Image -->
								<img src="{{asset('assets2/images/works/style-05/18.jpg')}}" alt="" />
								
								<!-- Hover -->
								<div class="hover">
								
									<div class="uk-position-center">
								
										<!-- Title -->
										<h6 class="width-160px height-160px line-height-150 text-weight-700 text-uppercase all-border letter-spacing-1 border-6px text-black no-margin-bottom">Policy</h6>
										
									</div>
								
								</div>
								<!-- End Hover -->

							</a>
							<!-- End Hover -->
						
						</div>
						
						
						<!-- Work -->
						<div class="images" data-uk-lightbox="animation: fade">
						
							<a href="{{asset('assets2/images/works/style-05/07.jpg')}}" class="uk-inline-clip uk-transition-toggle" tabindex="0" data-caption="This is a caption.">
								
								<!-- Image -->
								<img src="{{asset('assets2/images/works/style-05/07.jpg')}}" alt="" />
								
								<!-- Hover -->
								<div class="hover">
								
									<div class="uk-position-center">
								
										<!-- Title -->
										<h6 class="width-160px height-160px line-height-150 text-weight-700 text-uppercase all-border letter-spacing-1 border-6px text-black no-margin-bottom">Benzu</h6>
										
									</div>
								
								</div>
								<!-- End Hover -->
								
							</a>
						
						</div>
						<!-- End Work -->
						
						
						<!-- Work -->
						<div class="videos" data-uk-lightbox="animation: fade">
						
							<a href="https://www.fourtabs.com/presentations/videos/02.mp4" class="uk-inline-clip uk-transition-toggle" tabindex="0" data-caption="This is a caption.">
								
								<!-- Image -->
								<img src="{{asset('assets2/images/works/style-05/08.jpg')}}" alt="" />
								
								<!-- Hover -->
								<div class="hover">
								
									<div class="uk-position-center">
								
										<!-- Title -->
										<h6 class="width-160px height-160px line-height-150 text-weight-700 text-uppercase all-border letter-spacing-1 border-6px text-black no-margin-bottom">Cores</h6>
										
									</div>
								
								</div>
								<!-- End Hover -->
								
							</a>
							<!-- End Work -->
						
						</div>
						
						
						<!-- Work -->
						<div class="projects">

							<a href="project-style-09.html" class="projects uk-inline-clip uk-transition-toggle" tabindex="0">
								
								<!-- Image -->
								<img src="{{asset('assets2/images/works/style-05/09.jpg')}}" alt="" />
								
								<!-- Hover -->
								<div class="hover">
								
									<div class="uk-position-center">
								
										<!-- Title -->
										<h6 class="width-160px height-160px line-height-150 text-weight-700 text-uppercase all-border letter-spacing-1 border-6px text-black no-margin-bottom">Policy</h6>
										
									</div>
								
								</div>
								<!-- End Hover -->

							</a>
							<!-- End Hover -->
						
						</div>


						
						<!-- Work -->
						<div class="images" data-uk-lightbox="animation: fade">
						
							<a href="{{asset('assets2/images/works/style-03/01.jpg')}}" class="uk-inline-clip uk-transition-toggle" tabindex="0" data-caption="This is a caption.">
								
								<!-- Image -->
								<img src="{{asset('assets2/images/works/style-03/01.jpg')}}" alt="" />
								
								<!-- Hover -->
								<div class="hover">
								
									<div class="uk-position-center">
								
										<!-- Title -->
										<h6 class="width-160px height-160px line-height-150 text-weight-700 text-uppercase all-border letter-spacing-1 border-6px text-black no-margin-bottom">Keboz</h6>
										
									</div>
								
								</div>
								<!-- End Hover -->
								
							</a>
						
						</div>
						<!-- End Work -->
						
						
						<!-- Work -->
						<div class="videos" data-uk-lightbox="animation: fade">
						
							<a href="https://www.fourtabs.com/presentations/videos/01.mp4" class="uk-inline-clip uk-transition-toggle" tabindex="0" data-caption="This is a caption.">
								
								<!-- Image -->
								<img src="{{asset('assets2/images/works/style-02/16.jpg')}}" alt="" />
								
								<!-- Hover -->
								<div class="hover">
								
									<div class="uk-position-center">
								
										<!-- Title -->
										<h6 class="width-160px height-160px line-height-150 text-weight-700 text-uppercase all-border letter-spacing-1 border-6px text-black no-margin-bottom">Forlan</h6>
										
									</div>
								
								</div>
								<!-- End Hover -->
								
							</a>
							<!-- End Work -->
						
						</div>
						
						
						<!-- Work -->
						<div class="projects">
						
							<a href="project-style-01.html" class="uk-inline-clip uk-transition-toggle" tabindex="0">
								
								<!-- Image -->
								<img src="{{asset('assets2/images/works/style-03/03.jpg')}}" alt="" />
								
								<!-- Hover -->
								<div class="hover">
								
									<div class="uk-position-center">
								
										<!-- Title -->
										<h6 class="width-160px height-160px line-height-150 text-weight-700 text-uppercase all-border letter-spacing-1 border-6px text-black no-margin-bottom">Quora</h6>
										
									</div>
								
								</div>
								<!-- End Hover -->
							
							</a>
						
						</div>
						<!-- End Work -->
						
						
						<!-- Work -->
						<div class="images" data-uk-lightbox="animation: fade">
						
							<a href="{{asset('assets2/images/works/style-03/17.jpg')}}" class="uk-inline-clip uk-transition-toggle" tabindex="0" data-caption="This is a caption.">
								
								<!-- Image -->
								<img src="{{asset('assets2/images/works/style-05/17.jpg')}}" alt="" />
								
								<!-- Hover -->
								<div class="hover">
								
									<div class="uk-position-center">
								
										<!-- Title -->
										<h6 class="width-160px height-160px line-height-150 text-weight-700 text-uppercase all-border letter-spacing-1 border-6px text-black no-margin-bottom">Benzu</h6>
										
									</div>
								
								</div>
								<!-- End Hover -->
								
							</a>
						
						</div>
						<!-- End Work -->
						
						
						<!-- Work -->
						<div class="videos" data-uk-lightbox="animation: fade">
						
							<a href="https://www.fourtabs.com/presentations/videos/02.mp4" class="uk-inline-clip uk-transition-toggle" tabindex="0" data-caption="This is a caption.">
								
								<!-- Image -->
								<img src="{{asset('assets2/images/works/style-03/05.jpg')}}" alt="" />
								
								<!-- Hover -->
								<div class="hover">
								
									<div class="uk-position-center">
								
										<!-- Title -->
										<h6 class="width-160px height-160px line-height-150 text-weight-700 text-uppercase all-border letter-spacing-1 border-6px text-black no-margin-bottom">Cores</h6>
										
									</div>
								
								</div>
								<!-- End Hover -->
								
							</a>
							<!-- End Work -->
						
						</div>
						
						
						<!-- Work -->
						<div class="projects">

							<a href="project-style-02.html" class="projects uk-inline-clip uk-transition-toggle" tabindex="0">
								
								<!-- Image -->
								<img src="{{asset('assets2/images/works/style-03/18.jpg')}}" alt="" />
								
								<!-- Hover -->
								<div class="hover">
								
									<div class="uk-position-center">
								
										<!-- Title -->
										<h6 class="width-160px height-160px line-height-150 text-weight-700 text-uppercase all-border letter-spacing-1 border-6px text-black no-margin-bottom">Policy</h6>
										
									</div>
								
								</div>
								<!-- End Hover -->

							</a>
							<!-- End Hover -->
						
						</div>
						
						
						<!-- Work -->
						<div class="images" data-uk-lightbox="animation: fade">
						
							<a href="{{asset('assets2/images/works/style-03/07.jpg')}}" class="uk-inline-clip uk-transition-toggle" tabindex="0" data-caption="This is a caption.">
								
								<!-- Image -->
								<img src="{{asset('assets2/images/works/style-05/07.jpg')}}" alt="" />
								
								<!-- Hover -->
								<div class="hover">
								
									<div class="uk-position-center">
								
										<!-- Title -->
										<h6 class="width-160px height-160px line-height-150 text-weight-700 text-uppercase all-border letter-spacing-1 border-6px text-black no-margin-bottom">Benzu</h6>
										
									</div>
								
								</div>
								<!-- End Hover -->
								
							</a>
						
						</div>
						<!-- End Work -->
						
						
						<!-- Work -->
						<div class="videos" data-uk-lightbox="animation: fade">
						
							<a href="https://www.fourtabs.com/presentations/videos/02.mp4" class="uk-inline-clip uk-transition-toggle" tabindex="0" data-caption="This is a caption.">
								
								<!-- Image -->
								<img src="{{asset('assets2/images/works/style-03/08.jpg')}}" alt="" />
								
								<!-- Hover -->
								<div class="hover">
								
									<div class="uk-position-center">
								
										<!-- Title -->
										<h6 class="width-160px height-160px line-height-150 text-weight-700 text-uppercase all-border letter-spacing-1 border-6px text-black no-margin-bottom">Cores</h6>
										
									</div>
								
								</div>
								<!-- End Hover -->
								
							</a>
							<!-- End Work -->
						
						</div>
						
						
						<!-- Work -->
						<div class="projects">

							<a href="project-style-09.html" class="projects uk-inline-clip uk-transition-toggle" tabindex="0">
								
								<!-- Image -->
								<img src="{{asset('assets2/images/works/style-03/09.jpg')}}" alt="" />
								
								<!-- Hover -->
								<div class="hover">
								
									<div class="uk-position-center">
								
										<!-- Title -->
										<h6 class="width-160px height-160px line-height-150 text-weight-700 text-uppercase all-border letter-spacing-1 border-6px text-black no-margin-bottom">Policy</h6>
										
									</div>
								
								</div>
								<!-- End Hover -->

							</a>
							<!-- End Hover -->
						
						</div>
						
						
					</div>

				</div>

			</div>
			<!-- End Container -->

		</section>
		<!-- End Portfolio -->
		
		
		
		
		<!-- Project -->
		<section class="padding-top-bottom-150px bg-gray-extra-light">
		
			<!-- Container -->
			<div class="container" data-uk-scrollspy="cls: uk-animation-scale-up; target: > .row > div; delay: 50; repeat: false">

				<!-- Row -->
				<div class="row">
				
					<!-- Column -->
					<div class="col-md-10 col-sm-12 col-xs-12 text-center margin-auto">
						
						<div class="uk-dark padding-80px all-border border-10px border-color-black width-60 margin-auto xs-width-100">

							<!-- Heading -->
							<h3 class="text-weight-700 text-black no-margin-bottom">Got a project on mind?</h3>
							
							<div class="separator center-col width-100-percent bottom-border border-1px border-color-gray-light margin-top-bottom-25px margin-bottom-25px"></div>

							<a class="btn btn-small btn-transparent-black margin-right-10px sm-margin-left-right-auto sm-display-table xs-margin-bottom-15px" href="#link2" data-uk-scroll>Contact</a>
							

						</div>
						
					</div>
					<!-- End Column -->
					
				</div>
				<!-- End Row -->
				
			</div>
			<!-- End Container -->

		</section>
		<!-- End Project -->
		
		
		
		
		<!-- Blog -->
		<section data-uk-scrollspy="cls:uk-animation-fade" class="padding-top-bottom-150px">
		
			<!-- Container -->
			<div class="container">

				
				<!-- Heading -->									
				<h3 class="text-weight-700 text-black text-center no-margin-bottom">Our Blog.</h3>

				<div class="separator width-10 center-col bottom-border margin-top-30px margin-bottom-50px border-1px border-color-gray-light"></div>

				
				<!-- Animation -->
				<div data-uk-scrollspy="cls: uk-animation-slide-bottom; target: > .row > div ; delay: 50; repeat: false">
				
					<!-- Row -->
					<div class="row">

						<!-- Column -->
						<div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-75px text-left">
							
							<a href="blog-post-standard.html"><img src="{{asset('assets2/images/works/style-03/02.jpg')}}" alt="" /></a>
							
							<h6 class="margin-top-20px margin-bottom-15px"><a class="text-weight-700 text-gray-extra-dark" href="blog-post-standard.html">This is a blog post with some text.</a></h6>
							
							<ul class="uk-breadcrumb margin-bottom-15px">
					
								<li><a href="#" class="text-gray-dark">21 Nov 19</a></li>
								
								<li><a href="" class="text-gray-dark">Life</a></li>
								
								<li><a href=""><span data-uk-icon="icon: comment; ratio: 1" class="margin-right-5px text-gray-dark"></span> 23</a></li>
								
							</ul>
							
							<p class="text-medium text-weight-400">Nulla vitae aenean lacinia bibendum nulla sed consectetur. Integer posuere erat a ante porttitor mollis sagittis lacus.elit libero elit non porta gravida eget metus cras egestas.</p>

							<!-- Buttons -->
							<a class="btn btn-small btn-black sm-display-table no-margin-bottom" href="blog-post-standard.html">Know More</a>
							
						</div>
						<!-- End Column -->
						
						
						<!-- Column -->
						<div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-75px text-left">
							
							<a href="blog-post-standard.html"><img src="{{asset('assets2/images/works/style-02/01.jpg')}}" alt="" /></a>
							
							<h6 class="margin-top-20px margin-bottom-15px"><a class="text-weight-700 text-gray-extra-dark" href="blog-post-standard.html">This is a blog post with some text.</a></h6>
							
							<ul class="uk-breadcrumb margin-bottom-15px">
					
								<li><a href="#" class="text-gray-dark">21 Nov 19</a></li>
								
								<li><a href="" class="text-gray-dark">Life</a></li>
								
								<li><a href=""><span data-uk-icon="icon: comment; ratio: 1" class="margin-right-5px text-gray-dark"></span> 23</a></li>
								
							</ul>
							
							<p class="text-medium text-weight-400">Nulla vitae aenean lacinia bibendum nulla sed consectetur. Integer posuere erat a ante porttitor mollis sagittis lacus.elit libero elit non porta gravida eget metus cras egestas.</p>

							<!-- Buttons -->
							<a class="btn btn-small btn-black sm-display-table no-margin-bottom" href="blog-post-standard.html">Know More</a>
							
						</div>
						<!-- End Column -->
						
						
						<!-- Column -->
						<div class="col-md-4 col-sm-6 col-xs-12 margin-bottom-75px text-left">
							
							<a href="blog-post-standard.html"><img src="{{asset('assets2/images/works/style-03/03.jpg')}}" alt="" /></a>
							
							
							<h6 class="margin-top-20px margin-bottom-15px"><a class="text-weight-700 text-gray-extra-dark" href="blog-post-standard.html">How to download this thing okay.</a></h6>
							
							<ul class="uk-breadcrumb margin-bottom-15px">
					
								<li><a href="#" class="text-gray-dark">21 Nov 19</a></li>
								
								<li><a href="" class="text-gray-dark">Life</a></li>
								
								<li><a href=""><span data-uk-icon="icon: comment; ratio: 1" class="margin-right-5px text-gray-dark"></span> 23</a></li>
								
							</ul>

							<p class="text-medium text-weight-400">Nulla vitae aenean lacinia bibendum nulla sed consectetur. Integer posuere erat a ante porttitor mollis sagittis lacus.elit libero elit non porta gravida eget metus cras egestas.</p>

							<!-- Buttons -->
							<a class="btn btn-small btn-black sm-display-table no-margin-bottom" href="blog-post-standard.html">Know More</a>
							
						</div>
						<!-- End Column -->
						
					</div>
					<!-- End Row -->

					
					
					<!-- Row -->
					<div class="row">

						<!-- Column -->
						<div class="col-md-4 col-sm-6 col-xs-12 sm-margin-bottom-75px text-left">
							
							<a href="blog-post-standard.html"><img src="{{asset('assets2/images/works/style-03/04.jpg')}}" alt="" /></a>
							
							<h6 class="margin-top-20px margin-bottom-15px"><a class="text-weight-700 text-gray-extra-dark" href="blog-post-standard.html">This is a blog post with some text.</a></h6>
							
							<ul class="uk-breadcrumb margin-bottom-15px">
					
								<li><a href="#" class="text-gray-dark">21 Nov 19</a></li>
								
								<li><a href="" class="text-gray-dark">Life</a></li>
								
								<li><a href=""><span data-uk-icon="icon: comment; ratio: 1" class="margin-right-5px text-gray-dark"></span> 23</a></li>
								
							</ul>
							
							<p class="text-medium text-weight-400">Nulla vitae aenean lacinia bibendum nulla sed consectetur. Integer posuere erat a ante porttitor mollis sagittis lacus.elit libero elit non porta gravida eget metus cras egestas.</p>

							<!-- Buttons -->
							<a class="btn btn-small btn-black sm-display-table no-margin-bottom" href="blog-post-standard.html">Know More</a>
							
						</div>
						<!-- End Column -->
						
						
						<!-- Column -->
						<div class="col-md-4 col-sm-6 col-xs-12 sm-margin-bottom-75px text-left">
							
							<a href="blog-post-standard.html"><img src="{{asset('assets2/images/works/style-02/06.jpg')}}" alt="" /></a>
							
							<h6 class="margin-top-20px margin-bottom-15px"><a class="text-weight-700 text-gray-extra-dark" href="blog-post-standard.html">This is a blog post with some text.</a></h6>
							
							<ul class="uk-breadcrumb margin-bottom-15px">
					
								<li><a href="#" class="text-gray-dark">21 Nov 19</a></li>
								
								<li><a href="" class="text-gray-dark">Life</a></li>
								
								<li><a href=""><span data-uk-icon="icon: comment; ratio: 1" class="margin-right-5px text-gray-dark"></span> 23</a></li>
								
							</ul>
							
							<p class="text-medium text-weight-400">Nulla vitae aenean lacinia bibendum nulla sed consectetur. Integer posuere erat a ante porttitor mollis sagittis lacus.elit libero elit non porta gravida eget metus cras egestas.</p>

							<!-- Buttons -->
							<a class="btn btn-small btn-black sm-display-table no-margin-bottom" href="blog-post-standard.html">Know More</a>
							
						</div>
						<!-- End Column -->
						
						<!-- Column -->
						<div class="col-md-4 col-sm-6 col-xs-12 text-left">
							
							<a href="blog-post-standard.html"><img src="{{asset('assets2/images/works/style-01/03.jpg')}}" alt="" /></a>
							
							<h6 class="margin-top-20px margin-bottom-15px"><a class="text-weight-700 text-gray-extra-dark" href="blog-post-standard.html">How to download this thing okay.</a></h6>
							
							<ul class="uk-breadcrumb margin-bottom-15px">
					
								<li><a href="#" class="text-gray-dark">21 Nov 19</a></li>
								
								<li><a href="" class="text-gray-dark">Life</a></li>
								
								<li><a href=""><span data-uk-icon="icon: comment; ratio: 1" class="margin-right-5px text-gray-dark"></span> 23</a></li>
								
							</ul>
							
							<p class="text-medium text-weight-400">Nulla vitae aenean lacinia bibendum nulla sed consectetur. Integer posuere erat a ante porttitor mollis sagittis lacus.elit libero elit non porta gravida eget metus cras egestas.</p>

							<!-- Buttons -->
							<a class="btn btn-small btn-black sm-display-table no-margin-bottom" href="blog-post-standard.html">Know More</a>
							
						</div>
						<!-- End Column -->
						
					</div>
					<!-- End Row -->

				</div>
				<!-- End Animation -->
				
			</div>
			<!-- End Container -->

		</section>
		<!-- End Blog -->
		
		
		
		
		<!-- Contact-->
		<section id="link2" class="padding-top-bottom-150px bg-gray-extra-light">
		
			<!-- Container -->
			<div class="container" data-uk-scrollspy="cls: uk-animation-slide-right-medium; target: > .row > div ; delay: 50; repeat: false">

				<!-- Row -->
				<div class="row">
				
					<!-- Column -->
					<div class="col-md-7 col-sm-12 col-xs-12 center-col text-left margin-auto">
						
						<!-- Heading -->									
						<h3 class="text-weight-700 text-black no-margin-bottom">Contact us.</h3>

						<div class="separator width-10 bottom-border margin-top-bottom-30px border-1px border-color-gray-light"></div>
						
						<!-- Contact Container -->
						<div class="contact-wrapper">

							<!-- Form Container -->
							<form class="contact-form" method="post" action="contact.php">
							
								<!-- Messages For The User -->
								<div class="messages"></div>

								<!-- Form Controls -->
								<div class="controls">

									<!-- Row -->
									<div class="row">
									
										<!-- Column -->
										<div class="col-md-12 col-sm-12 col-xs-12">
										
											<!-- Form Group -->
											<div class="form-group">

												<!-- Input -->
												<input class="form-control form_name bg-transparent no-border-top no-border-left no-border-right border-color-gray-light border-3px no-margin-top padding-10px text-uppercase text-small text-white text-weight-800 letter-spacing-1" type="text" name="name"  placeholder="First Name *" required="required" data-error="Firstname is required.">

												<!-- Error Block -->
												<div class="help-block with-errors"></div>
											
											</div>
											<!-- End Form Group -->
											
										</div>
										<!-- End Column -->
										
									</div>
									<!-- End Row -->
									
									
									<!-- Row -->
									<div class="row">
										
										<!-- Column -->
										<div class="col-md-12 col-sm-12 col-xs-12">
										
											<!-- Form Group -->
											<div class="form-group">
											
												<!-- Input -->
												<input class="form-control form_lastname bg-transparent no-border-top no-border-left no-border-right border-color-gray-light border-3px padding-10px text-uppercase text-small text-white text-weight-800 letter-spacing-1 montserrat" type="text" name="name"  placeholder="Last Name *" required="required" data-error="Lastname is required.">
												
												<!-- Error Block -->
												<div class="help-block with-errors"></div>
												
											</div>
											<!-- End Form Group -->
											
										</div>
										<!-- End Column -->

									</div>
									<!-- End Row -->	


									
									<!-- Row -->
									<div class="row">
									
										<!-- Column -->
										<div class="col-md-6">
										
											<!-- Form Group -->
											<div class="form-group">

												<!-- Input -->
												<input class="form-control form_email bg-transparent no-border-top no-border-left no-border-right border-color-gray-light border-3px padding-10px text-uppercase text-small text-white text-weight-800 letter-spacing-1 montserrat" type="text" name="name"  placeholder="Email *" required="required" data-error="Email is required.">
												
												<!-- Error Block -->
												<div class="help-block with-errors"></div>
											
											</div>
											<!-- End Form Group -->
											
										</div>
										<!-- End Column -->
										
										
									  
										<!-- Column -->
										<div class="col-md-6">
										
											<!-- Form Group -->
											<div class="form-group">

												<!-- Input -->
												<input class="form-control form_phone bg-transparent no-border-top no-border-left no-border-right border-color-gray-light border-3px padding-10px text-uppercase text-small text-white text-weight-800 letter-spacing-1 montserrat" type="text" name="name"  placeholder="Phone *" required="required" data-error="Phone is required.">
												
												<!-- Error Block -->
												<div class="help-block with-errors"></div>
												
											</div>
											<!-- End Form Group -->
											
										</div>
										<!-- End Column -->

									</div>
									<!-- End Row -->	
									
									
									
									
									
									<!-- Row -->
									<div class="row">
									
										<!-- Column -->
										<div class="col-md-12">
										
											<!-- Form Group -->
											<div class="form-group">
											
												<!-- Input -->
												<textarea class="form-control form_message text-white no-margin-top no-border-top no-border-left no-border-right border-color-gray-light border-3px padding-20px text-uppercase bg-transparent text-small text-gray-extra-dark text-weight-800 letter-spacing-1 montserrat" name="message" placeholder="Tell me about your project *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
												
												<!-- Error Block -->
												<div class="help-block with-errors"></div>
												
											</div>
											<!-- End Form Group -->
											
										</div>
										<!-- End Column -->
									  
									  
										<!-- Column -->
										<div class="col-md-12">
										
											<!-- Input -->
											<input type="submit" class="btn-send btn btn-small btn-black margin-top-25px sm-margin-left-right-auto sm-display-table" value="Send message">
											
										</div>
										<!-- End Column -->
										
									</div>
									<!-- End Row -->
									
								</div>
								<!-- End Form Controls -->
								
							</form>
							<!-- End Form Container -->
							
						</div>
						<!-- END Contact Container -->
	
					</div>
					<!-- End Column -->
					
					
					
					<!-- Column -->
					<div class="col-md-3 col-sm-12 col-xs-12 center-col text-left sm-margin-top-75px" data-uk-scrollspy="cls: uk-animation-slide-right-medium; target: > .row > div ; delay: 50; repeat: false">
					
						<!-- Row -->
						<div class="row">

							<!-- Column -->
							<div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-75px text-left sm-text-center">
								
								<span data-uk-icon="icon: mail; ratio: 1"></span>
								
								<p class="margin-top-bottom-15px text-large letter-spacing-1 text-weight-500 text-black">Email</p>
								
								<p class="no-margin text-gray-dark text-weight-300">contact@XOD.com</p>

								
							</div>
							<!-- End Column -->
							
							<!-- Column -->
							<div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-75px text-left sm-text-center">
								
								<span data-uk-icon="icon: receiver; ratio: 1"></span>
								
								<p class="margin-top-bottom-15px text-large letter-spacing-1 text-weight-500 text-black">Phone</p>
								
								<p class="no-margin text-gray-dark text-weight-300">+1 929 3098 114</p>

								
							</div>
							<!-- End Column -->
							
							<!-- Column -->
							<div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-75px text-left sm-text-center">
								
								<span data-uk-icon="icon: location; ratio: 1"></span>
								
								<p class="margin-top-bottom-15px text-large letter-spacing-1 text-weight-500 text-black">Address</p>
								
								<p class="no-margin text-gray-dark text-weight-300">23-24 Jingo St. Lobster Rd</p>

								
							</div>
							<!-- End Column -->
							

						</div>
						<!-- End Row -->
						
					</div>
					<!-- End Column -->
					
					
				</div>
				<!-- End Row -->
				
			</div>
			<!-- End Container -->
			
		</section>
		<!-- End Contact -->
		
		
		
		
		<!-- Footer Detailed 4 Colums -->
		<footer data-uk-scrollspy="cls:uk-animation-fade">
		
			
			<!-- Row -->
			<div class="row bg-black padding-left-right-twelve-percent padding-top-bottom-100px">
				
				<!-- Column -->
				<div class="col-md-12 col-sm-12 col-xs-12 md-margin-bottom-50px text-center">
				
					<!-- Logo Image -->
					<a href="#" class="margin-bottom-25px display-inline-block" data-uk-scroll><img src="{{asset('assets2/images/logo-white.png')}}" alt="" /></a>
					
					<!-- Text -->
					<p class="margin-bottom-25px text-medium text-gray-regular text-small text-center text-weight-400">Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper  mattis consectetur nulla non metus.</p>					
					
					<!-- Links -->
					<a class="text-small text-weight-400 text-gray-regular right-border border-1 border-color-regular-gray padding-right-10px" href="#">Terms & Conditions</a>
					<a class="text-small text-weight-400 text-gray-regular padding-left-10px" href="#">Privacy Policy</a>
					
					<!-- Separator -->
					<div class="separator center-col width-50 bottom-border border-2px border-color-gray-extra-dark margin-top-bottom-30px"></div>
					
					<!-- Social Links for Footer -->
					<ul class="list-unstyled text-right no-margin-bottom text-center">
					
						<li class="display-inline-block margin-right-25px"><a class="text-medium text-weight-700" href="#"><i class="fab fa-facebook"></i></a></li>
						<li class="display-inline-block margin-right-25px"><a class="text-medium text-weight-700" href="#"><i class="fab fa-twitter"></i></a></li>
						<li class="display-inline-block margin-right-25px"><a class="text-medium text-weight-700" href="#"><i class="fab fa-behance"></i></a></li>
						<li class="display-inline-block margin-right-25px"><a class="text-medium text-weight-700" href="#"><i class="fab fa-dribbble"></i></a></li>
						<li class="display-inline-block"><a class="text-medium text-weight-700" href="#" data-uk-scroll data-uk-tooltip="title: Go to top; pos: right"><i class="far fa-arrow-alt-circle-up"></i></a></li>
					
					</ul>
					<!-- End Social Links for Footer -->
					
				</div>
				<!-- End Column -->

			</div>
			<!-- End Row -->
			
		</footer>
		<!-- End Footer -->

    @section('page-js')

    @endsection