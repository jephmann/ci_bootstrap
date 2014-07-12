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
        public $author;
        public $brand;
        public $copyright;
        public $bootstrap;
        public $bootstrap_css;
        public $bootstrap_js;
        public $navbar;
        public $navfoot;
        public $table_th;
        public $labels;
        public $navs;
        public $nav_class;
        public $navbars;
        public $navbar_class;
        public $navbar_dropdown;
        
        public function __construct() {
            parent::__construct();
            
            // commonly used constants
            $this->author       = CB_AUTHOR;
            $this->brand        = CB_BRAND;
            $this->copyright    = CB_COPYRIGHT;
            
            // commonly used filepaths to bootstrap assets
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
            
            // common footer navigation
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
            
            // sample label texts            
            $this->labels = array(
                'default',
                'primary',
                'success',
                'info',
                'warning',
                'danger',
            );
            
            // sample table header texts
            $this->table_th = array(
                '#',
                'First Name',
                'Last Name',
                'Username',
            );
            
            // sample navs
            $this->navs = array(
                array(
                    'active'    => TRUE,
                    'href'      => "#",
                    'text'      => 'Home',
                ),
                array(
                    'active'    => FALSE,
                    'href'      => "#",
                    'text'      => 'Profile',
                ),
                array(
                    'active'    => FALSE,
                    'href'      => "#",
                    'text'      => 'Messages',
                ),
            );
            // sample navbars
            $this->navbars = array();
            
            // sample navbar dropdown menu
            $this->navbar_dropdown = array(
                array(
                    'class' => NULL,
                    'href'  => "#",
                    'text'  => 'Action',
                ),
                array(
                    'class' => NULL,
                    'href'  => "#",
                    'text'  => 'Another action',
                ),
                array(
                    'class' => NULL,
                    'href'  => "#",
                    'text'  => 'Something else here',
                ),
                array( // how we handle dropdown section dividers
                    'class' => 'divider',
                    'href'  => NULL,
                    'text'  => NULL,
                ),
                array( // how we handle dropdown section names
                    'class' => 'dropdown-header',
                    'href'  => NULL,
                    'text'  => 'Nav header',
                ),
                array(
                    'class' => NULL,
                    'href'  => "#",
                    'text'  => 'Separated link',
                ),
                array(
                    'class' => NULL,
                    'href'  => "#",
                    'text'  => 'One more separated link',
                ),
                
            );
            
            
            // sample navs: inner classes (called via index #)
            $this->nav_class = array(
                'tabs','pills',
            );
            // sample navbars: inner classes (called via index #)
            $this->navbar_class = array(
                'default','inverse',
            );
        }
    }
