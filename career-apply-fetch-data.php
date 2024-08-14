<?php

// DB connection file
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = mysqli_real_escape_string($conn, $_POST['first-name']);
    $whatsappNumber = mysqli_real_escape_string($conn, $_POST['number']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $qualification = mysqli_real_escape_string($conn, $_POST['qualification']);
    
    if (isset($_POST['skills']) && is_array($_POST['skills'])) {
        $skills = array_map([$conn, 'real_escape_string'], $_POST['skills']);
        $skillsString = implode(',', $skills);
    } else {
        $skillsString = '';
    }

    $applyingFor = mysqli_real_escape_string($conn, $_POST['applying-for']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $outlineSkills = mysqli_real_escape_string($conn, $_POST['outline-skills']);
    $experties = mysqli_real_escape_string($conn, $_POST['experties']);
    $timePeriod = mysqli_real_escape_string($conn, $_POST['radio-group']);
    $futureGoal = mysqli_real_escape_string($conn, $_POST['future-goal']);

    // File upload handling
    $uploadDir = 'media/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $resumePath = '';
    $portfolioPath = '';

    if (isset($_FILES['resume']) && $_FILES['resume']['error'] === UPLOAD_ERR_OK) {
        $resumePath = $uploadDir . basename($_FILES['resume']['name']);
        if (!move_uploaded_file($_FILES['resume']['tmp_name'], $resumePath)) {
            echo 'File upload error: Resume';
            exit;
        }
    }

    if (isset($_FILES['portfolio']) && $_FILES['portfolio']['error'] === UPLOAD_ERR_OK) {
        $portfolioPath = $uploadDir . basename($_FILES['portfolio']['name']);
        if (!move_uploaded_file($_FILES['portfolio']['tmp_name'], $portfolioPath)) {
            echo 'File upload error: Portfolio';
            exit;
        }
    }

    $query = "
        INSERT INTO Career_Opportunity_applyNow (full_name, whatsapp_number, email, country, qualification, skills, applying_for, description, outline_skills, experties, time_period, future_goal, resume, portfolio)
        VALUES ('$fullName', '$whatsappNumber', '$email', '$country', '$qualification', '$skillsString', '$applyingFor', '$description', '$outlineSkills', '$experties', '$timePeriod', '$futureGoal', '$resumePath', '$portfolioPath')
    ";

    if (mysqli_query($conn, $query)) {
        echo 'success';
    } else {
        echo 'Database error: ' . mysqli_error($conn);
    }
} else {
    echo 'Invalid request method.';
}

mysqli_close($conn);
?>