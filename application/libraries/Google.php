<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Google
{
	private $_ci;

	function __construct()
	{
		$this->_ci =& get_instance();
	}

	public function get_client()
	{
		$this->_ci->load->config('google');

		$client = new Google_Client();
		$client->setClientId($this->_ci->config->item('g_client_id'));
		$client->setClientSecret($this->_ci->config->item('g_secret_id'));
		$client->setApplicationName($this->_ci->config->item('g_app_name'));
		$client->setRedirectUri($this->_ci->config->item('g_redirect_uri'));
		$client->addScope($this->_ci->config->item('g_scopes'));

		return $client;
	}
}