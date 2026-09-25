PHP Programming Assignments – Control Structures, Loops & Number Operations
Overview

This repository contains my PHP programming assignments and practice exercises. The assignments focus on fundamental PHP programming concepts, including conditional statements, comparison operators, modulus operations, loops, nested loops, and mathematical calculations.

The purpose of these exercises is to strengthen my understanding of PHP fundamentals and improve my ability to solve programming problems using logical thinking and basic control structures.

Assignments
1. Greatest and Smallest of Three Numbers

File: question1.php

This program accepts three integer numbers and determines the greatest and smallest number without using built-in functions such as max() or min().

Concepts practiced:

Variables
Integer values
if, elseif, and else
Comparison operators
Logical AND operator &&
2. Divisibility by 3 and 5

File: question2.php

This program checks whether a number is:

Divisible by both 3 and 5
Divisible only by 3
Divisible only by 5
Not divisible by either

Concepts practiced:

if / elseif / else
Modulus operator %
Logical AND &&
Conditional logic

Example:

15 → Divisible by both 3 and 5
12 → Divisible by 3
20 → Divisible by 5
7  → Neither
3. Odd and Even Numbers

Files:

question3_odd.php
question3_even.php

The first program prints odd numbers from 2 to 20.

The second program prints even numbers from 35 down to 7.

Concepts practiced:

for loops
Increment ++
Decrement --
Modulus operator %
Odd/even number checking
4. Numbers Divisible by Both 2 and 5

File: question4.php

This program prints numbers between 50 and 2 that are divisible by both 2 and 5.

Expected output:

50 40 30 20 10

Concepts practiced:

for loop
Reverse counting
Modulus operator %
Logical AND &&
5. Reverse a Number

File: question5.php

This program reverses a given number without using the built-in strrev() function.

Example:

Input:   12345
Output:  54321

Concepts practiced:

while loop
Modulus %
intdiv()
Extracting digits
Mathematical manipulation of numbers

The program repeatedly extracts the last digit and builds the reversed number.

6. Least Common Multiple (LCM)

File: question6.php

This program calculates the Least Common Multiple (LCM) of two positive integers.

Example:

LCM of 8 and 12 = 24

Concepts practiced:

while loop
Modulus %
Common multiples
Conditional statements
Mathematical problem solving
7. Highest Common Factor (HCF)

File: question7.php

This program calculates the Highest Common Factor (HCF) of two integers.

Example:

HCF of 18 and 24 = 6

HCF is also commonly known as GCD (Greatest Common Divisor).

Concepts practiced:

for loop
Modulus %
Factors
Logical AND &&
Mathematical calculations
8. Multiplication Table

File: question8.php

This program generates a multiplication table from 1 × 1 to 12 × 12.

The output is formatted as an HTML table similar to the assignment requirements.

Concepts practiced:

Nested for loops
HTML tables
PHP inside HTML
Dynamic table generation
Multiplication operations
<tr>, <th>, and <td>

The main logic is:

for ($i = 1; $i <= 12; $i++) {

    for ($j = 1; $j <= 12; $j++) {

        $result = $i * $j;

    }
}

The outer loop controls the rows, while the inner loop controls the columns.

Concepts Covered

Through these assignments, I practiced the following PHP concepts:

Concept	Application
Variables	Storing numbers and results
if statements	Making decisions
elseif / else	Handling multiple conditions
Comparison operators	Comparing numbers
Logical &&	Checking multiple conditions
Modulus %	Divisibility and digit extraction
for loop	Repeating operations
while loop	Repeating until a condition changes
++	Increasing a counter
--	Decreasing a counter
Nested loops	Creating the multiplication table
intdiv()	Removing the last digit
HTML + PHP	Creating formatted web output
Mathematical logic	LCM, HCF, reverse numbers
Repository Structure

A recommended structure for this assignment is:

PHP-Assignments/
│
├── README.md
│
├── question1.php
├── question2.php
├── question3_odd.php
├── question3_even.php
├── question4.php
├── question5.php
├── question6.php
├── question7.php
└── question8.php
How to Run the Programs

These programs can be run using XAMPP and a web browser.

1. Start XAMPP

Open XAMPP Control Panel and start:

Apache
2. Put the project in htdocs

For example:

C:\xampp\htdocs\PHP-Assignments\
3. Open the browser

Go to:

http://localhost/PHP-Assignments/question1.php

Change the filename to run the other assignments.

For example:

http://localhost/PHP-Assignments/question8.php
Learning Outcome

After completing these assignments, I practiced how to:

Compare and evaluate numbers.
Use conditions to make decisions.
Determine whether numbers are odd, even, or divisible.
Use loops for repetitive tasks.
Work with numbers mathematically.
Reverse a number using arithmetic operations.
Calculate LCM and HCF.
Understand nested loops.
Generate an HTML table dynamically using PHP.
Combine PHP logic with HTML output.
Conclusion

These exercises helped me build a stronger foundation in PHP control structures, loops, mathematical operations, and problem-solving. They are beginner-level exercises designed to improve my understanding of how PHP executes logic step by step.