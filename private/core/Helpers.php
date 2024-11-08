<?php

function getVar($key): string
{
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }

    return "";
}

function getSelect($key, $value): string
{
    if (isset($_POST[$key])) {
        if ($_POST[$key] == $value) {
            return " selected ";
        }
    }

    return "";
}

function escape($var)
{
    return htmlspecialchars($var, ENT_QUOTES);
}