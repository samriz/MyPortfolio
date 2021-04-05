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

    <title>Sameer Rizvi &mdash; About</title>
</head>
<body>
    <div class="menu docked"></div>
    <!--<div class="menu">
        <a class="active" href="Home.html">Home</a> |
        <a href="Resume.html">Resume</a> |
        <a href="About.html">About</a>
    </div>-->
    <div id="aboutintro" class="jumbotron">
        <h1>Sameer Rizvi</h1>
        <p>
            <img src="../Pictures/LinkedInPicture1.png" id="profilepic" class="center">
        </p>
        <!--<p>For Inquiries: <a href = "mailto: srizv82@gmail.com">srizv82@gmail.com</a></p>-->
        <a href = "./Message.php">For Inquiries</a>
    </div>
    
    <hr> <!--this is a horizontal line-->

    <p>(Click on headers to expand)</p>
    <!--<h3><a name="education"></a>Education</h3>-->
    <h3 class="expand" data-toggle="collapse" href="#educationtable" role="button" aria-expanded="false" aria-controls="educationtable" onclick="ChangeArrow()">Education

        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" id="beforearrow" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" id="afterarrow" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
          </svg>
    </h3>
    <!--<div id="educationdiv">-->
        <center>
        <!--<i class="bi bi-arrow-right-circle"></i>-->
        
        <table class="collapse" id="educationtable" cellspacing="5" cellpadding="5" width="90%" border="0">
            <!--<table class="collapse" id="educationtable" onclick="HideUnhide()" cellspacing="5" cellpadding="5" width="90%" border="0">-->
    <tbody>
        <tr valign="TOP">
        <td>
            Mid &mdash; Late 2021 (Expected Completion):
        </td> 
        <td>
            Syracuse University &mdash; Syracuse, NY
            <br>              
            M.S. in Computer Science, 
            <br>
        <ul>
        </ul>
        </td>
        </tr>
    <tr valign="TOP">
        <td>
        2015:</td> 
        <td>
            Loyola University Chicago &mdash; Chicago, IL 
            <br>              
            B.S. in Computer Science, Cum Laude
            <br>      
    <ul>
    </ul>
    </td> 
    </tr>
    </tbody></table>
    </center>
    <!--</div>-->

    <!--<h3><a name="employment"></a>Professional Experience</h3>-->
    <h3 class="expand" data-toggle="collapse" href="#employmenttable" role="button" aria-expanded="false" aria-controls="employmenttable" onclick="ChangeArrow2()">Professional Experience

        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" id="beforearrow2" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" id="afterarrow2" class="bi bi-arrow-down-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
          </svg>
    </h3>
    <center><table class="collapse" id="employmenttable" cellspacing="5" cellpadding="5" width="90%" border="0">
    <tbody>
        <tr valign="TOP">
        <td>
        2018:
        </td> 
        <td>
            American Hotel Register Company &mdash; Vernon Hills, IL <br>              
            Junior Software Developer
            <br>     
        <ul>
            <li>Utilized C#/.NET for development and maintenance on e-commerce website</li>
            <li>Assisted with the entire lifecycle of analysis &mdash; design, coding, testing, implementation and product support</li>
            <li>Implemented all aspects of application design &mdash; high performance design, coding, caching mechanisms, security, encryption, state management, error logging, debugging, code reviews, development environment configuration, and testing</li>
        </ul>
        </td>
        </tr>

    <tr valign="TOP">
        <td>
        2016-2018:
    </td> 
        <td>
            ACS Group &mdash; New Berlin, WI 
            <br>              
            Information Systems Specialist
            <br>      
    <ul>
        <li>Constructed a separate <q>Configurator</q> &mdash; an application that allows Sales and Engineering to configure any product offered by the company, generate quotes and sales orders - for each product offered by the company </li>
        <li>Tested inside of Microsoft Dynamics which is the platform used to launch the <q>Configurator</q>, while providing Microsoft Dynamics training to end users </li>
        <li>Interacted, introduced, and reviewed requirements with Sales, Engineering and Production departments to ensure proper solution is delivered in a timely manner</li>
    </ul>
    </td> 
    </tr>

    <tr valign="TOP">
        <td>
        2014-2015:</td> 
        <td>
            Parker Hannifin Corporation &mdash; Lincolnshire, IL 
            <br>              
            Software Development Intern
            <br>      
    <ul>
        <li>Built ASP.NET webforms application (C# for backend) for a Microsoft SQL Server database</li>
        <li>Hosted web application on Windows Server 2012 via IIS</li>
        <li>Designed barcode labels using Zebra Designer Pro software</li>
        <li>Answered help desk tickets and addressed any technical employee concerns related to software and/or hardware</li>
    </ul>
    </td> 
    </tr>

    <tr valign="TOP">
        <td>
        2014:</td> 
        <td>
            Northwestern Mutual &mdash; Milwaukee, WI 
            <br>              
            I.T. Intern
            <br>      
    <ul>
        <li>Developed interactive reports using Cognos Report Studio and tested them for format and/or data defects </li>
        <li>Learned SQL in order to write queries via Rapid SQL and facilitated in debugging and fixing C# code that caused an application to crash</li>
        <li>Used various Microsoft Office applications to collaborate and complete tasks </li>
    </ul>
    </td> 
    </tr>
    </tbody></table></center>
    <footer>
        <hr>
        <p>Copyright © 2021 Sameer Rizvi</p>
    </footer>
</body>
<script>
    PopulateFileWithMenu(".php");
</script>
</html>