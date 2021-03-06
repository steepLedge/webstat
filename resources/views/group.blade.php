@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li @if($group == 'browser') class="active" @endif><a href="/browser">Browser</a></li>
                    <li @if($group == 'os') class="active" @endif><a href="/os">OS</a></li>
                    <li @if($group == 'geo') class="active" @endif><a href="/geo">Geo</a></li>
                    <li @if($group == 'referer') class="active" @endif><a href="/referer">Referer</a></li>
                </ul>
                </ul>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

                <h2 class="sub-header">Section `{{ $group }}`</h2>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Hits</th>
                            <th>Unique by IP</th>
                            <th>Unique by cookie</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($collection as $key => $value)
                            <tr>
                                <td>{{ $key }}</td>
                                <td>{{ $value['hits'] }}</td>
                                <td>{{ $value['unique_ip'] }}</td>
                                <td>{{ $value['unique_cookie'] }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
