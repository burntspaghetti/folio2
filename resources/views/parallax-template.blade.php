<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <meta name="theme-color" content="#4db6ac">
  <link rel="shortcut icon" href="{!! asset('parallax-template/enso.png') !!}">
  <title>Nick Bertanzetti</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{!! asset('parallax-template/css/materialize.css') !!}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{!! asset('parallax-template/css/style.css') !!}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="{!! asset('font-awesome-4.6.2/css/font-awesome.min.css') !!}">
</head>
<body>
<nav class="teal lighten-2" role="navigation">
  <div class="nav-wrapper container">
    <div id="logo-container">
      <div class="brand-logo white-text">
        <i class="material-icons dp48">settings_power</i>
      </div>
    </div>
    <ul class="right hide-on-med-and-down">
      <li><a href="#" class="white-text">About</a></li>
      <li><a href="#services" class="white-text">Services</a></li>
      <li><a href="#portfolio" class="white-text">Portfolio</a></li>
      <li><a href="#tools" class="white-text">Tools</a></li>
      <li><a href="#contact" class="white-text">Contact</a></li>
    </ul>
    <ul id="nav-mobile" class="side-nav">
      <li><a href="#" class="teal-text"><b>About</b></a></li>
      <li><a href="#services" class="teal-text"><b>Services</b></a></li>
      <li><a href="#portfolio" class="teal-text"><b>Portfolio</b></a></li>
      <li><a href="#tools" class="teal-text"><b>Tools</b></a></li>
      <li><a href="#contact" class="teal-text"><b>Contact</b></a></li>
    </ul>
    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
  </div>
</nav>

<div id="index-banner">
  <div class="section no-pad-bot">
    <div class="container">
      <div class="row">
        <div class="col s12 m6 l8 offset-l2">
          <div class="card hoverable" style="overflow: hidden;">
            <div class="card-image waves-effect waves-block waves-light">
              <img id="profilepic" src="{!! asset('me3.jpg') !!}">
            </div>
            <div class="card-content center">
              <span class="card-title grey-text text-darken-4">Nick Bertanzetti</span>
              <p class="teal-text text-lighten-2"><b>IT Guru</b></p>
              <br>
              <div class="card-action center">
                <a class="activator waves-effect waves-light btn">Info</a>
              </div>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Hi there.<i class="material-icons right">close</i></span>
              <p class="light flow-text">My name is Nick Bertanzetti and I'd like to help you navigate the electronic age. Whether you want to build an entire system from scratch or chat about an idea, I'm always open for discussion. Scroll on down to learn more about what I can do for you.</p>
              <img src="{!! asset('parallax-template/calvin.jpg') !!}" alt="Unsplashed background img 2" style="display: block;margin-left: auto;margin-right: auto; width:75%;">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
      <br><br>
    </div>
  </div>
