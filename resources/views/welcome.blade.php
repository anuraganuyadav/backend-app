<!DOCTYPE html>
<html lang="en">

<head>

    <style>
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            flex-wrap: wrap;
            /* Allows wrapping on smaller screens */
        }

        .pagination a {
            margin: 5px;
            /* Adjusted margin for better spacing on mobile */
            padding: 8px 12px;
            text-decoration: none;
            color: #007bff;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
            /* Smooth transition for hover effect */
        }

        .pagination a:hover {
            background-color: #e9ecef;
            border-color: #dee2e6;
        }

        .pagination a.active {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
        }

        @media (max-width: 768px) {
            .pagination a {
                padding: 6px 10px;
                /* Adjust padding for smaller screens */
                font-size: 14px;
                /* Slightly smaller font size */
            }
        }

        @media (max-width: 480px) {
            .pagination a {
                padding: 4px 8px;
                /* Further adjust padding for very small screens */
                font-size: 12px;
                /* Smaller font size for very small screens */
            }
        }

        <?php include 'files/assets/css/package.css';
        ?>
    </style>
    <script src="https://www.youtube.com/iframe_api"></script>

    <!--=====title======-->
    <title> Best Travel Company in India|Temple Tours|Holidays|Honeymoon </title>

    <!-- HTML Meta Tags -->
    <meta name="title" content="Best Travel Company in India, Best Temple Tour Company in India">
    <meta name="description"
        content="Book Best affordable Chardham Packages, dodham yatra package , Kedarnath Package & Badrinath Yatra package  from Templemitra  Including Cab, hotel and Meals.">
    <!--keyword-->
    <meta name="keywords"
        content="Chardham Packages,Chardham Tour Operator,Gujarat Tour Packages,Travel Agency in Noida, Kailash Mansarover Yatra, Amarnath Yatra, South India Temple Tour Packages, Himachal Tour, Goa Tour Packages, Honeymoon Tour Packages.">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="author" content="">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name"
        content="Temple Tour Packages ! Holiday Packages ! Honeymoon Packages! Kailash Mansarovar Packages! Holiday,Pilgrimage & More !">
    <meta itemprop="description"
        content="Book Best affordable Chardham Packages, dodham yatra package , Kedarnath Package & Badrinath Yatra package  from Templemitra  Including Cab, hotel and Meals.">
    <meta itemprop="image" content="image-templemitra">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://templemitra.com/">
    <meta property="og:title" content="Best Travel Company in India, Best Temple Tour Company in India">
    <meta property="og:description"
        content="Templemitra is a trustworthy platform that offers unmatched Chardham ,Gujarat,Kailash Mansarovar">
    <meta property="og:image"
        content="Temple Tour Packages ! Holiday Packages ! Honeymoon Packages! Kailash Mansarovar Packages! Holiday,Pilgrimage & More !">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://templemitra.com/">
    <meta property="twitter:title" content="Best Travel Company in India, Best Temple Tour Company in India">
    <meta property="twitter:description"
        content="Temple Tour Packages ! Holiday Packages ! Honeymoon Packages! Kailash Mansarovar Packages! Holiday,Pilgrimage & More !">
    <meta property="twitter:image"
        content="Templemitra is a trustworthy platform that offers unmatched Chardham ,Gujarat,Kailash Mansarovar">
    <!--other link-->
    <link rel="canonical" href="https://templemitra.com" />

    <?php
    include("header-link.php");
    ?>
    <link href="https://fonts.googleapis.com/css?family=Faster+One&display=swap" rel="stylesheet">
    <!--other link-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">

    <!-- Taboola Pixel Code -->
    <script type='text/javascript'>
        window._tfa = window._tfa || [];
        window._tfa.push({
            notify: 'event',
            name: 'page_view',
            id: 1807114
        });
        ! function(t, f, a, x) {
            if (!document.getElementById(x)) {
                t.async = 1;
                t.src = a;
                t.id = x;
                f.parentNode.insertBefore(t, f);
            }
        }(document.createElement('script'),
            document.getElementsByTagName('script')[0],
            '//cdn.taboola.com/libtrc/unip/1807114/tfa.js',
            'tb_tfa_script');
    </script>
    <!-- End of Taboola Pixel Code -->

</head>

