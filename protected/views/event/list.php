<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>  

    <!-- Being Page Title -->
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="index.html">Home</a></h6>
                    <h6><span class="page-active">Events List</span></h6>
                    <div class="grid-or-list">
                        <ul>
                            <li><a href="events-grid.html"><i class="fa fa-th"></i></a></li>
                            <li><a href="events-list.html"><i class="fa fa-list"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <!-- Here begin Main Content -->
            <div class="col-md-8">
                <div class="row">

                    <div class="col-md-12">
                        <div class="list-event-item">
                            <div class="box-content-inner clearfix">
                                <div class="list-event-thumb">
                                    <a href="event-single.html">
                                        <img src="http://placehold.it/170x150" alt="">
                                    </a>
                                </div>
                                <div class="list-event-header">
                                    <span class="event-place small-text"><i class="fa fa-globe"></i>109 Health</span>
                                    <span class="event-date small-text"><i class="fa fa-calendar-o"></i>January 08, 2014</span>
                                    <div class="view-details"><a href="event-single.html" class="lightBtn">View Details</a></div>
                                </div>
                                <h5 class="event-title"><a href="event-single.html">January Career Centre Events for Grad Students</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, cum, quidem aut natus odit deleniti placeat quia est quibusdam hic. Quod, minima, excepturi eum repellat tempora...</p>
                            </div> <!-- /.box-content-inner -->
                        </div> <!-- /.list-event-item -->
                        <div class="list-event-item">
                            <div class="box-content-inner clearfix">
                                <div class="list-event-thumb">
                                    <a href="event-single.html">
                                        <img src="http://placehold.it/170x150" alt="">
                                    </a>
                                </div>
                                <div class="list-event-header">
                                    <span class="event-place small-text"><i class="fa fa-globe"></i>Cramton Auditorium</span>
                                    <span class="event-date small-text"><i class="fa fa-calendar-o"></i>January 15, 2014</span>
                                    <div class="view-details"><a href="event-single.html" class="lightBtn">View Details</a></div>
                                </div>
                                <h5 class="event-title"><a href="event-single.html">Nelson Mandela Memorial Tribute</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, cum, quidem aut natus odit deleniti placeat quia est quibusdam hic. Quod, minima, excepturi eum repellat tempora...</p>
                            </div> <!-- /.box-content-inner -->
                        </div> <!-- /.list-event-item -->
                        <div class="list-event-item">
                            <div class="box-content-inner clearfix">
                                <div class="list-event-thumb">
                                    <a href="event-single.html">
                                        <img src="http://placehold.it/170x150" alt="">
                                    </a>
                                </div>
                                <div class="list-event-header">
                                    <span class="event-place small-text"><i class="fa fa-globe"></i>HNES 140</span>
                                    <span class="event-date small-text"><i class="fa fa-calendar-o"></i>January 20, 2014</span>
                                    <div class="view-details"><a href="event-single.html" class="lightBtn">View Details</a></div>
                                </div>
                                <h5 class="event-title"><a href="event-single.html">Building Blocks – York’s Pension Plan</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, cum, quidem aut natus odit deleniti placeat quia est quibusdam hic. Quod, minima, excepturi eum repellat tempora...</p>
                            </div> <!-- /.box-content-inner -->
                        </div> <!-- /.list-event-item -->
                        <div class="list-event-item">
                            <div class="box-content-inner clearfix">
                                <div class="list-event-thumb">
                                    <a href="event-single.html">
                                        <img src="http://placehold.it/170x150" alt="">
                                    </a>
                                </div>
                                <div class="list-event-header">
                                    <span class="event-place small-text"><i class="fa fa-globe"></i>021 Winters College</span>
                                    <span class="event-date small-text"><i class="fa fa-calendar-o"></i>Jan 29, 2014</span>
                                    <div class="view-details"><a href="event-single.html" class="lightBtn">View Details</a></div>
                                </div>
                                <h5 class="event-title"><a href="event-single.html">Academic Writing Workshop.</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, cum, quidem aut natus odit deleniti placeat quia est quibusdam hic. Quod, minima, excepturi eum repellat tempora...</p>
                            </div> <!-- /.box-content-inner -->
                        </div> <!-- /.list-event-item -->
                    </div> <!-- /.col-md-12 -->

                </div> <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="load-more-btn">
                            <a href="#">Click here to load more events</a>
                        </div>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

            </div> <!-- /.col-md-8 -->

            <!-- Here begin Sidebar -->
            <div class="col-md-4">

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Upcoming Events</h4>
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

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Photo from Events</h4>
                    </div>
                </div> <!-- /.widget-main -->

            </div> <!-- /.col-md-4 -->
    
        </div> <!-- /.row -->
    </div> <!-- /.container -->
