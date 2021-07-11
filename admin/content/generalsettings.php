<!-- WallacePOS: Copyright (c) 2014 WallaceIT <micwallace@gmx.com> <https://www.gnu.org/licenses/lgpl.html> -->
<div class="page-header">
    <h1>
        Configuración General
        <small>
            <i class="icon-double-angle-right"></i>
            Administrar la configuración general de la aplicación
        </small>
    </h1>
</div><!-- /.page-header -->
<div class="row">
    <div class="col-sm-6">
        <div class="widget-box transparent">
            <div class="widget-header widget-header-flat">
                <h4 class="lighter">Formatos</h4>
            </div>
            <div class="widget-body" style="padding-top: 10px;">
                <form class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-5"><label>Zona horaria:</label></div>
                        <div class="col-sm-5">
                            <select id="timezone">
                        <?php
                            $timezones = DateTimeZone::listIdentifiers();
                            foreach ($timezones as $timezone){
                                echo('<option value="'.$timezone.'">'.$timezone.'</option>');
                            }
                        ?>
                            </select>
                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Formato de fecha:</label></div>
                        <div class="col-sm-5">
                        <select id="dateformat">
                            <option value="d/m/y">dd/mm/yy</option>
                            <option value="m/d/y">mm/dd/yy</option>
                            <option value="Y-m-d">yyyy-mm-dd</option>
                        </select>
                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Símbolo de moneda:</label></div>
                        <div class="col-sm-5">
                        <select id="currency_symbol">
                            <option value="$">$ Pesos</option>
                            <option value="€">€ Euro</option>
                            <option value="£">£ Pound</option>
                            <option value="¥">¥ Yen/Yuan</option>
                            <option value="₣">₣ Franc</option>
                            <option value="₤">₤ Lira</option>
                            <option value="﷼">﷼ Saudi Riyal</option>
                            <option value="₧">₧ Peseta</option>
                            <option value="₹">₹ Indian Rupee</option>
                            <option value="₨">₨ Rupee</option>
                            <option value="₩">₩ Won</option>
                            <option value="₴">₴ Hryvnia</option>
                            <option value="₯">₯ Drachma</option>
                            <option value="₮">₮ Tugrik</option>
                            <option value="₲">₲ Guarani</option>
                            <option value="₱">₱ Peso Filipino</option>
                            <option value="₳">₳ Austral</option>
                            <option value="₵">₵ Cedi</option>
                            <option value="₭">₭ Kip</option>
                            <option value="₪">₪ New Sheqel</option>
                            <option value="₫">₫ Dong</option>
                            <option value="៛">៛ Riel</option>
                            <option value="Rp">Rp Rupiah</option>
                            <option value="kr">kr Krone/Kroon/Krona</option>
                            <option value="Kč">Kč Koruna</option>
                        </select>
                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Decimales:</label></div>
                        <div class="col-sm-5">
                            <select id="currency_decimals">
                                <option value="0">0</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Separador decimal:</label></div>
                        <div class="col-sm-5">
                            <select id="currency_decimalsep">
                                <option value=".">.</option>
                                <option value=",">,</option>
                            </select>
                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Separador de mil:</label></div>
                        <div class="col-sm-5">
                            <select id="currency_thousandsep">
                                <option value=",">,</option>
                                <option value=".">.</option>
                                <option value=" "> </option>
                            </select>
                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Posición del símbolo:</label></div>
                        <div class="col-sm-5">
                            <select id="currency_symbolpos">
                                <option value="0">Antes de la cantidad</option>
                                <option value="1">Después de la cantidad</option>
                            </select>
                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group" style="display: none;">
                        <div class="col-sm-5"><label>Accounting Type:</label></div>
                        <div class="col-sm-5">
                            <select id="accntype">
                                <option value="cash">Cash</option>
                                <option value="accrual">Accrual</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="widget-box transparent">
            <div class="widget-header widget-header-flat">
                <h4 class="lighter">Etiquetas alternativas</h4>
            </div>
            <div class="widget-body" style="padding-top: 10px;">
                <p>Las etiquetas alternativas se utilizan al imprimir recibos en un idioma alternativo.</p>
                <form class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-5"><label>Efectivo:</label></div>
                        <div class="col-sm-5"><input type="text" id="altlabel_cash" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Credito:</label></div>
                        <div class="col-sm-5"><input type="text" id="altlabel_credit" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Eftpos:</label></div>
                        <div class="col-sm-5"><input type="text" id="altlabel_eftpos" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Cheque:</label></div>
                        <div class="col-sm-5"><input type="text" id="altlabel_cheque" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Deposito:</label></div>
                        <div class="col-sm-5"><input type="text" id="altlabel_deposit" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Licitado:</label></div>
                        <div class="col-sm-5"><input type="text" id="altlabel_tendered" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Cambio:</label></div>
                        <div class="col-sm-5"><input type="text" id="altlabel_change" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Referencia de transacción:</label></div>
                        <div class="col-sm-5"><input type="text" id="altlabel_transaction-ref" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>ID de transacción:</label></div>
                        <div class="col-sm-5"><input type="text" id="altlabel_transaction-id" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Tiempo de venta:</label></div>
                        <div class="col-sm-5"><input type="text" id="altlabel_sale-time" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Total parcial:</label></div>
                        <div class="col-sm-5"><input type="text" id="altlabel_subtotal" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Total:</label></div>
                        <div class="col-sm-5"><input type="text" id="altlabel_total" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Artículo:</label></div>
                        <div class="col-sm-5"><input type="text" id="altlabel_item" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Artículos:</label></div>
                        <div class="col-sm-5"><input type="text" id="altlabel_items" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Reembolso:</label></div>
                        <div class="col-sm-5"><input type="text" id="altlabel_refund" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Transacción nula:</label></div>
                        <div class="col-sm-5"><input type="text" id="altlabel_void-transaction" /></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="widget-box transparent">
            <div class="widget-header widget-header-flat">
                <h4 class="lighter">Detalles de la empresa</h4>
            </div>

            <div class="widget-body" style="padding-top: 10px;">
                <form class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-5"><label>Nombre del Negocio:</label></div>
                        <div class="col-sm-5"><input type="text" id="bizname" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Negocio #:</label></div>
                        <div class="col-sm-5"><input type="text" id="biznumber" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Correo electrónico de administración / información:</label></div>
                        <div class="col-sm-5"><input type="text" id="bizemail" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Dirección:</label></div>
                        <div class="col-sm-5"><input type="text" id="bizaddress" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Ciudad:</label></div>
                        <div class="col-sm-5"><input type="text" id="bizsuburb" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Estado:</label></div>
                        <div class="col-sm-5"><input type="text" id="bizstate" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Código postal:</label></div>
                        <div class="col-sm-5"><input type="text" id="bizpostcode" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>País:</label></div>
                        <div class="col-sm-5"><input type="text" id="bizcountry" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Logotipo de la empresa:</label></div>
                        <div class="col-sm-5">
                            <input type="text" id="bizlogo" /><br/>
                            <img id="bizlogoprev" width="128" height="64" src="" />
                            <input type="file" id="bizlogofile" name="file" />
                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Icono de la aplicación:</label></div>
                        <div class="col-sm-5"><input type="text" id="bizicon" /></div>
                    </div>
                </form>
            </div>
        </div>
        <div class="widget-box transparent">
            <div class="widget-header widget-header-flat">
                <h4 class="lighter">Correo electrónico</h4>
            </div>
            <div class="widget-body" style="padding-top: 10px;">
                <form class="form-horizontal">
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Host SMTP:</label></div>
                        <div class="col-sm-5"><input type="text" id="email_host" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Puerto SMTP:</label></div>
                        <div class="col-sm-5"><input type="text" id="email_port" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>SMTP TLS (recomendado):</label></div>
                        <div class="col-sm-5"><input type="checkbox" id="email_tls" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Nombre de usuario SMTP:</label></div>
                        <div class="col-sm-5"><input type="text" id="email_user" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Contraseña SMTP:</label></div>
                        <div class="col-sm-5"><input type="text" id="email_pass" /></div>
                    </div>
                    <small>El host y el usuario especificados deben poder enviar correo como la dirección de correo electrónico especificada anteriormente.</small>
                </form>
            </div>
        </div>
        <div class="widget-box transparent">
            <div class="widget-header widget-header-flat">
                <h4 class="lighter">Integración de contactos de Google</h4>
            </div>
            <div class="widget-body" style="padding-top: 10px;">
                <form class="form-horizontal">
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Permitir:</label></div>
                        <div class="col-sm-5">
                            <input type="checkbox" id="gcontact" value="1" />
                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Cuenta:</label></div>
                        <div class="col-sm-5">
                            <a class="congaccn" style="display: none;" href="javascript:initGoogleAuth();">Conectar la cuenta de Google</a>
                            <a class="disgaccn" style="display: none;" href="javascript:removeGoogleAuth();">Desconectar la cuenta de Google</a>
                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"></div>
                        <div class="col-sm-5">
                            <input class="congaccn" style="display: none;" placeholder="Pegar el código de autorización de Google" type="text" id="gcontactcode" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-12 align-center form-actions">
        <button class="btn btn-success" type="button" onclick="saveSettings();"><i class="icon-save align-top bigger-125"></i>Guardar</button>
    </div>
