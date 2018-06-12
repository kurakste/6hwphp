<?php 
/**
 * MAthLab for Homework #6
 *
 * @author kurakste
 * @version $Id$
 * @copyright kurakste, 06 июня, 2018
 * @package default
 */


/**
 * We send array of action, arg1, arg2 as params and gets result or error 
 * @param Array
 * @return text
 * @author kurakste
 */
function doMath(array $params) 
{
    $arg1 = (int) $params['arg1'];
    $arg2 = (int) $params['arg2'];
    $action = (string) $params['action'];
    $result ='';

    switch ($action) {
    case 'add':
        $result = $arg1 + $arg2;
        break;
    case 'minus':
        $result = $arg1 - $arg2;
        break;
    case 'multiply':
        $result = $arg1 * $arg2;
        break;
    case 'divide':
        if ($arg2 === 0) {
            $result = 'Error. Division by zerro';
        } else {
            $result = $arg1 / $arg2;
        }
        break;
    default: 
        $result = 'Something goes wrong...';
        break;
    }
    return $result;
}

