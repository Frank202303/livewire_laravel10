<!-- View -->
<!-- View -->
<!-- View -->
//laravelproject\resources\views\livewire\post.blade.php
<div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        function deletePost(id) {
            if (confirm("Are you sure to delete this record?"))
                window.livewire.emit('deletePost', id);
        }
    </script>
</div>