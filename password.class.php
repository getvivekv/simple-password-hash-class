<?php

class Password_Hash
{

    public static function hash($password)
    {
        return hash("sha512", $password);
    }

    public static function isValid($password, $hash)
    {
        if (self::hash($password) === $hash)
            return true;
    }
}

$hash = Password_Hash::hash('vivek');
if (Password_Hash::isValid('vivek', $hash))
    echo 'Authentication success';
else
    echo 'Authentication failed';
?>