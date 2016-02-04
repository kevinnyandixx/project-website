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

	/*
	* Products Section
	* Do not mix up
	*/

	function product()
	{
		$data['content_view'] = 'Products/products_v';
		$data['page_header'] = 'Products';
		$data['title'] = 'Products';
		$data['products_count'] = $this->M_Products->get_products_count();
		$data['products_table'] = $this->create_products_table();
		$data['page_action'] = (object)array('href' =>  base_url() . "Products/addproduct", 'title' => 'Add Product');
		$this->template->call_admin_template($data);
	}

	function addproduct()
	{
		if(!$_POST)
		{
			$data['image_list'] = $this->create_image_list_table();
			$data['page_header'] = 'Add Product';
			$data['title'] = 'Add Product';
			$data['categories'] = $this->M_Products->get_all_categories('all');
			$data['content_view'] = 'Products/add_edit_products';
			$this->template->call_admin_template($data);
		}
		else
		{
			if(count($_POST['image_url']) > 0){
				$images_array = $this->input->post('image_url');
				unset($_POST['image_url']);
			}
			$this->M_Products->addproduct($this->input->post());
			$product_id = $this->db->insert_id();
			$images = array();
			if(count($images_array) > 0){
				foreach ($images_array as $key => $value) {
					$images[] = array(
							'image_url' => $value,
							'product_id' => $product_id
						);
				}
			}
			$this->M_Products->addproduct_images($images);
			redirect(base_url() . 'Products/product');
		}
	}

	function create_image_list_table($product_id = NULL)
	{
		$products_table = "";
		if($product_id == NULL)
		{
			$products_table = "<tr>
				<td colspan = '4'><center>No Images to Display here</center></td>
			</tr>";
		}
		else
		{
			$images = $this->M_Products->get_product_images($product_id);

			if(count($images) > 0)
			{
				$counter = 1;
				foreach ($images as $image) {
					$products_table .= "<tr>
						<td>{$counter}</td>
						<td><img src = '".$image->image_url."' style = 'width:100px;height:100px;' /></td>
						<td><input type=\"text\" class=\"form-control\" disabled value='".$image->image_url."'></td>";
						if($image->is_active)
						{
							$products_table .= "<td><a href = '".base_url()."Products/imagevisibility/invisible/{$image->product_image_id}/{$product_id}' class = 'btn btn-white'><i class = 'fa fa-eye'></i> Visible</a></td>";
						}
						else
						{
							$products_table .= "<td><a href = '".base_url()."Products/imagevisibility/visible/{$image->product_image_id}/{$product_id}' class = 'btn btn-white'><i class = 'fa fa-eye-slash'></i> Not Visible</a></td>";
						}

						$products_table .= "<td><a href = '".base_url()."Products/deleteimage/{$image->product_image_id}/{$product_id}'>Delete</a></td>";
					$products_table .= "</tr>";
					$counter++;
				}
			}
			else
			{
				$products_table = "<tr>
					<td colspan = '4'><center>No Images to Display here</center></td>
				</tr>";
			}
		}

		return $products_table;
	}

	function get_upload_modal()
	{
		echo $this->load->view("Products/upload_view", NULL, TRUE);
	}

	function upload_images()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('file'))
		{
			$error = array('error' => $this->upload->display_errors());

			header('HTTP/1.1 500 Internal Server Error');
			header('Content-type: text/plain');
			exit(json_encode($error));
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			echo json_encode($data);
		}
	}

	function create_products_table()
	{
		$products_table = "";

		$products = $this->M_Products->get_all_products();

		if (count($products > 0)) {
			$counter = 1;
			foreach ($products as $product) {
				$image = $this->M_Products->get_first_image($product->product_id);
				$active = $product->product_status;
				$activation = array();
				if($active == 1)
				{
					$activation['link'] = "deactivate/{$product->product_id}";
					$activation['text'] = "Active";
					$activation['class'] = "label-primary";
				}
				else
				{
					$activation['link'] = "activate/{$product->product_id}";
					$activation['text'] = "Inactive";
					$activation['class'] = "label-danger";
				}
				$image_url = (count($image) == 1) ? "<img src = '{$image->image_url}' style = 'width: 50px;height:50px;'/>" : "No Image Uploaded";
				$products_table .= "<tr>";
				$products_table .= "<td>{$counter}</td>";
				$products_table .= "<td>{$image_url}</td>";
				$products_table .= "<td>{$product->product_name}</td>";
				$products_table .= "<td>{$product->category_name}</td>";
				$added_on = date('d-m-y h:i:s', strtotime($product->product_dateadded));
				$products_table .= "<td>{$added_on}</td>";
				$products_table .= "<td>
					<a class = 'label {$activation['class']}' href = '".base_url()."Products/activation/{$activation['link']}'>{$activation['text']}</a>
					|
					<a class = 'label label-success' href = '".base_url()."Products/editproduct/{$product->product_id}'>Edit</a>
				</td>";
				$products_table .= "</tr>";
				$counter++;
			}
		}
		return $products_table;
	}

	function activation($type, $product_id)
	{
		if($type == "activate")
		{
			$this->M_Products->activate($product_id);
		}
		else
		{
			$this->M_Products->deactivate($product_id);
		}

		redirect(base_url() . "Products/product");
	}

	function imagevisibility($type, $image_id, $product_id)
	{
		if($type == "invisible")
		{
			$this->db->query("UPDATE product_images SET is_active = 0 WHERE product_image_id = {$image_id}");
		}
		else
		{
			$this->db->query("UPDATE product_images SET is_active = 1 WHERE product_image_id = {$image_id}");
		}

		redirect(base_url() . "Products/editproduct/{$product_id}");
	}

	function editproduct($product_id)
	{
		if(!$_POST)
		{
			$data['image_list'] = $this->create_image_list_table($product_id);
			$data['product_details'] = $this->M_Products->get_product_by_id($product_id);
			$data['page_header'] = 'Edit Product';
			$data['title'] = 'Edit Product';
			$data['categories'] = $this->M_Products->get_all_categories('all');
			$data['content_view'] = 'Products/add_edit_products';
			//echo "<pre>";print_r($data);die;
			$this->template->call_admin_template($data);
		}
		else
		{
			if(isset($_POST['image_url']) && count($_POST['image_url']) > 0){
				$images_array = $this->input->post('image_url');
				unset($_POST['image_url']);
			}

			$this->M_Products->editproduct($this->input->post(), $product_id);
			
			if(count($images_array) > 0){
				$images = array();
				foreach ($images_array as $key => $value) {
					$images[] = array(
						'image_url' => $value,
						'product_id' => $product_id
					);
				}
				$this->M_Products->addproduct_images($images);
			}
			redirect(base_url() . "Products/editproduct/{$product_id}");
		}
	}

	function deleteimage($image_id, $product_id)
	{
		$this->db->query("DELETE FROM product_images WHERE product_image_id = {$product_id}");
		redirect(base_url() . "Products/editproduct/{$product_id}");
	}
}