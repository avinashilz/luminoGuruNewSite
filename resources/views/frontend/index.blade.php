@extends('frontend.layouts.app')

@section('content')
     @include('frontend.includes.home-slider')
     <section id="cta-section" class="cta-section section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-header">What We Do best</span>
                    <div class="border"></div>
                    <h2>Being a favorite brand is more <br>valuable than just being a Famous one</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor incididun ut labore et dolore. Perspiciatis unde omnis <br> iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                </div> <!-- section-title -->

                <div class="row">
                    <div class="col-sm-4">
                        <div class="cta-wrapper">
                            <img src="img/frontend/cta/1.png" alt="">
                            <h3>Brand Identity</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                            <a href="#" class="open-link open-link-one pull-right"><i class="fa fa-plus" aria-hidden="true"></i></a>

                            <div class="hover-content hover-content-one">
                                <img src="img/frontend/cta/2.png" alt="">
                                <h3>Brand Identity</h3>

                                <ul class="option">
                                    <li><a href="service-ten.html">Email Marketing</a></li>
                                    <li><a href="service-eleven.html">Social Media Marketing</a></li>
                                    <li><a href="service-twelve.html">Display Marketing</a></li>
                                    <li><a href="service-ten.html">Email Marketing</a></li>
                                    <li><a href="service-eleven.html">Social Media Marketing</a></li>
                                    <li><a href="service-twelve.html">Display Marketing</a></li>
                                </ul>

                                <a href="#" class="close-link close-link-one pull-right"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="cta-wrapper">
                            <img src="img/frontend/cta/1.png" alt="">
                            <h3>Design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                            <a href="#" class="open-link open-link-two pull-right"><i class="fa fa-plus" aria-hidden="true"></i></a>

                            <div class="hover-content hover-content-two">
                                <img src="img/frontend/cta/2.png" alt="">
                                <h3>Design</h3>

                                <ul class="option">
                                    <li><a href="service-one.html">App Design </a></li>
                                    <li><a href="service-two.html">Web Design</a></li>
                                    <li><a href="service-three.html">Product Design</a></li>
                                    <li><a href="service-four.html">Project Mockup</a></li>
                                    <li><a href="service-five.html">Graphics Design</a></li>
                                    <li><a href="service-six.html">Video Presentation</a></li>
                                </ul>

                                <a href="#" class="close-link close-link-two pull-right"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="cta-wrapper">
                            <img src="img/frontend/cta/3.png" alt="">
                            <h3>Development</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                            <a href="#" class="open-link open-link-three pull-right"><i class="fa fa-plus" aria-hidden="true"></i></a>

                            <div class="hover-content hover-content-three">
                                <img src="img/frontend/cta/2.png" alt="">
                                <h3>Development</h3>

                                <ul class="option">
                                    <li><a href="service-seven.html">Ecommerce</a></li>
                                    <li><a href="service-eight.html">Mobile App</a></li>
                                    <li><a href="service-nine.html">Content Management systeam</a></li>
                                    <li><a href="service-seven.html">Ecommerce</a></li>
                                    <li><a href="service-eight.html">Mobile App</a></li>
                                    <li><a href="service-nine.html">Content Management systeam</a></li>
                                </ul>

                                <a href="#" class="close-link close-link-three pull-right"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- cta-section -->



        <section class="creative-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="caption">
                            <img src="img/frontend/creative/1.jpg" alt="">

                            <div class="content">
                                <h4>RIPS SEWED, BRAND <br> LOVE REAPED</h4>
                                <span class="small">Reebok Inc</span>

                                <button class="btn btn-primary pull-right"><a href="single-case.html">View Case Study <i class="fa fa-angle-right" aria-hidden="true"></i></a></button>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="caption">
                            <img src="img/frontend/creative/2.jpg" alt="">

                            <div class="content">
                                <h4>HITTING THE MARK <br> FROM THE STAR</h4>
                                <span class="small">Reebok Inc</span>

                                <button class="btn btn-primary pull-right"><a href="single-case.html">View Case Study <i class="fa fa-angle-right" aria-hidden="true"></i></a></button>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="caption">
                            <img src="img/frontend/creative/1.jpg" alt="">

                            <div class="content">
                                <h4>RIPS SEWED, BRAND <br> LOVE REAPED</h4>
                                <span class="small">Reebok Inc</span>

                                <button class="btn btn-primary pull-right"><a href="single-case.html">View Case Study <i class="fa fa-angle-right" aria-hidden="true"></i></a></button>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="caption">
                            <img src="img/frontend/creative/2.jpg" alt="">

                            <div class="content">
                                <h4>HITTING THE MARK <br> FROM THE STAR</h4>
                                <span class="small">Reebok Inc</span>

                                <button class="btn btn-primary pull-right"><a href="single-case.html">View Case Study <i class="fa fa-angle-right" aria-hidden="true"></i></a></button>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="caption">
                            <img src="img/frontend/creative/1.jpg" alt="">

                            <div class="content">
                                <h4>RIPS SEWED, BRAND <br> LOVE REAPED</h4>
                                <span class="small">Reebok Inc</span>

                                <button class="btn btn-primary pull-right"><a href="single-case.html">View Case Study <i class="fa fa-angle-right" aria-hidden="true"></i></a></button>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="caption">
                            <img src="img/frontend/creative/2.jpg" alt="">

                            <div class="content">
                                <h4>HITTING THE MARK <br> FROM THE STAR</h4>
                                <span class="small">Reebok Inc</span>

                                <button class="btn btn-primary pull-right"><a href="single-case.html">View Case Study <i class="fa fa-angle-right" aria-hidden="true"></i></a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
            </div>
        </section> <!-- creative-slider -->



        <section class="operation-section section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-header">Our Approach</span>
                    <div class="border"></div>
                    <h2>Making Infamous Brands People’s <br> Favorite Brand</h2>
                </div> <!-- section-title -->

                <div class="operation-wrapper">
                    <div class="row">
                        <div class="col-md-4">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active wow fadeInDown"><a href="#tab-one" role="tab" data-toggle="tab">Project Planning</a></li>

                                <li role="presentation" class="wow fadeInDown" data-wow-delay="0.1s" ><a href="#tab-two" role="tab" data-toggle="tab">Development Cycling</a></li>

                                <li role="presentation" class="wow fadeInDown" data-wow-delay="0.2s"><a href="#tab-three" role="tab" data-toggle="tab">Investment Analysis</a></li>

                                <li role="presentation" class="wow fadeInDown" data-wow-delay="0.3s"><a href="#tab-four" role="tab" data-toggle="tab">Cost Calculation</a></li>

                                <li role="presentation" class="wow fadeInDown" data-wow-delay="0.4s"><a href="#tab-five" role="tab" data-toggle="tab">Client Survey</a></li>
                            </ul>
                        </div>

                        <div class="col-md-8">
                            <div class="tab-content wow fadeInRight">
                                <div role="tabpanel" class="tab-pane fade in active" id="tab-one">
                                    <div class="wrapper-content">
                                        <h3>Project Planning</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lau dantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>

                                        <ul class="list-detail">
                                            <li><i class="fa fa-eercast" aria-hidden="true"></i> Et quasi architecto beatae vitae.</li>

                                            <li><i class="fa fa-eercast" aria-hidden="true"></i> Dicta sunt explicabo.</li>

                                            <li><i class="fa fa-eercast" aria-hidden="true"></i> Nemo enim ipsam voluptatem quia voluptas.</li>
                                        </ul>
                                    </div>
                                </div> <!-- tab-one -->

                                <div role="tabpanel" class="tab-pane fade" id="tab-two">
                                    <div class="wrapper-content">
                                        <h3>Development Cycling</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lau dantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>

                                        <ul class="list-detail">
                                            <li><i class="fa fa-eercast" aria-hidden="true"></i> Et quasi architecto beatae vitae.</li>

                                            <li><i class="fa fa-eercast" aria-hidden="true"></i> Dicta sunt explicabo.</li>

                                            <li><i class="fa fa-eercast" aria-hidden="true"></i> Nemo enim ipsam voluptatem quia voluptas.</li>

                                            <li><i class="fa fa-eercast" aria-hidden="true"></i> Sit aspernatur aut odit aut fugit.</li>
                                        </ul>
                                    </div>
                                </div> <!-- tab-two -->

                                <div role="tabpanel" class="tab-pane fade" id="tab-three">
                                    <div class="wrapper-content">
                                        <h3>Investment Analysis</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lau dantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>

                                        <ul class="list-detail">
                                            <li><i class="fa fa-eercast" aria-hidden="true"></i> Et quasi architecto beatae vitae.</li>

                                            <li><i class="fa fa-eercast" aria-hidden="true"></i> Dicta sunt explicabo.</li>

                                            <li><i class="fa fa-eercast" aria-hidden="true"></i> Nemo enim ipsam voluptatem quia voluptas.</li>

                                            <li><i class="fa fa-eercast" aria-hidden="true"></i> Sit aspernatur aut odit aut fugit.</li>
                                        </ul>
                                    </div>
                                </div> <!-- tab-three -->

                                <div role="tabpanel" class="tab-pane fade" id="tab-four">
                                    <div class="wrapper-content">
                                        <h3>Cost Calculation</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lau dantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>

                                        <ul class="list-detail">
                                            <li><i class="fa fa-eercast" aria-hidden="true"></i> Et quasi architecto beatae vitae.</li>

                                            <li><i class="fa fa-eercast" aria-hidden="true"></i> Dicta sunt explicabo.</li>

                                            <li><i class="fa fa-eercast" aria-hidden="true"></i> Nemo enim ipsam voluptatem quia voluptas.</li>

                                            <li><i class="fa fa-eercast" aria-hidden="true"></i> Sit aspernatur aut odit aut fugit.</li>
                                        </ul>
                                    </div>
                                </div> <!-- tab-three -->

                                <div role="tabpanel" class="tab-pane fade" id="tab-five">
                                    <div class="wrapper-content">
                                        <h3>Client Survey</h3>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lau dantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>

                                        <ul class="list-detail">
                                            <li><i class="fa fa-eercast" aria-hidden="true"></i> Et quasi architecto beatae vitae.</li>

                                            <li><i class="fa fa-eercast" aria-hidden="true"></i> Dicta sunt explicabo.</li>

                                            <li><i class="fa fa-eercast" aria-hidden="true"></i> Nemo enim ipsam voluptatem quia voluptas.</li>

                                            <li><i class="fa fa-eercast" aria-hidden="true"></i> Sit aspernatur aut odit aut fugit.</li>
                                        </ul>
                                    </div>
                                </div> <!-- tab-three -->
                            </div>
                        </div>
                    </div>
                </div> <!-- operation-wrapper -->
            </div>
        </section> <!-- operation-section -->



        <section class="video-section">
            <div class="container text-center">
                <div id="lightBox-2" class="video-icon wow zoomIn">
                    <a href="http://youtu.be/XbmmI2OiMk0" data-poptrox="youtube,800x480"><i class="fa fa-play" aria-hidden="true"></i></a>
                </div>

                <h3>Are you a dreamer?</h3>

                <ul>
                    <li><a href="#">Connect</a></li>
                    <li><a href="#">Achieve</a></li>
                    <li><a href="#">Inspire</a></li>
                </ul>
            </div>
        </section> <!-- video-section -->



        <section class="project-section section-padding">
            <div class="container text-center">
                <div class="section-title">
                    <h2>Recent Projects</h2>
                </div> <!-- section-title -->

                <div class="portfolio gallery-grid">
                    <ul class="portfolio-sorting gallery-button list-inline">
                        <li><a href="#" data-group="all" class="filter-btn active">All</a></li>
                        <li><a class="filter-btn" href="#" data-group="people">Design</a></li>
                        <li><a class="filter-btn" href="#" data-group="simpsons">Market</a></li>
                        <li><a class="filter-btn" href="#" data-group="futurama">Developement</a></li>
                        <li><a class="filter-btn" href="#" data-group="photography">Photography</a></li>
                    </ul> <!--end portfolio sorting -->

                    <div class="row">
                        <div id="lightBox" class="gallery-wrapper text-left">
                            <ul class="portfolio-items list-unstyled" id="grid">
                                <li class="col-sm-4" data-groups='["simpsons"]'>
                                    <figure class="portfolio-item">
                                        <div class="gallery-caption">
                                            <img src="img/frontend/project/5.jpg" alt="">

                                            <div class="hover-view">
                                                <a href="img/frontend/project/5.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>

                                        <div class="content">
                                            <h5>Travel Marketing</h5>
                                            <span class="small">Boost your brand</span>
                                        </div>
                                    </figure>
                                </li>

                                <li class="col-sm-4" data-groups='["people"]'>
                                    <figure class="portfolio-item">
                                        <div class="gallery-caption">
                                            <img src="img/frontend/project/2.jpg" alt="">

                                            <div class="hover-view">
                                                <a href="img/frontend/project/2.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>

                                        <div class="content">
                                            <h5>Strategic Planning</h5>
                                            <span class="small">Shoot your target</span>
                                        </div>
                                    </figure>
                                </li>

                                <li class="col-sm-4" data-groups='["futurama"]'>
                                    <figure class="portfolio-item">
                                        <div class="gallery-caption">
                                            <img src="img/frontend/project/4.jpg" alt="">

                                            <div class="hover-view">
                                                <a href="img/frontend/project/4.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>

                                        <div class="content">
                                            <h5>Tourism Development</h5>
                                            <span class="small">Upgrade the entity</span>
                                        </div>
                                    </figure>
                                </li>

                                <li class="col-sm-4" data-groups='["futurama"]'>
                                    <figure class="portfolio-item">
                                        <div class="gallery-caption">
                                            <img src="img/frontend/project/3.jpg" alt="">

                                            <div class="hover-view">
                                                <a href="img/frontend/project/3.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>

                                        <div class="content">
                                            <h5>Photography</h5>
                                            <span class="small">Boost your brand</span>
                                        </div>
                                    </figure>
                                </li>

                                <li class="col-sm-4" data-groups='["simpsons"]'>
                                    <figure class="portfolio-item">
                                        <div class="gallery-caption">
                                            <img src="img/frontend/project/1.jpg" alt="">

                                            <div class="hover-view">
                                                <a href="img/frontend/project/1.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>

                                        <div class="content">
                                            <h5>Market Research</h5>
                                            <span class="small">Shoot your target</span>
                                        </div>
                                    </figure>
                                </li>

                                <li class="col-sm-4" data-groups='["people" , "photography"]'>
                                    <figure class="portfolio-item">
                                        <div class="gallery-caption">
                                            <img src="img/frontend/project/6.jpg" alt="">

                                            <div class="hover-view">
                                                <a href="img/frontend/project/6.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>

                                        <div class="content">
                                            <h5>Company Audit</h5>
                                            <span class="small">Upgrade the entity</span>
                                        </div>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <a href="#" class="link btn btn-default">All Projects</a>
                </div>
            </div>
        </section> <!-- project-section -->



        <div class="border">
            <div class="container"><hr></div>
        </div>



        <section class="testimonial-section section-padding">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="img/frontend/sign.jpg" alt="">

                                    <p>“ Ut enim ad minima veniam, quis nostrum exercitationem ullam cor poris suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui.</p>

                                    <div class="title">
                                        <h5>Alexis Sanchez</h5>
                                        <span class="position">Porto Inc</span>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="img/frontend/sign.jpg" alt="">

                                    <p>“ Ut enim ad minima veniam, quis nostrum exercitationem ullam cor poris suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis autem vel eum iure reprehenderit qui.</p>

                                    <div class="title">
                                        <h5>Alexis Sanchez</h5>
                                        <span class="position">Porto Inc</span>
                                    </div>
                                </div>
                            </div>

                            <a class="left carousel-control" href="#testimonial-carousel" role="button" data-slide="prev"><img src="img/frontend/arrow/left-angel.png" alt=""></a>

                            <a class="right carousel-control" href="#testimonial-carousel" role="button" data-slide="next"><img src="img/frontend/arrow/right-angel.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- testimonial-section -->



        <section class="counting-section">
            <div class="container text-center">
                <h2 class="hidden">counting-title</h2>

                <div class="counting-pusher">
                    <div class="counting-wrapper">
                        <span class="icon"><img src="img/frontend/counter/1.png" alt=""></span>

                        <div class="content inline-block text-left">
                            <div class="count-description inline-block">
                                <span class="timer">2145</span>
                            </div>
                            <p>Happy Clients</p>
                        </div>
                    </div>

                    <div class="counting-wrapper">
                        <span class="icon"><img src="img/frontend/counter/2.png" alt=""></span>

                        <div class="content inline-block text-left">
                            <div class="count-description inline-block">
                                <span class="timer">3269</span>
                            </div>
                            <p>Succesful Projects</p>
                        </div>
                    </div>

                    <div class="counting-wrapper">
                        <span class="icon"><img src="img/frontend/counter/3.png" alt=""></span>

                        <div class="content inline-block text-left">
                            <div class="count-description inline-block">
                                <span class="timer">45</span>%
                            </div>
                            <p>Capital Boost</p>
                        </div>
                    </div>

                    <div class="counting-wrapper">
                        <span class="icon"><img src="img/frontend/counter/4.png" alt=""></span>

                        <div class="content inline-block text-left">
                            <div class="count-description inline-block">
                                <span class="timer">187</span>
                            </div>
                            <p>Worlwide Offices</p>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- counting-section -->



        <section class="team-section section-padding">
            <div class="container text-center">
                <div class="section-title">
                    <span class="sub-header">LeaderShip</span>
                    <div class="border"></div>
                    <h2>Meet The Team</h2>
                </div> <!-- section-title -->

                <div class="team-carousel owl-carousel owl-theme">
                    <div class="team-wrapper item">
                        <div class="team-person">
                            <img src="img/frontend/team/1.jpg" alt="">

                            <div class="content">
                                <h4><a href="#">Andrew Garfield</a></h4>
                                <span class="position">IT Consultant</span>
                            </div>

                            <ul class="hover-icon">
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="team-wrapper item">
                        <div class="team-person">
                            <img src="img/frontend/team/2.jpg" alt="">

                            <div class="content">
                                <h4><a href="#">Emma Stone</a></h4>
                                <span class="position">Human Resource</span>
                            </div>

                            <ul class="hover-icon">
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="team-wrapper item">
                        <div class="team-person">
                            <img src="img/frontend/team/3.jpg" alt="">

                            <div class="content">
                                <h4><a href="#">Samuel Jackson</a></h4>
                                <span class="position">Operational Chief</span>
                            </div>

                            <ul class="hover-icon">
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="team-wrapper item">
                        <div class="team-person">
                            <img src="img/frontend/team/4.jpg" alt="">

                            <div class="content">
                                <h4><a href="#">Andrew Garfield</a></h4>
                                <span class="position">IT Consultant</span>
                            </div>

                            <ul class="hover-icon">
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="team-wrapper item">
                        <div class="team-person">
                            <img src="img/frontend/team/5.jpg" alt="">

                            <div class="content">
                                <h4><a href="#">Emma Stone</a></h4>
                                <span class="position">Human Resource</span>
                            </div>

                            <ul class="hover-icon">
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="team-wrapper item">
                        <div class="team-person">
                            <img src="img/frontend/team/6.jpg" alt="">

                            <div class="content">
                                <h4><a href="#">Samuel Jackson</a></h4>
                                <span class="position">Operational Chief</span>
                            </div>

                            <ul class="hover-icon">
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="team-wrapper item">
                        <div class="team-person">
                            <img src="img/frontend/team/2.jpg" alt="">

                            <div class="content">
                                <h4><a href="#">Emma Stone</a></h4>
                                <span class="position">Human Resource</span>
                            </div>

                            <ul class="hover-icon">
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- team-section -->



        <section class="location-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="caption">
                            <img src="img/frontend/map.png" alt="">

                            <div class="location">
                                <a class="tool tool-one" href="#" data-toggle="tooltip" title="Germany Frankfurt"><i class="fa fa-circle" aria-hidden="true"></i></a>

                                <a class="tool tool-two" href="#" data-toggle="tooltip" title="Germany Frankfurt"><i class="fa fa-circle" aria-hidden="true"></i></a>

                                <a class="tool tool-three" href="#" data-toggle="tooltip" title="Germany Frankfurt"><i class="fa fa-circle" aria-hidden="true"></i></a>

                                <a class="tool tool-four" href="#" data-toggle="tooltip" title="Germany Frankfurt"><i class="fa fa-circle" aria-hidden="true"></i></a>

                                <a class="tool tool-five" href="#" data-toggle="tooltip" title="Germany Frankfurt"><i class="fa fa-circle" aria-hidden="true"></i></a>

                                <a class="tool tool-six" href="#" data-toggle="tooltip" title="Germany Frankfurt"><i class="fa fa-circle" aria-hidden="true"></i></a>

                                <a class="tool tool-seven" href="#" data-toggle="tooltip" title="Germany Frankfurt"><i class="fa fa-circle" aria-hidden="true"></i></a>

                                <a class="tool tool-eight" href="#" data-toggle="tooltip" title="Germany Frankfurt"><i class="fa fa-circle" aria-hidden="true"></i></a>

                                <a class="tool tool-nine" href="#" data-toggle="tooltip" title="Germany Frankfurt"><i class="fa fa-circle" aria-hidden="true"></i></a>

                                <a class="tool tool-ten" href="#" data-toggle="tooltip" title="Germany Frankfurt"><i class="fa fa-circle" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div class="location-wrapper">
                            <div class="section-title text-center">
                                <span class="sub-header">Our Offices</span>
                                <div class="border"></div>
                                <h2>We Are WorldWide</h2>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor incididun ut labore et dolore. Per spiciatis unde omnis iste natus error</p>

                                <button class="btn btn-default"><a href="contact.html">Explore Offices</a></button>
                            </div> <!-- section-title -->
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- location-section -->



        <section class="blog-section section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-header">Recent Blogs</span>
                    <div class="border"></div>
                    <h2>Latest News & Articles</h2>
                </div> <!-- section-title -->

                <div class="row">
                    <div class="col-sm-4 wow fadeInUp">
                        <div class="blog-wrapper">
                            <img src="img/frontend/blog/1.jpg" alt="">

                            <h3>Air Berlin files for <br> insolvency</h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor incididun ut labore et dolore.</p>

                            <a href="single-blog.html" class="link">Read More</a>

                            <div class="author pull-right">
                                <img src="img/frontend/blog/blog-author.png" alt="">
                                <span class="title">Arthur Curry</span>
                            </div>

                            <ul class="share">
                                <li><i class="fa fa-tag" aria-hidden="true"></i> Business</li>

                                <li><i class="fa fa-clock-o" aria-hidden="true"></i> 2h ago</li>

                                <li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i> 10 Comments</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-wrapper">
                            <div class="caption">
                                <img src="img/frontend/blog/2.jpg" alt="">

                                <div class="video-icon">
                                    <div id="lightBox-3" class="icon">
                                        <a href="http://youtu.be/XbmmI2OiMk0" data-poptrox="youtube,800x480"><i class="fa fa-play" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>

                            <h3>Business Talk: Pound <br> rebounds</h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor incididun ut labore et dolore.</p>

                            <a href="single-blog.html" class="link"><i class="fa fa-video-camera" aria-hidden="true"></i>  Watch Video</a>

                            <div class="author pull-right">
                                <img src="img/frontend/blog/blog-author.png" alt="">
                                <span class="title">Arthur Curry</span>
                            </div>

                            <ul class="share">
                                <li><i class="fa fa-tag" aria-hidden="true"></i> Business</li>

                                <li><i class="fa fa-clock-o" aria-hidden="true"></i> 2h ago</li>

                                <li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i> 10 Comments</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-wrapper last-wrapper">
                            <img src="img/frontend/blog/3.jpg" alt="">

                            <h3>The statues that divide <br> America</h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor incididun ut labore et dolore.</p>

                            <a href="single-blog.html" class="link">Read More</a>

                            <div class="author pull-right">
                                <img src="img/frontend/blog/blog-author.png" alt="">
                                <span class="title">Arthur Curry</span>
                            </div>

                            <ul class="share">
                                <li><i class="fa fa-tag" aria-hidden="true"></i> Business</li>

                                <li><i class="fa fa-clock-o" aria-hidden="true"></i> 2h ago</li>

                                <li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i> 10 Comments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <a href="#" class="link btn btn-default">More Blogs</a>
                </div>
            </div>
        </section> <!-- blog-section -->



        <section class="signup-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-7">
                        <div class="contact-wrapper">
                            <h3>Signup for free <span>newsletter</span> and <span>business tips</span></h3>

                            <form class="signupForm">
                                <div class="form-wrapper">
                                    <input class="searchBar" required="" placeholder="email address ...">

                                    <button type="submit" class="subscribeBtn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-5 hidden-xs">
                        <div class="caption text-right wow slideInRight">
                            <img src="img/frontend/girl.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- signup-section -->



        <section class="contact-section section-padding">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-header">Contact Us</span>
                    <div class="border"></div>
                    <h2>Let’s Get In Touch</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor incididun ut labore et dolore. Perspiciatis unde omnis <br> iste natus error sit voluptatem accusantium doloremque laudantium.</p>

                    <button class="btn btn-primary">Drop us a line</button>
                    <button class="btn btn-primary">Career Here</button>
                </div> <!-- section-title -->

                <div class="row">
                    <div class="col-md-6">
                        <div id="googleMap"></div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-section">
                            <h3>Send Mail</h3>

                            <form class="contact-form">
                                <div class="form-group">
                                    <input id="name" name="name" type="text" class="form-control"  required="" placeholder="Your name..">
                                </div>

                                <div class="form-group">
                                    <input class="domainSearchBar form-control" id="email" name="email" type="email" required="" placeholder="Your email address..">
                                </div>

                                <div class="form-group">
                                    <input id="last-name" name="name" type="text" class="form-control"  required="" placeholder="Your Location..">
                                </div>

                                <div class="form-group">
                                    <textarea id="message" name="message" class="form-control form-message" rows="6" required="" placeholder="Write.."></textarea>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-default" type="submit">Send</button>
                                </div>
                            </form>
                        </div> <!-- mail-section -->
                    </div>
                </div>
            </div>
        </section> <!-- contact-section -->
@endsection
