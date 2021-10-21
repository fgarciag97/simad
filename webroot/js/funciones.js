//======================================================================
$('document').ready(function() {
    $('.moneda').mask('000.000.000.000.000,00', {
        reverse: true
    });
});
//==================================================================0
setTimeout(function() {
    $('.alert').fadeOut('slow');
}, 3000);

function sumar(valor) {
    var ip = 0;
    var im = 0;
    var ie = 0;
    var ifci = 0;
    var io = 0;
    ip = document.getElementById('ip').value;
    ip = (ip == null || ip == undefined || ip == "") ? 0 : ip;
    im = document.getElementById('im').value;
    im = (im == null || im == undefined || im == "") ? 0 : im;
    ie = document.getElementById('ie').value;
    ie = (ie == null || ie == undefined || ie == "") ? 0 : ie;
    ifci = document.getElementById('ifci').value;
    ifci = (ifci == null || ifci == undefined || ifci == "") ? 0 : ifci;
    io = document.getElementById('io').value;
    io = (io == null || io == undefined || io == "") ? 0 : io;
    total = (parseFloat(ip) + parseFloat(im) + parseFloat(ie) + parseFloat(ifci) + parseFloat(io));
    document.getElementById('total').value = total;
}

function sumarmodal(valor) {
    var ip = 0;
    var im = 0;
    var ie = 0;
    var ifci = 0;
    var io = 0;
    ip = document.getElementById('epr_ingreso_propio').value;
    ip = (ip == null || ip == undefined || ip == "") ? 0 : ip;
    im = document.getElementById('epr_situado').value;
    im = (im == null || im == undefined || im == "") ? 0 : im;
    ie = document.getElementById('epr_ingreso_estadal').value;
    ie = (ie == null || ie == undefined || ie == "") ? 0 : ie;
    ifci = document.getElementById('epr_ingreso_fci').value;
    ifci = (ifci == null || ifci == undefined || ifci == "") ? 0 : ifci;
    io = document.getElementById('epr_otra_fuente').value;
    io = (io == null || io == undefined || io == "") ? 0 : io;
    total = (parseFloat(ip) + parseFloat(im) + parseFloat(ie) + parseFloat(ifci) + parseFloat(io));
    document.getElementById('epr_monto').value = total;
}

function sumar_orden() {
    var monto_comprometer = 0;
    var monto_disponible = 0;
    monto_comprometer = document.getElementById('monto_comprometer_egreso').value;
    monto_comprometer = (monto_comprometer == null || monto_comprometer == undefined || monto_comprometer == "") ? 0 : monto_comprometer;
    monto_disponible = document.getElementById('monto_disponible_egreso').value;
    monto_disponible = (monto_disponible == null || monto_disponible == undefined || monto_disponible == "") ? 0 : monto_disponible;
    total = (parseFloat(monto_disponible) - parseFloat(monto_comprometer));
    document.getElementById('monto_restante_egreso').value = total;
}

function calculo_reincorporacion() {
    var r = 0;
    var sueldo_base_puro = 0;
    r = document.getElementById('r').value;
    r = (r == null || r == undefined || r == "") ? 0 : r;
    sueldo_base_puro = document.getElementById('sueldo_base_puro').value;
    sueldo_base_puro = (sueldo_base_puro == null || sueldo_base_puro == undefined || sueldo_base_puro == "") ? 0 : sueldo_base_puro;
    total = (r * (parseFloat(sueldo_base_puro) / 30));
    total = total.toFixed(2);
    document.getElementById('sueldo_base2').value = total;
}

function orden(valor) {
    var cantidad = 0;
    var precio_unitario = 0;
    var iva = 0;
    cantidad = document.getElementById('cantidad').value;
    cantidad = (cantidad == null || cantidad == undefined || cantidad == "") ? 0 : cantidad;
    precio_unitario = document.getElementById('precio_unitario').value;
    precio_unitario = (precio_unitario == null || precio_unitario == undefined || precio_unitario == "") ? 0 : precio_unitario;
    iva = document.getElementById('iva').value;
    iva = (iva == null || iva == undefined || iva == "") ? 0 : iva;
    total = ((parseFloat(cantidad) * parseFloat(precio_unitario)));
    document.getElementById('total').value = total;
}

function ordent(valor) {
    var cantidad = 0;
    var precio_unitario = 0;
    cantidad = document.getElementById('cantidad').value;
    cantidad = (cantidad == null || cantidad == undefined || cantidad == "") ? 0 : cantidad;
    precio_unitario = document.getElementById('precio_unitario').value;
    precio_unitario = (precio_unitario == null || precio_unitario == undefined || precio_unitario == "") ? 0 : precio_unitario;
    total = ((parseFloat(cantidad) * parseFloat(precio_unitario)));
    document.getElementById('total').value = total;
}

function sumar_capital(valor) {
    var corriente = 0;
    var capital = 0;
    corriente = document.getElementById('corriente').value;
    corriente = (corriente == null || corriente == undefined || corriente == "") ? 0 : corriente;
    capital = document.getElementById('capital').value;
    capital = (capital == null || capital == undefined || capital == "") ? 0 : capital;
    total = (parseFloat(corriente) + parseFloat(capital));
    document.getElementById('total').value = total;
}

function sumar_monto(valor) {
    var monto1 = 0;
    var monto2 = 0;
    var monto3 = 0;
    var monto4 = 0;
    var monto5 = 0;
    var monto6 = 0;
    var monto7 = 0;
    var monto8 = 0;
    var monto9 = 0;
    var monto10 = 0;
    if (document.getElementById('monto1') != null) {
        monto1 = document.getElementById('monto1').value;
        monto1 = (monto1 == null || monto1 == undefined || monto1 == "") ? 0 : monto1;
    }
    if (document.getElementById('monto2') != null) {
        monto2 = document.getElementById('monto2').value;
        monto2 = (monto2 == null || monto2 == undefined || monto2 == "") ? 0 : monto2;
    }
    if (document.getElementById('monto3') != null) {
        monto3 = document.getElementById('monto3').value;
        monto3 = (monto3 == null || monto3 == undefined || monto3 == "") ? 0 : monto3;
    }
    if (document.getElementById('monto4') != null) {
        monto4 = document.getElementById('monto4').value;
        monto4 = (monto4 == null || monto4 == undefined || monto4 == "") ? 0 : monto4;
    }
    if (document.getElementById('monto5') != null) {
        monto5 = document.getElementById('monto5').value;
        monto5 = (monto5 == null || monto5 == undefined || monto5 == "") ? 0 : monto5;
    }
    if (document.getElementById('monto6') != null) {
        monto6 = document.getElementById('monto6').value;
        monto6 = (monto6 == null || monto6 == undefined || monto6 == "") ? 0 : monto6;
    }
    if (document.getElementById('monto7') != null) {
        monto7 = document.getElementById('monto7').value;
        monto7 = (monto7 == null || monto7 == undefined || monto7 == "") ? 0 : monto7;
    }
    if (document.getElementById('monto8') != null) {
        monto8 = document.getElementById('monto8').value;
        monto8 = (monto8 == null || monto8 == undefined || monto8 == "") ? 0 : monto8;
    }
    if (document.getElementById('monto9') != null) {
        monto9 = document.getElementById('monto9').value;
        monto9 = (monto9 == null || monto9 == undefined || monto9 == "") ? 0 : monto9;
    }
    if (document.getElementById('monto10') != null) {
        monto10 = document.getElementById('monto10').value;
        monto10 = (monto10 == null || monto10 == undefined || monto10 == "") ? 0 : monto10;
    }
    total = (parseFloat(monto1) + parseFloat(monto2) + parseFloat(monto3) + parseFloat(monto4) + parseFloat(monto5) + parseFloat(monto6) + parseFloat(monto7) + parseFloat(monto8) + parseFloat(monto9) + parseFloat(monto10));
    document.getElementById('total').value = total;
}

function sumar_ajuste(valor) {
    var ajuste = 0;
    var nuevo_ajuste = 0;
    ajuste = document.getElementById('ajuste').value;
    ajuste = (ajuste == null || ajuste == undefined || ajuste == "") ? 0 : ajuste;
    nuevo_ajuste = document.getElementById('nuevo_ajuste').value;
    nuevo_ajuste = (nuevo_ajuste == null || nuevo_ajuste == undefined || nuevo_ajuste == "") ? 0 : nuevo_ajuste;
    total = (parseFloat(ajuste) + parseFloat(nuevo_ajuste));
    document.getElementById('total_ajuste').value = total;
}

function cargar_partidas_us(op) {
    var op = $("#us option:selected").val();
    $.ajax({
        method: 'get',
        url: "/ajax/cargarpartidasus/" + op, //localhost
        success: function(response) {
            $("#id_partida").empty();
            var length = response.length;
            var concatenado = 0;
            for (i = 0; i < length; i++) {
                $("#id_partida").append('<option disabled selected>--Seleccione--</option>');
                for (j = 0; j < 500; j++) {
                    if (response[i][j]['id_partida'] != '') {
                        if (concatenado != response[i][j]['concatenado']) {
                            concatenado = response[i][j]['concatenado'];
                            $("#id_partida").append('<option value="' + response[i][j]['id'] + '">' + response[i][j]['concatenado'] + '</option>');
                        }
                    }
                }
            }
        }
    })
}

function mayus(e) {
    e.value = e.value.toUpperCase();
}

function soloNum(e) {
    var key = window.Event ? e.which : e.keyCode
    return ((key >= 48 && key <= 57) || (key == 8) || (key == 46) || (key == 45))
}

function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-39-46";
    tecla_especial = false
    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }
    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false;
    }
}

function mostrar(evt, opcion) {
    var i, j, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(opcion).style.display = "block";
    evt.currentTarget.className += " active";
}

function ver_nomina(data) {
    var data = data;
    console.debug(data.id);
    $('#myModal').modal();
    $('#cedula').val($(data).attr('data-cedula'));
    $('#apellidos').val($(data).attr('data-apellidos'));
    $('#nombres').val($(data).attr('data-nombres'));
    $('#status').val($(data).attr('data-status'));
    $('#fecha_ingreso_institucion').val($(data).attr('data-fecha_ingreso_institucion'));
    $('#fecha_egreso_institucion').val($(data).attr('data-fecha_egreso_institucion'));
    $('#fecha_ingreso_administracion').val($(data).attr('data-fecha_ingreso_administracion'));
    $('#fecha_egreso_administracion').val($(data).attr('data-fecha_egreso_administracion'));
    $('#anos_institucion').val($(data).attr('data-anos_institucion'));
    $('#cargo').val($(data).attr('data-cargo'));
    $('#grupo').val($(data).attr('data-grupo'));
    $('#sueldo_base').val($(data).attr('data-sueldo_base'));
    $('#banco').val($(data).attr('data-banco'));
    $('#numero_cuenta').val($(data).attr('data-numero_cuenta'));
    $('#beca1').val($(data).attr('data-beca1'));
    $('#beca2').val($(data).attr('data-beca2'));
    $('#beca3').val($(data).attr('data-beca3'));
    $('#beca4').val($(data).attr('data-beca4'));
    $('#beca5').val($(data).attr('data-beca5'));
    $('#caja').val($(data).attr('data-caja'));
    $('#porcentaje_caja').val($(data).attr('data-porcentaje_caja'));
    $('#funeraria').val($(data).attr('data-funeraria'));
    $('#prima_profesion').val($(data).attr('data-prima_profesion'));
    $('#prima_antiguedad').val($(data).attr('data-prima_antiguedad'));
    $('#deduccion_sso').val($(data).attr('data-deduccion_sso'));
    $('#deduccion_rpe').val($(data).attr('data-deduccion_rpe'));
    $('#deduccion_fpj').val($(data).attr('data-deduccion_fpj'));
    $('#deduccion_caja_ahorro').val($(data).attr('data-deduccion_caja_ahorro'));
    $('#aporte_patronal_asso').val($(data).attr('data-aporte_patronal_asso'));
    $('#aporte_patronal_arpe').val($(data).attr('data-aporte_patronal_arpe'));
    $('#aporte_patronal_afpj').val($(data).attr('data-aporte_patronal_afpj'));
    $('#aporte_patronal_caja_ahorro').val($(data).attr('data-aporte_patronal_caja_ahorro'));
    return false;
}

