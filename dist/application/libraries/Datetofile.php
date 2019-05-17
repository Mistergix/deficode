<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datetofile 
{
	private $CI;

	private $dates = [
		"11-01-2019",
		"18-01-2019",
		"25-01-2019",
		"01-02-2019",
		"08-02-2019",
		"15-02-2019",
		"22-02-2019",

		"15-03-2019",
		"22-03-2019",
		"29-03-2019",
		"05-04-2019",
		"12-04-2019",
		"19-04-2019",

		"10-05-2019",
		"17-05-2019",
		"24-05-2019",
		"31-05-2019",
		"07-06-2019",
		"14-06-2019",
		"21-06-2019",
		"28-06-2019",
	];

	public function __constructor()
	{
		$this->CI =& get_instance(); // passed by reference
	}

	public function getFilesNames($prefix)
	{
		$i = 0;
		$today = strtotime("now");
		$files = [];
		$len = count($this->dates);
		do
		{
			$date = strtotime ($this->dates[$i]);
			if($date <= $today || ENVIRONMENT == 'development')
			{
				$files[] = $this->getFileTitle($prefix, $this->dates[$i]);
			}
			$i++;
		}
		while ($i < $len && ($date <= $today || ENVIRONMENT == 'development'));

		return $files;
	}

	public function getDates()
	{
		$i = 0;
		$today = strtotime("now");
		$dates = [];
		$len = count($this->dates);
		do
		{
			$date = strtotime ($this->dates[$i]);
			if($date <= $today || ENVIRONMENT == 'development')
			{
				$dates[] = $this->dates[$i];
			}
			$i++;
		}
		while ($i < $len && ($date <= $today || ENVIRONMENT == 'development'));

		return $dates;
	}

	/**
	 * Remove the slash in the dates
	 */
	private function dateFormat($dateString)
	{
		return str_replace("-", "", $dateString);
	}

	private function getFileTitle($prefix, $date)
	{
		return $prefix . $this->dateFormat($date);
	}

	/**
	 * Form : prefixddmmyyyy.extension
	 */
	public function generateFiles($prefix, $location, $extension="php")
	{
		foreach ($this->dates as $date) {
			$title = $this->getFileTitle($prefix, $date);
			$path = "$location/$title.$extension";
			$file = fopen($path, "w");
			fclose($file);
		}
	}
}
