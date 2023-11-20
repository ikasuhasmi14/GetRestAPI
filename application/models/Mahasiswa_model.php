<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Mahasiswa_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Mahasiswa_model extends CI_Model {

  // ------------------------------------------------------------------------

  
  public function getMahasiswa()
  {
    return $this->db->get('mahasiswa')->result_array();
  }

  // ------------------------------------------------------------------------

}

/* End of file Mahasiswa_model.php */
/* Location: ./application/models/Mahasiswa_model.php */