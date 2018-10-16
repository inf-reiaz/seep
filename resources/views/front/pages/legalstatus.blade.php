@extends('front.app.layout')

@section('title')
	Legal Status
@endsection

@section('content')
			
			
			<div class="row clearfix">
				<div class="grid_12 omega posts righter">
					<div class="post_day mbf clearfix">
						<div class="title colordefault"><h4>Legal Status</h4></div>

						<!--<div class="grid_12 alpha relative">-->
						<!--	<a class="float-shadow" href="">-->
						<!--		<img src="/public/front/images/about_us.png" alt="">-->
						<!--	</a>-->
						<!--</div>-->

						<div class="grid_12 omega">
							<div class="">
								<h3> <a href=""> Legal Status</a> </h3>
								
								<p>In 1985 a group of social workers established a private voluntary development organization to improve the condition of socially disadvantaged children in Bangladesh. The organization was named as “Social & Economic Enhancement Programme” (SEEP).</p>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			@include('front.partials.notice_bord')
			@include('front.partials.help_us')
			
@endsection
