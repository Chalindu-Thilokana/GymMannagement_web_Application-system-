<!-- popup  -->

    <!-- Modal Structure -->
    <div id="viewModal" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Create Schedule</h4>
                    <span class="close">&times;</span>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <section class="membe">
                        <form class="mfor" action="">
                            @csrf
                            
                            <div class="input-box1">
                                <label for="activity">your activity:</label><br><br>
                                <textarea id="activity" name="activity" rows="8" cols="50">
                                    Default text inside the textarea
                                </textarea>
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
