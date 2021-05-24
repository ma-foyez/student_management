@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Register Student List') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{-- {{ __('You are logged in!') }} --}}
                        <div class="table-responsive">
                            <table class="table table-hover border mt-3">
                                <tr>
                                    <th>SI</th>
                                    <th>Name</th>
                                    <th>Registration</th>
                                    <th>Department</th>
                                    <th>Info</th>
                                    <th>Action</th>
                                </tr>
                                @if (count($students) > 0)
                                    @foreach ($students as $student)
                                        <tr>
                                            <td> {{ $student->id }} </td>
                                            <td> {{ $student->name }} </td>
                                            <td> {{ $student->registration_no }} </td>
                                            <td> {{ $student->department_name }} </td>
                                            <td> {{ $student->info }} </td>
                                            <td class="d-flex">
                                                <a href="{{ route('edit', $student->id) }}"
                                                    class="btn btn-success">Edit</a>
                                                {{-- <a href="/" class="btn btn-danger">Delete</a> --}}
                                                <form class="form-inline" action=" {{ route('delete', $student->id) }} "
                                                    method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="submit" value="Delete" class="btn btn-danger">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
