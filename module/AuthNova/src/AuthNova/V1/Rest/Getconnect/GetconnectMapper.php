<?php
namespace AuthNova\V1\Rest\Getconnect;

use Zend\Db\TableGateway\tableGateway;


class GetconnectMapper

{

 protected $tableGateway;

 public function __construct(TableGateway $tableGateway)

 {
 	$this->tableGateway = $tableGateway;
 }

 public function fetchAll()

 {

 	$resultSet = $this->tableGateway->select();
 	return $resultSet;
 }

 }
	

