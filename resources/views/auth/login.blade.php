<div>
    <form wire:submit.prevent="login">
        <div>
            <label for="login">Username or Email:</label>
            <input type="text" id="login" wire:model="login">
            @error('login') <span>{{ $message }}</span> @enderror
        </div>
        
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" wire:model="password">
            @error('password') <span>{{ $message }}</span> @enderror
        </div>
        
        <button type="submit">Login</button>
    </form>
</div>
