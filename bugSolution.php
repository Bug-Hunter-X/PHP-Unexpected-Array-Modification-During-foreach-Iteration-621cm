```php
function processData(array $data): array {
  $newData = [];
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $newData[$key] = processData($value); 
    } else if (is_string($value) && strpos($value, 'error') === false) {
      $newData[$key] = $value;
    }
  }
  return $newData;
}

$myData = ['a' => 1, 'b' => 'error message', 'c' => ['d' => 4, 'e' => 'another error']];
$processedData = processData($myData);
print_r($processedData); // Correct output
```