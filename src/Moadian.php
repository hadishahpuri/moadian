<?php

namespace SnappMarketPro\Moadian;

use InvalidArgumentException;
use Ramsey\Uuid\Uuid;
use SnappMarketPro\Moadian\Api\Api;
use SnappMarketPro\Moadian\Dto\Packet;
use SnappMarketPro\Moadian\Services\EncryptionService;
use SnappMarketPro\Moadian\Services\HttpClient;
use SnappMarketPro\Moadian\Services\SignatureService;

class Moadian
{
    private $token;

    public function __construct(
        protected readonly string $publicKey,
        protected readonly string $privateKey,
        protected readonly string $orgKeyId,
        protected readonly string $username,
        protected readonly string $baseURL = 'https://tp.tax.gov.ir',
    )
    {
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function sendInvoice(Packet $packet)
    {
        if (! $this->token) {
            throw new InvalidArgumentException("Set token before sending invoice!");
        }

        $headers = [
            'Authorization' => 'Bearer ' . $this->token,
            'requestTraceId' => (string) Uuid::uuid4(),
            'timestamp' => time() * 1000,
        ];

        $httpClient = new HttpClient($this->baseURL,
            new SignatureService($this->privateKey),
            new EncryptionService($this->publicKey, $this->orgKeyId)
        );

        $path = 'req/api/self-tsp/async/normal-enqueue';

        return $httpClient->sendPackets($path, [$packet], $headers, true, true);
    }

    public function getToken()
    {
        $signatureService = new SignatureService($this->privateKey);

        $encryptionService = new EncryptionService($this->orgKeyId, null);

        $httpClient = new HttpClient($this->baseURL, $signatureService, $encryptionService);

        $api = new Api($this->username, $httpClient);

        return $api->getToken();
    }
}