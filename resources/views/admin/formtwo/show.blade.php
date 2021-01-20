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
                        <div class="row form-group">
                                <div class="col-md-4">
                                    <label for="email" class="font-weight-bold">Admission sought in: </label>
                                </div>
                                <div class="col-md-8">
                                    <p>{{$student->admission_sought}}</p>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label class="font-weight-bold" for="email">Batch Required : </label>
                                </div>
                                <div class="col-md-8">
                                    <p>{{$student->batch}}</p>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label for="dob" class="font-weight-bold">Date of birth</label>
                                    <p>{{$student->dob}}</p>
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="font-weight-bold">Photo</label>
                                    <img src="{{asset('storage/'.$student->image)}}">
                                </div>

                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="name" class="font-weight-bold">Name of Child: </label>
                                    <p>{{$student->name}}</p>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label for="father_name" class="font-weight-bold">Father's Name: </label>
                                    <p>{{$student->father_name}}</p>
                                </div>
                                <div class="col-md-6">
                                    <label for="mother_name" class="font-weight-bold">Mother's Name: </label>
                                    <p>{{$student->mother_name}}</p>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="address" class="font-weight-bold">Address: </label>
                                    <p>{{$student->address}}</p>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label for="email" class="font-weight-bold">Email: </label>
                                    <p>{{$student->email}}</p>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="font-weight-bold">Phone No: </label>
                                    <p>{{$student->phone}}</p>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label for="mobile" class="font-weight-bold">Mobile No: </label>
                                </div>
                                <div class="col-md-4">
                                    <label for="father_number" class="font-weight-bold">Father Number: </label>
                                    <p>{{$student->father_phone}}</p>
                                </div>
                                <div class="col-md-4">
                                    <label for="mother_number" class="font-weight-bold">Mother Number: </label>
                                    <p>{{$student->mother_phone}}</p>
                                </div>
                            </div>

                            <div class="row form-group mb-4">
                                <div class="col-md-4" >
                                    <label for="schooling" class="font-weight-bold">Previous Schooling: </label>
                                </div>

                                <div class="col-md-8">
                                    <p>{{$student->schooling}}</p>
                                    <label for="specify" class="font-weight-bold">If yes specify: </label>
                                    <p>{{$student->specify}}</p>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4" >
                                    <label for="toilet" class="font-weight-bold">Is your children toilet-trained?: </label>
                                </div>

                                <div class="col-md-8">
                                    <p>{{$student->toilet}}</p>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="siblings" class="font-weight-bold">How many siblings does the children have? Give age
                                        details: </label>
                                    <p>{{$student->siblings}}</p>
                                </div>
                            </div>
                            <div class="borderdiv">
                                <label class="header font-weight-bold bg-light" >Fathers details</label>

                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label for="father_profession" class="font-weight-bold">Profession: </label>
                                        <p>{{$student->father_profession}}</p>
                                        <label for="father_company" class="font-weight-bold">Company/Designation: </label>
                                        <p>{{$student->father_company}}</p>
                                        <label for="father_qualification" class="font-weight-bold">Qualification: </label>
                                        <p>{{$student->father_qualification}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="borderdiv">
                                <label class="header font-weight-bold bg-light">Mother details</label>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label for="mother_profession" class="font-weight-bold">Profession: </label>
                                        <p>{{$student->mother_profession}}</p>
                                        <label for="mother_company" class="font-weight-bold">Company/Designation: </label>
                                        <p>{{$student->mother_company}}</p>
                                        <label for="mother_qualification" class="font-weight-bold">Qualification: </label>
                                        <p>{{$student->mother_qualification}}</p>
                                    </div>
                                </div>
                            </div>

                            <!--medical history-->
                            <div class="borderdiv">
                                <label class="header font-weight-bold bg-light">Medical & Health Record of the Child</label>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <label for="diseases" class="font-weight-bold">Sepecific disease suffered in the past , if any: </label>
                                        <p>{{$student->medical->diseases}}</p>
                                        <label for="operation" class="font-weight-bold">Operations undergone in the past , if any: </label>
                                        <p>{{$student->medical->operation}}</p>
                                        <label for="allergy" class="font-weight-bold">Allergies, if Any: </label>
                                        <p>{{$student->medical->allergy}}</p>
                                        <label for="medication" class="font-weight-bold">Any other diseases for which child on regular medication: </label>
                                        <p>{{$student->medical->medication}}</p>
                                        <label for="phobia" class="font-weight-bold">Does your child suffer from any phobias?: </label>
                                        <p>{{$student->medical->phobia}}</p>
                                        <label for="instructions" class="font-weight-bold">Any special instructions: </label>
                                        <p>{{$student->medical->instructions}}</p>
                                        <label for="height" class="font-weight-bold">Height (in cms): </label>
                                        <p>{{$student->medical->height}}</p>
                                        <label for="weight" class="font-weight-bold">Weight (in kgs): </label>
                                        <p>{{$student->medical->weight}}</p>
                                    </div>
                                </div>
                            </div>

                            <!--immunisation history-->
                            <div class="borderdiv">
                                <label class="header font-weight-bold bg-light">Immunisation History</label>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                    <thead>
                                                    <tr>
                                                        <th>VACCINATION</th>
                                                        <th>AGE</th>
                                                        <th>REMARK</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>A) BCG</td>
                                                        <td>(0-2 weeks)</td>
                                                        <td>{{$student->immunation->bcg}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>B) DPT(I,II,III)</td>
                                                        <td>(6-24 weeks)</td>
                                                        <td>{{$student->immunation->dpt}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>C) Oral Polio Vacchine(OPV)</td>
                                                        <td>(6 doses)</td>
                                                        <td>{{$student->immunation->polio}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>D) Measles</td>
                                                        <td>(8-9 months)</td>
                                                        <td>{{$student->immunation->measles}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>E) MMR</td>
                                                        <td>(15-18 months)</td>
                                                        <td>{{$student->immunation->mmr}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>F) DT</td>
                                                        <td>(4-6 years)</td>
                                                        <td>{{$student->immunation->dt}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>G) HBV - Hepatitus(I,II,III)</td>
                                                        <td>(upto 24 weeks)</td>
                                                        <td>{{$student->immunation->hbv}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>H) Hi B(Meningitis-3doses)</td>
                                                        <td>(Under 1 year)</td>
                                                        <td>{{$student->immunation->hib}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>I) Chicken Pox</td>
                                                        <td>(after 1 year of age)</td>
                                                        <td>{{$student->immunation->chicken}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>J) Typhoid</td>
                                                        <td>(after 2 years of age)</td>
                                                        <td>{{$student->immunation->typhoid}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>K) Hepatitis A(2 doses)</td>
                                                        <td>(after 1 year of age)</td>
                                                        <td>{{$student->immunation->hepatitis}}</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="strength" class="font-weight-bold">What are your Child's strengths as you see?: </label>
                                    <p>{{$student->strength}}</p>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="development" class="font-weight-bold">What are his/her key developmental needs as you suggest in next 12 months?: </label>
                                    <p>{{$student->development}}</p>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="activities" class="font-weight-bold" >What are the activities he/she likes?: </label>
                                    <p>{{$student->activities}}</p>
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
