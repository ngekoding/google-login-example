<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('google');
	}

	public function index()
	{
		$client  = $this->google->get_client();
		$authUrl = $client->createAuthUrl();

		echo "<h1>Ngekoding</h1>";
		echo "<p>Login with <a href='".$authUrl."'>Google</a></p>";
	}

	public function google_callback()
	{
		$client = $this->google->get_client();

		$access_token = $this->session->userdata('access_token');
		$code 		  = $this->input->get('code');

		if (!empty($access_token)) {
			$client->setAccessToken($access_token);
		} elseif (!empty($code)) {
			$token = $client->fetchAccessTokenWithAuthCode($code);
			$this->session->set_userdata('access_token', $token);
		} else {
			redirect('auth');
		}

		$oAuth    = new Google_Service_Oauth2($client);
		$userdata = $oAuth->userinfo_v2_me->get();

		// Store userdata to session
		$this->session->set_userdata('userdata', $userdata);

		// Insert or update user info in DB
		// Please done this by yourself
		// ...

		// Redirect to home page
		redirect('welcome');
	}

	public function logout()
	{
		$client = $this->google->get_client();
		$client->revokeToken();

		// Clear auth session
		$this->session->sess_destroy();

		// Back to login page
		redirect('auth');
	}
}
