<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$user = $this->session->userdata('userdata');

		// Show all available info
		// var_dump($user);

		// Show user info
		echo '<h1>Login Success</h1>';
		echo '<img src="'.$user->picture.'" width="70" alt="Profile picture" />';
		echo '<p>Name: '.$user->name.'</p>';
		echo '<p>Email: '.$user->email.'</p>';

		// Logout link
		echo '<p><a href="'.site_url('auth/logout').'">Logout</a></p>';
	}
}
