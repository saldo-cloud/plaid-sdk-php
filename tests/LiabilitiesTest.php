<?php

namespace SaldoCloud\Plaid\Tests;

/**
 * @covers SaldoCloud\Plaid\Plaid
 * @covers SaldoCloud\Plaid\Resources\AbstractResource
 * @covers SaldoCloud\Plaid\Resources\Liabilities
 */
class LiabilitiesTest extends TestCase
{
	public function test_get_liabilities(): void
	{
		$response = $this->getPlaidClient()->liabilities->list("access_token");

		$this->assertEquals("POST", $response->method);
		$this->assertEquals("2020-09-14", $response->version);
		$this->assertEquals("application/json", $response->content);
		$this->assertEquals("/liabilities/get", $response->path);
		$this->assertEquals("client_id", $response->params->client_id);
		$this->assertEquals("secret", $response->params->secret);
		$this->assertEquals("access_token", $response->params->access_token);
		$this->assertEquals((object) [], $response->params->options);
	}
}
