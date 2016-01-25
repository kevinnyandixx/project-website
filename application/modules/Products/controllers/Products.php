<?php

class Products extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Products');
	}

	function categories()
	{
		$data['content_view'] = 'Products/categories_v';
		$data['page_header'] = 'Product Categories';
		$data['title'] = 'Product Categories';
		$data['categories_count'] = $this->M_Products->get_category_count();
		$data['categories_table'] = $this->create_categories_table();
		$data['page_action'] = (object)array('href' =>  base_url() . "Products/addcategory", 'title' => 'Add Category', 'class' => 'ajax-call-modal');
		$this->template->call_admin_template($data);
	}

	function create_categories_table()
	{
		$categories_table = "";
		$categories = $this->M_Products->get_all_categories();
		if (count($categories) > 0) {
			$counter = 0;
			foreach ($categories as $category) {
				$counter++;
				$subcategories = $this->M_Products->get_subcategory_count($category->category_id);
				$categories_table .= "<tr>";
				$categories_table .= "<td>{$counter}</td>";
				$categories_table .= "<td>{$category->category_name}</td>";
				$categories_table .= "<td>{$category->category_description}</td>";
				$categories_table .= "<td><a class = 'subcategory_count' href = '#' data-href = '".base_url()."Products/listsubcategories/{$category->category_id}'>({$subcategories}) Subcategories</a>";
				$categories_table .= "<td><a href = '".base_url()."Products/editcategory/{$category->category_id}' class = 'ajax-call-modal' data-title = 'Edit {$category->category_name}'>Edit</a> | <a href = '".base_url()."Products/deletecategory/{$category->category_id}' class = ''>Delete</a></td>";
				$categories_table .= "</tr>";
			}
		}

		return $categories_table;
	}

	function listsubcategories($category_id)
	{
		$sub_categories_list = "";
		$sub_categories = $this->M_Products->get_sub_categories($category_id);
		$data["count"] = 0;

		if(count($sub_categories) > 0)
		{
			$data["count"] = count($sub_categories);
			$sub_categories_list .= '<ul class="list-group">';
			foreach ($sub_categories as $sub_category) {
				$sub_categories_list .= "<a href = '".base_url()."Products/editcategory/{$sub_category->category_id}' class='list-group-item ajax-call-modal' data-title = 'Edit {$sub_category->category_name}'> <span href = '".base_url()."Products/deletecategory/{$sub_category->category_id}' class='badge href'><i class = 'fa fa-trash'></i></span>{$sub_category->category_name}</a>";
			}
			$sub_categories_list .= '</ul>';
		}

		$data['category_details'] = $this->M_Products->get_category_by_id($category_id);
		$data['sub_categories_list'] = $sub_categories_list;

		echo json_encode($data);
	}

	function addcategory()
	{
		if(!$_POST)
		{
			$data['categories'] = $this->M_Products->get_all_categories();
			$ajax_data['view'] = $this->load->view('Products/add_edit_categories', $data, TRUE);
			echo json_encode($ajax_data);
		}
		else
		{
			if($this->input->post('parent_id') == 0)
			{
				$_POST['parent_id'] = NULL;
			}

			$this->M_Products->addcategory();
			redirect(base_url() . 'Products/categories');
		}
	}

	function editcategory($category_id)
	{

		if(!$_POST)
		{
			$data['categories'] = $this->M_Products->get_all_categories();
			$data['category_details'] = $this->M_Products->get_category_by_id($category_id);
			$ajax_data['view'] = $this->load->view('Products/add_edit_categories', $data, TRUE);
			echo json_encode($ajax_data);
		}
		else
		{
			if($this->input->post('parent_id') == 0)
			{
				$_POST['parent_id'] = NULL;
			}

			$this->M_Products->updatecategory($category_id);
			redirect(base_url() . 'Products/categories');
		}
	}

	function deletecategory($category_id)
	{
		$this->M_Products->deletecategory($category_id);

		redirect(base_url() . 'Products/categories');
	}
}