<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

$config['g_client_id'] 	  = '-- CLIENT ID --'; // TODO: Change this
$config['g_secret_id'] 	  = '-- CLIENT SECRET --'; // TODO: Change this
$config['g_app_name']  	  = 'Google Login Example';
$config['g_redirect_uri'] = site_url('auth/google_callback');
$config['g_scopes']		  = 'https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email';