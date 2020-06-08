<?php

namespace App\Http\Controllers;

use App\paypal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MercurySeries\Flashy\Flashy;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Api\Transactions;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Exception\PayPalConnectionException;
use PayPal\Rest\ApiContext;

class PaymentController extends Controller
{
    public $paypalamount;

    public function __construct()
    {
        $this->paypalamount = paypal::first()->amount;
    }
    public function paymentpaypal()
    {
        $apiContext = new ApiContext(
            new OAuthTokenCredential(
                config('paypal.client_id',''),
                config('paypal.secret','')
            )
        );
        $apiContext->setConfig(
            config('paypal.settings','')
        );

        $details = (new Details())
            ->setSubtotal($this->paypalamount);

        $amount = (new Amount())
            ->setCurrency('EUR')
            ->setDetails($details)
            ->setTotal($this->paypalamount);

        $item = (new Item())
            ->setName('SCHLÜ Bestellung')
            ->setCurrency('EUR')
            ->setPrice($this->paypalamount)
            ->setQuantity(1);
        $list = new  ItemList();

        $list->addItem($item);

        $tansation = (new Transaction())
            ->setAmount($amount)
            ->setItemList($list)
            ->setDescription('SCHLÜ Bestellung')
            ->setCustom('Demo - 1');

        $redirecturi = (new RedirectUrls())
            ->setReturnUrl(route('saydanke'))
            ->setCancelUrl(route('cancel'));

        $payment = new Payment();
        $payment->setTransactions(new Transactions([$tansation]));
        $payment->setIntent('sale');
        $payment->setRedirectUrls($redirecturi);
        $payment->setPayer((new Payer())->setPaymentMethod('paypal'));
        try {
            $payment->create($apiContext);
            return redirect($payment->getApprovalLink());
        } catch (PayPalConnectionException $e) {
            Flashy::error('Ein Fehler ist aufgetretten bitte versuchen Sie nochmal später!', '');
            var_dump(json_decode($e->getData()));
        }
    }

    function saydanke()
    {
        return view('saydanke');
    }

    function cancel()
    {
        return view('cancel');
    }

    function setpaypalamount()
    {
        $paypal = paypal::find(1)->amount;
        return view('admin.paypal', compact('paypal'));
    }

    function postpayment(Request $request)
    {
        $paypal = DB::table('paypals')
            ->where('id', 1)
            ->update(['amount' => $request->get('amount')]);
    }
}
