<?php
require_once('conect.php');

$boll ;
if(empty($_POST['name'])){
    echo 'Por favor preencha o campo nome.';
    $boll = false;
    exit();

}
if(empty($_POST['email'])){
    echo 'Por favor preencha o campo email.';
    $boll = false;
    exit();

}
if(empty($_POST['subject'])){
    echo 'Digite algum assunto.';
    $boll = false;

    exit();
}

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];

$result = $pdo->prepare("INSERT INTO usuarios (nome,email,assunto) values (:name,:email,:subject)");
$Date = $result->fetchAll(PDO::FETCH_ASSOC);

$result->bindValue(":name",$name);
$result->bindValue(":email",$email);
$result->bindValue(":subject",$subject);

$result->execute();
$boll = true;

$mensage = utf8_decode('Nome:'.$name . "\r\n" . 'Email:' . $email . "\r\n" .'Mensagem:' . $subject);
$cab = "From:".$email;
$destinatario ='diegovitorsantoscosta2017@gmail.com';

if($boll){
    mail($destinatario,$subject,$mensage,$cab);
}

echo 'mensagem enviada com sucesso,entratemos em contato o mais rápido o possivel!!';


?>