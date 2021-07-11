<!-- WallacePOS: Copyright (c) 2014 WallaceIT <micwallace@gmx.com> <https://www.gnu.org/licenses/lgpl.html> -->
<div class="page-header">
    <h1>
        Información
        <small>
            <i class="icon-double-angle-right"></i>
            Información del sistema
        </small>
    </h1>
</div><!-- /.page-header -->
<div class="row">
    <div class="col-sm-6">
        <div class="widget-box transparent">
            <div class="widget-header widget-header-flat">
                <h4 class="lighter">Información</h4>
            </div>
            <div class="widget-body" style="padding-top: 10px;">
                <div class="row">
                    <div class="col-xs-2">Versión: </div>
                    <div id="app_version" class="col-xs-10"></div>
                    <div class="space-30"></div>
                </div>
            </div>
        </div>
        <div class="widget-box transparent">
            <div class="widget-header widget-header-flat">
                <h4 class="lighter">Soporte y desarrollo</h4>
            </div>
            <div class="widget-body" style="padding-top: 10px;">
                <p>Consulte aquí para obtener información sobre soporte y desarrollo:<br/>
                <a href="https://wallacepos.com/get" target="_blank">https://wallacepos.com/get</a></p>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="widget-box transparent">
            <div class="widget-header widget-header-flat">
                <h4 class="lighter">Licencia</h4>
            </div>
            <div class="widget-body" style="padding-top: 10px;">
                <div class="row">
                    <iframe frameborder="0" style="width: 100%; height: 100%; min-height: 600px; max-width: 600px; margin: 0 auto; position: relative;" height="100%" width="100%" src="https://www.gnu.org/licenses/lgpl-3.0.txt"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        (async () => {
            $("#app_version").text(await WPOS.getConfigTable().general.version);
            WPOS.util.hideLoader();
        })()
    });
</script>