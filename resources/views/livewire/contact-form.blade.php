<div style="margin:100px;">
    <form wire:submit.prevent="submitForm" action="/">
        <h1>SIGN UP</h1>
        <div>
            <i></i>
        </div>
        <div>
            {{ $username }}
            <div>
                <label for="uname"><strong>Username</strong></label>
                <input wire:model.defer="username"type="text" placeholder="Enter Username" name="uname" required><br>
                <label for="mail"><strong>E-mail</strong></label>
                <input wire:model.defer="email" type="text" placeholder="Enter E-mail" name="mail" required><br>
                <label for="psw"><strong>Password</strong></label>
                <input wire:model.defer="password" type="password" placeholder="Enter Password" name="psw" required><br>
            </div><br>
            <button type="submit"><strong>SIGN UP</strong></button><br>
    </form>
    <br>
</div>
