<?php
session_start();
$date = date('Y-m-d');
/////////////////Recuperation variable/////////////////////////////
$nom = addslashes($_POST['nom']);
$prenom = addslashes($_POST['prenom']);    
$pays = addslashes($_POST['pays']);
$ville = addslashes($_POST['ville']);
$adresse = addslashes($_POST['adresse']);
$tel = addslashes($_POST['tel']);
$email = addslashes($_POST['email']);
$subject = addslashes($_POST['subject']);
$title = addslashes($_POST['title']);
$message = addslashes($_POST['message']);

if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',str_replace('&amp;','&',$email))) {

$to="travelinginmorocco@gmail.com";
$subject = " $subject :";
$msg .= "* Title : $title \r\n\n"; 
$msg .= "* First Name : $nom \r\n\n"; 
$msg .= "* Last Name : $prenom \r\n\n"; 
$msg .= "* Country : $pays \r\n\n"; 
$msg .= "* City : $ville \r\n\n"; 
$msg .= "* Address : $adresse \r\n\n";
$msg .= "* Phone : $tel \r\n\n"; 
$msg .= "* Subject : $subject \r\n\n";
$msg .= "* E-Mail : $email \r\n\n";
$msg .= "---- Message ---- \r\n\n".stripslashes($_POST['message'])."\r\n\n";  //the message itself
mail($to, $subject, $msg, "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n")
?>
<SCRIPT language="Javascript">
alert("Your reservation has been sent successfully!");
window.location.replace("index.html");
</SCRIPT>
<?php
}elseif(strlen($secure)<=0){
?>
<SCRIPT language="Javascript">
alert("An empty field");
window.history.go(-1);
</SCRIPT> 
<?php
}else
{
?>
<SCRIPT language="Javascript">
alert("An empty field");
window.history.go(-1);
</SCRIPT> 
<?php
}
?>
