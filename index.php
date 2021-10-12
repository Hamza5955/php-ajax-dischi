
<?php 
    include __DIR__ . './data/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Dischi</title>
</head>

<body>
   <header>
      <div class="header">
         <img class="img" src="./img/spotify-logo.png" alt="" />
      </div>
   </header>
   <main>
        <div class="container">

            <?php 
                foreach ($db as $disco) {
                    
                    echo "<div class='card p-3'>";
                    echo "<div class='card-img align-center'>";
                        echo "<img src='$disco[poster]' alt='$disco[title]'>";
                    echo "</div>";    
                        echo "<div class='text-center'>";
                        echo "<h3>$disco[title]</h3>";
                        
                            echo "<p>$disco[author]</p>";
                            echo "<p>$disco[year]</p>";
                            echo "</div>";
                    echo "</div>";
                }
            ?>

        </div>
    
   </main>
</body>

</html>