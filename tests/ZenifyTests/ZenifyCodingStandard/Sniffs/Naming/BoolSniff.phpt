<?php

namespace ZenifyTests\ZenifyCodingStandard\Sniffs\Naming;

use Tester\Assert;
use ZenifyTests\TestCase;


require_once __DIR__ . '/../../../bootstrap.php';


class BoolSniff extends TestCase
{

	public function testWrong()
	{
		$result = $this->runPhpCsForFile(__DIR__ . '/Bool.wrong.php');
		Assert::count(4, $result['errors']);
		for ($i = 0; $i < 4; $i++) {
			$this->validateErrorMessageAndSource(
				$result['errors'][$i],
				'Bool operator should be spelled "bool"; "boolean" found',
				'ZenifyCodingStandard.Naming.Bool'
			);
		}
	}


	public function testCorrect()
	{
		$result = $this->runPhpCsForFile(__DIR__ . '/Bool.correct.php');
		Assert::count(0, $result['errors']);
	}

}


run(new BoolSniff);
