<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h2>Contact Us</h2>
        
        <?php 
        if(isset($_POST['submit'])){
            $name = htmlspecialchars($_POST['name']);
            echo "<p class='success'>Thank you, $name. Your message has been received!</p>";
        }
        ?>