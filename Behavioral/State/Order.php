<?php
declare(strict_types = 1);

class Order
{

    private $state = null;

    public function __construct($order_id)
    {
        // search order state
        $this->state = OrderFactory::generatorOrderState(1);
    }

    public function pay()
    {
        return $this->state->pay($this);
    }

    public function refund()
    {
        return $this->state->refund($this);
    }

    public function confirm()
    {
        return $this->state->confirm($this);
    }


}

class OrderFactory
{

    public static function generatorOrderState(int $state)
    {
        switch ($state) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
                return new stateA();

        }
        return new stateA();

    }

}

interface stateInterface
{

    // 确定支付
    public function pay(Order $order);

    // 退款
    public function refund(Order $order);

    // 确认
    public function confirm(Order $order);

}

class stateA implements stateInterface
{

    public function pay(Order $order)
    {
        // TODO: Implement pay() method.
    }

    public function refund(Order $order)
    {
        // TODO: Implement refund() method.
    }

    public function confirm(Order $order)
    {
        // TODO: Implement confirm() method.
    }
}

