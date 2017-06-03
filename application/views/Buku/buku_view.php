

                
<br>

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
                            
                            <table class="table table-hover" id="example">
                      <thead>
                        <tr>
                          <th>Judul</th>
                          <th>Pengarang</th>
                          <th>Kategori</th>
                          <th>Cover</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($databuku as $key ): ?>
                          <tr>
                            <td><?php echo $key->judul_buku; ?></td>
                            <td><?php echo $key->nama_pengarang; ?></td>
                            <td><?php echo $key->nama_kategori; ?></td>
                            <td><img id="cover" src="<?php echo base_url(''); ?>assets/uploads/<?php echo $key->cover; ?>"></td>
                            <td>
                              <a class="btn btn-info" href="<?php echo site_url(''); ?>/buku/edit/<?php echo $key->id_buku; ?>">Edit</a>
                              <a class="btn btn-danger" href="<?php echo site_url(''); ?>/buku/delete/<?php echo $key->id_buku; ?>">Delete</a>
                              
                            </td>
                          </tr>
                        <?php endforeach ?>
                      </tbody>
                      </br>

</table></div></div></div></div>

    </table>
                        
    