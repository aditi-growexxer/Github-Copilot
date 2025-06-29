<?php

// Create a function to calculate the area of a rectangle
// ============ 1. Basic Function: Area of Rectangle ============
function calculateArea($length, $width) {
    return $length * $width;
}

echo "Area of 5x10: " . calculateArea(5, 10) . "\n\n";

// Print all key-value pairs in an associative array
// ============ 2. Associative Array and Loop ============
$data = [
    "name" => "John",
    "age" => 30,
    "country" => "India"
];

echo "User Info:\n";
foreach ($data as $key => $value) {
    echo "$key: $value\n";
}
echo "\n";

// Validate if email is in correct format
// ============ 3. Email Validation ============
function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

$emailToTest = "test@example.com";
echo "Is '$emailToTest' a valid email? " . (isValidEmail($emailToTest) ? "Yes" : "No") . "\n\n";

// Write data to a text file
// ============ 4. File Writing ============
$filePath = "sample.txt";
$file = fopen($filePath, "w");
fwrite($file, "Hello, this is a GitHub Copilot demo in PHP!");
fclose($file);
echo "File written to $filePath\n\n";

// Hash a password and verify it
// ============ 5. Password Hashing & Verification ============
$password = "secret123";
$hashed = password_hash($password, PASSWORD_BCRYPT);
$isValid = password_verify("secret123", $hashed);

echo "Password check: " . ($isValid ? "Correct" : "Invalid") . "\n\n";

// PHPUnit-style test for calculateArea()
// ============ 6. JSON Encode/Decode ============
$userArr = ["name" => "Aditi", "role" => "Developer"];
$json = json_encode($userArr);
echo "JSON: $json\n";

$decoded = json_decode($json, true);
echo "Decoded Array:\n";
print_r($decoded);
echo "\n";

// Convert array to JSON and back
// ============ 7. Get Current Date ============
echo "Current Date: " . date("Y-m-d") . "\n\n";

// Get current date in YYYY-MM-DD format
// ============ 8. Manual Test Function ============
function testCalculateArea() {
    $expected = 50;
    $actual = calculateArea(5, 10);
    echo "Test calculateArea(): " . ($expected === $actual ? "PASS" : "FAIL") . "\n";
}

testCalculateArea();

?>
