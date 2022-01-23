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
    <div id="up"><p>Skills Page</p></div>
    <div style="background-color:lightblue;height:400px;">
    <p style="color:black;background-color:lightblue;font-size:13pt;width:100%;font-weight:bold;">Data scientists generally need enough educational or experiential background to complete a wide range of extremely complex planning and analytical tasks in real time. While a specific job might call for specific qualifications, most to all data science roles require at bare minimum a bachelor's degree in a technical field.

Data science requires knowledge of a number of big data platforms and tools, including Hadoop, Pig, Hive, Spark and MapReduce; and programming languages that include SQL, Python, Scala and Perl; and statistical computing languages, such as R.

Hard skills required for the job include data mining, machine learning, deep learning, and the ability to integrate structured and unstructured data. Experience with statistical research techniques, such as modeling, clustering, data visualization and segmentation, and predictive analysis, are also a big part of the roles. </p>
<img src = "https://www.datascience-pm.com/wp-content/uploads/2021/05/data-scientist-vs-analyst-venn-diagram.png" style = "width:50%; height:100%; align:center;">    
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