<?php
function createSalt()
{
    $text = md5(uniqid(rand(), TRUE));
    return substr($text, 0, 32);
}
function createSHA256($password,$salt){
    return hash('sha256',$salt.$password);
}
function verifyPassword($hash,$password,$salt)
{
  $verifyPassword = createSHA256($password,$salt);

  if($hash==$verifyPassword)
  {
      return "password veryfied";
  }else {
      return "false";
  }
}
$password ="BUDILUHUR";
$salt=createSalt();
$hashPwd = createSHA256($password,$salt);
$verify = verifyPassword($hashPwd,$password,$salt);
echo "Password :".$password;
echo "<br>";
echo "Salt md5 uniqid : ".$salt;
echo "<br>";
echo "Hash 
SHA256: ".$hashPwd;
echo "<br>";
echo "Verify Password Text : BUDILUHUR  ".$verify;
?>