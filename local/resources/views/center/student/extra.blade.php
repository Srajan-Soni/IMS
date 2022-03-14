<!DOCTYPE html>

<html lang="en">

<head>
		<title>Extra Charges</title>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: GOOGLE FONTS -->
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<!-- end: GOOGLE FONTS -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="{{Asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{Asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{Asset('bower_components/themify-icons/themify-icons.css')}}">
		<link rel="stylesheet" href="{{Asset('bower_components/flag-icon-css/css/flag-icon.min.css')}}">
		<link rel="stylesheet" href="{{Asset('bower_components/animate.css/animate.min.css')}}">
		<link rel="stylesheet" href="{{Asset('bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css')}}">
		<link rel="stylesheet" href="{{Asset('bower_components/switchery/dist/switchery.min.css')}}">
		<link rel="stylesheet" href="{{Asset('bower_components/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css')}}">
		<link rel="stylesheet" href="{{Asset('bower_components/ladda/dist/ladda-themeless.min.css')}}">
		<link rel="stylesheet" href="{{Asset('bower_components/slick.js/slick/slick.css')}}">
		<link rel="stylesheet" href="{{Asset('bower_components/slick.js/slick/slick-theme.css')}}">
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: Packet CSS -->
		<link rel="stylesheet" href="{{Asset('assets/css/styles.css')}}">
		<link rel="stylesheet" href="{{Asset('assets/css/plugins.css')}}">
		<link rel="stylesheet" href="{{Asset('assets/css/themes/lyt1-theme-1.css')}}" id="skin_color">
		<!-- end: Packet CSS -->
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico" />
		<?php include_once("date.php"); ?>
	</head>
	<!-- end: HEAD -->
	<body>
		<div id="app">
			<!-- sidebar -->
			{!!View('center.menu') !!}
			<!-- / sidebar -->
			<div class="app-content">
				<!-- start: TOP NAVBAR -->
				<header class="navbar navbar-default navbar-static-top">
					<!-- start: NAVBAR HEADER -->
					{!!View('center.nav')!!}
					<!-- end: NAVBAR HEADER -->
					<!-- start: NAVBAR COLLAPSE -->
					{!!View('center.top')!!}
					<!-- end: NAVBAR COLLAPSE -->
				</header>
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: BREADCRUMB -->
						<div class="breadcrumb-wrapper">
							<h4 class="mainTitle no-margin"><i class="fa fa-money"></i> Extra Charges</h4>

							<ul class="pull-right breadcrumb">
								<li>
									<a href="{{Asset('center/home')}}"><i class="fa fa-home margin-right-5 text-large text-dark"></i>Home</a>
								</li>
								<li>
									<i class="fa fa-graduation-cap"></i> Student
								</li>
							</ul>
						</div>

						@if (count($errors) > 0)
						<div class="alert alert-danger">
						<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
						</ul>
						</div><br>
						@endif

						@if(Session::has('message'))
						<Br><p class="text-center list-group-item list-group-item-success">{{ Session::get('message') }}</p>
						@endif


						<!-- end: BREADCRUMB -->
						<!-- start: FEATURED BOX LINKS -->

						<div class="container-fluid container-fullw">
						<div class="row">
						<div class="col-md-12">
						<div class="panel panel-white">
						<div class="panel-body">
						<h5 class="over-title"><i class="fa fa-plus"></i> Add New</h5>
						<form action="{!! Asset('center/student/extraCharge/'.$res->id) !!}" method="post" class="form-login">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="row">
						<div class="col-md-10">
						<fieldset>
						<legend>
						Details
						</legend>
						<div class="form-group">
						<label>Narration <span class="symbol required"></span> </label>
						<div class="form-group">
						<input type="text"  name="narration" id="name" class="form-control" required value="{{old('narration')}}">
						</div>
						</div>

						<div class="form-group">
						<label>Amount <span class="symbol required"></span> </label>
						<div class="form-group">
						<input type="text"  name="amount" id="last_name" class="form-control" required value="{{old('amount')}}">
						</div>
						</div>


						<div class="form-group">
						<label> Date Added <span class="symbol required"></span></label>
						<div class="form-group">
						<input type="text"  name="date_added" id="datepicker2" class="form-control"  value="{{old('date_added')}}">
						</div>
						</div>

						<div class="form-group">
						<div class="form-group">
						<button type="submit" class="btn btn-wide btn-success">Save</button>

						</div>
						</div>

						<table class="table table-striped table-bordered table-hover table-full-width" id="sample_4">
						<tr>
						<td><b>Narration</b></td>
						<td><b>Amount</b></td>
						<td><b>Date Added</b></td>
						<td><b>Option</b></td>
						</tr>
						<?php foreach($fees as $fee)
						{
							$d 		= strtotime($fee->date_added);
							$dd 	= date("d-M-y", $d);


						?>
						<tr>
						<td width="25%"><b>{{$fee->naration}}</b></td>
						<td  width="25%">Rs.{{$fee->amount}}</td>
						<td  width="25%">{{$dd}}</td>
						<td  width="25%"><a href="{{Asset('center/student/extraCharge/'.$fee->id.'/'.$res->id)}}" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
						
						<a href="{{Asset('center/student/deleteCharge/'.$fee->id.'/'.$res->id)}}" class="btn btn-danger" onclick="return confirm('Are You Sure ?')"><i class="fa fa-trash"></i> Delete</a>
						
						</td>
						</tr>

						<?php } ?>

						</table>
						<a href="{{Asset('center/student/view/'.$res->id)}}" class="btn btn-info" style="float:right;"><i class="fa fa-eye"></i> View All Detail</a>
						</fieldset>
						</form>
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
			<!-- start: FOOTER -->
			{!!View('center.footer')!!}
			<!-- end: FOOTER -->

		</div>
		<!-- start: MAIN JAVASCRIPTS -->

		<script src="{{Asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
		<script src="{{Asset('bower_components/components-modernizr/modernizr.js')}}"></script>
		<script src="{{Asset('bower_components/js-cookie/src/js.cookie.js')}}"></script>
		<script src="{{Asset('bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js')}}"></script>
		<script src="{{Asset('bower_components/jquery-fullscreen/jquery.fullscreen-min.js')}}"></script>
		<script src="{{Asset('bower_components/switchery/dist/switchery.min.js')}}"></script>
		<script src="{{Asset('bower_components/jquery.knobe/dist/jquery.knob.min.js')}}"></script>
		<script src="{{Asset('bower_components/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js')}}"></script>
		<script src="{{Asset('bower_components/slick.js/slick/slick.min.js')}}"></script>
		<script src="{{Asset('bower_components/jquery-numerator/jquery-numerator.js')}}"></script>
		<script src="{{Asset('bower_components/ladda/dist/spin.min.js')}}"></script>
		<script src="{{Asset('bower_components/ladda/dist/ladda.min.js')}}"></script>
		<script src="{{Asset('bower_components/ladda/dist/ladda.jquery.min.js')}}"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="{{Asset('bower_components/Chart-js/Chart.min.js')}}"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: Packet JAVASCRIPTS -->
		<script src="{{Asset('assets/js/letter-icons.js')}}"></script>
		<script src="{{Asset('assets/js/main.js')}}"></script>
		<!-- end: Packet JAVASCRIPTS -->
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="{{Asset('assets/js/index.js')}}"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Index.init();
			});
		</script>

		<!-- end: JavaScript Event Handlers for this page -->
	</body>


</html>
