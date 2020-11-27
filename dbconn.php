<?php

$conn = mysqli_connect("localhost", "fidellis", "anotida2642", "webchat");

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}