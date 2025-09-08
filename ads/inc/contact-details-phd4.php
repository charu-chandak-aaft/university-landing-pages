<!-- mobile bottom fixed CTA -->



<div class="mob-cta mobile-view">
		<div class="container-fluid">
			<div class="row">
				<div class="col-6">
					<a href="tel:08069152359" class="callusbot"><i class="bi bi-telephone"></i> CALL US</a>
				</div>
				<div class="col-6">
					<!--<a href="https://wa.me/919109007658" class="chatbot"><i class="bi bi-whatsapp"></i> Whatsapp</a>-->
					<a href="https://api.whatsapp.com/send/?phone=918447006467&text=Hi, I would like to know more about <?php echo str_replace("&","and",str_replace("School of","",$schoolOption));?> Course." class="chatbot"><i class="bi bi-whatsapp"></i> Whatsapp</a>				</div>
			</div>
		</div>
	</div>


<!-- mobile bottom fixed CTA -->
<script>
	document.addEventListener("DOMContentLoaded", function() {
		document.querySelectorAll(".callusbot").forEach(function(button) {
			button.addEventListener("click", function(event) {
				let currentUrl = window.location.href; // Get current page URL

				// Call the API through PHP
				fetch("/ads/inc/call_api.php", {
						method: "POST",
						headers: {
							"Content-Type": "application/json"
						},
						body: JSON.stringify({
							url: currentUrl
						})
					})
					.then(response => response.json())
					.then(data => console.log("API Response:", data))
					.catch(error => console.error("Error:", error));
			});
		});
	});
</script>