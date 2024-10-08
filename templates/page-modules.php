<?php
/*

Template Name: --Modules

 */

get_header('');
echo modules(get_the_ID());
?>
<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
<script>
    const config = {
        type: 'carousel',
        perView: 3,
        autoplay: 5000,
        breakpoints: {
            1000: {
                perView: 2
            },
            600: {
                perView: 1
            }
        }
    };

    new Glide('.glide', config).mount()
</script>

<?php
get_footer('');
