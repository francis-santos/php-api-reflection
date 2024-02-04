<?php
require 'vendor/autoload.php';

use Franc\PhpApiReflection\DatabaseMock;
use Franc\PhpApiReflection\User;
use Franc\PhpApiReflection\Product;

/**
 * Instancia o objeto dinâmico
 * @param string $entity Nome da classe que herda ObjectBase
 * @param array $data Array de propriedades que vão ser mapeadas
 * @return object A instância da classe recebida no parâmetro
 */
function getObject(string $entity, array $data): object
{
  return new $entity($data);
}

/**
 * Simula uma conexão ao banco e busca o usuário, 
 * não sendo necessário setar item por item.
 */ 
$user = getObject(User::class, DatabaseMock::getUser());
print_r($user);

echo '<br>';

/**
 * Caso retorne alguma propriedade que não esteja
 * declarada na classe a mesma é rejeitada, 
 * como é o caso da propriedade "quantity".
 */
$product = getObject(Product::class, DatabaseMock::getProduct());
print_r($product);
