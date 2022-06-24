<?php

namespace ShopeeV2;

interface SignatureGeneratorInterface
{
    public function generateSignature(string $string): string;
    public function signBaseString(array $data, string $type): string;
}
