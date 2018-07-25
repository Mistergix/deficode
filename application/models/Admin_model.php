<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    private $hashed = '$2y$10$uc37.7y//o9T/nLXZHZzV.3G63WufZ/dY.MHma6kZALuv2OS7u0Va';
    private $admin_username = 'admin';

    public function can_login($password)
    {
        return password_verify($password, $this->hashed);
    }

    public function GetAdminUsername()
    {
        return $this->admin_username;
    }

    public function IsAdmin($username)
    {
        return $this->admin_username == $username;
    }
}