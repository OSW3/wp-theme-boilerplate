<?php
/**
 * =====================================================================
 * WordPress Theme Boilerplate by OSW3
 * =====================================================================
 * 
 * More info at https://developer.wordpress.org/themes/template-files-section/post-template-files/#single-php
 * 
 * Template Name: Post single
 * Template Type: Post Template
 * Author: OSW3
 * Author URI: http://osw3.net
 * Version: 1.0.0
 */
if (!defined( 'ABSPATH' )) exit;

//======================================================================
?>
<?php get_header(); ?>
<div class="container">
    <div class="row">

        <div class="col-8">
        <?php while (have_posts()): the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <header class="article-header">

                    <br>
                </header>
                
            </article>

            <table class="table">
                <tr>
                    <th>Post Type</th>
                    <td><?php var_dump( get_post_type() ) ?></td>
                </tr>
                <tr>
                    <th>Is Sticky</th>
                    <td><?php var_dump( is_sticky() ) ?></td>
                </tr>
                <tr>
                    <th>Is Home</th>
                    <td><?php var_dump( is_home() ) ?></td>
                </tr>
                <tr>
                    <th>Is Single</th>
                    <td><?php var_dump( is_single() ) ?></td>
                </tr>
                <tr>
                    <th>Is Front Page</th>
                    <td><?php var_dump( is_front_page() ) ?></td>
                </tr>
                <tr>
                    <th>ID</th>
                    <td><?php var_dump( get_the_ID() ) ?></td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td><?php var_dump( get_the_title() ) ?></td>
                </tr>
                <tr>
                    <th>Title Attr</th>
                    <td><?php the_title_attribute() ?></td>
                </tr>
                <tr>
                    <th>Permalink</th>
                    <td><?php var_dump( get_permalink() ) ?></td>
                </tr>
                <tr>
                    <th>Excerpt</th>
                    <td><?php var_dump( get_the_excerpt() ) ?></td>
                </tr>
                <tr>
                    <th>Author</th>
                    <td><?php var_dump( get_the_author() ) ?></td>
                </tr>
                <tr>
                    <th>Author ID</th>
                    <td><?php var_dump( get_the_author_meta('ID') ) ?></td>
                </tr>
                <tr>
                    <th>Author Email</th>
                    <td><?php var_dump( get_the_author_meta('email') ) ?></td>
                </tr>
                <tr>
                    <th>Author Login</th>
                    <td><?php var_dump( get_the_author_meta('login') ) ?></td>
                </tr>
                <tr>
                    <th>Author Pass</th>
                    <td><?php var_dump( get_the_author_meta('pass') ) ?></td>
                </tr>
                <tr>
                    <th>Author Nicename</th>
                    <td><?php var_dump( get_the_author_meta('nicename') ) ?></td>
                </tr>
                <tr>
                    <th>Author URL</th>
                    <td><?php var_dump( get_author_posts_url(get_the_author_meta('ID')) ) ?></td>
                </tr>
                <tr>
                    <th>Tags (all)</th>
                    <td><?php var_dump( get_tags() ) ?></td>
                </tr>
                <tr>
                    <th>Tags</th>
                    <td><?php var_dump( get_tags( get_the_ID() ) ) ?></td>
                </tr>
                <tr>
                    <th>Categoies (all)</th>
                    <td><?php var_dump( get_categories() ) ?></td>
                </tr>
                <tr>
                    <th>Categoies</th>
                    <td><?php var_dump( get_the_category( get_the_ID() ) ) ?></td>
                </tr>
                <tr>
                    <th>Categoies</th>
                    <td>
                        <?php foreach( get_the_category(get_the_ID()) as $category): ?>
                            Name : <?php var_dump( $category->name ) ?><br>
                            Slug : <?php var_dump( $category->slug ) ?><br>
                            category_nicename : <?php var_dump( $category->category_nicename ) ?><br>
                            category_description : <?php var_dump( $category->category_description ) ?><br>
                            <br>
                            <?php var_dump( $category ) ?><hr>
                        <?php endforeach; ?>
                    </td>
                </tr>
                <tr>
                    <th>Time</th>
                    <td><?php var_dump( get_the_time() ) ?></td>
                </tr>
                <tr>
                    <th>Time</th>
                    <td><?php var_dump( get_the_time('U') ) ?></td>
                </tr>
                <tr>
                    <th>Time</th>
                    <td><?php var_dump( get_the_time('H:i:s') ) ?></td>
                </tr>
                <tr>
                    <th>Modified Time</th>
                    <td><?php var_dump( get_the_modified_time() ) ?></td>
                </tr>
                <tr>
                    <th>Modified Time</th>
                    <td><?php var_dump( get_the_modified_time('U') ) ?></td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td><?php var_dump( get_the_date() ) ?></td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td><?php var_dump( get_the_date( DATE_W3C ) ) ?></td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td><?php var_dump( get_the_date('Y-m-d') ) ?></td>
                </tr>
                <tr>
                    <th>Modified Date</th>
                    <td><?php var_dump( get_the_modified_date() ) ?></td>
                </tr>
                <tr>
                    <th>Modified Date</th>
                    <td><?php var_dump( get_the_modified_date( DATE_W3C ) ) ?></td>
                </tr>
                <tr>
                    <th>Comments Open</th>
                    <td><?php var_dump( comments_open() ) ?></td>
                </tr>
                <tr>
                    <th>Comments Number</th>
                    <td><?php var_dump( get_comments_number() ) ?></td>
                </tr>
                <tr>
                    <th>Comments template</th>
                    <td><?php var_dump( comments_template() ) ?></td>
                </tr>
                <tr>
                    <th>Navigation</th>
                    <td><?php var_dump( get_the_post_navigation() ) ?></td>
                </tr>
                <tr>
                    <th>Navigation</th>
                    <td><?php the_post_navigation() ?></td>
                </tr>
                <tr>
                    <th>Navigation</th>
                    <td>
                        <?php the_post_navigation(
                            array(
                                'prev_text' => '<span> <<-- %title</span>',
                                'next_text' => '<span>%title -->> </span>',
                            )
                        ); ?>
                    </td>
                </tr>
                <tr>
                    <th>Thumbnail</th>
                    <td><?php var_dump( get_the_post_thumbnail() ) ?></td>
                </tr>
                <tr>
                    <th>Thumbnail</th>
                    <td><?php var_dump( get_attached_media('image', get_the_ID()) ) ?></td>
                </tr>
                <tr>
                    <th>Content</th>
                    <td><?php var_dump( get_the_content() ) ?></td>
                </tr>
                <tr>
                    <th>Class</th>
                    <td><?php var_dump( get_post_class('Add-my-own-class') ) ?></td>
                </tr>
            </table>
        <?php endwhile; ?>
        </div>

        <?php get_sidebar() ?>
        
    </div>
</div>
<?php get_footer(); ?>
