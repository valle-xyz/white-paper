White Paper by Seahouse
=======================

Basis for rapid theme development.
Clean Code.
Sass.

## Features
* Require Plugins
* Build in Advanced Custom Fields (to come early)
* Templates

## Wordpress Project Standards:

* Every Content is interchangable / don't hardcode content (e.g. Logo, default header image)
* Theme should be portable, installed with all dependencies (i.e. ACF)
* No Data should be loosable (Custom Post Types live in Plugin)

## To Do

* add default plugin for custom post types
* Add default code to register_customizer.php
* add language file
* make improvements of wp theme development (done, but there are several unimportant ones waiting)
* *recognized routine: create new template: template.php, sass, afc (sometimes)* -> maybe write script


## Routine to implement: Sass Variables, Color Scheme:
1. Get one Base Color
2. Get an accent color (i.e. complement http://paletton.com/)
3. add light and dark gray desaturate(darken(color, 90%), 90%) ??
4. add black and white
