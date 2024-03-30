# Simple Blog Card Templates

This template is for the [WordPress](https://wordpress.org/) plugin [Simple Blog Card](https://wordpress.org/plugins/simple-blog-card/).
Anyone can pull request your own template. Once approved, it will be included in [Simple Blog Card](https://wordpress.org/plugins/simple-blog-card/), users will be able to select your template, and you will become a contributor to [Simple Blog Card](https://wordpress.org/plugins/simple-blog-card/).

# DEMO

The following video shows [Simple Blog Card](https://wordpress.org/plugins/simple-blog-card/) in action. This template is used for output display.

[Video](https://blog.riverforest-wp.info/wordpress/wp-content/uploads/20191113/simple-blog-card-1.mp4)

# Features
You can freely customize the display of your blog cards via templates.
Customization is similar to customizing a WordPress theme template.

# Requirement

* WordPress Version 5.0 or higher
* Simple Blog Card Version 2.10 or higher

# Naming rule

* (php/css) One file for each is required.
* The css file is optional.

Template Name:
English notation
e.g.) Grid Card template

File name:
simpleblogcard-template-(template slug name). (php/css)

# Usage

| Variable name | Type | Meaning |
| --- | --- | --- |
| $hash | String | A string of one meaning generated from "URL" and "year, month, date, hour, minute, second". To be added to the end of the class name. |
| $settings['img_pos'] | String | OGP image display position: right (right), left (left) |
| $settings['border_pos'] | String | Border position: right (right), left (left) |
| $settings['color_width'] | Int | Border width |
| $settings['color'] | String | Border color |
| $settings['t_line_height'] | Int | Line height of the title |
| $settings['d_line_height'] | Int | Description line height |
| $url | String | Link destination url |
| $settings['target_blank'] | bool | open in new tab |
| $img | bool | OGP image availability |
| $img_url | String | url of the OGP image |
| $img_width | Int | OGP image width |
| $img_height | Int | OGP image height |
| $host | String | url for external host |
| $title | String | Title |
| $description | String | Description |
| $settings['dessize'] | Int | Number of characters for description: integer type |


# Author

* [Katsushi Kawamori](https://profiles.wordpress.org/katsushi-kawamori/)
* [ishitaka](https://profiles.wordpress.org/ishitaka/)

# License

"Simple Blog Card Templates" is under [GPLv2 or later](https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html).

Enjoy making templates!

Thank you!
