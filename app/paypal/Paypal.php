<?php


namespace App\paypal;

require_once('vendor/autoload.php');

use PayPal\Rest\ApiContext;

class Paypal
{
    public function __construct($arrConfig)
    {
        $apiContext = new ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                $arrConfig['paypal']['id'],
                $arrConfig['paypal']['secret']
            )
        );
        $apiContext->setConfig(
            array(
                'mode' => 'live',
                'log.LogEnabled' => true,
                'log.FileName' => 'PayPal.log',
                'log.LogLevel' => 'INFO', // PLEASE USE `INFO` LEVEL FOR LOGGING IN LIVE ENVIRONMENTS
            )
        );

        $details = (new \PayPal\Api\Details())
            ->setSubtotal(28,70);

        $amount = (new \PayPal\Api\Amount())
            ->setCurrency('EUR')
            ->setDetails($details)
            ->setTotal(28,70);

        $item = (new \PayPal\Api\Item())
            ->setName('SCHLÜ Bestellung')
            ->setCurrency('EUR')
            ->setPrice(28,70)
            ->setQuantity(1);
        $list = new  \PayPal\Api\ItemList();

        $list->addItem($item);

        $tansation = (new \PayPal\Api\Transaction())
            ->setAmount($amount)
            ->setItemList($list)
            ->setDescription('SCHLÜ Bestellung')
            ->setCustom('Demo - 1');

        $redirecturi = (new \PayPal\Api\RedirectUrls())
            ->setReturnUrl($arrConfig['domain']['url'] . 'pay.php')
            ->setCancelUrl($arrConfig['domain']['url']);

        $payment = new \PayPal\Api\Payment();
        $payment->setTransactions(new \PayPal\Api\Transactions([$tansation]));
        $payment->setIntent('sale');
        $payment->setRedirectUrls($redirecturi);
        $payment->setPayer((new \PayPal\Api\Payer())->setPaymentMethod('paypal'));

        try {
            $payment->create($apiContext);
            header('location:' . $payment->getApprovalLink());
        } catch (\PayPal\Exception\PayPalConnectionException $e) {
            var_dump(json_decode($e->getData()));
        }
    }
}
