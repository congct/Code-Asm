@extends('layouts.app', ['breadcrumbs' => [
    ['href'=> route('dashboard'), 'text'=> 'Dashboard'],
    ['href'=> route('teachers.index'), 'text'=> 'Teachers', 'active'],
]])

@section('title',  __('Teachers'))

@section('page_heading',   __('Trainers'))

@section('content', )
    @livewire('list-teachers-table')
@endsection