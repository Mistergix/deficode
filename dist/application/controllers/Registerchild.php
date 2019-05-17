<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once("Basecontroller.php");

class Registerchild extends Basecontroller 
{
	public function index()
	{
		redirect("https://docs.google.com/forms/d/e/1FAIpQLSe2oRBW-CmG-KaPeRTkbGkXhwAUn4npNc37VW9-3VyGKRwHLQ/viewform?usp=pp_url");
	}
}
