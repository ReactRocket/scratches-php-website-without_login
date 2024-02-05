<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Notes In Clouds</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="Notes.php" method="POST">
                    <div class="form-group">
                        <label for="title">Note Title</label>
                        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                    </div>

                    <div class="form-group">
                        <label for="desc">Note Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-info">Add Note</button>
                </form>
            </div>

        </div>
    </div>
</div>