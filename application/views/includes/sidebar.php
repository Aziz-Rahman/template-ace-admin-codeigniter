<div id="sidebar" class="sidebar responsive ace-save-state">
	<script type="text/javascript">
		try{ace.settings.loadState('sidebar')}catch(e){}
	</script>

	<div class="sidebar-shortcuts" id="sidebar-shortcuts">
		<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
			<button class="btn btn-success">
				<i class="ace-icon fa fa-signal"></i>
			</button>

			<button class="btn btn-info">
				<i class="ace-icon fa fa-pencil"></i>
			</button>

			<button class="btn btn-warning">
				<i class="ace-icon fa fa-users"></i>
			</button>

			<button class="btn btn-danger">
				<i class="ace-icon fa fa-cogs"></i>
			</button>
		</div>

		<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
			<span class="btn btn-success"></span>

			<span class="btn btn-info"></span>

			<span class="btn btn-warning"></span>

			<span class="btn btn-danger"></span>
		</div>
	</div><!-- /.sidebar-shortcuts -->

	<ul class="nav nav-list">
		<li class="<?php if ($this->uri->segment('1') == '') echo 'active open'; else echo ''; ?>">
			<a href="<?php echo base_url(''); ?>">
				<i class="menu-icon fa fa-tachometer"></i>
				<span class="menu-text"> Dashboard </span>
			</a>

			<b class="arrow"></b>
		</li>

		<li class="<?php if ($this->uri->segment('1') == 'jq_ui' || $this->uri->segment('1') == 'elements' || $this->uri->segment('1') == 'buttons') echo 'active open'; else echo ''; ?>">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-desktop"></i>
				<span class="menu-text">
					UI &amp; Elements
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-caret-right"></i>

						xxxxxxxxxx
						<b class="arrow fa fa-angle-down"></b>
					</a>

					<b class="arrow"></b>

					<ul class="submenu">
						<li class="">
							<a href="top-menu.html">
								<i class="menu-icon fa fa-caret-right"></i>
								xxxxxxxxxx
							</a>

							<b class="arrow"></b>
						</li>

						<li class="">
							<a href="two-menu-1.html">
								<i class="menu-icon fa fa-caret-right"></i>
								xxxxxxxxxx
							</a>

							<b class="arrow"></b>
						</li>

						<li class="">
							<a href="two-menu-2.html">
								<i class="menu-icon fa fa-caret-right"></i>
								xxxxxxxxxx
							</a>

							<b class="arrow"></b>
						</li>

						<li class="">
							<a href="mobile-menu-1.html">
								<i class="menu-icon fa fa-caret-right"></i>
								xxxxxxxxxx
							</a>

							<b class="arrow"></b>
						</li>

						<li class="">
							<a href="mobile-menu-2.html">
								<i class="menu-icon fa fa-caret-right"></i>
								xxxxxxxxxx
							</a>

							<b class="arrow"></b>
						</li>

						<li class="">
							<a href="mobile-menu-3.html">
								<i class="menu-icon fa fa-caret-right"></i>
								xxxxxxxxxx
							</a>

							<b class="arrow"></b>
						</li>
					</ul>
				</li>

				<li class="">
					<a href="typography.html">
						<i class="menu-icon fa fa-caret-right"></i>
						xxxxxxxxxx
					</a>

					<b class="arrow"></b>
				</li>

				<li class="<?php if ($this->uri->segment('1') == 'elements') echo 'active'; else echo ''; ?>">
					<a href="<?php echo base_url('elements'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Elements
					</a>

					<b class="arrow"></b>
				</li>

				<li class="<?php if ($this->uri->segment('1') == 'buttons') echo 'active'; else echo ''; ?>">
					<a href="<?php echo base_url('buttons'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Buttons &amp; Icons
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="content-slider.html">
						<i class="menu-icon fa fa-caret-right"></i>
						xxxxxxxxxx
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="treeview.html">
						<i class="menu-icon fa fa-caret-right"></i>
						xxxxxxxxxx
					</a>

					<b class="arrow"></b>
				</li>

				<li class="<?php if ($this->uri->segment('1') == 'jq_ui') echo 'active'; else echo ''; ?>">
					<a href="<?php echo base_url('jq_ui'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						jQuery UI
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="nestable-list.html">
						<i class="menu-icon fa fa-caret-right"></i>
						xxxxxxxxxx
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-caret-right"></i>

						xxxxxxxxxx
						<b class="arrow fa fa-angle-down"></b>
					</a>

					<b class="arrow"></b>

					<ul class="submenu">
						<li class="">
							<a href="#">
								<i class="menu-icon fa fa-leaf green"></i>
								xxxxxxxxxx
							</a>

							<b class="arrow"></b>
						</li>

						<li class="">
							<a href="#" class="dropdown-toggle">
								<i class="menu-icon fa fa-pencil orange"></i>

								xxxxxxxxxx
								<b class="arrow fa fa-angle-down"></b>
							</a>

							<b class="arrow"></b>

							<ul class="submenu">
								<li class="">
									<a href="#">
										<i class="menu-icon fa fa-plus purple"></i>
										xxxxxxxxxx
									</a>

									<b class="arrow"></b>
								</li>

								<li class="">
									<a href="#">
										<i class="menu-icon fa fa-eye pink"></i>
										xxxxxxxxxx
									</a>

									<b class="arrow"></b>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</li>

		<li class="<?php if ($this->uri->segment('1') == 'table') echo 'active open'; else echo ''; ?>">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-list"></i>
				<span class="menu-text"> Tables </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="<?php if ($this->uri->segment('1') == 'table') echo 'active'; else echo ''; ?>">
					<a href="<?php echo base_url('table'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Simple &amp; Dynamic
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="#">
						<i class="menu-icon fa fa-caret-right"></i>
						xxxxxxxxxx
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>

		<li class="<?php if ($this->uri->segment('1') == 'form' || $this->uri->segment('1') == 'form2' || $this->uri->segment('1') == 'form_wizard' || $this->uri->segment('1') == 'wysiwyg') echo 'active open'; else echo ''; ?>">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-pencil-square-o"></i>
				<span class="menu-text"> Forms </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="<?php if ($this->uri->segment('1') == 'form') echo 'active'; else echo ''; ?>">
					<a href="<?php echo base_url('form'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Form Elements
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="<?php echo base_url('form2'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						xxxxxxxxxx
					</a>

					<b class="arrow"></b>
				</li>

				<li class="<?php if ($this->uri->segment('1') == 'form_wizard') echo 'active'; else echo ''; ?>">
					<a href="<?php echo base_url('form_wizard'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Wizard &amp; Validation
					</a>

					<b class="arrow"></b>
				</li>

				<li class="<?php if ($this->uri->segment('1') == 'wysiwyg') echo 'active'; else echo ''; ?>">
					<a href="<?php echo base_url('wysiwyg'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Wysiwyg &amp; Markdown
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="dropzone.html">
						<i class="menu-icon fa fa-caret-right"></i>
						xxxxxxxxxx
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>

		<li class="">
			<a href="widgets.html">
				<i class="menu-icon fa fa-list-alt"></i>
				<span class="menu-text"> xxxxxxxxxx </span>
			</a>

			<b class="arrow"></b>
		</li>

		<li class="">
			<a href="calendar.html">
				<i class="menu-icon fa fa-calendar"></i>

				<span class="menu-text">
					xxxxxxxxxx

					<span class="badge badge-transparent tooltip-error" title="2 Important Events">
						<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
					</span>
				</span>
			</a>

			<b class="arrow"></b>
		</li>

		<li class="">
			<a href="gallery.html">
				<i class="menu-icon fa fa-picture-o"></i>
				<span class="menu-text"> xxxxxxxxxx </span>
			</a>

			<b class="arrow"></b>
		</li>

		<li class="<?php if ($this->uri->segment('1') == 'profile' || $this->uri->segment('1') == 'invoice' || $this->uri->segment('1') == 'inbox') echo 'active open'; else echo ''; ?>">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-tag"></i>
				<span class="menu-text"> More Pages </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="<?php if ($this->uri->segment('1') == 'profile') echo 'active'; else echo ''; ?>">
					<a href="<?php echo base_url('profile'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						User Profile
					</a>

					<b class="arrow"></b>
				</li>

				<li class="<?php if ($this->uri->segment('1') == 'inbox') echo 'active'; else echo ''; ?>">
					<a href="<?php echo base_url('inbox'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Inbox
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="pricing.html">
						<i class="menu-icon fa fa-caret-right"></i>
						xxxxxxxxxx
					</a>

					<b class="arrow"></b>
				</li>

				<li class="<?php if ($this->uri->segment('1') == 'invoice') echo 'active'; else echo ''; ?>">
					<a href="<?php echo base_url('invoice'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Invoice
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="timeline.html">
						<i class="menu-icon fa fa-caret-right"></i>
						xxxxxxxxxx
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="search.html">
						<i class="menu-icon fa fa-caret-right"></i>
						xxxxxxxxxx
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="email.html">
						<i class="menu-icon fa fa-caret-right"></i>
						xxxxxxxxxx
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="<?php echo base_url('login'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Login &amp; Register
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>

		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-file-o"></i>

				<span class="menu-text">
					Other Pages

					<span class="badge badge-primary">5</span>
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="faq.html">
						<i class="menu-icon fa fa-caret-right"></i>
						xxxxxxxxxx
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="<?php echo base_url('top_menu'); ?>">
						<i class="menu-icon fa fa-caret-right"></i>
						Page with top menu
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="error-404.html">
						<i class="menu-icon fa fa-caret-right"></i>
						xxxxxxxxxx
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="error-500.html">
						<i class="menu-icon fa fa-caret-right"></i>
						xxxxxxxxxx
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="grid.html">
						<i class="menu-icon fa fa-caret-right"></i>
						xxxxxxxxxx
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="blank.html">
						<i class="menu-icon fa fa-caret-right"></i>
						xxxxxxxxxx
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>
	</ul><!-- /.nav-list -->

	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>
</div>