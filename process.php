<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kengen";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get POST data
$prep = $_POST['prep'];
$date = $_POST['date'];
$name = $_POST['name'];
$staff_number = $_POST['staff-number'];
$dept = $_POST['dept'];
$floor_office = $_POST['floor-office'];
$assignment_type = isset($_POST['assignment-type']) ? implode(",", $_POST['assignment-type']) : '';

$laptop_make = $_POST['laptop-make'];
$laptop_model = $_POST['laptop-model'];
$laptop_serial = $_POST['laptop-serial'];
$laptop_tag = $_POST['laptop-tag'];

$pc_make = $_POST['pc-make'];
$pc_model = $_POST['pc-model'];
$pc_serial = $_POST['pc-serial'];
$pc_tag = $_POST['pc-tag'];

$monitor_make = $_POST['monitor-make'];
$monitor_model = $_POST['monitor-model'];
$monitor_serial = $_POST['monitor-serial'];
$monitor_tag = $_POST['monitor-tag'];

$ups_make = $_POST['ups-make'];
$ups_model = $_POST['ups-model'];
$ups_serial = $_POST['ups-serial'];
$ups_tag = $_POST['ups-tag'];

$mouse_make = $_POST['mouse-make'];
$mouse_model = $_POST['mouse-model'];
$mouse_serial = $_POST['mouse-serial'];
$mouse_tag = $_POST['mouse-tag'];

$cable_make = $_POST['cable-make'];
$cable_model = $_POST['cable-model'];
$cable_serial = $_POST['cable-serial'];
$cable_tag = $_POST['cable-tag'];

$bag_make = $_POST['bag-make'];
$bag_model = $_POST['bag-model'];
$bag_serial = $_POST['bag-serial'];
$bag_tag = $_POST['bag-tag'];

$replace_laptop_make = $_POST['replace-laptop-make'];
$replace_laptop_model = $_POST['replace-laptop-model'];
$replace_laptop_serial = $_POST['replace-laptop-serial'];
$replace_laptop_tag = $_POST['replace-laptop-tag'];

$replace_pc_make = $_POST['replace-pc-make'];
$replace_pc_model = $_POST['replace-pc-model'];
$replace_pc_serial = $_POST['replace-pc-serial'];
$replace_pc_tag = $_POST['replace-pc-tag'];

$replace_monitor_make = $_POST['replace-monitor-make'];
$replace_monitor_model = $_POST['replace-monitor-model'];
$replace_monitor_serial = $_POST['replace-monitor-serial'];
$replace_monitor_tag = $_POST['replace-monitor-tag'];

$replace_ups_make = $_POST['replace-ups-make'];
$replace_ups_model = $_POST['replace-ups-model'];
$replace_ups_serial = $_POST['replace-ups-serial'];
$replace_ups_tag = $_POST['replace-ups-tag'];

$replace_mouse_make = $_POST['replace-mouse-make'];
$replace_mouse_model = $_POST['replace-mouse-model'];
$replace_mouse_serial = $_POST['replace-mouse-serial'];
$replace_mouse_tag = $_POST['replace-mouse-tag'];

$replace_cable_make = $_POST['replace-cable-make'];
$replace_cable_model = $_POST['replace-cable-model'];
$replace_cable_serial = $_POST['replace-cable-serial'];
$replace_cable_tag = $_POST['replace-cable-tag'];

$replace_bag_make = $_POST['replace-bag-make'];
$replace_bag_model = $_POST['replace-bag-model'];
$replace_bag_serial = $_POST['replace-bag-serial'];
$replace_bag_tag = $_POST['replace-bag-tag'];

// SQL query to insert data into the database
$sql = "INSERT INTO ict_equipment_assignment (
    prep, date, name, staff_number, dept, floor_office, assignment_type, 
    laptop_make, laptop_model, laptop_serial, laptop_tag, 
    pc_make, pc_model, pc_serial, pc_tag, 
    monitor_make, monitor_model, monitor_serial, monitor_tag, 
    ups_make, ups_model, ups_serial, ups_tag, 
    mouse_make, mouse_model, mouse_serial, mouse_tag, 
    cable_make, cable_model, cable_serial, cable_tag, 
    bag_make, bag_model, bag_serial, bag_tag, 
    replace_laptop_make, replace_laptop_model, replace_laptop_serial, replace_laptop_tag, 
    replace_pc_make, replace_pc_model, replace_pc_serial, replace_pc_tag, 
    replace_monitor_make, replace_monitor_model, replace_monitor_serial, replace_monitor_tag, 
    replace_ups_make, replace_ups_model, replace_ups_serial, replace_ups_tag, 
    replace_mouse_make, replace_mouse_model, replace_mouse_serial, replace_mouse_tag, 
    replace_cable_make, replace_cable_model, replace_cable_serial, replace_cable_tag, 
    replace_bag_make, replace_bag_model, replace_bag_serial, replace_bag_tag
) VALUES (
    '$prep', '$date', '$name', '$staff_number', '$dept', '$floor_office', '$assignment_type', 
    '$laptop_make', '$laptop_model', '$laptop_serial', '$laptop_tag', 
    '$pc_make', '$pc_model', '$pc_serial', '$pc_tag', 
    '$monitor_make', '$monitor_model', '$monitor_serial', '$monitor_tag', 
    '$ups_make', '$ups_model', '$ups_serial', '$ups_tag', 
    '$mouse_make', '$mouse_model', '$mouse_serial', '$mouse_tag', 
    '$cable_make', '$cable_model', '$cable_serial', '$cable_tag', 
    '$bag_make', '$bag_model', '$bag_serial', '$bag_tag', 
    '$replace_laptop_make', '$replace_laptop_model', '$replace_laptop_serial', '$replace_laptop_tag', 
    '$replace_pc_make', '$replace_pc_model', '$replace_pc_serial', '$replace_pc_tag', 
    '$replace_monitor_make', '$replace_monitor_model', '$replace_monitor_serial', '$replace_monitor_tag', 
    '$replace_ups_make', '$replace_ups_model', '$replace_ups_serial', '$replace_ups_tag', 
    '$replace_mouse_make', '$replace_mouse_model', '$replace_mouse_serial', '$replace_mouse_tag', 
    '$replace_cable_make', '$replace_cable_model', '$replace_cable_serial', '$replace_cable_tag', 
    '$replace_bag_make', '$replace_bag_model', '$replace_bag_serial', '$replace_bag_tag'
)";


if ($conn->query($sql) === TRUE) {
    $message = "New record created successfully";
    echo '<script type="text/javascript">
            localStorage.setItem("message", "success|' . $message . '");
            window.location.href = "new-issuance.php";
          </script>';
} else {
    $error = "Error: " . $sql . "<br>" . $conn->error;
    echo '<script type="text/javascript">
            localStorage.setItem("message", "error|' . $error . '");
            window.location.href = "new-issuance.php";
          </script>';
}

$conn->close();
?>
