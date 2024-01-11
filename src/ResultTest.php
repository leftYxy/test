<?php
/**
 * @CreateDate 2024-01-09 16:17
 */

declare(strict_types=1);


namespace Yaoxy\Test;


class ResultTest
{
	public function success()
	{
		$data = ['data' => 'data'];
		return Result::success($data);
	}

	public function fail()
	{
		return Result::error('fail');
	}
}