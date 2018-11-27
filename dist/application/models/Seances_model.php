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

    /**
     *  delete a seance
     *  
     *  @param integer $id  seance id
     *  @return bool request result
     */
    public function delete($id)
    {
        return $this->db->where('id', (int) $id)
			->delete($this->table);
    }

    /**
     * Gets the data from all seances
     */
    public function get_all_seances()
    {
        $data = $this->db->select("*")
            ->from($this->table)
            ->order_by('priority', 'asc')
            ->get()->result();

        return $data;
    }

    /**
     * Gets the title from all seances
     */
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
    /**
	 *	Add a seance
	 *
	 *	@param string $title 	Title of the seance
	 *	@param string $description 	short description of the seance
     *	@param string $content 	seance content in HTML
     *  @param int $priority display priority, less == upper, must be > 0
	 *	@return bool		Le résultat de la requête
	 */
    public function add_seance($title, $description, $content, $priority)
    {
        if(!is_numeric($priority) or $priority <= 0)
        {
            return false;
        }

        $this->db->set('description',  $description);
        $this->db->set('title',   $title);
        $this->db->set('content', $content);
        $this->db->set('priority', $priority);

        return $this->db->insert($this->table);
    }

    /**
	 *	Edit a seance
	 *
     * 	@param int $id	id of the seance
	 *	@param string $title 	Title of the seance
	 *	@param string $description 	short description of the seance
     *	@param string $content 	seance content in HTML
     *  @param int $priority display priority, less == upper, must be > 0
	 *	@return bool		Le résultat de la requête
	 */
    public function edit_seance($id, $title, $description, $content, $priority)
    {
        if(!is_numeric($priority) or $priority <= 0)
        {
            return false;
        }

        $this->db->set('description',  $description);
        $this->db->set('title',   $title);
        $this->db->set('content', $content);
        $this->db->set('priority', $priority);

        $this->db->where('id', (int) $id);

        return $this->db->update($this->table);
    }
}