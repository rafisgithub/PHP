<?php
$x = "PHP";
$fonts = "arials";
$bgcolor = "#FB043983";
$fontColor = "#rafi45";

$errname = $erremail = $errweb = $errcomment = $errgender = "";

$name = $email = $website = $comment = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST['name'])) {
    $errname = "Name field is required";
  } else {
    $name    = validate($_REQUEST['name']);
  }

  if (empty($_POST['email'])) {
    $erremail = "email field is required";
  } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $erremail = "invalid email format";
  } else {
    $email   = validate($_REQUEST['email']);
  }

  if (empty($_POST['website'])) {
    $errweb = "website field is required";
  } else if(!filter_var($_POST["website"],FILTER_VALIDATE_URL)){
    $errweb ="Invalid url format.!";
  }
  else{
    $website = validate($_REQUEST['website']);
  }

  if (empty($_POST['gender'])) {
    $erremail = "gender field is required";
  } else {
    $gender  = validate($_REQUEST['gender']);
  }
  $comment = validate($_REQUEST['comment']);
}

function validate($data)
{
  $data = trim($data);
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>PHP Fundamentals</title>
  <style>
    body {
      font-family: <?php echo $fonts ?>;
    }

    /* .phpcoding { width: 600px; margin: 0 auto; background:#ddd; } */
    .container {
      width: 600px;
      margin: 0 auto;
      background: <?php echo "#ddd" ?>
    }

    .header {
      background: #444;
      /* <?php echo $bgcolor ?>; */
      text-align: center;
      padding: 20px;
    }

    .footer {
      background: #000;
      color: green;
      text-align: center;
      padding: 15px;
    }

    .content {
      min-height: 350px;
      padding: 20px;
    }

    .header h2,
    .footer h2 {
      margin: 0;
      color: <?php echo $fontColor ?>;
    }
  </style>
</head>

<body>
  <div class="container">

    <section class="header">
      <h2>PHP Fundamentals</h2>
      <h3>HP superglobal variables</h3>

    </section>

    <section class="content">

      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <table>

          <p style="color:red"> * Required field</p>
          <tr>
            <td>Name </td>
            <td><input type="text" name="name">*<?php echo $errname ?></td>
          </tr>

          <tr>
            <td>E-mail </td>
            <td><input type="email" name="email">*<?php echo $erremail ?></td>
          </tr>

          <tr>
            <td>Website </td>
            <td><input type="text" name="website">*<?php echo $errweb ?></td>
          </tr>

          <tr>
            <td>Comment</td>
            <td><textarea name="comment" id="" cols="40" rows="5"></textarea></td>
          </tr>

          <tr>
            <td>Gender</td>
            <td>
              <input type="radio" name="gender" value="male">Male
              <input type="radio" name="gender" value="female">Female
              *<?php echo $errgender ?>
            </td>
          </tr>

          <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Submit"></td>
          </tr>


        </table>

      </form>

      <?php



      echo "Name :" . $name . "<br>";
      echo "Email :" . $email . "<br>";
      echo "Website :" . $website . "<br>";
      echo "Commnet :" . $comment . "<br>";
      echo "Gender :" . $gender . "<br>";

      ?>

    </section>

    <section class="footer">
      <h2>I'm from footer</h2>
    </section>

  </div>
</body>

</html>