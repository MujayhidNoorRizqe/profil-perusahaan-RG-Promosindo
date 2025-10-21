@extends('layouts.main')

@section('title', 'CV. Restu Guru Promosindo')

@section('content')
<div id="wrapper">
    @include('frontend.sections.header')
    @include('frontend.sections.hero')
    @include('frontend.sections.about')
    @include('frontend.sections.services')
    @include('frontend.sections.portfolio')
</div>
@endsection
