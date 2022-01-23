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
        <h1>ADMIN LOGGED IN AS DATA SCIENTIST</h1>
        <button style="position: absolute;right: 30px;top: 30px;background-color: red;"><a href="logout.php">LOGOUT</a></button>
        <div class="container-fluid">
        <ul>
            <li><a href="ds.php">HOME</a></li>
            <li><a href="dsskills.php">SKILLS</a></li>
            <li><a href="dsres.php">RESPONSIBILITIES</a></li>
            <li><a href="admin.php">ADMIN</a></li>
            <li></li>
        </ul>
    </div>
    <div id="up"><p>Home Page</p></div>
    <div style="background-color:lightblue;height:400px;">
    <p style="color:black;background-color:lightblue;font-size:13pt;width:100%;font-weight:bold;">A data scientist is a professional responsible for collecting, analyzing and interpreting extremely large amounts of data. The data scientist role is an offshoot of several traditional technical roles, including mathematician, scientist, statistician and computer professional. This job requires the use of advanced analytics technologies, including machine learning and predictive modeling.

A data scientist requires large amounts of data to develop hypotheses, make inferences, and analyze customer and market trends. Basic responsibilities include gathering and analyzing data, using various types of analytics and reporting tools to detect patterns, trends and relationships in data sets.

In business, data scientists typically work in teams to mine big data for information that can be used to predict customer behavior and identify new revenue opportunities. In many organizations, data scientists are also responsible for setting best practices for collecting data, using analysis tools and interpreting data.</p>
<img src = "https://images.squarespace-cdn.com/content/v1/5a549bf64c0dbf97f730d260/1517329026027-6JBIA992QG0BYC4MH569/Data-Scientists+job.jpg" style = "width:50%; height:90%; align:center;">  
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