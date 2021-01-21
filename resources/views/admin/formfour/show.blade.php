@extends('layouts.admin')
@section('title')
    Student Form details
@endsection

@section('style')
    <style>
        .borderdiv {
            position: relative;
            padding: 32px;
            border-radius: 10px;
            border: 2px solid #75b3e2;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        .header {
            position: absolute;
            top: -14px;
            left: 1%;
            padding: 0% 2px;
            margin: 0%;
            background: white !important;
        }
    </style>
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
        <div id="colorlib-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-md-offset-1 animate-box">
                        <h3>Admission application form</h3>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="name" class="font-weight-bold">Name of child: </label>
                                    <p>{{$record->name}}</p>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="image" class="font-weight-bold">Passport Size photo: </label>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="age" class="font-weight-bold">Age</label>
                                    <p>{{$record->age}}</p>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label for="gender" class="font-weight-bold">Gender: </label>
                                    <p>{{$record->gender}}</p>
                                </div>
                            </div>


                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="father_name" class="font-weight-bold">Father's Name: </label>
                                    <p>{{$record->father_name}}</p>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="father_contact_no" class="font-weight-bold">Phone No: </label>
                                    <p>{{$record->father_phone}}</p>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="mother_name" class="font-weight-bold">Mother's Name: </label>
                                    <p>{{$record->mother_name}}</p>
                                </div>

                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="mother_contact_no" class="font-weight-bold">Phone No: </label>
                                    <p>{{$record->mother_phone}}</p>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="emergency" class="font-weight-bold">Emergency contact and authorized pickup person: </label>
                                    <p>{{$record->emergency}}</p>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="father_email" class="font-weight-bold">Email: </label>
                                    <p>{{$record->email}}</p>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-6 col-sm-6">
                                    <label for="from" class="font-weight-bold">Pickup timing from: </label>
                                    <p>{{$record->from}}</p>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <label for="to" class="font-weight-bold">To: </label>
                                    <p>{{$record->to}}</p>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="facility" class="font-weight-bold">Daycare facility started from: </label>
                                    <p>{{$record->facility}}</p>
                                </div>
                            </div>

                    </div>
                </div>
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
