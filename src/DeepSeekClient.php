<?php

namespace DeepSeek;

class DeepSeekClient
{
    private $apiKey;
    private $baseUri;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
        $this->baseUri = 'https://api.deepseek.com/';
    }

    public function sendMessage(array $messages, string $model = 'deepseek-chat', bool $stream = false)
    {
        $url = $this->baseUri . 'chat/completions';
        $payload = json_encode([
            'model' => $model, // Dynamic model support
            'messages' => $messages,
            'stream' => $stream,
        ]);

        $headers = [
            "Authorization: Bearer {$this->apiKey}",
            "Content-Type: application/json",
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            $error = curl_error($ch);
            curl_close($ch);
            return ['error' => $error];
        }

        $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($statusCode >= 200 && $statusCode < 300) {
            return json_decode($response, true);
        }

        return [
            'error' => 'Request failed',
            'status_code' => $statusCode,
            'response' => json_decode($response, true),
        ];
    }
}
