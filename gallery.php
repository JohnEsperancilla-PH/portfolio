<html>
    <head>
        <?php $title = "Gallery - Student Portfolio";?>
        <title><?php echo $title?></title>

        <style>
            .navbar {
                background-color: #333;
                overflow: hidden;
            }

            .navbar a {
                float: left;
                color: white;
                padding: 14px 16px;
                text-decoration: none;
                text-align: center;
            }
        </style>
    </head>

    <body>
        <div class = "navbar">
            <a href = "skills.php">Skills</a>
            <a href = "projects.php">Projects</a>
            <a href = "gallery.php">Gallery</a>
            <a href = "contact.php">Contact</a>
        </div>
        
        <div>
        <h2>Gallery</h2>
        <h3>Welcome to my gallery!</h3>
        <h2>Menu</h2>
        <ul>
            <li><a href = "index.php">Home</a></li>
            <li><a href = "skills.php">Skills</a></li>
            <li><a href = "projects.php">Projects</a></li>
            <li><a href = "gallery.php">Gallery</a></li>
        </ul>
        <img src="assets/images/1718900425297.jfif" alt=jonard height="400px" width="400px">
        </div>
        
    </body>
</html>