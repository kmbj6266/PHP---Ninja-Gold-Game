<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ninja_golds extends CI_Controller 
{

	public function index()
	{

		if(!$this->session->userdata('gold'))
				{
					$this->session->userdata('gold',0);
				}

			if(!$this->session->userdata('activities'))
				{
					$this->session->userdata('activities',array());
				}

			$this->load->view('ninja_gold_view');
	}
//this function just checks to see if userdata('gold') is NOT set, and if not, set it to 0, then checks to see if userdata('activities') is NOT set, and if not, then sets userdata('activities') to an array, then it says to load the view in the file called "ninja_gold_view" .
}

?>