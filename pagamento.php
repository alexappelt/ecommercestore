<?php
require'conexao.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ecommerce</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
	


<link rel="stylesheet" type="text/css" href="estilo.css">
<link rel="stylesheet" type="text/css" href="teste.css">


</head>
<body>





  
<center style="margin-top: 90px;">

<h3>Pagamento</h3>

<?php 
$codigo_cart = $_GET['codigo'];
echo '<h1 name="car">Carrinho: '.$codigo_cart.'</h1>';
 ?>





</div>


<div>
  <div class="modal-wrapper">
    <div class="card-image">
      <div class="card-front">
        <img class="card-background" src="https://raw.githubusercontent.com/MoosaSaadat/card-checkout/master/card.png" alt="Credit Card">
        <div class="card-logo">
          <div class="logo-circle left"></div>
          <div class="logo-circle right"></div>
        </div>
        <span class="card-number">XXXX XXXX XXXX XXXX</span>
        <div class="card-info left">
          <span class="card-holder-title">CARDHOLDER NAME</span>
          <span class="card-holder-name">NAME SURNAME</span>
        </div>
        <div class="card-info right">
          <span class="valid-thru-title">VALID THRU</span>
          <span class="valid-thru-date">MM/YY</span>
        </div>
      </div>
      <div class="card-rear">
        <img class="card-background" src="https://raw.githubusercontent.com/MoosaSaadat/card-checkout/master/card.png" alt="Credit Card">
        <div class="card-logo">
          <div class="logo-circle left"></div>
          <div class="logo-circle right"></div>
        </div>
        <div class="black-bar"></div>
        <div class="card-info">
          <span class="white-bar"></span>
          <span class="security-code">123</span>
        </div>
      </div>
      <span class="active-border"></span>
    </div>
    <div class="card-form">
        <div class="form-wrapper">
          <form action="delcart.php?cart=<?php echo $codigo_cart ?>" method="post" enctype="multipart/form-data">
            <div class="form-input">
              <i class="far fa-credit-card"></i>
              <input type="text" name="card-number" id="#number" placeholder="Numero do cartão" onfocus="flipCard(event);" onblur="deactivateBorder(event)" onkeyup="traceNumberInput(event)" value="" style="width: 300px;" required="true">
            </div>
            <div class="form-input">
              <i class="fas fa-user"></i>
              <input type="text" name="card-holder-name" id="#name" placeholder="Nome do cartão" onfocus="flipCard(event);" onblur="deactivateBorder(event)" onkeyup="traceNameInput(event)" value="" style="width: 300px;" required="true">
            </div>
            <div class="form-input">
              <i class="fas fa-calendar-day"></i>
              <input type="text" name="valid-thru-date" id="#expiry" placeholder="Vencimento" onfocus="flipCard(event);" onblur="deactivateBorder(event)" onkeyup="traceDateInput(event)" value="" style="width: 300px;" required="true">
            </div>
            <div class="form-input">
              <i class="fas fa-lock"></i>
              <input type="number" name="security-code" id="#code" placeholder="CVC" onfocus="flipCard(event);" onblur="deactivateBorder(event)" onkeyup="traceCodeInput(event)" value="" style="width: 300px;" required="true">
            </div>
            <div class="form-input btn">
              <i class="fas fa-check"></i>
              <button type="submit">Finalizar Pedido</button>
            </div>
          </form>
        </div>
    </div>
  </div>
</div>


<div>
  <button class="btn btn-danger"><a href="index.php">Voltar ao inicio</a></button>
</div>
<script type="text/javascript">    var isFront = true;
    var cardContainer = document.querySelector(".card-image");
    var creditCard = document.querySelector(".card-background");
    var cardFront = document.querySelector(".card-front");
    var cardRear = document.querySelector(".card-rear");
    var cardLogo = document.querySelector(".card-logo");

    function flipCard(e) {
      if ((isFront && e.target.name == "security-code") || (!isFront && e.target.name != "security-code")) {
        setTimeout(() => {activateBorder(e);}, 500);
        if (isFront) {
          cardFront.style.transform = "perspective( 600px ) rotateY( -180deg )";
          cardRear.style.transform = "perspective( 600px ) rotateY( 0deg )";
        }
        else {
          cardFront.style.transform = "perspective( 600px ) rotateY( 0deg )";
          cardRear.style.transform = "perspective( 600px ) rotateY( 180deg )";
        }
        isFront = !isFront;
      }
      else activateBorder(e);
    }
    function activateBorder(e) {
      let borderBox = document.querySelector(".active-border");
      let focusedInput = document.querySelector(`.${e.target.name}`);
      let newRect = focusedInput.getBoundingClientRect();
      let removePadding = 4; //PADDING+BORDER OF .active-border

      borderBox.style.display = "inline-block";
      borderBox.style.opacity = "1";
      borderBox.style.height = newRect.height + "px";
      borderBox.style.width = newRect.width + "px";
      borderBox.style.top = (newRect.top - removePadding) + "px";
      borderBox.style.left = (newRect.left - removePadding) + "px";
    }
    function deactivateBorder(e) {
      let borderBox = document.querySelector(".active-border");
      borderBox.style.opacity = "0";
    }
    function traceNumberInput(e) {
      let focusedInput = document.querySelector(`.${e.target.name}`);
      let newString = "";
      let spaceCounter = [4, 9, 14];
      let initString = "XXXX XXXX XXXX XXXX";
      if (spaceCounter.some((val) => e.target.value.length == val))
        e.target.value += " ";
      if (e.target.value.length <= 19) {
        let userInput = e.target.value;
        for (let i = 0; i < 19; i++) {
          if (i < userInput.length) {
            newString += userInput[i];
          }
          else {
            newString += initString[i];
          }
        }
        focusedInput.innerHTML = newString;
      }
      else {
        e.target.value = e.target.value.substr(0, 19);
      }
    }
    function traceNameInput(e) {
      if (e.target.value.length > 11) activateBorder(e);

      let focusedInput = document.querySelector(`.${e.target.name}`);
      if (e.target.value == "") focusedInput.innerHTML = "NAME SURNAME";
      else focusedInput.innerHTML = e.target.value.toUpperCase();
    }
    function traceDateInput(e) {
      let focusedInput = document.querySelector(`.${e.target.name}`);
      let newString = "";
      let initString = "MM/YY";
      if (e.target.value.length == 2) e.target.value = e.target.value + "/";
      if (e.target.value.length < 6) {
        for (let i = 0; i < 5; i++) {
          if (i < e.target.value.length)
            newString += e.target.value[i];
          else
            newString += initString[i];
        }
        focusedInput.innerHTML = newString;
      }
      else {
        e.target.value = e.target.value.substr(0, 5);
      }
    }
    function traceCodeInput(e) {
      let focusedInput = document.querySelector(`.${e.target.name}`);
      if (e.target.value.length <= 3) {
        if (e.target.value == "") focusedInput.innerHTML = "123";
        else focusedInput.innerHTML = e.target.value;
      }
      else {
        e.target.value = e.target.value.substr(0, 3);
      }
    }
    // window.addEventListener("load", getImageSize);
    // window.addEventListener("resize", getImageSize);
    function getImageSize () {
      var img = document.querySelector('.card-background'); 
      cardContainer.style.height = img.clientHeight + "px";
      cardContainer.style.width = img.clientWidth + "px";
    }
</script>

</body>
</html>

