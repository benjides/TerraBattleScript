<?php namespace App;

class Compiler {

	private $file;
	private $sources;

	public function __construct($stage)
	{
		$this->sources = array();
		$this->file = include '../public/base/master.php';
	}


	public function addSources($sources)
	{
		$this->sources = array_merge($this->sources, $sources);
		$this->sources['time'] += 21280 + $sources['sleepselection'] + $sources['sleepselection'];

		if (array_key_exists('sleepbattle',$sources)) {
			$this->sources['time'] += $sources['sleepbattle']*$sources['battles'];
		}
		elseif (array_key_exists('loops',$sources)) {
			$this->sources['time'] += $sources['loops']*$sources['timeloop'];
		}

		$this->sources['time'] = ceil($this->sources['time']/1000);
	}

  public function compile()
  {
		$this->sources = $this->responseBuilder($this->sources);
		$this->file = $this->varParser($this->file,$this->sources);
		$this->file = $this->screenAdapter($this->file,$this->sources);
		return $this->file;
  }

	private function screenAdapter($text,$sources)
	{
	  $regex = '#(touchMove|touchDown)\s+(\d+)\s+(\d+)\s+(\d+)#';
	  return preg_replace_callback($regex, array($this, 'screen_callback'), $text);
	}
	private function screen_callback ($coincidences)
	{
		$kind = $coincidences[1];
		$finger = $coincidences[2];
		$x = ceil($coincidences[3]*$this->sources['width'] /1080);
		$y = ceil($coincidences[4]*$this->sources['height']/1920);
		return $kind.' '.$finger.' '.$x.' '.$y;
	}
	private function varParser($text,$sources)
	{
		$regex = '#{{\$([A-z]+)}}#';
	  return preg_replace_callback($regex, array($this, 'parser_callback'), $text);
	}
	private function parser_callback ($coincidences)
	{
		if (array_key_exists($coincidences[1], $this->sources)) {
			return $this->sources[$coincidences[1]];
		}
		return '{{$'.$coincidences[1].'}}';
	}

	private function responseBuilder($sources)
	{
		$action = '';
		if($sources['radio'] == 'action'){
			foreach ($sources['response'] as $case) {
				switch ($case) {
					case 0:
						$action .= "\tVibrate 5000\n";
						break;
					case 1:
						$action .= "\tBeep\n\tSleep 5000\n";
						break;
					case 2:
						$action .= "\tkeyDown K_HOME\n\tsleep 50\n\tkeyUp K_HOME \n";
						break;
					case 3:
						$action .= "\tkeyDown K_POWER\n\tsleep 50\n\tkeyUp K_POWER \n";
						break;
				}
			}
		}
		$sources['action'] = $action;
		return $sources;
	}

}
