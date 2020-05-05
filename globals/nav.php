<?php

// disable text resizing on mobile
if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile') || strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'android')) 
{
echo "<style>body { -webkit-text-size-adjust:none; }</style>";
}

?>
        <header class="header-container">
            <nav id="subnav" class="row">
                <ul>
                    <li><a class="subnav-link" href="http://clients.adcolony.com/">Log In</a></li>
                    <li><span class="subnav-link">&#9679;</span></li>
                    <li><a class="subnav-link" href="http://github.com/AdColony/" onClick="_gaq.push(['_trackEvent', 'DownloadSDK', 'Github Link', 'Top Navbar']);" >Download SDK</a></li>
                    <li><span class="subnav-link">&#9679;</span></li>
                    <li><a class="subnav-link" href="http://support.adcolony.com/">Support</a></li>
                    <li><span class="subnav-link">&#9679;</span></li>
                    <li><a class="subnav-link" href="http://blog.adcolony.com/">Blog</a></li>
                </ul>
            </nav>
            <br class="clear" />
            <a href="/">
                <h1 id="logo">
                    <span>AdColony</span>
                </h1>
            </a>
            <nav id="nav" class="row">
                <a class="btn-small gradient-green floatright" href="http://clients.adcolony.com/register">Sign Up</a>
                <ul>
                    <li><a class="nav-link" href="/company/about">Company</a></li>
                    <li><a class="nav-link" href="/useracquisition">User Acquisition</a></li>
                    <li><a class="nav-link" href="/monetization">Monetization</a></li>
                    <li><a class="nav-link" href="/brands">Brands/Agencies</a></li>
                </ul>
            </nav>
            <br class="clear" />
        </header>
            