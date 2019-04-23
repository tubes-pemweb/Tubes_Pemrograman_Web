<?php

class User extends CI_Model{
	public function Register() {
        $data = array(
            "Email" => $this->input->post('Email'),
            "Password" => $this->input->post('Password')
        );

        if($this->isExist($data['Email'])) {
            return false;
        } else {
            $this->db->insert('signup', $data);
            $this->db->insert('login',
            array(
                "Email" => $data['Email'],
                "Password" => $data['Password']
            ));
            return true;
        }
    }

    public function isExist($email) {
        $this->db->where("Email",$email);
        $result = $this->db->get('login')->result_array();
        if(isset($result[0])) {
            return true;
        } else {
            return false;
        }
    }

    public function findUser() {
        $data = array(
            "Email" => $this->input->post('Email'),
            "Password" => $this->input->post('Password')
        );
        $this->db->where($data);
        $result = $this->db->get('login');
        return $result->result_array();
    }
}
