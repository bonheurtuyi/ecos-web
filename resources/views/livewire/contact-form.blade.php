@if($success)
    <span class="success">{{ $success }}</span>
@endif
<form id="contacts" wire:submit.prevent="saveMessage">

    @csrf
    <fieldset>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                <input class="from-control" type="text" wire:model="name"
                       placeholder="Your Name">
                @error('name') <span class="pl-20 error">{{ $message }}</span> @enderror
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                <input class="from-control" type="text" wire:model="email"
                       placeholder="E-Mail">
                @error('email') <span class="pl-20 error">{{ $message }}</span> @enderror
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                <input class="from-control" type="text" wire:model="phone"
                       placeholder="Phone Number" >
                @error('phone') <span class="pl-20 error">{{ $message }}</span> @enderror
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                <input class="from-control" type="text" wire:model="subject"
                       placeholder="Subject">
                @error('subject') <span class="pl-20 error">{{ $message }}</span> @enderror
            </div>

            <div class="col-lg-12 mb-35">
                <textarea class="from-control" wire:model="message"
                          placeholder="Your message Here" ></textarea>
                @error('message') <span class="pl-20 error">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="btn-part">
            <div class="form-group mb-0">
                <input class="readon submit" type="submit" value="Send Message">
            </div>
        </div>
    </fieldset>
</form>
