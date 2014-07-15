<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Description of pages
 *
 * @author Jeffrey
 */
    class Templates extends CIBS_Controller
    {
        /*
         * Globals
         */
        
        public function __construct() {
            parent::__construct();
            
        }
        
        public function index()
        {
            /*
             * Special for this demo, based on the cover template
             */
            
            $inner_p = 'Welcome to CodeIgniter Bootstrap';
            $inner_p .= '<br />A combination of two frameworks, back-end and front-end';
            
            $data['body_role']      = 'document';
            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'cover';
            $data['brand']          = $this->brand;
            $data['title']          = "Home";            
            $data['h1']             = $data['title'];
            $data['navbar']         = $this->navbar;
            $data['inner_p']        = $inner_p;
            $data['btn_href']       = site_url('contents');
            $data['btn_text']       = 'Contents';
            $data['copyright']      = $this->copyright;
        
            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/cover/masthead',$data);
            $this->load->view('bootstrap/cover/inner',$data);
            $this->load->view('bootstrap/cover/mastfoot',$data);
            $this->load->view('bootstrap/foot_docs',$data);
        }
        
        public function starter()
        {            
            $lead = 'Use this document as a way to quickly start any new project.';
            $lead .= '<br />';
            $lead .= 'All you get is this text and a mostly barebones HTML document.';
            
            $data['body_role']          = 'document';
            $data['bootstrap']          = $this->bootstrap;
            $data['bootstrap_css']      = $this->bootstrap_css;
            $data['bootstrap_js']       = $this->bootstrap_js;
            $data['custom_css']         = 'starter-template';
            $data['brand']              = $this->brand;
            $data['title']              = "Starter Template for Bootstrap";
            $data['navbar']             = $this->navbar;
            $data['navbardiv']          = $this->starter_navbardiv;
            $data['navbar_dropdown']    = $this->navbar_dropdown;
            $data['navfoot']            = $this->navfoot;
            $data['lead']               = $lead;
            $data['copyright']          = $this->copyright;
        
            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/navbar/open_nav');
            $this->load->view('bootstrap/navbar/open_container');
            $this->load->view('bootstrap/navbar/header');
            $this->load->view('bootstrap/navbar/open_collapse');            
            $this->load->view('bootstrap/navbar/open_bar');
            $this->load->view('bootstrap/navbar/li_core',$data);
            $this->load->view('bootstrap/navbar/li_dropdown',$data);
            $this->load->view('bootstrap/navbar/close_bar'); 
            $this->load->view('bootstrap/navbar/close');
            $this->load->view('bootstrap/container_open');
            $this->load->view('bootstrap/starter',$data);
            $this->load->view('bootstrap/container_close');
            $this->load->view('bootstrap/foot',$data);
        }
        
        public function theme()
        {
            $btn_text = array(
                'Default',
                'Primary',
                'Success',
                'Info',
                'Warning',
                'Danger',
                'Link',
            );
            $btn_size = array(
                'lg',
                NULL,
                'sm',
                'xs',
            );
            
            $data['body_role']      = 'document';
            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'theme';
            $data['brand']          = $this->brand;
            $data['title']          = "Theme Template for Bootstrap";
            $data['navbar']         = $this->navbar;
            $data['navfoot']        = $this->navfoot;
            $data['btn_size']       = $btn_size;
            $data['btn_text']       = $btn_text;
            // samples
            $data['jumbotron']          = $this->jumbotron;
            $data['table_th']           = $this->table_th;
            $data['labels']             = $this->labels;
            $data['navs']               = $this->navs;
            $data['nav_class']          = $this->nav_class;
            $data['navbars']            = $this->navbars;
            $data['navbar_class']       = $this->navbar_class;
            $data['navbar_dropdown']    = $this->navbar_dropdown;
            $data['alerts']             = $this->alerts;
            $data['progress']           = $this->progress;
            $data['progress_shared']    = $this->progress_shared;
            $data['list_groups']        = $this->list_groups;
            $data['panels']             = $this->panels;
            $data['well_text']          = $this->well_text;
            $data['carousel']           = $this->carousel;
            $data['carousel_id']        = $this->carousel_id;
        
            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/theme/page/navbar_open_nav');
            $this->load->view('bootstrap/theme/page/navbar_open_container');
            $this->load->view('bootstrap/navbar/header');
            $this->load->view('bootstrap/navbar/open_collapse');            
            $this->load->view('bootstrap/navbar/open_bar');
            $this->load->view('bootstrap/navbar/li_core',$data);
            $this->load->view('bootstrap/navbar/li_dropdown',$data);
            $this->load->view('bootstrap/navbar/close_bar'); 
            $this->load->view('bootstrap/navbar/close');
            $this->load->view('bootstrap/theme/page/container_open',$data);
            // jumbotron
            $this->load->view('bootstrap/theme/jumbotron',$data);
            // buttons
            $this->load->view('bootstrap/theme/intro/buttons',$data);
            $this->load->view('bootstrap/theme/buttons',$data);            
            // tables
            $this->load->view('bootstrap/theme/intro/tables',$data);
            $this->load->view('bootstrap/theme/tables',$data);
            // thumbnails
            $this->load->view('bootstrap/theme/intro/thumbnails',$data);
            $this->load->view('bootstrap/theme/thumbnails',$data);
            // labels
            $this->load->view('bootstrap/theme/intro/labels',$data);
            $this->load->view('bootstrap/theme/labels',$data);            
            // badges
            $this->load->view('bootstrap/theme/intro/badges',$data);
            $this->load->view('bootstrap/theme/badges',$data);
            // dropdown menus
            $this->load->view('bootstrap/theme/intro/dropdown_menus',$data);
            $this->load->view('bootstrap/theme/dropdown_menus',$data);
            // navs
            $this->load->view('bootstrap/theme/intro/navs',$data);
            $this->load->view('bootstrap/theme/navs',$data);
            // navbars
            $this->load->view('bootstrap/theme/intro/navbars',$data);
            // 'default' navbar style
            $this->load->view('bootstrap/theme/page/navbar_open_nav_0');
            $this->load->view('bootstrap/theme/page/navbar_open_container');
            $this->load->view('bootstrap/navbar/header');
            $this->load->view('bootstrap/navbar/open_collapse');            
            $this->load->view('bootstrap/navbar/open_bar');
            $this->load->view('bootstrap/navbar/li_core',$data);
            $this->load->view('bootstrap/navbar/li_dropdown',$data);
            $this->load->view('bootstrap/navbar/close_bar'); 
            $this->load->view('bootstrap/navbar/close');
            // 'inverse' navbar style
            $this->load->view('bootstrap/theme/page/navbar_open_nav_1');
            $this->load->view('bootstrap/theme/page/navbar_open_container');
            $this->load->view('bootstrap/navbar/header');
            $this->load->view('bootstrap/navbar/open_collapse');            
            $this->load->view('bootstrap/navbar/open_bar');
            $this->load->view('bootstrap/navbar/li_core',$data);
            $this->load->view('bootstrap/navbar/li_dropdown',$data);
            $this->load->view('bootstrap/navbar/close_bar'); 
            $this->load->view('bootstrap/navbar/close');
            // alerts
            $this->load->view('bootstrap/theme/intro/alerts',$data);
            $this->load->view('bootstrap/theme/alerts',$data);
            // progress bars
            $this->load->view('bootstrap/theme/intro/progress_bars',$data);
            $this->load->view('bootstrap/theme/progress_bars',$data);
            // list groups
            $this->load->view('bootstrap/theme/intro/list_groups',$data);
            $this->load->view('bootstrap/theme/list_groups',$data);
            // panels
            $this->load->view('bootstrap/theme/intro/panels',$data);
            $this->load->view('bootstrap/theme/panels',$data);
            // wells
            $this->load->view('bootstrap/theme/intro/wells',$data);
            $this->load->view('bootstrap/theme/wells',$data);
            // carousel
            $this->load->view('bootstrap/theme/intro/carousel',$data);
            $this->load->view('bootstrap/theme/carousel',$data);
            // THE END
            $this->load->view('bootstrap/theme/page/container_close',$data);
            $this->load->view('bootstrap/foot_docs',$data);

        }
        
        public function grids()
        {
            
            $data['body_role']      = 'document';
            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'grid';
            $data['brand']          = $this->brand;
            $data['title']          = "Grid Template for Bootstrap";            
            $data['h1']             = $data['title'];
            $data['copyright']      = $this->copyright;
        
            $this->load->view('bootstrap/head',$data);            
            $this->load->view('bootstrap/grid/header',$data);            
            $this->load->view('bootstrap/grid/three_columns_equal');
            $this->load->view('bootstrap/grid/three_columns_unequal');
            $this->load->view('bootstrap/grid/two_columns');
            $this->load->view('bootstrap/grid/single_column');
            $this->load->view('bootstrap/grid/two-column_two-nested');
            $this->load->view('bootstrap/grid/mixed_md');
            $this->load->view('bootstrap/grid/mixed_mtd');
            $this->load->view('bootstrap/grid/clearing');
            $this->load->view('bootstrap/grid/resets');            
            $this->load->view('bootstrap/foot',$data);

        }

	public function jumbotron()
	{
            $jumbo_p = 'This is a template for a simple marketing or informational website.';
            $jumbo_p .= ' It includes a large callout called a jumbotron and three supporting pieces of content.';
            $jumbo_p .= ' Use it as a starting point to create something more unique.';
            
            $navbardiv = array(
                'subclass'  => 'inverse',
                'top'       => 'fixed',
                'role'      => 'navigation',
                'fluid'     => FALSE,
            );
            
            $data['body_role']      = 'document';
            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'jumbotron';
            $data['brand']          = $this->brand;
            $data['title']          = "Jumbotron Template for Bootstrap";
            $data['navbar']         = $this->navbar;
            $data['navbardiv']      = $navbardiv;
            $data['navfoot']        = $this->navfoot;
            $data['jumbo_p']        = $jumbo_p;
            $data['copyright']      = $this->copyright;
        
            $this->load->view('bootstrap/head',$data);            
            $this->load->view('bootstrap/navbar/open_nav');
            $this->load->view('bootstrap/navbar/open_container');
            $this->load->view('bootstrap/navbar/header');
            $this->load->view('bootstrap/navbar/open_collapse');
            $this->load->view('bootstrap/jumbotron/navbar',$data);
            $this->load->view('bootstrap/navbar/close');
            $this->load->view('bootstrap/jumbotron/jumbotron',$data);
            $this->load->view('bootstrap/container_open');
            $this->load->view('bootstrap/jumbotron/row',$data);            
            $this->load->view('bootstrap/hr');
            $this->load->view('bootstrap/footer',$data);
            $this->load->view('bootstrap/container_close');
            $this->load->view('bootstrap/foot',$data);

	}
        
        public function jumbotronnarrow()
        {
            $lead_p = 'Cras justo odio, dapibus ac facilisis in, egestas eget quam.';
            $lead_p .= ' Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.';
                        
            $data['body_role']      = 'document';
            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'jumbotron-narrow';
            $data['brand']          = $this->brand;
            $data['title']          = "Narrow Jumbotron Template for Bootstrap";  
            $data['navbar']         = $this->navbar;
            $data['navfoot']        = $this->navfoot;
            $data['lead_p']         = $lead_p;
            $data['copyright']      = $this->copyright;
            $data['btn_href']       = '#';
            $data['btn_text']       = 'Sign up today';
        
            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/container_open');
            $this->load->view('bootstrap/jumbotron-narrow/nav',$data);
            $this->load->view('bootstrap/jumbotron',$data);
            $this->load->view('bootstrap/jumbotron-narrow/marketing',$data);
            $this->load->view('bootstrap/footer',$data);
            $this->load->view('bootstrap/container_close');
            $this->load->view('bootstrap/foot_empty',$data);
            
        }
        
        public function navbar()
        {
            // sample jumbotron
            $jumbotron = array(
                'headline'  => "Navbar Template for Bootstrap",
                'text'      => "This example is a quick exercise to illustrate how the"
                    . " default, static navbar and fixed to top navbar work. It"
                    . " includes the responsive CSS and HTML, so it also adapts"
                    . " to your viewport and device.",
                'btn_href'  => "#",
                'btn_text'  => "View navbar docs",
            );
            
            $navbardiv = array(
                'subclass'  => 'default',
                'top'       => NULL,
                'role'      => 'navigation',
                'fluid'     => TRUE,
            );            
            
            $data['body_role']          = NULL;
            $data['bootstrap']          = $this->bootstrap;
            $data['bootstrap_css']      = $this->bootstrap_css;
            $data['bootstrap_js']       = $this->bootstrap_js;
            $data['custom_css']         = 'navbar';
            $data['brand']              = $this->brand;
            $data['title']              = "Navbar Template for Bootstrap";
            $data['navbar']             = $this->navbar;
            $data['navbardiv']          = $navbardiv;
            $data['navbar_right']       = $this->navbar_right;            
            $data['navs']               = $this->navs;
            $data['nav_class']          = $this->nav_class;
            $data['navs']               = $this->navbars;
            $data['navbar_class']       = $this->navbar_class;
            $data['navbar_dropdown']    = $this->navbar_dropdown;            
            $data['copyright']          = $this->copyright;
            $data['jumbotron']          = $jumbotron;
        
            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/container_open');
            $this->load->view('bootstrap/navbar/open_nav');
            $this->load->view('bootstrap/navbar/open_container');
            $this->load->view('bootstrap/navbar/header');
            $this->load->view('bootstrap/navbar/open_collapse');            
            $this->load->view('bootstrap/navbar/open_bar');
            $this->load->view('bootstrap/navbar/li_core',$data);
            $this->load->view('bootstrap/navbar/li_dropdown',$data);
            $this->load->view('bootstrap/navbar/close_bar'); 
            $this->load->view('bootstrap/navbar/right',$data);
            $this->load->view('bootstrap/navbar/close');
            $this->load->view('bootstrap/theme/jumbotron',$data);
            $this->load->view('bootstrap/container_close');
            $this->load->view('bootstrap/foot',$data);
            
        }
        
        public function navbar_static()
        {
            // sample jumbotron
            $jumbotron = array(
                'headline'  => "Static Top Navbar Example for Bootstrap",
                'text'      => "This example is a quick exercise to illustrate how the"
                    . " default, static navbar and fixed to top navbar work. It"
                    . " includes the responsive CSS and HTML, so it also adapts"
                    . " to your viewport and device."
                    . "</p><p>"
                    . "To see the difference between static and fixed top"
                    . " navbars, just scroll.",
                'btn_href'  => "#",
                'btn_text'  => "View navbar docs",
            );
            
            $navbardiv = array(
                'subclass'  => 'default',
                'top'       => 'static',
                'role'      => 'navigation',
                'fluid'     => FALSE,
            );
            
            $data['body_role']          = NULL;
            $data['bootstrap']          = $this->bootstrap;
            $data['bootstrap_css']      = $this->bootstrap_css;
            $data['bootstrap_js']       = $this->bootstrap_js;
            $data['custom_css']         = 'navbar-static-top';
            $data['brand']              = $this->brand;
            $data['title']              = "Static Top Navbar Example for Bootstrap";
            $data['navbar']             = $this->navbar;
            $data['navbardiv']          = $navbardiv;
            $data['navbar_dropdown']    = $this->navbar_dropdown;
            $data['navbar_right']       = $this->navbar_right;
            $data['navbar_class']       = $this->navbar_class;
            $data['copyright']          = $this->copyright;
            $data['jumbotron']          = $jumbotron;
        
            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/navbar/open_nav');
            $this->load->view('bootstrap/navbar/open_container');
            $this->load->view('bootstrap/navbar/header');
            $this->load->view('bootstrap/navbar/open_collapse');            
            $this->load->view('bootstrap/navbar/open_bar');
            $this->load->view('bootstrap/navbar/li_core',$data);
            $this->load->view('bootstrap/navbar/li_dropdown',$data);
            $this->load->view('bootstrap/navbar/close_bar'); 
            $this->load->view('bootstrap/navbar/right',$data);
            $this->load->view('bootstrap/navbar/close');
            $this->load->view('bootstrap/container_open');
            $this->load->view('bootstrap/theme/jumbotron',$data);
            $this->load->view('bootstrap/container_close');
            $this->load->view('bootstrap/foot',$data);
            
        }
        
        public function navbar_fixed()
        {
            // sample jumbotron
            $jumbotron = array(
                'headline'  => "Fixed Top Navbar Example for Bootstrap",
                'text'      => "This example is a quick exercise to illustrate how the"
                    . " default, static navbar and fixed to top navbar work. It"
                    . " includes the responsive CSS and HTML, so it also adapts"
                    . " to your viewport and device."
                    . "</p><p>"
                    . "To see the difference between static and fixed top"
                    . " navbars, just scroll.",
                'btn_href'  => "#",
                'btn_text'  => "View navbar docs",
            );
            
            $navbardiv = array(
                'subclass'  => 'default',
                'top'       => 'fixed',
                'role'      => 'navigation',
                'fluid'     => FALSE,
            );
            
            $data['body_role']          = NULL;
            $data['bootstrap']          = $this->bootstrap;
            $data['bootstrap_css']      = $this->bootstrap_css;
            $data['bootstrap_js']       = $this->bootstrap_js;
            $data['custom_css']         = 'navbar-fixed-top';
            $data['brand']              = $this->brand;
            $data['title']              = "Fixed Top Navbar Example for Bootstrap";
            $data['navbar']             = $this->navbar;
            $data['navbardiv']          = $navbardiv;
            $data['navbar_dropdown']    = $this->navbar_dropdown;
            $data['navbar_right']       = $this->navbar_right;
            $data['navbar_class']       = $this->navbar_class;
            $data['copyright']          = $this->copyright;
            $data['jumbotron']          = $jumbotron;
        
            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/navbar/open_nav');
            $this->load->view('bootstrap/navbar/open_container');
            $this->load->view('bootstrap/navbar/header');
            $this->load->view('bootstrap/navbar/open_collapse');            
            $this->load->view('bootstrap/navbar/open_bar');
            $this->load->view('bootstrap/navbar/li_core',$data);
            $this->load->view('bootstrap/navbar/li_dropdown',$data);
            $this->load->view('bootstrap/navbar/close_bar');
            $this->load->view('bootstrap/navbar/right',$data);
            $this->load->view('bootstrap/navbar/close');
            $this->load->view('bootstrap/container_open');
            $this->load->view('bootstrap/theme/jumbotron',$data);
            $this->load->view('bootstrap/container_close');
            $this->load->view('bootstrap/foot',$data);
            
        }       

	public function cover()
	{
            
            $inner_p = 'Cover is a one-page template for building simple and beautiful home pages.';
            $inner_p .= ' Download, edit the text, and add your own fullscreen background photo to make it your own.';
            
            $data['body_role']      = 'document';
            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'cover';
            $data['brand']          = $this->brand;
            $data['title']          = "Cover Template for Bootstrap";
            $data['navbar']         = $this->navbar; 
            $data['h1']             = $data['title'];            
            $data['inner_p']        = $inner_p;
            $data['btn_href']       = '#';
            $data['btn_text']       = 'Learn more';
            $data['copyright']      = $this->copyright;
        
            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/cover/masthead',$data);
            $this->load->view('bootstrap/cover/inner',$data);
            $this->load->view('bootstrap/cover/mastfoot',$data);
            $this->load->view('bootstrap/foot_docs',$data);

	}
        
        public function carousel()
        {
            $carousel = array(
                array(
                    'active'        => TRUE,
                    'img_src'       => 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==',
                    'img_data-src'  => NULL,
                    'img_alt'       => 'First slide',
                    'headline'      => 'Example headline.',
                    'text'          => "Note: If you're viewing this page via a <code>file://</code> URL, the \"next\" and \"previous\" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.",
                    'btn_href'      => '#',
                    'btn_text'      => 'Sign up today',
                ),
                array(
                    'active'        => FALSE,
                    'img_src'       => 'data:image/gif;base64,R0lGODlhAQABAIAAAGZmZgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==',
                    'img_data-src'  => NULL,
                    'img_alt'       => 'Second slide',
                    'headline'      => 'Another example headline.',
                    'text'          => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.',
                    'btn_href'      => '#',
                    'btn_text'      => 'Learn more',
                ),
                array(
                    'active'        => FALSE,
                    'img_src'       => 'data:image/gif;base64,R0lGODlhAQABAIAAAFVVVQAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==',
                    'img_data-src'  => NULL,
                    'img_alt'       => 'Third slide',
                    'headline'      => 'One more for good measure.',
                    'text'          => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.',
                    'btn_href'      => '#',
                    'btn_text'      => 'Browse gallery',
                ),
                array(
                    'active'        => FALSE,
                    'img_src'       => 'data:image/gif;base64,R0lGODlhAQABAIAAAGZmZgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==',
                    'img_data-src'  => NULL,
                    'img_alt'       => 'Fourth forth',
                    'headline'      => 'Because I can.',
                    'text'          => 'I added this to my array and then I added another LI to the OL which helps the navigation -- which is how we have 4 slides (and dots) instead of 3.',
                    'btn_href'      => '#',
                    'btn_text'      => 'So there',
                ),
            );
            $marketing = array(
                array(
                    'img_src'   => 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==',
                    'img_alt'   => 'Generic placeholder image 1',
                    'h2'        => 'Heading 1',
                    'p'         => "Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.",
                    'href'      => '#',
                    'button'    => 'View details 1',
                ),
                array(
                    'img_src'   => 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==',
                    'img_alt'   => 'Generic placeholder image 2',
                    'h2'        => 'Heading 2',
                    'p'         => "Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.",
                    'href'      => '#',
                    'button'    => 'View details 2',
                ),
                array(
                    'img_src'   => 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==',
                    'img_alt'   => 'Generic placeholder image 3',
                    'h2'        => 'Heading 3',
                    'p'         => "Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.",
                    'href'      => '#',
                    'button'    => 'View details 3',
                ),
            );
            $featurette = array(
                array(
                    'h2'            => "First featurette heading",
                    'muted'         => "It'll blow your mind.",
                    'lead_p'        => "Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.",
                    'img_data-src'  => 'holder.js/500x500/auto',
                    'img_alt'       => 'Generic placeholder image',
                ),
                array(
                    'h2'            => "Oh yeah, it's that good.",
                    'muted'         => "See for yourself.",
                    'lead_p'        => "Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.",
                    'img_data-src'  => 'holder.js/500x500/auto',
                    'img_alt'       => 'Generic placeholder image',
                ),
                array(
                    'h2'            => "And lastly, this one.",
                    'muted'         => "Checkmate.",
                    'lead_p'        => "Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.",
                    'img_data-src'  => 'holder.js/500x500/auto',
                    'img_alt'       => 'Generic placeholder image',
                ),
            );
            
            $navbardiv = array(
                'subclass'  => 'inverse',
                'top'       => 'static',
                'role'      => 'navigation',
                'fluid'     => FALSE,
            );
            
            $data['body_role']          = 'document';
            $data['bootstrap']          = $this->bootstrap;
            $data['bootstrap_css']      = $this->bootstrap_css;
            $data['bootstrap_js']       = $this->bootstrap_js;
            $data['custom_css']         = 'carousel';
            $data['brand']              = $this->brand;
            $data['title']              = "Carousel Template for Bootstrap";            
            $data['h1']                 = $data['title'];
            $data['navbar']             = $this->navbar;
            $data['navbar_dropdown']    = $this->navbar_dropdown;
            $data['navbardiv']          = $navbardiv;
            $data['navfoot']            = $this->navfoot;
            $data['copyright']          = $this->copyright;            
            $data['carousel']           = $carousel;
            $data['carousel_id']        = "myCarousel";
            $data['marketing']          = $marketing;
            $data['featurette']         = $featurette;
        
            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/navbar/open_wrapper');
            $this->load->view('bootstrap/navbar/open_nav');
            $this->load->view('bootstrap/navbar/open_container');
            $this->load->view('bootstrap/navbar/header');
            $this->load->view('bootstrap/navbar/open_collapse');            
            $this->load->view('bootstrap/navbar/open_bar');
            $this->load->view('bootstrap/navbar/li_core',$data);
            $this->load->view('bootstrap/navbar/li_dropdown',$data);
            $this->load->view('bootstrap/navbar/close_bar'); 
            $this->load->view('bootstrap/navbar/close');
            $this->load->view('bootstrap/navbar/close_wrapper');            
            $this->load->view('bootstrap/theme/carousel',$data);
            $this->load->view('bootstrap/carousel/marketing',$data);
            $this->load->view('bootstrap/carousel/featurette',$data);
            $this->load->view('bootstrap/footer',$data);
            $this->load->view('bootstrap/container_close');
            $this->load->view('bootstrap/foot_docs',$data); 
        }
        
        public function blog()
        {
            $posts = array(
                array(
                    'title'     => 'Sample blog post',
                    'date'      => '2014-01-01',
                    'href'      => '#',
                    'author'    => 'Mark',
                    'text'      => '<p>This blog post shows a few different types of content that is supported and styled with Bootstrap.
                        <em>Basic typography, images, and code are all supported.</em></p>
                        <hr>
                        <blockquote>
                        <p>They do not all have <strong>blockquotes</strong>.</p>
                        </blockquote>',
                ),
                array(
                    'title'     => 'Another blog post',
                    'date'      => '2013-12-23',
                    'href'      => '#',
                    'author'    => 'Jacob',
                    'text'      => '<p>'
                    . 'Lots of text including HTML tags without any attributes.'
                    . '</p>'
                    . '<pre><code>They do not all have code blocks</code></pre>',
                ),
                array(
                    'title'     => 'New feature',
                    'date'      => '2013-12-14',
                    'href'      => '#',
                    'author'    => 'Chris',
                    'text'      => '<p>Lots of text including HTML tags without any attributes.</p>'
                    . '<h2>They do not all have Headings</h2>'
                    . '<h3>They do not all have Subheadings</h3>'
                    . '<ul><li>They do not all have lists.</li></ul>'
                    . '<ol><li>They do not all have lists.</li></ol>'
                    . '<p>Bootstrap did not supply a form for blog entries. I (Jeffrey Hartmann) would recommend that '
                    . '<a href="http://www.tinymce.com/" target="_blank">TinyMCE</a> be a part of it.</p>',
                ),
            );
            
            $lead_p = 'The official example template of creating a blog with Bootstrap.';
            
            $data['body_role']      = 'document';
            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'blog';
            $data['brand']          = $this->brand;
            $data['title']          = "Blog Template for Bootstrap";            
            $data['h1']             = $data['title'];
            $data['navbar']         = $this->navbar; 
            $data['lead_p']         = $lead_p;
            $data['posts']          = $posts;
            $data['copyright']      = $this->copyright;
        
            $this->load->view('bootstrap/head',$data);        
            $this->load->view('bootstrap/blog/masthead',$data);        
            $this->load->view('bootstrap/blog/header',$data);        
            $this->load->view('bootstrap/blog/blog',$data);            
            $this->load->view('bootstrap/blog/sidebar',$data);
            $this->load->view('bootstrap/blog/footer',$data);
            $this->load->view('bootstrap/foot_docs',$data);

        }
        
        public function dashboard()
        {
            $dashboard = array(
                array(
                    'img_data-src'  => 'holder.js/200x200/auto/sky',
                    'img_alt'       => 'Generic placeholder thumbnail 1',
                    'h4'            => 'Label 1',
                    'text-muted'    => 'Something else 1',
                ),
                array(
                    'img_data-src'  => 'holder.js/200x200/auto/vine',
                    'img_alt'       => 'Generic placeholder thumbnail 2',
                    'h4'            => 'Label 2',
                    'text-muted'    => 'Something else 2',
                ),
                array(
                    'img_data-src'  => 'holder.js/200x200/auto/sky',
                    'img_alt'       => 'Generic placeholder thumbnail 3',
                    'h4'            => 'Label 3',
                    'text-muted'    => 'Something else 3',
                ),
                array(
                    'img_data-src'  => 'holder.js/200x200/auto/vine',
                    'img_alt'       => 'Generic placeholder thumbnail 4',
                    'h4'            => 'Label 4',
                    'text-muted'    => 'Something else 4',
                ),
            );
            $thead = array(
                '#','Header1','Header2','Header3','Header4',
            );
            
            $navbardiv = array(
                'subclass'  => 'inverse',
                'top'       => 'fixed',
                'role'      => 'navigation',
                'fluid'     => TRUE,
            );
            
            $data['body_role']      = 'document';
            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'dashboard';
            $data['brand']          = $this->brand;
            $data['title']          = "Dashboard Template for Bootstrap";            
            $data['h1']             = $data['title'];
            $data['navbar']         = $this->navbar; 
            $data['navbardiv']      = $navbardiv; 
            $data['h2']             = "Table Section";
            $data['copyright']      = $this->copyright;
            
            $data['dashboard']  = $dashboard;
            $data['thead']      = $thead;
        
            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/navbar/open_nav');
            $this->load->view('bootstrap/navbar/open_container');
            $this->load->view('bootstrap/navbar/header');
            $this->load->view('bootstrap/navbar/open_collapse');
            $this->load->view('bootstrap/dashboard/navbar',$data);
            $this->load->view('bootstrap/navbar/close');
            $this->load->view('bootstrap/dashboard/nav_sidebar',$data);
            $this->load->view('bootstrap/dashboard/dashboard',$data);
            $this->load->view('bootstrap/dashboard/table',$data);
            $this->load->view('bootstrap/foot_docs',$data);
            
        }
        
        public function signin()
        {
            
            $data['body_role']      = 'document';
            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'signin';
            $data['brand']          = $this->brand;
            $data['title']          = "Signin Template for Bootstrap";
            $data['action']         = '';
            $data['copyright']      = $this->copyright;
        
            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/signin/signin',$data);
            $this->load->view('bootstrap/foot',$data);
        }
        
        public function justified_nav()
        {
            $lead_p = "Cras justo odio, dapibus ac facilisis in, egestas eget quam.";
            $lead_p .= "Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.";
            
            $data['body_role']      = 'document';
            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'justified_nav';
            $data['brand']          = $this->brand;
            $data['title']          = "Justified Nav Template for Bootstrap";           
            $data['h1']             = $data['title'];
            $data['navbar']         = $this->navbar;
            $data['navfoot']        = $this->navfoot;
            $data['lead_p']         = $lead_p;
            $data['btn_href']       = '#';
            $data['btn_text']       = 'Get started today';
            $data['copyright']      = $this->copyright;
        
            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/container_open');            
            $this->load->view('bootstrap/justified_nav/masthead',$data);
            $this->load->view('bootstrap/jumbotron',$data);
            $this->load->view('bootstrap/justified_nav/row',$data);
            $this->load->view('bootstrap/footer',$data);
            $this->load->view('bootstrap/container_close');
            $this->load->view('bootstrap/foot',$data);
        }
        
        public function sticky_footer()
        {
            $lead_p = 'Pin a fixed-height footer to the bottom of the viewport'
                . ' in desktop browsers with this custom HTML and CSS.';
            $next_p = 'Use <a href="'
                . site_url('templates/sticky_footer_navbar/')
                . '"\>the sticky footer with a fixed navbar</a> if need be, too.';
            
            $data['body_role']      = 'document';
            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'sticky-footer';
            $data['brand']          = $this->brand;
            $data['title']          = "Sticky Footer Template for Bootstrap";           
            $data['h1']             = $data['title'];
            $data['navbar']         = $this->navbar;
            $data['navfoot']        = $this->navfoot;
            $data['lead_p']         = $lead_p;
            $data['next_p']         = $next_p;
            $data['copyright']      = $this->copyright;
        
            $this->load->view('bootstrap/head',$data);            
            $this->load->view('bootstrap/sticky_footer/header',$data);
            $this->load->view('bootstrap/sticky_footer/footer',$data);
            $this->load->view('bootstrap/foot',$data);
        }
        
        public function sticky_footer_navbar()
        {
            $lead_p = 'Pin a fixed-height footer to the bottom of the viewport
                in desktop browsers with this custom HTML and CSS. A fixed
                navbar has been added with <code>padding-top: 60px;</code> on
                the <code>body > .container</code>.</p>';
            $next_p = 'Back to <a href="'
                . site_url('templates/sticky_footer/')
                . '"\>the default sticky footer</a> minus the navbar.';            
            
            $navbardiv = array(
                'subclass'  => 'default',
                'top'       => 'fixed',
                'role'      => 'navigation',
                'fluid'     => FALSE,
            );
            
            $data['body_role']          = 'document';
            $data['bootstrap']          = $this->bootstrap;
            $data['bootstrap_css']      = $this->bootstrap_css;
            $data['bootstrap_js']       = $this->bootstrap_js;
            $data['custom_css']         = 'sticky-footer-navbar';
            $data['brand']              = $this->brand;
            $data['title']              = "Sticky Footer Navbar Template for Bootstrap";           
            $data['h1']                 = $data['title'];
            $data['navbar']             = $this->navbar;
            $data['navbardiv']          = $navbardiv;
            $data['navbar_dropdown']    = $this->navbar_dropdown;
            $data['navfoot']            = $this->navfoot;
            $data['lead_p']             = $lead_p;
            $data['next_p']             = $next_p;
            $data['copyright']          = $this->copyright;
        
            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/navbar/open_nav');
            $this->load->view('bootstrap/navbar/open_container');
            $this->load->view('bootstrap/navbar/header');
            $this->load->view('bootstrap/navbar/open_collapse');           
            $this->load->view('bootstrap/navbar/open_bar');
            $this->load->view('bootstrap/navbar/li_core',$data);
            $this->load->view('bootstrap/navbar/li_dropdown',$data);
            $this->load->view('bootstrap/navbar/close_bar'); 
            $this->load->view('bootstrap/navbar/close');
            $this->load->view('bootstrap/sticky_footer/header',$data);
            $this->load->view('bootstrap/sticky_footer/footer',$data);
            $this->load->view('bootstrap/foot',$data);
        }
    }
