@extends('front.app.layout')

@section('title')
	Executive Body
@endsection

@section('css')
<style>
	table {
	    font-family: arial, sans-serif;
	    border-collapse: collapse;
	    width: 100%;
	}
	
	td, th {
	    border: 1px solid #dddddd;
	    text-align: left;
	    padding: 8px;
	}
	
	tr:nth-child(even) {
	    background-color: #dddddd;
	}
</style>
@endsection

@section('content')
			
			
			<div class="row clearfix">
				<div class="grid_12 omega posts righter">
					<div class="post_day mbf clearfix">
						<div class="title colordefault"><h4>Executive Body</h4></div>

						<!--<div class="grid_12 alpha relative">-->
						<!--	<a class="float-shadow" href="">-->
						<!--		<img src="/public/front/images/about_us.png" alt="">-->
						<!--	</a>-->
						<!--</div>-->

						<div class="grid_12 omega">
							<div class="">
								<h3> <a href=""> Executive Body </a> </h3>
								<p>
									The General Secretary of the Executive Committee is the chief executive of the organization and also part of the executive committee having no voting rights- thus making the numbers of Executive Committee members 8. He/she acts as Coordinator by virtue of amendment brought into the organization's constitution in January 1998. Regular staff members are employed to implement the programmes and they report to the General Secretary and Coordinator. The Executive Committee sits every three months to review the progress of the programmes.
								</p>
																
																
								<table>
								  <tr>
								    <th><strong>Sl No</strong> </th>
								    <th><strong>Name</strong> </th>
								    <th><strong>Designation</strong> </th>
								    <th><strong>Date of Birth</strong> </th>
								    <th><strong>Profession</strong> </th>
								    <th><strong>On Board Since</strong> </th>
								  </tr>
								  
								  <tr>
								    <td>1</td>
								    <td>Roushanuzzaman</td>
								    <td>Chairperson</td>
								    <td>25.12.1951</td>
								    <td>Agriculture Porming</td>
								    <td>2013</td>
								  </tr>
								  
								  <tr>
								    <td>2</td>
								    <td>Bilkes Sultana</td>
								    <td>Vice-Chairperson</td>
								    <td>15.01.1968</td>
								    <td>Service Holder                                                                                                                                                                              </td>
								    <td>2013</td>
								  </tr>
								  
								  <tr>
								    <td>3</td>
								    <td>Md. Alamgir Kabir</td>
								    <td>Treasurer</td>
								    <td>01.10.1978</td>
								    <td>Service Holder</td>                                                                                                                                                                              </td>
								    <td>2015</td>
								  </tr>
								  
								  <tr>
								    <td>4</td>
								    <td>Romendranath Kundu</td>
								    <td>Member</td>
								    <td>10.10.1953</td>
								    <td>Businessman</td>                                                                                                                                                                              </td>
								    <td>2011</td>
								  </tr>
								  
								  <tr>
								    <td>5</td>
								    <td>Sahab Uddin Sathy</td>
								    <td>Member</td>
								    <td>03.01.1954</td>
								    <td>Service Holder</td>                                                                                                                                                                              </td>
								    <td>2013</td>
								  </tr>
								  
								  <tr>
								    <td>6</td>
								    <td>Rawshan Ara</td>
								    <td>Member</td>
								    <td>21.07.1958</td>
								    <td>House Wife</td>                                                                                                                                                                              </td>
								    <td>2015</td>
								  </tr>
								  
								  <tr>
								    <td>7</td>
								    <td>Shamsunnahar</td>
								    <td>Member</td>
								    <td>19.09.1968</td>
								    <td>House Wife</td>                                                                                                                                                                              </td>
								    <td>2011</td>
								  </tr>
								  
								  
								</table>

								
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			@include('front.partials.notice_bord')
			@include('front.partials.help_us')
			
@endsection
