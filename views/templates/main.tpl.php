<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$pageData['title']?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/views/css/bootstrap.min.css">
    <link rel="stylesheet" href="/views/css/font-awesome.min.css">
    <link rel="stylesheet" href="/views/css/style.css">

    <script type="text/javascript" src="/views/js/jquery.min.js"></script>
    <script type="text/javascript" src="/views/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/views/js/angular.min.js"></script>
    <script type="text/javascript" src="/views/js/script.js"></script>
</head>
<body>
<div class="navbar-wrapper">
    <div class="container">
        <div class="navbar navbar-inverse navbar-static-top">

            <div class="navbar-header">
                <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="navbar-brand" href="#">Auction from 5 grn</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="http://www.bootply.com" target="ext">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </div><!-- /container -->
</div><!-- /navbar wrapper -->


<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-interval="false">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img src="/views/img/baner1.jpg" style="width:100%" class="img-responsive">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Bootstrap 3 Carousel Layout</h1>
                    <p></p>
                    <p><a class="btn btn-lg btn-primary" href="http://getbootstrap.com">Learn More</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="/views/img/baner2.jpg" class="img-responsive">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Changes to the Grid</h1>
                    <p>Bootstrap 3 still features a 12-column grid, but many of the CSS class names have completely changed.</p>
                    <p><a class="btn btn-large btn-primary" href="#">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="/views/img/baner3.jpg" class="img-responsive">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Percentage-based sizing</h1>
                    <p>With "mobile-first" there is now only one percentage-based grid.</p>
                    <p><a class="btn btn-large btn-primary" href="#">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</div>
<!-- /.carousel -->


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-md-4 text-center">
            <img class="img-circle" src="http://placehold.it/140x140">
            <h2>Mobile-first</h2>
            <p>Tablets, phones, laptops. The new 3 promises to be mobile friendly from the start.</p>
            <p><a class="btn btn-default" href="#">View details »</a></p>
        </div>
        <div class="col-md-4 text-center">
            <img class="img-circle" src="http://placehold.it/140x140">
            <h2>One Fluid Grid</h2>
            <p>There is now just one percentage-based grid for Bootstrap 3. Customize for fixed widths.</p>
            <p><a class="btn btn-default" href="#">View details »</a></p>
        </div>
        <div class="col-md-4 text-center">
            <img class="img-circle" src="http://placehold.it/140x140">
            <h2>LESS is More</h2>
            <p>Improved support for mixins make the new Bootstrap 3 easier to customize.</p>
            <p><a class="btn btn-default" href="#">View details »</a></p>
        </div>
    </div><!-- /.row -->





    <!-- FOOTER -->
    <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>This Bootstrap layout is compliments of Bootply. · <a href="http://www.bootply.com/62603">Edit on Bootply.com</a></p>
    </footer>

</div><!-- /.container -->

</body>
</html>