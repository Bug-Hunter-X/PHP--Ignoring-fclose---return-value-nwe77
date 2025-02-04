```php
$file = fopen('myfile.txt', 'r');
if ($file) {
    // Process the file
    while (($line = fgets($file)) !== false) {
        // Process each line
    }
    fclose($file);
} else {
    // Handle file opening error
    echo "Error opening file";
}
```