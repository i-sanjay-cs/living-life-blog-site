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

// Query the database to get the articles
$sql = "SELECT id, title, body, image, DATE_FORMAT(date, '%M %d, %Y') AS date FROM articles";
$result = mysqli_query($conn, $sql);

// Check if query was successful
if (!$result) {
  die("Query failed: " . mysqli_error($conn));
}

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
        <?php
        // Loop through the articles and display them
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $title = $row['title'];
          $body = $row['body'];
          $image = $row['image'];
          $date = $row['date'];
        ?>
          <article class="article-recent">
            <div class="article-recent-main">
              <h2 class="article-title"><?php echo $title; ?></h2>
              <p class="article-body"><?php echo substr($body, 0, 100) . '...'; ?></p>
              <a href="article.php?id=<?php echo $id; ?>" class="article-read-more">CONTINUE READING</a>
            </div>
            <div class="article-recent-secondary">
              <img src="<?php echo $image; ?>" alt="article image" class="article-image">
              <p class="article-info"><?php echo $date; ?></p>
            </div>
          </article>
        <?php } ?>
      </main>
    </div>
    <!-- container ends -->
    
    <!-- footer starts -->
    <footer>
      <p><strong>Living the Simple Life</strong></p>
      <p>Copyright 2023,Sanjay Prajapati</a>

      </p>
    </footer>
    <!-- footer ends -->
    
  </body>
</html>

<?php
// Close the database connection
mysqli_close($conn);
?>
