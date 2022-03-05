<link href="<?php echo base_url() ?>assets/style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
          crossorigin="anonymous">
  </script>

    <h1>Form Ubah Data Puskesmas</h1>
    <hr>
    <div style="color: red;"><?php echo validation_errors(); ?></div>
    <?php echo form_open("admin/ubah/".$tbl_puskesmas->id_list); ?>
      <table cellpadding="8">
        <tr>
          <td>Id</td>
          <td><input type="text" name="input_id" value="<?php echo $tbl_puskesmas->id_list ?>"></td>
        </tr>
        <tr>
          <td>Nama Puskesmas</td>
          <td><input type="text" name="input_nmpuskesmas" value="<?php echo $tbl_puskesmas->nama ?>"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><input type="text" name="input_alamat" value="<?php echo $tbl_puskesmas->alamat ?>"></td>
        </tr>
         <tr>
          <td>Kuota Vaksin</td>
          <td><input type="text" name="input_kuota" value="<?php echo $tbl_puskesmas->kuota ?>"></td>
        </tr> 
        <tr>
          <td>Jenis Vaksin</td>
          <td><input type="text" name="input_jenis" value="<?php echo $tbl_puskesmas->jenis ?>"></td>
        </tr>
        <tr>
          <td>Latitude</td>
          <td><input type="text" name="input_lat" value="<?php echo $tbl_puskesmas->lat ?>"></td>
        </tr>
        <tr>
          <td>Longitude</td>
          <td><input type="text" name="input_long" value="<?php echo $tbl_puskesmas->long ?>"></td>
        </tr>
        <tr>
          <td>Gambar</td>
          <td><input type="file" name="input_gambar" value="<?php echo $tbl_puskesmas->gambar ?>"></td>
        </tr>
        <!-- <tr>
          <td>Kategori</td>
          <td><input type="text" name="input_kategori" value="<?php echo $tbl_puskesmas->kategori ?>"></td>
        </tr> -->
      </table>
        
      <hr>
      <input type="submit" name="submit" value="Simpan">
      <a  href="<?php echo base_url(); ?>admin/index"><input type="button" value="Batal"></a>
    <?php echo form_close(); ?>