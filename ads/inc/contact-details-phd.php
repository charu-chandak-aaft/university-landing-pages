<!-- mobile bottom fixed CTA -->

<div class="mob-cta mobile-view">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 bright  d-none">
				<a href="tel:+<?php echo getDidnumber($utm_campaign); ?>" class="callusbot"><i class="bi bi-telephone"></i> CALL US</a>
			</div>
			
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