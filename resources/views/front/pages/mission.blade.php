@extends('front.app.layout')

@section('title')
	Mission
@endsection

@section('css')

	<style type="text/css">
		
	    .vis{
			display: inline;
			margin-left: 10px !important;
			position: absolute;
			margin-top: 10px !important;
			font-size: 25px !important;
	    }
	    
	</style>
	
@endsection

@section('content')
			
			
			<div class="row clearfix">
				
				<div class="grid_4">

					<div class="grid_12 omega posts righter">
						<div class="post_day mbf clearfix">
							<div class="title colordefault"><h4>History</h4></div>

							<div class="grid_12 alpha relative">
								<a class="float-shadow" href="">
									<img src="/public/front/images/assets/seep_1.jpg" alt="">
								</a>
							</div>

							<div class="grid_12 omega">
								<div class="">
									<h3> <a href="">SEEP</a> </h3>
									<p>
										The Social and Economic Enhancement Programme- SEEP is a Private Voluntary Development Organization, which was established by a group of social workers in 1985 in order to improve the condition of socially disadvantaged children in Bangladesh.Initially the organization was involved in charitable work like running feeding centers, or doling out clothes for needy and malnourished children
									</p>
									<p><a href="">read more</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="grid_8 omega posts righter">
					<div class="post_day mbf clearfix">
						<div class="title colordefault">
							<img src="/public/front/images/article.gif" alt="" style="display: inline;" >
							<h4  class="vis">Mission</h4>
						</div>
						<div class="grid_12 omega">
							<div class="">
								<h3> <a href=""> Mission </a> </h3>
								<p>
									SEEP works for the empowerment and participation of disadvantaged and victim children in Bangladesh (both boys and girls, including children with different abilities), and their parents and community, so that they can protect and promote child rights. 
								</p>
								<p>
									SEEP also works in collaboration with like-minded groups and organizations towards the enactment and reformation of policy and laws, and their proper implementation at local and national level, in order to ensure the rights of children on the basis of UNCRC.
								</p>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			@include('front.partials.notice_bord')
			@include('front.partials.help_us')
			
@endsection
