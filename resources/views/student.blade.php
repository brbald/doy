@extends('home')

@section('title', 'Student Records')

@section('content')
<!-- Authentication Links -->
@guest
    
@else

<div class="container" visible="false";>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">

                        <div class="card-header"><b>{{ __('STUDENT DETAILS:') }}</b></div>
                            <div class="card-body">

                                <div class="form-group row">
                                            <label for="student_ID" class="col-md-4 col-form-label text-md-right">{{ __('Student ID') }}</label>

                                            <div class="col-md-4">
                                                <input id="student_ID" type="text" value="{{ $student->student_ID}}" class="form-control @error('student_ID') is-invalid @enderror" name="student_ID" value="{{ old('name') }}" required autocomplete="student_ID" autofocus>

                                                @error('student_ID')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                </div>

                                <div class="form-group row">
                                        <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                                            <div class="col-md-4">
                                                <input id="last_name" type="text" value="{{ $student->last_name }}" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

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
                                                <input id="first_name" type="text" value="{{ $student->first_name }}" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                                    @error('first_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                </div>
                                
                                <div class="form-group row">
                                        <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                                            <div class="col-md-4">
                                                <input id="date_of_birth" type="date" value="{{ $student->date_of_birth }}" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" required autocomplete="date_of_birth" autofocus>

                                                    @error('date_of_birth')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                </div>
                                
                                <div class="form-group row">
                                        <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                            <div class="col-md-4">
                                                <input id="gender" type="text" value="{{ $student->gender }}" class="form-control @error('date_of_birth') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender" autofocus>

                                                    @error('gender')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                </div>  

                            </div>    
                    </div>            
                </div>
            </div>
</div>

@endguest



@endsection