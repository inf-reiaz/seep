
<!DOCTYPE html>
<html>
	
<head>
	@include('front.partials._head')
</head>

<body>
	
	<div id="layout" class="boxed-margin">

		<header id="header">
			
			@include('front.navs.top')

			@include('front.navs.main')
			
		</header>


		<div class="page-content">
			
			@include('front.partials.slider')
			
			@yield('content')
			
		</div>

	@include('front.footer.footer')	

	</div>

	@include('front.partials.js')
		
</body>
</html>