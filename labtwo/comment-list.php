<?php
require_once ("db.php");
$memberId = 1;
$sql = "SELECT tbl_comment.*,tbl_like_unlike.like_unlike FROM tbl_comment LEFT JOIN tbl_like_unlike ON tbl_comment.comment_id = tbl_like_unlike.comment_id AND member_id = " . $memberId . " ORDER BY parent_comment_id DESC, comment_id DESC";

$result = mysqli_query($connect, $sql);
$record_set = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($record_set, $row);
}
mysqli_free_result($result);

mysqli_close($connect);
echo json_encode($record_set);
?>