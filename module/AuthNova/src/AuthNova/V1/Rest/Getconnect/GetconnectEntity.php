<?php
namespace AuthNova\V1\Rest\Getconnect;

class GetconnectEntity
{

	public $id;
	public $ub;
	public $sb;
	public $servidor;
	public $chave_N;
	public $razaosocial;
	public $descricao;
	public $endereco;
	public $cidade;
	public $numero;
	public $telefone;
	public $site;
	public $logo;
	public $contato;
	public $ativo;
	public $sn;
	public $lat;
	public $lng;
	public $az;



	public function getArrayCopy()
	{
		return array(
			'id' => $this->id,
			'ub' => $this->ub,
			'sb' => $this->sb,
			'servidor' => $this->servidor,
			'chave_N' => $this->chave_N,
			'razaosocial' => $this->razaosocial,
			'descricao' => $this->descricao,
			'endereco' => $this->endereco,
			'cidade' => $this->cidade,
			'numero' => $this->numero,
			'telefone' => $this->telefone,
			'site' => $this->site,
			'logo' => $this->logo,
			'contato' => $this->contato,
			'ativo' => $this->ativo,
			'sn' => $this->sn,
			'lat' => $this->lat,
			'lng' => $this->lng,
			'az' => $this->az
			);
	}

	public function exchangeArray(array $array)
	{
		$this->id = $array['id'];
		$this->ub = $array['ub'];
		$this->sb = $array['sb'];
		$this->servidor = $array['servidor'];
		$this->chave_N = $array['chave_N'];
		$this->razaosocial = $array['razaosocial'];
		$this->descricao = $array['descricao'];
		$this->endereco = $array['endereco'];
		$this->cidade = $array['cidade'];
		$this->numero = $array['numero'];
		$this->telefone = $array['telefone'];
		$this->site = $array['site'];
		$this->logo = $array['logo'];
		$this->contato = $array['contato'];
		$this->ativo = $array['ativo'];
		$this->sn = $array['sn'];
		$this->lat = $array['lat'];
		$this->lng = $array['lng'];
		$this->az = $array['az'];
	}
}
