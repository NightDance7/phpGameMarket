
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/Style.css">
    <title>Главная</title>
    <nav class="navbar navbar-expand-lg fixed-top">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="Index.php">Главная <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About.html">О нас</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Личный кабинет
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="Lk.php">Перейти в личный кабинет</a>
                <a class="dropdown-item" href="Auto.php">Авторизация </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Выход из ЛК</a>
              </div>
            </li>
            
          </ul>
          <form class="form-inline my-2 my-lg-0" name="search" method="POST" action="Games/search.php">
            <input class="form-control mr-sm-2" type="search" name="query"
            placeholder="Введите название игры" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск
              
            </button>
          </form>
        </div>
      </nav>
      
      
</head>
<body class="body">
  
    <header class="header">
        <div class="overlay">
        <div class="container">
            <div class="description">
                <h3><font color="#ec4f11">
                
<?php
  $data = [
    'authors' => [
        301 => [
            'id' => 301,
            'name' => 'Александр Сергеевич Пушкин',
            'email' => 'alexander_pushkin@example.com',
            'birthYear' => 1799,
        ],
        10 => [
            'id' => 10,
            'name' => 'Николай Васильевич Гоголь',
            'email' => 'nikolay_gogol@example.com',
            'birthYear' => 1809,
        ],
        17 => [
            'id' => 17,
            'name' => 'Михаил Юрьевич Лермонтов',
            'email' => 'mikhail_lermontov@example.com',
            'birthYear' => 1814,
        ],
    ],
    'books' => [
        [
            'title' => 'Евгений Онегин',
            'publishedAt' => '1823—1832',
            'author' => 301,
        ],
        [
            'title' => 'Полтава',
            'publishedAt' => '1828—1829',
            'author' => 301,
        ],
        [
            'title' => 'Мёртвые души',
            'publishedAt' => '1842',
            'author' => 10,
        ],
        [
            'title' => 'Сказка о рыбаке и рыбке',
            'publishedAt' => '1833',
            'author' => 301,

        ],
    ],
];
echo '<b> === Авторы ===</b><br>';
array_map(function($e){
    echo sprintf('%s – %s – %s',$e['name'], $e['email'], $e['birthYear']) . '<br>';
}, $data['authors']);

echo '<b> === Книги ===</b><br>';
array_map(function($e){
    echo sprintf('%s – %s – %s',$e['title'],$e['author'], $e['publishedAt']) . '<br>';
}, $data['books']);
?>



                 <br> У нас вы можете купить и продать любые игровые товары <br> и услуги по таким проектам,как:
                 <p>
                    <a href="Portfolio.html">☽ Black Desert ☾</a><br><a href="Portfolio.html">✧Dota2</a><br><a href="Games/Lineage2.php">✧Lineage2</a><br>
                    <a href="Portfolio.html">✧Path of Exile</a><br>
                    ✧а также в еще паре десятков онлайн-проектах
                </p>
                 <button class="btn btn-outline-secondary"><a href="Portfolio.html"</a>Посмотреть услуги</button> 
                </font></h3>
               </div>  
               <div class="description2">
                <h3><font color="rgba(50, 15, 204, 0.479)" size="30px">
                 Выберите игру: <br><br>
                 <p>
                  <a class="Sa" href="Portfolio.html">ArcheAge</a><br> 
                   <a class="Sa" href="Games/Bless.php"> Bless online</a><br><br>
                    
                    <a class="Sa" href="Portfolio.html">Crash&Bash</a><br> 
                     <a class="Sa" href="Portfolio.html">   The Elder Scroll Online</a><br><br>  
                </p>
                 
                </font></h3>
               </div>              
              </div>
              
        </div>
    </header>
    <footer class="page-footer fixed-bottom">
        <section class="info">
            <img width="70" height="70" src="img/footer.jpg">
            Обитель Игр, ObitelProject@mail.ru </section> 
            <section class="copyright">
            © 2020 <br>  Обитель игр  </section>
            </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.js">  </script>
</body>
</html>