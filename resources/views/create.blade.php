@extends('layouts.main')
@push('head')
<title>Create Todo</title>
@endpush

@section('main-section')

<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h2">Create/Add Todo</div>
        <a href="{{route("todo.home")}}" class="btn btn-primary btn-lg">Back</a>
    </div>
    <!-- {{print_r($errors->all())}} //print required fields -->
    <div class="card">
        <div class="card-body">
            <form action="{{route("todo.store")}}" method="post">
                @csrf
                <label for="" class="form-label mt-4 ">Name</label>
                <input type="text" name="name" class="form-control">
                <div class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </div>
                <label for="" class="form-label mt-4">Work</label>
                <input type="text" name="work" class="form-control">
                <div class="text-danger">
                    @error('work')
                    {{$message}}
                    @enderror
                </div>
                <label for="" class="form-label mt-4">Due Date</label>
                <input type="date" name="dueDate" class="form-control">
                <div class="text-danger">
                    @error('dueDate')
                    {{$message}}
                    @enderror
                </div>
                <button class="btn btn-primary btn-lg mt-4">Add Todo</button>
        </div>
    </div>
   
</div>

@endsection
