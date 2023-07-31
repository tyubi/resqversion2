<?php
// Retrieve necessary data from the database or any other source
$checkupTitle = "Care";
$checkupDescription = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla scelerisque elit quis ex gravida, ac tincidunt massa efficitur.";
$checkupSchedule = "Monday to Friday: 9 AM - 5 PM";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Free Checkups</title>
    <!-- Add any necessary CSS or JavaScript files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style> 

        /* Global Styles */
        :root{
            --green:#3EB489;
            --black:#444;
            --light-color:#111;
            --box-shadow:.5rem .5rem 0 rgba(22, 160, 133, .2);
            --text-shadow:.4rem .4rem 0 rgba(0, 0, 0, .2);
            --border:.2rem solid var(--green);
        }
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-transform: capitalize;
            transition: all .2s ease-out;
            text-decoration: none;
            background: #f2f2f2;
            color: #333;
        }

        /* Header Styles */
        .header {
            padding: 1rem 5%;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #ff0000;
            color: #fff;
        }

        .header .logo {
            font-size: 2.5rem;
            color: #444;
            text-decoration: none;
        }

        .header .logo i {
            color: #c0392b;
        }

        .header .navbar a {
            font-size: 1.7rem;
            color: #fff;
            margin-left: 2rem;
            text-decoration: none;
        }

        .header .navbar a:hover {
            color: #ddd;
        }

        /* Main Content Styles */
        .container {
            max-width: 960px;
            margin: 8rem auto 2rem;
            padding: 2rem;
            background: #fff;
            box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1);
            border-radius: 0.5rem;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        p {
            font-size: 1.2rem;
            line-height: 1.5;
            margin-bottom: 1rem;
        }

        h2 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }

        ul, ol {
            margin-bottom: 1rem;
        }

        li {
            margin-bottom: 0.5rem;
        }

        /* Footer Styles */
        footer {
            background: #f2f2f2;
            padding: 2rem;
            text-align: center;
        }

        .btn{
            display: inline-block;
            margin-top: 1rem;
            padding: .5rem;
            padding-left: 1rem;
            border:var(--border);
            border-radius: .5rem;
            box-shadow: var(--box-shadow);
            color:var(--green);
            cursor: pointer;
            font-size: 1.7rem;
            background: #fff;
        }

        .btn span{
            padding:.7rem 1rem;
            border-radius: .5rem;
            background: var(--green);
            color:#fff;
            margin-left: .5rem;
        }

        .btn:hover{
            background: var(--green);
            color:#fff;
        }

        .btn:hover span{
            color: var(--green);
            background:#fff;
            margin-left: 1rem;
        }

    </style>
</head>
]<body>
    <header class="header">
        <a href="#" class="logo"> <i class="fas fa-stethoscope"></i> <strong>ResQ</strong></a>
    </header>

    <div class="container">
        <img src="img/fire.png" style="display: block; margin: 0 auto; max-width: 300px;">
        <h1>Fire Stations Stations</h1>
        <p>The Fire Stations near Sta. Mesa, Manila provide protection of life, property, and the environment from the effects of fires, medical emergencies, and hazards.</p>
        <?php 
        include("db.php");

        $station = "SELECT * FROM station";
        $station_run = $con->query($station);
        ?>

        <?php
        while($row = mysqli_fetch_assoc($station_run)){
        ?>
        <h2><?php echo $row['station_name'] ?><h2>
        <ul>
            <li>Address: <?php echo $row['station_add'] ?></li>
            <li>Contact Number:<?php echo $row['station_no'] ?></li>
        </ul>
        <?php
        }
        ?>

        <!--<h2>Galas Fire Sub Station<h2>
        <ul>
            <li>Address:Unang Hakbang Street, Galas, Quezon City, Metro Manila</li>
            <li>Contact Number:(02) 8715 5573</li>
        </ul>

        <h2>Sta Mesa Fire Station Nr 8<h2>
        <ul>
            <li>Address: J225+M77, Ramon Magsaysay Boulevard Corner Hipodromo, Santa Mesa, Manila,</li>
            <li>Contact Number: (02) 8716 6426</li>
        </ul>

        
        <h2>Kalentong Fire Sub-Station<h2>
        <ul>
            <li>Address: Gen. Kalentong Street, Kalentong, Mandaluyong City 1550 Metro Manila</li>
            <li>Contact Number: +632 354-3712</li>
        </ul>

        <h2> San Juan City Fire Station<h2>
        <ul>
            <li>Address: P1 Col. Bonny Serrano Ave, San Juan, 1500 Metro Manila</li>
            <li>Contact Number: (02) 8725 2079</li>
        </ul>-->

        
        <a href="afterlogin.php" class="btn"> Back to main page <span class="fas fa-chevron-right"></span> </a>
    </div>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> ResQ. All rights reserved.</p>
    </footer>
</body>
</html>