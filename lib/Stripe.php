<?php

// Tested on PHP 5.2, 5.3

// This snippet (and some of the curl code) due to the Facebook SDK.
if (!function_exists('curl_init')) {
  throw new Exception('Stripe needs the CURL PHP extension.');
}
if (!function_exists('json_decode')) {
  throw new Exception('Stripe needs the JSON PHP extension.');
}
if (!function_exists('mb_detect_encoding')) {
  throw new Exception('Stripe needs the Multibyte String PHP extension.');
}

// Stripe singleton
if (!class_exists('Stripe')) {
	require(dirname(__FILE__) . '/Stripe/Stripe.php');
}

// Utilities
if (!class_exists('Stripe_Util')) {
	require(dirname(__FILE__) . '/Stripe/Util.php');
	require(dirname(__FILE__) . '/Stripe/Util/Set.php');
}

// Errors
if (!class_exists('Stripe_Error')) {
	require(dirname(__FILE__) . '/Stripe/Error.php');
}
if (!class_exists('Stripe_ApiError')) {
	require(dirname(__FILE__) . '/Stripe/ApiError.php');
}
if (!class_exists('Stripe_ApiConnectionError')) {
	require(dirname(__FILE__) . '/Stripe/ApiConnectionError.php');
}
if (!class_exists('Stripe_ApiConnectionError')) {
	require(dirname(__FILE__) . '/Stripe/AuthenticationError.php');
}
if (!class_exists('Stripe_CardError')) {
	require(dirname(__FILE__) . '/Stripe/CardError.php');
}
if (!class_exists('Stripe_InvalidRequestError')) {
	require(dirname(__FILE__) . '/Stripe/InvalidRequestError.php');
}
if (!class_exists('Stripe_RateLimitError')) {
	require(dirname(__FILE__) . '/Stripe/RateLimitError.php');
}

// Plumbing
if (!class_exists('Stripe_Object')) {
	require(dirname(__FILE__) . '/Stripe/Object.php');
}
if (!class_exists('Stripe_ApiRequestor')) {
	require(dirname(__FILE__) . '/Stripe/ApiRequestor.php');
}
if (!class_exists('Stripe_ApiResource')) {
	require(dirname(__FILE__) . '/Stripe/ApiResource.php');
}
if (!class_exists('Stripe_SingletonApiResource')) {
	require(dirname(__FILE__) . '/Stripe/SingletonApiResource.php');
}
if (!class_exists('Stripe_AttachedObject')) {
	require(dirname(__FILE__) . '/Stripe/AttachedObject.php');
}
if (!class_exists('Stripe_List')) {
	require(dirname(__FILE__) . '/Stripe/List.php');
}

// Stripe API Resources
if (!class_exists('Stripe_Account')) {
	require(dirname(__FILE__) . '/Stripe/Account.php');
}
if (!class_exists('Stripe_Card')) {
	require(dirname(__FILE__) . '/Stripe/Card.php');
}
if (!class_exists('Stripe_Balance')) {
	require(dirname(__FILE__) . '/Stripe/Balance.php');
}
if (!class_exists('Stripe_BalanceTransaction')) {
	require(dirname(__FILE__) . '/Stripe/BalanceTransaction.php');
}
if (!class_exists('Stripe_Charge')) {
	require(dirname(__FILE__) . '/Stripe/Charge.php');
}
if (!class_exists('Stripe_Customer')) {
	require(dirname(__FILE__) . '/Stripe/Customer.php');
}
if (!class_exists('Stripe_Invoice')) {
	require(dirname(__FILE__) . '/Stripe/Invoice.php');
}
if (!class_exists('Stripe_InvoiceItem')) {
	require(dirname(__FILE__) . '/Stripe/InvoiceItem.php');
}
if (!class_exists('Stripe_Plan')) {
	require(dirname(__FILE__) . '/Stripe/Plan.php');
}
if (!class_exists('Stripe_Subscription')) {
	require(dirname(__FILE__) . '/Stripe/Subscription.php');
}
if (!class_exists('Stripe_Token')) {
	require(dirname(__FILE__) . '/Stripe/Token.php');
}
if (!class_exists('Stripe_Coupon')) {
	require(dirname(__FILE__) . '/Stripe/Coupon.php');
}
if (!class_exists('Stripe_Event')) {
	require(dirname(__FILE__) . '/Stripe/Event.php');
}
if (!class_exists('Stripe_Transfer')) {
	require(dirname(__FILE__) . '/Stripe/Transfer.php');
}
if (!class_exists('Stripe_Recipient')) {
	require(dirname(__FILE__) . '/Stripe/Recipient.php');
}
if (!class_exists('Stripe_ApplicationFee')) {
	require(dirname(__FILE__) . '/Stripe/ApplicationFee.php');
}
