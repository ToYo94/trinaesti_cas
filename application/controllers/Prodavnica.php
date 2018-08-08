<?php
defined('BASEPATH') OR exit('No direct script access allowed');

# ime kontrolera mora poceti velikim slovom
class Prodavnica extends CI_Controller {

	public function index()
	{
		$this->load->view('prodavnica');
	}

public function produkti($imeProizvoda)
{
	echo $imeProizvoda;
}

}