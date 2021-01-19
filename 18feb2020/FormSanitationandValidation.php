
<style>
  
  span
  {
    color: red;
  }
</style>

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    

  if($_POST["name"]=="")
  {
    $nameErr = "Name is required";
  }

  if($_POST["email"]=="")
  {
    $emailErr = "Email is required";
  }
  if(!isset($_POST["gender"]))
  {
    $genderErr = "Gender must be select";
  }
  else 
  {
    $name = sanitise($_POST["name"]);
    $email = sanitise($_POST["email"]);
    $website = sanitise($_POST["website"]);
    $comment = sanitise($_POST["comment"]);
    $gender = sanitise($_POST["gender"]);
  }

  
  
  
}

function sanitise($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name"> <span><?php if(isset($nameErr))echo $nameErr ?></span>
  <br><br>
  E-mail: <input type="text" name="email"> <span><?php if(isset($emailErr))echo $emailErr ?></span>
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other  <span><?php if(isset($genderErr))echo $genderErr ?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>