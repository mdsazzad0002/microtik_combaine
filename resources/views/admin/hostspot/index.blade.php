@extends('layouts.admin.master')

@section('content')
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Password</th>
            <th>UPtime</th>
            <th>Bytes In</th>
            <th>Bytes Out</th>
            <th>Package In</th>
            <th>Package Out</th>
            <th>Default</th>
            <th>Dynamic</th>
            <th>Disabled</th>
            <th>Comment</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>
                {{ $user['.id'] ?? ''}}
            </td>
            <td>
                {{ $user['name'] ?? ''}}
            </td>
            <td>
                {{ $user['password'] ?? '' }}
            </td>
            <td>
                {{ $user['uptime'] ?? ''}}
            </td>
            <td>
                {{ $user['bytes-in']  ?? ''}}
            </td>
            <td>
                {{ $user['bytes-out'] ?? ''}}
            </td>
            <td>
                {{ $user['packets-in'] ?? ''}}
            </td>
            <td>
                {{ $user['packets-out'] ?? ''}}
            </td>
            <td>
                {{ $user['default'] ?? ''}}
            </td>
            <td>
                {{ $user['dynamic'] ?? ''}}
            </td>
            <td>
                {{ $user['disabled'] ?? ''}}
            </td>
            <td>
                {{ $user['comment'] ?? ''}}
            </td>
            <td>
               <a href="{{ route('admin.hotspot.users.remove',  $user['.id']) }}">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection


