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
            $title  = "Home";            
            $inner  = 'Welcome to CodeIgniter Bootstrap<br />A combination of'
                    . ' two frameworks, back-end and front-end';
            
            $cover = array(
                'title' => $title,
                'inner' => $inner,
                'btn_href'  => site_url('contents'),
                'btn_text'  => "Contents",
            );
            
            $data['viewport']       = TRUE;
            $data['body_role']      = 'document';
            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'cover';
            $data['brand']          = $this->brand;
            $data['title']          = $title;
            $data['navbar']         = $this->navbar;
            $data['cover']          = $cover;
            $data['copyright']      = $this->copyright;
        
            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/cover/open');
            $this->load->view('bootstrap/cover/masthead',$data);
            $this->load->view('bootstrap/cover/inner',$data);
            $this->load->view('bootstrap/cover/mastfoot',$data);
            $this->load->view('bootstrap/cover/close');
            $this->load->view('bootstrap/foot_docs',$data);
        }
        
        public function starter()
        {            
            $lead = 'Use this document as a way to quickly start any new project.';
            $lead .= '<br />';
            $lead .= 'All you get is this text and a mostly barebones HTML document.';
            
            $data['viewport']           = TRUE;
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
            $this->load->view('bootstrap/container/open');
            $this->load->view('bootstrap/starter',$data);
            $this->load->view('bootstrap/container/close');
            $this->load->view('bootstrap/foot',$data);
        }
        
        public function theme()
        {
            $title  = "Theme Template for Bootstrap";
            
            $lead   = "This is a template for a simple marketing or
                informational website. It includes a large callout called a
                jumbotron and three supporting pieces of content. Use it as a
                starting point to create something more unique.";
            
            $jumbotron = array(
                'container'     => FALSE,
                'headline'      => $title,
                'lead_class'    => NULL,
                'lead_text'     => $lead,
                'btn_class'     => 'primary',
                'btn_href'      => "#",
                'btn_text'      => "Learn more",
            );
            
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
            
            $alerts = $this->alerts;
            $alerts['success']['strong']    = 'SUCCESS!';
            $alerts['success']['text']      = 'Success, Will Robinson!';
            $alerts['info']['strong']       = 'FOR YOUR INFORMATION:';
            $alerts['info']['text']         = 'Information, Will Robinson.';
            $alerts['warning']['strong']    = 'WARNING!';
            $alerts['warning']['text']      = 'Warning, Will Robinson!';
            $alerts['danger']['strong']     = 'DANGER!';
            $alerts['danger']['text']       = 'Danger, whatever your name is!';            
            
            $data['viewport']       = TRUE;
            $data['body_role']      = 'document';
            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'theme';
            $data['brand']          = $this->brand;
            $data['title']          = $title;
            $data['navbar']         = $this->navbar;
            $data['navfoot']        = $this->navfoot;
            $data['btn_size']       = $btn_size;
            $data['btn_text']       = $btn_text;
            // samples
            $data['jumbotron']          = $jumbotron;
            $data['table_th']           = $this->table_th;
            $data['labels']             = $this->labels;
            $data['navs']               = $this->navs;
            $data['nav_class']          = $this->nav_class;
            $data['navbars']            = $this->navbars;
            $data['navbar_class']       = $this->navbar_class;
            $data['navbar_dropdown']    = $this->navbar_dropdown;
            $data['alerts']             = $alerts;
            $data['thumbnail']           = $this->thumbnail;
            $data['progress']           = $this->progress;
            $data['progress_shared']    = $this->progress_shared;
            $data['list_groups']        = $this->list_groups;
            $data['panels']             = $this->panels;
            $data['well_text']          = $this->well_text;
            $data['carousel']           = $this->carousel_theme;
        
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
            $this->load->view('bootstrap/jumbotron',$data);
            // buttons
            $this->load->view('bootstrap/theme/intro/buttons');
            $this->load->view('bootstrap/buttons/lg');
            $this->load->view('bootstrap/buttons/btn');
            $this->load->view('bootstrap/buttons/sm');
            $this->load->view('bootstrap/buttons/xs');
            // tables
            $this->load->view('bootstrap/theme/intro/tables');
            $this->load->view('bootstrap/theme/tables',$data);
            // thumbnails
            $this->load->view('bootstrap/theme/intro/thumbnails');
            $this->load->view('bootstrap/thumbnail',$data);
            // labels
            $this->load->view('bootstrap/theme/intro/labels');
            $this->load->view('bootstrap/theme/labels',$data);            
            // badges
            $this->load->view('bootstrap/theme/intro/badges');
            $this->load->view('bootstrap/theme/badges',$data);
            // dropdown menus
            $this->load->view('bootstrap/theme/intro/dropdown_menus');
            $this->load->view('bootstrap/theme/dropdown_menus',$data);
            // navs
            $this->load->view('bootstrap/theme/intro/navs');
            $this->load->view('bootstrap/theme/navs',$data);
            // navbars
            $this->load->view('bootstrap/theme/intro/navbars');
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
            $this->load->view('bootstrap/theme/intro/alerts');
            $this->load->view('bootstrap/alerts/success',$data);
            $this->load->view('bootstrap/alerts/info',$data);
            $this->load->view('bootstrap/alerts/warning',$data);
            $this->load->view('bootstrap/alerts/danger',$data);
            // progress bars
            $this->load->view('bootstrap/theme/intro/progress_bars');
            $this->load->view('bootstrap/theme/progress_bars',$data);
            // list groups
            $this->load->view('bootstrap/theme/intro/list_groups');
            $this->load->view('bootstrap/theme/list_groups',$data);
            // panels
            $this->load->view('bootstrap/theme/intro/panels');
            $this->load->view('bootstrap/theme/panels',$data);
            // wells
            $this->load->view('bootstrap/theme/intro/wells');
            $this->load->view('bootstrap/theme/wells',$data);
            // carousel
            $this->load->view('bootstrap/theme/intro/carousel');
            $this->load->view('bootstrap/carousel',$data);
            // THE END
            $this->load->view('bootstrap/theme/page/container_close');
            $this->load->view('bootstrap/foot_docs',$data);

        }
        
        public function grids()
        {
            $title = "Grid Template for Bootstrap";
            $lead = "Basic grid layouts to get you familiar with building within"
                    . " the Bootstrap grid system";
            
            $page = array(
                'title' => $title,
                'lead'  => $lead,
            );
            
            $data['viewport']       = TRUE;
            $data['body_role']      = 'document';
            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'grid';
            $data['brand']          = $this->brand;
            $data['title']          = $title;
            $data['page']           = $page;
            $data['copyright']      = $this->copyright;
        
            $this->load->view('bootstrap/head',$data);            
            $this->load->view('bootstrap/container/open');            
            $this->load->view('bootstrap/page_header',$data);            
            $this->load->view('bootstrap/grid/three_columns_equal');
            $this->load->view('bootstrap/grid/three_columns_unequal');
            $this->load->view('bootstrap/grid/two_columns');
            $this->load->view('bootstrap/grid/single_column');
            $this->load->view('bootstrap/grid/two-column_two-nested');
            $this->load->view('bootstrap/grid/mixed_md');
            $this->load->view('bootstrap/grid/mixed_mtd');
            $this->load->view('bootstrap/grid/clearing');
            $this->load->view('bootstrap/grid/resets');            
            $this->load->view('bootstrap/container/close');
            $this->load->view('bootstrap/foot',$data);

        }

	public function jumbotron()
	{
            $title  = "Jumbotron Template for Bootstrap";
            
            $lead   = 'This is a template for a simple marketing or informational website.';
            $lead   .= ' It includes a large callout called a jumbotron and three supporting pieces of content.';
            $lead   .= ' Use it as a starting point to create something more unique.';
            
            $navbardiv = array(
                'subclass'  => 'inverse',
                'top'       => 'fixed',
                'role'      => 'navigation',
                'fluid'     => FALSE,
            );
            
            $jumbotron = array(
                'container'     => TRUE,
                'headline'      => $title,
                'lead_class'    => 'lead',
                'lead_text'     => $lead,
                'btn_class'     => 'primary', // or success
                'btn_href'      => "#",
                'btn_text'      => "Learn more",
            );
            
            $data['viewport']       = TRUE;
            $data['body_role']      = 'document';
            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'jumbotron';
            $data['brand']          = $this->brand;
            $data['title']          = $title;
            $data['navbar']         = $this->navbar;
            $data['navbardiv']      = $navbardiv;
            $data['navfoot']        = $this->navfoot;
            $data['jumbotron']      = $jumbotron;
            $data['copyright']      = $this->copyright;
        
            $this->load->view('bootstrap/head',$data);            
            $this->load->view('bootstrap/navbar/open_nav');
            $this->load->view('bootstrap/navbar/open_container');
            $this->load->view('bootstrap/navbar/header');
            $this->load->view('bootstrap/navbar/open_collapse');
            $this->load->view('bootstrap/jumbotron/nav_form');
            $this->load->view('bootstrap/navbar/close');
            $this->load->view('bootstrap/jumbotron',$data);
            $this->load->view('bootstrap/container/open');
            $this->load->view('bootstrap/jumbotron/row',$data);            
            $this->load->view('bootstrap/hr');
            $this->load->view('bootstrap/footer',$data);
            $this->load->view('bootstrap/container/close');
            $this->load->view('bootstrap/foot',$data);

	}
        
        public function jumbotronnarrow()
        {
            $title  = "Narrow Jumbotron Template for Bootstrap";
            $lead   = 'Cras justo odio, dapibus ac facilisis in, egestas eget'
                    . ' quam. Fusce dapibus, tellus ac cursus commodo, tortor'
                    . ' mauris condimentum nibh, ut fermentum massa justo sit'
                    . ' amet risus.';
                        
            $jumbotron = array(
                'container'     => FALSE,
                'headline'      => $title,
                'lead_class'    => 'lead',
                'lead_text'     => $lead,
                'btn_class'     => 'success',
                'btn_href'      => "#",
                'btn_text'      => "Sign up today",
            );
            
            $data['viewport']       = TRUE;
            $data['body_role']      = 'document';
            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'jumbotron-narrow';
            $data['brand']          = $this->brand;
            $data['title']          = $title;  
            $data['navbar']         = $this->navbar;
            $data['navfoot']        = $this->navfoot;
            $data['jumbotron']      = $jumbotron;
            $data['copyright']      = $this->copyright;
        
            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/container/open');
            $this->load->view('bootstrap/jumbotron-narrow/nav',$data);
            $this->load->view('bootstrap/jumbotron',$data);
            $this->load->view('bootstrap/jumbotron-narrow/marketing',$data);
            $this->load->view('bootstrap/footer',$data);
            $this->load->view('bootstrap/container/close');
            $this->load->view('bootstrap/foot_empty',$data);
            
        }
        
        public function navbar()
        {            
            $title  = "Navbar Template for Bootstrap";
            
            $lead   = "This example is a quick exercise to illustrate how the"
                    . " default, static navbar and fixed to top navbar work. It"
                    . " includes the responsive CSS and HTML, so it also adapts"
                    . " to your viewport and device.";
            
            $navbardiv = array(
                'subclass'  => 'default',
                'top'       => NULL,
                'role'      => 'navigation',
                'fluid'     => TRUE,
            );
            
            $jumbotron = array(
                'container'     => FALSE,
                'headline'      => $title,
                'lead_class'    => NULL,
                'lead_text'     => $lead,
                'btn_class'     => 'primary',
                'btn_href'      => "#",
                'btn_text'      => "View navbar docs",
            );
            
            $data['viewport']           = TRUE;
            $data['body_role']          = NULL;
            $data['bootstrap']          = $this->bootstrap;
            $data['bootstrap_css']      = $this->bootstrap_css;
            $data['bootstrap_js']       = $this->bootstrap_js;
            $data['custom_css']         = 'navbar';
            $data['brand']              = $this->brand;
            $data['title']              = $title;
            $data['navbar']             = $this->navbar;
            $data['navbardiv']          = $navbardiv;
            $data['navbar_right']       = $this->navbar_right;            
            $data['navs']               = $this->navs;
            $data['nav_class']          = $this->nav_class;
            $data['navs']               = $this->navbars;
            $data['navbar_class']       = $this->navbar_class;
            $data['navbar_dropdown']    = $this->navbar_dropdown;
            $data['jumbotron']          = $jumbotron;            
            $data['copyright']          = $this->copyright;
        
            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/container/open');
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
            $this->load->view('bootstrap/jumbotron',$data);
            $this->load->view('bootstrap/container/close');
            $this->load->view('bootstrap/foot',$data);
            
        }
        
        public function navbar_static()
        {            
            $title  = "Static Top Navbar Example for Bootstrap";
            
            $lead   = "This example is a quick exercise to illustrate how the"
                    . " default, static navbar and fixed to top navbar work. It"
                    . " includes the responsive CSS and HTML, so it also adapts"
                    . " to your viewport and device."
                    . "</p><p>"
                    . "To see the difference between static and fixed top"
                    . " navbars, just scroll.";
            
            $navbardiv = array(
                'subclass'  => 'default',
                'top'       => 'static',
                'role'      => 'navigation',
                'fluid'     => FALSE,
            );
            
            $jumbotron = array(
                'container'     => FALSE,
                'headline'      => $title,
                'lead_class'    => NULL,
                'lead_text'     => $lead,
                'btn_class'     => 'primary',
                'btn_href'      => "#",
                'btn_text'      => "View navbar docs",
            );
            
            $data['viewport']           = TRUE;
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
            $data['jumbotron']          = $jumbotron;
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
            $this->load->view('bootstrap/navbar/right',$data);
            $this->load->view('bootstrap/navbar/close');
            $this->load->view('bootstrap/container/open');
            $this->load->view('bootstrap/jumbotron',$data);
            $this->load->view('bootstrap/container/close');
            $this->load->view('bootstrap/foot',$data);
            
        }
        
        public function navbar_fixed()
        {            
            $title  = "Fixed Top Navbar Example for Bootstrap";
            
            $lead   = "This example is a quick exercise to illustrate how the"
                    . " default, static navbar and fixed to top navbar work. It"
                    . " includes the responsive CSS and HTML, so it also adapts"
                    . " to your viewport and device."
                    . "</p><p>"
                    . "To see the difference between static and fixed top"
                    . " navbars, just scroll.";
            
            $navbardiv = array(
                'subclass'  => 'default',
                'top'       => 'fixed',
                'role'      => 'navigation',
                'fluid'     => FALSE,
            );
            
            $jumbotron = array(
                'container'     => FALSE,
                'headline'      => $title,
                'lead_class'    => NULL,
                'lead_text'     => $lead,
                'btn_class'     => 'primary',
                'btn_href'      => "#",
                'btn_text'      => "View navbar docs",
            );
            
            $data['viewport']           = TRUE;
            $data['body_role']          = NULL;
            $data['bootstrap']          = $this->bootstrap;
            $data['bootstrap_css']      = $this->bootstrap_css;
            $data['bootstrap_js']       = $this->bootstrap_js;
            $data['custom_css']         = 'navbar-fixed-top';
            $data['brand']              = $this->brand;
            $data['title']              = $title;
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
            $this->load->view('bootstrap/container/open');
            $this->load->view('bootstrap/jumbotron',$data);
            $this->load->view('bootstrap/container/close');
            $this->load->view('bootstrap/foot',$data);
            
        }       

	public function cover()
	{
            $title  = "Cover Template for Bootstrap";            
            $inner  = 'Cover is a one-page template for building simple and'
                    . ' beautiful home pages. Download, edit the text, and add'
                    . ' your own fullscreen background photo to make it your'
                    . ' own.';
            
            $cover = array(
                'title' => $title,
                'inner' => $inner,
                'btn_href'  => "#",
                'btn_text'  => "Learn more",
            );
            
            $inner_p = 'Cover is a one-page template for building simple and beautiful home pages.';
            $inner_p .= ' Download, edit the text, and add your own fullscreen background photo to make it your own.';
            
            $data['viewport']       = TRUE;
            $data['body_role']      = 'document';
            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'cover';
            $data['brand']          = $this->brand;
            $data['title']          = $title;
            $data['navbar']         = $this->navbar; 
            $data['cover']          = $cover;
            $data['copyright']      = $this->copyright;
        
            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/cover/open');
            $this->load->view('bootstrap/cover/masthead',$data);
            $this->load->view('bootstrap/cover/inner',$data);
            $this->load->view('bootstrap/cover/mastfoot',$data);
            $this->load->view('bootstrap/cover/close');
            $this->load->view('bootstrap/foot_docs',$data);

	}
        
        public function carousel()
        {
            $title = "Carousel Template for Bootstrap";
            
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
            
            $data['viewport']           = TRUE;
            $data['body_role']          = 'document';
            $data['bootstrap']          = $this->bootstrap;
            $data['bootstrap_css']      = $this->bootstrap_css;
            $data['bootstrap_js']       = $this->bootstrap_js;
            $data['custom_css']         = 'carousel';
            $data['brand']              = $this->brand;
            $data['title']              = $title;
            $data['navbar']             = $this->navbar;
            $data['navbar_dropdown']    = $this->navbar_dropdown;
            $data['navbardiv']          = $navbardiv;
            $data['navfoot']            = $this->navfoot;
            $data['copyright']          = $this->copyright;            
            $data['carousel']           = $this->carousel_page;
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
            $this->load->view('bootstrap/carousel',$data);
            $this->load->view('bootstrap/carousel/marketing',$data);
            $this->load->view('bootstrap/carousel/featurette',$data);
            $this->load->view('bootstrap/footer',$data);
            $this->load->view('bootstrap/container/close');
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
            
            $data['viewport']       = TRUE;
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
            $this->load->view('bootstrap/container/open',$data);
            $this->load->view('bootstrap/blog/header',$data);       
            $this->load->view('bootstrap/row/open',$data);           
            $this->load->view('bootstrap/blog/main',$data);            
            $this->load->view('bootstrap/blog/sidebar',$data);       
            $this->load->view('bootstrap/row/close',$data);       
            $this->load->view('bootstrap/container/close',$data);
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
            
            $data['viewport']       = TRUE;
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
            
            $data['viewport']       = TRUE;
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
            $title  = "Justified Nav Template for Bootstrap";
            
            $lead   = "Cras justo odio, dapibus ac facilisis in, egestas eget quam.";
            $lead   .= "Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.";
            
            $jumbotron = array(
                'container'     => FALSE,
                'headline'      => $title,
                'lead_class'    => 'lead',
                'lead_text'     => $lead,
                'btn_class'     => 'success',
                'btn_href'      => "#",
                'btn_text'      => "Get started today",
            );
                        
            $data['viewport']       = TRUE;
            $data['body_role']      = 'document';
            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'justified_nav';
            $data['brand']          = $this->brand;
            $data['title']          = $title;
            $data['navbar']         = $this->navbar;
            $data['navfoot']        = $this->navfoot;
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
            $title  = "Sticky Footer Template for Bootstrap";
            $lead   = 'Pin a fixed-height footer to the bottom of the viewport in'
                . ' desktop browsers with this custom HTML and CSS. Use <a href="'
                . site_url('templates/sticky_footer_navbar/')
                . '"\>the sticky footer with a fixed navbar</a>'
                . ' if need be, too.';
            
            $page   = array(
                'title' => $title,
                'lead'  => $lead,
            );
            
            $data['viewport']       = TRUE;
            $data['body_role']      = 'document';
            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'sticky-footer';
            $data['brand']          = $this->brand;
            $data['title']          = $title;           
            $data['h1']             = $data['title'];
            $data['navbar']         = $this->navbar;
            $data['navfoot']        = $this->navfoot;
            $data['page']           = $page;
            $data['copyright']      = $this->copyright;
        
            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/container_open');
            $this->load->view('bootstrap/page_header',$data);
            $this->load->view('bootstrap/container_close');
            $this->load->view('bootstrap/sticky_footer/footer',$data);
            $this->load->view('bootstrap/foot',$data);
        }
        
        public function sticky_footer_navbar()
        {
            $title  = "Sticky Footer Navbar Template for Bootstrap";
            $lead   = 'Pin a fixed-height footer to the bottom of the viewport in'
                . ' desktop browsers with this custom HTML and CSS. A fixed'
                . ' navbar has been added with'
                . ' <code>padding-top: 60px;</code>'
                . ' on the'
                . ' <code>body > .container</code>'
                . '.</p><p>'
                . 'Back to <a href="'
                . site_url('templates/sticky_footer/')
                . '"\>the default sticky footer</a> minus the navbar.';
            
            $page   = array(
                'title' => $title,
                'lead'  => $lead,
            );
            
            $navbardiv = array(
                'subclass'  => 'default',
                'top'       => 'fixed',
                'role'      => 'navigation',
                'fluid'     => FALSE,
            );
            
            $data['viewport']           = TRUE;
            $data['body_role']          = 'document';
            $data['bootstrap']          = $this->bootstrap;
            $data['bootstrap_css']      = $this->bootstrap_css;
            $data['bootstrap_js']       = $this->bootstrap_js;
            $data['custom_css']         = 'sticky-footer-navbar';
            $data['brand']              = $this->brand;
            $data['title']              = $title;           
            $data['h1']                 = $data['title'];
            $data['navbar']             = $this->navbar;
            $data['navbardiv']          = $navbardiv;
            $data['navbar_dropdown']    = $this->navbar_dropdown;
            $data['navfoot']            = $this->navfoot;
            $data['page']               = $page;
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
            $this->load->view('bootstrap/page_header',$data);
            $this->load->view('bootstrap/container_close');
            $this->load->view('bootstrap/sticky_footer/footer',$data);
            $this->load->view('bootstrap/foot',$data);
        }
        
        public function nonresponsive()
        {
            $title  = "Non-responsive Template for Bootstrap";
            $lead   = "Disable the responsiveness of Bootstrap by fixing the
                width of the container and using the first grid system tier.
                <a href=\"http://getbootstrap.com/getting-started/#disable-responsive\">Read the documentation</a>
                for more information.";
            
            $page   = array(
                'title' => $title,
                'lead'  => $lead,
            );
            
            $navbardiv = array(
                'subclass'  => 'default',
                'top'       => 'fixed',
                'role'      => 'navigation',
                'fluid'     => FALSE,
            );
            
            $data['viewport']           = FALSE;
            $data['body_role']          = NULL;
            $data['bootstrap']          = $this->bootstrap;
            $data['bootstrap_css']      = $this->bootstrap_css;
            $data['bootstrap_js']       = $this->bootstrap_js;
            $data['custom_css']         = 'non-responsive';
            $data['brand']              = $this->brand;
            $data['title']              = $title;
            $data['navbar']             = $this->navbar;
            $data['page']               = $page;
            $data['navbardiv']          = $navbardiv;
            $data['navbar_dropdown']    = $this->navbar_dropdown;
            $data['navbar_right']       = $this->navbar_right; 
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
            $this->load->view('bootstrap/navbar/right',$data);
            $this->load->view('bootstrap/navbar/close');
            $this->load->view('bootstrap/container_open',$data);
            $this->load->view('bootstrap/page_header',$data);
            $this->load->view('bootstrap/nonresponsive/nonresponsive',$data);
            $this->load->view('bootstrap/container_close',$data);
            $this->load->view('bootstrap/foot',$data);
        }
        
        public function offcanvas()
        {
            $title  = "Off Canvas Template for Bootstrap";
            
            $lead   = "This is an example to show the potential of an offcanvas
                layout pattern in Bootstrap. Try some responsive-range viewport
                sizes to see it in action.";
            
            $navbardiv = array(
                'subclass'  => 'inverse',
                'top'       => 'fixed',
                'role'      => 'navigation',
                'fluid'     => FALSE,
            );
            
            $jumbotron = array(
                'container'     => FALSE,
                'headline'      => $title,
                'lead_class'    => NULL,
                'lead_text'     => $lead,
                'btn_class'     => NULL,
                'btn_href'      => NULL,
                'btn_text'      => NULL,
            );
            
            $data['viewport']           = TRUE;
            $data['body_role']          = NULL;
            $data['bootstrap']          = $this->bootstrap;
            $data['bootstrap_css']      = $this->bootstrap_css;
            $data['bootstrap_js']       = $this->bootstrap_js;
            $data['custom_css']         = 'offcanvas';
            $data['brand']              = $this->brand;
            $data['title']              = $title;
            $data['navbar']             = $this->navbar;
            $data['navbardiv']          = $navbardiv;
            $data['navbar_dropdown']    = $this->navbar_dropdown;
            $data['jumbotron']          = $jumbotron;
            $data['copyright']          = $this->copyright;
            $data['navfoot']            = $this->navfoot;
        
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
            $this->load->view('bootstrap/container_open',$data);            
            $this->load->view('bootstrap/offcanvas/row_open',$data);
            $this->load->view('bootstrap/offcanvas/col_open',$data);
            $this->load->view('bootstrap/offcanvas/toggle_nav',$data);
            $this->load->view('bootstrap/jumbotron',$data);
            $this->load->view('bootstrap/offcanvas/headings',$data);
            $this->load->view('bootstrap/offcanvas/col_close',$data);
            $this->load->view('bootstrap/offcanvas/sidebar');
            $this->load->view('bootstrap/offcanvas/row_close');
            $this->load->view('bootstrap/hr',$data);
            $this->load->view('bootstrap/footer',$data);
            $this->load->view('bootstrap/container_close',$data);
            $this->load->view('bootstrap/foot_docs',$data);
        }
        
        
    }
