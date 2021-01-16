<!DOCTYPE html>
<html lang="en">
<head>
	<title>The Wood Court - Cooming Soon</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{url('public/soon')}}/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('public/soon')}}/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('public/soon')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('public/soon')}}/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('public/soon')}}/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('public/soon')}}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{url('public/soon')}}/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="size1 bg0 where1-parent">
		<!-- Coutdown -->
		<div class="flex-c-m bg-img1 size2 where1 overlay1 where2 respon2" style="background-image: url('{{url('public/soon')}}/images/bg01.jpg');"></div>
		<!-- Form -->
		<div class="size3 flex-col-sb flex-w p-l-75 p-r-75 p-t-45 p-b-45 respon1">
			<div class="wrap-pic1">
				<img src="{{url('public/soon')}}/images/icons/logo.png" alt="LOGO">
			</div>

			<div class="p-t-50 p-b-60">
				<p class="m1-txt1">
					Our website is <span class="m1-txt2">Coming Soon</span>, Stay Tuned!
				</p>
				<p class="s2-txt3 p-t-18">
					It's going to be great! Follow us on social media to stay updated!
					<br><br>
					Contact us at <a href="mailto:Info@thewoodcourt.com">Info@thewoodcourt.com</a> if you have any questions
				</p>
			</div>

			<div class="flex-w">
				<a href="https://www.facebook.com/thewoodcourt/" class="flex-c-m size5 bg3 how1 trans-04 m-r-5">
					<i class="fa fa-facebook"></i>
				</a>
			</div>
		</div>
	</div>





<!--===============================================================================================-->
	<script src="{{url('public/soon')}}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="{{url('public/soon')}}/vendor/bootstrap/js/popper.js"></script>
	<script src="{{url('public/soon')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{{url('public/soon')}}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="{{url('public/soon')}}/vendor/countdowntime/moment.min.js"></script>
	<script src="{{url('public/soon')}}/vendor/countdowntime/moment-timezone.min.js"></script>
	<script src="{{url('public/soon')}}/vendor/countdowntime/moment-timezone-with-data.min.js"></script>
	<script src="{{url('public/soon')}}/vendor/countdowntime/countdowntime.js"></script>
	<script>
		$('.cd100').countdown100({
			/*Set Endtime here*/
			/*Endtime must be > current time*/
			endtimeYear: 0,
			endtimeMonth: 0,
			endtimeDate: 35,
			endtimeHours: 18,
			endtimeMinutes: 0,
			endtimeSeconds: 0,
			timeZone: ""
			// ex:  timeZone: "America/New_York"
			//go to " http://momentjs.com/timezone/ " to get timezone
		});
	</script>
<!--===============================================================================================-->
	<script src="{{url('public/soon')}}/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{url('public/soon')}}/js/main.js"></script>

</body>
</html>
