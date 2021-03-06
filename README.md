# CodeIgniter BootStrap

This work in progress is a combination of the Bootstrap 3.2.0 *front-end*
responsive framework with the CodeIgniter 2.2.0 *back-end* PHP MVC framework.
Both versions were released in June 2014 and thus are the frameworks' latest
versions as I write this (July 2014).

Whereas this project has no databases, passwords or anything else which I might
withhold from GitHub, this could soon become that rare GitHub project of mine
which upon completion you may copy whole.

=====

#### My goals for this project:
- Recreate as many of the samples in Bootstrap's "Getting Started" page as I can
in the manner of CodeIgniter
- Create a "starter" package for future projects, combining CodeIgniter's PHP
MVC back end with Bootstrap's responsive front end

=====

#### What I am NOT doing with this project:
- Change any of Bootstrap's CSS (*.css) files
- Change any of Bootstrap's JavaScript (*.js) files
- Create any new *.css files
- Create any new *.js files
- Rename the IDs or classes of any HTML element.
- Create new IDs or classes for any HTML element.
- Use assets other than those of Bootstrap
- Connect to a database (array and objects are data sources for this project)
- Create any CodeIgniter data models (the "M" in MVC)
- Include login functionality
- Make any changes to CodeIgniter outside the *config*, *controllers* (the "C"
in MVC), *core* and *views* (the "V" in MVC) directories within the
*application* directory

