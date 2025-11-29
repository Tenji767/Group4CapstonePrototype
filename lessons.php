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

<p>Pick the grade you are in</p>

<div class="gradeBox">
    <h2>1st Grade</h2>
    <p>Counting, ordering, basic fractions, addition and subtraction, measuring, shapes, time, graphs, and patterns</p>
</div>

<div class="gradeBox">
    <h2>2nd Grade</h2>
    <p>Counting to 200, understanding 10s, dividing into equal parts, counting money, addition and subtraction using big numbers, measuring in American Units, time, creating 3D shapes, and more patterns.</p>
</div>

<div class="gradeBox">
    <h2>3rd Grade</h2>
    <p>Digits, fractions, counting money up to $5.00, addition and subtraction up to 1,000, multipication and division, area and perimeter, calculating time, polygons, and even more patterns.</p>
</div>

<div class="gradeBox">
    <h2>4th Grade</h2>
    <p>Nine-digit numbers, compare fractions, decimals, multi-step problems, multiplication table, multiplication of fractions, addition and subtraction of decimals, lines, quadrilaterals, line graphs, and probabilities.</p>
</div>