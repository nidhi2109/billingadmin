@extends('layouts.default')

@section('content')
<style>
body{
	background:none !important;
}
</style>
<div class="row heading-bg">
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
	  <h5 class="txt-dark">Dashbord</h5>
	</div>
	<!-- Breadcrumb -->
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
	  <ol class="breadcrumb">
		<li><a href="/consumer/dashboard">Dashboard</a></li>
		<li><a href="#"><span>My Account</span></a></li>
		
	  </ol>
	</div>
	<!-- /Breadcrumb -->
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="panel panel-default card-view">
			<div class="panel-heading">
				<div class="pull-left">
					<h6 class="panel-title txt-dark">Account Detail</h6>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="panel-wrapper collapse in">
				<div class="panel-body">
					<p class="text-muted"></code></p>
					<div  class="tab-struct custom-tab-1 mt-40">
						<ul role="tablist" class="nav nav-tabs" id="myTabs_7">
							<li class="active" role="presentation"><a aria-expanded="true"  data-toggle="tab" role="tab" id="home_tab_7" href="#home_7">active</a></li>
							<li role="presentation" class=""><a  data-toggle="tab" id="profile_tab_7" role="tab" href="#profile_7" aria-expanded="false">inactive</a></li>
							<li class="dropdown" role="presentation">
								<a  data-toggle="dropdown" class="dropdown-toggle" id="myTabDrop_7" href="#" aria-expanded="false">Dropdown <span class="caret"></span></a>
								<ul id="myTabDrop_7_contents"  class="dropdown-menu">
									<li class=""><a  data-toggle="tab" id="dropdown_13_tab" role="tab" href="#dropdown_13" aria-expanded="true">@fat</a></li>
									<li class=""><a  data-toggle="tab" id="dropdown_14_tab" role="tab" href="#dropdown_14" aria-expanded="false">@mdo</a></li>
								</ul>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent_7">
							<div  id="home_7" class="tab-pane fade active in" role="tabpanel">
								<p>Lorem ipsum dolor sit amet, et pertinax ocurreret scribentur sit, eum euripidis assentior ei. In qui quodsi maiorum, dicta clita duo ut. Fugit sonet quo te. Ad vel quando causae signiferumque. Aperiam luptatum senserit eu vis, eu ius purto torquatos vituperatoribus.An nec fastidii eligendi molestiae.</p>
							</div>
							<div  id="profile_7" class="tab-pane fade" role="tabpanel">
								<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.</p>
							</div>
							<div id="dropdown_13" class="tab-pane fade " role="tabpanel">
								<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
							</div>
							<div id="dropdown_14" class="tab-pane fade" role="tabpanel">
								<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>						
</div>
@stop