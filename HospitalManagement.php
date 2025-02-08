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

            public function updateDiagnosis(string $newDiagnosis){
                $this->diagnosis = $newDiagnosis;
                echo "Diagnosis updated succesfully to: " . $newDiagnosis . "\n";
            }

            public function __toString() {
                return "Patient ID: $this->patientId, Name: $this->name, Age: $this->age, Diagnosis: $this->diagnosis\n";
            }
            
        };

        class Doctor {
            private $doctorId;
            private $name;
            private $specialization;

            public function __construct(string $DoctorId, string $name, string $specialization) 
            {
                $this->doctorId = $DoctorId; 
                $this->name = $name;
                $this->specialization = $specialization;
            }

            public function getDoctorId(){
                return $this->doctorId;
            }

            public function setDoctorId(string $DoctorId) {
                $this->doctorId = $DoctorId;
            }

            public function getName(){
                return $this->name;
            }

            public function setName(string $name){
                $this->name = $name;
            }

            public function getSpecialization(){
                return $this->specialization;
            }

            public function setSpecialization(string $specialization){
                $this->specialization = $specialization;
            }

            public function treatPatient( $patientId, $diagnosis){
                echo "Patient " . $patientId . " treated for " . $diagnosis . " succesfully.\n";
            }

            public function __toString() {
                return "Doctor ID: $this->doctorId, Name: $this->name, Specialization: $this->specialization\n";
            }
            
        }

        $patient1 = new Patient("P001", "John Smith", 45, "Fever");
        $doctor1 = new Doctor("D101", "Dr. Alice", "General Medicine");

        echo $patient1;
        echo $doctor1;

        $patient1->updateDiagnosis("Flu");
        $doctor1->treatPatient($patient1->getPatientId(), $patient1->getDiagnosis());
    ?>
</body>
</html>