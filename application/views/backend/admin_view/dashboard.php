<div class="content">
    <div class="panel panel-default">
        <div class="panel-heading">Filter</div>
        <div class="panel-body">
            <form method="get" action="">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="division" class="form-label">Division</label>
                        <select class="form-control" id="division" name="division">
                            <option value>Select</option>
                            <?php
                            if (!empty($divisions)) {
                                foreach ($divisions->result() as $division) { ?>
                                    <option value="<?= $division->id ?>"><?= $division->name ?></option>

                                <?php }
                            } ?>
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="district" class="form-label">District</label>
                        <select class="form-control" id="district" name="district">
                            <option value>Select</option>

                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="upazila" class="form-label">Upazila</label>
                        <select class="form-control" id="upazila" name="upazila">
                            <option value>Select</option>

                        </select>
                    </div>
                    <div class="col-md-3 mt-20">
                        <button class="btn btn-info" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row mt-5">
                <div class="col-md-12 ">
                    <table id="example1" class="table table-bordered table-hover table-striped">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Division</th>
                            <th>Disthict</th>
                            <th>Upazila</th>
                            <th>Insert Date</th>
                        </tr>
                        <?php
                        if (!empty($users)) {
                            foreach ($users->result() as $user) { ?>
                                <tr>
                                    <td><?= $user->name ?></td>
                                    <td><?= $user->email ?></td>
                                    <td><?= $user->division_name ?></td>
                                    <td><?= $user->district_name ?></td>
                                    <td><?= $user->upazila_name ?></td>
                                    <td><?= $user->created_at ?></td>
                                </tr>
                            <?php }
                        } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    // apend field for eduction
    $(document).ready(function () {
        //get distric
        $(document).on('change', '#division', function () {
            var division_id = $(this).val();
            var div = $(this).parent().parent().parent();
            var op = " ";
            $.ajax({
                type: 'get',
                url: '<?php echo base_url('district') ?>',
                data: {
                    'id': division_id
                },
                success: function (data) {
                    var data = $.parseJSON(data)
                    op += '<option value>chose data</option>';
                    for (var i = 0; i < data.length; i++) {
                        op += '<option  value="' + data[i].id + '">' + data[i].name +
                            '</option>';
                    }
                    div.find('#district').html(" ");
                    div.find('#district').append(op);
                },
                error: function () {
                }
            });
        });

        //get upazila
        $(document).on('change', '#district', function () {
            var district_id = $(this).val();
            var div = $(this).parent().parent().parent();
            var op = " ";
            $.ajax({
                type: 'get',
                url: '<?php echo base_url('upazila') ?>',
                data: {
                    'id': district_id
                },
                success: function (data) {
                    var data = $.parseJSON(data)
                    op += '<option value>chose data</option>';
                    for (var i = 0; i < data.length; i++) {
                        op += '<option  value="' + data[i].id + '">' + data[i].name +
                            '</option>';
                    }
                    div.find('#upazila').html(" ");
                    div.find('#upazila').append(op);
                },
                error: function () {
                }
            });
        });
    });
</script>
