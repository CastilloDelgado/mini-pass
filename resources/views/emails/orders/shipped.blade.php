<x-mail::message>
  Resumen de tu compra para el evento:
  <h3 class="evento-titulo">{{ $title }}</h3>

  Aquí puedes ver el desglose de tu compra en minipass.online

  <table>
    <thead class="table-header">
      <tr>
        <th>Tipo de boleto</th>
        <th>Beneficios</th>
        <th>Precio de venta</th>
        <th>Cargo por servicio</th>
        <th>Cantidad</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody class="table-body">
      @foreach($saleSummary as $item)
      <tr class={{ $loop->index % 2 !== 0 ? "light-row" : ""}}>
        <td>{{ $item["title"] }}</td>
        <td>{{ $item["description"] }}</td>
        <td>${{ number_format((float)$item["price"], 2, '.', '') }} MX</td>
        <td>${{ number_format((float)$item["charge"], 2, '.', '') }} MX</td>
        <td>{{ $item["quantity"] }}</td>
        <td>${{ number_format((float)$item["total"], 2, '.', '') }} MX</td>
      </tr>
      @endforeach
      <tr>
        <td colspan="5" class="total-cell">Total</td>
        <td class="total-qty-cell">${{ number_format((float)$total, 2, '.', '') }} MX</td>
      </tr>
    </tbody>

  </table>

  <x-mail::button :url="''">
    Ver Boletos
  </x-mail::button>

  Gracias por su preferencia<br>
  Minipass
</x-mail::message>