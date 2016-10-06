<?php


namespace Fulfillment\OMS;


use Fulfillment\OMS\Models\Response\TrackingInfo;
use Fulfillment\OMS\Models\Response\OrderStatus;
use Fulfillment\OMS\Models\Response\Inventory;
use Fulfillment\OMS\Models\Response\Merchant;
use Fulfillment\OMS\Models\Response\Order;
use Fulfillment\OMS\Models\Response\Product;
use Fulfillment\OMS\Models\Response\Sku;
use Fulfillment\OMS\Models\Response\User;
use League\Container\Container;

class ContainerFactory {

	protected $defaultClasses = [
		\Fulfillment\OMS\Models\Response\Contracts\Order::class        => Order::class,
		\Fulfillment\OMS\Models\Response\Contracts\User::class         => User::class,
		\Fulfillment\OMS\Models\Response\Contracts\Inventory::class    => Inventory::class,
		\Fulfillment\OMS\Models\Response\Contracts\Merchant::class     => Merchant::class,
		\Fulfillment\OMS\Models\Response\Contracts\Product::class      => Product::class,
		\Fulfillment\OMS\Models\Response\Contracts\Sku::class          => Sku::class,
		\Fulfillment\OMS\Models\Response\Contracts\OrderStatus::class  => OrderStatus::class,
		\Fulfillment\OMS\Models\Response\Contracts\TrackingInfo::class => TrackingInfo::class,
	];

	protected $interfaces = [
		\Fulfillment\OMS\Models\Response\Contracts\Order::class,
		\Fulfillment\OMS\Models\Response\Contracts\User::class,
		\Fulfillment\OMS\Models\Response\Contracts\Inventory::class,
		\Fulfillment\OMS\Models\Response\Contracts\Merchant::class,
		\Fulfillment\OMS\Models\Response\Contracts\Product::class,
		\Fulfillment\OMS\Models\Response\Contracts\Sku::class,
		\Fulfillment\OMS\Models\Response\Contracts\OrderStatus::class,
	];

	/**
	 * @param array|null $data Array containing model aliases as keys and FQN as value
	 *
	 * @return Container
	 * @throws \InvalidArgumentException
	 */
	public function createContainer($data = null)
	{
		$container = new Container;

		foreach ($this->interfaces as $interface)
		{
			$container->add($interface, $this->getConcreteClass($interface, $data));
		}

		return $container;
	}

	/**
	 * @param string     $alias
	 * @param array|null $data
	 *
	 * @return string
	 * @throws \InvalidArgumentException
	 */
	protected function getConcreteClass($alias, $data = null)
	{
		if ($data !== null && array_key_exists($alias, $data))
		{
			self::checkImplements($data[ $alias ], $alias);

			return $data[ $alias ];
		}
		else
		{
			return $this->defaultClasses[ $alias ];
		}
	}

	/**
	 * @param string $classFqn
	 * @param string $interfaceFqn
	 *
	 * @throws \InvalidArgumentException
	 */
	public static function checkImplements($classFqn, $interfaceFqn)
	{
		if (!array_key_exists($interfaceFqn, class_implements($classFqn)))
		{
			throw new \InvalidArgumentException('Provided concrete class ' . $classFqn . ' must implement interface ' . $interfaceFqn);
		}
	}

}