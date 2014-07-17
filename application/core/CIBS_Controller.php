<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Description of CIBS_Controller
 *
 * @author Jeffrey
 */
class CIBS_Controller extends CI_Controller
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
        public $starter_navbardiv;
        // samples
        public $page_header;
        public $jumbotron;
        public $table_th;
        public $labels;
        public $navs;
        public $nav_class;
        public $navbars;
        public $navbar_class;
        public $navbar_dropdown;
        public $navbar_right;
        public $alerts;
        public $progress;
        public $progress_shared;
        public $list_groups;
        public $panels;
        public $well_text;
        public $carousel;
        public $carousel_id;
        
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
                    'href'  => 'contents',
                    'text'  => 'Contents',
                    'p'     => "Bootstrap did not supply a Contents page."
                        . " I created one based on the starter template."
                        . " I use it to replace 'Home' in the navigation.",
                ),
                array(
                    'href' => 'about',
                    'text' => 'About',
                    'p'     => "Bootstrap did not supply an About page."
                        . " However, its navagation often points to one."
                        . " So I created one based on the starter template.",
                ),
                array(
                    'href' => 'contact',
                    'text' => 'Contact',
                    'p'     => "Bootstrap did not supply a Contact page."
                        . " However, its navagation often points to one."
                        . " So I created one based on the starter template.",
                ),
            );
            
            $this->navbar_right = array(
                array(
                    'href' => 'templates/navbar',
                    'text' => 'Default',
                ),
                array(
                    'href' => 'templates/navbar_static',
                    'text' => 'Static top',
                ),
                array(
                    'href' => 'templates/navbar_fixed',
                    'text' => 'Fixed top',
                ),
            );
            
            $this->starter_navbardiv = array(
                'subclass'  => 'inverse',
                'top'       => 'fixed',
                'role'      => 'navigation',
                'fluid'     => FALSE,
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
            
            // sample page header, ideally overwritten
            $this->page_header = 'Page Header';
            
            // sample label texts (called via index #)
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
                array( // use this zero for the main dropdown button
                    'class' => NULL,
                    'href'  => '#',
                    'text'  => 'Templates',
                ),
                array( // how we handle dropdown section names
                    'class' => 'dropdown-header',
                    'href'  => NULL,
                    'text'  => 'Using the Framework',
                ),
                array(
                    'class' => NULL,
                    'href'  => site_url('templates/starter'),
                    'text'  => 'Starter template',
                ),
                array(
                    'class' => NULL,
                    'href'  => site_url('templates/theme'),
                    'text'  => 'Bootstrap theme',
                ),
                array(
                    'class' => NULL,
                    'href'  => site_url('templates/grids'),
                    'text'  => 'Grids',
                ),
                array(
                    'class' => NULL,
                    'href'  => site_url('templates/jumbotron'),
                    'text'  => 'Jumbotron',
                ),
                array(
                    'class' => NULL,
                    'href'  => site_url('templates/jumbotronnarrow'),
                    'text'  => 'Narrow jumbotron',
                ),
                array( // how we handle dropdown section dividers
                    'class' => 'divider',
                    'href'  => NULL,
                    'text'  => NULL,
                ),
                array( // how we handle dropdown section names
                    'class' => 'dropdown-header',
                    'href'  => NULL,
                    'text'  => 'Navbars in action',
                ),
                array(
                    'class' => NULL,
                    'href'  => site_url('templates/navbar'),
                    'text'  => 'Navbar',
                ),
                array(
                    'class' => NULL,
                    'href'  => site_url('templates/navbar_static'),
                    'text'  => 'Static top navbar',
                ),
                array(
                    'class' => NULL,
                    'href'  => site_url('templates/navbar_fixed'),
                    'text'  => 'Fixed navbar',
                ),
                array( // how we handle dropdown section dividers
                    'class' => 'divider',
                    'href'  => NULL,
                    'text'  => NULL,
                ),
                array( // how we handle dropdown section names
                    'class' => 'dropdown-header',
                    'href'  => NULL,
                    'text'  => 'Custom components',
                ),
                array(
                    'class' => NULL,
                    'href'  => site_url('templates/cover'),
                    'text'  => 'Cover',
                ),
                array(
                    'class' => NULL,
                    'href'  => site_url('templates/carousel'),
                    'text'  => 'Carousel',
                ),
                array(
                    'class' => NULL,
                    'href'  => site_url('templates/blog'),
                    'text'  => 'Blog',
                ),
                array(
                    'class' => NULL,
                    'href'  => site_url('templates/dashboard'),
                    'text'  => 'Dashboard',
                ),
                array(
                    'class' => NULL,
                    'href'  => site_url('templates/signin'),
                    'text'  => 'Sign-in page',
                ),
                array(
                    'class' => NULL,
                    'href'  => site_url('templates/justified_nav'),
                    'text'  => 'Justified nav',
                ),
                array(
                    'class' => NULL,
                    'href'  => site_url('templates/sticky_footer'),
                    'text'  => 'Sticky footer',
                ),
                array(
                    'class' => NULL,
                    'href'  => site_url('templates/sticky_footer_navbar'),
                    'text'  => 'Sticky footer with navbar',
                ),
                array( // how we handle dropdown section dividers
                    'class' => 'divider',
                    'href'  => NULL,
                    'text'  => NULL,
                ),
                array( // how we handle dropdown section names
                    'class' => 'dropdown-header',
                    'href'  => NULL,
                    'text'  => 'Experiments',
                ),
                array(
                    'class' => NULL,
                    'href'  => site_url('templates/nonresponsive'),
                    'text'  => 'Non-responsive Bootstrap',
                ),
                array(
                    'class' => NULL,
                    'href'  => site_url('templates/offcanvas'),
                    'text'  => 'Offcanvas',
                ),
                
            );
            
            // sample navs: inner classes (called via index #)
            $this->nav_class = array(
                array(
                    'class' => 'tabs',
                    'role' => 'tablist',
                ),
                array(
                    'class' => 'pills',
                    'role' => NULL,
                )
            );
            
            // sample navbars: inner classes (called via index #)
            $this->navbar_class = array(
                'default','inverse',
            );
            
            // sample alerts
            $this->alerts = array(
                array(
                    'class'     => 'success',
                    'strong'    => "Well done!",
                    'text'      => "You successfully read this important alert message.",
                ),
                array(
                    'class'     => 'info',
                    'strong'    => "Heads up!",
                    'text'      => "This alert needs your attention, but it's not super important.",
                ),
                array(
                    'class'     => 'warning',
                    'strong'    => "Warning!",
                    'text'      => "Best check yo self, you're not looking too good.",
                ),
                array(
                    'class'     => 'danger',
                    'strong'    => "Oh snap!",
                    'text'      => "Change a few things up and try submitting again.",
                ),
            );
            
            // sample progress bar data (separate bars)
            $this->progress = array(
                array(
                    'class' => NULL,
                    'now'   => 60,                  
                ),
                array(
                    'class' => 'success',
                    'now'   => 40,                   
                ),
                array(
                    'class' => 'info',
                    'now'   => 20,                  
                ),
                array(
                    'class' => 'warning',
                    'now'   => 60,                   
                ),
                array(
                    'class' => 'danger',
                    'now'   => 80,                   
                ),
                array(
                    'class' => 'striped',
                    'now'   => 60,                  
                ),
            );
            
            // sample progress bar data (shared bar)
            $this->progress_shared = array(
                array(
                    'class' => 'success',
                    'pct'   => 35,
                ),
                array(
                    'class' => 'warning',
                    'pct'   => 20,
                ),
                array(
                    'class' => 'danger',
                    'pct'   => 10,
                ),
                
            );
            
            // sample list groups (unlinked / linked / headed)
            $this->list_groups = array(
                array(
                    'active'    => TRUE,
                    'href'      => '#',
                    'text'      => "Cras justo odio",
                    'heading'   => "List group item heading 1",
                ),
                array(
                    'active'    => FALSE,
                    'href'      => '#',
                    'text'      => "Dapibus ac facilisis in",
                    'heading'   => "List group item heading 2",
                ),
                array(
                    'active'    => FALSE,
                    'href'      => '#',
                    'text'      => "Morbi leo risus",
                    'heading'   => "List group item heading 3",
                ),
                array(
                    'active'    => FALSE,
                    'href'      => '#',
                    'text'      => "Porta ac consectetur ac",
                    'heading'   => "List group item heading 4",
                ),
                array(
                    'active'    => FALSE,
                    'href'      => '#',
                    'text'      => "Vestibulum at eros",
                    'heading'   => "List group item heading 5",
                ),
            );
            
            // sample panels (called via index #)
            $this->panels = array(
                array(
                    'class' => 'default',
                    'heading'   => "Panel title 1 default",
                    'content'   => "Panel body 1 default text",                    
                ),
                array(
                    'class' => 'primary',
                    'heading'   => "Panel title 2 primary",
                    'content'   => "Panel body 2 primary text",                    
                ),
                array(
                    'class' => 'success',
                    'heading'   => "Panel title 3 success",
                    'content'   => "Panel body 3 success text",                    
                ),
                array(
                    'class' => 'info',
                    'heading'   => "Panel title 4 info",
                    'content'   => "Panel body 4 info text",                    
                ),
                array(
                    'class' => 'warning',
                    'heading'   => "Panel title 5 warning",
                    'content'   => "Panel body 5 warning text",                    
                ),
                array(
                    'class' => 'danger',
                    'heading'   => "Panel title 6 danger",
                    'content'   => "Panel body 6 danger text",                    
                ),
            );
            
            $this->well_text = "Lorem ipsum dolor sit amet, consectetur adipiscing"
                . " elit. Maecenas sed diam eget risus varius blandit sit"
                . " amet non magna. Lorem ipsum dolor sit amet, consectetur"
                . " adipiscing elit. Praesent commodo cursus magna, vel"
                . " scelerisque nisl consectetur et. Cras mattis"
                . " consectetur purus sit amet fermentum. Duis mollis, est"
                . " non commodo luctus, nisi erat porttitor ligula, eget"
                . " lacinia odio sem nec elit. Aenean lacinia bibendum"
                . " nulla sed consectetur.";
            
            $this->carousel = array(
                array(
                    'active'        => TRUE,
                    'img_src'       => NULL,
                    'img_data-src'  => 'holder.js/1140x500/auto/#777:#555/text:First slide',
                    'img_alt'       => '1st slide',
                    'headline'      => NULL,
                    'text'          => NULL,
                    'btn_href'      => NULL,
                    'btn_text'      => NULL,
                ),
                array(
                    'active'        => FALSE,
                    'img_src'       => NULL,
                    'img_data-src'  => 'holder.js/1140x500/auto/#666:#444/text:Second slide',
                    'img_alt'       => '2nd slide',
                    'headline'      => "Test",
                    'text'          => "No Button",
                    'btn_href'      => NULL,
                    'btn_text'      => NULL,
                ),
                array(
                    'active'        => FALSE,
                    'img_src'       => NULL,
                    'img_data-src'  => 'holder.js/1140x500/auto/#555:#333/text:Third slide',
                    'img_alt'       => '3rd slide',
                    'headline'      => NULL,
                    'text'          => NULL,
                    'btn_href'      => "#",
                    'btn_text'      => "No Headline/Text",
                ),
                array(
                    'active'        => FALSE,
                    'img_src'       => NULL,
                    'img_data-src'  => 'holder.js/1140x500/auto/#444:#222/text:Fourth slide',
                    'img_alt'       => '4th slide',
                    'headline'            => 'Example headline.',
                    'text'             => "Note: If you're viewing this page via a <code>file://</code> URL, the \"next\" and \"previous\" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.",
                    'btn_href'          => '#',
                    'btn_text'        => 'Sign up today',
                ),
            );
            
            $this->carousel_id  = 'carousel-example-generic';
            
        }
    }
