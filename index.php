<?php
require_once 'includes/database.php';

// get articles from database
$stmt = $pdo->query("SELECT * FROM news_articles ORDER BY  post_date DESC LIMIT 3");
$articles = $stmt-> fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
      	<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>Netmatters Homepage</title>

        <link rel="stylesheet" type="text/css" href="./js/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="./js/slick/slick-theme.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer">

        <link rel="stylesheet" href="./img/icomoon-main/style.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div id="body-container">
            <div class="header">
                <div class="inner-header">
                    <div class="container">
                        <div class="header-bar-container">
                            <div class="top-header">
                                <a href="#">
                                    <img class="header-netmatters" src="./img/f-logo.png" srcset="././img/f-logo.webp" alt="Netmatters Logo in black">
                                </a>
                                <span class="icon-phone_in_talk header-phone-icon"></span>
                                <div class="header-search-and-icons">
                                    <a href="#" class="large-screen-mouse">
                                        <span class="icon-mouse"></span>
                                        <span class="large-screen-mouse__text">SUPPORT</span>
                                    </a>
                                    <a href="#" class="large-screen-paperplane">
                                        <span class="icon-paperplane"></span>
                                        <span class="large-screen-paperplane__text">CONTACT</span>
                                    </a>
                                    <div class="large-screen-search-container">
                                        <input class="large-screen-search-bar" placeholder="Search...">
                                    </div>
                                    <button class="icon-search-big-btn">
                                        <span class="icon-search"></span>
                                    </button>
                                    <button class="hamburger-icon header" type="button">
                                        <span class="hamburger-line-container">
                                            <span class="hamburger-line"></span>
                                            <span class="hamburger-line"></span>
                                            <span class="hamburger-line"></span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="bottom-header">
                                <div class="small-screen-search-bar">
                                    <span>search...</span>
                                    <input class="small-screen-search-input">
                                    <span class="icon-search icon-search-small"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-header">
                    <div class="container">

                        <ul class="banner-dropdown">
                            <li class="banner-bespoke-software">
                                <a>
                                    <span class="icon-laptop banner-avatar"></span>
                                    <span class="banner-text-small">BESPOKE</span>
                                    <span class="banner-bar-text">SOFTWARE</span>
                                </a>
                                <div class="banner-inner-dropdown-container inner-bespoke-software">
                                    <div class="top-and-bottom-padding ">
                                        <div class="container">
                                            <div class="banner-dropdown-h1">
                                                <span>Our Bespoke Software Services</span>
                                            </div>
                                            <ul class="banner-inner-dropdown">
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-cogs banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Bespoke CRM</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-briefcase banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Business Automation</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-arrow-shuffle banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Software Integrations</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-mobile2 banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Mobile App Development</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-folder-open banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Bespoke Databases</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-transfer banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Sharepoint Development</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-download3 banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Operational Systems</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-people_alt banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Business Central Implementation</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-laptop1 banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Internet Of Things (IoT) Software</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-cloud banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Intranet Development</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-cloud-download banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Customer Portal Development</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-globe banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Reporting Hub</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-handshake-o banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>SAP S/4HANA Development</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="banner-it-support">
                                <a>
                                    <span class="icon-display banner-avatar"></span>
                                    <span class="banner-text-small">IT</span>
                                    <span class="banner-bar-text">SUPPORT</span>
                                </a>
                                <div class="banner-inner-dropdown-container inner-it-support">
                                    <div class="top-and-bottom-padding">
                                        <div class="container">
                                            <div class="banner-dropdown-h1">
                                                <span>Our IT Support Services</span>
                                            </div>
                                            <ul class="banner-inner-dropdown">
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-headphones banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Managed IT Support</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-briefcase banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Business IT Support</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-laptop1 banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Office 365 For Business</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-graduation-cap banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>IT Consultancy</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-cloud banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Cloud Service Provider</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-cabinet banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Data Backup & Disaster Recovery</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="banner-digital-marketing">
                                <a>
                                    <span class="icon-bar-graph banner-avatar"></span>
                                    <span class="banner-text-small">DIGITAL</span>
                                    <span class="banner-bar-text">MARKETING</span>
                                </a>
                                <div class="banner-inner-dropdown-container inner-digital-marketing">
                                    <div class="top-and-bottom-padding">
                                        <div class="container">
                                            <div class="banner-dropdown-h1">
                                                <span>Our Digital Marketing Services</span>
                                            </div>
                                            <ul class="banner-inner-dropdown">
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-search banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Search Engine Optimisation (SEO)</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-money banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Pay Per Click Advertisment (PPC)</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-arrow-up-right2 banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Conversion Rate Optimisation</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-folder-open banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Email Marketing</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-people_alt banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Social Media Marketing</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-pencil banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Content Marketing</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="banner-telecoms-services">
                                <a>
                                    <span class="icon-phone_in_talk banner-avatar"></span>
                                    <span class="banner-text-small">TELECOMS</span>
                                    <span class="banner-bar-text">SERVICES</span>
                                </a>
                                <div class="banner-inner-dropdown-container inner-telecoms-services">
                                    <div class="top-and-bottom-padding">
                                        <div class="container">
                                            <div class="banner-dropdown-h1">
                                                <span>Our Telecoms Services</span>
                                            </div>
                                            <ul class="banner-inner-dropdown">
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-ticket banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Business Mobile</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-phone banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Hosted VoIP Server</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-phone_forwarded banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Business VoIP Systems</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-meter banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Business Broadband</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-handshake-o banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Leased Line Provider</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-phone banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>3CX Systems</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="banner-web-design">
                                <a>
                                    <span class="icon-embed2 banner-avatar"></span>
                                    <span class="banner-text-small">WEB</span>
                                    <span class="banner-bar-text">DESIGN</span>
                                </a>
                                <div class="banner-inner-dropdown-container inner-web-design">
                                    <div class="top-and-bottom-padding">
                                        <div class="container">
                                            <div class="banner-dropdown-h1">
                                                <span>Our Web Design Services</span>
                                            </div>
                                            <ul class="banner-inner-dropdown">
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-pencil banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Bespoke Webiste Design</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-cart banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>eCommerce Website Design</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-laptop1 banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Pay Monthly Websites</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-bullhorn banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Branding & Design</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-mobile2 banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Mobile App Design</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-cloud banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Web Hosting</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="banner-cyber-security">
                                <a>
                                    <span class="icon-security banner-avatar"></span>
                                    <span class="banner-text-small">CYBER</span>
                                    <span class="banner-bar-text">SECURIRTY</span>
                                </a>
                                <div class="banner-inner-dropdown-container inner-cyber-security">
                                    <div class="top-and-bottom-padding">
                                        <div class="container">
                                            <div class="banner-dropdown-h1">
                                                <span>Our Cyber Secuirty Services</span>
                                            </div>
                                            <ul class="banner-inner-dropdown">
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-copy banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Cyber Security Assessment</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-clock banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Cyber Secuirty Managment</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-flask banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Cyber Penetration Testing</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-graduation-cap banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Cyber Essentials Certification</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-shield banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>PCI Compliance</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-locked banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Hacking Prevention</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="banner-developer-course">
                                <a>
                                    <span class="icon-study banner-avatar"></span>
                                    <span class="banner-text-small">DEVELOPER</span>
                                    <span class="banner-bar-text">COURSE</span>
                                </a>
                                <div class="banner-inner-dropdown-container inner-developer-course">
                                    <div class="top-and-bottom-padding">
                                        <div class="container">
                                            <div class="banner-dropdown-h1">
                                                <span>Our Developer Course Services</span>
                                            </div>
                                            <ul class="banner-inner-dropdown">
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-laptop1 banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Train For A Career In Tech</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-pencil banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Skills Bootcamp</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-help-with-circle banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Scion Scheme Questions</span></a>
                                                </li>
                                                <li class="banner-dropdown-item">
                                                    <span class="icon-handshake-o banner-avatar"></span>
                                                    <a class="banner-dropdown-a" href="#"><span>Scion Collaborators</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="banner">
                <div class="banner-container dark-overlay">
                    <div class="banner-slider">
                        <!-- Slide 1 -->
                        <div class="banner-slide">
                            <img class="banner-image slide-1-banner-image" src="./img/home-YLei.png" srcset="./img/home-YLei.webp" alt="netmatters building">
                            <div class="banner-title">
                                <div class="banner-text container">
                                    <h2>The East Of England's Leading Technology Company</h2>
                                    <p>
                                        Performance-driven digital and technology services
                                        <br>
                                        with complete transparency.
                                    </p>
                                    <a href="#"  class="banner-btn slide-1-btn">
                                        WHY CHOOSE US?
                                        <span class="icon-arrow-right2"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="banner-slide">
                            <img class="banner-image" src="./img/home-O67Y.jpg" srcset="./img/home-O67Y.webp" alt="netmatters staff">
                            <div class="banner-title">
                                <div class="banner-text container">
                                    <h2>Bespoke Software</h2>
                                    <p>
                                        Delivering expert bespoke software
                                        <br>
                                        solutions across a range of industries
                                    </p>
                                    <a href="#" class="banner-btn slide-2-btn">
                                        FIND OUT MORE
                                        <span class="icon-arrow-right2"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="banner-slide">
                            <img class="banner-image" src="./img/home-gay8.png" srcset="./img/home-gay8.webp" alt="person fixing computer">
                            <div class="banner-title">
                                <div class="banner-text container">
                                    <h2>IT Support</h2>
                                    <p>
                                        Fast and cost-effective IT support
                                        <br>
                                        services for your business.
                                    </p>
                                    <a href="#" class="banner-btn slide-3-btn">
                                        FIND OUT MORE
                                        <span class="icon-arrow-right2"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 4 -->
                        <div class="banner-slide">
                            <img class="banner-image" src="./img/home-6yTp.png" srcset="./img/home-6yTp.webp" alt="people doing a desk job">
                            <div class="banner-title">
                                <div class="banner-text container">
                                    <h2>Digital Marketing</h2>
                                    <p>
                                        Generating your new business through
                                        <br>
                                        results-driven marketing activites
                                    </p>
                                    <a href="#" class="banner-btn slide-4-btn">
                                        FIND OUT MORE
                                        <span class="icon-arrow-right2"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 5 -->
                        <div class="banner-slide">
                            <img class="banner-image" src="./img/home-J8Xx.png" srcset="./img/home-J8Xx.webp" alt="phone">
                            <div class="banner-title">
                                <div class="banner-text container">
                                    <h2>Telecoms Services</h2>
                                    <p>
                                        A new approach to connectivity, see
                                        <br>
                                        how we can help your business.
                                    </p>
                                    <a href="#" class="banner-btn slide-5-btn">
                                        FIND OUT MORE
                                        <span class="icon-arrow-right2"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 6 -->
                        <div class="banner-slide">
                            <img class="banner-image" src="./img/home-K0pn.jpg" srcset="./img/home-K0pn.webp" alt="person">
                            <div class="banner-title">
                                <div class="banner-text container">
                                    <h2>Web Design</h2>
                                    <p>
                                        For business looking to make a strong
                                        <br>
                                        and effective first impression
                                    </p>
                                    <a href="#" class="banner-btn slide-6-btn">
                                        FIND OUT MORE
                                        <span class="icon-arrow-right2"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 7 -->
                        <div class="banner-slide">
                            <img class="banner-image" src="./img/home-MSxH.png" srcset="./img/home-MSxH.webp" alt="cyber secuirty image">
                            <div class="banner-title">
                                <div class="banner-text container">
                                    <h2>Cyber Security</h2>
                                    <p>
                                        Keeping businesses and their customers
                                        <br>
                                        sensitive information protected
                                    </p>
                                    <a href="#" class="banner-btn slide-7-btn">
                                        FIND OUT MORE
                                        <span class="icon-arrow-right2"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-content">
                <div class="top-and-bottom-padding ">
                    <div class="container">
                        <div class ="services-header service-padding">
                            <h2 class="our-services-title"> Our Services</h2>
                            <a class="top-services-arrow">View Our Work <span class="icon-arrow-right2"></span></a>
                        </div>
                        <div class="services-section-wrapper">
                            <div class="services-section">
                                <div class="service-padding main-item">
                                    <a class="service-item bespoke-software">
                                        <span class="icon-laptop services-avatar"></span>
                                        <span class="service-item-header main-item">Bespoke software </span>
                                        <span class="service-item-text">Bespoke software solutions for all your business needs including integrations and reporting.</span>
                                        <div class="service-section-btn ">
                                            <span class="btn bespoke-software-btn">read more</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-padding main-item it-container">
                                    <a class="service-item it-support">
                                        <span class="icon-display services-avatar"></span>
                                        <span class="service-item-header">IT Support</span>
                                        <span class="service-item-text">Fully managed IT support and consultancy packages tailored to meet your exact business needs.
                                        </span>
                                        <div class="service-section-btn">
                                            <span class="btn it-support-btn">read more</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-padding main-item dm-container">
                                    <a class="service-item digital-marketing">
                                        <span class="icon-bar-graph services-avatar"></span>
                                        <span class="service-item-header">Digital Marketing</span>
                                        <span class="service-item-text">Driven brand awareness &amp; ROI through creative digital marketing campaigns.</span>
                                        <div class="service-section-btn">
                                            <span class="btn digital-marketing-btn">read more</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-padding secondary-item ts-container">
                                    <a class="service-item telecoms-services">
                                        <span class="icon-phone_in_talk services-avatar"></span>
                                        <span class="service-item-header">Telecoms Services</span>
                                        <span class="service-item-text">Business telephony solutions including mobile &amp; connectivity solutions.</span>
                                        <div class="service-section-btn">
                                            <span class="btn telecoms-services-btn">read more</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-padding secondary-item wd-container">
                                    <a class="service-item web-design">
                                        <span class="icon-embed2 services-avatar"></span>
                                        <span class="service-item-header">Web Design</span>
                                        <span class="service-item-text">User-centric design for businesses looking to make a lasting impression.</span>
                                        <div class="service-section-btn">
                                            <span class="btn web-design-btn">read more</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-padding secondary-item cs-container">
                                    <a class="service-item cyber-security">
                                        <span class="icon-security services-avatar"></span>
                                        <span class="service-item-header">Cyber Security</span>
                                        <span class="service-item-text">Prevention, testing, consultancy &amp; breach management services.</span>
                                        <div class="service-section-btn">
                                            <span class="btn cyber-security-btn">read more</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-padding secondary-item dt-container">
                                    <a class="service-item developer-training">
                                        <span class="icon-study services-avatar"></span>
                                        <span class="service-item-header">Developer Training</span>
                                        <span class="service-item-text">Web design &amp; software training courses designed to secure a job in tech.</span>
                                        <div class="service-section-btn">
                                            <span class="btn developer-training-btn">read more</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-services-bar overflow-hidden">
                        <div class="service-view-work">
                            <a><strong>View Our Work <span class="icon-arrow-right2"></span></strong></a>
                        </div>
                        <div class="our-work-examples owl-carousel owl-theme">
                            <div class="picture item">
                                <img class="colored-picture" src="./img/norfolk-carbon-charter.jpg" srcset="./img/norfolk-carbon-charter.webp" alt="">
                            </div>
                            <div class="picture item">
                                <img class="colored-picture" src="./img/PPC_logo.jpg" srcset="./img/PPC_logo.webp" alt="">
                            </div>
                            <div class="picture item">
                                <img class="colored-picture" src="./img/princess-royal-training.png" srcset="./img/princess-royal-training.webp" alt="">
                            </div>
                            <div class="picture item">
                                <img class="colored-picture" src="./img/future-50.jpg" srcset="./img/future-50.webp" alt="">
                            </div>
                            <div class="picture item">
                                <img class="colored-picture" src="./img/qms.png" srcset="./img/qms.webp" alt="">
                            </div>
                            <div class="picture item">
                                <img class="colored-picture" src="./img/iso_27001.png" srcset="./img/iso_27001.webp" alt="">
                            </div>
                            <div class="picture item">
                                <img class="colored-picture" src="./img/skills-of-tomorrow.jpg" srcset="./img/skills-of-tomorrow.webp" alt="">
                            </div>
                            <div class="picture item">
                                <img class="colored-picture" src="./img/cyber-essentials-colour.jpg" srcset="./img/cyber-essentials-colour.webp" alt="">
                            </div>
                            <div class="picture item">
                                <img class="colored-picture" src="./img/google-partner.jpg" srcset="./img/google-partner.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wtn-background">
                    <div class="about">
                        <div class="container">
                            <div class=" wtn-rows">
                                <div class="row-1">
                                    <h2 class="about-title"><strong>Welcome to Netmatters</strong></h2>
                                    <p><strong>Netmatters is a leading <a class="wtn-text" href="#">Bespoke Software</a>, 
                                    <a class="wtn-text" href="#">IT Support</a>, and <a class="wtn-text" href="#">Digital Marketing</a> 
                                    company based in the East of England with offices in; <a class="wtn-text" href="#">Cambridge</a>, 
                                    <a class="wtn-text" href="#">Wymondham</a>, and <a class="wtn-text" href="#">Great Yarmouth</a>.</strong></p>
                                    <p>We aren't tied into contracts with third-party providers, so you know that our recommendations for your business are based purely with one benefit in mind: to help improve your business with the most appropriate solutions.</p>
                                    <p>We pride ourselves on being an ethical business and have a unique business offering and cost model that ensures you get the most from our relationship in an upfront manner.</p>
                                    <div class="row-1-btn-div">
                                        <a href="#" class="btn main-buttons top-btn">
                                            why choose us? 
                                            <span class="icon-arrow-right2"></span>
                                        </a>
                                        <a href="#" class="btn main-buttons">
                                            our culture 
                                            <span class="icon-arrow-right2"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="row-2">
                                    <h2 class="about-title"><strong>What Our Clients Think</strong></h2>
                                    <div class="icon-star-container">
                                        <span class="icon-star-full"></span>
                                        <span class="icon-star-full"></span>
                                        <span class="icon-star-full"></span>
                                        <span class="icon-star-full"></span>
                                        <span class="icon-star-full"></span>
                                    </div>
                                    <p>
                                        <span class="client-quote">Netmatters stood out from the start. Great guys and very easy to work with. Both the build and digital marketing teams are clearly skilled -they know their stuff! They delivered a website to our (high!) 
                                        expectations and went over and above to ensure we were satisfied clients - and we are!
                                        </span>
                                    </p>
                                    <p>
                                        <span class="client-quote-author ">
                                            <span class="author-name">Eleanor Bishop, Head of Marketing - </span><a class="wtn-text" href="#">Ashcroft Partnership LLP</a>
                                        </span>
                                    </p>
                                    <div class="button-container">
                                        <a href="#" class="btn main-buttons btn-google">
                                            Google Reviews 
                                            <span class="icon-arrow-right2"></span>
                                        </a>
                                        <a href="#" class="btn main-buttons btn-trustpilot">
                                            TrustPilot Reviews 
                                            <span class="icon-arrow-right2"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="latest-news-block">
                    <div class="container">
                        <div class="heading-container">
                            <h2 class="about-title latest-news-about-title">Latest News</h2>
                            <span class="latest-news-h3">
                                <a class="latest-news-view-all" href="#">
                                    View All <strong><em><span class="icon-arrow-right2"></span></em></strong>
                                </a>
                            </span>
                        </div>

                        <div class="content-section">
                            <div class="article-list">
                                <div class="row">
                                    <?php foreach($articles as $article): ?>
                                        <div class="<?php echo htmlspecialchars($article['style_class']); ?> <?php echo ($article['style_class'] !== 'article-1' ? 'article-padding' : ''); ?>">
                                            <div class="img-container">
                                                <a class="news-link news-link-<?php echo ($article['style_class'] === 'article-1' ? 'one' : 'two'); ?>" href="#">
                                                    NEWS
                                                </a>
                                                <a href="#" class="article-link">
                                                    <img class="responsive-image" src="<?php echo htmlspecialchars($article['image_url']); ?>" alt="">
                                                    <div class="block">
                                                        <h3 class="<?php echo $article['style_class'] . '-h3'; ?>">
                                                            <a href="#"><?php echo htmlspecialchars($article['title']); ?></a>
                                                            <?php if($article['time_to_read']): ?>
                                                                <span class="time-to-read">- <?php echo htmlspecialchars($article['time_to_read']); ?></span>
                                                            <?php endif; ?>
                                                        </h3>
                                                        <p>
                                                            <?php echo htmlspecialchars($article['description']); ?>
                                                        </p>
                                                        <div class="btn btn-<?php echo $article['style_class']; ?>">
                                                            Read More
                                                        </div>
                                                        <div class="author">
                                                            <hr>
                                                            <div class="posted-by">
                                                                <div class="author-img">
                                                                    <img src="<?php echo htmlspecialchars($article['author_image_url']); ?>" alt="">
                                                                </div>
                                                                <div class="author-details">
                                                                    <strong>Posted by <?php echo htmlspecialchars($article['author_name']); ?></strong>
                                                                    <br>
                                                                    <p><?php echo date('jS F Y', strtotime($article['post_date'])); ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <!-- <div class="article-list">
                                <div class="row">
                                    <div class="article-1">
                                        <div class="img-container">
                                            <a class="news-link news-link-one" href="#">
                                                NEWS
                                            </a>
                                            <a href="#" class="article-link">
                                                <img class="responsive-image" src="./img/september-notables-2024-ZBOM.png" alt="">
                                                <div class="block">
                                                    <h3 class="article-1-h3">
                                                        September Notables 2024 - Celebrating Our Tea...
                                                    </h3>
                                                    <p>
                                                        September Notables 2024 Celebrating the achievements and dedication of our staff, at Netmatters, we...
                                                    </p>
                                                    <div class="btn btn-article-1">
                                                        Read More
                                                    </div>
                                                    <div class="author">
                                                        <hr>
                                                        <div class="posted-by">
                                                            <div class="author-img">
                                                                <img src="./img/netmatters-ltd-VXAv.png" alt="">
                                                            </div>
                                                            <div class="author-details">
                                                                <strong class="author-title">Posted by Netmatters</strong>
                                                                <br>
                                                                <p>10th October 2024</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="article-2 article-padding">
                                        <div class="img-container">
                                            <a class="news-link news-link-two" href="#">
                                                NEWS
                                            </a>
                                            <a href="#" class="article-link">
                                                <img class="responsive-image" src="./img/mark-reilly-rNAO.png" alt="">
                                                <div class="block">
                                                    <h3 class="article-2-h3">
                                                        Mark Reilly - Netmatters 5 Year Legend
                                                        <span class="time-to-read">- 4 MINUTE READ</span>
                                                    </h3>
                                                    <p>
                                                        Mark Reilly – Netmatters 5 Year Legend Today, we celebrate the brilliant accomplishments of Mark Rei...
                                                    </p>
                                                    <div class="btn btn-article-2">
                                                        Read More
                                                    </div>
                                                    <div class="author">
                                                        <hr>
                                                        <div class="posted-by">
                                                            <div class="author-img">
                                                                <img src="./img/netmatters-ltd-VXAv.png" alt="">
                                                            </div>
                                                            <div class="author-details">
                                                                <strong class="author-title">Posted by Netmatters</strong>
                                                                <br>
                                                                <p>16th September 2024</p>
                                                            </div>
                                                        </div>
                                                    </div>   
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="article-3 article-padding">
                                        <div class="img-container">
                                            <a class="news-link news-link-two" href="#">
                                                NEWS
                                            </a>
                                            <a href="#" class="article-link">
                                                <img class="responsive-image" src="./img/telemarketer-WU7A.png" alt="">
                                                <div class="block">
                                                    <h3 class="article-3-h3">
                                                        Telemarketer
                                                    </h3>
                                                    <p class="article-3-p">
                                                        Salary Range £25,000 - £26,000. Potential OTE at £6k -£8k Hours 40 hours per week, Monday – Friday....
                                                    </p>
                                                    <div class="btn btn-article-3">
                                                        Read More
                                                    </div>
                                                    <div class="author">
                                                        <hr>
                                                        <div class="posted-by">
                                                            <div class="author-img">
                                                                <img src="./img/rebecca-moore-1fh7.jpg" alt="A picture of rebecca moore">
                                                            </div>
                                                            <div class="author-details">
                                                                <strong class="author-title">Posted by Rebecca Moore</strong>
                                                                <br>
                                                                <p>12th September 2024</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="container view-all">
                    <a>View All<span class="icon-arrow-right2"></span></a>
                </div>
                <div class ="bottom-clients-bar">
                    <div class ="bottom-bar-images owl-carousel owl-theme">
                        <div class="picture-container item">
                            <div class="tooltip">
                                <h3>Black Swan Care Group</h3>
                                <p>Black Swan Care Group own and manage 21 high-quality care and residential homes with a focus on putting the needs of their residents first.</p>
                                <a href="#" class="tooltip-button orange-tooltip-button">VIEW OUR CASE STUDY <span class="icon-arrow-right2"></span></a>
                            </div>
                            <div class="picture">
                                <img class="colored-picture" src="./img/black_swan_logo.png" srcset="./img/black_swan_logo.webp" alt="black swan logo">
                            </div>
                        </div>
                        <div class="picture-container item">
                            <div class="tooltip">
                                <h3>Xupes</h3>
                            </div>
                            <div class="picture">
                                <img class="colored-picture" src="./img/xupes_logo.png" srcset="./img/xupes_logo.webp" alt="xupes logo">
                            </div>
                        </div>
                        <div class="picture-container item">
                            <div class="tooltip">
                                <h3>Beat</h3>
                                <p>The UK's eating disorder charity founded in 1989.</p>
                            </div>
                            <div class="picture">
                                <img class="colored-picture" src="./img/beat_logo.png" srcset="./img/beat_logo.webp" alt="beat logo">
                            </div>
                        </div>
                        <div class="picture-container item">
                            <div class="tooltip">
                                <h3>Survey Solutions</h3>
                            </div>
                            <div class="picture">
                                <img class="colored-picture" src="./img/survey_solutions_logo.png" srcset="./img/survey_solutions_logo.webp" alt="survey solutions logo">
                            </div>
                        </div>
                        <div class="picture-container item">
                            <div class="tooltip">
                                <h3>Girl Guiding Anglia</h3>
                                <p> Girl Guiding Anglia is part of Girlguiding, the UK's leading charity for girls and young women in the UK. </p>
                                <a href="#" class="tooltip-button blue-tooltip-button">VIEW OUR CASE STUDY <span class="icon-arrow-right2"></span></a>
                            </div>
                            <div class="picture">
                                <img class="colored-picture" src="./img/girl_guides_anglia_logo.png" srcset="./img/girl_guides_anglia_logo.webp" alt="girl guiding logo">
                            </div>
                        </div>
                        <div class="picture-container item">
                            <div class="tooltip">
                                <h3>Sweetzy</h3>
                                <p>Sweetzy are an online sweets retailer, based in Wymondham.</p>
                                <a href="#" class="tooltip-button green-tooltip-button">VIEW OUR CASE STUDY <span class="icon-arrow-right2"></span></a>
                            </div>
                            <div class="picture">
                                <img class="colored-picture" src="./img/sweetzy_logo.png" srcset="./img/sweetzy_logo.webp" alt="sweetzy logo">
                            </div>
                        </div>
                        <div class="picture-container item">
                            <div class="tooltip">
                                <h3>Howes Percival</h3>
                            </div>
                            <div class="picture">
                                <img class="colored-picture" src="./img/howespercivallogo.png" srcset="./img/howespercivallogo.webp" alt="howes percival logo">
                            </div>
                        </div>
                        <div class="picture-container item">
                            <div class="tooltip">
                                <h3>GDST</h3>
                                <p>
                                    The
                                    <a href="#">Girls' Day School Trust (GDST)</a>
                                    is the UK's leading family
                                    of 25 independent girls' schools.            
                                </p>
                                <a href="#" class="tooltip-button green-tooltip-button">VIEW OUR CASE STUDY <span class="icon-arrow-right2"></span></a>
                            </div>
                            <div class="picture">
                                <img class="colored-picture" src="./img/girls_day_school_trust_logob.png" srcset="./img/girls_day_school_trust_logob.webp" alt="girls day school trust logo">
                            </div>
                        </div>
                        <div class="picture-container item">
                            <div class="tooltip">
                                <h3>Ashcroft Partnership LLP</h3>
                                <p>Originally founded in 2006 as Ashcroft Anthony, they became Ashcroft Partnership LLP in 2020 and are one of the top chartered accountancy firms in Cambridge, advising entrepreneurs and families.</p>
                                <a href="#" class="tooltip-button">VIEW OUR CASE STUDY <span class="icon-arrow-right2"></span></a>
                            </div>
                            <div class="picture">
                                <img class="colored-picture" src="./img/ashcroftlogo_landscape_goldblack_DP60P-small.png" srcset="./img/ashcroftlogo_landscape_goldblack_DP60P-small.webp" alt="ashcroft logo">
                            </div>
                        </div>
                        <div class="picture-container item">
                            <div class="tooltip">
                                <h3>One Traveller</h3>
                                <p>
                                    <a href="#">One Traveller</a>
                                    , founded in 2007, is a leading provider of solo holidays for over 50s.
                                </p>
                                <a href="#" class="tooltip-button">VIEW OUR CASE STUDY <span class="icon-arrow-right2"></span></a>
                            </div>
                            <div class="picture">
                                <img class="colored-picture" src="./img/onetravellerlogo_white_figuire.png" srcset="./img/onetravellerlogo_white_figuire.webp" alt="one traveler logo">
                            </div>
                        </div>
                        <div class="picture-container item">
                            <div class="tooltip">
                                <h3>Searles Leisure Resort</h3>
                                <p>
                                    Searles Leisure Resort, on the beautiful North Norfolk coast, is an award-winning UK holiday
                                    resort for families.
                                </p>
                                <a href="#" class="tooltip-button green-tooltip-button">VIEW OUR CASE STUDY <span class="icon-arrow-right2"></span></a>
                            </div>
                            <div class="picture">
                                <img class="colored-picture" src="./img/searles_logo.jpg" srcset="./img/searles_logo.webp" alt="sweetzy logo">
                            </div>
                        </div>
                        <div class="picture-container item">
                            <div class="tooltip">
                                <h3>Busseys</h3>
                                <p>
                                    One of the UK's leading Ford dealerships.
                                </p>
                            </div>
                            <div class="picture">
                                <img class="colored-picture" src="./img/busseys_logo.png" srcset="./img/busseys_logo.webp" alt="sweetzy logo">
                            </div>
                        </div>
                        <div class="picture-container item">
                            <div class="tooltip">
                                <h3>Crane Garden Buildings</h3>
                                <p>
                                    Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in
                                    the UK.
                                </p>
                            </div>
                            <div class="picture">
                                <img class="colored-picture" src="./img/crane_logo.png" srcset="./img/crane_logo.webp" alt="sweetzy logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer>                
                <div class="container">
                    <div class="top-footer">
                        <div class="netmatters-footer-info">
                            <img class ="footer-main-logo" src="img/nm-logo-white-med.png" alt="Netmatters Logo in white">
                            <h4>FOLLOW US ON:</h4>
                            <div class="footer-follow-links">
                                <a class="facebook-btn" href="#">
                                    <span class="icon-facebook"></span>
                                </a>
                                <a class="linkedin-btn" href="#">
                                    <span class="icon-linkedin2"></span>
                                </a>
                                <a class="x-btn" href="#">
                                    <span class="icon-x"></span>
                                </a>
                                <a class="instagram-btn" href="#"> 
                                    <span class="icon-instagram"></span>
                                </a>
                            </div>
                        </div>
                        <div class="footer-row">
                            <div class="footer-menu">
                                <h4>About Netmatters</h4>
                                <ul class="footer-ul">
                                    <li><a class="bottom-anchor" href="#">Our Careers</a></li>
                                    <li><a class="bottom-anchor" href="#">Our Team</a></li>
                                    <li><a class="bottom-anchor" href="#">Contact Us</a></li>
                                    <li><a class="bottom-anchor" href="#">Privacy Policy</a></li>
                                    <li><a class="bottom-anchor" href="#">Cookie Policy</a></li>
                                    <li><a class="bottom-anchor" href="#">Data Retention & Disposal Policy</a></li>
                                    <li><a class="bottom-anchor" href="#">CCTV Policy</a></li>
                                    <li><a class="bottom-anchor" href="#">Enviromental Policy</a></li>
                                    <li><a class="bottom-anchor" href="#">Terms & Conditions</a></li>
                                </ul>
                            </div>
            
                            <div class="footer-menu">
                                <h4>Our Services</h4>
                                <ul class="footer-ul">
                                    <li><a class="bottom-anchor" href="#">Bespoke Software</a></li>
                                    <li><a class="bottom-anchor" href="#">It Support</a></li>
                                    <li><a class="bottom-anchor" href="#">Telecoms Services</a></li>
                                    <li><a class="bottom-anchor" href="#">Digital Marketing</a></li>
                                    <li><a class="bottom-anchor" href="#">Telecoms Services</a></li>
                                    <li><a class="bottom-anchor" href="#">Web Design</a></li>
                                    <li><a class="bottom-anchor" href="#">Cyber Security</a></li>
                                    <li><a class="bottom-anchor" href="#">Developer Training</a></li>
                                </ul>
                            </div>
            
                            <div class="footer-menu">
                                <h4>Our Industries</h4>
                                <ul class="footer-ul">
                                    <li><a class="bottom-anchor" href="#">Financial Services</a></li>
                                    <li><a class="bottom-anchor" href="#">Construction</a></li>
                                    <li><a class="bottom-anchor" href="#">Retail & E-Commerce</a></li>
                                    <li><a class="bottom-anchor" href="#">Non-Profits</a></li>
                                    <li><a class="bottom-anchor" href="#">SME's</a></li>
                                    <li><a class="bottom-anchor" href="#">Healthcare</a></li>
                                    <li><a class="bottom-anchor" href="#">Education & Training</a></li>
                                    <li><a class="bottom-anchor" href="#">Travel & Leisure</a></li>
                                </ul>
                            </div> 
            
                            <div class="footer-menu">
                                <h4>Locations</h4>
                                <ul class="footer-ul">
                                    <li><a class="bottom-anchor" href="#">Cambridge Office</a></li>
                                    <li><a class="bottom-anchor" href="#">Wymondham Office</a></li>
                                    <li><a class="bottom-anchor" href="#">Great Yarmouth Office</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <div class="bottom-footer">
                <div class="container">
                    <div class="bottom-footer-text">
                        <div>
                            &copy; Copyright Netmatters 2024
                        </div>
                        <div>
                            All rights reserved.
                        </div>
                        <a class="bottom-anchor" href="#"> - Sitemap</a> 
                    </div>
                </div>
            </div>
            <button class="sticky-help">
                <span class="icon-chat"></span>
            </button>
            <div class="sticky-consent">
                <button>Manage consent</button>
            </div>
        </div>
        <div class="cookie-popup">
            <div class=" cookie-popup-content">
                <div class=cookie-popup-header>
                    <h2>Cookies Policy</h2>
                </div>
                <div class="cookie-popup-body">
                    <p>
                        Our website uses cookies. This helps us provide you with a good experience on our website. To see what cookies we use and what they do, 
                        and to opt-in on non-essential cookies click "change settings". For a detailed explanation, click on "Privacy Policy" otherwise click "Accept Cookies"
                        to enter
                    </p>
                </div>
                <div class="cookie-popup-footer">
                    <div class="cookie-buttons">
                        <a class="btn change-settings"><span>CHANGE SETTINGS</span></a>
                        <a class="btn accept-cookies"><span>ACCEPT COOKIES</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar sidebar-hidden">
            <div class="mobile-sidebar">
                <ul class="mobile-services-section">
                    <li class="mobile-sidebar-menu-1">
                        <a href="#">CONTACT US</a>
                    </li>
                    <li class="mobile-sidebar-menu-2">
                        <a href="#" class="m-sidebar-anchor">
                            <span class="icon-laptop sidebar-icon"></span>
                            <p class="sidebar-title-small">BESPOKE</p>
                            <p class="sidebar-title">SOFTWARE</p>
                        </a>
                        <ul class="mobile-sub-menu">
                            <li class="msm-top-item side-bar-main-link">
                                <a>
                                    <p>BESPOKE CRM</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>BUSINESS AUTOMATION</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>SOFTWARE INTERGRATIONS</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>MOBILE APP DEVELOPMENT</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>BESPOKE DATABASES</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>SHARPOINT DEVELOPMENT</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>OPERTAIONAL SYSTEMS</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>BUSINESS CENTRAL IMPLEMENTATION</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>INTERNT OF THINGS (IOT) SOFTWARE</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>INTRANET DEVELOPMENT</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>CUSTOMER PORTAL DEVELOPMENT</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>REPORTING HUB</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>SAP S/4HANA MANAGMENT</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mobile-sidebar-menu-3">
                        <a class="m-sidebar-anchor">
                            <span class="icon-display sidebar-icon"></span>
                            <p class="sidebar-title-small">IT</p>
                            <p class="sidebar-title">SUPPORT</p>
                        </a>
                        <ul class="mobile-sub-menu">
                            <li class="msm-top-item">
                                <a>
                                    <p>MANAGED IT SUPPORT</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>BUSINESS IT SUPPORT</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>OFFICE 365 FOR BUSINESS</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>IT CONSULTANCY</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>CLOUD SERVICE PROVIDER</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>DATA BACKUP & DISASTER RECOVERY</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mobile-sidebar-menu-4">
                        <a class="m-sidebar-anchor">
                            <span class="icon-bar-graph sidebar-icon"></span>
                            <p class="sidebar-title-small">DIGITAL</p>
                            <p class="sidebar-title">MARKETING</p>
                        </a>
                        <ul class="mobile-sub-menu">
                            <li class="msm-top-item">
                                <a>
                                    <p>SEARCH ENGINE OPTIMISATION (SEO)</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>PAY PER CLICK ADVERTISING (PPC)</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>CONVERSION RATE OPTIMISATION (CRO)</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>EMAIL MARKETING</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>SOCIAL MEDIA MARKETING</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>CONTENT MARKETING</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mobile-sidebar-menu-5">
                        <a class="m-sidebar-anchor">
                            <span class="icon-phone_in_talk sidebar-icon"></span>
                            <p class="sidebar-title-small">TELECOMS</p>
                            <p class="sidebar-title">SERVICES</p>
                        </a>
                        <ul class="mobile-sub-menu">
                            <li class="msm-top-item">
                                <a>
                                    <p>BUSINESS MOBILE</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>HOSTED VOIP PROVIDER</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>BUSINESS VOIP SYSTEMS</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>BUSINESS BROADBAND</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>LEASED LINES PROVIDER</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>3CX SYSTEMS</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mobile-sidebar-menu-6">
                        <a class="m-sidebar-anchor">
                            <span class="icon-embed2 sidebar-icon"></span>
                            <p class="sidebar-title-small">WEB</p>
                            <p class="sidebar-title">DESIGN</p>
                        </a>
                        <ul class="mobile-sub-menu">
                            <li class="msm-top-item">
                                <a>
                                    <p>BESPOKE WEBSITE DESIGN</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>ECOMMERCE WEBSITE DESIGN</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>PAY MONTHLY WEBSITES</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>BRANDING & DESIGN</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>MOBILE APP DEVELOPMENT</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>WEB HOSTING</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mobile-sidebar-menu-7">
                        <a class="m-sidebar-anchor">
                            <span class="icon-security sidebar-icon"></span>
                            <p class="sidebar-title-small">CYBER</p>
                            <p class="sidebar-title">SECUIRTY</p>
                        </a>
                        <ul class="mobile-sub-menu">
                            <li class="msm-top-item">
                                <a>
                                    <p>CYBER SECURITY ASSESSMENT</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>CYBER SECURITY MANAGMENT</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>CYBER PENETRATING TESTING</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>CYBER ESSENTIALS CERTIFICATION</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>PCI COMPLIANCE</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>HACKING PREVENTION</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mobile-sidebar-menu-8">
                        <a class="m-sidebar-anchor">
                            <span class="icon-study sidebar-icon"></span>
                            <p class="sidebar-title-small">DEVELOPER</p>
                            <p class="sidebar-title">COURSE</p>
                        </a>
                        <ul class="mobile-sub-menu">
                            <li class="msm-top-item">
                                <a>
                                    <p>TRAIN FOR A CAREER IN TECH</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>SKILLS BOOTCAMP</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>SCION SCHEME FREQUENTLY ASKED QUESTIONS</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p>SCION COLLABORATIONS</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="mobile-second-section">
                    <li class="main-sidebar-item">
                        <a>
                            <p class="main-sidebar-item-secondary-title">OUR WORK</p>
                        </a>
                        <ul class="main-item-sub-menu">
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> CASE STUDIES</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> OUR DIGITAL MARKETING CLIENTS</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> OUR WEBSITE CLIENTS</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> OUR IT CLIENTS</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> OUR BESPOKE SOFTWARE CLIENTS</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> OUR TELECOMS CLIENTS</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="main-sidebar-item">
                        <a>
                            <p class="main-sidebar-item-secondary-title">OUR KNOWLEDGE</p>
                        </a>
                        <ul class="main-item-sub-menu">
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> TECHNOLOGIES</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> INDUSTRIES</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> NEWS</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> INSIGHTS</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="main-sidebar-item">
                        <a>
                            <p class="main-sidebar-item-secondary-title">TRAINING</p>
                        </a>
                        <ul class="main-item-sub-menu">
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> TRAIN FOR A CAREER IN TECH</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> SKILLS BOOTCAMP</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> SCS FREQUENTLY ASKED QUESTIONS</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> SCION COLLABORATIONS</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="main-sidebar-item">
                        <a>
                            <p class="main-sidebar-item-secondary-title">OUR COMPANY</p>
                        </a>
                        <ul class="main-item-sub-menu">
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> WHY CHOOSE US?</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> OUR CULTURE</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> OUR TEAM</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> OUR CAREERS</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> OUR BENEFITS</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> OUR ACCREDITATIONS</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="main-sidebar-item">
                        <a>
                            <p class="main-sidebar-item-secondary-title">CONTACT US</p>
                        </a>
                        <ul class="main-item-sub-menu">
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> CAMBRIDGE OFFICE</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> WYMONDHAM OFFICE</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> GREAT YARMOUTH OFFICE</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="main-sidebar-item">
                        <a>
                            <p class="main-sidebar-item-secondary-title">COVID RISK ASSESSMENT</p>
                        </a>
                    </li>
                    <li class="main-sidebar-item">
                        <a>
                            <p class="main-sidebar-item-secondary-title">SUPPORT</p>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="desktop-sidebar">
                <ul>
                    <li class="main-sidebar-item">
                        <a>
                            <p class="main-sidebar-item-secondary-title">OUR WORK</p>
                        </a>
                        <ul class="main-item-sub-menu">
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> CASE STUDIES</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> OUR DIGITAL MARKETING CLIENTS</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> OUR WEBSITE CLIENTS</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> OUR IT CLIENTS</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> OUR BESPOKE SOFTWARE CLIENTS</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> OUR TELECOMS CLIENTS</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="main-sidebar-item">
                        <a>
                            <p class="main-sidebar-item-secondary-title">OUR KNOWLEDGE</p>
                        </a>
                        <ul class="main-item-sub-menu">
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> TECHNOLOGIES</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> INDUSTRIES</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> NEWS</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> INSIGHTS</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="main-sidebar-item">
                        <a>
                            <p class="main-sidebar-item-secondary-title">TRAINING</p>
                        </a>
                        <ul class="main-item-sub-menu">
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> TRAIN FOR A CAREER IN TECH</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> SKILLS BOOTCAMP</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> SCS FREQUENTLY ASKED QUESTIONS</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> SCION COLLABORATIONS</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="main-sidebar-item">
                        <a>
                            <p class="main-sidebar-item-secondary-title">OUR COMPANY</p>
                        </a>
                        <ul class="main-item-sub-menu">
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> WHY CHOOSE US?</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> OUR CULTURE</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> OUR TEAM</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> OUR CAREERS</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> OUR BENEFITS</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> OUR ACCREDITATIONS</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="main-sidebar-item">
                        <a>
                            <p class="main-sidebar-item-secondary-title">CONTACT US</p>
                        </a>
                        <ul class="main-item-sub-menu">
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> CAMBRIDGE OFFICE</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> WYMONDHAM OFFICE</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <p><span class="icon-forward3"></span> GREAT YARMOUTH OFFICE</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="main-sidebar-item">
                        <a>
                            <p class="main-sidebar-item-secondary-title">COVID RISK ASSESSMENT</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <script src="./js/jquery-3.7.1.min.js"></script>
        <script src="./js/slick/slick.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="./js/main.js"></script>
    </body>
</html>