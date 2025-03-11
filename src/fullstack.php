<?php
require("database.php");
$conn->select_db("fullstackDB");
?>
<script>

    function submitButton() {
        alert("Band added succesfully");
    }
    function redirect() {
        var url = "http://127.0.0.1/eventPage.php";
        window.location.href = url;
    }


</script>

<html>

<head>
    <title>Fullstack</title>
    <link rel="stylesheet" href="fullstack.css">
</head>

<body class="gridlayout">
    <h1 class="welcomeText"> Add here your band information.</h1>
    <h2 class="title">Cafe</h2>
    <form id="form" action="fullstackphp.php" method="POST">
        <input id="nameInput" required type="text" name="name" placeholder="Band Name here">
        <select id="genreInput" required name="genre">
            <option value="" disabled selected>Select a genre</option>
            <option value="Rock">Rock</option>
            <option value="Pop">Pop</option>
            <option value="Jazz">Jazz</option>
            <option value="Classical">Classical</option>
            <option value="Hip-Hop">Hip-Hop</option>
        </select>
        <input class="submitbtn" type="submit" value="submit" onclick="submitButton();">
    </form>

    <button onclick="redirect();">Add your event!</button>
</body>

</html>

<?php

?>