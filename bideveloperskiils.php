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
    <div id="up"><p>Skills Page</p></div>
    <div style="background-color:lightblue;height:400px;">
    <p style="color:black;background-color:lightblue;font-size:13pt;width:100%;font-weight:bold;">Experience with BI tools. First and foremost, every BI developer should have experience developing customer BI products or configuring existing ones. In case of building a custom BI product, Python knowledge, scripting languages, and experience with data visualization libraries are obligatory. Solid understanding of all the underlying infrastructure is also required: This includes the understanding of data integration tools, ETL/ELT processes, data formatting, and warehouse architecture.

If we talk about a product that uses a BI solution by a vendor, then a BI developer has to be acquainted with its corresponding technology stack. These depend on the vendor, but the most popular solutions that concern data pipelines, reporting and database operations are Amazon products (like QuickSight), Hadoop platform, or Apache technologies (like Apache Superset).

DB/DBA background. The main reason why a BI developer should be experienced dealing with databases is that the main subject of concern is SQL/noSQL queries. BI systems require frequently dealing with databases, data models, or distribution of data in several databases.

BI developers can also be involved in designing and building tools for online analytical processing (OLAP cubes). This is an advanced option for multidimensional analysis that utilizes non-relational databases.

Data analysis background. While it doesn’t require a BI developer to have been a data scientist in the past, experience in that field is highly desired. Data modeling and warehouse design are hardly possible without this knowledge, as well as understanding of business requirements for BI systems.

Business analysis skills. The same goes for business analysis. At the start of the project, business analysis in the field of BI will help set precise requirements for future software and make the right strategic decisions.

Software engineering skills. Software developer’s skills depend on the platform you are going to launch your BI interface on. Modern systems are multiplatform, so they can be accessed via mobile devices, through the browser, or as a desktop application. So, knowledge of a programming language depends on the actual platform.</p>
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