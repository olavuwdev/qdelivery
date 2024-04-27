<?php

class Banners
{
    private int $id;
    private array $data;
    private bool $resultado;
    private const BD = 'banners';



    public function criarBanner(array $data): bool
    {
        $this->data = $data;
        if($this->verificaCampos($this->data)){
            return $this->resultado = false;
            exit();
        }

        if($this->verificaExistencia('link')){
            return $this->resultado = false;
            exit();
        }

        $this->addCapa();
        $this->filtroBanco();
        return $this->salvarNoBanco();
    }
    public function getResultado():bool
    {
        return $this->resultado;
    }
    public function atualizaBanners(int $id, array $data):bool
    {
        $this->id = $id; 
        $this->data = $data;

        if($this->verificaExistenciaUp('link')){
            return $this->resultado = false;
            exit();
        }

        $this->filtroBanco();
        $this->atualizaCapa();
        return $this->atualizaNoBanco();

    }

    public function excluirBanner(int $id):bool
    {
        $this->id = $id;
        if(!$this->id){
            return $this->resultado = false;
            exit();
        }

        $this->removerCapa();
        return $this->removerBannerDoBanco();
    }



    //FUNÇOES PRIVADAS DA CLASSE

    private function verificaCampos(array $data):bool
    {
        return in_array('', $data);
    }
    private function addCapa():void
    {
            if(isset($this->data['capa'])){
                $enviacapa = new Uploads(SHEEP_IMG_BANNERS);
                $urlCapa = Formata::Name($this->data['titulo']) . '-banner-' . time();
                $enviacapa->Image($this->data['capa'], $urlCapa);

                if($enviacapa->getResult()){
                    $this->data['capa'] = $enviacapa->getResult();
                }else{
                    $this->data['capa'] = null;
                }
            }    
    }
    private function filtroBanco():void{
            $capa = $this->data['capa'];
            unset($this->data['capa'], $this->data['id'], $this->data['sheep_firewall']);
            $this->data = array_map('trim', $this->data);
            $this->data = array_map('htmlspecialchars', $this->data);
            preg_replace('/[^[:alnum:]@]/','', $this->data);

            $this->data['titulo'] = (string) $this->data['titulo'];
            $this->data['link'] = (string) $this->data['link'];
            $this->data['tipo'] = (string) $this->data['tipo'];
            $this->data['tipo_cadastro'] = (string) $this->data['tipo_cadastro'];
            $this->data['capa'] = (string) $capa;

            if($this->data['tipo_cadastro'] == 'criar'){
                $this->data['data'] = date('Y-m-d H:i:s');
                $this->data['dia'] = date('d');
                $this->data['mes'] = date('m');
                $this->data['ano'] = date('Y');
            }

    }

    private function verificaExistencia($campo): array
    {
        $ler = new Ler();
        $ler->Leitura(self::BD, "WHERE {$campo} = :{$campo}", "{$campo}={$this->data[$campo]}");
        return $ler->getResultado();
    }
    private function verificaExistenciaUp($campo): bool{
        $ler = new Ler();
        $ler->Leitura(self::BD, "WHERE {$campo} = :{$campo}", "{$campo}={$this->data[$campo]}");
        return $ler->getContaLinhas() > 0; 
    }
    private function salvarNoBanco():bool
    {
        $criar = new Criar();
        $criar->Criacao(self::BD, $this->data);
        if($criar->getResultado()){
            return $this->resultado = true;
        }
         
    }

    private function atualizaCapa():void
    {
        if(isset($this->data['capa'])){
            $lerCapa = new Ler();
            $lerCapa->Leitura(self::BD, "WHERE id = :id", "id = {$this->id}");
            if($lerCapa->getResultado()){
                $capaBanner = SHEEP_IMG_BANNERS . $lerCapa->getResultado()[0]['capa'];

                if(file_exists($capaBanner) && !is_dir($capaBanner)){
                    unlink($capaBanner);
                }
                $enviaCapa = new Uploads(SHEEP_IMG_BANNERS);
                $urlCapa = Formata::name(date('Y-m-d')) . '-banner-' . Formata::name(date('H:m')) . '-qd-' . time();
                $enviaCapa->Image($this->data['capa'], $urlCapa);
            }
        }

        if(isset($enviaCapa) && $enviaCapa->getResult()){
            $this->data['capa'] = $enviaCapa->getResult();
        }else{
            unset($this->data['capa']);
        }

    }
    private function removerCapa():void
    {
        $lerCapa = new Ler();
        $lerCapa->Leitura(self::BD, "WHERE id = :id", "id={$this->id}");
        if($lerCapa->getResultado()){
            $capaBanner = SHEEP_IMG_BANNERS . $lerCapa->getResultado()[0]['capa'];
            if(file_exists($capaBanner) && !is_dir($capaBanner)){
                unlink($capaBanner);
            }
        }
    }

    private function atualizaNoBanco():bool
    {
        $atualizar = new Atualizar();
        $atualizar->Atualizando(self::BD, $this->data , "WHERE id = :id", "id={$this->id}");
        if($atualizar->getResultado()){
            return $this->resultado = true;
        }
    }
    private function removerBannerDoBanco():bool
    {
        $excluir = new Excluir();
        $excluir->Remover(self::BD, "WHERE id= :id", "id={$this->id}");
        if($excluir->getResultado()){
            return $this->resultado = true;
        }
    }

}

?>