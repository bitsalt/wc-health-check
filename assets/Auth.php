<?php
/**
 * Author: Jeff Moser
 * Date: 4/17/20
 * Simple list authentication
 */

class Auth
{
    /**
     * Array of authorized admin users
     * @var array
     */
    private $authList = [
        'mnilsen' => '6b5df8c78e719f29',
        'dsavarese' => 'a698e48df03b1213',
        'dcastonguay' => '1d47748105d7a8b7',
        'areid' => '73a0dc253892c8c8',
        'mgaddis' => '2582de83a5d65e8c',
        'elwoodard' => 'e1f14d368ed677ed',
        'djessup' => '9980567a19647ee4',
        'mharris8' => '054ac3b742077aa1'
    ];

    private $loginAttempts;
    private $userIP;

    public function __construct()
    {
        $this->getIP();
        $this->checkAttempts();
    }


    public function getAttempts() { return $this->loginAttempts; }


    public function canSeeLogin()
    {
        if (isset($_SESSION['admin-user'])) {
            // reset count
            $this->setLoginAttempts(0);
            return true;
        }

        if ($this->loginAttempts > 3) {
            echo 'kicking in canSeeLogin, count '.$this->loginAttempts; exit;
            header('Location: /no-access/');
            exit;
        }

        return true;
    }

    public function checkAuth($uname, $passwd)
    {
        if (!array_key_exists($uname, $this->authList)) {
            if ($this->loginAttempts == 3) { // strike 3?
                echo 'kicking in checkAuth -> array_key_exists(), count '.$this->loginAttempts; exit;
                header('/no-access');
            }
            return false;
        }

        if ($this->authList[$uname] == $passwd) {
            $_SESSION['admin-user'] = true;
            unset($_SESSION['login-attempts']); // start the count over
            return true;
        }

        // strike 3?
        if ($this->loginAttempts == 3) {
            echo 'kicking in checkAuth -> if == 3, count '.$this->loginAttempts; exit;
            header('/no-access');
        }
        return false;
    }

    private function getIP()
    {
        // shared internet user
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $this->userIP = $_SERVER['HTTP_CLIENT_IP'];
        }

        // a proxy user
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $this->userIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }

        // just the remote address
        $this->userIP = $_SERVER['REMOTE_ADDR'];
    }

    private function checkAttempts()
    {
        //unset($_SESSION['login-attempts']); // use only for testing...remove prior to launch
        if (isset($_SESSION['login-attempts'])) {
            $this->loginAttempts = $_SESSION['login-attempts'][$this->userIP] + 1;

        } else {
            $this->loginAttempts = 1;
        }

        $this->setLoginAttempts($this->loginAttempts);
    }

    private function setLoginAttempts($val)
    {
        $_SESSION['login-attempts'][$this->userIP] = $val;
    }
}