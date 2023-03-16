<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>item</title>
</head>
<body>
    <div class="container">

        <?php $item=get_items_by_id("items",$item_id)[0]; ?>

        <div class="card bg-light pd-2 col" style="width: 18rem; margin:50px auto;">
            <img src="<?php echo "assets/images/".$item["photo"]; ?>" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center"><?php echo $item["product_name"];?></h5>
                <!-- <p class="card-text"><?php echo "Code: ".$item["product_code"];?></p> -->
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item bg-light"><?php echo "Code: ".$item["product_code"];?></li>
                <li class="list-group-item bg-light"><?php echo "Category: ".$item["category"];?></li>
                <li class="list-group-item bg-light"><?php echo "Rating: ".$item["rating"];?></li>
                <li class="list-group-item bg-light"><?php echo "Price: ".$item["list_price"]; ?></li>
            </ul>
        </div>


    </div>
</body>
</html>