<?php
namespace Enola\Rest;

class RestClientException extends \Exception {
    public function __construct($message, $code = 500, Exception $previous = null) {
        // Default code 500
        parent::__construct($message, $code, $previous);
    }
}
