@extends('master')
@section('bodycontent')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span><i class="icon-magic"></i> Registration </span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form wizard-form-vertical verticalDashboard" action="" method="POST">
           
            <fieldset class="wizard-step mws-form-inline">
                <legend class="wizard-label"><i class="icol-accept"></i>REGISTRATION INFORMATION</legend>
                <div class="mws-form-row">
                    <label class="mws-form-label">Select Role</label>
                    <div class="mws-form-item">
                        <select class="mws-select2 small" name="role" id="role">
                            <option value="1">Administrator</option>
                            <option value="2">User</option>
                        </select>
                    </div>
                </div>
                <div id class="mws-form-row">
                    <label class="mws-form-label">Name</label>
                    <div class="mws-form-item">
                        <input type="text" name="userName" id="userName"class="required large" placeholder="Type Your Name">
                    </div>
                </div>
                <div id class="mws-form-row">
                    <label class="mws-form-label">Enter Your Email<span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="text" name="email" id="email"class="required large email" placeholder="Type Your Email">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Enter Your Phone Number</label>
                    <div class="mws-form-item">
                        <input type="text" name="phoneNum" id="phoneNum"class="required  large" placeholder="Type Your Phone Number">
                    </div>
                </div>
               
                <div class="mws-form-row">
                    <label class="mws-form-label">NATIONAL ID NO<span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="text" name="nationalId" id="nationalId"class="required  large" placeholder="Type Your National ID">
                    </div>
                </div>
                
                <div class="mws-form-row">
                    <label class="mws-form-label">Enter Your Password</label>
                    <div class="mws-form-item">
                        <input type="password" name="password" id="password"class="large" placeholder="Type Your Password">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">Retype Your Password<span class="required">*</span></label>
                    <div class="mws-form-item">
                        <input type="password" name="repassword" id="repassword"class="required large" placeholder="Re-Type Your Password">
                    </div>
                </div>
                
                
            </fieldset>
            
        </form>
    </div>
</div>
@stop