<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vedita Test Task</title>
</head>
<body>
    <table border>
        <thead>
            <th>ID</th>
            <th>ID продукта</th>
            <th>Наименование</th>
            <th>Цена</th>
            <th>Артикул</th>
            <th>Кол-во</th>
            <th>Дата</th>
        </thead>
        <tbody>
            <?php 
            foreach($items as $item){
                if($item->HIDE_STRING)
                {
                    print("<tr id=row{$item->ID}>");
                    print(
                        '<td>'.$item->ID.'</td>'.
                        '<td>'.$item->PRODUCT_ID.'</td>'.
                        '<td>'.$item->PRODUCT_NAME.'</td>'.
                        '<td>'.$item->PRODUCT_PRICE.'</td>'.
                        '<td>'.$item->PRODUCT_ARTICLE.'</td>'.
                        '<td>'."<button onclick=minusqnt($item->ID)>-</button><span id=span{$item->ID}> ".
                        $item->PRODUCT_QUANTITY." </span><button onclick=plusqnt($item->ID)>+</button>".'</td>'.
                        '<td>'.$item->DATE_CREATE.'</td>'.
                        "<td><button onclick=hiderow({$item->ID})> Скрыть </button> </td>"
                    );
                    print('</tr>');
                }
            }
            ?>
        </tbody>
    </table>
    <script src='script.js'></script>
</body>
</html>