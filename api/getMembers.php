<?php
/**
 * Created by PhpStorm.
 * User: dnajar
 * Date: 12/20/2018
 * Time: 2:44 PM
 */
require_once ('../classes/cmsUi.php');
$cmsUi = new cmsUi();
$res = new stdClass();
$res->status = false;

if(isset( $_POST['request_type']) && !empty($_POST['request_type']) ){
    if($_POST['request_type'] == "get_members"){
        $members = $cmsUi->getAllUsers();
        if($members !== null ){
            $res->data = $members;
            $res->status = true;
        }
    }elseif ($_POST['request_type'] == "get_member"){
        $member_id = $_POST['member_id'];
        if(is_numeric($member_id)){
            $member = $cmsUi->getOneUser($member_id);
            if($member){
                $res->data = $member;
                $res->status = true;
            }
        }
    }

    die(json_encode($res));
}else{
    die(http_response_code(400));
}