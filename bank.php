<?php

echo "************** Banco balaroum **************\n";
echo "\n------------ Seja bem-vindo ! ------------\n";

$saldoatual = 0;

while (true) {

    echo "\nQual ação deseja realizar hoje ?\n";

    echo " 0 - Para verificar saldo atual.\n";
    echo " 1 - Para um deposito.\n";
    echo " 2 - Para um saque.\n";
    echo " 3 - Encerrar o programa.\n";

    $op = readline("Digite sua opção: ");



    switch ($op) {
        case 0:
            echo "Sua escolha: Verificar saldo atual.\n";
            echo "\nSeu saldo atual é de: $saldoatual R$\n";
            break;
        case 1:
            $deposito = (float) readline("Digite o valor que deseja depositar: \n");
            if ($deposito < 0) {
                echo "Não é possivel depositar saldo negativo !\n";
            } else {
                
                $saldoatual += $deposito;
                echo "Depósito de $deposito R$ realizado !\n";
            }
            break;
        case 2:
            $saque = (float) readline("Digite o valor que deseja sacar: \n");
            if ($saque <= $saldoatual) {
                $saldoatual -= $saque;
            } else {
                echo "Saldo insuficiente";
            }
            break;
        case 3:
            echo "Encerrando o programa ... Obrigado por usar o Banco Balaroum! \n";
            exit;
        default;
            echo "Opção invalida, tente novamente !\n";
            break;
    }
}
