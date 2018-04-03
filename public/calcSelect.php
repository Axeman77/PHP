<html>
<head>
<title>PHP calculator</title>
</head>
<body>
  <form method="POST" action=''>
    Введите первое число:<br><input type="text" name="a" required/><br>
    Введите второе число:<br><input type="text" name="b" required/><br>
    Выберете операцию из списка:<br>
    <select name="calculator" id="">
      <option value="+">сложение</option>
      <option value="-">вычитание</option>
      <option value="*">умножение</option>
      <option value="/">деление</option>
    </select><br>
   <input type="submit" name="calculation" value="Вычислить"><br>
   <input type="reset" name="reset" value="Отменить"><br>
   </form>
  Результат:

  <?php
  $a = $_POST['a'];
  $b = $_POST['b'];
  $select = $_POST['calculator'];
  $result = NULL;

  if ($_POST['submit']) {
      if ($select == '+') {
          $result = $a + $b;
          $result = "сумма=" . $result . '<br>';
      }
      elseif ($select == '-') {
          $result  = $a - $b;
          $result = "разность=" . $result . '<br>';
      }
      elseif ($select == '*') {
          $result  = $a * $b;
          $result = "произведение=" . $result  . '<br>';
      }
      elseif ($select == '/' && $b !== 0)  {
          $result  = $a / $b;
          $result = "деление=" . $result;
      }
      else
         $result="Действие не выбрано";
  }

  var_dump($result);
  ?>
</body>
</html>