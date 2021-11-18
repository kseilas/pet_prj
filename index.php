<?php 
$counter = isset($_COOKIE['counter']) ? $_COOKIE['counter'] :0;
$counter++;
setcookie("counter", $counter);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
      integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <script src="script.js"></script>
    <title>Кавказ</title>
  </head>
  <html>
  <body>

    <header class="header">
      <div class="container">
        <div class="header__inner">
          <div class="header__logo">DrkPrjct</div>
          <nav class="nav">
            <a class="nav__link active" href="#">About</a>
            <a class="nav__link" href="#">Service</a>
            <a class="nav__link" href="#">Blog</a>
            <a class="nav__link" href="#">Work</a>
            <a class="nav__link" href="#">Contact</a>
          </nav>
        </div>
      </div>
    </header>

    <div class="intro">
      <div class="container">
        <div class="intro__inner">
          <h2 class="intro__suptitle">Salam PodHou</h2>
          <h1 class="intro__title">Welocome to DrkPrjct</h1>
          <a href="#" class="btn">Learn more</a>
        </div>
      </div>
      <div class="slider">
        <div class="container">
          <div class="slider__inner">
            <div class="slider__item active">
              <span class="slider__number">01</span>
              Intro
            </div>
            <div class="slider__item">
              <span class="slider__number">02</span>
              Work
            </div>
            <div class="slider__item">
              <span class="slider__number">03</span>
              About
            </div>
            <div class="slider__item">
              <span class="slider__number">04</span>
              Contact
            </div>
          </div>
        </div>
      </div>
    </div> 

    <section class="section">
      <div class="container">
        <div class="section__header">
          <h3 class="section__suptitle">What we do</h3>
          <h2 class="section__title">Story about us</h2>
          <div class="section__text">
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Accusamus assumenda debitis quam exercitationem, atque incidunt
              eum ducimus minus odit. Cum et, laborum possimus mollitia totam
              natus. Voluptas eligendi eius recusandae!
            </p>
          </div>
        </div>

        <div class="about">
          <div class="about__item">
            <div class="about__image">
              <img src="/assets/images/about/1.jpg" alt="1" />
            </div>
            <div class="about__text">
              <i class="fas fa-user-friends"></i>
              Super team
            </div>
          </div>
          <div class="about__item">
            <div class="about__image">
              <img src="/assets/images/about/2.jpg" alt="2" />
            </div>
            <div class="about__text">
              <i class="fas fa-user-friends"></i>
              Comfortable work zone
            </div>
          </div>
          <div class="about__item">
            <div class="about__image">
              <img src="/assets/images/about/3.jpg" alt="3" />
            </div>
            <div class="about__text">
              <i class="fas fa-user-friends"></i>
              Nice oBe4ku
            </div>
          </div>
        </div>
      </div>
    </section>


    <div class="statistics">
      <div class="container">

          <div class="stat">
            <div class="stat__item">
              <div class="stat__count">
                <?php echo $counter ?> 
              </div>
              <div class="stat__text">
                ReloadPage
              </div>
            </div>
            <div class="stat__item">
              <div class="stat__count">
              <?php
                  date_default_timezone_set('UTC');
                  echo date("m.d.y");
              ?>
              </div>
              <div class="stat__text">
                Date
              </div>
            </div>
            <div class="stat__item">
              <div class="stat__count time">
              <script type="text/javascript">
function startTime()
{
var tm=new Date();
var h=tm.getHours();
var m=tm.getMinutes();
var s=tm.getSeconds();
m=checkTime(m);
s=checkTime(s);
document.getElementById('time').innerHTML=h+":"+m+":"+s;
t=setTimeout('startTime()',500);
}
function checkTime(i)
{
if (i<10)
{
i="0" + i;
}
return i;
}
</script>
              </div>
              <div class="stat__text">
                Time
              </div>
            </div>
            <div class="stat__item">
              <div class="stat__count">
                99
              </div>
              <div class="stat__text">
                CupOfCoffee
              </div>
            </div>
            <div class="stat__item"><div class="stat__count">
              24
            </div>
            <div class="stat__text">
              Members
            </div>
          </div>
          </div>
          
      </div>
    </div>


  </body>
</html>
