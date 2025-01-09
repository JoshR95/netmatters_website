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

            <?php include 'includes/layouts/header.php'; ?>

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

            <?php include 'includes/layouts/footer.php'; ?>
            
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
        
        <?php include 'includes/layouts/menu.php'; ?>

        <script src="./js/jquery-3.7.1.min.js"></script>
        <script src="./js/slick/slick.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="./js/main.js"></script>
    </body>
</html>