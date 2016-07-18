<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Usuarios</h1>
            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                    </tr>
                </thead>
            </table>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

        <script>
            $(document).ready(function(){
                $('#myTable').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "ajax": "/api/users",
                    'columns': [
                        {data: 'id'},
                        {data: 'name'},
                        {data: 'email'}
                    ]
                });
            });
        </script>
    </body>
</html>
