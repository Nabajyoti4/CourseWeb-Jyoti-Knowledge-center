@extends('layouts.admin')
@section('title')
Student Form Two Details
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


    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Student Details</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Course</th>
                        <th>Date</th>
                        <th>Show Details</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($students as $student)
                        <tr>
                            <td>{{$student->name}}</td>
                            <td>{{$student->course}}</td>
                            <td>{{$student->created_at->diffForHumans()}}</td>
                            <td><a href="{{route('admin.formtwo.show', $student->id)}}" class="genric-btn success circle">Show</a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9">No data found</td>
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
