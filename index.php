<title>Сложение двух чисел</title>

<?php
$number1 = 5;
$number2 = 3;
$sum = $number1 + $number2;
echo $sum;
?>


<title>Массивы</title>

<?php
$humans = [
    "name" => ["Jack", "Yuki", "Hans", "Bruce", "Thiago", "Mei", "Pierre", "Hudson", "Ivan", "Simba"],
    "country" => ["United States", "Japan", "Germany", "Australia", "Brazil", "China", "France", "Canada", "Russia", "Kenya"],
    "animals" => ["Bald Eagle", "Snow Monkey", "Eagle Owl", "Kangaroo", "Jaguar", "Giant Panda", "Rooster", "Beaver", "Brown Bear", "Lion"],
];
echo $humans["name"][4] . ", " . $humans["country"][4] . ", " . $humans["animals"][4];
?>


<title>Циклы</title>

<?php
$humans = [
    "name" => ["Jack", "Yuki", "Hans", "Bruce", "Thiago", "Mei", "Pierre", "Hudson", "Ivan", "Simba"],
    "country" => ["United States", "Japan", "Germany", "Australia", "Brazil", "China", "France", "Canada", "Russia", "Kenya"],
    "animals" => ["Bald Eagle", "Snow Monkey", "Eagle Owl", "Kangaroo", "Jaguar", "Giant Panda", "Rooster", "Beaver", "Brown Bear", "Lion"],
];

foreach ($humans["name"] as $name) {
    echo $name . "<br>";
}

foreach ($humans["country"] as $country) {
    echo $country . "<br>";
}

foreach ($humans["animals"] as $animal) {
    echo $animal . "<br>";
}
?>

<title>Условия</title>


<?php
$age = 5;

if ($age >= 18) {
    echo "Вы совершеннолетний";
} else {
    echo "Вы несовершеннолетний";
}
?>


<?php
$a = 1;
$b = 2;
$c = -3;

$discriminant = $b * $b - 4 * $a * $c;

if ($discriminant > 0) {
    $x1 = (-$b + sqrt($discriminant)) / (2 * $a);
    $x2 = (-$b - sqrt($discriminant)) / (2 * $a);
    echo "Уравнение имеет два корня: x1 = $x1, x2 = $x2";
} elseif ($discriminant == 0) {
    $x = -$b / (2 * $a);
    echo "Уравнение имеет один корень: x = $x";
} else {
    echo "Уравнение не имеет корней";
}
?>

<title>Глобальные массивы</title>

<form method="post">
    <label>Число 1:</label>
    <input type="number" name="num1"><br><br>
    <label>Число 2:</label>
    <input type="number" name="num2"><br><br>
    <input type="submit" name="submit" value="Сложить">
</form>

<?php
var_dump($_POST);
if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $sum = $num1 + $num2;
    ?>
    <br>
    <label>Результат:</label>
    <input type="number" value="<?php echo $sum; ?>">
    <?php
}
?>