function ver_nomina_editar(data) {
    var data = data;
    console.debug(data.id);
    $('#nomina').modal();
    $('#cedula2').val($(data).attr('data-cedula'));
    $('#apellidos2').val($(data).attr('data-apellidos'));
    $('#nombres2').val($(data).attr('data-nombres'));
    $('#cargo2').val($(data).attr('data-cargo'));
    $('#grupo2').val($(data).attr('data-grupo'));
    $('#sueldo_base2').val($(data).attr('data-sueldo_base'));
    $('#dias_dejados_c').val($(data).attr('data-dias_dejados_c'));
    $('#ajuste_sueldo').val($(data).attr('data-ajuste_sueldo'));
    $('#ajuste_p_profesion').val($(data).attr('data-ajuste_p_profesion'));
    $('#ajuste_p_antiguedad').val($(data).attr('data-ajuste_p_antiguedad'));
    $('#ajuste_p_hijos').val($(data).attr('data-ajuste_p_hijos'));
    $('#ajuste_p_hogar').val($(data).attr('data-ajuste_p_hogar'));
    $('#ajuste_sso').val($(data).attr('data-ajuste_sso'));
    $('#ajuste_rpe').val($(data).attr('data-ajuste_rpe'));
    $('#ajuste_faov').val($(data).attr('data-ajuste_faov'));
    $('#ajuste_fpj').val($(data).attr('data-ajuste_fpj'));
    $('#ajuste_caja').val($(data).attr('data-ajuste_caja'));
    $('#ajuste_a_sso').val($(data).attr('data-ajuste_a_sso'));
    $('#ajuste_a_rpe').val($(data).attr('data-ajuste_a_rpe'));
    $('#ajuste_a_faov').val($(data).attr('data-ajuste_a_faov'));
    $('#ajuste_a_fpj').val($(data).attr('data-ajuste_a_fpj'));
    $('#ajuste_a_caja').val($(data).attr('data-ajuste_a_caja'));
    $('#tpsn').val($(data).attr('data-tps'));
    $('#msn').val($(data).attr('data-ms'));
    $('#qsn').val($(data).attr('data-qs'));
    $('#on').val($(data).attr('data-o'));
    $('#form_editar').attr('action', '/m-r-r-h-h-nomina/asignardias');
    return false;
}

function sueldo_individual(data) {
    var data = data;
    console.debug(data.id);
    $('#sueldo_individual').modal();
    $('#s_cedula').val($(data).attr('data-cedula'));
    $('#s_tps').val($(data).attr('data-tps'));
    $('#s_ms').val($(data).attr('data-ms'));
    $('#s_qs').val($(data).attr('data-qs'));
    $('#s_o').val($(data).attr('data-o'));
    $('#s_sueldo_base').val($(data).attr('data-sueldo_base'));
    $('#form_sueldo_individual').attr('action', '/m-r-r-h-h-nomina/sueldoindividual');
    return false;
}

function retroactivo_individual(data) {
    var data = data;
    console.debug(data.id);
    $('#retroactivo_individual').modal();
    $('#r_cedula').val($(data).attr('data-cedula'));
    $('#r_tps').val($(data).attr('data-tps'));
    $('#r_ms').val($(data).attr('data-ms'));
    $('#r_qs').val($(data).attr('data-qs'));
    $('#r_sueldo_base').val($(data).attr('data-sueldo_base'));
    $('#r_sueldo_anterior').val($(data).attr('data-sueldo_anterior'));
    $('#r_sueldo').val($(data).attr('data-sueldo'));
    $('#r_monto').val($(data).attr('data-monto'));
    $('#form_retroactivo_individual').attr('action', '/m-r-r-h-h-retroactivo/sueldoindividual');
    return false;
}

function retroactivo_individual_v(data) {
    var data = data;
    console.debug(data.id);
    $('#retroactivo_individual').modal();
    $('#r_cedula').val($(data).attr('data-cedula'));
    $('#r_tps').val($(data).attr('data-tps'));
    $('#r_ms').val($(data).attr('data-ms'));
    $('#r_qs').val($(data).attr('data-qs'));
    $('#r_sueldo_base').val($(data).attr('data-sueldo_base'));
    $('#r_sueldo_anterior').val($(data).attr('data-sueldo_anterior'));
    $('#r_sueldo').val($(data).attr('data-sueldo'));
    $('#r_monto').val($(data).attr('data-monto'));
    $('#form_retroactivo_individual').attr('action', '/m-r-r-h-h-retroactivo-v/sueldoindividual');
    return false;
}

function sueldo_individual_retro(data) {
    var data = data;
    console.debug(data.id);
    $('#sueldo_individual').modal();
    $('#s_cedula').val($(data).attr('data-cedula'));
    $('#s_tps').val($(data).attr('data-tps'));
    $('#s_ms').val($(data).attr('data-ms'));
    $('#s_qs').val($(data).attr('data-qs'));
    $('#s_sueldo_base').val($(data).attr('data-sueldo_base'));
    $('#form_sueldo_individual').attr('action', '/m-r-r-h-h-retroactivo/sueldoindividual');
    return false;
}

function sueldo_individual_retroam(data) {
    var data = data;
    console.debug(data.id);
    $('#sueldo_individual').modal();
    $('#s_cedula').val($(data).attr('data-cedula'));
    $('#s_tps').val($(data).attr('data-tps'));
    $('#s_ms').val($(data).attr('data-ms'));
    $('#s_qs').val($(data).attr('data-qs'));
    $('#s_sueldo_base').val($(data).attr('data-sueldo_base'));
    $('#form_sueldo_individual').attr('action', '/m-r-r-h-h-retroactivo/sueldoindividualam');
    return false;
}

function sueldo_individual_retrobe(data) {
    var data = data;
    console.debug(data.id);
    $('#sueldo_individual').modal();
    $('#s_cedula').val($(data).attr('data-cedula'));
    $('#s_tps').val($(data).attr('data-tps'));
    $('#s_ms').val($(data).attr('data-ms'));
    $('#s_qs').val($(data).attr('data-qs'));
    $('#s_sueldo_base').val($(data).attr('data-sueldo_base'));
    $('#form_sueldo_individual').attr('action', '/m-r-r-h-h-retroactivo/sueldoindividualbe');
    return false;
}

function editar_partida_rel(data) {
    var data = data;
    $('#editar_partida_rel').modal();
    $('#epr_id').val($(data).attr('id'));
    $('#epr_id_sector').val($(data).attr('id_sector'));
    $('#epr_id_programa').val($(data).attr('id_programa'));
    $('#epr_id_sub_programa').val($(data).attr('id_sub_programa'));
    $('#epr_id_proyecto').val($(data).attr('id_proyecto'));
    $('#epr_id_actividad').val($(data).attr('id_actividad'));
    $('#epr_rel').val($(data).attr('rel'));
    $('#epr_ingreso_propio').val($(data).attr('ingreso_propio'));
    $('#epr_situado').val($(data).attr('situado'));
    $('#epr_ingreso_estadal').val($(data).attr('ingreso_estadal'));
    $('#epr_ingreso_fci').val($(data).attr('ingreso_fci'));
    $('#epr_otra_fuente').val($(data).attr('otra_fuente'));
    $('#epr_monto').val($(data).attr('monto'));
    $('#editar_partida_relf').attr('action', '/mp-resolucion/editarpartidarel');
    return false;
}

function ver_vacaciones_editar(data) {
    var data = data;
    console.debug(data.id);
    $('#vaca').modal();
    $('#vcedula2').val($(data).attr('data-cedula'));
    $('#vapellidos2').val($(data).attr('data-apellidos'));
    $('#vnombres2').val($(data).attr('data-nombres'));
    $('#vcargo2').val($(data).attr('data-cargo'));
    $('#vgrupo2').val($(data).attr('data-grupo'));
    $('#vsueldo_base2').val($(data).attr('data-sueldo_base'));
    $('#vdias').val($(data).attr('data-dias'));
    $('#vbono').val($(data).attr('data-bono'));
    $('#vdisfrute').val($(data).attr('data-disfrute'));
    $('#vtpsn').val($(data).attr('data-tps'));
    $('#vmsn').val($(data).attr('data-ms'));
    $('#form_vaca').attr('action', '/m-r-r-h-h-vacaciones-o/asignardias');
    return false;
}

function asignar_v(data) {
    var data = data;
    $('#vacaciones').modal();
    $('#idv').val($(data).attr('idv'));
    $('#cedulav').val($(data).attr('cedulav'));
    $('#apellidosvx').val($(data).attr('data-apellidosvx'));
    $('#nombresvx').val($(data).attr('data-nombresvx'));
    $('#cargovx').val($(data).attr('data-cargovx'));
    $('#fechasv').val($(data).attr('fechasv'));
    $('#fechaev').val($(data).attr('fechaev'));
    $('#alicuota').val($(data).attr('alicuota'));
    $('#disfrutev').val($(data).attr('disfrute'));
    $('#alicuotav').val($(data).attr('alicuota_v'));
    $('#alicuotaf').val($(data).attr('alicuota_f'));
    $('#diasv').val($(data).attr('dias'));
    $('#dias_bonov').val($(data).attr('dias_bono'));
    $('#tpv').val($(data).attr('tpv'));
    $('#mesv').val($(data).attr('mesv'));
    $('#quincenav').val($(data).attr('quincenav'));
    $('#quinqueniov').val($(data).attr('quinqueniov'));
    $('#cargov').val($(data).attr('data-cargo'));
    $('#grupov').val($(data).attr('data-grupo'));
    $('#sueldo_basev').val($(data).attr('data-sueldo_base'));
    $('#diasvx').val($(data).attr('data-diasvx'));
    $('#dias_bonovx').val($(data).attr('data-dias_bonovx'));
    $('#horas_extrasvx').val($(data).attr('data-horas_extrasvx'));
    $('#prima_antiguedadv').val($(data).attr('data-prima_antiguedad'));
    $('#prima_profesionv').val($(data).attr('data-prima_profesion'));
    $('#prima_hijosv').val($(data).attr('data-prima_hijos'));
    $('#prima_hogarv').val($(data).attr('data-prima_hogar'));
    $('#form_v').attr('action', '/m-r-r-h-h-vacaciones/EditarV');
}

