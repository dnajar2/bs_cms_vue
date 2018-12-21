<?php
/**
 * Created by PhpStorm.
 * User: dnajar
 * Date: 12/20/2018
 * Time: 2:44 PM
 */
require_once ('../classes/cmsUi.php');

if(isset($_POST['request_type']) && $_POST['request_type'] == "get_members"){
    $cmsUi = new cmsUi();
    $res = new stdClass();
    $res->status = false;

    $members = $cmsUi->getAllUsers();
    if($members !== null ){
        $res->data = $members;
        $res->status = true;
    }
    die(json_encode($res));
}elseif (isset($_POST['request_type']) && $_POST['request_type'] == "get_member"){

}else{
    die(http_response_code(400));
}