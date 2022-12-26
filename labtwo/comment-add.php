<?php
require_once ("db.php");
$commentId = isset($_POST['comment_id']) ? $_POST['comment_id'] : "";
$comment = isset($_POST['comment']) ? $_POST['comment'] : "";
$commentSenderName = isset($_POST['name']) ? $_POST['name'] : "";
$date = date('Y-m-d H:i:s');

$sql = "INSERT INTO tbl_comment(parent_comment_id, comment, comment_sender_name, date) VALUES (0,'" . $comment . "','" . $commentSenderName . "','" . $date . "')";

$result = mysqli_query($connect, $sql);

if (! $result) {
    $result = mysqli_error($connect);
}
echo $result;
?>
