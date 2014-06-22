@extends('layouts.default')

@section('content')

<h1>Sites</h1>

<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="example222">
            <thead>
            <tr>
                <th>Rating</th>
                <th>Site</th>
                <th>Issuer</th>
                <th>TLS/SSL</th>
                <th>HSTS</th>
                <th>Weak Ciphers</th>
                <th>PFS</th>
                <th>Server</th>
                <th>PCI</th>
                <th>FIPS</th>
                <th>Details</th>
            </tr>
            </thead>
            <tbody>
            @for($i=0;$i<=100;$i++)
            <tr class="success">
                <td><a href="https://www.ssllabs.com/ssltest/analyze.html?d=" target="_blank" title="SSL Labs" class="label label-success">A-</a></td>
                <td><a href="https://" target="_blank">https://</a></td>
                <td>Comodo</td>
                <td>TLS 1.2</td>
                <td>No</td>
                <td>No</td>
                <td>Some</td>
                <td>Apache</td>
                <td>No</td>
                <td>No</td>
                <td><a href="" class="btn btn-danger">View more</a></td>
            </tr>
            @endfor
            </tbody>
        </table>
    </div>
    </div>
    </div>
</div>

<script>

</script>

@stop

@section('footer_inline_js')
$(document).ready(function() {
    $('#example222').dataTable({
        "aLengthMenu": [[20, 50, 100, 500, -1], [20, 50, 100, 500, "All"]],
        "iDisplayLength": 20,
        "aoColumns": [
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        null
        ],
        "oLanguage": {
        "sSearch": "Filter:"
        }
    });
});
@stop
