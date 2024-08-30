<!--
Loreto E Eclevia
Module 5
Bellevue University
August 16, 2024
-->


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loreto Customers</title>
</head>
<body>

<?php

// Before continuing, DO NOT FORGET Similar to your last four programming assignments, title the PHP file as <YourFirstName> Customer.php

// Define Customer class to hold customer information
class Customer {
    public $firstName;
    public $lastName;
    public $age;
    public $phone;

    function __construct($firstName, $lastName, $age, $phone) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->phone = $phone;
    }
}

// Create an array of customers: I'm sweet 16, lol! How I wish that I'm sweet 16. By the way, these are made up customer's phone numbers and age numbers just made up the age and phone numbers.

$customers = [
    new Customer("Alexis", "Yang", 25, "123-101-2345"),
    new Customer("Lito", "Eclevia", 16, "402-021-7777"),
    new Customer("Brandon", "Hackett", 40, "402-789-1011"),
    new Customer("Kevin", "Meza", 29, "402-456-7891"),
    new Customer("Chynna", "Lee", 19, "402-345-5678"),
    new Customer("Omar", "Johnson", 29, "402-7891-2345"),
    new Customer("Alexis", "Simmons", 34, "800-123-4567"),
    new Customer("Shane", "Tinsley", 27, "800-012-3456"),
    new Customer("Lindsey", "Yin", 39, "800-234-6565"),
    new Customer("Clay", "Lankford", 29, "800-123-1234")
];

// Display all customers in a table

echo "<h2>My Arrays of Customers:</h2>";
displayCustomers($customers);

// Display Randomized Index with array_rand()
echo "<h3>Retrieving Randomized Index with array_rand()</h3>";
$rando = array_rand($customers);
echo "First Name: " . $customers[$rando]->firstName . "<br />";
echo "Last Name: " . $customers[$rando]->lastName . "<br />";
echo "Age: " . $customers[$rando]->age . "<br />";
echo "Phone Number: " . $customers[$rando]->phone . "<br />";

// Display First Element with count()

echo "<h3>Retrieving the First Customer using count()</h3>";
echo "First Name: " . $customers[0]->firstName . "<br />";
echo "Last Name: " . $customers[0]->lastName . "<br />";
echo "Age: " . $customers[0]->age . "<br />";
echo "Phone Number: " . $customers[0]->phone . "<br />";

// Displaying Last Element with count()

echo "<h3>Retrieving the Last Customer using count()</h3>";
$lastIndex = count($customers) - 1;
echo "First Name: " . $customers[$lastIndex]->firstName . "<br />";
echo "Last Name: " . $customers[$lastIndex]->lastName . "<br />";
echo "Age: " . $customers[$lastIndex]->age . "<br />";
echo "Phone Number: " . $customers[$lastIndex]->phone . "<br />";

// Display Last Element with count() after array_reverse()

echo "<h3>Retrieving Last Element with count() after array_reverse()</h3>";
$newArray = array_reverse($customers);
echo "First Name: " . $newArray[0]->firstName . "<br />";
echo "Last Name: " . $newArray[0]->lastName . "<br />";
echo "Age: " . $newArray[0]->age . "<br />";
echo "Phone Number: " . $newArray[0]->phone . "<br />";

//  Display Finding a specific element with array_search()
echo "<h3>Locating a Specific Customer with array_search()</h3>";

// Do not forget to list a customer's information on which you have listed above: on this example I have listed myself as the target customer.
$targetCustomer = new Customer("Lito", "Eclevia", 16, "402-021-7777");
$index = array_search($targetCustomer, $customers);
if ($index !== false) {
    echo "Customer found at index $index:<br />";
    echo "First Name: " . $customers[$index]->firstName . "<br />";
    echo "Last Name: " . $customers[$index]->lastName . "<br />";
    echo "Age: " . $customers[$index]->age . "<br />";
    echo "Phone Number: " . $customers[$index]->phone . "<br />";
} else {
    echo "Customer not found.";
}

// Function to display customers in a table

function displayCustomers($customers) {
    echo "<table>";
    
   // Display table header row with column headings, added extra space to improve readabilty
    echo "<tr><th>First Name&nbsp;&nbsp;</th><th>Last Name&nbsp;&nbsp;</th><th>Age&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Phone Number</th></tr>";

    foreach ($customers as $customer) {
        echo "<tr>";
        echo "<td>" . $customer->firstName . "</td>";
        echo "<td>" . $customer->lastName . "</td>";
        echo "<td>" . $customer->age . "</td>";
        echo "<td>" . $customer->phone . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>


</body>
</html>
