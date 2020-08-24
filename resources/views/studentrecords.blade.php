@extends('layouts.app')

@section('title', 'Homepage')

@section('content')

<!-- Authentication Links -->
    @guest
        <!--<li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li> -->
        @if (Route::has('register'))
            <!--<li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li> -->
                                
        @endif
    @else

        <div class="container" visible="false";>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">

                        <div class="card-header"><b>{{ __('Enter student details:') }}</b></div>
                            <div class="card-body">
                                <form action="/create" method="post">
                                    <input type="text" name="student_ID" placeholder="Student ID">
                                    <input type="text" name="last_name" placeholder="Last Name">
                                    <input type="text" name="first_name" placeholder="First Name">
                                    <input type="date" name="date_of_birth" placeholder="Date of Birth">
                                    <input type="text" name="gender" placeholder="Gender">

                                    {{ csrf_field() }}
                                    <button type="submit">Submit</button>
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
                                <ul>
                                    @foreach($students as $student)
                                        <li>
                                            <a href="student/{{ $student->id }}">{{ $student->student_ID }}</a> -  {{ $student->last_name }}, {{ $student->first_name }} - {{ $student->date_of_birth }} - {{ $student->gender }}</li>
                
                                    @endforeach
                                </ul>
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