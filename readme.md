
# php-doge

A basic PHP library to talk to a dogecoind daemon to get you started in your doge project to take us to the moon.

I haven't implemented all of the end points of the API, focused on account and moving of coins. I'm trying to make sure the library is documented and includes examples so its easy to use before being complete.  Patches welcome.


## Requirements

Requires **dogecoind** to already be installed and running on your local server or reachable by your server.  

Get dogecoind source from: https://github.com/dogecoin/dogecoin

Also, here's a [guide building dogecoind](http://www.dogeco.in/wiki/index.php/Compiling_Dogecoind_on_Ubuntu/Debian) on debian-based system.  


## Usage:

Edit config in Doge.php to match your RPC server

```
private $hostname = '127.0.0.1';
private $port     = '22555';
private $rpc_user = 'dogecoinrpc';
private $rpc_pass = 'password';
```

Example Uses:
```
$doge = new Doge();

```


## About

Library created by Marcus Kazmierczak, http://mkaz.com/

Donations accepted: DNYJ2ANdx1GL4sbCyikaVgYrf2GfiCtf8N


