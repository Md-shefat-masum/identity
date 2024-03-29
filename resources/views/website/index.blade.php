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
                            <img height="200px" src="{{asset('uploads')}}/{{$item->image}}" alt="{{$item->category}}" />
                            <div class="overlay">
                                <div class="item-info">
                                    <a href="{{asset('uploads')}}/{{$item->image}}" data-lightbox="Graphics Design"
                                        title="Graphics"><i class="fa fa-search-plus"></i>
                                    </a>
                                    <h3>{{$item->description}}</h3>
                                    <span>{{$item->category}}</span>
                                </div>
                            </div>
								<!-- End .overlay -->
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
                    class="btn btn-primary btn-lg" target="_blank" href="{{asset('')}}{{$cv}}"><i class="fa fa-download"></i> Download Resume</a>
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
                    @php
                        $i=0;
                        $l;
                    @endphp

                    @foreach ($resumecat as $cat)
                        <li class="title">{{$cat->name}}</li>

                        @php
                            $data=App\myresume::where('section_name',$cat->name)->get();
                        @endphp
                        @foreach ($data as $item)
                        <li class="note item_right">
                            <h4>{{$item->course_heading}}</h4>
                            <h5>{{$item->course_sub_heading}} Manager</h5>
                            <p class="desc">
                                {{$item->course_details}}
                            </p>
                            <span class="date">
                                {{$item->start_date}} to {{$item->end_date}}</span>
                            <span class="arrow fa fa-play"></span>
                        </li>
                        @endforeach
                    @endforeach

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
                                @foreach ($client as $client)
                                    <div class="swiper-slide">
                                        <p class="quote">"{{$client->comment}}"</p>
                                        <p class="author">{{$client->name}}</p>
                                        <p class="company">Contact: <a href="{{$client->occupation}}">{{$client->occupation}}</a></p>
                                    </div>
                                @endforeach
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
                                @foreach ($partner as $partner)
                                    <li><span><img src="{{asset('')}}{{$partner->image}}" alt="Twitter"></span></li>
                                @endforeach
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
                    @foreach ($process as $process)
                        <li class="active">
                            <div class="process-node active">
                                <i class="{{$process->icon}}"></i>
                            </div>
                            <h4>{{$process->name}}</h4>
                            <p>{{$process->description}}</p>
                            <div class="line">
                                <div class="progress"></div>
                            </div>
                        </li>
                    @endforeach
					<li class="active">
						<div class="process-node active">
							<i class="fa fa-rocket"></i>
						</div>
						<h4>Deliver</h4>
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
                            {{$aboutme->address}}
					</p>
					<p>
                            {{$aboutme->phone}}
					</p>
					<!-- End Contact Details -->
					<!-- Social Icon -->
					<div class="social-icon">
                        @foreach ($social as $social)
                            <a href="{{$social->link}}"><i class="{{$social->icon}} fa-3x"></i></a>
                        @endforeach

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
	{{-- <div id="map_canvas" class="item_fade_in">
	</div> --}}
	<!-- End Google maps -->
@endsection
