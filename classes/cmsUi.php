<?php
/**
 * Created by PhpStorm.
 * User: dnajar
 * Date: 12/20/2018
 * Time: 2:31 PM
 */
require_once ('../common/conn.php');
class cmsUi
{
    private $db = null;
    public function __construct()
    {
        global $conn;
        $this->db = &$conn;
    }

    public function getAllUsers(){
        $query = "SELECT * FROM users";
        $result = $this->db->query($query);
        $rows = [];
        while($row = $result->fetch_assoc()){
            $rows[] = $row;
        };
        return $rows;
    }

    public function getOneUser($userId){
        $query = "SELECT * FROM users where id = $userId LIMIT 1";
        $result = $this->db->query($query);
        $row = [];
        if($result){
            $row = $result->fetch_assoc();
        }
        return $row;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        $this->db->close();
    }

}