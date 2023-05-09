  <!-- Vendor JS Files -->
  <script src="{{ url('/dashboard/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ url('/dashboard/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('/dashboard/assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ url('/dashboard/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ url('/dashboard/assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ url('/dashboard/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ url('/dashboard/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ url('/dashboard/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('/dashboard/assets/js/main.js') }}"></script>

  <!-- DataTables -->
  <script src="{{ url('https://code.jquery.com/jquery-3.5.1.js') }}"></script>
  <script src="{{ url('https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ url('https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js') }}"></script>


  {{-- Template bootstap picker --}}

  <script src="{{ url('https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js') }}"></script>
  <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js') }}">
  </script>

  <script>
    $(document).ready(function() {
      $('#table').DataTable({
        scrollX: true,
      });
    });
  </script>
