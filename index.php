<!DOCTYPE html>
<html>
  <head>
    <title>Simple Form</title>
  </head>
  <body>
  <?php if(isset(empty($_GET["name"]))){?>
    Welcome <?php echo $_GET["name"]; ?><br>
    Your email address is: <?php echo $_GET["email"]; ?>
    Your message is: <?php echo $_GET["message"]; ?>
    <?php } ?>

    <form action="#" method="get">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name"><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email"><br>

      <label for="message">Message:</label>
      <textarea id="message" name="message"></textarea><br>

      <input type="submit" value="Submit">
    </form>
  </body>
</html>
