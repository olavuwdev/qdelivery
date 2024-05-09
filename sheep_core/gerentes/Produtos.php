<?php


class Produtos
{
    private int $id;
    private array $data;
    private bool $resultado;
    private const BD = 'produto';

    public function inserir(array $data): bool
    {
        $this->data = $data;

        if($this->verificaCamposVazios($this->data)){
            return $this->resultado = false;
            exit();

        }

        $this->filtroBanco();
        $this->fotoCapa();
        return $this->salvaNoBanco(); 


    }

    public function getResultado():bool
    {
        return $this->resultado;
    }

    private function verificaCamposVazios(array $data):bool
    {
        return in_array('', $data);
    }

    private function fotoCapa():void
    {
        if(isset($this->data['capa'])){

            $enviaCapa = new Uploads(IMG_PRODUTOS);
            $urlCapa = Formata::Name($this->data['titulo']) . '-qd-' . time(); 
            $enviaCapa->Image($this->data['capa'], $urlCapa);
        }
        
        if(isset($enviaCapa) && $enviaCapa->getResult()){
            $this->data['capa'] = $enviaCapa->getResult();
        }else{
            $this->data['capa'] = null;
        }



    }
    private function filtroBanco():void
    {
        $capa = $this->data['capa'];

        unset($this->data['capa'], $this->data['id'], $this->data['sheep_firewall']);
        $this->data = array_map('trim', $this->data); 
        $this->data = array_map('htmlspecialchars', $this->data); 
        preg_replace('/[^[:alnum:]@]/','', $this->data);

        $this->data['url'] = Formata::Name($this->data['titulo']) . '-qd-' . time();
        $this->data['titulo'] = (string) $this->data['titulo']; 
        $this->data['capa'] = $capa; 
        $this->data['valor'] = $this->data['valor']; 
        $this->data['valor_promocao'] = $this->data['valor_promocao']; 
        $this->data['resumo'] = (string) $this->data['resumo']; 
        $this->data['usuario'] = (int) $this->data['usuario']; 
        $this->data['tipo'] = (string) $this->data['tipo']; 
        $this->data['tipo_cadastro'] = (string) $this->data['tipo_cadastro']; 
        
        if($this->data['tipo_cadastro'] == 'criar'){
            $this->data['data'] = date('Y-m-d H:i:s');
            $this->data['dia'] = date('d');
            $this->data['mes'] = date('m');
            $this->data['ano'] = date('Y');
        } 

    }
    private function salvaNoBanco():bool
    {
        $criar = new Criar();
        $criar->Criacao(self::BD,$this->data);
        if($criar->getResultado()){
            return $this->resultado = true;
        }


    }
    


}

?>