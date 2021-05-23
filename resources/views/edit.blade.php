@extends('layout')
@section('content')
    <h2>Edit Student</h2>
    <form class="form-horizontal" action=" {{ route('update', $student->id) }} " method="POST">
        {{ csrf_field() }}
        <div class="form-group row mt-2">
            <label for="name" class="control-label col-sm-2">Name</label>
            <div class="col-sm-10">
                <input type="text" value="{{ $student->name }}" class="form-control" name="name" id="name">
            </div>
        </div>
        <div class="form-group row mt-2">
            <label for="registration_no" class="control-label col-sm-2">Registration</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ $student->registration_no }}" name="registration_no"
                    id="registration_no">
            </div>
        </div>
        <div class="form-group row mt-2">
            <label for="department_name" class="control-label col-sm-2">Department</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{ $student->department_name }}" name="department_name"
                    id="department_name">
            </div>
        </div>
        <div class="form-group row mt-2">
            <label for="info" class="control-label col-sm-2">Info</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="info" id="info" rows="5"> {{ $student->info }} </textarea>
            </div>
        </div>
        <div class="form-group row justify-content-end mt-2">
            <div class="col-sm-2">
                <button type="submit" class="btn btn-success float-right">Register Student</button>
            </div>
        </div>
    </form>
@endsection
