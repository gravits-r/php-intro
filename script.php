<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome=$_POST['nome'];
$idade=$_POST['idade'];

if(empty($nome))
{
    echo 'O nome não pode ser vazio!';
    return;
}
if (strlen($nome)<3)
{
    echo 'O nome deve conter mais de 3 caracteres';
    return;
}
if (strlen($nome)>40)
{
    echo 'O nome é muito extenso';
    return;
}
if(!is_numeric(@$idade))
{
    echo 'Informe um número para idade!';
    return;
}


if($idade<6)
{
    echo "O nadador " , $nome, " não tem idade para competir";
}
else if($idade>=6 && $idade<=12)
{
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'infantil')
            echo "O nadador ", $nome, " compete na categoria ", $categorias[$i];
    }
}
else if($idade>=13 && $idade<=18)
{
    for($i=0;$i<count($categorias);$i++)
    {
        if($categorias[$i] == 'adolescente')
            echo "O nadador ", $nome, " compete na categoria ", $categorias[$i];
    }
}
else if($idade>=19 && $idade<=59)
{
    for($i=0;$i<count($categorias);$i++)
    {
        if($categorias[$i] == 'adulto')
            echo "O nadador ", $nome, " compete na categoria ", $categorias[$i];
    }
}
else
{
    for($i = 0;$i<count($categorias);$i++)
    {
        if($categorias[$i]=='idoso')
            echo "O nadador ", $nome, " compete na categoria ", $categorias[$i];
    }
}

