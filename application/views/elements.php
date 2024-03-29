
<div class="ace-settings-container" id="ace-settings-container">
	<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
		<i class="ace-icon fa fa-cog bigger-130"></i>
	</div>

	<div class="ace-settings-box clearfix" id="ace-settings-box">
		<div class="pull-left width-50">
			<div class="ace-settings-item">
				<div class="pull-left">
					<select id="skin-colorpicker" class="hide">
						<option data-skin="no-skin" value="#438EB9">#438EB9</option>
						<option data-skin="skin-1" value="#222A2D">#222A2D</option>
						<option data-skin="skin-2" value="#C6487E">#C6487E</option>
						<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
					</select>
				</div>
				<span>&nbsp; Choose Skin</span>
			</div>

			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
				<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
			</div>

			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
				<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
			</div>

			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
				<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
			</div>

			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
				<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
			</div>

			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
				<label class="lbl" for="ace-settings-add-container">
					Inside
					<b>.container</b>
				</label>
			</div>
		</div><!-- /.pull-left -->

		<div class="pull-left width-50">
			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
				<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
			</div>

			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
				<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
			</div>

			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
				<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
			</div>
		</div><!-- /.pull-left -->
	</div><!-- /.ace-settings-box -->
</div><!-- /.ace-settings-container -->

<div class="page-header">
	<h1>
		UI Elements
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			Common UI Features &amp; Elements
		</small>
	</h1>
</div><!-- /.page-header -->

