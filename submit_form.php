<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $gmail = $_POST['gmail'];
    $address = $_POST['address'];
    $amount = $_POST['amount'];

    $to = "sohailahmedhussain98@gmail.com"; // Replace with your email
    $subject = "New Shilajit Order";
    $message = "Name: $name\nPhone: $phone\nGmail: $gmail\nAddress: $address\nAmount: $amount";
    $headers = "From: noreply@file:///C:/Users/Sohail%20PC/OneDrive/Desktop/form/form.html";

    if (mail($to, $subject, $message, $headers)) {
        echo "Order submitted successfully!";
    } else {
        echo "Error submitting order.";
    }
}
?>