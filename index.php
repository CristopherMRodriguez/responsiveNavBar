<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">     
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Test</title>
  </head>
  <body>
    <header class="header">
      <nav class="nav">
        <ul class="unordered-list">
          <li class="unordered-list__item drop">TEAMS
            <div class="dropdown">
              <ul class="mens-ul mens-womens-ul">
                <li class="mens-womens-ul__li-header">MEN'S SPORTS</li>
                <li class="mens-ul__li">BASEBALL</li>
                <li class="mens-ul__li">BASKETBALL</li>
                <li class="mens-ul__li">CROSS COUNTRY</li>
              </ul>
              <ul class="womens-ul mens-womens-ul">
                <li class="mens-womens-ul__li-header">WOMEN'S SPORTS</li>
                <li class="mens-ul__li">BASKETBALL</li>
                <li class="mens-ul__li">CROSS COUNTRY</li>
              </ul>
            </div>
          </li>
          <li class="unordered-list__item drop">TICKETS
            <div class="dropdown">
              <ul class="mens-ul mens-womens-ul">
                <li class="mens-womens-ul__li-header">MEN'S SPORTS</li>
                <li class="mens-ul__li">BASEBALL</li>
                <li class="mens-ul__li">BASKETBALL</li>
                <li class="mens-ul__li">CROSS COUNTRY</li>
              </ul>
              <ul class="womens-ul mens-womens-ul">
                <li class="mens-womens-ul__li-header">WOMEN'S SPORTS</li>
                <li class="mens-ul__li">BASKETBALL</li>
                <li class="mens-ul__li">CROSS COUNTRY</li>
              </ul>
            </div>
          </li>
          <li class="unordered-list__item drop">PATRIOT CLUB
            <div class="dropdown">
              <ul class="mens-ul mens-womens-ul">
                <li class="mens-womens-ul__li-header">MEN'S SPORTS</li>
                <li class="mens-ul__li">BASEBALL</li>
                <li class="mens-ul__li">BASKETBALL</li>
                <li class="mens-ul__li">CROSS COUNTRY</li>
              </ul>
              <ul class="womens-ul mens-womens-ul">
                <li class="mens-womens-ul__li-header">WOMEN'S SPORTS</li>
                <li class="mens-ul__li">BASKETBALL</li>
                <li class="mens-ul__li">CROSS COUNTRY</li>
              </ul>
            </div>
          </li>
          <li class="unordered-list__item drop">INSIDE ATHLETICS
            <div class="dropdown">
              <ul class="mens-ul mens-womens-ul">
                <li class="mens-womens-ul__li-header">MEN'S SPORTS</li>
                <li class="mens-ul__li">BASEBALL</li>
                <li class="mens-ul__li">BASKETBALL</li>
                <li class="mens-ul__li">CROSS COUNTRY</li>
              </ul>
              <ul class="womens-ul mens-womens-ul">
                <li class="mens-womens-ul__li-header">WOMEN'S SPORTS</li>
                <li class="mens-ul__li">BASKETBALL</li>
                <li class="mens-ul__li">CROSS COUNTRY</li>
              </ul>
            </div>
          </li>
          <li class="unordered-list__item drop">FAN CENTRAL
            <div class="dropdown">
              <ul class="mens-ul mens-womens-ul">
                <li class="mens-womens-ul__li-header">MEN'S SPORTS</li>
                <li class="mens-ul__li">BASEBALL</li>
                <li class="mens-ul__li">BASKETBALL</li>
                <li class="mens-ul__li">CROSS COUNTRY</li>
              </ul>
              <ul class="womens-ul mens-womens-ul">
                <li class="mens-womens-ul__li-header">WOMEN'S SPORTS</li>
                <li class="mens-ul__li">BASKETBALL</li>
                <li class="mens-ul__li">CROSS COUNTRY</li>
              </ul>
            </div>
          </li>
        </ul>
        <button class="nav-bar-hamburger" aria-label="Dropdown Menu" onclick="navBarOpen()"><img src="mobile-navigation-2.png" /></button>
        <button class="nav-bar-close" id="bro" aria-label="Close Mobile Menu" onclick="navBarClose()"><img src="football.png" /></button>
        <ul class="mobile-nav-ul">
          <li onclick="teamsButton()" class="mobile-nav__item">TEAMS</li>
              <ul class="mobile-mens-ul mobile-mens-womens-ul">
                <li class="mobile-mens-womens-ul__li-header mobile-mens-womens-ul__li">MEN'S SPORTS</li>
                <li class="mobile-mens-ul__li mobile-mens-womens-ul__li">BASEBALL</li>
                <li class="mobile-mens-ul__li mobile-mens-womens-ul__li">BASKETBALL</li>
                <li class="mobile-mens-ul__li mobile-mens-womens-ul__li">CROSS COUNTRY</li>
              </ul>
              <ul class="mobile-womens-ul mobile-mens-womens-ul">
                <li class="mobile-mens-womens-ul__li-header mobile-mens-womens-ul__li">WOMEN'S SPORTS</li>
                <li class="mobile-mens-ul__li mobile-mens-womens-ul__li">BASKETBALL</li>
                <li class="mobile-mens-ul__li mobile-mens-womens-ul__li">CROSS COUNTRY</li>
              </ul>
          <li class="mobile-nav__item">TICKETS</li>
          <li class="mobile-nav__item">PATRIOT CLUB</li>
          <li class="mobile-nav__item">INSIDE ATHLETICS</li>
          <li class="mobile-nav__item">FAN CENTRAL</li>
        </ul>
      </nav>
    </header>
    <script>
      function navBarOpen() {
        document.querySelector(".mobile-nav-ul").style.right = "0px";
        document.querySelector(".nav-bar-hamburger").style.display = "none";
        document.querySelector(".nav-bar-close").style.display = "block";
      }     
      function navBarClose() {
        document.querySelector(".mobile-nav-ul").style.right = "-200px";
        document.querySelector(".nav-bar-close").style.display = "none";
        document.querySelector(".nav-bar-hamburger").style.display = "block";
        document.querySelector(".mobile-mens-ul").style.display = "none";
        document.querySelector(".mobile-womens-ul").style.display = "none";
      }
      function teamsButton() {
        let toggle = document.querySelector(".mobile-mens-womens-ul").style.display;
        if (toggle != "block") {
          document.querySelector(".mobile-mens-ul").style.display = "block";
          document.querySelector(".mobile-womens-ul").style.display = "block";
        } else {
          document.querySelector(".mobile-mens-ul").style.display = "none";
          document.querySelector(".mobile-womens-ul").style.display = "none";
        }
      }
    </script>
  </body>
</html>
