<?php if(empty($_GET['thisaction'])){header('location:../main');} ?>
<div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Peminjaman</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data" action="prosescon/hancon?thisposition=<?php echo base64_encode('addpeminjaman'); ?>">
              <div class="box-body">
                <div class="form-group">
                  <label>ID_Peminjaman</label>
                  <input type="text" name="id_peminjaman" class="form-control" value="<?php echo substr(md5(rand()), 0,6); ?>" readonly>
                </div>
                <div class="form-group">
                  <label>Kategori Produk</label>
                  <select name="id_kat_produk" class="form-control">
                    <option value="tidak ada">Pilih</option>
<?php $ktp=mysqli_query($con,"SELECT * FROM rkat_produk order by kat_produk asc");while($pkt=mysqli_fetch_array($ktp)){ ?>
                    <option value="<?php echo $pkt['kat_produk']; ?>"><?php echo $pkt['kat_produk']; ?></option>
<?php }?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Produk</label>
                  <select name="id_produk" class="form-control">
                    <option value="tidak ada">Pilih</option>
<?php $ktp=mysqli_query($con,"SELECT * FROM produk order by id_produk asc");while($pkt=mysqli_fetch_array($ktp)){ ?>
                    <option value="<?php echo $pkt['nama']; ?>"><?php echo $pkt['nama']; ?></option>
<?php }?>
                  </select>
                </div>

                <div class="form-group">
                  <label>Tanggal Peminjaman</label>
                  <input type="text" name="tglpeminjaman" class="form-control" value="<?php echo date('Y-m-d'); ?>" >
                </div>
                <div class="form-group">
                  <label>Tanggal Pengembalian</label>
                  <input type="text" name="tglkembali" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" >
                </div>
                <!-- <div class="form-group">
                  <label>Nama</label>
                  <select name="nama" class="form-control">
                    <option value="tidak ada">Pilih</option>
<?php $ktp=mysqli_query($con,"SELECT * FROM user order by username asc");while($pkt=mysqli_fetch_array($ktp)){ ?>
                    <option value="<?php echo $pkt['username']; ?>"><?php echo $pkt['username']; ?></option>
<?php }?>
                  </select>
                </div> -->
                <div class="form-group">
                  <label>alamat</label>
                  <textarea name="alamat" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                  <label>No Telp</label>
                  <input type="text" name="no_telp" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" name="harga" class="form-control" >
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" name="keterangan" class="form-control" value="belum kembali" readonly>
                </div>
                <div class="form-group">
                  <label>Denda</label>
                  <input type="text" name="denda" class="form-control" value="0"readonly>
                </div>
                <div class="form-group">
                  <label>Transaksi</label>
                  <select name="transaksi" class="form-control">
                    <option value="tidak ada">Pilih</option>
<?php $ktp=mysqli_query($con,"SELECT * FROM transaksi order by id_transaksi asc");while($pkt=mysqli_fetch_array($ktp)){ ?>
                    <option value="<?php echo $pkt['nama']; ?>"><?php echo $pkt['nama']; ?></option>
<?php }?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Deskripsi</label>
                  <input type="text" name="deskripsi" class="form-control" value="Tidak ada deskripsi">
                </div>
                <!-- <div class="form-group">
                  <label>Tanggal Post</label>
                  <input type="text" name="tanggal" class="form-control" value="<?php echo date('Y-m-d'); ?>" readonly>
                </div>
                <div class="form-group">
                  <label>Deskripsi</label>
                  <textarea name="deskripsi" class="form-control"></textarea>
                </div>
                 -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-circle"><i class="glyphicon glyphicon-ok"></i> Simpan</button>&nbsp;&nbsp;<a href="main?thisaction=<?php echo base64_encode('peminjaman'); ?>" class="btn btn-circle btn-success"><i class="glyphicon glyphicon-repeat"></i>  Batal</a>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>