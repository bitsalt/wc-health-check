<?php
/**
 * Author: Jeff Moser
 * Date: 4/16/20
 */

class Alerts
{
    /**
     * Required for main vs subdir use
     * @var string
     */
    private $dir;

    /**
     * Relative path to alerts file
     * @var string
     */
    private $filepath;

    /**
     * The alert message
     * @var string
     */
    private $msg;


    public function __construct($dir)
    {
        $this->dir = $dir;
        $this->filepath = $this->dir . '../../data/cherwell_email_support/alerts/alert.txt';
    }

    public function getAlertWarning()
    {
        $alertMsg = $this->getAlertMessage();

        if (!empty($alertMsg)) {
            return '<div class="alert alert-danger"><i class="fas fa-exclamation-triangle fa-2x"></i> '.$alertMsg.'</div>';
        }

        return '';
    }

    public function getAlertMessage() {

        // read contents of file into an array of lines
        $lines = file($this->filepath);

        $alert = '';

        foreach ($lines as $line) {
            if (!empty($line) && '#' != substr($line, 0, 1) && false == ctype_space($line)) {
                $alert .= $line;
            }
        }

        //    echo 'file contents: <br><br><pre>'; print_r($lines);
        //    echo '</pre><br><br>alert message:'.$alert.':';
        //    exit;

        return $alert;
    }


    public function saveAlertMessage($msg)
    {
        $comments = $this->getAlertComments();
        $fh = fopen($this->filepath, 'w+');
        $result = fwrite($fh, $comments . $msg);
        fclose($fh);
        return $result;
        //return file_put_contents($this->filepath, $comments . $msg . "\n");

    }

    private function getAlertComments()
    {
        // read contents of file into an array of lines
        $lines = file($this->filepath);

        $comments = '';

        foreach ($lines as $line) {
            if ('#' == substr($line, 0, 1) || (true == strpos($line, " ") && strlen($line) == 1)) {
                $comments .= $line;
            }
        }

        return $comments;
    }

}

