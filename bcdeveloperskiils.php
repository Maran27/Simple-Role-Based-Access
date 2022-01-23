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
    <div id="up"><p>Skills Page</p></div>
    <div style="background-color:lightblue;height:400px;">
    <p style="color:black;background-color:lightblue;font-size:13pt;width:100%;font-weight:bold;">Data Structures and Algorithms: Whenever a smart contract is run on the Blockchain, it needs to be executed by each and every computer (node) in the Blockchain. Also, since these operations are executed in a decentralized environment, you generally need to pay a small fee for each transaction that is executed.<br><br>
    Cryptography: Cryptography is one of the key prerequisites of Blockchain development. Blockchain technology relies on asymmetric cryptography for signing and verifying transactions. The blocks are also hashed using a hashing algorithm to generate a unique hash, ensuring that the data/transaction records stored can’t be tampered with.<br><br>
    Blockchain Architecture: Blockchain architecture is the most foundational subject an aspiring Blockchain developer must have a stronghold on. It plays a crucial role in understanding the basic principles and inner workings of the Blockchain. It covers topics like different consensus mechanisms, principles of decentralization, etc.<br><br>
    Smart Contracts: The concept of smart contracts was introduced in the Ethereum Blockchain. A simple explanation of a smart contract is a program or script that runs on the Blockchain, that acts as an intermediary between the two parties involved in a transaction, allowing them to share some services with each other. Simply put, smart contracts can be used to implement business logic on the Blockchain.<br><br>
    Business and Finance: The real-world applications of Blockchain are strongly intertwined with finance and payments. Since Blockchain is extensively in the fintech domain, apart from the obvious technical skills, one also needs to have a strong understanding of how the financial world operates.</p>
<img src = "https://www.interviewbit.com/blog/wp-content/uploads/2021/07/Blockchain-Developer-Skills-768x708.png" style = "width:50%; height:50%">
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