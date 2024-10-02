<?php
/*

Template Name: Find My Distributor 2 Page

*/

get_header('');
?>

<section class="p-0 position-relative">
    <div class="container-fluid overlay-img-holder">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/who-we-are.jpg" class="w-100" alt="Image of the front of Bedfont Scientific Ltd">
        <div class="overlay">
            <div class="col-12 col-md-8 mx-auto">
                <h1>Find My Distributor</h1>
                <p>Since 1976, we have specialized in the design and manufacture of exhaled breath and gas monitoring instruments. Our products are used in a variety of industries, including healthcare, pharmaceuticals, and diagnostics. Our expertise is reflected in the wide range of products that we offer - from portable to benchtop devices - which can be used to analyze the breath of patients.</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="col-12 find-my-distributor">
            <h2>Find My Distributor</h2>
            <p>Find your local distributor below by simply selecting the country you are based in and the product you would like more information about.</p>
            <select class="mt-4" id="preference">
                <option value="select">Country</option>
                <option value="argentina">Argentina</option>
                <option value="australia">Australia</option>
                <option value="austria">Austria</option>
            </select>
            <select id="style">
                <option value="select">Product</option>
                <option value="smokerlyzer">Smokerlyzer</option>
                <option value="nobreath">NObreath</option>
                <option value="gastrolyzer">Gastrolyzer</option>
                <option value="toxco">ToxCO</option>
                <option value="medigas">Medi-Gas</option>
            </select>
        </div>

        <?php

        $distributors = [
            'argentina' => [
                'gastrolyzer' => [
                    'name' => 'Gastrotex',
                    'phone' => '+54 (11) 4897-4781',
                    'email' => '',
                    'website' => 'http://www.gastrotex.com.ar/web/',
                    'logo' => 'gastrotext-logo.png',
                ],
            ],
            'australia' => [
                'nobreath' => [
                    'name' => 'Niche Medical',
                    'phone' => '+61 1300 136 855',
                    'email' => 'info@nichemedical.com.au',
                    'website' => 'http://www.nichemedical.com.au/',
                    'logo' => 'niche-medical-logo.png',
                ],
                'smokerlyzer' => [
                    'name' => 'Niche Medical',
                    'phone' => '+61 1300 136 855',
                    'email' => 'info@nichemedical.com.au',
                    'website' => 'http://www.nichemedical.com.au/',
                    'logo' => 'niche-medical-logo.png',
                ],
                'gastrolyzer' => [
                    'name' => 'Vitramed',
                    'phone' => '+61 2 8851 7702',
                    'email' => 'info@vitramed.com',
                    'website' => 'https://www.vitramed.com/',
                    'logo' => 'vitramed-logo.jpeg',
                ],
                'toxco' => [],
                'medigas' => [],
            ],
            'austria' => [
                'gastrolyzer' => [
                    'name' => 'Krainer Medtechnik GmbH',
                    'phone' => '+43 1 688 43 32',
                    'email' => 'info@krainer-medtechnik.at',
                    'website' => 'https://www.krainer-medtechnik.at/',
                    'logo' => 'krainer-medtechnik-logo.png',
                ],
                'smokerlyzer' => [],
                'nobreath' => [],
                'toxco' => [],
                'medigas' => [],
            ],
        ];
		
			foreach ($distributors as $country => $products) {
			foreach ($products as $product => $info) {
				$hasDistributor = !empty($info['name']) || !empty($info['phone']) || !empty($info['email']) || !empty($info['website']);
					?>

					<div class="result col-12 col-lg-6 mx-auto" data-preference="<?= $country ?>" data-style="<?= $product ?>">
						<?php if ($hasDistributor) : ?>
							<div class="distributor">
								<div class="row">
									<div class="col-8">
										<?php if (!empty($info['name'])) : ?>
											<h3><?= $info['name'] ?></h3>
										<?php endif; ?>
										<?php if (!empty($info['phone'])) : ?>
											<p><strong>Phone:</strong> <?= $info['phone'] ?></p>
										<?php endif; ?>
										<?php if (!empty($info['email'])) : ?>
											<p><strong>Email:</strong> <a href="mailto:<?= $info['email'] ?>"><?= $info['email'] ?></a></p>
										<?php endif; ?>
										<?php if (!empty($info['website'])) : ?>
											<p class="mb-0"><strong>Website:</strong> <a href="<?= $info['website'] ?>" target="_blank" title="Click to view the website">Visit here</a></p>
										<?php endif; ?>
									</div>
									<div class="col-4 mt-auto">
										<?php if (!empty($info['logo'])) : ?>
											<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/<?= $info['logo'] ?>" class="img-fluid" alt="<?= $info['name'] ?> Logo">
										<?php endif; ?>
									</div>
								</div>
							</div>
						<?php else : ?>
							<div class="result mt-50px">
								<p>Unfortunately, we could not find a distributor who distributes your chosen product within this area. Please fill in the form from the button below to be directed to our sales team.</p>
								<br/>
								<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
								<script>
									hbspt.forms.create({
										region: "na1",
										portalId: "6295439",
										formId: "ac8ed002-1fa3-4d7f-9f4c-810f40493a7f"
									});
								</script>
							</div>
						<?php endif; ?>
					</div>

				<?php }
			} ?>



    </div>
</section>

<script>
    $('#preference, #style').on('change', function () {
        var preference = $('#preference');
        var style = $('#style');

        if (preference.prop('selectedIndex') > 0 && style.prop('selectedIndex') > 0) {
            $('.result.active').removeClass('active');
            $('.result[data-preference="' + preference.val() + '"][data-style="' + style.val() + '"]').addClass('active');
        }
    });
</script>


<?php
get_footer('');
?>
