
        @if($success)
            <span class="success">{{ $success }}</span>
        @endif
<form id="appointment" wire:submit.prevent="saveAppointment">
    <fieldset>
        <div class="row">
            <div class="col-lg-12 mb-12">
                <input class="from-control" type="text" wire:model="name" placeholder="Name">
                @error('name') <span class="pl-20 error">{{ $message }}</span> @enderror
            </div>
            <div class="col-lg-12 mb-12">
                <input class="from-control" type="text" wire:model="email" placeholder="E-Mail" required="">
                @error('email') <span class="pl-20 error">{{ $message }}</span> @enderror
            </div>
            <div class="col-lg-12 mb-12">
                <input class="from-control" type="text" wire:model="phone" placeholder="Phone Number" required="">
                @error('phone') <span class="pl-20 error">{{ $message }}</span> @enderror
            </div>
            <div class="col-lg-12 mb-12">
                <textarea class="from-control" wire:model="message" placeholder="Enter Query Here" required=""></textarea>
                @error('message') <span class="pl-20 error">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group mb-0">
            <input id="submitBtn" class="submit-btn" type="submit" value="Book Appointment Now">
        </div>
    </fieldset>
</form>
