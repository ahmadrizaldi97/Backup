  <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>Daftar Buku yang dipinjam</h2>
                                </div>
                                
                            </div>

<br>
<div class="table-responsive">

<!-- <?php echo var_dump($bukuygdipinjam); ?> -->
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Nama Kategori</th>
				<th>Tanggal Pinjam</th>
				<th>Tanggal Kembali</th>
				<th>Kategori</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($bukuygdipinjam as $key) { ?>
			<tr>
				<td><?php echo $key->judul_buku; ?></td>
				<td><?php echo $key->tanggal_pinjam; ?></td>
				<td><?php echo $key->tanggal_pengembalian; ?></td>
				<td><?php echo $key->nama_kategori; ?></td>
				
				<td><?php echo $key->status; ?></td>
				<td><a class="btn btn-success" href="<?php echo site_url(''); ?>/kategori/edit/<?php echo $key->id_kategori; ?>">Edit</a>
				<a class="btn btn-danger" href="<?php echo site_url(''); ?>/kategori/delete/<?php echo $key->id_kategori; ?>">Delete</a>
				<a class="btn btn-primary" href="<?php echo site_url(''); ?>/pengembalian/update_peminjaman/<?php echo $key->id_buku; ?>/<?php echo $key->id_peminjaman; ?>/<?php echo $this->uri->segment(3); ?>">Terima Buku</a>
				</td>
			</tr>			
			<?php } ?>
		</tbody>
	</table>
</div>

</div></div></div></div>