<?php

require __DIR__ . '/../vendor/autoload.php'; // caminho correto para o autoload

use Source\Models\User;

// Criação de um usuário novo
echo "=== Testando INSERT ===<br>";
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
    echo "Usuário inserido com sucesso! ID: " . $user->getId() . "<br>";
} else {
    echo "Erro ao inserir usuário: " . $user->getErrorMessage() . "<br>";
}

// Testando findById
echo "<br>=== Testando findById ===<br>";
$userById = new User();
if ($userById->findById($user->getId())) {
    echo "Usuário encontrado pelo ID: " . $userById->getName() . " (" . $userById->getEmail() . ")<br>";
} else {
    echo "Usuário não encontrado pelo ID.<br>";
}

// Testando findByEmail
echo "<br>=== Testando findByEmail ===<br>";
$userByEmail = new User();
if ($userByEmail->findByEmail("teste@dominio.com")) {
    echo "Usuário encontrado pelo email: " . $userByEmail->getName() . "<br>";
} else {
    echo "Usuário não encontrado pelo email.<br>";
}

// Testando findLink
echo "<br>=== Testando findLink ===<br>";
$userByLink = new User();
if ($userByLink->findLink("link-teste")) {
    echo "Usuário encontrado pelo link: " . $userByLink->getId() . "<br>";
} else {
    echo "Usuário não encontrado pelo link.<br>";
}

// Testando atualização do nome
echo "<br>=== Testando updateName ===<br>";
if ($user->updateName("Nome Atualizado")) {
    echo "Nome atualizado com sucesso: " . $user->getName() . "<br>";
} else {
    echo "Falha ao atualizar nome: " . $user->getErrorMessage() . "<br>";
}

// Testando atualização do email
echo "<br>=== Testando updateEmail ===<br>";
if ($user->updateEmail("novoemail@dominio.com")) {
    echo "Email atualizado com sucesso: " . $user->getEmail() . "<br>";
} else {
    echo "Falha ao atualizar email: " . $user->getErrorMessage() . "<br>";
}

// Testando atualização da foto
echo "<br>=== Testando updatePhoto ===<br>";
if ($user->updatePhoto("foto.jpg")) {
    echo "Foto atualizada com sucesso: " . $user->getPhoto() . "<br>";
} else {
    echo "Falha ao atualizar foto: " . $user->getErrorMessage() . "<br>";
}

// Testando atualização da senha
echo "<br>=== Testando updatePassword ===<br>";
if ($user->updatePassword("novasenha123")) {
    echo "Senha atualizada com sucesso!<br>";
} else {
    echo "Falha ao atualizar senha: " . $user->getErrorMessage() . "<br>";
}

// Testando login
echo "<br>=== Testando login ===<br>";
if ($user->login("novasenha123")) {
    echo "Login bem-sucedido<br>";
} else {
    echo "Falha no login: " . $user->getErrorMessage() . "<br>";
}

// Testando delete
echo "<br>=== Testando deleteById ===<br>";
if ($user->deleteById($user->getId())) {
    echo "Usuário excluído com sucesso.<br>";
} else {
    echo "Falha ao excluir usuário: " . $user->getErrorMessage() . "<br>";
}

