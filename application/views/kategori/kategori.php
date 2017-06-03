<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
                </div>
            
                <div class="modal-body">
                    
                    <p>Hapus Kategori ? </p>
                    
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger btn-ok">Delete</a>
                </div>
            </div>
        </div>
    </div>


    

     <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>Daftar Buku</h2>
                                </div>
                                
                            </div>

<br><br>
<div class="table-responsive">
<div class="col-xs-offset-10 col-sm-offset-10 col-md-offset-10 col-lg-offset-10">
	<a class="btn btn-success btn-block" href="<?php echo site_url(''); ?>/kategori/insert">Insert Kategori</a>
</div> 
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Nama Kategori</th>
				<th>Buku</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data_kategori as $key) { ?>
			<tr>
				<td><?php echo $key->nama_kategori; ?></td>
				<td><a class="btn btn-default" href="<?php echo site_url(''); ?>/buku/getBukuBy/<?php echo $key->id_kategori; ?>">Buku</a></td>
				<td><a class="btn btn-success" href="<?php echo site_url(''); ?>/kategori/edit/<?php echo $key->id_kategori; ?>">Edit</a>

				<button class="btn btn-danger" data-href="<?php echo site_url(''); ?>/kategori/delete/<?php echo $key->id_kategori; ?>" data-toggle="modal" data-target="#confirm-delete">
			        Delete 
			    </button>

	 
				


				</td>
			</tr>			
			<?php } ?>
		</tbody>
	</table>
</div>

</div></div></div></div>

<script>
        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
            
            $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
        });
    </script>