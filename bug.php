```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } else if (is_string($value) && strpos($value, 'error') !== false) {
      //This line is problematic. It modifies the original array during iteration
      unset($data[$key]);
    }
  }
  return $data;
}

$myData = ['a' => 1, 'b' => 'error message', 'c' => ['d' => 4, 'e' => 'another error']];
$processedData = processData($myData);
print_r($processedData); // Output will be incorrect
```