@extends('layouts.app')

@section('instructorContent')

    <div class="container mt-5 justify-content-center">

        <h2>Pending Courses</h2>

        @foreach ($courses as $course )

            <div class="card">
                <div class="card">
                    <div class="row">
                        <div class="col-md-3">

                            @if (!empty($course->imagePath))
                                <img src="{{ config('app.storage') }}/courses/{{ $course->status }}/{{ $course->storageName }}/{{ $course->imagePath }}" width="250" height="150" alt="no image found">
                            @else
                                <img src="/storage/inc/demo-1.jpg" width="250" height="150" alt="">
                            @endif

                        </div>
                        <div class="col-md-6">
                            <h2><u>{{ $course->title }}</u></h2>
                            <br>
                            <p class="text-success">status: {{ $course->status }}</p>
                            <small class="text-secondary">
                                {{ count($course->lectures) }}
                                @if (count($course->lectures) == 1)
                                    Lecture
                                @else
                                    Lectures
                                @endif
                            </small><br>
                            <small class="text-secondary">Course length: {{ $course->course_duration }}</small>
                        </div>
                        <div class="col-md-3">
                            Preview:
                            <a target="_blank" rel="noopener noreferrer" href="/instructor/preview/{{ $course->id }}/salespage" class="btn btn-success">Sales Page</a>
                            <a target="_blank" rel="noopener noreferrer" href="/instructor/preview/{{ $course->id }}/coursepage" class="btn btn-success">Course Page</a>
                            <br>
                            <br>
                            Price: {{ $course->price }}
                            <button type="button" class="btn btn-primary float-right" name="button" data-toggle="modal" data-target="#approveCourseModal{{ $course->id }}">APPROVE</button>
                            {{-- modal for approve course --}}
                            @include('admin.modals.approveCourseModal')
                        </div>
                    </div>
                </div>
            </div>

        @endforeach






    </div>

@endsection
