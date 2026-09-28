# PHP & MySQL – Assignment 2

## Chapter 3: Arrays

**Student:** Dahir Mohamed Shaie
**Course:** PHP & MySQL
**Assignment:** Chapter 3 – Arrays

---

## About This Assignment

This assignment is part of my PHP & MySQL course. The main purpose of this assignment is to practice working with **arrays in PHP**, especially:

* One-dimensional arrays
* Associative arrays
* Two-dimensional arrays
* `foreach` loops
* Array indexes and keys
* Calculations using array values
* Finding minimum and maximum values
* Displaying PHP data in HTML tables

I created a separate PHP file for each question. Each PHP file contains a complete HTML document, and the PHP code is written inside the `<body>` section.

---

# Question 1 – One-Dimensional Array

### File

`question1.php`

### What I practiced

In Question 1, I created a one-dimensional array containing:

```php
$numbers = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];
```

The program performs several operations on the array.

### 1. Printing all elements

I used a `foreach` loop to access every value in the array:

```php
foreach ($numbers as $number) {
    echo $number . " ";
}
```

This allows me to go through each element without manually accessing every index.

### 2. Calculating the total

I created a variable:

```php
$total = 0;
```

Then I added every array element to it:

```php
$total += $number;
```

### 3. Calculating the total of even numbers

I used the modulus operator `%` to check whether a number is even:

```php
if ($number % 2 == 0) {
    $evenTotal += $number;
}
```

If the remainder is `0`, the number is even.

### 4. Calculating the total of odd numbers

If the number is not even, it is added to the odd total:

```php
else {
    $oddTotal += $number;
}
```

### 5. Finding the minimum element

I started with the first array element as the minimum:

```php
$minimum = $numbers[0];
```

Then I compared every other element with the current minimum.

### 6. Finding the maximum element

I used the same idea for the maximum:

```php
$maximum = $numbers[0];
```

The program compares each element and updates the maximum when it finds a larger value.

### 7. Finding positions

I used the array index:

```php
foreach ($numbers as $index => $number)
```

This gives me both:

* `$index` → position of the element
* `$number` → value of the element

I stored the positions of repeated minimum and maximum values in arrays.

### Main concepts learned

* Indexed arrays
* Array indexes
* `foreach`
* `if` / `elseif` / `else`
* Modulus `%`
* Variables
* Arithmetic operators
* Comparing values
* `implode()`

---

# Question 2 – Two-Dimensional Associative Array

### File

`question2.php`

### What I practiced

In Question 2, I created a **two-dimensional associative array**.

The main row keys are:

* `Light`
* `Normal`
* `Dark`

Each row contains three keys:

* `Red`
* `Green`
* `Blue`

Example:

```php
$colors = [
    "Light" => [
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ]
];
```

This is called a nested array because an array is stored inside another array.

### Accessing the data

I used a `foreach` loop:

```php
foreach ($colors as $rowName => $row)
```

Here:

* `$rowName` contains the main key such as `Light`
* `$row` contains the inner array

Then I accessed the values using their keys:

```php
$row["Red"]
$row["Green"]
$row["Blue"]
```

### Displaying the result

I used HTML table elements such as:

```html
<table>
<tr>
<th>
<td>
```

The PHP program generates the table dynamically.

### Main concepts learned

* Associative arrays
* Two-dimensional arrays
* Nested arrays
* Array keys
* `foreach`
* Accessing nested values
* PHP with HTML
* Creating HTML tables using PHP

---

# Question 3 – Student Information

### File

`question3.php`

### What I practiced

In Question 3, I created a two-dimensional associative array containing student information.

Each student has:

* Student ID
* Name
* Phone
* Address

Example:

```php
"CA221" => [
    "Name" => "Mohamed Ahmed Ali",
    "Phone" => "0648440403",
    "Address" => "Laba Dhagax, Wardhiigley"
]
```

The student ID is the main key, while `Name`, `Phone`, and `Address` are keys inside the student's array.

### Accessing student information

I used:

```php
foreach ($students as $id => $student)
```

This gives me:

* `$id` → student ID
* `$student` → student's information

Then I accessed individual values:

```php
$student["Name"]
$student["Phone"]
$student["Address"]
```

### Displaying the information

I used an HTML table to display the student records.

The table contains:

| Student ID | Name              | Phone | Address |
| ---------- | ----------------- | ----- | ------- |
| CA221      | Mohamed Ahmed Ali | Phone | Address |
| CA223      | Ahmed Abdi Jama   | Phone | Address |
| CA221-2    | Amina Nur Adan    | Phone | Address |

### Main concepts learned

* Associative arrays
* Two-dimensional arrays
* Nested arrays
* Keys and values
* `foreach`
* Accessing nested array elements
* HTML tables
* Combining PHP and HTML

---

# Files in This Repository

```text
Assignment2/
│
├── question1.php
├── question2.php
├── question3.php
│
└── README.md
```

### `question1.php`

Contains the solution for the one-dimensional array question.

### `question2.php`

Contains the solution for the two-dimensional associative array question.

### `question3.php`

Contains the solution for the student-information two-dimensional associative array question.

### `README.md`

This file explains the assignment, the files, and the PHP concepts I practiced.

---



# What I Learned

Through this assignment, I practiced how PHP arrays work and how different types of arrays can be used to store and process information.

I learned that:

1. A **one-dimensional array** stores values in a single list.
2. An **associative array** uses named keys instead of only numeric indexes.
3. A **two-dimensional array** can contain arrays inside another array.
4. `foreach` is useful for going through array elements.
5. The `%` operator can be used to check whether numbers are even or odd.
6. Array indexes can be used to find the position of elements.
7. PHP can be combined with HTML to display data in a web page.
8. Nested arrays are useful for representing structured information such as student records.

---

## Conclusion

This assignment helped me understand the basic and important concepts of **arrays in PHP**. I practiced creating arrays, accessing their values, processing their data, and displaying the results using HTML.

This is part of my learning journey as a Computer Science student, and I will continue practicing PHP and database development through more projects and assignments.
