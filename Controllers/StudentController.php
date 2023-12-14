<?php
namespace Controllers;

require_once ('../Helper/DBConnection.php');
require_once ('../Models/StudentModel.php');
require_once ('../Helper/Constants.php');

use Helper\DBConnection;
use Models\StudentModel;

class StudentController{
    public function getStudents(): array
    {
        $dbCon = new DBConnection(DB_NAME,DB_USERNAME,DB_PASSWORD,DB_HOST,DB_PORT);
        $studentData = $dbCon->run("SELECT * FROM tbl_students")->fetchAll();
        $result = array();
        foreach($studentData as $data){
            $student = new StudentModel($data['student_id'],$data['student_id_number'],$data['student_name'],$data['contact_number'],$data['year_level'],$data['status']);
            $result[] = $student;
        }
        return $result;
    }

    public function addStudent(String $idNumber, String $studentName, String $contactNumber, String $yearLevel){
        $dbCon = new DBConnection(DB_NAME,DB_USERNAME,DB_PASSWORD,DB_HOST,DB_PORT);
        $result = $dbCon->run("INSERT INTO tbl_students(student_name, student_id_number, contact_number, year_level, status) VALUES(?,?,?,?,?)",[$idNumber,$studentName,$contactNumber,$yearLevel, true]);
        if($dbCon->pdo->lastInsertId()){
            return true;
        }else{
            return false;
        }
    }
}