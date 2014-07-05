This work in progress is a combination of the Bootstrap 3.2.0 front-end
responsive framework with the CodeIgniter 2.2.0 backend PHP MVC framework. Both
versions were released in June 2014 and thus are the frameworks' latest
versions as I write this (July 2014).

As this project has no databases, passwords or anything else I might withhold
from GitHub, this could soon become that rare GitHub project of mine which upon
completion could be copied whole.

*First,* my goals for this project:
- Recreate as many of the samples in Bootstrap's "Getting Started" page as I can
in the manner of CodeIgniter
- Create a "starter" package for future projects, combining CodeIgniter's PHP
MVC back end with Bootstrap's responsive front end

*Next,* it would be easy for me to say what I am NOT doing with this project:
- Changing any of Bootstrap's CSS (*.css) files
- Changing any of Bootstrap's JavaScript (*.js) files
- Creating any new *.css files
- Creating any new *.js files
- Creating any CodeIgniter data models (the "M" in MVC)
- Make any changes to CodeIgniter outside the config, controllers and views
directories within the application directory

=====

*Compare:*

"Using the Framework"

Starter Template

Bootstrap: http://getbootstrap.com/examples/starter-template/

ci_bootstrap: ...templates/starter
- Unlike most of the other templates, this template was reapplied to at least
one other page (controller method) in the project (Contents, About, Contact)

Bootstrap Theme

Bootstrap: http://getbootstrap.com/examples/theme/

ci_boostrap: Yet to be built
- no notes yet

Grids

Bootstrap: http://getbootstrap.com/examples/grid/

ci_boostrap: Yet to be built
- no notes yet

Jumbotron

Bootstrap: http://getbootstrap.com/examples/jumbotron/

ci_boostrap: ...templates/jumbotron
- no notes yet

Narrow Jumbotron

Bootstrap: http://getbootstrap.com/examples/jumbotron-narrow/

ci_boostrap: ...templates/jumbotronnarrow
- no notes yet

"Navbars in Action" -- yet to be built

"Custom Components"

Cover

Bootstrap: http://getbootstrap.com/examples/cover/

ci_boostrap: ...templates/cover
- Unlike most of the other templates, this template was reapplied to one other
page (controller method) in the project: templates/index. In CodeIgniter I
replaced "welcome" with "templates" as the project's default controller, thus
making "templates/index" the project's home page. 

Carousel

Bootstrap: http://getbootstrap.com/examples/carousel/

ci_boostrap: ...templates/carousel
- Per their sample: "If you're viewing this page via a file:// URL, the "next"
and "previous" Glyphicon buttons on the left and right might not load/display
properly due to web browser security rules."
- My array of data for the carousel includes a fourth item, unlike the original
sample with three items. With count($array) I was also able to add a fourth
"dot" of navigation.

Blog

Bootstrap: http://getbootstrap.com/examples/blog/

ci_boostrap: ...templates/blog
- no notes yet
- Bootstrap should have also included a blog entry form. I suppose that my
deductive reasoning may inspire one. TinyMCE [http://www.tinymce.com/] ought to
be a part of such a form, as the posts allow a variety of unformatted HTML
tags.

Dashboard

Bootstrap: http://getbootstrap.com/examples/dashboard/

ci_boostrap: ...templates/dashboard
- no notes yet

"Experiments" -- yet to be built

=====

*Additional pages*

- The "home" page, based on the Cover template
- A "contents" page, based on the Starter template
- An "about" page, based on the Starter template
- A "contact" page, based on the Starter template

Suggested additional pages:
- At least one data entry form for the blog

=====

*CodeIgniter accommodations for Bootstrap:*

- ci_bootstrap/bootstrap -- the "assets" directory from Bootstrap
- ci_bootstrap/application/views/bootstrap -- "deconstructed" bootstrap
templates, revised to include Controller variables

=====

References:
- http://getbootstrap.com/getting-started/ 