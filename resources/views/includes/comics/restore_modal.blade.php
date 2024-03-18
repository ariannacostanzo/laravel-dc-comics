<div class="my-modal-layout d-none" id="restore-modal">
    <div class="my-modal">
        <p>
            Are you sure you want to restore the comic <strong>{{$comic->title}}</strong> ?
        </p>
        <button id="restore-close-btn" class="close-btn"><i class="fa-solid fa-x"></i></button>
        <form class="btn-div justify-between" 
         action="{{route('comics.restore', $comic->id)}}" 
         method="POST" id="confirm-restore">
        @csrf
        @method('PATCH')
        <button id="restore-confirm-btn" type="submit">Confirm</button>
        <button id="restore-cancel-btn" class="secondary" type="button">Cancel</button>
        </form>
    </div>
</div>