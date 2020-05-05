<footer id="footer">
        <div id="footer-social">
            <span class="adc--steel-text">Follow us:</span>
            <a href="http://twitter.com/adcolony/" target="_blank"><img src="/assets/img/footer-icon-social-twitter.jpg" /></a>
            <a href="http://facebook.com/adcolony/" target="_blank"><img src="/assets/img/footer-icon-social-facebook.jpg" /></a>
            <a href="http://pinterest.com/adcolony/" target="_blank"><img src="/assets/img/footer-icon-social-pinterest.jpg" /></a>
            <a href="http://www.linkedin.com/company/935402" target="_blank"><img src="/assets/img/footer-icon-social-linkedin.jpg" /></a>
            <a href="http://vimeo.com/adcolony/" target="_blank"><img src="/assets/img/footer-icon-social-vimeo.jpg" /></a>
        </div>
        
        <div id="footer-newsletter">
            <!--<a id="newsletter-modal" class="btn-small gradient-grey" href="javascript:void(0);">Subscribe to our Newsletter</a>-->
        </div>

        <br class="clear"/>
        <hr/>       
        
        <ul id="footer-nav" class="row">
            <li><a href="/company/contact">Contact</a></li>
            <li><a href="http://support.adcolony.com/">Support</a></li>
            <li><a href="http://privacy.adcolony.com/">Privacy</a></li>         
        </ul> 

        <p>Copyright ©<?php echo date("Y") ?> Jirbo, Inc. Jirbo, AdColony, Instant-Play, Videos-For-Virtual-Currency and V4VC are trademarks of Jirbo, Inc. All rights reserved.</p>  
</footer>
<?php
// Detect special conditions devices
// Chrome is displaying rendering issues on @font-face elements CSS3 Transforms
$iPod = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android= stripos($_SERVER['HTTP_USER_AGENT'],"Android");
$webOS= stripos($_SERVER['HTTP_USER_AGENT'],"webOS");

if ( $iPod || $iPhone || $iPad || $Android || $webOS ) {
    echo '
        <script>
            // Converts :active to pseudo touch
            document.addEventListener("touchstart", function() {},false);
        </script>
    ';
}
?>


<?php include_once("pagetrack.php"); ?>
