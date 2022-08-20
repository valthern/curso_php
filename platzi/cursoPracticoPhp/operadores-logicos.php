<?php
$valorA=true;
$valorB=false;

$resultado=$valorA or $valorB;
var_dump(true or true);
var_dump(false or false);
var_dump(true or false);
var_dump(false or true);
print("\n");
var_dump(true and true);
var_dump(false and false);
var_dump(true and false);
var_dump(false and true);
print("\n");
var_dump(true xor true);
var_dump(false xor false);
var_dump(true xor false);
var_dump(false xor true);
print("\n");
var_dump(!$valorA);
var_dump(!$valorB);
