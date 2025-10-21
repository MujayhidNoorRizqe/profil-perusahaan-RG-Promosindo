@extends('layouts.main')

@section('title', 'CV. Restu Guru Promosindo')

@section('content')
<div id="wrapper">
    @include('frontend.sections.header')
    @include('frontend.sections.hero')
    @include('frontend.sections.about')
    @include('frontend.sections.services')
    @include('frontend.sections.portfolio')
    @include('frontend.sections.contact')
    @include('frontend.sections.footer')
</div>
@endsection
