<?php
require_once('paprec_config.php');

$serviceId = null;

if (isset($_GET['serviceId'])) {
    $serviceId = $_GET['serviceId'];
}
?>
<meta charset="utf-8">
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<link rel='stylesheet' id='select2-css-css' href='js/plugins/select2/dist/css/select2.min.css' type='text/css'
      media='all'/>
<link rel='stylesheet' id='select2-bootstrap-css-css' href='js/plugins/select2-bootstrap/dist/select2-bootstrap.min.css'
      type='text/css' media='all'/>
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

<div class="page-form-other-services">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="bloc-title">
          <h4 class="text-center">Formulaire de recueil d'information</h4>
          <p class="text-left">&nbsp;</p>
        </div>
      </div>
      <!-- /.col-sm-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
      <!--      <div class="col-sm-8 col-sm-offset-2">-->
      <div class="col-sm-10 col-sm-offset-1">
        <form id="otherServicesForm" class="form-horizontal" method="post"
              action="<?php echo EASY_RECYCLAGE_STORE_URL; ?>/souscription/autreServices?serviceId=<?php echo $serviceId; ?>">

          <div class="row">
            <div class="col-sm-2">
              <img class="img-responsive img-portfolio img-hover hidden-xs"
                   src="images/form-rappel/picto-form-contact-business.png" alt="">
            </div>
            <div class="col-sm-5 cell-input-left">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="SIRET" name="siret" id="siretInput">
              </div>
            </div>
            <div class="col-sm-5 cell-input-right">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="SOCIETE*" name="companyName" id="companyNameInput">
              </div>
            </div>
          </div><!-- /.row -->
          <hr>
          <div class="row">
            <div class="col-sm-12 visible-xs">
              <img class="img-responsive img-portfolio img-hover hidden-xs"
                   src="images/form-rappel/picto-form-contact-man.png" alt="">
            </div>
            <div class="col-xs-5 col-sm-offset-2 cell-input-left">
              <div class="form-group">
                <div class="radio">
                  <label>
                    <input type="radio" name="title" value="male" checked>
                    MONSIEUR
                  </label>
                </div>
              </div>
            </div>
            <div class="col-xs-5 cell-input-right">
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
            <div class="col-sm-5 cell-input-left">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="NOM*" name="lastName" id="lastNameInput">
              </div>
            </div>
            <div class=" col-sm-5 cell-input-right">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="PRENOM " name="firstName" id="firstNameInput">
              </div>
            </div>
          </div><!-- /.row -->
          <hr>
          <div class="row">

            <div class="col-sm-10 col-sm-offset-2">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="ADRESSE E-MAIL*" name="email" id="emailInput">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5 col-sm-offset-2 cell-input-left">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="TELEPHONE FIXE*" name="phoneNumber"
                       id="phoneNumberInput">
              </div>
            </div>

            <div class="col-sm-5 cell-input-right">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="TELEPHONE PORTABLE" name="cellPhoneNumber"
                       id="cellPhoneNumberInput">
              </div>
            </div>
          </div>
          <div class="row">

            <div class="col-sm-10 col-sm-offset-2">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="ADRESSE*" name="address1"
                       id="address1Input">
              </div>
            </div>
          </div>
          <div class="row">

            <div class="col-sm-10 col-sm-offset-2">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="COMPLEMENT ADRESSE" name="address2"
                       id="address1Input">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-2 hidden-xs">
              <img class="img-responsive img-portfolio img-hover hidden-xs"
                   src="images/form-rappel/picto-form-contact-email.png" alt="">
            </div>

            <div class="col-sm-4 cell-input-left">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="CODE POSTAL*" name="postalCode"
                       id="postalCodeInput">
              </div>
            </div>

            <div class="col-sm-6 cell-input-right">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="VILLE*" name="city" id="cityInput">
              </div>
            </div>

          </div>
          <hr>
          <div class="row">
            <div class="col-sm-2 hidden-xs">
              <img class="img-responsive img-portfolio img-hover hidden-xs"
                   src="images/form-other-services/picto-form-other-services-question.png" alt=""
                   style="margin-top: 44px;">
            </div>

            <div class="col-sm-10">
              <div class="form-group other-services-form-type-selection">
                <h5>Mon interet porte sur :</h5>
                <input type="radio" class="other-services-form-type-button" name="type" id="typeReceiveInfoInput"
                       value="receiveInfo">
                <label for="typeReceiveInfoInput">Recevoir une information sur cette prestation</label>
                <input type="radio" class="other-services-form-type-button" name="type" id="typeGenerateQuotationInput"
                       value="generateQuotation">
                <label for="typeGenerateQuotationInput">Obtenir un devis / envisager une prestation</label>
              </div>
            </div>

          </div>

          <hr class="generate-quotation-block">
          <div class="row generate-quotation-block">

            <div class="col-sm-8 col-sm-offset-2">
              <div class="form-group other-services-form-need-selection">
                <h5>Mon besoin est :</h5>
                <input type="radio" class="other-services-form-need-button" name="need" id="needOneShotInput"
                       value="needOneShot">
                <label for="needOneShotInput">Ponctuel</label>
                <input type="radio" class="other-services-form-need-button" name="need" id="needRecurrentInput"
                       value="needRecurrent">
                <label for="needRecurrentInput">Régulier</label>
              </div>
            </div>
          </div>

          <div class="row generate-quotation-block">
            <div class="col-sm-5 col-sm-offset-2 cell-input-left">
              <div class="form-group">
                <label>Votre activité*</label>
                <span class="select-wrapper">
                  <select class="form-control form-other-services-select" name="activity">
                    <option value="Bureaux">Bureaux</option>
                    <option value="Restauration">Restauration</option>
                    <option value="Entrepôt">Entrepôt</option>
                    <option value="Usine">Usine</option>
                    <option value="Collectivité">Collectivité</option>
                    <option value="Autres">Autres</option>
                  </select>
                </span>
              </div>
            </div>

            <div class="col-sm-5 cell-input-right">
              <div class="form-group">
                <label>Effectif concerné*</label>
                <span class="select-wrapper">
                <select class="form-control form-other-services-select" name="size">
                    <option value="moins de 50">moins de 50</option>
                    <option value="de 50 à 250">de 50 à 250</option>
                    <option value="plus de 250">plus de 250</option>
                </select>
                </span>
              </div>
            </div>

          </div>

          <div class="row generate-quotation-block">

            <div class="col-sm-2 hidden-xs">
              <img class="img-responsive img-portfolio img-hover hidden-xs"
                   src="images/form-other-services/picto-form-other-services-search.png" alt="">
            </div>

            <div class="col-sm-5 cell-input-left">
              <div class="form-group">
                <label>Sites concernés*</label>
                <span class="select-wrapper">
                <select class="form-control form-other-services-select" name="location">
                    <option value="Site unique">Site unique</option>
                    <option value="Plusieurs sites">Plusieurs sites</option>
                    <option value="Réseaux">Réseaux</option>
                </select>
                </span>
              </div>
            </div>

            <div class="col-sm-5 cell-input-right">
              <div class="form-group">
                <label>Délai du projet*</label>
                <span class="select-wrapper">
                <select class="form-control form-other-services-select" name="delay">
                    <option value="Urgent">Urgent</option>
                    <option value="1 mois">1 mois</option>
                    <option value="3 mois">3 mois</option>
                    <option value="Dans l'année">Dans l'année</option>
                    <option value="Réflexion">Réflexion</option>
                </select>
                </span>
              </div>
            </div>

          </div>

          <hr class="generate-quotation-block">

          <div class="row generate-quotation-block">
            <div class="col-sm-2 hidden-xs">
              <img class="img-responsive img-portfolio img-hover hidden-xs"
                   src="images/formulaire-contact/subscription-item4-35x23.png" alt=""
                   style="margin-top: 126px;">
            </div>

            <div class="col-sm-10">
              <div class="form-group">
                <textarea class="form-control" name="comment" placeholder="COMPLEMENTS D'INFORMATIONS"></textarea>
              </div>

            </div>
          </div>

          <div class="row">
            <div class="col-sm-10 col-sm-offset-2">
              <div class="form-group">
                <div class="g-recaptcha" data-sitekey="6Lf0NgcUAAAAAMUAfiC8h8qv6GDg4I-ycs3godTW"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8 text-center">
              <div id="errorAlert" class="alert alert-danger" role="alert" style="display:none">Vous devez remplir
                tous
                les
                champs obligatoires
              </div>
            </div>
            <div class="col-sm-4">
              <button type="submit" class="btn btn-default pull-right">Valider</button>
            </div>
          </div>

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
<script type='text/javascript' src='js/plugins/select2/dist/js/select2.full.min.js'></script>
<script>
    jQuery(function () {


        $('.other-services-form-type-button').on('click', function () {
            if ($(this).val() == 'generateQuotation') {
                $('.generate-quotation-block').show();
            }
            else {
                $('.generate-quotation-block').hide();
            }
        });


        $('#otherServicesForm').on('submit', function (e) {
            $('#errorAlert').hide();

            e.preventDefault();
            $.ajax({
                url: $(this).prop('action'),
                method: 'POST',
                data: $(this).serialize(),
                dataType: 'json'
            }).done(function (data) {


                if (data.response == 'success') {
                    parent.jQuery.fancybox({
                        content: '    <div class="page-form-other-services-result">\n' +
                        '      <div class="row text-center">\n' +
                        '        <p>Nous vous remercions de l\'intérêt que vous portez à EASYRECYCLAGE. <br><br>Nous avons bien pris en compte votre demande <br>et vous contacterons dans les plus brefs délais</p>\n' +
                        '        <hr>\n' +
                        '        <h4>En attendant, poursuivez votre navigation sur easyrecyclage.com</h4>\n' +
                        '      </div>\n' +
                        '      <div class="row">\n' +
                        '        <div class="col-sm-4 text-center"><img src="/wp-content/themes/bst-master/images/form-other-services/form-result-box.png" class="img-responsive hidden-xs"><a href="/decouvrez-notre-offre/" class="btn btn-default btn-offer">Notre offre</a></div>\n' +
                        '        <div class="col-sm-4 text-center"><img src="/wp-content/themes/bst-master/images/form-other-services/form-result-wwf.png" class="img-responsive hidden-xs"><a href="/soutenez-wwf/" class="btn btn-default btn-wwf">WWF & Paprec</a></div>\n' +
                        '        <div class="col-sm-4 text-center"><img src="/wp-content/themes/bst-master/images/form-other-services/form-result-city.png" class="img-responsive hidden-xs"><a href="/blog/" class="btn btn-default btn-blog">Le blog</a></div>\n' +
                        '      </div>\n' +
                        '    </div>',
                        maxWidth: 800,
                        maxHeight: 700,
                        closeBtn: false
                    });
                }
                else if (data.error == 'serviceIdNotValid' || data.error == 'serviceNotValid') {
                    $('#errorAlert').html("Le service sélectionné n'est pas valide").show();
                }
                else if (data.error == 'companyNameNotValid') {
                    $('#errorAlert').html('Le champs société est obligatoire').show();
                    $('#companyNameInput').addClass('input-error');
                }
                else if (data.error == 'titleNotValid') {
                    $('#errorAlert').html('Le champs civilité est obligatoire').show();
                }
                else if (data.error == 'lastNameNotValid') {
                    $('#errorAlert').html('Le champs nom est obligatoire').show();
                    $('#lastNameInput').addClass('input-error');
                }
                else if (data.error == 'firstNameNotValid') {
                    $('#errorAlert').html('Le champs prénom est obligatoire').show();
                    $('#firstNameInput').addClass('input-error');
                }
                else if (data.error == 'phoneNumberNotValid') {
                    $('#errorAlert').html("Le téléphone n'est pas valide").show();
                    $('#phoneNumberInput').addClass('input-error');
                }
                else if (data.error == 'emailNotValid') {
                    $('#errorAlert').html("Le email n'est pas valide").show();
                    $('#emailInput').addClass('input-error');
                }
                else if (data.error == 'address1NotValid') {
                    $('#errorAlert').html("L'adresse n'est pas valide").show();
                    $('#address1Input').addClass('input-error');
                }
                else if (data.error == 'postalCodeNotValid') {
                    $('#errorAlert').html("Le code postal n'est pas valide").show();
                    $('#postalCodeInput').addClass('input-error');
                }
                else if (data.error == 'cityNotValid') {
                    $('#errorAlert').html("Le ville n'est pas valide").show();
                    $('#cityInput').addClass('input-error');
                }
                else if (data.error == 'typeNotValid') {
                    $('#errorAlert').html("Veuillez préciser sur quoi porte votre intérêt").show();
                }
                else if (data.error == 'needNotValid') {
                    $('#errorAlert').html("Veuillez préciser votre besoin").show();
                }
                else if (data.error == 'captchaNotValid') {
                    $('#errorAlert').html("Le Captcha n'est pas valide").show();
                }

            });

        });

    });
</script>
