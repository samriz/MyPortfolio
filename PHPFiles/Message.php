<!DOCTYPE>
<html lang="en">
<head>
    <meta name="author" content="Sameer Rizvi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Sameer, Rizvi, Profile, sameer, rizvi, profile, Sameer Rizvi, sameer rizvi">

    <!-- Bootstrap below -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--My CSS and JavaScript below-->
    <link rel="stylesheet" href="../CSSFiles/Styles.css">
    <script type="text/javascript" src="../JavaScriptFiles/MyScript.js"></script>
    <script type="text/javascript" src="../JavaScriptFiles/SendMail.js"></script>

    <title>Sameer Rizvi &mdash; Inquiry</title>
</head>
<body>
    <div class="menu docked"></div>
    <div id="messageintro" class="jumbotron">
        <h1>Inquiries</h1>
    </div>
    <hr> <!--this is a horizontal line-->
    <center>
        <form method="post" action="../PHPFiles/SendMail.php">
        <!--<form>-->
            <!--<p>Name: <input type="text" name="name" /></p>
            <p>Email: <input type="text" name="email" id="useremail"/></p>
            <p>Subject: <input type="text" name="subject" id="subject"/></p>
            <p>Message: <textarea type="text" name="message" id="message"></textarea></p>
            <p><input type="submit" onclick="mailfunction()"/></p>-->
            <p><input type="text" name="name" placeholder="Name"/></p>
            <p><input type="text" name="email" id="useremail" placeholder="Email"/></p>
            <!--<p><input type="text" name="subject" id="subject" placeholder="Subject"/></p>-->
            <p><textarea type="text" name="message" id="message" placeholder="Message"></textarea></p>
            <!--<input type="submit" onclick="mailfunction()"/>-->
            <p><input type="button" id="send" name="send" value="Send"/></p>
        </form>
    </center>
    <p id="mailmessage"></p>
    <footer class="customfooter">
        <hr>
        <p>Copyright © 2021 Sameer Rizvi</p>
    </footer>
</body>
<script>
  PopulateFileWithMenu(".php");
</script>
</html>