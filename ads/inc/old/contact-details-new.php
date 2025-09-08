<!--<section class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.024390578886!2d77.31331461449345!3d28.569030293704305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce446ae75823b%3A0x2abf2dd2c813438e!2sMarwah%20Studios!5e0!3m2!1sen!2sin!4v1646602413871!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>-->


<!-- mobile bottom fixed CTA -->

<?php if ($campName=="datasc"){ 
		date_default_timezone_set("Asia/Kolkata");
		if(date('H:i:s')>"10:00:00" && date('H:i:s')<"18:00:00")
			{ ?>
				<div class="mob-cta mobile-view">
					<div class="container-fluid">
						<div class="row">
							<div class="col-6 bright">
								<a href="tel:09109112056" class="callusbot"><i class="bi bi-telephone"></i> CALL US</a>
							</div>
							<div class="col-6">
								<a href="https://wa.me/918929487084" class="chatbot"><i class="bi bi-whatsapp"></i> Whatsapp</a>
							</div>
						</div>
					</div>
				</div>
		<?php } 
		else { ?>
			<div class="mob-cta mobile-view">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<a href="https://wa.me/918929487084" class="chatbot"><i class="bi bi-whatsapp"></i> Whatsapp</a>
						</div>
					</div>
				</div>
			</div>
		<?php }}
	else{
		date_default_timezone_set("Asia/Kolkata");
		if(date('H:i:s')>"10:00:00" && date('H:i:s')<"18:00:00")
		{ ?>
			<div class="mob-cta mobile-view">
				<div class="container-fluid">
					<div class="row">
						<div class="col-6 bright">
							<a href="tel:09109112056" class="callusbot"><i class="bi bi-telephone"></i> CALL US</a>
						</div>
						<div class="col-6">
							<a href="https://wa.me/918929487084" class="chatbot"><i class="bi bi-whatsapp"></i> Whatsapp</a>
						</div>
					</div>
				</div>
			</div>
		<?php } 
		else { ?>
			<div class="mob-cta mobile-view">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<a href="https://wa.me/918929487084" class="chatbot"><i class="bi bi-whatsapp"></i> Whatsapp</a>
						</div>
					</div>
				</div>
			</div>
		<?php }}
			?>
<!-- mobile bottom fixed CTA -->