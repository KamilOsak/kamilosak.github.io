<html lang="pl">
  <head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" style="text/css" href="style.css"/>
    <title>Kamil Osak</title>
  </head>
  <body>
    <div class="header">
      <div class="logo"></div>
      <a class="menu_style" id="main_page" href="index.php?menu=main_page">Strona główna</a>
      <a class="menu_style" id="pages" href="index.php?menu=pages">Strony</a>
      <a class="menu_style" id="author" href="index.php?menu=author">O mnie</a>
      <a class="menu_style" id="contact" href="index.php?menu=contact">Kontakt</a>
    </div>
    <div class="content" id="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris luctus imperdiet justo sed placerat. Aliquam vel mauris quis orci tincidunt pulvinar. Aliquam tristique rhoncus nibh, at viverra est vestibulum vitae. Praesent viverra imperdiet tempor. Quisque lobortis fermentum commodo. Vestibulum varius nunc vitae venenatis scelerisque. Quisque ac euismod libero, et gravida ex. Aliquam vehicula viverra justo, a finibus leo rhoncus ac. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi in erat eu metus pretium accumsan vitae quis augue. Praesent feugiat velit vitae ultrices suscipit. Suspendisse facilisis bibendum bibendum.<br>

    Donec laoreet tortor eros, in vulputate orci vestibulum a. Nullam venenatis lorem ultricies quam mollis vulputate. Vivamus vel tellus pretium, varius mi non, condimentum augue. Nam tincidunt tempor rutrum. Sed rhoncus suscipit congue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin arcu nisl, elementum id diam vitae, posuere dictum nisl. Mauris ut tincidunt sem, eu hendrerit dui. Mauris auctor nunc felis. Praesent aliquam laoreet ante, vitae porttitor enim sagittis ac. Pellentesque a eros sagittis, pulvinar quam sed, faucibus lacus. Sed et tempus eros, nec auctor sem. Phasellus aliquet lectus sed lacus tincidunt facilisis. Proin lobortis tempor interdum. In quis metus lectus.<br>

    Proin vehicula cursus porta. Suspendisse pharetra, orci id rutrum suscipit, urna ipsum sodales justo, eget volutpat odio nulla quis libero. Duis eget lobortis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam lacus nisl, pharetra vitae massa at, lobortis interdum augue. Donec ut maximus eros. Fusce scelerisque aliquam mauris, at imperdiet ex feugiat in. Suspendisse at volutpat dolor. Mauris lectus tortor, blandit sed libero in, laoreet elementum dolor. Morbi at est vel massa mattis sollicitudin. Cras vitae rutrum nisl. Duis ac commodo tellus, non maximus nisi. Etiam et ipsum ac felis iaculis faucibus eu vitae ipsum. Nam mauris urna, maximus ac viverra quis, efficitur ut massa. Sed a augue vitae dui porttitor ultricies nec in sem. Integer nec arcu molestie lacus volutpat malesuada.
    <br>
    Quisque molestie augue at elit pulvinar aliquam. Etiam luctus semper ex sit amet pulvinar. Sed at dictum magna. Aenean ac enim nec ipsum efficitur placerat. Donec aliquam mauris at diam suscipit pretium. Sed in nibh luctus, venenatis tellus et, placerat nunc. Suspendisse eleifend sit amet nisi a porttitor. Donec dapibus, turpis vitae vulputate vestibulum, leo tellus maximus tellus, ut mollis dolor libero ut justo. Nunc vel velit purus.
    <br>
    Morbi quis varius velit. Phasellus porta sagittis nulla, vitae blandit est ornare vitae. Cras gravida congue nunc, non sodales libero ultrices nec. Etiam ornare tempor dictum. Aenean sed sapien sodales, congue augue eu, posuere sapien. Nulla dignissim hendrerit ligula, sit amet efficitur tortor facilisis id. Vivamus elementum tempus mollis. Aenean dapibus id velit vel pretium.
  <br>

  <?php
    if(isset($_GET['menu'])) {
      $menu = $_GET['menu'];

      if($menu == 'main_page') {
        echo 'STRONA GLOWNA';
      }

      if($menu == 'page') {
        echo 'STRONY';
      }

      if($menu == 'author') {
        echo 'O AUTORZE';
      }

      if($menu == 'contact') {
        echo 'KONTAKT';
      }
    }

    else {
      echo 'BLAD';
    }
  ?>
  </div>
  <div class="footer">
    <div class="template">
      Template by: kokoshv<br>
      <a class="icon_insta" href="https://www.instagram.com/kokoshkv/"></a>
      <a class="icon_yt" href="https://www.youtube.com/channel/UC3Mecc0jxqMF-JA3QZljYPQ"></a>
    </div>
    <div class="creator">
      Created by: kml
    </div>
  </div>


  </body>
</html>
