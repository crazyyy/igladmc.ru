<?php
$to = "igolochka8@mail.ru";
$subject = "Test";
$message = "Hello, world!";
$headers = "From: test@igladmc.ru";

if (mail($to, $subject, $message, $headers)) {

echo "Mail sent";
} else {
echo "Mail not sent";
}