</div>
<div class="container">
  <div class="section" id="services">
    <h3 class="center">Services</h3>
    <!--   Icon Section   -->
    <ul id="staggered-row-1">
      <div class="row">
        <li style="opacity: 0">
          <div class="col s12 m4">
            <div class="icon-block center">
              <h2 class="teal-text"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></h2>
              <h5 class="">Consulting</h5>
              <p class="light flow-text">Analyze your workflow. Improve your processes. Increase efficiency. Leverage technology.</p>
            </div>
          </div>
        </li>
        <li style="opacity: 0;">
          <div class="col s12 m4">
            <div class="icon-block center">
              <h2 class="teal-text"><i class="fa fa-keyboard-o" aria-hidden="true"></i></h2>
              <h5 class="">Software Development</h5>
              <p class="light flow-text">Full lifecycle development: plan, anaylze, design, build, test, deploy, and maintain your systems.</p>
            </div>
          </div>
        </li>
        <li style="opacity: 0;">
          <div class="col s12 m4">
            <div class="icon-block center">
              <h2 class="teal-text">
                <i class="fa fa-desktop" aria-hidden="true"></i>
                <i class="fa fa-tablet" aria-hidden="true"></i>
                <i class="fa fa-mobile" aria-hidden="true"></i>
              </h2>
              <h5 class="">Responsive Design</h5>
              <p class="light flow-text">Make your app look and feel great on mobile devices of all sizes.</p>
            </div>
          </div>
        </li>
      </div>
    </ul>
    <ul id="staggered-row-2">
      <div class="row center">
        <li style="opacity: 0;">
          <div class="col s12 m4">
            <div class="icon-block">
              <h2 class="teal-text">
                <i class="fa fa-database" aria-hidden="true"></i>
              </h2>
              <h5 class="">Database Administration</h5>
              <p class="light flow-text">Migrate your Excel spreadsheets into a database, optimize performance, and feed the data into your systems. </p>
            </div>
          </div>
        </li>
        <li style="opacity: 0;">
          <div class="col s12 m4">
            <div class="icon-block center">
              <h2 class="teal-text">
                <i class="fa fa-line-chart" aria-hidden="true"></i>
              </h2>
              <h5 class="">Data Analytics</h5>
              <p class="light flow-text">Process, analyze, and visualize important information. Perform machine learning analysis on big data to gain valuable insights.</p>
            </div>
          </div>
        </li>
        <li style="opacity: 0;">
          <div class="col s12 m4">
            <div class="icon-block center">
              <h2 class="teal-text">
                <i class="fa fa-server" aria-hidden="true"></i>
              </h2>
              <h5 class="">Server Administration</h5>
              <p class="light flow-text">Hosting solutions: installation, configuration, maintenance, and service management.</p>
            </div>
          </div>
        </li>
      </div>
    </ul>
    <ul id="staggered-row-3">
      <div class="row">
        <li style="opacity: 0;">
          <div class="col s12 m4">
            <div class="icon-block center">
              <h2 class="teal-text">
                <i class="fa fa-calendar" aria-hidden="true"></i>
              </h2>
              <h5 class="">Project Management</h5>
              <p class="light flow-text">Utilize the right methodologies and tools to efficiently deliver your project on schedule. Foster collaboration and transparent communication.</p>
            </div>
          </div>
        </li>
        <li style="opacity: 0;">
          <div class="col s12 m4">
            <div class="icon-block center">
              <h2 class="teal-text">
                <i class="fa fa-wheelchair" aria-hidden="true"></i>
              </h2>
              <h5 class="">Accessibility</h5>
              <p class="light flow-text">Adhere to W3C Web Content Accessibility Guidelines (WCAG) and ensure accessibility for disabled users.</p>
            </div>
          </div>
        </li>
        <li style="opacity: 0;">
          <div class="col s12 m4">
            <div class="icon-block center">
              <h2 class="teal-text">
                <i class="fa fa-lock" aria-hidden="true"></i>
              </h2>
              <h5 class="">Security</h5>
              <p class="light flow-text">Encrypt your data, authenticate and authorize your users, manage access. Test and analyze vulnerabilities.</p>
            </div>
          </div>
        </li>
      </div>
    </ul>
  </div>
</div>

