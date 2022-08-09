<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Zakład stolarski</title>
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/116f0a54eb.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav>
            <a href="index.php">Strona główna</a>
            <a href="#contact">Kontakt</a>
            <a href="realizacje.php" class="res">Realizacje</a>
        </nav>
        <div class="wrap">
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="imgs/wood2.png"/></div>
            <div class="swiper-slide"><img src="imgs/wood1.jpg"/></div>
            <div class="swiper-slide"><img src="imgs/wood3.png"/></div>
          </div>
        </div>
        </div>
        <main>
          <section class="about">
            <div class="h1-wrap"><h1>O Nas</h1></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor sed viverra ipsum nunc aliquet bibendum. Sit amet nisl purus in mollis nunc sed id semper. Vivamus at augue eget arcu dictum varius duis. Lectus nulla at volutpat diam ut venenatis tellus in metus. Et egestas quis ipsum suspendisse ultrices gravida dictum fusce ut. Maecenas sed enim ut sem viverra aliquet eget sit. Tortor posuere ac ut consequat. Est ante in nibh mauris cursus mattis molestie a iaculis. Adipiscing elit pellentesque habitant morbi tristique senectus. Lorem ipsum dolor sit amet consectetur. Faucibus ornare suspendisse sed nisi lacus sed. Vivamus arcu felis bibendum ut tristique et. At quis risus sed vulputate odio ut enim blandit. Id ornare arcu odio ut sem nulla.</p>

            <p>Vulputate mi sit amet mauris. In hendrerit gravida rutrum quisque non tellus. Tincidunt tortor aliquam nulla facilisi cras fermentum odio. Mauris augue neque gravida in fermentum et sollicitudin ac. Semper feugiat nibh sed pulvinar. Posuere urna nec tincidunt praesent. Lorem ipsum dolor sit amet consectetur. Enim lobortis scelerisque fermentum dui faucibus in ornare. Leo vel fringilla est ullamcorper eget nulla facilisi etiam dignissim. Sit amet consectetur adipiscing elit duis tristique sollicitudin nibh. Leo vel fringilla est ullamcorper eget nulla facilisi. Tempus egestas sed sed risus pretium quam vulputate. Eget nullam non nisi est sit.</p>
          </section>
        </main>
        <a name="contact"><section class="contact-wrap">
            <h2>Skontaktuj się z nami</h2>
            <div class="contact-flex">
          <div class="contact left">
            <span id="phone"><i class="fas fa-phone-alt"></i>   +48 999 999 999</span>
            <span id="mail"><i class="fas fa-envelope"></i>   mail@domain.pl</span>
            <span id="place"><i class="fas fa-map-marker-alt"></i>    Radziwie 2</span>
          </div>
          <div class="contact right">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1436.6937170261056!2d20.57444621799991!3d52.72820087127304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471c26cfc3e9f3d5%3A0x60df1ebeffa63505!2sRadziwie%202%2C%2006-456%20Radziwie!5e0!3m2!1spl!2spl!4v1633891846360!5m2!1spl!2spl" loading="lazy"></iframe>
          </div>
          </div>
        </section>
        </a>
        <footer>
            <p>© Zakład stolarski</p>
        </footer>

        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <script>
        var swiper = new Swiper('.swiper', {
        speed:1000,
		    direction: 'horizontal',
        autoplay: {
        delay: 1800,
        disableOnInteraction: false,
        pauseOnMouseEnter: true
        },
        loop: true
     });
      </script>
    </body>
</html>