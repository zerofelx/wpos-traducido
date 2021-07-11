<!-- WallacePOS: Copyright (c) 2014 WallaceIT <micwallace@gmx.com> <https://www.gnu.org/licenses/lgpl.html> -->
<div class="page-header">
    <h1>
        Configuración de POS
        <small>
            <i class="icon-double-angle-right"></i>
            Configuración global del POS
        </small>
    </h1>
</div><!-- /.page-header -->
<div class="row">
    <div class="col-sm-6">
        <div class="widget-box transparent">
            <div class="widget-header widget-header-flat">
                <h4 class="lighter">Recibo</h4>
            </div>

            <div class="widget-body" style="padding-top: 10px;">
                <form class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-5"><label>Plantilla predeterminada:</label></div>
                        <div class="col-sm-5">
                            <select id="rectemplate"></select><br/>
                            <small>no se utiliza para recibos en modo texto ESCP</small>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Línea de encabezado 2:</label></div>
                        <div class="col-sm-5"><input type="text" id="recline2" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Línea de encabezado 3:</label></div>
                        <div class="col-sm-5"><input type="text" id="recline3" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-5">Imprimir ID de venta:</label>
                        <div class="col-sm-5">
                            <input type="checkbox" id="recprintid" /><br/>
                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-5">Imprimir descripción del artículo:</label>
                        <div class="col-sm-5">
                            <input type="checkbox" id="recprintdesc" /><br/>
                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-5">Logotipo de la impresora de recibos:</label>
                        <div class="col-sm-5">
                            <input type="text" id="reclogo" /><br/>
                            <img id="reclogoprev" width="128" height="64" src="" />
                            <input type="file" id="reclogofile" name="file" />
                            <small>Debe ser un png monocromático de 1 bit (256*128)</small>
                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-5">Imprimir logotipo de recibo:</label>
                        <div class="col-sm-5">
                            <input type="checkbox" id="recprintlogo" value="true" />
                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-5">Caracteres de la moneda del recibo:</label>
                        <div class="col-sm-5">
                            <input type="text" id="reccurrency" /><br/>
                            <small>Se utiliza para la impresión en modo texto ESC/P.</small>
                            <small>Proporcione códigos de caracteres decimales alternativos separados por una coma o déjelos en blanco para deshabilitarlos.</small>
                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-5">Página de códigos de moneda de recibo:</label>
                        <div class="col-sm-5">
                            <input type="number" id="reccurrency_codepage" /><br/>
                            <small>Página de códigos alternativa utilizada para imprimir los caracteres de moneda anteriores.</small>
                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-5">Browser/Email Logo:</label>
                        <div class="col-sm-5">
                            <input type="text" id="recemaillogo" /><br/>
                            <img id="emaillogoprev" width="128" height="64" src="" />
                            <input type="file" id="emaillogofile" name="file" />
                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-5">Texto del footer del recibo:</label>
                        <div class="col-sm-5"><input type="text" id="recfooter" /></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-5">Código QR promocional:</label>
                        <div class="col-sm-5"><input type="text" id="recqrcode" /><br/><small>Dejar en blanco para deshabilitar</small>
                            <br/><img id="qrpreview" width="150" src="">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="widget-box transparent">
            <div class="widget-header widget-header-flat">
                <h4 class="lighter">Registros de POS: Cargar registros de venta...</h4>
            </div>

            <div class="widget-body" style="padding-top: 10px;">
                <form class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-5"><label>Desde hace:</label></div>
                        <div class="col-sm-5">
                            <select id="salerange">
                                <option value="week">1 semana</option>
                                <option value="day">1 día</option>
                                <option value="month">1 mes</option>
                            </select>
                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <div class="col-sm-5"><label>Incluye:</label></div>
                        <div class="col-sm-5">
                            <select id="saledevice">
                                <option value="device">Ventas de dispositivos</option>
                                <option value="location">Ventas de ubicaciones</option>
                                <option value="all">Todas las ventas</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="widget-box transparent">
            <div class="widget-header widget-header-flat">
                <h4 class="lighter">Opciones de venta</h4>
            </div>
            <div class="widget-body" style="padding-top: 10px;">
                <form class="form-horizontal">
                    <div>
                        <div class="form-group">
                            <div class="col-sm-5"><label>Permitir cambiar los precios de los artículos almacenados:</label></div>
                            <div class="col-sm-5">
                                <select id="priceedit">
                                    <option value="blank">Cuando el precio está en blanco</option>
                                    <option value="always">Siempre</option>
                                </select>
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <div class="col-sm-5"><label>Permitir cambiar el impuesto de artículos almacenados:</label></div>
                            <div class="col-sm-5">
                                <select id="taxedit">
                                    <option value="no">No</option>
                                    <option value="always">Si</option>
                                </select>
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <div class="col-sm-5"><label>Redondeo de efectivo:</label></div>
                            <div class="col-sm-5">
                                <select id="cashrounding">
                                    <option value="0">No</option>
                                    <option value="5">5¢</option>
                                    <option value="10">10¢</option>
                                </select>
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <div class="col-sm-5"><label>Permitir precios de artículos negativos:</label></div>
                            <div class="col-sm-5">
                                <input id="negative_items" type="checkbox" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 align-center form-actions">
        <button class="btn btn-success" type="button" onclick="saveSettings();"><i class="icon-save align-top bigger-125"></i>Save</button>
    </div>
