// $Id: README.txt,v 1.2.2.8 2009/12/17 19:45:50 hswong3i Exp $

ABOUT INTERACTIVE MEDIA
----------------------

This is a re-implementation of the Interactive Media theme by Luka
Cvrk. This is a tableless, multi-column, fluid width layout. Parts
of the design are ported from Internet Services and Contented7 theme.

Official Interactive Media project page:
  http://www.solucija.com/templates/demo/Interactive_Media/

Drupal Interactive Media project page:
  http://drupal.org/project/interactive_media/
  http://pantarei-design.com/projects/interactive_media/

Sponsored by:
  http://pantarei-design.com/


HOWTO CUSTOMIZE THIS THEME?
----------------------

For theme customization usually you will need to change the style.css.
By the way this traditional method is not too flexible.

This theme provide a hook called as custom.css. The custom.css will always
override default style.css setting, and will not be covered during version
upgrade. Benefit of using this hook including:

  1. Your customization will NOT get mixed with original theme style.
  2. Your customization will NOT be override during theme upgrade.

This theme also provide some example for customization within
custom.example.css, divided into section by section. You can copy-and-paste
them to your custom.css and feel free to change it.


HOW THE MISSION HACK FUNCTION?
----------------------

By default, mission statement is protected by filter_xss_admin() so no
PHP script is allowed. On the other hand, all tags that can be used inside
an HTML body is allowed.

This theme provide a fancy hack so PHP script will able to execute if
mission statement starting with "<?php", or else will preform as default
style.

One example usage is combine with adsense module so only display a
skyscraper (120x600) at top page; another example is combine with banner
module so you will have a benner rotation as mission statement; or even
just execute a simple PHP code snippet as welcome message when user login.


ABOUT RTL SUPPORT (>=6.x)
----------------------

This theme is RTL supported, and fully tested with Acid2 compatible
browsers, e.g. FireFox3, Opera9.2 and Safari3. However, other browser
such as FireFox2 and Internet Explorer 6/7 may looks buggy.

As the implementation is validate with XHTML and CSS2 coding standard,
I am not going to provide browser-specific hack, for both LTR and RTL.

For more information about Acid2:
  http://en.wikipedia.org/wiki/Acid2

To test your browser with Acid2:
  http://www.webstandards.org/files/acid2/test.html


LIST OF MAINTAINERS
----------------------

PROJECT OWNER
M: Edison Wong <hswong3i@gmail.com>
S: maintained
W: http://edin.no-ip.com/
