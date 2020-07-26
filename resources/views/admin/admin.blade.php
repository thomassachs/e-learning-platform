@extends('layouts.app')

@section('instructorContent')

    <div class="ml-5">
        @if (count($courses) > 0)
            <a href="/admin/pendingcourses" class="btn btn-primary">Show pending Courses ({{ count($courses) }})</a>
        @else
            <a href="" class="btn btn-primary disabled">Show pending Courses (0)</a>
        @endif

    </div>

@endsection
