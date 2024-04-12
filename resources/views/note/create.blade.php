<x-layout>
    <x-slot:title>
        Create Note
    </x-slot:title>

    <div class="note-container single-note">
        <h1>Create New Note</h1>
        <form action="{{ route('note.store') }}" method="post" class="note">
            @csrf
            <textarea name="note" rows="10" cols="144" placeholder="Enter your note" class="note-body"></textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>

    </div>

</x-layout>
