



<!-- popup  -->

    <!-- Modal Structure -->
    <div id="member_reg_Modal" class="modal">
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
                            <div class="form-group">
                                <label for="first-name">First Name</label>
                                <input type="text" class="form-control" id="first-name" name="first-name" required>
                            </div>
                            <div class="form-group">
                                <label for="last-name">Last Name</label>
                                <input type="text" class="form-control" id="last-name" name="last-name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="age">Your Age</label>
                                <input type="number" class="form-control" id="age" name="age" min="10" max="120" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" required>
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select class="form-control" id="gender" name="gender" required>
                                    <option value="" disabled selected></option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="phone">Mobile Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" pattern="\d{10}" required>
                            </div>
                            <div class="form-group">
                                <label for="land-phone">Land Phone Number</label>
                                <input type="tel" class="form-control" id="land-phone" name="land-phone" pattern="\d{10}" required>
                            </div>
                            <div class="form-group">
                                <label for="weight">Weight (kg)</label>
                                <input type="number" class="form-control" id="weight" name="weight" min="0" max="200" step="0.1" required>
                            </div>
                            <div class="form-group">
                                <label for="height">Height (cm)</label>
                                <input type="number" class="form-control" id="height" name="height" min="0" max="200" step="0.1" required>
                            </div>
                            <div class="form-group">
                                <label for="membershipType">Membership Type</label>
                                <select class="form-control" id="membershipType" name="membershipType" required>
                                    <option value="" disabled selected></option>
                                    <option value="basic">Basic</option>
                                    <option value="premium">Premium</option>
                                    <option value="vip">VIP</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="textarea">Enter your purpose:</label>
                                <textarea id="textarea" class="form-control" name="textarea" rows="4" cols="50"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="Check1">
                                <label class="form-check-label" for="Check1">Check me out</label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-register btn-block">REGISTER</button>
                            </div>
                            <br>
                            <br>
                        </form>
                       







                    </section>
                </div>
        </div>
    </div>
</div>























    

