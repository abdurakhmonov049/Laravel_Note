<x-layout>
    <x-slot:title>
        Update Page
    </x-slot:title>

    <div class="note-container single-note">
        <h1>Update Note</h1>
        <form action="{{ route('note.update', $note) }}" method="post" class="note">
            @csrf
            @method('PUT')
            <textarea name="note" rows="10" cols="144" placeholder="Enter your note" class="note-body">
                {{ $note->note }}
            </textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Edit</button>
            </div>
        </form>

    </div>

</x-layout>
