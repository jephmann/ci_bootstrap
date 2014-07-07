# CodeIgniter BootStrap

This work in progress is a combination of the Bootstrap 3.2.0 front-end
responsive framework with the CodeIgniter 2.2.0 backend PHP MVC framework. Both
versions were released in June 2014 and thus are the frameworks' latest
versions as I write this (July 2014).

Whereas this project has no databases, passwords or anything else which I might
withhold from GitHub, this could soon become that rare GitHub project of mine
which upon completion you may copy whole.

#### My goals for this project:
- Recreate as many of the samples in Bootstrap's "Getting Started" page as I can
in the manner of CodeIgniter
- Create a "starter" package for future projects, combining CodeIgniter's PHP
MVC back end with Bootstrap's responsive front end

#### What I am NOT doing with this project:
- Change any of Bootstrap's CSS (*.css) files
- Change any of Bootstrap's JavaScript (*.js) files
- Create any new *.css files
- Create any new *.js files
- Use assets other than those of Bootstrap
- Connect to a database (array and objects are data sources for this project)
- Create any CodeIgniter data models (the "M" in MVC)
- Include login functionality
- Make any changes to CodeIgniter outside the *config*, *controllers* and
*views* directories within the *application* directory

=====

## *Compare:*

### "Using the Framework"

#### Starter Template
"Nothing but the basics: compiled CSS and JavaScript along with a container."

Bootstrap: http://getbootstrap.com/examples/starter-template/

ci_bootstrap: ...templates/starter
- Unlike most of the other templates, this template was reapplied to at least
one other page (controller method) in the project (Contents, About, Contact)

=====

#### Bootstrap Theme

Bootstrap: http://getbootstrap.com/examples/theme/

ci_boostrap: Yet to be built
- no notes yet

=====

#### Grids
"Multiple examples of grid layouts with all four tiers, nesting, and more."

Bootstrap: http://getbootstrap.com/examples/grid/

ci_boostrap: ...templates/grids
- no notes yet

=====

#### Jumbotron
"Build around the jumbotron with a navbar and some basic grid columns."

Bootstrap: http://getbootstrap.com/examples/jumbotron/

ci_boostrap: ...templates/jumbotron
- no notes yet

=====

#### Narrow Jumbotron
"Build a more custom page by narrowing the default container and jumbotron."

Bootstrap: http://getbootstrap.com/examples/jumbotron-narrow/

ci_boostrap: ...templates/jumbotronnarrow
- no notes yet

=====

### "Navbars in Action"
- Whereas each of the other templates gets its own subdirectory under
"...views/bootstrap/", these navbar templates share files in the
"...views/bootstrap/navbar" subdirectory.

#### Navbar
"Super basic template that includes the navbar along with some additional content."

Bootstrap: http://getbootstrap.com/examples/navbar/

ci_boostrap: ...templates/navbar
- no notes yet

=====

#### Static top navbar
"Super basic template with a static top navbar along with some additional content."

Bootstrap: http://getbootstrap.com/examples/navbar-static-top/

ci_boostrap: ...templates/navbar_static
- no notes yet

=====

#### Fixed navbar
"Super basic template with a fixed top navbar along with some additional content."

Bootstrap: http://getbootstrap.com/examples/navbar-fixed-top/

ci_boostrap: ...templates/navbar_fixed
- no notes yet

=====

### "Custom Components"

#### Cover
"A one-page template for building simple and beautiful home pages."

Bootstrap: http://getbootstrap.com/examples/cover/

ci_boostrap: ...templates/cover
- Unlike most of the other templates, this template was reapplied to one other
page (controller method) in the project: templates/index. In CodeIgniter I
replaced "welcome" with "templates" as the project's default controller, thus
making "templates/index" the project's home page.

===== 

#### Carousel
"Customize the navbar and carousel, then add some new components."

Bootstrap: http://getbootstrap.com/examples/carousel/

ci_boostrap: ...templates/carousel
- Per their sample: "If you're viewing this page via a file:// URL, the "next"
and "previous" Glyphicon buttons on the left and right might not load/display
properly due to web browser security rules."
- My array of data for the carousel includes a fourth item, unlike the original
sample with three items. With count($array) I was also able to add a fourth
"dot" of navigation.

=====

#### Blog
"Simple two-column blog layout with custom navigation, header, and type."

Bootstrap: http://getbootstrap.com/examples/blog/

ci_boostrap: ...templates/blog
- no notes yet
- Bootstrap should have also included a blog entry form. I suppose that my
deductive reasoning may inspire one. TinyMCE [http://www.tinymce.com/] ought to
be a part of such a form, as the posts allow a variety of unformatted HTML
tags.

=====

#### Dashboard
"Basic structure for a admin dashboard with fixed sidebar and navbar."

Bootstrap: http://getbootstrap.com/examples/dashboard/

ci_boostrap: ...templates/dashboard
- no notes yet

=====

#### Sign-in page
"Custom form layout and design for a simple sign in form."

Bootstrap: http://getbootstrap.com/examples/signin/

ci_boostrap: ...templates/signin
- Added a provision for the form's action.

=====

#### Justified nav
"Create a custom navbar with justified links. Heads up! Not too Safari
friendly."

Bootstrap: http://getbootstrap.com/examples/justified-nav/

ci_boostrap: ...templates/justified_nav
- no notes yet

=====

### "Experiments" -- yet to be built

=====

## *Additional pages*

- The "home" page, based on the Cover template
- A "contents" page, based on the Starter template
- An "about" page, based on the Starter template
- A "contact" page, based on the Starter template

Suggested additional pages:
- At least one data entry form for the blog

=====

## *CodeIgniter accommodations for Bootstrap:*

- ci_bootstrap/bootstrap -- the "assets" directory from Bootstrap
- ci_bootstrap/application/views/bootstrap -- "deconstructed" bootstrap
templates, revised to include Controller variables

=====

## References:

- http://getbootstrap.com/getting-started/
- http://ellislab.com/codeigniter
- http://www.php.net/ 