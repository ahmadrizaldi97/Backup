<br><br>
   <!-- CPU Usage -->
   


  <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>Insert Data</h2>
                                </div>
                                
                            </div>

<br>
				<?php echo form_open('peminjaman/tambahpeminjaman'); ?>
		<?php echo validation_errors(); ?>

	<div class="row">
		<div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-5 col-sm-5 col-md-5 col-lg-5">
			<div class="form-group">
		<label for="nim">NIM</label>
		<!-- <input style="border: 1px solid #f00;" type="text" class="form-control" id="nim" name="nim" placeholder="NIM"> -->
		<input type="text" class="form-control" id="input" id="nim" name="nim" placeholder="NIM">
			</div>
		</div>

		<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
			
			<div class="form-group">
				<label for="jumlah_buku">Jumlah Buku</label>
				<input type="number" class="form-control" id="input" id="jumlah_buku" name="jumlah_buku" placeholder="Jumlah Buku" min="0" max="5">
			</div>
		</div>
	</div>
	<div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
		<button type="submit" class="btn btn-primary" >Submit</button>
		
	</div>


	
<?php echo form_close(); ?>

</div></div></div></div>