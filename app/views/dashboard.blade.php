@extends('master')
@section('bodycontent')
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

<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span><i class="icon-magic"></i> PERSONNEL DATA SHEET (LONG -PDS) </span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form verticalDashboard">
           
            <fieldset class="wizard-step mws-form-inline">
                <legend class="wizard-label"><i class="icol-accept"></i>GENERAL INFORMATION</legend>
                <div id class="mws-form-row">
                    <label class="mws-form-label">GOVT.ID</label>
                    <div class="mws-form-item">
                        <input type="text" name="govId" id="govId"class="required large" placeholder="Type Govment ID">
                    </div>
                </div>
                <div id class="mws-form-row">
                    <label class="mws-form-label">Name in Bangla <span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="text" name="nameBangla" id="nameBangla"class="required large" placeholder="Type Your Name">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Name in English</label>
                    <div class="mws-form-item">
                        <input type="text" name="nameEnglish" id="nameEnglish"class="required  large">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Home District</label>
                    <div class="mws-form-item">
                        <select class="mws-select2 small" name="homeDistrict" id="homeDistrict">
                            <option value="dhk">Dhaka</option>
                            <option value="khl">Khulna</option>
                            <option value="cit">Citagong</option>
                            <option value="ran">Rangpur</option>
                        </select>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Birth Date</label>
                    <div class="mws-form-item">
                        <input type="text" class="mws-datepicker large" name="dob" id="dob">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Rank</label>
                    <div class="mws-form-item">
                        <select class="mws-select2 small" name="employeeRank" id="employeeRank">
                            <option value="dem">Demo Rank 1</option>
                            <option value="dem">Demo Rank 2</option>
                            <option value="dem">Demo Rank 3</option>
                            <option value="dem">Demo Rank 4</option>
                        </select>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Posting</label>
                    <div class="mws-form-item">
                        <select class="mws-select2 small" name="employeePosting" id="employeePosting">
                            <option value="pos">Demo Posting 1</option>
                            <option value="pos">Demo Posting 2</option>
                            <option value="pos">Demo Posting 3</option>
                            <option value="pos">Demo Posting 4</option>
                        </select>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Location <span class="required">*</span></label>
                    <div class="mws-form-item">
                        <textarea name="employeeLocation" id="employeeLocation" rows="" cols="" class="required large"></textarea>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Cadre</label>
                    <div class="mws-form-item">
                        <select class="mws-select2 small" name="employeeCadre" id="employeeCadre">
                            <option value="pos">Demo Cadre 1</option>
                            <option value="pos">Demo Cadre 2</option>
                            <option value="pos">Demo Cadre 3</option>
                            <option value="pos">Demo Cadre 4</option>
                        </select>
                    </div>
                </div>
                
                <div class="mws-form-row">
                    <label class="mws-form-label">Cadre date</label>
                    <div class="mws-form-item">
                        <input type="text" class="mws-datepicker large" name="cadreDate" id="mws-calendar">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Gender <span class="required">*</span></label>
                    <div class="mws-form-item">
                        <ul class="mws-form-list">
                            <li><input type="radio" id="male" name="gender" class="required"/> <label for="male">Male</label></li>
                            <li><input type="radio" id="female" name="gender"> <label for="female">Female</label></li>
                        </ul>
                        <label class="error plain" generated="true" for="gender" style="display:none"></label>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Marital Stat</label>
                    <div class="mws-form-item">
                        <select class="mws-select2 small" name="marriStat" id="marriStat">
                            <option value="pos">Single</option>
                            <option value="pos">Married</option>
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
                        <input type="text" name="fName" id="fName"class="required large">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Father's Name in English</label>
                    <div class="mws-form-item">
                        <input type="text" name="fNameEng" id="fNameEng"class="large">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Mother's Name in Bangla<span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="text" name="mName" id="mName"class="required large">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Mother's Name in English</label>
                    <div class="mws-form-item">
                        <input type="text" name="mNameEng" id="mNameEng"class="large">
                    </div>
                </div>
                
                <div class="mws-form-row">
                    <label class="mws-form-label">LPR Date</label>
                    <div class="mws-form-item">
                        <select class="mws-select2 small" name="lprDate" id="lprDate">
                            <option value="pos">1 Year</option>
                            <option value="pos">2 Year</option>
                            <option value="pos">3 Year</option>
                            <option value="pos">4 Year</option>
                            <option value="pos">5 Year</option>
                            <option value="pos">6 Year</option>
                        </select>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Order/Join Date</label>
                    <div class="mws-form-item">
                        <input type="text" class="mws-datepicker large" name="joinDate" id="joinDate">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Batch</label>
                    <div class="mws-form-item">
                        <input type="text" name="batchDate" id="batchDate"class="large">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Confirmation G.O. Date</label>
                    <div class="mws-form-item">
                        <input type="text" name="goDate" id="goDate"class="large">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Religion</label>
                    <div class="mws-form-item">
                        <select class="mws-select2 small" name="lprDate" id="lprDate">
                            <option value="pos">Muslim</option>
                            <option value="pos">Hindu</option>
                            <option value="pos">Budho</option>
                            
                        </select>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Freedom Fighter</label>
                    <div class="mws-form-item">
                        <select class="mws-select2 small" name="fFiter" id="fFiter">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Child/Grand Child of Freedom Fighter</label>
                    <div class="mws-form-item">
                        <select class="mws-select2 small" name="fFiter" id="fFiter">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Option for Work  Field <span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="text" name="workField" id="workField"class="required large">
                    </div>
                </div>
            </fieldset>
            
            <fieldset class="wizard-step mws-form-inline">
                <legend class="wizard-label"><i class="icol-delivery"></i>SPOUSE INFOMATION</legend>
                <div id class="mws-form-row">
                    <label class="mws-form-label">Name in Bangla <span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="text" name="snameBangla" id="snameBangla"class="required large">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Name in English</label>
                    <div class="mws-form-item">
                        <input type="text" name="snameEnglish" id="snameEnglish"class="required  large">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Home District</label>
                    <div class="mws-form-item">
                        <select class="mws-select2 small" name="shomeDistrict" id="shomeDistrict">
                            <option value="dhk">Dhaka</option>
                            <option value="khl">Khulna</option>
                            <option value="cit">Citagong</option>
                            <option value="ran">Rangpur</option>
                        </select>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Occupation</label>
                    <div class="mws-form-item">
                        <select class="mws-select2 small" name="shomeDistrict" id="shomeDistrict">
                            <option value="dhk">Housewife</option>
                            <option value="khl">Service</option>
                            <option value="cit">Self Employed</option>
                        </select>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Designation</label>
                    <div class="mws-form-item">
                        <select class="mws-select2 small" name="shomeDistrict" id="shomeDistrict">
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
                        <select class="mws-select2 small" name="homeDistrict" id="homeDistrict">
                            <option value="dhk">Dhaka</option>
                            <option value="khl">Khulna</option>
                            <option value="cit">Citagong</option>
                            <option value="ran">Rangpur</option>
                        </select>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Location <span class="required">*</span></label>
                    <div class="mws-form-item">
                        <textarea name="semployeeLocation" id="semployeeLocation" rows="" cols="" class="required large"></textarea>
                    </div>
                </div>
                
            </fieldset>
            
            <fieldset class="wizard-step mws-form-inline">
                <legend class="wizard-label"><i class="icol-user"></i> PERMANENT ADDRESS</legend>
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
                <div id class="mws-form-row">
                    <label class="mws-form-label">Name in Bangla <span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="text" name="cnameBangla" id="cnameBangla"class="required large">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Name in English</label>
                    <div class="mws-form-item">
                        <input type="text" name="cnameEnglish" id="cnameEnglish"class="required  large">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Birth Date</label>
                    <div class="mws-form-item">
                        <input type="text" class="mws-datepicker large" name="cdob" id="cdob">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Gender <span class="required">*</span></label>
                    <div class="mws-form-item">
                        <ul class="mws-form-list">
                            <li><input type="radio" id="cmale" name="cgender" class="required"/> <label for="male">Male</label></li>
                            <li><input type="radio" id="cfemale" name="cgender"> <label for="female">Female</label></li>
                        </ul>
                        <label class="error plain" generated="true" for="gender" style="display:none"></label>
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
                                    <td><input type="checkbox"> <label>Read</label></td>
                                    <td>
                                        <input type="checkbox"> <label>Right</label>
                                    </td>
                                    <td>
                                        <input type="checkbox"> <label>Speak</label>
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
                <legend class="wizard-label"><i class="icol-delivery"></i>VESTING OF MAGISTERIAL POWER</legend>
                
                
                <div class="mws-panel grid_8" style="padding-top:30px">
                    <div class="mws-panel-header">
                        <span><i class="icon-table"></i>VESTING OF MAGISTERIAL POWER</span>
                    </div>
                    
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <thead>
                                <tr>
                                    <th>Power</th>
                                    <th>Date of Notification</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <select class="mws-select2 large" name="language" id="language" style="width: 100%;">
                                            <option value="dhk">Select Power</option>
                                            <option value="dhk">Demo 1</option>
                                            <option value="khl">Demo 2</option>
                                            <option value="cit">Demo 3</option>
                                        </select>
                                    </td>
                                    <td><input type="text" class="mws-datepicker large" name="powerDate" id="powerDate" style="width: 100%;"></td>
                                    
                                    <td> <a href="#" class="btn"><i class="icol-cross"></i> Reject</a></td>
                                </tr>
                                <tr>
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
                                            <option value="dhk">S.S.C</option>
                                            <option value="khl">H.S.C</option>
                                            <option value="dhk">B.S.C</option>
                                            
                                        </select>
                                    </td>
                                    <td><input type="text" class="large" name="powerDate" id="powerDate" style="width: 100%;"></td>
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
                        <span><i class="icon-table"></i>OTHER SERVICES (PRIOR CIVILIAN GAZETTED POST/RANK)</span>
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
                <legend class="wizard-label"><i class="icol-delivery"></i>SERVICE HISTORY</legend>
                <div class="mws-panel grid_8" style="padding-top:30px">
                    <div class="mws-panel-header">
                        <span><i class="icon-table"></i>SERVICE HISTORY</span>
                    </div>
                    
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <thead>
                                <tr>
                                    <th>Date of Govt. Service</th>
                                    <th>Date of Gazetted</th>
                                    <th>Encadrement Date</th>
                                    <th>Notional Seniority</th>
                                    <th>Cadre</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width:30%">
                                        <input type="text" class="mws-datepicker large" name="powerDate" id="powerDate" style="width: 100%;"> 
                                    </td>
                                    <td style="width:30%">
                                        <input type="text" class="mws-datepicker large" name="powerDate" id="powerDate" style="width: 100%;"> 
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
                                        <input type="text" class="mws-datepicker large" name="powerDate" id="powerDate" style="width: 100%;"> 
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