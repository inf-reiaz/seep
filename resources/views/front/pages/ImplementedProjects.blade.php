@extends('front.app.layout')

@section('title')
	Implemented Projects
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
						<div class="title colordefault"><h4>Implemented Projects</h4></div>

						<!--<div class="grid_12 alpha relative">-->
						<!--	<a class="float-shadow" href="">-->
						<!--		<img src="/public/front/images/about_us.png" alt="">-->
						<!--	</a>-->
						<!--</div>-->

						<div class="grid_12 omega">
							<div class="">
								<h3> <a href="">Implemented Projects</a> </h3>
								
								
								<table border="1" align="center" cellpadding="5" cellspacing="0" style="border-collapse:collapse">
      <tbody><tr>
        <td width="37"><p>Sl. No.</p></td>
        <td width="143"><p>Project Name</p></td>
        <td width="70"><p>Duration</p></td>
        <td width="111"><p>Donor</p></td>
        <td width="192"><p>Project Location</p></td>
        <td width="90"><p># of Project Participants</p></td>
      </tr>
      <tr>
        <td width="37"><p>01</p></td>
        <td width="143"><p>Adult Literacy and Parenting Programme</p></td>
        <td width="70"><p>1985 to 1987</p></td>
        <td width="111"><p>SEEP’s own fund</p></td>
        <td width="192"><p>Shalgaria of Pabna</p></td>
        <td width="90"><p align="center">60</p></td>
      </tr>
      <tr>
        <td width="37"><p>02</p></td>
        <td width="143"><p>Education Programme for Disadvantaged Children</p></td>
        <td width="70"><p>1985 to 1987</p></td>
        <td width="111"><p>Family Planning Association of Bangladesh and Local Contribution</p></td>
        <td width="192"><p>Laxmipur of Ghoshpur, Char Baghbaria, Char Hemayetpur,    Kismot Protappur and Ramchandrapur Sweeper Colony in Pabna Municipal Area</p></td>
        <td width="90"><p align="center">150</p></td>
      </tr>
      <tr>
        <td width="37"><p>03</p></td>
        <td width="143"><p>Education Programme for Working Children (EPWC)</p></td>
        <td width="70"><p>1995 to 1996</p></td>
        <td width="111"><p>ILO/IPEC</p></td>
        <td width="192"><p>Mirpur-6, Ward # 06 of Dhaka City Corporation</p></td>
        <td width="90"><p align="center">300</p></td>
      </tr>
      <tr>
        <td width="37"><p>04</p></td>
        <td width="143"><p>Development Programme for Street and Slum Children (DPSSC)</p></td>
        <td width="70"><p>1996 to 1997</p></td>
        <td width="111"><p>TdH- Netherlands</p></td>
        <td width="192"><p>Mirpur-6, Ward # 06 of Dhaka City Corporation</p></td>
        <td width="90"><p align="center">150</p></td>
      </tr>
      <tr>
        <td width="37"><p>05</p></td>
        <td width="143"><p>Development Programme for Slum Children (DPSC)</p></td>
        <td width="70"><p>1996 to 1999</p></td>
        <td width="111"><p>TdH- Netherlands</p></td>
        <td width="192"><p>Mirpur-6, Ward # 06 of Dhaka City Corporation</p></td>
        <td width="90"><p align="center">150</p></td>
      </tr>
      <tr>
        <td width="37"><p>06</p></td>
        <td width="143"><p>Education Programme for Working Children (EPWC)</p></td>
        <td width="70"><p>1997 to 1998</p></td>
        <td width="111"><p>ILO/IPEC</p></td>
        <td width="192"><p>Mirpur-10 &amp; 11, Ward # 03 &amp; 05 of Dhaka City    Corporation</p></td>
        <td width="90"><p align="center">240</p></td>
      </tr>
      <tr>
        <td width="37"><p>07</p></td>
        <td width="143"><p>Protection of Child Rights of the Child Labourers (PCRCL)</p></td>
        <td width="70"><p>2000 to 2002</p></td>
        <td width="111"><p>Save the Children Sweden</p></td>
        <td width="192"><p>Mirpur-11, Ward # 05 of Dhaka City Corporation</p></td>
        <td width="90"><p align="center">240</p></td>
      </tr>
      <tr>
        <td width="37"><p>08</p></td>
        <td width="143"><p>Development Programme for the Child Labourers through    Alternative Training (DPCLAT)</p></td>
        <td width="70"><p>2000 to 2002</p></td>
        <td width="111"><p>Save the Children Denmark</p></td>
        <td width="192"><p>Mirpur-10, Ward # 03 of Dhaka City Corporation</p></td>
        <td width="90"><p align="center">300</p></td>
      </tr>
      <tr>
        <td width="37"><p>09</p></td>
        <td width="143"><p>Worst Form of Child Labour (WFCL)</p></td>
        <td width="70"><p>2001 to 2003</p></td>
        <td width="111"><p>ILO/IPEC</p></td>
        <td width="192"><p>Dhaka Mach&nbsp; Area, Shaympur, Kadamtoli, Ward # 87 &amp;    88 of Dhaka City Corporation</p></td>
        <td width="90"><p align="center">300</p></td>
      </tr>
      <tr>
        <td width="37"><p>10</p></td>
        <td width="143"><p>Development Programme for the Child Labourers through    Alternative Training (DPCLAT)</p></td>
        <td width="70"><p>2003 to 2007</p></td>
        <td width="111"><p>Save the Children Sweden-Denmark</p></td>
        <td width="192"><p>Mirpur-10 &amp; 11, Ward # 03 &amp; 05 of Dhaka City    Corporation</p></td>
        <td width="90"><p align="center">300</p></td>
      </tr>
      <tr>
        <td width="37"><p>11</p></td>
        <td width="143"><p>Development Programme for the Child Labourers through    Alternative Training (DPCLAT)</p></td>
        <td width="70"><p>2008 to 2010</p></td>
        <td width="111"><p>Save the Children Sweden-Denmark</p></td>
        <td width="192"><p>Mirpur-10 &amp; 11, Ward # 03 &amp; 05 of Dhaka City    Corporation</p></td>
        <td width="90"><p align="center">300</p></td>
      </tr>
    </tbody></table>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			@include('front.partials.notice_bord')
			@include('front.partials.help_us')
			
@endsection
