@extends('front.app.layout')

@section('title')
	General Body
@endsection

@section('content')
			
			
			<div class="row clearfix">
				<div class="grid_12 omega posts righter">
					<div class="post_day mbf clearfix">
						<div class="title colordefault"><h4>General Body</h4></div>

						<!--<div class="grid_12 alpha relative">-->
						<!--	<a class="float-shadow" href="">-->
						<!--		<img src="/public/front/images/about_us.png" alt="">-->
						<!--	</a>-->
						<!--</div>-->

						<div class="grid_12 omega">
							<div class="">
								<h3> <a href=""> General Body </a> </h3>
								<p>
									The General Body of SEEP consists of at least 21 members. The General Members elects 7 members of the Executive Committee for every two years period in the Annual General Meeting.
								</p>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			@include('front.partials.notice_bord')
			@include('front.partials.help_us')
			
@endsection
