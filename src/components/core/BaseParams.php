<?php
namespace Blocks;

/**
 * Base parameter class
 */
abstract class BaseParams
{
	/**
	 * Constructor
	 *
	 * @param array|null $params
	 */
	public function __construct($params = array())
	{
		$this->setParams($params);
	}

	/**
	 * Sets the params based on an arary's keys and values.
	 *
	 * @param array $params
	 */
	public function setParams($params)
	{
		foreach ($params as $name => $value)
		{
			if (property_exists($this, $name))
				$this->$name = $value;
		}
	}
}