<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<div class="row">
			<div class="col-sm-6">
				<div class="tabbable">
					<ul class="nav nav-tabs" id="myTab">
						<li class="active">
							<a data-toggle="tab" href="#home">
								<i class="green ace-icon fa fa-home bigger-120"></i>
								Home
							</a>
						</li>

						<li>
							<a data-toggle="tab" href="#messages">
								Messages
								<span class="badge badge-danger">4</span>
							</a>
						</li>

						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								Dropdown &nbsp;
								<i class="ace-icon fa fa-caret-down bigger-110 width-auto"></i>
							</a>

							<ul class="dropdown-menu dropdown-info">
								<li>
									<a data-toggle="tab" href="#dropdown1">@fat</a>
								</li>

								<li>
									<a data-toggle="tab" href="#dropdown2">@mdo</a>
								</li>
							</ul>
						</li>
					</ul>

					<div class="tab-content">
						<div id="home" class="tab-pane fade in active">
							<p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
						</div>

						<div id="messages" class="tab-pane fade">
							<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
						</div>

						<div id="dropdown1" class="tab-pane fade">
							<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
						</div>

						<div id="dropdown2" class="tab-pane fade">
							<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.</p>
						</div>
					</div>
				</div>
			</div><!-- /.col -->

			<div class="vspace-6-sm"></div>

			<div class="col-sm-6">
				<div class="tabbable tabs-below">
					<div class="tab-content">
						<div id="home2" class="tab-pane in active">
							<p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
						</div>

						<div id="profile2" class="tab-pane">
							<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
						</div>

						<div id="dropdown12" class="tab-pane">
							<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
						</div>
					</div>

					<ul class="nav nav-tabs" id="myTab2">
						<li class="active">
							<a data-toggle="tab" href="#home2">Home</a>
						</li>

						<li>
							<a data-toggle="tab" href="#profile2">Profile</a>
						</li>

						<li>
							<a data-toggle="tab" href="#dropdown12">More</a>
						</li>
					</ul>
				</div>
			</div>
		</div><!-- /.row -->

		<div class="space"></div>

		<div class="row">
			<div class="col-sm-6">
				<div class="tabbable tabs-left">
					<ul class="nav nav-tabs" id="myTab3">
						<li class="active">
							<a data-toggle="tab" href="#home3">
								<i class="pink ace-icon fa fa-tachometer bigger-110"></i>
								Home
							</a>
						</li>

						<li>
							<a data-toggle="tab" href="#profile3">
								<i class="blue ace-icon fa fa-user bigger-110"></i>
								Profile
							</a>
						</li>

						<li>
							<a data-toggle="tab" href="#dropdown13">
								<i class="ace-icon fa fa-rocket"></i>
								More
							</a>
						</li>
					</ul>

					<div class="tab-content">
						<div id="home3" class="tab-pane in active">
							<p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
							<p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
						</div>

						<div id="profile3" class="tab-pane">
							<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
							<p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
						</div>

						<div id="dropdown13" class="tab-pane">
							<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
							<p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
						</div>
					</div>
				</div>
			</div><!-- /.col -->

			<div class="vspace-6-sm"></div>

			<div class="col-sm-6">
				<div class="tabbable">
					<ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
						<li class="active">
							<a data-toggle="tab" href="#home4">Home</a>
						</li>

						<li>
							<a data-toggle="tab" href="#profile4">Profile</a>
						</li>

						<li>
							<a data-toggle="tab" href="#dropdown14">More</a>
						</li>
					</ul>

					<div class="tab-content">
						<div id="home4" class="tab-pane in active">
							<p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
						</div>

						<div id="profile4" class="tab-pane">
							<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
						</div>

						<div id="dropdown14" class="tab-pane">
							<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
						</div>
					</div>
				</div>
			</div><!-- /.col -->
		</div><!-- /.row -->

		<div class="hr hr-double hr-dotted hr18"></div>

		<div class="row">
			<div class="col-sm-6">
				<h3 class="row header smaller lighter blue">
					<span class="col-xs-6"> Accordion </span><!-- /.col -->

					<span class="col-xs-6">
						<span class="pull-right inline">
							<span class="grey smaller-80 bolder">style:</span>

							<span class="btn-toolbar inline middle no-margin">
								<span id="accordion-style" data-toggle="buttons" class="btn-group no-margin">
									<label class="btn btn-xs btn-yellow active">
										<input type="radio" value="1" />
										1
									</label>

									<label class="btn btn-xs btn-yellow">
										<input type="radio" value="2" />
										2
									</label>
								</span>
							</span>
						</span>
					</span><!-- /.col -->
				</h3>

				<div id="accordion" class="accordion-style1 panel-group">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
									<i class="ace-icon fa fa-angle-down bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
									&nbsp;Group Item #1
								</a>
							</h4>
						</div>

						<div class="panel-collapse collapse in" id="collapseOne">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
									<i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
									&nbsp;Group Item #2
								</a>
							</h4>
						</div>

						<div class="panel-collapse collapse" id="collapseTwo">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
									<i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
									&nbsp;Group Item #3
								</a>
							</h4>
						</div>

						<div class="panel-collapse collapse" id="collapseThree">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.col -->

			<div class="col-sm-6">
				<h3 class="header smaller lighter green">Progress Bar</h3>

				<div class="row">
					<div class="col-xs-8">
						<div class="progress pos-rel" data-percent="66%">
							<div class="progress-bar" style="width:66%;"></div>
						</div>

						<div class="progress progress-striped pos-rel">
							<div class="progress-bar progress-bar-success" style="width: 25%;"></div>
						</div>

						<div class="progress progress-small progress-striped active">
							<div class="progress-bar progress-bar-warning" style="width: 40%;"></div>
						</div>

						<div class="progress progress-mini">
							<div class="progress-bar progress-danger" style="width: 35%;"></div>
						</div>

						<div class="progress">
							<div class="progress-bar progress-bar-success" style="width: 35%;"></div>

							<div class="progress-bar progress-bar-warning" style="width: 20%;"></div>

							<div class="progress-bar progress-bar-danger" style="width: 10%;"></div>
						</div>

						<div class="progress progress-striped">
							<div class="progress-bar progress-bar-purple" style="width: 65%"></div>
						</div>

						<div class="progress progress-striped">
							<div class="progress-bar progress-bar-pink" style="width: 40%"></div>
						</div>

						<div class="progress progress-striped active">
							<div class="progress-bar progress-bar-yellow" style="width: 60%"></div>
						</div>

						<div class="progress progress-striped">
							<div class="progress-bar progress-bar-inverse" style="width: 80%"></div>
						</div>
					</div><!-- /.col -->

					<div class="col-xs-4 center">
						<div class="easy-pie-chart percentage" data-percent="20" data-color="#D15B47">
							<span class="percent">20</span>%
						</div>

						<hr />
						<div class="easy-pie-chart percentage" data-percent="55" data-color="#87CEEB">
							<span class="percent">55</span>%
						</div>

						<hr />
						<div class="easy-pie-chart percentage" data-percent="90" data-color="#87B87F">
							<span class="percent">90</span>%
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.col -->
		</div><!-- /.row -->

		<hr />
		<div class="row">
			<div class="col-sm-6">
				<div class="widget-box">
					<div class="widget-header">
						<h4 class="smaller">
							Tooltips
							<small>different directions and colors</small>
						</h4>
					</div>

					<div class="widget-body">
						<div class="widget-main">
							<p class="muted">
								Tight pants next level keffiyeh
								<a title="Default tooltip" data-rel="tooltip" href="#">you probably</a>
								haven't heard of them. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel
								<a title="Another tooltip" data-rel="tooltip" href="#">have a</a>
								terry richardson vinyl chambray. A really ironic artisan
								<a data-rel="tooltip" href="#" data-original-title="Another one here too">whatever</a>
								keytar, scenester farm-to-table banksy Austin
								<a title="The last tip!" data-rel="tooltip" href="#">twitter</a>
								handle.
							</p>

							<hr />

							<p>
								<span class="btn btn-sm" data-rel="tooltip" title="Default">Default</span>
								<span class="btn btn-warning btn-sm tooltip-warning" data-rel="tooltip" data-placement="left" title="Left Warning">Left</span>
								<span class="btn btn-success btn-sm tooltip-success" data-rel="tooltip" data-placement="right" title="Right Success">Right</span>
								<span class="btn btn-danger btn-sm tooltip-error" data-rel="tooltip" data-placement="top" title="Top Danger">Top</span>
								<span class="btn btn-info btn-sm tooltip-info" data-rel="tooltip" data-placement="bottom" title="Bottm Info">Bottom</span>
							</p>
						</div>
					</div>
				</div>
			</div><!-- /.col -->

			<div class="col-sm-6">
				<div class="widget-box">
					<div class="widget-header">
						<h4 class="smaller">Popovers</h4>
					</div>

					<div class="widget-body">
						<div class="widget-main">
							<p>
								<span class="btn btn-sm" data-rel="popover" title="Default" data-content="Heads up! This alert needs your attention, but it's not super important.">Default</span>
								<span class="btn btn-success btn-sm popover-success" data-rel="popover" data-placement="right" title="<i class='ace-icon fa fa-check green'></i> Right Success" data-content="Well done! You successfully read this important alert message.">Right</span>
								<span class="btn btn-warning btn-sm popover-warning" data-rel="popover" data-placement="left" title="<i class='ace-icon fa fa-exclamation-triangle orange'></i> Left Warning" data-content="Warning! Best check yo self, you're not looking too good.">Left</span>
							</p>

							<p>
								<span class="btn btn-danger btn-sm popover-error" data-rel="popover" data-placement="top" data-original-title="<i class='ace-icon fa fa-bolt red'></i> Top Danger" data-content="Oh snap! Change a few things up and try submitting again.">Top</span>
								<span class="btn btn-info btn-sm popover-info" data-rel="popover" data-placement="bottom" title="Some Info" data-content="Heads up! This alert needs your attention, but it's not super important.">Bottom</span>
								<span class="btn btn-inverse btn-sm popover-notitle" data-rel="popover" data-placement="bottom" data-content="Popover without a title!">No Title</span>
							</p>
						</div>
					</div>
				</div>
			</div><!-- /.col -->
		</div><!-- /.row -->

		<hr />
		<div class="row">
			<div class="col-sm-6">
				<h3 class="header smaller lighter green">
					<i class="ace-icon fa fa-bullhorn"></i>
					Alerts
				</h3>

				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert">
						<i class="ace-icon fa fa-times"></i>
					</button>

					<strong>
						<i class="ace-icon fa fa-times"></i>
						Oh snap!
					</strong>

					Change a few things up and try submitting again.
					<br />
				</div>

				<div class="alert alert-warning">
					<button type="button" class="close" data-dismiss="alert">
						<i class="ace-icon fa fa-times"></i>
					</button>
					<strong>Warning!</strong>

					Best check yo self, you're not looking too good.
					<br />
				</div>

				<div class="alert alert-block alert-success">
					<button type="button" class="close" data-dismiss="alert">
						<i class="ace-icon fa fa-times"></i>
					</button>

					<p>
						<strong>
							<i class="ace-icon fa fa-check"></i>
							Well done!
						</strong>
						You successfully read this important alert message.
					</p>

					<p>
						<button class="btn btn-sm btn-success">Do This</button>
						<button class="btn btn-sm">Or This One</button>
					</p>
				</div>

				<div class="alert alert-info">
					<button type="button" class="close" data-dismiss="alert">
						<i class="ace-icon fa fa-times"></i>
					</button>
					<strong>Heads up!</strong>

					This alert needs your attention, but it's not super important.
					<br />
				</div>
			</div><!-- /.col -->

			<div class="col-sm-6">
				<h3 class="row header smaller lighter orange">
					<span class="col-sm-8">
						<i class="ace-icon fa fa-bell"></i>
						Gritter Notifications
					</span><!-- /.col -->

					<span class="col-sm-4">
						<label class="pull-right inline">
							<small class="muted">Dark:</small>

							<input id="gritter-light" checked="" type="checkbox" class="ace ace-switch ace-switch-5" />
							<span class="lbl middle"></span>
						</label>
					</span><!-- /.col -->
				</h3>

				<p>
					<i>Click to see</i>
				</p>

				<p>
					<button class="btn" id="gritter-regular">Regular</button>
					<button class="btn btn-info" id="gritter-sticky">Sticky</button>
					<button class="btn btn-success" id="gritter-without-image">Without Image</button>
				</p>

				<p>
					<button class="btn btn-danger" id="gritter-error">Error</button>
					<button class="btn btn-warning" id="gritter-max3">Max 3</button>
					<button class="btn btn-primary" id="gritter-center">Center</button>
					<button class="btn btn-inverse" id="gritter-remove">Remove</button>
				</p>
			</div><!-- /.col -->
		</div><!-- /.row -->

		<hr />
		<div class="row">
			<div class="col-sm-6">
				<div>
					<h3 class="header smaller lighter purple">
						Bootstrap Modals
						<small>(Bootbox.js)</small>
					</h3>

					<p>
						<button class="btn" id="bootbox-regular">Regular Dialog</button>
						<button class="btn btn-info" id="bootbox-confirm">Confirm</button>
						<button class="btn btn-success" id="bootbox-options">More Options</button>
					</p>
				</div><!-- /.row -->

				<div class="space-24"></div>

				<div class="row">
					<div class="col-xs-12">
						<h3 class="header smaller lighter grey">
							<i class="ace-icon fa fa-spinner fa-spin orange bigger-125"></i>
							Imageless Spinner
							<small>(spin.js)</small>
						</h3>
					</div>

					<div class="col-xs-12">
						<i>Change a value to begin</i>

						<div class="pull-right center spinner-preview" id="spinner-preview"></div>

						<form class="form-horizontal" id="spinner-opts">
							<label class="inline">
								<small class="lighter">Lines:</small>

								<input class="hidden" type="text" name="lines" data-min="5" data-max="16" data-step="2" value="12" />
							</label>

							<div class="space-0"></div>

							<label class="inline">
								<small class="lighter">Length:</small>

								<input class="hidden" type="text" name="length" data-min="0" data-max="30" value="7" />
							</label>

							<div class="space-0"></div>

							<label class="inline">
								<small class="lighter">Width:</small>

								<input class="hidden" type="text" name="width" data-min="2" data-max="20" value="4" />
							</label>

							<div class="space-0"></div>

							<label class="inline">
								<small class="lighter">Radius:</small>

								<input class="hidden" type="text" name="radius" data-min="0" data-max="40" value="10" />
							</label>

							<div class="space-0"></div>

							<label class="inline">
								<small class="lighter">Corners:</small>

								<input class="hidden" type="text" name="corners" data-min="0" data-max="1" data-step="0.1" value="1" />
							</label>

							<div class="space-0"></div>

							<label class="inline">
								<small class="lighter">Rotate:</small>

								<input class="hidden" type="text" name="rotate" data-min="0" data-max="90" value="0" />
							</label>

							<div class="space-0"></div>

							<label class="inline">
								<small class="lighter">Trail:</small>

								<input class="hidden" type="text" name="trail" data-min="10" data-max="100" value="60" />
							</label>

							<div class="space-0"></div>

							<label class="inline">
								<small class="lighter">Speed:</small>

								<input class="hidden" type="text" name="speed" data-min="0.5" data-max="2.2" data-step="0.1" value="1" />
							</label>
						</form>
					</div><!-- /.row -->
				</div><!-- /.row -->
			</div><!-- /.col -->

			<div class="col-sm-6">
				<h3 class="header smaller lighter red">Bootstrap Wells</h3>

				<div class="well">
					<h4 class="green smaller lighter">Normal Well</h4>
					Use the well as a simple effect on an element to give it an inset effect.
				</div>

				<div class="well well-lg">
					<h4 class="blue">Large Well</h4>
					Control padding and rounded corners with two optional modifier classes.
				</div>
				<div class="well well-sm"> This is a small well </div>
			</div><!-- /.col -->
		</div><!-- /.row -->

		<div class="row">
			<div class="col-sm-6">
				<h3 class="header smaller lighter green">Dropdowns</h3>

				<div class="dropdown dropdown-preview">
					<ul class="dropdown-menu">
						<li>
							<a href="#" tabindex="-1">Action</a>
						</li>

						<li>
							<a href="#" tabindex="-1">Another action</a>
						</li>

						<li>
							<a href="#" tabindex="-1">Something else here</a>
						</li>

						<li class="divider"></li>

						<li>
							<a href="#" tabindex="-1">Separated link</a>
						</li>
					</ul>
				</div>

				<div class="dropdown dropdown-preview">
					<ul class="dropdown-menu dropdown-danger">
						<li>
							<a href="#" tabindex="-1">Action</a>
						</li>

						<li>
							<a href="#" tabindex="-1">Another action</a>
						</li>

						<li>
							<a href="#" tabindex="-1">Something else here</a>
						</li>

						<li class="divider"></li>

						<li class="dropdown-hover">
							<a href="#" tabindex="-1" class="clearfix">
								<span class="pull-left">More options</span>

								<i class="ace-icon fa fa-caret-right pull-right"></i>
							</a>

							<ul class="dropdown-menu dropdown-danger">
								<li>
									<a href="#" tabindex="-1">Second level link</a>
								</li>

								<li>
									<a href="#" tabindex="-1">Second level link</a>
								</li>

								<li>
									<a href="#" tabindex="-1">Second level link</a>
								</li>

								<li>
									<a href="#" tabindex="-1">Second level link</a>
								</li>

								<li>
									<a href="#" tabindex="-1">Second level link</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>

				<div class="dropup dropdown-preview">
					<ul class="dropdown-menu dropdown-light">
						<li>
							<a href="#" tabindex="-1">Action</a>
						</li>

						<li>
							<a href="#" tabindex="-1">Another action</a>
						</li>

						<li>
							<a href="#" tabindex="-1">Something else here</a>
						</li>

						<li class="divider"></li>

						<li class="dropup dropdown-hover">
							<a href="#" tabindex="-1" class="clearfix">
								<span class="pull-left">More options</span>

								<i class="ace-icon fa fa-caret-right pull-right"></i>
							</a>

							<ul class="dropdown-menu dropdown-light">
								<li>
									<a href="#" tabindex="-1">Second level link</a>
								</li>

								<li>
									<a href="#" tabindex="-1">Second level link</a>
								</li>

								<li>
									<a href="#" tabindex="-1">Second level link</a>
								</li>

								<li>
									<a href="#" tabindex="-1">Second level link</a>
								</li>

								<li>
									<a href="#" tabindex="-1">Second level link</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>

				<div class="dropup dropdown-preview">
					<ul class="dropdown-menu dropdown-purple">
						<li>
							<a href="#" tabindex="-1">Action</a>
						</li>

						<li>
							<a href="#" tabindex="-1">Another action</a>
						</li>

						<li>
							<a href="#" tabindex="-1">Something else here</a>
						</li>

						<li class="divider"></li>

						<li class="dropdown-hover dropup">
							<a href="#" tabindex="-1" class="clearfix">
								<span class="pull-left">More options</span>

								<i class="ace-icon fa fa-caret-left pull-right"></i>
							</a>

							<ul class="dropdown-menu dropdown-purple dropdown-menu-right">
								<li>
									<a href="#" tabindex="-1">Second level link</a>
								</li>

								<li>
									<a href="#" tabindex="-1">Second level link</a>
								</li>

								<li>
									<a href="#" tabindex="-1">Second level link</a>
								</li>

								<li>
									<a href="#" tabindex="-1">Second level link</a>
								</li>

								<li>
									<a href="#" tabindex="-1">Second level link</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>

				<div class="dropdown dropdown-preview">
					<ul class="dropdown-menu dropdown-icon-only dropdown-50 dropdown-light">
						<li class="action-buttons">
							<a href="#" tabindex="-1" class="center">
								<i class="fa fa-flag blue bigger-130"></i>
							</a>
						</li>

						<li class="action-buttons">
							<a href="#" tabindex="-1" class="center">
								<i class="fa fa-flag red bigger-130"></i>
							</a>
						</li>

						<li class="action-buttons">
							<a href="#" tabindex="-1" class="center">
								<i class="fa fa-flag green bigger-130"></i>
							</a>
						</li>

						<li class="action-buttons">
							<a href="#" tabindex="-1" class="center">
								<i class="fa fa-flag orange bigger-130"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="col-sm-6">
				<h3 class="row header smaller lighter blue">
					<span class="col-sm-7">
						<i class="ace-icon fa fa-th-large"></i>
						Pills
					</span><!-- /.col -->

					<span class="col-sm-5">
						<label class="pull-right inline">
							<small class="muted">Stacked:</small>

							<input id="id-pills-stacked" type="checkbox" class="ace ace-switch ace-switch-5" />
							<span class="lbl middle"></span>
						</label>
					</span><!-- /.col -->
				</h3>

				<ul class="nav nav-pills">
					<li class="active">
						<a href="#">Home</a>
					</li>

					<li class="disabled">
						<a href="#">Profile</a>
					</li>

					<li>
						<a href="#">Messages</a>
					</li>
				</ul>
			</div>
		</div>

		<!-- PAGE CONTENT ENDS -->
	</div><!-- /.col -->
