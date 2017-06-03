
					

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<?php echo form_open_multipart('buku/tambahbuku'); ?>
								<legend>Edit DATA BUKU</legend>
								
  									<?php echo validation_errors(); ?>
								
								
								<div class="form-group">
									<label for="judul_buku">Judul</label>
									<input type="text" class="form-control" id="judul_buku" name="judul_buku" placeholder="Input field" value="<?php echo $spesificdata[0]->judul_buku; ?>" > <br>
									<label for="nama_pengarang">Nama Pengarang</label>
									<input type="text" class="form-control" id="nama_pengarang" name="nama_pengarang" placeholder="Input field" value="<?php echo $spesificdata[0]->nama_pengarang; ?>"> <br>
									<label for="">Kategori</label>
									<select name="kategori" id="inputKategori" class="form-control">
										<?php foreach ($data_kategori as $key) { ?>
											<option value="<?php echo $key->id_kategori; ?>"><?php echo $key->nama_kategori; ?></option>
										<?php  } ?>
									</select>
									
								</div>
								<div class="form-group">
									<label for="cover">Cover</label>
									<input type="file" name="userfile">
								</div>

								<div class="form-group">
										<label for="jumlah_buku">Jumlah</label>
										<input type="text" class="form-control" id="jumlah_buku" name="jumlah_buku" placeholder="Jumlah buku" value="<?php echo $spesificdata[0]->jumlah_buku; ?>">
									</div>


								<button type="submit" class="btn btn-primary">Submit</button>
								
							<?php echo form_close(); ?>
								
					
					</div>





		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
 		

