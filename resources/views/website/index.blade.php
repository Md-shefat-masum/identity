@extends('layouts.website')
@section('contents')
	<!-- Home Section -->
	<section id="home">
		<!--
	#################################
		- THEMEPUNCH BANNER -
	#################################
	-->
		<div class="tp-banner-container">
			<div class="tp-banner">
				<ul>
                    <!-- SLIDE  -->
                    @foreach ($banner as $item)
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on"
                            data-title="Slide 1">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('uploads')}}/{{$item->name}}" alt="{{$item->name}}" data-bgposition="center top" data-bgfit="cover"
                                data-bgrepeat="no-repeat">
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme sft sub-heading" data-x="center" data-hoffset="0"
                                data-y="center" data-voffset="-50" data-speed="300" data-start="1200"
                                data-easing="Power1.easeInOut" data-endeasing="Power1.easeInOut" data-captionhidden="off"
                                data-endspeed="300"
                                style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">{{$item->subtitle}}
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption box-title sfb tp-fade tp-resizeme" data-x="center" data-hoffset="0"
                                data-y="center" data-voffset="30" data-speed="300" data-start="1300"
                                data-easing="Power1.easeInOut" data-endeasing="Power1.easeInOut" data-captionhidden="off"
                                data-endspeed="300"
                                style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">{{$item->title}}
                            </div>

                        </li>
                    <!-- SLIDE  -->
                    @endforeach

				</ul>
				<div class="tp-bannertimer"></div>
			</div>
		</div>
		<!-- END REVOLUTION SLIDER -->
	</section>
	<!-- Home Section -->
	<!-- About Section -->
	<section id="about" class="section-content bg1">
		<div class="container">
			<div class="row">
				<!-- Section Title -->
				<div class="section-title item_bottom text-center">
					<div>
						<span class="fa fa-user fa-2x"></span>
					</div>
					<h1>{{$aboutme->heading}}</h1>
				</div>
				<!-- End Section Title -->
			</div>
			<div class="row">
				<div class="col-md-4 text-center item_bottom">
					<img src="{{asset('uploads')}}/{{$aboutme->image}}" class="img-center img-responsive" alt="My photo" />
					<!-- YOUR PHOTO -->
					<div class="name-title">
						<h2>{{$aboutme->name}}</h2>
						<!-- Your Name -->
						<h5>{{$aboutme->occupation}}</h5>
						<!-- Your Designation -->
					</div>
				</div>
				<!-- some text about yourself -->
				<div class="col-md-4 item_top">
					<p class="quoteline">
                        {{$aboutme->sub_heading}}
					</p>
                    {!!$aboutme->paragraph!!}
					<p class="text-right">
						{{-- <img src="{{asset('contents/website')}}/images/signature.png" alt="signature" /> --}}
					</p>
				</div>
				<!-- ./some text about yourself -->
				<div class="col-md-4 item_bottom">
					<!-- some information list -->
					<ul class="fa-ul">
						<li><i class="fa fa-li fa-calendar"></i><strong>Birthdate</strong> : {{$aboutme->birthdate}}</li>
						<li><i class="fa fa-li fa-mobile"></i><strong>Phone</strong> : {{$aboutme->phone}}</li>
						<li><i class="fa fa-li fa-envelope-o"></i><strong>Email</strong> : {{$aboutme->email}}</li>
						<li><i class="fa fa-li fa-globe"></i><strong>Website</strong> : {{$aboutme->website}}</li>
						<li><i class="fa fa-li fa-home"></i><strong>Adresse</strong> : {{$aboutme->address}}
					</ul>
					<!-- ./some information list -->
					<!-- some number facts -->
					<div class="number-counters text-center new-line">
						<div class="counters-item">
							<i class="fa fa-group fa-2x"></i>
							<strong data-to="{{$aboutme->happy_client}}">0</strong>
							<!-- Set Your Number here. i,e. data-to="56" -->
							<p>
								Happy Clients
							</p>
						</div>
						<div class="counters-item">
							<i class="fa fa-flag fa-2x"></i>
							<strong data-to="{{$aboutme->experience}}">0</strong>
							<!-- Set Your Number here. i,e. data-to="56" -->
							<p>
								Year Experience
							</p>
						</div>
						<div class="counters-item">
							<i class="fa fa-trophy fa-2x"></i>
							<strong data-to="{{$aboutme->award}}">0</strong>
							<!-- Set Your Number here. i,e. data-to="56" -->
							<p>
								Awards Won
							</p>
						</div>
						<div class="counters-item">
							<i class="fa fa-thumbs-up fa-2x"></i>
							<strong data-to="{{$aboutme->project_done}}">0</strong>
							<!-- Set Your Number here. i,e. data-to="56" -->
							<p>
								Projects Done
							</p>
						</div>
					</div>
					<!-- ./some number facts -->
				</div>
			</div>
			<div class="row services">
				@foreach($service as $item)
				<div class="col-md-4">
					<!-- Service -->
					<div class="services-box new-line item_left">
						<h4>{{$item->name}}</h4>
						<div class="services-box-icon">
							<i class="{{$item->icon}} fa-3x"></i>
						</div>
						<div class="service-box-info">
							<p>
								{{$item->description}}
							</p>
						</div>
					</div>
					<!-- End Service -->
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- End About Section -->

	<!-- Portfolio Section -->
	<section id="portfolio" class="section-content bg3">
		<div class="container">
			<div class="row">
				<!-- Section title -->
				<div class="section-title item_bottom text-center">
					<div>
						<span class="fa fa-briefcase fa-2x"></span>
					</div>
					<h1 class="white">My <span>Works</span></h1>
				</div>
				<!-- End Section title -->
			</div>
			<div class="portfolio-top">
			</div>
			<div id="portfolio-wrap" tabindex="1">
				<div id="portfolio-page">
					<div id="portfolio-content">
						<div class="container">
							<div class="row">
								<div id="protfolio-control">
									<div class="row">
										<div class="col-md-4 col-sm-4 col-xs-4">
											<a href="#" id="prev-project" title="Previous Project"><i
													class="fa fa-arrow-left"></i></a>
										</div>
										<div class="col-md-4 col-sm-4 col-xs-4 text-center">
											<a href="#" id="close-project" title="Close Project"><i
													class="fa fa-times"></i></a>
										</div>
										<div class="col-md-4 col-sm-4 col-xs-4 text-right">
											<a href="#" id="next-project" title="Next Project"><i
													class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<!-- End #protfolio-control -->
								<!-- Ajax will load into here -->
								<div id="portfolio-ajax">
								<div class="single-portfolio">
          <div class="container">
          <div class="row">
              <div class="col-md-8" id="primary">
                 <img alt="project1" src="{{asset('contents/website')}}/images/portfolio/thumb4.jpg" class="img-responsive">
              </div>

              <div class="col-md-4" id="secondary">
                <!-- Project Summary -->
                <div class="project-desc">
                  <h3>Project Details</h3>
                  <div class="line-strong"></div>
                  <ul class="list-details">
                    <li><i class="fa fa-calendar"></i> 10 March 2014</li>
                    <li><i class="fa fa-tag"></i> video, logo</li>
                    <li><i class="fa fa-globe"></i><a href="#">Live Demo</a></li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet consectetuer malesuada congue et suscipit condimentum. Nulla at malesuada mauris ornare neque tellus ac Aenean adipiscing felis. Vestibulum turpis Nam pede eget elit feugiat Vestibulum neque Curabitur justo. Donec cursus semper urna consectetuer Nam Vivamus ut Pellentesque mauris laoreet. Vitae magna in at Nulla sodales vitae wisi tincidunt libero laoreet.</p>
                </div>   
                <!-- End Project Summary -->
              </div>
            </div>
            <!-- End .row -->
            </div>
            <!-- End .container -->
          </div>
								</div>
								<!-- End #portfolio-ajax -->
								<!-- End Ajax -->
							</div>
						</div>
					</div>
					<!-- End #portfolio-content -->
				</div>
				<!-- End #portfolio-page -->
			</div>
			<!-- End #portfolio-wrap -->
			<div id="portfolio-filter">
				<div class="row text-center">
					<div class="col-md-12">
						<!--portfolio category-->
						<ul class="portfolio-filter-list white">
							<li>
								<a class="active" href="#" data-cat="*">ALL</a>
							</li>
							@foreach($portcategory as $item)
							<li>
								<a href="#" data-cat="{{$item->name}}">{{$item->name}}</a>
							</li>
							@endforeach
							
						</ul>
						<!--End portfolio category-->
					</div>
					<!-- End .col-md-12 -->
				</div>
				<!-- End .row -->
			</div>
		</div>
		<!-- End .container -->

		<!-- End #portfolio-filter -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="portfolio-items" class="portfolio-items item_fade_in">
						@foreach($portimage as $item)
						<article class="{{$item->category}}">
							<a href="#!projects/project-single.html">
								<img height="200px" src="{{asset('uploads')}}/{{$item->image}}" alt="{{$item->category}}" />
								<div class="overlay">
									<div class="item-info">
										<i class="fa fa-camera"></i>
										<h3>{{$item->description}}</h3>
										<span>dsf</span>
									</div>
								</div>
								<!-- End .overlay -->
							</a>
						</article>
						@endforeach
					</div>
					<!-- End #portfolio-items.portfolio-items -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Portfolio Section -->

	<!-- Skill Section -->
	<section id="skill" class="section-content bg2">
		<div class="container">
			<div class="row">
				<!-- Section Title -->
				<div class="section-title item_bottom text-center">
					<div>
						<span class="fa fa-bar-chart-o fa-2x"></span>
					</div>
					<h1>My <span>Skills</span></h1>
				</div>
				<!-- End Section Title -->
			</div>
			<div class="row text-center item_bottom">
			@foreach($skill as $item)
				<div class="col-md-2">
					<div class="chart" data-percent="{{$item->percentage}}">
						<span class="percent">{{$item->percentage}}</span>
						<h4>{{$item->name}}</h4>
						<p>
							{{$item->description}}
						</p>
					</div>
				</div>
			@endforeach
			</div>
			<div class="row new-line item_bottom">
			@foreach($lskill as $item)
				<div class="col-md-4">
					<ul class="skillBar" style="margin-top:0;">
						<li>
							<div class="skillBg">
								<span data-width="{{$item->percentage}}"><strong>{{$item->name}} {{$item->percentage}}%</strong></span>
							</div>
						</li>
					</ul>
				</div>
			@endforeach
			</div>
			<!-- skills end -->
		</div>
	</section>
	<!-- End Skill Section -->
	<section class="fullwidth-section bg-callout">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 class="white padBottom killMargin">I am available for <strong>Freelancer</strong></h1>
					<a href="#contact" class="scroll btn btn-trans btn-border-w btn-large">Hire Me</a>&nbsp;&nbsp;<a
						class="btn btn-primary btn-lg" href="#"><i class="fa fa-download"></i> Download Resume</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Resume Section -->
	<section id="experience" class="section-content bg2">
		<div class="container">
			<div class="row">
				<!-- Section title -->
				<div class="section-title item_bottom text-center">
					<div>
						<span class="fa fa-book fa-2x"></span>
					</div>
					<h1>My <span>Resume</span></h1>
				</div>
				<!-- End Section title -->
			</div>
			<div class="row">
				<ul class="timeline list-unstyled">
					<!-- History Year -->
					<li class="title">Present</li>
					<li class="note item_right">
						<h4>Creative Agency</h4>
						<h5>Project Manager</h5>
						<p class="desc">
							Lorem Ipsum roin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis
							bibendum auctor, nisi elit consequat.
						</p>
						<span class="date">
							DEC 2013 to Present</span>
						<span class="arrow fa fa-play"></span>
					</li>
					<li class="note item_left">
						<h4>Infosys</h4>
						<h5>UI/UX Designer</h5>
						<p class="desc">
							Lorem Ipsum roin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis
							bibendum auctor, nisi elit consequat.
						</p>
						<span class="date">
							JUN 2012 to NOV 2013 </span>
						<span class="arrow fa fa-play"></span>
					</li>
					<li class="note item_right">
						<h4>Micro Web Planet</h4>
						<h5>Web Developer</h5>
						<p class="desc">
							Lorem Ipsum roin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis
							bibendum auctor, nisi elit consequat. Photoshop's version of Lorem Ipsum. Proin gravida nibh
							vel velit auctor aliquet. Aenean sollicitudin, quis bibendum auctor, nisi elit consequat.
						</p>
						<span class="date">
							Jan 2012 MAY 2012 </span>
						<span class="arrow fa fa-play"></span>
					</li>
					<li class="note item_left">
						<h4>Creative Solution</h4>
						<h5>Web Designer</h5>
						<p class="desc">
							Lorem Ipsum roin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis
							bibendum auctor, nisi elit consequat. Proin gravida nibh vel velit auctor aliquet. Aenean
							sollicitudin, lorem quis bibendum auctor, nisi elit consequat.
						</p>
						<span class="date">
							Jan 2011 to Dec 2012 </span>
						<span class="arrow fa fa-play"></span>
					</li>
					<!-- Education -->
					<li class="title">Education</li>
					<li class="note item_left">
						<h4>Master Degree of Computer Science</h4>
						<h5>Oxford University</h5>
						<p class="desc">
							This is Photoshop's version Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
						</p>
						<span class="date">
							2012 - 2013 </span>
						<span class="arrow fa fa-play"></span>
					</li>
					<li class="note item_right">
						<h4>Bechelor Degree of Computer Science</h4>
						<h5>Oxford University</h5>
						<p class="desc">
							Lorem Ipsum. This is Photoshop's version Lorem Ipsum. Proin gravida nibh vel velit auctor
							aliquet.
						</p>
						<span class="date">
							2007 - 2011 </span>
						<span class="arrow fa fa-play"></span>
					</li>
					<!-- Start icon -->
					<li class="start fa fa-bookmark"></li>
					<li class="clear"></li>
				</ul>
			</div>
		</div>
	</section>
	<!-- End Experience Timeline Section -->

	<!-- Clients Section -->
	<section id="clients" class="clients parallax" style="background-image: url({{asset('contents/website')}}/images/clients.jpg)">
		<div class="parallax-overlay">
			<div class="container">
				<div class="row">
					<!-- Section title -->
					<div class="section-title item_bottom text-center">
						<div>
							<span class="fa fa-users fa-2x"></span>
						</div>
						<h1 class="white">My <span>Clients</span></h1>
					</div>
					<!-- End Section title -->
				</div>

				<div class="row item_bottom">

					<h4 class="white">What my <strong>clients saying</strong></h4>

					<div
						class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">

						<div class="swiper-testimonial">

							<div class="swiper-wrapper">

								<!--First Slide-->
								<div class="swiper-slide">
									<p class="quote">"It’s easy to see the passion that the guys have for their work. He
										really care about making unique designs for their clients, and put in incredible
										effort to make the whole process a real pleasure."</p>
									<p class="author">Jak Doe</p>
									<p class="company">CEO <a href="#">@Intel</a></p>
								</div>

								<!--Second Slide-->
								<div class="swiper-slide">
									<p class="quote">"My website couldn’t look better after working with the him on the
										redesign. Now my site and corporate branding is outstanding! He is awesome."</p>
									<p class="author">John Doe</p>
									<p class="company">Manager <a href="#">@Web Planet</a></p>
								</div>

								<!--Third Slide-->
								<div class="swiper-slide">
									<p class="quote">"I am incredibly happy with the increased traffic my site has
										received since working with you! He is the best at this job."</p>
									<p class="author">Jane Doe</p>
									<p class="company">Owner <a href="#">@Creative Agency</a></p>
								</div>
							</div>
							<!--/ .swiper-wrapper -->
							<div class="pagination-testimonial"></div>
							<!--/ swiper slider pagination -->
						</div>
						<!--/ .swiper-testimonial -->
					</div>

				</div>
				<!--/ .row -->

				<div class="row new-line item_fade_in">
					<h4 class="white">Some of <strong>my clients</strong></h4>
					<div class="carrousel-container">
						<div id="left_scroll"><a href="#"></a></div>
						<div id="carousel_inner">
							<ul class="clearfix" id="carousel_ul">
								<li><span><img src="{{asset('contents/website')}}/images/clients/twitter.png" alt="Twitter"></span></li>
								<li><span><img src="{{asset('contents/website')}}/images/clients/magento.png" alt="magento"></span></li>
								<li><span><img src="{{asset('contents/website')}}/images/clients/mailchimp.png" alt="mailchimp"></span></li>
								<li><span><img src="{{asset('contents/website')}}/images/clients/nexternal.png" alt="nexternal"></span></li>
								<li><span><img src="{{asset('contents/website')}}/images/clients/wordpress.png" alt="wordpress"></span></li>
								<li><span><img src="{{asset('contents/website')}}/images/clients/google.png" alt="google"></span></li>
							</ul>
						</div>
						<div id="right_scroll"><a href="#"></a></div>
						<input type="hidden" id="hidden_auto_slide_seconds" value=0 />
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Clients Section -->


	<!-- Process Section -->
	<section id="process" class="section-content bg3">
		<div class="container">
			<div class="row">
				<!-- Section title -->
				<div class="section-title item_bottom text-center">
					<div>
						<span class="fa fa-cogs fa-2x"></span>
					</div>
					<h1 class="white">My <span>Process</span></h1>
				</div>
				<!-- End Section title -->

				<ol class="process-flow list-unstyled">
					<li class="active">
						<div class="process-node active">
							<i class="fa fa-comments"></i>
						</div>
						<h4>Discussion</h4>
						<p>Lorem Ipsum lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
						<div class="line">
							<div class="progress"></div>
						</div>
					</li>
					<li class="active">
						<div class="process-node active">
							<i class="fa fa-lightbulb-o"></i>
						</div>
						<h4>Idea</h4>
						<p>Lorem Ipsum lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
						<div class="line">
							<div class="progress"></div>
						</div>
					</li>
					<li class="active">
						<div class="process-node active">
							<i class="fa fa-desktop"></i>
						</div>
						<h4>Implementation</h4>
						<p>Lorem Ipsum lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
						<div class="line">
							<div class="progress"></div>
						</div>
					</li>
					<li class="active">
						<div class="process-node active">
							<i class="fa fa-flash"></i>
						</div>
						<h4>Review</h4>
						<p>Lorem Ipsum lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
						<div class="line">
							<div class="progress"></div>
						</div>
					</li>
					<li class="active">
						<div class="process-node active">
							<i class="fa fa-rocket"></i>
						</div>
						<h4>Deliver</h4>
						<p>Lorem Ipsum lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
					</li>
				</ol>
			</div>
		</div>
	</section>
	<!-- End Process Section -->

	<!-- Contact Section -->
	<section id="contact" class="section-content bg2">
		<div class="container">
			<div class="row">
				<!-- Section title -->
				<div class="section-title item_bottom text-center">
					<div>
						<span class="fa fa-envelope fa-2x"></span>
					</div>
					<h1>Get in <span>touch</span></h1>
				</div>
				<!-- End Section title -->
			</div>
			<div class="row item_fade_in">
				<div class="col-md-6 col-md-offset-3 text-center contact-block">
					<!-- Contact Details -->
					<i class="fa fa-map-marker fa-3x"></i>
					<p>
						12 Segun Bagicha, 10th Floor <br>
						Dhaka, Bangladesh
					</p>
					<p>
						+1 343-234-4343 <br />+0 243-243-4243
					</p>
					<!-- End Contact Details -->
					<!-- Social Icon -->
					<div class="social-icon">
						<a href="#"><i class="fa fa-facebook-square fa-3x"></i></a>
						<a href="#"><i class="fa fa-twitter-square fa-3x"></i></a>
						<a href="#"><i class="fa fa-google-plus-square fa-3x"></i></a>
						<a href="#"><i class="fa fa-linkedin-square fa-3x"></i></a>
						<a href="#"><i class="fa fa-pinterest-square fa-3x"></i></a>
						<a href="#"><i class="fa fa-vimeo-square fa-3x"></i></a>
					</div>
					<!-- End Social Icon -->
				</div>
			</div>
			<div class="row item_fade_in">
				<h4 class="text-center">Drop me a Line</h4>
				<div class="col-md-6 col-md-offset-3">
					<div class="form-respond text-center">
					</div>
                    <form method="POST" action="{{route('send_message')}}" name="contactform" id="" class="form  item_bottom" role="form">
                        @csrf
						<div class="form-group">
							<input type="text" name="name" id="name" class="form-control " placeholder="Name">
						</div>
						<div class="form-group">
							<input type="email" name="email" id="email" class="form-control  email" placeholder="Email">
						</div>
						<div class="form-group">
							<textarea name="message" id="message" class="form-control input-lg " rows="9" placeholder="Enter Message"></textarea>
						</div>
						<div class="form-group text-center">
							<input type="submit" id="contactForm_submit" class="btn btn-trans btn-border btn-full" value="Submit">
						</div>
					</form>
				</div>
			</div>
			<!-- End form contact -->
		</div>
	</section>
	<!-- End Contact Section -->
	<!-- Google maps -->
	<div id="map_canvas" class="item_fade_in">
	</div>
	<!-- End Google maps -->
@endsection
