<?php

class M_Products extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function addcategory()
	{
		$this->db->insert('category', $this->input->post());
	}

	function get_category_count()
	{
		$sql = "SELECT count(category_id) as categories FROM category WHERE parent_id IS NULL";

		return $this->db->query($sql)->row()->categories;
	}

	function get_all_categories()
	{
		$sql = "SELECT category_id, category_name, category_description FROM category WHERE parent_id IS NULL";

		return $this->db->query($sql)->result();
	}

	function get_category_by_id($category_id)
	{
		$sql = "SELECT * FROM category WHERE category_id = {$category_id}";

		return $this->db->query($sql)->row();
	}

	function updatecategory($category_id)
	{
		$this->db->where('category_id', $category_id);
		$this->db->update('category', $this->input->post());
	}

	function get_subcategory_count($parent_id)
	{
		$sql = "SELECT count(category_id) as subcategories FROM category WHERE parent_id = {$parent_id}";

		return $this->db->query($sql)->row()->subcategories;
	}

	function get_sub_categories($parent_id)
	{
		$sql = "SELECT * FROM category WHERE parent_id = {$parent_id}";

		return $this->db->query($sql)->result();
	}

	function deletecategory($category_id)
	{
		$sql = "DELETE FROM category WHERE category_id = {$category_id} OR parent_id = {$category_id}";

		$this->db->query($sql);
	}
}