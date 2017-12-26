<div id="content" class="col-md-12">
    <!-- page header -->
    <div class="pageheader">
        <h2><i class="fa fa-th" style="line-height: 48px;padding-left: 2px;"></i> SARANA PRASARANA - RADIO TRANSMISI</h2>
            

        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li>You are here</li>
                <li><a href="#">KOMDUK</a></li>
                <li><a href="#">SARPRAS</a></li>
                <li class="active">RADIO TRANSMISI</li>
            </ol>
        </div>
    </div>
    <!-- /page header -->
          
    <!-- content main container -->
    <div class="main">
            <?php $this->load->view('komduk/sarpras/tab_sarpras.php'); ?>

            <!-- cards -->
            <div class="row cards">
              
              <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                <!--
                ======================================SEMUA SDAB PP======================================
                -->
                <div class="card card-redbrown">
                  <div class="front"> 

                    <div class="media">        
                      <span class="pull-left">
                       
                      </span>

                      <div class="media-body">
                        <medium><b>Jumlah Stasiun Pemancar   </b></medium>
                        <h2 class="media-heading animate-number" data-value="0" data-animation-duration="1500">0</h2>
                      </div>
                    </div> 

                  </div>
                </div>
              </div>


              <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                <!--
                ======================================SEMUA SDAB Hortikultura Pisang======================================
                -->
                <div class="card card-greensea">
                  <div class="front"> 

                    <div class="media">        
                      <span class="pull-left">
                       
                      </span>

                      <div class="media-body">
                        <medium><b>Jumlah Stasiun Transmisi Telepon</b></medium>
                        <h2 class="media-heading animate-number" data-value="0" data-animation-duration="1500">0</h2>
                      </div>
                    </div> 

                  </div>
                </div>
              </div>


              <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                <!--
                ======================================SEMUA SDAB Hortikultura Jahe======================================
                -->
                <div class="card card-slategray">
                  <div class="front"> 

                    <div class="media">        
                      <span class="pull-left">
                       
                      </span>

                      <div class="media-body">
                        <medium><b>Jumlah RAPI</b></medium>
                        <h2 class="media-heading animate-number" data-value="0" data-animation-duration="1500">0</h2>
                      </div>
                    </div> 

                  </div>
                </div>
              </div>

              <div class="card-container col-lg-3 col-sm-6 col-sm-12">
                <!--
                ======================================SEMUA SDAB Hortikultura Jahe======================================
                -->
                <div class="card card-blue">
                  <div class="front"> 

                    <div class="media">        
                      <span class="pull-left">
                       
                      </span>

                      <div class="media-body">
                        <medium><b>Jumlah ORARI</b></medium>
                        <h2 class="media-heading animate-number" data-value="0" data-animation-duration="1500">0</h2>
                      </div>
                    </div> 

                  </div>
                </div>
              </div>

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
                          <h3><strong>Statistik</strong> Sarana Prasarana - Stasiun Radio Transmisi Provinsi</h3>
                          <div class="controls">
                              <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                              <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                              <a href="#" class="remove"><i class="fa fa-times"></i></a>
                          </div>
                        </div>
                        <!-- /tile header -->

                        <!-- tile body -->
                        <div class="tile-body">
                          <table class="table table-hover sarprasRadioTransmisi_provinsi" style="width: 100%; font-size:13px" id="sdm_provinsi">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Provinsi</th>
                                  <th>Kabupaten/Kota</th>
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
                                  <td><?php echo $value->nm_kabupaten; ?></td>
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
                          <h3><strong>Statistik</strong> Sarana Prasarana - Radio Transmisi Berdasarkan Sub Bidang</h3>
                          <div class="controls">
                              <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                              <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                              <a href="#" class="remove"><i class="fa fa-times"></i></a>
                          </div>
                        </div>
                        <!-- /tile header -->

                        <!-- tile body -->
                        <div class="tile-body">
                          <table class="table table-hover sarprasRadioTransmisi_subBidang" style="width: 100%; font-size:13px" id="sdm_subBidang">
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
                                  <td>1</td>
                                  <td>Stasiun Transmisi Telepom</td>
                                  <td><?php echo $value->stt; ?></td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>RAPI</td>
                                  <td><?php echo $value->rapi; ?></td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>ORARI</td>
                                  <td><?php echo $value->orari; ?></td>
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
                          <h3><strong>Statistik</strong> Sarana Prasarana - Radio Transmisi</h3>
                          <div class="controls">
                              <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                              <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                              <a href="#" class="remove"><i class="fa fa-times"></i></a>
                          </div>
                        </div>
                        <!-- /tile header -->

                        <!-- tile body -->
                        <div class="tile-body">
                          <div class="container" style="width: 100%" id="containerSarprasRadioTransmisiKomduk"></div>
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