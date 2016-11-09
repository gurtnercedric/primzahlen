<?php

$primetest = 23;
function isprime($primetest) {
		$maxtest = sqrt($primetest);		//
		for ($i = 2; $i <= $maxtest; ++$i) {
			if ($primetest % $i == 0) {
				return false;
			}
		}
        return true;
}

$ausgeben = isprime($primetest);

var_dump($ausgeben)
?>