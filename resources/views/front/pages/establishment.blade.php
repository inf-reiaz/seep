@extends('front.app.layout')

@section('title')
	Establishment
@endsection

@section('content')
			
			
			<div class="row clearfix">
				<div class="grid_12 omega posts righter">
					<div class="post_day mbf clearfix">
						<div class="title colordefault"><h4>Establishment</h4></div>

						<!--<div class="grid_12 alpha relative">-->
						<!--	<a class="float-shadow" href="">-->
						<!--		<img src="/public/front/images/about_us.png" alt="">-->
						<!--	</a>-->
						<!--</div>-->

						<div class="grid_12 omega">
							<div class="">
								<h3> <a href="">Establishment</a> </h3>
								<p>
									In 1985 a group of social workers established a private voluntary development organization to improve the condition of socially disadvantaged children in Bangladesh. The organization was named as “Social & Economic Enhancement Programme” (SEEP).
								</p>
								<p>
									Initially the organization was involved in charitable work like running feeding centres or distributing clothes for needy and malnourished children in times of disaster such as drought, floods or cold weather. In 1995, SEEP started to work with children in a slum in Section 6 in Mirpur, Dhaka. Almost simultaneously, it started working with the hard-core child labourers at Ward 5 of Dhaka City Corporation in Mirpur, who were involved in handlooms and embroidery work.
								</p>
								<p>
									These projects marked a change in strategy for SEEP as for the first time they sought to address some of the root causes of child poverty, realizing that its services need to provide long lasting and sustainable benefits, rather than temporary help. As its experience and capacity grew, SEEP gradually expanded its activities to different parts of the Dhaka city. In 1999, SEEP started advocacy for the realization of rights of disadvantaged children, working both through its community projects and in conjunction with local and national networks as required.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			@include('front.partials.notice_bord')
			@include('front.partials.help_us')
			
@endsection
