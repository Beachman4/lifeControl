@extends('templates.masterpage')
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-taxi"></i>Police Overview</h3>
                    <div class="col-lg-3 pull-right">
                        <a href="/players/police">View All <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th><i class="fa fa-user"></i>Name</th>
                            <th><i class="fa fa-eye"></i>Player Id</th>
                            <th><i class="fa fa-user"></i>Rank</th>
                        </tr>
                        @foreach ($cops as $cop)
                            <tr>
                                <td>{{ $cop->name }}</td>
                                <td>{{ $cop->playerid }}</td>
                                <td>{{ $cop->coplevel }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-money"></i>Top 10 Richest Players</h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th><i class="fa fa-user"></i>Name</th>
                            <th><i class="fa fa-eye"></i>Player Id</th>
                            <th><i class="fa fa-money"></i>Cash</th>
                            <th><i class="fa fa-bank"></i>Bank</th>
                        </tr>
                        @foreach ($players as $player)
                            <tr>
                                <td>{{ $player->name }}</td>
                                <td>{{ $player->playerid }}</td>
                                <td>{{ $player->cash }}</td>
                                <td>{{ $player->bankacc }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-ambulance"></i>Medics Overview</h3>
                    <div class="col-lg-3 pull-right">
                        <a href="/players/fd">View All <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th><i class="fa fa-user"></i>Name</th>
                            <th><i class="fa fa-eye"></i>Player Id</th>
                            <th><i class="fa fa-user"></i>Rank</th>
                        </tr>
                        @foreach ($medics as $medic)
                            <tr>
                                <td>{{ $medic->name }}</td>
                                <td>{{ $medic->playerid }}</td>
                                <td>{{ $medic->coplevel }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop