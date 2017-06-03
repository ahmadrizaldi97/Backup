  <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>Daftar User</h2>
                                </div>
                                
                            </div>

<br><br>
<div class="table-responsive">
<div class="col-xs-offset-10 col-sm-offset-10 col-md-offset-10 col-lg-offset-10">
	<a class="btn btn-success btn-block" href="<?php echo site_url(''); ?>/user/insert_user">Insert User</a>
</div> 
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Nama</th>
				<th>NIM/Alamat</th>
				<th>Alamat</th>
				<th>No Hp</th>
				<th>Foto</th>

			</tr>
		</thead>
		<tbody>
			<?php foreach ($datauser as $key) { ?>
			<tr>
				<td><?php echo $key->nama_user; ?></td>
				<td><?php echo $key->nim_nip; ?></td>
				<td><?php echo $key->alamat; ?></td>
				<td><?php echo $key->no_telepon; ?></td>
				<td><img src="<?php echo base_url(''); ?>/assets/uploads/<?php echo $key->foto; ?>" width="110" height="110" alt="User" ></td>
				
			</tr>			
			<?php } ?>
		</tbody>
	</table>
</div>

</div></div></div></div>