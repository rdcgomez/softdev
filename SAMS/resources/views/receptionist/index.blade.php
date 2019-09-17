@extends('layouts.dashboard')

@section('sidebar')
  <!-- Sidebar -->
  <div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading"><h1>Menu</h1></div>
    <div class="list-group list-group-flush">
      <a href="{{ route('receptionist.index') }}" class="list-group-item list-group-item-action bg-light">Teachers Attendance</a>
    </div>
      <div class="search-container">
        <form>
          <input type="text" placeholder="Search a teacher" name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
  </div>
  <!-- /#sidebar-wrapper -->
@endsection

@section('content')

  <div>Welcome {{Auth::user()->name}} to the Dashboard!</div>

@endsection