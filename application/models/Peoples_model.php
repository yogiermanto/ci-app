<?php

class Peoples_model extends CI_model {

    public function getAllPeoples()
    {
        return $this->db->get('peoples')->result_array();
    }

    public function getPeoples($limit, $offset)
    {
        return $this->db->get('peoples', $limit, $offset)->result_array();
    }

    public function countAllPeople()
    {
        return $this->db->get('peoples')->num_rows();
    }
}