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
        <h1>BLOCKCHAIN DEVELOPER IS LOGGED IN</h1>
        <button style="position: absolute;right: 30px;top: 30px;background-color: red;"><a href="logout.php">LOGOUT</a></button>
        <div class="container-fluid">
        <ul>
            <li><a href="bcdeveloper.php">HOME</a></li>
            <li><a href="bcdeveloperskiils.php">SKILLS</a></li>
            <li><a href="bcdeveloperres.php">RESPONSIBILITIES</a></li>
            <li><a>OTHERS</a>
                <ul>
                    <li><a href="error.php">VISIT ADMIN PAGE</a></li>
                    <li><a href="error.php">VISIT DATA ANALYST PAGE</a></li>
                    <li><a href="error.php">VISIT DATA SCIENTIST PAGE</a></li>
                    <li><a href="error.php">VISIT BI DEVELOPER PAGE</a></li>
                </ul></li>
            <li></li>
        </ul>
    </div>
    <div id="up"><p>Home Page</p></div>
    <div style="background-color:lightblue;height:400px;">
    <p style="color:black;background-color:lightblue;font-size:13pt;width:100%;font-weight:bold;">Briefly defined, a Blockchain developer is someone who develops applications for the blockchain protocol architecture. Their day-to-day task involves developing and optimizing algorithms that conform to and run on the Blockchain Protocol, a protocol that runs on top of the standard Internet Protocol (IP) acting as the internet for blockchain-powered devices.

Among many roles, a Blockchain developer writes smart contracts, which are programs developed for the Blockchain that runs on the Blockchain nodes.<br>
<br>Core Blockchain Developer: A core Blockchain developer interacts with Blockchain at the root level. They are directly responsible for designing and developing the Blockchain architecture, which involves deciding upon the system protocol, the consensus mechanism, etc.<br>
<br>Blockchain Software Developer: Blockchain software developers maintain a rather high-level interaction with the Blockchain. Their role is to use the algorithms developed by core Blockchain developers and incorporate them into their applications, developing decentralized applications that run on the Blockchain.
</p>
<img src = "https://www.interviewbit.com/blog/wp-content/uploads/2021/07/Blockchain-image-2-1-768x557.png" style = "width:50%; height:50%">
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