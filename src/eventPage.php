<?php
require('database.php')

    ?>



<script>
    function redirectMainPage() {
        var url = "http://127.0.0.1/mainPage.php";
        window.location.href = url;
    }
    function redirectKoppel() {
        var url = "http://127.0.0.1/koppel.php";
        window.location.href = url;
    }
</script>

<html>

<head>
    <title>Events</title>
    <link rel="stylesheet" href="fullstack.css">

    </style>


</head>

<body class="gridlayout">
    <h1 class="welcomeText">Please enter here your information.</h1>
    <h2 class="title">Cafe</h2>

    <form id="bndForm" action="eventPagephp.php" method="POST">
        <input id="bndInput" required type="text" name="bndname" placeholder="Event name here">
        <input type="date" id="eventDate" required name="date">
        <input id="eventPrice" required type="number" name="amount" placeholder="€19,99">
        <input id="eventSubmit" type="submit" value="submit">
    </form>

    <a onclick="redirectMainPage();">Main Page</a>
    <a onclick="redirectKoppel();">koppel</a>

</body>

</html>
