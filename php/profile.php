<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>
<?php
    include_once('functions.php')
?>
<?php
    // Проверка на загрузку изображения
    if(isset($_FILES['file'])) {
      $check = can_upload($_FILES['file']);
    
      if($check === true){
        // Загрузка изображения
        make_upload($_FILES['file']);
        echo "<strong>Файл загружен</strong>";
      }
      else{
        // Сообщение об ошибке
        echo "<strong>$check</strong>";  
      }
    }
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Компаниец Елена</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/style_gallery.css"/>
</head>
<body>
    <!-- Профиль -->
    <header >
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['name'] ?></h2>
        <a href="#" style="color:#228B22;"><?= $_SESSION['user']['email'] ?></a><br>
        <a href="../include/logout.php" class="logout" style="color:#228B22;">Выход</a><br>
    </header>
          <div id="randomGallery">
              
                <form method="post" enctype="multipart/form-data">
                    
                    <label for="width">Ширина</label><br>
                        <input type="number" min="300" max="1000" id="width"><br>
                    <label for="height">Высота</label><br>
                        <input type="number" min="300" max="450" id="height"><br>
                    <label for="border">Толщина рамки</label><br>
                        <input type="number" min="1" max="20" id="border"><br>
                    <label for="t_alt">Альтернативный текст</label><br>
                        <input type="text" size="20" id="alt"><br>
                    <input type=button value="Сменить картинку" onclick="change()"><br><br><br>
                    <input type="file" name="file"><br>
                    <input type="submit" value="Загрузить файл">
                </form>
                <div id="rand">
                    <img id=myimg src="../img/1.jpeg" alt="nature">
                </div>
            </div>

        <script type="text/javascript">
            var arr=["../img/1.jpeg","../img/2.jpg","../img/3.jpg","../img/4.jpg","../img/5.jpeg","../img/6.jpg","../img/7.jpeg","../img/8.jpeg","../img/9.jpg","../img/10.jpg"]; 
            
            //Изменение ширины изображения
            width.onchange = function(){
                myimg.style.width = this.value + "px";
            }
            
            //Изменение высоты изображения
            height.onchange = function(){
                myimg.style.height = this.value + "px";
            }
            
            //Изменение толщины рамки изображения
            border.onchange = function(){
                img = document.getElementById("myimg");
                img.border=border.value;
                img.style.borderColor="#228B22";
            }
            
            //Изменение альтернативного текста
            alt.onchange = function(){
                img = document.getElementById("myimg");
                img.alt=alt.value;
            }

            //Случайная смена изображения
            function change(){
                var r=Math.floor(Math.random()*arr.length);
                document.getElementById("myimg").src=arr[r];   
            }
        </script>
         
        <footer>©2020 Все права защищены, Компаниец Елена</footer>
    
</body>
</html>    