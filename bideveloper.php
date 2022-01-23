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
    <div id="up"><p>Home Page</p></div>
    <div style="background-color:lightblue;height:400px;">
    <p style="color:black;background-color:lightblue;font-size:13pt;width:100%;font-weight:bold;">A business intelligence developer is an engineer that’s in charge of developing, deploying, and maintaining BI interfaces. Those include query tools, data visualization and interactive dashboards, ad hoc reporting, and data modeling tools. But, as we are speaking about business intelligence, we need to give a stricter explanation of this technological concept.
    The whole BI system can be divided into its inner part and the actual user interface to interact with data. Why is this division so important? Independent of the system’s complexity, a typical BI platform has 3 layers: a data source layer, a warehouse layer, and a reporting layer. Let’s break them down:

The data source layer is where the raw data is stored. Those are any of your databases, cloud storages, and separate files filled with unstructured data. Data sources are the starting points of any BI system because they are connected with all the following data-integration tools, storages, and business intelligence UI.

The warehouse layer includes all the technologies that facilitate the warehousing process. These are both unified storage for all the corporate data and tools performing Extraction, Transformation, and Loading (ETL).</p>
<img src = "https://content.altexsoft.com/media/2019/11/word-image-69.png" style = "width:50%; height:50%">
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