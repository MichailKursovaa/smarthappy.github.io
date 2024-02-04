<?php
// оформление заказа и добавление данных в базу данных
        $name_user_cl = $_POST['your-name'];
        $Email = $_POST['email'];
        $good_ordering = $_POST['name_g'];
        $price_ordering = $_POST['full_cost'];

        $connection = mysqli_connect('127.0.0.1','root', '');
        $connection->query('use `SmartHappyDataBase`');


        if(trim($name_user_cl) != "" && trim($Email) != "" && trim($good_ordering) != "" && trim($price_ordering) != "") {
                try {
                        $connection->query("INSERT INTO User_Orders(`Full_Name_User`, `Email_Client`, `Name_Good_Order`, `Cost_Good_Order`) VALUES 
                        ('$name_user_cl','$Email','$good_ordering', '$price_ordering')");
                $connection->close();      
                        echo 'Заказ оформлен!';

                } catch(Exception $e) {
                        echo $e;
                }
        }
        else {
                echo 'Вы не ввели все данные, вернтиесь на форму и введите все необходимые данные';
        }
?>