<link href="<?php echo base_url() ?>assets/style.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/css.css" rel="stylesheet">

<!-- <div class="container" id="list-table">
    <div class="col-md-6">
      <div class="row">
        <h1 style="padding-left: 150px;">Data Puskesmas</h1>
          <div class="table-item">
              <hr>
                  <table cellpadding="8">
                    <tr>
                      <td>Nama Puskesmas</td>
                      <td> <?php echo $tbl_puskesmas->nama ?></td>
                    </tr>
                    <tr>
                      <td>Alamat</td>
                      <td> <?php echo $tbl_puskesmas->alamat ?></td>
                    </tr>
                    <tr>
                      <td>Jenis Vaksin</td>
                      <td> <?php echo $tbl_puskesmas->jenis ?></td>
                    </tr>
                    <tr>
                      <td>Kuota Vaksin</td>
                      <td> <?php echo $tbl_puskesmas->kuota ?></td>
                    </tr>
                  </table>
              <hr>
          </div>
              <div class="col-md-6">
                  <h1>Gambar Puskesmas</h1>
                    <div class="image-list">
                        <div class="image-box">
                        <?php echo $tbl_puskesmas->gambar ?>
                        </div>
                    </div>
              </div>
      </div>
    </div>
</div> -->

<body>
     
    <div class="container" id="list-puskesmas">
        <div class="row">
            <div class="col-md-6 map">
                  <div class="map-box">
                    <div class="table-item">
                        <hr>
                          <h2>Data Puskesmas</h2>
                            <table cellpadding="8">
                                <tr>
                                  <td>Nama Puskesmas</td>
                                  <td> <?php echo $tbl_puskesmas->nama ?></td>
                                </tr>
                                <tr>
                                  <td>Alamat</td>
                                  <td> <?php echo $tbl_puskesmas->alamat ?></td>
                                </tr>
                                <tr>
                                  <td>Jenis Vaksin</td>
                                  <td> <?php echo $tbl_puskesmas->jenis ?></td>
                                </tr>
                                <tr>
                                  <td>Kuota Vaksin</td>
                                  <td> <?php echo $tbl_puskesmas->kuota ?></td>
                                </tr>
                            </table>
                        <hr>
                   </div>
                </div>
            </div>
            <div class="col-md-6">
                <h2 style="padding-top: 10px;">Gambar Puskesmas</h2>
                <div class="list-hospital">
                    <div class="list-box" id="list-box">
                       <?php echo $tbl_puskesmas->gambar ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    