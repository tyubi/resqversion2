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

        .img{
            align-items: center;

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
<body>
    <header class="header">
        <a href="#" class="logo"> <i class="fas fa-stethoscope"></i> <strong>ResQ</strong></a>
    </header>

    <div class="container">
        <img src="img/police.png" style="display: block; margin: 0 auto; max-width: 300px;">
        <h1>Police Stations</h1>
        <p>The Police Stations near Sta. Mesa, Manila is a dedicated law enforcement agency that prioritizes the safety and security of the community. With a strong commitment to public service, the police force consists of highly trained officers who diligently enforce laws, prevent crime, and respond swiftly to emergencies.</p>
        <?php 
        include("db.php");

        $police = "SELECT * FROM police";
        $police_run = $con->query($police);
        ?>

        <?php
        while($row = mysqli_fetch_assoc($police_run)){
        ?>
        <h2><?php echo $row['police_name'] ?><h2>
        <ul>
            <li>Address: <?php echo $row['police_add'] ?></li>
            <li>Contact Number:<?php echo $row['police_no'] ?></li>
        </ul>
        <?php
        }
        ?>
        <!--<h2>Manila Police Station 8 Sta. Mesa<h2>
        <ul>
            <li>Address: Old Sta. Mesa Street, Sta. Mesa, Manila</li>
            <li>Contact Number: +632 715-4124</li>
        </ul>

        <h2>Bacood Police Community Precinct<h2>
        <ul>
            <li>Address: 3436 Lubiran, Sta. Mesa, Manila</li>
            <li>Contact Number: +632 742-5575</li>
        </ul>

        <h2>C. Palanca Police Community Precinct<h2>
        <ul>
            <li>Address: Palanca Street, C. Palanca, San Miguel, Manila</li>
            <li>Contact Number: +632 230-9351</li>
        </ul>

        
        <h2>V. Mapa Police Community Precinct<h2>
        <ul>
            <li>Address: V. Mapa Ext, 599 Sta Mesa, Manila</li>
            <li>Contact Number: +632 354-3712</li>
        </ul>

        <h2>Sampaloc Police Station 4<h2>
        <ul>
            <li>Address: Gerardo Tuazon St, Sampaloc, Manila, 1008 Metro Manila</li>
            <li>Contact Number: +632 254-7192</li>
        </ul>

        <h2>Quezon City Police Station 11 Galas<h2>
        <ul>
            <li>Address: Luzon Avenue corner Unang Hakbang Street, San Isidro, Quezon City</li>
            <li>Contact Number: +632 715-5585</li>
        </ul>

        <h2>Manila Police Station 10 Pandacan<h2>
        <ul>
            <li>Address: Jesus Street, Pandacan, Manila</li>
            <li>Contact Number: +632 564-0565</li>
        </ul>

        <h2>Manila Police Station 6 Sta. Ana<h2>
        <ul>
            <li>Address: Plaza Hugo, Sta. Ana, Manila</li>
            <li>Contact Number: +632 563-4619</li>
        </ul>

        <h2>Dagonoy Police Community Precinct<h2> DI PA NALALAGAY SA DATABASE DAGONOY HANGGANG Blumentritt
        <ul>
            <li>Address: Dagunoy Former Florantino Torres Cor. Crisolita, 767 San Andres Bukid, Manila</li>
            <li>Contact Number: +632 230-9879</li>
        </ul>

        <h2>Punta Police Community Precinct<h2>
        <ul>
            <li>Address: J Posadas, Santa Ana, Manila</li>
            <li>Contact Number: +632 748-3270</li>
        </ul>

        <h2>San Andres Police Community Precinct<h2>
        <ul>
            <li>Address: 1801 Osmeña Hwy, Malate, Manila</li>
            <li>Contact Number: +632 564-5805</li>
        </ul>

        <h2>PNP - F. Blumentritt<h2>
        <ul>
            <li>Address: F. Blumentritt, San Juan City</li>
            <li>Contact Number: +63 919-847-3525</li>
        </ul>-->


        <a href="afterlogin.php" class="btn"> Back to main page <span class="fas fa-chevron-right"></span> </a>
    </div>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> ResQ. All rights reserved.</p>
    </footer>
</body>
</html>