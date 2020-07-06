<?php

  $date = new DateTime();
  echo $date->format('Y年m月d日');
  echo '<br>';

  $dsn = 'mysql:host = localhost; dbname = wordpress; charset = utf8';
  $user = 'root';
  $password = 'root';

  try
  {
    $dbh = new PDO($dsn, $user, $password);
  } catch (PDOException $e)
  {
    echo 'データベースに接続できません!! ->' . $e->getMessage();
    echo '<br>';
    exit;
  }

  $sql = "SELECT * FROM wordpress.categories";
  $stmt = $dbh->query($sql);

  foreach($stmt as $row)
  {
    echo $row['id'].'  '.$row['name'].'  '.$row['panent_id'];
    echo '<br>';
  }
