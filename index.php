<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задание 1. Таблица истинности PHP </title>
    <link rel="stylesheet" href="./CSS/style.css" type="text/css"/>
</head>
<br>
	 <h2>Задание 1. Таблица истинности РНР</h2>
	 <br> 
     <br> 

<?php 
      $a = 0;
      $b = 0;
      $a1 = !$a;
      $b1 = $a || $b;
      $c1 = $a & $b;
      $d1 = $a xor $b;
      
      $a = 0;
      $b = 1;
      $a2 = !$a;
      $b2 = $a || $b;
      $c2 = $a & $b;
      $d2 = $a xor $b;

      $a = 1;
      $b = 0;
      $a3 = !$a;
      $b3 = $a || $b;
      $c3 = $a & $b;
      $d3 = $a xor $b;

      $a = 1;
      $b = 1;
      $a4 = !$a;
      $b4 = $a || $b;
      $c4 = $a & $b;
      $d4 = $a xor $b;
?>
	 <table width="90%" border="3" align="center">
	   <tbody>
	     <tr>
	       <th width="16%" height="48" scope="col">A</th>
	       <th width="16%" height="48" scope="col">B</th>
	       <th width="16%" height="48" scope="col">!A</th>
	       <th width="16%" height="48" scope="col">A || B</th>
	       <th width="16%" height="48" scope="col">A &amp; B</th>
	       <th width="16%" height="48" scope="col">A xor B</th>
         </tr>
	     <tr>
	       <td height="48" scope="row">0</td>
	       <td>0</td>
	       <td><?= print_r (($converted_res = $a1 ? 'true' : 'false'),true) ?></td>
	       <td><?= print_r (($converted_res = $b1 ? 'true' : 'false'),true) ?></td>
	       <td><?= print_r (($converted_res = $c1 ? 'true' : 'false'),true) ?></td>
	       <td><?= print_r (($converted_res = $d1 ? 'true' : 'false'),true) ?></td>
         </tr>
	     <tr>
	       <td height="48" scope="row">0</td>
	       <td>1</td>
	       <td><?= print_r (($converted_res = $a2 ? 'true' : 'false'),true) ?></td>
	       <td><?= print_r (($converted_res = $b2 ? 'true' : 'false'),true) ?></td>
	       <td><?= print_r (($converted_res = $c2 ? 'true' : 'false'),true) ?></td>
	       <td><?= print_r (($converted_res = $d2 ? 'true' : 'false'),true) ?></td>
         </tr>
	     <tr>
	       <td height="48" scope="row">1</td>
	       <td>0</td>
	       <td><?= print_r (($converted_res = $a3 ? 'true' : 'false'),true) ?></td>
	       <td><?= print_r (($converted_res = $b3 ? 'true' : 'false'),true) ?></td>
	       <td><?= print_r (($converted_res = $c3 ? 'true' : 'false'),true) ?></td>
	       <td><?= print_r (($converted_res = $d3 ? 'true' : 'false'),true) ?></td>
         </tr>
	     <tr>
	       <td height="48" scope="row">1</td>
	       <td>1</td>
	       <td><?= print_r (($converted_res = $a4 ? 'true' : 'false'),true) ?></td>
	       <td><?= print_r (($converted_res = $b4 ? 'true' : 'false'),true) ?></td>
	       <td><?= print_r (($converted_res = $c4 ? 'true' : 'false'),true) ?></td>
	       <td><?= print_r (($converted_res = $d4 ? 'true' : 'false'),true) ?></td>
         </tr>
       </tbody>
