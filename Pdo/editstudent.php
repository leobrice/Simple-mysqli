<!-- Modal -->
<div class="modal fade" id="edit_<?php echo $value['student_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./action/edit.php?id=<?php echo $value['student_id']; ?>" method="post">
                    <div class="row">
                        <label for="std_name" class="col-3">Name</label>
                        <div class="col-9">
                            <input type="text" class="form-control" name="std_name" id="" value="<?php echo $value['student_name'] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <label for="email" class="col-3">Email</label>
                        <div class="col-9">
                            <input type="text" class="form-control" name="email" id="" value="<?php echo $value['student_email'] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <label for="age" class="col-3">Age</label>
                        <div class="col-9">
                            <input type="text" class="form-control" name="age" id="" value="<?php echo $value['student_age'] ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="clear" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="submit"  class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>