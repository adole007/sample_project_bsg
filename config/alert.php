<?php

class Alert
{
    public static function setMessage($category, $message)
    {
        $_SESSION['alert_category'] = $category;
        $_SESSION['alert_message'] = $message;

        return true;
    }

    public static function getMessage()
    {
        if (isset($_SESSION['alert_message']) AND $_SESSION['alert_message'] != '')
        {
            echo '<div class="alert alert-dismissible ';

            switch ($_SESSION['alert_category'])
            {
                case 'error':
                    echo ' alert-danger" role="alert">';
                break;

                case 'success':
                    echo  'alert-success" role="alert">';
                break;

                default: //case 'info':
                    echo  'alert-info" role="alert">';
                break;
                
            }
            echo $_SESSION['alert_message'];

            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';

            Self::setMessage('info', '');
        }
    }
}

?>