@extends('layouts.app')

@section('instructorContent')

@include('instructor.sidebar')

<div class="col-md-8">

    {{-- this is for the alerts when somebody passes the form incorrectly --}}
    @include('inc.messages')

    @include('instructor.inc.editCourseHead')

    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link" href="/instructor/edit/{{ $course->id }}/general">General</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/instructor/edit/{{ $course->id }}/description">Description</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/instructor/edit/{{ $course->id }}/lectures">Lectures</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/instructor/edit/{{ $course->id }}/pricing">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="">Submit</a>
      </li>
    </ul>

    <div class="row">
        <div class="col-md-6">
            {{-- general tab --}}
            <div class="tab-content row" id="myTabContent">
                here u submit ur course

                <table class="table mt-5 ">
                  <tbody>
                    <tr>
                      <th scope="row">Atleast 1 section</th>
                      @if (count($course->sections) > 0)
                          <td><i class="fas fa-check text-success"></i></td>
                      @else
                          <td><i class="fas fa-times text-danger"></i></td>
                      @endif
                    </tr>

                    <tr>
                      <th scope="row">Atleast 1 lecture</th>
                      @if (count($course->lectures) > 0)
                          <td><i class="fas fa-check text-success"></i></td>
                      @else
                          <td><i class="fas fa-times text-danger"></i></td>
                      @endif
                    </tr>

                    <tr>
                      <th scope="row">No empty Section</th>
                      @php
                          $emptySections = 0;
                      @endphp
                      @foreach ($course->sections as $section)
                          @if (count($section->lectures) === 0)
                              @php
                                  $emptySections++;
                              @endphp
                          @endif
                      @endforeach
                      @if ($emptySections === 0)
                           <td><i class="fas fa-check text-success"></i></td>
                      @else
                           <td><i class="fas fa-times text-danger"></i></td>
                      @endif
                    </tr>

                    <tr>
                      <th scope="row">Atleast 30 minutes course content</th>
                      @if (date('H', strtotime($course->course_duration)) > 0 || date('i', strtotime($course->course_duration)) >= 30)
                          <td><i class="fas fa-check text-success"></i></td>
                      @else
                          <td><i class="fas fa-times text-danger"></i></td>
                      @endif
                    </tr>

                    <tr>
                      <th scope="row">Course Image</th>
                      @if (!empty($course->imagePath))
                          <td><i class="fas fa-check text-success"></i></td>
                      @else
                          <td><i class="fas fa-times text-danger"></i></td>
                      @endif
                    </tr>

                    <tr>
                      <th scope="row">Description</th>
                      @if (!empty($course->description))
                          <td><i class="fas fa-check text-success"></i></td>
                      @else
                          <td><i class="fas fa-times text-danger"></i></td>
                      @endif
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-3">
            <br><br>
            @if (count($course->sections) > 0
                && count($course->lectures) > 0
                && $emptySections === 0
                // && (date('H', strtotime($course->course_duration)) > 0 || date('i', strtotime($course->course_duration)) >= 30)
                && !empty($course->imagePath)
                && !empty($course->description))

                <button type="button" class="btn btn-primary float-right" name="button" data-toggle="modal" data-target="#submitCourseModal">Submit Course</button>
            @else
                <button type="button" class="btn btn-primary float-right"  disabled>Submit Course</button>

            @endif



            {{-- modal for submit Course --}}
            @include('instructor.modals.submitCourseModal')
        </div>
        <div class="col-md-3">

        </div>
    </div>
</div>


    <!-- end row from sidebar -->
    </div>

@endsection('instructorContentcontent')
