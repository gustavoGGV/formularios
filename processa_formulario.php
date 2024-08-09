<?php

$nome=$_POST['campo_nome'];
$idade=$_POST['campo_idade'];
$cor=$_POST['campo_cor'];
$turno=$_POST['campo_turno'];

print "O nome informado foi: " . $nome . "<br/>";
print "A idade informada foi: " . $idade . "<br/>";
print "A idade informada foi: " . $cor . "<br/>";
print "A idade informada foi: " . $turno . "<br/>";

$uploadsDir="uploads/";

$_FILES['campo_arquivo'];

$file=$uploadsDir . $_FILES['campo_arquivo']['name'];

move_uploaded_file($_FILES['campo_arquivo']['tmp_name'], $file);

print "O arquivo " . $_FILES['campo_arquivo']['name'] . " foi upado com sucesso!";
