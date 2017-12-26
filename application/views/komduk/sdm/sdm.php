<div id="content" class="col-md-12">
    <!-- page header -->
    <div class="pageheader">
        <h2><i class="fa fa-users" style="line-height: 48px;padding-left: 2px;"></i> SUMBER DAYA MANUSIA</h2>
            

        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li>You are here</li>
                <li><a href="#">KOMDUK</a></li>
                <li class="active">SDM</li>
            </ol>
        </div>
    </div>
    <!-- /page header -->
          
    <!-- content main container -->
    <div class="main">
        <menu class="no-print">
            <a href="<?php echo base_url(''); ?>komduk/sdm">
                <button type="button" class="btn btn-greensea">SEMUA SDM</button>
            </a>
            <a href="<?php echo base_url(''); ?>komduk/garda_bangsa">
                <button type="button" class="btn btn-slategray">GARDA BANGSA</button>
            </a>
            <a href="<?php echo base_url(''); ?>komduk/tenaga_ahli">
                <button type="button" class="btn btn-slategray">TENAGA AHLI</button>
            </a>
            <a href="<?php echo base_url(''); ?>komduk/warga_lainnya">
                <button type="button" class="btn btn-slategray">WN LAINNYA</button>
            </a>
        </menu>

            <!-- cards -->
            <div class="row cards">
              
              <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                <!--
                ======================================SEMUA SDM======================================
                -->
                <div class="card card-redbrown">
                  <div class="front"> 

                    <div class="media">        
                      <span class="pull-left">
                       
                      </span>

                      <div class="media-body">
                        <medium><b>Total SDM</b></medium>
                        <h2 class="media-heading animate-number" data-value="5065531" data-animation-duration="1500">0</h2>
                      </div>
                    </div> 

                  </div>
                </div>
              </div>


              <?php 
                //var_dump($bidang);
                  $no = 1;
                  if (!empty($bidang)) {
                      foreach ($bidang as $key) {
                        if($no == 1){
                            $color = "card-blue";
                        }

                        if($no % 2 == 0){
                            $color = "card-slategray";
                        }else{
                            $color = "card-blue";
                        }

                        if($no % 3 == 0){
                            $color = "card-greensea";
                        }
              ?>


              <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                <!--
                ======================================WARGA LAINNYA======================================
                -->
                <div class="card <?php echo $color; ?> ">
                  <div class="front">        
                    
                    <div class="media">                  
                     

                      <div class="media-body">
                        <medium><b><?php echo $key->nama; ?></b></medium>
                        <h2 class="media-heading animate-number" data-value="<?php echo $key->jumlah; ?>" data-animation-duration="1500">0</h2>
                      </div>
                    </div> 

                  </div>
               
                </div>
              </div>

              <?php
                        $no++;
                      }
                  }
              ?>

            </div>
            <!-- /cards -->

            <!-- row -->
            <div class="row">

              
              <!-- col 12 -->
              <div class="col-md-12">
                
                <div class="col-md-6">
                    <!-- tile -->
                    <section class="tile">

                        <!-- tile header -->
                        <div class="tile-header">
                          <h3><strong>Statistik</strong> Sumber Daya Alam Berdasarkan Provinsi</h3>
                          <div class="controls">
                              <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                              <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                              <a href="#" class="remove"><i class="fa fa-times"></i></a>
                          </div>
                        </div>
                        <!-- /tile header -->

                        <!-- tile body -->
                        <div class="tile-body">
                          <table class="table table-hover sdm_provinsi" style="width: 100%; font-size:13px" id="sdm_provinsi">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Provinsi</th>
                                  <th>Jumlah</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                  if($data_provinsi){
                                    $no=1;
                                    foreach ($data_provinsi as $value) {
                                ?>
                                <tr>
                                  <td><?php echo $no++; ?></td>
                                  <td><?php echo $value->nm_propinsi; ?></td>
                                  <td><?php echo $value->jumlah; ?></td>
                                </tr>
                                <?php
                                      }
                                  }
                                ?>

                              </tbody>
                          </table>
                        </div>
                        <!-- /tile body -->
                    
                    </section>
                    <!-- /tile -->  
                </div>
                
                <div class="col-md-6">
                    <!-- tile -->
                    <section class="tile">

                        <!-- tile header -->
                        <div class="tile-header">
                          <h3><strong>Statistik</strong> Sumber Daya Alam Berdasarkan Sub Bidang</h3>
                          <div class="controls">
                              <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                              <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                              <a href="#" class="remove"><i class="fa fa-times"></i></a>
                          </div>
                        </div>
                        <!-- /tile header -->

                        <!-- tile body -->
                        <div class="tile-body">
                          <table class="table table-hover sdm_subBidang" style="width: 100%; font-size:13px" id="sdm_subBidang">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Sub Bidang</th>
                                  <th>Jumlah</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                  if($bidang){
                                    $no=1;
                                    foreach ($bidang as $value) {
                                ?>
                                <tr>
                                  <td><?php echo $no++; ?></td>
                                  <td><?php echo $value->nama; ?></td>
                                  <td><?php echo $value->jumlah; ?></td>
                                </tr>
                                <?php
                                      }
                                  }
                                ?>

                              </tbody>
                          </table>
                        </div>
                        <!-- /tile body -->
                    
                    </section>
                    <!-- /tile -->  
                </div>

                <div class="col-md-12">
                    <!-- tile -->
                    <section class="tile">

                        <!-- tile header -->
                        <div class="tile-header">
                          <h3><strong>Statistik</strong> Sumber Daya Alam</h3>
                          <div class="controls">
                              <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                              <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                              <a href="#" class="remove"><i class="fa fa-times"></i></a>
                          </div>
                        </div>
                        <!-- /tile header -->

                        <!-- tile body -->
                        <div class="tile-body">
                          <div class="container" style="width: 100%" id="containerSdmKomduk"></div>
                        </div>
                        <!-- /tile body -->
                    
                    </section>
                    <!-- /tile -->  
                </div>
              
              </div>
            </div>

    </div>
    <!-- /content container -->
</div>