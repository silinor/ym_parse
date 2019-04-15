<?php

function ym_parse($message) {
  $result = [];

  $matches = [];
  // Wallet.
  if (preg_match('/4100[0-9]{9,11}/', $message, $matches)) {
    $result['wallet'] = $matches[0];
  }
  // Code.
  if (preg_match('/([0-9]{4,5})\\s+/', $message, $matches)) {
    $result['code'] = $matches[1];
  }
  // Amount.
  if (preg_match('/[0-9]+(,|\\.)[0-9]{2}/', $message, $matches)) {
    $result['amount'] = $matches[0];
  }

  return $result;
}
