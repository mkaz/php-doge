<?php

## Simple command-line script to show examples

require "./Doge.php";

$config = array(
    'user' => 'dogecoinrpc',
    'pass' => '--password--',
    'host' => '127.0.0.1',
    'port' => '22555' );

// create client conncetion
$doge = new Doge( $config );


// create a new address
$address = $doge->get_address( 'mkaz' );
print( "Address: $address \n" );

// list accounts in wallet
print_r( $doge->list_accounts() );

// get balance in wallet
print( "mkaz: " . $doge->get_balance( 'mkaz' ) );

// move money from accounts in wallet
// moves from 'thianh' to account 'mkaz'
$doge->move( 'thianh', 'mkaz', 10000 );

// send money externally (withdrawl?)
// send from account to external address
$doge->send( 'mkaz', 'DNYJ2ANdx1GL4sbCyikaVgYrf2GfiCtf8N', 100 );


