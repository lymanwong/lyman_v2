<!DOCTYPE html>
<html lang="en">

<?php include('./inc/head.php');?>

<body>

    <?php include('./inc/header.php');?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/slide-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        Webdev Padiwan extraordinaire drinking milk and kicking butt
                    </h2>
                    <hr class="tagline-divider">
                    <h2 class="brand-before"><small>(...and I'm all out of milk.)</small></h1>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">A little bit
                        <strong>about me</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/intro-pic.jpg" alt="">
                    <hr class="visible-xs">
                    <p>I've garnered multiple awards in the customer support and community management space.</p>

                    <p>I'm a native San Franciscan and have a passion for web development, community management, gaming, sports and fitness.  I’m a life-long learner who's looking to join a team where I can integrate my past experiences to learn, grow, make great things, and have some fun along the way.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">My
                        <strong>ultimate goal</strong>
                    </h2>
                    <hr>
                    <p>I want to keep learning and growing as an individual and as a developer.  There's so much to learn and experience out there that just thinking about it makes my head spin.</p>
                    <p>I know this sounds uber cheezy, but when I get to a point where I can help others, I want to give back. Ideally, I want to help anyone who wants to learn how to code.</p>
                    <p>One thing I remember from my days at Dev Bootcamp that really kept me grounded during those days when I'm stuck on a problem:</p>
                    <p></p>
                    <p><strong>"Before you can know, you have to not know".</strong></p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <?php include('./inc/footer.php');?>

</body>

</html>
