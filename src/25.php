<?php
// Create an array with some sample data
$data = [
    ['name' => 'Alice', 'age' => 20],
    ['name' => 'Bob', 'age' => 30],
    ['name' => 'Charlie', 'age' => 40]
];

// Loop through the array and print each item
foreach ($data as $item) {
    echo "Name: " . $item['name'] . ", Age: " . $item['age'] . "\n";
}
