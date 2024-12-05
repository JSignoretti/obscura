<!DOCTYPE html>
<html>
  <head>
    <title>Obscura Sound Station - Submission</title>
    <meta charset="utf-8">
    <link href="style-signoretti-simpson-obrien.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div id="wrapper">
      <header>
        <img alt="Obscura Sound Station" title="Obscura Sound Station" src="images/logo.png" width="100%">
        <h1>Obscura Sound Station</h1>
      </header>
      <nav>
        <ul>
        <li class="btn"><a href="index-signoretti-simpson-obrien.html" title="Return to Home page">Home</a></li>
          <li class="btn"><a href="music-signoretti-simpson-obrien.html" title="Go to the Music page">Music</a></li>
          <li class="btn"><a href="spotlight-signoretti-simpson-obrien.html" title="Go to the Spotlight page">Artists</a></li>
          <li class="btn"><a href="submission_form-signoretti-simpson-obrien.html" title="Go to the submission form">Submissions</a></li>
        </ul>
      </nav>
      <div id="content">
        <div id="midcol">
          <?php
          // Check if the form was submitted via POST
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
              // Sanitize and retrieve input values
              $username = htmlspecialchars($_POST["username"]);
              $artistname = htmlspecialchars($_POST["artistname"]);
              $songname = htmlspecialchars($_POST["songname"]);
              $spotifylink = htmlspecialchars($_POST["spotifylink"]);

              // Prepare the data string
              $data = "Name: $username\nArtist: $artistname\nSong: $songname\nSpotify Link: $spotifylink\n\n";

              // Save to a file in the same directory
              $file = 'submissions-signoretti-simpson-obrien.txt';
              file_put_contents($file, $data, FILE_APPEND);

              // Provide feedback to the user
              echo "<h2>Thank you for your submission!</h2>";
              echo "<p>Your submission has been saved. Feel free to submit another.</p>";
          } else {
              // Handle cases where the form was not submitted correctly
              echo "<h2>Error</h2>";
              echo "<p>The form was not submitted correctly.</p>";
          }
          ?>
        </div>
        <br class="clear">
      </div>
      <br class="clear">
      <footer>
        <p>Obscura Sound Station</p>
        <p>Email: <a href="mailto:admin@obscurasoundstation.com">admin@obscurasoundstation.com</a></p>
        <p>Phone: <a href="tel:555-555-5555">555-555-5555</a></p>
        <p>Address: 1000 Music St, Ypsilanti, MI 48197</p>
        <p>&copy; 2024 Obscura Sound Station</p>
      </footer>
    </div>
  </body>
</html>