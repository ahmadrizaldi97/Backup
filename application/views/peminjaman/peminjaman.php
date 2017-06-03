<!-- 
<script type="text/javascript">
  function cekhalaman() {
    document.getElementById("peminjaman_nav").className = "active"
  }
</script>
             -->


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
                </div>
            
                <div class="modal-body">
                    
                    <p>Konfirmasi pengembalian Buku ? </p>
                    
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Kembali</button>
                    <a class="btn btn-success btn-ok">Terima</a>
                </div>
            </div>
        </div>
    </div>

<br>
             <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>Peminjaman</h2>
                                </div>
                                
                            </div>

                    <table class="table table-hover" id="example">
                      <thead>
                        <tr>
                          
                          <th>Nama</th>
                          <th>Buku</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($Peminjamandata as $key ): ?>
                          <tr>
                            
                            <td><?php echo $key->nama_user; ?></td>
                            <!-- <td><img id="cover" src="<?php echo base_url(''); ?>assets/uploads/<?php echo $key->cover; ?>"></td>
                            <td> -->
                            <td><a class="btn btn-info" href="<?php echo site_url(''); ?>/peminjaman/bukuygdipinjam/<?php echo $key->id_user; ?>">Buku Yang Di Pinjam</a></td>
                            <td><?php echo $key->status; ?></td>
                            <td>
                              <a class="btn btn-info" href="<?php echo site_url(''); ?>/buku/edit/<?php echo $key->id_buku; ?>">Edit</a>
                              <a class="btn btn-danger" href="<?php echo site_url(''); ?>/buku/delete/<?php echo $key->id_buku; ?>">Delete</a>
                              <?php if ($key->status != 'Kembali'): ?>

                                <button class="btn btn-success" data-href="<?php echo site_url(''); ?>/pengembalian/update/<?php echo $key->id_peminjaman; ?>" data-toggle="modal" data-target="#confirm-delete"> Konfirmasi Pengembalian </button>

                              <?php endif ?>
                            </td>
                          </tr>
                        <?php endforeach ?>
                      </tbody>
                      </br>




    <script>
        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
            
            $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
        });
    </script>
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/datatables.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );  
    </script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Hello World"></script>
    


  </body>
</html>