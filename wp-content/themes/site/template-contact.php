<?php
/*
Template Name: Contact Us
*/
?>
<?php get_header(); ?>
<main class="page-wrapper">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <div class="row">
            <div class="col-md-6">
                this is the image
            </div>
            <div class="col-md-6">
                <?php get_template_part('includes/section', 'content'); ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
