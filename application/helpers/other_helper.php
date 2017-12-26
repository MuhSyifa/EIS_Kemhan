<?php

  function id_to_name($table,$field,$id,$output_name) {
    $ci=& get_instance();
    //$ci->load->database();
    $ci->load->database('veteran', TRUE);
    //var_dump($ci->load->database()); die();

    $qry    = "SELECT * FROM ".$table." WHERE ".$field."='".$id."' LIMIT 1";

    // echo $qry;
    $exec   = $ci->veteran->query($qry);
    $a      = $exec->result_array();

    if($exec->num_rows()>0){
      foreach($a as $row){
        $data=$row[$output_name];
      }
    }

    return (empty($data)) ? "" : $data;;

  }

  function crud_access($url, $text, $group=NULL, $module_id=NULL, $tipe, $attr=NULL)
  {
    $ci=& get_instance();
    $ci->load->database();

    $anchor  = "<a href='".$url."'  ".$attr.">".$text."</a>";
    $qry    = "SELECT * FROM action WHERE action_name='".strtolower($tipe)."' LIMIT 1";

    $exec = $ci->db->query($qry);

    if($exec->num_rows()>0){
      foreach($exec->result_array() as $row){
        $data[]=$row;
      }
      $key = $row['action_id'];
        }else{
      $key = NULL;
    }

    $qry_2 = "SELECT * FROM access_user WHERE group_id='".$group."' AND module_id='".$module_id."' AND action_id='".$key."' ";


    $exec_2 = $ci->db->query($qry_2);

    $previllage = $exec_2->num_rows();

    return ($previllage == "1") ? $anchor : "";
  }

  function uang_indo($string)
  {
    $nilaiRupiah  = "";
    $jumlahAngka  = strlen($string);
    while($jumlahAngka > 3)
    {
      $nilaiRupiah = ".".substr($string,-3).$nilaiRupiah;
      $sisaNilai   = strlen($string) - 3;
      $string      = substr($string,0,$sisaNilai);
      $jumlahAngka = strlen($string);
    }

    $nilaiRupiah       = $string.$nilaiRupiah;
    return $nilaiRupiah;
  }

  function ubah_npv($string)
  {
    $npvcode  = "";
    $jumlahcode  = strlen($string);
    while($jumlahcode  > 3)
    {
      $npvcode      = ".".substr($string,-3).$npvcode;
      $sisaNilai    = strlen($string) - 3;
      $string       = substr($string,0,$sisaNilai);
      $jumlahcode   = strlen($string);
    }

    $npvcode       = $string.$npvcode;
    $hit_npvcode   = strlen($npvcode);
    if ($hit_npvcode <= 9){
      $npv = "0".$npvcode;
    } else {
      $npv = $npvcode;
    }

    return $npv;
  }

  function kop_print()
  {
    $kop_print = 
    '
      <div align="left" style="margin-top:4px;" border="1" width="100%">
        <table>
            <tr>
              <td><img src="'.base_url().'assets/images/kop_logo_bw.png" width="300" style="margin-left:-15px;"></td>
            </tr> 
        </table>
        <hr style="border:1px solid #3A3A3A; border-collapse:collapse;" />
      </div>
    ';

    return $kop_print;
  }

  //ENCRYPTION CODE
  if (!function_exists('b64encode')) {
    /**
     * @twig filter
     *
     * @param string $string
     *
     * @return string
     */
    function b64encode($string)
    {
        $data = base64_encode($string);
        $data = str_replace(array('+', '/', '='), array('-', '_', ''), $data);

        return $data;
    }
}

if (!function_exists('b64decode')) {
    /**
     * @twig filter
     *
     * @param string $string
     *
     * @return string
     */
    function b64decode($string)
    {
        $data = str_replace(array('-', '_'), array('+', '/'), $string);
        $mod4 = strlen($data) % 4;

        if ($mod4) {
            $data .= substr('====', $mod4);
        }

        return base64_decode($data);
    }
}

function tuvet($string, $tuvet) {
  if($string == 'B' || $string == 'F'){
    if($tuvet == 0) {
      $hasil = "-";
    } else {
      $hasil = $tuvet;
    } 
  } else if($string == 'D' || $string == 'G'){
    if($tuvet/2 == 0) {
      $hasil = "-";
    } else {
      $hasil = $tuvet/2;
    }
  } else {
    $hasil = "-";
  }

  return $hasil;
}

function dahor($string, $dahor){
  if($string == 'A' || $string == 'F' || $string == 'G' || $string == 'H' || $string == 'I'){
    if($dahor == 0){
      $hasil = "-";
    } else {
      $hasil = $dahor;
    }
  } else {
    $hasil = "-";
  }
  return $hasil;
}

function tujanda($string, $tujanda, $aw){
  switch ($string) {
    case 'C':
    case 'H':
      if($tujanda == 0){
        $hasil = "-";
      } else {
        $hasil = $tujanda;
      }
      break;

    case 'E':
      if($tujanda/2 == 0){
        $hasil = "-";
      } else {
        $hasil = $tujanda/2;
      }
      break;
    case 'B':
    case 'F':
      if($aw <> '' && $aw <> '-' && $aw <> '_'){
        if($tujanda == 0){
          $hasil = "-";
        } else {
          $hasil = $tujanda;
        }
      } else {
        $hasil = "-";
      }
      break;

    case 'D':
    case 'G':
    case 'I':
    if($aw <> '' && $aw <> '-' && $aw <> '_'){
      if($tujanda/2 == 0){
        $hasil = "-";
      } else {
        $hasil = $tujanda/2;
      }
    } else {
      $hasil = "-";
    }
    break;

    default:
        $hasil = "-";
      break;
  }

  return $hasil;
}