</table>
<br> 
<br> 
<h2>Задание 2. Таблица сравнения. Гибкое сравнение с помощью == </h2>
<br> 
<?php 
      $a = true;
      $a1 = $a == true;
      $b1 = $a == false;
      $c1 = $a == 1;
      $d1 = $a == 0;
      $e1 = $a == -1;
      $f1 = $a == "1";
      $g1 = $a == null;
      $h1 = $a == "php";

      $a = false;
      $a2 = $a == true;
      $b2 = $a == false;
      $c2 = $a == 1;
      $d2 = $a == 0;
      $e2 = $a == -1;
      $f2 = $a == "1";
      $g2 = $a == null;
      $h2 = $a == "php";

      $a = 1;
      $a3 = $a == true;
      $b3 = $a == false;
      $c3 = $a == 1;
      $d3 = $a == 0;
      $e3 = $a == -1;
      $f3 = $a == "1";
      $g3 = $a == null;
      $h3 = $a == "php";

      $a = 0;
      $a4 = $a == true;
      $b4 = $a == false;
      $c4 = $a == 1;
      $d4 = $a == 0;
      $e4 = $a == -1;
      $f4 = $a == "1";
      $g4 = $a == null;
      $h4 = $a == "php";

      $a = -1;
      $a5 = $a == true;
      $b5 = $a == false;
      $c5 = $a == 1;
      $d5 = $a == 0;
      $e5 = $a == -1;
      $f5 = $a == "1";
      $g5 = $a == null;
      $h5 = $a == "php";

      $a = "1";
      $a6 = $a == true;
      $b6 = $a == false;
      $c6 = $a == 1;
      $d6 = $a == 0;
      $e6 = $a == -1;
      $f6 = $a == "1";
      $g6 = $a == null;
      $h6 = $a == "php";

      $a = null;
      $a7 = $a == true;
      $b7 = $a == false;
      $c7 = $a == 1;
      $d7 = $a == 0;
      $e7 = $a == -1;
      $f7 = $a == "1";
      $g7 = $a == null;
      $h7 = $a == "php";

      $a = "php";
      $a8 = $a == true;
      $b8 = $a == false;
      $c8 = $a == 1;
      $d8 = $a == 0;
      $e8 = $a == -1;
      $f8 = $a == "1";
      $g8 = $a == null;
      $h8 = $a == "php";
     
?>
<br> 
<table width="90%" border="3" align="center">
  <tbody>
    <tr>
      <th width="10%" height="48" scope="col">&nbsp;</th>
      <th width="10%" height="48" scope="col">true</th>
      <th width="10%" height="48" scope="col">false</th>
      <th width="10%" height="48" scope="col">1</th>
      <th width="10%" height="48" scope="col">0</th>
      <th width="10%" height="48" scope="col">-1</th>
      <th width="10%" height="48" scope="col">&quot;1&quot;</th>
      <th width="10%" height="48" scope="col">null</th>
      <th width="10%" height="48" scope="col">&quot;php&quot;</th>
    </tr>
    <tr>
      <th height="48" scope="row">true</th>
      <td><?= print_r (($converted_res = $a1 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $b1 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $c1 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $d1 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $e1 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $f1 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $g1 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $h1 ? 'true' : 'false'),true) ?></td>
    </tr>
    <tr>
      <th height="48" scope="row">false</th>
      <td><?= print_r (($converted_res = $a2 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $b2 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $c2 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $d2 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $e2 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $f2 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $g2 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $h2 ? 'true' : 'false'),true) ?></td>
    </tr>
    <tr>
      <th height="48" scope="row">1</th>
      <td><?= print_r (($converted_res = $a3 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $b3 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $c3 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $d3 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $e3 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $f3 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $g3 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $h3 ? 'true' : 'false'),true) ?></td>
    </tr>
    <tr>
   <th height="48" scope="row">0</th>
      <td><?= print_r (($converted_res = $a4 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $b4 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $c4 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $d4 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $e4 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $f4 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $g4 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $h4 ? 'true' : 'false'),true) ?></td>
    </tr>
    <tr>
      <th height="48" scope="row">-1</th>
      <td><?= print_r (($converted_res = $a5 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $b5 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $c5 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $d5 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $e5 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $f5 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $g5 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $h5 ? 'true' : 'false'),true) ?></td>
    </tr>
    <tr>
      <th height="48" scope="row">&quot;1&quot;</th>
      <td><?= print_r (($converted_res = $a6 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $b6 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $c6 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $d6 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $e6 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $f6 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $g6 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $h6 ? 'true' : 'false'),true) ?></td>
    </tr>
    <tr>
      <th height="48" scope="row">null</th>
      <td><?= print_r (($converted_res = $a7 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $b7 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $c7 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $d7 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $e7 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $f7 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $g7 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $h7 ? 'true' : 'false'),true) ?></td>
    </tr>
    <tr>
      <th height="48" scope="row">&quot;php&quot;</th>
      <td><?= print_r (($converted_res = $a8 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $b8 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $c8 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $d8 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $e8 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $f8 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $g8 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $h8 ? 'true' : 'false'),true) ?></td>
    </tr>
  </tbody>
