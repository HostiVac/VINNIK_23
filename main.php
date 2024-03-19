<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Авторизация</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #003366;
      color: white;
      padding: 20px 0;
      text-align: center;
    }
    header h1 {
      margin: 0;
      font-size: 36px;
    }
    nav {
      background-color: #005588;
      padding: 10px 0;
      text-align: center;
    }
    nav a {
      color: white;
      text-decoration: none;
      padding: 10px 20px;
      margin: 0 5px;
      border-radius: 5px;
    }
    nav a:hover {
      background-color: #003366;
    }
    .container {
      margin: 20px auto;
      max-width: 800px;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .containerr {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 200px;
      background-color: #e0e0e0;
      margin-top: 20px;
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
    }
    img {
      max-width: 50%;
      height: auto;
    }
    form {
      max-width: 400px;
      margin: 0 auto;
    }
    input[type="text"], input[type="password"], input[type="date"], input[type="tel"] {
      width: 100%;
      padding: 10px;
      margin: 5px 0;
      box-sizing: border-box;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
      {
         #image123 
  width: 70%; /* Увеличиваем ширину изображения */
  transform: translateY(40px) translateX(-20px); /* Сдвигаем изображение вниз и немного влево */
          width: 100%; /* Растягиваем изображение по ширине блока */
  height: auto; /* Автоматически рассчитываем высоту, чтобы сохранить пропорции */
} 
      #hospital-photo {
      width: 100%;
      height: auto;
    }
      }
  </style>
</head>
<body>
  <header>
    <h1>Пациенты больницы</h1>
  </header>

  <?php
    $host = "127.0.0.1";
    $username = "root";
    $database = "examen";
    $pass = "";
    $conn = new mysqli($host, $username, $pass, $database);
    // Проверка соединения
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    // Выполнение запроса
    $sql = "SELECT id, name, message FROM blog";
    $result = mysqli_query($conn, $sql);
    
    
    // Закрытие соединения
    mysqli_close($conn);
  ?>

  <!-- Главная страница -->
  <div id="main" class="container">
    <h2>Главная страница</h2>
    <p>Наша больница - это современное медицинское учреждение, стремящееся предоставить качественную и доступную медицинскую помощь для всех пациентов. Мы гордимся нашим опытным и высококвалифицированным персоналом, который работает для вашего благополучия.

В нашей больнице вы найдете широкий спектр медицинских услуг, включая консультации врачей-специалистов, диагностику, лечение различных заболеваний, а также реабилитационные программы.

Мы оснастили нашу клинику современным оборудованием и используем самые передовые методики лечения, чтобы обеспечить нашим пациентам максимально эффективное и безопасное лечение.

Наш приоритет - ваше здоровье и комфорт. Мы стремимся создать дружелюбную и поддерживающую атмосферу, чтобы вы чувствовали себя у нас как дома.

Благодарим вас за выбор нашей больницы "Здоровье". Мы всегда готовы помочь вам и вашим близким в достижении оптимального здоровья и благополучия.</p>
 <img id="hospital-photo" src="hospital_photo.jpg" alt="Фотография больницы">
    <!-- Блок с картинкой -->
   
    </div>

    <!-- Блок с описанием -->
    <div class="containerr">
      <p>Наша больница предоставляет высококачественные медицинские услуги с использованием современного оборудования и опытных специалистов. Мы гарантируем комфортное и безопасное лечение для всех пациентов.</p>
    </div>
  </div>

  <nav>
    <a href="#" onclick="showPage('main')">Главная страница</a>
    <a href="#">Запись на прием</a>
    <a href="#">Вакансии</a>
    <a href="index.php">Выйти</a>
  </nav>

  <script>
    function showPage(pageId) {
      document.getElementById('main').style.display = 'none';
      document.getElementById(pageId).style.display = 'block';
    }
  </script>
</body>
</html>