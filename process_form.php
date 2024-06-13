<?php
// Retrieve form data
$name = $_POST['name'];
$class = $_POST['class'];
$tuesday09 = $_POST['tuesday09'];
$tuesday12 = $_POST['tuesday12'];
$wednesday09 = $_POST['wednesday09'];

// Define array to hold form data
$form_data = array(
    'Name' => $name,
    'Class' => $class,
    'Tuesday 09:00 - 11:00' => $tuesday09,
    'Tuesday 12:00 - 14:00' => $tuesday12,
    'Wednesday 09:00 - 11:00' => $wednesday09
);

// Define array to hold group choices
$group_choices = array(
    'Minecraft' => array(),
    'Minecraft2' => array(),
    'Filmklubb' => array(),
    'Hjemmeside' => array(),
    'Dans' => array(),
    'Kunst (hele dagen)' => array(),
    'Skulpturpark' => array(),
    'Padel' => array(),
    'Brettspill' => array(),
    'Brettspill2' => array(),
    'Programmering' => array(),
    'Matlaging' => array()
);

// Group students based on their choices
foreach ($form_data as $question => $choice) {
    if (array_key_exists($choice, $group_choices)) {
        $group_choices[$choice][] = $form_data['Name'];
    }
}

// Display group choices in HTML tables
foreach ($group_choices as $group => $students) {
    echo "<h2>$group</h2>";
    if (!empty($students)) {
        echo "<table border='1'>";
        echo "<tr><th>Name</th></tr>";
        foreach ($students as $student) {
            echo "<tr><td>$student</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No students selected $group</p>";
    }
}
?>

