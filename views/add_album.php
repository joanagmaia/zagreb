<!DOCTYPE>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Add album</title>
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../stylesheets/colors.css">
    <link rel="stylesheet" href="../stylesheets/basic.css">
    <link rel="stylesheet" href="../stylesheets/add_album.css">
    <link rel="stylesheet" href="../stylesheets/header.css">
  </head>
  <body>
    <?php include '../php/verify_login.php'; ?>
    <header>
      <nav class="navbar">
        <p id="logo">ZAGREB</p>
        <ul id="menu">
          <li class="menu_titles" id="username">username</li>
          <li class="menu_titles">Search</li>
          <li class="menu_titles">Message</li>
          <a href="authentication.php">
            <li id="logout" class="menu_titles">Logout</li>
          </a>
        </ul>
      </nav>
    </header>
      <div class="header">
        <h3>Add album</h3>
        <span>Add your own album for sale.</span>
      </div>
      <div class="add-album-wrap pale-brown-bg">
        <div class="picture-vynil"></div>
        <div class="form-wrapper">
          <form method="GET" action="../php/add_album.php" name="add_album">
            <div class="album-information-wrapper">
              <h1>Album information</h1>
              <label>Album name</label>
              <input type="text" name="name">

              <label>Genre</label>
              <input type="text" name="genre">

              <label>Artist</label>
              <input type="text" name="artist">

              <label>Year</label>
              <input type="number" name="year">

              <label>Ranking</label>
              <input type="number" name="ranking">
            </div>
            <div class="business-information-wrapper">
              <h1>Specifics</h1>

              <label>Stock</label>
              <input type="number" name="stock">

              <label>Price</label>
              <input type="number" name="price">
              <label>Is it available?</label>
              <input type="checkbox" name="available">
            </div>
            <h1 id="add-h1">Add tracks</h1>
            <div id="add_tracks">
              <div class="add-tracks-track">
                <label>Name of the track</label>
                <input type="text" name="track_name[]" class="track_name">
              </div>
              <div class="add-tracks-duration">
                <label>Duration</label>
                <input type="number" name="track_duration[]" class="track_duration">
              </div>
            </div>
            <p id="add_track">Add track</p>
            <input type="submit" value="add album" id="add">
          </form>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../script/add_track.js"></script>
  </body>
</html>
