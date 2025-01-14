<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <?php
  include('./sections/head.php');
  ?>
</head>
<body>
    <section class="portfolio_page">
        <div class="text_part">
            <h1 class="poppins-bold">View Our Latest PROJECTS</h1>
            <p class="poppins-regular">From award-winning Graphic Designing and Shopify theme development to elegant, seamless web development, we build products
                that thrive at the intersection of business goals and user needs.</p>
        </div>
        <div class="project_details">
            <div class="project_list">
                <a href="#">
                    <div class="project prj_1">
                        <div class="image">
                            <img src="images/Graphic-image.png" alt="Creative Graphic Design">
                        </div>
                        <div class="project_content">
                            <h3 class="poppins-semibold">Creative Graphic Design</h3>
                            <p class="poppins-regular">Explore our graphic design projects that combine creativity and strategy to elevate your brand. From logos to marketing materials, we create designs that make a lasting impact.</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="project prj_2">
                        <div class="image">
                            <img src="../assets/images/web-development-image.png" alt="Expert Web Development">
                        </div>
                        <div class="project_content">
                            <h3 class="poppins-semibold">Expert Web Development</h3>
                            <p class="poppins-regular">We specialize in building responsive, user-friendly websites that deliver seamless experiences across all devices. From design to deployment, we ensure your online presence stands out.</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="project prj_3">
                        <div class="image">
                            <img src="images/shopify-image.png" alt="Shopify Store Development">
                        </div>
                        <div class="project_content">
                            <h3 class="poppins-semibold">Shopify Store Development</h3>
                            <p class="poppins-regular">We create customized Shopify stores that are visually appealing and optimized for sales. Our solutions enhance user experience and drive conversions, helping your business succeed online.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
</body>
</html>
