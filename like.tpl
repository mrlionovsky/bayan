<script>
    function a()
    {document.getElementById('info').innerHTML = 'Отлично! Теперь Ctrl+C, и сохрани текст!';}
    function b()
    {document.getElementById('info').innerHTML = 'Ну и пшёл нафиг';}   
    function c()
    {document.getElementById('info').innerHTML = 'Школьник :(';}   
</script>

<tr><td align="center">
<b>Понравилось?</b><br>
<input type="button" value="Да!" name="hello" OnClick="a();">
<input type="button" value="Нет!" name="hello" OnClick="b();">
<input type="button" value="Я ничего не понял" name="hello" OnClick="c();"> 
<INPUT TYPE="button" VALUE="Прислать баян" onClick="parent.location='mailto:lionovsky@lionovsky.ru?subject=Интернет-баян'">
<input value="Хочу ещё!" onclick="location.href='index.php?ok=1'" type="button" />
<div id="info"></div>
</td></tr>
