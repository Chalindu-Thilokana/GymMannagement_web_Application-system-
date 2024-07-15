@include('component.navigation')

  
  










<section class="member" id="">
    <form class="mfrom" action="">
        <h2>Member Register</h2>

      
                
        <div class="input-box1">
            <input type="text" class="form-reg-mem" id="first-name" name="first-name" required>
            <label for="first-name">First &nbsp; Name</label>
        </div>
              
        <div class="input-box1">
            <input type="text" class="form-reg-mem" id="last-name" name="last-name" required>
            <label for="last-name">Last &nbsp; Name</label>
        </div>


        <div class="input-box1">
            <input type="email" class="form-reg-mem" id="address" name="address" required>
            <label for="address">Email</label>
        </div>

        <div class="input-box1">
            
            <input type="number" class="form-reg-mem" id="birth" name="birth"  min="10" max="120" step="1"  required>
            
            <label for="birth">Your &nbsp; Age</label>
        </div>

        <div class="input-box1">

            <select class="form-reg-mem" id="gender" name="gender" required>
                <option value="" disabled selected></option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            <label for="gender"> Gender</label>



        </div>
              
        <div class="input-box1">
            <input type="text" class="form-reg-mem" id="address" name="address" required>
            <label for="address">Address</label>
        </div>


   
              
        <div class="input-box1">
            <input type="tel" class="form-reg-mem" id="phone" name="phone" pattern="\d{10}" required>
            <label for="phone">Mobile &nbsp; Phone &nbsp; Number</label>
        </div>
              
        <div class="input-box1">
            <input type="tel" id="land-phone" name="land-phone" pattern="\d{10}" class="form-reg-mem" required>
            <label for="land-phone">Land &nbsp; Phone &nbsp; Number</label>
        </div>
              
        <div class="input-box1">
            <input type="number" class="form-reg-mem" id="weight" name="weight" min="0" max="200" step="0.1" required>
            <label for="weight">Weight (kg)</label>
        </div>
              
        <div class="input-box1">
            <input type="number" class="form-reg-mem" id="height" name="height" min="0" max="200" step="0.1" required>
            <label for="height">Height (cm)</label>
        </div>

        <div class="input-box1">
            <select class="form-reg-mem" id="membershipType" name="membershipType" required>
                <option value="" disabled selected></option>
                <option value="basic">Basic</option>
                <option value="premium">Premium</option>
                <option value="vip">VIP</option>
            </select>
            <label for="membershipType">Membership &nbsp; Type</label>
        </div>
        <div class="input-box1">

            
         <textarea id="textarea" name="textarea" rows="4" cols="50"></textarea>
         <label for="textarea">Enter your prepose :</label>


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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>