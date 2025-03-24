<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Teachers records</title>
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Add DataTables and Buttons CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">

</head>
<body>
    <div class="container">
        <h2>Teachers Records</h2>
        <table id="users-table" class="display">
            <thead>
                <tr>
                    <th>
                        <div class="form-group">
                            <input type="email" id="id_filter" class="form-control" placeholder="Search Id">
                        </div>
                    </th>
                    <th>
                        <div class="form-group">
                            <input type="email" id="name_filter" class="form-control"  placeholder="Search Name">
                        </div>
                    </th>
                    <th>
                        <div class="form-group">
                            <input type="email" id="email_filter" class="form-control"  placeholder="Search Email">
                        </div>
                    </th>
                    <th>
                        <div class="form-group">
                            <input type="email" id="status_filter" class="form-control"  placeholder="Search Status">
                        </div>
                    </th>
                    <th>Action</th>
                    <!-- <th>Created At</th> -->
                </tr>
            </thead>
        </table>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("admin.teachersdata") }}',
                    data: function (d) {
                        d.name = $('#name_filter').val();
                        d.email = $('#email_filter').val();
                        d.status = $('#status_filter').val();
                        d.id = $('#id_filter').val();
                    }
                },
                dom: 'Bfrtip', 
                buttons: [
                    {
                        extend: 'print',
                        text: 'Print Table',
                        exportOptions: {
                            columns: [0, 1, 2, 3] // Adjust columns to print
                        }
                    },
                    {
                        extend: 'excelHtml5',
                        text: 'Export to Excel',
                        exportOptions: {
                            columns: [0, 1, 2,3] 
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        text: 'Export to PDF',
                        exportOptions: {
                            columns: [0, 1, 2,3] 
                        }
                    },
                    {
                        extend: 'csvHtml5',
                        text: 'Export to CSV',
                        exportOptions: {
                            columns: [0, 1, 2,3]
                        }
                    }
                ],
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'status', name: 'status' },
                    { data: 'action', name: 'action', searchable: 'false', orderable: "false",},
                ],
            });

            $('#searchButton').on('click', function () {
            $('#users-table').DataTable().ajax.reload();
});
        });
    </script>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables and Buttons -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>

    <!-- Required for Export (Excel & PDF) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

</body>
</html>