The above tasks would fall under things which you might do if you build your
own project using these combined frameworks. (Were I to conduct a MeetUp about
this project, I would declare these tasks -- especially Models -- "beyond the
scope of this discussion".)

=====

#### What I have done to CodeIgniter to accommodate Bootstrap
In the root (ci_bootstrap) directory:
- Created this README file
- Created an *assets* directory, where .css files, .js files, image files and
the like are traditionally accessed in CodeIgniter. Global constants covering
the filepaths are established in CIBS_Controller (read further). These folders
would be empty at the start of a new CodeIgniter/Bootstrap project.
- Created a *bootstrap* directory, into which I copied Bootstrap's assets;
copied additional .css and .js files from Bootstrap (obtained via browser
"View Source" into the *css* and *js* subdirectories (respectively). Global
constants covering the filepaths are established in CIBS_Controller (read
further).

In *application*, which comes with CodeIgniter:

- In *config*:
  - In *autoload.php*, autoloaded 'url' and 'file' helpers across the project.
  - In *config.php*, established 'CIBS_' as the subclass prefix.
  - In *constants.php*, added constant variables special to this project, which
would be applied throughout the project. Constants which could not be defined
in this file would be defined in CIBS_Controller (read further).
  - In *routes.php*, changed the default controller from 'welcome' to
'templates'.

- In *controllers*:
  - Added several controller classes (including 'templates.php').

- In *core*:
  - Added CIBS_Controller subclass, which extends CI_Controller and which in
turn would be extended in other controllers. Among other things, global values
are established to be applied throughout the project, including constants which
could not be defined in *config/constants.php*.

- In *views*:
  - Created *bootstrap* directory, which contain Bootstrap's HTML fragments
(obtained via browser "View Source") readapted to include PHP logic (e.g. loops)
and PHP variables populated via controllers.

The *system* and *user_guide* directories which come with CodeIgniter were
untouched. The *user_guide* is non-essential to CodeIgniter functionality and
thus I withheld it from GitHub; I may restore it nonetheless depending on
popular demand.

=====

## *Compare:*

### "Using the Framework"

#### Starter Template
"Nothing but the basics: compiled CSS and JavaScript along with a container."

- Bootstrap: http://getbootstrap.com/examples/starter-template/
- ci_bootstrap: ...templates/starter

=====

#### Bootstrap Theme
"Load the optional Bootstrap theme for a visually enhanced experience."

- Bootstrap: http://getbootstrap.com/examples/theme/
- ci_bootstrap: ...templates/theme

=====

#### Grids
"Multiple examples of grid layouts with all four tiers, nesting, and more."

- Bootstrap: http://getbootstrap.com/examples/grid/
- ci_boostrap: ...templates/grids

=====

#### Jumbotron
"Build around the jumbotron with a navbar and some basic grid columns."

- Bootstrap: http://getbootstrap.com/examples/jumbotron/
- ci_boostrap: ...templates/jumbotron

=====

#### Narrow Jumbotron
"Build a more custom page by narrowing the default container and jumbotron."

- Bootstrap: http://getbootstrap.com/examples/jumbotron-narrow/
- ci_boostrap: ...templates/jumbotronnarrow

=====

### "Navbars in Action"

#### Navbar
"Super basic template that includes the navbar along with some additional
content."

- Bootstrap: http://getbootstrap.com/examples/navbar/
- ci_boostrap: ...templates/navbar

=====

#### Static top navbar
"Super basic template with a static top navbar along with some additional
content."

- Bootstrap: http://getbootstrap.com/examples/navbar-static-top/
- ci_boostrap: ...templates/navbar_static

=====

#### Fixed navbar
"Super basic template with a fixed top navbar along with some additional
content."

- Bootstrap: http://getbootstrap.com/examples/navbar-fixed-top/
- ci_boostrap: ...templates/navbar_fixed

=====

### "Custom Components"

#### Cover
"A one-page template for building simple and beautiful home pages."

- Bootstrap: http://getbootstrap.com/examples/cover/
- ci_boostrap: ...templates/cover

===== 

#### Carousel
"Customize the navbar and carousel, then add some new components."

- Bootstrap: http://getbootstrap.com/examples/carousel/
- ci_boostrap: ...templates/carousel

Per their sample: "If you're viewing this page via a file:// URL, the "next"
and "previous" Glyphicon buttons on the left and right might not load/display
properly due to web browser security rules."

=====

#### Blog
"Simple two-column blog layout with custom navigation, header, and type."

- Bootstrap: http://getbootstrap.com/examples/blog/
- ci_boostrap: ...templates/blog

=====

#### Dashboard
"Basic structure for a admin dashboard with fixed sidebar and navbar."

- Bootstrap: http://getbootstrap.com/examples/dashboard/
- ci_boostrap: ...templates/dashboard

=====

#### Sign-in page
"Custom form layout and design for a simple sign in form."

- Bootstrap: http://getbootstrap.com/examples/signin/
- ci_boostrap: ...templates/signin

=====

#### Justified nav
"Create a custom navbar with justified links. Heads up! Not too Safari
friendly."

- Bootstrap: http://getbootstrap.com/examples/justified-nav/
- ci_boostrap: ...templates/justified_nav

Per their sample: "As of v7.0.1, Safari exhibits a bug in which resizing your
browser horizontally causes rendering errors in the justified nav that are
cleared upon refreshing."

=====

#### Sticky footer
"Attach a footer to the bottom of the viewport when the content is shorter than
it."

- Bootstrap: http://getbootstrap.com/examples/sticky-footer/
- ci_boostrap: ...templates/sticky_footer

=====

#### Sticky footer with navbar
"Attach a footer to the bottom of the viewport with a fixed navbar at the top."

- Bootstrap: http://getbootstrap.com/examples/sticky-footer-navbar/
- ci_boostrap: ...templates/sticky_footer_navbar

=====

### "Experiments" -- yet to be built

#### Non-responsive Bootstrap
"Easily disable the responsiveness of Bootstrap per our docs.."

- Bootstrap: http://getbootstrap.com/examples/non-responsive/
- ci_boostrap: ...templates/nonresponsive/

===== 

#### Offcanvas
"Build a toggleable off-canvas navigation menu for use with Bootstrap."

- Bootstrap: http://getbootstrap.com/examples/carousel/
- ci_boostrap: ...templates/carousel

=====

## *Additional pages*

- The "home" page, based on the Cover template
- A "contents" page, based on the Starter template (replaces "Home" in top
navigation)
- An "about" page (suggested by top navigation), based on the Starter template
- A "contact" page (suggested by top navigation), based on the Starter template
- A "privacy" page (suggested by footer navigation), based on the Starter
template
- A "terms" page (suggested by footer navigation), based on the Starter template

Suggested additional pages:
- At least one data entry form for the blog

=====

## *TO DO*:

- Further apply D*R*Y ("Don't Repeat Yourself") concepts to
*application/views/bootstrap/* -- comb for areas of repetition; then revise
*application/controllers/* (especially *templates.php* but maybe others)
accordingly
- Explore other sections of getbootstrap.com; currently reviewing Components.

=====

## References:

- http://getbootstrap.com/getting-started/
- http://ellislab.com/codeigniter (FYI, comments in CodeIgniter's code should
have been updated from 'codeigniter.com' to reflect 'ellislab.com/codeigniter')
- http://www.php.net/

===== 