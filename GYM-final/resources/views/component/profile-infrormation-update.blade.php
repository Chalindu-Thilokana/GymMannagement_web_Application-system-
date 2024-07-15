<section class="member" id="">
    <form class="mfrom" action="">
        <h2>Edit profile details</h2>


        <div class="input-box1">
            <input type="email" class="form-reg-mem" id="email" name="email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-box1">
            <input type="text" class="form-reg-mem" id="name" name="name" required>
            <label for="name">full name</label>
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