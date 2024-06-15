<DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" 
content="width=device-width, initial-scale=1">
    <title>ENTIRELY</title>
    <style type="text/css">
        body {
            font-size: 20px;
            padding: 10px 10px;
            }
            
            #btn {
                background-color: rgb(70, 90, 90);
                color: white;
                font-size: 15px;
            }
            
            #image1 {
                display: block;
            }
    </style>
    
</head>
<body>
    <table>
        <td>
            <a href="index.php"> 
                <img src="images/home.png" height="50px" id="home" />
            </a>
        </td>
        <td>
            <b>MY PAGE</b>
        </td>
    </table>
    <hr>
    
    <p>
    <span id="hello" style="background-color: blue; color: white;"> Hello, JS код: </span>
    <span id="num" style="background-color: yellow">
        task: 9/2
    </span>
    </p>
    
    <div>
        <img src="images/pic1.jpeg" height="140px" id="image1" />
    </div>
    <br>
    
    
    
    
    <button id="btn" onClick="changeFun()">
         Change html 
    </button>
    
    <button id="btn" onClick="hideFun()">
         Hide pic
    </button>
    
    <button id="btn" onClick="showFun()">
         Show pic
    </button>
    
    
    <hr>
    <span style="background-color: blue; color: white;"> Hello, PHP код: </span>
<form action="index.php" method="POST">
    <p>Email:<br><input type="text" name="email"> </p>
    <p>Password:<br><input type="password" name="password"> </p>
    <input type="submit">
</form>


<br>
<p>Your information is</p>

<b> 
<?php 
    if (isset($_POST['email'])&&isset($_POST['password'])) {
      echo $_POST['email']."<br>";
      echo $_POST['password']."<br>";
    } else {
      echo "email"."<br>";
      echo "password"."<br>";
    }
////////////////////////
    if (isset($_POST['email'])&&isset($_POST['password'])) {
    // начало if (*)
    $host = "10.0.0.150";
    $dbname = "base";
    $port = 3306;
    $username = "root";
    $password = "root";
    $db_table = "users";
    
    $result = false; 
    // Переменные с формы 
$name = $_POST['email']; 
$text = $_POST['password']; 
// Параметры для подключения 

// Имя Таблицы БД 
try { 
// Подключение к базе данных 
$db = new PDO("mysql:host=$host;port=$port;dbname=$dbname", 
$username, $password); 
// Устанавливаем корректную кодировку 
//$db->exec("set names utf8"); 
// Собираем данные для запроса 
$data = array( 
'name' => $name, 
'text' => $text ); 
// Подготавливаем SQL-запрос 
$query = $db->prepare(
"INSERT INTO $db_table (email, password) 
values (:name, :text)"); 
// Выполняем запрос с данными 
$query->execute($data); 
// Запишим в переменую, что запрос отрабтал 
$result = true; } 
catch (PDOException $e) { 
// Если есть ошибка соединения или выполнения запроса, выводим её 
print "Ошибка!: " . $e->getMessage() . 
"<br/>"; } 
if ($result) { echo "Успех"; }
    } // конец if (*)
/////////////////////////   
     ?> 
</b> <br>

<hr>
    
    
    <script type=text/javascript>
        function changeFun() {
            const a = 9;
            const b = 2;
            const res = a/b;
            document.getElementById("hello").innerHTML =
            "Код JS выполнился! ";
            
            document.getElementById("num").style.background =
            "green";
            document.getElementById("num").style.color =
            "white";
            document.getElementById("num").innerHTML =
            "answer: " + res;
            
            document.getElementById("image1").src =
            "images/pic1.png";
            document.getElementById("image1").style.display =
            "block";
        }
        
        function hideFun() {
        document.getElementById("image1").style.display =
            "none";
        }    
        
        function showFun() {
        document.getElementById("image1").style.display =
            "block";
        }    
    </script>
</body>
</html>