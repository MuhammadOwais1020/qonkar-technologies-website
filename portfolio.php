<!DOCTYPE html>
<html lang="en">

<?php include('header.php'); ?>

<body>
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
                        <img src="assets/images/icons/arrow-down.svg" alt="">
                    </div>
                    </div>
                </div>
        </div>
    <div class="grid-container">
        <div class="card-grid">
            <div class="card card-shadow">
                <div class="card-header card-image">
                    <img src="assets/images/portfolio/image1.webp">
                </div>
                <div class="card-body">
                    <h2>Website Design</h2>
                    The owner of BUCH hospital needed a solution to manage administrative and patieant detaileffectively.  
                </div>
                <div class="card-footer">
                    <button class="btn">Case Study</button>
                </div>
            </div>
            <div class="card card-shadow">
                <div class="card-header card-image">
                    <img src="assets/images/portfolio/image2.webp">
                </div>
                <div class="card-body">
                    <h2>Website Design</h2>
                    The owner of BUCH hospital needed a solution to manage administrative and patieant details effectively.  
                </div>
                <div class="card-footer">
                    <button class="btn">Case Study</button>
                </div>
             </div>

             <div class="card card-shadow">
                <div class="card-header card-image">
                    <img src="assets/images/portfolio/image3.webp">
                </div>
                <div class="card-body">
                    <h2>Website Design</h2>
                    The owner of BUCH hospital needed a solution to manage administrative and patieant details effectively.  
                </div>
                <div class="card-footer">
                    <button class="btn">Case Study</button>
                </div>
             </div>

             <div class="card card-shadow">
                <div class="card-header card-image">
                    <img src="assets/images/portfolio/image1.webp">
                </div>
                <div class="card-body">
                    <h2>Website Design</h2>
                    The owner of BUCH hospital needed a solution to manage administrative and patieant details effectively.  
                </div>
                <div class="card-footer">
                    <button class="btn">Case Study</button>
                </div>
             </div>
             
             <div class="card card-shadow">
                <div class="card-header card-image">
                    <img src="assets/images/portfolio/image2.webp">
                </div>
                <div class="card-body">
                    <h2>Website Design</h2>
                    The owner of BUCH hospital needed a solution to manage administrative and patieant details effectively.  
                </div>
                <div class="card-footer">
                    <button class="btn">Case Study</button>
                </div>
             </div>

             <div class="card card-shadow">
                <div class="card-header card-image">
                    <img src="assets/images/portfolio/image3.webp">
                </div>
                <div class="card-body">
                    <h2>Website Design</h2>
                    The owner of BUCH hospital needed a solution to manage administrative and patieant details effectively.  
                </div>
                <div class="card-footer">
                    <button class="btn">Case Study</button>
                </div>
             </div>

             <div class="card card-shadow">
                <div class="card-header card-image">
                    <img src="assets/images/portfolio/image1.webp">
                </div>
                <div class="card-body">
                    <h2>Website Design</h2>
                    The owner of BUCH hospital needed a solution to manage administrative and patieant details effectively.  
                </div>
                <div class="card-footer">
                    <button class="btn">Case Study</button>
                </div>
             </div>

             <div class="card card-shadow">
                <div class="card-header card-image">
                    <img src="assets/images/portfolio/image2.webp">
                </div>
                <div class="card-body">
                    <h2>Website Design</h2>
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

