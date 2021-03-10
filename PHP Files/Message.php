<!DOCTYPE>
<html lang="en">
<head>
    <!-- Bootstrap below -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--My CSS and JavaScript below-->
    <!--<link rel="stylesheet" href="C:\Users\srizv\OneDrive\Documents\My Portfolio\CSS Files\Styles.css">
    <script src="C:\Users\srizv\OneDrive\Documents\My Portfolio\JavaScript Files\MyScript.js"></script>-->
    <!--My CSS and JavaScript below-->
    <link rel="stylesheet" href="../CSS Files/Styles.css">
    <script src="../JavaScript Files/MyScript.js"></script>

    <title>Sameer Rizvi &mdash; Inquiry</title>
</head>

<body>
    <div class="Menu"></div>
    <script>
        var extension = ".php";
        var links = new Array("Home" + extension, "Resume" + extension, "About"  + extension);
        CreateMenu(links,extension);
    </script>
    <div id="Intro" class="jumbotron">
        <h1>Inquiries</h1>
        <!--<p>For Inquiries: <a href = "mailto: srizv82@gmail.com">srizv82@gmail.com</a></p>-->
    </div>
    
    <hr> <!--this is a horizontal line-->

    <center>
        <form action="./Send.php" method="post">
            <p>Name: <input type="text" name="name" /></p>
            <p>Email: <input type="text" name="email" /></p>
            <p>Subject: <input type="text" name="subject" /></p>
            <p>Message: <textarea type="text" name="message"></textarea></p>
            <p><input type="submit" /></p>
        </form>
    </center>   
</body>
</html>