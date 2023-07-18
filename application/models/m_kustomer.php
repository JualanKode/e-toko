<?php

class m_kustomer extends CI_Model
{

    public function TampilkanDataKustomer()
    {
        $this->db->select('*');
        $this->db->from('tb_kustomer');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }

    public function TambahDataKustomer($data)
    {
        $this->db->insert('tb_kustomer', $data);
    }

    public function HapusDataKustomer($kustomerId)
    {
        $this->db->where('kustomer_id', $kustomerId);
        $this->db->delete('tb_kustomer');
    }

    public function AmbilDataKustomer($kustomerId)
    {
        $this->db->where('kustomer_id', $kustomerId);
        return $this->db->get('tb_kustomer')->row();
    }

    public function UbahDataKustomer($kustomerId, $itemData)
    {
        $this->db->where('kustomer_id', $kustomerId);
        $this->db->update('tb_kustomer', $itemData);
    }

}
