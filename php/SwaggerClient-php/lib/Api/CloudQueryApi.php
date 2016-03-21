<?php
/**
 * CloudQueryApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * CloudQueryApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CloudQueryApi
{

    /**
     * API Client
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('http://api.cloudboost.io/');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     * @return CloudQueryApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * count
     *
     * count items in a table that match this query criteria
     *
     * @param string $app_id CloudApp id (required)
     * @param string $table_name cloud table name (required)
     * @param \Swagger\Client\Model\CloudQueryCount $body query body (required)
     * @return int
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function count($app_id, $table_name, $body)
    {
        list($response, $statusCode, $httpHeader) = $this->countWithHttpInfo ($app_id, $table_name, $body);
        return $response; 
    }


    /**
     * countWithHttpInfo
     *
     * count items in a table that match this query criteria
     *
     * @param string $app_id CloudApp id (required)
     * @param string $table_name cloud table name (required)
     * @param \Swagger\Client\Model\CloudQueryCount $body query body (required)
     * @return Array of int, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function countWithHttpInfo($app_id, $table_name, $body)
    {
        
        // verify the required parameter 'app_id' is set
        if ($app_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $app_id when calling count');
        }
        // verify the required parameter 'table_name' is set
        if ($table_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $table_name when calling count');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling count');
        }
  
        // parse inputs
        $resourcePath = "data/{app_id}/{table_name}/count";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        // path params
        
        if ($app_id !== null) {
            $resourcePath = str_replace(
                "{" . "app_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($app_id),
                $resourcePath
            );
        }// path params
        
        if ($table_name !== null) {
            $resourcePath = str_replace(
                "{" . "table_name" . "}",
                $this->apiClient->getSerializer()->toPathValue($table_name),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, 'int'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, 'int', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), 'int', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * distinct
     *
     * distinct query criteria
     *
     * @param string $app_id CloudApp id (required)
     * @param string $table_name cloud table name (required)
     * @param \Swagger\Client\Model\CloudQueryDistinct $body query body (required)
     * @return \Swagger\Client\Model\CloudObject[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function distinct($app_id, $table_name, $body)
    {
        list($response, $statusCode, $httpHeader) = $this->distinctWithHttpInfo ($app_id, $table_name, $body);
        return $response; 
    }


    /**
     * distinctWithHttpInfo
     *
     * distinct query criteria
     *
     * @param string $app_id CloudApp id (required)
     * @param string $table_name cloud table name (required)
     * @param \Swagger\Client\Model\CloudQueryDistinct $body query body (required)
     * @return Array of \Swagger\Client\Model\CloudObject[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function distinctWithHttpInfo($app_id, $table_name, $body)
    {
        
        // verify the required parameter 'app_id' is set
        if ($app_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $app_id when calling distinct');
        }
        // verify the required parameter 'table_name' is set
        if ($table_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $table_name when calling distinct');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling distinct');
        }
  
        // parse inputs
        $resourcePath = "data/{app_id}/{table_name}/distinct";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        // path params
        
        if ($app_id !== null) {
            $resourcePath = str_replace(
                "{" . "app_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($app_id),
                $resourcePath
            );
        }// path params
        
        if ($table_name !== null) {
            $resourcePath = str_replace(
                "{" . "table_name" . "}",
                $this->apiClient->getSerializer()->toPathValue($table_name),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\CloudObject[]'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\CloudObject[]', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\CloudObject[]', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * find
     *
     * find CloudObject meeting this query criteria
     *
     * @param string $app_id CloudApp id (required)
     * @param string $table_name cloud table name (required)
     * @param \Swagger\Client\Model\CloudQuery $body query object (required)
     * @return \Swagger\Client\Model\CloudObject[]
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function find($app_id, $table_name, $body)
    {
        list($response, $statusCode, $httpHeader) = $this->findWithHttpInfo ($app_id, $table_name, $body);
        return $response; 
    }


    /**
     * findWithHttpInfo
     *
     * find CloudObject meeting this query criteria
     *
     * @param string $app_id CloudApp id (required)
     * @param string $table_name cloud table name (required)
     * @param \Swagger\Client\Model\CloudQuery $body query object (required)
     * @return Array of \Swagger\Client\Model\CloudObject[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function findWithHttpInfo($app_id, $table_name, $body)
    {
        
        // verify the required parameter 'app_id' is set
        if ($app_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $app_id when calling find');
        }
        // verify the required parameter 'table_name' is set
        if ($table_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $table_name when calling find');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling find');
        }
  
        // parse inputs
        $resourcePath = "data/{app_id}/{table_name}/find";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        // path params
        
        if ($app_id !== null) {
            $resourcePath = str_replace(
                "{" . "app_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($app_id),
                $resourcePath
            );
        }// path params
        
        if ($table_name !== null) {
            $resourcePath = str_replace(
                "{" . "table_name" . "}",
                $this->apiClient->getSerializer()->toPathValue($table_name),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\CloudObject[]'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\CloudObject[]', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\CloudObject[]', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * findById
     *
     * find CloudObject with specific _id
     *
     * @param string $cloud_app_id CloudApp id (required)
     * @param string $table_name cloud table name (required)
     * @param \Swagger\Client\Model\CloudQueryFindById $body query body (required)
     * @return \Swagger\Client\Model\CloudObject
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function findById($cloud_app_id, $table_name, $body)
    {
        list($response, $statusCode, $httpHeader) = $this->findByIdWithHttpInfo ($cloud_app_id, $table_name, $body);
        return $response; 
    }


    /**
     * findByIdWithHttpInfo
     *
     * find CloudObject with specific _id
     *
     * @param string $cloud_app_id CloudApp id (required)
     * @param string $table_name cloud table name (required)
     * @param \Swagger\Client\Model\CloudQueryFindById $body query body (required)
     * @return Array of \Swagger\Client\Model\CloudObject, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function findByIdWithHttpInfo($cloud_app_id, $table_name, $body)
    {
        
        // verify the required parameter 'cloud_app_id' is set
        if ($cloud_app_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cloud_app_id when calling findById');
        }
        // verify the required parameter 'table_name' is set
        if ($table_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $table_name when calling findById');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling findById');
        }
  
        // parse inputs
        $resourcePath = "data/{cloud_app_id}/{table_name}/find";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        // path params
        
        if ($cloud_app_id !== null) {
            $resourcePath = str_replace(
                "{" . "cloud_app_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($cloud_app_id),
                $resourcePath
            );
        }// path params
        
        if ($table_name !== null) {
            $resourcePath = str_replace(
                "{" . "table_name" . "}",
                $this->apiClient->getSerializer()->toPathValue($table_name),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\CloudObject'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\CloudObject', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\CloudObject', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
    /**
     * findOne
     *
     * find a single CloudObject
     *
     * @param string $app_id CloudApp id (required)
     * @param string $table_name cloud table name (required)
     * @param \Swagger\Client\Model\CloudQueryFindOne $body query body (required)
     * @return \Swagger\Client\Model\CloudObject
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function findOne($app_id, $table_name, $body)
    {
        list($response, $statusCode, $httpHeader) = $this->findOneWithHttpInfo ($app_id, $table_name, $body);
        return $response; 
    }


    /**
     * findOneWithHttpInfo
     *
     * find a single CloudObject
     *
     * @param string $app_id CloudApp id (required)
     * @param string $table_name cloud table name (required)
     * @param \Swagger\Client\Model\CloudQueryFindOne $body query body (required)
     * @return Array of \Swagger\Client\Model\CloudObject, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function findOneWithHttpInfo($app_id, $table_name, $body)
    {
        
        // verify the required parameter 'app_id' is set
        if ($app_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $app_id when calling findOne');
        }
        // verify the required parameter 'table_name' is set
        if ($table_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $table_name when calling findOne');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling findOne');
        }
  
        // parse inputs
        $resourcePath = "data/{app_id}/{table_name}/findOne";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        // path params
        
        if ($app_id !== null) {
            $resourcePath = str_replace(
                "{" . "app_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($app_id),
                $resourcePath
            );
        }// path params
        
        if ($table_name !== null) {
            $resourcePath = str_replace(
                "{" . "table_name" . "}",
                $this->apiClient->getSerializer()->toPathValue($table_name),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'POST',
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\CloudObject'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }

            return array(\Swagger\Client\ObjectSerializer::deserialize($response, '\Swagger\Client\Model\CloudObject', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \Swagger\Client\ObjectSerializer::deserialize($e->getResponseBody(), '\Swagger\Client\Model\CloudObject', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}