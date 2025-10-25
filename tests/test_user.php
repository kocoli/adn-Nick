<?php

require __DIR__ . '/vendor/autoload.php';

use Source\Models\User;

// Criação de um usuário novo
echo "=== Testando INSERT ===\n";
$user = new User(
    null,           // id
    1,              // idType (1 = cliente, por exemplo)
    "Teste Usuário",// name
    "teste@dominio.com", // email
    "senha123",     // password
    null,           // photo
    "link-teste"    // link
);

if ($user->insert()) {
    echo "Usuário inserido com sucesso! ID: " . $user->getId() . "\n";
} else {
    echo "Erro ao inserir usuário: " . $user->getErrorMessage() . "\n";
}

// Testando findById
echo "\n=== Testando findById ===\n";
$userById = new User();
if ($userById->findById($user->getId())) {
    echo "Usuário encontrado pelo ID: " . $userById->getName() . " (" . $userById->getEmail() . ")\n";
} else {
    echo "Usuário não encontrado pelo ID.\n";
}

// Testando findByEmail
echo "\n=== Testando findByEmail ===\n";
$userByEmail = new User();
if ($userByEmail->findByEmail("teste@dominio.com")) {
    echo "Usuário encontrado pelo email: " . $userByEmail->getName() . "\n";
} else {
    echo "Usuário não encontrado pelo email.\n";
}

// Testando findLink
echo "\n=== Testando findLink ===\n";
$userByLink = new User();
if ($userByLink->findLink("link-teste")) {
    echo "Usuário encontrado pelo link: " . $userByLink->getId() . "\n";
} else {
    echo "Usuário não encontrado pelo link.\n";
}

// Testando atualização do nome
echo "\n=== Testando updateName ===\n";
if ($user->updateName("Nome Atualizado")) {
    echo "Nome atualizado com sucesso: " . $user->getName() . "\n";
} else {
    echo "Falha ao atualizar nome: " . $user->getErrorMessage() . "\n";
}

// Testando atualização do email
echo "\n=== Testando updateEmail ===\n";
if ($user->updateEmail("novoemail@dominio.com")) {
    echo "Email atualizado com sucesso: " . $user->getEmail() . "\n";
} else {
    echo "Falha ao atualizar email: " . $user->getErrorMessage() . "\n";
}

// Testando atualização da foto
echo "\n=== Testando updatePhoto ===\n";
if ($user->updatePhoto("foto.jpg")) {
    echo "Foto atualizada com sucesso: " . $user->getPhoto() . "\n";
} else {
    echo "Falha ao atualizar foto: " . $user->getErrorMessage() . "\n";
}

// Testando atualização da senha
echo "\n=== Testando updatePassword ===\n";
if ($user->updatePassword("novasenha123")) {
    echo "Senha atualizada com sucesso!\n";
} else {
    echo "Falha ao atualizar senha: " . $user->getErrorMessage() . "\n";
}

// Testando login
echo "\n=== Testando login ===\n";
$user->login();

// Testando delete
echo "\n=== Testando deleteById ===\n";
if ($user->deleteById($user->getId())) {
    echo "Usuário excluído com sucesso.\n";
} else {
    echo "Falha ao excluir usuário: " . $user->getErrorMessage() . "\n";
}

