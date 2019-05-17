<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once("Basecontroller.php");

class Contact extends Basecontroller 
{
	public function index()
	{
		redirect("https://docs.google.com/forms/d/e/1FAIpQLScwu3mfVjTIWvlHK1gK78P_GX2YaahhzjTxGq6NqNzD-XH4UA/viewform?usp=sf_link");
	}
}
