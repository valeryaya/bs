<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/styleprof.css">
     
     <link rel="stylesheet" href="css/templatemo-style.css">
    <title>Document</title>
</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    
                    <a href="#" class=""><img src="images/logo1.png"></a>
               </div>

               
               <div class="collapse navbar-collapse">
                    

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="logout.php">Выйти</a></li>
                    </ul>
               </div>

          </div>
     </section>




        <div class="osn"> 
        <h2>Добро пожаловать, <?=$_COOKIE['user']?>! </h2> 
            
     
    </div>



<section class="zay">
    <form action="/request.php" method="POST" enctype="multipart/form-data">
        <h2>Записаться на тренировку</h2>
        <input type="text" name="name_request" class="zay2" placeholder="Фамилия и имя ребенка"><br><br>
        <textarea type="text" name="description" class="zay2" placeholder="Введите возраст ребенка и номер телефона"></textarea><br><br>
        <select name="category" class="zay2"><br><br>
            <option value="Выберите вид тренировки">Выберите вид тренировки</option>
            <option value="Индивидуальное">Индивидуальное</option>
            <option value="Сплит">Сплит</option>
            <option value="Пробная">Пробная</option>
            <option value="Родитель и малыш">Родитель и малыш</option>
            <option value="Группа">Группа</option>
        </select><br><br>
        <input type="submit" value="Отправить" class="zay3" >
    </form>
</section>

     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
</body>

</html>

