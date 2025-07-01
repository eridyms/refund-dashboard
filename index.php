<?php include('includes/db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Refund Dashboard</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <?php include('includes/sidebar.php'); ?>
  <div class="main-content">
    <?php include('includes/header.php'); ?>

    <section class="cards">
      <div class="card">Total Refunds: 120</div>
      <div class="card">Pending: 24</div>
      <div class="card">Approved: 76</div>
      <div class="card">Rejected: 20</div>
    </section>

    <section class="data-table">
      <h2>Refund Requests</h2>
      <table>
        <thead>
          <tr>
            <th>ID</th><th>Client</th><th>Amount</th><th>Status</th><th>Date</th>
          </tr>
        </thead>
        <tbody id="refundTable">
          <!-- Loaded via JS/Ajax -->
        </tbody>
      </table>
    </section>
  </div>
  <script src="assets/js/main.js"></script>
</body>
</html>
