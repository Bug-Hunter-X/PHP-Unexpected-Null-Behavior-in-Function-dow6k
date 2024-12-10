function foo(a, b) {
  if (a === null || b === null) {
    return null; 
  }
  return a + b;
}

$result = foo(null, 5); // Returns null
$result = foo(5, null); // Returns null
$result = foo(null, null); //Returns null
$result = foo(5, 5); //Returns 10