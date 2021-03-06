<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\OrderBundle\Factory;

use Sylius\Bundle\OrderBundle\Controller\AddToCartCommand;
use Sylius\Component\Order\Factory\AddToCartCommandFactoryInterface;
use Sylius\Component\Order\Model\OrderInterface;
use Sylius\Component\Order\Model\OrderItemInterface;

/**
 * @author Arkadiusz Krakowiak <arkadiusz.krakowiak@lakion.com>
 */
final class AddToCartCommandFactory implements AddToCartCommandFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function createWithCartAndCartItem(OrderInterface $cart, OrderItemInterface $cartItem)
    {
        return new AddToCartCommand($cart, $cartItem);
    }
}
