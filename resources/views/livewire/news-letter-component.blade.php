<form wire:submit.prevent="saveNewsLetter">
    @csrf
    <p>
        <input type="email" wire:model="email" placeholder="Your email address">
         @error('email') <span class="error">{{ $message }}</span> @enderror
        <input type="submit" value="Subscribe Now">
    </p>
    @if($success)
     <span class="success">{{ $success }}</span>
    @endif
</form>
