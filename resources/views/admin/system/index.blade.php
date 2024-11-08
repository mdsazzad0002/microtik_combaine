@extends('layouts.admin.master')

@section('content')
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>Information</th>

        </tr>
    </thead>
    <tbody>



        <tr>
            <td>
                <pre>
                    {{ print_r($resource) }}
                </pre>
            </td>
        </tr>
    </tbody>
</table>
@endsection


