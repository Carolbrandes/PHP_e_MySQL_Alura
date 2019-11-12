<?php

class Artigos
{
        private $mysql;

        public function __construct(mysqli $mysql)
        {
                $this->mysql = $mysql;
        }

        public function exibirTodosArtigos(): array
        {
                $resultado = $this->mysql->query('SELECT * FROM artigos');

                $artigos = $resultado->fetch_all(MYSQLI_ASSOC);

                return $artigos;
        }

        public function exibirArtigoEspecifico(string $id): array
        {
                $artigoSelecionado = $this->mysql->prepare('SELECT * FROM artigos WHERE id = ?');

                $artigoSelecionado->bind_param('s', $id);

                $artigoSelecionado->execute();
                $artigo = $artigoSelecionado->get_result()->fetch_assoc();
              
                return $artigo;
        }
}
