@extends('layouts.layoutMaster')

@php
  use Illuminate\Support\Facades\Gate;
  $breadcrumbs = [['link' => 'home', 'name' => 'Home'], ['name' => 'Team Settings']];
@endphp

@section('title', 'Team Settings')

@section('content')
  <div class="mb-6">
    @livewire('teams.update-team-name-form', ['team' => $team])
  </div>

  @livewire('teams.team-member-manager', ['team' => $team])


  @if (Gate::check('delete', $team) && !$team->personal_team)

  <div class="mt-6">
    @livewire('teams.delete-team-form', ['team' => $team])
  </div>
  @endif
@endsection
