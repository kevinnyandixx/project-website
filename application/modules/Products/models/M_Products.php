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

	function get_all_categories($type = 'Parent')
	{
		$extension = ($type == "all") ? "" : "WHERE parent_id IS NULL";
		$sql = "SELECT category_id, category_name, category_description FROM category {$extension}";

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

	function get_product_images($product_id)
	{
		$sql = "SELECT * FROM product_images WHERE product_id = {$product_id}";

		return $this->db->query($sql)->result();
	}

	function addproduct($product_details)
	{
		$sql = $this->db->insert('product', $product_details);
	}

	function addproduct_images($images)
	{
		$this->db->insert_batch('product_images', $images);
	}

	function get_products_count()
	{
		$sql = "SELECT count(product_id) as products FROM product";

		return $this->db->query($sql)->row()->products;
	}

	function get_all_products()
	{
		$sql = "SELECT p.*, c.* FROM product p 
		JOIN category c ON c.category_id = p.product_categoryid";

		return $this->db->query($sql)->result();
	}

	function get_first_image($product_id)
	{
		$sql = "SELECT image_url FROM product_images WHERE product_id = {$product_id} AND is_active = 1";

		return $this->db->query($sql)->row();
	}

	function activate($product_id)
	{
		$sql = "UPDATE product SET product_status = 1 WHERE product_id = {$product_id}";

		$this->db->query($sql);
	}

	function deactivate($product_id)
	{
		$sql = "UPDATE product SET product_status = 0 WHERE product_id = {$product_id}";

		$this->db->query($sql);
	}

	function get_product_by_id($product_id)
	{
		$sql = "SELECT * FROM product WHERE product_id = {$product_id}";

		return $this->db->query($sql)->row();
	}

	function editproduct($product_details, $product_id)
	{
		$this->db->where('product_id', $product_id);

		$this->db->update('product', $product_details);
	}
}