<!-- 
<script type="text/javascript">
  function cekhalaman() {
    document.getElementById("peminjaman_nav").className = "active"
  }
</script>
             -->    
<br>
             <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>Denda</h2>
                                </div>
                                
                            </div>

                    <table class="table table-hover" id="example">
                      <thead>
                        <tr>
                          
                          <th>Nama</th>
                          <th>Tanggal Pinjam</th>
                          <th>Denda</th>
                          <th>Buku</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($denda as $key ): ?>
                          <tr>
                            
                            <td><?php echo $key->nama_user; ?></td>
                            <!-- <td><img id="cover" src="<?php echo base_url(''); ?>assets/uploads/<?php echo $key->cover; ?>"></td>
                            <td> -->
                            <td><?php echo $key->tanggal_pinjam; ?></td>
                            <td>Rp. <?php echo $key->detail_denda; ?>;-</td>
                            <td><a class="btn btn-info" href="<?php echo site_url(''); ?>/pengembalian/bukuygdipinjam/<?php echo $key->id_user; ?>/<?php echo $key->id_peminjaman; ?>">Buku Yang Di Pinjam</a></td>
                            <td><?php echo $key->status; ?></td>
                            <td>
                              <a class="btn btn-info" href="<?php echo site_url(''); ?>/buku/edit/<?php echo $key->id_buku; ?>">Edit</a>
                              <a class="btn btn-danger" href="<?php echo site_url(''); ?>/buku/delete/<?php echo $key->id_buku; ?>">Delete</a>
                              <?php if ($key->status != 'Kembali'): ?>
                                <a class="btn btn-success" href="<?php echo site_url(''); ?>/pengembalian/update/<?php echo $key->id_peminjaman; ?>">Konfirmasi pengembalian</a>
                              <?php endif ?>
                            </td>
                          </tr>
                        <?php endforeach ?>
                      </tbody>
                      </br>


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
    

