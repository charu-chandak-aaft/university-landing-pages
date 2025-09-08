<?php
function getCurrentURLtoLsq()
{
	//$currentURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
	$currentURL = (@$_SERVER["HTTPS"] == "on");
	//$currentURL .= $_SERVER["SERVER_NAME"];
	if($_SERVER["SERVER_PORT"] != "80" && $_SERVER["SERVER_PORT"] != "443")
	{
		$currentURL .= ":".$_SERVER["SERVER_PORT"];
	} 
	$currentURL .= $_SERVER["REQUEST_URI"];
	return $currentURL;
}

function getBaseURLtoLsq(){
    $baseURL = $_SERVER['SERVER_NAME'];
    return $baseURL;
}

$SourceReferrerURL= getBaseURLtoLsq().ltrim(getCurrentURLtoLsq(),"1");
$_SESSION['leadUrl']=$SourceReferrerURL;
?>

<meta name="robots" content="noindex, nofollow" />
<link href="assets/img/favicon.png" rel="icon">

<!--header script start-->
<link href="assets/css/hero_sec_style.css" rel="stylesheet">

<link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" id="css_1" disabled>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" id="css_2" disabled>	

<link href="assets/css/bootstrap.min.css" rel="stylesheet" id="css_3">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" id="css_4" disabled>
<link href="assets/css/style.css" rel="stylesheet" id="css_5">
<link href="assets/css/responsive.css" rel="stylesheet" id="css_6" disabled>
<link href="assets/css/swiper-bundle.min.css" rel="stylesheet" id="css_7" disabled>
<link href="assets/css/glightbox.css" rel="stylesheet" id="css_8" disabled>

<!--bootstrap script-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


<!--header script end-->

<!--clarity script start-->
<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "g6dmm6l4av");
</script>

<!--clarity script start-->
<!--<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "b3es3d6gas");
</script>-->
<!--clarity script end-->
<!-- Start G T M -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WPJL6LB');</script>
<!-- End Google Tag Manager -->
<!-- End G T M -->

<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '467369264878546');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=467369264878546&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-664784235"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-664784235');
</script>
