<?php
namespace SaldoCloud\Plaid\Tests;

use SaldoCloud\Plaid\Entities\BacsAccount;

/**
 * @covers SaldoCloud\Plaid\Entities\BacsAccount
 */
class BacsAccountEntityTest extends TestCase
{
	public function test_constructor_sets_account_and_sort_code(): void
	{
		$bacsAccount = new BacsAccount("account", "sort_code");

		$this->assertEquals(
			[
				"account" => "account",
				"sort_code" => "sort_code"
			],
			$bacsAccount->toArray()
		);
	}
}
