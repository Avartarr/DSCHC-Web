<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>DSCHC - Health Insurance</title>
   <!-- Favicon Icon -->
   <link rel="shortcut icon" href="{{ asset('images/LGO.png') }}">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
   <!-- LOADING FONTS AND ICONS -->
   <link rel="stylesheet" type="text/css" href="{{ asset('rev/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('rev/fonts/font-awesome/css/font-awesome.css') }}">
   <!-- REVOLUTION STYLE SHEETS -->
   <link rel="stylesheet" type="text/css" href="{{ asset('rev/css/rs6.css') }}">
   <!-- Owl Carousel CSS -->
   <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
   <!-- Progressbar CSS -->
   <link rel="stylesheet" href="{{ asset('css/progressbar.css') }}">
   <!-- Animation CSS -->
   <link rel="stylesheet" href="{{ asset('css/animations.min.css') }}">
   <!-- Magnefic Popup CSS -->
   <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}">
   <!-- Icons CSS -->
   <link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/all.min.css') }}">
   <link rel="stylesheet" href="{{ asset('fonts/flaticon/flaticon.css') }}">
   <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
   <link rel="stylesheet" href="{{ asset('fonts/themify-icons/themify-icons.css') }}">
   <!--  Style CSS -->
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   <!--  Responsive CSS -->
   <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<!--loading start-->
<div id="pq-loading">
    <div id="pq-loading-center">
       <img src="{{ asset('images/LGO.png') }}" class="img-fluid" alt="loading" style="height: 300px; width: 300px;">
    </div>
 </div>
 <!--loading End-->

