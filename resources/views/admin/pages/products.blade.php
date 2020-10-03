@extends('admin.layouts.default')
@section('abc')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Products</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="http://127.0.0.1:8000/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active">Products</li>
        </ol>
        <div class="table-responsive">
            <table id="productstbl" class='table table-hover'>
                <thead>
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>STATUS</th>
                    <th>CATEGORY</th>
                </thead>

                <tbody>
                    @foreach ($products as $p)
                    <tr>
                        <td>{{$p->id}}</td>
                        <td>{{$p->title}}</td>
                        <td>{{$p->status}}</td>
                        <td>{{$p->category}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>



    </div>
</main>

@endsection

@section('myscript')

<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#productstbl').DataTable();
});
</script>



@endsection
