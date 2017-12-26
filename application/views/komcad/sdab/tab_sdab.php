        <menu class="no-print">
            <?php
                if ($this->uri->segment(2) == 'sdab') {
                    $classSdab = 'btn btn-greensea';
                }else{
                    $classSdab = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sdab_hk') {
                    $classHk = 'btn btn-greensea';
                }else{
                    $classHk = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sdab_kebun') {
                    $classKebun = 'btn btn-greensea';
                }else{
                    $classKebun = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sdab_peternakan') {
                    $classPeternakan = 'btn btn-greensea';
                }else{
                    $classPeternakan = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sdab_ind_perkebunan') {
                    $classIndPerkebunan = 'btn btn-greensea';
                }else{
                    $classIndPerkebunan = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sdab_ind_perikanan') {
                    $classIndPerikanan = 'btn btn-greensea';
                }else{
                    $classIndPerikanan = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sdab_listrik') {
                    $classListrik = 'btn btn-greensea';
                }else{
                    $classListrik = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sdab_bbm') {
                    $classBbm = 'btn btn-greensea';
                }else{
                    $classBbm = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sdab_mineral_ra') {
                    $classMineralRa = 'btn btn-greensea';
                }else{
                    $classMineralRa = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sdab_mineral_logam') {
                    $classMineralLogam = 'btn btn-greensea';
                }else{
                    $classMineralLogam = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sdab_mineral_nonlogam') {
                    $classMineralNonLogam = 'btn btn-greensea';
                }else{
                    $classMineralNonLogam = 'btn btn-slategray';
                }

                if ($this->uri->segment(2) == 'sdab_mineral_batuan') {
                    $classMineralBantuan = 'btn btn-greensea';
                }else{
                    $classMineralBantuan = 'btn btn-slategray';
                }
            ?>
            <a href="<?php echo base_url(''); ?>komcad/sdab">
                <button type="button" class="<?php echo $classSdab; ?>" style="margin-bottom: 12px;">PADI PALAWIJA</button>
            </a>
            <a href="<?php echo base_url(''); ?>komcad/sdab_hk">
                <button type="button" class="<?php echo $classHk; ?>" style="margin-bottom: 12px;">HORTIKULTURA</button>
            </a>
            <a href="<?php echo base_url(''); ?>komcad/sdab_kebun">
                <button type="button" class="<?php echo $classKebun; ?>" style="margin-bottom: 12px;">PERKEBUNAN</button>
            </a>
            <a href="<?php echo base_url(''); ?>komcad/sdab_peternakan">
                <button type="button" class="<?php echo $classPeternakan; ?>" style="margin-bottom: 12px;">PETERNAKAN</button>
            </a>
            <a href="<?php echo base_url(''); ?>komcad/sdab_ind_perkebunan">
                <button type="button" class="<?php echo $classIndPerkebunan; ?>" style="margin-bottom: 12px;">INDUSTRI PERKEBUNAN</button>
            </a>
            <a href="<?php echo base_url(''); ?>komcad/sdab_ind_perikanan">
                <button type="button" class="<?php echo $classIndPerikanan; ?>" style="margin-bottom: 12px;">INDUSTRI PERIKANAN</button>
            </a>
            <a href="<?php echo base_url(''); ?>komcad/sdab_listrik">
                <button type="button" class="<?php echo $classListrik; ?>" style="margin-bottom: 12px;">LISTRIK</button>
            </a>
            <a href="<?php echo base_url(''); ?>komcad/sdab_bbm">
                <button type="button" class="<?php echo $classBbm; ?>" style="margin-bottom: 12px;">BBM</button>
            </a>
            <a href="<?php echo base_url(''); ?>komcad/sdab_mineral_ra">
                <button type="button" class="<?php echo $classMineralRa; ?>" style="margin-bottom: 12px;">MINERAL RADIOAKTIF</button>
            </a>
            <a href="<?php echo base_url(''); ?>komcad/sdab_mineral_logam">
                <button type="button" class="<?php echo $classMineralLogam; ?>" style="margin-bottom: 12px;">MINERAL LOGAM</button>
            </a>
            <a href="<?php echo base_url(''); ?>komcad/sdab_mineral_nonlogam">
                <button type="button" class="<?php echo $classMineralNonLogam; ?>" style="margin-bottom: 12px;">MINERAL NON LOGAM</button>
            </a>
            <a href="<?php echo base_url(''); ?>komcad/sdab_mineral_batuan">
                <button type="button" class="<?php echo $classMineralBantuan; ?>" style="margin-bottom: 12px;">MINERAL BATUAN</button>
            </a>
        </menu>