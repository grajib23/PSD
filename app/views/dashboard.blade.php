@extends('master')
@section('bodycontent')

    <?php
        echo '<pre>';
        //$rankData = json_decode($rankJSON, true);
        $divisionList = json_decode($divisionJSON, true);
        $divisions = $divisionList["divisions"];
        //print_r($divisions);
        //die();
        echo '</pre>';
    ?>
    <script>
        var divisionJSON = <?=$divisionJSON?>;
    </script>
    <div class="mws-stat-container clearfix">

        <!-- Statistic Item -->
        <a class="mws-stat" href="#">
            <!-- Statistic Icon (edit to change icon) -->
            <span class="mws-stat-icon icol32-building"></span>

            <!-- Statistic Content -->
            <span class="mws-stat-content">
                <span class="mws-stat-title">Floors Climbed</span>
                <span class="mws-stat-value">324</span>
            </span>
        </a>

        <a class="mws-stat" href="#">
            <!-- Statistic Icon (edit to change icon) -->
            <span class="mws-stat-icon icol32-sport"></span>

            <!-- Statistic Content -->
            <span class="mws-stat-content">
                <span class="mws-stat-title">Calories Burned</span>
                <span class="mws-stat-value down">74%</span>
            </span>
        </a>

        <a class="mws-stat" href="#">
            <!-- Statistic Icon (edit to change icon) -->
            <span class="mws-stat-icon icol32-walk"></span>

            <!-- Statistic Content -->
            <span class="mws-stat-content">
                <span class="mws-stat-title">Kilometers Walked</span>
                <span class="mws-stat-value">14</span>
            </span>
        </a>

        <a class="mws-stat" href="#">
            <!-- Statistic Icon (edit to change icon) -->
            <span class="mws-stat-icon icol32-bug"></span>

            <!-- Statistic Content -->
            <span class="mws-stat-content">
                <span class="mws-stat-title">Bugs Fixed</span>
                <span class="mws-stat-value up">22%</span>
            </span>
        </a>

        <a class="mws-stat" href="#">
            <!-- Statistic Icon (edit to change icon) -->
            <span class="mws-stat-icon icol32-car"></span>

            <!-- Statistic Content -->
            <span class="mws-stat-content">
                <span class="mws-stat-title">Cars Repaired</span>
                <span class="mws-stat-value">77</span>
            </span>
        </a>
    </div>
    <div class="mws-panel grid_5">
        <div class="mws-panel-header">
            <span><i class="icon-graph"></i> Employee Charts</span>
        </div>
        <div class="mws-panel-body">
            <div id="mws-dashboard-chart" style="height: 222px;"></div>
        </div>
    </div>
    <div class="mws-panel grid_3">
        <div class="mws-panel-header">
            <span><i class="icon-book"></i> Company Summary</span>
        </div>
        <div class="mws-panel-body no-padding">
            <ul class="mws-summary clearfix">
                <li>
                    <span class="key"><i class="icon-support"></i> Support Tickets</span>
                    <span class="val">
                        <span class="text-nowrap">332</span>
                    </span>
                </li>
                <li>
                    <span class="key"><i class="icon-certificate"></i> Commision</span>
                    <span class="val">
                        <span class="text-nowrap">71% <i class="up icon-arrow-up"></i></span>
                    </span>
                </li>
                <li>
                    <span class="key"><i class="icon-shopping-cart"></i> This Week Sales</span>
                    <span class="val">
                        <span class="text-nowrap">144 <i class="down icon-arrow-down"></i></span>
                    </span>
                </li>
                <li>
                    <span class="key"><i class="icon-install"></i> Cash Deposit</span>
                    <span class="val">
                        <span class="text-nowrap">$6,421</span>
                    </span>
                </li>
                <li>
                    <span class="key"><i class="icon-key"></i> Last Sign In</span>
                    <span class="val">
                        <span class="text-nowrap">September 21, 2012</span>
                    </span>
                </li>
                <li>
                    <span class="key"><i class="icon-windows"></i> Operating System</span>
                    <span class="val">
                        <span class="text-nowrap">Debian Linux</span>
                    </span>
                </li>
            </ul>
        </div>
    </div>
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span><i class="icon-magic"></i> PERSONNEL DATA SHEET (LONG -PDS) </span>
        </div>

        <div class="mws-panel-body no-padding" id="test">


            <form class="mws-form verticalDashboard autoAJAX" data-posturl="/adduser">

                <fieldset class="wizard-step mws-form-inline">

                    <legend class="wizard-label"><i class="icol-accept"></i>GENERAL INFORMATION</legend>
                    <input name="posturl" value="users.personalinfos" type="hidden">
                    <input name="posturl" value="1" name="user_id" id="user_id"type="hidden">
                    <br/>
                    <div class="mws-panel-header" style="width:95%;margin: 0px auto">
                        <span><i class="icon-table"></i>GENERAL INFORMATION</span>
                    </div>
                    <div id class="mws-form-row">
                        <label class="mws-form-label">E.ID</label>
                        <div class="mws-form-item">
                            <input type="text" name="govt_id" id="govt_id"class="required large" placeholder="Type Govment ID">
                        </div>
                    </div>

                    <div class="mws-form-row">
                        <label class="mws-form-label">Name in English</label>
                        <div class="mws-form-item">
                            <input type="text" name="name_in_english" id="name_in_english"class="required  large">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Name in Bangla</label>
                        <div class="mws-form-item">
                            <input type="text" name="name_in_bangla" id="name_in_bangla"class="required  large">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Home Division</label>
                        <div class="mws-form-item">
                            <select class="mws-select2 small" name="homeDivision" id="homeDivision">
                                <option value="null">Select Your Division</option>
                                @foreach ($divisions as $divisionAll) 
                                    <option value="{{$divisionAll['id']}}">{{$divisionAll["name"]}}</option>
                                @endforeach 
                            </select>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Home District</label>
                        <div class="mws-form-item">
                            <select class="mws-select2 small" name="homedistrict_id" id="homedistrict_id">
                                <option value="null">Select Your District</option>
                                <option value="1">jessore</option>
                            </select>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Home Upozilla</label>
                        <div class="mws-form-item">
                            <select class="mws-select2 small" name="homeUpozilla" id="homeUpozilla">
                                <option value="null">Select Your Upozilla</option>
                                  <option value="1">Noapara</option>
                            </select>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Birth Date</label>
                        <div class="mws-form-item">
                            <input type="text" class="mws-datepicker small" name="DOB" id="DOB">
                        </div>
                    </div>
                    
                    <div class="mws-form-row">
                        <label class="mws-form-label">Rank</label>
                        <div class="mws-form-item">
                            <select class="mws-select2 small" name="rank_id" id="rank_id">
                                <option value="0">Rank 1</option>
                                <option value="1">Rank 2</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="mws-form-row">
                        <label class="mws-form-label">Posting Division</label>
                        <div class="mws-form-item">
                            <select class="mws-select2 small" name="postingDivision" id="postingDivision">
                                <option value="null">Select Posting Division</option>
                                <option value="dhk">Dhaka</option>
                                <option value="khl">Khulna</option>
                                <option value="cit">Citagong</option>
                                <option value="ran">Rangpur</option>
                            </select>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Posting District</label>
                        <div class="mws-form-item">
                            <select class="mws-select2 small" name="postingDistrict" id="postingDistrict">
                                <option value="null">Select Posting District</option>
                                <option value="dhk">Dhaka</option>
                                <option value="khl">Khulna</option>
                                <option value="cit">Citagong</option>
                                <option value="ran">Rangpur</option>
                            </select>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Posting Upozilla</label>
                        <div class="mws-form-item">
                            <select class="mws-select2 small" name="postingUpozilla" id="postingUpozilla">
                                <option value="null">Select Posting Upozilla</option>
                                <option value="dhk">Dhaka</option>
                                <option value="khl">Khulna</option>
                                <option value="cit">Citagong</option>
                                <option value="ran">Rangpur</option>
                            </select>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Cadre</label>
                        <div class="mws-form-item">
                            <select class="mws-select2 small" name="cadre_id" id="cadre_id">
                                <option value="1">Demo Cadre 1</option>
                                <option value="2">Demo Cadre 2</option>
                                <option value="3">Demo Cadre 3</option>
                                <option value="4">Demo Cadre 4</option>
                            </select>
                        </div>
                    </div>

                    <div class="mws-form-row">
                        <label class="mws-form-label">Cadre date</label>
                        <div class="mws-form-item">
                            <input type="text" class="mws-datepicker small" name="cadre_date" id="cadre_date">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Gender <span class="required">*</span></label>
                        <div class="mws-form-item">
                            <ul class="mws-form-list">
                                <li><input type="radio" id="gender" value="male"   name="gender" class="required"/> <label for="male">Male</label></li>
                                <li><input type="radio" id="gender" value="female" name="gender"> <label for="female">Female</label></li>
                            </ul>
                            <label class="error plain" generated="true" for="gender" style="display:none"></label>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Marital status</label>
                        <div class="mws-form-item">
                            <select class="mws-select2 small" name="marital_stat" id="marital_stat">
                                <option value="married">Married</option>
                                <option value="single">Single</option>
                                <option value="divorced">Divorced</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">NATIONAL ID NO<span class="required">*</span></label>
                        <div class="mws-form-item">
                            <input type="text" name="nationalId" id="nationalId"class="required  large">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Father's Name in Bangla<span class="required">*</span></label>
                        <div class="mws-form-item">
                            <input type="text" name="fname_in_bangla" id="fname_in_bangla"class="required large">
                        </div>
                    </div>
                    <!-- 
                    <div class="mws-form-row">
                        <label class="mws-form-label">Father's Name in English</label>
                        <div class="mws-form-item">
                            <input type="text" name="name_in_english" id="name_in_english"class="large">
                        </div>
                    </div> -->
                    <div class="mws-form-row">
                        <label class="mws-form-label">Mother's Name in Bangla<span class="required">*</span></label>
                        <div class="mws-form-item">
                            <input type="text" name="mname_in_bangla" id="mname_in_bangla"class="required large">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Mother's Name in English</label>
                        <div class="mws-form-item">
                            <input type="text" name="mname_in_english" id="mname_in_english"class="large">
                        </div>
                    </div>

                    <div class="mws-form-row">
                        <label class="mws-form-label">PRL Date</label>
                        <div class="mws-form-item">
                            <input type="text" class="mws-datepicker small" name="lpr_date" id="lpr_date">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Order/Join Date</label>
                        <div class="mws-form-item">
                            <input type="text" class="mws-datepicker small" name="join_date" id="join_date">
                        </div>
                    </div>
                    
                    <div class="mws-form-row">
                        <label class="mws-form-label">Batch</label>
                        <div class="mws-form-item">
                            <input type="text" name="batch" id="batch"class="large">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Confirmation G.O. Date</label>
                        <div class="mws-form-item">
                            <input type="text" name="confirm_go_date" id="confirm_go_date"class="mws-datepicker small">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Religion</label>
                        <div class="mws-form-item">
                            <select class="mws-select2 small" name="religion" id="religion">
                                <option value="Muslim">MUSLIM</option>
                                <option value="Hindu">HINDU</option>
                                <option value="Buddhish">BUDDHIST</option>
                                <option value="Christian">CHRISTIAN</option>
                            </select>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Freedom Fighter</label>
                        <div class="mws-form-item">
                            <select class="mws-select2 small" name="is_freedom_fighter" id="is_freedom_fighter">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Child/Grand Child of Freedom Fighter</label>
                        <div class="mws-form-item">
                            <select class="mws-select2 small" name="is_child_or_grand_child_of_freedom_fighter" id="is_child_or_grand_child_of_freedom_fighter">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="mws-form-row">
                        <label class="mws-form-label">Option for Work  Field <span class="required">*</span></label>
                        <div class="mws-form-item">
                            <input type="text" name="workfield_option" id="workfield_option"class="required large">
                        </div>
                    </div>
                </fieldset>

                <fieldset class="wizard-step mws-form-inline">
                    <legend class="wizard-label"><i class="icol-delivery"></i>SPOUSE INFOMATION</legend>
                    <input name="posturl" value="personalinfos.spouses" type="hidden">
                    <input name="govt_id" value="EE7" type="hidden">
                    <br/>
                    <div class="mws-panel-header" style="width:95%;margin: 0px auto">
                        <span><i class="icon-table"></i>SPOUSE INFOMATION</span>
                    </div>
                    <div id class="mws-form-row">
                        <label class="mws-form-label">Name in Bangla <span class="required">*</span></label>
                        <div class="mws-form-item">
                            <input type="text" name="name_in_bangla" id="name_in_bangla"class="required large">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Name in English</label>
                        <div class="mws-form-item">
                            <input type="text" name="name_in_english" id="name_in_english"class="required  large">
                        </div>
                    </div>
                    
                    <div class="mws-form-row">
                        <label class="mws-form-label">Occupation</label>
                        <div class="mws-form-item">
                            <select class="mws-select2 small" name="occupation" id="occupation">
                                <option value="housewife">Housewife</option>
                                <option value="service">Service</option>
                                <option value="selpem">Self Employed</option>
                            </select>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Designation</label>
                        <div class="mws-form-item">
                            <select class="mws-select2 small" name="designation" id="designation">
                                <option value="dhk">Demo Designation</option>
                                <option value="khl">Demo Designation</option>
                                <option value="cit">Demo Designation</option>
                                <option value="ran">Demo Designation</option>
                            </select>
                        </div>
                    </div>

                    <div class="mws-form-row">
                        <label class="mws-form-label">Home District</label>
                        <div class="mws-form-item">
                            <select class="mws-select2 small" name="district_id" id="district_id">
                                <option value="null">Select Your District</option>
                                <option value="1">jessore</option>
                            </select>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Location <span class="required">*</span></label>
                        <div class="mws-form-item">
                            <textarea name="location" id="location" rows="" cols="" class="required large"></textarea>
                        </div>
                    </div>

                </fieldset>

                <fieldset class="wizard-step mws-form-inline">
                    <legend class="wizard-label"><i class="icol-user"></i> PERMANENT ADDRESS</legend>
                    <input name="posturl" value="url02" type="hidden">
                    <br/>
                    <div class="mws-panel-header" style="width:95%;margin: 0px auto">
                        <span><i class="icon-table"></i>PERMANENT ADDRESS</span>
                    </div>
                    <div id class="mws-form-row">
                        <label class="mws-form-label">Village/House No. & Road</span></label>
                        <div class="mws-form-item">
                            <input type="text" name="pvilladd" id="pvilladd"class="large">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Post Office</label>
                        <div class="mws-form-item">
                            <input type="text" name="ppostOff" id="ppostOff"class="large">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Police Station</label>
                        <div class="mws-form-item">
                            <input type="text" name="policeSta" id="policeSta"class="large">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">District</label>
                        <div class="mws-form-item">
                            <select class="mws-select2 small" name="phomeDistrict" id="phomeDistrict">
                                <option value="dhk">Dhaka</option>
                                <option value="khl">Khulna</option>
                                <option value="cit">Citagong</option>
                                <option value="ran">Rangpur</option>
                            </select>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Telephone No.</label>
                        <div class="mws-form-item">
                            <input type="text" name="tel" id="tel"class="large">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Mobile Phone Number<span class="required">*</span></label>
                        <div class="mws-form-item">
                            <input type="text" name="sell" id="sell"class="large required">
                        </div>
                    </div>
                </fieldset>
                <fieldset class="wizard-step mws-form-inline">
                    <legend class="wizard-label"><i class="icol-user"></i> PRESENT  ADDRESS</legend>
                    <br/>
                    <div class="mws-panel-header" style="width:95%;margin: 0px auto">
                        <span><i class="icon-table"></i>PRESENT ADDRESS</span>
                    </div>
                    <div id class="mws-form-row">
                        <label class="mws-form-label">Village/House No. & Road</span></label>
                        <div class="mws-form-item">
                            <input type="text" name="prvilladd" id="prvilladd"class="large">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Post Office</label>
                        <div class="mws-form-item">
                            <input type="text" name="prpostOff" id="prpostOff"class="large">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Police Station</label>
                        <div class="mws-form-item">
                            <input type="text" name="ppoliceSta" id="ppoliceSta"class="large">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">District</label>
                        <div class="mws-form-item">
                            <select class="mws-select2 small" name="pphomeDistrict" id="pphomeDistrict">
                                <option value="dhk">Dhaka</option>
                                <option value="khl">Khulna</option>
                                <option value="cit">Citagong</option>
                                <option value="ran">Rangpur</option>
                            </select>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Telephone No.</label>
                        <div class="mws-form-item">
                            <input type="text" name="ptel" id="ptel"class="large">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">Mobile Phone Number<span class="required">*</span></label>
                        <div class="mws-form-item">
                            <input type="text" name="sell" id="sell"class="large required">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">e-mail Address<span class="required">*</span></label>
                        <div class="mws-form-item">
                            <input type="text" name="sell" id="sell"class="large required email">
                        </div>
                    </div>
                </fieldset>

                <fieldset class="wizard-step mws-form-inline">
                    <legend class="wizard-label"><i class="icol-delivery"></i>CHILDREN INFORMATION</legend>
                    <div class="mws-panel grid_8" style="padding-top:30px">
                        <div class="mws-panel-header">
                            <span><i class="icon-table"></i>CHILDREN INFORMATION</span>
                        </div>

                        <div class="mws-panel-body no-padding">
                            <table class="mws-table">

                                <tbody>
                                <tr>
                                    <td>
                                        <div class="mws-form-item" style="margin-left: 0px">
                                            <input type="text" name="cnameEnglish" id="cnameEnglish" placeholder="Name in English" class="required  large">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mws-form-item" style="margin-left: 0px">
                                            <input type="text" class="mws-datepicker large" placeholder="Birth Date" name="cdob" id="cdob">
                                        </div>
                                    </td>
                                    <td>
                                        <label>Gender</label><br />
                                        <select class="mws-select2 large" name="language" id="language">
                                            <option value="Ad">Male</option>
                                            <option value="Mo">Female</option>
                                            <option value="Ba">Outher</option>
                                        </select>
                                    </td>

                                    <td> <a href="#" class="btn"><i class="icol-cross"></i> Reject</a></td>
                                </tr>
                                <tr>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td></td>
                                    <td colspan="3"><button type="button" class="btn btn-primary"><i class="icon-plus"></i> Add Children</button></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="wizard-step mws-form-inline">
                    <legend class="wizard-label"><i class="icol-delivery"></i>LANGUAGE INFO</legend>


                    <div class="mws-panel grid_8" style="padding-top:30px">
                        <div class="mws-panel-header">
                            <span><i class="icon-table"></i> Select Your Multipule Language Skill</span>
                        </div>

                        <div class="mws-panel-body no-padding">
                            <table class="mws-table">

                                <tbody>
                                <tr>
                                    <td>
                                        <select class="mws-select2 large" name="language" id="language">
                                            <option value="dhk">Select Your Language Skill</option>
                                            <option value="dhk">Bangla</option>
                                            <option value="khl">Hindi</option>
                                            <option value="cit">English</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="checkbox"> <label>Read</label><br />
                                        <select class="mws-select2 large" name="language" id="language">
                                            <option value="Ad">Advance</option>
                                            <option value="Mo">Moderate</option>
                                            <option value="Ba">Basic</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="checkbox"> <label>Write</label><br />
                                        <select class="mws-select2 large" name="language" id="language">
                                            <option value="Ad">Advance</option>
                                            <option value="Mo">Moderate</option>
                                            <option value="Ba">Basic</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="checkbox"> <label>Speak</label><br />
                                        <select class="mws-select2 large" name="language" id="language">
                                            <option value="Ad">Advance</option>
                                            <option value="Mo">Moderate</option>
                                            <option value="Ba">Basic</option>
                                        </select>
                                    </td>
                                    <td> <a href="#" class="btn"><i class="icol-cross"></i> Reject</a></td>
                                </tr>
                                <tr>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td></td>
                                    <td colspan="3"><button type="button" class="btn btn-primary"><i class="icon-plus"></i> Add Language</button></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </fieldset>


                <fieldset class="wizard-step mws-form-inline">
                    <legend class="wizard-label"><i class="icol-delivery"></i>EDUCATONAL QUALIFICATION</legend>


                    <div class="mws-panel grid_8" style="padding-top:30px">
                        <div class="mws-panel-header">
                            <span><i class="icon-table"></i>EDUCATONAL QUALIFICATION</span>
                        </div>

                        <div class="mws-panel-body no-padding">
                            <table class="mws-table">
                                <thead>
                                <tr>
                                    <th>Name of Institution</th>
                                    <th>Principal Subject</th>
                                    <th>Degree</th>
                                    <th>Passing Year</th>
                                    <th>Result</th>
                                    <th>GPA/CGPA</th>
                                    <th>Distinction</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;"></td>
                                    <td style="width:20%">
                                        <select class="mws-select2 large" name="language" id="language" style="width: 100%;">
                                            <option value="dhk">Science</option>
                                            <option value="dhk">Arts</option>
                                            <option value="khl">Commerce</option>
                                        </select>
                                    </td>
                                    <td style="width:20%">
                                        <select class="mws-select2 large" name="language" id="language" style="width: 100%;">
                                            <option value="dhk">SSC</option>
                                            <option value="khl">HSC</option>
                                            <option value="dhk">DIPLOMA</option>
                                            <option value="dhk">VOCATIONAL</option>
                                            <option value="dhk">BACHELOR</option>
                                            <option value="dhk">MASTER</option>
                                            <option value="dhk">PHD</option>
                                        </select>
                                    </td>
                                    <td>
                                        <div class="mws-form-row">
                                            <label class="mws-form-label">Passing Year</label>
                                            <div class="mws-form-item">
                                                <input type="text" class="mws-datepicker large" name="joinDate" id="joinDate">
                                            </div>
                                        </div>
                                    </td>
                                    <td><input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;"></td>
                                    <td><input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;"></td>
                                    <td><input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;"></td>
                                    <td> <a href="#" class="btn"><i class="icol-cross"></i> Reject</a></td>
                                </tr>
                                <tr>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td></td>
                                    <td colspan="3"><button type="button" class="btn btn-primary"><i class="icon-plus"></i> Add</button></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="wizard-step mws-form-inline">
                    <legend class="wizard-label"><i class="icol-delivery"></i>LOCAL TRAINING</legend>


                    <div class="mws-panel grid_8" style="padding-top:30px">
                        <div class="mws-panel-header">
                            <span><i class="icon-table"></i>LOCAL TRAINING</span>
                        </div>

                        <div class="mws-panel-body no-padding">
                            <table class="mws-table">
                                <thead>
                                <tr>
                                    <th>Course Title</th>
                                    <th>Institution</th>
                                    <th>Location</th>
                                    <th>Period</th>
                                    <th>Grade</th>
                                    <th>Position</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;"></td>
                                    <td>
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td>
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td style="width:30%">
                                        From
                                        <input type="text" class="mws-datepicker large" name="powerDate" id="powerDate" style="width: 100%;">
                                        To
                                        <input type="text" class="mws-datepicker large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td><input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;"></td>
                                    <td><input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;"></td>
                                    <td> <a href="#" class="btn"><i class="icol-cross"></i> Reject</a></td>
                                </tr>
                                <tr>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td></td>
                                    <td colspan="3"><button type="button" class="btn btn-primary"><i class="icon-plus"></i> Add</button></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="wizard-step mws-form-inline">
                    <legend class="wizard-label"><i class="icol-delivery"></i>FOREIGN TRAINING</legend>


                    <div class="mws-panel grid_8" style="padding-top:30px">
                        <div class="mws-panel-header">
                            <span><i class="icon-table"></i>FOREIGN TRAINING</span>
                        </div>

                        <div class="mws-panel-body no-padding">
                            <table class="mws-table">
                                <thead>
                                <tr>
                                    <th>Course Title</th>
                                    <th>Institution</th>
                                    <th>Country</th>
                                    <th>Period</th>
                                    <th>Grade</th>
                                    <th>Position</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;"></td>
                                    <td>
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td>
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td style="width:30%">
                                        From
                                        <input type="text" class="mws-datepicker large" name="powerDate" id="powerDate" style="width: 100%;">
                                        To
                                        <input type="text" class="mws-datepicker large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td><input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;"></td>
                                    <td><input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;"></td>
                                    <td> <a href="#" class="btn"><i class="icol-cross"></i> Reject</a></td>
                                </tr>
                                <tr>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td></td>
                                    <td colspan="3"><button type="button" class="btn btn-primary"><i class="icon-plus"></i> Add</button></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="wizard-step mws-form-inline">
                    <legend class="wizard-label"><i class="icol-delivery"></i>FOREIGN TRAVEL</legend>


                    <div class="mws-panel grid_8" style="padding-top:30px">
                        <div class="mws-panel-header">
                            <span><i class="icon-table"></i>FOREIGN TRAVEL</span>
                        </div>

                        <div class="mws-panel-body no-padding">
                            <table class="mws-table">
                                <thead>
                                <tr>
                                    <th>Country</th>
                                    <th>Purpose</th>
                                    <th>Period</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;"></td>
                                    <td>
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>

                                    <td style="width:30%">
                                        From
                                        <input type="text" class="mws-datepicker large" name="powerDate" id="powerDate" style="width: 100%;">
                                        To
                                        <input type="text" class="mws-datepicker large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td> <a href="#" class="btn"><i class="icol-cross"></i> Reject</a></td>
                                </tr>
                                <tr>

                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td></td>
                                    <td colspan="3"><button type="button" class="btn btn-primary"><i class="icon-plus"></i> Add</button></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="wizard-step mws-form-inline">
                    <legend class="wizard-label"><i class="icol-delivery"></i>POSTING ABROD</legend>


                    <div class="mws-panel grid_8" style="padding-top:30px">
                        <div class="mws-panel-header">
                            <span><i class="icon-table"></i>POSTING ABROD</span>
                        </div>

                        <div class="mws-panel-body no-padding">
                            <table class="mws-table">
                                <thead>
                                <tr>
                                    <th>Post</th>
                                    <th>Organization</th>
                                    <th>Country</th>
                                    <th>Period</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;"></td>
                                    <td>
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td>
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td style="width:30%">
                                        From
                                        <input type="text" class="mws-datepicker large" name="powerDate" id="powerDate" style="width: 100%;">
                                        To
                                        <input type="text" class="mws-datepicker large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td> <a href="#" class="btn"><i class="icol-cross"></i> Reject</a></td>
                                </tr>
                                <tr>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td></td>
                                    <td colspan="3"><button type="button" class="btn btn-primary"><i class="icon-plus"></i> Add</button></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="wizard-step mws-form-inline">
                    <legend class="wizard-label"><i class="icol-delivery"></i>ADDITIONAL PROFESIONAL QUALIFICATION</legend>


                    <div class="mws-panel grid_8" style="padding-top:30px">
                        <div class="mws-panel-header">
                            <span><i class="icon-table"></i>PUBLICATION</span>
                        </div>

                        <div class="mws-panel-body no-padding">
                            <table class="mws-table">
                                <thead>
                                <tr>
                                    <th>Books</th>
                                    <th>Periodicals</th>
                                    <th>Monograph</th>
                                    <th>Journals</th>
                                    <th>Name of Publication</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;"></td>
                                    <td>
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td>
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td>
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td>
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td style="width:30%">
                                        <input type="text" class="mws-datepicker large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td> <a href="#" class="btn"><i class="icol-cross"></i> Reject</a></td>
                                </tr>
                                <tr>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td></td>
                                    <td colspan="3"><button type="button" class="btn btn-primary"><i class="icon-plus"></i> Add</button></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="mws-panel grid_8" style="padding-top:30px">
                        <div class="mws-panel-header">
                            <span><i class="icon-table"></i>HONOURS AND AWARD</span>
                        </div>

                        <div class="mws-panel-body no-padding">
                            <table class="mws-table">
                                <thead>
                                <tr>
                                    <th>Title of Award</th>
                                    <th>Ground</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;"></td>
                                    <td>
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td style="width:30%">
                                        <input type="text" class="mws-datepicker large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td> <a href="#" class="btn"><i class="icol-cross"></i> Reject</a></td>
                                </tr>
                                <tr>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td></td>
                                    <td colspan="3"><button type="button" class="btn btn-primary"><i class="icon-plus"></i> Add</button></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="mws-panel grid_8" style="padding-top:30px">
                        <div class="mws-panel-header">
                            <span><i class="icon-table"></i>Other Services (Prior of this Post/Rank)</span>
                        </div>

                        <div class="mws-panel-body no-padding">
                            <table class="mws-table">
                                <thead>
                                <tr>
                                    <th>Name of Employer</th>
                                    <th>Address</th>
                                    <th>Type of service</th>
                                    <th>Position</th>
                                    <th>Period</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;"></td>
                                    <td>
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td>
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td>
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td style="width:30%">
                                        From
                                        <input type="text" class="mws-datepicker large" name="powerDate" id="powerDate" style="width: 100%;">
                                        To
                                        <input type="text" class="mws-datepicker large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td> <a href="#" class="btn"><i class="icol-cross"></i> Reject</a></td>
                                </tr>
                                <tr>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td></td>
                                    <td colspan="3"><button type="button" class="btn btn-primary"><i class="icon-plus"></i> Add</button></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="wizard-step mws-form-inline">
                    <legend class="wizard-label"><i class="icol-delivery"></i>LEAVE PARTICULARS</legend>
                    <div class="mws-panel grid_8" style="padding-top:30px">
                        <div class="mws-panel-header">
                            <span><i class="icon-table"></i>LEAVE (except CL) PARTICULARS</span>
                        </div>

                        <div class="mws-panel-body no-padding">
                            <table class="mws-table">
                                <thead>
                                <tr>
                                    <th>Type of Leave</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Duration</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="width:30%">
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td style="width:30%">
                                        <input type="text" class="mws-datepicker large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td>
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td>
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td> <a href="#" class="btn"><i class="icol-cross"></i> Reject</a></td>
                                </tr>
                                <tr>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td></td>
                                    <td colspan="3"><button type="button" class="btn btn-primary"><i class="icon-plus"></i> Add</button></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="wizard-step mws-form-inline">
                    <legend class="wizard-label"><i class="icol-delivery"></i>PROMOTION PARTICULARS</legend>
                    <div class="mws-panel grid_8" style="padding-top:30px">
                        <div class="mws-panel-header">
                            <span><i class="icon-table"></i>PROMOTION PARTICULARS</span>
                        </div>

                        <div class="mws-panel-body no-padding">
                            <table class="mws-table">
                                <thead>
                                <tr>
                                    <th>Rank</th>
                                    <th>Promotion Date</th>
                                    <th>G.O. Date</th>
                                    <th>Nature of Promotion</th>
                                    <th>Pay Scale</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="width:30%">
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td style="width:30%">
                                        <input type="text" class="mws-datepicker large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td>
                                        <input type="text" class="mws-datepicker large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td>
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td>
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td> <a href="#" class="btn"><i class="icol-cross"></i> Reject</a></td>
                                </tr>
                                <tr>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td></td>
                                    <td colspan="3"><button type="button" class="btn btn-primary"><i class="icon-plus"></i> Add</button></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="wizard-step mws-form-inline">
                    <legend class="wizard-label"><i class="icol-delivery"></i>*DISCIPLINARY ACTIONS/CRIMINAL PROSECUTION</legend>
                    <div class="mws-panel grid_8" style="padding-top:30px">
                        <div class="mws-panel-header">
                            <span><i class="icon-table"></i>*DISCIPLINARY ACTIONS/CRIMINAL PROSECUTION</span>
                        </div>

                        <div class="mws-panel-body no-padding">
                            <table class="mws-table">
                                <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Present Status</th>
                                    <th>Judgment</th>
                                    <th>Final Judgment</th>
                                    <th>Remarks</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="width:30%">
                                        <select class="mws-select2 large" name="language" id="language" style="width: 100%;">
                                            <option value="dhk">DEPARTMENT</option>
                                            <option value="khl">ANTICIPATION</option>
                                            <option value="dhk">CRIMINAL</option>

                                        </select>
                                    </td>
                                    <td style="width:30%">
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td>
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td>
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td>
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td>
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td> <a href="#" class="btn"><i class="icol-cross"></i> Reject</a></td>
                                </tr>
                                <tr>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td></td>
                                    <td colspan="3"><button type="button" class="btn btn-primary"><i class="icon-plus"></i> Add</button></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="wizard-step mws-form-inline">
                    <legend class="wizard-label"><i class="icol-delivery"></i>POSTING RECORDS</legend>
                    <div class="mws-panel grid_8" style="padding-top:30px">
                        <div class="mws-panel-header">
                            <span><i class="icon-table"></i>POSTING RECORDS</span>
                        </div>

                        <div class="mws-panel-body no-padding">
                            <table class="mws-table">
                                <thead>
                                <tr>
                                    <th>Post</th>
                                    <th>Organization</th>
                                    <th>Type of Posting</th>
                                    <th>Location</th>
                                    <th>Period</th>
                                    <th>Pay Scale</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="width:30%">
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td style="width:30%">
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td>
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td>
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td style="width:30%">
                                        From
                                        <input type="text" class="mws-datepicker large" name="powerDate" id="powerDate" style="width: 100%;">
                                        To
                                        <input type="text" class="mws-datepicker large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td>
                                        <input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;">
                                    </td>
                                    <td> <a href="#" class="btn"><i class="icol-cross"></i> Reject</a></td>
                                </tr>
                                <tr>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td style="border-right:solid 1px #fff"></td>
                                    <td></td>
                                    <td colspan="3"><button type="button" class="btn btn-primary"><i class="icon-plus"></i> Add</button></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@stop