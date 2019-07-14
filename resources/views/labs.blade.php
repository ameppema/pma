@extends('layouts.app')

@section('title')
  Labs
@endsection

@section('content')
  <h1>Página de Labs</h1>

  <button id="load_data" type="button" class="btn btn-primary btn-lg btn-block my-5">Load Data</button>

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col"># ID</th>
        <th scope="col">Titlet</th>
        <th scope="col">Artist</th>
        <th scope="col">Country</th>
        <th scope="col">Price</th>
        <th scope="col">Year</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>Mark</td>
        <td>Otto</td>
      </tr>
    </tbody>
  </table>
@endsection
