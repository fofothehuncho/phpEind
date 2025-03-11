<?php
require("database.php");

// Fetch events
$sql = "SELECT * FROM events";
$result = $conn->query($sql);

// Fetch bands
$query = "SELECT * FROM bands";
$result2 = $conn->query($query);

$conn->close();
?>

<script>
    function redirect() {
        var url = "http://127.0.0.1/mainPage.php";
        window.location.href = url;
    }
</script>

<!DOCTYPE html>
<html>

<head>
    <title>Band Event</title>
    <link rel="stylesheet" href="fullstack.css">
</head>

<body>
    <header>
        <h1>CAFE</h1>
        <link rel="stylesheet" href="fullstack.css">
    </header>
    <form action="koppelphp.php" method="POST">
        <label for="events">Select Event:</label>
        <select name="eventNaam" id="events">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='{$row['idevents']}'>{$row['eventNaam']}</option>";
                }
            } else {
                echo "<option>No events found</option>";
            }
            ?>
        </select>

        <div id="bands">
            <?php
            if ($result2->num_rows > 0) {
                echo "<h3>Select Bands:</h3>";
                while ($bandRow = $result2->fetch_assoc()) {
                    echo "<input type='checkbox' name='bands[]' value='{$bandRow['idbands']}'> {$bandRow['bandName']}<br>";
                }
            } else {
                echo "No bands found";
            }
            ?>
        </div>

        <input type="submit" value="Submit">

        <a onclick="redirect();">Main Page</a>


    </form>
</body>

</html>