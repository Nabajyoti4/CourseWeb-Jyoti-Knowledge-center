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
            <div class="container border bg-white rounded-lg">
                <div class="row">
                    <div class="col-md-12 col-md-offset-1 animate-box">
                        <h3 class="text-center font-weight-bold">Admission application form</h3>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-md-offset-1 animate-box">
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label for="name">Name: </label>
                                                <input type="text" class="form-control mb" placeholder="Your firstname"
                                                       disabled  name="name" value="{{$student->name}}">
                                                <br>
                                                <label for="dob">Date of birth</label>
                                                <input type="date" class="form-control" name="dob"
                                                       value="{{$student->dob}}" disabled>
                                                <br>
                                                <label for="gender">Gender: </label>
                                                <input disabled type="text" class="form-control" value="{{$student->gender}}">

                                            </div>
                                            <div class="col-md-6">
                                                <img src="{{asset('storage/'.$student->image)}}" style="height: 200px; width: 200px; background-size: cover;" alt="">

                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label for="nationality">Nationality: </label>
                                                <input type="text" class="form-control mb" placeholder="Your Nationality"
                                                       disabled   name="nationality" value="{{ $student->nationality }}">

                                            </div>
                                            <div class="col-md-6">
                                                <label for="spoken_language">Language (s) Spoken at home: </label>
                                                <input type="text" class="form-control mb" placeholder="Your Language"
                                                       disabled     name="spoken_language" value="{{$student->spoken_language}}">
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label for="address">Residental Address: </label>
                                                <textarea type="text" class="form-control mb" cols="30" rows="5"
                                                          disabled     placeholder="Your address" name="address" >{{$student->address}}</textarea>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label for="school">Name of School: </label>
                                                <input type="text" class="form-control mb" placeholder="Your school name"
                                                       disabled    name="school" value="{{$student->school }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="class">Class: </label>
                                                <input type="text" class="form-control mb" placeholder="Your class"
                                                       disabled    name="class" value="{{$student->class }}">
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label for="father_name">Father's Name: </label>
                                                <input type="text" class="form-control mb" placeholder="Your Father's name"
                                                       disabled   name="father_name" value="{{$student->father_name}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="father_occupation">Occupation: </label>
                                                <input type="text" class="form-control mb" placeholder="Your Father's occupation"
                                                       disabled   name="father_occupation" value="{{ $student->father_occupation }}">
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label for="father_contact_no">Contact No: </label>
                                                <input type="text" class="form-control mb" placeholder="Your Father's Contact"
                                                       disabled   name="father_contact_no" value="{{ $student->father_contact_no }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="father_whatsapp_no">Whatsapp No: </label>
                                                <input type="text" class="form-control mb" placeholder="Your Father's whatsapp contact"
                                                       disabled   name="father_whatsapp_no" value="{{ $student->father_whatsapp_no }}">
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label for="father_email">Email: </label>
                                                <input type="email" class="form-control mb"
                                                       disabled   placeholder="Your email" name="father_email" value="{{ $student->father_email}}">
                                            </div>
                                        </div>


                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label for="mother_name">Mother's Name: </label>
                                                <input type="text" class="form-control mb" placeholder="Your Mother's  name"
                                                       disabled    name="mother_name" value="{{ $student->mother_name }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="mother_occupation">Occupation: </label>
                                                <input type="text" class="form-control mb" placeholder="Your Mother's  occupation"
                                                       disabled   name="mother_occupation" value="{{ $student->mother_occupation }}">
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label for="mother_contact_no">Contact No: </label>
                                                <input type="text" class="form-control mb" placeholder="Your Mother's Contact"
                                                       disabled     name="mother_contact_no" value="{{ $student->mother_contact_no }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="mother_whatsapp_no">Whatsapp No: </label>
                                                <input type="text" class="form-control mb" placeholder="Your Mother's whatsapp contact"
                                                       disabled   name="mother_whatsapp_no" value="{{ $student->mother_whatsapp_no }}">
                                            </div>
                                        </div>

                                        <div class="borderdiv">
                                            <label class="header font-weight-bold bg-light">Subjects</label>

                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                  {{$student->subjects}}
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <h3 class="text-center">DECLARATION</h3>
                                                <p>We hereby declare that above statements are true to the best of our knowledge and
                                                    will abide by the rules and regulations of Jyoti Knowledge Centre</p>
                                            </div>
                                        </div>

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
