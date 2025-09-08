

<!DOCTYPE html>
    		<html>
    		<head>
    			<base href="/">
    			<link rel="shortcut icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    			<link rel="shortcut icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
				<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    			
	<meta charset="UTF-8">
	<meta name="theme-color" content="#000000">
	<title>AAFT University</title>
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-43TJ5TNKK0"></script>

    <style>
		.container-row {
			max-width: 600px;
			margin: 0 auto;
			border: 0;
			padding: 5px 0 5px 0;
			display: flex;
			align-items: center;
		}

		.vmn {
			margin-left: auto;
		}

		.vmn button {
			background-color: #703696;
			color: #ffffff;
			border: none;
			padding: 5px 10px;
			border-radius: 20px;
			cursor: pointer;
		}
	</style>
	<?php 
	if(!empty($_GET['vmn'])){
		$number = $_GET['vmn'];
	} else {
		$number = '9109026576';
	}
	?>

	<script type="text/javascript">
	window.iticks = {
		host: "https://app.intelliticks.com", 
		cdn: "https://cdn-v1.intelliticks.com/prod/20220507", 
		clientId: "ddPGxNkfK6HtADM3r_c",
		queue:[],
		settings:{},
		call: function(){}
	};
	var chatFrame;
	var pendingEvents = [];
	var isFrameReady = false;
	
	if (false) {
		// Adding checkout.js client side
		var h = document.head || document.documentElement;
		var e = document.createElement('script');
		e.src = 'https://checkout.razorpay.com/v1/checkout.js';
		h.insertBefore(e, h.firstChild);
	}

	if(true){
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', "G-43TJ5TNKK0");
	}
	
	if(false){
		!function(f,b,e,v,n,t,s)
		{
			if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)
		};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', "_");
		fbq('track', 'PageView');
		var h = document.head || document.documentElement;
		var e = document.createElement('noscript');
		e.src = 'https://www.facebook.com/tr?id=_&ev=PageView&noscript=1';
		h.insertBefore(e, h.firstChild);
	}
	

	function setValue(key, value) {
		try {
			localStorage.setItem(key, JSON.stringify(value));
		} catch (error) { }
	}

	function getValue(key) {
		var value = "";
		try {
			value = localStorage.getItem(key)
		} catch (error) { }
		return value;
	}

	function onNewEvent() {
		if (pendingEvents.length > 0 && isFrameReady) {
				chatFrame.contentWindow.postMessage({
				type: "history",
				data: pendingEvents.splice(0)
			}, '*');
		}
	}
	
	function recordEvent(eventObj) {
			pendingEvents.push(eventObj);
			onNewEvent();
	}
	recordEvent({
			type: "Click",
			url: location.href,
			time: Date.now()
	});
	
	var isVisible = (function setupVisibility() {
			var hidden, visibilityChange, lastIsVisibile;
			if (typeof document.hidden !== "undefined") { // Opera 12.10 and Firefox 18 and later support
					hidden = "hidden";
					visibilityChange = "visibilitychange";
			} else if (typeof document.msHidden !== "undefined") {
					hidden = "msHidden";
					visibilityChange = "msvisibilitychange";
			} else if (typeof document.webkitHidden !== "undefined") {
					hidden = "webkitHidden";
					visibilityChange = "webkitvisibilitychange";
			}
			function handleVisibilityChange() {
					lastIsVisibile = !document[hidden];
					if (lastIsVisibile) gotActivity();
					recordEvent({
							type: lastIsVisibile ? "Show" : "Hide",
							time: Date.now(),
							url: location.href
					});
			}
			// Warn if the browser doesn't support addEventListener or the Page Visibility API
			if (typeof document.addEventListener === "undefined" || typeof document[hidden] === "undefined") {
					console.log("IntelliTicks requires a browser, such as Google Chrome or Firefox, that supports the Page Visibility API.");
			} else {
					// Handle page visibility change
					document.addEventListener(visibilityChange, handleVisibilityChange, false);
					window.addEventListener("hashchange", handleVisibilityChange, false);
			}
			if (!document[hidden]) {
					lastIsVisibile = true;
					recordEvent({
							type: "Show",
							url: location.href,
							time: Date.now() + 1
					});
			} else {
					lastIsVisibile = false;
					recordEvent({
							type: "Hide",
							url: location.href,
							time: Date.now() + 1
					});
			}
			//if no activity for 30s then make it invisible
			var timerId;
			function startVisibilityTimer() {
					if (timerId) window.clearTimeout(timerId);
					timerId = window.setTimeout(function() {
							lastIsVisibile = false;
							//console.log('timer ends, set invisible');
							recordEvent({
									type: "Hide",
									url: location.href,
									time: Date.now() + 1
							});
					}, 30000);
					//console.log('timer setup');
			}
			function gotActivity() {
					if (!lastIsVisibile) {
							recordEvent({
									type: "Show",
									url: location.href,
									time: Date.now()
							});
					}
					lastIsVisibile = true;
					startVisibilityTimer();
			}
			gotActivity();
			window.addEventListener("mousemove", gotActivity, false);
			window.addEventListener("mousedown", gotActivity, false);
			window.addEventListener("keypress", gotActivity, false);
			window.addEventListener("DOMMouseScroll", gotActivity, false);
			window.addEventListener("mousewheel", gotActivity, false);
			window.addEventListener("touchmove", gotActivity, false);
			window.addEventListener("MSPointerMove", gotActivity, false);
			window.addEventListener("_iticks.activity", gotActivity, false);
			return function() {
					return lastIsVisibile;
			};
	})();
	var engageType = "playbook";
	var engageName = "65c5b43aa1b7ba7ca39dc015";
	function setup() {
		var deviceId = getValue(window.iticks.clientId + '.iticksId');
		document.body.innerHTML = '<div class="container-row"><div class="navigation-logo" style="text-align: left;"><a href="https://www.aaft.edu.in/"><img src="https://aaft.edu.in/wp-content/themes/aafttheme/images/logo.webp" alt="Milaan Logo" width="100" height="30"></a></div><div class="vmn"><a href="tel:<?php echo $number; ?>"><button><img src="https://milann.co.in/campaign/bangalore-Bhuvanagiri/phn.svg" style="position: relative;top: 2px;right: 3px;"><?php echo $number; ?></button></a></div></div> <div class="container">' +
		'<iframe allow="microphone *" allowfullscreen src="https://app.intelliticks.com/widgets/engage/ddPGxNkfK6HtADM3r_c?ref='+
		encodeURIComponent(document.referrer)+'&landing='+encodeURIComponent(window.location.href)+
		'&v=landing&engageType='+encodeURIComponent(engageType)+'&engageName='+encodeURIComponent(engageName)+'&isMobile=&cudId=' + encodeURIComponent(deviceId) + '" frameborder="0" scrolling="no"></iframe><div>';
	}
	
	if(document.readyState == "interactive" || document.readyState == "complete") {
		setup();
		chatFrame = document.querySelector(".container iframe");
	}
	else if(document.addEventListener) {
		document.addEventListener('readystatechange', function() {
			if(document.readyState == "interactive") {
				setup();
				chatFrame = document.querySelector(".container iframe");
			}
		});
	}
	else if(document.attachEvent) {
		document.attachEvent('readystatechange', function() {
			if(document.readyState == "interactive") {
				setup();
				chatFrame = document.querySelector(".container iframe");
			}
		});
	}
	function getCookie(name) {
		var value = "; " + document.cookie;
		var parts = value.split("; " + name + "=");
		if (parts.length == 2) return parts.pop().split(";").shift();
	}
	function sendCRMIds(retries) {
		if (retries > 3) return;
		var hubtk = getCookie("hubspotutk");
		var gotId = false;
		if (hubtk) {
				chatFrame.contentWindow.postMessage({
						type: "sethubtk",
						data: hubtk
				}, '*');
				gotId = true;
		}
		if (window.MXCProspectId) {
				chatFrame.contentWindow.postMessage({
						type: "setls",
						data: window.MXCProspectId
				}, '*');
				gotId = true;
		}
		if(window.company && window.company.company_settings && window.company.company_settings.crm_integration && window.company.company_settings.crm_integration.indexOf('GA') > -1) {
			var gaC = getCookie("_ga");
			if(gaC) {
			var gaSplit = gaC.split('.');
			chatFrame.contentWindow.postMessage({
							type: "setga",
							data: gaSplit[2] + "." + gaSplit[3]
					}, '*');
						gotId = true;
			}
		}
		if (!gotId) {
			setTimeout(function() {
				sendCRMIds(retries + 1);
			}, 2000);
		}
	}
	
	function receiveMessage(event) {
		var chatFrame = document.querySelector(".container iframe");
		if (!event.data || !event.data.type) {
			//invalid data
		}else if (event.data.type == "set.iticksId") {
			setValue(event.data.key, event.data.value);
		}else if (event.data.type == "activity") {
			window.dispatchEvent(new Event("_iticks.activity"))
		}else if(event.data.type == "frame.ready") {
			if (isFrameReady) return; //already its ready
			isFrameReady = true;
			//get hubspot cookie and send to server
			sendCRMIds(0);
			onNewEvent();
			var chatFrame = document.querySelector(".container iframe");
			//chatFrame.contentWindow.postMessage({type:"function", data:{type:engageType, data:engageName}}, '*');
		}else if (event.data.type == "config.paymentOptions") {
			event.data.options["handler"] = function(response){
				chatFrame.contentWindow.postMessage({
					type: 'paymentAuthorized',
					data: response.razorpay_payment_id,
					msgId: event.data.msgId
				}, '*')
			};
			event.data.options["modal"] = {
				"ondismiss": function(response){
					chatFrame.contentWindow.postMessage({
						type: 'paymentDismiss',
						msgId: event.data.msgId
					}, '*')
				}
			}
			window.rzp = new Razorpay(event.data.options);
		} else if (event.data.type == 'show.paymentForm') {
			if (window.rzp) window.rzp.open();
			chatFrame.contentWindow.postMessage({
				type: 'paymentInitiate',
				msgId: event.data.msgId
			}, '*')
		} else if(event.data.type == 'execute.javaScript') {
			if(event.data.code) {
					try {
							eval(event.data.code);
					} catch (error) {
							console.log("Error: ", error);
					}
			}
		} else if (event.data.type == "enable.widget") {
			window.company = event.data.company;
		} else if (event.data && event.data.type == "openImage") {
			document.querySelector('.iticks-modal-img').src = event.data.image_url
			document.querySelector('.iticks-modal').style.display = "flex";
		}
	}

	function createImageModal(){
		var frag = document.createDocumentFragment('div');

		var imgModal = document.createElement('div');
		imgModal.className = 'iticks-modal';
		imgModal.style.display = 'none';
		
		var modalCloseSpan = document.createElement('span')
		modalCloseSpan.className = 'iticks-modal-close'
		modalCloseSpan.innerHTML = '&times;';
		modalCloseSpan.setAttribute('title', 'Close');
		imgModal.appendChild(modalCloseSpan);
	
		var modalImage = document.createElement('img');
		modalImage.className = 'iticks-modal-img iticks-modal-content';
		imgModal.appendChild(modalImage);
	
		modalCloseSpan.onclick = function () {
			imgModal.style.display = "none";
		}
		frag.appendChild(imgModal);
		document.body.appendChild(frag);
	}
	window.addEventListener('DOMContentLoaded', (event) => {
		createImageModal()
	});

	if(window.addEventListener) window.addEventListener("message", receiveMessage, false);
	else if(window.attachEvent) window.attachEvent("message", receiveMessage);
	</script>
	<style>
	html, body {width:100%;height:100%;background:#eee;margin:0;border:0;padding:0;}
	iframe{display: block;position: absolute;top: 0;bottom: 0;left: 0;right: 0;max-width: 100%;width: 100vw;height: 100%;box-shadow: 0px 5px 15px 0px rgba(0, 0, 0, 0.3);}
	.container{position: relative;max-width: 600px;width: 100%;height: 100%;margin: 0 auto;border: 0;padding: 0;}	
	.iticks-modal-img{border-radius:5px;cursor:pointer;transition:.3s}
	.iticks-modal{display:none;position:fixed;z-index:2147483648;left:0;top:0;width:100%;height:100%;overflow:auto;background-color:#000;background-color:rgba(0,0,0,.9);justify-content: center;align-items: center;}
	.iticks-modal-content{margin:auto;display:block;max-height:80%; width: auto;}
	.iticks-modal-img{-webkit-animation-name:zoom;-webkit-animation-duration:.6s;animation-name:zoom;animation-duration:.6s;cursor:pointer;}
	@-webkit-keyframes zoom{from{-webkit-transform:scale(0)}to{-webkit-transform:scale(1)}}
	@keyframes zoom{from{transform:scale(0)}to{transform:scale(1)}}
	.iticks-modal-close{position:absolute;top:15px;right:35px;color:#f1f1f1;font-size:40px;font-weight:700;transition:.3s;cursor: pointer;}
	.iticks-modal-close:focus,.iticks-modal-close:hover{color:#bbb;text-decoration:none;cursor:pointer}@media only screen and (max-width:700px){.iticks-modal-content{width:100%}}
	</style>
	undefined
    		</head>
			<body class="iticks-landing">
				
			</body>
		</html>