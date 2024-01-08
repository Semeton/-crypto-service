<?php

interface ICryptoInterface {
    public function encrypt(string $message, string $secret): string;
    public function decrypt(string $encrypted, string $secret): string;
}