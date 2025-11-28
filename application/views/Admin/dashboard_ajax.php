<?php include('header.php'); ?>

<div class="container mb-3" style="margin-top:50px">
    <h1>welcome admin *,_,* </h1>
    <div class="alert alert-success" style="display: none;"></div>
    <button id="btnAdd" class="btn btn-success">Add New</button>

    <div class="table">
        <table class="table table-bordered table-responsive" style="margin-top: 20px;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Article Title</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody id="showData">
                <!-- your dynamic rows will go here -->
            </tbody>
        </table>
    </div>
</div>

<!-- Add New Article Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Add New Article</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form id="addForm">
                    <div class="mb-3">
                        <label class="form-label">Article Title</label>
                        <input type="text" class="form-control" id="article_title" name="article_title" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Article Body</label>
                        <textarea class="form-control" id="article_body" name="article_body" rows="4"></textarea>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btnSave">Save</button>
            </div>

        </div>
    </div>
</div>

<?php include('footer.php'); ?>

<script>
    showAllEmployee();
    $(document).ready(function() {
        $('#btnAdd').click(function() {
            $('#addModal').modal('show');
        });
    });

    function showAllEmployee() {
        $.ajax({
            type: 'ajax',
            url: '<?php echo base_url() ?>Admin/showAllEmployee',
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += `
                    <tr>
                        <td>${data[i].id}</td>
                        <td>${data[i].article_title}</td>
                        <td>
                            <button class="btn btn-primary btn-sm">Edit</button>
                        </td>
                        <td>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                `;
                }
                $('#showData').html(html);
            },
            error: function() {
                alert('error');
            }
        });
    }
</script>