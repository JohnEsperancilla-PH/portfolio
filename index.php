<html>
    <?php
        include "details.php";
    ?>
    <head>
        <!-- TITLE -->
        <?php $title = "Home - Student Portfolio";?>
        <title><?php echo $title?></title>

        <!-- LINKS -->
        <link rel = "icon" href = "assets/images/JE-LOGO-transparent.png">
    </head>

    <body>
        <!-- NAVBAR -->
        <div>
            <a href = "index.php">Home</a>
            <a href = "skills.php">Skills</a>
            <a href = "projects.php">Projects</a>
            <a href = "gallery.php">Gallery</a>
            <a href = "contact.php">Contact</a>
        </div>

        <!-- PAGE DESCRIPTION -->
        <div>
            <h2>Home Page</h2>
            <h3>Welcome to my website!</h3>
        </div>

        <!-- PAGE CONTENT -->
         <div>
            <h3>More about me</h3>
                <h4 style="font-weight: lighter">
                    My name is <b><?php echo $first_name?></b> <b><?php echo $last_name?></b>
                    and I am from <b><?php echo $city_living?>.</b>
                    <br>
                    <br>
                    I teleported to the world and was born on <b><?php echo $birthday?></b>.
                    The portal I used to enter the world was <b><?php echo $city_born?></b>
                    <br>
                    <img src="assets/images/modern_city_by_dumindu1019_dg7nxks-fullview.jpg" alt=jonard height="200px" width="200px">
                </b></h4>
         </div>
    </body>
</html>