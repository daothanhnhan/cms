<?php
    $email = new action_email();
    $lien_he = $email->lien_he();
?>
<div class="gb-content-home-banner_ldplearning-left">
    <div class="gb-form-register-course_ldplearning">
        <h3>Request <span>Information</span></h3>
        <form id="" name="" class="reservation-form" method="post" action="" novalidate="novalidate">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <input placeholder="Enter Name" type="text" id="reservation_name" name="name" required="" class="form-control" aria-required="true">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input placeholder="Email" type="text" id="reservation_email" name="email" class="form-control" required="" aria-required="true">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input placeholder="Phone" type="text" id="reservation_phone" name="phone" class="form-control" required="" aria-required="true">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="styled-select">
                            <select id="person_select" name="person_select" class="form-control" required="" aria-required="true">
                                <option value="">Choose Subject</option>
                                <option value="Software Engineering">Software Engineering</option>
                                <option value="Computer Science engineering">Computer Science engineering</option>
                                <option value="Accounting Technologies">Accounting Technologies</option>
                                <option value="BACHELOR`S DEGREE">BACHELOR`S DEGREE</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group mb-20">
                        <input name="birthday" class="form-control required date-picker"  type="date" placeholder="Date Of Birth" aria-required="true">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <textarea placeholder="Enter Message" rows="3" class="form-control required" name="message" id="form_message" aria-required="true"></textarea>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group mb-0 mt-10">
                        <button type="submit" name="lien_he" class="btn btn-colored btn-theme-color-2 text-white btn-lg btn-block btn-submit-course" data-loading-text="Please wait...">Submit Request</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>