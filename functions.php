<?php
//Them chuc nang trong quan tri wordpress

define( 'THEME_URL', get_stylesheet_directory() );
define( 'CORE', THEME_URL . '/core' );

require_once( CORE . '/init.php' );

//Thiet lap chieu rong

if( ! isset( $content_width ))
{
    $content_width= 620;
}

if ( ! function_exists( 'truonghien_theme_setup' ) )
{
    function truonghien_theme_setup()
    {
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'post-formats',
                array(
                        'image',
                        'video',
                        'gallery',
                        'quote',
                        'link'
                    )
            );
    }
    add_action ( 'init', 'truonghien_theme_setup' );
}

if ( ! function_exists( 'truonghien_thumbnail' ) )
{
    function truonghien_thumbnail($size)
    {
        the_post_thumbnail($size);
    }
}

if( !function_exists( 'truonghien_pagination' ))
{
    function truonghien_pagination()
    {
        next_posts_link();
        previous_posts_link();
        
    }
}

