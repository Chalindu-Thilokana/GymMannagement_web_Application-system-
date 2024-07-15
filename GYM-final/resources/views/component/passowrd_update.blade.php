<section class="member" id="">
    <form class="mfrom" action="">
        <h2>update password</h2>


  
        <div class="input-box1">
            <input type="password" class="form-reg-mem" id="current_password" name="password" required>
            <label for="current_password">current_password</label>
        </div>
        <div class="input-box1">
            <input type="password" class="form-reg-mem" id="password" name="password" required>
            <label for="password"> New Password</label>
        </div>
        <div class="input-box1">
            <input type="password" class="form-reg-mem" id="password_confirmation" name="password" required>
            <label for="password_confirmation"> confrem password</label>
        </div>
      
       

     

       

        <div class="input-box1">
            <button type="submit" class="btn2">update</button>
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