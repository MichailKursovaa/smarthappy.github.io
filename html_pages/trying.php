<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="main.css">
        <!-- font awesome -->
        <!-- <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script> -->
</head>
<body>
<!-- Меню -->
        <div class="navbar">
                <img src="../img/logo.png" class="logo" alt="">
                <ul>
                        <li><a href="../index.html">О нас</a></li>
                        <li><a href="../index.html">Наши достоинства</a></li>
                        <li><a href="../index.html">Каталог</a></li>
                        <li><a href="../index.html">Контакты</a></li>
                </ul>
                <form action="../index.html">
                                        <button type="submit" class="buttonBack">
                                                <span></span>
                                               Вернуться
                                        </button>  
                </form>
        </div>             
        <div class = "products">
                <!-- Фильтр по категориям -->
                <div class = "container">
                        <h1 class = "lg-title">Каталог</h1>
                        <p class = "text-light">Тонкая работа!</p>  

                        <div class = "container">
                                <form method = "POST" action="get.php" target="_blank">
                                        <p class="la_ss">Выберите категорию:</p>
                                        <div>
                                                <input type="radio" id="contactChoice1" name="contact" value="Худи"/>
                                                <label class="la_ss" for="contactChoice1">Худи</label>

                                                <input type="radio" id="contactChoice2" name="contact" value="Кроссовки"/>
                                                <label class="la_ss" for="contactChoice2">Кроссовки</label>

                                                <input type="radio" id="contactChoice3" name="contact" value="Рюкзак"/>
                                                <label class="la_ss" for="contactChoice3">Рюкзак</label>
                                        </div>
                                        <div>
                                                <button type="submit" class = "btn-buy">Применить</button>
                                        </div>
                                </form>
                        </div>

                        <!-- Отрисовка товаров по шаблону, данные берутся из базы данных -->
                        <div class = "product-items">
                                <?php
                                        $connection = mysqli_connect('localhost','root', '');
                                        $connection->query('use `SmartHappyDataBase`');
                                        try {
                                                $message_client_about_things;
                                                $rewies = mysqli_query($connection, "SELECT * FROM `catalog_smart_happy`");
                                                $rewies = mysqli_fetch_all($rewies);

                                                foreach($rewies as $thing_one) {

                                                        $show_img = base64_encode($thing_one[4]);
                                                        echo '
  
                                                        <form action="./delivery/delivery.php" method="POST" target="_blank">
                                                                <div class = "product">
                                                                        <div class = "product-content">
                                                                                <div class = "product-img">
                                                                                        <img src="data:image/png;base64,'.$show_img.'" alt ="product image"> 
                                                                                </div>
                                                                        </div>        

                                                                        <div class = "product-info">
                                                                                <div class = "product-info-top">                                                                                      
                                                                                        <h2 class = "sm-title">'.$thing_one[3].'</h2>
                                                                                </div>
                                                                                <a href = "#" class = "product-name">'.$thing_one[1].'</a>
                                                                                <input type="hidden" id="pp" name="prodName" value="'.$thing_one[1].'"/>
                                                                                <p class = "product-price">₽'.$thing_one[2].'</p>
                                                                                <input type="hidden" id="cc" name="prodPrice" value="'.$thing_one[2].'"/>
                                                                                <div class = "product-btns">
                                                                                        <button type = "submit" class = "btn-buy"> Добавить в корзину
                                                                                        <span><i class = "fas fa-shopping-cart"></i></span>
                                                                                </button>
                                                                        </div>       
                                                                        </div>
                                                                </div>
                                                        </form>
                                                ';
                                                }
                                        } catch (Exception $e) {
                                                echo $e;
                                        }
                                ?>
                        </div>
                </div>
        </div>


        <footer class="footer">
                <!-- Футер -->
                <div class="footer__addr">
                  <h1 class="footer__logo">SmartHappy</h1>
                  <address>
                        Все товары изготовлены из качественных материалов и предлагаются по доступным ценам. 
                        Обновляйте свой гардероб с увлекательными винтажными находками от "Умной радости"!<br>
                        
                    <a class="footer__btn" href="tel:+79008005678">Тел: 89008005678</a>
                  </address>
                </div>
                
                <ul class="footer__nav">
                  <li class="nav__item">
                    <h2 class="nav__title">Возвращайтесь к своим любимым разделам</h2>
              
                    <ul class="nav__ul">
                      <li>
                        <a href="../index.html#about" class="links_ss">О нас</a>
                      </li>
              
                      <li>
                        <a href="../index.html#ournice" class="links_ss">Наши достоинства</a>
                      </li>
                          
                      <li>
                        <a href="#" class="links_ss">Каталог</a>
                      </li>
                    </ul>
                  </li>
                  
                  <li class="nav__item nav__item--extra">
                    <h2 class="nav__title">Наши социальные сети</h2>
                    
                    <ul class="nav__ul nav__ul--extra">
                      <li>
                        <a href="https://t.me/lainbank_bot" class="links_ss">Telegram</a>
                      </li>
                      
                      <li>
                        <a href="mailto:hovarderson@gmail.com" class="links_ss">Email</a>
                      </li>
                    </ul>
                  </li>
                  
                </ul>
                
                <div class="legal">
                  <p>&copy;     Парьев.М.С ИС-4-2. 2023</p>
                </div>
        </footer>
</body>
</html>