@extends('templates.masterpage')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-title">
                        Players
                    </div>
                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 300px;">
                            <input type="text" name="search" class="form-control pull-right" placeholder="Search Players"
                        </div>
                        <div class="input-group-btn">
                            <button class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <th>PlayerID</th>
                                <th>Cash</th>
                                <th>Bank</th>
                                <th>Cop</th>
                                <th>Admin</th>
                                <th><i class="fa fa-pencil">Edit</i></th>
                                <th><i class="fa fa-steam">Steam</i></th>
                            </tr>
                            @foreach ($players as $player)
                                <tr>
                                    <td>{{ $player->name }}</td>
                                    <td>{{ $player->playerid }}</td>
                                    <td>{{ $player->cash }}</td>
                                    <td>{{ $player->bankacc }}</td>
                                    <td>{{ $player->coplevel }}</td>
                                    <td>{{ $player->adminlevel }}</td>
                                    <td><a href="/players/{{ $player->uid }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a></td>
                                    <td>Test</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop