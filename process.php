<?php
if (isset($_SERVER['HTTP_ORIGIN'])) {
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');    // cache for 1 day
    }

    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers:        
            {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

        exit(0);
    }
include 'dbconnect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($_POST))
    $_POST = json_decode(file_get_contents('php://input'), true);
$action = $_POST['action'];
if ($action == "get") {
    $data =  getTodos($con);
    echo $data;
} else if ($action == "add") {

    $todo = $_POST['mydata'];
    $checked = $todo['checked'];
    if ($checked == "1") {
        $checked = "true";
    } else {
        $checked = "false";
    }
    $id = $todo['id'];
    $title = $todo['title'];
    $checked = $checked;
    $insertSql = "insert into todo_app (title,checked) values ('$title','$checked')";
    $result = mysql_query($insertSql);
    $data =  getTodos($con);
    echo $data;
} else if ($action == "markdone") {
    $todo = $_POST['mydata'];
//    print_r($todo);
    $id = $todo['id'];
    $title = $todo['title'];
    $checked = $todo['checked'];
    if ($checked == "1") {
        $checked = "false";
    } else {
        $checked = "true";
    }
    $updateSql = "update todo_app set checked = '$checked' where id=$id";
	// echo $updateSql;
    $result = mysql_query($updateSql);
    $data =  getTodos($con);
    echo $data;
} else if ($action == "delete") {
    $id = $_POST['mydata'];
    $updateSql = "delete from todo_app  where id=$id";
    $result = mysql_query($updateSql);
    $data =  getTodos($con);
    echo $data;
} 


function getTodos($con){
	
    $responseData = array();
    if ($con) {
        $fetchSql = "select id,title,checked, TIME_STAMP from todo_app order by id desc";
        $result = mysql_query($fetchSql);
        while ($row = mysql_fetch_array($result,MYSQL_NUM)) {
            $id = $row[0];
            $title = $row[1];
            $checked = $row[2];
            $time = $row[3];
            $responseData[] = array('id' => $id, 'title' => $title, 'checked' => $checked,'time' => $time);
        }
		mysql_free_result($result);


        return json_encode($responseData);
    }
}
?>
