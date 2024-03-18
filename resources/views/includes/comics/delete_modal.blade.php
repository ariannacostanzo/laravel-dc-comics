<div class="my-modal-layout d-none" id="delete-modal">
    <div class="my-modal">
        <p>
            Are you sure you want to delete the comic <strong>{{$comic->title}}</strong> ?
        </p>
        <button id="delete-close-btn" class="close-btn"><i class="fa-solid fa-x"></i></button>
        <form class="btn-div justify-between" 
        {{-- se il comic è nel cestino lo elimino totalmente, altrimenti lo metto nel cestino --}}
        @if($isTrashed) action="{{route('comics.drop', $comic->id)}}" @else action="{{route('comics.destroy', $comic->id)}}" @endif
         method="POST" id="confirm-delete">
        @csrf
        @method('DELETE')
        <button id="delete-confirm-btn" type="submit">Confirm</button>
        <button id="delete-cancel-btn" class="secondary" type="button">Cancel</button>
        </form>
    </div>
</div>