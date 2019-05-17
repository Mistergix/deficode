<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Templates extends CI_Controller
{
	public function template($page)
	{
		if ( ! file_exists(APPPATH.'views/students/templates/'.$page.'.php'))
        {
				// Whoops, we don't have a page for that!
                show_404();
		}
		
		$this->load->view('students/templates/' . $page, []);
	}
}
