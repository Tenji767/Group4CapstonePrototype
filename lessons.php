<!DOCTYPE html>
<html>
<head>
    <title>BrightPath Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
</head>
<body>

<div class="header">
    <div class="subheader">
    <img src="logo.png" height="50px" width="50px">
    <p>BrightPath Learning</p>
</div>
    <ul>
        <a href="index.php"><p>Home</p></a>
        <a href="#lessons.php"><p>Lessons</p></a>
        <a href="#practice.php"><p>Practice</p></a>
        <a href="#tutoring.php"><p>Tutoring</p></a>
        <a href="#account.php"><p><?php echo $_SESSION['username']?></p></a> <!--javascript to open aside menu-->
        
    </ul>
</div>

<!--Aside for account menu-->
<div class="sidebar">
    <!--Profile picture from image stored in database-->
    <a href="#account.php"><button>Edit Account</button></a>
    <a href="#progress.php"><button>See Progress</button></a>

</div>