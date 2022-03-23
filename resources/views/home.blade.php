@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                    <a href="{{route('employee')}}"> <button type="button" class="btn btn-success" style="float:right;">Add Employee <i class="bi bi-plus" style="font-size: 1.2rem; color: #ffffff;"></i></button></a>
                </div>
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Department</th>
                            <th>Rank</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Date Of Birth</th>
                            <th>Local Government Area</th>
                            <th>State Of Origin</th>
                            <th>Country</th>
                            <th>Employee Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                        <!-- {{ $employee->title }} -->
                        <tr>
                            <td>{{$employee->id}}</td>
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->email}}</td>
                            <td>{{$employee->department}}</td>
                            <td>{{$employee->rank}}</td>
                            <td>{{$employee->address}}</td>
                            <td>{{$employee->phone}}</td>
                            <td>{{$employee->dob}}</td>
                            <td>{{$employee->lga}}</td>
                            <td>{{$employee->stateOfOrigin}}</td>
                            <td>{{$employee->country}}</td>
                            <td>
                                <?php
                                if ($employee['is_Active'] == '1') {

                                ?>
                                    <code>
                                        <span class="badge rounded-pill bg-success">Active User</span>

                                    </code>
                                <?php
                                } else {
                                ?>

                                <?php
                                    if ($employee['is_Active'] == '0') {
                                    }
                                ?>
                                <span class="badge rounded-pill bg-danger">User not Active </span>
                                <?php
                                }
                                ?>
                            </td>
                            <td>
                                <!-- <a href="{{route('show', $employee->id)}}"><i class="bi bi-pencil-square" style="font-size: 1.2rem; color: cornflowerblue;"></i></a> -->
                                <a href="{{url('edit', $employee->id)}}"><i class="bi bi-pencil-square" style="font-size: 1.2rem; color: cornflowerblue;"></i></a>
                                <a href="{{url('delete', $employee->id)}}"><i class="bi bi-archive" style="font-size: 1.2rem; color:cornflowerblue;"></i></a>
                            </td>
                            <!-- <td>{{$employee->image}}</td> -->
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection