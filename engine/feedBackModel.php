<?php 
require_once('../engine/dblib.php');
require_once('../config/params.php');
/**
 * Returns array of feedbacks.
 *
 * @return void
 * @author kurakste
 */
function getFeedbacksAsArray()
{
   dbOpen(); 
   $out =[];
   global $db;
   $request = 'SELECT * FROM feedbacks;';
   $query = mysqli_query($db, $request);
   while ($q = mysqli_fetch_assoc($query)) {
        $out[] = $q;
   }
   dbClose();
   return $out;
}

/**
 * Render feedback from database
 *
 * @param  array params
 * @return html
 * @author kurakste
 */
function renderFeedbacks()
{
    $fbs = getFeedbacksAsArray();
    $out = '<div>';
    foreach ($fbs as $fb) {
        $out .= '<div id=\''.$fb['id']
            .'\' class=\'comment\'>'.$fb['comment']
            .'</div><div class=\'auth\'>'.$fb['author']
            .'<div><a href = \'feedback.php?action=del&id='.$fb['id']
            .' \' >delete</a></div>';
        
    }
    $out .= '</div>';

    return $out;
}

/**
* Add record to the database.
*
 * @param  varchar fmessage, fauthor
 * @return Ok or Errorl
 *
 * @author kurakste
 */
function addFeedback($fmessage, $fauthor)
{
   dbOpen(); 
   $out =[];
   global $db;
   $request = 'INSERT INTO `feedbacks`(comment, author) VALUES (\''.$fmessage
    .'\', \''.$fauthor.'\');';
    echo $request;
   $query = mysqli_query($db, $request);
   $out = $query ? 'DONE' : 'ERROR'; 
   dbClose();
   return $out;
}

/**
 * Remove record from the database.
 *
 * @param int fid
 *
 * @return Ok or Errorl
 * @author kurakste
 */
function dellFeedback($id)
{
   dbOpen(); 
   $out =[];
   global $db;
   $request = 'DELETE FROM feedbacks WHERE `id`=\''.$id.'\';';
   $query = mysqli_query($db, $request);
   $out = $query ? 'DONE' : 'ERROR'; 
   dbClose();
   return $out;
}
