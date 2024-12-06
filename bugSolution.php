```php
<?php
function formatDate($dateString, $format = 'Y-m-d') {
    $dateObj = DateTime::createFromFormat($format, $dateString);
    if ($dateObj !== false && $dateObj->format($format) === $dateString) {
        return $dateObj->format('Y-m-d');
    } else {
        return 'Invalid date format';
    }
}

$date = '2024-03-10';
echo formatDate($date) . '\n'; // Outputs: 2024-03-10

$invalidDate = '2024-13-10';
echo formatDate($invalidDate) . '\n'; // Outputs: Invalid date format

$anotherInvalidDate = '2024/03/10';
echo formatDate($anotherInvalidDate, 'Y/m/d') . '\n'; // Outputs: 2024-03-10

?>
```