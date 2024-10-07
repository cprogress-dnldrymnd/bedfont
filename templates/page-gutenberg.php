<?php
/*

Template Name: --Gutenberg

 */

get_header('');
?>
<section class="subtle-bg">
    <img decoding="async" src="/wp-content/themes/bedfont/assets/img/subtle-bg.jpg" class="subtle-bg" alt="Image of subtle website background">
    <div class="container">
        <div class="row m-0">
            <div class="col-12">
                <?php the_content() ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer('');