</table>
<br> 
<br> 
<h2>Задание 3. Таблица сравнения. Жесткое сравнение с помощью === </h2>
<br> 
<?php 
      $a = true;
      $a1 = $a === true;
      $b1 = $a === false;
      $c1 = $a === 1;
      $d1 = $a === 0;
      $e1 = $a === -1;
      $f1 = $a === "1";
      $g1 = $a === null;
      $h1 = $a === "php";

      $a = false;
      $a2 = $a === true;
      $b2 = $a === false;
      $c2 = $a === 1;
      $d2 = $a === 0;
      $e2 = $a === -1;
      $f2 = $a === "1";
      $g2 = $a === null;
      $h2 = $a === "php";

      $a = 1;
      $a3 = $a === true;
      $b3 = $a === false;
      $c3 = $a === 1;
      $d3 = $a === 0;
      $e3 = $a === -1;
      $f3 = $a === "1";
      $g3 = $a === null;
      $h3 = $a === "php";

      $a = 0;
      $a4 = $a === true;
      $b4 = $a === false;
      $c4 = $a === 1;
      $d4 = $a === 0;
      $e4 = $a === -1;
      $f4 = $a === "1";
      $g4 = $a === null;
      $h4 = $a === "php";

      $a = -1;
      $a5 = $a === true;
      $b5 = $a === false;
      $c5 = $a === 1;
      $d5 = $a === 0;
      $e5 = $a === -1;
      $f5 = $a === "1";
      $g5 = $a === null;
      $h5 = $a === "php";

      $a = "1";
      $a6 = $a === true;
      $b6 = $a === false;
      $c6 = $a === 1;
      $d6 = $a === 0;
      $e6 = $a === -1;
      $f6 = $a === "1";
      $g6 = $a === null;
      $h6 = $a === "php";

      $a = null;
      $a7 = $a === true;
      $b7 = $a === false;
      $c7 = $a === 1;
      $d7 = $a === 0;
      $e7 = $a === -1;
      $f7 = $a === "1";
      $g7 = $a === null;
      $h7 = $a === "php";

      $a = "php";
      $a8 = $a === true;
      $b8 = $a === false;
      $c8 = $a === 1;
      $d8 = $a === 0;
      $e8 = $a === -1;
      $f8 = $a === "1";
      $g8 = $a === null;
      $h8 = $a === "php";
?>
<br> 
<table width="90%" border="3" align="center">
  <tbody>
    <tr>
      <th width="10%" height="48" scope="col">&nbsp;</th>
      <th width="10%" height="48" scope="col">true</th>
      <th width="10%" height="48" scope="col">false</th>
      <th width="10%" height="48" scope="col">1</th>
      <th width="10%" height="48" scope="col">0</th>
      <th width="10%" height="48" scope="col">-1</th>
      <th width="10%" height="48" scope="col">&quot;1&quot;</th>
      <th width="10%" height="48" scope="col">null</th>
      <th width="10%" height="48" scope="col">&quot;php&quot;</th>
    </tr>
    <tr>
      <th height="48" scope="row">true</th>
      <td><?= print_r (($converted_res = $a1 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $b1 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $c1 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $d1 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $e1 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $f1 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $g1 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $h1 ? 'true' : 'false'),true) ?></td>
    </tr>
    <tr>
      <th height="48" scope="row">false</th>
      <td><?= print_r (($converted_res = $a2 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $b2 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $c2 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $d2 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $e2 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $f2 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $g2 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $h2 ? 'true' : 'false'),true) ?></td>
    </tr>
    <tr>
      <th height="48" scope="row">1</th>
      <td><?= print_r (($converted_res = $a3 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $b3 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $c3 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $d3 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $e3 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $f3 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $g3 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $h3 ? 'true' : 'false'),true) ?></td>
    </tr>
    <tr>
   <th height="48" scope="row">0</th>
      <td><?= print_r (($converted_res = $a4 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $b4 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $c4 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $d4 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $e4 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $f4 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $g4 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $h4 ? 'true' : 'false'),true) ?></td>
    </tr>
    <tr>
      <th height="48" scope="row">-1</th>
      <td><?= print_r (($converted_res = $a5 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $b5 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $c5 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $d5 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $e5 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $f5 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $g5 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $h5 ? 'true' : 'false'),true) ?></td>
    </tr>
    <tr>
      <th height="48" scope="row">&quot;1&quot;</th>
      <td><?= print_r (($converted_res = $a6 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $b6 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $c6 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $d6 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $e6 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $f6 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $g6 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $h6 ? 'true' : 'false'),true) ?></td>
    </tr>
    <tr>
      <th height="48" scope="row">null</th>
      <td><?= print_r (($converted_res = $a7 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $b7 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $c7 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $d7 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $e7 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $f7 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $g7 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $h7 ? 'true' : 'false'),true) ?></td>
    </tr>
    <tr>
      <th height="48" scope="row">&quot;php&quot;</th>
      <td><?= print_r (($converted_res = $a8 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $b8 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $c8 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $d8 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $e8 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $f8 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $g8 ? 'true' : 'false'),true) ?></td>
      <td><?= print_r (($converted_res = $h8 ? 'true' : 'false'),true) ?></td>
    </tr>
  </tbody>
</table>

<script src="./JS/init.js"></script>
</html>

