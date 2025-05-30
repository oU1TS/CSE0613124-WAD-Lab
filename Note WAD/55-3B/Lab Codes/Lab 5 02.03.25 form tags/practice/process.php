<?php
// Initialize variables to store form data
$name = $email = $subject = $message = "";
$errors = [];
$formSubmitted = false;

// Check if the form was submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formSubmitted = true;
    
    // Validate Name
    if (empty($_POST["name"])) {
        $errors[] = "Name is required";
    } else {
        $name = cleanInput($_POST["name"]);
        // Check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $errors[] = "Only letters and white space allowed in name";
        }
    }
    
    // Validate Email
    if (empty($_POST["email"])) {
        $errors[] = "Email is required";
    } else {
        $email = cleanInput($_POST["email"]);
        // Check if email address is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format";
        }
    }
    
    // Get and clean subject
    if (isset($_POST["subject"])) {
        $subject = cleanInput($_POST["subject"]);
    }
    
    // Validate Message
    if (empty($_POST["message"])) {
        $errors[] = "Message is required";
    } else {
        $message = cleanInput($_POST["message"]);
    }
}

// Function to sanitize form input data
function cleanInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Convert subject code to readable text
function getSubjectText($subjectCode) {
    $subjects = [
        'general' => 'General Inquiry',
        'support' => 'Technical Support',
        'billing' => 'Billing Question',
        'other' => 'Other'
    ];
    
    return isset($subjects[$subjectCode]) ? $subjects[$subjectCode] : $subjectCode;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        .form-data {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        .form-data h3 {
            margin-top: 0;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        .form-field {
            margin-bottom: 15px;
        }
        .field-name {
            font-weight: bold;
        }
        .field-value {
            margin-top: 5px;
            padding: 8px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .button {
            display: inline-block;
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Form Submission</h1>
    
    <?php if ($formSubmitted): ?>
        <?php if (empty($errors)): ?>
            <!-- Display success message -->
            <div class="success">
                <h2>Thank you for contacting us!</h2>
                <p>Your message has been received successfully.</p>
            </div>
            
            <!-- Display submitted information -->
            <div class="form-data">
                <h3>Your Submitted Information</h3>
                
                <div class="form-field">
                    <div class="field-name">Name:</div>
                    <div class="field-value"><?php echo $name; ?></div>
                </div>
                
                <div class="form-field">
                    <div class="field-name">Email:</div>
                    <div class="field-value"><?php echo $email; ?></div>
                </div>
                
                <div class="form-field">
                    <div class="field-name">Subject:</div>
                    <div class="field-value"><?php echo getSubjectText($subject); ?></div>
                </div>
                
                <div class="form-field">
                    <div class="field-name">Message:</div>
                    <div class="field-value"><?php echo nl2br($message); ?></div>
                </div>
            </div>
            
            <!-- Email notification info (for demonstration) -->
            <p><em>Note: In a real application, an email would be sent to the administrator with this information.</em></p>
            
        <?php else: ?>
            <!-- Display error messages -->
            <div class="error">
                <h3>Please correct the following errors:</h3>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        
        <!-- Back button -->
        <a href="index.html" class="button">Back to Form</a>
        
    <?php else: ?>
        <!-- If someone navigates directly to this page without submitting the form -->
        <p>Please fill out our <a href="index.html">contact form</a> to submit your information.</p>
    <?php endif; ?>
</body>
</html>