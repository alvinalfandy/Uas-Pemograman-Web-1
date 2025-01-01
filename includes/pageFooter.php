<script src="assets/jquery-3.7.1.js"></script>
<script src="assets/datatables/dataTables.js"></script>
<script src="assets/datatables/dataTables.bootstrap5.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script>
  // new DataTable('#example');
  new DataTable('#example', {
    columns: [{
        data: 'No.',
        defaultContent: '<i>Not Set</i>'
      },
      {
        data: 'Nama Makanan',
        defaultContent: '<i>Not Set</i>'
      },
      {
        data: 'Daerah Makanan',
        defaultContent: '<i>Not Set</i>'
      },
      {
        data: 'Keterangan',
        defaultContent: '<i>Not Set</i>'
      }
    ]
  });
</script>
</body>

</html>