<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
   <meta http-equiv="content-type" content="text/html; charset=windows-1251">
   <meta name="Author" content="lionovsky">
   <meta name="Keywords" content="">
   <meta name="Description" content="">
   <title>Сборник интернет-баянов</title>
   <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body text="#000000" bgcolor="#394505" background="./img/back.gif">

<table width="800" align="center" border="1" bgcolor="#d0d0ae" class="main">
<tr align="center"><td><a href="index.php"><img src="img/logo.png" align="center" alt="Интернет-баяны"></a></td></tr>
<?php   
//Получаем запрос
$ok = $_GET['ok']; 

//Смотрим, пустой ли запрос, и в этом случае инклудим таблицу с кнопочкой
if (empty($ok)) {
    require "main.tpl";
}
//А если нет, то генерим число, и показываем книжку 
else {
//Генерим число
$rand = rand(1, 100);
//Открываем файлик, и в случае переносов в нём вставляем перенос строки
//И по пути вставляем табличку
echo "<tr><td algin=center><b>Баян #$rand </b> </td></tr>";
echo "<tr><td><div class=text>";

$f = fopen("text/$rand.txt", "r");
while(!feof($f)) { 
echo fgets($f) . "<br>";
}

fclose($f);
require "like.tpl";
echo "</div></td></tr>";

}
?>

<!-- Рекламоблок -->
<tr class="ads"><td>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Главный блок -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-9731727152771948"
     data-ad-slot="8872385116"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</td></tr>
<!-- Рекламоблок -->

<tr><td align="center"><small><a href="index.php">На главную баянов</a><br>
<a href="http://lionovsky.us">На главную lionovsky.us</a></small></td></tr>
</table>
<p><center>
<img src="img/opera_icon.gif"><img src="img/nn_icon.gif"><img src="img/ie_icon.gif"><br><br>
<img src="img/counter.gif">
</center></p>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47424376 = new Ya.Metrika2({
                    id:47424376,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47424376" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>
