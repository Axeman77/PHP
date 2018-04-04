<?php

function calculation () {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $select = $_POST['operation'];
    $result = NULL;

    switch ($select) {
        case '+':
            $result = $a + $b;
            $result = "сумма=" . $result . '<br>';
            break;
        case '-':
            $result  = $a - $b;
            $result = "разность=" . $result . '<br>';
            break;
        case '*':
            $result  = $a * $b;
            $result = "произведение=" . $result  . '<br>';
            break;
        case '/':
            if ($b != 0) {
                $result = $a / $b;
                $result = "деление=" . $result;
            } else { $result = "делить на ноль нельзя"; }
            break;
        default:
            $result="Действие не выбрано";
            break;
    }

    return $result;
}
?>
