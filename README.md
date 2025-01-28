# DeepSeek PHP Client

A lightweight PHP client to interact with the DeepSeek API without any external dependencies.

## Features
- Send messages to the DeepSeek API
- Lightweight and built using PHP's native `cURL` functions
- Easy to integrate into your PHP applications

## Requirements
- PHP 7.4 or higher
- A valid DeepSeek API Key

## Installation

### Using Composer
To install the package via Composer, run the following command:

```bash
composer require azozzalfiras/deepseek-api:^1.0
```

# Usage

## 1. Initialize the Client

```php 
require 'vendor/autoload.php'; 

use DeepSeek\DeepSeekClient;

// Replace with your DeepSeek API Key 
// get the api from https://platform.deepseek.com/api_keys

$apiKey = 'your-deepseek-api-key';
$client = new DeepSeekClient($apiKey);

```


## 2. Send a Message to the DeepSeek API

```php

// Specify the model
$model = 'deepseek-chat';

$messages = [
    ['role' => 'system', 'content' => 'You are a helpful assistant.'],
    ['role' => 'user', 'content' => 'Hello!']
];

$response = $client->sendMessage($messages, $model);

print_r($response);
```


### Example Response
If successful, the response will look like this:

```json
{
  "id": "chatcmpl-123",
  "object": "chat.completion",
  "created": 1234567890,
  "model": "deepseek-chat",
  "choices": [
    {
      "message": {
        "role": "assistant",
        "content": "Hello! How can I assist you today?"
      },
      "finish_reason": "stop"
    }
  ]
}
```




# MIT License

Copyright (c) 2025 Azozz ALFiras

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES, OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWA
