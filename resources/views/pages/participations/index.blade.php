@extends('layouts.app')
@section('breadcrumb')
<li class="breadcrumb-item">
    participations
</li>
@endsection
@section('header')
<h3><i class="fa fa-list"></i> participations </h3>
@endsection
@section('tools')
<a class="btn btn-secondary" href="{{route('participations.create')}}">
    <span class="fa fa-plus"></span>
</a>
@endsection

@section('content')
<div class="row">
    @forelse($records as $record)
    <div class="col-sm-6">
        @include('cards.participation')
    </div>
    @empty
            <p>No data.</p>
    @endforelse</div>
{!! $records->render() !!}
@endSection
