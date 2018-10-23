<?php
require_once('paprec_config.php');

$sizeRange = null;

if (isset($_GET['sizeRange'])) {
    $sizeRange = $_GET['sizeRange'];
}
?>
<meta charset="utf-8">
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Fonts Ciruclar -->
<link href="fonts/CircularStd-Book/styles.css" rel="stylesheet" type="text/css">
<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- plugin datepicker -->
<link href="js/plugins/datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">


<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">

<!-- Responsive CSS -->
<link href="css/responsive.css" rel="stylesheet">
<style>
  .datepicker table tr td.disabled, .datepicker table tr td.disabled:hover {
    color: #ddd !important;
  }
</style>

<div class="page-form-contact">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <div class="bloc-title">
          <h4 class="text-left">être rappelé</h4>
          <p class="text-left">Vous souhaitez des précisions sur notre offre !</p>
        </div>
        <div id="errorAlert" class="alert alert-danger" role="alert" style="display:none">Vous devez remplir tous les
          champs obligatoires
        </div>
      </div>
      <!-- /.col-sm-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <form id="addCallForm" class="form-horizontal" method="post"
              action="<?php echo EASY_RECYCLAGE_STORE_URL; ?>/souscription/ajoutRappel?sizeRange=<?php echo $sizeRange; ?>">
          <div class="row">
            <div class="col-sm-2">
              <img class="img-responsive img-portfolio img-hover hidden-xs"
                   src="images/form-rappel/picto-form-contact-business.png" alt="">
            </div>
              <?php
              /*
              ?>
<!--                        <div class="col-sm-5">-->
<!--                          <div class="form-group">-->
<!--                            <div class="form-group">-->
<!--                              <input type="text" class="form-control" placeholder="SIRET" name="siret" id="siretInput">-->
<!--                            </div>-->
<!--                          </div>-->
<!--                        </div>-->
              */
              ?>
            <div class="col-sm-10">
              <div class="form-group">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="SOCIETE*" name="companyName"
                         id="companyNameInput">
                </div>
              </div>
            </div>
          </div><!-- /.row -->
          <hr>
          <div class="row">
            <div class="col-sm-12 visible-xs">
              <img class="img-responsive img-portfolio img-hover hidden-xs"
                   src="images/form-rappel/picto-form-contact-man.png" alt="">
            </div>
            <div class="col-xs-5 col-sm-offset-2">
              <div class="form-group">
                <div class="radio">
                  <label>
                    <input type="radio" name="title" value="male" checked>
                    MONSIEUR
                  </label>
                </div>
              </div>
            </div>
            <div class="col-xs-5">
              <div class="form-group">
                <div class="radio">
                  <label>
                    <input type="radio" name="title" value="female">
                    MADAME
                  </label>
                </div>
              </div>
            </div>
          </div><!-- /.row -->
          <div class="row">
            <div class="col-sm-2 hidden-xs">
              <img class="img-responsive img-portfolio img-hover hidden-xs"
                   src="images/form-rappel/picto-form-contact-man.png" alt="">
            </div>
            <div class="col-sm-5">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="NOM*" name="lastName" id="lastNameInput">
              </div>
            </div>
            <div class=" col-sm-5">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="PRENOM " name="firstName">
              </div>
            </div>
          </div><!-- /.row -->
          <hr>
          <div class="row">
            <div class="col-sm-2">
              <img class="img-responsive img-portfolio img-hover hidden-xs"
                   src="images/form-rappel/picto-form-contact-email.png"
                   alt="">
            </div>
            <div class="col-sm-10">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="E-MAIL*" name="email"
                       id="emailInput">
              </div>
            </div>
          </div><!-- /.row -->
          <hr>
          <div class="row">
            <div class="col-sm-2">
              <img class="img-responsive img-portfolio img-hover hidden-xs"
                   src="images/form-rappel/picto-form-contact-phone.png" alt="">
            </div>
            <div class="col-sm-10">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="NUMERO DE TELEPHONE*" name="phoneNumber"
                       id="phoneNumberInput">
              </div>
            </div>
          </div><!-- /.row -->
          <hr>
          <div class="row">
            <div class="col-sm-10 col-sm-offset-2">
              <h5 class="text-left text-uppercase">heure souhaitée pour le rappel</h5>
            </div>
          </div><!-- /.row -->
          <div class="row">
            <div class="col-sm-2">
              <img class="img-responsive img-portfolio img-hover hidden-xs"
                   src="images/form-rappel/picto-form-contact-day.png" alt="">
            </div>
            <div class="col-xs-6 col-sm-5">
              <div class="input-group date">
                <input type="text" class="form-control datepicker" name="dateCall">
                <div class="input-group-addon">
                  <span class="glyphicon glyphicon-th"></span>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-5">
              <select id="timeCall" class="form-control" name="timeCall">
                <option value="9">8h - 9h</option>
                <option value="10">9h - 10h</option>
                <option value="11">10h - 11h</option>
                <option value="12">11h - 12h</option>
                <option value="13">12h - 13h</option>
                <option value="14">13h - 14h</option>
                <option value="15">14h - 15h</option>
                <option value="16">15h - 16h</option>
                <option value="17">16h - 17h</option>
                <option value="18">17h - 18h</option>
                <option value="19">18h - 19h</option>
              </select>
            </div>
          </div><!-- /.row -->
            <?php
            /*
          <div class="row">
            <div class="col-sm-12">
              <div class="g-recaptcha" data-sitekey="6Lf0NgcUAAAAAMUAfiC8h8qv6GDg4I-ycs3godTW"></div>
            </div>
          </div><!-- /.row -->
            */
            ?>
          <div class="row">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-default pull-right">Valider</button>
            </div>
          </div><!-- /.row -->

        </form>
      </div>
      <!-- /.col-sm-12 -->
    </div>
    <!-- /.row -->
  </div><!-- /.container -->
