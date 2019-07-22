@extends('layouts.admin')
@section('contents')
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">skill section</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">admin</a></li>
                        <li class="breadcrumb-item">skill</li>
                        <li class="breadcrumb-item active">add</li>
                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>

			<style>
				/* ---------- Skills Details ------------*/
				.chart {
					display: inline-block;
					height: 150px;
					margin-bottom: 50px;
					margin-top: 50px;
					position: relative;
					text-align: center;
					width: 80%;
					border: 1px solid black;
					/* border-radius: 50%; */
				}
				.chart canvas {
					left: 0;
					position: absolute;
					top: 0;
				}
				.percent {
					display: inline-block;
					line-height: 150px;
					z-index: 2;
					font-size:1.6em;
				}
				.percent:after {
					content: "%";
					font-size: 0.8em;
					margin-left: 0.1em;
				}
				.skillBar {
					margin-left: -40px;
					margin-top: 40px;
					text-align: left !important;
				}
				.skillBar li {
					list-style: none outside none;
				}
				.skillBar li:last-child span {
					margin-bottom: 0;
				}
				.skillBar li .skillBg {
					background: none repeat scroll 0 0 #CCCCCC;
					border-radius: 6px;
					margin-bottom: 20px;
				}
				.skillBar li span {
					border-radius: 0px 15px 15px 0px;
					-webkit-border-radius: 0px 15px 15px 0px;
					display: block;
					height: 36px;
					width: 0;
				}
				.skillBar li p {
					padding-bottom: 2px;
				}
				.skillBar li span {
					overflow: visible !important;
					position: relative;
				}
				.skillBar li span strong {
					color: #FFFFFF;
					display: block;
					left: 12px;
					line-height: 12px !important;
					position: absolute;
					top: 12px;
					white-space: nowrap;
				}
				.skillBar li span {
					background-color: #474D5D;
				}			
			</style>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
				
					<div class="row text-center item_bottom">
						<div class="col-md-6 m-auto">
							<div class="card">
								<div class="card-body">
									<div class="chart" data-percent="91">
										<span class="percent">91</span>
										<h2>Photoshop</h2>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										</p>
									</div>
									@if(Session::has('success'))
										<script>
										swal({title: 'Success!', text: 'Successfully done !', icon: 'success',timer:2000});
										</script>
									@endif
									<div class='row'>
										<div class='col-md-12 m-auto'>
											<div class='card'>
												<div class='card-body'>
													<form class='form p-t-20' enctype='multipart/form-data' method='POST' action="{{route('skill_add_fn')}}">
														@csrf
														<div class='form-group'>
															<div class='input-group'>
																<label for='name'>skill percent </label>
															</div>
															<div class='input-group'>
																<!-- <div class='input-group-addon'><i class='ti ti-pencil'></i></div> -->
																<input type='text' name='percentage' value='' class='form-control text-lower' id='exampleInputuname' placeholder='input'>
															</div>
														</div>
														<div class='form-group'>
															<div class='input-group'>
																<label for='name'>skill name </label>
															</div>
															<div class='input-group'>
																<!-- <div class='input-group-addon'><i class='ti ti-pencil'></i></div> -->
																<input type='text' name='name' value='' class='form-control text-lower' id='exampleInputuname' placeholder='input'>
															</div>
														</div>

														<div class='form-group'>
															<div class='input-group'>
																<label for='name'>description </label>
															</div>
															<div class='input-group'>
																<!-- <div class='input-group-addon'><i class='ti ti-pencil'></i></div> -->
																<!-- <input type='text' name='description' value='' class='form-control text-lower' id='exampleInputuname' placeholder='input'> -->
																
																<textarea type='text' style='height:150px;' name='description' value='' class='form-control text-lower' id='exampleInputuname' placeholder='input'></textarea>
																	
															</div>
														</div>
														
														<a href="{{route('skills')}}" class='btn btn-outline-primary text-capitalize waves-effect waves-light m-r-10'>all</a>
														<button type='submit' class='btn btn-outline-success text-capitalize waves-effect waves-light m-r-10'>add </button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                

                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>

@endsection
