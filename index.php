<?php include('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Movie Platform</title>
    <style>
        body {
            background-color: black;
            color: red;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header {
            text-align: center;
            padding: 20px;
            border-bottom: 1px solid red;
        }
        .search-container {
            text-align: center;
            margin: 20px;
        }
        .search-container input[type="text"] {
            width: 60%;
            padding: 10px;
            border: 1px solid red;
            background-color: #333;
            color: white;
        }
        .search-container button {
            padding: 10px 20px;
            background-color: red;
            color: black;
            border: none;
            cursor: pointer;
        }
        .search-container button:hover {
            background-color: darkred;
        }
        .movie-container {
            text-align: center;
            margin-top: 30px;
        }
        iframe {
            width: 80%;
            height: 400px;
            border: 2px solid red;
            margin-bottom: 20px;
        }
        h2 {
            color: red;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome to the Movie Platform</h1>
    </div>
    
    <!-- Search Section -->
    <div class="search-container">
        <input type="text" placeholder="Search for movies..." id="searchBar">
        <button onclick="searchMovie()">Search</button>
    </div>
    
    <!-- Movie Section 1 -->
    <div class="movie-container">
        <h2>Featured Movie 1</h2>
        <iframe id="video1" src="https://www.youtube.com/embed/XuNUDKwfU8s?si=tUGLTXsQHkjyI1M4" allowfullscreen onclick="pauseOtherVideo('video1')"></iframe>
    </div>
    
    <!-- Movie Section 2 -->
    <div class="movie-container">
        <h2>Featured Movie 2</h2>
        <iframe id="video2" src="https://www.youtube.com/embed/_9fukICI_1I?si=3pLgOcBeAmr0Mjs3" allowfullscreen onclick="pauseOtherVideo('video2')"></iframe>
    </div>
    
    <script>
        function searchMovie() {
            let searchTerm = document.getElementById('searchBar').value;
            if (searchTerm.trim() === '') {
                alert('Please enter a movie name to search.');
            } else {
                alert('Searching for: ' + searchTerm);
            }
        }

        // Function to pause the other video
        function pauseOtherVideo(currentVideoId) {
            var video1 = document.getElementById('video1');
            var video2 = document.getElementById('video2');
            
            if (currentVideoId === 'video1') {
                // Pause video 2
                video2.src = video2.src;
            } else if (currentVideoId === 'video2') {
                // Pause video 1
                video1.src = video1.src;
            }
        }
    </script>
</body>
</html>