</div>
<script type="text/javascript">
    var options;

    async function saveSettings(){
        // show loader
        WPOS.util.showLoader();
        var data = {};
        var altlabels = {};
        var currencyformat = [];
        $("form :input").each(function(){
            if ($(this).prop('id').indexOf("currency")===0){
                switch ($(this).prop('id')){
                    case "currency_symbol":
                        currencyformat[0] = $(this).val();
                        break;
                    case "currency_decimals":
                        currencyformat[1] = $(this).val();
                        break;
                    case "currency_decimalsep":
                        currencyformat[2] = $(this).val();
                        break;
                    case "currency_thousandsep":
                        currencyformat[3] = $(this).val();
                        break;
                    case "currency_symbolpos":
                        currencyformat[4] = $(this).val();
                        break;
                }
            } else if ($(this).prop('id').indexOf("altlabel")===0){
                var name = $(this).prop('id').split("_")[1];
                altlabels[name] = $(this).val();
            } else {
                data[$(this).prop('id')] = $(this).val();
            }
        });
        data['currencyformat'] = currencyformat.join("~");
        data['altlabels'] = altlabels;
        data['gcontact'] = $("#gcontact").is(":checked")?1:0;
        data['email_tls'] = $("#email_tls").is(":checked");
        var result = await WPOS.sendJsonData("settings/general/set", JSON.stringify(data));
        if (result !== false){
            await WPOS.setConfigSet('general', result);
        }
        // hide loader
        WPOS.util.hideLoader();
    }

    async function loadSettings(){
        options = await WPOS.getJsonData("settings/general/get");
        // load option values into the form
        for (var i in options){
            if (i == "currencyformat"){
                var format = options[i].split("~");
                $("#currency_symbol").val(format[0]);
                $("#currency_decimals").val(format[1]);
                $("#currency_decimalsep").val(format[2]);
                $("#currency_thousandsep").val(format[3]);
                $("#currency_symbolpos").val(format[4]);
            } else if (i == "altlabels"){
                for (var x in options.altlabels){
                    $("#altlabel_"+x).val(options.altlabels[x]);
                }
            } else {
                $("#" + i).val(options[i]);
            }
        }
        $("#email_tls").prop('checked', options.email_tls);
        setGoogleUI();
        $("#bizlogoprev").attr("src", options.bizlogo);
    }
    function setGoogleUI(){
        var gcontact_enabled = $("#gcontact");
        gcontact_enabled.prop("checked", options.gcontact==1);
        gcontact_enabled.prop("disabled", options.gcontactaval!=1);
        if (options.gcontactaval==1){
            $(".congaccn").hide();
            $(".disgaccn").show();
        } else {
            $(".congaccn").show();
            $(".disgaccn").hide();
        }
    }
    function initGoogleAuth(){
        // show
        window.open('/api/settings/google/authinit','Connect with Google','width=500,height=500');
    }
    async function removeGoogleAuth(){
        var answer = confirm("Are you sure you want to remove the current google acount & turn off intergration?");
        if (answer){
            // show loader
            WPOS.util.showLoader();
            var result = await WPOS.getJsonData("settings/google/authremove");
            if (result!==false){
                alert("Google account successfully disconnected.");
                options.gcontact=0;
                options.gcontactaval=0;
                setGoogleUI();
            } else {
                alert("Google account removal failed.");
            }
            // hide loader
            WPOS.util.hideLoader();
        }
    }

    $('#bizlogofile').on('change',uploadLogo);
    $('#bizlogo').on('change',function(e){
        $("#bizlogoprev").prop("src", $(e.target).val());
    });

    function uploadLogo(event){
        WPOS.uploadFile(event, function(data){
            $("#bizlogo").val(data.path);
            $("#bizlogoprev").prop("src", data.path);
            saveSettings();
        }); // Start file upload, passing a callback to fire if it completes successfully
    }

    $(function(){
        loadSettings();
        // hide loader
        WPOS.util.hideLoader();
    })
</script>