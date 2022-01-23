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
        <h1>BI DEVELOPER IS LOGGED IN</h1>
        <button style="position: absolute;right: 30px;top: 30px;background-color: red;"><a href="logout.php">LOGOUT</a></button>
        <div class="container-fluid">
        <ul>
            <li><a href="bideveloper.php">HOME</a></li>
            <li><a href="bideveloperskiils.php">SKILLS</a></li>
            <li><a href="bideveloperres.php">RESPONSIBILITIES</a></li>
            <li><a>OTHERS</a>
                <ul>
                    <li><a href="error.php">VISIT ADMIN PAGE</a></li>
                    <li><a href="da.php">VISIT DATA ANALYST PAGE</a></li>
                    <li><a href="error.php">VISIT DATA SCIENTIST PAGE</a></li>
                    <li><a href="error.php">VISIT BLOCKCHAIN DEVELOPER PAGE</a></li>
                </ul></li>
            <li></li>
        </ul>
    </div>
    <div id="up"><p>Responsibilities Page</p></div>
    <div style="background-color:lightblue;height:400px;">
    <p style="color:black;background-color:lightblue;font-size:13pt;width:100%;font-weight:bold;">The project scope defines the degree of involvement for a certain role, as engineers with similar technology stacks and domain knowledge can be interchangeable. Developing BI interfaces requires deep experience in software engineering, databases, and data analysis. So, partially, data engineers that have software development background and experience with BI can lead the process of the interface development.However, business intelligence tools may include a lot of industry-specific functionality. BI developers are also aware of business domain peculiarities: This allows them to understand business requirements, implement proper data models, and data representation solutions. So, the responsibilities of s BI developer are:
<ul>
<li>setting business requirements for BI tools;</li>
<li>translating business requirements into technical ones;</li>
<li>leading BI software development, deployment, and maintenance;</li>
<li>report curation and data modeling;</li>
<li>participation in data warehouse design;</li>
<li>documenting contents in a data warehouse and meta-data storage; and</li>
<li>creating technical documentation for BI tools.</li></ul></p>
<img src = "https://content.altexsoft.com/media/2019/11/word-image-72.png" style = "width:70%; height:70%; align:center;">
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