<div class="container">
  <div class="section" id="portfolio">
    <div class="row">
      <div class="col s12 center">
        <h3><i class="mdi-content-send brown-text"></i></h3>
        <h3>Portfolio</h3>
      </div>
    </div>
    <div class="row">
      <div class="col l6">
        {{--e-commerce card--}}
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{!! asset('screenshots/supplystore/supplyStoreHome.png') !!}">
          </div>
          <div class="card-content center">
            <span class="card-title activator grey-text text-darken-4">E-Commerce</span>
            <br>
            <p>Build a digital storefront for your business</p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">E-Commerce<i class="material-icons right">close</i></span>
            <p><b>Context:</b> The UA Supply Store’s e-commerce site was outdated, poorly designed, and lacked adequate controls for administrators to manage the site.</p>
            <p><b>Action:</b> Co-developed a redesigned website with a focus on user experience. Worked with 3rd party suppliers to integrate inventory API.</p>
            <p><b>Result:</b> New site design optimizes user friendliness and provides important administrative controls for content management.</p>
          </div>
          <div class="card-action center">
            <a class="activator waves-effect waves-light btn">Info</a>
            <a href="#modal2" class="waves-effect waves-light btn modal-trigger red">Screenshots</a>
          </div>
        </div>
        <!-- e-commerce Modal -->
        <div id="modal2" class="modal">
          <div class="modal-content">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="materialboxed" width="650" src="{!! asset('screenshots/supplystore/supplyStoreHome.png') !!}">
              </div>
              <div class="card-content center">
                <span class="card-title grey-text text-darken-4">Home Page</span>
              </div>
            </div>
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="materialboxed" width="650" src="{!! asset('screenshots/supplystore/supplyStoreSearch.png') !!}">
              </div>
              <div class="card-content center">
                <span class="card-title grey-text text-darken-4">Search Function</span>
              </div>
            </div>
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="materialboxed" width="650" src="{!! asset('screenshots/supplystore/supplystoreProductView.png') !!}">
              </div>
              <div class="card-content center">
                <span class="card-title grey-text text-darken-4">Product View</span>
              </div>
            </div>
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="materialboxed" width="650" src="{!! asset('screenshots/supplystore/supplyStoreBuyBooks.png') !!}">
              </div>
              <div class="card-content center">
                <span class="card-title grey-text text-darken-4">Book Checkout/Purchase</span>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
          </div>
        </div>
        {{--web forms processing card--}}
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{!! asset('screenshots/promenade/promenadeForm2.png') !!}">
          </div>
          <div class="card-content center">
            <span class="card-title activator grey-text text-darken-4">Web Forms Processing</span>
            <br>
            <p>Let your system keep all the paper for you automatically</p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Web Forms Processing<i class="material-icons right">close</i></span>
            <br>
            <p><b>Context:</b> An existing donation system was running on old technologies, had an outdated theme, and was not optimized for mobile devices. A new and more maintainable solution was needed.</p>
            <p><b>Action:</b> Rewrote existing application out of ColdFusion and into the Laravel framework, utilizing Twitter Bootstrap to create a mobile-friendly front end, and MySQL and Oracle databases on the back end.</p>
            <p><b>Result:</b> New solution enhanced user friendliness and maintainability of application by providing a more efficient mobile-first process.</p>
          </div>
          <div class="card-action center">
            <a class="activator waves-effect waves-light btn">Info</a>
            <a href="#modal6" class="waves-effect waves-light btn modal-trigger red">Screenshots</a>
          </div>
        </div>
        <!-- web forms processing modal-->
        <div id="modal6" class="modal">
          <div class="modal-content">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="materialboxed" width="650" src="{!! asset('screenshots/promenade/promenadeHome.png') !!}">
              </div>
              <div class="card-content center">
                <span class="card-title grey-text text-darken-4">Home Page</span>
              </div>
            </div>
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="materialboxed" width="650" src="{!! asset('screenshots/promenade/promenadeForm1.png') !!}">
              </div>
              <div class="card-content center">
                <span class="card-title grey-text text-darken-4">Form 1</span>
              </div>
            </div>
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="materialboxed" width="650" src="{!! asset('screenshots/promenade/promenadeForm2.png') !!}">
              </div>
              <div class="card-content center">
                <span class="card-title grey-text text-darken-4">Form 2</span>
              </div>
            </div>
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="materialboxed" width="650" src="{!! asset('screenshots/promenade/promenadeSummary.png') !!}">
              </div>
              <div class="card-content center">
                <span class="card-title grey-text text-darken-4">Summary</span>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
          </div>
        </div>
        {{--immunization card--}}
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{!! asset('screenshots/immunizations/immunizations.png') !!}">
          </div>
          <div class="card-content center">
            <span class="card-title activator grey-text text-darken-4">Mobile First</span>
            <br>
            <p>
              Build your system specifically for mobile devices
            </p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Mobile First<i class="material-icons right">close</i></span>
            <p><b>Context: </b>The University of Alabama Student Health Center is required to process batches of 10,000+ student immunization records in a limited timeline. Legacy process was paper-based and relied on outdated scanner and fax machine technologies. Process was failing to meet deadlines.</p>
            <p><b>Action: </b>Worked with teammate to develop mobile friendly form download and submission portal for student users and a back end document processing queue for Student Health Center staff. Students click a button to download a PDF pre-populated with their personal information. After a receiving a doctors signature, students then can take a picture of their form with their mobile device and submit directly to the Student Health Center for approval.</p>
            <p><b>Result: </b>New mobile first system maximizes user friendliness and process efficiency, saving 78,000+ hours of aggregate process completion per time year.</p>
          </div>
          <div class="card-action center">
            <a class="activator waves-effect waves-light btn">Info</a>
            <a href="#modal4" class="waves-effect waves-light btn modal-trigger red">Screenshots</a>
          </div>
        </div>
        <!-- immunizations modal-->
        <div id="modal4" class="modal">
          <div class="modal-content">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="materialboxed" width="650" src="{!! asset('screenshots/immunizations/immunizations.png') !!}">
              </div>
              <div class="card-content center">
                <span class="card-title grey-text text-darken-4">Upload Portal</span>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
          </div>
        </div>
      </div>
      <div class="col l6">
        {{--inventory management card--}}
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{!! asset('screenshots/nursingCheckout/checkout.png') !!}">
          </div>
          <div class="card-content center">
            <span class="card-title activator grey-text text-darken-4">Inventory Management</span>
            <br>
            <p>Track what's important to you with barcode, RFID, and magnetic stripe ID card systems</p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Inventory Management<i class="material-icons right">close</i></span>
            <p><b>Context:</b> The UA College of Nursing uses a wide variety of medical equipment to train their students. During test taking time, long lines with waiting times of up to an hour can form due to the current state process being paper-based. Therefore, an automated system with an emphasis on minimization of transaction time was needed. College of Nursing administrators also needed information for managing their inventory supply.</p>
            <p><b>Action:</b> Met with the College of Nursing staff to determine specific requirements. Designed and developed automated checkout system, integrating identification card (magnetic stripe) readers and bar code scanning equipment into a web application process.</p>
            <p><b>Result:</b> New system optimizes process efficiency by minimizing clicks. Total checkout process can be completed in under 5 seconds. Inventory and user history reports provide valuable information for maintaining transparency and properly managing equipment supplies.
            </p>
          </div>
          <div class="card-action center">
            <a class="activator waves-effect waves-light btn">Info</a>
            <a href="#modal5" class="waves-effect waves-light btn modal-trigger red">Screenshots</a>
          </div>
        </div>
        <!-- inventory management modal -->
        <div id="modal5" class="modal">
          <div class="modal-content">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="materialboxed" width="650" src="{!! asset('screenshots/nursingCheckout/checkoutHome.png') !!}">
              </div>
              <div class="card-content center">
                <span class="card-title grey-text text-darken-4">Checkout Page</span>
              </div>
            </div>
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="materialboxed" width="650" src="{!! asset('screenshots/nursingCheckout/checkoutBorrowerHistory.png') !!}">
              </div>
              <div class="card-content center">
                <span class="card-title grey-text text-darken-4">Borrower History</span>
              </div>
            </div>
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="materialboxed" width="650" src="{!! asset('screenshots/nursingCheckout/checkoutReport.png') !!}">
              </div>
              <div class="card-content center">
                <span class="card-title grey-text text-darken-4">Checkout Report</span>
              </div>
            </div>
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="materialboxed" width="650" src="{!! asset('screenshots/nursingCheckout/checkoutDeviceHistory.png') !!}">
              </div>
              <div class="card-content center">
                <span class="card-title grey-text text-darken-4">Device History</span>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
          </div>
        </div>
        {{--data feed integration card--}}
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{!! asset('screenshots/internationalcoursecredit/internationalCourseCreditForm.png') !!}">
          </div>
          <div class="card-content center">
            <span class="card-title activator grey-text text-darken-4">Data Integration</span>
            <p>
              Better inform your decisions by harnessing information from multiple data sources
            </p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Data Integration<i class="material-icons right">close</i></span>
            <br>
            <p><b>Context:</b> In order to gain credit towards their desired degrees, students planning on studying abroad at universities in foreign countries must first fill out a paper form and schedule a meeting with an advisor given limited time slots. There are hundreds of different study abroad programs offering thousands of different courses which must be matched to the appropriate equivalent course at the University of Alabama. The current state of this process is tediously handled using paper based forms and various Excel spreadsheets with no uniform data structure. A more efficient and automated system was needed to cope with increased work load.</p>
            <p><b>Action:</b> Met with process stakeholders to map out requirements, current state process flow, and database structure. Designed and developed web based form process and integrated third party data source into the application. Tested and deployed application onto an Apache server.</p>
            <p><b>Result:</b> New process optimizes information flow and allows users to make more informed and efficient decisions regarding the compatibility of their study abroad course credit and degree requirements, saving an average of more than 60 minutes for each student user compared to the old process.
          </div>
          <div class="card-action center">
            <a class="activator waves-effect waves-light btn">Info</a>
            <a href="#modal3" class="waves-effect waves-light btn modal-trigger red">Screenshots</a>
          </div>
        </div>
        <!-- data feed integration Modal-->
        <div id="modal3" class="modal">
          <div class="modal-content">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="materialboxed" width="650" src="{!! asset('screenshots/internationalcoursecredit/internationalCourseCreditHome.png') !!}">
              </div>
              <div class="card-content center">
                <span class="card-title grey-text text-darken-4">Home Page</span>
              </div>
            </div>
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="materialboxed" width="650" src="{!! asset('screenshots/internationalcoursecredit/internationalCourseCreditForm.png') !!}">
              </div>
              <div class="card-content center">
                <span class="card-title grey-text text-darken-4">Request Form</span>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
          </div>
        </div>
        {{--secure login card--}}
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="{!! asset('screenshots/philo/login.png') !!}">
            {{--put slider here?--}}
          </div>
          <div class="card-content center">
            <span class="card-title activator grey-text text-darken-4">
              Secure Login
            </span>
            <br>
            <p>Keep all your users' information safe and secure</p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Secure Login<i class="material-icons right">close</i></span>
            <br>
            <p><b>Context:</b> A contract was signed between the University of Alabama and a third party IPTV service provider to deliver internet television streaming services to all on campus residents. The IPTV service provider needed to securely hook into UA’s internal login service and database to authenticate and authorize users to access their services.</p>
            <p><b>Action:</b> Integrated UA’s Central Authentication Service (CAS) into IPTV service provider login and developed simple web service which took an encrypted user ID, decrypted it, and verified campus residential status from an Oracle database, returning a pass or fail message for service provider to handle.</p>
            <p><b>Result:</b> Successfully integrated two clients’ services and enabled delivery of IPTV services to on campus residents while maintaining confidentiality of user information.</p>
          </div>
          <div class="card-action center">
            <a class="activator waves-effect waves-light btn">Info</a>
            <a href="#modal1" class="waves-effect waves-light btn modal-trigger red">Screenshots</a>
          </div>
        </div>
        <!-- secure login Modal-->
        <div id="modal1" class="modal">
          <div class="modal-content">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="materialboxed" width="650" src="{!! asset('screenshots/philo/login.png') !!}">
              </div>
              <div class="card-content center">
                <span class="card-title grey-text text-darken-4">Central Authentication Service</span>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="section" id="tools">
    <div class="row">
      <div class="col s12 center">
        <h3><i class="mdi-content-send brown-text"></i></h3>
        <h3>Tools</h3>
      </div>
    </div>
    <div class="row center">
      <div class="">
        <ul class="collapsible" data-collapsible="accordion">
          <li>
            <div class="collapsible-header">Languages</div>
            <div class="collapsible-body">
              <p>
                <div class="chip">PHP</div>
                <div class="chip">PL/SQL</div>
                <div class="chip">JavaScript</div>
                <div class="chip">HTML</div>
                <div class="chip">CSS/SASS</div>
                <div class="chip">C#</div>
              </p>
            </div>
          </li>
          <li>
            <div class="collapsible-header">Frameworks/Libraries</div>
            <div class="collapsible-body">
              <p>
                <div class="chip">Laravel</div>
                <div class="chip">jQuery</div>
                <div class="chip">Vue.js</div>
                <div class="chip">Twitter Bootstrap</div>
                <div class="chip">MaterializeCSS</div>
                <div class="chip">ASP.NET MVC</div>
                <div class="chip">Web Forms</div>
                <div class="chip">Highcharts</div>
                <div class="chip">Chart.js</div>
                <div class="chip">Image Intervention</div>
                <div class="chip">DataTables</div>
                <div class="chip">PhpCAS</div>
                <div class="chip">PhpAES</div>
                <div class="chip">FPDF/FPDI</div>
                <div class="chip">Font Awesome</div>
              </p>
            </div>
          </li>
          <li>
            <div class="collapsible-header">APIs</div>
            <div class="collapsible-body">
              <p>
                <div class="chip">Twitter</div>
                <div class="chip">Google Maps</div>
                <div class="chip">Stack Exchange</div>
                <div class="chip">Alchemy API</div>
                <div class="chip">OCI</div>
              </p>
            </div>
          </li>
          <li>
            <div class="collapsible-header">OS</div>
            <div class="collapsible-body">
              <p>
                <div class="chip">Linux</div>
                <div class="chip">Microsoft</div>
              </p>
            </div>
          </li>
          <li>
            <div class="collapsible-header">Databases</div>
            <div class="collapsible-body">
              <p>
                <div class="chip">Oracle</div>
                <div class="chip">MySQL</div>
                <div class="chip">Microsoft SQL</div>
              </p>
            </div>
          </li>
          <li>
            <div class="collapsible-header">Servers</div>
            <div class="collapsible-body">
              <p>
                <div class="chip">Apache</div>
                <div class="chip">NGINX</div>
                <div class="chip">Microsoft</div>
              </p>
            </div>
          </li>
          <li>
            <div class="collapsible-header">Project Management</div>
            <div class="collapsible-body">
              <p>
                <div class="chip">JIRA</div>
                <div class="chip">Confluence</div>
                <div class="chip">Trello</div>
              </p>
            </div>
          </li>
          <li>
            <div class="collapsible-header">Other</div>
            <div class="collapsible-body">
              <p>
                <div class="chip">Chrome DevTools</div>
                <div class="chip">Firebug</div>
                <div class="chip">Vagrant</div>
                <div class="chip">BitBucket</div>
                <div class="chip">Git</div>
                <div class="chip">AMP</div>
                <div class="chip">WAVE Toolbar</div>
              </p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="parallax-container">
  <div class="container">
    <div class="row">
      <h4 class="center header light" style="margin-bottom:25%; margin-top:25%;">Would you like to know more?</h4>
    </div>
  </div>
  <div class="parallax responsive-img">
    <img src="{!! asset('parallax-template/issTimelapse6.jpg') !!}" alt="Unsplashed background img 2">
  </div>
