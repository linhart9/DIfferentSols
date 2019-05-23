<?php

if($_POST['submit']) {
  $recipient="elinhart9@gmail.com";
  $subject=$_POST["subject"];
  $sender=$_POST["sender"];
  $senderEmail=$_POST['senderEmail'];
  $message=$_POST['message'];
  $From='Eric@differentsols.com';
  $headers = array(
    'From' => 'Different Sols Contact Form <eric@differentsols.com>',
    'Reply-To' => $senderEmail
  );

  $mailBody="Name: $sender\nEmail: $senderEmail\n\n$subject\n$message";

  mail($recipient, $subject, $mailBody, $headers,-f.$From);

  $thankYou="<div class='thankYou form'>Thank you! Your message has been sent.</div>";
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title> Different Sols </title>
    <!--<meta name="viewport" content="width=device-width, initial-scale=1" />-->
  </head>

    <header>
      <div class="image">
        <a href="differentsols.com"><img src='namelogo.png'class='brandlogo'></a>
        <h2> "The joy of life comes from our encounters with new experiences..." </h2>
      <!--  <p class="caption"> Calpe, Spain (2016) </p>-->
      </div>
    </header>

    <body class="articles">
      <nav class="articles">
          <a href="index.html"><div> Home </div></a>
      </nav>

      <article>
          <?=$thankYou?>
      <h3> Contact </h3>
      <form action='contact.php' method="post" class='form'>
        <div class='label'>
          <label for="sender">Name</label>
        </div>
        <div>
          <input name='sender' id='sender' type='text' class='info' required>
        </div>
        <div class='label'>
          <label for='senderEmail'>Email</label>
        </div>
        <div>
          <input name='senderEmail' id='senderEmail' type='text' class='info' required>
        </div>
        <div class='label'>
          <label for='subject'>Subject</label>
        </div>
        <div>
          <input name='subject' id='subject' type='text' class='info' required>
        </div>
        <div class='label'>
          <label for='message'>Questions or Comments</label>
        </div>
        <div>
          <textarea name='message' id='message' class='question' placeholder="Whats on your mind?" rows="10" width='100%' required></textarea>
        </div>
        <div class='send'>
          <input name='submit' type="submit" value="Send">
        </div>
      </form>

      </article>
  </body>
    <footer>
  <!--<p class="email"> PS: if anyone has any suggestions on the best way to create a free unique logo, i'm all ears! </p>-->
      <p class="email"> Email: differentsols@gmail.com
      <br>
      Instagram: linhart9
      </p>
    </footer>
    </article>
</html>
