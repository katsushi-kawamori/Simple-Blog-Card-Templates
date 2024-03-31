# Simple Blog Card Templates

This template is for the [WordPress](https://wordpress.org/) plugin [Simple Blog Card](https://wordpress.org/plugins/simple-blog-card/).

Anyone can pull request your own template.

Once approved, it will be included in [Simple Blog Card](https://wordpress.org/plugins/simple-blog-card/), users will be able to select your template, and you will become a contributor to [Simple Blog Card](https://wordpress.org/plugins/simple-blog-card/).

# DEMO

The following video shows [Simple Blog Card](https://wordpress.org/plugins/simple-blog-card/) in action. This template is used for output display.

https://github.com/katsushi-kawamori/Simple-Blog-Card-Templates/assets/165099245/8f75fdcf-f195-471b-9fbf-9c8bf9579ea4

# Features
* You can freely customize the display of your blog cards via templates.
* Customization is similar to customizing a WordPress theme template.
* You can use the code included here to create template and CSS files and apply them using the two filters below.
```
/** ==================================================
 * Filter for template file.
 *
 */
add_filter(
    'simple_blog_card_generate_template_file',
    function () {
        $wp_uploads = wp_upload_dir();
        $upload_dir = wp_normalize_path( $wp_uploads['basedir'] );
        $upload_dir = untrailingslashit( $upload_dir );
        return $upload_dir . '/tmp/simpleblogcard-template.php';
    },
    10,
    1
);

/** ==================================================
 * Filter for CSS file.
 *
 */
add_filter(
    'simple_blog_card_css_url',
    function () {
        $wp_uploads = wp_upload_dir();
        $upload_url = $wp_uploads['baseurl'];
        if ( is_ssl() ) {
            $upload_url = str_replace( 'http:', 'https:', $upload_url );
        }
        $upload_url = untrailingslashit( $upload_url );
        return $upload_url . '/tmp/simpleblogcard.css';
    },
    10,
    1
);
```

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

| Variable name | Type | Meaning | Filter |
| --- | --- | --- | --- |
| $hash | String | A string of one meaning generated from "URL" and "year, month, date, hour, minute, second". To be added to the end of the class name. |  |
| $img_pos | String | OGP image display position: right (right), left (left) | simple_blog_card_img_pos |
| $border_pos | String | Border position: right (right), left (left) | simple_blog_card_border_pos |
| $color_width | Int | Border width | simple_blog_card_color_width |
| $color | String | Border color | simple_blog_card_color |
| $t_line_height | Int | Line height of the title | simple_blog_card_t_line_height |
| $d_line_height | Int | Description line height | simple_blog_card_d_line_height |
| $url | String | Link destination url |  |
| $target_blank | bool | open in new tab | simple_blog_card_target_blank |
| $img | bool | OGP image availability |  |
| $img_url | String | url of the OGP image |  |
| $img_width | Int | OGP image width | simple_blog_card_img_width |
| $img_height | Int | OGP image height | simple_blog_card_img_height |
| $host | String | url for external host |  |
| $title | String | Title |  |
| $description | String | Description |  |
| $dessize | Int | Number of characters for description: integer type | simple_blog_card_dessize |

# Author

* [Katsushi Kawamori](https://profiles.wordpress.org/katsushi-kawamori/)
* [ishitaka](https://profiles.wordpress.org/ishitaka/)

# License

"Simple Blog Card Templates" is under [GPLv2 or later](https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html).

Enjoy making templates!

Thank you!
