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