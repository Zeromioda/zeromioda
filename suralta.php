<?php
$twoWheels = ["Bicycle", "Motorcycle"];
$fourWheels = ["Car", "Truck"];
$sixWheels = ["Six-Wheeler Truck"];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $type = $_POST['vehicle_type'];
    $name = $_POST['vehicle_name'];

    if (!empty($name)) {
        if ($type === "2_wheels") {
            $twoWheels[] = htmlspecialchars(string: $name);
        } elseif ($type === "4_wheels") {
            $fourWheels[] = htmlspecialchars(string: $name);
        } elseif ($type === "6_wheels") {
            $sixWheels[] = htmlspecialchars(string: $name);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Type Management</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }
        h1, h2 {
            margin: 20px 0;
        }
        form {
            margin-bottom: 20px;
        }
        button {
            margin: 10px;
            padding: 10px 20px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
        }
        button:hover {
            background-color: #45a049;
        }
        input {
            padding: 5px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            font-size: 24px;
        }
    </style>
</head>
<body>
    <h1>Type Management</h1>

    <form method="post">
        <button type="submit" name="vehicle_type" value="2_wheels">Add 2 Wheels</button>
        <button type="submit" name="vehicle_type" value="4_wheels">Add 4 Wheels</button>
        <button type="submit" name="vehicle_type" value="6_wheels">Add 6 Wheels</button>
        <br>
        <input type="text" name="vehicle_name" placeholder="Enter Vehicle Name" required>
        <button type="submit">Add Vehicle</button>
    </form>

    <h2>2 Wheels Vehicles</h2>
    <ul>
            <li><?php echo $vehicle; ?></li>
    </ul>

    <h2>4 Wheels Vehicles</h2>
    <ul>
            <li><?php echo $vehicle; ?></li>
    </ul>

    <h2>6 Wheels Vehicles</h2>
    <ul>
            <li><?php echo $vehicle; ?></li>
    </ul>
</body>
</html>