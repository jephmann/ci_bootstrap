<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Description of pages
 *
 * @author Jeffrey
 */
    class Templates extends CI_Controller
    {
        /*
         * Globals
         */
        private $bootstrap;
        private $bootstrap_css;
        private $bootstrap_js;
        private $navbar;
        
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
            
        }
        
        public function index()
        {
            /*
             * Special for this demo, based on the cover template
             */
            
            $inner_p = 'Welcome to CodeIgniter Bootstrap';
            $inner_p .= '<br />A combination of two frameworks, back-end and front-end';
            
            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'cover';
            $data['brand']          = CB_BRAND;
            $data['title']          = "Home";            
            $data['h1']             = $data['title'];
            $data['navbar']         = $this->navbar;            
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
            
            $lead_p = 'Use this document as a way to quickly start any new project.';
            $lead_p .= '<br />';
            $lead_p .= 'All you get is this text and a mostly barebones HTML document.';
            
            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'starter-template';
            $data['brand']          = CB_BRAND;
            $data['title']          = "Starter Template for Bootstrap";            
            $data['h1']             = $data['title'];
            $data['navbar']         = $this->navbar; 
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
            
            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'jumbotron';
            $data['brand']          = CB_BRAND;
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
            
            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'jumbotron-narrow';
            $data['brand']          = CB_BRAND;
            $data['title']          = "Narrow Jumbotron Template for Bootstrap";            
            $data['h1']             = $data['title'];
            $data['navbar']         = $this->navbar; 
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
            
            $inner_p = 'Cover is a one-page template for building simple and beautiful home pages.';
            $inner_p .= ' Download, edit the text, and add your own fullscreen background photo to make it your own.';
            
            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'cover';
            $data['brand']          = CB_BRAND;
            $data['title']          = "Cover Template for Bootstrap";
            $data['navbar']         = $this->navbar; 
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
            
            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'carousel';
            $data['brand']          = CB_BRAND;
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
            
            
            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'blog';
            $data['brand']          = CB_BRAND;
            $data['title']          = "Blog Template for Bootstrap";            
            $data['h1']             = $data['title'];
            $data['navbar']         = $this->navbar; 
            $data['lead_p']         = $lead_p;
            $data['posts']          = $posts;
        
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
            
            
            $data['bootstrap']      = $this->bootstrap;
            $data['bootstrap_css']  = $this->bootstrap_css;
            $data['bootstrap_js']   = $this->bootstrap_js;
            $data['custom_css']     = 'dashboard';
            $data['brand']          = CB_BRAND;
            $data['title']          = "Dashboard Template for Bootstrap";            
            $data['h1']             = $data['title'];
            $data['navbar']         = $this->navbar; 
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
