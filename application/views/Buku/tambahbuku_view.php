
  <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="page-header">
 					 			<h1 style="margin-top: -2%"><center>Tambah Buku</center></h1>
							</div>
                                
                            </div>


				
				<?php echo form_open_multipart('buku/tambahbuku'); ?>
								
  									<?php echo validation_errors(); ?>
								
								
								<div class="form-group">
									<label for="judul_buku">Judul</label>
									<input type="text" class="form-control" id="input" id="judul_buku" name="judul_buku" placeholder="Input field" > <br>

									<label for="nama_pengarang">Nama Pengarang</label>
									<input type="text" class="form-control" id="input" id="nama_pengarang" name="nama_pengarang" placeholder="Input field" > <br>

									<label for="">Kategori</label>
									<select name="kategori" id="input" id="inputKategori" class="form-control">
										<option selected="selected"></option>
										<?php foreach ($data_kategori as $key) { ?>
											<option  value="<?php echo $key->id_kategori; ?>"><?php echo $key->nama_kategori; ?></option>
										<?php  } ?>
									</select>
									
								</div>
								<div class="form-group">
									<label for="cover">Cover</label>
									<input type="file" name="userfile">
								</div>

								<div class="form-group">
										<label for="jumlah_buku">Jumlah</label>
										<input type="number" id="input" class="form-control" id="jumlah_buku" name="jumlah_buku" placeholder="Jumlah buku" min="0" max="1000000">
									</div>


								<button type="submit" class="btn btn-primary">Submit</button>
								
							<?php echo form_close(); ?>


	
<?php echo form_close(); ?>

</div></div></div></div>

<script type="text/javascript">
	$("select").on("change",function() {
  var v = $(this).val();
    $("select").children("option").each(function() {
      if($(this).val() == v && !$(this).attr("selected")) {
        $(this).hide();
      }
    });
});
</script>

				