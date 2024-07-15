<!-- popup  -->

    <!-- Modal Structure -->
    <div id="updateModal" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Create Schedule</h4>
                    <span class="close">&times;</span>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <section class="member">
                        <form class="mform" action="">
                            @csrf
                            <div class="input-box1">
                                <input type="text" class="form-reg-mem" id="first-name" name="first-name" required>
                                <label for="first-name">First &nbsp; Name</label>
                            </div>

                            <!--
                            <div class="input-box1">
                                <input type="text" class="form-reg-mem" id="last-name" name="last-name" required>
                                <label for="last-name">Last &nbsp; Name</label>
                            </div> -->
                             <div class="input-box1">
                                <input type="text" class="form-reg-mem" id="helth" name="helth" required>
                                <label for="helth">helth condition</label>
                            </div>
                            <div class="input-box1">
                                <input type="date" class="form-reg-mem" id="date" name="date" required>
                                <label for="date">Valid &nbsp; Date</label>
                            </div>
                            <div class="input-box1">
                                <input type="number" class="form-reg-mem" id="bmi" name="bmi" min="0" max="200" step="0.1" required>
                                <label for="bmi">BMI</label>
                            </div>
                            <div class="input-box1">
                                <label for="activity">Enter activity:</label><br><br>
                                <textarea id="activity" name="activity" rows="8" cols="50">
                                    Default text inside the textarea
                                </textarea>
                            </div>
                            <div class="input-box1">
                                <input type="checkbox" class="form-reg-mem" id="Check1" required>
                                <label for="Check1">Check me out</label>
                            </div>
                            <div class="input-box1">
                                
                                <a href="#" class="btn-custom">Update</a>

                            </div>
                        </form>
                    </section>
                </div>

                  <!--model script -->
               <!-- Modal Footer -->
               <div class="modal-footer">
                <button type="button" class="btn-danger close">Close</button>
            </div>
        </div>
    </div>
</div>
