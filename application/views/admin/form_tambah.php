    <link href="<?php echo base_url() ?>assets/style.css" rel="stylesheet">

    <h1>Form Tambah Data Jual</h1>
    <hr>
    <div style="color: red;"><?php echo validation_errors(); ?></div>
    <?php echo form_open("admin/tambah"); ?>
      <table cellpadding="8">
<!--         <tr>
          <td>Id</td>
          <td><input type="text" name="input_id" value="<?php echo set_value('input_id'); ?>"></td>
        </tr> -->
        <tr>
          <td>Nama Produk</td>
          <td><input type="text" name="input_nmproduk" value="<?php echo set_value('input_nmproduk'); ?>"></td>
        </tr>
        <tr>
          <td>Deskripsi</td>
          <td><input type="text" name="input_des" value="<?php echo set_value('input_des'); ?>"></td>
        </tr>
         <tr>
          <td>Harga</td>
          <td><input type="text" name="input_harga" value="<?php echo set_value('input_harga'); ?>"></td>
        </tr>
        <td>Stok</td>
          <td><input type="text" name="input_stok" value="<?php echo set_value('input_stok'); ?>"></td>
        </tr>
        <tr>
          <td>Gambar</td>
          <td><input type="file" name="input_gambar" value="<?php echo set_value('input_gambar'); ?>"></td>
        </tr>
        <tr>
          <td>Kategori</td>
          <td><input type="text" name="input_kategori" value="<?php echo set_value('input_kategori'); ?>"></td>
        </tr>
      </table>
        
      <hr>
      <input type="submit" name="submit" value="Simpan">
      <a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
    <?php echo form_close(); ?>