<?php if(empty($_GET['thisaction'])){header('location:../main');} ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <h3 class="box-title"></span>&nbsp;Semua Pengembalian</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <!-- <th>ID Peminjaman</th> -->
                  <th>Nama Pelanggan</th>
                  <th>Tanggal Peminjaman</th>
                  <th>Tanggal Pengembalian</th>
                  
                  <th>Produk</th>
                  <!-- <th>Alamat</th>
                  <th>No Telp</th>
                  <th>Email</th> -->
                  <th>Keterangan</th>
                  <th>Harga</th>
                  <th>Denda</th>
                  <th>Transaksi</th>
                  <th>Deskripsi</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
<?php $pro=mysqli_query($con,"SELECT * from peminjaman order by id_peminjaman desc");$vr=1;while($duk=mysqli_fetch_array($pro)){ ?>
                  <tr>
                  <!-- <td><?php echo $vr; ?></td> -->
                  <td><?php echo $duk['nama']; ?></td>
                  <!-- <td><?php echo $duk['id_peminjaman']; ?></td> -->
                  <td><?php echo $duk['tgl_peminjaman']; ?></td>
                  <td><?php echo $duk['tgl_kembali']; ?></td>
                  
                  <td><?php echo $duk['id_produk']; ?></td>
                  <!-- <td><?php echo $duk['alamat']; ?></td>
                  <td><?php echo $duk['no_telp']; ?></td>
                  <td><?php echo $duk['email']; ?></td> -->
                  <td><?php echo $duk['keterangan']; ?></td>
                  <td><?php echo $duk['harga']; ?></td>
                  <td><?php echo $duk['denda']; ?></td>
                  <td><?php echo $duk['transaksi']; ?></td>
                  <td><?php echo $duk['deskripsi']; ?></td>
                  <td><a class="btn btn-circle btn-success btn-xs" data-target="#tujuan<?php echo $duk['id_peminjaman']; ?>" data-toggle="modal"><i class="glyphicon glyphicon-eye-open"></i> Print</a>
                  <a href="main?thisaction=<?php echo base64_encode('editpeminjaman'); ?>&thispro=<?php echo base64_encode($duk['id_peminjaman']); ?>" class="btn btn-circle btn-success btn-sm tip-top" data-toggle="tooltip" data-original-title="Edit"><i class="glyphicon glyphicon-pencil"></i></td>
                  <!-- <td><?php echo $duk['tanggal']; ?></td>
                  <td><a class="btn btn-primary btn-xs" data-target="#bayar<?php echo $duk['id_peminjaman']; ?>" data-toggle="modal">Rp. <?php echo rp($duk['ongcart']+$duk['ongwil']+$duk['ongberat']); ?></a></td>
                  <td><?php echo $duk['status']; ?></td>
                  <td><a class="btn btn-primary btn-sm tip-top" data-toggle="tooltip" data-original-title="Detail" href="main?thisaction=<?php echo base64_encode('detailveri'); ?>&thischeckout=<?php echo base64_encode($duk['id_peminjaman']); ?>&for=qwerty"><i class="glyphicon glyphicon-search"></i></a>&nbsp;<a href="prosescon/hancon?thisposition=<?php echo base64_encode('deletecheckout'); ?>&thischeckout=<?php echo base64_encode($duk['id_peminjaman']); ?>" class="btn btn-danger btn-sm tip-top" data-toggle="tooltip" data-original-title="Hapus" onclick="return confirm('Yakin Menghapus Data Ini')"><i class="glyphicon glyphicon-remove"></i></a></td> --> -->
                </tr>
<!-- /.alamat tujuan -->
<div id="tujuan<?php echo $duk['id_peminjaman']; ?>" class="modal" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Check Data</h4>
        </div>
        <div class="modal-body">
          <p>Nama <b><?php echo $duk['nama']; ?></b></p>
          <p>Alamat <b><?php echo $duk['alamat']; ?></b></p>
          <p>No Telp <b><?php echo $duk['no_telp']; ?></b></p>
          <p>Email <b><?php echo $duk['email']; ?></b></p>
          <!-- <p>Kode Pos <b><?php echo $duk['kodepos']; ?></b></p>
          <p>Konfirmasi Phone <b><?php echo $duk['phone']; ?></b></p> -->
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary btn-circle">Print</button> 
          </form>
        </div>
        </div>
      </div>
    </div>
</div>
<div id="bayar<?php echo $duk['id_peminjaman']; ?>" class="modal" tabindex="-2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Total Pembayaran</h4>
        </div>
        <div class="modal-body">
          <p>Total Cart <b>Rp. <?php echo rp($duk['ongcart']); ?></b></p>
          <p>Ongkir Wilayah <b>Rp. <?php echo rp($duk['ongwil']); ?></b></p>
          <p>Ongkir Berat <b>Rp. <?php echo rp($duk['ongberat']); ?></b></p>
          <br>
          <p>Total Keseluruhan <b>Rp. <?php echo rp($duk['ongcart']+$duk['ongwil']+$duk['ongberat']); ?></b></p>
        </div>
      </div>
    </div>
</div>
<!-- /.total bayar -->
<?php $vr++; } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->