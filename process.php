<?php
// Інформація про розробника
$developerGroup = "Група: XYZ";
$developerName = "Прізвище, Ім'я, По батькові: Іваненко Іван Іванович";
$creationDate = "Дата створення документу: 12 жовтня 2024";
$currentDate = "Поточна дата: " . date("d.m.Y");

// Отримання введеної букви
$operator = isset($_POST['operator']) ? strtolower(trim($_POST['operator'])) : '';

// Визначення повної назви оператора класичним способом
$operatorName = "";
switch ($operator) {
    case 'k':
        $operatorName = "Київстар";
        break;
    case 'v':
        $operatorName = "Vodafone";
        break;
    case 'l':
        $operatorName = "lifecell";
        break;
    default:
        $operatorName = "Невідомий оператор";
        break;
}

// Визначення повної назви оператора альтернативним способом
$alternativeOperatorName = "";
switch ($operator):
    case 'k':
        $alternativeOperatorName = "Київстар";
        break;
    case 'v':
        $alternativeOperatorName = "Vodafone";
        break;
    case 'l':
        $alternativeOperatorName = "lifecell";
        break;
    default:
        $alternativeOperatorName = "Невідомий оператор";
        break;
endswitch;
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Результат перевірки оператора</title>
</head>
<body>
    <h1>Результати</h1>
    <p><?php echo $developerGroup; ?></p>
    <p><?php echo $developerName; ?></p>
    <p><?php echo $creationDate; ?></p>
    <p><?php echo $currentDate; ?></p>
    <h2>Введена буква: <?php echo htmlspecialchars(strtoupper($operator)); ?></h2>
    <p>Повна назва оператора (класичний спосіб): <?php echo $operatorName; ?></p>
    <p>Повна назва оператора (альтернативний спосіб): <?php echo $alternativeOperatorName; ?></p>
</body>
</html>
