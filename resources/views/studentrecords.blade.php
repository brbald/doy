@extends('layouts.app')

@section('title', 'Homepage')

@section('content')

<!-- Authentication Links -->
    @guest

    @else

        <div class="container" visible="false";>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">

                        <div class="card-header"><b>{{ __('Enter student details:') }}</b></div>
                            <div class="card-body">
                                <form action="/create" method="post">

                                    <div class="form-group row">
                                        <label for="student_ID" class="col-md-4 col-form-label text-md-right">{{ __('Student ID') }}</label>

                                        <div class="col-md-4">
                                            <input id="student_ID" type="text" class="form-control @error('student_ID') is-invalid @enderror" name="student_ID" value="{{ old('name') }}" required autocomplete="student_ID" autofocus>

                                            @error('student_ID')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!--<div>
                                        <label>Student ID: <input type="text" name="student_ID" placeholder="Student ID">
                                        </label> 
                                    </div>
                                    -->
                                    <div class="form-group row">
                                        <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                                            <div class="col-md-4">
                                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                                    @error('last_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                    </div>                                    

                                    <div class="form-group row">
                                        <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                                            <div class="col-md-4">
                                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                                    @error('first_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                    </div>    

                                    <!--
                                    <div>
                                        <label>Last Name: <input type="text" name="last_name" placeholder="Last Name"> <label>First Name<input type="text" name="first_name" placeholder="First Name"></label>
                                        </label>
                                    </div> -->
                                    
                                    <!-- <input type="date" name="date_of_birth" placeholder="Date of Birth"> -->

                                    <div class="form-group row">
                                        <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                                            <div class="col-md-4">
                                                <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" required autocomplete="date_of_birth" autofocus>

                                                    @error('date_of_birth')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                    </div>   

                                    <!-- <input type="text" name="gender" placeholder="Gender"> -->

                                    <div class="form-group row">
                                        <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                            <div class="col-md-4">
                                                <input id="gender" type="text" class="form-control @error('date_of_birth') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender" autofocus>

                                                    @error('gender')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                    </div>  

                                   
                                    {{ csrf_field() }}

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Submit') }}
                                            </button>
                                        </div>
                                    </div> 
                                    <!-- <button type="submit">Submit</button>-->
                                </form>
                            </div>
                    </div>     
                </div>
            </div>
        </div>

        <br>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">

                        <div class="card-header"><b>{{ __('ALL STUDENTS') }}</b></div>
                            <div class="card-body">

                                <table align="center" border="3px solid black" line-height="40px" padding="15px" >
                                    <t class="form-group row">
                                        <th><b>Student ID</th>
                                        <th>Name</th>
                                        <th>Date Of Birth</th>
                                        <th>Gender</th>
                                    </t>

                             

                                    @foreach($students as $student)
                                        <tr >
                                            <th><a href="student/{{ $student->id }}">{{ $student->student_ID }}</a></th>
                                            <th>{{ $student->last_name }}, {{ $student->first_name }}</th>
                                            <th>{{ $student->date_of_birth }}</th>
                                            <th>{{ $student->gender }}</th>
                                        </tr>
                                    @endforeach
                                
                                </table>

                                <!--
                                <ul>
                                    @foreach($students as $student)
                                        <li>
                                            <a href="student/{{ $student->id }}">{{ $student->student_ID }}</a> -  {{ $student->last_name }}, {{ $student->first_name }} - {{ $student->date_of_birth }} - {{ $student->gender }}</li>
                
                                    @endforeach
                                </ul> -->

                            </div>
                </div>     
                </div>
            </div>
        </div>

        <!--
        <h2>Students</h2>

        <ul>
            @foreach($students as $student)
                <li>
                    <a href="student/{{ $student->id }}">{{ $student->student_ID }}</a> -  {{ $student->last_name }}, {{ $student->first_name }} - {{ $student->date_of_birth }} - {{ $student->gender }}</li>
                
            @endforeach
        </ul>
        -->

    @endguest


 

@endsection