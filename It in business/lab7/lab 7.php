<?php
echo("Task 6")."\n";

class Person1{

    protected $name;
    protected $age;
    protected $occupation;

    public function __construct($name, $age, $occupation) {
        $this->set_name($name);
        $this->set_age($age);
        $this->set_occupation($occupation);
    }

    public function get_name() {
        return $this->name;
    }

    public function get_age() {
        return $this->age;
    }

    public function get_occupation() {
        return $this->occupation;
    }

    public function set_name($name) {
        if (!is_string($name)) {
            throw new InvalidArgumentException('Name must be a string!');
        }
        $this->name = $name;
    }

    public function set_age($age) {
        if (!is_integer($age) || $age < 0) {
            throw new InvalidArgumentException('Age must be a non-negative integer!');
        }
        $this->age = $age;
    }

    public function set_occupation($occupation) {
        if (!is_string($occupation)) {
            throw new InvalidArgumentException('Occupation must be a string!');
        }
        $this->occupation = $occupation;
    }
}

echo("Task 7")."\n";

class Person2{
    const species = "Homo Sapiens";
    public $name;
    public $age;
    public $occupation;

    public function __construct($name, $age, $occupation){
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }

    public function introduce(){
        return "Hello, my name is $this->name";
    }

    final public function describe_job(){
        return "I am currently working as a(n) $this->occupation";
    }

    final public static function greet_extraterrestrials($species){
        return "Welcome to Planet Earth $species!";
    }
}

class ComputerProgrammer1 extends Person{
    public function introduce()
    {
        return parent::introduce() . " and I am a $this->occupation";
    }
}

echo("Task 8")."\n";

interface CanFly{
    public function fly();
}
interface CanSwim{
    public function swim();
}

interface CanClimb{
    public function climb();
}

interface CanGreet{
    public function greet($name);
}

interface CanIntroduce{
    public function speak();
    public function  introduce();
}

interface CanSpeak{
    public function speak();
}

class Bird implements CanFly{
    public $name;

    public function __construct(string $name){
        $this->name = $name;
    }

    public function fly(){
        return "I am flying";
    }

    public function chirp(){
        return "Chirp chirp";
    }
}

class Duck extends Bird implements CanFly, CanSwim{
    public  function __construct(string $name)
    {
        parent::__construct($name);
    }

    public  function fly(){
        return "I am flying";
    }
    public function chirp()
    {
        return "Quack quack";
    }

    public function swim(){
        return "Splash! I'm swimming";
    }
}

class Cat implements CanClimb {
    public function climb(){
        return "Look, I'm climbing a tree";
    }

    public function meow(){
        return "Meow meow";
    }
    public function play($name){
        return "Hey $name, let's play!";
    }
}

class Dog implements CanSwim, CanGreet{

    public function swim(){
        return "I'm swimming, woof woof";
    }
    public function greet($name){
        return "Hello $name, welcome to my home";
    }
    public function bark(){
        return "Woof woof";
    }
}

class Person3 implements CanGreet, CanSpeak, CanIntroduce{
    public $name;
    public $age;
    public $occupation;

    public function __construct(string $name, int $age, string $occupation){
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }

    public function greet($name){
        return "Hello $name, how are you?";
    }
    public function speak(){
        return "What am I supposed to say again?";
    }
    public function introduce(){
        return "Hello, my name is $this->name, I am $this->age years old and I am currently working as a(n) $this->occupation";
    }
}

echo("Task 9")."\n";

abstract class Person4{
    public $name;
    public $age;
    public $gender;

    public function __construct($name, $age, $gender){
    $this->name = $name;
    $this->age = $age;
    $this->gender = $gender;
    }

    abstract public function introduce();
    public function greet($name){
        return "Hello $name";
    }
}

final class Child extends Person4{
    public $aspirations;

    public function __construct($name, $age, $gender, $aspirations)
    {
        parent::__construct($name, $age, $gender);
        $this->aspirations = $aspirations;
    }
    public function introduce(){
        return "Hi, I'm $this->name and I am $this->age years old";
    }
    public function greet($name){
        return "Hi $name, let's play!";
    }
    public function say_dreams(){
        return "I would like to be a(n) " . say_list($this->aspirations) . " when I grow up.";
    }
}

class ComputerProgrammer2 extends Person4{
    public $occupation = "Computer Programmer";
    public function introduce(){
        return "Hello, my name is $this->name, I am $this->age years old and I am a(n) $this->occupation";
    }

    public function greet($name)
    {
        return parent::greet($name). ", I'm $this->name, nice to meet you";
    }

    public function advertise(){
        return "Don't forget to check out my coding projects";
    }
}

echo("Task 10")."\n";
















