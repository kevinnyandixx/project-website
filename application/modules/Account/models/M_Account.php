<?php

class M_Account extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function add_user($user_data)
	{
		$this->db->insert('users', $user_data);
	}

	function get_inactive_user($email)
	{
		$query = $this->db->get_where('users',[
				'user_emailaddress' => $email,
				'active' => 0
			]
		);

		$result = $query->row();

		return $result;
	}

	function activateUser($identifier)
	{
		$holder = (is_numeric($identifier)) ? 'id' : 'user_emailaddress';
		$this->db->where($holder, $identifier);
		$query = $this->db->update('users', ['active' => 1, 'active_hash' => NULL]);

		return $query;
	}

	function get_active_user($user_emailaddress)
	{
		$query = $this->db->get_where(
			'users',
			[
				'user_emailaddress' => $user_emailaddress,
				'active' => 1
			]
		);

		$result = $query->row();

		return $result;
	}
}