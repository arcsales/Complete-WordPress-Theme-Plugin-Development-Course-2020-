<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>PHP for WordPress</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
</head>

<body>

  <header id="masthead">
    <h1><a href="#">PHP for WordPress</a></h1>
  </header>

  <div id="content">


    <?php
    $post_titles = [
      'Post Title 1',
      'Post Title 2',
      'Post Title 3',
      'Post Title 4'
    ];

    foreach ($post_titles as $post_title) {

      display_title($post_title);
    }
    // Create an array of post objects using the display_post function


    // Loop through array of posts and display each one on the page

    // Call the display_title function and pass it the $post


    /**
     * Custom function for displaying the title and content for a post
     *
     * @param string $title The title to be displayed
     */
    function display_title($post_title)
    {

      echo "<h3>" . $post_title . "</h3>";
    }

    ?>

  </div>

</body>

</html>