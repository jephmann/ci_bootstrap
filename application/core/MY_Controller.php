<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Description of MY_controller
 *
 * @author Jeffrey
 */
    class MY_Controller extends CI_Controller
    {
        /*
         * Globals
         */
        public $bootstrap;
        public $bootstrap_css;
        public $bootstrap_js;
        public $navbar;
        public $navfoot;
        
        public function __construct() {
            parent::__construct();

            $this->bootstrap        = base_url().'bootstrap/';  // path to Bootstrap assets
            $this->bootstrap_css    = $this->bootstrap.'css/';  // path to Bootstrap *.css
            $this->bootstrap_js     = $this->bootstrap.'js/';   // path to Bootstrap *.js

            // common navigation
            $this->navbar = array(
                array(
                    'href' => 'contents',
                    'text' => 'Contents',
                ),
                array(
                    'href' => 'about',
                    'text' => 'About',
                ),
                array(
                    'href' => 'contact',
                    'text' => 'Contact',
                ),
            );
            // footer navigation
            $this->navfoot = array(
                array(
                    'href' => 'terms',
                    'text' => 'Terms',
                ),
                array(
                    'href' => 'privacy',
                    'text' => 'Privacy',
                ),
            );
        }
    }
