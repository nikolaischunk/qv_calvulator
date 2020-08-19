<?php

require './db_connect.php';

$wunschnote = '';
$sql = "SELECT wunschnote FROM student WHERE student_id = 1";
$results = $conn->query($sql);

if (false === $results) {
    echo mysqli_error($conn);
} else {
    $wunschnote = mysqli_fetch_assoc($results);
    $wunschnote = $wunschnote['wunschnote'];
}
?>
<?php require './header.php'; ?>

<div class="album py-5 bg-light">
    <div class="container">

        <div class="uek">
            <button type="button" data-toggle="collapse" data-target="#uek" aria-expanded="false" aria-controls="uek"
                    class="btn btn-link">UEK Noten
            </button>

            <div class="collapse" id="uek">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <div class="card-body label-mid">
                                <label class="noselect">101</label>
                                <input placeholder="4.0" type="number" id="wunschnote" name="wunschnote"
                                       required="required"
                                       min="1"
                                       max="6" step="0.1" 
                                       value="<?= htmlspecialchars($wunschnote) ?>"
                                       class="form-control rounded-pill form-control-lg sm-input">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <div class="card-body label-mid">
                                <label class="noselect">105</label>
                                <input placeholder="4.0" type="number" id="wunschnote" name="wunschnote"
                                       required="required"
                                       min="1"
                                       max="6" step="0.1" 
                                       value="<?= htmlspecialchars($wunschnote) ?>"
                                       class="form-control rounded-pill form-control-lg sm-input">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <div class="card-body label-mid">
                                <label class="noselect">223</label>
                                <input placeholder="4.0" type="number" id="wunschnote" name="wunschnote"
                                       required="required"
                                       min="1"
                                       max="6" step="0.1" 
                                       value="<?= htmlspecialchars($wunschnote) ?>"
                                       class="form-control rounded-pill form-control-lg sm-input">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <div class="card-body label-mid">
                                <label class="noselect">304</label>
                                <input placeholder="4.0" type="number" id="wunschnote" name="wunschnote"
                                       required="required"
                                       min="1"
                                       max="6" step="0.1" 
                                       value="<?= htmlspecialchars($wunschnote) ?>"
                                       class="form-control rounded-pill form-control-lg sm-input">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <div class="card-body label-mid">
                                <label class="noselect">305</label>
                                <input placeholder="4.0" type="number" id="wunschnote" name="wunschnote"
                                       required="required"
                                       min="1"
                                       max="6" step="0.1" 
                                       value="<?= htmlspecialchars($wunschnote) ?>"
                                       class="form-control rounded-pill form-control-lg sm-input">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <div class="card-body label-mid">
                                <label class="noselect">307</label>
                                <input placeholder="4.0" type="number" id="wunschnote" name="wunschnote"
                                       required="required"
                                       min="1"
                                       max="6" step="0.1" 
                                       value="<?= htmlspecialchars($wunschnote) ?>"
                                       class="form-control rounded-pill form-control-lg sm-input">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <div class="card-body label-mid">
                                <label class="noselect">335</label>
                                <input placeholder="4.0" type="number" id="wunschnote" name="wunschnote"
                                       required="required"
                                       min="1"
                                       max="6" step="0.1" 
                                       value="<?= htmlspecialchars($wunschnote) ?>"
                                       class="form-control rounded-pill form-control-lg sm-input">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="modul1">
            <button type="button" data-toggle="collapse" data-target="#modul1" aria-expanded="false"
                    aria-controls="modul1"
                    class="btn btn-link">1. LJ Modulnote
            </button>

            <div class="collapse" id="modul1">

                <div class="row">
                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <div class="card-body label-mid">
                                <label class="noselect">M403</label>
                                <input placeholder="4.0" type="number" id="wunschnote" name="wunschnote"
                                       required="required"
                                       min="1"
                                       max="6" step="0.1" 
                                       value="<?= htmlspecialchars($wunschnote) ?>"
                                       class="form-control rounded-pill form-control-lg sm-input">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <div class="card-body label-mid">
                                <label class="noselect">M404</label>
                                <input placeholder="4.0" type="number" id="wunschnote" name="wunschnote"
                                       required="required"
                                       min="1"
                                       max="6" step="0.1" 
                                       value="<?= htmlspecialchars($wunschnote) ?>"
                                       class="form-control rounded-pill form-control-lg sm-input">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <div class="card-body label-mid">
                                <label class="noselect">M100</label>
                                <input placeholder="4.0" type="number" id="wunschnote" name="wunschnote"
                                       required="required"
                                       min="1"
                                       max="6" step="0.1" 
                                       value="<?= htmlspecialchars($wunschnote) ?>"
                                       class="form-control rounded-pill form-control-lg sm-input">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <div class="card-body label-mid">
                                <label class="noselect">M104</label>
                                <input placeholder="4.0" type="number" id="wunschnote" name="wunschnote"
                                       required="required"
                                       min="1"
                                       max="6" step="0.1" 
                                       value="<?= htmlspecialchars($wunschnote) ?>"
                                       class="form-control rounded-pill form-control-lg sm-input">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <div class="card-body label-mid">
                                <label class="noselect">M123</label>
                                <input placeholder="4.0" type="number" id="wunschnote" name="wunschnote"
                                       required="required"
                                       min="1"
                                       max="6" step="0.1" 
                                       value="<?= htmlspecialchars($wunschnote) ?>"
                                       class="form-control rounded-pill form-control-lg sm-input">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <div class="card-body label-mid">
                                <label class="noselect">M117</label>
                                <input placeholder="4.0" type="number" id="wunschnote" name="wunschnote"
                                       required="required"
                                       min="1"
                                       max="6" step="0.1" 
                                       value="<?= htmlspecialchars($wunschnote) ?>"
                                       class="form-control rounded-pill form-control-lg sm-input">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <div class="card-body label-mid">
                                <label class="noselect">M431</label>
                                <input placeholder="4.0" type="number" id="wunschnote" name="wunschnote"
                                       required="required"
                                       min="1"
                                       max="6" step="0.1" 
                                       value="<?= htmlspecialchars($wunschnote) ?>"
                                       class="form-control rounded-pill form-control-lg sm-input">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="modul2">
            <button type="button" data-toggle="collapse" data-target="#modul2" aria-expanded="false"
                    aria-controls="modul2"
                    class="btn btn-link">2. LJ Modulnote
            </button>

            <div class="collapse" id="modul2">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <div class="card-body label-mid">
                                <label class="noselect">M120</label>
                                <input placeholder="4.0" type="number" id="wunschnote" name="wunschnote"
                                       required="required"
                                       min="1"
                                       max="6" step="0.1" 
                                       value="<?= htmlspecialchars($wunschnote) ?>"
                                       class="form-control rounded-pill form-control-lg sm-input">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <div class="card-body label-mid">
                                <label class="noselect">M226A</label>
                                <input placeholder="4.0" type="number" id="wunschnote" name="wunschnote"
                                       required="required"
                                       min="1"
                                       max="6" step="0.1" 
                                       value="<?= htmlspecialchars($wunschnote) ?>"
                                       class="form-control rounded-pill form-control-lg sm-input">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <div class="card-body label-mid">
                                <label class="noselect">M226B</label>
                                <input placeholder="4.0" type="number" id="wunschnote" name="wunschnote"
                                       required="required"
                                       min="1"
                                       max="6" step="0.1" 
                                       value="<?= htmlspecialchars($wunschnote) ?>"
                                       class="form-control rounded-pill form-control-lg sm-input">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <div class="card-body label-mid">
                                <label class="noselect">M153</label>
                                <input placeholder="4.0" type="number" id="wunschnote" name="wunschnote"
                                       required="required"
                                       min="1"
                                       max="6" step="0.1" 
                                       value="<?= htmlspecialchars($wunschnote) ?>"
                                       class="form-control rounded-pill form-control-lg sm-input">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <div class="card-body label-mid">
                                <label class="noselect">M151</label>
                                <input placeholder="4.0" type="number" id="wunschnote" name="wunschnote"
                                       required="required"
                                       min="1"
                                       max="6" step="0.1" 
                                       value="<?= htmlspecialchars($wunschnote) ?>"
                                       class="form-control rounded-pill form-control-lg sm-input">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <div class="card-body label-mid">
                                <label class="noselect">M133</label>
                                <input placeholder="4.0" type="number" id="wunschnote" name="wunschnote"
                                       required="required"
                                       min="1"
                                       max="6" step="0.1" 
                                       value="<?= htmlspecialchars($wunschnote) ?>"
                                       class="form-control rounded-pill form-control-lg sm-input">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <div class="card-body label-mid">
                                <label class="noselect">M114</label>
                                <input placeholder="4.0" type="number" id="wunschnote" name="wunschnote"
                                       required="required"
                                       min="1"
                                       max="6" step="0.1" 
                                       value="<?= htmlspecialchars($wunschnote) ?>"
                                       class="form-control rounded-pill form-control-lg sm-input">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modul3">
            <button type="button" data-toggle="collapse" data-target="#modul3" aria-expanded="false"
                    aria-controls="modul3"
                    class="btn btn-link">3. LJ Modulnote
            </button>

            <div class="collapse" id="modul3">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <div class="card-body label-mid">
                                <label class="noselect">M326</label>
                                <input placeholder="4.0" type="number" id="wunschnote" name="wunschnote"
                                       required="required"
                                       min="1"
                                       max="6" step="0.1" 
                                       value="<?= htmlspecialchars($wunschnote) ?>"
                                       class="form-control rounded-pill form-control-lg sm-input">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <div class="card-body label-mid">
                                <label class="noselect">M306</label>
                                <input placeholder="4.0" type="number" id="wunschnote" name="wunschnote"
                                       required="required"
                                       min="1"
                                       max="6" step="0.1" 
                                       value="<?= htmlspecialchars($wunschnote) ?>"
                                       class="form-control rounded-pill form-control-lg sm-input">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="modul4">
            <button type="button" data-toggle="collapse" data-target="#modul4" aria-expanded="false"
                    aria-controls="modul4"
                    class="btn btn-link">4. LJ Modulnote
            </button>

            <div class="collapse" id="modul4">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <div class="card-body label-mid">
                                <label class="noselect">M183</label>
                                <input placeholder="4.0" type="number" id="wunschnote" name="wunschnote"
                                       required="required"
                                       min="1"
                                       max="6" step="0.1" 
                                       value="<?= htmlspecialchars($wunschnote) ?>"
                                       class="form-control rounded-pill form-control-lg sm-input">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>

        <div class="ipa">
            <button type="button" data-toggle="collapse" data-target="#ipa" aria-expanded="false" aria-controls="ipa"
                    class="btn btn-link">IPA
            </button>
            <div class="collapse" id="ipa">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            <div class="card-body label-mid">
                                <input type="number" id="wunschnote" name="wunschnote"
                                       required="required"
                                       min="1"
                                       max="6" step="0.1"
                                       value="<?= htmlspecialchars($wunschnote) ?>"
                                       class="form-control rounded-pill form-control-lg sm-input">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>



<?php require './footer.php'; ?>