</div>
<div class="container">
  <div class="section" id="contact">
    <div class="row">
      <div class="col s12 center">
        <h3><i class="mdi-content-send brown-text"></i></h3>
        <h3>Contact</h3>
        <h5 class="light flow-text">Let's team up.</h5>
        <h5 class="light flow-text">What can we do together?</h5>
        {{--<img src="{!! asset('parallax-template/calvin.jpg') !!}" alt="Unsplashed background img 2">--}}
      </div>
    </div>
  </div>
</div>
<footer class="page-footer teal">
  <div class="container">
    <div class="row center">
      <a href="mailto:nsbertanzetti@gmail.com" class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-fw fa-envelope"></i></a>
      <a href="https://www.linkedin.com/in/nickbertanzetti" target="_blank" class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-fw fa-linkedin"></i></a>
      <a href="https://github.com/burntspaghetti" target="_blank" class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-fw fa-git"></i></a>
      <a href="http://stackoverflow.com/users/3895839/thesingularity" target="_blank" class="btn-floating btn-large waves-effect waves-light red"><i class="fa fa-fw fa-stack-overflow"></i></a>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container center-align">
      <p>Don't worry be happy <i class="fa fa-fw fa-smile-o"></i></p>
    </div>
  </div>
</footer>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{!! asset('parallax-template/js/materialize.js') !!}"></script>
<script src="{!! asset('parallax-template/js/init.js') !!}"></script>

  <script>
    $( document ).ready(function() {
      Materialize.fadeInImage('#profilepic')
    });
  </script>

<script>
  var options = [
    {selector: '#staggered-row-1', offset: 200, callback: function() {
      Materialize.showStaggeredList("#staggered-row-1");
    } },
    {selector: '#staggered-row-2', offset: 200, callback: function() {
      Materialize.showStaggeredList("#staggered-row-2");
    } },
    {selector: '#staggered-row-3', offset: 200, callback: function() {
      Materialize.showStaggeredList("#staggered-row-3");
    } }
  ];
  Materialize.scrollFire(options);
</script>

  <script>
    $(document).ready(function(){
      // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
      $('.modal-trigger').leanModal();
    });

    $(document).ready(function(){
      $('.carousel').carousel();
    });
    $(document).ready(function(){
      $('.slider').slider({full_width: true});
    });
    $(document).ready(function(){
      $('.materialboxed').materialbox();
    });
  </script>
  
  <style>
    .btn-spacer{
      margin-bottom: 1em;
    }  
  </style>

</body>
</html>
