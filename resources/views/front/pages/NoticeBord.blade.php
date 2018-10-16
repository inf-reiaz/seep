@extends('front.app.layout')

@section('title')
	Notice Bord
@endsection

@section('content')
			
			
			<div class="row clearfix">
				<div class="grid_12 omega posts righter">
					<div class="post_day mbf clearfix">
						<div class="title colordefault"><h4>Notice Bord</h4></div>

						<div class="grid_12 omega">
							<div class="">
								<h3> <a href="http://www.seep.org.bd/data/Tender%20for%20Microbus.pdf" target="_blank">Tender for Microbus</a> </h3>
								<h3> <a target="_blank" href="http://www.seep.org.bd/data/TENDER%20for%20Hiring%20PR%20Agency.pdf">TENDER for Hiring PR Agency for broadcasting Animation Film, TVC and Production of TV Talk Show</a> </h3>
								<h3> <a target="_blank" href="http://www.seep.org.bd/data/TENDER%20DOCUMENTS.pdf">Tender Documents for Civil Work of Drain Cleaning & Reconstruction, Waste Dispels and Field List Up.</a> </h3>
								<h3> <a target="_blank" href="http://www.seep.org.bd/data/TOR.pdf">ToR</a> </h3>
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			@include('front.partials.notice_bord')
			@include('front.partials.help_us')
			
@endsection
