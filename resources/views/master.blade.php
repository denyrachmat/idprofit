<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Rumah Sakit</title>
	<script src="{{ asset('js/jquery-2.1.3.min.js') }}" type="text/javascript"></script>
	<link href="{{ asset('css/metro.css') }}" rel="stylesheet">
	<link href="{{ asset('css/metro-icons.css') }}" rel="stylesheet">
	<link href="{{ asset('css/metro-responsive.css') }}" rel="stylesheet">
	<script src="{{ asset('js/metro.js') }}" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fullPage.css') }}" />
	<script src="{{ asset('js/jquery.fullPage.js') }}" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/component.css') }}" />
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				sectionsColor: ['#1a75ff', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
				 anchors: ['rumah', 'apasih-kami-itu', 'kami-ngasih-apa', 'siapa-sih-yang-ngerjain', 'nyari-kami-dimana'],
				menu: '#menu',
				scrollingSpeed: 1000
			});
		});
	</script>
</head>
<body>
<div id="st-container" class="auto-size">
	<div class="st-pusher">
		<div class="page-content">		  	
	  			<nav class="st-menu st-effect-14" id="menu-14">
                    <h2 class="icon icon-stack">Sidebar</h2>
                    <ul>
                        <li><a class="icon icon-data" href="#">Data Management</a></li>
                        <li><a class="icon icon-location" href="#">Location</a></li>
                        <li><a class="icon icon-study" href="#">Study</a></li>
                        <li><a class="icon icon-photo" href="#">Collections</a></li>
                        <li><a class="icon icon-wallet" href="#">Credits</a></li>
                    </ul>
                </nav>
                @yield('navbar')
                <div id="fullpage">
				    <div class="section">
						@yield('header')
					</div>
				    <div class="section">
				    	section about us
				    </div>
				    <div class="section">
				    	@yield('isi')
				    </div>
				    <div class="section">Section team</div>
				    <div class="section">Section about us</div>
				</div>	
				
		</div>
	</div>		
</div>
	<script src="{{ asset('js/sidebarEffects.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/classie.js') }}" type="text/javascript"></script>
</body>
</html>