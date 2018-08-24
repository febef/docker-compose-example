<html>
  <head>
    <title>hola!</title>
  </head>
  <body>
    <center>
      <h1> hola mundo!</h1>
      <br/>
      <ul>
        <?php
          $data = file_get_contents('http://api');
          $obj = json_decode($data);
          foreach ($obj->products as $item) {
            echo "<li>$item</li>";
          }
        ?>
      </ul>
    </center>
  </body>
</html>
