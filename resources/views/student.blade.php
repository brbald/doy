@extends('home')

@section('title', 'Student Records')

@section('content')

<br>
<h3>Student ID: {{ $student->student_ID}}</h3>
<h2>Student Name: {{ $student->last_name }}, {{ $student->first_name }}</h2>

@endsection