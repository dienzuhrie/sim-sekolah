<?php
class M_guru extends CI_Model{
    public function jurnal_guru()
    {
        return $this->db->get('jurnal_guru');
    }
    public function isi_jurnal($data, $table)
    {
        return $this->db->insert($table, $data);
    }
    public function hapus_jurnal($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit_jurnal($where,$table)
    {
        return $this->db->get_where($table,$where);
    }
    public function update_jurnal($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}