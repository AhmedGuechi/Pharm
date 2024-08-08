<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/signatures.css">
    <link rel="stylesheet" href="../css/general.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <link rel="stylesheet" href="../css/nav.css" />

    <title>news</title>
</head>

<body>
    <?php include '../php/nav.php' ?>


    <section class="main-container">
        <div class="left-content">
            <?php
            include_once '../php/connectt.php';

            // Get the page index from the URL parameter
            $pageIndex = isset($_GET['page']) ? $_GET['page'] : 0;

            // Use $card[$pageIndex] to access the specific data for the clicked page
            $clickedCard = $card[$pageIndex];

            // Now, use $clickedCard to display the content on the template page
            // Modify this part based on how you want to display the content on the template page
            $clickedPhoto = $clickedCard['news_photo'];
            $clickedDate = $clickedCard['news_date'];
            $clickedTitle = $clickedCard['news_title'];
            $clickeddescription = $clickedCard['news_description'];

            // Example: Displaying the content on the template page
            echo "<div class='main-title'>$clickedTitle</div>\n";
            echo "<h5 class='date'>$clickedDate</h5>\n";
            echo "<img class='img' src='../images/$clickedPhoto' alt='News Photo'>\n";
            echo "<p class='description'>".nl2br($clickeddescription)."</p> ";




            ?>
        </div>
    </section>
    <?php require '../php/footer.php' ?>

</body>

</html>