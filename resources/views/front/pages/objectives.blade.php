@extends('front.app.layout')

@section('title')
	Objectives
@endsection

@section('content')
			
			
			<div class="row clearfix">
				<div class="grid_12 omega posts righter">
					<div class="post_day mbf clearfix">
						<div class="title colordefault"><h4>Objectives</h4></div>

						<!--<div class="grid_12 alpha relative">-->
						<!--	<a class="float-shadow" href="">-->
						<!--		<img src="/public/front/images/about_us.png" alt="">-->
						<!--	</a>-->
						<!--</div>-->

						<div class="grid_12 omega">
							<div class="">
								<h3> <a href=""> Objectives </a> </h3>
								
								<ol>
									<li>
										To improve laws relating to children in the light of the UNCRC.
									</li>
									<li>
										To work for better implementation of laws and policies relating to children.
									</li>
									<li>
										To make available appropriate services for children deprived of their right to survival and development, and ensure children’s participation.
									</li>
									<li>
										To empower parents and the community socio economically, so they can protect the rights of their children.
									</li>
									<li>
										To increase the capacity and sustainability of the organization, working towards the establishment of the rights of the children.
									</li>
								</ol>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			@include('front.partials.notice_bord')
			@include('front.partials.help_us')
			
@endsection
