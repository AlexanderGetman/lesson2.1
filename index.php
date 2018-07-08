<?php
$url = 'http://university.netology.ru/u/agetman/phonebook.json';
$contents = file_get_contents($url);
$contents = json_decode($contents, true);
?>
<html>
<head>
    <style>
        table {
            width: 50%;
        }
        table th {
            text-align: center;
        }
        table tr {
            text-align: left;
        }

        table td img {
            vertical-align: middle;
        }
    </style>
    <title>Домашнее задание по уроку 2.1</title>
</head>
<body>
<table border="1">
    <tr>
        <th>Имя</th>
        <th>Адрес</th>
        <th>Номер телефона</th>
    </tr>
    <?php foreach ($contents as $item) :?>
        <tr>
            <td><?php echo $item['firstName'] . ' ' . $item['lastName']?></td>
            <td><?php echo 'ул. ' . $item['address']['streetAdress'] . ', город ' . $item['address']['city'] . ', ' . $item['address']['country'];?></td>
            <td><?php echo $item['phoneNumber']?></td>
        </tr>
    <?php endforeach;?>
</table>
</body>
</html>
