<!DOCTYPE html>
<html>
     <head>
          <title>Hello PHP8!</title>
     </head>  

     <body>
          <h1>Hello, PHP!</h1>
          <p>  <?php
                    $dsn = 'mysql:dbname=testdb;host=mariadb';
                    $user = 'zenusr';
                    $password = 'userP@ss2024';
                    
                    try {
                         $pdo = new PDO($dsn, $user, $password);
                         /* @var $pdo PDO */
                         echo "Current Connected Database: " . $pdo->query("select database()")->fetchColumn() . " by user: " . $user;
                    } catch (PDOException $e) {
                         echo 'Connection failed: ' . $e->getMessage();
                    }
               ?>
          </p>

          <h1> <?php echo 'Welcome to PHP ' . phpversion(); ?> </h1>
          <p> <?php phpinfo(); ?> </p>
     </body>
</html>