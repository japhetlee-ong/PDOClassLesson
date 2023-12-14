<?php


namespace Models;
class StudentModel{
    private String $studentId;
    private String $studentIdNumber;
    private String $studentName;
    private String $contactNumber;
    private String $yearLevel;
    private String $status;

    /**
     * @param String $studentId
     * @param String $studentIdNumber
     * @param String $studentName
     * @param String $contactNumber
     * @param String $yearLevel
     * @param String $status
     */
    public function __construct(string $studentId, string $studentIdNumber, string $studentName, string $contactNumber, string $yearLevel, string $status)
    {
        $this->studentId = $studentId;
        $this->studentIdNumber = $studentIdNumber;
        $this->studentName = $studentName;
        $this->contactNumber = $contactNumber;
        $this->yearLevel = $yearLevel;
        $this->status = $status;
    }

    /**
     * @return String
     */
    public function getStudentId(): string
    {
        return $this->studentId;
    }

    /**
     * @param String $studentId
     */
    public function setStudentId(string $studentId): void
    {
        $this->studentId = $studentId;
    }

    /**
     * @return String
     */
    public function getStudentIdNumber(): string
    {
        return $this->studentIdNumber;
    }

    /**
     * @param String $studentIdNumber
     */
    public function setStudentIdNumber(string $studentIdNumber): void
    {
        $this->studentIdNumber = $studentIdNumber;
    }

    /**
     * @return String
     */
    public function getStudentName(): string
    {
        return $this->studentName;
    }

    /**
     * @param String $studentName
     */
    public function setStudentName(string $studentName): void
    {
        $this->studentName = $studentName;
    }

    /**
     * @return String
     */
    public function getContactNumber(): string
    {
        return $this->contactNumber;
    }

    /**
     * @param String $contactNumber
     */
    public function setContactNumber(string $contactNumber): void
    {
        $this->contactNumber = $contactNumber;
    }

    /**
     * @return String
     */
    public function getYearLevel(): string
    {
        return $this->yearLevel;
    }

    /**
     * @param String $yearLevel
     */
    public function setYearLevel(string $yearLevel): void
    {
        $this->yearLevel = $yearLevel;
    }

    /**
     * @return String
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param String $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }




}