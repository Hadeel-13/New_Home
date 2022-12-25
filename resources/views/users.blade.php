<!doctype html>
<html lang="en" dir="rtl">

<head>
  <title>Laravel 8 - Yajra Datatable Implementation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <style>
    .dataTables_wrapper .dataTables_length {
      float: right;
    }
  </style>
</head>

<body>

  <div class="container mt-5">
    <h3 class="text-center font-weight-bold">Yajra Datatable Implementation in Laravel 8 </h3>
    <table class="table mt-4" id="usersTable">
      <thead>
        <th> # </th>
        <th> الاسم </th>
        <th> الايميل </th>
        <th> الفعل </th>

      </thead>
      <tbody>
      </tbody>
    </table>
  </div>

  <script src="jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      var table = $('#usersTable').DataTable({
        // processing: true,
        serverSide: true,
        ajax: "{{ url('users') }}",
        columns: [{
            data: 'DT_RowIndex',
            name: 'DT_RowIndex'
          },
          {
            data: 'name',
            name: 'name'
          },
          {
            data: 'email',
            name: 'email'
          },
          {
            data: 'action',
            name: 'action',
            orderable: false,
            searchable: false
          },

        ]
      });
    });
  </script>
  <script>
    var myTable = $('#myTable').DataTable();

    $('#myTable').on('click', 'tbody tr', function() {
      myTable.row(this).delete({
        buttons: [{
            label: 'Cancel',
            fn: function() {
              this.close();
            }
          },
          'Delete'
        ]
      });
    });
  </script>
  
</body>

</html>