<header id="pq-header" class="pq-header-style-3 pq-has-sticky ">
    <div class="pq-top-header" style="background-color: #498fce;">
       <div class="container">
          <div class="row flex-row-reverse">
             <div class="col-md-6 text-right">
                <div class="pq-header-social text-right">
                   <ul>
                      <li><a href="https://www.facebook.com/DeltaStateCHC"><i class="fab fa-facebook-f"></i></a></li>

                      <li><a href="https://www.instagram.com/deltastatechc"><i class="fab fa-instagram"></i></a></li>
                      <li><a href="https://www.twitter.com/DeltaStateCHC"><i class="fab fa-twitter"></i></a></li>
                   </ul>
                </div>
             </div>
             <div class="col-md-6">
                <div class="pq-header-contact ">
                   <ul>
                      <li>
                         <a href="tel:+2349062739020"><i class="fas fa-phone"></i>
                            <span> +234-906-273-9020</span>
                         </a>
                      </li>

                   </ul>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="pq-bottom-header" >
       <div class="container" >
          <div class="row">
             <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                   <a class="navbar-brand" href="{{ route('Dschc') }}">
                      <img class="img-fluid logo" src="{{ asset('images/logo.png') }}" alt="DSCHC">


                   </a>

                   <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <div class="pq-menu-contain">
                         <div class="pq-menu-contain">
                            <ul id="pq-main-menu" class="navbar-nav ml-auto">

                               <li class="menu-item current-menu-item">
                                  <a href="#obj">Objectives</a>
                               </li>
                               <li class="menu-item current-menu-item">
                                  <a href="#key">Keypoints</a>
                               <li class="menu-item current-menu-item">
                                  <a href="{{ asset('images/DSCHC Accredited Healthcare Facilities.pdf') }}">Accredited Facilities</a>
                               </li>

                               </li>
                               <li class="menu-item current-menu-item">
                                  <a href="#gal">Gallery</a>
                               </li>
                               <li class="menu-item current-menu-item">
                                  <a href="{{ route('blog') }}">Blog</a>

                               </li>
                               <li class="menu-item current-menu-item">
                                <a href="#">Downloads</a><i
                                      class="fa fa-chevron-down pq-submenu-icon"></i>
                                <ul class="sub-menu">
                                      <li class="menu-item "><a
                                                  href="{{ asset('images/DSCHC_LAW.pdf') }}">DSCHC
                                                  law
                                            </a></li>
                                      <li class="menu-item "><a
                                                  href="{{ asset('images/Baseline_Assesmment_Report.pdf') }}">Baseline
                                                  Assessment Report </a>
                                      </li>
                                      <li class="menu-item"><a
                                                  href="{{ asset('images/DSCHS-Operational-Guidelines.pdf') }}">Operational
                                                  Guidlines</a>
                                      </li>
                                      <li class="menu-item"><a
                                                  href="{{ asset('images/Benefit Package.pdf') }}">Benefit
                                                  Package
                                                  Services</a></li>


                                      <li class="menu-item "><a
                                                  href="{{ asset('images/DSCHC Privacy Policy.pdf') }}">Privacy
                                                  Notice</a>
                                      </li>

                                </ul>
                          </li>
                               <li class="menu-item current-menu-item">
                                  <a href="{{ route('healthplan') }}">Health Plans</a></i><i
                                     class="fa fa-chevron-down pq-submenu-icon"></i>
                                  <ul class="sub-menu">
                                     <li class="menu-item-has-children">
                                        <a href="{{ route('healthplan') }}">Equity Health Plan</a></i>

                                     </li>
                                     <li class="menu-item-has-children">
                                        <a href="{{ route('healthplan') }}">Formal Health Plan</a></i>

                                     </li>
                                     <li class="menu-item-has-children">
                                        <a href="{{ route('healthplan') }}">Informal Health Plan</a></i>

                                     </li>
                                     <li class="menu-item">
                                        <a href="{{ route('healthplan') }}">Private Health Plan</a>
                                     </li>
                                  </ul>
                               </li>


                            </ul>
                         </div>
                      </div>
                   </div>

                   <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                      aria-expanded="false" aria-label="Toggle navigation">
                      <i class="fas fa-bars"></i>
                   </button>
                </nav>
             </div>
          </div>
       </div>
    </div>
 </header>


 @yield('content')

 <footer id="pq-footer">
    <div class="pq-footer-style-1">
       <div class="pq-subscribe align-items-center">
          <div class="container">
             <div class="row align-items-center">
                <div class="col-lg-12">
                   <div class="pq-subscribe-bg">
                      <div class="row align-items-center">

                         <div class="pq-subscribe-block"> <img src="{{ asset('images/LGO.png') }}" class="pq-subscribe-img img-fluid"
                               alt="medicate-subscribe-image" style="height: 100px; width: 100px;">
                            <div class="pq-subscribe-details">
                               <h5>REGISTER INTO THE DELTA STATE CONTRIBUTORY HEALTH SCHEME</h5>
                               <p>To register into the informal health plan, an individual is expected to pay a
                                  premium contribution of ₦7,000 (seven thousand Naira only) for a period of one year.
                               </p>
                            </div>
                         </div>



                         {{-- <script
                         type="text/javascript"
                         src="https://d3mkw6s8thqya7.cloudfront.net/integration-plugin.js"
                         id="aisensy-wa-widget"
                         widget-id="8UjAdQ"
                       >
                       </script> --}}

                       <a href="https:/wa.me/2349077760121"  target="_blank" class="whatsapp_float"
                       ><i class="fa-brands fa-whatsapp  fa-spin whatsapp-icon" ></i></a>

                       {{-- <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-9fb9ec3c-e753-4775-b039-6bc7862118bc"></div> --}}


{{-- <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-116cbea8-2519-41f9-812f-97326f3ad7f7"></div> --}}
                    </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="pq-footer-top">
          <div class="container" id="con">
             <h5 class="text-center" style="color: white;">Contact Us</h5>
             <div class="row">
                <div class="col-xl-3 col-md-6">
                   <div class="pq-footer-block">
                      <img src="{{ asset('images/LGO.png') }}" class="pq-footer-logo img-fluid" alt="medicate-footer-logo">
                      <p>You can register for the Scheme at:
                         The DSCHC Head Office at No. 10 DBS Road Asaba.
                         The DSCHC Liaison Offices at the 25 LGA Headquarters. Or from:
                         The Branded DSCHC Field Registration Agents,
                         Your Android Mobile Phone using the Google Store App “DSCHC”. <a
                            href="https://play.google.com/store/apps/details?id=the.heal.app"> Click here to download
                         </a>
                      </p>

                      <div class="pq-footer-social">

                         <ul>
                            <li><a href="https://www.facebook.com/DeltaStateCHC"><i class="fab fa-facebook-f"></i></a>
                            </li>

                            <li><a href="https://www.instagram.com/deltastatechc"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li><a href="https://www.twitter.com/DeltaStateCHC"><i class="fab fa-twitter"></i></a>
                            </li>
                         </ul>
                      </div>
                   </div>
                </div>

                <div class="col-xl-6  col-md-12" style="padding: 80px;">
                   <div class="pq-footer-block">
                      <form action="">
                         <div class="form-group">
                            <label for="Name">Name:</label>
                            <input type="text">
                         </div>
                         <div class="form-group">
                            <label for="Email">Email:</label>
                            <input type="text">
                         </div>
                         <div class="form-group">
                            <label for="Subject">Subject:</label>
                            <input type="text">
                         </div>
                         <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                         </div>
                         <button style="color: #2490eb;">Send Message</button>
                      </form>

                   </div>
                </div>
                <div class="col-xl-3  col-md-6">
                   <div class="pq-footer-block">
                      <!-- <h4 class="footer-title">Contact Us</h4> -->
                      <div class="row">
                         <div class="col-sm-12">
                            <ul class="pq-contact">
                               <li>
                                  <i class="fas fa-phone"></i>
                                  <ul>
                                     <a href="tel:09062739110"> 09062739110</a><br>
                                     <a href="tel:09062739020">09062739020</a> <br>
                                     <a href="tel:09062739009">09062739009</a> <br>
                                     <a href="tel:09062739050"> 09062739050</a><br>
                                     <a href="tel:09062739040">09062739040</a><br>
                                     <a href="tel:09062739016">09062739016</a><br>
                                     <a href="tel:09062739019">09062739019</a><br>
                                  </ul>
                               </li>
                               </p>

                               <li> <a href="mailto:dschc.org.ng"><i class="fas fa-envelope"></i><span><span
                                           class="__cf_email__"
                                           data-cfemail="7910171f1639091c181a1c1f0c150d111c141c0a571a1614">info@dschc.org.ng</span></span></a>
                               </li>
                               <li> <i class="fas fa-map-marker"></i> <span>
                                     Delta State Contributory Health Commission,
                                     Governor's Office, 10 DBS Road Asaba, Delta State.</span> </li>
                            </ul>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="pq-copyright-footer">
          <div class="container">
             <div class="row">
                <div class="col-md-12 text-center "> <span class="pq-copyright"> Copyright 2022 DSCHC All Rights
                      Reserved</span> </div>
             </div>
          </div>
       </div>
    </div>
 </footer>

 <!--Footer End-->

 <!--Back To Top start-->
 <div id="back-to-top">
    <a class="topbtn" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
 </div>
 <!--Back To Top End-->
 <!--jquery js-->
 <script data-cfasync="false" src="{{ asset('../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
 <script src="{{ asset('js/jquery.min.js') }}"></script>
 <!--bootstrap js-->
 <script src="{{ asset('js/bootstrap.min.js') }}"></script>
 <!--owl-carousal-->
 <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
 <!--progress-bar js-->
 <script src="{{ asset('js/progressbar.js') }}"></script>
 <!--isotope js-->
 <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
 <!--countTo js-->
 <script src="{{ asset('js/jquery.countTo.min.js') }}"></script>
 <!--Maginfic-Popup js-->
 <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
 <!-- Animation JS -->
 <script src="{{ asset('js/wow.min.js') }}"></script>
 <!-- Rev-Slider -->
 <script src="{{ asset('rev/js/rbtools.min.js') }}"></script>
 <script src="{{ asset('rev/js/rs6.min.js') }}"></script>
 <script src="{{ asset('js/rev-custom.js') }}"></script>
 <!--custom js-->
 <script src="{{ asset('js/custom.js') }}"></script>
</body>




</html>
