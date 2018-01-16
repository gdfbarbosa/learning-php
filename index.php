<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sumário Financeiro</title>
</head>

<style>
    table, td, th {
        border-collapse: collapse;
        border: 1px solid black;
    }
</style>

<body>

<?php

/**
 * Created by PhpStorm.
 * User: barbosa
 * Date: 13/12/17
 * Time: 09:51 AM
 */

/* instalar no Ubuntu: sudo locale-gen pt_BR

sudo locale-gen pt_BR.UTF-8

sudo dpkg-reconfigure locales

sudo update-locale LANG=pt_BR.UTF-8
*/
// para configurar locale do Brasil
setlocale(LC_ALL, 'pt_BR.UTF-8');

$db = new PDO("mysql:host=mysql.gdfbarbosa.com;dbname=gdfbarbosa", "root", "*100SvnGit");
$resultSet = $db->query("select sum(valor) as total from ativo where ativo = 1");

$ativo = 0.0;
$passivo = 0.0;

foreach($resultSet as $row) {
    $ativo += $row["total"];
}

$resultSet = $db->query("select sum(valor) as total from passivo where pago = 0");

foreach($resultSet as $row) {
    $passivo += $row["total"];
}

$passivo *= -1.0;

$total = $ativo + $passivo;

?>

<table>
    <tr>
        <th>Tipo</th>
        <th>Valor</th>
    </tr>
    <tr>
        <td>Ativo</td>
        <td><?php echo money_format('%n', $ativo); ?></td>
    </tr>
    <tr>
        <td>Passivo</td>
        <td style="color: red;"><?php echo money_format('%n', $passivo); ?></td>
    </tr>
    <tr>
        <td>Total</td>
        <td><?php echo money_format('%n', $total); ?></td>
    </tr>
</table>

</body>
</html>
