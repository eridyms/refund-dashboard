<?php
include('../includes/db.php');

$sql = "SELECT * FROM refunds ORDER BY date DESC";
$stmt = $pdo->query($sql);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row) {
  echo "<tr>
          <td>{$row['id']}</td>
          <td>{$row['client']}</td>
          <td>{$row['amount']}</td>
          <td>{$row['status']}</td>
          <td>{$row['date']}</td>
        </tr>";
}
?>
