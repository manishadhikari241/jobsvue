<template>
        <div class="row">
            <!-- Search Model Start -->
            <div class="modal srch-model fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header sheader">
                            <button type="button" class="close srch-close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="text" class="srch-input" placeholder="Search Keywords...">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Search Model End -->
            <!-- Header Start -->
            <header>
                <div class="top-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="top-header-full">
                                    <div class="top-left-hd">
                                        <ul>
                                            <li><div class="wlcm-text">Welcome to Jobby</div></li>
                                            <li>
                                                <div class="lang-icon dropdown">
                                                    <i class="fas fa-globe ln-glb"></i>
                                                    <a href="#" class="icon15 dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                                        EN <i class="fas fa-caret-down p-crt"></i>
                                                    </a>
                                                    <div class="dropdown-menu lanuage-dropdown dropdown-menu-left">
                                                        <a class="link-item" href="#">EN</a>
                                                        <a class="link-item" href="#">DE</a>
                                                        <a class="link-item" href="#">RU</a>
                                                        <a class="link-item" href="#">ES</a>
                                                        <a class="link-item" href="#">FR</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="top-right-hd">
                                        <ul>
                                            <li class="dropdown">
                                                <a href="#" class="icon14 dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                                    <i class="fas fa-envelope"></i><div class="circle-alrt"></div>
                                                </a>
                                                <div class="dropdown-menu message-dropdown dropdown-menu-right">
                                                    <div class="user-request-list">
                                                        <div class="request-users">
                                                            <div class="user-request-dt">
                                                                <a href="#"><img src="images/user-dp-1.jpg" alt="">
                                                                    <div class="user-title1">Jassica William </div>
                                                                    <span>Hey How are you John Doe...</span>
                                                                </a>
                                                            </div>
                                                            <div class="time5">2 min ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="user-request-list">
                                                        <div class="request-users">
                                                            <div class="user-request-dt">
                                                                <a href="#"><img src="images/user-dp-1.jpg" alt="">
                                                                    <div class="user-title1">Rock Smith </div>
                                                                    <span>Interesting Event! I will join this...</span>
                                                                </a>
                                                            </div>
                                                            <div class="time5">5 min ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="user-request-list">
                                                        <div class="request-users">
                                                            <div class="user-request-dt">
                                                                <a href="#"><img src="images/user-dp-1.jpg" alt="">
                                                                    <div class="user-title1">Joy Doe </div>
                                                                    <span>Hey Sir! What about you...</span>
                                                                </a>
                                                            </div>
                                                            <div class="time5">10 min ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="user-request-list">
                                                        <a href="my_freelancer_messages.html" class="view-all">View All Messages</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="icon14 dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                                    <i class="fas fa-bell"></i><div class="circle-alrt"></div>
                                                </a>
                                                <div class="dropdown-menu message-dropdown dropdown-menu-right">
                                                    <div class="user-request-list">
                                                        <div class="request-users">
                                                            <div class="user-request-dt">
                                                                <a href="#">
                                                                    <div class="noti-icon"><i class="fas fa-users"></i></div>
                                                                    <div class="user-title1">Rock William </div>
                                                                    <span>applied for a <ins class="noti-p-link">Php Developer</ins>.</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-request-list">
                                                        <div class="request-users">
                                                            <div class="user-request-dt">
                                                                <a href="#">
                                                                    <div class="noti-icon"><i class="fas fa-bullseye"></i></div>
                                                                    <div class="user-title1">Johnson Smith</div>
                                                                    <span>placed a bid on your <ins class="noti-p-link">I Need a ...</ins></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-request-list">
                                                        <div class="request-users">
                                                            <div class="user-request-dt">
                                                                <a href="#">
                                                                    <div class="noti-icon"><i class="fas fa-exclamation"></i></div>

                                                                    <span class="pt-2">Your job listing <ins class="noti-p-link">Wordpress Developer</ins> is expiring.</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="user-request-list">
                                                        <a href="my_freelancer_notifications.html" class="view-all">View All Notifications</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="account order-1 dropdown">
                                                    <a href="#" class="account-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                                        <div class="user-dp"><img src="images/dp.jpg" alt=""></div>
                                                        <span>Hi! John</span>
                                                        <i class="fas fa-sort-down"></i>
                                                    </a>
                                                    <div class="dropdown-menu account-dropdown dropdown-menu-right">
                                                        <a class="link-item" href="my_freelancer_dashboard.html">Dashboard</a>
                                                        <a class="link-item" href="my_freelancer_setting.html">Setting</a>
                                                        <a class="link-item" href="my_freelancer_messages.html">My Messages</a>
                                                        <a class="link-item" href="my_freelancer_jobs.html">My Jobs</a>
                                                        <a class="link-item" href="my_freelancer_bids.html">My Bids</a>
                                                        <a class="link-item" href="my_freelancer_portfolio.html">My Portfolio</a>
                                                        <a class="link-item" href="my_freelancer_bookmarks.html">My Bookmarks</a>
                                                        <a class="link-item" href="my_freelancer_payments.html">Payments</a>
                                                        <a class="link-item" href="sign_in.html">Logout</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <nav class="navbar navbar-expand-lg navbar-light bg-dark1 justify-content-sm-start">
                                    <a class="order-1 order-lg-0 ml-lg-0 ml-3 mr-auto" href="index.html"><img src="images/logo.svg" alt=""></a>
                                    <button class="navbar-toggler align-self-start" type="button">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                    <div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu" id="navbarSupportedContent">
                                        <ul class="navbar-nav align-self-stretch">
                                            <li class="nav-item active">
                                                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a href="#" class="nav-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">Find Jobs</a>
                                                <div class="dropdown-menu pages-dropdown">
                                                    <a class="link-item" href="browse_jobs.html">Browse Jobs</a>
                                                    <a class="link-item" href="job_single_view.html">Single Job View</a>
                                                    <a class="link-item" href="post_a_job.html">Post a Job</a>
                                                </div>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a href="#" class="nav-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">Find Work</a>
                                                <div class="dropdown-menu pages-dropdown">
                                                    <a class="link-item" href="browse_projects.html">Browse Projects</a>
                                                    <a class="link-item" href="project_single_view.html">Single Project View</a>
                                                    <a class="link-item" href="post_a_project.html">Post a Project</a>
                                                </div>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a href="#" class="nav-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">Find Companies</a>
                                                <div class="dropdown-menu pages-dropdown">
                                                    <a class="link-item" href="browse_companies.html">Browse Companies</a>
                                                    <a class="link-item" href="other_company_profile.html">Company Profile</a>
                                                </div>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a href="#" class="nav-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">Find Freelancers</a>
                                                <div class="dropdown-menu pages-dropdown">
                                                    <a class="link-item" href="browse_freelancers.html">Browse Freelancers</a>
                                                    <a class="link-item" href="other_freelancer_profile.html">Freelancer Profile</a>
                                                </div>
                                            </li>
                                            <li class="nav-item dropdown pages152">
                                                <a href="#" class="nav-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                                    Pages <i class="fas fa-caret-down p-crt"></i>
                                                </a>
                                                <div class="dropdown-menu pages-dropdown">
                                                    <a class="link-item" href="about.html">About</a>
                                                    <a class="link-item" href="our_blog.html">Our Blog</a>
                                                    <a class="link-item" href="blog_single_view.html">Signle Blog View</a>
                                                    <a class="link-item" href="pricing_plans.html">Pricing Plans</a>
                                                    <a class="link-item" href="checkout.html">Checkout</a>
                                                    <a class="link-item" href="plan_invoice.html">Invoice Slip</a>
                                                    <a class="link-item" href="sign_in.html">Sign in</a>
                                                    <a class="link-item" href="sign_up.html">Sign up</a>
                                                    <a class="link-item" href="sign_up_select_profile.html">Sign up Select Profiles</a>
                                                    <a class="link-item" href="sign_up_freelancer_profile.html">Create Freelancer Profile</a>
                                                    <a class="link-item" href="sign_up_company_profile.html">Create Company Profile</a>
                                                    <a class="link-item" href="contact_us.html">Contact</a>
                                                    <a class="link-item" href="help_center.html">Help Center</a>
                                                </div>
                                            </li>
                                        </ul>
                                        <a href="#" class="search-link" role="button" data-toggle="modal" data-target="#searchModal"><i class="fas fa-search"></i></a>
                                        <a href="post_a_job.html" class="add-post">Post a Job</a>
                                        <a href="post_a_project.html" class="add-task">Post a Task</a>
                                    </div>
                                    <div class="responsive-search order-1">
                                        <input type="text" class="rsp-search" placeholder="Search...">
                                        <i class="fas fa-search r-sh1"></i>
                                    </div>
                                </nav>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Header End -->
            <!-- Body Start -->
            <main class="body-section">
                <div class="Search-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-3 col-12">
                                <div class="form-group mb-0">
                                    <input class="search-1" type="text" placeholder="Keywords (e.g. Job Title, Position...)">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12">
                                <div class="form-group mb-0 mt-15">
                                    <input class="search-1" type="text" placeholder="Location (e.g. City, Country...)">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12 mt-15">
                                <div class="form-group mb-0">
                                    <input class="search-1" type="text" placeholder="Industry (e.g. Design, Art...)">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-12 mt-15">
                                <button class="srch-btn" type="submit">Search Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-slider">
                    <div class="owl-carousel bnnr-owl owl-theme">
                        <div class="item">
                            <div class="featured-cities">
                                <a href="#">
                                    <div class="feature-img">
                                        <img src="images/homepage/owl-bnnr/img-1.jpg" alt="">
                                        <div class="overly-bg"></div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="featured-text">
                                        <div class="city-title">California</div>
                                        <ins>125 Jobs</ins>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="featured-cities">
                                <a href="#">
                                    <div class="feature-img">
                                        <img src="images/homepage/owl-bnnr/img-2.jpg" alt="">
                                        <div class="overly-bg"></div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="featured-text">
                                        <div class="city-title">Austin</div>
                                        <ins>200 Jobs</ins>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="featured-cities">
                                <a href="#">
                                    <div class="feature-img">
                                        <img src="images/homepage/owl-bnnr/img-3.jpg" alt="">
                                        <div class="overly-bg"></div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="featured-text">
                                        <div class="city-title">Los Angeles</div>
                                        <ins>25 Jobs</ins>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="featured-cities">
                                <a href="#">
                                    <div class="feature-img">
                                        <img src="images/homepage/owl-bnnr/img-4.jpg" alt="">
                                        <div class="overly-bg"></div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="featured-text">
                                        <div class="city-title">San francisco</div>
                                        <ins>12 Jobs</ins>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="featured-cities">
                                <a href="#">
                                    <div class="feature-img">
                                        <img src="images/homepage/owl-bnnr/img-5.jpg" alt="">
                                        <div class="overly-bg"></div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="featured-text">
                                        <div class="city-title">Tulsa</div>
                                        <ins>190 Jobs</ins>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="achivements">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="achive-text">3M Registered Members</div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="achive-text">786k Jobs Found</div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-12">
                                <div class="achive-text">1.2K Best Companies</div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <ul class="post-buttons">
                                    <li><button class="add-job" onclick="window.location.href = 'post_a_job.html';">Post a Job</button></li>
                                    <li><button class="add-project" onclick="window.location.href = 'post_a_project.html';">Post a Work</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="with-sidebar">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="find-lts-jobs">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <div class="main-heading">
                                                    <h2>Find Latest Jobs</h2>
                                                    <span>Your Job for a Future</span>
                                                    <div class="line-shape1">
                                                        <img src="images/line.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Tab Bar -->
                                            <div class="container">
                                                <div class="main-tab-bar">
                                                    <div class="main-bar">
                                                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="tab" href="#tab01" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link"  data-toggle="tab" href="#tab02" role="tab" aria-controls="profile" aria-selected="false">Employer</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link"  data-toggle="tab" href="#tab03" role="tab" aria-controls="contact" aria-selected="false">Recent Jobs</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Tab Panel -->
                                            <div class="col-md-12 col-12">
                                                <div class="lts-jobs-slider">
                                                    <div class="tab-content" id="myTabContent">
                                                        <div class="tab-pane fade show active" id="tab01" role="tabpanel" aria-labelledby="tab01-tab">
                                                            <div class="owl-carousel jobs-owl owl-theme">
                                                                <div class="item">
                                                                    <div class="job-item">
                                                                        <div class="job-top-dt">
                                                                            <div class="job-left-dt">
                                                                                <img src="images/homepage/latest-jobs/img-1.jpg" alt="">
                                                                                <div class="job-ut-dts">
                                                                                    <a href="#"><h4>John Doe</h4></a>
                                                                                    <span><i class="fas fa-map-marker-alt"></i> New York City</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="job-right-dt">
                                                                                <div class="job-price">$599</div>
                                                                                <div class="job-fp">Full Time</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-des-dt">
                                                                            <h4>UX Designer</h4>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                                                            <div class="job-skills">
                                                                                <a href="#">UX</a>
                                                                                <a href="#">UI</a>
                                                                                <a href="#">Photoshop</a>
                                                                                <a href="#" class="more-skills">+4</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-buttons">
                                                                            <ul class="link-btn">
                                                                                <li><a href="#" class="link-j1" title="Apply Now">APPLY NOW</a></li>
                                                                                <li><a href="job_single_view.html" class="link-j1" title="View Job">View Job</a></li>
                                                                                <li>
                                                                                    <div id="ex1" class="modal">
                                                                                        <div class="model-header">
                                                                                            <img src="images/profile.jpg" class="model-header-img">
                                                                                            <h5 class="model-header-img-title">John Doe</h5>
                                                                                        </div>
                                                                                        <div class="model-body">
                                                                                            <ul class="model-ul">
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="model-footer">
                                                                                            <div class="model-textarea">
                                                                                                <i class="fas fa-paste"></i>
                                                                                                <i class="fas fa-paper-plane"></i>
                                                                                                <textarea name="model-message" rows="1" class="model-msg"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- Link to open the modal -->
                                                                                    <a href="#ex1" rel="modal:open" class="link-j1"><i class="fas fa-comments"></i> Chat</a>
                                                                                </li>
                                                                                <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="job-item">
                                                                        <div class="job-top-dt">
                                                                            <div class="job-left-dt">
                                                                                <img src="images/homepage/latest-jobs/img-2.jpg" alt="">
                                                                                <div class="job-ut-dts">
                                                                                    <a href="#"><h4>Johnson Smith</h4></a>
                                                                                    <span><i class="fas fa-map-marker-alt"></i> India</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="job-right-dt">
                                                                                <div class="job-price">$50/hr</div>
                                                                                <div class="job-fp job-prt">Part Time</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-des-dt">
                                                                            <h4>PHP Developer</h4>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                                                            <div class="job-skills">
                                                                                <a href="#">Php</a>
                                                                                <a href="#">Sql</a>
                                                                                <a href="#">Javascript</a>
                                                                                <a href="#" class="more-skills">+4</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-buttons">
                                                                            <ul class="link-btn">
                                                                                <li><a href="#" class="link-j1" title="Apply Now">APPLY NOW</a></li>
                                                                                <li><a href="job_single_view.html" class="link-j1" title="View Job">View Job</a></li>
                                                                                <li>
                                                                                    <div id="ex1" class="modal">
                                                                                        <div class="model-header">
                                                                                            <img src="images/profile.jpg" class="model-header-img">
                                                                                            <h5 class="model-header-img-title">John Doe</h5>
                                                                                        </div>
                                                                                        <div class="model-body">
                                                                                            <ul class="model-ul">
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="model-footer">
                                                                                            <div class="model-textarea">
                                                                                                <i class="fas fa-paste"></i>
                                                                                                <i class="fas fa-paper-plane"></i>
                                                                                                <textarea name="model-message" rows="1" class="model-msg"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- Link to open the modal -->
                                                                                    <a href="#ex1" rel="modal:open" class="link-j1"><i class="fas fa-comments"></i> Chat</a>
                                                                                </li>
                                                                                <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="job-item">
                                                                        <div class="job-top-dt">
                                                                            <div class="job-left-dt">
                                                                                <img src="images/homepage/latest-jobs/img-3.jpg" alt="">
                                                                                <div class="job-ut-dts">
                                                                                    <a href="#"><h4>Envato</h4></a>
                                                                                    <span><i class="fas fa-map-marker-alt"></i> Australia</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="job-right-dt">
                                                                                <div class="job-price">$900</div>
                                                                                <div class="job-fp">Full Time</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-des-dt">
                                                                            <h4>Wordpress Developer</h4>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                                                            <div class="job-skills">
                                                                                <a href="#">Html</a>
                                                                                <a href="#">Css</a>
                                                                                <a href="#">Wordpress</a>
                                                                                <a href="#" class="more-skills">+4</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-buttons">
                                                                            <ul class="link-btn">
                                                                                <li><a href="#" class="link-j1" title="Apply Now">APPLY NOW</a></li>
                                                                                <li><a href="job_single_view.html" class="link-j1" title="View Job">View Job</a></li>
                                                                                <li>
                                                                                    <div id="ex1" class="modal">
                                                                                        <div class="model-header">
                                                                                            <img src="images/profile.jpg" class="model-header-img">
                                                                                            <h5 class="model-header-img-title">John Doe</h5>
                                                                                        </div>
                                                                                        <div class="model-body">
                                                                                            <ul class="model-ul">
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="model-footer">
                                                                                            <div class="model-textarea">
                                                                                                <i class="fas fa-paste"></i>
                                                                                                <i class="fas fa-paper-plane"></i>
                                                                                                <textarea name="model-message" rows="1" class="model-msg"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- Link to open the modal -->
                                                                                    <a href="#ex1" rel="modal:open" class="link-j1"><i class="fas fa-comments"></i> Chat</a>
                                                                                </li>
                                                                                <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="job-item">
                                                                        <div class="job-top-dt">
                                                                            <div class="job-left-dt">
                                                                                <img src="images/homepage/latest-jobs/img-4.jpg" alt="">
                                                                                <div class="job-ut-dts">
                                                                                    <a href="#"><h4>Joy Smith</h4></a>
                                                                                    <span><i class="fas fa-map-marker-alt"></i> India</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="job-right-dt">
                                                                                <div class="job-price">$500</div>
                                                                                <div class="job-fp">Full Time</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-des-dt">
                                                                            <h4>Graphic Designer</h4>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                                                            <div class="job-skills">
                                                                                <a href="#">Illistrator</a>
                                                                                <a href="#">Photoshop</a>
                                                                                <a href="#" class="more-skills">+4</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-buttons">
                                                                            <ul class="link-btn">
                                                                                <li><a href="#" class="link-j1" title="Apply Now">APPLY NOW</a></li>
                                                                                <li><a href="job_single_view.html" class="link-j1" title="View Job">View Job</a></li>
                                                                                <li>
                                                                                    <div id="ex1" class="modal">
                                                                                        <div class="model-header">
                                                                                            <img src="images/profile.jpg" class="model-header-img">
                                                                                            <h5 class="model-header-img-title">John Doe</h5>
                                                                                        </div>
                                                                                        <div class="model-body">
                                                                                            <ul class="model-ul">
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="model-footer">
                                                                                            <div class="model-textarea">
                                                                                                <i class="fas fa-paste"></i>
                                                                                                <i class="fas fa-paper-plane"></i>
                                                                                                <textarea name="model-message" rows="1" class="model-msg"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- Link to open the modal -->
                                                                                    <a href="#ex1" rel="modal:open" class="link-j1"><i class="fas fa-comments"></i> Chat</a>
                                                                                </li>
                                                                                <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="job-item">
                                                                        <div class="job-top-dt">
                                                                            <div class="job-left-dt">
                                                                                <img src="images/homepage/latest-jobs/img-5.jpg" alt="">
                                                                                <div class="job-ut-dts">
                                                                                    <a href="#"><h4>Jassica William</h4></a>
                                                                                    <span><i class="fas fa-map-marker-alt"></i> Australia</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="job-right-dt">
                                                                                <div class="job-price">$300</div>
                                                                                <div class="job-fp">Full Time</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-des-dt">
                                                                            <h4>Data Science &amp; Analytics</h4>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                                                            <div class="job-skills">
                                                                                <a href="#">Delivery</a>
                                                                                <a href="#">Local</a>
                                                                                <a href="#">Graduation</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-buttons">
                                                                            <ul class="link-btn">
                                                                                <li><a href="#" class="link-j1" title="Apply Now">APPLY NOW</a></li>
                                                                                <li><a href="job_single_view.html" class="link-j1" title="View Job">View Job</a></li>
                                                                                <li>
                                                                                    <div id="ex1" class="modal">
                                                                                        <div class="model-header">
                                                                                            <img src="images/profile.jpg" class="model-header-img">
                                                                                            <h5 class="model-header-img-title">John Doe</h5>
                                                                                        </div>
                                                                                        <div class="model-body">
                                                                                            <ul class="model-ul">
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="model-footer">
                                                                                            <div class="model-textarea">
                                                                                                <i class="fas fa-paste"></i>
                                                                                                <i class="fas fa-paper-plane"></i>
                                                                                                <textarea name="model-message" rows="1" class="model-msg"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- Link to open the modal -->
                                                                                    <a href="#ex1" rel="modal:open" class="link-j1"><i class="fas fa-comments"></i> Chat</a>
                                                                                </li>
                                                                                <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="job-item">
                                                                        <div class="job-top-dt">
                                                                            <div class="job-left-dt">
                                                                                <img src="images/homepage/latest-jobs/img-6.jpg" alt="">
                                                                                <div class="job-ut-dts">
                                                                                    <a href="#"><h4>Gambolthemes</h4></a>
                                                                                    <span><i class="fas fa-map-marker-alt"></i> India</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="job-right-dt">
                                                                                <div class="job-price">$60/hr</div>
                                                                                <div class="job-fp">Full Time</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-des-dt">
                                                                            <h4>Front End Developer</h4>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                                                            <div class="job-skills">
                                                                                <a href="#">Html</a>
                                                                                <a href="#">Css</a>
                                                                                <a href="#">Boostrap</a>
                                                                                <a href="#" class="more-skills">+4</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-buttons">
                                                                            <ul class="link-btn">
                                                                                <li><a href="#" class="link-j1" title="Apply Now">APPLY NOW</a></li>
                                                                                <li><a href="job_single_view.html" class="link-j1" title="View Job">View Job</a></li>
                                                                                <li>
                                                                                    <div id="ex1" class="modal">
                                                                                        <div class="model-header">
                                                                                            <img src="images/profile.jpg" class="model-header-img">
                                                                                            <h5 class="model-header-img-title">John Doe</h5>
                                                                                        </div>
                                                                                        <div class="model-body">
                                                                                            <ul class="model-ul">
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="model-footer">
                                                                                            <div class="model-textarea">
                                                                                                <i class="fas fa-paste"></i>
                                                                                                <i class="fas fa-paper-plane"></i>
                                                                                                <textarea name="model-message" rows="1" class="model-msg"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- Link to open the modal -->
                                                                                    <a href="#ex1" rel="modal:open" class="link-j1"><i class="fas fa-comments"></i> Chat</a>
                                                                                </li>
                                                                                <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text-center">
                                                                <button class="view-links" onclick="window.location.href = '#';">BROWSE ALL JOBS</button>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade show" id="tab02" role="tabpanel" aria-labelledby="tab02-tab">
                                                            <div class="owl-carousel jobs-owl owl-theme">
                                                                <div class="item">
                                                                    <div class="job-item">
                                                                        <div class="job-top-dt">
                                                                            <div class="job-left-dt">
                                                                                <img src="images/homepage/latest-jobs/img-1.jpg" alt="">
                                                                                <div class="job-ut-dts">
                                                                                    <a href="#"><h4>John Doe</h4></a>
                                                                                    <span><i class="fas fa-map-marker-alt"></i> New York City</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="job-right-dt">
                                                                                <div class="job-price">$599</div>
                                                                                <div class="job-fp">Full Time</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-des-dt">
                                                                            <h4>UX Designer</h4>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                                                            <div class="job-skills">
                                                                                <a href="#">UX</a>
                                                                                <a href="#">UI</a>
                                                                                <a href="#">Illistrator</a>
                                                                                <a href="#" class="more-skills">+4</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-buttons">
                                                                            <ul class="link-btn">
                                                                                <li><a href="#" class="link-j1" title="Apply Now">APPLY NOW</a></li>
                                                                                <li><a href="job_single_view.html" class="link-j1" title="View Job">View Job</a></li>
                                                                                <li>
                                                                                    <div id="ex1" class="modal">
                                                                                        <div class="model-header">
                                                                                            <img src="images/profile.jpg" class="model-header-img">
                                                                                            <h5 class="model-header-img-title">John Doe</h5>
                                                                                        </div>
                                                                                        <div class="model-body">
                                                                                            <ul class="model-ul">
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="model-footer">
                                                                                            <div class="model-textarea">
                                                                                                <i class="fas fa-paste"></i>
                                                                                                <i class="fas fa-paper-plane"></i>
                                                                                                <textarea name="model-message" rows="1" class="model-msg"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- Link to open the modal -->
                                                                                    <a href="#ex1" rel="modal:open" class="link-j1"><i class="fas fa-comments"></i> Chat</a>
                                                                                </li>
                                                                                <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="job-item">
                                                                        <div class="job-top-dt">
                                                                            <div class="job-left-dt">
                                                                                <img src="images/homepage/latest-jobs/img-2.jpg" alt="">
                                                                                <div class="job-ut-dts">
                                                                                    <a href="#"><h4>Johnson Smith</h4></a>
                                                                                    <span><i class="fas fa-map-marker-alt"></i> India</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="job-right-dt">
                                                                                <div class="job-price">$50/hr</div>
                                                                                <div class="job-fp job-prt">Part Time</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-des-dt">
                                                                            <h4>PHP Developer</h4>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                                                            <div class="job-skills">
                                                                                <a href="#">Php</a>
                                                                                <a href="#">Sql</a>
                                                                                <a href="#">Javascript</a>
                                                                                <a href="#" class="more-skills">+4</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-buttons">
                                                                            <ul class="link-btn">
                                                                                <li><a href="#" class="link-j1" title="Apply Now">APPLY NOW</a></li>
                                                                                <li><a href="job_single_view.html" class="link-j1" title="View Job">View Job</a></li>
                                                                                <li>
                                                                                    <div id="ex1" class="modal">
                                                                                        <div class="model-header">
                                                                                            <img src="images/profile.jpg" class="model-header-img">
                                                                                            <h5 class="model-header-img-title">John Doe</h5>
                                                                                        </div>
                                                                                        <div class="model-body">
                                                                                            <ul class="model-ul">
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="model-footer">
                                                                                            <div class="model-textarea">
                                                                                                <i class="fas fa-paste"></i>
                                                                                                <i class="fas fa-paper-plane"></i>
                                                                                                <textarea name="model-message" rows="1" class="model-msg"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- Link to open the modal -->
                                                                                    <a href="#ex1" rel="modal:open" class="link-j1"><i class="fas fa-comments"></i> Chat</a>
                                                                                </li>
                                                                                <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="job-item">
                                                                        <div class="job-top-dt">
                                                                            <div class="job-left-dt">
                                                                                <img src="images/homepage/latest-jobs/img-3.jpg" alt="">
                                                                                <div class="job-ut-dts">
                                                                                    <a href="#"><h4>Envato</h4></a>
                                                                                    <span><i class="fas fa-map-marker-alt"></i> Australia</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="job-right-dt">
                                                                                <div class="job-price">$900</div>
                                                                                <div class="job-fp">Full Time</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-des-dt">
                                                                            <h4>Wordpress Developer</h4>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                                                            <div class="job-skills">
                                                                                <a href="#">Html</a>
                                                                                <a href="#">Css</a>
                                                                                <a href="#">Wordpress</a>
                                                                                <a href="#" class="more-skills">+4</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-buttons">
                                                                            <ul class="link-btn">
                                                                                <li><a href="#" class="link-j1" title="Apply Now">APPLY NOW</a></li>
                                                                                <li><a href="job_single_view.html" class="link-j1" title="View Job">View Job</a></li>
                                                                                <li>
                                                                                    <div id="ex1" class="modal">
                                                                                        <div class="model-header">
                                                                                            <img src="images/profile.jpg" class="model-header-img">
                                                                                            <h5 class="model-header-img-title">John Doe</h5>
                                                                                        </div>
                                                                                        <div class="model-body">
                                                                                            <ul class="model-ul">
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="model-footer">
                                                                                            <div class="model-textarea">
                                                                                                <i class="fas fa-paste"></i>
                                                                                                <i class="fas fa-paper-plane"></i>
                                                                                                <textarea name="model-message" rows="1" class="model-msg"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- Link to open the modal -->
                                                                                    <a href="#ex1" rel="modal:open" class="link-j1"><i class="fas fa-comments"></i> Chat</a>
                                                                                </li>
                                                                                <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="job-item">
                                                                        <div class="job-top-dt">
                                                                            <div class="job-left-dt">
                                                                                <img src="images/homepage/latest-jobs/img-4.jpg" alt="">
                                                                                <div class="job-ut-dts">
                                                                                    <a href="#"><h4>Joy Smith</h4></a>
                                                                                    <span><i class="fas fa-map-marker-alt"></i> India</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="job-right-dt">
                                                                                <div class="job-price">$500</div>
                                                                                <div class="job-fp">Full Time</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-des-dt">
                                                                            <h4>Graphic Designer</h4>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                                                            <div class="job-skills">
                                                                                <a href="#">Illistrator</a>
                                                                                <a href="#">Photoshop</a>
                                                                                <a href="#" class="more-skills">+4</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-buttons">
                                                                            <ul class="link-btn">
                                                                                <li><a href="#" class="link-j1" title="Apply Now">APPLY NOW</a></li>
                                                                                <li><a href="job_single_view.html" class="link-j1" title="View Job">View Job</a></li>
                                                                                <li>
                                                                                    <div id="ex1" class="modal">
                                                                                        <div class="model-header">
                                                                                            <img src="images/profile.jpg" class="model-header-img">
                                                                                            <h5 class="model-header-img-title">John Doe</h5>
                                                                                        </div>
                                                                                        <div class="model-body">
                                                                                            <ul class="model-ul">
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="model-footer">
                                                                                            <div class="model-textarea">
                                                                                                <i class="fas fa-paste"></i>
                                                                                                <i class="fas fa-paper-plane"></i>
                                                                                                <textarea name="model-message" rows="1" class="model-msg"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- Link to open the modal -->
                                                                                    <a href="#ex1" rel="modal:open" class="link-j1"><i class="fas fa-comments"></i> Chat</a>
                                                                                </li>
                                                                                <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="job-item">
                                                                        <div class="job-top-dt">
                                                                            <div class="job-left-dt">
                                                                                <img src="images/homepage/latest-jobs/img-5.jpg" alt="">
                                                                                <div class="job-ut-dts">
                                                                                    <a href="#"><h4>Jassica William</h4></a>
                                                                                    <span><i class="fas fa-map-marker-alt"></i> Australia</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="job-right-dt">
                                                                                <div class="job-price">$300</div>
                                                                                <div class="job-fp">Full Time</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-des-dt">
                                                                            <h4>Data Science &amp; Analytics</h4>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                                                            <div class="job-skills">
                                                                                <a href="#">Delivery</a>
                                                                                <a href="#">Local</a>
                                                                                <a href="#">Graduation</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-buttons">
                                                                            <ul class="link-btn">
                                                                                <li><a href="#" class="link-j1" title="Apply Now">APPLY NOW</a></li>
                                                                                <li><a href="job_single_view.html" class="link-j1" title="View Job">View Job</a></li>
                                                                                <li>
                                                                                    <div id="ex1" class="modal">
                                                                                        <div class="model-header">
                                                                                            <img src="images/profile.jpg" class="model-header-img">
                                                                                            <h5 class="model-header-img-title">John Doe</h5>
                                                                                        </div>
                                                                                        <div class="model-body">
                                                                                            <ul class="model-ul">
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="model-footer">
                                                                                            <div class="model-textarea">
                                                                                                <i class="fas fa-paste"></i>
                                                                                                <i class="fas fa-paper-plane"></i>
                                                                                                <textarea name="model-message" rows="1" class="model-msg"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- Link to open the modal -->
                                                                                    <a href="#ex1" rel="modal:open" class="link-j1"><i class="fas fa-comments"></i> Chat</a>
                                                                                </li>
                                                                                <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="job-item">
                                                                        <div class="job-top-dt">
                                                                            <div class="job-left-dt">
                                                                                <img src="images/homepage/latest-jobs/img-6.jpg" alt="">
                                                                                <div class="job-ut-dts">
                                                                                    <a href="#"><h4>Gambolthemes</h4></a>
                                                                                    <span><i class="fas fa-map-marker-alt"></i> India</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="job-right-dt">
                                                                                <div class="job-price">$60/hr</div>
                                                                                <div class="job-fp">Full Time</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-des-dt">
                                                                            <h4>Front End Developer</h4>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                                                            <div class="job-skills">
                                                                                <a href="#">Html</a>
                                                                                <a href="#">Css</a>
                                                                                <a href="#">Boostrap</a>
                                                                                <a href="#" class="more-skills">+4</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-buttons">
                                                                            <ul class="link-btn">
                                                                                <li><a href="#" class="link-j1" title="Apply Now">APPLY NOW</a></li>
                                                                                <li><a href="job_single_view.html" class="link-j1" title="View Job">View Job</a></li>
                                                                                <li>
                                                                                    <div id="ex1" class="modal">
                                                                                        <div class="model-header">
                                                                                            <img src="images/profile.jpg" class="model-header-img">
                                                                                            <h5 class="model-header-img-title">John Doe</h5>
                                                                                        </div>
                                                                                        <div class="model-body">
                                                                                            <ul class="model-ul">
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="model-footer">
                                                                                            <div class="model-textarea">
                                                                                                <i class="fas fa-paste"></i>
                                                                                                <i class="fas fa-paper-plane"></i>
                                                                                                <textarea name="model-message" rows="1" class="model-msg"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- Link to open the modal -->
                                                                                    <a href="#ex1" rel="modal:open" class="link-j1"><i class="fas fa-comments"></i> Chat</a>
                                                                                </li>
                                                                                <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text-center">
                                                                <button class="view-links" onclick="window.location.href = '#';">BROWSE ALL JOBS</button>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade show" id="tab03" role="tabpanel" aria-labelledby="tab03-tab">
                                                            <div class="owl-carousel jobs-owl owl-theme">
                                                                <div class="item">
                                                                    <div class="job-item">
                                                                        <div class="job-top-dt">
                                                                            <div class="job-left-dt">
                                                                                <img src="images/homepage/latest-jobs/img-1.jpg" alt="">
                                                                                <div class="job-ut-dts">
                                                                                    <a href="#"><h4>John Doe</h4></a>
                                                                                    <span><i class="fas fa-map-marker-alt"></i> New York City</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="job-right-dt">
                                                                                <div class="job-price">$599</div>
                                                                                <div class="job-fp">Full Time</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-des-dt">
                                                                            <h4>UX Designer</h4>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                                                            <div class="job-skills">
                                                                                <a href="#">UX</a>
                                                                                <a href="#">UI</a>
                                                                                <a href="#">Next Nepal</a>
                                                                                <a href="#" class="more-skills">+4</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-buttons">
                                                                            <ul class="link-btn">
                                                                                <li><a href="#" class="link-j1" title="Apply Now">APPLY NOW</a></li>
                                                                                <li><a href="job_single_view.html" class="link-j1" title="View Job">View Job</a></li>
                                                                                <li>
                                                                                    <div id="ex1" class="modal">
                                                                                        <div class="model-header">
                                                                                            <img src="images/profile.jpg" class="model-header-img">
                                                                                            <h5 class="model-header-img-title">John Doe</h5>
                                                                                        </div>
                                                                                        <div class="model-body">
                                                                                            <ul class="model-ul">
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="model-footer">
                                                                                            <div class="model-textarea">
                                                                                                <i class="fas fa-paste"></i>
                                                                                                <i class="fas fa-paper-plane"></i>
                                                                                                <textarea name="model-message" rows="1" class="model-msg"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- Link to open the modal -->
                                                                                    <a href="#ex1" rel="modal:open" class="link-j1"><i class="fas fa-comments"></i> Chat</a>
                                                                                </li>
                                                                                <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="job-item">
                                                                        <div class="job-top-dt">
                                                                            <div class="job-left-dt">
                                                                                <img src="images/homepage/latest-jobs/img-2.jpg" alt="">
                                                                                <div class="job-ut-dts">
                                                                                    <a href="#"><h4>Johnson Smith</h4></a>
                                                                                    <span><i class="fas fa-map-marker-alt"></i> India</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="job-right-dt">
                                                                                <div class="job-price">$50/hr</div>
                                                                                <div class="job-fp job-prt">Part Time</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-des-dt">
                                                                            <h4>PHP Developer</h4>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                                                            <div class="job-skills">
                                                                                <a href="#">Php</a>
                                                                                <a href="#">Sql</a>
                                                                                <a href="#">Javascript</a>
                                                                                <a href="#" class="more-skills">+4</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-buttons">
                                                                            <ul class="link-btn">
                                                                                <li><a href="#" class="link-j1" title="Apply Now">APPLY NOW</a></li>
                                                                                <li><a href="job_single_view.html" class="link-j1" title="View Job">View Job</a></li>
                                                                                <li>
                                                                                    <div id="ex1" class="modal">
                                                                                        <div class="model-header">
                                                                                            <img src="images/profile.jpg" class="model-header-img">
                                                                                            <h5 class="model-header-img-title">John Doe</h5>
                                                                                        </div>
                                                                                        <div class="model-body">
                                                                                            <ul class="model-ul">
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="model-footer">
                                                                                            <div class="model-textarea">
                                                                                                <i class="fas fa-paste"></i>
                                                                                                <i class="fas fa-paper-plane"></i>
                                                                                                <textarea name="model-message" rows="1" class="model-msg"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- Link to open the modal -->
                                                                                    <a href="#ex1" rel="modal:open" class="link-j1"><i class="fas fa-comments"></i> Chat</a>
                                                                                </li>
                                                                                <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="job-item">
                                                                        <div class="job-top-dt">
                                                                            <div class="job-left-dt">
                                                                                <img src="images/homepage/latest-jobs/img-3.jpg" alt="">
                                                                                <div class="job-ut-dts">
                                                                                    <a href="#"><h4>Envato</h4></a>
                                                                                    <span><i class="fas fa-map-marker-alt"></i> Australia</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="job-right-dt">
                                                                                <div class="job-price">$900</div>
                                                                                <div class="job-fp">Full Time</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-des-dt">
                                                                            <h4>Wordpress Developer</h4>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                                                            <div class="job-skills">
                                                                                <a href="#">Html</a>
                                                                                <a href="#">Css</a>
                                                                                <a href="#">Wordpress</a>
                                                                                <a href="#" class="more-skills">+4</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-buttons">
                                                                            <ul class="link-btn">
                                                                                <li><a href="#" class="link-j1" title="Apply Now">APPLY NOW</a></li>
                                                                                <li><a href="job_single_view.html" class="link-j1" title="View Job">View Job</a></li>
                                                                                <li>
                                                                                    <div id="ex1" class="modal">
                                                                                        <div class="model-header">
                                                                                            <img src="images/profile.jpg" class="model-header-img">
                                                                                            <h5 class="model-header-img-title">John Doe</h5>
                                                                                        </div>
                                                                                        <div class="model-body">
                                                                                            <ul class="model-ul">
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="model-footer">
                                                                                            <div class="model-textarea">
                                                                                                <i class="fas fa-paste"></i>
                                                                                                <i class="fas fa-paper-plane"></i>
                                                                                                <textarea name="model-message" rows="1" class="model-msg"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- Link to open the modal -->
                                                                                    <a href="#ex1" rel="modal:open" class="link-j1"><i class="fas fa-comments"></i> Chat</a>
                                                                                </li>
                                                                                <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="job-item">
                                                                        <div class="job-top-dt">
                                                                            <div class="job-left-dt">
                                                                                <img src="images/homepage/latest-jobs/img-4.jpg" alt="">
                                                                                <div class="job-ut-dts">
                                                                                    <a href="#"><h4>Joy Smith</h4></a>
                                                                                    <span><i class="fas fa-map-marker-alt"></i> India</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="job-right-dt">
                                                                                <div class="job-price">$500</div>
                                                                                <div class="job-fp">Full Time</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-des-dt">
                                                                            <h4>Graphic Designer</h4>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                                                            <div class="job-skills">
                                                                                <a href="#">Illistrator</a>
                                                                                <a href="#">Photoshop</a>
                                                                                <a href="#" class="more-skills">+4</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-buttons">
                                                                            <ul class="link-btn">
                                                                                <li><a href="#" class="link-j1" title="Apply Now">APPLY NOW</a></li>
                                                                                <li><a href="job_single_view.html" class="link-j1" title="View Job">View Job</a></li>
                                                                                <li>
                                                                                    <div id="ex1" class="modal">
                                                                                        <div class="model-header">
                                                                                            <img src="images/profile.jpg" class="model-header-img">
                                                                                            <h5 class="model-header-img-title">John Doe</h5>
                                                                                        </div>
                                                                                        <div class="model-body">
                                                                                            <ul class="model-ul">
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="model-footer">
                                                                                            <div class="model-textarea">
                                                                                                <i class="fas fa-paste"></i>
                                                                                                <i class="fas fa-paper-plane"></i>
                                                                                                <textarea name="model-message" rows="1" class="model-msg"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- Link to open the modal -->
                                                                                    <a href="#ex1" rel="modal:open" class="link-j1"><i class="fas fa-comments"></i> Chat</a>
                                                                                </li>
                                                                                <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="job-item">
                                                                        <div class="job-top-dt">
                                                                            <div class="job-left-dt">
                                                                                <img src="images/homepage/latest-jobs/img-5.jpg" alt="">
                                                                                <div class="job-ut-dts">
                                                                                    <a href="#"><h4>Jassica William</h4></a>
                                                                                    <span><i class="fas fa-map-marker-alt"></i> Australia</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="job-right-dt">
                                                                                <div class="job-price">$300</div>
                                                                                <div class="job-fp">Full Time</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-des-dt">
                                                                            <h4>Data Science &amp; Analytics</h4>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                                                            <div class="job-skills">
                                                                                <a href="#">Delivery</a>
                                                                                <a href="#">Local</a>
                                                                                <a href="#">Graduation</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-buttons">
                                                                            <ul class="link-btn">
                                                                                <li><a href="#" class="link-j1" title="Apply Now">APPLY NOW</a></li>
                                                                                <li><a href="job_single_view.html" class="link-j1" title="View Job">View Job</a></li>
                                                                                <li>
                                                                                    <div id="ex1" class="modal">
                                                                                        <div class="model-header">
                                                                                            <img src="images/profile.jpg" class="model-header-img">
                                                                                            <h5 class="model-header-img-title">John Doe</h5>
                                                                                        </div>
                                                                                        <div class="model-body">
                                                                                            <ul class="model-ul">
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="model-footer">
                                                                                            <div class="model-textarea">
                                                                                                <i class="fas fa-paste"></i>
                                                                                                <i class="fas fa-paper-plane"></i>
                                                                                                <textarea name="model-message" rows="1" class="model-msg"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- Link to open the modal -->
                                                                                    <a href="#ex1" rel="modal:open" class="link-j1"><i class="fas fa-comments"></i> Chat</a>
                                                                                </li>
                                                                                <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="job-item">
                                                                        <div class="job-top-dt">
                                                                            <div class="job-left-dt">
                                                                                <img src="images/homepage/latest-jobs/img-6.jpg" alt="">
                                                                                <div class="job-ut-dts">
                                                                                    <a href="#"><h4>Gambolthemes</h4></a>
                                                                                    <span><i class="fas fa-map-marker-alt"></i> India</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="job-right-dt">
                                                                                <div class="job-price">$60/hr</div>
                                                                                <div class="job-fp">Full Time</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-des-dt">
                                                                            <h4>Front End Developer</h4>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam cursus pulvinar dolor nec...</p>
                                                                            <div class="job-skills">
                                                                                <a href="#">Html</a>
                                                                                <a href="#">Css</a>
                                                                                <a href="#">Boostrap</a>
                                                                                <a href="#" class="more-skills">+4</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="job-buttons">
                                                                            <ul class="link-btn">
                                                                                <li><a href="#" class="link-j1" title="Apply Now">APPLY NOW</a></li>
                                                                                <li><a href="job_single_view.html" class="link-j1" title="View Job">View Job</a></li>
                                                                                <li>
                                                                                    <div id="ex1" class="modal">
                                                                                        <div class="model-header">
                                                                                            <img src="images/profile.jpg" class="model-header-img">
                                                                                            <h5 class="model-header-img-title">John Doe</h5>
                                                                                        </div>
                                                                                        <div class="model-body">
                                                                                            <ul class="model-ul">
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                                <li class="model-list-chat">
                                                                                                    <div class="model-chat-1">
                                                                                                        <img class="model-body-img" src="images/profile.jpg">
                                                                                                        <div class="chat-text-wrap">
                                                                                                            <div class="chat-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                            <div class="send-time">5:00 pm</div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="model-chat-2">
                                                                                                        <div class="chat-text-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, eveniet.</div>
                                                                                                        <div class="send-time2">5:00 pm</div>
                                                                                                    </div>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="model-footer">
                                                                                            <div class="model-textarea">
                                                                                                <i class="fas fa-paste"></i>
                                                                                                <i class="fas fa-paper-plane"></i>
                                                                                                <textarea name="model-message" rows="1" class="model-msg"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- Link to open the modal -->
                                                                                    <a href="#ex1" rel="modal:open" class="link-j1"><i class="fas fa-comments"></i> Chat</a>
                                                                                </li>
                                                                                <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text-center">
                                                                <button class="view-links" onclick="window.location.href = '#';">BROWSE ALL JOBS</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="advertisement">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <div class="advertisement-wrap">
                                                    <img class="advertisement-img" src="images/booknow.jpg">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-12">
                                                <div class="advertisement-wrap">
                                                    <img class="advertisement-img" src="images/booknow.jpg">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-12">
                                                <div class="advertisement-wrap">
                                                    <img class="advertisement-img" src="images/booknow.jpg">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="all-categories">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <div class="main-heading">
                                                    <h2>Choose Category</h2>
                                                    <span>Find quality talent or agencies</span>
                                                    <div class="line-shape1">
                                                        <img src="images/line.svg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="job-categories mt-30">
                                                    <div class="row no-gutters">
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="p-category">
                                                                <a href="#" title="">
                                                                    <img src="images/homepage/categories/icon-5.svg" alt="">
                                                                    <span>Web, Mobile &amp; Software Dev</span>
                                                                    <p>150 Jobs</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="p-category">
                                                                <a href="#" title="">
                                                                    <img src="images/homepage/categories/icon-2.svg" alt="">
                                                                    <span>Data Science &amp; Analytics</span>
                                                                    <p>120 Jobs</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="p-category">
                                                                <a href="#" title="">
                                                                    <img src="images/homepage/categories/icon-3.svg" alt="">
                                                                    <span>Admin Support</span>
                                                                    <p>290 Jobs</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="p-category">
                                                                <a href="#" title="">
                                                                    <img src="images/homepage/categories/icon-4.svg" alt="">
                                                                    <span>Design &amp; Creative</span>
                                                                    <p>250 Jobs</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="p-category">
                                                                <a href="#" title="">
                                                                    <img src="images/homepage/categories/icon-11.svg" alt="">
                                                                    <span>Accounting &amp; Consulting</span>
                                                                    <p>350 Jobs</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="p-category">
                                                                <a href="#" title="">
                                                                    <img src="images/homepage/categories/icon-13.svg" alt="">
                                                                    <span>Writing</span>
                                                                    <p>90 Jobs</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="p-category">
                                                                <a href="#" title="">
                                                                    <img src="images/homepage/categories/icon-14.svg" alt="">
                                                                    <span>Legal</span>
                                                                    <p>250 Jobs</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="p-category">
                                                                <a href="#" title="">
                                                                    <img src="images/homepage/categories/icon-15.svg" alt="">
                                                                    <span>IT &amp; Networking</span>
                                                                    <p>150 Jobs</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="p-category">
                                                                <a href="#" title="">
                                                                    <img src="images/homepage/categories/icon-9.svg" alt="">
                                                                    <span>Sales &amp; Marketing</span>
                                                                    <p>110 Jobs</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="p-category">
                                                                <a href="#" title="">
                                                                    <img src="images/homepage/categories/icon-16.svg" alt="">
                                                                    <span>Customer Service</span>
                                                                    <p>310 Jobs</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="p-category">
                                                                <a href="#" title="">
                                                                    <img src="images/homepage/categories/icon-17.svg" alt="">
                                                                    <span>Translation</span>
                                                                    <p>410 Jobs</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                                            <div class="p-category">
                                                                <a href="#" title="">
                                                                    <img src="images/homepage/categories/icon-7.svg" alt="">
                                                                    <span>Engineering &amp; Architecture</span>
                                                                    <p>190 Jobs</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 px-0">
                                <div class="side-bar1">
                                    <hr class="sidebar-hr">
                                    <h5 class="sidebar-heading">Top Employers</h5>
                                    <hr>
                                    <div class="top-employers-imgs">
                                        <img class="top-employers-img" src="images/itonic.jpg">
                                        <img class="top-employers-img" src="images/samridhi-school.jpg">
                                        <img class="top-employers-img" src="images/ing-group.jpg">
                                    </div>
                                </div>
                                <div class="side-bar1">
                                    <hr class="sidebar-hr">
                                    <h5 class="sidebar-heading">Jobs By Category</h5>
                                    <hr>
                                    <div class="job-list">
                                        <ul class="jobs-by-category-ul">
                                            <li class="jobs-by-category-list">
                                                <i class="fas fa-graduation-cap"> </i><a class="jobs-category-link" href="#">Teaching/ Education <span class="jobs-available">(340)</span></a>
                                            </li>
                                            <li class="jobs-by-category-list">
                                                <i class="fas fa-graduation-cap"> </i><a class="jobs-category-link" href="#">Teaching/ Education <span class="jobs-available">(340)</span></a>
                                            </li>
                                            <li class="jobs-by-category-list">
                                                <i class="fas fa-graduation-cap"> </i><a class="jobs-category-link" href="#">Teaching/ Education <span class="jobs-available">(340)</span></a>
                                            </li>
                                            <li class="jobs-by-category-list">
                                                <i class="fas fa-graduation-cap"> </i><a class="jobs-category-link" href="#">Teaching/ Education <span class="jobs-available">(340)</span></a>
                                            </li>
                                            <span id="dots"></span>
                                            <span id="more">
											<li class="jobs-by-category-list">
												<i class="fas fa-graduation-cap"> </i><a class="jobs-category-link" href="#">Teaching/ Education <span class="jobs-available">(340)</span></a>
											</li>
											<li class="jobs-by-category-list">
												<i class="fas fa-graduation-cap"> </i><a class="jobs-category-link" href="#">Teaching/ Education <span class="jobs-available">(340)</span></a>
											</li>
										</span>
                                        </ul>
                                        <div class="line-brk-job"></div>
                                        <button onclick="myFunction()" id="myBtn">View More</button>
                                    </div>
                                </div>
                                <div class="side-bar1">
                                    <hr class="sidebar-hr">
                                    <h5 class="sidebar-heading">Recent Tenders</h5>
                                    <hr>
                                    <ul class="tenders-ul">
                                        <li class="tender-list">
                                            <a class="tender-link" href="#"><img class="tender-img" src="images/samridhi-school.jpg">
                                                <h6 class="tender-heading">Consultant for Project Evaluation</h6></a>
                                            <div class="tender-views"> Total Views: <span class="views-number"> 10 </span></div>
                                        </li>
                                        <li class="tender-list">
                                            <a class="tender-link" href="#"><img class="tender-img" src="images/samridhi-school.jpg">
                                                <h6 class="tender-heading">Consultant for Project Evaluation</h6></a>
                                            <div class="tender-views"> Total Views: <span class="views-number"> 10 </span></div>
                                        </li>
                                        <li class="tender-list">
                                            <a class="tender-link" href="#"><img class="tender-img" src="images/samridhi-school.jpg">
                                                <h6 class="tender-heading">Consultant for Project Evaluation</h6></a>
                                            <div class="tender-views"> Total Views: <span class="views-number"> 10 </span></div>
                                        </li>
                                        <li class="tender-list">
                                            <a class="tender-link" href="#"><img class="tender-img" src="images/samridhi-school.jpg">
                                                <h6 class="tender-heading">Consultant for Project Evaluation</h6></a>
                                            <div class="tender-views"> Total Views: <span class="views-number"> 10 </span></div>
                                        </li>
                                        <li class="tender-list">
                                            <a class="tender-link" href="#"><img class="tender-img" src="images/samridhi-school.jpg">
                                                <h6 class="tender-heading">Consultant for Project Evaluation</h6></a>
                                            <div class="tender-views"> Total Views: <span class="views-number"> 10 </span></div>
                                        </li>
                                        <hr>
                                        <div class="tender-view-all-wrap">
                                            <i class="far fa-eye"> </i><a class="tender-view-all" href="#">view all</a>
                                        </div>
                                    </ul>
                                </div>
                                <div class="side-bar1">
                                    <hr class="sidebar-hr">
                                    <h5 class="sidebar-heading">Career Services</h5>
                                    <hr>
                                    <div class="career-service-wrap">
                                        <img class="career-service-img" src="images/resume.jpg">
                                        <img class="career-service-img" src="images/training.jpg">
                                    </div>
                                </div>
                                <div class="side-bar1">
                                    <hr class="sidebar-hr">
                                    <h5 class="sidebar-heading">Jobs By Industry</h5>
                                    <hr>
                                    <div class="job-by-industry">
                                        <ul class="jobs-by-industry-ul">
                                            <li class="job-by-industry">
                                                <a class="job-by-industry-link" href="#">Education - School & Colleges <span class="total-job-industry">(450)</span></a>
                                            </li>
                                            <li class="job-by-industry">
                                                <a class="job-by-industry-link" href="#">Finance Companies <span class="total-job-industry">(101)</span></a>
                                            </li>
                                            <li class="job-by-industry">
                                                <a class="job-by-industry-link" href="#">Information / Computer / Technology <span class="total-job-industry">(92)</span></a>
                                            </li>
                                            <li class="job-by-industry">
                                                <a class="job-by-industry-link" href="#">Hospital / Clinic / Diagnostic <span class="total-job-industry">(83)</span></a>
                                            </li>
                                            <span id="dot"></span>
                                            <span id="plus">
											<li class="job-by-industry">
												<a class="job-by-industry-link" href="#">Finance Companies <span class="total-job-industry">(101)</span></a>
											</li>
											<li class="job-by-industry">
												<a class="job-by-industry-link" href="#">Hospital / Clinic / Diagnostic <span class="total-job-industry">(83)</span></a>
											</li>
										</span>
                                        </ul>
                                        <div class="line-brk-job"></div>
                                        <button onclick="myFunction2()" id="myBtn2">View More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="featured-candidates">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="main-heading">
                                    <h2>Featured Candidates</h2>
                                    <span>Discover, Intelligent, Experienced, Professional, Trustworthy, Freelancer & Full Time Candidates.</span>
                                    <div class="line-shape1">
                                        <img src="images/line.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="lts-jobs-slider">
                                    <div class="owl-carousel jobs-owl owl-theme">
                                        <div class="item">
                                            <div class="job-item">
                                                <div class="job-top-dt1 text-center">
                                                    <div class="job-center-dt">
                                                        <img src="images/homepage/candidates/img-1.jpg" alt="">
                                                        <div class="job-urs-dts">
                                                            <a href="#"><h4>John Doe</h4></a>
                                                            <span>UX Designer</span>
                                                            <div class="avialable">Available Full Time</div>
                                                        </div>
                                                    </div>
                                                    <div class="job-price hire-price">$50/hr</div>
                                                </div>
                                                <div class="rating-location">
                                                    <div class="left-rating">
                                                        <div class="rtitle">Rating</div>
                                                        <div class="star">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span>4.9</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-location">
                                                        <div class="text-left">
                                                            <div class="rtitle">Location</div>
                                                            <span><i class="fas fa-map-marker-alt"></i> New York City</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="job-buttons">
                                                    <ul class="link-btn">
                                                        <li><a href="other_freelancer_profile.html" class="link-j1" title="View Profile">View Profile</a></li>
                                                        <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                                        <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="job-item">
                                                <div class="job-top-dt1 text-center">
                                                    <div class="job-center-dt">
                                                        <img src="images/homepage/candidates/img-2.jpg" alt="">
                                                        <div class="job-urs-dts">
                                                            <a href="#"><h4>Albert Dua</h4></a>
                                                            <span>Wordpress Developer</span>
                                                            <div class="avialable">Available Full Time</div>
                                                        </div>
                                                    </div>
                                                    <div class="job-price hire-price">$50/hr</div>
                                                </div>
                                                <div class="rating-location">
                                                    <div class="left-rating">
                                                        <div class="rtitle">Rating</div>
                                                        <div class="star">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span>4.9</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-location">
                                                        <div class="text-left">
                                                            <div class="rtitle">Location</div>
                                                            <span><i class="fas fa-map-marker-alt"></i> Australia</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="job-buttons">
                                                    <ul class="link-btn">
                                                        <li><a href="other_freelancer_profile.html" class="link-j1" title="View Profile">View Profile</a></li>
                                                        <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                                        <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="job-item">
                                                <div class="job-top-dt1 text-center">
                                                    <div class="job-center-dt">
                                                        <img src="images/homepage/candidates/img-3.jpg" alt="">
                                                        <div class="job-urs-dts">
                                                            <a href="#"><h4>Rock William</h4></a>
                                                            <span>Php Developer</span>
                                                            <div class="avialable">Available Full Time</div>
                                                        </div>
                                                    </div>
                                                    <div class="job-price hire-price">$60/hr</div>
                                                </div>
                                                <div class="rating-location">
                                                    <div class="left-rating">
                                                        <div class="rtitle">Rating</div>
                                                        <div class="star">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span>5.0</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-location">
                                                        <div class="text-left">
                                                            <div class="rtitle">Location</div>
                                                            <span><i class="fas fa-map-marker-alt"></i> India</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="job-buttons">
                                                    <ul class="link-btn">
                                                        <li><a href="other_freelancer_profile.html" class="link-j1" title="View Profile">View Profile</a></li>
                                                        <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                                        <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="job-item">
                                                <div class="job-top-dt1 text-center">
                                                    <div class="job-center-dt">
                                                        <img src="images/homepage/candidates/img-4.jpg" alt="">
                                                        <div class="job-urs-dts">
                                                            <a href="#"><h4>Joy Smith</h4></a>
                                                            <span>Android Developer</span>
                                                            <div class="avialable">Available Full Time</div>
                                                        </div>
                                                    </div>
                                                    <div class="job-price hire-price">$60/hr</div>
                                                </div>
                                                <div class="rating-location">
                                                    <div class="left-rating">
                                                        <div class="rtitle">Rating</div>
                                                        <div class="star">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span>5.0</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-location">
                                                        <div class="text-left">
                                                            <div class="rtitle">Location</div>
                                                            <span><i class="fas fa-map-marker-alt"></i> India</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="job-buttons">
                                                    <ul class="link-btn">
                                                        <li><a href="other_freelancer_profile.html" class="link-j1" title="View Profile">View Profile</a></li>
                                                        <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                                        <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="job-item">
                                                <div class="job-top-dt1 text-center">
                                                    <div class="job-center-dt">
                                                        <img src="images/homepage/candidates/img-5.jpg" alt="">
                                                        <div class="job-urs-dts">
                                                            <a href="#"><h4>Sanaya Sharma</h4></a>
                                                            <span>Accountant manager</span>
                                                            <div class="avialable">Available Full Time</div>
                                                        </div>
                                                    </div>
                                                    <div class="job-price hire-price">$30/hr</div>
                                                </div>
                                                <div class="rating-location">
                                                    <div class="left-rating">
                                                        <div class="rtitle">Rating</div>
                                                        <div class="star">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span>4.0</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-location">
                                                        <div class="text-left">
                                                            <div class="rtitle">Location</div>
                                                            <span><i class="fas fa-map-marker-alt"></i> India</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="job-buttons">
                                                    <ul class="link-btn">
                                                        <li><a href="other_freelancer_profile.html" class="link-j1" title="View Profile">View Profile</a></li>
                                                        <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                                        <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="job-item">
                                                <div class="job-top-dt1 text-center">
                                                    <div class="job-center-dt">
                                                        <img src="images/homepage/candidates/img-6.jpg" alt="">
                                                        <div class="job-urs-dts">
                                                            <a href="#"><h4>Jass Singh</h4></a>
                                                            <span>Front End Developer</span>
                                                            <div class="avialable">Available Full Time</div>
                                                        </div>
                                                    </div>
                                                    <div class="job-price hire-price">$25/hr</div>
                                                </div>
                                                <div class="rating-location">
                                                    <div class="left-rating">
                                                        <div class="rtitle">Rating</div>
                                                        <div class="star">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <span>5.0</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-location">
                                                        <div class="text-left">
                                                            <div class="rtitle">Location</div>
                                                            <span><i class="fas fa-map-marker-alt"></i> India</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="job-buttons">
                                                    <ul class="link-btn">
                                                        <li><a href="other_freelancer_profile.html" class="link-j1" title="View Profile">View Profile</a></li>
                                                        <li><a href="#" class="link-j1" title="Hire Me">Hire Me</a></li>
                                                        <li class="bkd-pm"><button class="bookmark1" title="bookmark"><i class="fas fa-heart"></i></button></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button class="view-links" onclick="window.location.href = '#';">SEE ALL CANDIDATES</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="all-categories">-->
                    <!--<div class="container">-->
                        <!--<div class="row">-->
                            <!--<div class="col-md-6 col-12">-->
                                <!--<div class="main-heading text-left">-->
                                    <!--<h2>Post Jobs</h2>-->
                                    <!--<span>Quick and easy way to advertise.</span>-->
                                    <!--<div class="line-shape1">-->
                                        <!--<img src="images/line.svg" alt="">-->
                                    <!--</div>-->
                                <!--</div>-->
                                <!--<div class="text152">-->
                                    <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu purus et diam blandit vehicula sit amet sed metus. Fusce condimentum non neque at fringilla.</p>-->
                                <!--</div>-->
                                <!--<div class="text-steps">-->
                                    <!--<div class="text-step1">-->
                                        <!--<div class="btext-heading">-->
                                            <!--<i class="far fa-check-circle"></i>Hire for your company.-->
                                        <!--</div>-->
                                        <!--<p>Aenean malesuada aliquet tincidunt. Nam a nisl mi. Fusce ornare fermentum enim, id interdum velit posuere quis.<p>-->
                                    <!--</div>-->
                                    <!--<div class="text-step1">-->
                                        <!--<div class="btext-heading">-->
                                            <!--<i class="far fa-check-circle"></i>Daily out reach to qualified matches.-->
                                        <!--</div>-->
                                        <!--<p>Aenean malesuada aliquet tincidunt. Nam a nisl mi. Fusce ornare fermentum enim, id interdum velit posuere quis.<p>-->
                                    <!--</div>-->
                                    <!--<div class="btns15">-->
                                        <!--<button class="btn-152" onclick="window.location.href = 'post_a_job.html';">Post a Job</button>-->
                                        <!--<button class="btn-153" onclick="window.location.href = '#';">Learn More</button>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                            <!--<div class="col-md-6 col-12">-->
                                <!--<div class="main-heading text-left mt-80">-->
                                    <!--<h2>Talented Candidates</h2>-->
                                    <!--<span>Get discoverd by companies looking to hire remote.</span>-->
                                    <!--<div class="line-shape1">-->
                                        <!--<img src="images/line.svg" alt="">-->
                                    <!--</div>-->
                                <!--</div>-->
                                <!--<div class="text152">-->
                                    <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu purus et diam blandit vehicula sit amet sed metus. Fusce condimentum non neque at fringilla.</p>-->
                                <!--</div>-->
                                <!--<div class="text-steps">-->
                                    <!--<div class="text-step1">-->
                                        <!--<div class="btext-heading">-->
                                            <!--<i class="far fa-check-circle"></i>Get your profile listed.-->
                                        <!--</div>-->
                                        <!--<p>Aenean malesuada aliquet tincidunt. Nam a nisl mi. Fusce ornare fermentum enim, id interdum velit posuere quis.<p>-->
                                    <!--</div>-->
                                    <!--<div class="text-step1">-->
                                        <!--<div class="btext-heading">-->
                                            <!--<i class="far fa-check-circle"></i>Customize your profile.-->
                                        <!--</div>-->
                                        <!--<p>Aenean malesuada aliquet tincidunt. Nam a nisl mi. Fusce ornare fermentum enim, id interdum velit posuere quis.<p>-->
                                    <!--</div>-->
                                    <!--<div class="btns15">-->
                                        <!--<button class="btn-152" onclick="window.location.href = 'browse_freelancers.html';">Get Listed</button>-->
                                        <!--<button class="btn-153" onclick="window.location.href = '#';">Learn More</button>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
            </main>

            <footer class="footer">
                <div class="subscribe-newsletter">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-lg-6 col-md-6">
                                <div class="subcribes">
                                    <div class="text-step1">
                                        <h4>Subscribe to Newsletter</h4>
                                        <div class="btext-heading mt-2" style="color:#acacac; font-size:14px;">
                                            <i class="fas fa-check-circle"></i>Cras nunc mauris, rhoncus eu justo at, egestas sagittis felis. Ut sed feugiat eros.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6">
                                <div class="subcribe-input">
                                    <input class="nltr-input" type="email" placeholder="Your Email Address">
                                    <button class="s-btn">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="about-jobby">
                                <a href="index.html"><img src="images/logo1.svg" alt=""></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu purus et diam blandit vehicula sit amet sed metus. Fusce condimentum non neque at fringilla. Aenean malesuada aliquet tincidunt.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="footer-links">
                                <h4>About</h4>
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="sign_in.html">Login</a></li>
                                    <li><a href="my_freelancer_profile.html">My Account</a></li>
                                    <li><a href="contact_us.html">Contact</a></li>
                                    <li><a href="privacy_policy.html">Privacy Policy</a></li>
                                    <li><a href="Terms.html">Terms of Use</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="footer-links">
                                <h4>For Companies</h4>
                                <ul>
                                    <li><a href="browse_freelancers.html">Browese Freelancers</a></li>
                                    <li><a href="post_a_job.html">Post a Job</a></li>
                                    <li><a href="post_a_project.html">Post a Project</a></li>
                                    <li><a href="pricing_plans.html">Pricing Plans</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="footer-links">
                                <h4>For Candidates</h4>
                                <ul>
                                    <li><a href="browse_jobs.html">Browese Jobs</a></li>
                                    <li><a href="my_freelancer_jobs.html">Jobs Alerts</a></li>
                                    <li><a href="my_freelancer_jobs.html">Applied Jobs</a></li>
                                    <li><a href="my_freelancer_bookmarks.html">Bookmarks</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copy-social">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="copyright">
                                    <i class="far fa-copyright"></i>Copyright 2019 <span>Jobby</span> by <a href="#" >Gambolthemes</a>. All Right Reserved.
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="social-icons">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>


    </div>


</template>

<script>
    export default {
        name: "front"
    }
</script>

<style scoped>

</style>