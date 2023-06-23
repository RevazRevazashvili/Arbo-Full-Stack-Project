<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../Images/Picture1.png" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <title>წმ. გიორგის ტაძარი</title>
</head>
<body>
    <header>
        <div class="header">
            <div class="headerPhoto">
                <a href="index.html">
                    <img src="../Images/Picture1.png" alt="" width="150px" height="150px">
                </a>
            </div>

            <h1>არბოს წმინდა გიორგის სახელობის ტაძარი</h1>
        </div>

    </header>
    <main>
        <nav class="navigation">
            <ul>
                <li><a href="../PHP/index.php">მთავარი</a></li>
                <li><a href="../PHP/about.php">ტაძრის შესახებ</a></li>
                <li><a href="../PHP/diocise.php">ეპარქია</a></li>
                <li><a href="../PHP/priest.php">ტაძრის წინამძღვარი</a></li>
                <li><a href="../PHP/arbo.php">არბო</a></li>
                <li><a href="../PHP/galery.php">გალერეა</a></li>
                <li><a href="http://orthodox.ge/saeklesio_calendari" target="_blank">საეკლესიო კალენდარი</a></li>
            </ul>
        </nav>
        <div class="dasaflex">
            <div class="reading" style="height: 1000px;">
                    <h2>დღის საკითხავი წმინდა წერილი</h2>
                <div class="readingPhoto">
                    <a href="#"><img src="../Images/საკითხავი.jpg" alt="" width="270px" height="350px"></a>
                </div>
            </div>
            <div class="indexMainInfo">mtavari informacia</div>


            <div class="wrapcal">
                <div class="wrapper">
                    <header>
                      <p class="current-date"></p>
                      <div class="icons">
                        <span id="prev" class="material-symbols-rounded">chevron_left</span>
                        <span id="next" class="material-symbols-rounded">chevron_right</span>
                      </div>
                    </header>
                    <div class="calendar">
                      <ul class="weeks">
                        <li>კვ</li>
                        <li>ორშ</li>
                        <li>სამშ</li>
                        <li>ოთხ</li>
                        <li>ხუთ</li>
                        <li>პარ</li>
                        <li>შაბ</li>
                      </ul>
                      <ul class="days"></ul>
                    </div>
                  </div>
            </div>
            
        </div>
    </main>
    <footer>
        <div class="footer">
            <div class="col-md-4 copyright"><p style="font-weight: bold;">&copy; 2023 არბოს წმინდა გიორგის სახელობის ტაძარი.</p>
            </div>
            <div class="rame">
                <a href="index.html">
                    <img src="../Images/Picture1.png" alt="" width="150px" height="150px">
                </a>
            </div>
            <div class="social">
                <div class="instagram">
                    <a href="https://www.instagram.com/p/CsjOjoes1hX/?igshid=MzRlODBiNWFlZA%3D%3D&fbclid=IwAR1hE7euwD-vjtVKOUQqkZQS9KHsFmZs5nnTF7yNHHSClAC9aLUElgSvgl8" target="_blank">
                        <img src="../Images/instagram.png" alt="Instagram" width="30" height="30"></a>
                </div>
                <div class="youtube">
                    <a href="https://www.youtube.com/@arbossamrevlo" target="_blank">
                        <img src="../Images/youtube.png" alt="Youtube" width="30" height="30"><a>
                </div>
                <div class="facebook">
                    <a href="https://www.facebook.com/arboswmgiorgissaxelobistadzari" target="_blank">
                        <img src="../Images/facebook.png" alt="Facebook" width="30" height="30"><a>
                </div>                
            </div>
        </div>
        <div class="contact">
            <div class="email">
                <a href="mailto:arboswmindagiorgissamrevlo@gmail.com">
                <img src="../Images/email.png" alt="გამოაგზავნეთ მეილი" width="30" height="30">
                </a>
                <p>arboswmindagiorgissamrevlo@gmail.com</p>
            </div>
            <div class="call">
                <a href="tel:598 50 28 53">
                    <img src="../Images/phone-call.png" alt="დაგვირეკეთ" width="30" height="30">
                </a>
                    <p>+995 598 50 28 53</p>
            </div>
        </div>
    </footer>
    <script src="../JS/calendar.js"></script>
</body>
</html>