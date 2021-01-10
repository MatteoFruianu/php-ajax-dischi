<?php require_once __DIR__ . '/partials/database.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
</head>
<body>
    <header> MAIN NAV </header>
    
    <main>
        <div class="container">

          <?php foreach($database as $cd)
         {
               ?>

              <div class="cd">
                <img src="<?php echo $cd['poster']; ?>" alt="">
                <h3><?php echo $cd['title']; ?></h3>
                <div><strong><?php echo $cd['genre']; ?></strong></div>
                <small><?php echo $cd['year']; ?></small>
                
              </div>
         <?php }?>
        
        </div>
    </main>


    
</body>
</html>