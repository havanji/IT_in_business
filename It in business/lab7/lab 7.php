<?php
echo("Task 6")."\n";

class Person{
    protected $name;
    protected $age;
    protected $occupation;

    public function __construct(string $name, int $age, string $occupation)
    {
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;

        if ($this->name != $name)
            throw new InvalidArgumentException(
                "Name must be a string!"
            );

        if ($age <= 0)
            throw new InvalidArgumentException(
                "Age must be a non-negative integer!"
            ); else return round($age);
            

        if ($this->occupation != $occupation)
            throw new InvalidArgumentException(
                "Occupation must be a string!"
            );
    }
    public function get_name()
    {
        return $this->name;
    }

    public function get_age()
    {
        return $this->age;
    }

    public function get_occupation()
    {
        return $this->occupation;
    }
}

//$andri1 = new Person('Andrii', '19','Student');
//$andrii_introduce = $andri1->name;
//$andrii_job = $andri1->occupation;
//$occupation = Person::species;
//
//echo $andri1->introduce()."\n";
//echo $andri1->describe_job()."\n";
//echo $andri1::greet_extraterrestrials('Human')."\n";

echo("Task 7")."\n";



echo("Task 8")."\n";



echo("Task 9")."\n";



echo("Task 10")."\n";
















