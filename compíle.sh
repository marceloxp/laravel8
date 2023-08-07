#!/bin/bash

# Função para executar o comando
# ➜ cd www && php artisan view:clear && mv .env .env_local && cp .env.homolog .env && gulp homolog && php artisan export && rm .env && mv .env_local .env && cd ..
execute_command() {
    # Mude o diretório para "www"
    if [ -d "www" ]; then
        cd www
    fi
    
    # Limpe as views
    php artisan view:clear
    
    # Faça backup do arquivo .env atual
    mv .env .env_local
    
    # Copie o arquivo .env correspondente à opção selecionada
    if [[ $1 == "h" ]]; then
        cp .env.homolog .env
        gulp homolog
        elif [[ $1 == "p" ]]; then
        cp .env.production .env
        gulp production
    else
        echo "Opção inválida!"
        exit 1
    fi
    
    # Execute o comando "php artisan export"
    php artisan export
    
    # Remova o arquivo .env
    rm .env
    
    # Restaure o arquivo .env anterior
    mv .env_local .env
    
    # Volte ao diretório anterior
    cd ..
}

# Exibe as opções e solicita a escolha
echo "Selecione uma opção:"
echo "  [h] Homolog"
echo "  [p] Production"
read -p "Opção: " option

# Converte a opção para minúsculas
# option=${option,,}

# Verifica a opção selecionada e executa o comando correspondente
if [[ $option == "h" ]]; then
    execute_command "h"
    elif [[ $option == "p" ]]; then
    execute_command "p"
else
    echo "Opção inválida!"
    exit 1
fi
