<?

include "VarDumper.php";

class Spider 
{

	public $legs = 8;
	public $hands = 0;
	public $eyes = 8;
	public $health = 10;
	public $steps = 0;
	public $tiredness = 0;
	public $satiety = 50;
	
	public function addHands() 
	{
		$this->hands++;
	}

	public function heal() 
	{
		$this->health++;
	}

	public function say($text) 
	{
		echo $text;
	}

	public function fall() 
	{
		$this->health--;
	}

	public function go() 
	{
		$this->steps++;
	}

	public function hunt($success) 
	{
		if ($success != true) {
			$this->tiredness++;
			$this->satiety--;

			echo $tiredness . "<br>" . $satiety;
		} else {
			$this->tiredness++;
			$this->satiety++;

			echo $tiredness . "<br>" . $satiety;
		}
	}

	public function jump() 
	{
		$this->legs--;
	}
}


$spider = new Spider();
VarDumper::dump($spider, 10, true);

$spider->go();
VarDumper::dump($spider, 10, true);

$spider->hunt(true);
VarDumper::dump($spider, 10, true);

$spider->addHands();
VarDumper::dump($spider, 10, true);

$spider->fall();
VarDumper::dump($spider, 10, true);

$spider->say("Привет! Я поймал муху, чтобы она не мешала тебе спать =)");
VarDumper::dump($spider, 10, true);

$spider->heal();
VarDumper::dump($spider, 10, true);

$spider->jump();
VarDumper::dump($spider, 10, true);