<br><br>

   <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>Daftar Buku</h2>
                                </div>
                                
                            </div>
<!-- <?php $jumlah_buku[0]; ?> -->
<?php echo form_open('peminjaman/insertdatapeminjam'); ?>

	<legend>Form Peminjaman</legend>

	

			<div class="form-group">
			<label for="nim">NIM</label>
			<input type="text" class="form-control" id="nim" name="nim" placeholder="Input field" value="<?php echo $datauser[0]->nim_nip; ?> - <?php echo $datauser[0]->nama_user; ?>" disabled>
			</div>	

		<?php for($i=0; $i<$jumlah_buku[0]; $i++){ ?>
<select name="id_buku[<?php echo $i; ?>]" class="form-control">
<option disabled selected>Select your option</option>
			<?php foreach ($databuku as $key): ?>
					
					<option  value="<?php echo $key->id_buku; ?>"><?php echo $key->judul_buku; ?></option>
				
			<?php endforeach ?>
		</select><br>


	<?php } ?>

	<input type="hidden" name="jumlah_buku" value="<?php echo $jumlah_buku[0]; ?>">
	<input type="hidden" name="id_user"  value="<?php echo $datauser[0]->id_user; ?>">

	<button type="submit" class="btn btn-primary">Submit</button>



<?php echo form_close(); ?>
</div></div></div></div>