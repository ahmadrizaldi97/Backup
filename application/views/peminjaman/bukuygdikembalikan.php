  <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>Daftar Buku yang dikembalikan</h2>
                                </div>
                                
                            </div>

<br><br>
<div class="table-responsive">

<!-- <?php echo var_dump($bukuygdipinjam); ?> -->
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Nama Kategori</th>
				<th>Kategori</th>
				<th>Tanggal Pengembalian</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($bukuygdipinjam as $key) { ?>
			<tr>
				<td><?php echo $key->judul_buku; ?></td>
				<td><?php echo $key->nama_kategori; ?></td>
					<?php if ($key->tanggal_kembali == ""){ ?>
						<td>-</td>
					<?php }else{ ?>
					<td><?php echo $key->tanggal_kembali; ?>
					<?php } ?>					
				</td>
				<td><?php echo $key->status; ?></td>
				<td><a class="btn btn-success" href="<?php echo site_url(''); ?>/kategori/edit/<?php echo $key->id_kategori; ?>">Edit</a>
				<a class="btn btn-danger" href="<?php echo site_url(''); ?>/kategori/delete/<?php echo $key->id_kategori; ?>">Delete</a>
				
				</td>
			</tr>			
			<?php } ?>
		</tbody>
	</table>
</div>

</div></div></div></div>