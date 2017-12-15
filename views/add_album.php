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
      <?php include '../php/menu.php';?>
    </header>
      <div class="header">
        <h3>Add album</h3>
        <span>Add your own album for sale.</span>
      </div>

      <div class="add-album-wrap pale-brown-bg">
        <div class="album-image pale-brown-bg">
          <img class="added_image" src="">
          <button class="add_image">Upload image</button>
        </div>
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

              <label>URL</label>
              <input type="text" name="url" value=null id="url">
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
              <div id="track">
                <div class="track-name">
                  <input type="text" name="track_name[]" class="track_name" placeholder="Name">
                </div>
                <div class="track-duration">
                  <input type="number" name="track_duration[]" class="track_duration" placeholder="Duration">
                </div>
              </div>
            </div>
            <p id="add_track_button">Add track</p>
            <input type="submit" name="add_album" value="add album" id="add">
          </form>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../script/add_track.js"></script>
  </body>
</html>