</div><!-- /.row -->

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
  <script src="assets/js/excanvas.min.js"></script>
<![endif]-->
<script src="assets/js/jquery-ui.custom.min.js"></script>
<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="assets/js/bootbox.js"></script>
<script src="assets/js/jquery.easypiechart.min.js"></script>
<script src="assets/js/jquery.gritter.min.js"></script>
<script src="assets/js/spin.js"></script>


<!-- inline scripts related to this page -->
<script type="text/javascript">
	jQuery(function($) {
		/**
		$('#myTab a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		  //console.log(e.target.getAttribute("href"));
		})
			
		$('#accordion').on('shown.bs.collapse', function (e) {
			//console.log($(e.target).is('#collapseTwo'))
		});
		*/
		
		$('#myTab a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
			//if($(e.target).attr('href') == "#home") doSomethingNow();
		})
	
		
		/**
			//go to next tab, without user clicking
			$('#myTab > .active').next().find('> a').trigger('click');
		*/
	
	
		$('#accordion-style').on('click', function(ev){
			var target = $('input', ev.target);
			var which = parseInt(target.val());
			if(which == 2) $('#accordion').addClass('accordion-style2');
			 else $('#accordion').removeClass('accordion-style2');
		});
		
		//$('[href="#collapseTwo"]').trigger('click');
	
	
		$('.easy-pie-chart.percentage').each(function(){
			$(this).easyPieChart({
				barColor: $(this).data('color'),
				trackColor: '#EEEEEE',
				scaleColor: false,
				lineCap: 'butt',
				lineWidth: 8,
				animate: ace.vars['old_ie'] ? false : 1000,
				size:75
			}).css('color', $(this).data('color'));
		});
	
		$('[data-rel=tooltip]').tooltip();
		$('[data-rel=popover]').popover({html:true});
	
	
		$('#gritter-regular').on(ace.click_event, function(){
			$.gritter.add({
				title: 'This is a regular notice!',
				text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="blue">magnis dis parturient</a> montes, nascetur ridiculus mus.',
				image: 'assets/images/avatars/avatar1.png', //in Ace demo ./dist will be replaced by correct assets path
				sticky: false,
				time: '',
				class_name: (!$('#gritter-light').get(0).checked ? 'gritter-light' : '')
			});
	
			return false;
		});
	
		$('#gritter-sticky').on(ace.click_event, function(){
			var unique_id = $.gritter.add({
				title: 'This is a sticky notice!',
				text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="red">magnis dis parturient</a> montes, nascetur ridiculus mus.',
				image: 'assets/images/avatars/avatar.png',
				sticky: true,
				time: '',
				class_name: 'gritter-info' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
			});
	
			return false;
		});
	
	
		$('#gritter-without-image').on(ace.click_event, function(){
			$.gritter.add({
				// (string | mandatory) the heading of the notification
				title: 'This is a notice without an image!',
				// (string | mandatory) the text inside the notification
				text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="orange">magnis dis parturient</a> montes, nascetur ridiculus mus.',
				class_name: 'gritter-success' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
			});
	
			return false;
		});
	
	
		$('#gritter-max3').on(ace.click_event, function(){
			$.gritter.add({
				title: 'This is a notice with a max of 3 on screen at one time!',
				text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="green">magnis dis parturient</a> montes, nascetur ridiculus mus.',
				image: 'assets/images/avatars/avatar3.png', //in Ace demo ./dist will be replaced by correct assets path
				sticky: false,
				before_open: function(){
					if($('.gritter-item-wrapper').length >= 3)
					{
						return false;
					}
				},
				class_name: 'gritter-warning' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
			});
	
			return false;
		});
	
	
		$('#gritter-center').on(ace.click_event, function(){
			$.gritter.add({
				title: 'This is a centered notification',
				text: 'Just add a "gritter-center" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
				class_name: 'gritter-info gritter-center' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
			});
	
			return false;
		});
		
		$('#gritter-error').on(ace.click_event, function(){
			$.gritter.add({
				title: 'This is a warning notification',
				text: 'Just add a "gritter-light" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
				class_name: 'gritter-error' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
			});
	
			return false;
		});
			
	
		$("#gritter-remove").on(ace.click_event, function(){
			$.gritter.removeAll();
			return false;
		});
			
	
		///////
	
	
		$("#bootbox-regular").on(ace.click_event, function() {
			bootbox.prompt("What is your name?", function(result) {
				if (result === null) {
					
				} else {
					
				}
			});
		});
			
		$("#bootbox-confirm").on(ace.click_event, function() {
			bootbox.confirm("Are you sure?", function(result) {
				if(result) {
					//
				}
			});
		});
		
	/**
		$("#bootbox-confirm").on(ace.click_event, function() {
			bootbox.confirm({
				message: "Are you sure?",
				buttons: {
				  confirm: {
					 label: "OK",
					 className: "btn-primary btn-sm",
				  },
				  cancel: {
					 label: "Cancel",
					 className: "btn-sm",
				  }
				},
				callback: function(result) {
					if(result) alert(1)
				}
			  }
			);
		});
	**/
		
	
		$("#bootbox-options").on(ace.click_event, function() {
			bootbox.dialog({
				message: "<span class='bigger-110'>I am a custom dialog with smaller buttons</span>",
				buttons:
				{
					"success" :
					 {
						"label" : "<i class='ace-icon fa fa-check'></i> Success!",
						"className" : "btn-sm btn-success",
						"callback": function() {
							//Example.show("great success");
						}
					},
					"danger" :
					{
						"label" : "Danger!",
						"className" : "btn-sm btn-danger",
						"callback": function() {
							//Example.show("uh oh, look out!");
						}
					}, 
					"click" :
					{
						"label" : "Click ME!",
						"className" : "btn-sm btn-primary",
						"callback": function() {
							//Example.show("Primary button");
						}
					}, 
					"button" :
					{
						"label" : "Just a button...",
						"className" : "btn-sm"
					}
				}
			});
		});
	
	
	
		$('#spinner-opts small').css({display:'inline-block', width:'60px'})
	
		var slide_styles = ['', 'green','red','purple','orange', 'dark'];
		var ii = 0;
		$("#spinner-opts input[type=text]").each(function() {
			var $this = $(this);
			$this.hide().after('<span />');
			$this.next().addClass('ui-slider-small').
			addClass("inline ui-slider-"+slide_styles[ii++ % slide_styles.length]).
			css('width','125px').slider({
				value:parseInt($this.val()),
				range: "min",
				animate:true,
				min: parseInt($this.attr('data-min')),
				max: parseInt($this.attr('data-max')),
				step: parseFloat($this.attr('data-step')) || 1,
				slide: function( event, ui ) {
					$this.val(ui.value);
					spinner_update();
				}
			});
		});
	
	
	
		//CSS3 spinner
		$.fn.spin = function(opts) {
			this.each(function() {
			  var $this = $(this),
				  data = $this.data();
	
			  if (data.spinner) {
				data.spinner.stop();
				delete data.spinner;
			  }
			  if (opts !== false) {
				data.spinner = new Spinner($.extend({color: $this.css('color')}, opts)).spin(this);
			  }
			});
			return this;
		};
	
		function spinner_update() {
			var opts = {};
			$('#spinner-opts input[type=text]').each(function() {
				opts[this.name] = parseFloat(this.value);
			});
			opts['left'] = 'auto';
			$('#spinner-preview').spin(opts);
		}
	
	
	
		$('#id-pills-stacked').removeAttr('checked').on('click', function(){
			$('.nav-pills').toggleClass('nav-stacked');
		});
	
		
		
		
		
		
		///////////
		$(document).one('ajaxloadstart.page', function(e) {
			$.gritter.removeAll();
			$('.modal').modal('hide');
		});
	
	});
</script>