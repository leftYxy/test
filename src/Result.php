<?php
/**
 * @CreateDate 2024-01-09 16:14
 */

declare(strict_types=1);


namespace Yaoxy\Test;


class Result
{
	/**
	 * Notes: 成功
	 * Date: 2024/1/9
	 * @param null $data
	 * @param int $code
	 * @param string $msg
	 * @return array
	 */
	public static function success($data = null,int $code = ErrorCode::SUCCESS, string $msg = ''): array
	{
		return [
			'code' => $code,
			'msg' => !empty($msg) ? $msg : ErrorCode::getMessage($code),
			'data' => $data,
		];
	}

	/**
	 * Notes: 失败
	 * Date: 2024/1/9
	 * @param string $msg
	 * @param int $code
	 * @return array
	 */
	public static function error(string $msg = '', int $code = ErrorCode::ERROR): array
	{
		return [
			'code' => $code,
			'msg' => !empty($msg) ? $msg : ErrorCode::getMessage($code),
		];
	}
}