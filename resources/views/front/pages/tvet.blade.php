@extends('front.app.layout')

@section('title')
	About Us
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
						<div class="title colordefault"><h4>Tvet</h4></div>

						<div class="grid_12 omega">
							<ul class="tabs">
								<li><a href="#t-1" class="active">About</a></li>
								<li><a href="#t-2" class="">Courses</a></li>
								<li><a href="#t-3" class="">Goal & Objective</a></li>
								<li><a href="#t-4" class="">Gallery</a></li>
							</ul><!-- tabs -->
							<ul class="tabs-content">
								<li id="t-1" class="active" style="display: list-item;">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sem dui, molestie vitae ornare tincidunt, semper non metus. Nulla sagittis porttitor varius. Vestibulum eleifend, lorem sit amet gravida accumsan, nisi est tempor risus, non suscipit lectus nunc sit amet nunc. Pellentesque iaculis sapien at lacus vulputate sodales et eget quam. Etiam tristique bibendum leo, quis sagittis urna tempus non.
								</li><!-- tab content -->
		
								<li id="t-2" class="" style="display: none;">
									
								 <h4>Courses</h4>	
									<ol>
										<li>Web Design</li>
										<li>Graphics Design</li>
										<li>Finance and Accounting</li>
										<li>Customer Support</li>
									</ol>
									
								</li>
		
								<li id="t-3" class="" style="display: none;">
									
									<h4>Goal:</h4> 
									Support students who passed minimum grade-V and are not in school for participation in basic life skills education and pre-vocational trade training for livelihood.
									
									<h4>Objective:</h4> 
									The objective of the Reaching Out- of -School Children (ROSC) Project for Bangladesh is to ensure quality primary education for all. To achieve the goal ROSC-phase 2 project is implementing Pre-Vocational Skills Training Program for the children 15+ years and who have completed primary education from the Shishu Kallayan Trust (SKT) of ROSC phase-1 to ensure their employment opportunities and better livelihood.
									
									<h4>Activities</h4> 
									
									<ol>
										<li>
											Survey and learner selection
										</li>
										<li>
											Trade selection
										</li>
										<li>
											Learner Registration
										</li>
										<li>
											Arrange training
										</li>
										<li>
											Training Evaluation
										</li>
										<li>
											Certificate distribution
										</li>
										<li>
											Counseling and Job placement
										</li>
									</ol>
									
									
									
								</li>
								
								<li id="t-4" class="" style="display: none;">
									<ul class="small_posts">
										<li class="clearfix">
											<a class="s_thumb float-shadow" href="">
												<img class="footer-img radi" width="200" height="200" src="/public/front/images/assets/thumb13.jpg" alt="#">
											</a>
											<a class="s_thumb float-shadow" href="">
												<img class="footer-img radi" width="200" height="200" src="/public/front/images/assets/thumb14.png" alt="#">
											</a>
											<a class="s_thumb float-shadow" href="">
												<img class="footer-img radi" width="200" height="200" src="/public/front/images/assets/thumb15.png" alt="#">
											</a>
											<a class="s_thumb float-shadow" href="">
												<img class="footer-img radi" width="200" height="200" src="/public/front/images/assets/thumb16.png" alt="#">
											</a>
											<a class="s_thumb float-shadow" href="">
												<img class="footer-img radi" width="200" height="200" src="/public/front/images/assets/thumb17.png" alt="#">
											</a>
											<a class="s_thumb float-shadow" href="">
												<img class="footer-img radi" width="200" height="200" src="/public/front/images/assets/thumb18.png" alt="#">
											</a>
											<a class="s_thumb float-shadow" href="">
												<img class="footer-img radi" width="200" height="200" src="/public/front/images/assets/thumb19.png" alt="#">
											</a>
											<a class="s_thumb float-shadow" href="">
												<img class="footer-img radi" width="200" height="200" src="/public/front/images/assets/thumb20.png" alt="#">
											</a>
											<a class="s_thumb float-shadow" href="">
												<img class="footer-img radi" width="200" height="200"  src="/public/front/images/assets/thumb17.png" alt="#">
											</a>
										</li>
										
									</ul>
								</li>
								
							</ul><!-- end tabs -->
						</div>
						
					</div>
				</div>
				
				
			</div>
			
			
			@include('front.partials.notice_bord')
			@include('front.partials.help_us')
			
@endsection
