<div class="sectionmap">
<div class="row">
  <div class="col-sm-12">
    <a href="https://www.google.com/maps/place//data=!4m2!3m1!1s0x390ce446ab6712d3:0xdef21240e094e55e?source=g.page.share"><img src="photography-data/aaftmap.jpg" alt="" width="100%"></a>
  </div>
</div>
</div>

<div class="section sectionbg08">
<div class="container text-center">
  <div class="row">
    <div class="col-sm-10 nospace">
      <h2>Our <span style="color:#fe0000;">Campus</span></h2>
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <h3>Marwah Studios Complex</h3>
          <h4>Delhi-NCR</h4>
          <p>FC-14/15, Sector-16A Film City Noida, Uttar Pradesh- 201301, India</p>
          <p><strong>Call Us:</strong> <a href="tel:09109112056" style="text-decoration:none; color:#000">09109112056</a> <!--, <a href="tel:09811014230" style="text-decoration:none; color:#000">09811014230</a> --></p>
          <p><strong>Email:</strong> <a href="mailto:help@aaft.com" style="text-decoration:none; color:#000">help@aaft.com</a></p>
        </div>
        <div class="clearfix visible-xs">&nbsp;</div>
        <div class="col-lg-6 col-md-12" style="display:none;">
          <h3>AAFT University</h3>
          <h4>Raipur</h4>
          <p>Vill. Manth, Kharora, District – Raipur, Chhattisgarh- 493225</p>
          <p><strong>Call Us:</strong> 9109112078 | 9109112090</p>
          <p><strong>Email:</strong> enquiry@aaft.edu.in</p>
        </div>
      </div>
    </div>
    <div class="col-sm-2"></div>
  </div>
</div>
</div>

<!--Full footer commented on 16Dec2021-->
<footer class="container-fluid text-center footerbg01">
  <p>Copyright 2022 AAFT.</p>
  <div class="footerbar mobile">
    <div class="clearfix">
      <div class="footerbarBtn btn" style="float: left; border-right: 1px solid #e2e2e2;"><i class="fa fa-phone-square"></i> <a href="tel:09109112056" style="text-decoration:none; color:#FFF"><strong>Call Us</strong></a></div>
      <div class="footerbarBtn btn" style="float: right;"><i class="fab fa-whatsapp-square"></i> <a href="https://api.whatsapp.com/send?phone=918929487084" target="_blank" style="text-decoration:none; color:#FFF"><strong>Whatsapp</strong></a></div>
    </div>
  </div>
</footer>

<!--New footer Added on 16Dec2021 for Remove Whatsapp-->
<!--<footer class="container-fluid text-center footerbg01">
  <p>Copyright 2021 AAFT.</p>
  <div class="footerbar mobile">
    <div class="footerbarBtn btn">
      <a href="tel:09109112056" style="text-decoration:none; color:#FFF">
        <img src="call-icon.jpg">
      </a>
    </div>
  </div>
</footer> -->

<script>
  /*function panarmv(){
    alert("Panasonic");
    $(".pana").css("display", "block");
  }*/
</script>

<script type="text/javascript">
  jQuery(function ($) {
    var $active = $('#accordion .panel-collapse.in').prev().addClass('active');
    $active.find('a').prepend('<i class="glyphicon glyphicon-minus"></i>');
    $('#accordion .panel-heading').not($active).find('a').prepend('<i class="glyphicon glyphicon-plus"></i>');
    $('#accordion').on('show.bs.collapse', function (e) {
        $('#accordion .panel-heading.active').removeClass('active').find('.glyphicon').toggleClass('glyphicon-plus glyphicon-minus');
        $(e.target).prev().addClass('active').find('.glyphicon').toggleClass('glyphicon-plus glyphicon-minus');
    })
});
$(document).ready(function() {
  $(window).scroll(function(){
      if ($(this).scrollTop() > 200) {
         $('.navbar').addClass('nv-hover');
      } else {
         $('.navbar').removeClass('nv-hover');
      }
  });
});

!function(){for(var e=document.querySelectorAll(".youtube"),t=0;t<e.length;t++){var r="https://img.youtube.com/vi/"+e[t].dataset.embed+"/mqdefault.jpg",a=new Image;a.src=r,a.addEventListener("load",void e[t].appendChild(a)),e[t].addEventListener("click",function(){var e=document.createElement("iframe");e.setAttribute("frameborder","0"),e.setAttribute("allowfullscreen",""),e.setAttribute("src","https://www.youtube.com/embed/"+this.dataset.embed+"?rel=0&showinfo=0&autoplay=1"),this.innerHTML="",this.appendChild(e)})}}();

$("#owl-demo-infra").owlCarousel({autoPlay:3e3,pagination:!1,navigation:!0,navigationText:["<",">"],items:3,itemsMobile:[479,1],itemsDesktop:[1199,3],itemsDesktopSmall:[979,3]})
$("#owl-demo-projects").owlCarousel({autoPlay:3e3,pagination:!1,navigation:!0,navigationText:["<",">"],items:3,itemsMobile:[479,1],itemsDesktop:[1199,3],itemsDesktopSmall:[979,3]})
</script>

<!--project script start-->
<script src="isotope.pkgd.min.js"></script>
<script src="lib/js/main.js"></script>

<script>
function setBlank(){var t=document.getElementById("txtState").value,e=new XMLHttpRequest;e.onreadystatechange=function(){4==this.readyState&&200==this.status&&(document.getElementById("txtCity1").innerHTML=this.responseText)},e.open("GET","lib/city.php?state="+t,!0),e.send()}
function loadShow(){document.getElementById("txtCity").style.display="block",document.getElementById("txtCity1").style.display="none",document.getElementById("txtCity2").style.display="block"}

function OtpRe(){
  var ph=document.getElementById("SesPhone").value,n=new XMLHttpRequest;
  n.onreadystatechange=function(){
  4==this.readyState&&200==this.status&&(document.getElementById("").innerHTML=this.responseText)},
  n.open("GET","lib/resendotp.php?Phone="+ph,!0),n.send();
  //alert("https://aaft.com/ad/lib/resendotp.php?Phone="+ph);
}

function getVal1(t){var e=document.getElementsByClassName(t).innerHTML;document.getElementById("txtCity1").value=e,document.getElementById("txtCity").style.display="none"}
function getVal(t,e){var n=t.className.toString(),l=document.getElementsByClassName(n)[0].innerHTML;document.getElementById("txtCity1").value=l,document.getElementById("txtCity").style.display="none",document.getElementById("txtCity1").style.display="block",document.getElementById("txtCity2").style.display="none"}
</script>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5RPZKS7" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>