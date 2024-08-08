<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searches</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../css/icon-w3.css">
    <link rel="stylesheet" href="../css/general.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <link rel="stylesheet" href="../css/nav.css" />
    <script></script>
</head>
<body>
  <?php require '../php/nav.php' ?>

  <?php 
        $output='';
        $conn = new mysqli("localhost","root","","pharmacy");
        $searching=$_POST["searching"];
        $query="SELECT * FROM inst_info WHERE inst_name LIKE '{$searching}%'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
               $output .= $row["inst_name"] ."<br>";
            }
           }
    ?>
    
    <div id="results">
        <?php 
            echo $output;
        ?>
    </div>

    <!-- <?php require '../php/footer.php' ?> -->

</body>
</html>