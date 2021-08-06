<?php 
if($_POST['submit']) {
    $name = $_POST['name'];
	$age = $_POST['age'];

if($name == '' || $age == '') {
echo <h2>Please fill all * mandatory fields.</h2>;
}

if($q1=='' || $q2 =='' || $q3 ==''||$q4==''|| $q5 =='' || $q6 ==''||$q7=='' || $q8 =='' || $q9 ==''||$q10=='')
    $q1 = $_POST['q1'];
	$q2 = $_POST['q2'];
	$q3 = $_POST['q3'];
	$q4 = $_POST['q4'];
	$q5 = $_POST['q5'];
	$q6 = $_POST['q6'];
	$q7 = $_POST['q7'];
	$q8 = $_POST['q8'];
	$q9 = $_POST['q9'];
	$q10 = $_POST['q10'];


if($q1=='' || $q2 =='' || $q3 ==''||$q4==''|| $q5 =='' || $q6 ==''||$q7=='' || $q8 =='' || $q9 ==''||$q10==''$q11=='' || $q12 =='' || $q13 ==''||$q14==''|| $q15 =='' || $q16 ==''||$q17=='' || $q18 =='' || $q19 ==''||$q20=='') {
echo <h2>Please answer all questions.</h2>;
}
else {
$score = 0;
if($q1 == 1) { // 1st option is correct
$score++;
}
if($q2 == 1) { // 1st option is correct
$score++;
}
if($q3 == 2) { // 2nd option is correct
$score++;
}
if($q1 == 2) { // 2nd option is correct
$score++;
}
if($q2 == 1) { // 1st option is correct
$score++;
}
if($q3 == 2) { // 2nd option is correct
$score++;
}
if($q1 == 3) { // 3rd option is correct
$score++;
}
if($q2 == 1) { // 1st option is correct
$score++;
}
if($q3 == 2) { // 2nd option is correct
$score++;
}
if($q3 == 1) { // 1st option is correct
$score++;
}
if($q1 == 1) { // 1st option is correct
$score++;
}
if($q2 == 1) { // 1st option is correct
$score++;
}
if($q3 == 2) { // 2nd option is correct
$score++;
}
if($q1 == 2) { // 2nd option is correct
$score++;
}
if($q2 == 1) { // 1st option is correct
$score++;
}
if($q3 == 2) { // 2nd option is correct
$score++;
}
if($q1 == 3) { // 3rd option is correct
$score++;
}
if($q2 == 1) { // 1st option is correct
$score++;
}
if($q3 == 2) { // 2nd option is correct
$score++;
}
if($q3 == 1) { // 1st option is correct
$score++;
}
        $score = $score/ 10 *100;

if($score < 50)
{
echo <h2>You need to score at least 50% to pass the exam.</h2>;
}
else {
echo <h2>You have passed the exam and scored '.$score.'%.</h2>;
}
}
}
?>