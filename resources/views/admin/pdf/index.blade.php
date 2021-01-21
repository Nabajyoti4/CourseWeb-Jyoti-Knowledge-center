@extends('layouts.admin')
@section('title')
    Form pdf files
@endsection
@section('content')

    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{$message}}',
                showConfirmButton: true,
            })
        </script>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pdf </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Form-one</th>
                        <th>Form-two</th>
                        <th>Form-three</th>
                        <th>Form-four</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($pdfs as $pdf)
                        <tr>
                            <td>{{$pdf->form_one}}
                                <form action="">
                                    <input type="file">
                                </form></td>
                            <td>{{$pdf->form_two}}</td>
                            <td>{{$pdf->form_three}}</td>
                            <td>{{$pdf->form_four}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td>
                                <form action="">
                                    <input type="file" name="form-one">
                                </form></td>
                            <td>
                                <form action="">
                                    <input type="file" name="form-one">
                                </form></td>
                            <td>
                                <form action="">
                                    <input type="file" name="form-one">
                                </form></td>
                            <td>
                                <form action="">
                                    <input type="file" name="form-one">
                                </form></td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script type="text/javascript">
        setInterval(function() {
            $("#data").load(location.href+" #data>*","");
        }, 10000);
    </script>
@endsection
