<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Description of pages
 *
 * @author Jeffrey
 */
    class Templates extends CI_Controller
    {
        public function __construct() {
            parent::__construct();
            
            
        }
        
        
        
        public function index()
        {
            /*
             * Special for this demo
             * Soon to be based on the cover template
             * Currently under construction
             */  
            $navbar = array(
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
            
            
            $inner_p = 'Welcome to CodeIgniter Bootstrap';
            $inner_p .= '<br />A combination of two frameworks, back-end and front-end';
            
            $data['bootstrap']      = base_url() . 'bootstrap/';
            $data['bootstrap_css']  = $data['bootstrap'] . 'css/';
            $data['bootstrap_js']   = $data['bootstrap'] . 'js/';
            $data['custom_css']     = 'cover';
            $data['brand']          = 'CodeIgniter BootStrap';
            $data['title']          = "Home";            
            $data['h1']             = $data['title'];
            $data['navbar']         = $navbar;            
            $data['inner_p']        = $inner_p;
            $data['btn_href']       = site_url('contents');
            $data['btn_text']       = 'Contents';
        
            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/cover/masthead',$data);
            $this->load->view('bootstrap/cover/inner',$data);
            $this->load->view('bootstrap/cover/mastfoot',$data);
            $this->load->view('bootstrap/foot_docs',$data);
        }
        
        public function starter()
        {
            
            $navbar = array(
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
            
            $lead_p = 'Use this document as a way to quickly start any new project.';
            $lead_p .= '<br />';
            $lead_p .= 'All you get is this text and a mostly barebones HTML document.';
            
            $data['bootstrap']      = base_url() . 'bootstrap/';
            $data['bootstrap_css']  = $data['bootstrap'] . 'css/';
            $data['bootstrap_js']   = $data['bootstrap'] . 'js/';
            $data['custom_css']     = 'starter-template';
            $data['brand']          = 'CodeIgniter BootStrap';
            $data['title']          = "Starter Template for Bootstrap";            
            $data['h1']             = $data['title'];
            $data['navbar']         = $navbar;
            $data['lead_p']         = $lead_p;
        
            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/starter/navbar',$data);
            $this->load->view('bootstrap/starter/starter',$data);
            $this->load->view('bootstrap/foot',$data);
            
        }
        
        // public function theme(){}
        // public function grids(){}

	public function jumbotron()
	{
            $jumbo_p = 'This is a template for a simple marketing or informational website.';
            $jumbo_p .= ' It includes a large callout called a jumbotron and three supporting pieces of content.';
            $jumbo_p .= ' Use it as a starting point to create something more unique.';
    
            $data['bootstrap']      = base_url() . 'bootstrap/';
            $data['bootstrap_css']  = $data['bootstrap'] . 'css/';
            $data['bootstrap_js']   = $data['bootstrap'] . 'js/';
            $data['custom_css']     = 'jumbotron';
            $data['brand']          = 'CodeIgniter BootStrap';
            $data['title']          = "Jumbotron Template for Bootstrap";            
            $data['h1']             = $data['title'];
            $data['jumbo_p']        = $jumbo_p;
        
            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/jumbotron/navbar',$data);
            $this->load->view('bootstrap/jumbotron/jumbotron',$data);
            $this->load->view('bootstrap/jumbotron/row',$data);
            $this->load->view('bootstrap/jumbotron/footer',$data);
            $this->load->view('bootstrap/foot',$data);

	}
        
        public function jumbotronnarrow()
        {
            $lead_p = 'Cras justo odio, dapibus ac facilisis in, egestas eget quam.';
            $lead_p .= ' Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.';
            
            $data['bootstrap']      = base_url() . 'bootstrap/';
            $data['bootstrap_css']  = $data['bootstrap'] . 'css/';
            $data['bootstrap_js']   = $data['bootstrap'] . 'js/';
            $data['custom_css']     = 'jumbotron-narrow';
            $data['brand']          = 'CodeIgniter BootStrap';
            $data['title']          = "Narrow Jumbotron Template for Bootstrap";            
            $data['h1']             = $data['title'];
            $data['lead_p']         = $lead_p;
        
            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/jumbotron-narrow/nav',$data);
            $this->load->view('bootstrap/jumbotron-narrow/jumbotron',$data);
            $this->load->view('bootstrap/jumbotron-narrow/marketing',$data);
            $this->load->view('bootstrap/jumbotron-narrow/footer',$data);
            $this->load->view('bootstrap/jumbotron-narrow/foot',$data);
            
        }

	public function cover()
	{
            
            $navbar = array(
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
            
            $inner_p = 'Cover is a one-page template for building simple and beautiful home pages.';
            $inner_p .= ' Download, edit the text, and add your own fullscreen background photo to make it your own.';
    
            $data['bootstrap']      = base_url() . 'bootstrap/';
            $data['bootstrap_css']  = $data['bootstrap'] . 'css/';
            $data['bootstrap_js']   = $data['bootstrap'] . 'js/';
            $data['custom_css']     = 'cover';
            $data['brand']          = 'CodeIgniter BootStrap';
            $data['title']          = "Cover Template for Bootstrap";
            $data['navbar']         = $navbar;            
            $data['h1']             = $data['title'];            
            $data['inner_p']        = $inner_p;
            $data['btn_href']       = '#';
            $data['btn_text']       = 'Learn more';
        
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
                    'item_class'    => 'item active',
                    'img_src'       => 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==',
                    'img_alt'       => 'First slide',
                    'h1'            => 'Example headline.',
                    'p'             => "Note: If you're viewing this page via a <code>file://</code> URL, the \"next\" and \"previous\" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.",
                    'href'          => '#',
                    'button'        => 'Sign up today',
                ),
                array(
                    'item_class'    => 'item',
                    'img_src'       => 'data:image/gif;base64,R0lGODlhAQABAIAAAGZmZgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==',
                    'img_alt'       => 'Second slide',
                    'h1'            => 'Another example headline.',
                    'p'             => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.',
                    'href'          => '#',
                    'button'        => 'Learn more',
                ),
                array(
                    'item_class'    => 'item',
                    'img_src'       => 'data:image/gif;base64,R0lGODlhAQABAIAAAFVVVQAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==',
                    'img_alt'       => 'Third slide',
                    'h1'            => 'One more for good measure.',
                    'p'             => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.',
                    'href'          => '#',
                    'button'        => 'Browse gallery',
                ),
                array(
                    'item_class'    => 'item',
                    'img_src'       => 'data:image/gif;base64,R0lGODlhAQABAIAAAGZmZgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==',
                    'img_alt'       => 'Fourth forth',
                    'h1'            => 'Because I can.',
                    'p'             => 'I added this to my array and then I added another LI to the OL which helps the navigation -- which is how we have 4 slides (and dots) instead of 3.',
                    'href'          => '#',
                    'button'        => 'So there',
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
            
            $data['bootstrap']      = base_url() . 'bootstrap/';
            $data['bootstrap_css']  = $data['bootstrap'] . 'css/';
            $data['bootstrap_js']   = $data['bootstrap'] . 'js/';
            $data['custom_css']     = 'carousel';
            $data['brand']          = 'CodeIgniter BootStrap';
            $data['title']          = "Carousel Template for Bootstrap";            
            $data['h1']             = $data['title'];
            
            $data['carousel']   = $carousel;
            $data['marketing']  = $marketing;
            $data['featurette'] = $featurette;
        
            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/carousel/navbar',$data);
            $this->load->view('bootstrap/carousel/carousel',$data);
            $this->load->view('bootstrap/carousel/marketing',$data);
            $this->load->view('bootstrap/carousel/featurette',$data);
            $this->load->view('bootstrap/carousel/footer',$data);
            $this->load->view('bootstrap/foot_docs',$data); 
        }
        
        // public function blog(){}
        
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
            
            
            $data['bootstrap']      = base_url() . 'bootstrap/';
            $data['bootstrap_css']  = $data['bootstrap'] . 'css/';
            $data['bootstrap_js']   = $data['bootstrap'] . 'js/';
            $data['custom_css']     = 'dashboard';
            $data['brand']          = 'CodeIgniter BootStrap';
            $data['title']          = "Dashboard Template for Bootstrap";            
            $data['h1']             = $data['title'];
            $data['h2']             = "Table Section";
            
            $data['dashboard']  = $dashboard;
            $data['thead']      = $thead;
        
            $this->load->view('bootstrap/head',$data);
            $this->load->view('bootstrap/dashboard/navbar',$data);
            $this->load->view('bootstrap/dashboard/nav_sidebar',$data);
            $this->load->view('bootstrap/dashboard/dashboard',$data);
            $this->load->view('bootstrap/dashboard/table',$data);
            $this->load->view('bootstrap/foot_docs',$data);
            
        }
    }
