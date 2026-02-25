<?php

class Validacao
{

    public $validacoes = [];

    public static function validar($regras, $dados)
    {
        $validacao = new self;
        //Regras: nome e regras 
        foreach ($regras as $campo => $regrasCampo) {



            foreach ($regrasCampo as $regra) {
                $valorCampo = $dados[$campo];
                if ($regra == 'confirmed') {

                    $validacao->$regra($campo, $valorCampo, $dados["confirmacao_{$campo}"]);
                } else if (str_contains($regra, ':')) {
                    $temp = explode(':', $regra);
                    $regra = $temp[0];
                    $regraAr = $temp[1];
                    $validacao->$regra($regraAr, $campo, $valorCampo);
                } else {
                    $validacao->$regra($campo, $valorCampo);
                }
            }
        }

        return $validacao;
    }
    private function unique($tabela, $campo, $valor)
    {

        if (strlen($valor) == 0) {
            return;
        }
        $db = new Database(config('database')); 

        $resultado = $db->query(
            query:"select * from $tabela where $campo = :valor ",
            params: ['valor' => $valor],
            
        )->fetch();

        if($resultado){
             $this->validacoes[] = "Essa $campo já esta em uso  !";
        }
    }

    private function required($campo, $valor)
    {
        if (strlen($valor) == 0) {
            $this->validacoes[] = "A $campo é obrigatorio !";
        }
    }

    private function email($campo, $valor)
    {

        if (!filter_var($valor, FILTER_VALIDATE_EMAIL)) {
            $this->validacoes[] = "O $campo é invalido!";
        }
    }

    private function confirmed($campo, $valor, $valorDeConfirmacao)
    {
        //dd($valorDeConfirmacao);
        if ($valor != $valorDeConfirmacao) {

            $this->validacoes[] = "O $campo de confirmação está diferente.";
        }
    }
    private function max($max, $campo, $valor)
    {

        if (strlen($valor) >= $max) {
            $this->validacoes[] = "A $campo precisa ter menos que  $max caracteres";
        }
    }
    private function strong($campo, $valor)
    {

        if (str_contains($campo, "!#$%&'()*+,-./:;<=>?@[\]^_`{|}~")) {
            $this->validacoes[] = "A $campo precisa de no menos um caracter especial";
        }
    }
    private function min($min, $campo, $valor)
    {

        if (strlen($valor) <= $min) {
            $this->validacoes[] = "A $campo precisa de no minimo de $min caracteres";
        }
    }





    public function naoPassou($nomeCustomizado = null)
    {

        $chave = 'validacoes';

        if ($nomeCustomizado) {
            $chave .=  '_' . $nomeCustomizado;
        }


        //Adicionar valor 
        flash()->push($chave, $this->validacoes);


        //$_SESSION['validacoes'] = $this->validacoes;
        return sizeof($this->validacoes) > 0;
    }
}
