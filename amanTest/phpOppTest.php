<!-- PHP OOP Questions

<?php
// 1. Create a class called `Car` with properties like `brand`, `model`, and `year`. Add a method to display the
// car details.

// class Car
// {
//     public $brand = "audi"; //properties
//     public $model = 2012;
//     public $year = 2025;

//     public function carDetails() //method
//     {
//         echo "Brand:" . $this->brand . "  ";
//         echo "Model:" . $this->model . "  ";
//         echo "Year:" . $this->year . "  ";
//     }
// }

// $car1 = new Car();
// $car1->carDetails();

// 2. Create a class `Student` with a constructor that takes `name` and `roll number`. Add a destructor that
// prints a message when destroyed.

// class Student{
//    function __construct($name,$roll_number){   //constructor
//         echo "Name:".$name. "<br>RollNo:". $roll_number. "<br>";
//     }

//     function __destruct(){  //destructor
//         echo "Destructor Works";
//     }
// }

// $newStd= new Student("Aman",22); //creating object and autometic call constructor

// 3. Create a base class `Employee` and a derived class `Manager`. Include properties and a method to
// display details.

// class Employee   //parent Class
// {
//     public $id = 10;
//     public function emp_details()
//     {
//         echo "Employee id:". $this->id ."<br>";
//     }
// }

// class Manager extends Employee  //child class
// {
//     public $name = "Aman";
//     public function manager_details()
//     {
//         echo "Manager Name:" . $this->name . "<br>";
//     }
// }

// $manager1=new Manager();
// $manager1->emp_details(); //calling a function 
// $manager1->manager_details();

// 4. Create a class `BankAccount` with private properties. Use getter and setter methods to modify and view
// the values.

// class BankAccount{
//     private $name="ashu";


//     }


// 5. Create a base class `Shape` with an `area()` method, and two subclasses `Circle` and `Rectangle` that
// override it. -->

// class Shape   //base class 
// {
//     public function area() {
//         echo "Shape Class method! <br>";
//     }
// }
// class Circle extends Shape  //first sub-class of shape class
// {
//     public function area() {
//         echo "Circle Class method! <br>";
//     }
// }
// class Rectangel extends Shape //second sub-class of shape class
// {
//     public function area() {
//         echo "Rectangle Class method! <br>";
//     }
// }

// $rec = new Rectangel();
// $rec->area();

// $circle1 = new Circle();
// $circle1->area();

?>