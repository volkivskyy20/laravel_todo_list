<div>
    <form wire:submit.prevent="submit">
        @if(session()->has('success'))
            <div style="color:green">{{ session('success') }}</div>
        @endif
        <input type="hidden" wire:model="hiddenId" value="{{ $hiddenId }}">
        New Task: <br><input type="text" wire:model="task"><br>
        @error('task')
            <span style="color: red">{{ $message }}</span>
        @enderror
        <br>
        <input type="Submit" class="bg-black text-2xl text-white">
        <a href="javascript:void(0)" wire:click="addForm" class="bg-black text-2xl text-white">Add</a>

    </form>
    <h3>List</h3>

    <table>
        <tr>
            <th>#</th>
            <th>Task</th>
            <th>Action</th>
        </tr>
@php
    $i=1
@endphp
    @foreach ($alldata as $ad )
    <tr>
        <td>{{ $i }}</td>
        <td>{{ $ad->task }}</td>
        <td>
            <a href="javascript:void(0)" wire:click="editForm({{ $ad->id }})">Edit</a>
            <a href="javascript:void(0)" wire:click="deleteForm({{ $ad->id }})">Delete</a>

        </td>
    </tr>
    @php
    $i++
@endphp
    @endforeach
</table>
{{ $alldata->links() }}
</div>
