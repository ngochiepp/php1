<?php
class Employee {
    public $name;
    public $age;
    public $salary;
    public $department;

    public function __construct(
        $name = "Unknown",
        $age = "0",
        $salary = "0",
        $department = "Unassigned"
    )
    {
      $this ->name = $name;
      $this ->age = $age;
      $this ->salary = $salary;
      $this ->department = $department;
    }

    public function setName($name){
        $this -> name = $name;
    }
    public function setAge($age){
        $this -> age = $age;
    }
    public function setSalary($salary){
        $this -> salary = $salary;
    }
    public function setDepartment($department){
        $this -> department = $department;
    }
    public function getName(){
        return $this -> name;
    }
    public function getAge(){
        return $this -> age;
    }
    public function getSalary(){
        return $this -> salary;
    }
    public function getDepartment(){
        return $this -> department;
    }


    
    public function displayInfo(): void {
        echo "Name: " . $this->getName() . "\n";
        echo "Age: " . $this->getAge() . "\n";
        echo "Salary: " . $this->getSalary() . "\n";
        echo "Department: " . $this->getDepartment() . "\n";
    }
}
    
$employee1 = new Employee("John Doe", 30, 50000, "IT");
$employee1->displayInfo();

echo "\n";

// Tạo đối tượng employee2 với constructor mặc định
$employee2 = new Employee();
$employee2->setName("Jane Smith");
$employee2->setAge(25);
$employee2->setSalary(40000);
$employee2->setDepartment("HR");
$employee2->displayInfo();

