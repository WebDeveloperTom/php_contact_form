<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">

  </head>
  <body>

    <main>
      <div class="container">
        <p>Contact Us</p>
        <form class="contact-form" action="includes/contactform.php" method="post">

          <?php
          // returns user input if a form error occurs
            if (isset($_GET['name'])) {
              $name = $_GET['name'];
              echo '<input type="text" name="name" placeholder="Full Name" value="'.$name.'">';
            } else {
              echo '<input type="text" name="name" placeholder="Full Name">';
            }
            if (isset($_GET['phone'])) {
              $phone = $_GET['phone'];
              echo '<input type="text" name="phone" placeholder="Phone Number" value="'.$phone.'">';
            } else {
              echo '<input type="text" name="phone" placeholder="Phone Number">';
            }
           ?>
          <input type="text" name="mail" placeholder="Your e-mail">
          <?php
          if (isset($_GET['subject'])) {
            $subject = $_GET['subject'];
            echo '<input type="text" name="subject" placeholder="Subject" value="'.$subject.'">';
          } else {
            echo '<input type="text" name="subject" placeholder="Subject">';
          }
          if (isset($_GET['message'])) {
            $message = $_GET['message'];
            echo '<textarea name="message" placeholder="Message" rows="8" cols="80">'.$message.'</textarea>';
          } else {
            echo '<textarea name="message" placeholder="Message" rows="8" cols="80"></textarea>';
          }
           ?>
          <button type="submit" name="submit">Send</button>
        </form>

        <?php
        // error messages
          if (!isset($_GET['query'])) {
            exit();
          }
          else {
            $queryCheck = $_GET['query'];
            if ($queryCheck == "empty" ) {
              echo "<p class='error'>You did not fill out all the fields.</p>";
              exit();
            } elseif ($queryCheck == "invalidchar" ) {
              echo "<p class='error'>Please use A - Z characters only in Name and Subject.</p>";
              exit();
            } elseif ($queryCheck == "invalidemail" ) {
              echo "<p class='error'>You did not enter a valid email.</p>";
              exit();
            } elseif ($queryCheck == "sent" ) {
              echo "<p class='success'>Your message has been received! Someone will be in touch soon.</p>";

            }
          }

         ?>
      </div>

    </main>
  </body>
</html>
