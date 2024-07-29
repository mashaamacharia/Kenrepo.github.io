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

// Get query parameters
$prep = $_POST['prep'];

// Build SQL query
$sql = "SELECT * FROM ict_equipment_assignment  WHERE prep LIKE '%$prep%'";

$result = $conn->query($sql);

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link rel="stylesheet" href="generate-reports.css">
    <link rel="stylesheet" href="backreport.css">
</head>
<body> 
    <div class="report-container">
      <header>
        <image src="images\kengenlogo.jpg" alt="KenGen Logo" class="logo">
      </header>

        <div class="back-to-homepage">
           <a href="homepage.html">
            <img src="images\homepage-green-icon.png" alt="Back to Homepage" class="home-icon">
          </a>
        <div>
        <button onclick="window.print()">Print Report</button>';

if ($result->num_rows > 0) {
    echo "<table border='1'>
    <tr>
      KenGen ICT Issuance Report
    </tr>
            <tr>
                <th>Prepared By</th>
                <th>Date</th>
                <th>Name</th>
                <th>Staff Number</th>
                <th>Dept</th>
                <th>Floor/Office</th>
                <th>Assignment Type</th>
                <th>Laptop Make</th>
                <th>Laptop Model</th>
                <th>Laptop Serial</th>
                <th>Laptop Tag</th>
                <th>PC Make</th>
                <th>PC Model</th>
                <th>PC Serial</th>
                <th>PC Tag</th>
                <th>Monitor Make</th>
                <th>Monitor Model</th>
                <th>Monitor Serial</th>
                <th>Monitor Tag</th>
                <th>UPS Make</th>
                <th>UPS Model</th>
                <th>UPS Serial</th>
                <th>UPS Tag</th>
                <th>Mouse Make</th>
                <th>Mouse Model</th>
                <th>Mouse Serial</th>
                <th>Mouse Tag</th>
                <th>Cable Make</th>
                <th>Cable Model</th>
                <th>Cable Serial</th>
                <th>Cable Tag</th>
                <th>Bag Make</th>
                <th>Bag Model</th>
                <th>Bag Serial</th>
                <th>Bag Tag</th>
                <th>Replace Laptop Make</th>
                <th>Replace Laptop Model</th>
                <th>Replace Laptop Serial</th>
                <th>Replace Laptop Tag</th>
                <th>Replace PC Make</th>
                <th>Replace PC Model</th>
                <th>Replace PC Serial</th>
                <th>Replace PC Tag</th>
                <th>Replace Monitor Make</th>
                <th>Replace Monitor Model</th>
                <th>Replace Monitor Serial</th>
                <th>Replace Monitor Tag</th>
                <th>Replace UPS Make</th>
                <th>Replace UPS Model</th>
                <th>Replace UPS Serial</th>
                <th>Replace UPS Tag</th>
                <th>Replace Mouse Make</th>
                <th>Replace Mouse Model</th>
                <th>Replace Mouse Serial</th>
                <th>Replace Mouse Tag</th>
                <th>Replace Cable Make</th>
                <th>Replace Cable Model</th>
                <th>Replace Cable Serial</th>
                <th>Replace Cable Tag</th>
                <th>Replace Bag Make</th>
                <th>Replace Bag Model</th>
                <th>Replace Bag Serial</th>
                <th>Replace Bag Tag</th>
            </tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['prep'] . "</td>
                <td>" . $row['date'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['staff_number'] . "</td>
                <td>" . $row['dept'] . "</td>
                <td>" . $row['floor_office'] . "</td>
                <td>" . $row['assignment_type'] . "</td>
                <td>" . $row['laptop_make'] . "</td>
                <td>" . $row['laptop_model'] . "</td>
                <td>" . $row['laptop_serial'] . "</td>
                <td>" . $row['laptop_tag'] . "</td>
                <td>" . $row['pc_make'] . "</td>
                <td>" . $row['pc_model'] . "</td>
                <td>" . $row['pc_serial'] . "</td>
                <td>" . $row['pc_tag'] . "</td>
                <td>" . $row['monitor_make'] . "</td>
                <td>" . $row['monitor_model'] . "</td>
                <td>" . $row['monitor_serial'] . "</td>
                <td>" . $row['monitor_tag'] . "</td>
                <td>" . $row['ups_make'] . "</td>
                <td>" . $row['ups_model'] . "</td>
                <td>" . $row['ups_serial'] . "</td>
                <td>" . $row['ups_tag'] . "</td>
                <td>" . $row['mouse_make'] . "</td>
                <td>" . $row['mouse_model'] . "</td>
                <td>" . $row['mouse_serial'] . "</td>
                <td>" . $row['mouse_tag'] . "</td>
                <td>" . $row['cable_make'] . "</td>
                <td>" . $row['cable_model'] . "</td>
                <td>" . $row['cable_serial'] . "</td>
                <td>" . $row['cable_tag'] . "</td>
                <td>" . $row['bag_make'] . "</td>
                <td>" . $row['bag_model'] . "</td>
                <td>" . $row['bag_serial'] . "</td>
                <td>" . $row['bag_tag'] . "</td>
                <td>" . $row['replace_laptop_make'] . "</td>
                <td>" . $row['replace_laptop_model'] . "</td>
                <td>" . $row['replace_laptop_serial'] . "</td>
                <td>" . $row['replace_laptop_tag'] . "</td>
                <td>" . $row['replace_pc_make'] . "</td>
                <td>" . $row['replace_pc_model'] . "</td>
                <td>" . $row['replace_pc_serial'] . "</td>
                <td>" . $row['replace_pc_tag'] . "</td>
                <td>" . $row['replace_monitor_make'] . "</td>
                <td>" . $row['replace_monitor_model'] . "</td>
                <td>" . $row['replace_monitor_serial'] . "</td>
                <td>" . $row['replace_monitor_tag'] . "</td>
                <td>" . $row['replace_ups_make'] . "</td>
                <td>" . $row['replace_ups_model'] . "</td>
                <td>" . $row['replace_ups_serial'] . "</td>
                <td>" . $row['replace_ups_tag'] . "</td>
                <td>" . $row['replace_mouse_make'] . "</td>
                <td>" . $row['replace_mouse_model'] . "</td>
                <td>" . $row['replace_mouse_serial'] . "</td>
                <td>" . $row['replace_mouse_tag'] . "</td>
                <td>" . $row['replace_cable_make'] . "</td>
                <td>" . $row['replace_cable_model'] . "</td>
                <td>" . $row['replace_cable_serial'] . "</td>
                <td>" . $row['replace_cable_tag'] . "</td>
                <td>" . $row['replace_bag_make'] . "</td>
                <td>" . $row['replace_bag_model'] . "</td>
                <td>" . $row['replace_bag_serial'] . "</td>
                <td>" . $row['replace_bag_tag'] . "</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No results found.";
}

echo '</div></body></html>';

$conn->close();
?>
