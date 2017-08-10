<?php

  function addTodo(PDO $pdo, $todo) {
    $sl = 'INSERT INTO todo (id, name, content) VALUES (NULL, :name, :content)';
    $prepare = $pdo->prepare($sql);
    return $prepare->execute(array(
      'name'   => $todo['name'],
      'content' => $todo['content'],
    ));

}
  function findAllTodo(PDO $pdo) {
    $sql = "SELECT * FROM todo ORDER BY id DESC";
    $query = $pdo->query($sql);
      if ($query) {
        return $query->fetchAll(PDO::FETCH_ASSOC);
      } else {
        return false;
      }
  }

  function findTodo(PDO $pdo, $id) {
      $sql = "SELECT * FROM todo WHERE id = {$pdo->quote($id, PDO::PARAM_INT)}";
      $query = $pdo->query($sql);
      if ($query) {
          return $query->fetch(PDO::FETCH_ASSOC);
      } else {
          return false;
      }
  }

  function updateTodo(PDO $pdo, $todo) {
      $sql = "UPDATE todo SET name = :name, content = :content WHERE id = :id";
      $prepare = $pdo->prepare($sql);
      return $prepare->execute(array(
          'id'        => $todo['id'],
          'name'      => $todo['name'],
          'content'   => $todo['content'],
      ));
  }

  function deleteTodo(PDO $pdo, $id) {
      $sql = "DELETE FROM todo WHERE id = {$pdo->quote($id, PDO::PARAM_INT)}";
      return $pdo->query($sql);
  }

 ?>
