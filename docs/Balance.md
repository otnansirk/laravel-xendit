# Balance

You can use the APIs below to interface with Xendit's `Balance`.

```php
<?php
use Otnansirk\Xendit\Facades\Xendit;

$xendit = Xendit::balance();
```

All URIs are relative to https://api.xendit.co, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBalance()**](Balance.md#getbalance-function) | **GET** /balance | Retrieves balances for a business, default to CASH type |


## `getBalance()` Function

```php
getBalance($account_type, $currency, $at_timestamp, $for_user_id): \BalanceAndTransaction\Balance
```

Retrieves balances for a business, default to CASH type
    Retrieves balance for your business, defaults to CASH type

| Name          |    Value 	     |
|--------------------|:-------------:|
| Function Name | `getBalance` |
| Request Parameters  |  [GetBalanceRequestParams](#request-parameters--GetBalanceRequestParams)	 |
| Return Type  |  [**\Xendit\BalanceAndTransaction\Balance**](https://github.com/xendit/xendit-php/blob/master/docs/BalanceAndTransaction/Balance.md) |

### Request Parameters - GetBalanceRequestParams

|Name | Type | Required |Default |
|-------------|:-------------:|:-------------:|-------------| 
| **account_type** | **string** |  | [&#39;CASH&#39;] |
| **currency** | **string** |  |  |
| **at_timestamp** | **\DateTime** |  |  |
| **for_user_id** | **string** |  |  |

### Usage Example
```php
<?php
use Otnansirk\Xendit\Facades\Xendit;

$xendit = Xendit::invoice();

$account_type = "CASH"; // string | The selected balance type
$currency = "IDR"; // string | Currency for filter for customers with multi currency accounts
$at_timestamp = 2020-06-19T00:00+07:00; // \DateTime | The timestamp you want to use as the limit for balance retrieval
$for_user_id = "5dbf20d7c8eb0c0896f811b6"; // string | The sub-account user-id that you want to make this transaction for. This header is only used if you have access to xenPlatform. See xenPlatform for more information

try {
    $result = $xendit->getBalance($account_type, $currency, $at_timestamp, $for_user_id);
    print_r($result);
} catch (\Xendit\XenditSdkException $e) {
    echo 'Exception when calling getBalance: ', $e->getMessage(), PHP_EOL;
    echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
}
```



[[Back to README]](../README.md)