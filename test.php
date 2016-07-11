<?php
// Task 1
$array1 = array(
    'fruits' => array(
        'a' => 'apple',
        'b' => 'banana',
        'c' => 'carrot',
    ),
);
$array2 = array(
    'a' => 10,
    'b' => 5,
    'c' => 1,
);
foreach($array1['fruits'] as $key => $value)
{
    if($array2[$key] > 1) {
        echo $value."s ". $array2[$key]."\n";
    }
    else {
        echo $value." ". $array2[$key]."\n";
    }
}
// Task 2
$birthDate = new DateTime("1994-04-04 00:00:00");
$currentDate = new DateTime();
$interval = $birthDate->diff($currentDate);
if($interval->s % 2 == 0) {
    echo '<font color="red">' . $interval->y ."-years, " . $interval->m."-months, ".$interval->d."-days, 
    ".$interval->h."-hours, ".$interval->i."-minutes, ".$interval->s."-seconds" . '</font><br>';
} else {
    echo $interval->y ."-years, " . $interval->m."-months, ".$interval->d."-days, 
    ".$interval->h."-hours, ".$interval->i."-minutes, ".$interval->s."-seconds";
}
?>