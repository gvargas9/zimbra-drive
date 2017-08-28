<?php
/**
 * Copyright 2017 Zextras Srl
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace OCA\ZimbraDrive\Auth;

class HttpRequestResponse
{
    /** @var  string */
    private $rawResponse;
    /** @var  int */
    private $httpCode;
    /** @var bool */
    private $isConnectionErrorOccurred;
    private $connectionError;

    public function __construct($rawResponse, $httpCode, $isConnectionErrorOccurred, $connectionError)
    {
        $this->rawResponse = $rawResponse;
        $this->httpCode = $httpCode;
        $this->isConnectionErrorOccurred = $isConnectionErrorOccurred;
        $this->connectionError = $connectionError;
    }

    /**
     * @return mixed
     */
    public function getRawResponse()
    {
        return $this->rawResponse;
    }

    /**
     * @return integer
     */
    public function getHttpCode()
    {
        return $this->httpCode;
    }

    /**
     * @return bool
     */
    public function isConnectionErrorOccurred()
    {
        return $this->isConnectionErrorOccurred;
    }

    public function getConnectionError()
    {
        return $this->connectionError;
    }
}