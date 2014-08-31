<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',				'rb');
define('FOPEN_READ_WRITE',			'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',	'wb');  // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',   'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',			'ab');
define('FOPEN_READ_WRITE_CREATE',		'a+b');
define('FOPEN_WRITE_CREATE_STRICT',		'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',	'x+b');

/*
|--------------------------------------------------------------------------
| Custom Constants for ci_bootstrap
|--------------------------------------------------------------------------
|
| Created especially for this project
|
*/

define('CB_BRAND','CodeIgniter BootStrap');                                     // The name of this project <title> <h1>
define('CB_AUTHOR','Jeffrey P. Hartmann');                                      // The author(s) of this project <meta> <footer>
define('CB_COPYRIGHT', CB_BRAND . ' &copy; '. CB_AUTHOR . ' 2014-'.date('Y'));  // Copyright <footer>
define('CB_DESCRIPTION','An attempt to combine CodeIgniter with Bootstrap');    // Description <meta>
define('CB_KEYWORDS','HTML, CSS, JS, JavaScript, framework, bootstrap, front-end, frontend, web development, CodeIgniter');                    // Viewport, if called for <meta>
define('CB_VIEWPORT','width=device-width, initial-scale=1');

/* End of file constants.php */
/* Location: ./application/config/constants.php */