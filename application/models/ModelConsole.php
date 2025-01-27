<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelConsole extends CI_Model
{
    //manajemen console
    public function getConsole()
    {
        return $this->db->get('console');
    }
    public function getLimitConsole()
    {
        $this->db->limit(5);
        return $this->db->get('console');
     }

    public function consoleWhere($where)
    {
        return $this->db->get_where('console', $where);
    }

    public function simpanConsole($data = null)
    {
        $this->db->insert('console',$data);
    }

    public function updateConsole($data = null, $where = null)
    {
        $this->db->update('console', $data, $where);
    }

    public function hapusConsole($where = null)
    {
        $this->db->delete('console', $where);
    }

    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if(!empty($where) && count($where) > 0){
            $this->db->where($where);
        }
        $this->db->from('console');
        return $this->db->get()->row($field);
    }
    
    //manajemen kategori
    public function getKategori()
    {
        return $this->db->get('kategori');
    }

    public function kategoriWhere($where)
    {
        return $this->db->get_where('kategori', $where);
    }

    public function simpanKategori($data = null)
    {
        $this->db->insert('kategori', $data);
    }

    public function hapusKategori($where = null)
    {
        $this->db->delete('kategori', $where);
    }

    public function updateKategori($where = null, $data = null)
    {
        $this->db->update('kategori', $data, $where);
    }

    //join
    public function joinKategoriConsole($where)
    {
       
        $this->db->from('console');
        $this->db->join('kategori','kategori.id = console.id_kategori');
        $this->db->where($where);
        return $this->db->get();
    }
}