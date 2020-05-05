<?php
if(strpos($_SERVER['SERVER_NAME'], 'herokuapp') === false && strpos($_SERVER['SERVER_NAME'], 'localhost') === false && strpos($_SERVER['SERVER_NAME'], 'www-staging') === false) {
    // Production server
    $ga_tracking_id = "UA-26095443-1";
	 $ga_domain_name = "adcolony.com";
} else {
    // Dev server
    $ga_tracking_id = "UA-26095443-3";
	 $ga_domain_name = "www-staging.adcolony.com";
}
?>

<!-- GOOGLE ANALYTICS -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?php echo $ga_tracking_id ?>']);
  _gaq.push(['_setDomainName', '<?php echo $ga_domain_name ?>']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<!-- GOOGLE ANALYTICS -->


<!-- CHARTBOOST -->
<script type="text/javascript">
  var _sf_async_config = { uid: 16348, domain: '<?php echo $_SERVER["SERVER_NAME"]?>' };
  (function() {
    function loadChartbeat() {
      window._sf_endpt = (new Date()).getTime();
      var e = document.createElement('script');
      e.setAttribute('language', 'javascript');
      e.setAttribute('type', 'text/javascript');
      e.setAttribute('src',
        (("https:" == document.location.protocol) ? "https://a248.e.akamai.net/chartbeat.download.akamai.com/102508/" : "http://static.chartbeat.com/") +
        "js/chartbeat.js");
      document.body.appendChild(e);
    };
    var oldonload = window.onload;
    window.onload = (typeof window.onload != 'function') ?
      loadChartbeat : function() { oldonload(); loadChartbeat(); };
  })();
</script>
<!-- CHARTBOOST -->


<!-- Start of Async HubSpot Analytics Code -->
  <script type="text/javascript">
    (function(d,s,i,r) {
      if (d.getElementById(i)){return;}
      var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
      n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/432123.js';
      e.parentNode.insertBefore(n, e);
    })(document,"script","hs-analytics",300000);
  </script>
<!-- End of Async HubSpot Analytics Code -->

