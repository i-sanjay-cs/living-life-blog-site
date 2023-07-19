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
        <form method="post" action="add_post.php" enctype="multipart/form-data">
          <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>
          </div>
          <div class="form-group">
            <label for="body">Body:</label>
            <textarea name="body" id="body" rows="10" required></textarea>
          </div>
          <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" name="image" id="image" accept="image/*" required>
          </div>
          <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" name="date" id="date" required>
          </div>
          <button type="submit">Add Post</button>
        </form>
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
