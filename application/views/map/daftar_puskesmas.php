
  <link href="<?php echo base_url() ?>assets/style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
          crossorigin="anonymous">
  </script>

    <h1 style="padding-left: 500px">Data Puskemas</h1>
    <hr>
    <a class="btn btn-primary" href="<?php echo base_url() ?>">Home</a>
    <table border="1" style="padding-left: 30px">
      <thead>
        <th>No</th>
        <th>Nama Puskesmas</th>
        <th>Alamat</th>
        <th>Kuota Vaksin</th>
        <th>Jenis Vaksin</th>
        <th>Gambar</th>
        <th colspan="1">Aksi</th>
      </thead>
      <?php
        foreach($tbl_puskesmas as $data){
          ?>
          <tr>
          <td> <?php echo $data['id_list'] ?> </td>
          <td> <?php echo $data['nama'] ?> </td>
          <td> <?php echo $data['alamat'] ?> </td>
          <td> <?php echo $data['kuota'] ?> </td> 
          <td> <?php echo $data['jenis'] ?> </td> 
          <td> <?php echo $data['gambar'] ?> </td>
          <td> <a class="btn btn-primary" href= " <?php echo base_url(); ?>home/map" >Lihat Dimap</a></td>
          </tr>

       <?php } ?>
       
    </table>