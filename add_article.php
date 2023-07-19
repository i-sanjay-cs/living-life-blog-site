<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $title = $_POST['title'];
  $body = $_POST['body'];
  $image = $_POST['image'];
  $date = $_POST['date'];

  // Sanitize form data
  $title = mysqli_real_escape_string($conn, $title);
  $body = mysqli_real_escape_string($conn, $body);
  $image = mysqli_real_escape_string($conn, $image);
  $date = mysqli_real_escape_string($conn, $date);

  // Insert article into database
  $sql = "INSERT INTO articles (title, body, image, date) VALUES ('$title', '$body', '$image', '$date')";

  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('New article added successfully');</script>";
} else {
    echo "<script>alert('Error: " . $sql . "<br>" . mysqli_error($conn) . "');</script>";
}

}

// Close the database connection
mysqli_close($conn);
?>


<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
  </head>
  
  <body>
    <!-- header starts -->
    <header>
      <div class='container container-flex'>
        <div class='site-title'>
          <h1>Living The Social Life</h1>
          <p class='subtitle'>A blog exploring minimalism in life.</p>
        </div>
        <nav>
          <ul>
            <li> <a href='#' class='current-page'>Home</a> </li>
          </ul>
        </nav>
      </div>
    </header> 
    <!-- header ends -->
    
    <!-- container starts -->
    <div class="container container-flex">
      <main role="main">
        <!-- add article form starts -->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="title">Title:</label><br>
  <input type="text" id="title" name="title" required><br>
  
  <label for="body">Body:</label><br>
  <textarea id="body" name="body" rows="8" cols="80" required></textarea><br>

  <label for="image">Image URL:</label><br>
  <input type="text" id="image" name="image" required><br>

  <label for="date">Date:</label><br>
  <input type="date" id="date" name="date" required><br><br>

  <input type="submit" name="submit" value="Submit">
</form>

        <!-- add article form ends -->
      </main>
    </div>
    <!-- container ends -->
    
    <!-- footer starts -->
    <footer>
      <p><strong>Living the Simple Life</strong></p>
      <p>Copyright 2023,
Sanjay Prajapati</a>

      </p>
    </footer>
    <!-- footer ends -->
    
  </body>
</html>

<?php
// Close the database connection
mysqli_close($conn);
?>