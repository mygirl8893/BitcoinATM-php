<?php
require_once 'mtgoxQuery.php';

function getSpot() {
	$data = mtgox_query('0/data/ticker.php');
	return $data['ticker']['last'];
}

function getBalance() {
	$data = mtgox_query('0/getFunds.php');
	return $data;
}

function getBalanceUSD() {
	$data = mtgox_query('0/getFunds.php');
	return $data['usds'];
}

function getBalanceBTC() {
	$data = mtgox_query('0/getFunds.php');
	return $data['btcs'];
}

function withdrawBTC($address, $amount) {
	$rval = mtgox_query('0/withdraw.php',
			array("group1" => 'BTC', "btca" => $address, "amount" => $amount));
	return $rval;
}
?>