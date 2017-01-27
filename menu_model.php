function get_data_menuweb(){
      
      $sqlmenuweb = "SELECT * from menuweb where aktif = 'Y' ORDER BY urutan ASC";
      $menuweb = $this->db->query($sqlmenuweb)->result_array();
      $returnmenu;
      foreach($menuweb as $mw){
      if($mw['dropdown']=='Y'){

      $sql_submenuweb = "SELECT * from submenuweb where aktif = 'Y' and id_menuweb = $mw[id_menuweb] ORDER BY id_submenuweb ASC";
      $get_sm = $this->db->query($sql_submenuweb)->result_array();
      $submenuweb = '';
      foreach($get_sm as $sm){
        $submenuweb .= "<li><a href='$sm[link_submenuweb]'>$sm[nama_submenuweb]</a></li>";
      }
          $returnmenu[] = "<li><a href='javascript:void(0)'>$mw[nama_menu]<i class='fa fa-angle-down fa-indicator'></i></a>
                            <ul class='drop-down-multilevel right-menu'>
                                $submenuweb
                            </ul>
                          </li>";
        }else{
          $returnmenu[] = "<li><a href='".base_url()."'>$mw[nama_menu]</a></li>";
        }
           
      }

      return $returnmenu;
     // return $retundata;

    }
