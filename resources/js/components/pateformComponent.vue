<template>
    <div class="col-md-12 ml-2">
        <h3 class="contact-title mt-4 mb-4">neue Pate anlegen</h3>
        <form class="well form-horizontal">
            <fieldset>
                <div class="form-group">
                    <label class="col-md-4 control-label">Vor- und Nachname</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i
                            class="glyphicon glyphicon-user"></i></span><input id="fullName" name="fullName"
                                                                               placeholder="Vor- und Nachname"
                                                                               class="form-control" required="true"
                                                                               value="" type="text"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Straßennummer</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i
                            class="glyphicon glyphicon-home"></i></span><input id="city" name="city" placeholder="Straßennummer"
                                                                               class="form-control" required="true"
                                                                               value="" type="text"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Stadt</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i
                            class="glyphicon glyphicon-home"></i></span><input id="state" name="state"
                                                                               placeholder="Stadt"
                                                                               class="form-control" required="true"
                                                                               value="" type="text"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">PLZ</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i
                            class="glyphicon glyphicon-home"></i></span><input id="postcode" name="postcode"
                                                                               placeholder="PLZ"
                                                                               class="form-control" required="true"
                                                                               value="" type="text"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Email Optional </label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i
                            class="glyphicon glyphicon-envelope"></i></span><input id="email" name="email"
                                                                                   placeholder="Email"
                                                                                   class="form-control" required="true"
                                                                                   value="" type="text"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Telefonnummer</label>
                    <div class="col-md-8 inputGroupContainer">
                        <div class="input-group"><span class="input-group-addon"><i
                            class="glyphicon glyphicon-earphone"></i></span><input id="phoneNumber" name="phoneNumber"
                                                                                   placeholder="Telefonnummer"
                                                                                   class="form-control" required="true"
                                                                                   value="" type="text"></div>
                    </div>
                </div>
                <div class="form-group float-right mt-3 mb-3 mr-5 pr-5">
                    <button class="btn btn-success">speichern</button>
                </div>
            </fieldset>
        </form>
    </div>
</template>
<script>

</script>
