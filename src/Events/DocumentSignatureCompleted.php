<?php

declare(strict_types=1);

namespace DocusignBundle\Events;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\Response;

class DocumentSignatureCompleted extends Event
{
    /**
     * @var string
     */
    private $envelopeId;
    /**
     * @var Response
     */
    private $response;

    public function __construct(string $envelopeId, Response $response)
    {
        $this->envelopeId = $envelopeId;
        $this->response = $response;
    }

    /**
     * @return string the envelope Id
     */
    public function getEnvelopeId(): string
    {
        return $this->envelopeId;
    }

    public function getResponse(): Response
    {
        return $this->response;
    }
}
