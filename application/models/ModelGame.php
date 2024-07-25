<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelGame extends CI_Model
{
    //manajemen game
    public function getGame()
    {
        return $this->db->get('game');
    }

    public function gameWhere($where)
    {
        return $this->db->get_where('game', $where);
    }

    public function updateGame($data = null, $where = null)
    {
        $this->db->update('game', $data, $where);
    }

    public function hapusGame($where = null)
    {
        $this->db->delete('game', $where);
    }
    
}