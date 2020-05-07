<?php if(empty($_GET['thisaction'])){header('location:../main');} ?>
<?php $pro=base64_decode($_GET['thispro']);$dukduk=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM peminjaman where id_peminjaman='$pro' ")); ?>
<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Peminjaman</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data" action="prosescon/hancon?thisposition=<?php echo base64_encode('editpeminjaman'); ?>">
              <div class="box-body">
                <div class="form-group">
                  <label>ID Peminjaman</label>
                  <input type="text" name="id_peminjaman" class="form-control" value="<?php echo $dukduk['id_peminjaman']; ?>" readonly>
                </div>
                <div class="form-group">
                  <label>Tanggal Peminjaman</label>
                  <input type="text" name="tgl_peminjaman" class="form-control" value="<?php echo $dukduk['tgl_peminjaman']; ?>"readonly> 
                </div>
                <div class="form-group">
                  <label>Tanggal Kembali</label>
                  <input type="text" name="tgl_kembali" class="form-control" value="<?php echo $dukduk['tgl_kembali']; ?>">
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" value="<?php echo $dukduk['nama']; ?>"readonly>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control" value="<?php echo $dukduk['email']; ?>"readonly>
                </div>
                <div class="form-group">
                  <label>No Telp</label>
                  <input type="text" name="no_telp" class="form-control" value="<?php echo $dukduk['no_telp']; ?>"readonly>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" class="form-control" value="<?php echo $dukduk['alamat']; ?>"readonly>
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" name="harga" class="form-control" value="<?php echo $dukduk['harga']; ?>"readonly>
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" name="keterangan" class="form-control" value="<?php echo $dukduk['keterangan']; ?>">
                </div>
                <div class="form-group">
                  <label>Denda</label>
                  <input type="text" name="denda" class="form-control" value="<?php echo $dukduk['denda']; ?>">
                </div>
                <!-- <div class="form-group">
                  <label>Transaksi</label>
                  <select name="transaksi" class="form-control">
                    <option value="tidak ada">Pilih</option>
<?php $ktp=mysqli_query($con,"SELECT * FROM transaksi order by id_transaksi asc");while($pkt=mysqli_fetch_array($ktp)){ ?>
                    <option value="<?php echo $pkt['nama']; ?>"><?php echo $pkt['nama']; ?></option>
<?php }?>
                  </select>
                </div> -->
                <div class="form-group">
                  <label>Deskripsi</label>
                  <input type="text" name="deskripsi" class="form-control" value="<?php echo $dukduk['deskripsi']; ?>">
                </div>
<!--                 
                <div class="form-group">
                  <label><img style="width:100px;height:120px;" src="<?php echo $dukduk['gambar']; ?>"></label>
                  <input type="file" name="gambar" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Tanggal Post</label>
                  <input type="text" name="tanggal" class="form-control" value="<?php echo date('Y-m-d'); ?>" readonly>
                </div>
                <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea name="deskripsi" class="form-control"><?php echo $dukduk['deskripsi']; ?></textarea>
                </div> -->
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-circle"><i class="glyphicon glyphicon-ok"></i> Simpan</button>&nbsp;&nbsp;<a href="main?thisaction=<?php echo base64_encode('listproduct'); ?>" class="btn btn-circle btn-success"><i class="glyphicon glyphicon-repeat"></i>  Batal</a>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>