<?php
	class Grid {
		private $N = 0;
		private $princessPosition = array(0, 0);
		private $botPosition = array(0 ,0);
		private $grid = array();

		public function __construct(){
			$this->N = rand(1, 25) * 2 + 1;

			$possiblePrincessPositions = array(
				array(0, 0),
				array(0, $this->N - 1),
				array($this->N - 1, $this->N - 1),
				array($this->N - 1, 0),
			);
			$this->princessPosition = $possiblePrincessPositions[rand(0, 3)];
			$this->botPosition = array(
				rand(1, $this->N - 2),
				rand(1, $this->N - 2)
			);
		}

		public function generateGrid(){
			for($i = 0; $i < $this->N; $i++){
				for($j = 0; $j < $this->N; $j++){
					if($this->isPrincessPosition($i, $j)){
						$this->grid[$i][$j] = 'p';
					}
					else if($this->isBotPosition($i, $j)){
						$this->grid[$i][$j] = 'm';
					}
					else {
						$this->grid[$i][$j] = '-';
					}
				}
			}
			return $this->grid;
		}

		private function isPrincessPosition($i, $j){
			return ($i == $this->princessPosition[0] && $j == $this->princessPosition[1]);
		}
		
		private function isBotPosition($i, $j){
			return ($i == $this->botPosition[0] && $j == $this->botPosition[1]);
		}
	}
