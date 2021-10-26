<?php

class Bot
{
    #controla o listener do callback
    public function hears($message, callable $call) 
    {  
        $call(new Bot);
        return $message;      
    }

    #responde com uma mensagem (imprime ou saida na tela)
    public function reply($response){
    	print($response)
    }

    #procura um valor dentro de vetor (array) informado
    public function ask($question, array $dic)
    {
    #retirar espaços em branco do inicio e do fim da string
         $question = trim($question);
         foreach ($dic as $key => $value) {
         	if ($question == $key) {
         		return $value;
         		# code...
         	}
         		# code...
         	}	
    }

}