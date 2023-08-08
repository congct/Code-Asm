@extends('layouts.app', ['breadcrumbs' => [
        ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
        ['href'=> route('students.index'), 'text'=> 'Students'],
        ['href'=> route('students.create'), 'text'=> 'create', 'active'],
]])

@section('title',  __('Create student'))

@section('page_heading',   __('Create Trainee'))

@section('content' )
    @livewire('create-student-form')
@endsection