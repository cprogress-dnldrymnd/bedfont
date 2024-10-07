<?php

function rts()
{
    return "<sup>&#174;</sup>";
}
add_shortcode('rts', 'rts');

function tms() {
    return "<sup>&#8482;</sup>";
}
add_shortcode('tms', 'tms');

function ptms() {
    return "<sup>+&#8482;</sup>";
}
add_shortcode('ptms', 'ptms');

function btms() {
    return "<sup>baby&#8482;</sup>";
}
add_shortcode('btms', 'btms');

function permalink($atts)
{
    extract(
        shortcode_atts(
            array(
                'id' => '',
            ),
            $atts
        )
    );
    return get_the_permalink($id);
}
add_shortcode('permalink', 'permalink');
function blogs($atts)
{
    extract(
        shortcode_atts(
            array(
                'source' => '',
                'numberposts' => 3,
            ),
            $atts
        )
    );
    $args['post_type'] = 'post';
    $args['numberposts'] = $numberposts;

    if ($source == 'most-recent') {
        $args['order'] = 'desc';
        $args['orderby'] = 'date';
    }

    $posts = get_posts($args);
    $html = "<div class='news-home pt-5 pb-3'>";
    $html .= "<div class='wp-block-query is-layout-flow wp-block-query-is-layout-flow'>";
    $html .= "<ul class='is-flex-container columns-3 wp-block-post-template is-layout-flow wp-block-post-template-is-layout-flow'>";

    foreach ($posts as $post) {
        $html .= _post_grid($post);
    }
    $html  .= "</ul>";
    $html  .= "<div>";
    $html  .= "<div>";

    return $html;
}

add_shortcode('blogs', 'blogs');

function _post_grid($post)
{
    $post_id = $post->ID;
    $post_title = $post->post_title;
    $post_date = get_the_date('', $post_id);
    $permalink = "[permalink id=$post_id]";
    $image = get_the_post_thumbnail($post_id, 'large');

    $html = "<li class='wp-block-post post-$post_id post type-post status-publish format-standard has-post-thumbnail '>
        <figure class='wp-block-post-featured-image'>
            <a href='$permalink' target='_self' rel='noopener'>
                $image
            </a>
        </figure>
    <div class='p-3'>
        <div class='has-text-align-center wp-block-post-date has-small-font-size mb-2'>$post_date</div>

        <h2 class='has-text-align-center wp-block-post-title has-medium-font-size mb-0'>$post_title</h2>
        </div>
    </li>";

    return do_shortcode($html);
}

function layouts($atts)
{
    extract(
        shortcode_atts(
            array(
                'id' => '',
            ),
            $atts
        )
    );

    return do_shortcode(modules($id));
}
add_shortcode('layouts', 'layouts');

function careers()
{
    $jobs = get_posts(array(
        'post_type' => 'careers',
        'numberposts' => -1,
    ));
    $html = "<div class='job-holder'>";
    foreach ($jobs as $key => $job) {
        $title = $job->post_title;
        $salary = get__post_meta_by_id($job->ID, 'salary');
        $job_spec = get__post_meta_by_id($job->ID, 'job_spec');
        $job_spec_url = wp_get_attachment_url($job_spec);
        $details = $job->post_content;
        $html .= "<div class='row job'>
    <div class='col-12 col-md-4 pe-lg-5'>
        <h2 class='text-left'>$title</h2>
        <h3>Salary: $salary</h3>
    </div>
    <div class='col-12 col-md-8 my-auto'>
        <div class='accordion' id='accordionJob'>
            <div class='accordion-item'>
                <h4 class='accordion-header' id='heading$key'>
                    <button class='accordion-button collapsed' type='button' data-bs-toggle='collapse'
                        data-bs-target='#collapse$key' aria-expanded='false' aria-controls='collapse$key'>
                        What does it take to be a $title at Bedfont Scientific Ltd?
                    </button>
                </h4>
                <div id='collapse$key' class='accordion-collapse collapse' aria-labelledby='heading$key'
                    data-bs-parent='#accordionJob'>
                    <div class='accordion-body'>
                        $details
                        <a href='$job_spec_url'
                            class='btn btn-job-spec' title='Click here for the full job spec'>View job spec</a>
                        <a href='https://share.hsforms.com/1h2T77eqwRBCI8JdCCvChSw3qxlb' class='btn btn-apply-now'
                            title='Click here to apply for a job at Bedfont Scientific Ltd.'>Apply now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }
    $html .= "</div>";

    return $html;
}

add_shortcode('careers', 'careers');


function contact_details()
{
    $html = "";
    $tel = get__theme_option('tel');
    $email = get__theme_option('email');
    $address = get__theme_option('address');

    if ($tel) {
        $html .= "<p class='mt-5'><strong>Tel: </strong>$tel</p>";
    }
    if ($email) {
        $html .= "<p class='mb-5'><strong>Email: </strong>$email</p>";
    }
    if ($address) {
        $html .= wpautop($address);
    }

    return $html;
}

add_shortcode('contact_details', 'contact_details');

function socials()
{

    $socials = get__theme_option('socials');

    if ($socials) {
        $html = "<div class='socials d-inline-block mt-5'>";
        foreach ($socials as $social) {
            $url = $social['url'];
            $icon = $social['icon'];
            $html .= "<a class='nav-social-icon' target='_blank' href='$url'>";
            $html .= "<i class='$icon' aria-hidden='true'></i>";
            $html .= "</a>";
        }

        $html .= "</div>";
        return $html;
    }
}
add_shortcode('socials', 'socials');
