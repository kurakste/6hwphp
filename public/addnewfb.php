<?php 
/**
 * API AddNewFB
 *
 * @author kurakste
 */

require_once('../engine/dblib.php');
require_once('../engine/feedBackModel.php');

if (isset($_POST['fmessage']) && isset($_POST['fname'])) {
    if (addFeedback($_POST['fmessage'], $_POST['fname']) == 'DONE') {
        header('Location: feedback.php');
    } else {
        echo 'Something goes wrong.';
    }
} else {
    echo 'don\'t.';
}