function asignar_f(data) {
    var data = data;
    $('#fin').modal();
    $('#idf').val($(data).attr('idv'));
    $('#cedulaf').val($(data).attr('cedulav'));
    $('#apellidosfx').val($(data).attr('data-apellidosvx'));
    $('#nombresfx').val($(data).attr('data-nombresvx'));
    $('#cargofx').val($(data).attr('data-cargovx'));
    $('#fechasf').val($(data).attr('fechasv'));
    $('#fechaef').val($(data).attr('fechaev'));
    $('#alicuota').val($(data).attr('alicuota'));
    $('#disfrutef').val($(data).attr('disfrute'));
    $('#alicuotaf').val($(data).attr('alicuota_v'));
    $('#alicuotaf').val($(data).attr('alicuota_f'));
    $('#diasf').val($(data).attr('dias'));
    $('#dias_bonof').val($(data).attr('dias_bono'));
    $('#tpf').val($(data).attr('tpv'));
    $('#desdef').val($(data).attr('desdev'));
    $('#hastaf').val($(data).attr('hastav'));
    $('#quinqueniof').val($(data).attr('quinqueniov'));
    $('#cargof').val($(data).attr('data-cargo'));
    $('#grupof').val($(data).attr('data-grupo'));
    $('#sueldo_basef').val($(data).attr('data-sueldo_base'));
    $('#diasfx').val($(data).attr('data-diasvx'));
    $('#dias_bonofx').val($(data).attr('data-dias_bonovx'));
    $('#horas_extrasfx').val($(data).attr('data-horas_extrasvx'));
    $('#prima_antiguedadf').val($(data).attr('data-prima_antiguedad'));
    $('#prima_profesionf').val($(data).attr('data-prima_profesion'));
    $('#prima_hijosf').val($(data).attr('data-prima_hijos'));
    $('#prima_hogarf').val($(data).attr('data-prima_hogar'));
    $('#form_f').attr('action', '/m-r-r-h-h-fin/EditarF');
}

function ver_vacaciones_editar_obreros(data) {
    var data = data;
    console.debug(data.id);
    $('#vaco').modal();
    $('#cedulao').val($(data).attr('data-cedula'));
    $('#apellidoso').val($(data).attr('data-apellidos'));
    $('#nombreso').val($(data).attr('data-nombres'));
    $('#cargoo').val($(data).attr('data-cargo'));
    $('#grupoo').val($(data).attr('data-grupo'));
    $('#sueldo_baseo').val($(data).attr('data-sueldo_base'));
    $('#dias5').val($(data).attr('data-diaso'));
    $('#bonoo').val($(data).attr('data-bonoo'));
    $('#disfruteo').val($(data).attr('data-disfruteo'));
    $('#fecha_desdeo').val($(data).attr('data-fecha_desdeo'));
    $('#fecha_hastao').val($(data).attr('data-fecha_hastao'));
    $('#fecha_reintegroo').val($(data).attr('data-fecha_reintegroo'));
    $('#cantidad_diaso').val($(data).attr('data-cantidad_diaso'));
    $('#prima_antiguedado').val($(data).attr('data-prima_antiguedado'));
    $('#prima_profesiono').val($(data).attr('data-prima_profesiono'));
    $('#prima_hijoso').val($(data).attr('data-prima_hijoso'));
    $('#prima_hogaro').val($(data).attr('data-prima_hogaro'));
    $('#tpso').val($(data).attr('data-tps'));
    $('#mso').val($(data).attr('data-ms'));
    $('#qso').val($(data).attr('data-qs'));
    $('#dias_do').val($(data).attr('data-dias_do'));
    $('#dias_bonoo').val($(data).attr('data-dias_bonoo'));
    $('#horas_extraso').val($(data).attr('data-horas_extraso'));
    $('#form_vaco').attr('action', '/m-r-r-h-h-vacaciones-o/asignardias');
    return false;
}

function ver_fin_editar_obreros(data) {
    var data = data;
    console.debug(data.id);
    $('#fo_fin').modal();
    $('#fo_cedulao').val($(data).attr('data-cedula'));
    $('#fo_apellidoso').val($(data).attr('data-apellidos'));
    $('#fo_nombreso').val($(data).attr('data-nombres'));
    $('#fo_cargoo').val($(data).attr('data-cargo'));
    $('#fo_grupoo').val($(data).attr('data-grupo'));
    $('#fo_sueldo_baseo').val($(data).attr('data-sueldo_base'));
    $('#fo_dias5').val($(data).attr('data-diaso'));
    $('#fo_bonoo').val($(data).attr('data-bonoo'));
    $('#fo_disfruteo').val($(data).attr('data-disfruteo'));
    $('#fo_fecha_desdeo').val($(data).attr('data-fecha_desdeo'));
    $('#fo_fecha_hastao').val($(data).attr('data-fecha_hastao'));
    $('#fo_fecha_reintegroo').val($(data).attr('data-fecha_reintegroo'));
    $('#fo_cantidad_diaso').val($(data).attr('data-cantidad_diaso'));
    $('#fo_prima_antiguedado').val($(data).attr('data-prima_antiguedado'));
    $('#fo_prima_profesiono').val($(data).attr('data-prima_profesiono'));
    $('#fo_prima_hijoso').val($(data).attr('data-prima_hijoso'));
    $('#fo_prima_hogaro').val($(data).attr('data-prima_hogaro'));
    $('#fo_tpso').val($(data).attr('data-tps'));
    $('#fo_dso').val($(data).attr('data-ds'));
    $('#fo_hso').val($(data).attr('data-hs'));
    $('#fo_dias_do').val($(data).attr('data-dias_do'));
    $('#fo_dias_bonoo').val($(data).attr('data-dias_bonoo'));
    $('#fo_horas_extraso').val($(data).attr('data-horas_extraso'));
    $('#fo_form_fin').attr('action', '/m-r-r-h-h-fin-o/asignardias');
    return false;
}

function modal_bono_editar(data) {
    var data = data;
    console.debug(data.id);
    $('#bono').modal();
    $('#cedula3').val($(data).attr('data-cedula'));
    $('#apellidos3').val($(data).attr('data-apellidos'));
    $('#nombres3').val($(data).attr('data-nombres'));
    $('#cargo3').val($(data).attr('data-cargo'));
    $('#grupo3').val($(data).attr('data-grupo'));
    $('#sueldo_base3').val($(data).attr('data-sueldo_base'));
    $('#bono_dejado_cbe').val($(data).attr('data-bono_dejado_cbe'));
    $('#bono_dias_cancelarbe').val($(data).attr('data-bono_dias_cancelarbe'));
    $('#tpsn2').val($(data).attr('data-tps'));
    $('#msn2').val($(data).attr('data-ms'));
    $('#qsn2').val($(data).attr('data-qs'));
    $('#form_editar_bono').attr('action', '/m-r-r-h-h-bono-estabilidad/asignarbono');
    return false;
}

function modal_asistencia_editar(data) {
    var data = data;
    console.debug(data.id);
    $('#asistencia').modal();
    $('#cedulaam').val($(data).attr('data-cedula'));
    $('#apellidosam').val($(data).attr('data-apellidos'));
    $('#nombresam').val($(data).attr('data-nombres'));
    $('#cargoam').val($(data).attr('data-cargo'));
    $('#grupoam').val($(data).attr('data-grupo'));
    $('#sueldo_baseam').val($(data).attr('data-sueldo_base'));
    $('#bono_dejado_cam').val($(data).attr('data-bono_dejado_cam'));
    $('#bono_dias_cancelaram').val($(data).attr('data-bono_dias_cancelaram'));
    $('#tpsnam').val($(data).attr('data-tps'));
    $('#msnam').val($(data).attr('data-ms'));
    $('#qsnam').val($(data).attr('data-qs'));
    $('#form_editar_asistencia').attr('action', '/m-r-r-h-h-asistencia-medica/asignarasistencia');
    return false;
}

function asignar_ps(data) {
    var data = data;
    $('#ps').modal();
    $('#cedulax').val($(data).attr('cedulax'));
    $('#tpx').val($(data).attr('tpx'));
    $('#mesx').val($(data).attr('mesx'));
    $('#form_ps').attr('action', '/m-r-r-h-h-prestaciones-sociales/asignar');
}

function video(data) {
    $('#video').modal();
    return false;
}

function ajustar(data) {
    var data = data;
    $('#ajustar').modal();
    $('#partida').val($(data).attr('partida'));
    $('#form_info').attr('action', '/mp-egresos/ajustar');
}

function incrementar(data) {
    var data = data;
    $('#incrementar').modal();
    $('#partidai').val($(data).attr('partidai'));
    $('#id_sectori').val($(data).attr('id_sectori'));
    $('#id_programai').val($(data).attr('id_programai'));
    $('#id_sub_programai').val($(data).attr('id_sub_programai'));
    $('#id_proyectoi').val($(data).attr('id_proyectoi'));
    $('#id_actividadi').val($(data).attr('id_actividadi'));
    $('#n_resolucioni').val($(data).attr('n_resolucion'));
    $('#usa').val($(data).attr('us'));
    $('#form_incrementar').attr('action', '/mp-resolucion/incrementar');
}

function disminuir(data) {
    var data = data;
    $('#disminuir').modal();
    $('#partidad').val($(data).attr('partidad'));
    $('#id_sectord').val($(data).attr('id_sectord'));
    $('#id_programad').val($(data).attr('id_programad'));
    $('#id_sub_programad').val($(data).attr('id_sub_programad'));
    $('#id_proyectod').val($(data).attr('id_proyectod'));
    $('#id_actividadd').val($(data).attr('id_actividadd'));
    $('#n_resoluciond').val($(data).attr('n_resolucion'));
    $('#usd').val($(data).attr('us'));
    $('#form_disminuir').attr('action', '/mp-resolucion/disminuir');
}

function asignar_ct_empleados(data) {
    var data = data;
    $('#cestaticket').modal();
    $('#id').val($(data).attr('id'));
    $('#cedula').val($(data).attr('data-cedula'));
    $('#dias_trabajados').val($(data).attr('data-dias_trabajados'));
    $('#dias_faltados').val($(data).attr('data-dias_faltados'));
    $('#dias_a_cancelar').val($(data).attr('data-dias_a_cancelar'));
    $('#tp').val($(data).attr('tp'));
    $('#m').val($(data).attr('m'));
    $('#form_info').attr('action', '/m-r-r-h-h-cesta-ticket-empleados/EditarCT');
}

function asignar_ct_cementerio(data) {
    var data = data;
    $('#cestaticket').modal();
    $('#id').val($(data).attr('id'));
    $('#cedula').val($(data).attr('data-cedula'));
    $('#dias_trabajados').val($(data).attr('data-dias_trabajados'));
    $('#dias_faltados').val($(data).attr('data-dias_faltados'));
    $('#dias_a_cancelar').val($(data).attr('data-dias_a_cancelar'));
    $('#tp').val($(data).attr('tp'));
    $('#m').val($(data).attr('m'));
    $('#form_info').attr('action', '/m-r-r-h-h-cesta-ticket-cementerio/EditarCT');
}

function asignar_ct_obreros(data) {
    var data = data;
    $('#cestaticket').modal();
    $('#id').val($(data).attr('id'));
    $('#cedula').val($(data).attr('data-cedula'));
    $('#dias_trabajados').val($(data).attr('data-dias_trabajados'));
    $('#dias_faltados').val($(data).attr('data-dias_faltados'));
    $('#dias_a_cancelar').val($(data).attr('data-dias_a_cancelar'));
    $('#tp').val($(data).attr('tp'));
    $('#m').val($(data).attr('m'));
    $('#form_info').attr('action', '/m-r-r-h-h-cesta-ticket-obreros/EditarCT');
}

function asignar_ct_proteccion_civil(data) {
    var data = data;
    $('#cestaticket').modal();
    $('#id').val($(data).attr('id'));
    $('#cedula').val($(data).attr('data-cedula'));
    $('#dias_trabajados').val($(data).attr('data-dias_trabajados'));
    $('#dias_faltados').val($(data).attr('data-dias_faltados'));
    $('#dias_a_cancelar').val($(data).attr('data-dias_a_cancelar'));
    $('#tp').val($(data).attr('tp'));
    $('#m').val($(data).attr('m'));
    $('#form_info').attr('action', '/m-r-r-h-h-cesta-ticket-proteccion-civil/EditarCT');
}

