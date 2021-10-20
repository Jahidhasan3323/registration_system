<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>

    <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          crossorigin="anonymous">
</head>

<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <?= alert_check() ?>
                    Registration Form
                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url('registration/store') ?>"
                          enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="division" class="form-label">Division</label>
                                <select class="form-select" id="division" name="division" required>
                                    <option value="">Select</option>
                                    <?php
                                    if (!empty($divisions)) {
                                        foreach ($divisions->result() as $division) { ?>
                                            <option value="<?= $division->id ?>"><?= $division->name ?></option>

                                        <?php }
                                    } ?>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="district" class="form-label">District</label>
                                <select class="form-select" id="district" name="district" required>
                                    <option value="">Select</option>

                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="upazila" class="form-label">Upazila</label>
                                <select class="form-select" id="upazila" name="upazila" required>
                                    <option value="">Select</option>

                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="address" required>
                        </div>
                        <div class="row">
                            <label class="form-check-label mb-3 border-bottom">Language Proficiency </label>
                            <div class="col-md-4 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="0" id="english"
                                           name="language[]">
                                    <label class="form-check-label" for="english">
                                        Enlish
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="bangla"
                                           name="language[]">
                                    <label class="form-check-label" for="bangla">
                                        Bangla
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="2" id="french"
                                           name="language[]">
                                    <label class="form-check-label" for="french">
                                        French
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="form-check-label border-bottom mb-3">Education Qualification </label>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Exam Name</label>
                                <select class="form-select" name="exam_name[]" required>
                                    <option value="">Select</option>
                                    <?php
                                    if (!empty($exams)) {
                                        foreach ($exams->result() as $exam) { ?>
                                            <option value="<?= $exam->id ?>"><?= $exam->name ?></option>

                                        <?php }
                                    } ?>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Institute</label>
                                <select class="form-select" name="institute_name[]" required>
                                    <option value="">Select</option>
                                    <?php foreach ($institutes->result() as $institute) { ?>
                                        <option value="<?= $institute->id ?>"><?= $institute->name ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Board</label>
                                <select class="form-select" name="board[]" required>
                                    <option value="">Select</option>
                                    <?php
                                    if (!empty($boards)) {
                                        foreach ($boards->result() as $board) { ?>
                                            <option value="<?= $board->id ?>"><?= $board->name ?></option>

                                        <?php }
                                    } ?>
                                </select>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Result</label>
                                <input type="number" step="0.01" class="form-control" name="result[]" required>
                            </div>
                        </div>
                        <div id="education_area"></div>
                        <div class="row mb-3 ">
                            <div class="col-md-12 mb-3 ">
                                <button type="button" class="btn btn-primary mt-4 btn-small float-end"
                                        id="add_education_area">+
                                </button>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Photo</label>
                                <input type="file" class="form-control" name="photo" required>
                            </div>
                            <div class="col-md-6">
                                <label for="name" class="form-label">CV</label>
                                <input type="file" class="form-control" name="cv" required>
                            </div>
                        </div>
                        <div class="row">
                            <label class="form-check-label border-bottom mb-3">Training </label>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input " type="radio" name="training"
                                               id="training_no" value="0" checked>
                                        <label class="form-check-label" for="training_no">
                                            No
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input " type="radio" name="training" value="1"
                                               id="training_yes">
                                        <label class="form-check-label" for="training_yes">
                                            Yes
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="training_area" style="display: none;">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" name="training_name[]">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Details</label>
                                    <textarea name="training_details[]" class="form-control" rows="1"></textarea>
                                </div>
                            </div>
                            <div id="training_area"></div>
                            <div class="row mb-3 ">
                                <div class="col-md-12 mb-3 ">
                                    <button type="button" class="btn btn-primary mt-4 btn-small float-end"
                                            id="add_training_area">+
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3 ">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap JavaScript -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
<script>
    $('input:radio[name="training"]').change(function () {
        console.log($(this).val());
        if ($(this).val() == '1') {
            $(".training_area").show();
        } else {
            $(".training_area").hide();
        }
    });
    // apend field for eduction
    $("#add_education_area").click(function () {
        $("#education_area").append(
            '<div class="row education" > <div class="col-md-3 mb-3"> <label class="form-label">Exam Name</label> <select class="form-select" name="exam_name[]" required> <option value="">Select</option> <?php foreach ($exams->result() as $exam) { ?> <option value="<?= $exam->id ?>"><?= $exam->name ?></option> <?php } ?> </select> </div> <div class="col-md-3 mb-3"> <label class="form-label">Institute</label> <select class="form-select" name="institute_name[]" required> <option value="">Select</option> <?php foreach ($institutes->result() as $institute) { ?> <option value="<?= $institute->id ?>"><?= $institute->name ?></option> <?php } ?> </select> </div> <div class="col-md-3 mb-3"> <label class="form-label">Board</label> <select class="form-select" name="board[]" required> <option value="">Select</option> <?php foreach ($boards->result() as $board) { ?> <option value="<?= $board->id ?>"><?= $board->name ?></option> <?php } ?> </select> </div> <div class="col-md-2 mb-3"> <label class="form-label">Result</label> <input type="text" class="form-control" name="result[]" required> </div><div class="col-md-1 mt-4"><a  class="btn btn-danger btn-sm delete-row pull-right">-</a></div> </div>'
        );
        // remove education field
        $("#education_area").on('click', '.delete-row', function () {
            $(this).closest(".education").remove();
        });
    });
    // append field for training
    $("#add_training_area").click(function () {
        $("#training_area").append(
            '<div class="row training"> <div class="col-md-5 mb-3"> <label class="form-label">Name</label> <input type="text" class="form-control" name="training_name[]" > </div> <div class="col-md-6 mb-3"> <label class="form-label">Details</label> <textarea name="training_details[]" class="form-control" rows="1" ></textarea> </div><div class="col-md-1 mt-4"><a  class="btn btn-danger btn-sm delete-row pull-right">-</a></div></div>'
        )
    });
    // remove training field
    $("#training_area").on('click', '.delete-row', function () {
        $(this).closest(".training").remove();
    });
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
                    op += '<option value="0" selected disabled>chose data</option>';
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
                    op += '<option value="0" selected disabled>chose data</option>';
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
</body>

</html>