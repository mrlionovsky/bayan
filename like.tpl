<script>
    function a()
    {document.getElementById('info').innerHTML = '�������! ������ Ctrl+C, � ������� �����!';}
    function b()
    {document.getElementById('info').innerHTML = '�� � ���� �����';}   
    function c()
    {document.getElementById('info').innerHTML = '�������� :(';}   
</script>

<tr><td align="center">
<b>�����������?</b><br>
<input type="button" value="��!" name="hello" OnClick="a();">
<input type="button" value="���!" name="hello" OnClick="b();">
<input type="button" value="� ������ �� �����" name="hello" OnClick="c();"> 
<INPUT TYPE="button" VALUE="�������� ����" onClick="parent.location='mailto:lionovsky@lionovsky.ru?subject=��������-����'">
<input value="���� ���!" onclick="location.href='index.php?ok=1'" type="button" />
<div id="info"></div>
</td></tr>
