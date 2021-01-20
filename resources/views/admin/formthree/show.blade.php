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
                                            <div class="col-md-12">
                                                <label for="name">Name: </label>
                                                <input type="text" class="form-control mb" placeholder="Your firstname"
                                                       name="name" value="{{$student->name}}">

                                            </div>
                                        </div>


                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <label for="dob">Date of birth</label>
                                                <input type="date" class="form-control" name="dob"
                                                       value="{{$student->dob}}" disabled>

                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label for="gender">Gender: {{$student->gender}}</label>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <label for="nationality">Nationality: </label>
                                                <input type="text" class="form-control mb" placeholder="Your Nationality"
                                                       name="nationality" value="{{ $student->nationality }}">

                                            </div>
                                            <div class="col-md-12">
                                                <label for="spoken_language">Language (s) Spoken at home: </label>
                                                <input type="text" class="form-control mb" placeholder="Your Language"
                                                       name="spoken_language" value="{{$student->spoken_language}}">
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <label for="address">Residental Address: </label>
                                                <textarea type="text" class="form-control mb @error('address') is-invalid @enderror" cols="30" rows="5"
                                                          placeholder="Your address" name="address" >{{ old('address') }}</textarea>
                                                @error('address')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <label for="school">Name of School: </label>
                                                <input type="text" class="form-control mb @error('school') is-invalid @enderror" placeholder="Your school name"
                                                       name="school" value="{{ old('school') }}">
                                                @error('school')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <label for="class">Class: </label>
                                                <input type="text" class="form-control mb @error('class') is-invalid @enderror" placeholder="Your class"
                                                       name="class" value="{{ old('class') }}">
                                                @error('class')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <label for="father_name">Father's Name: </label>
                                                <input type="text" class="form-control mb @error('father_name') is-invalid @enderror" placeholder="Your Father's name"
                                                       name="father_name" value="{{ old('father_name') }}">
                                                @error('father_name')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <label for="father_occupation">Occupation: </label>
                                                <input type="text" class="form-control mb @error('father_occupation') is-invalid @enderror" placeholder="Your Father's occupation"
                                                       name="father_occupation" value="{{ old('father_occupation') }}">
                                                @error('father_occupation')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <label for="father_contact_no">Contact No: </label>
                                                <input type="text" class="form-control mb @error('father_contact_no') is-invalid @enderror" placeholder="Your Father's Contact"
                                                       name="father_contact_no" value="{{ old('father_contact_no') }}">
                                                @error('father_contact_no')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <label for="father_whatsapp_no">Whatsapp No: </label>
                                                <input type="text" class="form-control mb @error('father_whatsapp_no') is-invalid @enderror" placeholder="Your Father's whatsapp contact"
                                                       name="father_whatsapp_no" value="{{ old('father_whatsapp_no') }}">
                                                @error('father_whatsapp_no')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <label for="father_email">Email: </label>
                                                <input type="email" class="form-control mb @error('father_email') is-invalid @enderror"
                                                       placeholder="Your email" name="father_email" value="{{ old('father_email') }}">
                                                @error('father_email')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <label for="mother_name">Mother's Name: </label>
                                                <input type="text" class="form-control mb @error('mother_name') is-invalid @enderror" placeholder="Your Mother's  name"
                                                       name="mother_name" value="{{ old('mother_name') }}">
                                                @error('mother_name')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <label for="mother_occupation">Occupation: </label>
                                                <input type="text" class="form-control mb @error('mother_occupation') is-invalid @enderror" placeholder="Your Mother's  occupation"
                                                       name="mother_occupation" value="{{ old('mother_occupation') }}">
                                                @error('mother_occupation')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <label for="mother_contact_no">Contact No: </label>
                                                <input type="text" class="form-control mb @error('mother_contact_no') is-invalid @enderror" placeholder="Your Mother's Contact"
                                                       name="mother_contact_no" value="{{ old('mother_contact_no') }}">
                                                @error('mother_contact_no')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <label for="mother_whatsapp_no">Whatsapp No: </label>
                                                <input type="text" class="form-control mb @error('mother_whatsapp_no') is-invalid @enderror" placeholder="Your Mother's whatsapp contact"
                                                       name="mother_whatsapp_no" value="{{ old('mother_whatsapp_no') }}">
                                                @error('mother_whatsapp_no')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="borderdiv">
                                            <label class="header font-weight-bold bg-light">Subjects</label>

                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label for="email">Computer</label>
                                                    <input type="checkbox" class="mr-2" id="playground" name="subjects[]"
                                                           value="Computer">
                                                    <label for="email">Maths</label>
                                                    <input type="checkbox" class="mr-2" id="nursery" name="subjects[]" value="Maths">
                                                    <label for="email">Science</label>
                                                    <input type="checkbox" class="mr-2" id="nursery" name="subjects[]"
                                                           value="Science">
                                                    <label for="email">Hindi</label>
                                                    <input type="checkbox" class="mr-2" id="nursery" name="subjects[]" value="Hindi">
                                                    <label for="email">Reading</label>
                                                    <input type="checkbox" class="mr-2" id="nursery" name="subjects[]"
                                                           value="Reading">
                                                    <label for="email">English</label>
                                                    <input type="checkbox" class="mr-2" id="nursery" name="subjects[]"
                                                           value="English">
                                                    <label for="email">Assamese</label>
                                                    <input type="checkbox" class="mr-2" id="nursery" name="subjects[]"
                                                           value="Assamese">
                                                    <label for="email">Social Science</label>
                                                    <input type="checkbox" class="mr-2" id="nursery" name="subjects[]"
                                                           value="Social Science">
                                                    <label for="email">Fine Arts</label>
                                                    <input type="checkbox" class="mr-2" id="nursery" name="subjects[]"
                                                           value="Fine Arts">
                                                    <label for="email">Spoken English</label>
                                                    <input type="checkbox" class="mr-2" id="nursery" name="subjects[]"
                                                           value="Spoken English">
                                                    <label for="email">Handwriting (English/Assamese/Hindi)</label>
                                                    <input type="checkbox" id="nursery" name="subjects[]"
                                                           value="Handwriting (English/Assamese/Hindi)">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <label for="image">Passport Size photo: </label>
                                                <input type="file" class="form-control mb  @error('image') is-invalid @enderror"
                                                       name="image">
                                                @error('image')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <h3 class="text-center">DECLARATION</h3>
                                                <p>We hereby declare that above statements are true to the best of our knowledge and
                                                    will abide by the rules and regulations of Jyoti Knowledge Centre</p>
                                            </div>
                                        </div>


                                        <div class="form-group text-center">
                                            <input type="submit" value="Send Message" class="btn btn-primary">
                                        </div>
                                    </form>
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
