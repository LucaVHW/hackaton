<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>

    <div class="panel">
      <h1>Spoed<span id="nick">nick</span></h1>
    </div>
    <div class="panel2">
      <div class="info">
        <h3 class="demo">Welkom bij Spoednick</h3>
        <br>
        <p class="demo">Zit u met een kwaaltje? Weet u niet of u naar de dokter moet? Spoednick is een chatbot gemaakt om uw leven gemakkelijker te maken!</p>
        <br>
        <p>Start uw gesprek met Spoednick door uw vraag te stellen in het invoervak.</p>
      </div>
      <div class="chatbot">
        <div class="chat">
          <p id="hello"><?php echo $_POST["chat"]?></p>
          <p id="hi"><?php
          $a = $_POST["chat"];
          $b = "hallo";
          $c = "Hallo";
          if ($a == $b) {
            echo "Hallo! Hoe kan ik helpen?";
          } elseif ($a == $c) {
            echo "Hallo! Hoe kan ik helpen?";
          }
           ?></p>
        </div>
        <form action="" method="post">
          <input type="text" name="chat" value="">
        </form>
          <div class="icon">
            <i class="fas fa-paper-plane"></i>
          </div>
      </div>
    </div>
    <div class="panel3">

    </div>

  </body>
</html>
