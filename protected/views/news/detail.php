 <!-- Being Page Title -->
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="/">Главная</a></h6>
                    <h6><a href="/?r=news/list">Все новости</a></h6>
                    <h6><span class="page-active"><?php echo $arResult['data']->header; ?></span></h6>
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
                        <div class="blog-post-container">
                            <div class="blog-post-image">
                                <img src="http://placehold.it/750x390" alt="">
                                <div class="blog-post-meta">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i><?php echo $arResult['data']->date_publication; ?></li>
                                        <li><a href="#blog-comments"><i class="fa fa-comments"></i>3 comments</a></li>
                                        <li><a href="#blog-author"><i class="fa fa-user"></i>Esmet Hajrizi</a></li>
                                    </ul>
                                </div> <!-- /.blog-post-meta -->
                            </div> <!-- /.blog-post-image -->
                            <div class="blog-post-inner">
                                <h3 class="blog-post-title"><?php echo $arResult['data']->header; ?></h3>
                                <p><?php echo $arResult['data']->text_description; ?></p>
                                <!--<div class="tag-items">
                                    <span class="small-text">Tags:</span>
                                    <a href="#" rel="tag">business</a>
                                    <a href="#" rel="tag">html</a>
                                    <a href="#" rel="tag">education</a>
                                </div>-->
                            </div>
                        </div> <!-- /.blog-post-container -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="prev-next-post clearfix">
                            <span class="whiteBtn">
                                <?  if (($arResult['data']['id_news']-1)!=null) { $prev = $arResult['data']['id_news']-1; } else {$prev = null;}
                                    if (($arResult['data']['id_news']+1)!=null) { $next = $arResult['data']['id_news']+1; }?>
                                <a href="?r=news/detail&id=<?=$prev?>" class="prev"><i class="fa fa-angle-left"></i>Предыдущая новость</a>
                            </span>
                            <span class="whiteBtn">
                                <a href="?r=news/detail&id=<?=$next?>" class="next">Следующая новость<i class="fa fa-angle-right"></i></a>
                            </span>
                        </div>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
                
                <div class="row">
                    <div class="col-md-12">
                        <div id="blog-comments" class="blog-post-comments">
                            <div class="widget-main-title">
                                <h4 class="widget-title">3 Comments</h4>
                            </div>
                            <div class="blog-comments-content">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="media-object" src="http://placehold.it/60x60" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Media heading</h4>
                                        <p>Lorem ipsum dolor sit amet lorem, consectetur adipisicing elit. Sequi, nam magni repellendus! <span class="label label-primary">New</span></p>
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="media-object" src="http://placehold.it/60x60" alt="">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Media heading</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, nam magni repellendus!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="media-object" src="http://placehold.it/60x60" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Media heading</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, nam magni repellendus!</p>
                                    </div>
                                </div>
                            </div> <!-- /.blog-comments-content -->
                        </div> <!-- /.blog-post-comments -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="widget-main comment-form">
                            <div class="widget-main-title">
                                <h4 class="widget-title">Leave a comment</h4>
                            </div> <!-- /.widget-main-title -->
                            <div class="widget-inner">
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>
                                            <label for="name-id">Your Name:</label>
                                            <input type="text" id="name-id" name="name-id">
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>
                                            <label for="email-id">Email Address:</label>
                                            <input type="text" id="email-id" name="email-id">
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <p>
                                            <label for="site-id">Your Site:</label>
                                            <input type="text" id="site-id" name="site-id">
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            <label for="comment">Your comment:</label>
                                            <textarea name="comment" id="comment" rows="4"></textarea>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input class="mainBtn" type="submit" name="" value="Submit Comment">
                                    </div>
                                </div>
                            </div> <!-- /.widget-inner -->
                        </div> <!-- /.widget-main -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

            </div> <!-- /.col-md-8 -->

            <!-- Here begin Sidebar -->
            <div class="col-md-4">
                
                <div class="widget-main">
                    <div class="widget-inner">
                        <div class="search-form-widget">
                            <form name="search_form" method="get" action="#" class="search_form">
                                <input type="text" name="s" placeholder="Type and click enter to search..." title="Type and click enter to search..." class="field_search">
                            </form>
                        </div>
                    </div> <!-- /.widget-inner -->
                </div> <!-- /.widget-main -->

                <div class="widget-main">
                    <div class="widget-main-title">
                        <h4 class="widget-title">Категории</h4>
                    </div>
                    <div class="widget-inner">
                     <?php     
                        foreach ($arResult['category'] as $node) {?>
                        <h5 class="event-small-title"><a href="?r=news/category$id="><?php echo $node->nc_name; ?></a></h5>                           
                    <?}?>    
                    </div> <!-- /.widget-inner --> 
                </div> <!-- /.widget-main -->

                

                

            </div> <!-- /.col-md-4 -->
    
        </div> <!-- /.row -->
    </div> <!-- /.container -->