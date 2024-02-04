<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="main.css">
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
</head>
<body>
        <!-- Отрисовка товаров по шаблону с использованием фильтра по категориям -->
        <div class = "products">
                <div class = "container">
                        <div class = "product-items">
                                <?php
                                        $connection = mysqli_connect('127.0.0.1','root', '');
                                        $connection->query('use `SmartHappyDataBase`');
                                        try {
                                                $input_name_category = $_POST['contact'];


                                                if($input_name_category == 'Кроссовки') {
                                                        $this_cat = mysqli_query($connection, "SELECT * FROM `catalog_smart_happy` WHERE Category_Goods='Кроссовки'");
                                                        $this_cat = mysqli_fetch_all($this_cat);
                                                        foreach($this_cat as $one_cat) {

                                                                $show_img = base64_encode($one_cat[4]);

                                                                echo '
                                                                
                                                                        <div class = "product">
                                                                                <div class = "product-content">
                                                                                        <div class = "product-img">
                                                                                                <img src="data:image/png;base64,'.$show_img.'" alt ="product image"> 
                                                                                        </div>
                                                                                        <div class = "product-btns">
                                                                                                <form action="./delivery/delivery.html">
                                                                                                        <button type = "submit" class = "btn-buy"> Добавить в корзину
                                                                                                        <span><i class = "fas fa-shopping-cart"></i></span>
                                                                                                        </button>
                                                                                                </form>
                                                                                        </div>
                                                                                </div>        
        
                                                                                <div class = "product-info">
                                                                                        <div class = "product-info-top">
                                                                                                <h2 class = "sm-title">'.$one_cat[3].'</h2>
                                                                                        </div>
                                                                                        <a href = "#" class = "product-name">'.$one_cat[1].'</a>
                                                                                        <p class = "product-price">₽'.$one_cat[2].'</p>       
                                                                                </div>
                                                                        </div>
                                                                ';
                                                        }
                                                }
                                                else if($input_name_category == 'Худи') {
                                                        $this_cat = mysqli_query($connection, "SELECT * FROM `catalog_smart_happy` WHERE Category_Goods='Худи'");
                                                        $this_cat = mysqli_fetch_all($this_cat);
                                                        foreach($this_cat as $one_cat) {

                                                                $show_img = base64_encode($one_cat[4]);

                                                                echo '
                                                                
                                                                        <div class = "product">
                                                                                <div class = "product-content">
                                                                                        <div class = "product-img">
                                                                                                <img src="data:image/png;base64,'.$show_img.'" alt ="product image"> 
                                                                                        </div>
                                                                                        <div class = "product-btns">
                                                                                                <form action="./delivery/delivery.html">
                                                                                                        <button type = "submit" class = "btn-buy"> Добавить в корзину
                                                                                                        <span><i class = "fas fa-shopping-cart"></i></span>
                                                                                                        </button>
                                                                                                </form>
                                                                                        </div>
                                                                                </div>        
        
                                                                                <div class = "product-info">
                                                                                        <div class = "product-info-top">
                                                                                                <h2 class = "sm-title">'.$one_cat[3].'</h2>
                                                                                        </div>
                                                                                        <a href = "#" class = "product-name">'.$one_cat[1].'</a>
                                                                                        <p class = "product-price">₽'.$one_cat[2].'</p>       
                                                                                </div>
                                                                        </div>
                                                                ';
                                                        }
                                                }
                                                else if($input_name_category == 'Рюкзак') {
                                                        $this_cat = mysqli_query($connection, "SELECT * FROM `catalog_smart_happy` WHERE Category_Goods='Рюкзак'");
                                                        $this_cat = mysqli_fetch_all($this_cat);
                                                        foreach($this_cat as $one_cat) {

                                                                $show_img = base64_encode($one_cat[4]);

                                                                echo '
                                                                
                                                                        <div class = "product">
                                                                                <div class = "product-content">
                                                                                        <div class = "product-img">
                                                                                                <img src="data:image/png;base64,'.$show_img.'" alt ="product image"> 
                                                                                        </div>
                                                                                        <div class = "product-btns">
                                                                                                <form action="./delivery/delivery.html">
                                                                                                        <button type = "submit" class = "btn-buy"> Добавить в корзину
                                                                                                        <span><i class = "fas fa-shopping-cart"></i></span>
                                                                                                        </button>
                                                                                                </form>
                                                                                        </div>
                                                                                </div>        
        
                                                                                <div class = "product-info">
                                                                                        <div class = "product-info-top">
                                                                                                <h2 class = "sm-title">'.$one_cat[3].'</h2>
                                                                                        </div>
                                                                                        <a href = "#" class = "product-name">'.$one_cat[1].'</a>
                                                                                        <p class = "product-price">₽'.$one_cat[2].'</p>       
                                                                                </div>
                                                                        </div>
                                                                ';
                                                        }
                                                }
                                        } catch (Exception $e) {
                                                echo $e;
                                        }

                                ?>
                        </div>
                </div>
        </div>
</body>
</html>