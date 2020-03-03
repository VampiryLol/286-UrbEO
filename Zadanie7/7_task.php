<?



class Form
{
	public $name;
	public $age;
	public $hobby;
	public $pet;
	public $food;

	public function SaveFile(){
		if (move_uploaded_file($this, file("database.php"))) {
			echo "Твоя анкета принята твоими ватрушками (:" . "<br>";
		}
		else {
			echo "Что-то с анкетой! Ты нам больше не ватрушка х(";
		}
	}
}

$form = new Form();
$form->SaveFile();

$form->name = $_POST['name'];
$form->age = $_POST['age'];
$form->hobby = $_POST['hobby'];
$form->pet = $_POST['pet'];
$form->food = $_POST['food'];


 