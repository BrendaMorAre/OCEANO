
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

<div class="container">
    <table id="clientes-table" class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Nombre Comercial</th>
            <th>Telefono</th>
            <th>RFC</th>
        </tr>
        </thead>
        <tbody>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{  $cliente->id }}</td>
                <td>{{ $cliente->nombre_comercial }}</td>
                <td>{{ $cliente->telefono1 }}</td>
                <td>{{ $cliente->rfc }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


    <script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
    <script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>
    <script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
    <script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>

<script type="text/javascript">
    $(document).ready( function () {
        $('#clientes-table').DataTable();
    } );
</script>