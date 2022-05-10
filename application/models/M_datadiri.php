<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
/**
 * 
 */
class M_datadiri extends CI_model
{
	
	public function getdatadiri()
	{
		// cara 1
		return $this->db-> get('tbl_datadiri',1)->row();

		// cara 2
		//$this->db->select()
	}
}