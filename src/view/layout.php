<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title> Maker Faire </title>
  <?php echo $css;?>
</head>
<body >
<div style="display: flex; align-items: center; justify-content: space-between; background: black; color: white; position: fixed; top: 0; left: 0; width: 100%; padding: 0.5em; font-size: 12px; font-family: sans-serif;"><span>This is a fictional project, a student assignment for the Bachelor's degree <a href="https://devine.be" style="color: white;">Devine</a></span><button style="border: 0; padding: 0; background: black; color: white; margin: 0 0.5em; padding: 0 0.5em; cursor: pointer; font-size: 12px; " onclick="(function(btn){btn.parentNode.style.display='none'; localStorage.setItem('hide-devine-student-project-banner', '1'); return false;})(this);return false;">x</button>
  <script>
    if (localStorage.getItem('hide-devine-student-project-banner') === '1') document.currentScript.parentNode.style.display = 'none';
    </script>
</div>
  <header>
    <h2 class="visually-hidden">Saxofoon Mini-Site.</h2>

    <!-- navigatie -->
    <nav class= "navigatie">
        <li class="navigatie__logo"><a href="index.php"> <img  src="../assets/img/logo.svg" alt="logo van de Maker Faire Gent" width="82" height="98"></a></li>
          <ul class= "navigatie__tutorial">
            <li><a class="navigatie__tutorial--item <?php if ($_GET['page'] === 'home') echo ' active' ?>" href="index.php">Home</a></li>
            <li><a class="navigatie__tutorial--item <?php if ($_GET['page'] === 'tutorial') echo ' active' ?>" href="index.php?page=tutorial">DIY</a></li>
            <li><a class="navigatie__tutorial--item <?php if ($_GET['page'] === 'shop') echo ' active' ?>" href="index.php?page=shop">Materiaal Kit</a></li>
            <li><a class="navigatie__tutorial--kar" href="index.php?page=winkelkar"><img src="../assets/img/winkelwagentje.svg" alt="winkelkarretje"></a></li>
          </ul>
    </nav>

    <!-- navigatie -->
  </header>

  <main class="container">
    <?php echo $content;?>
  </main>

    <!-- footer -->
  <footer class="footer">  <!-- grid van 3 rijen maken -->
      <img class="footer__logo" src="../assets/img/logo.svg" alt="Logo van de maker fair">

      <div class="footer__list footer__socialMedia">
      <a href="https://www.facebook.com"><img class="footer__socialMedia--item" src="../assets/img/facebook.svg" alt="facebook" width="37" height="36"></a>
        <a href="https://www.instagram.com"><img class="footer__socialMedia--item" src="../assets/img/instagram.svg" alt="instagram" width="35" height="35"></a>
        <a href="https://www.twitter.com"><img class="footer__socialMedia--item" src="../assets/img/twitter.svg" alt="twitter" width="40" height="33"></a>
        <a href="https://www.youtube.com"><img class="footer__socialMedia--item" src="../assets/img/youtube.svg" alt="youtube" width="39" height="27"></a>
      </div>

      <div>
        <p class="visually-hidden">grid Jump</p>
      </div>

      <p class="footer__list--item">Sara Bluekens</p>

    <div class="footer__list footer__cookies">
      <p class="footer__list--item">FAQ</p>
      <p class="footer__list--item">Contact</p>
      <p class="footer__list--item">Voorwaarden</p>
      <p class="footer__list--item">Cookies</p>
    </div>

    <p class="footer__list--item">&copy;Devine 2021</p>

  </footer>
  <!-- footer -->
  <?php echo $js; ?>
</body>
</html>
