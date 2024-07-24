<div class="card">
    <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="" name="email">
        <label for="floatingInput" class="ionic"><ion-icon class="ionic" name="mail-outline"></ion-icon> <span style="margin-left: 10px" class="ionic">Email</span></label>
    </div>
</div>
@error('email')
    <div class="error" style="color: red; font-size: 1rem">{{ $message }}</div>
@enderror