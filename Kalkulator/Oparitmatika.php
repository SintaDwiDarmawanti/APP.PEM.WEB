<?php

//ambil isi form dn simpan ke variabel
$operand1 = $_REQUEST['operand1'];
$operand2 = $_REQUEST['operand2'];
$operator = $_REQUEST['operator'];

//rumus perhitungan
$perhitungan = $operand1 . $operator . $operand2;

eval ("\$hasil = $perhitungan;");

echo "Nilai Operand1 : <b> $operand1 </b><br>";
echo "Nilai Operand2 : <b> $operand2 </b><br>";
echo "Menggunakan Operator : <b> $operator </b><br>";
echo "Hasil Perhitungan : <b> $hasil </b>";

?>
<style>
body {
    background-color: #97799ba;
}
</style>