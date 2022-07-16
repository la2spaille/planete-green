<?php

/**
 * WooCommerce REST API HTTP Client Exception
 *
 * @category HttpClient
 * @package  Automattic/WooCommerce
 */

namespace Engine\Model\HttpClient;


use Exception;
use JetBrains\PhpStorm\Pure;

/**
 * REST API HTTP Client Exception class.
 *
 * @package Automattic/WooCommerce
 */
class HttpClientException extends Exception
{
    /**
     * Request.
     *
     * @var Request
     */
    private Request $request;

    /**
     * Response.
     *
     * @var Response
     */
    private Response $response;

    /**
     * Initialize exception.
     *
     * @param string $message  Error message.
     * @param int $code     Error code.
     * @param Request  $request  Request data.
     * @param Response $response Response data.
     */
    #[Pure] public function __construct(string $message, int $code, Request $request, Response $response)
    {
        parent::__construct($message, $code);

        $this->request  = $request;
        $this->response = $response;
    }

    /**
     * Get request data.
     *
     * @return Request
     */
    public function getRequest(): Request
    {
        return $this->request;
    }

    /**
     * Get response data.
     *
     * @return Response
     */
    public function getResponse(): Response
    {
        return $this->response;
    }
}
