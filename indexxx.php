<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sayt.css">
    <title>Document</title>
</head>
<body>
    <div class="poto">
        <img src="01.jpg">
        <p>ВАШЕЙ МЕЧТЫ</p>
        <b>Получить веб-сайт</b>
        <h5>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum, perferendis quis. Consequatur ad aliquam quas nulla, perferendis, esse soluta perspiciatis ipsa incidunt, ratione fugit beatae odit repellendus modi repellat. Quis?</h5>
    <div class="blok1">
        <button class="btn" onclick="modalOpen()">Начать</button></div>
    </div> 
    <div class="text">
        <div class="text2"><b>Веб-разработка</b></div>
        <div class="text3"><p>Быстро поощряйте важные действия перед тактическим сотрудничеством и обменом идеями. 
             Монотонно привлекайте рыночный интеллектуальный капитал  возможностей беспроводной связи. 
         Постепенно производительность сети на основе услуги для процедур функционального тестирования.</p></div>
        <div class="domalaq">
            <div class="tort">
                <img src="02.jpg">
            </div>
            </div>
         </div> 
         <div class="modal">
            <div class="modal-main">
                 <h1>Sign In</h1>
                 <form action="register.php" method="POST">
                     <input type="text" name="email" placeholder="Почта или телефон">
                     <input type="text" name="full_name" placeholder="Полное имя">
                     <input type="text" name="nickname" placeholder="Nickname">
                     <input type="password" name="password" placeholder="Введите пароль">
                     <input type="password" name="password2" placeholder="Подтвердить пароль">
                     <?php
                     if(isset($_GET['error']) && $_GET['error'] == 1){
                        ?>
                        <h3 class="text-danger">Пароль қате!</h3>
                        <?php
                     }else if (isset($_GET['error']) && $_GET['error'] == 4){
                        ?>
                        <h3 class="text-danger">Толық енгіз!</h3>
                        <?php
                     }else if (isset($_GET['error']) && $_GET['error'] == 3){
                        ?>
                        <h3 class="text-danger">Аккаунт тіркелген!</h3>
                        <?php
                     } else {
                     ?>
                        <h3 class="text-danger">Белгісіз қате!</h3>
                        <?php
                    }
                    ?>
                     <button type="submit">Sign In</button>
                     <p>Dont have an account?</p>
                     <a href="file:///C:/Users/209/Desktop/1221/indexxx.html">Sign Up</a>
                 </form>
            </div>
            <a class="x" href="" onclick="modalClose()">X</a>
         </div>
     
         <script src="java.js"></script>
           
       
</html>