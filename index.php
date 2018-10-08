
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
<!--1. Создать переменную с произвольным текстом (длиной >10символов). Провести проверку:
если длина строки больше 10 символов, обрезать строку до 10 символов. С помощью функции
заменить все символы "a-g" на пустоту.-->
        <?php
        $text = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
        if(strlen($text)>10){
            echo substr_replace($text, ' ',10)."<br>"; //
        }
        ?>

<!--2. Удалить все html теги. Вывести количество символов после фильтрации.-->
        <?php
        $tegsStr ="<div class=\"refnamediv\">
            <h1>htmlspecialchars</h1>
            <p> (PHP 4, PHP 5, PHP 7)</p>
            <p class=\"refpurpose\">
                <span class=\"refname\">htmlspecialchars</span>
                <span class=\"dc-title\">Любой текст</span>
            </p>
        </div>";
        echo "Количество символов после удаления тегов = ".strlen(strip_tags($tegsStr))."<br>";
        ?>

<!--3. Найти и заменить в строке "http://example.com/user/username" user на author;
        Вывести результат на экран-->
<?php
    $strHttp = "http://example.com/user/username";
    $substr = "user";
    $substring = "author";
    //var_dump($index = strpos($strHttp, $substr));
    echo substr_replace($strHttp, $substring, $index, strlen($substr))."<br>";
?>

<!--4. Отсортировать массив [1,22,45,3,23,45,6,76,55,4] по возрастанию;-->
<?php
    $arrNumbers = array(1,22,45,3,23,45,6,76,55,4);
    sort($arrNumbers);
    asort($arrNumbers);
    echo "Массив после сортировки: ";
    for($i = 0; $i<count($arrNumbers); $i++){
        echo $arrNumbers[$i]."; ";
    }
    echo "<br>";
?>
<!--5. Преобразовать строку "Find me and say Hello Mike!" в массив;-->
        <?php
        $str = "Find me and say Hello Mike!";
        $arr = str_split($str);
        print_r($arr);
        echo "<br>";
        ?>
<!--6. Посчитать, сколько букв "a" встречается в строке "Find me and say Hello Mike!";-->
<?php
    $string = "Find me and say Hello Mike!";
    $count = substr_count($string, 'a');
    echo "Количество вхождений в строку символа \"а\" - ".$count."<br>";
?>
<!--7. Дан урл "http://example.com/name=Mike&lastname=Jackson&age=25", необходимо разбить и
        вытащить параметры и вывести на экран.-->
<?php
    $strUrl = "http://example.com/name=Mike&lastname=Jackson&age=25";
    $arrUrl = parse_url($strUrl);
    print_r ($arrUrl);
    echo "<br>";
    //$arrData = parse_str($strUrl[path], $resultArr);

    $resultArr = parse_str($strUrl[2],$resultArr);
    echo $resultArr['name'];
    echo $resultArr['lastname'];
    echo $resultArr['age'];
?>
    </body>
</html>