function asignar_he_empleados(data) {
    var data = data;
    $('#horasextras').modal();
    $('#id2').val($(data).attr('id'));
    $('#cedula25').val($(data).attr('data-cedula'));
    $('#cantidad_dias').val($(data).attr('data-cantidad_dias'));
    $('#dias_no_laborables').val($(data).attr('data-dias_no_laborables'));
    $('#cantidad_horas').val($(data).attr('data-cantidad_horas'));
    $('#cantidad_horas_extra_diurnas').val($(data).attr('data-cantidad_horas_extra_diurnas'));
    $('#cantidad_horas_extra_nocturnas').val($(data).attr('data-cantidad_horas_extra_nocturnas'));
    $('#tp2').val($(data).attr('tp'));
    $('#m2').val($(data).attr('m'));
    $('#o2').val($(data).attr('o'));
    $('#form_he').attr('action', '/m-r-r-h-h-horas-extras-empleados/EditarHE');
}

function ver_ano_real(data) {
    var data = data;
    $('#ver_ano_real').modal();
    $('#ano_real_femenino').val($(data).attr('ano_real_femenino'));
    $('#ano_real_maculino').val($(data).attr('ano_real_maculino'));
    $('#ano_real_monto').val($(data).attr('ano_real_monto'));
    $('#ano_real_incidencias').val($(data).attr('ano_real_incidencias'));
}

function ver_ultimo_ano(data) {
    var data = data;
    $('#ver_ultimo_ano').modal();
    $('#ultimo_ano_id').val($(data).attr('ultimo_ano_id'));
    $('#ultimo_ano_femenino').val($(data).attr('ultimo_ano_femenino'));
    $('#ultimo_ano_maculino').val($(data).attr('ultimo_ano_maculino'));
    $('#ultimo_ano_monto').val($(data).attr('ultimo_ano_monto'));
    $('#ultimo_ano_incidencias').val($(data).attr('ultimo_ano_incidencias'));
    $('#ultimo_ano').attr('action', '/mrrhh-formulacion/editarultimoano');
}

function ver_ano_presupuestado(data) {
    var data = data;
    $('#ver_ano_presupuestado').modal();
    $('#ano_presupuestado_femenino').val($(data).attr('ano_presupuestado_femenino'));
    $('#ano_presupuestado_maculino').val($(data).attr('ano_presupuestado_maculino'));
    $('#ano_presupuestado_monto').val($(data).attr('ano_presupuestado_monto'));
    $('#ano_presupuestado_incidencias').val($(data).attr('ano_presupuestado_incidencias'));
}

function ver_ano_real_empleados(data) {
    var data = data;
    $('#ver_ano_real_empleados').modal();
    $('#ano_real_femenino_empleados').val($(data).attr('ano_real_femenino'));
    $('#ano_real_maculino_empleados').val($(data).attr('ano_real_maculino'));
    $('#ano_real_monto_empleados').val($(data).attr('ano_real_monto'));
    $('#ano_real_compensaciones_empleados').val($(data).attr('ano_real_compensaciones'));
    $('#ano_real_primas_empleados').val($(data).attr('ano_real_primas'));
}

function ver_ultimo_ano_empleados(data) {
    var data = data;
    $('#ver_ultimo_ano_empleados').modal();
    $('#ultimo_ano_id_empleados').val($(data).attr('ultimo_ano_id'));
    $('#ultimo_ano_femenino_empleados').val($(data).attr('ultimo_ano_femenino'));
    $('#ultimo_ano_maculino_empleados').val($(data).attr('ultimo_ano_maculino'));
    $('#ultimo_ano_monto_empleados').val($(data).attr('ultimo_ano_monto'));
    $('#ultimo_ano_compensaciones_empleados').val($(data).attr('ultimo_ano_compensaciones'));
    $('#ultimo_ano_primas_empleados').val($(data).attr('ultimo_ano_primas'));
    $('#ultimo_ano_empleados').attr('action', '/mrrhh-formulacion/editarultimoanoempleados');
}

function ver_ano_presupuestado_empleados(data) {
    var data = data;
    $('#ver_ano_presupuestado_empleados').modal();
    $('#ano_presupuestado_femenino_empleados').val($(data).attr('ano_presupuestado_femenino'));
    $('#ano_presupuestado_maculino_empleados').val($(data).attr('ano_presupuestado_maculino'));
    $('#ano_presupuestado_monto_empleados').val($(data).attr('ano_presupuestado_monto'));
    $('#ano_presupuestado_compensaciones_empleados').val($(data).attr('ano_presupuestado_compensaciones'));
    $('#ano_presupuestado_primas_empleados').val($(data).attr('ano_presupuestado_primas'));
}

function asignar_he_obreros(data) {
    var data = data;
    $('#horasextras').modal();
    $('#id2').val($(data).attr('id'));
    $('#cedula25').val($(data).attr('data-cedula'));
    $('#cantidad_dias').val($(data).attr('data-cantidad_dias'));
    $('#dias_no_laborables').val($(data).attr('data-dias_no_laborables'));
    $('#cantidad_horas').val($(data).attr('data-cantidad_horas'));
    $('#cantidad_horas_extra_diurnas').val($(data).attr('data-cantidad_horas_extra_diurnas'));
    $('#cantidad_horas_extra_nocturnas').val($(data).attr('data-cantidad_horas_extra_nocturnas'));
    $('#tp2').val($(data).attr('tp'));
    $('#m2').val($(data).attr('m'));
    $('#o2').val($(data).attr('o'));
    $('#form_he').attr('action', '/m-r-r-h-h-horas-extras-obreros/EditarHE');
}

function asignar_he_proteccion_civil(data) {
    var data = data;
    $('#horasextras').modal();
    $('#id2').val($(data).attr('id'));
    $('#cedula2').val($(data).attr('data-cedula'));
    $('#cantidad_dias').val($(data).attr('data-cantidad_dias'));
    $('#dias_no_laborables').val($(data).attr('data-dias_no_laborables'));
    $('#cantidad_horas').val($(data).attr('data-cantidad_horas'));
    $('#cantidad_horas_extra_diurnas').val($(data).attr('data-cantidad_horas_extra_diurnas'));
    $('#cantidad_horas_extra_nocturnas').val($(data).attr('data-cantidad_horas_extra_nocturnas'));
    $('#tp2').val($(data).attr('tp'));
    $('#m2').val($(data).attr('m'));
    $('#form_he').attr('action', '/m-r-r-h-h-horas-extras-proteccion-civil/EditarHE');
}

function numeroordennomina(data) {
    var data = data;
    $('#numeroordenm').modal();
    $('#n_id').val($(data).attr('id'));
    $('#n_fecha_rrhh').val($(data).attr('fecha_rrhh'));
    $('#n_fecha_ejecucion').val($(data).attr('fecha_ejecucion'));
    $('#n_fecha_ordenamiento').val($(data).attr('fecha_ordenamiento'));
    $('#n_numero_orden_pago_ord').val($(data).attr('numero_orden_pago_ord'));
    $('#numeroorden').attr('action', '/m-ordenamiento/numeroordennomina');
}

function numeroordencompra(data) {
    var data = data;
    $('#numeroordenm').modal();
    $('#n_id').val($(data).attr('id'));
    $('#n_fecha_rrhh').val($(data).attr('fecha_rrhh'));
    $('#n_fecha_ejecucion').val($(data).attr('fecha_ejecucion'));
    $('#n_fecha_ordenamiento').val($(data).attr('fecha_ordenamiento'));
    $('#n_numero_orden_pago_ord').val($(data).attr('numero_orden_pago_ord'));
    $('#numeroorden').attr('action', '/m-ordenamiento/numeroordencompra');
}

function numeroordenservicio(data) {
    var data = data;
    $('#numeroordenm').modal();
    $('#n_id').val($(data).attr('id'));
    $('#n_fecha_rrhh').val($(data).attr('fecha_rrhh'));
    $('#n_fecha_ejecucion').val($(data).attr('fecha_ejecucion'));
    $('#n_fecha_ordenamiento').val($(data).attr('fecha_ordenamiento'));
    $('#n_numero_orden_pago_ord').val($(data).attr('numero_orden_pago_ord'));
    $('#numeroorden').attr('action', '/m-ordenamiento/numeroordenservicio');
}

