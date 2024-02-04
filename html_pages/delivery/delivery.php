<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Доставка</title>
        <link rel="stylesheet" href="delCss.css">
</head>
<body>
        <?php

                $name_prod_good = $_POST['prodName'];
                $price_prod_good = $_POST['prodPrice'];


                echo '<form action="delivery_method.php" method="POST" class="wedding">
                <div class="form-inner">
                        <h2>Спасибо,<br>
                        что совершаете заказ у нас</h2>

                        <div class="form-content">
                                <h3>Ваше имя:</h3>
                                <p>
                                        <input type="text" name="your-name">
                                </p>
                                <h3>Email:</h3>
                                <p>
                                        <input type="text" name="email">
                                </p>
                                <h3>Товар</h3>
                                <p>
                                        <input type="text" name="name_g" value="'.$name_prod_good.'" readonly>
                                </p>

                                <h3>Стоимость</h3>
                                <p>
                                        <input type="text" name="full_cost" value="'.$price_prod_good.'" readonly>
                                </p>

                                <p>
                                        <input type="submit" value="Оформить">
                                </p>
                        </div>

                </div>
                </form>'

        ?>
</body>
</html>