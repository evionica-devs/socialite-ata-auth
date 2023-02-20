# LaravelPassport

```bash
composer require evionica/socialite-ata-auth
```

## Installation & Basic Usage

Please see the [Base Installation Guide](https://socialiteproviders.com/usage/), then follow the provider specific instructions below.

### Add configuration to `config/services.php`

```php
'ataauth' => [
    'client_id' => env('ATAAUTH_CLIENT_ID'),
    'client_secret' => env('ATAAUTH_CLIENT_SECRET'),
    'redirect' => env('APP_URL').'/auth/callback',
    'host' => env('ATAAUTH_HOST'),
],
```

### Add provider event listener

Configure the package's listener to listen for `SocialiteWasCalled` events.

Add the event to your `listen[]` array in `app/Providers/EventServiceProvider`. See the [Base Installation Guide](https://socialiteproviders.com/usage/) for detailed instructions.

```php
protected $listen = [
    \SocialiteProviders\Manager\SocialiteWasCalled::class => [
        // ... other providers
        \Evionica\SocialiteAtaAuth\AtaAuthExtendSocialite::class.'@handle',
    ],
];
```

### Usage

You should now be able to use the provider like you would regularly use Socialite (assuming you have the facade installed):

```php
return Socialite::driver('ataauth')->redirect();
```

### Returned User fields

- ``uuid``
- ``firstName``
- ``lastName``
- ``email``
- ``ato``
