<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginmodel extends CI_Model {

        public function register($data)
        {
            $simpan = $this->db->insert('admin', $data);
            return $simpan;
        }
        public function getUser()
        {
            $this->db->select('*');
            $this->db->from('admin');
            return $this->db->get();
        }
        public function editUser($id)
        {
            $this->db->select('*');
            $this->db->from('admin');
            $this->db->where('id', $id);
            return $this->db->get();
        }
    
        public function getOneUser($email)
        {
            $this->db->where('email', $email);
            return $this->db->get('admin');
        }
    
        public function updatePass($id, $data)
        {
            $this->db->where('id', $id);
            $this->db->update('name', $data);
            $this->db->set(md5('password'));
        }
    
    }