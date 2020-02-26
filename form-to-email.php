<?PHP

if (isset("submit") {
  echo("error, you need to submit the form");
}
$message = $_POST["message"];
$visitor_email = $_POST["email"];

if (empty($message)||empty("$visitor_email")) {
  echo("email and message required");
  exit();
}

$headers = "From: "+$visitor_email+ "\r\n";

mail("brianmuigai1@gmail.com", "portfolio",$message,$headers);

header ("HTTP/1.1 200 Thank you");
header ("Location: "."thanks.html");
exit();

?>