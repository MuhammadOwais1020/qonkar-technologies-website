<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src="dashboard-script.js"></script> -->
    <?php include('header.php'); ?>
    <title>Admin Dashboard | Qonkar IT Services Company</title>
   
</head>
<body>
<?php 
if(isset($_SESSION['email'])){
?>

    <div class="inner-container">
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
                        <div class="btn-finance">
                            <a href="#"><button class="secondary-btn" id="contactInfoBtn"><img src="assets/images/icons/dashboard-icons/icon-dashboard.png">Contact Info</button></a>
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
                    <div id="dashboard-section">   
                        <div class="dashboard-box">
                        </div>
                    </div>
                    <div id="contact-info-section" style="display: none;">   
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
<!-- <script src="path/to/dashboard-script.js"></script> -->
<script>
// document.addEventListener('DOMContentLoaded', (event) => {
//   const carrierApplicantBtn = document.getElementById('carrierApplicantBtn');
//   const contactInfoBtn = document.getElementById('contactInfoBtn');
//   const form1 = document.getElementById('dashboard');
//   const form2 = document.getElementById('contact-info-section');
//   const form3 = document.getElementById('career-info-section');

//   // Initially show the dashboard
//   form1.style.display = 'block';
//   form2.style.display = 'none';
//   form3.style.display = 'none';

//   // Handle clicks on the buttons
//   contactInfoBtn.addEventListener('click', () => {
//       form1.style.display = 'none';
//       form2.style.display = 'block';
//       form3.style.display = 'none';
//       fetchContactTableData(); // Fetch and display contact data
//   });

//   carrierApplicantBtn.addEventListener('click', () => {
//       form1.style.display = 'none';
//       form2.style.display = 'none';
//       form3.style.display = 'block';
//       fetchCareerTableData(); // Fetch and display career data
//   });
// });

$(document).ready(function() {
            $('#carrierApplicantBtn').on('click', function() {
                fetchCareerTableData();
                $('#dashboard-section').hide();
                $('#contact-info-section').hide();
                $('#career-info-section').show();
            });

            $('#contactInfoBtn').on('click', function() {
                fetchContactTableData();
                $('#dashboard-section').hide();
                $('#career-info-section').hide();
                $('#contact-info-section').show();
            });
        });

        // Function to fetch contact table data
        function fetchContactTableData() {
            $.ajax({
                url: 'fetch-data.php', // Replace with your actual URL to fetch contact data
                method: 'GET',
                success: function(data) {
                    // Process and display the data in the contact-info-section
                    console.log(data); // Log the data structure for debugging
                if (data && Array.isArray(data.contact)) {
                    var tbody = $('#infoTableBody');
                    tbody.empty(); // Clear existing table data
                    data.contact.forEach(function(item) {
                        var row = $('<tr></tr>');
                        row.append('<td>' + item.id + '</td>');
                        row.append('<td>' + item.fullname + '</td>');
                        row.append('<td>' + item.form_help + '</td>');
                        row.append('<td>' + item.number + '</td>');
                        var viewEmailBtn = $('<button class="btn-read">View Email</button>');
                        var emailTd = $('<td></td>');
                        emailTd.append(viewEmailBtn);
                        row.append(emailTd);
                        tbody.append(row);

                        // Add click event for the "View Email" button
                        viewEmailBtn.click(function() {
                            alert('Email: ' + item.email);
                        });
                    });
                } else {
                    console.error("Contact data is not an array or is undefined");
                }
                    $('#contact-info-section').html(data);
                },
                error: function(error) {
                    console.error("Error fetching contact data:", error);
                }
            });
        }

        // Function to fetch career table data
        function fetchCareerTableData() {
            $.ajax({
                url: 'fetch-data.php', // Replace with your actual URL to fetch career data
                method: 'GET',
                success: function(data) {
                    console.log(data); // Log the data structure for debugging
                if (data && Array.isArray(data.career)) {
                    var tbody = $('#career-info');
                    tbody.empty(); // Clear existing table data
                    data.career.forEach(function(item) {
                        var row = $('<tr></tr>');
                        row.append('<td>' + item.id + '</td>');
                        row.append('<td>' + item.full_name + '</td>');
                        row.append('<td>' + item.country + '</td>');
                        row.append('<td>' + item.qualification + '</td>');
                        row.append('<td>' + item.skills + '</td>');
                        row.append('<td>' + item.applying_for + '</td>');
                        var viewEmailBtn = $('<button class="btn-read">View Email</button>');
                        var emailTd = $('<td></td>');
                        emailTd.append(viewEmailBtn);
                        row.append(emailTd);
                        tbody.append(row);

                        // Add click event for the "View Email" button
                        viewEmailBtn.click(function() {
                            alert('Email: ' + item.email);
                        });
                    });
                } else {
                    console.error("Career data is not an array or is undefined");
                }
                    // Process and display the data in the career-info-section
                    $('#career-info-section').html(data);
                },
                error: function(error) {
                    console.error("Error fetching career data:", error);
                }
            });
        }

  </script>
</body>
</html>