@include('component.navigation')









<section class="member" id="">
    <form class="mfrom" action="">
        <h2>trainer register</h2>

      
                
        <div class="input-box1">
            <input type="text" class="form-reg-mem" id="first-name" name="first-name" required>
            <label for="first-name">Full Name</label>
        </div>
             <!-- 
        <div class="input-box1">
            <input type="text" class="form-reg-mem" id="last-name" name="last-name" required>
            <label for="last-name">Last Name</label>
        </div> -->


        <div class="input-box1">
            <input type="email" class="form-reg-mem" id="address" name="address" required>
            <label for="address">Email</label>
        </div>

        <div class="input-box1">
            
            <input type="number" class="form-reg-mem" id="birth" name="birth"  min="10" max="120" step="1"  required>
            
            <label for="birth">Your Age</label>
        </div>
              
        <div class="input-box1">
            <input type="text" class="form-reg-mem" id="address" name="address" required>
            <label for="address">Address</label>
        </div>
              
        <div class="input-box1">
            <input type="tel" class="form-reg-mem" id="phone" name="phone" pattern="\d{10}" required>
            <label for="phone">Mobile Phone Number</label>
        </div>
              
        <div class="input-box1">
            <input type="tel" id="land-phone" name="land-phone" pattern="\d{10}" class="form-reg-mem" required>
            <label for="land-phone">Land Phone Number</label>
        </div>

        <div class="input-box1">
            <label for="membershipType">Membership Type</label>
            <select class="form-reg-mem" id="membershipType" name="membershipType" required>
                <option value="" disabled selected></option>
                <option value="one">One year</option>
                <option value="two">Two years</option>
                <option value="more">More than two years</option>
            </select>
        </div>
        <div class="input-box1">
            <label for="gender">Gender</label>
            <select class="form-reg-mem" id="gender" name="gender" required>
                <option value="" disabled selected></option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="input-box1">
            <label for="trainingCareers">Training Careers</label>
            <select class="form-reg-mem" id="trainingCareers" name="trainingCareers" required>
                <option value="" disabled selected></option>
                <option value="bodybuilding">Bodybuilding</option>
                <option value="fitness-training">Fitness Training</option>
            </select>
        </div>
              
   

     
             
        <div class="input-box1">
            <input type="password" class="form-reg-mem" id="password" name="password" required>
            <label for="password">Password</label>
        </div>
        
        <div class="input-box1">
            <input type="checkbox" class="form-reg-mem" id="Check1">
            <label for="Check1">Check me out</label>
        </div>

        <div class="input-box1">
            <button type="submit" class="btn2">REGISTER</button>
        </div>
    </form>

    <script>
        document.querySelectorAll('label').forEach(label => {
            label.innerHTML = label.innerText.split('').map((letter, i) => 
                `<span style="transition-delay:${i * 50}ms">${letter}</span>`
            ).join('');
        });
    </script>
</section>

