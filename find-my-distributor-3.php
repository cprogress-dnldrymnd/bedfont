<?php
/*

Template Name: Find My Distributor 3 Page

 */

get_header('');
?>

	<section class="p-0 position-relative">
		<div class="container-fluid overlay-img-holder">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/who-we-are.jpg" class="w-100" alt="Image of front of Bedfont Scientific Ltd">
			<div class="overlay">
				<div class="col-12 col-md-8 mx-auto">
					<h1>Find My Distributor</h1>
					<p>Since 1976, we have specialized in the design and manufacture of exhaled breath and gas monitoring instruments. Our products are used in a variety of industries including healthcare, pharmaceuticals and diagnostics. Our expertise is reflected in the wide range of products that we offer - from portable to benchtop devices - which can be used to analyse the breath of patients.</p>
				</div>
			</div>
		</div>
		<!--<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="30px" viewBox="0 0 1280 140" preserveAspectRatio="none" style="position: absolute;bottom: 0;"><g fill="#fff"><path d="M1280 86c-19.9-17.21-40.08-39.69-79.89-39.69-57.49 0-56.93 46.59-115 46.59-53.61 0-59.76-39.62-115.6-39.62C923.7 53.27 924.26 87 853.89 87c-89.35 0-78.74-87-188.2-87C554 0 543.95 121.8 423.32 121.8c-100.52 0-117.84-54.88-191.56-54.88-77.06 0-100 48.57-151.75 48.57-40 0-60-12.21-80-29.51v54H1280z"></path></g></svg>-->
	</section>
	<section>
		<div class="container">
			<div class="col-12 find-my-distributor">
				<h2>Find My Distributor</h2>
				<p>Find your local distributor below by simply selecting the country you are based and the product you would like more information about.</p>
				<select class="mt-4" id="preference">
					<option value="select">Country</option>
					<option value="argentina">Argentina</option>
					<option value="australia">Australia</option>
					<option value="austria">Austria</option>
					<option value="bahrain">Bahrain</option>
					<option value="bangladesh">Bangladesh</option>
					<option value="belgium">Belgium</option>
					<option value="bolivia">Bolivia</option>
					<option value="chile">Chile</option>
					<option value="china">China</option>
					<option value="colombia">Colombia</option>
					<option value="costa-rica">Costa Rica</option>
					<option value="czech-republic">Czech Republic</option>
					<option value="denmark">Denmark</option>
					<option value="dominican-republic">Dominican Republic</option>
					<option value="ecuador">Ecuador</option>
					<option value="egypt">Egypt</option>
					<option value="finland">Finland</option>
					<option value="france">France</option>
					<option value="germany">Germany</option>
					<option value="guatemala">Guatemala</option>
					<option value="hong-kong">Hong Kong</option>
					<option value="hungary">Hungary</option>
					<option value="india">India</option>
					<option value="indonesia">Indonesia</option>
					<option value="ireland">Ireland</option>
					<option value="israel">Israel</option>
					<option value="italy">Italy</option>
					<option value="japan">Japan</option>
					<option value="jordan">Jordan</option>
					<option value="kuwait">Kuwait</option>
					<option value="lebanon">Lebanon</option>
					<option value="malaysia">Malaysia</option>
					<option value="mexico">Mexico</option>
					<option value="morocco">Morocco</option>
					<option value="netherlands">Netherlands</option>
					<option value="new-zealand">New Zealand</option>
					<option value="norway">Norway</option>
					<option value="pakistan">Pakistan</option>
					<option value="panama">Panama</option>
					<option value="paraguay">Paraguay</option>
					<option value="peru">Peru</option>
					<option value="philippines">Philippines</option>
					<option value="poland">Poland</option>
					<option value="portugal">Portugal</option>
					<option value="qatar">Qatar</option>
					<option value="russia">Russia</option>
					<option value="saudi-arabia">Saudi Arabia</option>
					<option value="singapore">Singapore</option>
					<option value="slovakia">Slovakia</option>
					<option value="south-africa">South Africa</option>
					<option value="south-korea">South Korea</option>
					<option value="spain">Spain</option>
					<option value="sri-lanka">Sri Lanka</option>
					<option value="sweden">Sweden</option>
					<option value="switzerland">Switzerland</option>
					<option value="taiwan">Taiwan</option>
					<option value="thailand">Thailand</option>
					<option value="turkey">Turkey</option>
					<option value="united-arab-emirates">United Arab Emirates</option>
					<option value="uk">United Kingdom</option>
					<option value="us">United States</option>
					<option value="uruguay">Uruguay</option>
					<option value="venezuela">Venezuela</option>
					<option value="vietnam">Vietnam</option>
				</select>
				<select id="style">
					<option value="select">Product</option>
					<option value="smokerlyzer">Smokerlyzer</option>
					<option value="nobreath">NObreath</option>
					<option value="gastrolyzer">Gastrolyzer</option>
					<option value="toxco">ToxCO</option>
					<option value="medigas">Medi-Gas</option>
					<!-- Add other products here -->
				</select>
			</div>

			<!-- Generic "No Distributor" Section -->
			<div class="result mt-50px" id="noDistributorSection">
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
			
			<!------------------------
			Argentina
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="argentina" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8">
							<h3>Gastrotex</h3>
							<p><strong>Phone:</strong> +54 (11) 4897-4781</p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.gastrotex.com.ar/web/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/gastrotext-logo.png" class="img-fluid" alt="Gastrotex Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Australia
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="australia" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8">
							<h3>Niche Medical</h3>
							<p><strong>Phone:</strong> +61 1300 136 855</p>
							<p><strong>Email:</strong> <a href="mailto:info@nichemedical.com.au">info@nichemedical.com.au</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.nichemedical.com.au/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/niche-medical-logo.png" class="img-fluid" alt="Niche Medical Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="australia" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8">
							<h3>Niche Medical</h3>
							<p><strong>Phone:</strong> +61 1300 136 855</p>
							<p><strong>Email:</strong> <a href="mailto:info@nichemedical.com.au">info@nichemedical.com.au</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.nichemedical.com.au/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/niche-medical-logo.png" class="img-fluid" alt="Niche Medical Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="australia" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8">
							<h3>Vitramed</h3>
							<p><strong>Phone:</strong> +61 2 8851 7702</p>
							<p><strong>Email:</strong> <a href="mailto:info@vitramed.com">info@vitramed.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.vitramed.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/vitramed-logo.jpeg" class="img-fluid" alt="Vitramed Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Austria
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="austria" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8">
							<h3>Krainer Medtechnik GmbH</h3>
							<p><strong>Phone:</strong> +43 1 688 43 32</p>
							<p><strong>Email:</strong> <a href="mailto:info@krainer-medtechnik.at">info@krainer-medtechnik.at</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.krainer-medtechnik.at/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/krainer-medtechnik-logo.png" class="img-fluid" alt="Krainer Medtechnik GmbH Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Bahrain
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="bahrain" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8">
							<h3>Turquoise Medical</h3>
							<p><strong>Phone:</strong> +973 1362 2999</p>
							<p><strong>Email:</strong> <a href="mailto:info@turquoise.cc">info@turquoise.cc</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://turquoise.cc/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/turquoise-logo.png" class="img-fluid" alt="Turquoise Medical Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Bangladesh
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="bangladesh" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8">
							<h3>Natasa Healthcare</h3>
							<p><strong>Phone:</strong> +880 2-41030671</p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/natasa-healthcare-logo.png" class="img-fluid" alt="Natasa Healthcare Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="bangladesh" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8">
							<h3>Natasa Healthcare</h3>
							<p><strong>Phone:</strong> +880 2-41030671</p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/natasa-healthcare-logo.png" class="img-fluid" alt="Natasa Healthcare Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="bangladesh" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8">
							<h3>Natasa Healthcare</h3>
							<p><strong>Phone:</strong> +880 2-41030671</p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/natasa-healthcare-logo.png" class="img-fluid" alt="Natasa Healthcare Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Belgium
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="belgium" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Laborie</h3>
							<p><strong>Phone:</strong> +1 800 522 6743</p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.laborie.com/contact-us/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/laborie-logo.svg" class="img-fluid" alt="Laborie Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="belgium" data-style="nobreath">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>ECCE Medical</h3>
							<p><strong>Phone:</strong> +32 497 594591</p>
							<p><strong>Email:</strong> <a href="mailto:info@eccemedical.com">info@eccemedical.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.eccemedical.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/ecce-medical-logo.png" class="img-fluid" alt="ECCE Medical Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="belgium" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Herli Medical</h3>
							<p><strong>Phone:</strong> +32 2 588 5667</p>
							<p><strong>Email:</strong> <a href="mailto:info@herlimedical.com">info@herlimedical.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.herlimedical.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/herli-medical-logo.png" class="img-fluid" alt="Herli Medical Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="belgium" data-style="toxco">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Herli Medical</h3>
							<p><strong>Phone:</strong> +32 2 588 5667</p>
							<p><strong>Email:</strong> <a href="mailto:info@herlimedical.com">info@herlimedical.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.herlimedical.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/herli-medical-logo.png" class="img-fluid" alt="Herli Medical Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Bolivia
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="bolivia" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>SENEX</h3>
							<p><strong>Phone:</strong> +591 77570174</p>
							<p><strong>Email:</strong> <a href="mailto:info@senex-gm.com">info@senex-gm.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://senex-gm.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/senex-logo.png" class="img-fluid" alt="SENEX Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Chile
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="chile" data-style="nobreath">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Cardiomedics</h3>
							<p><strong>Phone:</strong> +56223134872</p>
							<p><strong>Email:</strong> <a href="mailto:contacto@cardiomedics.cl">contacto@cardiomedics.cl</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.cardiomedics.cl/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/cardiomedics-logo.png" class="img-fluid" alt="Cardiomedics Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="chile" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Equipos Medicos Zepeda</h3>
							<p><strong>Phone:</strong> (56-2) 2341 6606</p>
							<p><strong>Email:</strong> <a href="mailto:info@zepeda.cl">info@zepeda.cl</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://zepeda.cl/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/zepeda-logo.jpeg" class="img-fluid" alt="Equipos Medicos Zepeda Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			China
			-------------------------->

			<!------------------------
			Colombia
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="colombia" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Selig de Colombia</h3>
							<p><strong>Phone:</strong> +57 14902000</p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.seligdecolombia.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/selig-logo.jpeg" class="img-fluid" alt="Selig de colombia Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="colombia" data-style="nobreath">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Medicah</h3>
							<p><strong>Phone:</strong> Coming soon</p>
							<p><strong>Email:</strong> <a href="#"> Coming soon</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="#" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<!--<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/senex-logo.png" class="img-fluid" alt="SENEX Logo">-->
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Costa Rica
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="costa-rica" data-style="nobreath">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Simtec</h3>
							<p><strong>Phone:</strong> +506 2235 2728</p>
							<p><strong>Email:</strong> <a href="mailto:ventas@simteccr.com"> ventas@simteccr.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://simteccr.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/simtec-logo.png" class="img-fluid" alt="Simtec Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="costa-rica" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Simtec</h3>
							<p><strong>Phone:</strong> +506 2235 2728</p>
							<p><strong>Email:</strong> <a href="mailto:ventas@simteccr.com"> ventas@simteccr.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://simteccr.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/simtec-logo.png" class="img-fluid" alt="Simtec Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Czech Republic
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="czech-republic" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Intertec</h3>
							<p><strong>Phone:</strong> +421 905 441 876</p>
							<p><strong>Email:</strong> <a href="mailto:anutterova@intertec.sk"> anutterova@intertec.sk</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.intertec.sk/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/intertec-logo.png" class="img-fluid" alt="Intertec Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="czech-republic" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Intertec</h3>
							<p><strong>Phone:</strong> +421 905 441 876</p>
							<p><strong>Email:</strong> <a href="mailto:anutterova@intertec.sk"> anutterova@intertec.sk</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.intertec.sk/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/intertec-logo.png" class="img-fluid" alt="Intertec Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="czech-republic" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Intertec</h3>
							<p><strong>Phone:</strong> +421 905 441 876</p>
							<p><strong>Email:</strong> <a href="mailto:anutterova@intertec.sk"> anutterova@intertec.sk</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.intertec.sk/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/intertec-logo.png" class="img-fluid" alt="Intertec Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Denmark
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="denmark" data-style="nobreath">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Nowus Healthcare A/S</h3>
							<p><strong>Phone:</strong> +45 70274422</p>
							<p><strong>Email:</strong> <a href="mailto:info@nowushealthcare.com"> info@nowushealthcare.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.nowushealthcare.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/nowus-healthcare-logo.png" class="img-fluid" alt="Nowus Healthcare Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Dominican Republic
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="dominican-republic" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Clinimed SRL</h3>
							<p><strong>Phone:</strong> +1 809-385-0949</p>
							<p><strong>Email:</strong> <a href="mailto:info@clinimed.com.do"> info@clinimed.com.do</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://clinimed.com.do/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/clinimed-logo.png" class="img-fluid" alt="Clinimed SRL Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Ecuador
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="ecuador" data-style="nobreath">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Medpharcum CIA Ltda</h3>
							<p><strong>Phone:</strong> +593 96 779 1667</p>
							<p><strong>Email:</strong> <a href="mailto:medpharcum@outlook.com"> medpharcum@outlook.com</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/medpharcum-logo.png" class="img-fluid" alt="Medpharcum CIA Ltda Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="ecuador" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Respiralab</h3>
							<p><strong>Phone:</strong> +5935114555</p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.respiralab.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/respiralab-logo.png" class="img-fluid" alt="Respiralab Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Egypt
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="egypt" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>International Technology Office</h3>
							<p><strong>Phone:</strong> +20 1019901513</p>
							<p><strong>Email:</strong> <a href="mailto:itech7966@gmail.com"> itech7966@gmail.com</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/itec-logo.jpeg" class="img-fluid" alt="International Technology Office Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="egypt" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8">
							<h3>Teqnia</h3>
							<p><strong>Phone:</strong> (+2) 02 26 217 104</p>
							<p><strong>Email:</strong> <a href="mailto:Info@teqnia-ted.com"> info@teqnia-ted.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.teqnia-ted.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/teqnia-logo.png" class="img-fluid" alt="Teqnia Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Finland
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="finland" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Pamark Group</h3>
							<p><strong>Phone:</strong> +358 29 3716002</p>
							<p><strong>Email:</strong> <a href="mailto:asiakaspalvelu@pamark.fi"> asiakaspalvelu@pamark.fi</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.pamark.fi/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/pamark-group-logo.jpg" class="img-fluid" alt="Pamark Group Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			France
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="france" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Laborie</h3>
							<p><strong>Phone:</strong> +1 800 522 6743</p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.laborie.com/contact-us/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/laborie-logo.svg" class="img-fluid" alt="Laborie Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="france" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Respur</h3>
							<p><strong>Phone:</strong> +33 1 30 73 45 32</p>
							<p><strong>Email:</strong> <a href="mailto:contact@respur.com"> contact@respur.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.respur.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/respur-logo.png" class="img-fluid" alt="Respur Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Germany
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="germany" data-style="nobreath">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>AKY Medical Plus</h3>
							<p><strong>Phone:</strong> +49 2333 974444</p>
							<p><strong>Email:</strong> <a href="mailto:info@akymedicalplus.de"> info@akymedicalplus.de</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://akymedicalplus.de/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/aky-medical-logo.jpeg" class="img-fluid" alt="AKY Medical Plus Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="germany" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>AKY Medical Plus</h3>
							<p><strong>Phone:</strong> +49 2333 974444</p>
							<p><strong>Email:</strong> <a href="mailto:info@akymedicalplus.de"> info@akymedicalplus.de</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://akymedicalplus.de/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/aky-medical-logo.jpeg" class="img-fluid" alt="AKY Medical Plus Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="germany" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Standard Instruments GmbH</h3>
							<p><strong>Phone:</strong> +49 721 551986</p>
							<p><strong>Email:</strong> <a href="mailto:info@stdi.de"> info@stdi.de</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.stdi.de/de/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/standard-instruments-logo.png" class="img-fluid" alt="Standard Instruments GmbH Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Guatemala
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="guatemala" data-style="nobreath">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Oxi-Rent</h3>
							<p><strong>Phone:</strong> Coming Soon</p>
							<p><strong>Email:</strong> <a href="mailto:"> Coming Soon</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="#" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/xxxxx-logo.png" class="img-fluid" alt="Oxi-Rent Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Hong Kong
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="hong-kong" data-style="nobreath">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Alpha MedTech Ltd</h3>
							<p><strong>Phone:</strong> +852 2116 8392</p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://alphamedtech.hk/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/alpha-medical-logo.png" class="img-fluid" alt="Alpha MedTech Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="hong-kong" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Alpha MedTech Ltd</h3>
							<p><strong>Phone:</strong> +852 2116 8392</p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://alphamedtech.hk/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/alpha-medical-logo.png" class="img-fluid" alt="Alpha MedTech Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Hungary
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="hungary" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Elektro Oxigen</h3>
							<p><strong>Phone:</strong> +36 1 205 3075</p>
							<p><strong>Email:</strong> <a href="mailto:info@eo.hu"> info@eo.hu</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.eo.hu/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/elektro-oxigen-logo.png" class="img-fluid" alt="Elektro Oxigen Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="hungary" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Elektro Oxigen</h3>
							<p><strong>Phone:</strong> +36 1 205 3075</p>
							<p><strong>Email:</strong> <a href="mailto:info@eo.hu"> info@eo.hu</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.eo.hu/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/elektro-oxigen-logo.png" class="img-fluid" alt="Elektro Oxigen Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			India
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="india" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Ausasia Lifesciences</h3>
							<p><strong>Phone:</strong> +91 98187 66488</p>
							<p><strong>Email:</strong> <a href="mailto:info@ausasia.in"> info@ausasia.in</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.ausasia.in/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/ausasia-logo.png" class="img-fluid" alt="Ausasia Lifesciences Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="india" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Global Medicare</h3>
							<p><strong>Phone:</strong> +91 87004 97185</p>
							<p><strong>Email:</strong> <a href="mailto:info@globalmedicare.co.in"> info@globalmedicare.co.in</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://globalmedicare.co.in/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/global-medicare-logo.webp" class="img-fluid" alt="Global Medicare Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="india" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Mokshit Corporation</h3>
							<p><strong>Phone:</strong> +91 911 177 7231</p>
							<p><strong>Email:</strong> <a href="mailto:info@mokshitcorporation.com"> info@mokshitcorporation.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://mokshitcorporation.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/mokshit-corporation-logo.png" class="img-fluid" alt="Mokshit Corporation Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="india" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Rusan</h3>
							<p><strong>Phone:</strong> +91 (0)22 4238 3000</p>
							<p><strong>Email:</strong> <a href="mailto:enquiry@rusanpharma.com"> enquiry@rusanpharma.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.rusanpharma.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/rusan-logo.png" class="img-fluid" alt="Rusan Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Indonesia
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="indonesia" data-style="nobreath">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>PT Mitra ASA Patrama</h3>
							<p><strong>Phone:</strong> +62 818-729-467</p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://mitraasa.co.id/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/map-logo.png" class="img-fluid" alt="PT Mitra ASA Patrama Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="indonesia" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>PT Mitra ASA Patrama</h3>
							<p><strong>Phone:</strong> +62 818-729-467</p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://mitraasa.co.id/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/map-logo.png" class="img-fluid" alt="PT Mitra ASA Patrama Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Ireland
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="ireland" data-style="nobreath">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Scott Medical</h3>
							<p><strong>Phone:</strong> +44 28 9266 5482</p>
							<p><strong>Email:</strong> <a href="mailto:info@scottmedical.com"> info@scottmedical.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.scottmedical.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/scott-medical-logo.webp" class="img-fluid" alt="Scott Medical Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="ireland" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Scott Medical</h3>
							<p><strong>Phone:</strong> +44 28 9266 5482</p>
							<p><strong>Email:</strong> <a href="mailto:info@scottmedical.com"> info@scottmedical.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.scottmedical.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/scott-medical-logo.webp" class="img-fluid" alt="Scott Medical Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="ireland" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Scott Medical</h3>
							<p><strong>Phone:</strong> +44 28 9266 5482</p>
							<p><strong>Email:</strong> <a href="mailto:info@scottmedical.com"> info@scottmedical.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.scottmedical.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/scott-medical-logo.webp" class="img-fluid" alt="Scott Medical Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Israel
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="israel" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Emproco</h3>
							<p><strong>Phone:</strong> +972 8-671-8187</p>
							<p><strong>Email:</strong> <a href="mailto:info@emproco.com"> info@emproco.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://emproco.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/emproco-logo.png" class="img-fluid" alt="Emproco Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Italy
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="italy" data-style="nobreath">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Medimar srl</h3>
							<p><strong>Phone:</strong> +39 02 5741 0545</p>
							<p><strong>Email:</strong> <a href="mailto:info@medimaritalia.it"> info@medimaritalia.it</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.medimaritalia.it/wp/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/medimar-logo.svg" class="img-fluid" alt="Medimar Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="italy" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>NEOS</h3>
							<p><strong>Phone:</strong> +39 02 2106 6416</p>
							<p><strong>Email:</strong> <a href="mailto:info@neosmedica.com"> info@neosmedica.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://neosmedica.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/neos-medica-logo.png" class="img-fluid" alt="NEOS Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Japan
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="japan" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Harada Corporation</h3>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.haradacorp.co.jp/en/contact/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/harada-logo.png" class="img-fluid" alt="Harada Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="japan" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Harada Corporation</h3>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.haradacorp.co.jp/en/contact/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/harada-logo.png" class="img-fluid" alt="Harada Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Jordan
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="jordan" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Sadaf Medical</h3>
							<p><strong>Phone:</strong> +962 6 5333678</p>
							<p><strong>Email:</strong> <a href="mailto:info@sadafmedical.com"> info@sadafmedical.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://sadafmedical.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/sadaf-logo.png" class="img-fluid" alt="Sadaf Medical Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Kuwait
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="kuwait" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Al Essa</h3>
							<p><strong>Phone:</strong> +965 2220 6555</p>
							<p><strong>Email:</strong> <a href="mailto:Alessa@AlessaKuwait.com"> Alessa@AlessaKuwait.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.alessakuwait.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/al-essa-logo.png" class="img-fluid" alt="Al Essa Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="kuwait" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Medvision For Medical Services Company</h3>
							<p><strong>Phone:</strong> +965 2202 2228</p>
							<p><strong>Email:</strong> <a href="mailto:info@medvision-kw.com"> info@medvision-kw.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.medvision-kw.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/medvision-logo.png" class="img-fluid" alt="Medvision For Medical Services Company Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Lebanon
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="lebanon" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>AlphaPro</h3>
							<p><strong>Phone:</strong> +961 1 893 266</p>
							<p><strong>Email:</strong> <a href="mailto:bernard.akel@alphaprome.com"> bernard.akel@alphaprome.com</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/alphapro-logo.jpeg" class="img-fluid" alt="AlphaPro Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Malaysia
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="malaysia" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Taraf Synergy</h3>
							<p><strong>Phone:</strong> +60 3-5638 2080</p>
							<p><strong>Email:</strong> <a href="mailto:enquiry@tarafsynergy.com"> enquiry@tarafsynergy.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://tarafsynergy.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/taraf-synergy-logo.gif" class="img-fluid" alt="Taraf Synergy Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="malaysia" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Taraf Synergy</h3>
							<p><strong>Phone:</strong> +60 3-5638 2080</p>
							<p><strong>Email:</strong> <a href="mailto:enquiry@tarafsynergy.com"> enquiry@tarafsynergy.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://tarafsynergy.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/taraf-synergy-logo.gif" class="img-fluid" alt="Taraf Synergy Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Mexico
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="mexico" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Aerosol</h3>
							<p><strong>Phone:</strong> +52 800 237 6765</p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://aerosolms.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/aerosol-logo.avif" class="img-fluid" alt="Aerosol Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="mexico" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Ingenieria Y Electrosistemas</h3>
							<p><strong>Phone:</strong> +52 55 1997 5165</p>
							<p><strong>Email:</strong> <a href="mailto:sales@iescardio.com"> sales@iescardio.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://iescardio.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/ingenieria-logo.png" class="img-fluid" alt="Ingenieria Y Electrosistemas Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Morocco
			-------------------------->

			<!------------------------
			Netherlands
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="netherlands" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Laborie</h3>
							<p><strong>Phone:</strong> +1 800 522 6743</p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.laborie.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/laborie-logo.svg" class="img-fluid" alt="Laborie Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="netherlands" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Sine Fuma</h3>
							<p><strong>Phone:</strong> +31 76 889 5195</p>
							<p><strong>Email:</strong> <a href="mailto:info@rookvrijookjij.nl"> info@rookvrijookjij.nl</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://sinefuma.com/nl/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/sine-fuma-logo.png" class="img-fluid" alt="Sine Fuma Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			New Zealand
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="new-zealand" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Apex Medical</h3>
							<p><strong>Phone:</strong> +64 800 469 633</p>
							<p><strong>Email:</strong> <a href="mailto:info@apexmedical.co.nz"> info@apexmedical.co.nz</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://apexmedical.co.nz/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/apex-medical-logo.svg" class="img-fluid" alt="Apex Medical Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Norway
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="norway" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Nowus Healthcare A/S</h3>
							<p><strong>Phone:</strong> +46 709 787 877</p>
							<p><strong>Email:</strong> <a href="mailto:info@nowushealthcare.com"> info@nowushealthcare.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.nowushealthcare.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/nowus-healthcare-logo.png" class="img-fluid" alt="Nowus Healthcare Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Pakistan
			-------------------------->

			<!------------------------
			Panama
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="panama" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Horacio Icaza</h3>
							<p><strong>Phone:</strong> +507 207-6300</p>
							<p><strong>Email:</strong> <a href="mailto:Info@casamedic.com.pa"> Info@casamedic.com.pa</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="lacasadelmedico.com.pa" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/horacio-icaza-logo.png" class="img-fluid" alt="Horacio Icaza Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="panama" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Horacio Icaza</h3>
							<p><strong>Phone:</strong> +507 207-6300</p>
							<p><strong>Email:</strong> <a href="mailto:Info@casamedic.com.pa"> Info@casamedic.com.pa</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="lacasadelmedico.com.pa" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/horacio-icaza-logo.png" class="img-fluid" alt="Horacio Icaza Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Paraguay
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="paraguay" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Survycon</h3>
							<p><strong>Phone:</strong> +595 21 229 075</p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/survycon-logo.jpeg" class="img-fluid" alt="Survycon Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Peru
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="peru" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Tecnomedis</h3>
							<p><strong>Phone:</strong> +51 1 4492219</p>
							<p><strong>Email:</strong> <a href="mailto:info@tecnomedis.com.pe"> info@tecnomedis.com.pe</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://tecnomedis.com.pe/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/tecnomedis-logo.png" class="img-fluid" alt="Tecnomedis Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="peru" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Intramedica</h3>
							<p><strong>Phone:</strong> +51 6281320</p>
							<p><strong>Email:</strong> <a href="mailto:intrame@intramedica.com.pe"> intrame@intramedica.com.pe</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.intramedica.com.pe/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/intramedica-logo.png" class="img-fluid" alt="Intramedica Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Philippines
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="peru" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Innomed Systems</h3>
							<p><strong>Phone:</strong> +63 2 8725 7084</p>
							<p><strong>Email:</strong> <a href="mailto:sales@innomedsystems.com"> sales@innomedsystems.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.innomedsystems.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/innomed-logo.png" class="img-fluid" alt="Innomed Systems Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Poland
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="poland" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>SynecPol</h3>
							<p><strong>Phone:</strong> +48 12 423 40 47</p>
							<p><strong>Email:</strong> <a href="mailto:synecpol@synecpol.pl"> synecpol@synecpol.pl</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://synecpol.pl/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/synecpol-logo.png" class="img-fluid" alt="SynecPol Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="poland" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>SynecPol</h3>
							<p><strong>Phone:</strong> +48 12 423 40 47</p>
							<p><strong>Email:</strong> <a href="mailto:synecpol@synecpol.pl"> synecpol@synecpol.pl</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://synecpol.pl/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/synecpol-logo.png" class="img-fluid" alt="SynecPol Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="poland" data-style="toxco">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>SynecPol</h3>
							<p><strong>Phone:</strong> +48 12 423 40 47</p>
							<p><strong>Email:</strong> <a href="mailto:synecpol@synecpol.pl"> synecpol@synecpol.pl</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://synecpol.pl/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/synecpol-logo.png" class="img-fluid" alt="SynecPol Logo">
						</div>
					</div>
				</div>
			</div>

			<!------------------------
			Portugal
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="portugal" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>IberLab</h3>
							<p><strong>Phone:</strong> +351 22 208 7876</p>
							<p><strong>Email:</strong> <a href="mailto:iberlab@iberlab.pt"> iberlab@iberlab.pt</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.iberlab.pt/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/iberlab-logo.jpeg" class="img-fluid" alt="IberLab Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="portugal" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>IberLab</h3>
							<p><strong>Phone:</strong> +351 22 208 7876</p>
							<p><strong>Email:</strong> <a href="mailto:iberlab@iberlab.pt"> iberlab@iberlab.pt</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.iberlab.pt/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/iberlab-logo.jpeg" class="img-fluid" alt="IberLab Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="portugal" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>IberLab</h3>
							<p><strong>Phone:</strong> +351 22 208 7876</p>
							<p><strong>Email:</strong> <a href="mailto:iberlab@iberlab.pt"> iberlab@iberlab.pt</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.iberlab.pt/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/iberlab-logo.jpeg" class="img-fluid" alt="IberLab Logo">
						</div>
					</div>
				</div>
			</div>
			
			
			<!------------------------
			Qatar
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="qatar" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Al Tafaol</h3>
							<p><strong>Phone:</strong> +974 4465 2773</p>
							<p><strong>Email:</strong> <a href="mailto:info@altafaol.net"> info@altafaol.net</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://altafaol.net/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/al-tafaol-logo.png" class="img-fluid" alt="Al Tafaol Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="qatar" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Al Tafaol</h3>
							<p><strong>Phone:</strong> +974 4465 2773</p>
							<p><strong>Email:</strong> <a href="mailto:info@altafaol.net"> info@altafaol.net</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://altafaol.net/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/al-tafaol-logo.png" class="img-fluid" alt="Al Tafaol Logo">
						</div>
					</div>
				</div>
			</div>
			
			<!------------------------
			Russia
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="russia" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>InfoMed</h3>
							<p><strong>Phone:</strong> +7 (495) 787-09-72</p>
							<p><strong>Email:</strong> <a href="mailto:info@infomed-expo.ru"> info@infomed-expo.ru</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.infomed-expo.ru/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/infomed-logo.png" class="img-fluid" alt="InfoMed Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="russia" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>InfoMed</h3>
							<p><strong>Phone:</strong> +7 (495) 787-09-72</p>
							<p><strong>Email:</strong> <a href="mailto:info@infomed-expo.ru"> info@infomed-expo.ru</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.infomed-expo.ru/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/infomed-logo.png" class="img-fluid" alt="InfoMed Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="russia" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>InfoMed</h3>
							<p><strong>Phone:</strong> +7 (495) 787-09-72</p>
							<p><strong>Email:</strong> <a href="mailto:info@infomed-expo.ru"> info@infomed-expo.ru</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.infomed-expo.ru/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/infomed-logo.png" class="img-fluid" alt="InfoMed Logo">
						</div>
					</div>
				</div>
			</div>
			
			<!------------------------
			Saudi Arabia
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="saudi-arabia" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Tebaba Medical Est</h3>
							<p><strong>Email:</strong> <a href="mailto:info@tebaba.me"> info@tebaba.me</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.tebaba.me/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/tebaba-medical-logo.png" class="img-fluid" alt="Tebaba Medical Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="saudi-arabia" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Tebaba Medical Est</h3>
							<p><strong>Email:</strong> <a href="mailto:info@tebaba.me"> info@tebaba.me</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.tebaba.me/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/tebaba-medical-logo.png" class="img-fluid" alt="Tebaba Medical Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="saudi-arabia" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Tebaba Medical Est</h3>
							<p><strong>Email:</strong> <a href="mailto:info@tebaba.me"> info@tebaba.me</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.tebaba.me/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/tebaba-medical-logo.png" class="img-fluid" alt="Tebaba Medical Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="saudi-arabia" data-style="toxco">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Tebaba Medical Est</h3>
							<p><strong>Email:</strong> <a href="mailto:info@tebaba.me"> info@tebaba.me</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.tebaba.me/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/tebaba-medical-logo.png" class="img-fluid" alt="Tebaba Medical Logo">
						</div>
					</div>
				</div>
			</div>
			
			<!------------------------
			Singapore
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="singapore" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Mediwell</h3>
							<p><strong>Phone:</strong> +65 6336 9923</p>
							<p><strong>Email:</strong> <a href="mailto:mediwell.info@medtron.com.sg"> mediwell.info@medtron.com.sg</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.mediwellenterprise.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/mediwell-logo.png" class="img-fluid" alt="Mediwell Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="singapore" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Mediwell</h3>
							<p><strong>Phone:</strong> +65 6336 9923</p>
							<p><strong>Email:</strong> <a href="mailto:mediwell.info@medtron.com.sg"> mediwell.info@medtron.com.sg</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.mediwellenterprise.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/mediwell-logo.png" class="img-fluid" alt="Mediwell Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="singapore" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Mediwell</h3>
							<p><strong>Phone:</strong> +65 6336 9923</p>
							<p><strong>Email:</strong> <a href="mailto:mediwell.info@medtron.com.sg"> mediwell.info@medtron.com.sg</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.mediwellenterprise.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/mediwell-logo.png" class="img-fluid" alt="Mediwell Logo">
						</div>
					</div>
				</div>
			</div>
			
			<!------------------------
			Slovakia
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="slovakia" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Intertec</h3>
							<p><strong>Phone:</strong> +421 905 441 876</p>
							<p><strong>Email:</strong> <a href="mailto:anutterova@intertec.sk"> anutterova@intertec.sk</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.intertec.sk/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/intertec-logo.png" class="img-fluid" alt="Intertec Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="slovakia" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Intertec</h3>
							<p><strong>Phone:</strong> +421 905 441 876</p>
							<p><strong>Email:</strong> <a href="mailto:anutterova@intertec.sk"> anutterova@intertec.sk</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.intertec.sk/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/intertec-logo.png" class="img-fluid" alt="Intertec Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="slovakia" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Intertec</h3>
							<p><strong>Phone:</strong> +421 905 441 876</p>
							<p><strong>Email:</strong> <a href="mailto:anutterova@intertec.sk"> anutterova@intertec.sk</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.intertec.sk/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/intertec-logo.png" class="img-fluid" alt="Intertec Logo">
						</div>
					</div>
				</div>
			</div>
			
			<!------------------------
			South Africa
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="south-africa" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Centmark</h3>
							<p><strong>Phone:</strong> +27 12 940 1954</p>
							<p><strong>Email:</strong> <a href="mailto:info@centmark.co.za"> info@centmark.co.za</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://centmark.co.za/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/centmark-logo.png" class="img-fluid" alt="Centmark Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="south-africa" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Centmark</h3>
							<p><strong>Phone:</strong> +27 12 940 1954</p>
							<p><strong>Email:</strong> <a href="mailto:info@centmark.co.za"> info@centmark.co.za</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://centmark.co.za/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/centmark-logo.png" class="img-fluid" alt="Centmark Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="south-africa" data-style="toxco">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Centmark</h3>
							<p><strong>Phone:</strong> +27 12 940 1954</p>
							<p><strong>Email:</strong> <a href="mailto:info@centmark.co.za"> info@centmark.co.za</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://centmark.co.za/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/centmark-logo.png" class="img-fluid" alt="Centmark Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="south-africa" data-style="toxco">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>AMS Haden</h3>
							<p><strong>Phone:</strong> +27 11 475 2064</p>
							<p><strong>Email:</strong> <a href="mailto:haden@mweb.co.za"> haden@mweb.co.za</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://amshaden.co.za/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/ams-haden-logo.png" class="img-fluid" alt="AMS Haden Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="south-africa" data-style="toxco">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Schaunburg</h3>
							<p><strong>Phone:</strong> +27 (010) 590 1571</p>
							<p><strong>Email:</strong> <a href="mailto:sales@schauenburg.co.za"> sales@schauenburg.co.za</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://schauenburg.co.za/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/schaunburg-logo.png" class="img-fluid" alt="Schaunburg Logo">
						</div>
					</div>
				</div>
			</div>
			
			<!------------------------
			South Korea
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="south-korea" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Daepoong Diagnosctics Inc,.</h3>
							<p><strong>Phone:</strong> +82 2 413 5010</p>
							<p><strong>Email:</strong> <a href="mailto:dpd5010k@gmail.com"> dpd5010k@gmail.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://daepoongdiagnostics.co.kr/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/daepoong-logo.png" class="img-fluid" alt="Daepoong Diagnosctics Inc,. Logo">
						</div>
					</div>
				</div>
			</div>
			
			<!------------------------
			Spain
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="spain" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Ribas Medicina</h3>
							<p><strong>Phone:</strong> +34 934 24 17 20</p>
							<p><strong>Email:</strong> <a href="mailto:info@ribasmedicina.com"> info@ribasmedicina.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.ribasmedicina.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/ribas-logo.jpeg" class="img-fluid" alt="Ribas Medicina Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="spain" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Ribas Medicina</h3>
							<p><strong>Phone:</strong> +34 934 24 17 20</p>
							<p><strong>Email:</strong> <a href="mailto:info@ribasmedicina.com"> info@ribasmedicina.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.ribasmedicina.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/ribas-logo.jpeg" class="img-fluid" alt="Ribas Medicina Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="spain" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Ribas Medicina</h3>
							<p><strong>Phone:</strong> +34 934 24 17 20</p>
							<p><strong>Email:</strong> <a href="mailto:info@ribasmedicina.com"> info@ribasmedicina.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.ribasmedicina.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/ribas-logo.jpeg" class="img-fluid" alt="Ribas Medicina Logo">
						</div>
					</div>
				</div>
			</div>
			
			<!------------------------
			Sri Lanka
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="sri-lanka" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Technomedics International</h3>
							<p><strong>Phone:</strong> +94 112 877 555</p>
							<p><strong>Email:</strong> <a href="mailto:technomedic@technomediclk.com"> technomedic@technomediclk.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.technomediclk.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/technomedics-logo.png" class="img-fluid" alt="Technomedics International Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="sri-lanka" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Technomedics International</h3>
							<p><strong>Phone:</strong> +94 112 877 555</p>
							<p><strong>Email:</strong> <a href="mailto:technomedic@technomediclk.com"> technomedic@technomediclk.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.technomediclk.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/technomedics-logo.png" class="img-fluid" alt="Technomedics International Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="sri-lanka" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Technomedics International</h3>
							<p><strong>Phone:</strong> +94 112 877 555</p>
							<p><strong>Email:</strong> <a href="mailto:technomedic@technomediclk.com"> technomedic@technomediclk.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.technomediclk.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/technomedics-logo.png" class="img-fluid" alt="Technomedics International Logo">
						</div>
					</div>
				</div>
			</div>
			
			<!------------------------
			Sweden
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="sweden" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Nowus Healthcare A/S</h3>
							<p><strong>Phone:</strong> +46 709 787 877</p>
							<p><strong>Email:</strong> <a href="mailto:info@nowushealthcare.com"> info@nowushealthcare.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.nowushealthcare.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/nowus-healthcare-logo.png" class="img-fluid" alt="Nowus Healthcare Logo">
						</div>
					</div>
				</div>
			</div>
			
			<!------------------------
			Switzerland
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="switzerland" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Medi-Ian Ag</h3>
							<p><strong>Phone:</strong> +41 41 748 52 00</p>
							<p><strong>Email:</strong> <a href="mailto:info@medi-lan.ch"> info@medi-lan.ch</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.medi-lan.ch/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/Medi-Ian-logo.png" class="img-fluid" alt="Medi-Ian Ag Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="switzerland" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Medi-Ian Ag</h3>
							<p><strong>Phone:</strong> +41 41 748 52 00</p>
							<p><strong>Email:</strong> <a href="mailto:info@medi-lan.ch"> info@medi-lan.ch</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.medi-lan.ch/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/Medi-Ian-logo.png" class="img-fluid" alt="Medi-Ian Ag Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="switzerland" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Medi-Ian Ag</h3>
							<p><strong>Phone:</strong> +41 41 748 52 00</p>
							<p><strong>Email:</strong> <a href="mailto:info@medi-lan.ch"> info@medi-lan.ch</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.medi-lan.ch/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/Medi-Ian-logo.png" class="img-fluid" alt="Medi-Ian Ag Logo">
						</div>
					</div>
				</div>
			</div>
			
			<!------------------------
			Taiwan
			-------------------------->
			
			<!------------------------
			Thailand
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="thailand" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>La Bella Group</h3>
							<p><strong>Phone:</strong> +66 85 055 2187</p>
							<p><strong>Email:</strong> <a href="mailto:labellagroup@hotmail.com"> labellagroup@hotmail.com</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/la-bella-group-logo.jpeg" class="img-fluid" alt="La Bella Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="thailand" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>La Bella Group</h3>
							<p><strong>Phone:</strong> +66 85 055 2187</p>
							<p><strong>Email:</strong> <a href="mailto:labellagroup@hotmail.com"> labellagroup@hotmail.com</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/la-bella-group-logo.jpeg" class="img-fluid" alt="La Bella Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="thailand" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>La Bella Group</h3>
							<p><strong>Phone:</strong> +66 85 055 2187</p>
							<p><strong>Email:</strong> <a href="mailto:labellagroup@hotmail.com"> labellagroup@hotmail.com</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/la-bella-group-logo.jpeg" class="img-fluid" alt="La Bella Logo">
						</div>
					</div>
				</div>
			</div>
			
			<!------------------------
			Turkey
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="turkey" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Teknikel</h3>
							<p><strong>Phone:</strong> +90 212 254 74 00</p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.teknikel.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/teknikel-logo.png" class="img-fluid" alt="teknikel Logo">
						</div>
					</div>
				</div>
			</div>
			
			<!------------------------
			United Arab Emirates
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="united-arab-emirates" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Al Hayat</h3>
							<p><strong>Phone:</strong> +971 6 559 2481</p>
							<p><strong>Email:</strong> <a href="mailto:alhayat@eim.ae">alhayat@eim.ae</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.alhayatuae.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/alhayat-logo.png" class="img-fluid" alt="Al Hayat Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="united-arab-emirates" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Al Zahrawi Medical Services</h3>
							<p><strong>Phone:</strong> +971 4 262 2728</p>
							<p><strong>Email:</strong> <a href="mailto:info@zahrawigroup.com">info@zahrawigroup.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.zahrawigroup.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/al-zahrawi-logo.png" class="img-fluid" alt="Al Zahrawi Medical Services Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="united-arab-emirates" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8 my-auto">
							<h3>Max Value</h3>
							<p><strong>Phone:</strong> +971 4 329 1372</p>
							<p><strong>Email:</strong> <a href="mailto:info@maxvaluemedical.com">info@maxvaluemedical.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://maxvaluemedical.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/max-value-logo.png" class="img-fluid" alt="Max Value Logo">
						</div>
					</div>
				</div>
			</div>
			
			<!------------------------
			United Kingdom
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="uk" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8">
							<h3>Intermedical</h3>
							<p><strong>Phone:</strong> 01732 522444</p>
							<p><strong>Email:</strong> <a href="mailto:sales@intermedical.co.uk">sales@intermedical.co.uk</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.intermedical.co.uk/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/intermedical-logo.png" class="img-fluid" alt="Intermedical Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="uk" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8">
							<h3>Intermedical</h3>
							<p><strong>Phone:</strong> 01732 522444</p>
							<p><strong>Email:</strong> <a href="mailto:sales@intermedical.co.uk">sales@intermedical.co.uk</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.intermedical.co.uk/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/intermedical-logo.png" class="img-fluid" alt="Intermedical Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="uk" data-style="medigas">
				<div class="distributor">
					<div class="row">
						<div class="col-8">
							<h3>MEC Medical Ltd</h3>
							<p><strong>Phone:</strong> 01992 661111</p>
							<p><strong>Email:</strong> <a href="mailto:sales@mecmedical.com">sales@mecmedical.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.mecmedical.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/mec-medical-logo.png" class="img-fluid" alt="Mec Medical Ltd Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="uk" data-style="toxco">
				<div class="distributor">
					<div class="row">
						<div class="col-8">
							<h3>ProACT Medical Ltd</h3>
							<p><strong>Phone:</strong> 01536 461981</p>
							<p><strong>Email:</strong> <a href="mailto:sales@proactmedical.co.uk">sales@proactmedical.co.uk</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="http://www.proactmedical.co.uk/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/proact-logo.png" class="img-fluid" alt="ProACT Medical Ltd Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="uk" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>Laborie</h3>
							<p><strong>Phone:</strong> +1 800 522 6743</p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.laborie.com/contact-us/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/laborie-logo.svg" class="img-fluid" alt="Laborie Logo">
						</div>
					</div>
				</div>
			</div>
			
			<!------------------------
			United States
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="us" data-style="nobreath">
				<div class="distributor">
					<div class="row">
						<div class="col-8">
							<h3>coVita</h3>
							<p><strong>Phone:</strong> +1 800-707-5751</p>
							<p><strong>Email:</strong> <a href="mailto:info@covita.net">info@covita.net</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.covita.net/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/covita-logo.png" class="img-fluid" alt="coVita Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="us" data-style="smokerlyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8">
							<h3>coVita</h3>
							<p><strong>Phone:</strong> +1 800-707-5751</p>
							<p><strong>Email:</strong> <a href="mailto:info@covita.net">info@covita.net</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.covita.net/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/covita-logo.png" class="img-fluid" alt="coVita Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="us" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8">
							<h3>coVita</h3>
							<p><strong>Phone:</strong> +1 800-707-5751</p>
							<p><strong>Email:</strong> <a href="mailto:info@covita.net">info@covita.net</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.covita.net/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/covita-logo.png" class="img-fluid" alt="coVita Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="us" data-style="toxco">
				<div class="distributor">
					<div class="row">
						<div class="col-8">
							<h3>coVita</h3>
							<p><strong>Phone:</strong> +1 800-707-5751</p>
							<p><strong>Email:</strong> <a href="mailto:info@covita.net">info@covita.net</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.covita.net/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/covita-logo.png" class="img-fluid" alt="coVita Logo">
						</div>
					</div>
				</div>
			</div>
			<div class="result col-12 col-lg-6 mx-auto" data-preference="us" data-style="nobreath">
				<div class="distributor">
					<div class="row"> 
						<div class="col-8">
							<h3>PulmOne</h3>
							<p><strong>Phone:</strong> +1-888-635-9798</p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://www.pulm-one.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/pulm-one-logo.webp" class="img-fluid" alt="PulmOne Logo">
						</div>
					</div>
				</div>
			</div>
			
			<!------------------------
			Uruguay
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="uruguay" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8">
							<h3>Qualmed</h3>
							<p><strong>Phone:</strong> +598 2716 5385</p>
							<p><strong>Email:</strong> <a href="mailto:ventas.qualmed@netgate.com.uy">ventas.qualmed@netgate.com.uy</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://qualmed-group.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/qualmed-logo.png" class="img-fluid" alt="Qualmed Logo">
						</div>
					</div>
				</div>
			</div>
			
			<!------------------------
			Venezuela
			-------------------------->
			
			<!------------------------
			Vietnam
			-------------------------->
			<div class="result col-12 col-lg-6 mx-auto" data-preference="vietnam" data-style="gastrolyzer">
				<div class="distributor">
					<div class="row">
						<div class="col-8">
							<h3>Vinmed Invest Co., Ltd.</h3>
							<p><strong>Phone:</strong> +84 987 066 930</p>
							<p><strong>Email:</strong> <a href="mailto:thanhnd.vinmed@gmail.com">thanhnd.vinmed@gmail.com</a></p>
							<p class="mb-0"><strong>Website:</strong> <a href="https://vinmedvietnam.com/" target="_blank" title="Click to view the website">Visit here</a></p>
						</div>
						<div class="col-4 mt-auto">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/distributor-logos/vinmed-logo.jpg" class="img-fluid" alt="Vinmed Invest Co Logo">
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<script>
		$('#preference, #style').on('change', function(){
			var preference = $('#preference');
			var style = $('#style');

			// Check if user has made a selection on both dropdowns
			if (preference.prop('selectedIndex') > 0 && style.prop('selectedIndex') > 0) {
				// Hide the generic "no distributor" section by default
				$('#noDistributorSection').hide();

				// Remove active class from current active div element
				$('.result.active').removeClass('active');

				// Get all result divs, and filter for matching data attributes
				var matchingResults = $('.result').filter('[data-preference="' + preference.val() + '"][data-style="' + style.val() + '"]');

				// If matching results are found, show them; otherwise, show the generic "no distributor" section
				if (matchingResults.length > 0) {
					matchingResults.addClass('active');
				} else {
					$('#noDistributorSection').show();
				}
			}
		});
	</script>


<?php
get_footer('');