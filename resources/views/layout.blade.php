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
            @yield('nav')

        </nav>
    </header>
</div>



@yield('content')



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