<!DOCTYPE html>
<html lang="en">

<head>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
		
		ga('create', 'code_here', 'auto');
		ga('send', 'pageview');
	</script>
    
    <title>Contact</title>
    <meta name="viewport" content="" />
    <meta name="description" content="" />
    <meta name="author" content="">
    <meta charset="UTF-8" />    
    <link rel="icon" type="assest/image/ico" href="assest/favicon.ico" />
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
        <!--/Preloader -->     
        
        <div class="cd-index cd-main-content">
    
        <!-- Page Content -->
        <div id="clapat-page-content" class="light-content" data-bgcolor="#0c0c0c">
            
            <!-- Header -->
            <header class="clapat-header classic-menu invert-header" data-menucolor="#0c0c0c">
            	
                <!-- Graidient -->
                <div class="header-gradient"></div>
                <!--/Graidient -->
                
                <div id="header-container">
                	
                    <!-- Logo -->
                    <div id="clapat-logo" class="hide-ball">
                        <a class="ajax-link" data-type="page-transition" href="/">
                            <img class="black-logo" src="assest/images/logo.png" alt="ClaPat Logo">
                            <img class="white-logo" src="assest/images/logo-white.png" alt="ClaPat Logo">
                        </a>
                    </div>
                    <!--/Logo -->
                                
                    
                    <!-- Navigation -->
                    <nav class="clapat-nav-wrapper"> 
                        <div class="nav-height">          
                            <ul data-breakpoint="1025" class="flexnav">
                                <li class="menu-timeline link"><a class="ajax-link" data-type="page-transition" href="/"><div class="before-span"><span data-hover="Index">Home</span></div></a></li>
                                <li class="menu-timeline link"><a class="ajax-link" data-type="page-transition" href="/about"><div class="before-span"><span data-hover="Agency">About Me</span></div></a></li>
                            </ul>
                        </div>          
                    </nav>
                    <!--/Navigation -->

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
                                
                                   
                                    <div class="hero-subtitle caption-timeline onload-shuffle">
                                    	<span>Let’s talk—because every great story starts with a conversation.</span>
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
                    				<div id="info-text">{{$data->email}}</div>
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
                                    <div class="content-row row_padding_top row_padding_bottom dark-section text-align-center" data-bgcolor="#0c0c0c">
                                        
                                        <h2 class="has-shuffle">Let's Talk</h2>
                                        
                                        <hr><hr> 
                                        
                                        <!-- Contact Formular -->
                                        <div id="contact-formular">
                                        
                                            <div id="message"></div>
                                        
                                            <form action="{{ url('/contactCreate') }}" method="POST"  enctype="multipart/form-data">
                                            @csrf 
                                                <div class="name-box">        
                                                    <input name="name" type="text" id="name" name="name" size="30" value="" placeholder="What's Your Name"><label class="input_label"></label>
                                                </div>                                                        
                                                <div class="email-box">
                                                    <input name="email" type="text" id="email" name="email" size="30" value="" placeholder="Your Email"><label class="input_label"></label>
                                                </div>                            
                                                <div class="message-box">
                                                    <textarea name="comments" cols="40" rows="4" id="comments" placeholder="Tell Us About Your Thoughts" ></textarea><label class="input_label slow"></label>
                                                </div>
                                                
                                               
                                                                             
                                                <div class="button-box has-animation" data-delay="100">             
                                                    <div class="clapat-button-wrap parallax-wrap hide-ball">
                                                        <div class="clapat-button parallax-element">
                                                            <div class="button-border rounded"><input type="submit" class="send_message" id="submit" value="Send Mail" /></div>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </form>                        
                                                                    
                                        </div>
                                        <!--/Contact Formular -->
                                    </div> 
                                    <!--/Row -->
                                    
                                    
                                    <!-- Row -->
                                    <div class="content-row dark-section text-align-center" data-bgcolor="#0c0c0c">
                                    
                                        <div class="one_third has-animation" data-delay="100">
                                            
                                            <div class="box-icon-wrapper block-boxes">
                                                <div class="box-icon">
                                                    <i class="fa fa-paper-plane fa-2x" aria-hidden="true"></i>
                                                </div>
                                                <div class="box-icon-content">
                                                    <h6 class="no-margins"><a href="mailto:office@nanotech.com" class="link"><span>{{$data->email}}</span></a></h6>
                                                    <p>Email</p>
                                                </div>
                                            </div> 
                                                                   
                                        </div>
                                        
                                        <div class="one_third has-animation"  data-delay="200">
                                            
                                            <div class="box-icon-wrapper block-boxes">
                                                <div class="box-icon">
                                                    <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                                                </div>
                                                <div class="box-icon-content">
                                                    <h6 class="no-margins">{{$data->address}}</h6>
                                                    <p>Address</p>
                                                </div>
                                            </div>
                                                                    
                                        </div>
                                        
                                        <div class=" one_third last has-animation"  data-delay="300">
                                            
                                            <div class="box-icon-wrapper block-boxes">
                                                <div class="box-icon">
                                                    <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                                                </div>
                                                <div class="box-icon-content">
                                                    <h6 class="no-margins">{{$data->number}}</h6>
                                                    <p>Phone</p>
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
                        
                                
                    </div>
                    <!--/Main Content --> 
                
                </div>
                <!--/Main -->
                
                
                
                
                <!-- Footer -->
                <footer class="clapat-footer hidden">        	
                    <div id="footer-container">
                        
                        <div id="backtotop" class="button-wrap left">
                            <div class="icon-wrap parallax-wrap">
                                <div class="button-icon parallax-element">
                                    <i class="fa-solid fa-angle-up"></i>
                                </div>
                            </div>
                            <div class="button-text sticky left"><span data-hover="Back Top">Back Top</span></div> 
                        </div>
                        
                        <div class="footer-middle">
                            <div class="copyright">2024 © anvichari_shabd</a>. All rights reserved.</div>
                        </div>
                        
                        <div class="socials-wrap">            	
                            <div class="socials-icon"><i class="fa-solid fa-share-nodes"></i></div>
                            <div class="socials-text">Follow Us</div>
                            <ul class="socials">
                            <li><span class="parallax-wrap"><a class="parallax-element" href="{{$data->fb}}" target="_blank">Fb</a></span></li>
                                <li><span class="parallax-wrap"><a class="parallax-element" href="{{$data->insta}}">In</a></span></li>
                                <li><span class="parallax-wrap"><a class="parallax-element" href="{{$data->youtube}}">YT</a></span></li>
                            </ul>                
                        </div>
                        
                    </div>
                </footer>
                <!--/Footer -->
            
        
        	</div>
            <!--/Content Scroll -->
            
            
            <div id="app"></div>
            
            
		</div>    
        <!--/Page Content -->
    
		</div>
	</main>
    
    
    
    
    <div class="cd-cover-layer"></div>
    <div id="magic-cursor">
        <div id="ball">
        	<div id="ball-drag-x"></div>
            <div id="ball-drag-y"></div>
        	<div id="ball-loader"></div>
        </div>
    </div>
    <div id="clone-image">
    	<div class="hero-translate"></div>
    </div>
    <div id="rotate-device"></div>
    
    
		
    <script src="assest/js/jquery.min.js"></script>       
    <script src="assest/cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
	<script src="assest/cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script src="assest/cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/Flip.min.js"></script>    
    <script src='assest/cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js'></script>
	<script src='assest/cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/5.0.0/imagesloaded.pkgd.min.js'></script>
	<script src='assest/cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.4.0/smooth-scrollbar.js'></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpK1sWi3J3EbUOkF_K4-UHzi285HyFX5M&amp;sensor=false"></script>
    
    <script src="assest/js/clapat.js"></script>
    <script src="assest/js/clapatwebgl.html"></script>
	<script src="assest/js/plugins.js"></script>
    
    <script src="assest/js/common.js"></script>
    <script src="assest/js/contact.js"></script>
    <script src="assest/js/scripts.js"></script>




</body>


<!-- Mirrored from clapat.ro/themes/nanotech/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Dec 2024 18:37:31 GMT -->
</html>