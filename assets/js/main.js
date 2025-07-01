document.addEventListener("DOMContentLoaded", () => {
  fetch("data/fetch_refunds.php")
    .then(res => res.text())
    .then(html => {
      document.getElementById("refundTable").innerHTML = html;
    });
});
