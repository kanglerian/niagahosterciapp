<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_package extends CI_Model
{

  function tampilkan_data()
  {
    return $this->db->get('package');
  }
}