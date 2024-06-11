<?php
function isValidEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function arePasswordsEqual($password, $confirmPassword) {
    return ($password === $confirmPassword);
}

function passwordLength($password) {
    if (strlen($password) >= 8) {
        return true;
    } else {
        return false;
    }
}