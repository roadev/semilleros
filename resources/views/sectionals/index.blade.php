<!doctype html>

<html lang="{{ config('app.locale') }}">
@include('layouts.head')

<body>

  @include('layouts.nav')

  <table class="highlight">

    <tr>
      <th>ID</th>
      <th>Nombre</th>
    </tr>


      @forelse($sectionals as $sectional)
      <tr>
        <td>{{ $sectional->id }}</td>
        <td>{{ $sectional->name }}</td>
      </tr>
      @empty
      <p>No hay seccionales en el sistema.</p>
      @endforelse

  </table>

</body>

</html>
