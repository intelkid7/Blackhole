<?php
get_header();
?>

<?php if(is_customize_preview()) : ?>
<div class="about-us-div">
    <h1>About Us</h1>
    <p>We are team blackhole</p>
</div>


<?php else : ?>
<article class="post-article">
    <?php
    if (have_posts() ) {
        while (have_posts()) {
            the_post();
            // get_template_part('template-parts/paragraph');
            the_content();
        }
    }
    ?>
</article>
<?php endif; ?>

<?php
get_footer();
?>