<?php include('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Watch Video</title>
    <style>
        body {
            background-color: black;
            color: red;
            font-family: Arial, sans-serif;
        }
        video {
            width: 80%;
            margin: 20px auto;
            display: block;
        }
    </style>
</head>
<body>
    <?php
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM movies WHERE id=$id");
    $movie = $result->fetch_assoc();
    ?>
    <h1><?php echo $movie['title']; ?></h1>
    <p><?php echo $movie['description']; ?></p>
    <video controls>
        <source src="<?php echo $movie['file_path']; ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</body>
</html>
