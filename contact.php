<?php
SESSION_START();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="images/logo.jpg" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/stylesheet.css" />
    <link rel="stylesheet" href="styles/contactstyles.css" />

<!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300&family=Oswald:wght@300&family=PT+Sans&display=swap" rel="stylesheet">


<!--Facebook Link Preview-->

    <meta property="og:image" content="http://www.jkcrawley.com/images/fbpreview.jpg" />
    <meta property="og:description" content="A Web Developer from Iowa who is versed in HTML, CSS, Javascript, PHP, Wordpress among many other developer languages and technologies." />
    <meta property="og:url"content="http://www.jkcrawley.com" />
    <meta property="og:title" content="Web Developer and Programmer" />
    

<!---Script Files-->
    <script src='js/script.js' defer></script>

    <title>James Crawley: Web Design and Development</title>
</head>
<body>
<div class="wrapper">
<header>
    <div class="logo"></div>

    <div class="mobnavcon">
        <div class="mobnavbtn" id="mobnavbtn">
            <div class="rArrow" id="rArrow"></div>
            <div class="lArrow" id="lArrow"></div>
        </div>
        <div class="nav" id='nav'>
            <ul id='navlinks'>
                <li><a href='index.html'>Home</a></li>
                <li><a href='about.html'>About me</a></li>
                <li><a href='projects.html'>Projects</a></li>
                <li><a href='contact.php'>Contact</a></li>
            </ul>
        </div>
    </div>
</header>
<div class='fade-in content contactsection'>
<section>
    <div class='sectionheader'><h1>How to Contact me</h1></div>

<p><strong>Email:</strong> Crawleydesign@hotmail.com<br />
<strong>Phone:</strong> (319)429-9256</p>
<p><a href='https://www.linkedin.com/in/james-crawley-45274028/'>LinkedIn</a></p>

<?php

//check if form has been submitted
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'j-crawley@live.com';

    if(!isset($_SESSION['emailsent'])){
        mail($to, $subject, $message);
        $_SESSION['emailsent'] = 'Messagesent';
        echo "<h3>Message sent!</h3>";
    } else {
     echo "<h3>Message was already sent!</h3>";
    }

   


} else {
//Default form
?>
    <form class='contact-form' method="post" action='contact.php'>
       
    <p><input class='inputfield' type='text' name='name' id='name' value='Name' onclick="document.getElementById('name').value=''" /></p>

    <p><input class='inputfield' type='email' name='email' id='email' value='Email' onclick="document.getElementById('email').value=''" /></p>

    <p><input class='inputfield' type='text' name='subject' id='subject' value='Subject' onclick="document.getElementById('subject').value=''"/></p>
    <p><textarea name='message' id='message' onclick="document.getElementById('message').value=''">Message</textarea></p>

    <p><input type='submit' name='submit' id='submit' class='submit' value='Send Message' /></p>
    </form>
<?php
}
?>
</section>
</div>

</div>
</body>
</html>