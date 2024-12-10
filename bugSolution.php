function foo(a, b) {
  $a = is_null($a) ? 0 : $a;
  $b = is_null($b) ? 0 : $b;
  return $a + $b;
}

$result = foo(null, 5); // Returns 5
$result = foo(5, null); // Returns 5
$result = foo(null, null); //Returns 0
$result = foo(5, 5); //Returns 10