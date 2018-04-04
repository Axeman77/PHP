<html>
<head>
    <title>PHP calculator</title>
</head>
<body>
<form method="POST" action=''>
    Введите первое число:<br><input type="text" name="a" required/><br>
    Введите второе число:<br><input type="text" name="b" required/><br>
    Выберете операцию из списка:<br>
    <select name="operation" id="">
        <option value="+">сложение</option>
        <option value="-">вычитание</option>
        <option value="*">умножение</option>
        <option value="/">деление</option>
    </select><br>
    <input type="submit" name="calc" value="Вычислить"><br>
    <input type="reset" name="reset" value="Отменить"><br>
</form>
Результат:
</body>
</html>