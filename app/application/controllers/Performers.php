<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Performers extends CI_Controller {

  public function index($limit, $page)
  {
    $this->load->database();
    $this->db->limit($limit, $page * 10);
    $performers = $this->db->get('performers');
    header('Content-Type: application/json');
    echo json_encode($performers->result());
    die;
	}
}
