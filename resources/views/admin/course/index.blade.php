@extends('layouts.admin')
@section('title')
    Courses
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

    <a class="genric-btn success circle" href="{{route('admin.courses.create')}}"><i class="fas fa-user-edit"></i>
        Create New Course
    </a>

    <hr>
    <!-- DataTales Example -->
    <div class="card shadow mb-4" id="usersTable">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Courses</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Course title</th>
                        <th>Cover</th>
                        <th>Form</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody id="data">
                    @forelse($courses as $course)
                        <tr>
                            <td>{{$course->title}}</td>
                            <td><img style="height: 200px; width: 200px; background-size: cover;" alt="" src="{{asset('storage/'.$course->image)}}"></td>
                            <td><a href="{{asset('storage/'.$course->form)}}" target="_blank">Pdf Form</a></td>
                            <td><a href="{{route('admin.courses.edit', $course->id)}}" class="genric-btn success circle">Edit</a></td>
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
