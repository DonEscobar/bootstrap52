<?php
$seoTitle = "Homepage SERP Title - Bootstrap52";
$seoDescription = "This will be the description for the search engine result pages.";
$ogTitle = "Homepage OG Title - Bootstrap52";
$ogDescription = "This will be the description used for Open Graph.";
$canonical = ""; // Leave blank for homepage

include 'includes/header.php'; ?>
<body>
<?php include 'includes/navigation.php'; ?>

<div class="container navbar-nav-padding">
    <div class="row">
        <div class="col">
            <h1 class="bs52">Bootstrap52</h1>
            <div class="row justify-content-center">
                <div class="col-8 text-center">
                    <p>Bootstrap52 is a collection of PHP libraries, SEO and coding best practices to help set up a secure, user friendly website and obtain the highest possible score on Google's <a href="https://developers.google.com/speed/pagespeed/insights/">PageSpeed Insights</a>.</p>
                    <a href="" class="btn btn-outline-dark mb-5"><i class="fa fa-github mr-1"></i> Bootstrap52 Starter Pack v<?= $version ?></a>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-8 text-center">
                    <p><small>Components</small></p>
                    <div class=" bs52-links mt-3">
                        <a href="https://github.com/aidantwoods/SecureHeaders" class="btn btn-warning btn-sm mr-3">Secure Headers</a>
                        <a href="https://github.com/jehna/ga-lite" class="btn btn-warning btn-sm mr-3">ga-lite</a>
                        <a href="http://getbootstrap.com" class="btn btn-warning btn-sm mr-3">Bootstrap 4</a>
                        <a href="http://fontawesome.io" class="btn btn-warning btn-sm">Font Awesome 4.7</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
</body>
</html>
