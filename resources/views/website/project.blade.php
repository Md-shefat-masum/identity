@extends('layouts.website')
@section('contents')
<div id="portfolio-ajax" style="margin:100px 0px;"><div class="single-portfolio">
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
          </div></div>
@endsection
