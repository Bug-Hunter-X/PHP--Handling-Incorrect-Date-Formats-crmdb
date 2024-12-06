```php
$date = '2024-03-10';
$dateObj = DateTime::createFromFormat('Y-m-d', $date);
if ($dateObj === false) {
    echo 'Incorrect date format';
} else {
    echo $dateObj->format('Y-m-d');
}
```