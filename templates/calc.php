<html>
<head>
    <title>PHP calculator</title>
</head>
<body>
<form method="POST" action=''>
    Введите первое число:<br><input type="text" name="a" /><br>  <!--required проверяет пустые поля-->
    Введите второе число:<br><input type="text" name="b" /><br>
    Выберете нужную операцию:<br>
    <input name='operation' value="+" type="submit"/>
    <input name='operation' value="-" type="submit"/>
    <input name='operation' value="*" type="submit"/>
    <input name='operation' value="/" type="submit"/><br>
    <input type="submit" name="operation" value="Вычислить"><br> <!--калькулятор прекрасно работает без этого поля просто ъхотел проверить условие когда не нажата ни одна кнопка-->

</form>
Результат:
</body>
</html>