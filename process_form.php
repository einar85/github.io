<?php
// Retrieve form data
$name = $_POST['name'];
$class = $_POST['class'];
$tuesday09 = $_POST['tuesday09'];
$tuesday12 = $_POST['tuesday12'];
$wednesday09 = $_POST['wednesday09'];

// Group students based on their answers (this is just a basic example)
// You can implement your own logic here to organize students into groups
// For demonstration purposes, we'll just echo the data for now
echo "<h2>Grouping Results</h2>";
echo "<p>Name: $name</p>";
echo "<p>Class: $class</p>";
echo "<p>Tuesday 09:00 - 11:00: $tuesday09</p>";
echo "<p>Tuesday 12:00 - 14:00: $tuesday12</p>";
echo "<p>Wednesday 09:00 - 11:00: $wednesday09</p>";
?>
