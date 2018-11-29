@php
 $clientes = DB::table('clientes');
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <link rel="stylesheet" href="/css/pdf.css" media="all" />
</head>
<body>
<header class="clearfix">
    <h1>
        <div id="logo">
            <img src="/images/logo.jpg">
        </div>
    </h1>
    <div id="company" class="clearfix">
        <div><span>COTIZACION NO°</span> 50</div>
        <div><span>EXPIDIO </span> Mariela</div>
        <div><span>TEL </span>(602) 519-0450</div>
        <div><a href="mailto:company@example.com">company@example.com</a></div>
    </div>
    <div id="project">
        <div><span>PROJECT</span> Website development</div>
        <div><span>CLIENT</span> John Doe</div>
        <div><span>ADDRESS</span> 796 Silver Harbour, TX 79273, US</div>
        <div><span>EMAIL</span> <a href="mailto:john@example.com">john@example.com</a></div>
        <div><span>DATE</span> {{ $date }}</div>
    </div>
</header>
<main>
    <table>
        <thead>
        <tr>
            <th class="service">SERVICE</th>
            <th class="desc">DESCRIPTION</th>
            <th>PRICE</th>
            <th>QTY</th>
            <th>TOTAL</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        @foreach($clientes as $clie)
            <tr>

                <td class="no">{{ $clie['nombre_comercial'] }}</td>
                <td class="desc">{{ $clie['nombre_fiscal'] }}</td>
                <td class="unit">{{ $clie['rfc'] }}</td>
                <td class="total">{{ $clie['domicilio'] }} </td>
            </tr>
        @endforeach
        <tr>
            <td colspan="4">SUBTOTAL</td>
            <td class="total">$5,200.00</td>
        </tr>
        <tr>
            <td colspan="4">TAX 25%</td>
            <td class="total">$1,300.00</td>
        </tr>
        <tr>
            <td colspan="4" class="grand total">GRAND TOTAL</td>
            <td class="grand total">$6,500.00</td>
        </tr>
        </tbody>
    </table>
    <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
    </div>
</main>
<footer>
    Invoice was created on a computer and is valid without the signature and seal.
</footer>
</body>
</html>