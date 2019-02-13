# Google Login + CodeIgniter
Integrating Google Login with CodeIgniter by Ngekoding.

## Important
1. Make sure composer was installed 
2. Make sure you have Google client id and client secret (also setting for callback url, etc.)
   - For local use
   	 - Setting in **OAuth consent screen** --> Authorized domains: use virtualhost (e.g. ngekoding.me)
   	 - Setting in **Credentials** --> Authorized redirect URIs: http://ngekoding.me/index.php/auth/google_callback


## How to install
1. Clone/download this repo and place to your local server
   - XAMPP: path/to/xampp/htdocs
2. Open `application/config/config.php` and change `base_url` to your own setting (Note: for local use, please use a virtualhost)
3. Rename `google.example.php` to `google.php` in `application/config` and change the value (g_client_id, etc.)
3. Installing google client library
   - Open CMD/Terminal
   - Go to project directory `google-login/application`
   - Run `composer install`
   - Finish
4. Open browser and type the address (e.g http://ngekoding.me)

### Happy coding!