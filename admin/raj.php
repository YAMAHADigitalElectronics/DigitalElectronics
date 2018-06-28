<?php
"color:green">// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "color:brown">"";
$name = $email = $gender = $comment = $website = "color:brown">"";

"color:mediumblue">if ("color:goldenrod">$_SERVER["color:brown">"REQUEST_METHOD"] == "color:brown">"POST") {
  "color:mediumblue">if ("color:mediumblue">empty("color:goldenrod">$_POST["color:brown">"name"])) {
    $nameErr = "color:brown">"Name is required";
  } "color:mediumblue">else {
    $name = test_input("color:goldenrod">$_POST["color:brown">"name"]);
    "color:green">// check if name only contains letters and whitespace
    "color:mediumblue">if (!preg_match("color:brown">"/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "color:brown">"Only letters and white space allowed"; 
    }
  }

  "color:mediumblue">if ("color:mediumblue">empty("color:goldenrod">$_POST["color:brown">"email"])) {
    $emailErr = "color:brown">"Email is required";
  } "color:mediumblue">else {
    $email = test_input("color:goldenrod">$_POST["color:brown">"email"]);
    "color:green">// check if e-mail address is well-formed
    "color:mediumblue">if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "color:brown">"Invalid email format"; 
    }
  }

  "color:mediumblue">if ("color:mediumblue">empty("color:goldenrod">$_POST["color:brown">"website"])) {
    $website = "color:brown">"";
  } "color:mediumblue">else {
    $website = test_input("color:goldenrod">$_POST["color:brown">"website"]);
    "color:green">// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    "color:mediumblue">if (!preg_match("color:brown">"/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "color:brown">"Invalid URL"; 
    }
  }

  "color:mediumblue">if ("color:mediumblue">empty("color:goldenrod">$_POST["color:brown">"comment"])) {
    $comment = "color:brown">"";
  } "color:mediumblue">else {
    $comment = test_input("color:goldenrod">$_POST["color:brown">"comment"]);
  }

  "color:mediumblue">if ("color:mediumblue">empty("color:goldenrod">$_POST["color:brown">"gender"])) {
    $genderErr = "color:brown">"Gender is required";
  } "color:mediumblue">else {
    $gender = test_input("color:goldenrod">$_POST["color:brown">"gender"]);
  }
}
"color:red">?>