<?php
include "config(site).html";

class Form
{
    public $name;
    public $age;
    public $hobby;
    public $pet;
    public $food;
    public $check;

    public function CheckForm(){
        if (isset($_POST['name']) && isset($_POST['age']) && isset($_POST['hobby']) && isset($_POST['pet']) && isset($_POST['food'])) {

            $name = htmlentities($_POST['name']);
            $age = htmlentities($_POST['age']);
            $hobby = htmlentities($_POST['hobby']);
            $pet = $_POST['pet'];
            $food = htmlentities($_POST['food']);
            $output = "
            <html>
            <head>
            <title>Анкетные данные</title>
            </head>
            <body>
            Тебя зовут: $name<br />
            Тебе $age лет<br />
            Тебе нравится $hobby<br />
            Твоя любимая еда: $food<br />
            Ты хотела бы $pet<br /><br />";

            echo "Твоя анкета принята твоими ватрушками (: Теперь ты - одна из наших ватрушек! (:" . "<br>" . "Теперь ты можешь пройти наш тест! =)" . "<br>";
            echo $output;
            $this->$check = "true";

            $f = fopen('anketa.txt', 'a');
            fputs($f, $this->$check);

            fclose($f);

           
        } else {
            echo "Что-то с анкетой! Ты нам больше не ватрушка х(";
            $this->$check = "false";
            $f = fopen('anketa.txt', 'a');
            fputs($f, $this->$check);

            fclose($f);
        }
    }
}

class Test extends Form {

    public function CheckTest() {
        if($this->$check == "true" ) {
            include "button(test).html";
        } 
    }
}

$form = new Test();
$form->CheckForm();
$form->CheckTest();


?>
