<?php
/**
 * Author: Jeff Moser
 * Date: 4/16/20
 * Time: 11:41 AM
 */

class Token
{

    private $currentToken;
    private $newToken;

    public function __construct()
    {
        if(isset($_SESSION["token"])) {
            $this->currentToken = $_SESSION['token'];
        } else {
            $this->renewToken();
        }
    }

    public function getCurrentToken()
    {
        return $this->currentToken;
    }

    public function checkToken($postValue)
    {
        if ($postValue == $this->currentToken) {
            return true;
        }

        return false;
    }

    public function renewToken()
    {
        $this->currentToken = $this->generateToken();
        $_SESSION['token'] = $this->currentToken;
    }

    private function generateToken()
    {
        return md5(rand(0, 9999999999));
    }
}
