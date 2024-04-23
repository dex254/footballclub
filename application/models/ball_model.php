<?php
Class ball_model extends CI_Model
{
	/**
	 * Drug Store
	 * Copyright (C) Timo - All Rights Reserved
 	 * Timo preserves the rights to distribute and modify this code under the
   * terms signed with the client on the delivery of this system.
	 */
    public function login($username, $password)
    {
        $this->db->select('id, username, fname, lname, password');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', sha1($password));
        $this->db->limit(1);
        $query = $this->db->get();
        if($query -> num_rows() == 1)
        {
          return $query->row_array();
        }
        else
        {
          return false;
        }
        }

    public function insert_data($table,$data)
		{
			$this->db->insert($table, $data);
			$id = $this->db->insert_id();
			return (isset($id)) ? $id : FALSE;
		}

  public function get_data_where($table,$id)
    {
        $query = $this->db->get_where($table, array('id' => $id));
        return $query->row_array();
    }

    public function get_all_data($table)
    {
       $query = $this->db->get($table);
       return $query->result_array();
    }
    public function get_all_user_data()
    {
      $this->db->select('us.*, st.name AS status');
      $this->db->from('users us, status st');
      $this->db->where('us.status=st.id');
      $query = $this->db->get();
      return $query->result_array();
    }

    public function update_data($table, $id, $data)
    {
      $this->db->where('id', $id);
      $this->db->update($table, $data);
    }

    }
