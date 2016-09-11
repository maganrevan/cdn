<!doctype>
<?php require_once("functions/functions.php"); ?>
<html manifest="manifest.appcache">
  <head>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </head>
  <body>
    <main>
      <secition id="accordion">
        <h3 class="hidden">Strong World</h3>
        <div class="hidden" source="strong-world.com">

        </div>
        <h3>Animexx</h3>
        <div source="animexx-upload">

        </div>
        <h3>Upload</h3>
        <div>

        </div>
      </secition>
      <section id="sources">
      <?php
        $aLinks = scan_Dir(dirname(__FILE__));
        foreach($aLinks as $key => $link){
            $info = getimagesize($link);
            if($info){
              ?>
              <div class="col-md-3<?php if($info["mime"] == "image/tiff"){echo(" hidden");} ?>">
              <?php
            	$linkparts = array_pop(explode("/cdn/",$link));
              ?>
              <img src="<?php echo($linkparts); ?>" source="<?php echo($linkparts); ?>" alt="testbild" />
              <input type="text" value="<?php echo("http://".$_SERVER["HTTP_HOST"]."/".$linkparts); ?>" />
              </div>
              <?php
            }
        }

    ?>
  </section>
    </main>
  </body>
</html>
