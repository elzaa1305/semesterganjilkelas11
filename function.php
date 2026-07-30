<?php
function hitungLuasPersegi($sisi)
{
    return $sisi * $sisi;
}

echo hitungLuasPersegi(5);
echo "<br>";

function hitungLuasLingkaran($jariJari)
{
    return pi() * $jariJari * $jariJari;
}

echo hitungLuasLingkaran(7);
echo "<br>";
?>