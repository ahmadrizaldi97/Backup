<div class="page-header">
 					 <h1><center>Edit Kategori</center></h1>
				</div>
				
				<?php echo form_open('kategori/edit/'.$this->uri->segment(3)); ?>
	<div class="row">
  		<div class="col-md-12">
			<div class="form-group">
				<label for="nama_kategori">Nama Kategori</label>
				<input type="text" class="form-control" name="nama_kategori" id="nama_kategori" placeholder="Nama Kategori" 
				value="<?php echo $data_kategori_spesifik[0]->nama_kategori; ?>">
			</div>
			<button type="submit" class="btn btn-default">Edit</button>
		<?php echo form_close(); ?>