<?php error_reporting(E_ERROR | E_PARSE); ?>
<!DOCTYPE html>
<html lang="en">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<script src="assets/css/extra/fontawesome.js" crossorigin="anonymous"></script>

<head>
    <meta charset="UTF-8">
    <title>Admin - Mail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box
        }

        body {
            font-family: "Lato", sans-serif;
            background: #EEF2F7;
        }

        /* Style the tab */
        .tab {
            float: left;
            border: 1px solid #ccc;
            background-color: #fffff1;
            width: 28%;
            height: 600px;
            border-radius: 12px 0px 0px 12px;
            box-shadow:
                0 2.8px 2.2px rgba(0, 0, 0, 0.034),
                0 6.7px 5.3px rgba(0, 0, 0, 0.048),
                0 12.5px 10px rgba(0, 0, 0, 0.06),
                0 22.3px 17.9px rgba(0, 0, 0, 0.072),
                0 41.8px 33.4px rgba(0, 0, 0, 0.086),
                0 100px 80px rgba(0, 0, 0, 0.12);
        }

        /* Style the buttons inside the tab */
        .tab button {
            display: block;
            background-color: inherit;
            color: black;
            padding: 22px 16px;
            width: 100%;
            border: none;
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
            font-size: 17px;
            border-radius: 12px 0px 0px 12px;
            line-height: 23px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background: rgb(122, 248, 255);
            background: linear-gradient(90deg, rgba(122, 248, 255, 0.8968721277573529) 0%, rgba(163, 246, 255, 1) 12%, rgba(0, 131, 139, 1) 100%);
        }

        /* Create an active/current "tab button" class */
        .tab button.active {
            background: rgb(116, 227, 253);
            background: linear-gradient(90deg, rgba(116, 227, 253, 0.8968721277573529) 0%, rgba(77, 238, 255, 1) 68%, rgba(0, 75, 139, 1) 100%);
            border-radius: 12px 0px 0px 12px;
        }

        /* Style the tab content */
        .tabcontent {
            float: left;
            padding: 0px 12px;
            border: 1px solid #ccc;
            width: 72%;
            border-left: none;
            height: 600px;
            background-color: #fff;
            background: url(https://i.pinimg.com/originals/f0/c6/ca/f0c6cac86c1f1b870b390dc4eb4a06a5.gif);
            background-size: cover;
            box-shadow:
                0 100px 80px rgba(0, 0, 0, 0.12),
                0 6.7px 33.4px rgba(0, 0, 0, 0.048),
                0 12.5px 10px rgba(0, 0, 0, 0.06),
                0 12.5px 10px rgba(0, 0, 0, 0.072),
                0 6.7px 33.4px rgba(0, 0, 0, 0.048),
                0 100px 80px rgba(0, 0, 0, 0.12);
            border-radius: 0px 12px 12px 0px;
        }

        .mailhead {
            color: #f80000;
            font-size: 38px;
            font-family: 'Cormorant Garamond', serif;
        }

        a {
            color: darkgoldenrod;
            text-decoration: none;
            font-size: 18px;
        }

        .homeback {

            color: #f80000;
            font-size: 43px;
            font-family: 'Cormorant Garamond', serif;
            float: right;
        }

        .footer {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            background-color: #fffff1;
            color: white;
            height: 50px;
            box-shadow:
                0 2.8px 2.2px rgba(0, 0, 0, 0.034),
                0 6.7px 5.3px rgba(0, 0, 0, 0.048),
                0 12.5px 10px rgba(0, 0, 0, 0.06),
                0 22.3px 17.9px rgba(0, 0, 0, 0.072),
                0 41.8px 33.4px rgba(0, 0, 0, 0.086),
                0 100px 80px rgba(0, 0, 0, 0.12);
        }

        .title2 {
            padding-left: 30px;
            color: #000;
            font-weight: 600;
            font-size: 18px;
        }
    </style>
</head>

<body>

    <div>
        <!--<h2 class="mailhead">URSHOW - Inbox</h2>-->

    </div>
    <section style="padding: 30px; padding-top: 70px;">
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'tab1')"><span style="font-weight: 600;"><?php echo $_POST["name"] ?> </span><span style="color: #f80000; font-size: 16px; padding-left: 3px;">New</span><br> <span style="color:darkblue;"><?php echo $_POST["subject"] ?></span> </button>
            <button class="tablinks" onclick="openCity(event, 'tab2')" id="defaultOpen"><span style="font-weight: 600;">Prashant Kumar</span> <br> <span style="color:darkblue;">Class Alert - Hope, you have completed your...</span> </button>
            <button class="tablinks" onclick="openCity(event, 'tab3')">Abhinav Raj <br> <span style="color:darkblue;">Important!</span> </button>
            <button class="tablinks" onclick="openCity(event, 'tab4')">Rohit Mehtar <br> <span style="color:darkblue;">Received your mail thanks.</span> </button>
        </div>

        <div id="tab1" class="tabcontent">
            <h3><span><img src="https://i.pinimg.com/474x/a1/9d/fd/a19dfd0cd5b84390c983b372c91b7f22.jpg" alt="" width="32px" style="border-radius: 50%;"> <?php echo $_POST["name"] ?> </h3>
            <h4>From: <span style="font-weight: 500;"><?php echo $_POST["email"] ?></span> </h4>
            <h4>To: <span style="font-weight: 500;">Me </span></h4>
            <h4>Subject: <span style=" font-weight: 500;"><?php echo $_POST["subject"] ?> </span></h4>
            <hr style="width: 100%; color: #ccc;">
            <p><?php echo $_POST["message"] ?></p>
            
        </div>

        <div id="tab2" class="tabcontent">
            <h3><span><img src="https://i.pinimg.com/474x/a1/9d/fd/a19dfd0cd5b84390c983b372c91b7f22.jpg" alt="" width="32px" style="border-radius: 50%;"> Prashant Kumar </h3>
            <h4>From: <span style="font-weight: 500;"></span> Prashantmanwan@gmail.com</span> </h4>
            <h4>To: <span style="font-weight: 500;">Me </span></h4>
            <h4>Subject: <span style=" font-weight: 500;">You have CSE326 Class Today. </span></h4>
            <hr style="width: 100%; color: #ccc;">
            <p>Prashant you have CSE326 class today. hope, you are prepared! <br> </p>
            <a href="https://www.instagram.com/prashantpkumar/">Contact Me</a><br>
            <center>
                <img src="https://cdn.dribbble.com/users/519645/screenshots/10527457/media/159f287ee977670d51f263200825b61a.gif" alt="" style="width: 400px; border-radius: 12px;">
            </center>

        </div>

        <div id="tab3" class="tabcontent">
            <h3><span><img src="https://i.pinimg.com/474x/a1/9d/fd/a19dfd0cd5b84390c983b372c91b7f22.jpg" alt="" width="32px" style="border-radius: 50%;">  Abhinav </h3>
            <h4>From: <span style="font-weight: 500;">abhi@gmail.com</span> </h4>
            <h4>To: <span style="font-weight: 500;">Me </span></h4>
            <h4>Subject: <span style=" font-weight: 500;">You have CSE326 Class Today. </span></h4>
            <hr style="width: 100%; color: #ccc;">
            <p>Abhi you have CSE326 class today. hope, you are prepared! <br> </p>
        </div>

        <div id="tab4" class="tabcontent">
            <h3> <span><img src="https://i.pinimg.com/474x/a1/9d/fd/a19dfd0cd5b84390c983b372c91b7f22.jpg" alt="" width="32px" style="border-radius: 50%;"> Rohit </h3>
            <h4>From: <span style="font-weight: 500;">mehta@gmail.com</span> </h4>
            <h4>To: <span style="font-weight: 500;">Me </span></h4>
            <h4>Subject: <span style=" font-weight: 500;">You have CSE326 Class Today. </span></h4>
            <hr style="width: 100%; color: #ccc;">
            <p>Rohit you have CSE326 class today. hope, you are prepared! <br> </p>
        </div>
    </section>



    <div class="footer">
        <p class="title2">URSHOW - Inbox </p>

    </div>




</body>

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

</html>