</div>
<script type="text/javascript">
        var options;

        async function saveSettings(){
            // show loader
            WPOS.util.showLoader();
            var data = {};
            $("#maincontent").find("form :input").each(function(){
                if ($(this).is(':checkbox')) {
                    data[$(this).prop('id')] = $(this).is(":checked") ? true : false;
                } else {
                    data[$(this).prop('id')] = $(this).val();
                }
            });
            var result = await WPOS.sendJsonData("settings/pos/set", JSON.stringify(data));
            if (result !== false){
                WPOS.setConfigSet('pos', result);
            }
            refreshPreviewImages();
            // hide loader
            WPOS.util.hideLoader();
        }

        async function loadSettings(){
            options = await WPOS.getJsonData("settings/pos/get");
            // load option values into the form
            for (var i in options){
                var input = $("#"+i);
                if (input.is(':checkbox')) {
                    input.prop('checked', options[i]);
                } else {
                    input.val(options[i]);
                }
            }
            // unfortunately the above doesn't work for checkboxes :( so a fix is below :)
            /*if (options.recprintlogo==true){
                $("#recprintlogo").prop("checked", "checked");
            }*/
            refreshTemplateList(options['rectemplate']);
            refreshPreviewImages();
        }

        function refreshPreviewImages(){
            // set logo images
            $("#reclogoprev").attr("src", options.reclogo + "?t=" + new Date().getTime());
            $("#emaillogoprev").attr("src", options.recemaillogo + "?t=" + new Date().getTime());
            $("#qrpreview").attr("src", (options.recqrcode!=="" ? "/docs/qrcode.png?t=" + new Date().getTime() : ""));
        }

        async function refreshTemplateList(selectedid){
            var templates = await WPOS.getConfigTable()['templates'];
            var list = $("#rectemplate");
            list.html('');
            for (var i in templates){
                if (templates[i].type=="receipt")
                    list.append('<option value="'+i+'" '+(i==selectedid?'selected="selected"':'')+'>'+templates[i].name+'</option>');
            }
        }

        $('#reclogofile').on('change',uploadRecLogo);
        $('#reclogo').on('change',function(e){
            $("#reclogoprev").prop("src", $(e.target).val());
        });

        $('#emaillogofile').on('change',uploadEmailLogo);
        $('#recemaillogo').on('change',function(e){
            $("#emaillogoprev").prop("src", $(e.target).val());
        });

        function uploadRecLogo(event){
            WPOS.uploadFile(event, function(data){
                $("#reclogo").val(data.path);
                $("#reclogoprev").prop("src", data.path);
                saveSettings();
            }); // Start file upload, passing a callback to fire if it completes successfully
        }

        function uploadEmailLogo(event){
            WPOS.uploadFile(event, function(data){
                $("#recemaillogo").val(data.path);
                $("#emaillogoprev").prop("src", data.path);
                saveSettings();
            }); // Start file upload, passing a callback to fire if it completes successfully
        }

        $(function(){
            loadSettings();

            // hide loader
            WPOS.util.hideLoader();
        })
</script>