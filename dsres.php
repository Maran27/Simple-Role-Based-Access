<!DOCTYPE html>
<html>
    <head>
        <title>HOME PAGE</title>
        <link rel="stylesheet" href="webcss.css">
        <style>
         #up{
            text-align: center; 
            font-size:20pt;
            color:black;
            font-weight:bold;
        }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="scripts/jquery.form.js"></script>
        <script type="text/javascript" src="scripts/upload.js"></script>
    </head>
    <body>
        <h1>DATA SCIENTIST IS LOGGED IN</h1>
        <button style="position: absolute;right: 30px;top: 30px;background-color: red;"><a href="logout.php">LOGOUT</a></button>
        <div class="container-fluid">
        <ul>
            <li><a href="ds.php">HOME</a></li>
            <li><a href="dsskills.php">SKILLS</a></li>
            <li><a href="dsres.php">RESPONSIBILITIES</a></li>
            <li><a>OTHERS</a>
                <ul>
                    <li><a href="error.php">VISIT ADMIN PAGE</a></li>
                    <li><a href="da.php">VISIT DATA ANALYST PAGE</a></li>
                    <li><a href="error.php">VISIT BI DEVELOPER PAGE</a></li>
                    <li><a href="error.php">VISIT BLOCKCHAIN DEVELOPER PAGE</a></li>
                </ul></li>
            <li></li>
        </ul>
    </div>
    <div id="up"><p>Responsibilities Page</p></div>
    <div style="background-color:lightblue;height:400px;">
    <p style="color:black;background-color:lightblue;font-size:13pt;width:100%;font-weight:bold;">The concept of data scientist is derived from some of the most important major technological modern fields, including science, math, statistics, chemometrics and computer science. The mix of personality traits, experience and analytics skills required for this role are rare, so the demand for qualified data scientists is in an upward swing.

Data scientist topped the list of "50 Best Jobs in America" by Glassdoor in 2016, 2017, 2018 and 2019, based on metrics such as job satisfaction, number of job openings and median base salary. A data scientist job may also be advertised as a machine learning architect.

Basic responsibilities include analyzing large data sets of quantitative and qualitative data. These professionals are tasked with developing statistical learning models for data analysis and must have experience using statistical tools. They must also have the required knowledge to create complex predictive models. 

Some professionals who might engage in data science work or become full-time data scientists include computer scientists, database and software programmers, disciplinary experts, curators, and expert annotators and librarians. Job postings for data scientists may also advertise the opening as "machine learning architect" or "data strategy architect."</p>
<img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRned5DjJdTKotQMOEKaNYmW13yrEI4HyiOGw&usqp=CAU" style = "width:50%; height:100%; align:center;">    
</div>
        <footer style="background-color: black; opacity: 0.8; position: absolute; top: 750px;">
            Copyrights Reserved &copy; 2020.
            <div id="f1">
                <img src="https://i.pinimg.com/originals/08/17/15/0817158f3a05c0d62de647c28f4cde54.jpg" alt="INSTAGRAM">
                <img src="https://static01.nyt.com/images/2014/08/10/magazine/10wmt/10wmt-articleLarge-v4.jpg?quality=75&auto=webp&disable=upscale" alt="TWITTER">
                <img src="https://www.facebook.com/images/fb_icon_325x325.png" alt="FACEBOOK">
                <img src="https://i.pinimg.com/originals/2d/2b/e2/2d2be2421911037d80f9921dc29d54c2.jpg" alt="YOUTUBE">
                <img src="https://live.staticflickr.com/7412/16521004875_4dd4ebd65f_b.jpg" alt="FLICKR">
            </div>
        </footer>
        <script>
            var d = new Date();
            document.getElementById("a").innerHTML = d;
        </script>
    </body>
</html>