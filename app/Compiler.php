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
		$this->sources['time'] += 19280 + $sources['sleepselection'] + $sources['sleepselection'];

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
	  return preg_replace_callback(
																	$regex,
																	function ($coincidences) use($sources) {
																		$kind = $coincidences[1];
																		$finger = $coincidences[2];
																		$x = ceil($coincidences[3]*$sources['width'] /1080);
																		$y = ceil($coincidences[4]*$sources['height']/1920);
																		return $kind.' '.$finger.' '.$x.' '.$y;
        													},
																	$text);
	}

	private function varParser($text,$sources)
	{
		$regex = '#{{\$([A-z]+)}}#';
	  return preg_replace_callback(
																	$regex,
																	function ($coincidences) use($sources) {
																		if (array_key_exists($coincidences[1], $sources)) {
																			return $sources[$coincidences[1]];
																		}
																		return '{{$'.$coincidences[1].'}}';
        													},
																	$text);
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
