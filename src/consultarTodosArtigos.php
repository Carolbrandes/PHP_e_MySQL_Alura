<?php

$artigos = new Artigos($mysql);
$artigos = $artigos->exibirTodosArtigos();