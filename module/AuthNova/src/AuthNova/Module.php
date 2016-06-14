<?php
namespace AuthNova;

use AuthNova\V1\Rest\Getconnect\GetconnectEntity;
use AuthNova\V1\Rest\Getconnect\GetconnectMapper;
use ZF\Apigility\Provider\ApigilityProviderInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;


class Module implements ApigilityProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }

    
    public function getServiceConfig()

    {

    	return array(
    		'factories' => array(
              'AuthNovaTableGateway' => function($sm) {
                 $dbAdapter = $sm->get('NovaCli');
                 $resultSetPrototype = new ResultSet();
                 $resultSetPrototype->setArrayObjectPrototype(new GetconnectEntity());
                 return new TableGateway('Clientes', $dbAdapter, null, $resultSetPrototype);
             },
             'AuthNova\V1\Rest\GetconnectMapper' => function($sm) {
                 $tableGateway = $sm->get('AuthNovaTableGateway');
                 return new GetconnectMapper($tableGateway);
             }
             )
            );	

    }


    public function getAutoloaderConfig()
    {
        return array(
            'ZF\Apigility\Autoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__,
                ),
            ),
        );
    }
}
