<article class="Bestellen">

  <h2 class="bestellen__info--title subTitle">Bestelling plaatsen</h2>
  <p class="bestellen__info--text overzicht__title " > We hebben enkele gegevens nodig om uw bestelling correct te kunnen verzenden.</p>

  <form class="cart" id="cartform" method="post" action="index.php?page=winkelkar">
    <input type="hidden" name="action" value="insertOrder" />


    <div class="cart__data--item">
      <label  class="cart__data--label" for="naam" >Naam:</label>
      <input  class="cart__data--field" type="text" id="naam" name="naam" value="<?php
      if (!empty($_POST['naam'])) {
        echo $_POST['naam'];
      }
      ?>" required>
    </div>
    <div class="cart__data--item">
      <label class="cart__data--label" for="voornaam">Voornaam:</label>
      <input  class="cart__data--field"  type="text" id="voornaam" name="voornaam" value="<?php
      if (!empty($_POST['voornaam'])) {
        echo $_POST['voornaam'];
      }
      ?>" required>
    </div>
    <div class="cart__data--item">
      <label class="cart__data--label" for="straat">Straat:</label>
      <input  class="cart__data--field"  type="text" id="straat" name="straat" value="<?php
      if (!empty($_POST['straat'])) {
        echo $_POST['straat'];
      }
      ?>"nrequired>
    </div>
    <div class="cart__data--item">
      <label class="cart__data--label" for="huisnummer">Huisnummer:</label>
      <input class="cart__data--field cart__input--number"  type="tel" id="huisnummer" name="huisnummer" min="1" value="<?php
      if (!empty($_POST['nummer'])) {
        echo $_POST['nummer'];
      }
      ?>" maxlength="4" required>
    </div>

    <div class="cart__data--item">
      <label class="cart__data--label" for="aantal">Aantal:</label>
      <input class="cart__data--field cart__input--number"  type="number" id="aantal" name="aantal" step="1"  min="0" value="<?php
      if (!empty($_POST['aantal'])) {
        echo $_POST['aantal'];
      }
      ?>" required>
     <p><span class="error error--text"><?php if (!empty($errors['text'])) echo $errors['text'];?></span></p>
    </div>

    <div>
      <button class="cart__data--submit" type= "submit" onclick="window.location.href = 'index.php?page=bedankt';"> Bestelling Plaatsen</button>
    </div>
</form>

<img class="cart__data--img" src="../assets/img/box.png" alt="de doos die ze bestellen" width="585" heigh="431">

</article>
