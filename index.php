<?php
$page_title = "Платон Весна 2018"; // insert your own title
$files = array_slice(scandir('image_folder'), 2); // array slice at 2 gets rid of the dots in -nix systems
$layout = (isset($_GET['layout']) && !empty($_GET['layout'])) ? $_GET['layout'] : 'carousel';
?>


<!DOCTYPE <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title><?php echo $page_title; ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
  </head>
<body class="">

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="/"><?php echo $page_title; ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item<?php echo ($layout == 'grid') ? " active" : "" ?>">
            <a class="nav-link" href="?layout=grid">Решетка</a>
          </li>
          <li class="nav-item<?php echo ($layout == 'carousel') ? " active" : "" ?>">
            <a class="nav-link" href="?layout=carousel">Карусель</a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  
  
  <?php if( $layout == 'carousel' ) : ?>
  <main role="main" class="h-100">
    <div id="mainCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">

        <?php foreach( $files as $key => $file ) : ?>
          <li data-target="#mainCarousel" data-slide-to="<?php echo $key; ?>" class="<?php echo ($key == 0) ? "active" : "" ?>"></li>
        <?php endforeach; ?>
      </ol>
      
      <div class="carousel-inner">
        <?php foreach( $files as $key => $file ) : ?>
          <div class="carousel-item<?php echo ($key == 0) ? " active" : "" ?>">
            <div class="carousel__imageholder w-100" style="background-image:url(image_folder/<?php echo $file; ?>)"></div>
          </div>
        <?php endforeach; ?>
      </div>
      <!-- carousel controls -->
      <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div> <!-- end of #mainCarousel -->
  </main>
  <?php elseif ( $layout == 'grid') : ?>
  <main role="main" class="container-fluid">
    <div class="row">
      <?php foreach( $files as $key => $file ) : ?>
      <div class="col-3">
        
        <a type="button" data-toggle="modal" data-target="#modal<?php echo $key; ?>">
          <div class="grid__imageholder w-100" style="background-image:url(image_folder/<?php echo $file; ?>)"></div>
        </a>
        <!-- Modal -->
        <div class="modal fade" id="modal<?php echo $key; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $file; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="image_folder/<?php echo $file; ?>" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    <div>
  </main>
  <?php endif; ?>
  
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>