function numeroordentransferencia(data) {
    var data = data;
    $('#numeroordenm2').modal();
    $('#nn_id').val($(data).attr('id'));
    $('#nn_fecha_ordenamiento').val($(data).attr('fecha_ordenamiento'));
    $('#nn_fecha').val($(data).attr('fecha'));
    $('#nn_numero_orden_pago_ord').val($(data).attr('numero_orden_pago_ord'));
    $('#numeroorden2').attr('action', '/m-ordenamiento/numeroordentransferencia');
}
$('document').ready(function() {
    $('#id_partida').change(function() {
        var op = $("#id_partida option:selected").val();
        cargar_descripcion_partida(op);
    });

    function cargar_descripcion_partida(op) {
        var op = op;
        $.ajax({
            method: 'get',
            url: "/ajax/descripcionpartida/" + op, //localhost
            success: function(response) {
                $("#descripcion_partida").val(response[0][0]['ordinald_denominacion'].toUpperCase());
            }
        })
    }
    $('#id_partida_2').change(function() {
        var op = $("#id_partida_2 option:selected").val();
        cargar_descripcion_partida_compra(op);
    });
    $('#id_partida_22').change(function() {
        var op = $("#id_partida_22 option:selected").val();
        cargar_descripcion_partida_compra(op);
    });

    function cargar_descripcion_partida_compra(op) {
        var op = op;
        $.ajax({
            method: 'get',
            url: "/ajax/descripcionpartida/" + op, //localhost
            success: function(response) {
                $("#descripcion_partida_2").val(response[0][0]['ordinald_denominacion'].toUpperCase());
                $("#descripcion_partida_22").val(response[0][0]['ordinald_denominacion'].toUpperCase());
            }
        })
    }
    //=====================================================================
    // De sector a programa
    $('#sector').change(function() {
        var op = $("#sector option:selected").val();
        cargar_denominacion_sector(op);
        cargar_programas(op);
    });

    function cargar_programas(op) {
        var op = op;
        $.ajax({
            method: 'get',
            url: "/ajax/programas/" + op, //localhost
            error: function(response) {
                $("#programa").append('<option >error</option>');
            },
            success: function(response) {
                $("#programa").empty();
                var length = response.length;
                for (i = 0; i < length; i++) {
                    $("#programa").append('<option disabled selected>--</option>');
                    for (j = 0; j < 500; j++) {
                        if (response[i][j]['programa'] != '') {
                            $("#programa").append('<option value="' + response[i][j]['id'] + '">' + response[i][j]['programa'].toUpperCase() + '</option>');
                        }
                    }
                }
            }
        })
    }

    function cargar_denominacion_sector(op) {
        var op = op;
        $.ajax({
            method: 'get',
            url: "/ajax/denominacionsector/" + op, //localhost
            success: function(response) {
                $("#denominacion_sector").val(response[0][0]['denominacion']);
            }
        })
    }
    //=====================================================================
    // De  programa a subprograma
    $('#programa').change(function() {
        var op = $("#programa option:selected").val();
        cargar_denominacion_programa(op);
        cargar_subprogramas(op);
    });

    function cargar_subprogramas(op) {
        var op = op;
        $.ajax({
            method: 'get',
            url: "/ajax/subprogramas/" + op, //localhost
            error: function(response) {
                $("#subprograma").append('<option >error</option>');
            },
            success: function(response) {
                $("#subprograma").empty();
                var length = response.length;
                for (i = 0; i < length; i++) {
                    $("#subprograma").append('<option disabled selected>--</option>');
                    for (j = 0; j < 500; j++) {
                        if (response[i][j]['sub_programa'] != '') {
                            $("#subprograma").append('<option value="' + response[i][j]['id'] + '">' + response[i][j]['sub_programa'].toUpperCase() + '</option>');
                        }
                    }
                }
            }
        })
    }

    function cargar_denominacion_programa(op) {
        var op = op;
        $.ajax({
            method: 'get',
            url: "/ajax/denominacionprograma/" + op, //localhost
            success: function(response) {
                $("#denominacion_programa").val(response[0][0]['denominacion']);
            }
        })
    }
    //=====================================================================
    // De subprograma a proyectos
    $('#subprograma').change(function() {
        var op = $("#subprograma option:selected").val();
        cargar_proyectos(op);
        cargar_actividad(op);
        cargar_denominacion_subprograma(op);
    });

    function cargar_proyectos(op) {
        var op = op;
        $.ajax({
            method: 'get',
            url: "/ajax/proyectos/" + op, //localhost
            error: function(response) {
                $("#proyecto").append('<option >error</option>');
            },
            success: function(response) {
                $("#proyecto").empty();
                var length = response.length;
                for (i = 0; i < length; i++) {
                    $("#proyecto").append('<option disabled selected>--</option>');
                    for (j = 0; j < 500; j++) {
                        if (response[i][j]['proyecto'] != '') {
                            $("#proyecto").append('<option value="' + response[i][j]['id'] + '">' + response[i][j]['proyecto'].toUpperCase() + '</option>');
                        }
                    }
                }
            }
        });
    }

    function cargar_actividad(op) {
        var op = op;
        $.ajax({
            method: 'get',
            url: "/ajax/actividades/" + op, //localhost
            error: function(response) {
                $("#actividad").append('<option >error</option>');
            },
            success: function(response) {
                $("#actividad").empty();
                var length = response.length;
                for (i = 0; i < length; i++) {
                    $("#actividad").append('<option disabled selected>--</option>');
                    for (j = 0; j < 500; j++) {
                        if (response[i][j]['actividad'] != '') {
                            $("#actividad").append('<option value="' + response[i][j]['id'] + '">' + response[i][j]['actividad'].toUpperCase() + '</option>');
                        }
                    }
                }
            }
        });
    }

    function cargar_denominacion_subprograma(op) {
        var op = op;
        $.ajax({
            method: 'get',
            url: "/ajax/denominacionsubprograma/" + op, //localhost
            success: function(response) {
                $("#denominacion_subprograma").val(response[0][0]['denominacion']);
            }
        })
    }
    //=====================================================================
    $('#id_proyectox').change(function() {
        var op = $("#id_proyectox option:selected").val();
        cargar_denominacion_proyecto(op);
        $("#denominacion_actividad").val('');
        $('#id_actividadx option').prop('selected', function() {
            return this.defaultSelected;
        });
    });
    $('#id_actividadx').change(function() {
        var op = $("#id_actividadx option:selected").val();
        cargar_denominacion_actividad(op);
        $("#denominacion_proyecto").val('');
        $('#id_proyectox option').prop('selected', function() {
            return this.defaultSelected;
        });
    });
    //=====================================================================
    $('#proyecto').change(function() {
        var op = $("#proyecto option:selected").val();
        cargar_denominacion_proyecto(op);
        $("#denominacion_actividad").val('');
        $('#actividad option').prop('selected', function() {
            return this.defaultSelected;
        });
    });

    function cargar_denominacion_proyecto(op) {
        var op = op;
        $.ajax({
            method: 'get',
            url: "/ajax/denominacionproyecto/" + op, //localhost
            success: function(response) {
                $("#denominacion_proyecto").val(response[0][0]['denominacion']);
            }
        })
    }
    $('#actividad').change(function() {
        var op = $("#actividad option:selected").val();
        cargar_denominacion_actividad(op);
        $("#denominacion_proyecto").val('');
        $('#proyecto option').prop('selected', function() {
            return this.defaultSelected;
        });
    });

    function cargar_denominacion_actividad(op) {
        var op = op;
        $.ajax({
            method: 'get',
            url: "/ajax/denominacionactividad/" + op, //localhost
            success: function(response) {
                $("#denominacion_actividad").val(response[0][0]['denominacion']);
            }
        })
    }
    //=====================================================================
    $('#partida').change(function() {
        var op = $("#partida option:selected").val();
        cargar_denominacion_partida(op);
    });

    function cargar_denominacion_partida(op) {
        var op = op;
        $.ajax({
            method: 'get',
            url: "/ajax/denominacionpartida/" + op, //localhost
            success: function(response) {
                $("#denominacion_partida").val(response[0][0]['denominacion']);
            }
        })
    }
    //=====================================================================
    $('#id_banco').change(function() {
        var op = $("#id_banco option:selected").val();
        d = document.getElementById('fecha_inicio').value;
        h = document.getElementById('fecha_corte').value;
        ultimo_sueldo(op, d, h);
    });

    function ultimo_sueldo(op, d, h) {
        $.ajax({
            method: 'get',
            url: "/ajax/ultimosueldo/" + op + "/" + d + "/" + h, //localhost
            success: function(response) {
                $("#saldo_libro").val((response[0]).toFixed(2));
            }
        })
    }
    //=====================================================================
    $('#add_sector').click(function() {
        $('#denominacion_sector').val('');
        document.getElementById("denominacion_sector").removeAttribute("readonly");
        document.getElementById("nuevo_sector").type = "text";
        document.getElementById("sector").style.display = "none";
        $('#denominacion_programa').val('');
        document.getElementById("denominacion_programa").removeAttribute("readonly");
        document.getElementById("nuevo_programa").type = "text";
        document.getElementById("programa").style.display = "none";
        $('#denominacion_subprograma').val('');
        document.getElementById("denominacion_subprograma").removeAttribute("readonly");
        document.getElementById("nuevo_subprograma").type = "text";
        document.getElementById("subprograma").style.display = "none";
        $('#denominacion_proyecto').val('');
        document.getElementById("denominacion_proyecto").removeAttribute("readonly");
        document.getElementById("nuevo_proyecto").type = "text";
        document.getElementById("proyecto").style.display = "none";
    });
    //=====================================================================
    $('#add_programa').click(function() {
        $('#denominacion_programa').val('');
        document.getElementById("denominacion_programa").removeAttribute("readonly");
        document.getElementById("nuevo_programa").type = "text";
        document.getElementById("programa").style.display = "none";
        $('#denominacion_subprograma').val('');
        document.getElementById("denominacion_subprograma").removeAttribute("readonly");
        document.getElementById("nuevo_subprograma").type = "text";
        document.getElementById("subprograma").style.display = "none";
        $('#denominacion_proyecto').val('');
        document.getElementById("denominacion_proyecto").removeAttribute("readonly");
        document.getElementById("nuevo_proyecto").type = "text";
        document.getElementById("proyecto").style.display = "none";
    });
    //=====================================================================
    $('#add_subprograma').click(function() {
        $('#denominacion_subprograma').val('');
        document.getElementById("denominacion_subprograma").removeAttribute("readonly");
        document.getElementById("nuevo_subprograma").type = "text";
        document.getElementById("subprograma").style.display = "none";
        $('#denominacion_proyecto').val('');
        document.getElementById("denominacion_proyecto").removeAttribute("readonly");
        document.getElementById("nuevo_proyecto").type = "text";
        document.getElementById("proyecto").style.display = "none";
    });
    //=====================================================================
    $('#add_proyecto').click(function() {
        $('#denominacion_proyecto').val('');
        document.getElementById("denominacion_proyecto").removeAttribute("readonly");
        document.getElementById("nuevo_proyecto").type = "text";
        document.getElementById("proyecto").style.display = "none";
    });
    //=========================================================0
    //ACTIVIDAD
    //=====================================================================
    $('#add_sector2').click(function() {
        $('#denominacion_sector2').val('');
        document.getElementById("denominacion_sector2").removeAttribute("readonly");
        document.getElementById("nuevo_sector2").type = "text";
        document.getElementById("sector2").style.display = "none";
        $('#denominacion_programa2').val('');
        document.getElementById("denominacion_programa2").removeAttribute("readonly");
        document.getElementById("nuevo_programa2").type = "text";
        document.getElementById("programa2").style.display = "none";
        $('#denominacion_subprograma2').val('');
        document.getElementById("denominacion_subprograma2").removeAttribute("readonly");
        document.getElementById("nuevo_subprograma2").type = "text";
        document.getElementById("subprograma2").style.display = "none";
        $('#denominacion_proyecto2').val('');
        document.getElementById("denominacion_proyecto2").removeAttribute("readonly");
        document.getElementById("nuevo_proyecto2").type = "text";
        document.getElementById("proyecto2").style.display = "none";
    });
    //=====================================================================
    $('#add_programa2').click(function() {
        $('#denominacion_programa2').val('');
        document.getElementById("denominacion_programa2").removeAttribute("readonly");
        document.getElementById("nuevo_programa2").type = "text";
        document.getElementById("programa2").style.display = "none";
        $('#denominacion_subprograma2').val('');
        document.getElementById("denominacion_subprograma2").removeAttribute("readonly");
        document.getElementById("nuevo_subprograma2").type = "text";
        document.getElementById("subprograma2").style.display = "none";
        $('#denominacion_proyecto2').val('');
        document.getElementById("denominacion_proyecto2").removeAttribute("readonly");
        document.getElementById("nuevo_proyecto2").type = "text";
        document.getElementById("proyecto2").style.display = "none";
    });
    //=====================================================================
    $('#add_subprograma2').click(function() {
        $('#denominacion_subprograma2').val('');
        document.getElementById("denominacion_subprograma2").removeAttribute("readonly");
        document.getElementById("nuevo_subprograma2").type = "text";
        document.getElementById("subprograma2").style.display = "none";
        $('#denominacion_proyecto2').val('');
        document.getElementById("denominacion_proyecto2").removeAttribute("readonly");
        document.getElementById("nuevo_proyecto2").type = "text";
        document.getElementById("proyecto2").style.display = "none";
    });
    //=====================================================================
    $('#add_proyecto2').click(function() {
        $('#denominacion_proyecto2').val('');
        document.getElementById("denominacion_proyecto2").removeAttribute("readonly");
        document.getElementById("nuevo_proyecto2").type = "text";
        document.getElementById("proyecto2").style.display = "none";
    });
});
//=========================================================================
$('document').ready(function() {
    // De sector a programa
    $('#tipo_nomina').change(function() {
        var op = $("#tipo_nomina option:selected").val();
        cargar_tipo_personal(op);
    });

    function cargar_tipo_personal(op) {
        var op = op;
        $.ajax({
            method: 'get',
            url: "/ajax/tipopersonal/" + op, //localhost
            error: function(response) {
                $("#tipo_personal").append('<option >error</option>');
            },
            success: function(response) {
                $("#tipo_personal").empty();
                $("#grupo").empty();
                $("#grupo").append('<option disabled selected>--Seleccione--</option>');
                $("#cargo").empty();
                $("#cargo").append('<option disabled selected>--Seleccione--</option>');
                var length = response.length;
                for (i = 0; i < length; i++) {
                    $("#tipo_personal").append('<option disabled selected>--Seleccione--</option>');
                    for (j = 0; j < 500; j++) {
                        if (response[i][j]['tipo_personal'] != '') {
                            $("#tipo_personal").append('<option value="' + response[i][j]['id'] + '">' + response[i][j]['denominacion'].toUpperCase() + '</option>');
                        }
                    }
                }
            }
        })
    }
});
//=========================================================================
$('document').ready(function() {
    // De sector a programa
    $('#tipo_personal').change(function() {
        var op = $("#tipo_personal option:selected").val();
        cargar_cargos(op);
        cargar_grupos(op);
        cargar_nivel(op);
        cargar_grado_nivel(op);
        if (op == 3 || (op >= 7 && op <= 16)) {
            element = document.getElementById("display");
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    });
    //=========================================================================
    function cargar_cargos(op) {
        var op = op;
        $.ajax({
            method: 'get',
            //url: "/ajax/cargos/" + op, //Servidor
            url: "/ajax/cargos/" + op, //localhost
            error: function(response) {
                $("#cargo").append('<option >error</option>');
            },
            success: function(response) {
                $("#cargo").empty();
                var length = response.length;
                for (i = 0; i < length; i++) {
                    $("#cargo").append('<option disabled selected>--Seleccione--</option>');
                    for (j = 0; j < 500; j++) {
                        if (response[i][j]['cargo'] != '') {
                            $("#cargo").append('<option value="' + response[i][j]['id'] + '">' + response[i][j]['denominacion'].toUpperCase() + '</option>');
                        }
                    }
                }
            }
        })
    }
    //=========================================================================
    function cargar_grupos(op) {
        var op = op;
        $.ajax({
            method: 'get',
            //url: "/ajax/grupos/" + op, //Servidor
            url: "/ajax/grupos/" + op, //localhost
            error: function(response) {
                $("#grupo").append('<option >error</option>');
            },
            success: function(response) {
                $("#grupo").empty();
                var length = response.length;
                for (i = 0; i < length; i++) {
                    $("#grupo").append('<option disabled selected>--Seleccione--</option>');
                    for (j = 0; j < 500; j++) {
                        if (response[i][j]['grupo'] != '') {
                            $("#grupo").append('<option value="' + response[i][j]['id'] + '">' + response[i][j]['denominacion'].toUpperCase() + '</option>');
                        }
                    }
                }
            }
        })
    }
    //=========================================================================
    function cargar_nivel(op) {
        var op = op;
        $.ajax({
            method: 'get',
            //url: "/ajax/nivel/" + op, //Servidor
            url: "/ajax/nivel/" + op, //localhost
            error: function(response) {
                $("#grado_nivel").append('<option >error</option>');
            },
            success: function(response) {
                $("#grado_nivel").empty();
                var length = response.length;
                for (i = 0; i < length; i++) {
                    $("#grado_nivel").append('<option disabled selected>--Seleccione--</option>');
                    for (j = 0; j < 500; j++) {
                        if (response[i][j]['grado_nivel'] != '') {
                            $("#grado_nivel").append('<option value="' + response[i][j]['id'] + '">' + response[i][j]['denominacion'].toUpperCase() + '</option>');
                        }
                    }
                }
            }
        })
    }
    //=========================================================================
    function cargar_grado_nivel(op) {
        var op = op;
        $.ajax({
            method: 'get',
            //url: "/ajax/grado_nivel/" + op, //Servidor
            url: "/ajax/gradonivel/" + op, //localhost
            error: function(response) {
                $("#grado_niveles").append('<option >error</option>');
            },
            success: function(response) {
                $("#grado_niveles").empty();
                var length = response.length;
                for (i = 0; i < length; i++) {
                    $("#grado_niveles").append('<option disabled selected>--Seleccione--</option>');
                    for (j = 0; j < 500; j++) {
                        if (response[i][j]['grado_nivel'] != '') {
                            $("#grado_niveles").append('<option value="' + response[i][j]['id'] + '">' + response[i][j]['denominacion'].toUpperCase() + '</option>');
                        }
                    }
                }
            }
        })
    }
});
//=========================================================================
function editar_orden_compra(data) {
    var data = data;
    $('#ordencompra').modal();
    $('#orden').val($(data).attr('orden'));
    $('#descripcion').val($(data).attr('descripcion'));
    $('#id_orden3').val($(data).attr('id_orden'));
    $('#requisicion3').val($(data).attr('req'));
    $('#form_compra').attr('action', '/m-compra-ordenes-emitidas/EditarOrden');
}

function editar_orden_servicio(data) {
    var data = data;
    $('#ordenservicio').modal();
    $('#orden2').val($(data).attr('orden'));
    $('#descripcion2').val($(data).attr('descripcion'));
    $('#id_orden2').val($(data).attr('id_orden'));
    $('#requisicion2').val($(data).attr('req'));
    $('#form_servicio').attr('action', '/m-compra-ordenes-servicio/EditarOrden');
}

function editar_orden_trans(data) {
    var data = data;
    $('#trans').modal();
    $('#orden').val($(data).attr('orden'));
    $('#beneficiario2').val($(data).attr('beneficiario'));
    $('#descripcion').val($(data).attr('descripcion'));
    $('#id_orden3').val($(data).attr('id_orden'));
    $('#requisicion3').val($(data).attr('req'));
    $('#form_trans').attr('action', '/ejecucion-transferencia/EditarOrden');
}

function editar_item_compra(data) {
    var data = data;
    $('#itemcompra').modal();
    $('#id').val($(data).attr('data-id'));
    $('#id_orden').val($(data).attr('data-id_orden'));
    $('#requisicion').val($(data).attr('data-requisicion'));
    $('#unidad_solicitante').val($(data).attr('data-unidad_solicitante'));
    $('#descripcion_item').val($(data).attr('data-descripcion_item'));
    $('#id_partida_2').val($(data).attr('data-id_partida'));
    $('#descripcion_partida_2').val($(data).attr('data-descripcion_partida'));
    $('#cantidad2').val($(data).attr('data-cantidad'));
    $('#unidad_medida2').val($(data).attr('data-unidad_medida'));
    $('#precio_unitario2').val($(data).attr('data-precio_unitario'));
    $('#form_info').attr('action', '/m-compra-ordenes-emitidas/EditarCompra');
}

function editar_partida_trans(data) {
    var data = data;
    $('#itemtrans').modal();
    $('#id').val($(data).attr('data-id'));
    $('#id_orden').val($(data).attr('data-id_orden'));
    $('#requisicion').val($(data).attr('data-requisicion'));
    $('#unidad_solicitante22').val($(data).attr('data-unidad_solicitante'));
    $('#descripcion_item').val($(data).attr('data-descripcion_item'));
    $('#id_partida_22').val($(data).attr('data-id_partida'));
    $('#descripcion_partida_2').val($(data).attr('data-descripcion_partida'));
    $('#cantidad2').val($(data).attr('data-cantidad'));
    $('#unidad_medida2').val($(data).attr('data-unidad_medida'));
    $('#precio_unitario2').val($(data).attr('data-precio_unitario'));
    $('#form_trans2').attr('action', '/ejecucion-transferencia/editar');
}

function editar_item_servicio(data) {
    var data = data;
    $('#itemservicio2').modal();
    $('#id22').val($(data).attr('data-id'));
    $('#id_orden22').val($(data).attr('data-id_orden'));
    $('#requisicion22').val($(data).attr('data-requisicion'));
    $('#unidad_solicitante22').val($(data).attr('data-unidad_solicitante'));
    $('#descripcion_item22').val($(data).attr('data-descripcion_item'));
    $('#id_partida_22').val($(data).attr('data-id_partida'));
    $('#descripcion_partida_22').val($(data).attr('data-descripcion_partida'));
    $('#cantidad222').val($(data).attr('data-cantidad'));
    $('#unidad_medida222').val($(data).attr('data-unidad_medida'));
    $('#precio_unitario222').val($(data).attr('data-precio_unitario'));
    $('#form_info222').attr('action', '/m-compra-ordenes-servicio/EditarServicio');
}
//=========================================================================
function editar_tabulacion_empleados(data) {
    var data = data;
    $('#myModal').modal();
    $('#id').val($(data).attr('data-id'));
    $('#sueldo_base').val($(data).attr('data-sueldobase'));
    $('#form_info').attr('action', '/m-u-g-m-r-r-h-h-tabulacion-salarial/EditarTabulacionEmpleados');
}
//=========================================================================
function editar_tabulacion_rotativo(data) {
    var data = data;
    $('#myModal').modal();
    $('#id').val($(data).attr('data-id'));
    $('#sueldo_base').val($(data).attr('data-sueldobase'));
    $('#form_info').attr('action', '/m-u-g-m-r-r-h-h-tabulacion-salarial/EditarTabulacionRotativo');
}
//=========================================================================
function editar_ingreso(data) {
    var data = data;
    $('#ingresos').modal();
    $('#id_i').val($(data).attr('data-id'));
    $('#denominacion_i').val($(data).attr('data-denominacion'));
    $('#monto_i').val($(data).attr('data-monto'));
    $('#ingreso').attr('action', '/ingresos/editar');
}

function editar_egreso(data) {
    var data = data;
    $('#egresos').modal();
    $('#id_e').val($(data).attr('data-id'));
    $('#denominacion_e').val($(data).attr('data-denominacion'));
    $('#monto_e').val($(data).attr('data-monto'));
    $('#id_sectore').val($(data).attr('data-id_sector'));
    $('#id_programae').val($(data).attr('data-id_programa'));
    $('#id_sub_programae').val($(data).attr('data-id_sub_programa'));
    $('#id_actividade').val($(data).attr('data-id_actividad'));
    $('#id_proyectoe').val($(data).attr('data-id_proyecto'));
    $('#id_sub_programae').val($(data).attr('data-id_sub_programa'));
    $('#egreso').attr('action', '/mp-proyectos/editaregresos');
}
//=========================================================================
function editar_tabulacion_directivos(data) {
    var data = data;
    $('#myModal').modal();
    $('#id').val($(data).attr('data-id'));
    $('#sueldo_base').val($(data).attr('data-sueldobase'));
    $('#form_info').attr('action', '/m-u-g-m-r-r-h-h-tabulacion-salarial/EditarTabulacionDirectivos');
}
//=========================================================================
function editar_tabulacion_obreros(data) {
    var data = data;
    $('#myModal').modal();
    $('#id').val($(data).attr('data-id'));
    $('#sueldo_base').val($(data).attr('data-sueldobase'));
    $('#form_info').attr('action', '/m-u-g-m-r-r-h-h-tabulacion-salarial/EditarTabulacionObreros');
}
//=========================================================================
function editar_tabulacion_obreros_no_permanentes(data) {
    var data = data;
    $('#myModal').modal();
    $('#id').val($(data).attr('data-id'));
    $('#sueldo_base').val($(data).attr('data-sueldobase'));
    $('#form_info').attr('action', '/m-u-g-m-r-r-h-h-tabulacion-salarial/EditarTabulacionObrerosNoPermanentes');
}
//=========================================================================
function editar_tabulacion_proteccion_civil(data) {
    var data = data;
    $('#myModal').modal();
    $('#id').val($(data).attr('data-id'));
    $('#sueldo_base').val($(data).attr('data-sueldobase'));
    $('#form_info').attr('action', '/m-u-g-m-r-r-h-h-tabulacion-salarial/EditarTabulacionProteccionCivil');
}
//=========================================================================
function editar_tabulacion_primas(data) {
    var data = data;
    $('#mvalor').modal();
    $('#cantidad').val($(data).attr('data-cantidad'));
    $('#porcentaje').val($(data).attr('data-porcentaje'));
    $('#valor').attr('action', '/m-u-g-m-r-r-h-h-tabulacion-salarial/parametrosprimas');
}
//=========================================================================
function parametrosparametros(data) {
    var data = data;
    $('#parametro').modal();
    $('#pid').val($(data).attr('data-id'));
    $('#monto').val($(data).attr('data-monto'));
    $('#parametros').attr('action', '/m-u-g-m-r-r-h-h-tabulacion-salarial/parametrosparametros');
}
//=========================================================================
function parametrosprofesion(data) {
    var data = data;
    $('#profesions').modal();
    $('#ppid').val($(data).attr('data-id'));
    $('#pporcentaje').val($(data).attr('data-porcentaje'));
    $('#profesion').attr('action', '/m-u-g-m-r-r-h-h-tabulacion-salarial/parametrosprofesion');
}
//=========================================================================
//=========================================================================
$('document').ready(function() {
    // De Tipo Nomina a Tipo Personal
    $('#tn').change(function() {
        var op = $("#tn option:selected").val();
        cargar_tp(op);
    });

    function cargar_tp(op) {
        var op = op;
        $.ajax({
            method: 'get',
            //url: "/ajax/tipopersonal/" + op, //Servidor
            url: "/ajax/tipopersonal/" + op, //localhost
            error: function(response) {
                $("#tp").append('<option >error</option>');
            },
            success: function(response) {
                $("#tp").empty();
                var length = response.length;
                for (i = 0; i < length; i++) {
                    $("#tp").append('<option disabled selected>--Seleccione--</option>');
                    for (j = 0; j < 500; j++) {
                        if (response[i][j]['tp'] != '') {
                            $("#tp").append('<option value="' + response[i][j]['id'] + '">' + response[i][j]['denominacion'].toUpperCase() + '</option>');
                        }
                    }
                }
            }
        })
    }
});
//=========================================================================================
function showContent() {
    element = document.getElementById("content");
    check1 = document.getElementById("toggle7");
    check2 = document.getElementById("toggl67");
    check3 = document.getElementById("toggle8");
    if (check1.checked || check2.checked || check3.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}
//=========================================================================================
//???????????????????????????????????
function cargar_ramo() {
    $.ajax({
        method: 'get',
        //url: "/ajax/ramo/" + op, //Servidor
        url: "/ajax/ramo/", //localhost
        error: function(response) {
            $("#ramo").append('<option >error</option>');
        },
        success: function(response) {
            $("#ramo").empty();
            var length = response.length;
            for (i = 0; i < length; i++) {
                $("#ramo").append('<option disabled selected>---</option>');
                for (j = 0; j < 500; j++) {
                    if (response[i][j]['ramo'] != '') {
                        $("#ramo").append('<option value="' + response[i][j]['id'] + '">' + response[i][j]['ramo'] + '</option>');
                    }
                }
            }
        }
    })
}

function cargar_ramo_egreso() {
    $.ajax({
        method: 'get',
        //url: "/ajax/ramo/" + op, //Servidor
        url: "/ajax/ramoegreso/", //localhost
        error: function(response) {
            $("#ramo").append('<option >error</option>');
        },
        success: function(response) {
            $("#ramo_egreso").empty();
            var length = response.length;
            for (i = 0; i < length; i++) {
                $("#ramo_egreso").append('<option disabled selected>---</option>');
                for (j = 0; j < 500; j++) {
                    if (response[i][j]['ramo'] != '') {
                        $("#ramo_egreso").append('<option value="' + response[i][j]['id'] + '">' + response[i][j]['ramo'] + '</option>');
                    }
                }
            }
        }
    })
}
//=========================================================================================
$('document').ready(function() {
    // De ramo a subramo
    $('#ramo').change(function() {
        var op = $("#ramo option:selected").val();
        cargar_denominacion_ramo(op);
        cargar_subramo(op);
        document.getElementById("monto").setAttribute("readonly", "on");
    });
    // De ramo a subramo
    $('#ramo_egreso').change(function() {
        var op = $("#ramo_egreso option:selected").val();
        cargar_denominacion_ramo(op);
        cargar_subramo(op);
        document.getElementById("monto").setAttribute("readonly", "on");
    });
    // De subramo a especifico
    $('#subramo').change(function() {
        var op = $("#subramo option:selected").val();
        cargar_denominacion_subramo(op);
        cargar_especifico(op);
        document.getElementById("monto").setAttribute("readonly", "on");
    });
    // De especifico a subespecifico
    $('#especifico').change(function() {
        var op = $("#especifico option:selected").val();
        cargar_denominacion_especifico(op);
        cargar_subespecifico(op);
        document.getElementById("ordinal").removeAttribute("readonly");
        document.getElementById("monto").removeAttribute("readonly");
    });
    $('#subespecifico').change(function() {
        var op = $("#subespecifico option:selected").val();
        cargar_denominacion_subespecifico(op);
        document.getElementById("monto").removeAttribute("readonly");
        document.getElementById("ordinal").removeAttribute("readonly");
    });

    function cargar_denominacion_ramo(op) {
        var op = op;
        $.ajax({
            method: 'get',
            //url: "/ajax/denominacionramo/" + op, //Servidor
            url: "/ajax/denominacionramo/" + op, //localhost
            success: function(response) {
                $("#denominacion").val(response[0][0]['descripcion']);
            }
        })
    }

    function cargar_subramo(op) {
        var op = op;
        $.ajax({
            method: 'get',
            //url: "/ajax/subramo/" + op, //Servidor
            url: "/ajax/subramo/" + op, //localhost
            error: function(response) {
                $("#subramo").append('<option >error</option>');
            },
            success: function(response) {
                $("#subramo").empty();
                var length = response.length;
                for (i = 0; i < length; i++) {
                    $("#subramo").append('<option disabled selected>--</option>');
                    for (j = 0; j < 500; j++) {
                        if (response[i][j]['subramo'] != '') {
                            $("#subramo").append('<option value="' + response[i][j]['id'] + '">' + response[i][j]['sub_ramo'] + '</option>');
                        }
                    }
                }
            }
        })
    }

    function cargar_denominacion_subramo(op) {
        var op = op;
        $.ajax({
            method: 'get',
            //url: "/ajax/denominacionsubramo/" + op, //Servidor
            url: "/ajax/denominacionsubramo/" + op, //localhost
            success: function(response) {
                $("#denominacion").val(response[0][0]['descripcion']);
            }
        })
    }

    function cargar_especifico(op) {
        var op = op;
        $.ajax({
            method: 'get',
            //url: "/ajax/especifico/" + op, //Servidor
            url: "/ajax/especifico/" + op, //localhost
            error: function(response) {
                $("#especifico").append('<option >error</option>');
            },
            success: function(response) {
                $("#especifico").empty();
                var length = response.length;
                for (i = 0; i < length; i++) {
                    $("#especifico").append('<option disabled selected>--</option>');
                    for (j = 0; j < 500; j++) {
                        if (response[i][j]['especifico'] != '') {
                            $("#especifico").append('<option value="' + response[i][j]['id'] + '">' + response[i][j]['especifico'] + '</option>');
                        }
                    }
                }
            }
        })
    }

    function cargar_denominacion_especifico(op) {
        var op = op;
        $.ajax({
            method: 'get',
            //url: "/ajax/denominacionespecifico/" + op, //Servidor
            url: "/ajax/denominacionespecifico/" + op, //localhost
            success: function(response) {
                $("#denominacion").val(response[0][0]['descripcion']);
            }
        })
    }

    function cargar_subespecifico(op) {
        var op = op;
        $.ajax({
            method: 'get',
            //url: "/ajax/subespecifico/" + op, //Servidor
            url: "/ajax/subespecifico/" + op, //localhost
            error: function(response) {
                $("#subespecifico").append('<option >error</option>');
            },
            success: function(response) {
                $("#subespecifico").empty();
                var length = response.length;
                for (i = 0; i < length; i++) {
                    $("#subespecifico").append('<option disabled selected>--</option>');
                    for (j = 0; j < 500; j++) {
                        if (response[i][j]['subespecifico'] != '') {
                            $("#subespecifico").append('<option value="' + response[i][j]['id'] + '">' + response[i][j]['sub_especifico'] + '</option>');
                        }
                    }
                }
            }
        })
    }

    function cargar_denominacion_subespecifico(op) {
        var op = op;
        $.ajax({
            method: 'get',
            //url: "/ajax/denominacionsubespecifico/" + op, //Servidor
            url: "/ajax/denominacionsubespecifico/" + op, //localhost
            success: function(response) {
                if (response[0][0]['descripcion'] == null) {} else {
                    $("#denominacion").val(response[0][0]['descripcion']);
                }
            }
        })
    }
    $("#ordinal").blur(function() {
        document.getElementById("denominacion").removeAttribute("readonly");
    });
    //====================================================================================================
    //========= PRECARGA DATOS EN COMPRA - REQUISICION ====================
    //====================================================================================================
    $('#id_partida_egreso').change(function() {
        var op = $("#id_partida_egreso option:selected").val();
        $("#part").val(op);
        var s = $("#sectorx").val();
        var p = $("#programax").val();
        var a = $("#actividadx").val();
        if (s == null || p == null || a == null) {
            s = 0;
            p = 0;
            a = 0;
        }
        cargar_disponibilidad(op, s, p, a);
    });

    function cargar_disponibilidad(op, s, p, a) {
        var op = op;
        $.ajax({
            method: 'get',
            //url: "/ajax/descripcionpartida2102/" + op, //Servidor
            url: "/ajax/disponibilidadpartidaegreso/" + op + "/" + s + "/" + p + "/" + a, //localhost 
            success: function(response) {
                $("#descripcion_partida").val(response[0][0]['ordinald_denominacion']);
                $("#monto_disponible_egreso").val(((response[0][0]['monto_presupuesto'] + response[0][0]['monto_incremento']) - (response[0][0]['monto_disminuido']) - (response[0][0]['monto_comprometido_nomina'] + response[0][0]['monto_comprometido_compra'])).toFixed(2));
                if (response[0][0]['monto_disponible'] != 0) {
                    document.getElementById("monto_comprometer_egreso").removeAttribute("readonly");
                } else {
                    document.getElementById("monto_comprometer_egreso").setAttribute("readonly", "on");
                }
            }
        })
    }
    //====================================================================================================
    //========= PRECARGA DATOS EN EJECUCION  ====================
    //====================================================================================================
    $('#id_partida').change(function() {
        var op = $("#id_partida option:selected").val();
        cargar_descripcion_partida2102(op);
    });

    function cargar_descripcion_partida2102(op) {
        var op = op;
        $.ajax({
            method: 'get',
            //url: "/ajax/descripcionpartida2102/" + op, //Servidor
            url: "/ajax/descripcionpartida2102/" + op, //localhost
            success: function(response) {
                $("#descripcion_partida").val(response[0][0]['ordinald_denominacion']);
                //$("#monto_disponible").val(response[0][0]['monto_ordinald']);
            }
        })
    }
    //====================================================================================================
    //========= PRECARGA DATOS EN EJECUCION TRANSFERENCIA  ====================
    //====================================================================================================
    $('#us').change(function() {
        cargar_partidas_us();
    });

    function cargar_partidas_us(op) {
        var op = $("#us option:selected").val();
        $.ajax({
            method: 'get',
            //url: "/ajax/descripcionpartida2102/" + op, //Servidor
            url: "/ajax/cargarpartidasus/" + op, //localhost
            success: function(response) {
                $("#id_partida").empty();
                var length = response.length;
                for (i = 0; i < length; i++) {
                    $("#id_partida").append('<option disabled selected>--Seleccione--</option>');
                    for (j = 0; j < 500; j++) {
                        if (response[i][j]['id_partida'] != '') {
                            $("#id_partida").append('<option value="' + response[i][j]['id'] + '">' + response[i][j]['concatenado'] + '</option>');
                        }
                    }
                }
            }
        })
    }
    //====================================================================================================
    //========= PRECARGA DATOS EN ORDENAMIENTO  ====================
    //====================================================================================================
    $('#tipo_calculo').change(function() {
        var op = $("#tipo_calculo option:selected").val();
        var neto = $("#neto").val();
        var req = $("#id_requisicion").val();
        if (op == 1) {
            document.getElementById("tipo_porcentaje").setAttribute("readonly", "on");
            $("#bs").val(neto);
        } else if (op == 12) {
            document.getElementById("tipo_porcentaje").setAttribute("readonly", "on");
            $("#bs").val(((neto * 0.16)).toFixed(2));
        } else if (op == 14) {
            document.getElementById("tipo_porcentaje").removeAttribute("readonly");
            $("#bs").val((neto * 0.16).toFixed(2));
        } else {
            document.getElementById("tipo_porcentaje").removeAttribute("readonly");
            $("#bs").val(0);
            carga_calculo(req, op)
        }
    });

    function carga_calculo(req, op) {
        var req = req;
        $.ajax({
            method: 'get',
            //url: "/ajax/baseimponible/" + req, //Servidor
            url: "/ajax/deducciones/" + req + "/" + op, //localhost
            success: function(response) {
                $("#bs").val(response[0].toFixed(2));
            }
        })
    }
    //====================================================================================================
    $('#tipo_porcentaje').change(function() {
        var op = $("#tipo_porcentaje option:selected").val();
        var neto = $("#neto").val();
        var bs = $("#bs").val();
        if (bs != 0 && op != 1) {
            porcentaje_bs(op, bs);
        } else if (neto != 0 && op != 1) {
            porcentaje_neto(op, neto);
        } else {
            porcentaje(op, neto);
        }
    });

    function porcentaje_bs(op, bs) {
        var op = op;
        var bs = bs;
        total = (bs * op).toFixed(2);
        $("#bs").val(total);
    }

    function porcentaje_neto(op, neto) {
        var op = op;
        var neto = neto;
        total = (neto * op).toFixed(2);
        $("#bs").val(total);
    }

    function porcentaje(op, neto) {
        var op = op;
        var neto = neto;
        total = (neto * op).toFixed(2);
        $("#bs").val(total);
    }
    //====================================================================================================
    //========= PRECARGA DATOS EN TESORERIA = TRANSFERENCIAS  ====================
    //====================================================================================================
    $('#id_operacion').change(function() {
        var op = $("#id_operacion option:selected").val();
        if (op == 2) {
            document.getElementById("n_referencia").setAttribute("readonly", "on");
            document.getElementById("n_cheque").removeAttribute("readonly");
            document.getElementById("n_control").removeAttribute("readonly");
            document.getElementById("numero_cuenta_credito").setAttribute("readonly", "on");
            document.getElementById("numero_cuenta_destino").removeAttribute("readonly");
            debito();
        } else if (op == 1 || op == 3 || op == 4) {
            document.getElementById("n_cheque").setAttribute("readonly", "on");
            document.getElementById("n_control").setAttribute("readonly", "on");
            document.getElementById("n_referencia").removeAttribute("readonly");
            document.getElementById("numero_cuenta_credito").removeAttribute("readonly");
            document.getElementById("numero_cuenta_destino").removeAttribute("readonly");
            credito();
            credito2();
        } else {
            document.getElementById("n_cheque").setAttribute("readonly", "on");
            document.getElementById("n_control").setAttribute("readonly", "on");
            document.getElementById("n_referencia").setAttribute("readonly", "on");
            document.getElementById("numero_cuenta_destino").setAttribute("readonly", "on");
            $("#numero_cuenta_credito").empty();
            $("#numero_cuenta_credito").append('<option >--Seleccione Operacion--</option>');
            $("#numero_cuenta_destino").empty();
            $("#numero_cuenta_destino").append('<option >--Seleccione Operacion--</option>');
        }
        document.getElementById("pago").removeAttribute("readonly");
    });

    function credito() {
        $.ajax({
            method: 'get',
            //url: "/ajax/descripcionpartida2102/" + op, //Servidor
            url: "/ajax/credito/", //localhost
            success: function(response) {
                $("#numero_cuenta_credito").empty();
                var length = response.length;
                for (i = 0; i < length; i++) {
                    $("#numero_cuenta_credito").append('<option disabled selected>--Seleccione--</option>');
                    for (j = 0; j < 500; j++) {
                        if (response[i][j]['id_partida'] != '') {
                            $("#numero_cuenta_credito").append('<option value="' + response[i][j]['numero_cuenta'] + '">' + response[i][j]['nombre_banco'].toUpperCase() + ' - ' + response[i][j]['numero_cuenta'] + '</option>');
                        }
                    }
                }
            }
        })
    }

    function credito2() {
        $.ajax({
            method: 'get',
            //url: "/ajax/descripcionpartida2102/" + op, //Servidor
            url: "/ajax/credito2/", //localhost
            success: function(response) {
                $("#numero_cuenta_destino").empty();
                var length = response.length;
                for (i = 0; i < length; i++) {
                    $("#numero_cuenta_destino").append('<option disabled selected>--Seleccione--</option>');
                    for (j = 0; j < 500; j++) {
                        if (response[i][j]['id_partida'] != '') {
                            $("#numero_cuenta_destino").append('<option value="' + response[i][j]['numero_cuenta'] + '">' + response[i][j]['nombre_banco'].toUpperCase() + ' - ' + response[i][j]['numero_cuenta'] + '</option>');
                        }
                    }
                }
            }
        })
    }

    function debito() {
        $.ajax({
            method: 'get',
            //url: "/ajax/descripcionpartida2102/" + op, //Servidor
            url: "/ajax/credito/", //localhost
            success: function(response) {
                $("#numero_cuenta_destino").empty();
                $("#numero_cuenta_credito").empty();
                var length = response.length;
                for (i = 0; i < length; i++) {
                    $("#numero_cuenta_destino").append('<option disabled selected>--Seleccione--</option>');
                    for (j = 0; j < 500; j++) {
                        if (response[i][j]['id_partida'] != '') {
                            $("#numero_cuenta_destino").append('<option value="' + response[i][j]['numero_cuenta'] + '">' + response[i][j]['nombre_banco'].toUpperCase() + ' - ' + response[i][j]['numero_cuenta'] + '</option>');
                        }
                    }
                }
            }
        })
    }
    $('#numero_cuenta_destino').change(function() {
        var op = $("#numero_cuenta_destino option:selected").val();
        datos_cuenta(op);
    });

    function datos_cuenta() {
        $.ajax({
            method: 'get',
            //url: "/ajax/descripcionpartida2102/" + op, //Servidor
            url: "/ajax/datoscuenta/", //localhost
            success: function(response) {
                for (i = 0; i < length; i++) {
                    $("#numero_cuenta_credito").append('<option disabled selected>--Seleccione--</option>');
                    for (j = 0; j < 500; j++) {
                        if (response[i][j]['id_partida'] != '') {
                            $("#numero_cuenta_credito").append('<option value="' + response[i][j]['numero_cuenta'] + '">' + response[i][j]['nombre_banco'].toUpperCase() + ' - ' + response[i][j]['numero_cuenta'] + '</option>');
                        }
                    }
                }
            }
        })
    }
    //=====================================================================
    $('#numero_cuenta_destino').change(function() {
        var op = $("#numero_cuenta_destino option:selected").val();
        cargar_cuenta(op);
    });

    function cargar_cuenta(op) {
        var op = op;
        $.ajax({
            method: 'get',
            //url: "/ajax/cargarcuenta/" + op, //Servidor
            url: "/ajax/cargarcuenta/" + op, //localhost
            error: function(response) {
                $("#nombre").val('Error');
                $("#cedula").val('Error');
            },
            success: function(response) {
                $("#nombre").val(response[0]['representante']);
                $("#cedula").val(response[0]['cedula']);
            }
        })
    }
    $('#numero_cuenta_credito').change(function() {
        var op = $("#numero_cuenta_credito option:selected").val();
        cargar_cuenta_credito(op);
    });

    function cargar_cuenta_credito(op) {
        var op = op;
        $.ajax({
            method: 'get',
            //url: "/ajax/cargarcuenta/" + op, //Servidor
            url: "/ajax/cargarcuentacredito/" + op, //localhost
            error: function(response) {
                $("#disponibilidad").val('Error');
            },
            success: function(response) {
                $("#disponibilidad").val(((response[0]['saldo']) + (response[0]['creditos'])) - (response[0]['debitos']));
                $("#disponibilidad_moneda").val(new Intl.NumberFormat("de-DE").format(((response[0]['saldo']) + (response[0]['creditos'])) - (response[0]['debitos'])));
            }
        })
    }
    //==================================================================================================
    $('#pago').change(function() {
        var op = $("#pago option:selected").val();
        var req = $("#requisicion").val();
        if (op != '') {
            document.getElementById("descripcion").removeAttribute("readonly");
            if (op == 'BASE IMPONIBLE') {
                basei(req);
                document.getElementById("monto").setAttribute("readonly", "on");
            } else if (op == 'IMPUESTO') {
                inpuesto(req);
                document.getElementById("monto").setAttribute("readonly", "on");
            } else {
                document.getElementById("monto").removeAttribute("readonly");
                $("#monto").val('');
            }
        } else {
            document.getElementById("descripcion").setAttribute("readonly", "on");
        }
    });

    function basei(req) {
        var req = req;
        $.ajax({
            method: 'get',
            //url: "/ajax/baseimponible/" + req, //Servidor
            url: "/ajax/baseimponible/" + req, //localhost
            success: function(response) {
                $("#monto").val(response[0].toFixed(2));
            }
        })
    }

    function inpuesto(req) {
        var req = req;
        $.ajax({
            method: 'get',
            //url: "/ajax/inpuesto/" + req, //Servidor
            url: "/ajax/inpuesto/" + req, //localhost
            success: function(response) {
                $("#monto").val(response[0].toFixed(2));
            }
        })
    }
    //====================================================================================================
    //========= PRECARGA DATOS EN RRHH = Requisicion de Servicios  ====================
    //====================================================================================================
    $('#nomina').change(function() {
        var op = $("#nomina option:selected").val();
        if (op != '') {
            document.getElementById("tp").setAttribute("readonly", "on");
            document.getElementById("mes").setAttribute("readonly", "on");
            document.getElementById("quincena").setAttribute("readonly", "on");
            nomina(op);
        } else {
            document.getElementById("tp").removeAttribute("readonly");
            $('#tp option').prop('selected', function() {
                return this.defaultSelected;
            });
            document.getElementById("mes").setAttribute("readonly", "on");
            $('#mes option').prop('selected', function() {
                return this.defaultSelected;
            });
            document.getElementById("quincena").setAttribute("readonly", "on");
            $('#quincena option').prop('selected', function() {
                return this.defaultSelected;
            });
        }
    });
    $('#tp').change(function() {
        var op = $("#tp option:selected").val();
        if (op != '') {
            document.getElementById("nomina").setAttribute("readonly", "on");
            document.getElementById("mes").removeAttribute("readonly");
            document.getElementById("quincena").removeAttribute("readonly");
            nomina(op);
        } else {
            document.getElementById("nomina").removeAttribute("readonly");
            document.getElementById("mes").setAttribute("readonly", "on");
            $('#mes option').prop('selected', function() {
                return this.defaultSelected;
            });
            document.getElementById("quincena").setAttribute("readonly", "on");
            $('#quincena option').prop('selected', function() {
                return this.defaultSelected;
            });
        }
    });

    function nomina(op) {
        var op = op;
        $.ajax({
            method: 'get',
            //url: "/ajax/baseimponible/" + req, //Servidor
            url: "/ajax/datosnomina/" + op, //localhost
            success: function(response) {
                document.getElementById("tp").selectedIndex = response[0][0]['id_tipo_personal'];
                document.getElementById("mes").selectedIndex = response[0][0]['mes'];
                document.getElementById("quincena").selectedIndex = response[0][0]['quincena'];
            }
        })
    }
});