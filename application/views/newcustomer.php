

<!-- Wizard Stylesheet -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/custom-plugins/wizard/wizard.css">
<div id="sidebar-separator"></div>

<section id="main" class="clearfix">
<div id="main-header" class="page-header">
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>Pelanggan
			<span class="divider">&raquo;</span>
		</li>
		<li>
			<a href="#">Pelanggan Baru</a>
		</li>
	</ul>
	
	<h1 id="main-heading">
		Pelanggan Baru <span>This is the place where everything started</span>
	</h1>
</div>
<div id="main-content">
<div class="row-fluid">
	<div class="span12 widget">
		<div class="widget-header">
			<span class="title"><i class="icol-wand"></i> Form Data Pelanggan</span>
		</div>
		<div class="widget-content form-container">
			<form id="wizard-demo-2" class="vertical-form" data-forward-only="false">
				<fieldset class="wizard-step">
					<legend class="wizard-label"><i class="icon-user"></i> Data Pribadi</legend>
					
					<div class="span12">
					<div class="span5">
						<div class="control-group">
							<label class="control-label">Nama Depan <span class="required">*</span></label>
							<div class="controls">
								<input type="text" name="wizard[username]" class="required span12">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label"> Tempat Lahir <span class="required">*</span></label>
							<div class="controls">
								<input type="text" name="wizard[email]" class="required email span12" />
							</div>
						</div>
					</div>
					<div class="span5">
						<div class="control-group">
							<label class="control-label">Nama Belakang <span class="required">*</span></label>
							<div class="controls">
								<input type="text" name="wizard[password]" class="required span12">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Tanggal Lahir <span class="required">*</span></label>
							<div class="controls">
								<input type="text" data-mask="@9/$9/9999" data-definitions='{ "@": "[0-3]", "$": "[01]" }'name="wizard[password]" class="required span12">
							</div>
						</div>
					</div>
					</div>
					<div class="span12">
					<div class="span5">
						<div class="control-group">
							<label class="control-label">Alamat Tinggal Sekarang <span class="required">*</span></label>
							<div class="controls">
								<textarea id="input02" class="span12"></textarea>
							</div>
						</div>
					</div>
					<div class="span5">
						<div class="control-group">
							<label class="control-label"> Provinsi <span class="required">*</span></label>
							<div class="controls">
								<select id="input01" class="span12">
									<option>Dog</option>
									<option>Cat</option>
									<option>Bird</option>
									<option>Turtle</option>
								</select>
							</div>
							<label class="control-label">Kota<span class="required">*</span></label>
							<div class="controls">
								<select id="input01" class="span12">
									<option>Dog</option>
									<option>Cat</option>
									<option>Bird</option>
									<option>Turtle</option>
								</select>
							</div>
							
						</div>
					</div>
					</div>
					
				</fieldset>
				<fieldset class="wizard-step">
					<legend class="wizard-label"><i class="icon-book"></i> Member</legend>
					<div class="control-group">
						<label class="control-label">Fullname <span class="required">*</span></label>
						<div class="controls">
							<input type="text" name="wizard[fullname]" class="required span12">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Address <span class="required">*</span></label>
						<div class="controls">
							<textarea name="wizard[address]" class="required span12"></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Gender <span class="required">*</span></label>
						<div class="controls">
							<label class="radio"><input type="radio" name="wizard[gender]" class="required"> Male</label>
							<label class="radio"><input type="radio" name="wizard[gender]" class="required"> Female</label>
							<label for="wizard[gender]" class="error" generated="true" style="display:none"></label>
						</div>
					</div>
				</fieldset>
				<fieldset class="wizard-step">
					<legend class="wizard-label"><i class="icon-pencil"></i> Membership</legend>
					<div class="control-group">
						<label class="control-label">Membership Period <span class="required">*</span></label>
						<div class="controls">
							<select name="wizard[period]" class="required">
								<option>1 Month</option>
								<option>3 Months</option>
								<option>6 Months</option>
								<option>1 Year</option>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Package <span class="required">*</span></label>
						<div class="controls">
							<label class="radio"><input type="radio" name="wizard[package]" class="required"> Basic</label>
							<label class="radio"><input type="radio" name="wizard[package]" /> Full</label>
							<label class="radio"><input type="radio" name="wizard[package]" /> Premium</label>
							<label for="wizard[package]" class="error" generated="true" style="display:none"></label>
						</div>
					</div>
				</fieldset>
				<fieldset class="wizard-step">
					<legend class="wizard-label"><i class="icon-ok"></i> Confirmation</legend>
					<div class="control-group">
						<label class="control-label">Payment Method <span class="required">*</span></label>
						<div class="controls">
							<select name="wizard[payment]" class="required">
								<option>PayPal</option>
								<option>Visa</option>
								<option>Mastercard</option>
								<option>Wire Transfer</option>
							</select>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<label class="checkbox"><input type="checkbox" name="wizard[tos]" class="required"> I agree to the terms of service <span class="required">*</span></label>
							<label for="wizard[tos]" class="error" generated="true" style="display:none"></label>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>
</div>
</section>

<!-- Core Scripts -->
<script src="<?php echo base_url();?>assets/assets/js/libs/jquery-1.8.3.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/assets/js/libs/jquery.placeholder.min.js"></script>
<script src="<?php echo base_url();?>assets/assets/js/libs/jquery.mousewheel.min.js"></script>

<!-- Template Script -->
<script src="<?php echo base_url();?>assets/assets/js/template.js"></script>
<script src="<?php echo base_url();?>assets/assets/js/setup.js"></script>

<!-- jquery-ui Scripts -->
<!-- Plugin Scripts -->
<!-- Bootstrap InputMask -->
<script src="<?php echo base_url();?>assets/custom-plugins/bootstrap-inputmask.min.js"></script>
<!-- Validation -->
<script src="<?php echo base_url();?>assets/plugins/validate/jquery.validate.min.js"></script>
<!-- Wizard -->
<script src="<?php echo base_url();?>assets/custom-plugins/wizard/wizard.min.js"></script>

<!-- Demo Scripts -->
<script src="<?php echo base_url();?>assets/assets/js/demo/form_wizard.js"></script>
