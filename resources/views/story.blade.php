<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','assest/www.google-analytics.com/analytics.js','ga');
		
		ga('create', 'code_here', 'auto');
		ga('send', 'pageview');
	</script>
    
    <title>{{$data->title}}</title>
    <meta name="viewport" content="" />
    <meta name="description" content="" />
    <meta name="author" content="">
    <meta property="og:image" content="http://clapat.ro/themes/nanotech/prez/01_preview.png" />
    <meta charset="UTF-8" />    
    <link rel="icon" type="{{ asset('assest/image/ico')}}" href="{{ asset('assest/images/logo-white.png')}}" />
    <link href="{{ asset('assest/style.css')}}" rel="stylesheet" />
    <link href="{{ asset('assest/css/all.min.css')}}" rel="stylesheet" />
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
                <div class="word">Brewing some cool things</div>
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
            
            
            
            <!-- Content Scroll -->
            <div id="content-scroll">
            
            
                <!-- Main -->
                <div id="main">
                
                    <!-- Hero Section -->
                    <div id="hero">
                        <div id="hero-styles">
                            <div id="hero-caption" class="content-full-width parallax-scroll-caption text-align-center hero-full-caption">
                                <div class="inner">
                                
                                    <h1 class="hero-title caption-timeline generate-spans">
                                    	<span>Quick Snippets</span>
                                    </h1>
                                    
                                    <div class="hero-subtitle caption-timeline onload-shuffle">
                                    	<span>Create dynamic layouts with minimal effort</span>
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
                                <div class="hero-footer-right">
                    				<div id="info-text">Featured Elements</div>
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
                                    <!-- Row -->
                                                                      
                                   <!-- Row -->
                                    <div class="content-row row_padding_bottom light-section" data-bgcolor="#ebebeb">
                                            
                                    <?php foreach($Categorie as $value){?>
                                        <dl class="accordion bigger-acc has-animation">
                                            <dt>
                                                <span class="link primary-font-title"><div>{{$value->title}}</div></span>
                                                <div class="acc-icon-wrap parallax-wrap">
                                                    <div class="acc-button-icon parallax-element">
                                                        <i class="fa fa-arrow-right"></i>
                                                    </div>
                                                </div>
                                            </dt>
                                            <dd class="accordion-content">{!! nl2br(e($value->content)) !!}</dd>

                                        </dl>
                                        <?php }?>
                                   </div> 
            
                                   
                                 
                                    <!-- Row -->
                                    <div class="content-row full row_padding_left row_padding_right dark-section text-align-center change-header-color disable-header-gradient" data-bgcolor="#0c0c0c">
                                        
                                        
                                        <div class="slowed-pin">
                                            <div class="slowed-text">
                                                <h2 class="big-title">This text will gradually <br> slow down its <br> movement speed until <br> all the images below <br> it have been scrolled <br> through</h2>
                                            </div>
                                            
                                            <div class="slowed-images">
                                                <div class="slowed-image">
                                                    <img src="{{ asset('assest/images/shortcodes/image01.jpg') }}" class="link" alt="Image">
                                                </div>
                                                <div class="slowed-image">
                                                    <img src="{{ asset('assest/images/shortcodes/image02.jpg') }}" class="link" alt="Image">
                                                </div>
                                                <div class="slowed-image">
                                                    <img src="{{ asset('assest/images/shortcodes/image03.jpg') }}" class="link" alt="Image">
                                                </div>
                                                <div class="slowed-image">
                                                    <img src="{{ asset('assest/images/shortcodes/image04.jpg') }}" class="link" alt="Image">
                                                </div>
                                                <div class="slowed-image">
                                                    <img src="{{ asset('assest/images/shortcodes/image01.jpg') }}" class="link" alt="Image">
                                                </div>
                                                <div class="slowed-image">
                                                    <img src="{{ asset('assest/images/shortcodes/image01.jpg') }}" class="link" alt="Image">
                                                </div>                                        
                                            </div>
                                            
                                        </div>
                                        
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
                                        <a class="next-ajax-link-page" data-type="page-transition" data-centerline="GO TO" href="resources.html">
                                            <div class="next-hero-title caption-timeline"><span>{{$data->title}}</span></div>
                                        </a>
                                        <div class="next-hero-subtitle caption-timeline">
                                        	<span>Bold headings and subtle details</span> <span>convey your content</span>
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
