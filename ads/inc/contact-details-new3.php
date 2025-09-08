<!-- mobile bottom fixed CTA -->

<?php 

date_default_timezone_set("Asia/Kolkata");
if(date('H:i:s')>"10:00:00" && date('H:i:s')<"18:00:00")
{ ?>
	<div class="mob-cta mobile-view">
		<div class="container-fluid">
			<div class="row">
				<div class="col-6">
					<a href="tel:08069152369" class="callusbot"><i class="bi bi-telephone"></i> CALL US</a>
				</div>
				<div class="col-6">
					<a href="https://api.whatsapp.com/send/?phone=918447006467&text=Hi, I would like to know more about bba-llb degree program" class="chatbot"><i class="bi bi-whatsapp"></i> Whatsapp</a>
					<!--<a href="#enquire" class="chatbot"><i class="bi bi-chat-square-text-fill"></i> ENROLL NOW</a>-->
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
					<!--<a href="https://wa.me/919109007658" class="chatbot"><i class="bi bi-whatsapp"></i> Whatsapp</a>-->
					<a href="https://api.whatsapp.com/send/?phone=918447006467&text=Hi, I would like to know more about <?php echo str_replace("&","and",str_replace("School of","",$schoolOption));?> Course." class="chatbot"><i class="bi bi-whatsapp"></i> Whatsapp</a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<!-- mobile bottom fixed CTA -->

<!-- Back to top button -->
<style>
#button {
  display: inline-block;
  background-color: #838383d9;
  width: 45px;
  height: 45px;
  text-align: center;
  border-radius: 4px;
  position: fixed;
  bottom: 45px;
  right: 10px;
  transition: background-color .3s, 
    opacity .5s, visibility .5s;
  opacity: 0;
  visibility: hidden;
  z-index: 1000;
}

#button:hover {
  cursor: pointer;
  background-color: #838383d9;
}
#button:active {
  background-color: #555;
}
#button.show {
  opacity: 1;
  visibility: visible;
}
.bx {font-size:45px; color:#ffffff;}
</style>

<a id="button"><i class='bx bx-chevron-up'></i></a>

<script>
var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});	
</script>
<!-- Back to top button -->
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