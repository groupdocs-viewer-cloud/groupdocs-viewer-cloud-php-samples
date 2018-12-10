# GroupDocs.Storage Cloud SDK for PHP
This repository contains GroupDocs.Storage Cloud SDK for PHP source code. This SDK allows you to work with GroupDocs.Storage Cloud REST APIs in your PHP applications quickly and easily, with zero initial cost.
See [API Reference](https://apireference.groupdocs.cloud/storage/) for full API specification.

## How to use the SDK?
The complete source code is available in this repository folder. You can either directly use it in your project via source code or get [Packagist distribution](https://packagist.org/packages/groupdocscloud/storage-sdk-php) (recommended). For more details, please visit our [documentation website](https://docs.groupdocs.cloud/display/storagecloud/Available+SDKs).

### Prerequisites

To use GroupDocs Storage for Cloud PHP SDK you need to register an account with [GroupDocs Cloud](https://www.groupdocs.cloud/) and lookup/create App Key and SID at [Cloud Dashboard](https://dashboard.groupdocs.cloud/#/apps). There is free quota available. For more details, see [GroupDocs Cloud Pricing](https://purchase.groupdocs.cloud/pricing).

### Installation

#### Via Composer:
*storage-sdk-php* is available on Packagist as the
[`storage-sdk-php`](https://packagist.org/packages/groupdocscloud/storage-sdk-php) package. Run the following command:
```bash
composer require groupdocscloud/storage-sdk-php
```

To use the SDK, use Composer's [autoload](https://getcomposer.org/doc/00-intro.md#autoloading):

```php
require_once('vendor/autoload.php');
```

### Sample usage

```php
$config = new Configuration();
$config->setAppKey('AppKey')->setAppSid('AppSid');
$storageApi = new StorageApi($config);

$path = "path/FileName.pdf";
$versionId = null;
$storage = "StorageName";
$request = new Requests\GetDownloadRequest($path, $versionId, $storage);
$result = $storageApi->getDownload($request);
```
      
[Tests](tests/GroupDocs/Storage) contain various examples of using the SDK.
Please put your credentials into [Configuration](src/GroupDocs/Storage/Configuration.php).

## Dependencies
- PHP 5.6 or later
- referenced packages (see [here](composer.json) for more details)

## Contact Us
Your feedback is very important to us. Please feel free to contact us using our [Support Forums](https://forum.groupdocs.cloud/c/storage).
