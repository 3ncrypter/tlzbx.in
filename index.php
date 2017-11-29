<?php include 'header.php';?>
        <!--home-->
        <section class="home wrapper parallax" id="home">
            <div class="container homeCont">
                <div class="col-md-12 col-sm-12 text-center text-white">
                    <div class="wlcm-txt">
                        <h2 class="uppercase">Welcome to World's Biggest Online Tools Catalogue</h2>
                        <span>We currently have <mark>25</mark> tools and <mark>150</mark> Users Online</span>
                    </div>
                </div>                
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-6 col-10 form-group mx-auto">
                        <i class="fa fa-bars form_ico fa-lg"></i>
                        <input type="text" class="form-control norad input-lg categ" id="categ" placeholder="Search Category">
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 col-10 form-group mx-auto">
                        <i class="fa fa-search form_ico fa-lg"></i>
                        <input type="text" class="form-control norad input-lg toolz" id="toolz" placeholder="Search Tool">
                    </div>
                    <a class="toDown" href="#tools"><i class="fa fa-angle-down"></i></a>
                </div>
            </div>
        </section>
        <!--home end-->
        <!--tools-->
        <section class="wrapper tools" id="tools">                        
            <div class="container toolsCont">                
                <div class="row">                    
                   <div class="col-md-12 col-sm-12 text-center">
                        <h1 class="uppercase">Tools</h1>
                       <div class="cloud">
                        <ul class="cloud-ul">
                            <li><a class="c7" href="rd-calculator.php">RD Calculator</a></li>
                            <li><a class="c3" href="#">FD Calculator</a></li> 
                            <li><a class="c5" href="#">Image Degrader</a></li> 
                            <li><a class="c1" href="#">Image Share</a></li> 
                            <li><a class="c2" href="#">Secret Notes</a></li> 
                            <li><a class="c5" href="#">Paste Board</a></li> 
                            <li><a class="c2" href="#">JS Minify</a></li> 
                            <li><a class="c4" href="#">CSS Minify</a></li> 
                            <li><a class="c3" href="#">SEO Submission</a></li>
                            <li><a class="c7" href="#">RD Calculator</a></li>
                            <li><a class="c3" href="#">FD Calculator</a></li> 
                            <li><a class="c5" href="#">Image Degrader</a></li> 
                            <li><a class="c1" href="#">Image Share</a></li> 
                            <li><a class="c9" href="#">Secret Notes</a></li> 
                            <li><a class="c5" href="#">Paste Board</a></li> 
                            <li><a class="c2" href="#">JS Minify</a></li> 
                            <li><a class="c4" href="#">CSS Minify</a></li> 
                            <li><a class="c3" href="#">SEO Submission</a></li>
                            <li><a class="c7" href="#">RD Calculator</a></li>
                            <li><a class="c3" href="#">FD Calculator</a></li> 
                            <li><a class="c5" href="#">Image Degrader</a></li> 
                            <li><a class="c1" href="#">Image Share</a></li> 
                            <li><a class="c2" href="#">Secret Notes</a></li> 
                            <li><a class="c5" href="#">Paste Board</a></li> 
                            <li><a class="c10" href="#">JS Minify</a></li> 
                            <li><a class="c4" href="#">CSS Minify</a></li> 
                            <li><a class="c3" href="#">SEO Submission</a></li>
                        </ul>
                       </div>
                    </div>
                </div>
            </div>
        </section>
        <!--tools end-->
        <!--about-->
        <section class="wrapper about" id="about">                       
            <div class="container aboutCont">                
                <div class="row">                    
                    <div class="col-md-12 col-sm-12 text-center">
                        <h1 class="uppercase">About</h1>
                        <div class="about-content col-md-12 col-sm-12 text-justify">
                            <p class="font20">Toolbox is a collection of web based open source tools to make your life easy. All the tools shared here are free to use and are open source. You can create a login account to customize your experiance for using the website. Here is the core team behind tlzbx.in</p>
                        </div>
                        <div class="about-team col-md-12 col-sm-12 text-center">
                            <div class="row" ng-controller="teamCtrl">
                                <div class="team-member col-md-3 col-sm-3" ng-repeat="i in items">
                                    <div class="member-img"><img src="assets/1.png" alt="Suraj Verma"/></div>
                                    <div class="member-nm">3ncrypter</div>
                                    <div class="member-pro">Bon Jour!!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about end-->
        <!--participate-->
        <section class="wrapper participate" id="participate">
            <div class="gap-md"></div>            
            <div class="container partCont">                
                <div class="row">                    
                    <div class="col-md-12 col-sm-12 text-center">
                        <h1 class="uppercase">Participate</h1>
                        <div class="part-content text-center cf">
                            <p class="font30">Sound's interesting ? why don't you fork us on github and participate then!!! We will love to see you there.</p>
                        </div>
                        <div class="mailing-list">                            
                            <div class="col-md-12 col-sm-12 text-center">
                                <p class="font20">Join our mailing list to get latest updates on development, we will never spam you, that's our promise.</p>
                            </div>
                            <div class="col-md-12 col-sm-12 text-center">
                                <form action="#" class="col-sm-6 col-md-6 col-12 mx-auto">
                                    <i class="fa fa-envelope fa-2x"></i>
                                    <input type="email" class="form-control norad form-control-lg mail-list" placeholder="Enter Your Email" />
                                </form>                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--participate end-->
        <!--contact-->        
        <section class="wrapper contact" id="contact">
            <div class="gap-md"></div>            
            <div class="container contactCont">                
                <div class="row">                    
                    <div class="col-md-12 col-sm-12 text-center">
                        <h1 class="uppercase">Contact</h1>
                        <div class="cont-content text-center cf">
                            <p class="font30">Follow us on various social networks</p>
                        </div>
                        <div class="social-list">                            
                            <ul class="socialMe">
                                <li><a href="https://www.facebook.com/verma.suraj" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="http://twitter.com/3ncrypter" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="http://www.linkedin.com/in/vermasuraj" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="http://plus.google.com/105383003914356993473" class="google-plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="http://instagram.com/3ncrypter" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="http://github.com/3ncrypter" class="github" target="_blank"><i class="fa fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact end-->
<?php include 'footer.php'; ?>