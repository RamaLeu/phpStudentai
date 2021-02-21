<?php

echo '<link rel="stylesheet" href="index.css">';

$mokiniai =[
    1 => [0 => "5b",
          1 => rand(1000, 9999),
          2 => date("Y/m/d"),
          3 => strtoupper("Gustavas"),
          4 => strtoupper("Pecetauskas"),
          5 => [
                  1 => 5,
                  2 => 9,
                  3 => 10,
          ]],
    2 =>[0 => "5b",
        1 => rand(1000, 9999),
        2 => date("Y/m/d"),
        3 => strtoupper("Dovydas"),
        4 => strtoupper("Kuzminskas"),
        5 => [
            1 => 5,
            2 => 9,
            3 => 10,
        ]],
    3 =>[0 => "5b",
        1 => rand(1000, 9999),
        2 => date("Y/m/d"),
        3 => strtoupper("Rokas"),
        4 => strtoupper("Eglinskis"),
        5 => [
            1 => 5,
            2 => 9,
            3 => 10,
        ]],
    4 =>[0 => "5b",
        1 => rand(1000, 9999),
        2 => date("Y/m/d"),
        3 => strtoupper("Mindaugas"),
        4 => strtoupper("Kuzma"),
        5 => [
            1 => 5,
            2 => 9,
            3 => 10,
        ]],
    5 =>[0 => "5b",
        1 => rand(1000, 9999),
        2 => date("Y/m/d"),
        3 => strtoupper("Zilvinas"),
        4 => strtoupper("Zvagulis"),
        5 => [
            1 => 5,
            2 => 9,
            3 => 10,
        ]],
    6 =>[0 => "5b",
        1 => rand(1000, 9999),
        2 => date("Y/m/d"),
        3 => strtoupper("Ramunas"),
        4 => strtoupper("Bagdonas"),
        5 => [
            1 => 10,
            2 => 10,
            3 => 10,
        ]],
    7 =>[0 => "5b",
        1 => rand(1000, 9999),
        2 => date("Y/m/d"),
        3 => strtoupper("Paulius"),
        4 => strtoupper("Startkus"),
        5 => [
            1 => 1,
            2 => 1,
            3 => 1,
        ]],
    8 =>[0 => "5b",
        1 => rand(1000, 9999),
        2 => date("Y/m/d"),
        3 => strtoupper("Marius"),
        4 => strtoupper("Gendalfas"),
        5 => [
            1 => 5,
            2 => 9,
            3 => 10,
        ]],
    9 =>[0 => "5b",
        1 => rand(1000, 9999),
        2 => date("Y/m/d"),
        3 => strtoupper("Darius"),
        4 => strtoupper("Dumbldoras"),
        5 => [
            1 => 5,
            2 => 9,
            3 => 10,
        ]],
    10 =>[0 => "5b",
        1 => rand(1000, 9999),
        2 => date("Y/m/d"),
        3 => strtoupper("Karolis"),
        4 => strtoupper("Shmita"),
        5 => [
            1 => 5,
            2 => 9,
            3 => 10,
        ]]];
echo "<table>";
echo "<tr>";
echo "<th class='tables'>Klase</th>";
echo "<th class='tables'>Kodas</th>";
echo "<th class='tables'>Vardas</th>";
echo "<th class='tables'>Pavarde</th>";
echo "<th class='tables'>Kontroliniu darbu vidurkis</th>";
echo "<th class='tables'>Duomenu formatavimo data</th>";
echo "</tr>";
foreach($mokiniai as $item){
    echo "<tr class ='tables centered'>";
    echo "<td class ='tables centered'>$item[0]</td>";
    echo "<td class ='tables centered'>$item[1]</td>";
    echo "<td class ='tables centered'>$item[3]</td>";
    echo "<td class ='tables centered'>$item[4]</td>";
    $sum = 0;
    $counters = 0;
    $vid = 0;
    foreach($item[5] as $number){
        $sum +=$number;
        $counters +=1;
    }
    $vid = $sum/$counters;
    echo "<td class ='tables centered'>$vid</td>";
    echo "<td class ='tables centered'>$item[2]</td>";

    echo "</tr>";
};

//foreach($mokiniai as $key => $item){
//    foreach($item as $id =>$counter){
//        echo  "$counter<br>";
//    }
//}
echo "</table>";