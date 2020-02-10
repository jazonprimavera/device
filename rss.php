<?php
$domOBJ = new DOMDocument();
$domOBJ->load("https://app-pua.herokuapp.com/");

$content = $domOBJ->getElementsByTagName("item");

foreach ($content as $data) {

    $username = $data->getElementsByTagName("username")->item(0)->nodeValue;
    $email = $data->getElementsByTagName("email")->item(0)->nodeValue;
    $address = $data->getElementsByTagName("address")->item(0)->nodeValue;
    $contacts = $data->getElementsByTagName("contacts")->item(0)->nodeValue;

    echo "
    <ul>
    <li>Username: <strong>$username</strong></li>
    <li>Email: <strong>$email</strong></li>
    <li>Address: <strong>$address</strong></li>
    <li>Contacts: <strong>$contacts</strong></li>
    </ul>";
}