</div><!-- /.page-form-contact -->

<!-- jQuery -->
<script src="js/jquery-2.1.3.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- plugin datepicker -->
<script src="js/plugins/datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="js/plugins/datepicker/locales/bootstrap-datepicker.fr.min.js"></script>
<script src="js/moment.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>

<script>
    jQuery(function () {

        $('.datepicker').datepicker({
            format: 'dd/mm/yyyy',
            startDate: '0m',
            language: 'fr',
            daysOfWeekDisabled: '06',
            todayHighlight: true
        }).datepicker("setDate", "0")
            .on('change', function () {
                var day = moment($(this).val(), 'DD/MM/YYYY').format('YYYY-MM-DD');
                if (day <= moment().format('YYYY-MM-DD')) {
                    var currentHour = moment().format('H');
                    var selected = false;
                    $('#timeCall option').each(function () {
                        if (parseInt($(this).val()) < parseInt(currentHour) + 1) {
                            $(this).prop('disabled', true);
                        }
                        if (parseInt($(this).val()) > parseInt(currentHour) && !selected) {
                            $('#timeCall').val($(this).val());
                            selected = true;
                        }
                    });
                }
                else {
                    $('#timeCall option').prop('disabled', false);
                }
            }).change();

        $('#addCallForm').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                url: $(this).prop('action'),
                method: 'POST',
                data: $(this).serialize(),
                dataType: 'json'
            }).done(function (data) {

                if (data.response == 'success') {
                    parent.jQuery.fancybox({
                        content: '<h4 class="text-center">Votre demande a bien été prise en compte, un conseiller va prendre contact avec vous au créneau que vous avez choisi</h4>',
                        maxWidth: 800,
                        maxHeight: 700,
                        closeBtn: false
                    });
                }
                else if (data.error == 'companyNameNotValid') {
                    $('#errorAlert').html('Le champs société est obligatoire').show();
                    $('#companyNameInput').addClass('input-error');
                }
                else if (data.error == 'lastNameNotValid') {
                    $('#errorAlert').html('Le champs nom est obligatoire').show();
                    $('#lastNameInput').addClass('input-error');
                }
                else if (data.error == 'emailNotValid') {
                    $('#errorAlert').html("L'e-mail n'est pas valide").show();
                    $('#emailInput').addClass('input-error');
                }
                else if (data.error == 'phoneNumberNotValid') {
                    $('#errorAlert').html("Le téléphone n'est pas valide").show();
                    $('#phoneNumberInput').addClass('input-error');
                }
                else if (data.error == 'captchaNotValid') {
                    $('#errorAlert').html("Le Captcha n'est pas valide").show();
                }

            });

        })

    });
</script>
