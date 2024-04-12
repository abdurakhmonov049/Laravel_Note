<x-layout>

    <x-slot:title>
        View Note Page
    </x-slot:title>

    <div class="note-container single-note">
        <h1>
            Note: {{ $note->created_at }}
        </h1>
        <div class="note-header">
            <div class="note-buttons">
                <a href="{{ route('note.edit', $note) }}" class="note-edit-button">
                    Edit
                </a>
                <form action="{{ route('note.destroy', $note) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="note-delete-button"
                        onclick="return confirm('Do you really delete note?')">Delete</button>
                </form>
            </div>
        </div>
        <div class="note">
            <div class="note-body">
                {{ $note->note }}
            </div>
        </div>
    </div>


</x-layout>
