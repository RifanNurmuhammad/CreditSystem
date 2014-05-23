

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
            <span class="title"><i class="icon-user"></i> Data Pribadi</span>
        </div>
		<form action="<?=site_url("customer/savecustomer")?>" method="post" class="validate">
			<div class="widget-content form-container">
			<div class="span12">
				<div class="span6">
					<div class="control-group">
						<label class="control-label">Nama Depan <span class="required">*</span></label>
						<div class="controls">
							<input type="text" name="nama_depan" class="required span12" tabindex="1">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"> Tempat Lahir <span class="required">*</span></label>
						<div class="controls">
							<input type="text" name="tempat_lahir" class="required span12" tabindex="3" />
						</div>
					</div>
				</div>
				<div class="span6">
					<div class="control-group">
						<label class="control-label">Nama Belakang <span class="required">*</span></label>
						<div class="controls">
							<input type="text" name="nama_belakang" class="required span12" tabindex="2">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Tanggal Lahir <span class="required">*</span></label>
						<div class="controls">
							<input type="text" data-mask="@9/$9/9999" tabindex="4" data-definitions='{ "@": "[0-3]", "$": "[01]" }'name="tanggal_lahir" class="required span12">
						</div>
					</div>
				</div>
			</div>
			<div class="fluid">
				<div class="span6">
					<div class="control-group">
						<label class="control-label">Alamat Tinggal Sekarang <span class="required">*</span></label>
						<div class="controls">
							<textarea id="input02" class="span12" tabindex="5" name="alamat"></textarea>
						</div>
						<div class="fluid">
							<div class="span6">
								<label class="control-label">No Telp</label>
								<div class="controls">
									<input type="text" name="no_telp" value="">
								</div>		
							</div>
							<div class="span6">
								<label class="control-label">No Hp</label>
								<div class="controls">
									<input type="text" name="no_hp" value="">
								</div>		
							</div>
						</div>
						
					</div>
				</div>
				<div class="span6">
					<div class="control-group">
						<label class="control-label"> Provinsi <span class="required">*</span></label>
						<div class="controls">
							<select id="provinsi" name="provinsi" class="span12 required" tabindex="6">
								<?php foreach ($provinsi as $key => $value) {
									echo '<option value="'.$value['id_region'].'">'.$value['region'].'</option>';
								} ?>
							</select>
						</div>
						<label class="control-label">Kota<span class="required">*</span></label>
						<div class="controls">
							<select id="kota" name="kota" class="span12" tabindex="7" class="required">
								<option value="">Pilih Kota</option>
							</select>
						</div>
						<label class="control-label">Kode Pos<span class="required">*</span></label>
						<div class="controls">
							<input type="text" name="kode_pos" value="" class="required">
						</div>
					</div>

				</div>
			</div>
			<br clear="all">
			<div class="form-actions">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>

		</div>
		</form>
		
					
				
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
