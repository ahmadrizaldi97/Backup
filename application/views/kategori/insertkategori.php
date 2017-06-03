
  <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="page-header">
 					 			<h1 style="margin-top: -2%"><center>Tambah Kategori</center></h1>
							</div>
                                
                            </div>


				
				<?php echo form_open('kategori/insert'); ?>
				<?php echo validation_errors(); ?>
	<div class="row">
  		<div class="col-md-12">
			<div class="form-group">
				<label for="nama_kategori">Nama Kategori</label>
				<input type="text" class="form-control" name="nama_kategori" id="input" id="nama_kategori" placeholder="Nama Kategori">
			</div>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<button style="margin-left: -12px " type="submit" class="btn btn-primary btn-block">Tambah</button>
			</div>
		<?php echo form_close(); ?>


	
<?php echo form_close(); ?>

</div></div></div></div>
