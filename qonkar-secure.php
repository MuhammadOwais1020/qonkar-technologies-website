<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="dashboard-script.js"></script>
    <?php include('header.php'); ?>
    <title>Admin Dashboard | Qonkar IT Services Company</title>
   
</head>
<body>
<?php 
if(isset($_SESSION['email'])){
?>

    <div class="inner-container" id="dashboard">
        <div class="dashboard-grid-container">
            <div class="side-bar">
                <div class="content-container">
                    <div class="dashboard-logo">
                        <img src="assets/images/logo/qonkar-technologies-pvt-ltd-best-it-services-company.webp"
                        alt="qonkar technologies pvt ltd best IT services company" />
                    </div>
                    <div class="line">
                        <hr />
                    </div>
                    

                    <div class="dashboard-btns">
                        <div class="btn-dashboard">
                            <a href="#"><button class="secondary-btn"><img src="assets/images/icons/dashboard-icons/icon-dashboard.png">Dashboard</button></a>
                        </div>
                        <div class="btn-finance">
                            <button class="secondary-btn"><img src="assets/images/icons/dashboard-icons/icon-dashboard.png">Emails</button>
                        </div>
                        <!-- <div class="select">
                            <select name="categpry" id="select-category" class="select-mail">
                                <option value="" disabled selected hidden>View Emails</option>
                                <option value="" class="one">one</option>
                                <option value="" class="two">two</option>
                                <option value="" class="three">three</option>
                            </select>
                        </div> -->
                        <div class="btn-finance">
                            <a href="#"><button class="secondary-btn"><img src="assets/images/icons/dashboard-icons/icon-finance.png">Finance</button></a>
                        </div>
                        <div class="btn-finance">
                            <a href="#"><button class="secondary-btn" id="carrierApplicantBtn"><img src="assets/images/icons/dashboard-icons/icon-dashboard.png">Applications</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info-grid">
                <div class="info-header">
                    <div class="info-heading">
                        <h4>Qonkar Technologies Private Limited</h4>
                    </div>
                
                    <div class="account-info">
                        <div class="notify-icon">
                            <img src="assets/images/icons/notification.svg" alt="Notification Icon">
                        </div>
                        <div class="account-icon">
                            <img src="assets/images/team/owais-front-end-developer.webp" alt="Profile Picture">
                        </div>
                        <div class="account-name">
                            <p><?php echo $_SESSION['email'];?></p>
                            <p>Front-end Developer</p>
                        </div>
                    </div>
                </div>

                    <div class="select-filter-container">
                        <div id="select-category" class="select-body">
                            <select name="categpry" id="select-category">
                                <option value="" disabled selected hidden>View Emails</option>
                                <option value="" class="one">one</option>
                                <option value="" class="two">two</option>
                                <option value="" class="three">three</option>
                            </select>
                            <div class="select-icon">
                                <img src="assets/images/icons/form-icon/arrow-down.svg" alt="arrow-down">
                            </div>
                        </div>
                        <div class="search-div">
                            <img src="assets/images/icons/dashboard-icons/search.svg" class="notify-icon" alt="search-icon"><input type="search" name="search" id="search" class="search" value="Search">
                        </div>
                    </div>
            <div id="contact-info-section">   
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fullname</th>
                            <th>Service</th>
                            <th>Whatsapp Number</th>
                            <th>Read</th>
                        </tr>
                    </thead>
                    <tbody id="infoTableBody">
                        <!-- <?php foreach ($info as $contactus_form) : ?>
                            <tr>
                                <td><?php echo $contactus_form['id']; ?></td>
                                <td><?php echo $contactus_form['fullname']; ?></td>
                                <td><?php echo $contactus_form['form_help']; ?></td>
                                <td><?php echo $contactus_form['number']; ?></td>
                                <td><button class="btn-read">View Email</button></td>
                            </tr>
                        <?php endforeach; ?> -->
                    </tbody>
                </table>
            </div>
            <div id="career-info-section" style="display: none;">   
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fullname</th>
                            <th>City</th>
                            <th>Qualification</th>
                            <th>Skills</th>
                            <th>Applying for</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody id="career-info">
                        <!-- <?php foreach ($info as $contactus_form) : ?>
                            <tr>
                                <td><?php echo $contactus_form['id']; ?></td>
                                <td><?php echo $contactus_form['fullname']; ?></td>
                                <td><?php echo $contactus_form['form_help']; ?></td>
                                <td><?php echo $contactus_form['number']; ?></td>
                                <td><button class="btn-read">View Email</button></td>
                            </tr>
                        <?php endforeach; ?> -->
                    </tbody>
                </table>
            </div>
                <a href="#" id="logout">logout</a>
            </div>
        </div>
    </div>

<?php } else { ?>
    
    <div class="login-container" id="loginContainer">
        <div class="box">
            <h1 id="title">Login</h1>
            <form id="loginForm" method="post">
                <div class="inputs">
                    <div class="input-field">
                        <input type="email" placeholder="Email" name="email" id="email" required>
                    </div>
                    <div class="input-field">
                        <input type="password" placeholder="Password" name="password" id="password" required>
                    </div>
                    <div class="login-btn">
                        <button type="submit" id="login_btn" name="submit">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
<?php } ?>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
  const carrierApplicantBtn = document.getElementById('carrierApplicantBtn');
  const form1 = document.getElementById('contact-info-section');
  const form2 = document.getElementById('career-info-section');

  carrierApplicantBtn.addEventListener('click', () => {
      // Hide Form 1 and show Form 2
      form1.style.display = 'none';
      form2.style.display = 'block';
  });
});
  </script>
</body>
</html>