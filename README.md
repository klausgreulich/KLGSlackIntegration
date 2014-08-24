# Usage

KLGSlackIntegration uses a flow like style, so most of the functions will return the instance.

## Init

First of all we have to init KLGSlackIntegration with the URL and the token that can be found on Slack's integration page.

```php
KLGSlackIntegration::init($url, $token);

```

This has to be done only once in your application.

Then we get the instance of the KLGSlackIntegration by calling:

```php
$ksi = KLGSlackIntegration::getInstance();
```

Having the instance we can send a message by:

```php
$ksi->sendMessage('Something wonderful happened ...');
```

This is a convenience function for:

```php
$ksi->setMessage('Something wonderful happened ...');
$ksi->send();
```

or

```php
$ksi->setMessage('Something wonderful happened ...')->send();
```

or - as a one-liner:

```php
KLGSlackIntegration::getInstance()->setMessage('Something wonderful happened ...')->send();
```

;)

## Set a Username

```php
$ksi->setUsername('Rainer Unsinn');
```

## Override the bot's icon

```php
$ksi->setIconUrl($theUrl);
```

## Set an Emoji-Icon

```php
$ksi->setEmojiIcon('ghost');
