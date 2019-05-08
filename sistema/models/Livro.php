<?php
require_once 'Editora.php';
require_once 'Genero.php]';

class Livro
{
    private $id;
    private $titulo;
    private $descricao;
    private $autor;
    private $genero;
    private $editora;
    private $valor;
    private $ano;

    /**
     * Livro constructor.
   */
    public function __construct($id, $genero, $editora)
    {
        $this->id = 0;
        $this->genero = new Genero();
        $this->editora = new Editora();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * @param mixed $autor
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    /**
     * @return Genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * @param Genero $genero
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;
    }

    /**
     * @return Editora
     */
    public function getEditora()
    {
        return $this->editora;
    }

    /**
     * @param Editora $editora
     */
    public function setEditora($editora)
    {
        $this->editora = $editora;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * @return mixed
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * @param mixed $ano
     */
    public function setAno($ano)
    {
        $this->ano = $ano;
    }


}