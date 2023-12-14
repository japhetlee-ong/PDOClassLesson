<?php

require_once ('../Controllers/StudentController.php');
use Controllers\StudentController;

    $results = array();
    $studentController = new StudentController();
    $results = $studentController->getStudents();

    if(isset($_POST['Submit'])){
        $studentIdNumber = $_POST['student-id-number'];
        $studentName = $_POST['student-name'];
        $studentYearLevel = $_POST['student-year-level'];
        $studentContactNumber = $_POST['student-contact-number'];

        $res = $studentController->addStudent($studentIdNumber,$studentName,$studentContactNumber,$studentYearLevel);

        if($res){
            echo "<meta http-equiv='refresh' content='0'>";
        }
    }


?>

<DOCTYPE html>
    <html>
        <head>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" in`tegrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        </head>
        <body>
            <div>
                <h3 style="text-align: center">Student Database</h3>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Id Number</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">Year Level</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach($results as $result): ?>
                            <tr>
                                <th scope="row"><?= $result->getStudentId() ?></th>
                                <td><?= $result->getStudentIdNumber() ?></td>
                                <td><?= $result->getStudentName() ?></td>
                                <td><?= $result->getContactNumber() ?></td>
                                <td><?= $result->getYearLevel() ?></td>
                                <td><?= ($result->getStatus() ? 'Active' : 'Inactive') ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <div style="margin-top: 50px">
                    <h5>Add new student</h5>
                </div>

                <div class="d-flex" style="flex-direction: column;">
                    <form method="post">
                        <div class="mb-3">
                            <label
                                    for="input-student-id-number"
                                    class="form-label"
                                    id="input-length-label">Student ID number</label>
                            <input
                                    id="input-student-id-number"
                                    class="form-control"
                                    type="text"
                                    name="student-id-number"
                                    required>
                        </div>
                        <div class="mb-3">
                            <label
                                    for="input-student-name"
                                    class="form-label"
                                    id="input-length-label">Student Name</label>
                            <input
                                    id="input-student-name"
                                    class="form-control"
                                    type="text"
                                    name="student-name"
                                    required>
                        </div>
                        <div class="mb-3">
                            <label
                                    for="input-student-contact-number"
                                    class="form-label"
                                    id="input-length-label">Student Contact Number</label>
                            <input
                                    id="input-student-contact-number"
                                    class="form-control"
                                    type="text"
                                    name="student-contact-number"
                                    required>
                        </div>
                        <div class="mb-3">
                            <label
                                    for="input-student-year-level"
                                    class="form-label"
                                    id="input-length-label">Student Year Level</label>
                            <input
                                    id="input-student-year-level"
                                    class="form-control"
                                    type="text"
                                    name="student-year-level"
                                    required>
                        </div>
                        <div style="text-align: center; margin-top: 10px">
                            <input name="Submit" value="Submit" type="submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </body>
    </html>
</DOCTYPE>

