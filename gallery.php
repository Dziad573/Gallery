<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="coffee, espresso, latte art, coffee shop, world coffees, coffee drink, kawa, kawy">
        <link rel="stylesheet" href="main-style.css">
        <link rel="stylesheet" href="text-style.css">
        <title>OP Collection</title>
    </head>
    <body>
        
    <?php
        require 'gallery.html';

        $conn = mysqli_connect("localhost", "root", "", "images");
        $query = "SELECT image_path FROM images";
        $result = mysqli_query($conn, $query);
        $countrow = count(mysqli_fetch_array($result));
        for($i=0; $i<=$countrow; $i++){
            while($row = mysqli_fetch_array($result)){
                $image_path[$i] = $row['image_path'];
                    if ($i % 2 == 0){
                        echo<<<TX
                            <div class="pics">
                                <div class="pic">
                                    <figure class="elementLeft">
                                        <img class="img" src="img/
                        TX;
                                            echo $image_path[$i];
                                            $i++;
                        echo<<<TX
                                        ">
                                    </figure>
                                </div>
                        TX;
                    }else{
                        echo<<<TX
                                <div class="pic">
                                    <figure class="elementRight">
                                        <img class="img" src="img/
                        TX;
                                            echo $image_path[$i];
                                            $i++;
                        echo<<<TX
                                        ">
                                    </figure>
                                </div>
                            </div>
                        TX;
                    }
                }
            }mysqli_close($conn);
    ?>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script src="animations.js"></script>
    
</body>
</html>