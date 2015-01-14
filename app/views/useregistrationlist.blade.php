@extends('master')
@section('bodycontent')
<?php
    //echo '<pre>';
         $userListData = json_decode($userListJSON, true);
         //print_r($userListData);
         //die();
    //echo '</pre>';
?>
<div class="mws-panel grid_8 mws-collapsible">
    <div class="mws-panel-header">
        <span><i class="icon-table"></i> Browser Engines</span>
    </div>
    <div class="mws-panel-body no-padding">
        <table class="mws-table mws-datatable">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>User Role</th>
                    <th>User Sell Phone Number</th>
                    <th>User National Id</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($userListData as $userList)
                    <tr>
                        <td>{{$userList["username"]}}</td>
                        <td>{{$userList["email"]}}</td>
                        <td>{{$userList["user_role"]}}</td>
                        <td>{{$userList["phone"]}}</td>
                        <td>{{$userList["national_id"]}}</td>
                        <td>
                            <span class="btn-group">
                                <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop