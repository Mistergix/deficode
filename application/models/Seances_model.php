<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Seances_model extends CI_Model
{
    protected $table = 'seances';

    /**
     * Gets the data about a seance
     * @param int $id the seance id
     */
    public function get_seance_data($id)
    {
        $data = $this->db->select("*")
                ->from($this->table)
                ->where('id', (int) $id)
                ->get()->result();

        if(count($data) <= 0)
        {
            return NULL;
        }

        return $data[0];
    }

    public function get_all_seances()
    {
        $data = $this->db->select("*")
            ->from($this->table)
            ->order_by('priority', 'asc')
            ->get()->result();

        return $data;
    }

    public function get_seances_titles()
    {
        $data = $this->db->select('title')
            ->from($this->table)
            ->order_by('priority', 'asc')
            ->get()
            ->result();

        $titles = $data[0];

        return $titles;
    }
}