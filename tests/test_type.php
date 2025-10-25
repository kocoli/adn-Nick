<?php

require __DIR__ . '/../vendor/autoload.php'; // caminho correto para o autoload

use Source\Models\Type;

// =======================
// TESTANDO INSERT
// =======================
echo "=== Testando INSERT ===<br>";
$type = new Type(null, "Moderador");

if ($type->insert()) {
    echo "Tipo inserido com sucesso! ID: " . $type->getId() . "<br>";
} else {
    echo "Erro ao inserir tipo: " . $type->getErrorMessage() . "<br>";
}

// =======================
// TESTANDO findById
// =======================
echo "<br>=== Testando findById ===<br>";
$typeById = new Type();
if ($typeById->findById($type->getId())) {
    echo "Tipo encontrado pelo ID: " . $typeById->getDescription() . "<br>";
} else {
    echo "Tipo não encontrado pelo ID.<br>";
}

// =======================
// TESTANDO findAll
// =======================
echo "<br>=== Testando findAll ===<br>";
$allTypes = $typeById->findAll();
if ($allTypes) {
    foreach ($allTypes as $t) {
        echo "ID: {$t->id}, Description: {$t->description}<br>";
    }
} else {
    echo "Nenhum tipo encontrado.<br>";
}

// =======================
// TESTANDO UPDATE
// =======================
echo "<br>=== Testando UPDATE ===<br>";
$type->setDescription("Moderador Atualizado");
if ($type->updateById()) {
    echo "Tipo atualizado com sucesso: " . $type->getDescription() . "<br>";
} else {
    echo "Falha ao atualizar tipo: " . $type->getErrorMessage() . "<br>";
}

// =======================
// TESTANDO DELETE
// =======================
echo "<br>=== Testando DELETE ===<br>";
if ($type->deleteById($type->getId())) {
    echo "Tipo excluído com sucesso.<br>";
} else {
    echo "Falha ao excluir tipo: " . $type->getErrorMessage() . "<br>";
}
