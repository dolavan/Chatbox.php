<?php
#fazendo a importação da classe Bot
include("Bot.php");

#criar um bojeto para manipular o chatbot
$bot = new Bot();

#aqui vamos definir as perguntas e resposta do sistema
$questions = [
    "o que é php" => "É uma linguagem serve side para web.",
    "o que é um carro" => "É um veiculo que transporta pessoas.",
    "o que é ML" => "É um sistema computacional que permite o aprendizado por equacionamento matematico.",
    "o que é linux" => "É um sistema operacional criado por Linus Torvald."
 ];