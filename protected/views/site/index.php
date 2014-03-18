<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>  
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="main-slideshow">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="http://placehold.it/770x400" alt="Slide 1"/>
                                <div class="slider-caption">
                                    <h2><a href="blog-single.html">When a Doctor’s Visit Is a Guilt Trip</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                </div>
                            </li>
                            <li>
                                <img src="http://placehold.it/770x400" alt="Slide 1"/>
                                <div class="slider-caption">
                                    <h2><a href="blog-single.html">Unlocking the scrolls of Herculaneum</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                </div>
                            </li>
                            <li>
                                <img src="http://placehold.it/770x400" alt="Slide 1"/>
                                <div class="slider-caption">
                                    <h2><a href="blog-single.html">Corin Sworn wins Max Mara Art Prize</a></h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                                </div>
                            </li>
                        </ul> <!-- /.slides -->
                    </div> <!-- /.flexslider -->
                </div> <!-- /.main-slideshow -->
            </div> <!-- /.col-md-12 -->
            
            <div class="col-md-4">
                <div class="widget-item">
                    <div class="request-information">
                        <h4 class="widget-title">Request Information</h4>
                        <form class="request-info clearfix"> 
                            <div class="full-row">
                                <label for="cat">Campus of Interest:</label>                
                                <div class="input-select">
                                    <select name="cat" id="cat" class="postform">
                                        <option value="-1">-- select --</option>
                                        <optgroup label="Picnic">
                                          <option>Mustard</option>
                                          <option>Ketchup</option>
                                          <option>Relish</option>
                                        </optgroup>
                                        <optgroup label="Camping">
                                          <option>Tent</option>
                                          <option>Flashlight</option>
                                          <option>Toilet Paper</option>
                                        </optgroup>
                                    </select>
                                </div> <!-- /.input-select -->  
                            </div> <!-- /.full-row -->

                            <div class="full-row">
                                <label for="cat2">Program of Interest:</label>                                               
                                <div class="input-select">
                                    <select name="cat2" id="cat2" class="postform">
                                        <option value="-1">-- select --</option>
                                        <option class="level-0" value="49">Germany</option>
                                        <option class="level-0" value="56">United Kingdom</option>
                                        <option class="level-0" value="59">Italy</option>
                                        <option class="level-0" value="76">France</option>
                                        <option class="level-0" value="77">Belgium</option>
                                        <option class="level-0" value="79">Monaco</option>
                                    </select>
                                </div> <!-- /.input-select -->
                            </div> <!-- /.full-row -->

                            <div class="full-row">
                                <label for="yourname">Full Name:</label>
                                <input type="text" id="yourname" name="yourname">
                            </div> <!-- /.full-row -->

                            <div class="full-row">
                                <label for="email-id">Email Address:</label>
                                <input type="text" id="email-id" name="email-id">
                            </div> <!-- /.full-row -->
                            
                            <div class="full-row">
                                <div class="submit_field">
                                    <span class="small-text pull-left">Subscribe to our newsletter</span>
                                    <input class="mainBtn pull-right" type="submit" name="" value="Submit Request">
                                </div> <!-- /.submit-field -->
                            </div> <!-- /.full-row -->


                        </form> <!-- /.request-info -->
                    </div> <!-- /.request-information -->
                </div> <!-- /.widget-item -->
            </div> <!-- /.col-md-4 -->
        </div>
    </div>


    <div class="container">
        <div class="row">
            
            <!-- Here begin Main Content -->
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget-item">
                            <h2 class="welcome-text">Welcome to Universe Premium Template</h2>
                            <p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, adipisci, quibusdam, ad ab quisquam esse aspernatur exercitationem aliquam at fugit omnis vitae recusandae eveniet.</strong><br><br>Inventore, aliquam sequi nisi velit magnam accusamus reprehenderit nemo necessitatibus doloribus molestiae fugit repellat repudiandae dolor. Incidunt, nulla quidem illo suscipit nihil!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, dolorem, fugiat, commodi totam accusantium illo incidunt quis eius eum iure et fugit voluptas atque ratione nobis sed omnis quod ipsa.<br><br>Vivamus mattis nibh vitae dui egestas posuere. Maecenas a est at enim blandit interdum. Cras eget ipsum ac nunc tristique tincidunt sit amet nec quam. Vivamus sed suscipit enim, et dignissim tellus.</p>
                        </div> <!-- /.widget-item -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

                <div class="row">
                    
                    <!-- Show Latest Blog News -->
                    <div class="col-md-6">
                        <div class="widget-main">
                            <div class="widget-main-title">
                                <h4 class="widget-title">Latest News</h4>
                            </div> <!-- /.widget-main-title -->
                            <div class="widget-inner">
                                <div class="blog-list-post clearfix">
                                    <div class="blog-list-thumb">
                                        <a href="blog-single.html"><img src="http://placehold.it/65x65" alt=""></a>
                                    </div>
                                    <div class="blog-list-details">
                                        <h5 class="blog-list-title"><a href="blog-single.html">Graduate Open Day at the Ruskin</a></h5>
                                        <p class="blog-list-meta small-text"><span><a href="#">12 January 2014</a></span> with <span><a href="#">3 comments</a></span></p>
                                    </div>
                                </div> <!-- /.blog-list-post -->
                                <div class="blog-list-post clearfix">
                                    <div class="blog-list-thumb">
                                        <a href="blog-single.html"><img src="http://placehold.it/65x65" alt=""></a>
                                    </div>
                                    <div class="blog-list-details">
                                        <h5 class="blog-list-title"><a href="blog-single.html">Visiting Artists: Giles Bailey</a></h5>
                                        <p class="blog-list-meta small-text"><span><a href="#">12 January 2014</a></span> with <span><a href="#">3 comments</a></span></p>
                                    </div>
                                </div> <!-- /.blog-list-post -->
                                <div class="blog-list-post clearfix">
                                    <div class="blog-list-thumb">
                                        <a href="blog-single.html"><img src="http://placehold.it/65x65" alt=""></a>
                                    </div>
                                    <div class="blog-list-details">
                                        <h5 class="blog-list-title"><a href="blog-single.html">Workshop: Theories of the Image</a></h5>
                                        <p class="blog-list-meta small-text"><span><a href="#">12 January 2014</a></span> with <span><a href="#">3 comments</a></span></p>
                                    </div>
                                </div> <!-- /.blog-list-post -->
                            </div> <!-- /.widget-inner -->
                        </div> <!-- /.widget-main -->
                    </div> <!-- /col-md-6 -->
                    
                    <!-- Show Latest Events List -->
                    <div class="col-md-6">
                        <div class="widget-main">
                            <div class="widget-main-title">
                                <h4 class="widget-title">Events</h4>
                            </div> <!-- /.widget-main-title -->
                            <div class="widget-inner">
                                <div class="event-small-list clearfix">
                                    <div class="calendar-small">
                                        <span class="s-month">Jan</span>
                                        <span class="s-date">24</span>
                                    </div>
                                    <div class="event-small-details">
                                        <h5 class="event-small-title"><a href="event-single.html">Nelson Mandela Memorial Tribute</a></h5>
                                        <p class="event-small-meta small-text">Cramton Auditorium 9:00 AM to 1:00 PM</p>
                                    </div>
                                </div>
                                <div class="event-small-list clearfix">
                                    <div class="calendar-small">
                                        <span class="s-month">Jan</span>
                                        <span class="s-date">24</span>
                                    </div>
                                    <div class="event-small-details">
                                        <h5 class="event-small-title"><a href="event-single.html">OVADA Oxford Open</a></h5>
                                        <p class="event-small-meta small-text">Posner Center 4:30 PM to 6:00 PM</p>
                                    </div>
                                </div>
                                <div class="event-small-list clearfix">
                                    <div class="calendar-small">
                                        <span class="s-month">Jan</span>
                                        <span class="s-date">24</span>
                                    </div>
                                    <div class="event-small-details">
                                        <h5 class="event-small-title"><a href="event-single.html">Filming Objects And Sculpture</a></h5>
                                        <p class="event-small-meta small-text">A70 Cyert Hall 12:00 PM to 1:00 PM</p>
                                    </div>
                                </div>
                            </div> <!-- /.widget-inner -->
                        </div> <!-- /.widget-main -->
                    </div> <!-- /.col-md-6 -->
                    
                </div> <!-- /.row -->
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget-main">
                            <div class="widget-main-title">
                                <h4 class="widget-title">Our Campus</h4>
                            </div> <!-- /.widget-main-title -->
                            <div class="widget-inner">
                                <div class="our-campus clearfix">
                                    <ul>
                                        <li><img src="images/campus/campus-logo1.jpg" alt=""></li>
                                        <li><img src="images/campus/campus-logo2.jpg" alt=""></li>
                                        <li><img src="images/campus/campus-logo3.jpg" alt=""></li>
                                        <li><img src="images/campus/campus-logo4.jpg" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- /.widget-main -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

            </div> <!-- /.col-md-8 -->
            
            <!-- Here begin Sidebar -->
            <div class="col-md-4">

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Top Professors</h4>
                    </div>
                    <div class="widget-inner">
                        <div class="prof-list-item clearfix">
                           <div class="prof-thumb">
                                <img src="http://placehold.it/75x75" alt="Profesor Name">
                            </div> <!-- /.prof-thumb -->
                            <div class="prof-details">
                                <h5 class="prof-name-list">Prof. Shawn D. Salazar</h5>
                                <p class="small-text">Sed ut lectus ac lacus molestie posuere non tincidunt arcu.</p>
                            </div> <!-- /.prof-details -->
                        </div> <!-- /.prof-list-item -->
                        <div class="prof-list-item clearfix">
                           <div class="prof-thumb">
                                <img src="http://placehold.it/75x75" alt="Profesor Name">
                            </div> <!-- /.prof-thumb -->
                            <div class="prof-details">
                                <h5 class="prof-name-list">Prof. Shawn D. Salazar</h5>
                                <p class="small-text">Nullam sollicitudin libero ut ullamcorper pretium.</p>
                            </div> <!-- /.prof-details -->
                        </div> <!-- /.prof-list-item -->
                        <div class="prof-list-item clearfix">
                           <div class="prof-thumb">
                                <img src="http://placehold.it/75x75" alt="Profesor Name">
                            </div> <!-- /.prof-thumb -->
                            <div class="prof-details">
                                <h5 class="prof-name-list">Prof. Shawn D. Salazar</h5>
                                <p class="small-text">Integer et nisl tincidunt, euismod orci eget, posuere nunc.</p>
                            </div> <!-- /.prof-details -->
                        </div> <!-- /.prof-list-item -->
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Testimonial</h4>
                    </div>
                    <div class="widget-inner">
                        <div id="slider-testimonials">
                            <ul>
                                <li>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, quos, veniam optio voluptas hic delectus soluta odit nemo harum <strong class="dark-text">Shannon D. Edwards</strong></p>
                                </li>
                                <li>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, quos, veniam optio voluptas hic delectus soluta odit nemo harum <strong class="dark-text">Shannon D. Edwards</strong></p>
                                </li>
                                <li>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, quos, veniam optio voluptas hic delectus soluta odit nemo harum <strong class="dark-text">Shannon D. Edwards</strong></p>
                                </li>
                            </ul>
                            <a class="prev fa fa-angle-left" href=""></a>
                            <a class="next fa fa-angle-right" href=""></a>
                        </div>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Our Gallery</h4>
                    </div>
                    <div class="widget-inner">
                        <div class="gallery-small-thumbs clearfix">
                            <div class="thumb-small-gallery">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg" title="Gallery Tittle One">
                                    <img src="http://placehold.it/70x70" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg" title="Gallery Tittle Two">
                                    <img src="http://placehold.it/70x70" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">
                                    <img src="http://placehold.it/70x70" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">
                                    <img src="http://placehold.it/70x70" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">
                                    <img src="http://placehold.it/70x70" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">
                                    <img src="http://placehold.it/70x70" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">
                                    <img src="http://placehold.it/70x70" alt="" />
                                </a>
                            </div>
                            <div class="thumb-small-gallery">
                                <a class="fancybox" data-fancybox-group="gallery1" href="images/slide1.jpg">
                                    <img src="http://placehold.it/70x70" alt="" />
                                </a>
                            </div>
                        </div> <!-- /.galler-small-thumbs -->
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

            </div>
        </div>
    </div>

   