<section class="head-section">
    <div class="outer-container">
        <div class="heading-container">
            <div class="heading">
                <h2 class="heading-head">Our Blogs</h2>
                <h4 class="heading-body">We <span class="text-secondary" >identified</span> by our work. Here are witness   theimpact from the <span class="text-secondary" >successful</span><br /> Implimentaion    of<spanclass="text-secondary" > Our Projects.</span></h4>
                <div class="button grid-span">
                    <a href="contact-us.php" class="btn">Schedule a Demo</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blogs-section">
        <div class="container">
            <div class="grid-container">
                <div class="grid-section">
                    <div class="featured-blog-container">
                        <div class="featured-blog card-grid">
                            <a href="blog.php">
                                <div class="card card-shadow">
                                    <div class="card-header blog-image">
                                        <img src="assets/images/portfolio/image0.webp">
                                    </div>
                                    <div class="card-body">
                                        <p>company</p>
                                        <h2>How Travel Writer and Vlogger Welmis Gutierrez Overcomes Self-Doubt</h2> 
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="side-blog-container">
                        <div class="blog-card side-blog">
                            <div class="card card-shadow">
                                <div class="card-header blog-image">
                                    <img src="assets/images/portfolio/image0.webp">
                                </div>
                                <div class="card-body side-blog">
                                    <p>How to</p>
                                    <h2>How Travel Writer and Vlogger Welmis Gutierrez Overcomes Self-Doubt</h2> 
                                </div>
                            </div>
                            <div class="card card-shadow">
                                <div class="card-header blog-image">
                                    <img src="assets/images/portfolio/image0.webp">
                                </div>
                                <div class="card-body side-blog">
                                    <p>Product</p>
                                    <h2>How Travel Writer and Vlogger Welmis Gutierrez Overcomes Self-Doubt</h2> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-list">
                        <div class="blog-list-heading">
                            <h2>Staff Pick</h2>
                        </div>
                        <div class="blog-item">
                            <div class="blog-category">
                                <a href="#"><p>product</p></a>
                            </div>
                            <div class="blog-title">
                                <p>grammerly spotlight! how to add new words to your personal dictionary</p>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="blog-category">
                                <a href="#"><p>product</p></a>
                            </div>
                            <div class="blog-title">
                                <p>grammerly spotlight! how to add new words to your personal dictionary</p>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="blog-category">
                                <a href="#"><p>How to</p></a>
                            </div>
                            <div class="blog-title">
                                <p>How to write email---Tips and Tricks</p>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="blog-category">
                                <a href="#"><p>How to</p></a>
                            </div>
                            <div class="blog-title">
                                <p>Grammerly + medium = happy writters</p>
                            </div>
                        </div>
                        <div class="blog-item">
                            <div class="blog-category">
                                <a href="#"><p>How to</p></a>
                            </div>
                            <div class="blog-title">
                                <p>How to write email---Tips and Tricks</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-container">
                <div class="blog-card">
                    <div class="card card-shadow">
                        <div class="card-header blog-image">
                            <img src="assets/images/portfolio/image0.webp">
                        </div>
                        <div class="card-body">
                            <p>company</p>
                            <h2>How Travel Writer and Vlogger Welmis Gutierrez Overcomes Self-Doubt</h2> 
                        </div>
                    </div>
                    <div class="card card-shadow">
                        <div class="card-header blog-image">
                            <img src="assets/images/portfolio/image0.webp">
                        </div>
                        <div class="card-body">
                            <p>How to</p>
                            <h2>How Travel Writer and Vlogger Welmis Gutierrez Overcomes Self-Doubt</h2> 
                        </div>
                    </div>
                    <div class="card card-shadow">
                        <div class="card-header blog-image">
                            <img src="assets/images/portfolio/image0.webp">
                        </div>
                        <div class="card-body">
                            <p>Product</p>
                            <h2>How Travel Writer and Vlogger Welmis Gutierrez Overcomes Self-Doubt</h2> 
                        </div>
                    </div>
                    <div class="card card-shadow">
                        <div class="card-header blog-image">
                        <img src="assets/images/portfolio/image0.webp">
                    </div>
                    <div class="card-body">
                        <p>Product</p>
                        <h2>How Travel Writer and Vlogger Welmis Gutierrez Overcomes Self-Doubt</h2> 
                    </div>
                    </div>
                </div>
            </div> 
            <div class="grid-container">
                <div class="button grid-span">
                    <a href="blogs.php" class="btn">Explore More</a>
                </div>
            </div>  
        </div> 
</section>




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