<body>
    <?php
    include("header.php");
    ?>

    <div class="container-fluid p-0 m-0">
        <div class="row m-0 p-0">
            <div class="col-sm-12 m-0 p-0"> <!-- Updated to col-sm-12 -->
                <!-- carousel start -->
                <div id="bootstrap-touch-slider" class="carousel bs-slider slide  control-round indicators-line"
                    data-ride="carousel" data-pause="hover" data-interval="5000">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <?php
                        $count = 0;
                        $query = mysqli_query($conn, "SELECT * FROM slide ORDER by status DESC");
                        while ($row = mysqli_fetch_array($query)) {;
                        ?>

                            <li data-target="#bootstrap-touch-slider" data-slide-to="<?php echo $count++  ?>"
                                class="<?php if ($row['status'] == " 1") {
                                            echo "active";
                                        } else {
                                        } ?>"></li>
                        <?php
                        }
                        ?>
                    </ol>

                    <!-- Wrapper For Slides -->
                    <div class="carousel-inner" role="listbox">
                        <!-- Third Slide -->
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner" role="listbox">
                                <?php
                                $query = mysqli_query($conn, "SELECT * FROM slide ORDER by status DESC");
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <div class="carousel-item <?php if ($row['status'] == " 1") {
                                                                    echo "active";
                                                                } else {
                                                                } ?>">
                                        <img class="slide-image img-fluid w-100"
                                            src="<?php echo $cdn  ?>files/assets/images/slider/<?php echo $row['image'] ?>" alt="First slide">
                                        <div class="bs-slider-overlay"></div>

                                        <div class="container">
                                            <div class="row">
                                                <!-- Slide Text Layer -->
                                                <div class="slide-text slide_style_left">
                                                    <h2 data-animation="animated zoomInRight">
                                                        <?php echo $row['heading'] ?>
                                                    </h2>
                                                    <p data-animation="animated fadeInLeft">
                                                        <?php echo $row['slogan'] ?>
                                                    </p>
                                                    <a href=" <?php echo $row['url'] ?>" class="btn btn-primary"
                                                        data-animation="animated fadeInRight">see more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <!-- slider card end -->

                    </div>
                </div>
                <!-- carousel end  -->
            </div>
        </div>
    </div>
    <!-- Bootstrap slider card end -->
    <div class="temple-memorable p-0 pt-3 pb-4">

        <!-- Page-header start -->
        <div class="page-header">
            <h1 class="h1-head">Best Temple Tour Company in India</h1>
            <div class="t-position">
                <div class="row m-0 align-items-end">

                    <div class="col-lg-4 col-md-4 col-sm-12 offset-sm-4">
                        <div class="page-header-title bg-dest">
                            <span>
                                <div class="d-inline">
                                    <!--  <h4 class="heding-dest h3"><img class="img-fluid"> src="files/assets/images/icn/location.png" alt="Trending Destination"Trending Destinations</h4>-->

                                    <h3 class="heading-pac">
                                        <span class="black">TRENDING</span> <span class="orange">DESTINATIONS</span>
                                    </h3>
                                </div>

                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-0 mt-2">
            <!-- product 1-->
            <?php
            $query = mysqli_query($conn, "SELECT * FROM top_destination ORDER BY destination_name DESC ");
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="col-xl-3 col-md-4 col-sm-3 col-12 mt-2 t-dest">
                    <a class="destination-o" href="<?php
                                                    $subId = $row['destination_id'];
                                                    $subMenu = mysqli_query($conn, " SELECT * FROM sub_menu where
          id='$subId'");
                                                    $s_menu = mysqli_fetch_array($subMenu);

                                                    //  Get menu name
                                                    $menu_id = $s_menu['menuID'];
                                                    $topMenu = mysqli_query($conn, " SELECT * FROM menu where
          id='$menu_id'");
                                                    $menu_url = mysqli_fetch_array($topMenu);


                                                    echo $menu_url['menuUrl'] . '/' . $s_menu['submenuUrl']; ?>

                                             ">
                        <div class="outer-img">
                            <div class="place-text-outer">
                                <img class="img-fluid"
                                    src="<?php echo $cdn; ?>files/assets/images/Top-destination/<?php echo $row['destination_img']; ?>"
                                    alt="<?php echo $row['destination_name']; ?>">
                                <div class="staring-h-f">
                                    <p>Starting @
                                        <i class="fas fa-rupee-sign"></i>
                                        <?php echo $row['startingAmount']; ?>
                                    </p>
                                </div>
                                <div class="place-text">
                                    <h4 class="d-inline-block ml-4 mt-2">
                                        <?php echo $row['destination_name']; ?>
                                    </h4>
                                    <span class="view-packages-top">View All Packages</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!--end product 1-->
            <?php } ?>
        </div>
        <!-- Product list end -->
    </div>
    <div class="temple-memorable1 p-0 pt-3 pb-4">
        <!-- Page-header start -->
        <div class="page-header">
            <div class="t-position">
                <div class="row m-0 align-items-end">
                    <div class="col-lg-5 page-header-center col-md-8 col-sm-12">
                        <div class="heading-tour big-head mt-2">
                            <span>
                                <div class="d-inline">
                                    <!--<h4 class="heding-pac">
                                                  <img class="img-fluid temple">
                                                  Popular Religious Tours</h4>-->
                                    <h3 class="heading-pac">
                                        <span class="black">POPULAR</span> <span class="orange">RELIGIOUS TOURS</span>
                                    </h3>
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-0">
            <!-- product 1-->
            <?php
            $q =  mysqli_query($conn, "SELECT  *  FROM all_packages WHERE menuID ='48' and status = 'Publised' and home_status ='1' ORDER by id DESC LIMIT 6 ");
            while ($product = mysqli_fetch_array($q)) {
            ?>
                <div class="col-xl-2 col-md-4 col-sm-3 col-6 p-1">
                    <form class="product-form">
                        <div class="card prod-view mt-2">
                            <div class="prod-item text-center">
                                <div class="prod-img">
                                    <div class="option-hover">
                                        <?php
                                        //get menu
                                        $mId = $product['menuID'];
                                        $menuget = mysqli_query($conn, "SELECT * FROM menu where id = '$mId'");
                                        $menu = mysqli_fetch_array($menuget);
                                        //get sub menu
                                        $subId = $product['submenuID'];
                                        $subMenu = mysqli_query($conn, "SELECT * FROM sub_menu where id = '$subId'");
                                        $s_menu = mysqli_fetch_array($subMenu);
                                        ?>
                                        <a href="<?php echo $cdn; ?><?php echo $menu['menuUrl'] ?>/<?php echo $s_menu['submenuUrl'] ?>/<?php echo $product['product_url'] ?>"
                                            class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                            <i class="fas fa-eye f-20"></i>
                                        </a>
                                        <button type="submit"
                                            class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                            <i class="far fa-heart f-20"></i>
                                        </button>
                                    </div>
                                    <a href="<?php echo $cdn; ?><?php echo $menu['menuUrl']  ?>/<?php echo $s_menu['submenuUrl'] ?>/<?php echo $product['product_url'] ?>"
                                        class="hvr-shrink">
                                        <!--  product image -->
                                        <?php
                                        $productID = $product['id'];
                                        $img =  mysqli_query($conn, "SELECT  *  FROM product_image WHERE status = '1' and product_id = '$productID'");
                                        while ($proimg = mysqli_fetch_array($img)) {
                                        ?>
                                            <img src="<?php echo $cdn  ?>files/assets/images/product/<?php echo $proimg['product_img']; ?>"
                                                class="img-fluid o-hidden" alt="<?php echo $product['product_name']; ?>">
                                        <?php
                                        }
                                        ?>
                                    </a>
                                    <div class="p-sale">SALE</div>
                                </div>
                                <div class="prod-info ">
                                    <a href="<?php echo $cdn; ?><?php echo $menu['menuUrl'] ?>/<?php echo $s_menu['submenuUrl'] ?>/<?php echo $product['product_url'] ?>"
                                        class="txt-muted">
                                        <h4 class="package-h">
                                            <?php echo $product['product_name']; ?>
                                        </h4>
                                        <p class="p-day-package">
                                            <?php echo $product['product_days'];  ?>
                                        </p>
                                    </a>
                                    <span class="prod-price "><i class="fas fa-rupee-sign"></i>
                                        <?php echo $product['product_price']; ?><span class="old-price"><i class="fas fa-rupee-sign"></i>
                                            <?php echo number_format($product['product_mrp']); ?>
                                        </span>
                                    </span>

                                    <span class="enquiry-btn  md-trigger" data-modal="modal-10"
                                        my-package="<?php echo $product['product_name']; ?>"
                                        p-id="<?php if (!empty($_SESSION['email'])) {
                                                    echo $product['id'];
                                                } ?>">
                                        <img class="enquiry-img" src="<?php echo $cdn; ?>files/assets/images/enquiry.png" alt="enquiry">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <input name="product_code" type="hidden" value="<?php echo $product[" product_code"]; ?>">
                    </form>
                </div>
                <!--end product 1-->
            <?php } ?>
        </div>
        <!-- Product list end -->
    </div>
    <!-- WANT TO MAKE TOUR TRIP MEMORABLE -->
    <div class="temple-memorable p-0">
        <div class="t-position">
            <div class="heading-tour big-head mt-3">
                <div class="d-inline">
                    <!-- <h4 class="heding-pac">How To Book ?</h4>
                          <span class="heding-b-pac">FOLLOW THE BELOW STEPS!!</span>-->
                    <h3 class="heading-pac">
                        <span class="black">HOW</span> <span class="orange">TO BOOK ?</span>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row m-0 mt-2 mb-4">
            <div class="col-xl-6 col-md-12 col-sm-12 col-12 p-0 m-0">
                <div class="row m-0">
                    <div class="col-xl-4 col-md-4 col-sm-6 col-6 p-1 m-0">
                        <div class="trip">
                            <img alt="Send us your requirment image" class="img-fluid m_requir"
                                src="files/assets/images/trip/requirment.png">
                            <p>Send us your requirment</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6 col-6 p-1 m-0">
                        <div class="trip">
                            <img alt="Send us your requirment image" class="img-fluid m_requir"
                                src="files/assets/images/trip/Get%20Tour%20Expert%20Assistance.png">
                            <p>Get Tour Expert Assistance</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6 col-6 p-1 m-0">
                        <div class="trip">
                            <img alt="Send us your requirment image" class="img-fluid m_requir"
                                src="files/assets/images/trip/Discuss%20&%20Customize%20your%20Trip.png">
                            <p>Discuss & Customize your Trip</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6 col-6 p-1 m-0">
                        <div class="trip">
                            <img alt="Send us your requirment image" class="img-fluid m_requir"
                                src="files/assets/images/trip/Finalize%20the%20schedule%20&%20Commercials.png">
                            <p>Finalize the schedule & Commercials</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6 col-6 p-1 m-0">
                        <div class="trip">
                            <img alt="Send us your requirment image" class="img-fluid m_requir"
                                src="files/assets/images/trip/Instant%20Booking%20Confirmation%20post%20advance%20payment.png">
                            <p>Instant Booking Confirmation post advance payment</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6 col-6 p-1 m-0">
                        <div class="trip">
                            <img alt="Send us your requirment image" class="img-fluid m_requir"
                                src="files/assets/images/trip/Be%20Relaxed!%20Start%20Packing%20your%20bags%20for%20a%20memorable%20tour%20experience.png">
                            <p>Be Relaxed! Start Packing your bags for a memorable tour experience</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- WANT TO MAKE TOUR TRIP MEMORABLE end -->
            <div class="col-xl-6 col-md-12 col-sm-12 col-xs-12 p-2 m-0">
                <div class="j-pro mt-2 bg-light" id="j-pro" novalidate="">
                    <div class="card-header enquiry-i">
                        <h4 class="card-title p-0">Get a Free Quote.</h4>
                    </div>

                    <div class="j-content">
                        <!-- start name -->
                        <div class="j-row">
                            <div class="j-span6 j-unit">
                                <div class="j-unit">
                                    <div class="j-input">
                                        <label class="j-icon-right" for="name">
                                            <i class="fas fa-user"></i>
                                        </label>
                                        <input type="text" id="name-t" placeholder="Enter Name*">
                                        <span class="j-tooltip j-tooltip-right-top">Enter Your Name*</span>
                                    </div>
                                </div>
                            </div>

                            <div class="j-span6 j-unit">
                                <div class="j-input">
                                    <label class="j-icon-right" for="phone">
                                        <i class="fas fa-phone-alt"></i>
                                    </label>
                                    <input type="text" id="phone-t" placeholder="Enter Valid Mobile Number*" maxlength="12"
                                        minlength="10">
                                    <span class="j-tooltip j-tooltip-right-top">
                                        Enter Mobile Number*
                                    </span>
                                </div>
                            </div>

                        </div>
                        <!-- end name -->
                        <!-- start email phone -->
                        <div class="j-row">
                            <div class="j-span6 j-unit">
                                <div class="j-input">
                                    <label class="j-icon-right" for="email">
                                        <i class="fas fa-envelope-open-text"></i>
                                    </label>
                                    <input type="email" id="email-t" placeholder="Enter Email Id">
                                    <span class="j-tooltip j-tooltip-right-top">Enter Email Id</span>
                                </div>
                            </div>
                            <div class="j-span6 j-unit">
                                <div class="j-unit">
                                    <div class="j-input">
                                        <label class="j-icon-right" for="name">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </label>
                                        <input type="text" id="my-package-t" placeholder="Enter Destination">
                                        <span class="j-tooltip j-tooltip-right-top">Enter Destination</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end email phone -->
                        <div class="j-divider j-gap-bottom-25"></div>
                        <!-- start -->
                        <div class="j-row">
                            <div class="j-span6 j-unit">
                                <label class="j-label">Adults</label>
                                <div class="j-input">
                                    <label class="j-icon-right" for="adults">
                                        <i class="fas fa-user-alt"></i>
                                    </label>
                                    <input type="number" id="adults-t" placeholder="No of Adults (12+ yr)">
                                    <span class="j-tooltip j-tooltip-right-top">No. of adult</span>
                                </div>
                            </div>
                            <div class="j-span6 j-unit">
                                <label class="j-label">Children</label>
                                <div class="j-input">
                                    <label class="j-icon-right" for="children">
                                        <i class="fas fa-user"></i>
                                    </label>
                                    <input type="number" id="children-t" placeholder="No Of child (6 to 11 yr)">
                                    <span class="j-tooltip j-tooltip-right-top">No. of children</span>
                                </div>
                            </div>
                        </div>
                        <!-- end -->
                        <!-- start message -->
                        <div class="j-unit">
                            <label class="j-label">Additional Information ( Optional ) </label>
                            <div class="j-input">
                                <textarea spellcheck="false" cols="5" id="message-t" placeholder="Type Your Message"></textarea>
                            </div>
                        </div>
                        <!-- end message -->
                        <!-- start response from server -->
                        <div class="j-response"></div>
                        <!-- end response from server -->
                    </div>
                    <!-- end /.content -->
                    <div class="j-footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary send-enq-t">Send</button>
                    </div>
                    <div class="p-0" id="alt-t"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Honeymoon package -->
    <div class="temple-memorable1 p-0 pt-3 pb-4">
        <div class="t-position">
            <div class="heading-tour heneymoon-head">
                <div class="d-inline">
                    <!-- <h4 class="heding-pac">Exotic Honeymoon Packages</h4>
                           <span class="heding-b-pac">Most Loved Honeymoon Packages </span>-->
                    <h3 class="heading-pac">
                        <span class="black">EXOTIC</span> <span class="orange">HONEYMOON PACKAGES</span>
                    </h3>

                </div>
            </div>
        </div>
        <div class="page-body mt-2">
            <!-- Product list start -->
            <div class="row m-0">
                <!-- product 1-->
                <?php

                $q = mysqli_query($conn, "
    (SELECT * FROM all_packages WHERE menuID = '51' AND status = 'Publised' AND home_status = '1' ORDER BY id DESC LIMIT 3)
    UNION ALL
    (SELECT * FROM all_packages WHERE menuID = '49' AND status = 'Publised' AND home_status = '1' ORDER BY id ASC LIMIT 2)
    UNION ALL
    (SELECT * FROM all_packages WHERE menuID = '49' AND status = 'Publised' AND home_status = '1' ORDER BY id DESC LIMIT 1)
");

                // $q =  mysqli_query($conn, "SELECT  *  FROM all_packages WHERE menuID ='49' and status = 'Publised' and home_status ='1' ORDER by id DESC LIMIT 6 ");
                while ($product = mysqli_fetch_array($q)) {
                ?>
                    <div class="col-xl-2 col-md-4 col-sm-3 col-6 p-1">
                        <form class="product-form">
                            <div class="card prod-view mt-2">
                                <div class="prod-item text-center">
                                    <div class="prod-img">
                                        <div class="option-hover">
                                            <?php
                                            //get menu
                                            $mId = $product['menuID'];
                                            $Menu = mysqli_query($conn, "SELECT * FROM menu where id = '$mId' ORDER BY id DESC");
                                            $menu = mysqli_fetch_array($Menu);
                                            //get sub menu
                                            $subId = $product['submenuID'];
                                            $subMenu = mysqli_query($conn, "SELECT * FROM sub_menu where id = '$subId' ORDER BY id DESC");
                                            $s_menu = mysqli_fetch_array($subMenu);
                                            ?>
                                            <a href="<?php echo $cdn; ?><?php echo $menu['menuUrl'] ?>/<?php echo $s_menu['submenuUrl'] ?>/<?php echo $s_menu['submenuUrl'] ?>"
                                                class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                <i class="fas fa-eye f-20"></i>
                                            </a>
                                            <button type="submit"
                                                class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                <i class="far fa-heart f-20"></i>
                                            </button>
                                        </div>
                                        <a href="<?php echo $cdn; ?><?php echo $menu['menuUrl']  ?>/<?php echo $s_menu['submenuUrl'] ?>/<?php echo $product['product_url'] ?>"
                                            class="hvr-shrink">
                                            <!--  product image -->
                                            <?php
                                            $productID = $product['id'];
                                            $img =  mysqli_query($conn, "SELECT  *  FROM product_image WHERE status = '1' and product_id = '$productID'");
                                            while ($proimg = mysqli_fetch_array($img)) {
                                            ?>
                                                <img src="<?php echo $cdn  ?>files/assets/images/product/<?php echo $proimg['product_img']; ?>"
                                                    class="img-fluid o-hidden" alt="<?php echo $product['product_name']; ?>">
                                            <?php
                                            }
                                            ?>


                                        </a>
                                        <div class="p-sale">SALE</div>
                                    </div>
                                    <div class="prod-info ">
                                        <a href="<?php echo $cdn; ?><?php echo $menu['menuUrl'] ?>/<?php echo $s_menu['submenuUrl'] ?>/<?php echo $product['product_url'] ?>"
                                            class="txt-muted">
                                            <h4 class="package-h">
                                                <?php echo $product['product_name']; ?>
                                            </h4>
                                            <p class="p-day-package">
                                                <?php echo $product['product_days'];  ?>
                                            </p>
                                        </a>
                                        <span class="prod-price "><i class="fas fa-rupee-sign"></i>
                                            <?php echo $product['product_price']; ?><span class="old-price"><i class="fas fa-rupee-sign"></i>
                                                <?php echo number_format($product['product_mrp']); ?>
                                            </span>
                                        </span>

                                        <span class="enquiry-btn md-trigger" data-modal="modal-10"
                                            my-package="<?php echo $product['product_name']; ?>"
                                            p-id="<?php if (!empty($_SESSION['email'])) {
                                                        echo $product['id'];
                                                    } ?>">
                                            <img class="enquiry-img" src="<?php echo $cdn; ?>files/assets/images/enquiry.png" alt="enquiry">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <input name="product_code" type="hidden" value="<?php echo $product[" product_code"]; ?>">
                        </form>
                    </div>
                    <!--end product 1-->
                <?php } ?>
            </div>
            <!-- Product list end -->
            <!-- Page body end -->
        </div>
    </div>
    <!-- Holiday package -->
    <div class="temple-memorable p-0 pt-3 pb-2">
        <div class="t-position">
            <div class="heading-tour heneymoon-head mt-2">
                <div class="d-inline">
                    <!-- <h4 class="heding-pac">Trending Holiday Packages</h4>
                      <span class="heding-b-pac">Best Selling Holiday Packages</span>-->

                    <h3 class="heading-pac">
                        <span class="black">TRENDING</span> <span class="orange">HOLIDAY PACKAGES</span>
                    </h3>


                </div>
            </div>
        </div>
        <div class="page-body mt-2">
            <!-- Product list start -->
            <div class="row m-0">
                <!-- product 1-->
                <?php


                // $q =  mysqli_query($conn, "SELECT  *  FROM all_packages WHERE menuID ='50' and status = 'Publised' and home_status ='1' ORDER by id ASC LIMIT 6 ");

                $q = mysqli_query($conn, "
    (SELECT * FROM all_packages WHERE menuID = '50' AND status = 'Publised' AND home_status = '1' ORDER BY id ASC LIMIT 2)
    UNION ALL
    (SELECT * FROM all_packages WHERE menuID = '50' AND status = 'Publised' AND home_status = '1' ORDER BY id DESC LIMIT 1)
    UNION ALL
    (SELECT * FROM all_packages WHERE menuID = '51' AND status = 'Publised' AND home_status = '1' ORDER BY id ASC LIMIT 2) 
    UNION ALL
    (SELECT * FROM all_packages WHERE menuID = '51' AND status = 'Publised' AND home_status = '0' ORDER BY id DESC LIMIT 1)
");


                while ($product = mysqli_fetch_array($q)) {
                ?>
                    <div class="col-xl-2 col-md-4 col-sm-3 col-6 p-1">
                        <form class="product-form">
                            <div class="card prod-view mt-2">
                                <div class="prod-item text-center">
                                    <div class="prod-img">
                                        <div class="option-hover">
                                            <?php
                                            //get menu
                                            $mId = $product['menuID'];
                                            $Menu = mysqli_query($conn, "SELECT * FROM menu where id = '$mId' ORDER BY id DESC");
                                            $menu = mysqli_fetch_array($Menu);
                                            //get sub menu
                                            $subId = $product['submenuID'];
                                            $subMenu = mysqli_query($conn, "SELECT * FROM sub_menu where id = '$subId' ORDER BY id DESC");
                                            $s_menu = mysqli_fetch_array($subMenu);
                                            ?>

                                            <a href="<?php echo $cdn; ?><?php echo $menu['menuUrl'] ?>/<?php echo $s_menu['submenuUrl'] ?>/<?php echo $product['product_url'] ?>"
                                                class="btn btn-primary btn-icon waves-effect waves-light m-r-15 hvr-bounce-in option-icon">
                                                <i class="fas fa-eye f-20"></i>
                                            </a>
                                            <button type="submit"
                                                class="btn btn-danger btn-icon waves-effect waves-light hvr-bounce-in option-icon">
                                                <i class="far fa-heart f-20"></i>
                                            </button>
                                        </div>
                                        <a href="<?php echo $cdn; ?><?php echo $menu['menuUrl']  ?>/<?php echo $s_menu['submenuUrl'] ?>/<?php echo $product['product_url'] ?>"
                                            class="hvr-shrink">
                                            <!--  product image -->
                                            <?php
                                            $productID = $product['id'];
                                            $img =  mysqli_query($conn, "SELECT  *  FROM product_image WHERE status = '1' and product_id = '$productID'");
                                            while ($proimg = mysqli_fetch_array($img)) {
                                            ?>
                                                <img src="<?php echo $cdn  ?>files/assets/images/product/<?php echo $proimg['product_img']; ?>"
                                                    class="img-fluid o-hidden" alt="<?php echo $product['product_name']; ?>">
                                            <?php
                                            }
                                            ?>

                                        </a>
                                        <div class="p-sale">SALE</div>
                                    </div>
                                    <div class="prod-info ">
                                        <a href="<?php echo $cdn; ?><?php echo $menu['menuUrl'] ?>/<?php echo $s_menu['submenuUrl'] ?>/<?php echo $product['product_url'] ?>"
                                            class="txt-muted">
                                            <h4 class="package-h">
                                                <?php echo $product['product_name']; ?>
                                            </h4>
                                            <p class="p-day-package">
                                                <?php echo $product['product_days'];  ?>
                                            </p>
                                        </a>
                                        <span class="prod-price "><i class="fas fa-rupee-sign"></i>
                                            <?php echo $product['product_price']; ?><span class="old-price"><i class="fas fa-rupee-sign"></i>
                                                <?php echo number_format($product['product_mrp']); ?>
                                            </span>
                                        </span>

                                        <span class="enquiry-btn md-trigger" data-modal="modal-10"
                                            my-package="<?php echo $product['product_name']; ?>"
                                            p-id="<?php if (!empty($_SESSION['email'])) {
                                                        echo $product['id'];
                                                    } ?>">
                                            <img class="enquiry-img" src="<?php echo $cdn; ?>files/assets/images/enquiry.png" alt="enquiry">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <input name="product_code" type="hidden" value="<?php echo $product[" product_code"]; ?>">
                        </form>
                    </div>
                    <!--end product 1-->
                <?php } ?>
            </div>
            <!-- Product list end -->
            <!-- Page body end -->
        </div>
    </div>

    <!-- by anurag youtube start -->
    <section class="why-section mt-1" style="background-color: white;">
        <div class="container">
            <div class="t-position">
                <div class="heading-tour heneymoon-head mt-2">
                    <div class="d-inline">
                        <!-- <h4 class="heding-pac">Trending Holiday Packages</h4>
                      <span class="heding-b-pac">Best Selling Holiday Packages</span>-->

                        <h3 class="heading-pac">
                            <span class="black">Why</span> <span class="orange">Templemitra.com</span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6" style="padding:0px;">
                    <ul class="why-newbox">
                        <li class="full" style="background-color: #6c757d;">
                            <img src="files/assets/images/leader.jpg" alt="Customization Leader" style="height:80px;">
                            <div class="cus"><strong>Customization Leader</strong></div>

                        </li>
                        <li class="full" style="background-color: #6c757d;">
                            <img src="files/assets/images/trade.jpg" alt="Registered Trademark" style="height:80px;">
                            <div class="cus"> <strong>Registered Trademark</strong></div>

                        </li>
                        <li class="full" style="background-color: #6c757d;">
                            <img src="files/assets/images/24.png" alt="24*7 Personalized Support" style="height:80px;">
                            <div class="cus"><strong>24*7 Personalized Support</strong></div>

                        </li>
                        <li class="full" style="background-color: #6c757d;">
                            <img src="files/assets/images/reviews.jpg" alt="Superb Guest Reviews 4.6/5" style="height:80px;">
                            <div class="cus"><strong> Superb Guest Reviews 4.6/5</strong></div>

                        </li>
                        <li class="full" style="background-color: #6c757d;">
                            <img src="files/assets/images/tour.jpg" alt="Industry's Best Service" style="height:80px;">
                            <div class="cus"><strong>Industry's Best Service</strong></div>

                        </li>
                        <li class="full" style="background-color: #6c757d;">
                            <img src="files/assets/images/seucre.jpg" alt="Industry's Best Service" style="height:80px;">
                            <div class="cus"><strong>100% Secured Platform</strong></div>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6">

                    <div class="youtube-slider-container">
                        <!-- Video 1 -->
                        <iframe class="youtube-video-slide" width="100%" height="320" src="https://www.youtube.com/embed/akCYjWJ4TGU?autoplay=1&rel=0" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        <!-- Video 2 -->
                        <iframe class="youtube-video-slide" width="100%" height="320" src="https://www.youtube.com/embed/qeCiN6qBYtU?autoplay=1&rel=0" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        <!-- Video 3 -->
                        <iframe class="youtube-video-slide" width="100%" height="320" src="https://www.youtube.com/embed/o2fZcu3Kjpo?autoplay=1&rel=0" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        <!-- Next and Previous Buttons -->
                        <button class="youtube-prev" onclick="changeSlide(-1)">&#10094;</button>
                        <button class="youtube-next" onclick="changeSlide(1)">&#10095;</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- by anurag youtube end -->

    <!--About India -->
    <div class="temple-memorable5 p-0 pb-2">
        <div class="t-position mb-2">
            <div class="heading-tour heneymoon-head mt-2">
                <div class="d-inline">
                    <!--   <h4 class="heding-pac">About India</h4>
                      <span>Our Lates Holiday Packages!</span>-->

                    <h3 class="heading-pac">
                        <span class="black">ABOUT</span> <span class="orange">INDIA </span>
                    </h3>
                </div>
            </div>
        </div>
        <div class="mb-4">
            <!-- Product list start -->
            <div class="row m-0">
                <div class="col-lg-12 col-xl-12 col-ms-3 col-sm-3 col-5 p-0 m-0">
                    <div class="d-flex justify-content-center">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs auto-tab md-tabs b-none" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link tab-w active" data-toggle="tab" href="#intro" role="tab"
                                    aria-expanded="false">Introduction</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link tab-w" data-toggle="tab" href="#Experiences" role="tab"
                                    aria-expanded="false">Experiences</a>
                                <div class="slide"></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-12 col-ms-12 col-sm-12 col-12 p-0 m-0">
                    <!-- Tab panes -->
                    <div class="tab-content tabs-left-content card-block">
                        <div class="tab-pane active" id="intro" role="tabpanel" aria-expanded="false">
                            <p class="ml-3">
                                India is considered one of the greatest countries. It has one of the most ancient civilizations. It is
                                the world’s largest democracy and second most populous country. For Travel perspective, it has
                                everything. From stunning lakes and endless rolling plains to the snow-capped mountains and thrilling
                                wildlife…India has everything that makes it unique. Almost 25% of world population follows the four
                                religions (Hinduism, Buddhism, Jainism & Sikhism) born in India.
                                This is a country where rivers are worshiped. The rivers Ganga, Yamuna, Krishna, Narmada, Godavari are
                                not only sacred but are also associated with the beliefs of the people here। Festivals of India are
                                celebrated with great enthusiasm. The world's largest religious event which is called as Kumbh Festival
                                is organized in India.
                                If you have not seen India, understand that you could not see the best civilization, culture, scenery
                                and people. Visit India. Explore India. <br>


                            </p>
                        </div>
                        <div class="tab-pane" id="Experiences" role="tabpanel" aria-expanded="false">
                            <p class="ml-3"> When you roam in India, you realize how sociable the people here are. India is a country
                                full of diversities। If you want to understand yoga, then you come to Rishikesh Yoganagari.If you are
                                influenced by the life of Lord Rama, you can visit the Ram circuit from Ayodhya to Rameswaram here.
                                If you want to visit the scenic places associated with Lord Buddha, then you must visit places like
                                Kushinagar, Gaya, Nalanda, Vaishali, Rajgir etc. There are countless places in the Himalayan states
                                Himachal, Kashmir, Uttarakhand which are important from a religious point of view and also take you very
                                close to nature.

                                States of North East like Sikkim, Arunachal, Meghalaya give you a chance to spend a few moments away
                                from the city life with your loved ones, then the deserts, forts, monuments of Rajasthan bring you back
                                to the great past of India. Kerala is called God's own country. At the same time, there is a unique area
                                of islands Andaman and Nicobar Islands.
                                The sea coast of Goa makes you feel amazing, while Mumbai, the economic city, gives you a growing India.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product list end -->
            <!-- Page body end -->
        </div>
    </div>


    <?php
    include("partner.php");
    ?>

    <!-- EXPLORE PACKAGES FOR SPECIAL OCCASIONS   -->
    <div class="temple-memorable1 p-0 pb-2">
        <div class="t-position mb-2">
            <div class="heading-tour heneymoon-head mt-2">
                <div class="d-inline">
                    <!--  <h4 class="heding-pac p-2">Packages For Special Occasions </h4>
                           <span>Our Lates Holiday Packages!</span>-->

                    <h3 class="heading-pac">
                        <span class="black">PACKAGES FOR</span> <span class="orange">SPECIAL OCCASIONS </span>
                    </h3>
                </div>
            </div>

            <div class="row p-0 m-0">
                <?php
                // $count = 0;
                $query = mysqli_query($conn, "SELECT * FROM package_by_theme where destination_category_url ='special-occasions' ORDER BY id DESC");
                while ($row = mysqli_fetch_array($query)) {

                ?>

                    <div class="col-sm-3 col-md-3 col-xl-3 col-6 p-1 mt-2">
                        <div class="package-exp">
                            <a href="javascript:void(0);" onclick="showModal('modal-10')">
                                <img class="img-fluid"
                                    src="<?php echo $cdn; ?>files/assets/images/package-by-theme/<?php echo $row['destination_img']; ?>"
                                    alt="<?php echo $row['destination_name']; ?>">
                                <span class="p-name-theme">
                                    <?php echo $row['destination_name']; ?>
                                </span>
                            </a>
                        </div>
                    </div>



                    <!--<div class="col-sm-3 col-md-3 col-xl-3 col-6 p-1 mt-2">-->
                    <!--    <div class="package-exp">-->
                    <!--        <a href="<?php echo $cdn . $row['destination_url'];  ?>">-->
                    <!--            <img class=" img-fluid"-->
                    <!--                src="<?php echo $cdn; ?>files/assets/images/package-by-theme/<?php echo $row['destination_img']; ?>"src="<?php echo $cdn; ?>files/assets/images/package-by-theme/<?php echo $row['destination_img']; ?>"-->
                    <!--                alt="<?php echo $row['destination_name'];  ?>">-->
                    <!--            <span class="p-name-theme">-->
                    <!--                <?php echo $row['destination_name'];  ?>-->
                    <!--            </span>-->
                    <!--        </a>-->
                    <!--    </div>-->
                    <!--</div>-->

                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Holiday package -->
    <div class="temple-memorable pt-0">
        <div class="t-position mt-3 mb-2">
            <div class="heading-tour heneymoon-head mt-3">
                <div class="d-inline">
                    <!--  <h4 class="heding-pac">Templemitra's Exclusive Offering</h4>
                         <span>Our Lates Holiday Packages!</span>-->

                    <h3 class="heading-pac">
                        <span class="black">TEMPLEMITRA'S</span> <span class="orange">EXCLUSIVE OFFERING</span>
                    </h3>
                </div>
            </div>
        </div>
        <!-- Product list start -->
        <div class="row m-0">
            <div class="col-lg-6 col-xl-6 col-ms-6 col-sm-6 col-12 p-0 m-0">
                <a
                    href="<?php echo $cdn; ?>temple-tour-packages/ramayana-tour-packages/ramayana-trail-via-lucknow-11-nights-12-days">
                    <img class="img-fluid" src="files/assets/images/trip/ramayana.jpg" alt="ramayana">
                    <div class="ramayana">
                        <h2>Ramayana Tours</h2>
                        <p>Every one wants to follow the life’s path of Lord Rama. Ramayana is not just a story , its an allegory
                            and an integral part of Hindu religious canon. Lord Rama is the seventh avtar of Lord Vishnu . Lord Rama
                            is one of the most widely worshipped Hindu deities, the embodiment of chivalry and virtue...
                        <div class="d-flex justify-content-center">
                            <span class="btn btn-sm btn-primary text-center">See More</span>
                        </div>
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-xl-6 col-ms-6 col-sm-6 col-12 p-0 m-0">
                <a href="https://templemitra.com/temple-tour-packages/buddhist-tour-package/buddhist-trail-india-package">
                    <img class="img-fluid" src="files/assets/images/trip/gautam-buddh.jpg" alt="gautam buddh">
                    <div class="Buddhist">
                        <h2>Buddhist Tour </h2>
                        <p> Gautam Buddha had taught world to be honest , to respect our pure nature , to respect the value of life
                            , to respect for other’s property and to be of a clear mind. Templemitra.com presents a wonderful
                            pilgrimage package that covers Buddhist Circuit in India. You would feel the ultimate peace while visiting
                            these places...
                        <div class="d-flex justify-content-center">
                            <span class="btn btn-sm btn-primary text-center">See More</span>
                        </div>
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Packages by theme  -->
    <div class="temple-memorable1 p-0 pb-2">
        <div class="t-position mb-2">
            <div class="heading-tour heneymoon-head mt-2">
                <div class="d-inline">
                    <!-- <h4 class="heding-pac p-2">Packages By Theme </h4>
                           <span>Our Lates Holiday Packages!</span>-->

                    <h3 class="heading-pac">
                        <span class="black">PACKAGES</span> <span class="orange">BY THEME</span>
                    </h3>
                </div>
            </div>

            <div class="row p-0 m-0">
                <?php
                // $count = 0;
                // $query = mysqli_query($conn, "SELECT * FROM package_by_theme WHERE destination_category_url = 'packages-by-theme' OR destination_category_url = 'special-occasions' ORDER BY id DESC");

                $query = mysqli_query($conn, "SELECT * FROM package_by_theme where destination_category_url ='packages-by-theme' ORDER BY id DESC");
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <div class="col-sm-3 col-md-3 col-xl-3 col-6 p-1 mt-2">
                        <div class="package-exp">
                            <a href="<?php echo $cdn . $row['destination_url'];  ?>">
                                <img class=" img-fluid"
                                    src="<?php echo $cdn; ?>files/assets/images/package-by-theme/<?php echo $row['destination_img']; ?>"
                                    alt="<?php echo $row['destination_name'];  ?>">
                                <span class="p-name-theme">
                                    <?php echo $row['destination_name'];  ?>
                                </span>
                            </a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Travel Articles -->
    <div class="temple-memorable p-0">
        <div class="t-position">
            <div class="travel-h Travel-head mt-4">
                <div class="d-inline">
                    <h3 class="heading-pac">
                        <span class="black anu">STAY INSPIRED WITH OUR</span> <span class="orange"> TRAVEL BLOGS</span>
                    </h3>
                </div>
            </div>
        </div>
        <div class="mt-2">
            <!-- Product list start -->
            <div class="row m-0 ">
                <?php
                $q = mysqli_query($conn, "SELECT * FROM blog_post WHERE status = 'Publised' ORDER BY id DESC");
                while ($blog = mysqli_fetch_array($q)) {
                    $categoryId = $blog['category_id'];
                    $categ = mysqli_query($conn, "SELECT * FROM blog_category WHERE id = '$categoryId'");
                    $cat = mysqli_fetch_array($categ);
                ?>
                    <!-- Article -->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6 p-1 m-0 rag">
                        <div class="card">
                            <img class="article-img" src="files/assets/images/product/<?php echo $blog['thumbnail']; ?>"
                                alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title heding-blog-front p-2">
                                    <a href="blogs/view/<?php echo $cat['slug'] . '/' . $blog['slug']; ?>">
                                        <?php echo htmlspecialchars($blog['title']); ?>
                                    </a>
                                    <i class="fa fa-eye" aria-hidden="true"></i><span>
                                        <?php echo htmlspecialchars($blog['page_view']); ?>
                                    </span>
                                </h4>
                                <div class="card-text text-muted blog-text p-2">
                                    <?php
                                    $str = $blog['meta_description'];
                                    $max = 200;
                                    if (strlen($str) > $max) {
                                        $str = substr($str, 0, $max) . '...';
                                    }
                                    echo htmlspecialchars(strip_tags($str));
                                    ?>
                                </div>
                                <a href="/blogs/view/<?php echo $cat['slug'] . '/' . $blog['slug']; ?>" class="btn btn-grd-success">Read
                                    More..</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Article -->
                <?php } ?>
            </div>
            <div class="pagination" id="pagination-container"></div>
            <!-- Product list end -->
            <!-- Page body end -->
        </div>
    </div>

    <!--why_book-->
    <div class="why-book">
        <div class="container-fluid">
            <div class="row m-0 pt-2">
                <div class="col-sm-2 p-0">
                    <div>
                        <h4 class="text-center mt-2">Why Book With Us?</h4>
                    </div>
                </div>
                <div class="col-sm-10 p-0">
                    <div class="row">
                        <div class="col-sm-4 mt-2">

                            <div class="media">
                                <img alt="COMPLETE PILGRIMAGE TOUR" class="img_thumb" src="files/assets/images/icn/thumb.png">
                                <div class="media-body ml-2">
                                    <h6 class="mt-0">COMPLETE TRAVEL SOLUTIONS</h6>
                                    Travel Simplified !!
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-2">
                            <div class="media">
                                <img alt="AIMING SATISFACTION" class="img_circle" src="files/assets/images/icn/circle.png">
                                <div class="media-body ml-2">
                                    <h6 class="mt-0">AIMING SATISFACTION. </h6>
                                    Dedicated Service Approach!!
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-2">
                            <div class="media">
                                <img alt=" AFFORDABLE &amp; HASSLE FREE TOURS" class="img_lock" src="files/assets/images/icn/lock.png">
                                <div class="media-body ml-2">
                                    <h6 class="mt-0">AFFORDABLE &amp; HASSLE FREE TOURS </h6>
                                    Service with a Vision!!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Main-body end -->
    <!-- Page body end -->

    <script src="<?php echo $cdn  ?>files/assets/js/slide.js"></script>
    <?php
    include("footer.php");
    ?>

    <?php
    include("footer-link.php");

    ?>
    <!--
<script>
    $(document).ready(function(){
        // Enable carousel
        $('#youtubeCarousel').carousel({
            interval: 5000, // Change slide every 5 seconds
            pause: 'hover' // Pause on hover
        });
    });
</script>
-->

    <script>
        $(document).ready(function() {
            // Show the first page initially
            showPage(1);

            // Generate pagination
            generatePagination();

            // Handle pagination link clicks
            $(document).on('click', '.pagination-link', function(e) {
                e.preventDefault();
                var pageNumber = $(this).data('page');
                showPage(pageNumber);

                // Scroll smoothly to the Guests Reviews section
                $('html, body').animate({
                    scrollTop: $(".anu").offset().top - 150 // Adjust this value if needed
                }, 500); // Adjust the duration (500ms) as needed
            });
        });

        function generatePagination() {
            var itemsPerPage = 4;
            var totalItems = $('.rag').length;
            var totalPages = Math.ceil(totalItems / itemsPerPage);

            var paginationContainer = $('#pagination-container');
            paginationContainer.empty();

            for (var i = 1; i <= totalPages; i++) {
                var paginationLink = $('<a>', {
                    href: '#',
                    class: 'pagination-link' + (i === 1 ? ' active' : ''), // Add active class to the first link
                    'data-page': i,
                    text: i
                });

                paginationContainer.append(paginationLink);
            }
        }

        function showPage(pageNumber) {
            var itemsPerPage = 4;
            var startIndex = (pageNumber - 1) * itemsPerPage;
            var endIndex = startIndex + itemsPerPage;

            $('.rag').hide().removeClass('active');
            $('.rag').slice(startIndex, endIndex).show().addClass('active');

            // Highlight the active page link
            $('.pagination-link').removeClass('active');
            $('.pagination-link[data-page="' + pageNumber + '"]').addClass('active');
        }
    </script>

    <!-- youtube js-->
    <script>
        let currentSlideIndex = 0;

        function showSlide(index) {
            const slides = document.querySelectorAll('.youtube-video-slide');
            if (index >= slides.length) currentSlideIndex = 0;
            if (index < 0) currentSlideIndex = slides.length - 1;

            // Hide all slides
            slides.forEach(slide => slide.style.display = "none");

            // Show the selected slide
            slides[currentSlideIndex].style.display = "block";
        }

        function changeSlide(n) {
            currentSlideIndex += n;
            showSlide(currentSlideIndex);
        }

        // Function to start playing the video when clicked
        function playVideo(event) {
            const iframe = event.target;
            const videoSrc = iframe.getAttribute('data-src'); // Get the source without autoplay
            iframe.src = videoSrc + "?autoplay=1&rel=0"; // Add autoplay when clicked
        }

        // Initialize the first video to be visible
        showSlide(currentSlideIndex);
    </script>

    // <script>
        //     let currentSlideIndex = 0;

        //     function showSlide(index) {
        //         const slides = document.querySelectorAll('.youtube-video-slide');
        //         if (index >= slides.length) currentSlideIndex = 0;
        //         if (index < 0) currentSlideIndex = slides.length - 1;

        //         // Hide all slides
        //         slides.forEach(slide => slide.style.display = "none");

        //         // Show the selected slide
        //         slides[currentSlideIndex].style.display = "block";
        //     }

        //     function changeSlide(n) {
        //         currentSlideIndex += n;
        //         showSlide(currentSlideIndex);
        //     }

        //     // Initialize the first video to be visible
        //     showSlide(currentSlideIndex);
        // 
    </script>

</body>

</html>