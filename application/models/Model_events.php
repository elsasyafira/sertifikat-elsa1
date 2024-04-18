<?php

defined('BASEPATH') or exit('No direct script access allowed');

class model_events extends CI_Model
{
    function getDataevents()
    {
        $query = $this->db->get('events');
        return $query->result();
    }

    function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function getDataeventsDetail($event_id)
    {
        $this->db->where('event_id', $event_id);
        $query =  $this->db->get('events');
        return $query->row();
    }

    function updateDataevents($event_id, $data)
    {
        $this->db->where('event_id', $event_id);
        $this->db->update('events', $data);
    }

    function hapusDataEvents($id)
    {
        $this->db->where('event_id', $id);
        $this->db->delete('events');
    }
    // function getDatakategori()
    // {
    //     $query = $this->db->get('kategori');
    //     return $query->result();
    // }
    

}