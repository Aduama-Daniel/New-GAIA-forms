
@extends('layouts.adminlayout')

@section('title', 'Admin Dashboard')

@section('head')

@endsection

@section('content')

@if($projects->isNotEmpty())
    @foreach($projects as $project)
        <!-- Display each project -->
    @endforeach
@else
    <p>No projects found</p>
@endif

@endsection