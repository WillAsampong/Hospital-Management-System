<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Patient {
            private $patientId;
            private $name;
            private $age;
            private $diagnosis;

            public function __construct($patientId, $name, $age, $diagnosis) 
            {
                $this->patientId = $patientId;
                $this->name = $name;
                $this->age = $age;
                $this->diagnosis = $diagnosis;
            }

            public function getPatientId(){
                return $this->patientId;
            }

            public function setPatientId(string $patientId){
                $this->patientId = $patientId;
            }

            public function getName() {
                return $this->name;
            }

            public function setName(string $name) {
                $this->name = $name;
            }

            public function getAge() {
                return $this->age;
            }

            public function setAge(int $age) {
                if($age > 0) {
                    $this->age = $age;
                } else {
                    echo "Invalid age.";
                }
            }

            public function getDiagnosis() {
                return $this->diagnosis;
            }

            public function setDiagnosis(string $diagnosis) {
                if($diagnosis == "") {
                    echo "Diagnosis cannot be empty.";
                } else {
                    $this->diagnosis = $diagnosis;
                }
            }

            public function updateDiagnosis(string $newDiagnosis, string $diagnosis){
                $newDiagnosis = $diagnosis;
                echo "Diagnosis updated succesfully to: " . $newDiagnosis;
            }
        };

        class Doctor {
            private $DoctorId;
            private $name;
            private $specialization;

            public function __construct(string $DoctorId, string $name, string $specialization) 
            {
                $this->DoctorId = $DoctorId; 
                $this->name = $name;
                $this->specialization =$specialization;
            }
        }
    ?>
</body>
</html>