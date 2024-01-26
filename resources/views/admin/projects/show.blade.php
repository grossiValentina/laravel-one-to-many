@extends('layouts.admin')

@section('content')
<div class="container">
    <h6 class="text-end pt-3">Progetto n. {{ $project->id }}</h6>
    <p class="text-end">{{ $project->slug }}</p>
</div>
<div>
    <h2 class="text-center p-3">{{ $project->titolo }}</h2>
    <p class="text-center pt-3">{{ $project->descrizione }}</p>
</div>

@endsection