<?php

namespace ShopeeV2;

interface SignatureGeneratorInterface
{
    public function generateSignature(string $string): string;
}
