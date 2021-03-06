<?php
defined('BASEPATH') OR exit('No direct script access allowed');

# ime kontrolera mora poceti velikim slovom
class Kontakt extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('kontakt_message');
	}
}

#napraviti da se ne ulazi u rutu kotakt preko adrese /imesajta/index.php/kontakt nego direkt imesajta/kontakt
#hint: htacces