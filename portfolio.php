<!DOCTYPE html>
<html lang="en">

<?php include('header.php'); ?>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M436PKCG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
 
<?php include('nav-bar.php'); ?>


<section class="head-section">
        <div class="outer-container">
            <div class="heading-container">
                <div class="heading">
                    <h2 class="heading-head">Portfolio</h2>
                    <h4 class="heading-body">We <span class="text-secondary" >identified</span> by our work. Here are witness the impact from the <span class="text-secondary" >successful</span><br /> Implimentaion of<span class="text-secondary" > Our Projects.</span></h4>
                    <div class="button grid-span">
                        <a href="contact-us.php" class="btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="portolio-section">
      <div class="container">
        <div class="filter">
                <div class="select-container">
                    <label class="select-label">Filter Category</label>
                    <div id="select-category" class="select-body">
                        <select name="categpry" id="select-category">
                            <option value="" disabled selected hidden>Select Services</option>
                            <option value="" class="one">one</option>
                            <option value="" class="two">two</option>
                            <option value="" class="three">three</option>
                        </select>
                    <div class="select-icon">
                        <img src="assets/images/icons/arrow-down.svg" alt="arrow-down">
                    </div>
                    </div>
                </div>
        </div>
    <div class="grid-container">
        <div class="card-grid">
            <div class="card card-shadow">
                <div class="card-header card-image">
                    <img src="assets/images/portfolio/image1.webp" alt="blog-post">
                </div>
                <div class="card-body">
                    <h3>Website Design</h3>
                    The owner of BUCH hospital needed a solution to manage administrative and patieant detaileffectively.  
                </div>
                <div class="card-footer">
                    <button class="btn">Case Study</button>
                </div>
            </div>
            <div class="card card-shadow">
                <div class="card-header card-image">
                    <img src="assets/images/portfolio/image2.webp" alt="blog-post">
                </div>
                <div class="card-body">
                    <h3>Website Design</h3>
                    The owner of BUCH hospital needed a solution to manage administrative and patieant details effectively.  
                </div>
                <div class="card-footer">
                    <button class="btn">Case Study</button>
                </div>
             </div>

             <div class="card card-shadow">
                <div class="card-header card-image">
                    <img src="assets/images/portfolio/image3.webp" alt="blog-post">
                </div>
                <div class="card-body">
                    <h3>Website Design</h3>
                    The owner of BUCH hospital needed a solution to manage administrative and patieant details effectively.  
                </div>
                <div class="card-footer">
                    <button class="btn">Case Study</button>
                </div>
             </div>

             <div class="card card-shadow">
                <div class="card-header card-image">
                    <img src="assets/images/portfolio/image1.webp" alt="blog-post">
                </div>
                <div class="card-body">
                    <h3>Website Design</h3>
                    The owner of BUCH hospital needed a solution to manage administrative and patieant details effectively.  
                </div>
                <div class="card-footer">
                    <button class="btn">Case Study</button>
                </div>
             </div>
             
             <div class="card card-shadow">
                <div class="card-header card-image">
                    <img src="assets/images/portfolio/image2.webp" alt="blog-post">
                </div>
                <div class="card-body">
                    <h3>Website Design</h3>
                    The owner of BUCH hospital needed a solution to manage administrative and patieant details effectively.  
                </div>
                <div class="card-footer">
                    <button class="btn">Case Study</button>
                </div>
             </div>

             <div class="card card-shadow">
                <div class="card-header card-image">
                    <img src="assets/images/portfolio/image3.webp" alt="blog-post">
                </div>
                <div class="card-body">
                    <h3>Website Design</h3>
                    The owner of BUCH hospital needed a solution to manage administrative and patieant details effectively.  
                </div>
                <div class="card-footer">
                    <button class="btn">Case Study</button>
                </div>
             </div>

             <div class="card card-shadow">
                <div class="card-header card-image">
                    <img src="assets/images/portfolio/image1.webp" alt="blog-post">
                </div>
                <div class="card-body">
                    <h3>Website Design</h3>
                    The owner of BUCH hospital needed a solution to manage administrative and patieant details effectively.  
                </div>
                <div class="card-footer">
                    <button class="btn">Case Study</button>
                </div>
             </div>

             <div class="card card-shadow">
                <div class="card-header card-image">
                    <img src="assets/images/portfolio/image2.webp" alt="blog-post">
                </div>
                <div class="card-body">
                    <h3>Website Design</h3>
                    The owner of BUCH hospital needed a solution to manage administrative and patieant details effectively.  
                </div>
                <div class="card-footer">
                    <button class="btn">Case Study</button>
                </div>
             </div>
        </div>
    </div>
</section>

<section class="pagination-section">
    <div class="pagination-container display-none">
        <div class="pagination">
            <button class="page-btn" onclick="backBtn()"> < </button>
                <ul class="page-list">
                    <li class="link active visible" value="1" onclick="activeLink()">1</li>
                    <li class="link visible" value="2" onclick="activeLink()">2</li>
                    <li class="link visible" value="3" onclick="activeLink()">3</li>
                    <li class="link visible" value="4" onclick="activeLink()">4</li>
                    <li class="link visible"  value="5" onclick="activeLink()">5</li>
                    <li class="link" value="6" onclick="activeLink()">6</li>
                    <li class="link" value="7" onclick="activeLink()">7</li>
                    <li class="link" value="8" onclick="activeLink()">8</li>
                    <li class="link"  value="9" onclick="activeLink()">9</li>
                    <li class="link"  value="10" onclick="activeLink()">10</li>
                </ul>
            <button class="page-btn" onclick="nextBtn()"> > </button>
        </div>
    </div>
</section>

<?php include('blog.php'); ?>

<?php include('footer.php'); ?>
<script src="assets/script.js"></script>
<script>
    let link = document.getElementsByClassName("link");
    let currentValue = 1;

    function activeLink(){
        for(l of link){
            l.classList.remove("active");
        }
        event.target.classList.add("active");
        currentValue = event.target.value;
    }

    function backBtn(){
        if(currentValue > 1){
            for(l of link){
                l.classList.remove("active");
            }
        }
        currentValue--;
        link[currentValue-1].classList.add("active");
    }



    function nextBtn(){
        if(currentValue < 11){
            for(l of link){
                l.classList.remove("active");
            }
        }
        currentValue++;
        link[currentValue-1].classList.add("active");
    }
</script>
</body>
</html>