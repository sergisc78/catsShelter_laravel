@extends('layouts.app')

@section('content')


<header>
    <h1 class="text-center">ADULT CATS</h1>
  </header>
  <table id="example" class="display text-center" style="width:60%">
      <thead>
          <tr>
              <th>ID</th>
              <th>NAME</th>
              <th>AGE</th>
              <th>SEX</th>
              <th>DESCRIPTION</th>
              
          </tr>

          <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
          </tbody>
      </thead>


@endsection