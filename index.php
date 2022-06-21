<?php

require_once "C3.php";
require_once "C1.php";


echo phpversion();
$class_name="C1";
$c1=new $class_name;
//$c1 = new C1();
$c3 = new C3();
$c1->func1();
$c1->a1 = 0;
$a1 = null;
 $constant = 5;
$a = "sss";
$myarr = array(5, 10, 15, array(100, 101), 4);
echo $myarr[0] . $myarr[3][0];

$myarr = array("key1" => "hello", "key2" => "world", 5);
echo $myarr["key1"];
echo $myarr[0];

if ($a) {
    echo "<h1 style='height:20px'> hello there </h1> ";
}

function sum(int $num1, $num2)
{
    global $constant;
    $constant = 10000;
    return ($num1 + $num2 + $constant);
}
echo sum(5.5,5);
echo "<br/>";
if (is_null($a1)) {
    echo "y";
} else {
    echo "n";
}

if (isset($a1)) {
    echo "y";
} else {
    echo "n";
}

if (empty($a6)) {
    echo "y";
} else {
    echo "n";
}

echo "<br/> ";
if (isset($myarr2) && is_array($myarr2)) {
    echo "is array";
} else {
    echo "is not array";
}

echo count($myarr);

echo "<br/> end";
?>
<table style="border: black 1px solid ; ">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>family</th>
        <th>age</th>
        <th>action</th>
    </tr>
    <?php for ($i = 0; $i < 5; $i++) : $const_val = 20; ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo "name" . $i ?></td>
            <td><?php echo "family" . $i ?></td>
            <td><?php echo $const_val + $i ?></td>
            <td>action</td>
        </tr>
    <?php endfor; ?>
    <td colspan="4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, nostrum?</td>
    <td>no action</td>

</table>
<a> link</a>