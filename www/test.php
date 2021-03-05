<html>
 <head>
  <title>Hello...</title>

  <meta charset="utf-8"> 

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
    <?php echo "<h1>Hi! I'm happy</h1>"; ?>

    <?php

    // $conn = mysqli_connect('db', 'user', 'test', "myDb");
    $mysqli = new mysqli("db","user","test","myDb");



    $query = $mysqli->query('SELECT * From users');


    echo '<table class="table table-striped">';
    echo '<thead><tr><th></th><th>id</th><th>name</th><th>password</th></tr></thead>';
    while($value = $query->fetch_object()){
        echo '<tr>';
        echo '<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></td>';
        foreach($value as $element){
            echo '<td>' . $element . '</td>';
        }

        echo '</tr>';
    }
    echo '</table>';

    $mysqli->close();


    ?>
    </div>
</body>
</html>