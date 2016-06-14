<?php
namespace AuthNova\V1\Rest\Getconnect;

class GetconnectResourceFactory
{
    public function __invoke($services)
    {
    	$mapper = $services->get('GetconnectMapper');
        return new GetconnectResource($mapper);
    }
}
