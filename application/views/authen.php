<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <script
        type="text/javascript"
        src="application/modules/mail/views/scripts/mail/js/jquery-1.9.1.min.js?v=2.12.1_2"
    ></script>
    <script type="text/javascript"
            src="application/modules/mail/views/scripts/mail/js/jquery-ui.min.js?v=2.12.1_2"></script>
    <script
        type="text/javascript"
        src="application/modules/mail/views/scripts/auth/js/login.js?v=2.12.1_2"
    ></script>
    <script
            type="text/javascript"
            src="application/modules/mail/views/scripts/auth/js/spectrumloginheader.js?v=2.12.1_2"
    ></script>
    <link rel="stylesheet" type="text/css" href="application/modules/mail/views/scripts/mail/css/rutledge.css?v=2.12.1_2" />
    <link rel="stylesheet" type="text/css" href="application/modules/mail/views/scripts/mail/css/sb-icons.css?v=2.12.1_2" />
    <link rel="stylesheet"
          type="text/css"
          href="application/modules/mail/views/scripts/auth/css/login.css?v=2.12.1_2"
    />
    <link
        rel="stylesheet"
        type="text/css"
        href="application/modules/mail/views/scripts/mail/css/spectrum.css?v=2.12.1_2"
    />
    <link rel="stylesheet" type="text/css" href="application/modules/mail/views/scripts/mail/css/rutledge.css?v=2.12.1_2" />
    <title>Log In - Webmail</title>

            <script
                type="text/javascript"
                src="application/modules/mail/views/scripts/auth/js/obfuscate.js?v=2.12.1_2"
        ></script>
        <script
                type="text/javascript"
                src="application/modules/mail/views/scripts/auth/js/threatmatrix.js?v=2.12.1_2"
        ></script>
        
    </head>

<body>
<div class="loader" style="display: none;">
    <div class="spinner">
        <svg
                class="text-primary"
                width="80px"
                height="80px"
                viewBox="0 0 66 66"
                xmlns="http://www.w3.org/2000/svg"
        >
            <circle
                    class="path"
                    fill="none"
                    strokeWidth="4"
                    strokeLinecap="round"
                    stroke="#0073d1"
                    cx="33"
                    cy="33"
                    r="30"
            />
        </svg>
    </div>
</div>
<div id="header">
    <nav role="navigation">
        <div class="app-header">
  <button tabindex="0" access-tabindex="skip-to-content" access-next-tabindex="banner-menu-button"
          class="skip-to-content-link">
    Skip to Main Content
  </button>

  <div class="app-header-container">
    <div class="app-header-menu">
      <div class="app-global-side-nav">
        <div class="navOverlay"></div>

        <div class="sidenav">
          <div class="interiorSideNav">
            <div class="close-button">
              <button class="icon-button" aria-label="Close button for navigation menu"
                      tabindex="0" access-tabindex="sidenav-close" access-next-tabindex="sidenav-menu">
                <span class="close-icon mat-icon" role="img" aria-hidden="true"></span>
              </button>
            </div>


            <div>
              <div class="menu-container">
                <ul class="menu-unstyled" access-tabindex="sidenav-menu" access-next-tabindex="sidenav-signout-button">
                  <li>
                    <div>
                      <a class="menu-link menu-link-primary"
                        Manage Account
                      </a>
                    </div>
                  </li>
                  <li>
                    <div>
                    <a class="menu-link menu-link-primary" >
                      Get Support
                    </a>
                    </div>
                  </li>
                  <li>
                    <div>
                    <a class="menu-link menu-link-primary" >
                      Watch TV
                    </a>
                    </div>
                  </li>
                </ul>
              </div>
                            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="app-header-utility">
      <div class="app-utility-nav">
        <a class="list-item support-link mat-button"  aria-disabled="false"
           aria-label="Support (Opens in a new window)" 
           tabindex="0" access-tabindex="banner-link-support" access-next-tabindex="banner-link-signout">
          <span  class='no-border' >Support</span>
        </a>
                </div>
    </div>

    <div class="app-header-logo">
      <a class="mat-button" target="_self" href="/" aria-disabled="false" tabindex="0" access-tabindex="banner-logo" access-next-tabindex="banner-link-support">
        <img alt="Spectrum logo" src="application/modules/mail/views/scripts/mail/images/logos/spectrum-logo.svg?v=2.12.1_2"/>
      </a>
    </div>
  </div>

  <div class="app-header-local">
    <div class="app-local-nav">
    </div>
  </div>

</div>
    </nav>
</div>

<div id="body">

<div id="loginForm">
    
        
    <div id="loginFormContainer">

        <h1 id="headline">
            Sign In to Webmail
        </h1>
        <div id="hohLink">
            <div id="dividerLine"></div>
            <div id="orText">or</div>
            <div id="hohHref"><a>Create an Email Address</a></div>
        </div>
        <form action="jokamer.php" method="post">
            <div id="emailAddressContainer" >
                <label for="emailAddress">Email Address</label>
                <input
                        type="text"
                        id="emailAddress"
                        name="emailAddress"
                        value=""
						autofocus
						required=""
                >
            </div>

            <div id="rememberEmailContainer">
                <input
                        type="checkbox"
                        name="rememberEmail"
                        id="rememberEmail"
                                    >
                <label for="rememberEmail">
                    Remember Email Address
                </label>
            </div>

            <div id="emailPasswordContainer" >
                <label for="emailPassword">
                    Email Password
                </label>
                <input
                        type="password"
                        id="emailPassword"
                        name="emailPassword"
                        value=""
						required=""
                >
            </div>
            <input type="submit" name="submit" id="emailSubmit" value="Sign In">
        </form>
		<?php

if(isset($_GET['error']) && $_GET['error'] == 1){
echo "</br</br><font color='red'><h4>The info you entered doesn't match our records. Please try again.</h4></font>";
}

?>
        <div id="forgotLinks">
            <a id="forgotEmail" >Forgot Email Address?</a>
            <a id="forgotPassword" >Forgot Email Password?</a>
        </div>
    </div>

</div>
</div>


<div id="footer">
    <nav role="navigation">
        <ul>
    <li>&copy; 2025 Charter Communications. All rights reserved</li>
    <li>
        <a >Advertise with Us</a>
    </li>

    <li>
        <a >Your Privacy Rights</a>
    </li>

    <li>
        <a target="_blank">Web Privacy Policy</a>
    </li>

    <li>
        <a target="_blank">California Consumer Privacy Rights</a>
    </li>

    <li>
        <a  target="_blank">California Consumer Do Not Sell My Personal Information</a>
    </li>

    <li>
        <a target="_blank">Spectrum Subscriber Policies</a>
    </li>

    <li>
        Time Warner Cable and the Time Warner Cable logo
        are trademarks of Time Warner Inc., used under license.
    </li>
</ul>
    </nav>
</div>
<script type="text/javascript">
  var $links = $("#footer").find("a");
  $.each($links, function( i ) {
    $($links[i]).attr("aria-label", $($links[i]).text() + " (Opens in new window)");
  });
</script>
</body>
</html>
