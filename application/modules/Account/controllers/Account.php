<?php

class Account extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->module([
			'Hash',
			'Mailer'
		]);

		$this->load->model("Account/M_Account");
	}

	function authenticate()
	{
		$user = $this->M_Account->get_active_user($this->input->post('user_emailaddress'));

		if($user && $this->hash->passwordCheck($this->input->post('user_password'), $user->user_password))
		{
			$this->session->set_userdata([
				'user_id' => $user->user_id,
				'is_logged_in' => TRUE,
				'user_type' => $user->user_type
			]);
		}
		else
		{
			$this->session->set_flashdata('error', 'Username or password is wrong');
		}

		redirect(base_url() . "Home");
	}

	function register()
	{
		$identifier = $this->RandomLib->generateString(128);
		unset($_POST['user_password_confirm']);
		$password = $this->hash->password($this->input->post('user_password'));
		$inserted = $this->M_Account->add_user([
			'user_firstname' => $this->input->post('user_firstname'),
			'user_lastname' => $this->input->post('user_lastname'),
			'user_emailaddress' => $this->input->post('user_emailaddress'),
			'user_lastname' => $this->input->post('user_phonenumber'),
			'active_hash' => $identifier,
			'user_password' => $password,
			'user_type' => "shopper"
		]);

		$data['first_name'] = $this->input->post('user_firstname');
		$data['last_name'] = $this->input->post('user_lastname');
		$data['identifier'] = $identifier;
		$data['email_address'] = $this->input->post('user_emailaddress');

		$template = 'Account/registration_email_v';

		$sent = $this->mailer->send($template, $data, function($message){
			$message->to($this->input->post('user_emailaddress'));
			$message->subject("Confirm your email");
		});

		if (!$sent) {
			echo "<pre>";print_r($sent);die;
			//$data['content_view'] = 'user/after_registration';
			//$this->template->call_frontend_template($data);
		}
	}

	function activate($email_address, $identifier)
	{
		$hashedIdentifier = $this->hash->hash($identifier);
		$user = $this->M_Account->get_inactive_user($email_address);

		if(!$user || $this->hash->hashCheck($user->active_hash, $hashedIdentifier))
		{
			echo "Error confirming your account";
		}
		else
		{
			$this->M_Account->activateUser($email_address);
			$this->session->set_flashdata('success', 'Successfully Registered. You can now login');
			redirect(base_url() . 'Home');
		}
	}

	function signout()
	{
		$this->session->sess_destroy();

		redirect(base_url() . 'Home');
	}
}