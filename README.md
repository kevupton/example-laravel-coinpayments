# Coinpayments Example API

### [laravel-coinpayments](https://github.com/kevupton/laravel-coinpayments)
### [coinpayments-website](https://www.coinpayments.net/index.php?ref=a458c004de21a18c71849871781be820)


Example integration of laravel coinpayments.

```bash
git clone https://github.com/kevupton/example-laravel-coinpayments.git
```

```bash
vim .env
```

Setup your environment variables
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

COINPAYMENTS_DB_PREFIX=cp_
COINPAYMENTS_MERCHANT_ID=your_unique_merchant_id
COINPAYMENTS_PUBLIC_KEY=generated_public_key
COINPAYMENTS_PRIVATE_KEY=generated_private_key
COINPAYMENTS_IPN_SECRET=your_custom_ipn_secret
COINPAYMENTS_IPN_URL=http://YOUR-ADDRESS/api/ipn
COINPAYMENTS_API_FORMAT=json
```

***Note:*** *get  your keys and ipn secret from the coinpayments website. You will need to setup an IPN secret manually.*

Setup the database
```bash
php artisan migrate
```

### Testing

Running example purchase

```bash
curl -X POST \
  http://localhost/coinpayments-example/public/api/purchase \
  -H 'cache-control: no-cache' \
  -F amount=1000 \
  -F currency=ETH
```

Running example donation

```bash
curl -X POST \
  http://localhost/coinpayments-example/public/api/donation \
  -H 'cache-control: no-cache' \
  -F amount=1000 \
  -F currency=ETH
```
