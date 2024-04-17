<?php

class Slide{

    private int $id;
    private array $data;
    private bool $resultado;

    private const BD = 'slide';


    public function inserir(array $data):bool
    {
        $this->data = $data;
        if(empty($this->data['capa'])){
            return $this->resultado = false;
            exit();
        }

        $this->filtroBanco();
        $this->salvarCapa();
        return $this->salvarNoBanco();

    }
    public function getResultado():bool
    {
        return $this->resultado;
    }

    private function salvarCapa():void
    {
        if(isset($this->data['capa'])){
            $enviarCapa = new Uploads(SHEEP_IMG_SLIDE);
            $urlCapa = Formata::name(date('Y-m-d')) . '-slide-' . Formata::name(date('H:m')) .'-qd-' . time() ; 
            $enviarCapa->Image($this->data['capa'], $urlCapa);

            if($enviarCapa->getResult()){
                $this->data['capa'] = $enviarCapa->getResult();
            }else{
                $this->data['capa'] = null;
            }
        }
    }
    private function filtroBanco():void
    {
        $capa = $this->data['capa'];
        unset($this->data['id'], $this->data['capa'], $this->data['sheep_firewall']);

        $this->data = array_map('trim', $this->data);
        $this->data = array_map('htmlspecialchars', $this->data);
        preg_replace('/[^[:alnum:]@]/','', $this->data);

        $this->data['capa'] = $capa;
        $this->data['link'] = (string) $this->data['link'];

        if(isset($this->data['titulo_um'])){
            $this->data['titulo_um'] = (string) $this->data['titulo_um'];
        }
        if(isset($this->data['titulo_dois'])){
            $this->data['titulo_dois'] = (string) $this->data['titulo_dois'];
        }
        if(isset($this->data['titulo_tres'])){
            $this->data['titulo_tres'] = (string) $this->data['titulo_tres'];
        }
        if(isset($this->data['titulo_quatro'])){
            $this->data['titulo_quatro'] = (string) $this->data['titulo_quatro'];
        }
        if(isset($this->data['cor_um'])){
            $this->data['cor_um'] = (string) $this->data['cor_um'];
        }
        if(isset($this->data['cor_dois'])){
            $this->data['cor_dois'] = (string) $this->data['cor_dois'];
        }
        if(isset($this->data['text_btn'])){
            $this->data['text_btn'] = (string) $this->data['text_btn'];
        }

        if($this->data['tipo_cadastro'] == 'criar'){
            $this->data['data'] = date('Y-m-d H:i:s');
        }

    }
    private function salvarNoBanco():bool
    {
        $criar = new Criar();
        $criar->Criacao(self::BD, $this->data);
        if($criar->getResultado()){
            return $this->resultado = true;
        }else{
            return $this->resultado = false;
        }
    }



}



?>