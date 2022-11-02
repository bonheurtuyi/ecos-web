<div>
    <input wire:model="search" type="text" class="form-control" placeholder="Search achievements..."/>

    <ul>
        @foreach($items as $item)
            <li>{{ $item->name }}</li>
        @endforeach
    </ul>
</div>
