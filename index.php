<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="utils/image/logo-color.png" />

    <title>scratches.com | Home</title>

    <!-- <link
      rel="canonical"
      href="https://getbootstrap.com/docs/4.0/examples/carousel/"
    /> -->

    <!-- Bootstrap core CSS -->
    <link href="utils/css/getbootstrap.com_docs_4.0_dist_css_bootstrap.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="utils/css/getbootstrap.com_docs_4.0_examples_carousel_carousel.css" rel="stylesheet" />
</head>

<body>

    <?php
    include 'components/Dbconnect.php';
    ?>
    <header>
        <!-- includ navbar  -->
        <?php
        include 'components/Navbar.php';
        ?>
    </header>

    <main role="main">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="utils/image/img1.jpg" alt="First slide" />
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="utils/image/img2.jpg" alt="Second slide" />
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="utils/image/img3.jpg" alt="Third slide" />
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Marketing messaging and featurettes
      ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img class="rounded-circle" src="utils/animation/glob.gif" alt="Generic placeholder image" width="140" height="140" />
                    <h2>Internet</h2>
                    <p>
                        The Internet connects computers all around the world through a
                        vast global network.It makes it possible for data to be
                        transferred among two or more computers linked via a network.
                    </p>
                    <p>
                        <a class="btn btn-info" href="Services.php" role="button">Check Out &raquo;</a>
                    </p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="rounded-circle" src="utils/animation/cloud.gif" alt="Generic placeholder image" width="140" height="140" />
                    <h2>Cloud</h2>
                    <p>
                        The term cloud infrastructure refers to all of the components
                        needed to enable cloud computing, the system by which data storage
                        and computing power are available on demand without direct input
                        from the user.
                    </p>
                    <p>
                        <a class="btn btn-info" href="Services.php" role="button">Check Out &raquo;</a>
                    </p>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="rounded-circle" src="utils/animation/share.gif" alt="Generic placeholder image" width="140" height="140" />
                    <h2>share</h2>
                    <p>
                        Cloud file sharing refers to a range of cloud services that allows
                        people to store and synchronize documents, photos, videos and
                        other files in the cloud—and share them with other people.
                    </p>
                    <p>
                        <a class="btn btn-info" href="Services.php" role="button">Check Out &raquo;</a>
                    </p>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->

            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider" />

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">
                        On-demand self-service.
                        <span class="text-muted">It'll blow your mind.</span>
                    </h2>
                    <p class="lead">
                        AWS, Microsoft Azure, scratches.com Cloud and other public cloud
                        platforms make resources available to users at the click of a
                        button or API call. With data centers all over the world, these
                        vendors have vast amounts of compute and storage assets at the
                        ready. This represents a radical departure for IT teams accustomed
                        to an on-premises procurement process that can take months to
                        complete.
                    </p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" src="utils/image/note1.jpg" alt="Generic placeholder image" />
                </div>
            </div>

            <hr class="featurette-divider" />

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">
                        Pay-per-use pricing.
                        <span class="text-muted">See for yourself.</span>
                    </h2>
                    <p class="lead">
                        This cloud computing characteristic shifts IT spending from Capex
                        to Opex as providers offer per-second billing. This model achieves
                        economies of scale through reducing costs on a large scale and
                        seeing an increase in efficiency. Though this can generally be
                        seen as a positive, IT teams must be careful since their resource
                        needs likely aren't static. VMs should be right-sized, turned off
                        while not in use, or scaled down as conditions dictate.
                    </p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" src="utils/image/note2.jpg" alt="Generic placeholder image" />
                </div>
            </div>

            <hr class="featurette-divider" />

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">
                        Broad network access. <span class="text-muted">Checkmate.</span>
                    </h2>
                    <p class="lead">
                        A big part of the cloud's utility is its ubiquity. Data can be
                        uploaded and accessed from anywhere with an internet connection.
                        Users can work from any location. The cloud is an attractive
                        option for most enterprises that have a mix of operating systems,
                        platforms and devices. To preserve that broad network access,
                        cloud providers monitor and ensure various metrics that reflect
                        how customers access cloud resources and data: latency, access
                        time, data throughput, etc. These factor into quality-of-service
                        requirements and service-level agreements.
                    </p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" src="utils/image/note3.jpg" alt="Generic placeholder image" />
                </div>
            </div>

            <hr class="featurette-divider" />

            <!-- /END THE FEATURETTES -->
        </div>


        <!-- /.container -->

        <!-- FOOTER -->
        <footer class="container">
            <!-- includ footer  -->
            <?php
            include 'components/Footer.php';
            ?>
        </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery ||
            document.write(
                '<script src="utils/js/code.jquery.com_jquery-3.2.1.slim.min.js"><\/script>'
            );
    </script>
    <script src="utils/js/getbootstrap.com_docs_4.0_assets_js_vendor_popper.min.js"></script>
    <script src="utils/js/getbootstrap.com_docs_4.0_dist_js_bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="utils/js/getbootstrap.com_docs_4.0_assets_js_vendor_holder.min.js"></script>
</body>

</html>