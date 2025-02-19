# Laravel Xendit
#### This Laravel wrapper/library for Xendit payment gateway.
Visit https://xendit.co for more information about the product and see documentation at https://developers.xendit.co for more technical details.
<hr/>
Laravel Xendit use the [Xendit PHP SDK](https://packagist.org/packages/xendit/xendit-php)
</br>
You can also check out the [documentation](https://github.com/xendit/xendit-php/blob/master/README.md) for Xendit PHP SDK.

All URIs are relative to https://api.xendit.co, except if the operation defines another base path.

# Installation

#### 1. You can install the package via composer.
```sh
composer require otnansirk/laravel-xendit
```

#### 2. Optional : The service provider will automatically get registered. Or you may manually.
Add the service provider in your `configs/app.php` or `bootstrap/providers.php` for laravel >= 11
```php
'providers' => [
    // ...
    Otnansirk\Xendit\XenditServiceProvider::class,
];
```

#### 3. You should publish the `config/xendit.php` config file with this php artisan command.
```sh
php artisan vendor:publish --provider="Otnansirk\Xendit\XenditServiceProvider"
```

#### 4. To start using the Laravel Xendit, you need to configure the secret key.
read the `config/xendit.php` file then fill the credentials needed.

# How to Use
```php
<?php
use Otnansirk\Xendit\Facades\Xendit;
// Available functions
Xendit::customer();
Xendit::paymentMethod();
Xendit::paymentRequest();
Xendit::transaction();
Xendit::refund();
Xendit::balance();
Xendit::payout();
Xendit::invoice();

```

Find detailed API information and examples for each of our product’s by clicking the links below.

* [Customer](docs/Customer.md)
* [PaymentMethod](docs/PaymentMethod.md)
* [PaymentRequest](docs/PaymentRequest.md)
* [Transaction](docs/Transaction.md)
* [Refund](docs/Refund.md)
* [Balance](docs/Balance.md)
* [Payout](docs/Payout.md)
* [Invoice](docs/Invoice.md)

## Further Reading

* Xendit Docs
* Xendit API Reference