function golongan_hakvet($string)
{
  switch ($string) {
      case 'A':
        $hakpengajuan = "kode_tunjangan<>'A' AND kode_tunjangan<>'F' AND kode_tunjangan<>'G'";
        break;
      case 'B':
      case 'D':
        // $hakpengajuan = "kode_tunjangan IN('A','C','E')";
        $hakpengajuan =  'kode_tunjangan<>"B" AND kode_tunjangan<>"D" AND kode_tunjangan<>"F" AND kode_tunjangan<>"G" AND kode_tunjangan<>"H"';
        break;
      case 'C':
      case 'E':
      case 'H':
      case 'I':
        $hakpengajuan = "kode_tunjangan='NULL'";
        break;
      case 'F':
      case 'G':
        $hakpengajuan =  'kode_tunjangan<>"A" AND kode_tunjangan<>"B" AND kode_tunjangan<>"D" AND kode_tunjangan<>"F" AND kode_tunjangan<>"G"';
        break;
      
      default:
        $hakpengajuan = "kode_tunjangan='NULL'";
        break;
    }

    return $hakpengajuan;
}

function golongan_hakvet_update($string)
{
  switch ($string) {
      case 'A':
        $hakpengajuan = "kode_tunjangan<>'F' AND kode_tunjangan<>'G'";
        break;
      case 'B':
        $hakpengajuan = 'kode_tunjangan<>"D" AND kode_tunjangan<>"F" AND kode_tunjangan<>"G" AND kode_tunjangan<>"H" AND kode_tunjangan<>"I"';
        break;
      case 'D':
        $hakpengajuan =  'kode_tunjangan<>"B" AND kode_tunjangan<>"F" AND kode_tunjangan<>"G" AND kode_tunjangan<>"H" AND kode_tunjangan<>"I"';
        break;
      case 'C':
        $hakpengajuan = "kode_tunjangan='C'";
        break;
      case 'E':
        $hakpengajuan = "kode_tunjangan='E'";
        break;
      case 'H':
        $hakpengajuan = "kode_tunjangan='H'";
        break;
      case 'I':
        $hakpengajuan = "kode_tunjangan='I'";
        break;
      case 'F':
        $hakpengajuan =  'kode_tunjangan<>"A" AND kode_tunjangan<>"B" AND kode_tunjangan<>"D" AND kode_tunjangan<>"G" AND kode_tunjangan<>"H"';
        break;
      case 'G':
        $hakpengajuan =  'kode_tunjangan<>"A" AND kode_tunjangan<>"B" AND kode_tunjangan<>"D" AND kode_tunjangan<>"F"';
        break;
      
      default:
        $hakpengajuan = "kode_tunjangan='NULL'";
        break;
    }

    return $hakpengajuan;
}

function bulan_romawi($string)
{
  switch ($string) {
      case '01':
        $bln = "I";
        break;
      case '02':
        $bln = "II";
        break;
      case '03':
        $bln = "III";
        break;
      case '04':
        $bln = "IV";
        break;
      case '05':
        $bln = "V";
        break;
      case '06':
        $bln = "VI";
        break;
      case '07':
        $bln = "VII";
        break;
      case '08':
        $bln = "VIII";
        break;
      case '09':
        $bln = "IX";
        break;
      case '10':
        $bln = "X";
        break;
      case '11':
        $bln = "XI";
        break;
      case '12':
        $bln = "X";
        break;
      
      default:
        $bln = "";
        break;
    }

    return $bln;
}

function get_triwulan($babin,$from,$to, $year, $output_name='jml') {
    $ci=& get_instance();
    //$ci->load->database();
    //$ci->db_veteran = $ci->load->database('veteran', TRUE);
    $ci->load->database('veteran', TRUE);

    if(!empty($babin)){
      $babin_id = $babin = "AND `babin` = '".$babin."'"; 
    } else {
      $babin_id =""; 
    }

    $qry = "SELECT COUNT(`babin`) AS jml 
            FROM `z_event_eis` 
            WHERE `tgl_pengajuan` <> 'NULL' 
            AND `babin` <> 'NULL' 
            AND (MONTH(`tgl_pengajuan`)>= '".$from."' AND MONTH(`tgl_pengajuan`)<='".$to."')
            AND YEAR(`tgl_pengajuan`) = '".$year."'
            $babin_id
            GROUP BY `babin`";

    $exec   = $ci->veteran->query($qry);
    $a      = $exec->result_array();

    if($exec->num_rows()>0){
      foreach($a as $row){
        $jml=$row[$output_name];
      }
    }

    return (empty($jml)) ? "0" : $jml;

  }

  function get_kep($kep,$output_name='jml') {
    $ci=& get_instance();
    $ci->load->database('veteran', TRUE);

    $qry = "SELECT `kode_kep`, COUNT(`kode_kep`) AS jml 
            FROM `tpengajuan_baru` 
            WHERE `kode_kep` = '".$kep."' 
            GROUP BY `kode_kep`";

    $exec   = $ci->veteran->query($qry);
    $a      = $exec->result_array();

    if($exec->num_rows()>0){
      foreach($a as $row){
        $jml=$row[$output_name];
      }
    }

    return (empty($jml)) ? "0" : $jml;
  }

?>