<?php

namespace Zenify\CodingStandard\Tests\Sniffs\WhiteSpace\OperatorSpacing;

use PHPUnit_Framework_TestCase;
use Zenify\CodingStandard\Tests\CodeSnifferRunner;


/**
 * @covers ZenifyCodingStandard\Sniffs\WhiteSpace\OperatorSpacingSniff
 */
final class OperatorSpacingSniffTest extends PHPUnit_Framework_TestCase
{

	public function testDetection()
	{
		$codeSnifferRunner = new CodeSnifferRunner('ZenifyCodingStandard.WhiteSpace.OperatorSpacing');

		$this->assertSame(2, $codeSnifferRunner->getErrorCountInFile(__DIR__ . '/wrong.php'));
		$this->assertSame(0, $codeSnifferRunner->getErrorCountInFile(__DIR__ . '/correct.php'));
	}

}
