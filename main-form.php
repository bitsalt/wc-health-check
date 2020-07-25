<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Container fluid  -->
    <div class="container-fluid">

        <!-- Start Page Content -->
        <div id="wc-content" class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header"><php echo $alertMsg; ?></div>

                    <div class="card-body">
                        <h5>Before reporting to work, you must complete the daily health screening which includes
                            COVID-19 symptom questions and a temperature check.</h5>
                        <br><h5>By answering the symptom screening questions and entering your temperature you are
                            confirming you do not have symptoms of COVID-19 and you do not have a temperature
                            greater than 100.4 degrees.</h5>
                        <br><h5>You must answer all of the questions below.</h5>

                        <form id="chromeForm" class="form-material m-t-40" action="/" method="post">
                            <input type="hidden" id="token" name="token" value="<?php echo $_SESSION["token"]; ?>" />


                            <div class="form-group row p-t-20">
                                <div class="col-sm-8">
                                    <div class="m-b-10">
                                        <strong>1. </strong>
                                        Have you had close contact (within 6 feet for at least 15 minutes) in the last
                                        14 days with someone diagnosed with COVID-19, or has any health department or
                                        health care provider advised you to quarantine?
                                        <label class="custom-control custom-radio m-l-15">
                                            <input id="radio1" name="q_1" type="radio" class="custom-control-input" value="1">
                                            <span class="custom-control-label">Yes</span>
                                        </label>
                                    </div>
                                    <div class="m-b-20">
                                        <label class="custom-control custom-radio m-l-15">
                                            <input id="radio2" name="q_1" type="radio" class="custom-control-input" value="0">
                                            <span class="custom-control-label">No</span>
                                        </label>
                                    </div>

                                    <div class="m-b-10">
                                        <strong>2. </strong>
                                        Within the past 10 days, have you been diagnosed with COVID-19?
                                        <label class="custom-control custom-radio m-l-15">
                                            <input id="radio3" name="q_2" type="radio" class="custom-control-input" value="1">
                                            <span class="custom-control-label">Yes</span>
                                        </label>
                                    </div>
                                    <div class="m-b-20">
                                        <label class="custom-control custom-radio m-l-15">
                                            <input id="radio4" name="q_2" type="radio" class="custom-control-input" value="0">
                                            <span class="custom-control-label">No</span>
                                        </label>
                                    </div>

                                    <div class="m-b-10">
                                        <strong>3. </strong>
                                        Do you have a fever (100.4° or higher) or chills?
                                        <label class="custom-control custom-radio m-l-15">
                                            <input id="radio5" name="q_3" type="radio" class="custom-control-input" value="1">
                                            <span class="custom-control-label">Yes</span>
                                        </label>
                                    </div>
                                    <div class="m-b-20">
                                        <label class="custom-control custom-radio m-l-15">
                                            <input id="radio6" name="q_3" type="radio" class="custom-control-input" value="0">
                                            <span class="custom-control-label">No</span>
                                        </label>
                                    </div>

                                    <div class="m-b-10">
                                        <strong>4. </strong>
                                        Do you have a new cough (unrelated to allergies)?
                                        <label class="custom-control custom-radio m-l-15">
                                            <input id="radio7" name="q_4" type="radio" class="custom-control-input" value="1">
                                            <span class="custom-control-label">Yes</span>
                                        </label>
                                    </div>
                                    <div class="m-b-20">
                                        <label class="custom-control custom-radio m-l-15">
                                            <input id="radio8" name="q_4" type="radio" class="custom-control-input" value="0">
                                            <span class="custom-control-label">No</span>
                                        </label>
                                    </div>

                                    <div class="m-b-10">
                                        <strong>5. </strong>
                                        Do you have a new shortness of breath or difficulty breathing?
                                        <label class="custom-control custom-radio m-l-15">
                                            <input id="radio9" name="q_5" type="radio" class="custom-control-input" value="1">
                                            <span class="custom-control-label">Yes</span>
                                        </label>
                                    </div>
                                    <div class="m-b-20">
                                        <label class="custom-control custom-radio m-l-15">
                                            <input id="radio10" name="q_5" type="radio" class="custom-control-input" value="0">
                                            <span class="custom-control-label">No</span>
                                        </label>
                                    </div>

                                    <div class="m-b-10">
                                        <strong>6. </strong>
                                        Do you have a new loss of taste or smell?
                                        <label class="custom-control custom-radio m-l-15">
                                            <input id="radio11" name="q_6" type="radio" class="custom-control-input" value="1">
                                            <span class="custom-control-label">Yes</span>
                                        </label>
                                    </div>
                                    <div class="m-b-20">
                                        <label class="custom-control custom-radio m-l-15">
                                            <input id="radio12" name="q_6" type="radio" class="custom-control-input" value="0">
                                            <span class="custom-control-label">No</span>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label><strong>7. </strong>You must take your temperature before reporting to work. Enter your temperature:</label>
                                        <input type="text" class="form-control form-control-line m-l-15" name="q_7" size="25" maxlength="5" placeholder="ex. 98.6"> </div>


                                </div>
                            </div>


                            <button id="submitButton" type="submit" class="btn btn-success waves-effect waves-light m-r-10" >Submit</button>


                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- End Page Content -->

    </div> <!-- End Container fluid  -->
    <footer class="footer">
        © 2020 Wake County School System
    </footer>
</div>
<!-- End Page wrapper  -->


