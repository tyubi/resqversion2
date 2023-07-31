<?php
// Retrieve necessary data from the database or any other source
$checkupTitle = "Ambulances";
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
        <img src="img/ambu.png" style="display: block; margin: 0 auto; max-width: 300px;">
        <h1>Ambulances</h1>
        <p>Ambulances near Sta. Mesa Manila are essential emergency medical vehicles equipped with life-saving equipment and staffed by trained medical professionals. These ambulances play a crucial role in providing immediate medical assistance and transportation to individuals facing medical emergencies or accidents in the area.</p>
        <?php 
        include("db.php");

        $ambulance = "SELECT * FROM ambulance";
        $ambulance_run = $con->query($ambulance);
        ?>

        <?php
        while($row = mysqli_fetch_assoc($ambulance_run)){
        ?>
        <h2><?php echo $row['ambulance_name'] ?><h2>
        <ul>
            <li>Address: <?php echo $row['ambulance_add'] ?></li>
            <li>Contact Number:<?php echo $row['ambulance_no'] ?></li>
        </ul>
        <?php
        }
        ?>
        
        <!--<h2>Translife EMS<h2>
        <ul>
            <li>Address: 1013 Gerardo, Sampaloc, Maynila, 1008 Kalakhang Maynila</li>
            <li>Contact Number: +63 9176179497</li>
        </ul>

        <h2>Ace-Cor Ambulance Service<h2> WALA PA SA DATABASE ACE-COR HANGGANG DULO
        <ul>
            <li>Address: 756 Instruccion St, Sampaloc, Manila, 1008 Metro Manila</li>
            <li>Contact Number: +63 9175062280</li>
        </ul>

        <h2>FilAm EMS<h2>
        <ul>
            <li>Address: 1008, PH, 1231 Juaning, Sampaloc, Manila, 1015 Metro Manila</li>
            <li>Contact Number: +63 9959741161</li>
        </ul>

        
        <h2>Patient Care Ambulance Service<h2>
        <ul>
            <li>Address: Tolentino St, Sampaloc, Manila, 1008 Metro Manila</li>
            <li>Contact Number: +63 9171384420</li>
        </ul>

        <h2>LifeShield Ambulance Services<h2>
        <ul>
            <li>Address: 2696 Juan Luna St, Gagalangin Tondo, Manila, 1013 Metro Manila</li>
            <li>Contact Number: +63 9688388300</li>
        </ul>

        <h2>Tri-Med Land and Air Ambulance Service<h2>
        <ul>
            <li>Address: 31 Panay Ave, Diliman, Quezon City, 1103 Metro Manila</li>
            <li>Contact Number: +63 9171575787</li>
        </ul>

        <h2>Ronin Emergency Services<h2>
        <ul>
            <li>Address: 464 OJEN BLDG, Mandaluyong, 1550 Metro Manila</li>
            <li>Contact Number: (02)88876646</li>
        </ul>

        <h2>Patientcare Medical Health Services<h2>
        <ul>
            <li>Address: Balut, 318 E. Eduque, Tondo, Maynila, 1012 Kalakhang Maynila</li>
            <li>Contact Number: +63 9171384420</li>
        </ul>

        <h2>Transcare EMS - Ambulance Service<h2>
        <ul>
            <li>Address: Brgy, 259 Ibuna, San Juan, Metro Manila</li>
            <li>Contact Number: (02)85144243</li>
        </ul>

        <h2>Silvia Ambulance Service<h2>
        <ul>
            <li>Address: 1319 Alfonso Mendoza St, Santa Cruz, Manila, 1008 Metro Manila</li>
            <li>Contact Number: +63 9165329430</li>
        </ul>

        <h2>Ambucore Ambulance Services<h2>
        <ul>
            <li>Address: 42B Nicanor Roxas St, Quezon City, Metro Manila</li>
            <li>Contact Number: (02)89256292</li>
        </ul>-->

        <a href="afterlogin.php" class="btn"> Back to main page <span class="fas fa-chevron-right"></span> </a>
    </div>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> ResQ. All rights reserved.</p>
    </footer>
</body>
</html>