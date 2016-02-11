<!DOCTYPE html>
<html>
<head>
    <title>Pranay Aryal/Web Developer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/application.css">
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>
<body>
<div class="grid_">
    <header class="grid__col--12 panel--padded--centered" role="banner">
        <h1>Pranay Aryal</h1>
        <h2>Front-end and Back-end Web Developer</h2>
        <nav class="navbar" role="navigation">
          <span id="toggle" class="icn--nav-toggle is-displayed-mobile">
            <b class="srt">Toggle</b>
          </span>
            <ul class="nav is-collapsed-mobile">
                <li class="nav__item--current"><a href="#">Portfolio</a></li>
                <li class="nav__item"><a href="about.html">About</a></li>
                <li class="nav__item"><a href="contact.html">Contact</a></li>

            </ul>
        </nav>
    </header>
</div>




<div class="grid">

    <p>Hi I am a designer and a developer and I love making interactve web applications</p>
    <p>I love creating visualizations</p>

</div>
<div class="grid">
    <div class="grid__col--6">
        <a href="http://pranayaryal.github.io/datavis" target="_blank">
            <img class="img--wrap" src="img/hospitalCharge.png" alt="sample image">
            <p class="para">Hospital Charge Data(Interactive Visualization)(using d3.js)</p>
        </a>
    </div>
    <div class="grid__col--6">
        <a href="http://pranayaryal.github.io" target="_blank">
            <img class="img--wrap" src="img/mortd3.png" alt="sample image">
            <p class="para">Interactive Visualization using d3.js library</p>
        </a>
    </div>


</div>
<div class="grid">
    <div class="grid__col--6">
        <a href="http://pranayaryal.github.io/drawing" target="_blank">
            <img class="img--wrap" src="img/pic.png" alt="Avatar">
            <p class="para">A Simple Sketching App (jquery)</p>
        </a>
    </div>

    <div class="grid__col--6">
        <a href="http://pranayaryal.github.io/HTMLforms" target="_blank">
            <img class="img--wrap" src="img/form.png" alt="sample image">
            <p class="para">A Simple HTML form</p>
        </a>
    </div>
</div>


<div class="grid">
    <div class="grid__col--4">
        <img class="img--wrap" src="img/faces.jpg" alt="Avatar">
        <p class="para">A crayon sketch</p>
    </div>
    <div class="grid__col--4">
        <img class="img--wrap" src="img/ships.jpg" alt="sample image">
        <p class="para">Ship </p>
    </div>
    <div class="grid__col--4">
        <img class="img--wrap" src="img/car.jpg" alt="sample image">
        <p class="para">Animal Car</p>
    </div>
</div>

<div class="grid">
    <div class="grid__col--4">
        <a href="https://github.com/CodeLouisville/wordgame" target="_blank">
            <img class="img--wrap" src="img/code.png" alt="Avatar">
            <p class="para">Contribution to CodeLouisville WordGame Project</p>
        </a>
    </div>
    <div class="grid__col--4">
    </div>
    <div class="grid__col--4">
    </div>
</div>



<h4 class="grid">Skills</h4>

<div class="grid">
    <div class="grid__col--12">
        <a class="btn--info" href="https://github.com/pranayaryal/backend">PHP</a>
        <a class="btn--default" href="index.html">HTML5</a>
        <a class="btn--success" href="index.html" >CSS3</a>
        <a class="btn--error" href="https://github.com/CodeLouisville/wordgame" target="_blank" >JAVASCRIPT</a>
        <a class="btn--warning" href="http://pranayaryal.github.io/flickr" target="_blank">AJAX</a>
        <a class="btn--info" href="http://pranayaryal.github.io/drawing" target="_blank">JQUERY</a>
        <a class="btn--default" href="http://pranayaryal.github.io/bootstrap" target="_blank">BOOTSTRAP3</a>
        <a class="btn--success" href="http://pranayaryal.github.io/modsass" target="_blank">sass framework</a>
        <a class="btn--error" href="http://pranayaryal.github.io/splom" target="_blank">d3.js</a>
        <a class="btn--warning" href="https://rpubs.com/probability" target="_blank">r programming</a>
        <a class="btn--info" href="https://github.com/pranayaryal/Sunshine/blob/master/app/src/main/java/com/example/android/sunshine/app/ForecastFragment.java" target="_blank">Java</a>
        <a class="btn--success" href="https://github.com/pranayaryal/Sunshine/" target="_blank">android development</a>

    </div>
</div>



<div class="grid">
    <footer class="grid__col--12 panel--centered" role="contentinfo">
        <a href="https://twitter.com/pranayaryal">
            <img src="img/twitter-wrap.png" alt="Twitter Logo" class="social-icon">
        </a>
        <a href="https://facebook.com">
            <img src="img/facebook-wrap.png" alt="Facebok logo" class="social-icon">
        </a>
        <p>&copy;2015 Pranay Aryal.</p>

    </footer>
</div>
<script>
    $('#toggle').click(function() {
        $(this).next('.nav').toggleClass("is-collapsed-mobile");
    });
</script>
</body>
</html>