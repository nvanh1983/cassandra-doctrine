<?php

namespace PerfectWeb\Cassandra\PDOCassandra;

use Doctrine\DBAL\Driver as BaseDriver;
use Doctrine\DBAL\Driver\PDOMySql\Driver as MySqlDriver;

class Driver extends MySqlDriver implements BaseDriver
{

	/**
	 * {@inheritdoc}
	 */
	public function connect(array $params, $username = null, $password = null, array $driverOptions = array())
	{
        return new Connection($params['servers'], $params['dbname']);
	}

	/**
	 * {@inheritdoc}
	 */
	public function getName()
	{
		return 'cassandra';
	}

}