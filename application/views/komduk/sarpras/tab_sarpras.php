        <menu class="no-print">
            <?php
                if ($this->uri->segment(2) == 'sarpras_in') {
                    $classIn = 'btn btn-greensea';
                }else{
                    $classIn = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sarpras_lbb') {
                    $classLbb = 'btn btn-greensea';
                }else{
                    $classLbb = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sarpras_fk') {
                    $classFk = 'btn btn-greensea';
                }else{
                    $classFk = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sarpras_sp') {
                    $classSp = 'btn btn-greensea';
                }else{
                    $classSp = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sarpras_rt') {
                    $classRt = 'btn btn-greensea';
                }else{
                    $classRt = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sarpras_id') {
                    $classId = 'btn btn-greensea';
                }else{
                    $classId = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sarpras_rs') {
                    $classRs = 'btn btn-greensea';
                }else{
                    $classRs = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sarpras_il') {
                    $classIl = 'btn btn-greensea';
                }else{
                    $classIl = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sarpras_pel_pelayanan_laut') {
                    $classPelPelayananLaut = 'btn btn-greensea';
                }else{
                    $classPelPelayananLaut = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sarpras_pel_pelayaran_laut') {
                    $classPelPelayaranLaut = 'btn btn-greensea';
                }else{
                    $classPelPelayaranLaut = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sarpras_pel_singgah_laut') {
                    $classPelSinggahLaut = 'btn btn-greensea';
                }else{
                    $classPelSinggahLaut = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sarpras_pel_perikanan_laut') {
                    $classPelPerikananLaut = 'btn btn-greensea';
                }else{
                    $classPelPerikananLaut = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sarpras_perahu_laut') {
                    $classPerahuLaut = 'btn btn-greensea';
                }else{
                    $classPerahuLaut = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sarpras_kapal_laut') {
                    $classKapalLaut = 'btn btn-greensea';
                }else{
                    $classKapalLaut = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sarpras_layanan_kapal_laut') {
                    $classLayananLaut = 'btn btn-greensea';
                }else{
                    $classLayananLaut = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sarpras_bbm_udara') {
                    $classBbmUdara = 'btn btn-greensea';
                }else{
                    $classBbmUdara = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sarpras_bandara_udara') {
                    $classBandaraUdara = 'btn btn-greensea';
                }else{
                    $classBandaraUdara = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sarpras_fasilitas_lain_udara') {
                    $classFasilitasLainUdara = 'btn btn-greensea';
                }else{
                    $classFasilitasLainUdara = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sarpras_angkatan_udara') {
                    $classAngkatanUdara = 'btn btn-greensea';
                }else{
                    $classAngkatanUdara = 'btn btn-slategray';
                }
            ?>


            <a href="<?php echo base_url(''); ?>komduk/sarpras_in">
                <button type="button" class="<?php echo $classIn; ?>" style="margin-bottom: 12px;">INDUSTRI NASIONAL</button>
            </a>
            <a href="<?php echo base_url(''); ?>komduk/sarpras_lbb">
                <button type="button" class="<?php echo $classLbb; ?>" style="margin-bottom: 12px;">LOGISTIK BAHAN BAKAR</button>
            </a>
            <a href="<?php echo base_url(''); ?>komduk/sarpras_fk">
                <button type="button" class="<?php echo $classFk; ?>" style="margin-bottom: 12px;">FASILITAS KOMUNIKASI</button>
            </a>
            <a href="<?php echo base_url(''); ?>komduk/sarpras_sp">
                <button type="button" class="<?php echo $classSp; ?>" style="margin-bottom: 12px;">STASIUN PEMANCAR</button>
            </a>
            <a href="<?php echo base_url(''); ?>komduk/sarpras_rt">
                <button type="button" class="<?php echo $classRt; ?>" style="margin-bottom: 12px;">RADIO TRANSMISI</button>
            </a>
            <a href="<?php echo base_url(''); ?>komduk/sarpras_id">
                <button type="button" class="<?php echo $classId; ?>" style="margin-bottom: 12px;">INDUSTRI - DARAT</button>
            </a>
            <a href="<?php echo base_url(''); ?>komduk/sarpras_rs">
                <button type="button" class="<?php echo $classRs; ?>" style="margin-bottom: 12px;">RUMAH SAKIT</button>
            </a>
            <a href="<?php echo base_url(''); ?>komduk/sarpras_il">
                <button type="button" class="<?php echo $classIl; ?>" style="margin-bottom: 12px;">INDUSTRI - LAUT</button>
            </a>
            <a href="<?php echo base_url(''); ?>komduk/sarpras_pel_pelayanan_laut">
                <button type="button" class="<?php echo $classPelPelayananLaut; ?>" style="margin-bottom: 12px;">PELABUHAN PELAYANAN - LAUT</button>
            </a>
            <a href="<?php echo base_url(''); ?>komduk/sarpras_pel_pelayaran_laut">
                <button type="button" class="<?php echo $classPelPelayaranLaut; ?>" style="margin-bottom: 12px;">PELABUHAN PELAYARAN - LAUT</button>
            </a>
            <a href="<?php echo base_url(''); ?>komduk/sarpras_pel_singgah_laut">
                <button type="button" class="<?php echo $classPelSinggahLaut; ?>" style="margin-bottom: 12px;">PELABUHAN KAPAL SINGGAH - LAUT</button>
            </a>
            <a href="<?php echo base_url(''); ?>komduk/sarpras_pel_perikanan_laut">
                <button type="button" class="<?php echo $classPelPerikananLaut; ?>" style="margin-bottom: 12px;">PELABUHAN PERIKANAN - LAUT</button>
            </a>
            <a href="<?php echo base_url(''); ?>komduk/sarpras_perahu_laut">
                <button type="button" class="<?php echo $classPerahuLaut; ?>" style="margin-bottom: 12px;">PERAHU - LAUT</button>
            </a>
            <a href="<?php echo base_url(''); ?>komduk/sarpras_kapal_laut">
                <button type="button" class="<?php echo $classKapalLaut; ?>" style="margin-bottom: 12px;">KAPAL - LAUT</button>
            </a>
            <a href="<?php echo base_url(''); ?>komduk/sarpras_layanan_kapal_laut">
                <button type="button" class="<?php echo $classLayananLaut; ?>" style="margin-bottom: 12px;">LAYANAN KAPAL - LAUT</button>
            </a>
            <a href="<?php echo base_url(''); ?>komduk/sarpras_bbm_udara">
                <button type="button" class="<?php echo $classBbmUdara; ?>" style="margin-bottom: 12px;">BBM - UDARA</button>
            </a>
            <a href="<?php echo base_url(''); ?>komduk/sarpras_bandara_udara">
                <button type="button" class="<?php echo $classBandaraUdara; ?>" style="margin-bottom: 12px;">BANDARA - UDARA</button>
            </a>
            <a href="<?php echo base_url(''); ?>komduk/sarpras_fasilitas_lain_udara">
                <button type="button" class="<?php echo $classFasilitasLainUdara; ?>" style="margin-bottom: 12px;">FASILITAS LAIN - UDARA</button>
            </a>
            <a href="<?php echo base_url(''); ?>komduk/sarpras_angkatan_udara">
                <button type="button" class="<?php echo $classAngkatanUdara; ?>" style="margin-bottom: 12px;">ANGKATAN UDARA</button>
            </a>
        </menu>