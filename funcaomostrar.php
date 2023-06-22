<?php
include "mostra.php";

function mostraquais()
{
	if (isset($_POST['funcao']) && $_POST['funcao'] == "Ver todos") {
		$xml = simplexml_load_file('acervo.xml');
		for ($i = 0; $i < $xml->count(); $i++) { ?>
            <div class="col-md-4 mb-4 mb-md-0">
                            <div class="card h-100">
                            <?php
		
			echo "</div><div class=\"livros\"><p class=\"titulo\"><strong>" . strval($xml->livro[$i]->titulo) . "</strong></br></p>";
}}}
          
?>
