<footer class="footer mt-5 py-3 bg-dark ">
  <div class="container text-center">
    <span class="text-white"><p>&copy; 2023 Aldi Ramdani | sponsored by : Bootstrap</p></span>
    <span class="text-white"><p>RPL | Dosen . Rony Regawa Budiman S.Kom, M.Kom</p></span>
  </div>
</footer>

<!-- Bagian dari template halaman Battle -->
<!-- Menambahkan script untuk menonaktifkan tombol refresh -->
<script>
    // Menonaktifkan tombol refresh
    window.onload = function() {
        disableRefreshButton();
    }

    function disableRefreshButton() {
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
            window.addEventListener('popstate', function () {
                window.history.replaceState(null, null, window.location.href);
            });
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>