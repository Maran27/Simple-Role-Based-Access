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
        <h1>DATA ANALYST IS LOGGED IN</h1>
        <button style="position: absolute;right: 30px;top: 30px;background-color: red;"><a href="logout.php">LOGOUT</a></button>
        <div class="container-fluid">
        <ul>
            <li><a href="da.php">HOME</a></li>
            <li><a href="daskills.php">SKILLS</a></li>
            <li><a href="dares.php">RESPONSIBILITIES</a></li>
            <li><a>OTHERS</a>
                <ul>
                    <li><a href="error.php">VISIT ADMIN PAGE</a></li>
                    <li><a href="error.php">VISIT DATA SCIENTIST PAGE</a></li>
                    <li><a href="bideveloper.php">VISIT BI DEVELOPER PAGE</a></li>
                    <li><a href="error.php">VISIT BLOCKCHAIN DEVELOPER PAGE</a></li>
                </ul></li>
            <li></li>
        </ul>
    </div>
    <div id="up"><p>Responsibilities Page</p></div>
    <div style="background-color:lightblue;height:400px;">
    <p style="color:black;background-color:lightblue;font-size:13pt;width:100%;font-weight:bold;">Data analysts seek to understand the questions the business needs to answer and determine whether those questions can be answered by data. They must understand the technical issues associated with collecting data, analyzing data, and reporting. They must be able to recognize trends and patterns. According to Workable, key data analyst responsibilities include:
<br><ol style="color:black;">
<li>Analyzing data using statistical techniques and providing reports</li>
<li>Developing and implementing databases and data collection systems</li>
<li>Acquiring data from primary and secondary sources and maintain data systems</li>
<li>Identifying, analyzing, and interpreting trends or patterns in complex data sets</li>
<li>Filtering and cleaning data</li>
<li>Working with management to prioritize business and information needs</li>
<li>Locating and defining new process improvement opportunities</li></ol></p>
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