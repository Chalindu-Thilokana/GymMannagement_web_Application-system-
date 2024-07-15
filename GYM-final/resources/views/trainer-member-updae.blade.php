<!-- Member Registration Modal -->
<div id="member_update_Modal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">update Trainer</h4>
                <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <!-- Your form content -->
                <form class="mform" action="">
                    @csrf
                    <div class="input-box1">
                        <label for="first-name">Full Name</label>
                        <input type="text" class="form-control" id="first-name" name="first-name" required>
                    </div>
                    <!--
                    <div class="input-box1">
                        <label for="last-name">Last Name</label>
                        <input type="text" class="form-control" id="last-name" name="last-name" required>
                    </div> -->
                    <div class="input-box1">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="input-box1">
                        <label for="age">Your Age</label>
                        <input type="number" class="form-control" id="age" name="age" min="10" max="120" required>
                    </div>
                    <div class="input-box1">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="input-box1">
                        <label for="membershipType">experence</label>
                        <select class="form-control" id="experence" name="experence" required>
                            <option value="" disabled selected></option>
                            <option value="one">One year</option>
                            <option value="two">Two years</option>
                            <option value="more">More than two years</option>
                        </select>
                    </div>
                    <div class="input-box1">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender" required>
                            <option value="" disabled selected></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="input-box1">
                        <label for="trainingCareers">Training Careers</label>
                        <select class="form-control" id="trainingCareers" name="trainingCareers" required>
                            <option value="" disabled selected></option>
                            <option value="bodybuilding">Bodybuilding</option>
                            <option value="fitness-training">Fitness Training</option>
                        </select>
                    </div>
                    <div class="input-box1">
                        <label for="phone">Mobile Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" pattern="\d{10}" required>
                    </div>
                    <div class="input-box1">
                        <label for="land-phone">Land Phone Number</label>
                        <input type="tel" class="form-control" id="land-phone" name="land-phone" pattern="\d{10}" required>
                    </div>
                    <div class="input-box1">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="Check1">
                        <label class="form-check-label" for="Check1">Check me out</label>
                    </div>
                    <br>
                    <div class="input-box1">
                        <a href="#" class="btn btn-primary btn-custom">UPDATE</a>
                    </div>
                    <br>
                    <div class="modal-footer">
                        <a href="#" class="btn-danger close">close</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Trainer Registration Modal -->
<div id="trainer_update_Modal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">update Member</h4>
                <span class="close">&times;</span>
            </div>
            <div class="modal-body">
                <!-- Your form content -->
                <form class="mform" action="">
                    @csrf
                    <div class="input-box1">
                        <label for="first-name">First Name</label>
                        <input type="text" class="form-control" id="first-name" name="first-name" required>
                    </div>
                    <!--
                    <div class="input-box1">
                        <label for="last-name">Last Name</label>
                        <input type="text" class="form-control" id="last-name" name="last-name" required>
                    </div> -->
                    <div class="input-box1">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="input-box1">
                        <label for="age">Your Age</label>
                        <input type="number" class="form-control" id="age" name="age" min="10" max="120" required>
                    </div>
                    <div class="input-box1">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="input-box1">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender" required>
                            <option value="" disabled selected></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="input-box1">
                        <label for="phone">Mobile Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" pattern="\d{10}" required>
                    </div>
                    <div class="input-box1">
                        <label for="land-phone">Land Phone Number</label>
                        <input type="tel" class="form-control" id="land-phone" name="land-phone" pattern="\d{10}" required>
                    </div>
                    <div class="input-box1">
                        <label for="weight">Weight (kg)</label>
                        <input type="number" class="form-control" id="weight" name="weight" min="0" max="200" step="0.1" required>
                    </div>
                    <div class="input-box1">
                        <label for="height">Height (cm)</label>
                        <input type="number" class="form-control" id="height" name="height" min="0" max="200" step="0.1" required>
                    </div>
                    <div class="input-box1">
                        <label for="membershipType">Membership Type</label>
                        <select class="form-control" id="membershipType" name="membershipType" required>
                            <option value="" disabled selected></option>
                            <option value="basic">Basic</option>
                            <option value="premium">Premium</option>
                            <option value="vip">VIP</option>
                        </select>
                    </div>
                    <div class="input-box1">
                        <label for="textarea">Enter your purpose:</label>
                        <textarea id="textarea" class="form-control" name="textarea" rows="4" cols="50"></textarea>
                    </div>
                    <div class="input-box1">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="Check1">
                        <label class="form-check-label" for="Check1">Check me out</label>
                    </div>
                    <br>

                    <div class="input-box1">
                        <a href="#" class="btn btn-primary btn-custom">UPDATE</a>
                        
                    </div>
                    <br>
                    <div class="modal-footer">
                        <a href="#" class="btn-coustem">UPDATE</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function initializeModal(modalId, openBtnId) {
        const modal = document.getElementById(modalId);
        const openModalBtn = document.getElementById(openBtnId);
        const closeBtns = modal.querySelectorAll(".close");

        // Open modal when button is clicked
        openModalBtn.addEventListener('click', () => {
            modal.style.display = "block";
        });

        // Close modal when close button is clicked
        closeBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                modal.style.display = "none";
            });
        });

        // Close modal when clicking outside of the modal content
        window.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    }

    // Initialize the member registration modal
    initializeModal('member_update_Modal', 'openMemberModalBtn');

    // Initialize the trainer registration modal
    initializeModal('trainer_update_Modal', 'openTrainerModalBtn');
</script>
