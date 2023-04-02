<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font of cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Library - Digital</title>
  <!-- style of css -->
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <header>
    <div class="navbar">
      <div class="container">
        <div class="navigation flex">
          <div class="logo"><a href="">
              <img src="logo.png" alt="">
            </a></div>
          <nav>
            <ul>
              <div class="toggle-close"><i class="fa-solid fa-xmark"></i></div>
              <li><a class="link-active" href="">الرئيسية</a></li>
              <li>
                <a href="">الكتب<i class="fa-solid fa-angle-down"></i></a>
                <ul class="menu">
                  <li>
                    <a href="">كتب قانونية<i class="fa-solid fa-angle-left"></i></a>
                    <ul class="menu2">
                      <li><a href="">QSM</a></li>
                      <li><a href="">محاضرات</a></li>
                      <li><a href="">إمتحانات</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="">كتب عربية <i class="fa-solid fa-angle-left"></i></a>
                    <ul class="menu2">
                      <li><a href="">QSM</a></li>
                      <li><a href="">محاضرات</a></li>
                      <li><a href="">إمتحانات</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="">كتب سياسية <i class="fa-solid fa-angle-left"></i></a>
                    <ul class="menu2">
                      <li><a href="">QSM</a></li>
                      <li><a href="">محاضرات</a></li>
                      <li><a href="">إمتحانات</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="">مسارات</a></li>
              <li><a href="">بحوث</a></li>
              <li><a href="">دكتورة</a></li>
              <li><a href="">إضافة كتاب</a></li>
            </ul>
          </nav>
          <form>
            <input type="text" placeholder="إبحث...">
          </form>
          <div class="toggle-open"><i class="fa-solid fa-bars"></i></div>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="container">
        <div class="books">
          <div class="book">
            
          </div>
        </div>
      </div>
    </div>
  </header>
  <script src="main.js"></script>
</body>

</html>