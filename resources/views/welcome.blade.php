<!DOCTYPE html>
<html lang="en">

<head>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','assest/www.google-analytics.com/analytics.js','ga');
		
		ga('create', 'code_here', 'auto');
		ga('send', 'pageview');
	</script>
    
    <title>{{$data->title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="">
    <meta property="og:image" content="http://clapat.ro/themes/nanotech/prez/01_preview.png" />
    <meta charset="UTF-8" />    
    <link rel="icon" type="assest/image/ico" href="assest/images/logo-white.png" />
    <link href="assest/style.css" rel="stylesheet" />
    <link href="assest/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,450,500,600,700" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet">
   
</head>


<body class="hidden hidden-ball smooth-scroll rounded-borders hero-below-caption" data-primary-color="#ffba00">

	
	<main>		
        <!-- Preloader -->
        <div class="preloader-wrap" data-centerLine="Loading">
            <div id="text-container">
                <div class="word">{{$data->title}}</div>
                <!-- <div class="word">Hang tight, magic is happening</div>
                <div class="word">Loading your adventure</div> -->
            </div>
                
            <div class="loadbar"></div>
            <div class="percentage-wrapper"><div class="percentage" id="precent"></div></div>
            <div class="percentage-intro">Please wait, content is loading</div>
        </div>

        <div class="cd-index cd-main-content">
    
        <!-- Page Content -->
        <div id="clapat-page-content" class="dark-content" data-bgcolor="#ebebeb">
            
            <!-- Header -->
            <header class="clapat-header classic-menu invert-header" data-menucolor="#0c0c0c">
            	
                <!-- Graidient -->
                <div class="header-gradient"></div>
                <!--/Graidient -->
                
                <div id="header-container">
                	
                    <!-- Logo -->
                    <div id="clapat-logo" class="hide-ball">
                        <a class="ajax-link" data-type="page-transition" href="/">
                            <img class="black-logo" src="{{ asset('storage/' . $data->logo) }}" alt="ClaPat Logo">
                            <!--img class="white-logo" src="images/logo-white.png" alt="ClaPat Logo"-->
                        </a>
                    </div>
                    <!--/Logo -->
                                
                    
                    <!-- Navigation -->
                    <nav class="clapat-nav-wrapper"> 
                        <div class="nav-height">          
                            <ul data-breakpoint="1025" class="flexnav">
                                <li class="menu-timeline link"><a class="ajax-link active" data-type="page-transition" href="/"><div class="before-span"><span data-hover="Index">Home</span></div></a></li>
                                <li class="menu-timeline link"><a class="ajax-link" data-type="page-transition" href="/about"><div class="before-span"><span data-hover="Projects">About Me</span></div></a>
                                	<!-- <ul>
                                        <li><a class="ajax-link" href="index-portfolio.html" data-type="page-transition">Portfolio</a></li>
                                        <li><a class="ajax-link" href="index-playground.html" data-type="page-transition">Events</a></li>
                                    </ul> -->
                                </li>
                            </ul>
                        </div>          
                    </nav>
                    <!--/Navigation -->
                    
                    
                    <!-- Header Button -->
                    <a class="header-button ajax-link" data-type="page-transition" href="/contact">
                        <div class="button-icon-link right">                        
                            <div class="icon-wrap-scale">
                                <div class="icon-wrap parallax-wrap">
                                    <div class="button-icon parallax-element">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="button-text sticky right" href="/contact"><span data-hover="Let's Talk">Let's Talk</span></div>                        
                        </div>
                    </a>
                    <!--/Header Button -->
                    
                    
                    <!-- Menu Burger -->
                    <div class="button-wrap right menu burger-lines">
                        <div class="icon-wrap parallax-wrap">
                            <div class="button-icon parallax-element">
                                <div id="burger-wrapper">
                                    <div id="menu-burger">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="button-text sticky right"><span data-hover="Menu">Menu</span></div> 
                    </div>
                    <!--/Menu Burger -->
            
                </div>
            </header>
            <!--/Header -->
            
            
            
            <!-- Content Scroll -->
            <div id="content-scroll">
            
            
                <!-- Main -->
                <div id="main">
                
                    <!-- Hero Section -->
                    <div id="hero">
                        <div id="hero-styles">
                            <div id="hero-caption" class="content-full-width parallax-scroll-caption text-align-center hero-full-caption">
                                <div class="inner">
                                
                                    <h1 class="hero-title caption-timeline">
                                        <span>{{$data->title}}</span>
                                    </h1>
                                    
                                    <div class="hero-subtitle caption-timeline onload-shuffle">
                                        <span>Sharing My thoughts</span> <span>through my write-ups</span>
                                    </div>                                   
                                </div>
                            </div>
                            <div id="hero-footer" class="has-border">
                            	<div class="hero-footer-left">
                                	<div class="button-wrap left scroll-down">
                                        <div class="icon-wrap parallax-wrap">
                                            <div class="button-icon parallax-element">
                                                <i class="fa-solid fa-arrow-down"></i>
                                            </div>
                                        </div>
                                        <div class="button-text sticky left"><span data-hover="Scroll to Explore">Scroll to Explore</span></div> 
                                    </div>
                                </div>
                            </div>                                                              
                        </div>
                    </div>                      
                    <!--/Hero Section -->
                    
                    
                    <!-- Main Content -->
                    <div id="main-content">
                        <!-- Main Page Content -->
                        <div id="main-page-content">
                            <!-- Fit Thumb Screen Effects -->                                                          
                            <div id="itemsWrapperLinks">                               
                                <div id="itemsWrapper" class="webgl-fitthumbs fx-one">
                                
                                    <!-- ClaPat Portfolio -->
                                    <div class="showcase-portfolio expand-grid filp-grid">

                                        <?php foreach($Categorie as $value){?>
										<div class="clapat-item not-expanded">
                                            <div class="slide-inner trigger-item" data-centerLine="OPEN">                                                    
                                                <div class="img-mask pixels-cover">
                                                    <a class="slide-link" data-type="page-transition" href="{{ url('/single_story', ['id' => $value->id]) }}"></a>
                                                    <div class="section-image trigger-item-link">
                                                        <img src="{{ asset('storage/' . $value->logo) }}" class="item-image grid__item-img" alt="">
                                                    </div>                                                
                                                    <img src="{{ asset('storage/' . $value->logo) }}" class="grid__item-img grid__item-img--large" alt="">                              
                                                </div>
                                                <div class="slide-caption trigger-item-link-secondary">
                                                    <div class="slide-title"><span>{{$value->categories}}</span></div>                                                                   
                                                </div>
                                            </div>
                                        </div>
                                       <?php }?>
                                        
                                        <!-- <div class="clapat-item expanded">
                                            <div class="slide-inner trigger-item" data-centerLine="OPEN">                                                    
                                                <div class="img-mask pixels-cover">
                                                    <a class="slide-link" data-type="page-transition" href="cards.html"></a>
                                                    <div class="section-image  trigger-item-link">
                                                        <img src="assest/images/02hero.jpg" class="item-image grid__item-img" alt="">
                                                    </div>                                                
                                                    <img src="assest/images/02hero.jpg" class="grid__item-img grid__item-img--large" alt="">                              
                                                </div>
                                                <div class="slide-caption trigger-item-link-secondary">
                                                    <div class="slide-title"><span>Poems</span></div>                                          
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="clapat-item not-expanded">                                                
                                            <div class="slide-inner trigger-item" data-centerLine="OPEN">                                                    
                                                <div class="img-mask pixels-cover">
                                                    <a class="slide-link" data-type="page-transition" href=" "></a>
                                                    <div class="section-image trigger-item-link">
                                                        <img src="assest/images/03hero.jpg" class="item-image grid__item-img" alt="">
                                                    </div>                                                
                                                    <img src="assest/images/03hero.jpg" class="grid__item-img grid__item-img--large" alt="">                              
                                                </div>
                                                <div class="slide-caption trigger-item-link-secondary">
                                                    <div class="slide-title"><span>Blogs</span></div>                                                                                                 
                                                </div>
                                            </div>
                                        </div> -->

									</div>
                                    <!-- ClaPat Portfolio --> 
                                
                                    <!-- Row -->
                                    <div class="content-row light-section row_padding_bottom " data-bgcolor="#ebebeb">
                                        
                                        <hr><hr> 
                                  </div> 
                                    <!--/Row -->
                                    
                                    
                            
                        		</div>                                                           
                            </div>    
                            <!-- Fit Thumb Screen Effects -->
                        </div>
                        <!--/Main Page Content -->
         
                    	<!-- Page Navigation --> 
                        <div id="page-nav" class="move-nav-onload">
                            <div class="page-nav-wrap">
                                <div class="page-nav-caption nav-full-caption content-full-width text-align-center">                                 
                                    <div class="inner">
                                        <a class="next-ajax-link-page" data-type="page-transition" data-centerline="GO TO" href="about">
                                            <div class="next-hero-title caption-timeline"><span>{{$data->title}}</span></div>
                                        </a>
                                        <div class="next-hero-subtitle caption-timeline">
                                        	<span>I am passionate about</span> <span>weaving words into stories that</span> <span>resonate, inspire, and connect hearts.</span>
                                        </div>                                   
                                    </div>               
                                </div>
                            </div>
                        </div>      
                        <!--/Page Navigation -->
                        
                                
                    </div>
                    <!--/Main Content --> 
                
                </div>
                <!--/Main -->
                
                
                
                @extends('footer')
