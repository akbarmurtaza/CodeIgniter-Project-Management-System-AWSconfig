<?php
    class TeamDb extends CI_Model
    {
        function getAllRecords($n)
        {
            $this->load->database();
            $this->db->select('*');
            $q = $this->db->get('team');
        }
    }
?>
