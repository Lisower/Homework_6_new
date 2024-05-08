<?php
function db_PDO(){
  $db = new PDO('mysql:host=localhost;dbname=u67447', $GLOBALS['user'], $GLOBALS['pass'],
    [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
  return $db;
}

function db_insert($table, $columns, $values) {
  $db = db_PDO();
  $columnList = implode(', ', $columns);
  $valuePlaceholders = rtrim(str_repeat('?, ', count($values)), ', ');
  $sql = "INSERT INTO $table ($columnList) VALUES ($valuePlaceholders)";
  $stmt = $db->prepare($sql);
  $stmt->execute($values);
}

function db_change($table, $columns, $values, $condition) {
  $db = db_PDO();
  $setStatements = [];
  foreach ($columns as $key => $column) {
    $setStatements[] = "$column = ?";
  }
  $setStatements = implode(', ', $setStatements);
  $sql = "UPDATE $table SET $setStatements WHERE $condition";
  $stmt = $db->prepare($sql);
  $stmt->execute($values);
}

function db_select($table, $columns, $condition) {
  $db = db_PDO();
  $query = "SELECT $columns FROM $table WHERE $condition";
  $result = $db->query($query);
  return $result->fetchAll(PDO::FETCH_ASSOC);
}

function db_delete($table, $condition) {
  $db = db_PDO();
  $sql = "DELETE FROM $table WHERE $condition";
  $stmt = $db->prepare($sql);
  $stmt->execute();
}
?>
